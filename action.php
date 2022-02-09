<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Series;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'series')
    {
        include 'pages/series.php';
    }
}
elseif (isset($_POST['btn']))
{
    $home = new Home($_POST);
    $result = $home->primeNumber();
    include 'pages/home.php';
}

