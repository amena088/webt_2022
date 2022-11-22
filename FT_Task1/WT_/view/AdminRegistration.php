
<?php
include("../control/AdminRegistrationControl.php");
?>
<html>
    <head>
</head>
<body>
    <form action=""method="post">
    <table>
    <h1 align="center"> Admin Registration Form </h1>
    <tr align="center"> </tr>
    <h2> Information Details </h2>
    <tr>
        <td> Application Date :</td>
        <td> <input type="date" name="applicationdate"> </td>
    </tr>
    <tr>
        <td> Name:</td>
        <td> <input type="text" name="name"> </td>
    </tr>
    <tr>
        <td> Contact number:</td>
        <td> <input type="number" name="number" > </td>
    </tr>
    <tr>
        <td> E-Mail Id:</td>
        <td> <input type="email" name="email"> </td>
    </tr>
    <tr>
        <td> Gender:</td>
        <td> <input type="radio" name="gender" value="male">Male
        <td> <input type="radio" name="gender" value="female">Female    
    </tr>
    <tr>
        <td> Company Name:</td>
        <td> <input type="text" name="companyname"> </td>
    </tr>
    <tr>
        <td> Company Address:</td>
        <td> <textarea rows="5" col="17" name="address"></textarea> </td>
    </tr>
    <tr>
        <td> Job position:</td>
        <td> <input type="text" name="jobposition" > </td>
    </tr>
    <tr>
        <td> User Name:</td>
        <td> <input type="text" name="username"> </td>
    </tr>
    <tr>
        <td> Password:</td>
        <td> <input type="password" name="pass"> </td>
    </tr>
    <tr>
        <td> <label>*Security Question(answer only one below): </label> </td>
    </tr>
    <tr>
        <td> City of Birth : </td>
        <td><input type="text" name="birthcityname"> </td>

    </tr>

    <tr>
        <td> <input type="submit" value="Submit"> </td>
        <td> <input type="reset" value="Reset"> </td>
    </tr>
</table>
</form>
</body>
</html>

