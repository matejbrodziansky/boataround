<?php


//A function named ‘year_check’ is defined that takes a year as a parameter.
// It checks to see if the year can be divided by 400 or 4 completely, if yes, 
//it means it is a leap year. Otherwise, it is a leap year.

//------------ 1 ----------------------------
function leapYear($year)
{
    
    if ($year % 400 == 0 || $year % 4 == 0)
        echo ($year. " is a leap year");
    else if ($year % 100 == 0)
        echo ($year. " is not a leap year");
    else
        echo ($year. " is not a leap year");
}

//------------ 2 ----------------------------

function sortNumbers($numbers, $unique = false)
{

    if ($unique === True) {
        $numbers = array_unique($numbers);
    }

    sort($numbers);
    foreach ($numbers as $number) {
        echo '<p>';
        echo $number;
        echo '</p>';
    }
    echo 'The smallest number is ' . min($numbers);
    echo '<br>';
    echo 'The biggest number is ' . max($numbers);
}

//------------ 3 ----------------------------

function arraySortByColumn(&$arr, $elements = false)
{
    $columns = array_column($arr, 'age');
    array_multisort($columns, SORT_ASC, $arr);

    if ($elements === true) {
        foreach ($arr as $a) {
            echo '<p>' . $a['name'] . ' (' . $a['age'] . ')</p>';
        }
    } else {
        return $arr;
    }
}


//------------ 4 ----------------------------

function convertCsvToTsv($dir, $filename, $csv_path)
{

    $filename = $filename . '.tsv';

    while (file_exists($dir.'/' . $filename)) {

        $cleared_name =  str_replace(".tsv", "", $filename);

        $filename = $cleared_name . '_copy.tsv';

        while (file_exists($dir.'/' . $filename)) {

            if (preg_match_all('/\d+/', $filename, $numbers))
                $lastnum = end($numbers[0]);

            $lastnum += 1;

            $filename = $cleared_name . '_copy_' . $lastnum . '.tsv';
        };

        if (preg_match_all('/\d+/', $filename, $numbers))
            $lastnum = end($numbers[0]);
    }

    $csv = file($csv_path);

    foreach ($csv as $key => $c) {

        $csv_two[$key] = str_replace(',', "\t", $c);

        isDir($dir);

        file_put_contents($dir . '/' . $filename, $csv_two[$key], FILE_APPEND);
    }
    echo $csv_path . ' was succesfuly converted to -> ' . $dir . '/' . $filename . '  .';
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
