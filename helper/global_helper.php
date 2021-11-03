<?php


//------------ Just helpers ----------------------------
function pre_r($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function spaces($text = null)
{
    if (isset($text) && !empty($text)) {
        echo '<h3>' . $text . '</h3>';
        echo '<br>';
    } else {

        echo '<br>';
        echo '<hr>';
    }
}

function isDir($dir)
{
    if (!is_dir($dir . '/')) {
      return  mkdir($dir . '/');
    }
}

function discount($old_price, $percent){
    
    return $old_price - ($old_price * $percent) / 100;

}

//------------ 5 ----------------------------

function Cipher($ch, $key)
{
    if (!ctype_alpha($ch))
        return $ch;

    $offset = ord(ctype_upper($ch) ? 'A' : 'a');
    return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
}

function Encipher($input, $key)
{
    $output = "";

    $inputArr = str_split($input);
    foreach ($inputArr as $ch)
        $output .= Cipher($ch, $key);

    return $output;
}

function Decipher($input, $key)
{
    return Encipher($input, 26 - $key);
}






