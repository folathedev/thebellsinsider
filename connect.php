<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $Email = $_POST['Email'];
    $phone= $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $ConfirmationRequest = $_POST['ConfirmationRequest'];
    $FirstTimeVisit = $_POST['FirstTimeVisit'];
    $position = $_POST['position'];
    $staffName = $_POST['staffName'];
    $reason = $_POST['reason'];

    //database connection
    $conn = new mysqli('localhost', 'root' 'Lifeisgood123!!' 'bellsform')
    if($conn->connect_error){
        die('Appoitment Scheduling Failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare('insert into Appointment Details(firstName, lastName, EmailAddress, phone, 
        date, time, ConfirmationRequest, FirstTimeVisit, position, staffName, reason) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )');
        $stmt->bind_param("sssidtsssss" $firstName, $lastName, $EmailAddress, $phone, $date, $time, $ConfirmationRequest, $FirstTimeVisit, $position, $staffName, $reason)
        $stmt->execute();
        echo"Appointment Successfully Scheduled"
        $stmt -> close();
        $conn -> close();
    }
?>  