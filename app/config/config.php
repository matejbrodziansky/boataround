<?php
require 'helper/global_helper.php';
require 'php/function.php';
require 'php/variables.php';
require 'app/controller/Parser.php';
require 'app/controller/Task.php';

$parser = new Parser;
$task = new Task;



$url = basename("{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");

if($url = $url === 'index.php' ? 'home' : $url);

