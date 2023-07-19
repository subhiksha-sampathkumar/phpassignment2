<?php

$hostname = 'sql113.infinityfree.com'; // Hostname
$username = 'if0_34646015'; // Username
$password = 'peSBfaY5rHfF'; // Password
$database = 'if0_34646015_car_dealership'; // Database name

// Make the actual DB connection
$con = mysqli_connect($hostname, $username, $password, $database);

// Stop if the connection fails
if ($con->connect_error) {
    die('Connection error');
}

$query = "SELECT * FROM /*table_name*/";
$result = $con->query($query);

if($result->num_rows > 1){
    echo "<table>";
    echo "<tr><th>ID</th><th>/*table_rowname*/</th><th>/*table_rowname*/</th><th>/*table_rowname*/</th></tr>";


    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row[/*table_rowname*/]."</td>";
        echo "<td>".$row[/*table_rowname*/]."</td>";
        echo "<td>".$row[/*table_rowname*/]."</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "No contact information found.";
}

$query = "SELECT * FROM cardealerpage";
$result = $con->query($query);

if($result->num_rows > 1){
    echo "<table>";
    echo "<tr><th>ID</th><th>CustomerName</th><th>CarBrand</th><th>CarPrice</th><th>Dealer</th><th>FDealerLocation</th><th>SpecialRequests</th></tr>";


    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['customername']."</td>";
        echo "<td>".$row['carname']."</td>";
        echo "<td>".$row['carprice']."</td>";
        echo "<td>".$row['dealer']."</td>";
        echo "<td>".$row['dealerfrom']."</td>";
        echo "<td>".$row['specialreq']."</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "No car dealership information found.";
}

$query = "SELECT * FROM contact";
$result = $con->query($query);

if($result->num_rows > 1){
    echo "<table>";
    echo "<tr><th>ID</th><th>FirstName</th><th>LastName</th><th>PhoneNumber</th><th>Email</th><th>Message</th>></tr>";


    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['otherreq']."</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "No contact information found.";
}

$con->close();

?>