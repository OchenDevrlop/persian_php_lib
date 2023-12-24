<?php
    function chap_kon($string, ...$args) {
        $resault = $string;
        for ($i = 0; $i < count($args); $i++){
            $resault .= $args[$i];
        }
        echo $resault;
    }
    function chap_kon_tamam($string, ...$args) {
        $resault = $string;
        for ($i = 0; $i < count($args); $i++){
            $resault .= $args[$i];
        }
        echo $resault . "<br>";
    }
    function dump_kon(string $string){
        var_dump($string);
    }
    function chap_array(array $array){
        print_r($array);
    }
    function chasbandan(string $string_1, string $string_2, string ...$string){
        $resault = $string_1 . $string_2;
        for($i = 0; $i < count($string); $i++){
            $resault .= $string[$i];
        }
        return $resault;
    }
    function jam_kon(float $number_1, float $number_2, float ...$number){
        $resault = $number_1 + $number_2;
        for($i = 0; $i < count($number); $i++){
            $resault += $number[$i];
        }
        return $resault;
    }
    function zarb_kon(float $number_1, float $number_2, float ...$number){
        $resault = $number_1 * $number_2;
        for($i = 0; $i < count($number); $i++){
            $resault *= $number[$i];
        }
        return $resault;
    }
    function menha_kon(float $number_1, float $number_2, float ...$number){
        $number_1 -= $number_2;
        for($i = 0; $i < count($number); $i++){
            $number_1 -= $number[$i];
        }
        return $number_1;
    }
    function tagsim_kon(float $number_1, float $number_2, float ...$number){
        $number_1 /= $number_2;
        for($i = 0; $i < count($number); $i++){
            $number_1 /= $number[$i];
        }
        return $number_1;
    }
    function khat_jadid(){
        echo '<br>';
    }
    function redirect($url){
        $urlFixed = filter_var($url, FILTER_VALIDATE_URL);
        if($urlFixed){
            header("Location: $url");
            return;
        }
        throw new UnexpectedValueException("آدرس وارد شده صحیح نیست، آدرس وارد شده: $url");
    }
    function shoru_code(){
        echo '<!DOCTYPE html> <html lang="en"> <head>     <meta charset="UTF-8">     <meta name="viewport" content="width=device-width, initial-scale=1.0">     <title>Farsi PHP Made By Ochen</title><style>body{font-family: IranSansX;}</style></head> <body>';
    }
    function payan_code(){
        echo '</body></html>';
    }