<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book details</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
<?php include 'navbar.php' ?>
    <table id='booktable'>
        <tr>
            <th>Book ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Author</th>
            <th>Delete</th>
        </tr>
        <?php 
            $con=mysqli_connect('localhost','root','','brm');
            $sql="select * from book;";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
        ?>

        <form action="deletion.php">
        <?php
            for($i=1;$i<=$num;$i++){
                $row=mysqli_fetch_array($result);
                ?>
                    <tr>
                        <td><?php echo $row['bookid']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['price']?></td>
                        <td><?php echo $row['author']?></td>
                        <td><input type="checkbox" name="check<?php echo $row['bookid']?>" value="<?php echo $row['bookid']?>"></td>
                    </tr>
                <?php
            }
        ?>
        <tr>
           <td colspan="5"> <input type="submit" value="Delete"> </td>
        </tr>
        </form>    
    </table>
</body>
</html>