<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the file path for storing form data
    $file = 'form_data.csv';

    // Extract form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Format data for CSV
    $data = array($name, $email, $message);

    // Append form data to CSV file
    $fp = fopen($file, 'a');
    fputcsv($fp, $data);
    fclose($fp);

    // Redirect back to the contact page
    header("Location: contact.html");
    exit;
}
?>
