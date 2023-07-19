<?php 

    // Gather the data using the 'name' attribute and pass it into some variables
    $nameOfcustomer = $_POST['yourfull_name2'];
    $carBrand = $_POST['car_brandname'];
    $carPrice = $_POST['car_pricerange'];
    $dealerList = $_POST['dealers_list'];
    $dealerLocation = $_POST['dealer_location'];
    $otherRequest = $_POST['other_requests2'];

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
        // Here, 'customername, carname, carprice, dealer, dealerfrom, specialreq' are column names from the database table
        $stmt = $con->prepare("INSERT INTO cardealerpage(customername, carname, carprice, dealer, dealerfrom, specialreq) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisss", $nameOfcustomer, $carBrand, $carPrice, $dealerList, $dealerLocation, $otherRequest); // 's' for string, 'i' for integer

        $stmt->execute();
        echo 'Form Sent!';
        
        $stmt->close();
        $con->close();
    }
?>