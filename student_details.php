<?php 
    include("student_lib.php");

    $detail = new student();

    $detail->setName($_POST['name']);
    $detail->setMatric($_POST['matricNo']);
    $detail->setGender($_POST['gender']);
    $detail->setDob($_POST['dob']);
    $detail->setCitizen($_POST['citizen']);
    $detail->setMarital($_POST['marital']);
    $detail->setReligion($_POST['religion']);
    $detail->setActiv($_POST['activ']);
    $detail->setCurrent($_POST['currentYear']);
    $detail->setIdno($_POST['idno']);
    $detail->setEmail($_POST['email']);
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>        
</head>
<body>

    <h2>Student Details:</h2><br>

    <table >
        <tr><td>Name:</td><td></td><td><?php echo $detail->getName(); ?></td></tr>
        <tr><td>Matric No:</td><td></td><td><?php echo $detail->getMatric(); ?></td></tr>
        <tr><td>Gender:</td><td></td><td><?php echo $detail->getGender(); ?></td></tr>
        <tr><td>D.O.B:</td><td></td><td><?php echo $detail->getDob(); ?></td></tr>
        <tr><td>Citizenship:</td><td></td><td><?php echo $detail->getCitizen(); ?></td></tr>
        <tr><td>Marital Status:</td><td></td><td><?php echo $detail->getMarital(); ?></td></tr>
        <tr><td>Religion:</td><td></td><td><?php echo $detail->getReligion(); ?></td></tr>
        <tr><td>Active:</td><td></td><td><?php echo $detail->getActiv(); ?></td></tr>
        <tr><td>Current Year:</td><td></td><td><?php echo $detail->getCurrent(); ?></td></tr>
        <tr><td>ID no:</td><td></td><td><?php echo $detail->getIdno(); ?></td></tr>
        <tr><td>Email:</td><td></td><td><?php echo $detail->getEmail(); ?></td></tr>
    </table>

</body>
</html>
