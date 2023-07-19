<?php 

    // Gather the data using the 'name' attribute and pass it into some variables
    $introQues = $_POST['yourfirst_name'];
    $custName = $_POST['yourlast_name'];
    $comment = $_POST['other_requests3'];

    // Enter credentials through variables
    $hostname = 'sql113.infinityfree.com'; // Hostname
    $username = 'if0_34646015'; // Username
    $password = 'peSBfaY5rHfF'; // Password
    $database = 'if0_34646015_car_dealership'; // Database name

    // Make the actual DB connection
    $con = mysqli_connect($hostname, $username, $password, $database);

    // Stop if the connection fails
    if ($con->connect_error) {
        die('Connection error');
    } else {
        // Here, 'firstname, lastname, phone, email, otherreq' are column names from the database table
        $stmt = $con->prepare("INSERT INTO /*table_name*/(/*table_rowname*/, /*table_rowname*/, /*table_rowname*/, /*table_rowname*/, /*table_rowname*/) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sss", $introQues, $custName, $comment); // 's' for string, 'i' for integer

        $stmt->execute();
        echo 'Form Sent!';
        
        $stmt->close();
        $con->close();
    }
?>