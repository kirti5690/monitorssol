<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $question = $_POST['question'];

    // Validate the form data (you can add more validation if required)
    if (empty($name) || empty($email) || empty($question)) {
        echo "Error: All fields are required.";
    } else {
        // Sanitize the data (optional but recommended)
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $question = htmlspecialchars($question);

        // You can now process the submitted question (e.g., store it in a database, send an email, etc.)
        // For demonstration purposes, we'll just display the question in the response.

        echo "<h2>Thank you, $name, for your question!</h2>";
        echo "<p>Your question: $question</p>";
        echo "<p>We will get back to you at $email soon.</p>";
    }
} else {
    // If the form is not submitted, redirect to the homepage or display an error message.
    // For demonstration purposes, we'll redirect back to the homepage.
    header("Location: qa.html");
    exit;
}
?>
