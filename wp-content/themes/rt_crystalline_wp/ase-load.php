<?php
/**
 * @version   1.5 August 19, 2014
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */


$filename =  $_FILES['ase-file']['tmp_name'];
$codes = ASEDecoder::decodeFile($filename);
foreach($codes as $code) {

}
$json = '{"colors":['.implode(",", $codes).']}';

echo $json;

/**
 * A class to decode Adobe Swatch Exchange files
 */
class ASEDecoder {

    function decodeFile($file) {
        $swatches = array();
        $fp = fopen($file, "rb");

        // get the header;
        $data = fread($fp, 4); // 4 is the byte size of a whole on a 32-bit PC.
        if ($data != "ASEF") {
            return $swatches;
        }

        // get the ase version number
        $data = fread($fp, 4);
        $header_version = unpack("n*", $data);
        $version = $header_version[1] . "." . $header_version[2];

        // get the number of chunks
        $data = fread($fp, 4);
        $chunk_count_array = unpack("N", $data);
        $chunk_count = $chunk_count_array[1];
        for ($chunk = 0; $chunk < $chunk_count; $chunk++) {
            $data = fread($fp, 4);
            $chunk_type_array = unpack("H*", $data);
            $chunk_type = $chunk_type_array[1];

            $data = fread($fp, 2);
            $chunk_size_array = unpack("n", $data);
            $chunk_size = $chunk_size_array[1] - 2;

            $data = fread($fp, 2);
            $chuck_char_count_array = unpack("n", $data);
            $chunk_char_count = $chuck_char_count_array[1];

            switch ($chunk_type) {
                case "c0010000": // pallate name chunk
                    $data = fread($fp, $chunk_char_count * 2);
                    $name = utf8_decode($data);
                    break;
                case "00010000": // swatch chunk
                case "00000000": // final chunk
                    $data = fread($fp, $chunk_char_count * 2);
                    $color_title = utf8_decode($data);
                    $data = fread($fp, 4);
                    $color_space = trim($data);
                    switch ($color_space) {
                        case "RGB":
                            $r = ASEDecoder::_dec2hex((int) round((ASEDecoder::_toFloat(fread($fp, 4)) * 255), 0));
                            $g = ASEDecoder::_dec2hex((int) round((ASEDecoder::_toFloat(fread($fp, 4)) * 255), 0));
                            $b = ASEDecoder::_dec2hex((int) round((ASEDecoder::_toFloat(fread($fp, 4)) * 255), 0));
                            break;
                        case "CMYK":
                            $c = ASEDecoder::_toFloat(fread($fp, 4));
                            $m = ASEDecoder::_toFloat(fread($fp, 4));
                            $y = ASEDecoder::_toFloat(fread($fp, 4));
                            $k = ASEDecoder::_toFloat(fread($fp, 4));
                            $out = ASEDecoder::_cmyk_to_rgb($c, $m, $y, $k);
                            $r = $out->r;
                            $g = $out->g;
                            $b = $out->b;
                            break;
                        case "GRAY":
                            $val = dechex((int) round((ASEDecoder::_toFloat(fread($fp, 4)) * 255), 0));
                            $r = $val;
                            $g = $val;
                            $b = $val;
                            break;
                        case "LAB":
                            $L = ASEDecoder::_toFloat(fread($fp, 4));
                            $a = ASEDecoder::_toFloat(fread($fp, 4));
                            $b = ASEDecoder::_toFloat(fread($fp, 4));
                            $out = ASEDecoder::_lab_to_rgb($L, $a, $b);
                            $r = $out->r;
                            $g = $out->g;
                            $b = $out->b;
                            break;
                        default:
                            $data = fread($fp, $chunk_size - 2);
                            break;
                    }
                    $data = fread($fp, 2); // end of chunk
                    $swatches[] = '"#' . $r . $g . $b . '"';
                    break;
            }
        }
        fclose($fp);
        return $swatches;
    }

    function _toFloat($data) {
        $t = unpack("C*", pack("S*", 256));
        if ($t[1] == 1) {
            $a = unpack("f*", $data);
        } else {
            $a = unpack("f*", strrev($data));
        }
        return (float) $a[1];
    }


    function _cmyk_to_rgb($c, $m, $y, $k) {
        $o = new stdclass();
        $r = 1 - ($c * (1 - $k)) - $k  ;
        $g = 1 - ($m * (1 - $k)) - $k  ;
        $b = 1 - ($y * (1 - $k)) - $k ;
        $o->r = ASEDecoder::_dec2hex((int) round($r * 255)) ;
        $o->g = ASEDecoder::_dec2hex((int) round($g * 255)) ;
        $o->b = ASEDecoder::_dec2hex((int) round($b * 255)) ;
        return $o ;
    }


    function _lab_to_rgb($L, $a, $b) {
        $o = new stdclass();
        $ref_X = 95.047;
        $ref_Y = 100.000;
        $ref_Z = 108.883;

        $var_Y = ($L + 16) / 116;
        $var_X = $a / 500 + $var_Y;
        $var_Z = $var_Y - $b / 200;

        if ($var_Y ^ 3 > 0.008856) $var_Y = $var_Y ^ 3;
        else                      $var_Y = ($var_Y - 16 / 116) / 7.787;
        if ($var_X ^ 3 > 0.008856) $var_X = $var_X ^ 3;
        else                      $var_X = ($var_X - 16 / 116) / 7.787;
        if ($var_Z ^ 3 > 0.008856) $var_Z = $var_Z ^ 3;
        else                      $var_Z = ($var_Z - 16 / 116) / 7.787;

        $X = $ref_X * $var_X; //ref_X =  95.047     Observer= 2�, Illuminant= D65
        $Y = $ref_Y * $var_Y; //ref_Y = 100.000
        $Z = $ref_Z * $var_Z; //ref_Z = 108.883

        $var_X = $X / 100; //X from 0 to  95.047      (Observer = 2�, Illuminant = D65)
        $var_Y = $Y / 100; //Y from 0 to 100.000
        $var_Z = $Z / 100; //Z from 0 to 108.883

        $var_R = $var_X * 3.2406 + $var_Y * - 1.5372 + $var_Z * - 0.4986;
        $var_G = $var_X * - 0.9689 + $var_Y * 1.8758 + $var_Z * 0.0415;
        $var_B = $var_X * 0.0557 + $var_Y * - 0.2040 + $var_Z * 1.0570;

        if ($var_R > 0.0031308) $var_R = 1.055 * ($var_R ^ (1 / 2.4)) - 0.055;
        else                     $var_R = 12.92 * $var_R;
        if ($var_G > 0.0031308) $var_G = 1.055 * ($var_G ^ (1 / 2.4)) - 0.055;
        else                     $var_G = 12.92 * $var_G;
        if ($var_B > 0.0031308) $var_B = 1.055 * ($var_B ^ (1 / 2.4)) - 0.055;
        else                     $var_B = 12.92 * $var_B;

        $o->r = ASEDecoder::_dec2hex((int) round($var_R * 255));
        $o->g = ASEDecoder::_dec2hex((int) round($var_G * 255));
        $o->b = ASEDecoder::_dec2hex((int) round($var_B * 255));

        return $o;
    }


    function _dec2hex($bin) {
        $ret = "";
        $string = dechex($bin);
        if (strlen($string) == 1) {
            $ret = "0";
        }
        $ret .= $string;
        return $ret;
    }
}


