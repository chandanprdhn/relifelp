<?php
// Retrieve data from the form
$cname = $_POST['cname'];
$cemail = $_POST['cemail'];
$tel = $_POST['mobNum'];
// database connection
$conn = new mysqli("localhost", 'i9671439_wp1', 'root@ikontel', 'i9671439_wp1');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO clients(cname, cemail, mobNum) VALUES (?, ?, ?)");

    // Check if the prepare statement was successful
    if ($stmt) {
       $stmt->bind_param("sss", $cname, $cemail , $tel);
        $execval = $stmt->execute();

        if ($execval) {
            // echo "Registration successfully...";
            header("Location: thanks.php");
        } else {
            echo "Error during registration: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Prepare statement failed: " . $conn->error;
    }

    // Start the session
    $conn->close();
}
?>