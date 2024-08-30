{
    "php.validate.executablePath": ""
}
<?php
$servername = "localhost";
$username = "username"; 
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
  <?php
$sql = "SELECT * FROM اسم_الجدول";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_assoc($result)) {
        echo "اسم: " . $row["اسم"] . " - عمر: " . $row["عمر"] . "<br>";
    }
} else {
    echo "0 نتائج";
}

mysql_close($conn);
?>