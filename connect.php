<?php
$lastName = $_POST['fullName'];
$gender = $_POST['Date of Birth'];
$email = $_POST['email'];
$password = $_POST['Mobile Number'];
$number = $_POST[' gender'];
$number = $_POST['Blood Group'];
$number = $_POST[' passaword'];
$number = $_POST[' Confirm passaword'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(fullName,Date of Birth,email,Mobile Number,gender,Blood Group,passaword,) values,Confirm passaword(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $fullName, $DateofBirth, $email, $Mobilenber,$gender $BloodGroup $password $Confirmpassword);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>