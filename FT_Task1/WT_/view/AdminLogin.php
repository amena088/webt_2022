<?php
include("../control/AdminLoginControl.php");
if(isset($_SESSION['username'])) {
    header("Location: /secH/view/AdminRegistration.php");
}
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
        <td> <input type="text" name="name"> </td>
    </tr>  
    <tr>
        <td> Password:</td>
        <td> <input type="password" name="pass"> </td>
    </tr>
    <tr>
        <td> <input type="submit" name="Log in" value="log in"></td>
    </tr>
</table>
</body>
</html>
