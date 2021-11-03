<?php
require './app/config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/boostrap.minn.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Boataround task</title>
    <link rel="shortcut icon"  href="./image/icon_1.png">
</head>

<body>
    <nav class="navbar navbar-expand-sm  ">
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="toggler-icon fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link p-3<?php if ($selected =  basename($url) == 'home'  ? 'selected' : '')  ?> <?= $selected ?>" href="index.php"><i class="fas fa-home"></i></a>
                <div class="task-btn" data-hover="1. Leap year, 2. Sort arry, 3. Sort multidimensional array, 4. File converter, 5. Ceasar cipher, 7. Sum of primes">
                    <a class="nav-item nav-link p-3 <?php if ($selected =  basename($url) == 'task_1.php'  ? 'selected' : '')  ?> <?= $selected ?>" href="task_1.php"><i class="fas fa-tasks"></i></a>
                </div>
                <div class="api-btn" data-hover="6. Data scraping (API)">
                    <a  class="nav-item nav-link p-3 <?php if ($selected =  basename($url) == 'task_2.php'  ? 'selected' : '')  ?> <?= $selected ?>" href="task_2.php"><i class="fas fa-anchor"></i> </a>
                </div>
                <div class="calc-btn" data-hover="Calculate">
                    <a  class="nav-item nav-link p-3 <?php if ($selected =  basename($url) == 'calc.php'  ? 'selected' : '')  ?> <?= $selected ?>" href="calc.php"><i class="fas fa-calculator"></i></i> </a>
                </div>
            </div>
        </div>
    </nav>


