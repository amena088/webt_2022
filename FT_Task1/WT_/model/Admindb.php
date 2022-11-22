<?php
class Admin_db
{
    function openCon()
    {
        conn=new mysqli("localhost","root","","secH");
        return $conn;
    }
    function insertuser($conn,$tablename,$applicationdate, $name, $contnum, $email, $gender, $companyname, $companyaddress, $jobposition, $username, $password, $cityofbirth )
    {
        $sql="INSERT INTO $tablename(applicationdate,name,contnum, email, gender, companyname, companyaddress, jobposition, username, password, cityofbirth ))VALUES
        ('$applicationdate','$name', '$contnum', '$email','$gender','$companyname', '$companyaddress', '$jobposition', '$username', '$password', '$cityofbirth')";
        if($conn->query($sql)===TRUE){
            echo "data inserted";
        }
        else{
            echo "error occured".$conn->error;
        }
    }
    function checkUser($conn,$tablename,$name , $password)
    {
        $sql="SELECT * FROM $tablename WHERE name='$name' AND password='password'";
       $result= $conn->query($sql);
       if($result->num_rows > 0)
       {
        return true;
       }
       else{
        return false;
       }
    }
    function showAll($conn, $tablename)
    {
        $sql="SELECT * FROM $tablename";
        $result=$conn->query($sql);
        return $result;
    }
    function closeCon($conn)
    {
        $conn-> close();
    }

}