<?php

class Task
{

    protected static $url;
    public static $response;
    protected static $task_model;


    public function __construct($url = null)
    {
        include('model/Task_model.php');

        $this->task_model = new Task_model;
    }




    //------------ 1 ----------------------------

    public function leapYear($year)
    {

        switch ($year) {
            case $year % 400 == 0:
                return $year . " is a leap year.";
                break;
            case $year % 100 == 0:
                return $year . " is not a leap year.";
                break;
            case $year % 4 == 0:
                return $year . " is a leap year.";
                break;
            default:
                return $year . " is not a leap year.";
        }
    }

    //------------ 2 ----------------------------

    public function sortNumbers($numbers, $unique = false)
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

    public function getNumbers()
    {
        return $this->task_model->getDudes();
    }

    //------------ 3 ----------------------------

    public function arraySortByColumn(&$arr, $elements = false)
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

    public function getDudes()
    {
        return $this->task_model->getDudes();
    }

    //------------ 4 ----------------------------

    public function convertCsvToTsv($dir, $filename, $csv_path)
    {

        $filename = $filename . '.tsv';

        while (file_exists($dir . '/' . $filename)) {

            $cleared_name =  str_replace(".tsv", "", $filename);

            $filename = $cleared_name . '_copy.tsv';

            while (file_exists($dir . '/' . $filename)) {

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



    public function Encipher($input, $key)
    {
        $output = "";

        $inputArr = str_split($input);
        foreach ($inputArr as $ch)
            $output .= Cipher($ch, $key);

        return $output;
    }

    public function Decipher($input, $key)
    {
        return Encipher($input, 26 - $key);
    }

    public function Cipher($ch, $key)
    {
        if (!ctype_alpha($ch))
            return $ch;

        $offset = ord(ctype_upper($ch) ? 'A' : 'a');
        return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
    }
}
