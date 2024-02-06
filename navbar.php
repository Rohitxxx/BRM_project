<?php

?>
<style>
   .navbar{
       background-color: skyblue;
   }
    .navbar ul {
    display: flex;
    width: 100%;
   
    justify-content: space-evenly;
    padding: 15px;
    } 
    .navbar li{
    list-style: none;
       flex-direction: row;
        justify-content: center;

    }
    .navbar li a{
        
        text-decoration: none;
        font-size: x-large;
    }
</style>
<div class="navbar">
    <ul>
        <li> <a href='view.php'>Home</a> </li>
        <li><a href='InsertionForm.php'>Insertion</a> </li>
        <li><a href='updationForm.php'>Updation</a> </li>
        <li><a href='deletionForm.php'>Deletion</a> </li>
    </ul>
</div>