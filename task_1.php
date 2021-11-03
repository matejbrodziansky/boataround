<?php

include 'views/_patrials/header.php';

?>


<div class="container text-left task_1 p-4 mt-5 mb-5">

    <?php

    //------ 1 ---------------------
    spaces('1. Leap year');

    ?>

    <form method="post">
        <div class="row col-sm-8 col-md-6 col-lg-4">
            <div class="col">
                <input type="number" name="year" placeholder="Ented a year"><br><br>
            </div>
            <div class="col">
                <input class="btn btn-success btn-sm" type="submit" name="submit" value="Submit">
            </div>
        </div>
    </form>

    <?php

    if ($_POST['year'] && !empty($_POST['year'])) {
        $year = $_POST['year'];
        echo $task->leapYear($year);
    } else {
        echo 'Wrong & empty';
    }

    spaces();

    //------ 2 ---------------------

    spaces('2. Sort array');


    $task->sortNumbers($numbers, True);

    spaces();


    //------ 3 ---------------------

    spaces('3. Sort multidimensional array');

    pre_r(
        $task->arraySortByColumn($task->getDudes(), true)
    );

    spaces();

    //------ 4---------------------

    spaces('4. File converter');

    //arg 1 dir to converted data, arg 2  name of converted file, arg 3 data witch will be converted
    $task->convertCsvToTsv('converted_data', 'data', 'data/data.csv');

    spaces();


    //------ 5 ---------------------
    spaces('5 . Ceasar cipher');


    $enc_text = $task->Encipher($text, 5);
    $dec_text = $task->Decipher($enc_text, 5);

    pre_r($enc_text);
    pre_r($dec_text);

    spaces();

    //------ 5 ---------------------

    spaces('7 . Sum of prime (not completed task )');

    ?>
    <form name="primenumber">
        Number
        <input type="number" name="number" size="10">
        <input type="button" value="Is prime number ? " onclick="test(this.form)">
        <input type="text" name="resp" size="6" readonly>
    </form>

    <?php

    include('views/_patrials/footer.php');

    ?>

</div>