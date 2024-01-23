<?php
        $sfname = $_POST['sfname'];
        $slname = $_POST['slname'];
        $srnumber= $_POST['srnumber'];
        $scollegename = $_POST['scollegename'];
        $syear = $_POST['syear'];
        $sdepartment = $_POST['sdepartment'];
        $scourse = $_POST['scourse'];
        $syearofpassing = $_POST['syearofpassing'];
        $sphonenumber = $_POST['sphonenumber'];
        $semailid = $_POST['semailid'];
        $saddress = $_POST['saddress'];

    // creating a connection
    $conn = new mysqli('localhost', 'root', '','student_form');

    // to ensure that the connection is made
    if ($conn->mysqli_connect_error){
        die('Connection failed:' . $conn->mysqli_connect_error);
    }

    else 
    {

    // using sql to create a data entry query
    $sql = $conn->prepare("INSERT INTO student_table ( sfname, slname, srnumber, scollegename, syear, sdepartment, scourse, syearofpassing, sphonenumber, semailid, saddress) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $sql->bind_param("sssssi",$sfname, $slname, $srnumber, $scollegename, $syear, $sdepartment, $scourse, $syearofpassing, $sphonenumber, $semailid, $saddress);
    $sql->execute();
    echo"registration successful";
    $sql->close();
    $conn->close();
    }
?>