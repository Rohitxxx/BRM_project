<?php include 'navbar.php' ?>
<?php
    $con=mysqli_connect('localhost','root','','brm');
    $sql="delete from book where bookid=";
    foreach($_GET as $bookid){                      //$_GET will have all the checked variables . by their index(associative array) we get the value which is actually id ;)
        $status=mysqli_query($con,$sql.$bookid);    //$sql.$bookid is concatination
        if( $status)
            echo "Record deleted successfully;)";
        else
            echo "Something went wrong,record not deleted";
    }
    mysqli_close($con);
    header('refresh:1; url=deletionForm.php');
?>