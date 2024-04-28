<?php
$connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    '123456', # password
    'php_docker' # db table
);

$table_name = "informationStudent";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";

// Start HTML table
echo "<table border='1'>";
echo "<tr>";
echo "<th>Student Number</th>";
echo "<th>Student Name</th>";
echo "<th>Student ID</th>";
echo "<th>Age</th>";
echo "<th>CGPA</th>";
echo "</tr>";

while($i = mysqli_fetch_assoc($response))
{
    echo "<tr>";
    echo "<td>".$i['std_num']."</td>";
    echo "<td>".$i['std_name']."</td>";
    echo "<td>".$i['std_id']."</td>";
    echo "<td>".$i['age']."</td>";
    echo "<td>".$i['cgpa']."</td>";
    echo "</tr>";
}

// End HTML table
echo "</table>";
?>
