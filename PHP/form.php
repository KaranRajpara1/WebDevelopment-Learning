
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        Method  
        GET: Get is a defualt method to pass data.
        in grt method data will be visible in url.
        not secured method to pass sensitive data 
    -->
</body>
<form action="process.php" method="POST">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="txt1" placeholder="Enter name" required></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="number" name="txt2" placeholder="Enter email" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" ></td>
        </tr>
    </table>
</form>
</html>
<?php

?>