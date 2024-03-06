<?php
include("./parcel/config.php");
$sql = "SELECT zip_code, city, state FROM branches";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Store the results in an array
    $addresses = array();

    while ($row = $result->fetch_assoc()) {
        $addresses[] = $row['zip_code'] . ' ' . $row['city'] . ', ' . $row['state'];
    }

    // Close the connection
    $conn->close();

    // Output the addresses as JSON
    header('Content-Type: application/json');
    echo json_encode($addresses);
} else {
    // No results found
    echo "No addresses found";
}

?>