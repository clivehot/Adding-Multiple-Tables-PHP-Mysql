<?php

    // Connect to database
    $servername = "localhost";
    $username = "";
    $password = "";
    $database = "";
    $connection = mysqli_connect($servername, $username, $password,$database);
    
     $tables = array("Pubs","Resturants","TakeAways"
     );

foreach ($tables as $table){
// Attempt create table query execution
$sql = "CREATE TABLE ".$table." (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Province VARCHAR(30) NOT NULL,
    Category VARCHAR(100) NOT NULL,
    Title VARCHAR(255) NOT NULL,
    Description VARCHAR(800) NOT NULL,
    Price VARCHAR(24) NOT NULL,
    Contact VARCHAR(100) NOT NULL,
    Telephone VARCHAR(70) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Address VARCHAR(255) NOT NULL,
    Longitude VARCHAR(40) NOT NULL,
    Latitude VARCHAR(40) NOT NULL,
    Date DATETIME NOT NULL,
    MainImage VARCHAR(255) NOT NULL,
    Image1 VARCHAR(200) NOT NULL,
    Image2 VARCHAR(200) NOT NULL,
    Image3 VARCHAR(200) NOT NULL,
    Image4 VARCHAR(200) NOT NULL,
    Image5 VARCHAR(200) NOT NULL,
    Image6 VARCHAR(200) NOT NULL,
    Image7 VARCHAR(200) NOT NULL,
    Image8 VARCHAR(200) NOT NULL,
    Image9 VARCHAR(200) NOT NULL,
    Image10 VARCHAR(200) NOT NULL,
    Image11 VARCHAR(200) NOT NULL,
    Image12 VARCHAR(200) NOT NULL,
    Video VARCHAR(200) NOT NULL,
    IP_address VARCHAR(200) NOT NULL
    
)";
if(mysqli_query($connection, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
}
// Close connection
mysqli_close($connection);

/*

foreach ($tables as $table){
$sql = "ALTER TABLE ".$table." CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci ";
if(mysqli_query($connection, $sql)){
    echo "Table created successfully.";
                                     } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
                                             }

                            }

// Close connection
mysqli_close($connection);
*/
?>