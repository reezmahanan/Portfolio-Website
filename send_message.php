
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        $to = "reezmahanan@gmail.com";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        $email_body = "Name: $name\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Subject: $subject\n\n";
        $email_body .= "Message:\n$message\n";
        
        // For demo purposes, we'll just log to a file
        // In production, you would use mail() or a library like PHPMailer
        $log_file = 'contact_messages.log';
        $log_entry = "[" . date('Y-m-d H:i:s') . "] From: $name <$email> - Subject: $subject\n";
        file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
        
        // Return success response
        header('Content-Type: application/json');
        echo json_encode([
            'success' => true,
            'message' => 'Thank you for your message! I will get back to you soon.'
        ]);
        exit;
    } else {
        // Return error response
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'Please fix the following errors: ' . implode(', ', $errors)
        ]);
        exit;
    }
} else {
    // Not a POST request
    header('HTTP/1.1 405 Method Not Allowed');
    echo 'Method Not Allowed';
}
?>