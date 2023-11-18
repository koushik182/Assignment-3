<?php
$conn = mysqli_connect("localhost", "root", "", "database_form") or die("Connection failed");

$sql = "SELECT * FROM database_table";
$result = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));

echo "<h2>Contact Form Entries</h2>";
echo "<table border='1'>";
echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Mobile</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['Frist_name'] . "</td>";
    echo "<td>" . $row['Last_name'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "<td>" . $row['Mobile'] . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>
