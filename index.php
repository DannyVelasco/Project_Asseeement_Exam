<?php
include_once("config.php");

$result = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC"); 
?>

<html>
<head>  
    <title>Homepage</title>
    <link rel="stylesheet" href="design.css">
</head>

<body>
    <a href="create.html" id = 'add'>Add New Data</a><br/><br/>
    <center><h1> Class List </h1></center>
    <table id = 'person'>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Update</th>
        </tr>
        <?php 
        
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['age']."</td>";
            echo "<td>".$res['email']."</td>";  
            echo "<td><a id = 'update' href=\"update.php?id=$res[id]\">Edit</a> | <a id = 'delete' href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";       
        }
        ?>
    </table><br>
    <a href="logout.php" id = 'add'>Logout</a>
</body>
</html>