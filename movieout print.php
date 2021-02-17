<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinema";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Movie_titel, Movie_poster FROM movie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $image=$row["Movie_poster"];
        $link=$row["Movie_titel"]."\n";
        echo $row["Movie_titel"]."\n";
        print"<a href='$link.php'><img src=\"$image\" width=\"405px\" height=\"600px\"\/></a>\n";

    }
} else {
    echo "0 results";
}
$conn->close();