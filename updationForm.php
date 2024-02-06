<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book details</title>
    <link rel="stylesheet" href="view.css">
    <script>
        function editMode(btnid){
            var x=document.getElementsByClassName(btnid);//getting class whose id is same as btnid
            for(var i=0;i<=2;i++){
                x[i].innerHTML="<input type='text' value='"+x[i].innerHTML+"' name='field"+i+"'>";
            }
            btn=document.getElementsByName('edit');
            for(i=0;i<btn.length;i++)     //after clicking one edit hiding other btn 
                btn[i].style.display='none';

            updatebtn=document.getElementById('update');
            updatebtn.value='update the details of bookid '+btnid.slice(4);
        }
    </script>
</head>
<body>
<?php include 'navbar.php' ?>    
<form action="updation.php" method="get"> 
    <table id='booktable'>
        <tr>
            <th>Book ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Author</th>
            <th>Update</th>
        </tr>
        <?php 
            $con=mysqli_connect('localhost','root','','brm');
            $sql="select * from book;";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
        ?>

        
        <?php
            for($i=1;$i<=$num;$i++){
                $row=mysqli_fetch_array($result);
                ?>
                    <tr>
                        <td><?php echo $row['bookid']?></td>
                        <td class="edit<?php echo $row['bookid']?>"><?php echo $row['name']?></td>
                        <td class='edit<?php echo $row['bookid']?>'><?php echo $row['price']?></td>
                        <td class='edit<?php echo $row['bookid']?>'><?php echo $row['author']?></td>
                        <td><input type="button" onclick="editMode(this.id)" name="edit" value="edit" id="edit<?php echo $row['bookid']?>"></td>
                    </tr>                                           <!--    this.id means id of the clicked item -->
                <?php
            }
        ?>
        <tr>
         <td colspan="5"> <input type="submit" value="Update" id='update' name='updatebtn'> </td>
        </tr>
        </form>    
    </table>
</body>
</html>