<?php


include"conn.php";


// if($_SERVER['REQUEST_METHO']=='POST')
// {
    $name=$_POST['name'];
    $date=$_POST['date'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $contry=$_POST['contry'];
    $mobile_no=$_POST['mobile_no'];
    $whatsapp_no=$_POST['whatsapp_no'];
    $email=$_POST['email'];
    $pan=$_POST['pan'];
    $aadhar=$_POST['aadhar'];
    $amount=$_POST['amount'];
    $pay_method=$_POST['pay_method'];
    $narration=$_POST['narration'];
    $donation_for=$_POST['donation_for'];
    $received_by=$_POST['received_by'];



    echo $city;


    // if(isset($_POST['btn']))
    // {
        $insert="INSERT INTO `data`(`name`,`date`,`address`,`city`,`contry`,`mobile_no`,`whatsapp_no`,`email`,`pan`,`aadhar`,`amount`,`pay_method`,`narration`,`donation_for`,`received_by`) VALUES('$name','$date','$address','$city','$contry','$mobile_no','$whatsapp_no','$email','$pan','$aadhar','$amount','$pay_method','$narration','$donation_for','$received_by')";

        $result=mysqli_query($conn,$insert);

    // }

   
    


// }





// $createtable="CREATE TABLE `data` (`id` INT NOT NULL AUTO_INCREMENT,`name` VARCHAR(50) NOT NULL,`date` VARCHAR(50) NOT NULL,`address` VARCHAR(255) NOT NULL,`city` VARCHAR(50) NOT NULL ,`contry` VARCHAR(50) NOT NULL,`mobile_no` VARCHAR(10) NOT NULL ,`whatsapp_no` VARCHAR(10) NOT NULL ,`email` VARCHAR(20) NOT NULL,`pan` VARCHAR(20) NOT NULL,`aadhar` VARCHAR(20) NOT NULL,`amount`VARCHAR(20)
// NOT NULL,`pay_method` VARCHAR(20) NOT NULL,`narration` VARCHAR(20) NOT NULL,`donation_for` VARCHAR(20) NOT NULL,`received_by`VARCHAR(20) NOT NULL, PRIMARY KEY(id))";







?>