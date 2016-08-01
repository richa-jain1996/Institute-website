<?php

function insert() {
    $con = getConnection();

    $q = "insert into enquiry(name , mobile, email,quiry) values (?,?,?,?)";

    $stmt = $con->prepare($q);
    $stmt->bind_param("siss", $name,$mobile, $email,$quiry);

    $name = $_REQUEST['name'];
    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $quiry = $_REQUEST['quiry'];
//    $course = $_REQUEST['course'];
//    $reply = $_REQUEST['reply'];
    
    

    $stmt->execute() or die(mysqli_error($con));
}
function insertfeed() {
    $con = getConnection();

    $q = "insert into feedback(name , address, mobile,feed) values (?,?,?,?)";

    $stmt = $con->prepare($q);
    $stmt->bind_param("ssis", $name,$address, $mobile,$feed);

    $name = $_REQUEST['Inputname1'];
    $address = $_REQUEST['exampleInputEmail1'];
    $mobile = $_REQUEST['mobile1'];
    $feed = $_REQUEST['query'];
//    $course = $_REQUEST['course'];
//    $reply = $_REQUEST['reply'];
    
    

    $stmt->execute() or die(mysqli_error($con));
}
