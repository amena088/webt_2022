<?php
class db
{
    function openCon()
    {
        conn=new mysqli("localhost","root","","secH");
        return $conn;
    }
    function insertuser($conn,$tablename,$name,$password,$gender,$profession,$file)
    {
        $sql="INSERT INTO $tablename(name,password,gender,profession,file)VALUES
        ('$name','$password','$gender','$profession','$file')";
        if($conn->query($sql)===TRUE){
            echo "data inserted";
        }
        else{
            echo "error occured".$conn->error;
        }
    }
    function checkUser($conn,$tablename,$name,$password)
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