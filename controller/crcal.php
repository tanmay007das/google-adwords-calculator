<?php
    include('../model/formclass.php');
    $totlconv  = $_POST['totlconv'];
    $totlclks = $_POST['totlclks'];

    $crcal = new formdata();

    $crcal->crcalculation($totlconv,$totlclks);
?>

