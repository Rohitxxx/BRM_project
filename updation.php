<?php include 'navbar.php' ?>
<?php
    $con=mysqli_connect('localhost','root','','brm');
    
    $sql="update book set name='".$_GET['field0']."',price=".$_GET['field1'].",author='".$_GET['field2']."' where bookid=".substr($_GET['updatebtn'],strlen("update the details of bookid "));// slicing the string of updatebtn until we get the bookid coz we have appended the id in this string ;)
   // echo substr($_GET['updatebtn'],29,2);
    $status=mysqli_query($con,$sql);
    
    if($status>0){
        echo "<h3>the record is updated successfully</h3>";
    }
    else
        echo "Something went wrong...record not updated";
    mysqli_close($con);
    header("refresh:1; url=updationForm.php");
    exit();    
    
?>