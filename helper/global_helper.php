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


