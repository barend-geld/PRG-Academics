<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can process the data as needed, for example, send an email or store it in a database.

    echo "Form submitted successfully!";
} else {
    // Handle the case where the form is not submitted using POST method.
    echo "Invalid request!";
}
?>
