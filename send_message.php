
<?php
// Load PHPMailer
if (file_exists('vendor/autoload.php')) {
    // Composer installation
    require 'vendor/autoload.php';
} elseif (file_exists('phpmailer/src/PHPMailer.php')) {
    // Manual installation
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
} else {
    die(json_encode(['success' => false, 'message' => 'PHPMailer not found. Please install it.']));
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load email configuration
$config = require 'email_config.php';

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
        // Log the message for backup
        $log_file = 'contact_messages.log';
        $log_entry = "[" . date('Y-m-d H:i:s') . "] From: $name <$email> - Subject: $subject\n";
        file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
        
        // Use PHPMailer for reliable SMTP
        $mail = new PHPMailer(true);
        
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = $config['smtp_host'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $config['smtp_username'];
            $mail->Password   = $config['smtp_password'];
            $mail->SMTPSecure = $config['smtp_secure'];
            $mail->Port       = $config['smtp_port'];
            $mail->CharSet    = 'UTF-8';
            
            // Recipients
            $mail->setFrom($config['from_email'], $config['from_name']);
            $mail->addAddress($config['to_email']);
            $mail->addReplyTo($email, $name);
            
            // Optional BCC/CC
            if (!empty($config['bcc_email'])) {
                $mail->addBCC($config['bcc_email']);
            }
            if (!empty($config['cc_email'])) {
                $mail->addCC($config['cc_email']);
            }
            
            // Content
            $mail->isHTML(false);
            $mail->Subject = "Portfolio Contact: $subject";
            $mail->Body    = "You have received a new message from your portfolio contact form.\n\n";
            $mail->Body   .= "Name: $name\n";
            $mail->Body   .= "Email: $email\n";
            $mail->Body   .= "Subject: $subject\n\n";
            $mail->Body   .= "Message:\n$message\n";
            
            // Send email
            $mail->send();
            
            // Return success response
            header('Content-Type: application/json');
            echo json_encode([
                'success' => true,
                'message' => 'Thank you for your message! I will get back to you soon.'
            ]);
            
        } catch (Exception $e) {
            // Log the error
            $error_log = "[" . date('Y-m-d H:i:s') . "] PHPMailer Error: {$mail->ErrorInfo}\n";
            file_put_contents($log_file, $error_log, FILE_APPEND | LOCK_EX);
            
            // Return error response
            header('Content-Type: application/json');
            echo json_encode([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again later.'
            ]);
        }
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