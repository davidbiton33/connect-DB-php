<?php

     $host = 'localhost';
     $user = 'root';
     $password = '';
     $dbName = 'users';

$connection = new mysqli($host,$user,$password, $dbName);

$sql = 'SELECT * FROM users';

$result = $connection->query($sql);

// var_dump($result);

if($result->num_rows > 0){
    echo '<table border="1">';
    echo '<tr> <th> id </th> <th> name </th> <th> last name </th> ';
    while($row = $result->fetch_assoc()){
    echo '<tr> <td>' .$row["id"].  '</td> <td>' .$row["name"]. '  </td> <td>' .$row["last name"].  '</td> ';
    echo '</tr>';

    }
    echo '</table>';

}




?>