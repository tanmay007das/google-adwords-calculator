<?php
    include('../model/formclass.php');
    $totspnd   = $_POST['totspnd'];
    $totconver = $_POST['totconver'];

    $cpacal = new formdata();

    $cpacal->cpacalculation($totspnd,$totconver);
?>

