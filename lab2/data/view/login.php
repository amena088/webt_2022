<?php
include("../controller/login.php");
?>
<html>
    <head>
</head>
<body>
    <form action=""method="post">
     <table>
        <h1> Log in page </h1>
    <tr>
        <td> Username:</td>
        <td> <input type="text" name="name" value="Enter your name"> </td>
    </tr>  
    <tr>
        <td> Password:</td>
        <td> <input type="text" value="Enter your password"> </td>
    </tr>
    <tr>
        <td> <input type="submit" name="Log in"></td>
    </tr>
</table>
</body>
</html>