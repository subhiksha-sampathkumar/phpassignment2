<?php 

    // Gather the data using the 'name' attribute and pass it into some variables
    $firstName = $_POST['yourfirst_name'];
    $lastName = $_POST['yourlast_name'];
    $phoneNum = $_POST['your_phone'];
    $eMail = $_POST['your_email'];
    $mesSage = $_POST['other_requests3'];

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
        $stmt = $con->prepare("INSERT INTO contact(firstname, lastname, phone, email, otherreq) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $firstName, $lastName, $phoneNum, $eMail, $mesSage); // 's' for string, 'i' for integer

        $stmt->execute();
        echo 'Form Sent!';
        
        $stmt->close();
        $con->close();
    }
?>