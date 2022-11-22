<?php
include ("../model/Admindb.php");
  $applicationdate = $name = $contnum = $email = $gender = $companyname = $companyaddress = $jobposition = $username = $password = $cityofbirth = $datasave ="";
  $applicationdateErr = $nameErr = $contnumErr = $emailErr = $genderErr = $companynameErr = $companyaddressErr = $jobposition = $usernameErr = $passwordErr = $cityofbirthErr ="";

  if(isset($_POST["Submit"])) {
    $applicationdate = $_POST['applicationdate'];
    $name = $_POST['name'];
    $contnum = $_POST['number'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $companyname = $_POST['companyname'];
    $companyaddress = $_POST['address'];
    $jobposition = $_POST['jobposition'];
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $cityofbirth = $_POST['birthcityname'];

    if(empty($applicationdate)) {
        $applicationdateErr = "You must enter an applicationdate";
    }
    else{
        $applicationdateErr = "applicationdate is".$applicationdate;
    }
    if(empty ($name)) {
        $nameErr = "Please enter a valid name";
    }
    else if(strlen($name)>8)
    {
        $nameErr = "Name must be less than 8 character";
    }
    else {
        $nameErr = "name is".$name;
    }

    if(empty($contnum)) {
        $contnumErr = "You Must Enter contact number";
    }
    else if(!preg_match("/^([0-9](11))$/",$contnum)) {
        $contnumErr = "Only numeric number is allowed";
    }
    else {
        $contnumErr = "Valid phone number";
    }

    if(empty($email)) {
        $emailErr = "You Must Enter Email Address";
    }
    else{
       $emailErr = "Your email address is".$email;
    }
    if(!isset($_POST["gender"]))
    {
        $genderErr = "You have not selected any Gender";
    }
    if(isset($_POST["gender"]))
    {
        if($_POST["gender"]=="male") {
            $genderErr = "You selected Male";
        }
        else if($_POST["gender"]=="female") {
            $genderErr = "You selected Female";
        }
        $gender = $_POST["gender"];
    }
    if(empty($companyname)) {
        $companynameErr = "Enter Company Name";
    }
    else{
        $companynameErr = "companyname is".$companyname;
    }
    if(empty($companyaddress)) {
        $companyaddressErr = "Enter Company Address";
    }
    else{
        $companyaddressErr = "companyaddress is".$companyaddress;
    }
    
    if(empty($_jobposition)) {
        $jobpositionErr = "You Must Enter Your Job Position";
    }
    else{
        $jobpositionErr = "jobposition is".$jobposition;
    }
    if(empty($username))
    {
        $usernameErr = "User Name is Empty";
    }
    else if(!preg_match('/^[a-z][0-9]$/',$username)) {
        $usernameErr = "only small letters and numeric numbers are allowed";
    }
    else {
        $usernameErr = "Enter Valid Username";
    }
    if(empty($password)) {
        $passwordErr = "Password is Empty";
    }
    else if (!preg_match('@[a-z]@',$password)||!preg_match('@[0-9]@',$password)) {
        $passwordErr = "Password should at least one lower case letter, and one numeric number.";
    }
    else{
        $passwordErr = "Enter Valid Password";
    }
    if(empty($cityofbirth)) {
        $cityofbirthErr = "You must Enter your Birth city name";
    }
    else{
        $cityofbirthErr = "Birth City Name is".$cityofbirth;
    }
    if(!empty($username)&&!empty($password)==0) {
        $mydb = new Admindb();
        $conobj=$mydb->opencon();
        if($mydb-> checkUser($conobj,
        $applicationdate, $name, $contnum, $email, $gender, $companyname, $companyaddress, $jobposition, $username, $password, $cityofbirth 

        ))
        {
            $mydb->closeCon($conobj);
            echo "successful";
        }
        else {
            $mydb->closeCon($conobj);
            echo "unsuccessful";
        }
        /*
        $formdata = array(
            'applicationdate'=>$_POST['applicationdate'],
            'name'=>$_POST['name'],
            'contnum'=>$_POST['number'],
            'email'=>$_POST['email'],
            'gender'=>$_POST['gender'],
            'companyname'=>$_POST['companyname'],
            'companyaddress'=>$_POST['address'],
            'jobposition'=>$_POST['jobposition'],
            'username'=>$_POST['username'],
            'password'=>$_POST['pass'],
            'cityofbirth'=>$_POST['birthcityname']

        );
        $existingdata = file_get_contents('../data/AdminData.json');
        $tempJSONdata = json_decode($existingdata);
        $tempJSONdata[] = $formdata;

        $jsondata = json_encode($tempJSONdata,JSON_PRETTY_PRINT);
        if(file_put_contents("../data/AdminData.json",$jsondata)) {
            $datasave='Data Successfully Saved';
        }
        else {
            $datasave= 'No Data Saved';
         }
         */
        
    }
    
    
}
?>
