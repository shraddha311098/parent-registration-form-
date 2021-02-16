<?php
 require_once("connection.php");
 if(isset($_POST["submit"])){
        $email=$_POST["email"];
        $password=$_POST["password"];
       
        $sql="SELECT * FROM register where `email`='$email' AND `password`='$password'";
        $result= $conn->query($sql);
        if($result->num_rows >0){
            echo "Login successful";
            $sql="SELECT * FROM register";
            $result = $conn->query($sql);
            if($result->num_rows >0){
            echo "<table border='1'> 
            <tr>
            <th>id</th>
            <th>parentname</th>
            <th>email</th>
            <th>studentname</th>
            <th>studentgender</th>
            <th>contactnumber</th>
            <th>address</th>
            <th>city</th>
            <th>zipcode</th>
            <th>Update</th>
            <th>Delete</th>
            </tr>";
            while($row=$result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" .$row["id"]."</td>";
                echo "<td>" .$row["parentname"]. "</td>";
                echo "<td>" .$row["email"]. "</td>";
                echo "<td>" .$row["studentname"]. "</td>";
                echo "<td>" .$row["studentgender"]. "</td>";
                echo "<td>" .$row["contactnumber"]."</td>";
                echo "<td>" .$row["address"]. "</td>";
                echo "<td>" .$row["city"]. "</td>";
                echo "<td>" .$row["zipcode"]."</td>";
                echo '<td> <a href="update.php?id='.$row['id'].'">Update</a></td>';
                echo '<td> <a href="delete.php?id='.$row['id'].'">Delete</a></td>';
                echo "</tr>";
            }
        echo"</table>";
        }
    }else{
        echo "login Failed";
    }
}
?>