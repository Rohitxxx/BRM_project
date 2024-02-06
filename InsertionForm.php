<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion form</title>
    <link rel="stylesheet" href="formstyle.css">
</head>
<body>
<?php include 'navbar.php' ?>
    <form action="insertion.php">
        <table id='formtable'>
            <tr>
                <td>Book Name:</td>
                <td><input type="text" name="name" placeholder="Enter the book name"></td>

            </tr>
            <tr>
                <td>Book price:</td>
                <td><input type="text" name="price" placeholder="Enter the price"></td>
            </tr>
            <tr>
                <td>Author</td>
                <td><input type="text" name="author" placeholder="Enter the author name"></td>
            </tr>
            <tr>
                <td><input type="submit" value="save"></td>
                <td><input type="reset" ></td>
            </tr>
        </table>
    </form>
</body>
</html>