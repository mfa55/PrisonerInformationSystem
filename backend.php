<?php

function executeQuery(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cmps277";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = $_REQUEST['query'];

    $queryResult = $conn->query($query);

    if($queryResult->num_rows > 0){
        printTable($queryResult);
    }
    else{
        echo "No results found";
    }
}

function printTable($queryResult){
    echo "<div class=\"table-responsive\"><table class=\"table \"><thead>";

    $columns = $queryResult->fetch_fields();

    //Print columns
    foreach($columns as $column){
        $name = $column->name;
        echo "<th>".$name."</th>";
    }

    echo "<tbody>";

    //Get row
    $row = $queryResult->fetch_assoc();

    //Print row data
    foreach ($row as $attribute){
       echo "<td>".$attribute."</td>";
    }

    echo "</tbody></thead></table>";

}

executeQuery();

?>