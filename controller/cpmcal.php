<?php
    include('../model/formclass.php');
    $totspnd = $_POST['totspnd'];
    $totimp = $_POST['totimpr'];
    
    $cpmcal = new formdata();

    $cpmcal->cpmcalculation($totspnd,$totimp);
?>