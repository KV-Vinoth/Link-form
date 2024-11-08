<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']); // Store this securely, use hashing
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $address1 = htmlspecialchars($_POST['address1']);
    $address2 = htmlspecialchars($_POST['address2']);
    $city = htmlspecialchars($_POST['city']);
    $postalCode = htmlspecialchars($_POST['postalCode']);
    $careerMessage = htmlspecialchars($_POST['career']['message']);

    // Prepare the data to be written
    $data = "Full Name: $fullName\nEmail: $email\nPassword: $password\nPhone: $phone\nGender: $gender\nAddress: $address1, $address2\nCity: $city\nPostal Code: $postalCode\nCareer Message: $careerMessage\n\n";

    // Save data to a text file
    file_put_contents('submissions.txt', $data, FILE_APPEND | LOCK_EX);

    // Send confirmation email (optional)
    // mail($email, "Thank You!", "Your details have been verified.");

    echo '<div class="confirmation-message">"Thank You! Your details have been submitted. Please check your email for confirmation."</div>';
} else {
    // If the form wasn't submitted, redirect or show an error
    echo "Invalid request.";
}
?>

<style>
    .confirmation-message {
    background-color: #dff0d8; /* Light green background */
    color: #3c763d; /* Dark green text */
    border: 1px solid #d6e9c6; /* Light green border */
    padding: 15px;
    border-radius: 5px;
    margin: 20px 0;
    text-align: center; /* Center the text */
    font-size: 1.2rem; /* Increase font size */
}
</style>
