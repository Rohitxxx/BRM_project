<?php include 'navbar.php' ?>
<?php
    $name=$_GET['name'];
    $price=$_GET['price'];
    $author=$_GET['author'];
    $con=mysqli_connect('localhost','root','','brm');
    $sql="insert into book(name,price,author) values('$name',$price,'$author')";
    $status=mysqli_query($con,$sql);
    if($status>0){
        echo "record added successfully";
    }
    else
        echo "record not added";
    header('refresh:1; url=InsertionForm.php');
    exit();
?>
