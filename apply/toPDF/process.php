<?php

//print_r($_POST);
//exit();

$temp_array = $_POST;

//$involvedin = implode(' ', $temp_array['involvedin']);
//print_r($involvedin);exit();

//include "values.php";



//emi mimo ese o mowa wa dupe
//if no errors carry on
//use PHPMailer\PHPMailer\PHPMailer;

if(!isset($error)){

    // Title of the CSV

    $Content = "Last Name,First Name,Date of Birth,Sex,Marital Status,Profession,Residential Address,Postal Address,Country of Origin,Contact Number,Email,Next of Kin,Contact Number of next of Kin,Are you born again,Do you believe you are called,Do you believe you are called,What role do you play in your church,If you are a pastor please indicate how long you have been pastoring,serious Medical condition,If Yes Specify,regular Medication,If Yes Specify,major surgeries,If Yes Specify,any Allergies,If Yes Specify,problems with the law,If Yes Specify,recommended by,Others,LIFE BEFORE YOU BECAME BORN AGAIN,HOW YOU JOINED,DIFFERENT ROLES,WHY BIBLE SCHOOL,DO YOU HAVE A CALLING FROM GOD,IF YES EXPLAIN,NARCORTIC DRUGS,IF YES EXPLAIN,NARCORTIC DRUGS IN THE PAST,IF YES EXPLAIN,ARRESTED BY THE POLICE BEFORE,IF YES EXPLAIN,PROSECUTED IN COURT BEFORE,IF YES EXPLAIN,JAIL BEFORE,IF YES EXPLAIN,ALCHOLIC DRINKS,IF YES EXPLAIN,A VIRGIN,ARMED ROBBERY,IF YES EXPLAIN,REVOLUTION,IF YES EXPLAIN,PROSTITUTION,IF YES EXPLAIN,Involved In,Declaration name,Declaration Date \n" . implode(',', $_POST);
//        //set the data of the CSV
//        $Content .= "$name,$address,$mobileno,$email\n";

    //set the file name and create CSV file
    $FileName = $_POST['lastname']."_".$_POST['firstname']."-".date("d-m-y-h:i:s").".csv";
//    header('Content-Disposition: attachment; filename="' . $FileName . '"');

//    $file_encoded = base64_encode($Content);
    $output = fopen('php://output', 'w');
//    header('Content-Type: application/csv');
//    header('Content-Disposition: attachment; filename="' . $FileName . '"');
    file_put_contents("download/" . $FileName, $Content);
//    echo $Content;

    require "../../dompdf/vendor/autoload.php";
    include "../output/index.php";
    include "mail_only.php";
    exit();
}