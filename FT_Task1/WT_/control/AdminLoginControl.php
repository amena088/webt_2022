<?php
include("../control/AdminRegistrationControl.php");
?>
<?php
$temname="";
$tempass = "";
session_start();
$error="";
if(isset($_POST['submit']))
{
    $data = file_get_contents("../data/AdminData,json");
    $mydata = json_decode($data);
    foreach($mydata as $myobject)
    {
        foreach($myobject as $key[9]=>$value)
        {
            if($_POST['username']==$value)
            {
                $temname=$value;
            }
        }
        foreach($myobject as $key[10]=>$value)
        {
            if($_POST['password']==$value)
            {
                $tempass=$value;
            }
        }
        if(empty($_POST['username'])||empty($_POST['password']))
        {
            $error = "Username or Password Empty";
        } 
        else if($_POST['username']==$temname && $_POST['password']==$tempass) {
            $_SESSION["username"] = $_POST['username'];
            $_SESSION["password"] = $_POST['password'];

            header("location: ../secH/view/AdminRegistration.php");
        }
    }
}
?>       