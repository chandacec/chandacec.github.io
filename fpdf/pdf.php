<?php
if (!empty($_POST['submit'])) {
    $f_name = $_POST['firstname'];
    $l_name = $_POST['lasttname'];
    $ad_date = $_POST['appointmentdate'];
    $at_time = $_POST['appointmenttime'];
    $p_number = $_POST['phonenumber'];
    $email = $_POST['email'];
    $f_city = $_POST['city'];
    $state = $_POST['state'];
    $pin = $_POST['pincod'];

    require("fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->output();
}
