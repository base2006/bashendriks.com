<?php

// http://blog.teamtreehouse.com/create-ajax-contact-form

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (empty($name)) {
        $errors['name'] = 'Please fill in your name';
    }

    if (empty($email)) {
        $errors['email'] = 'Please fill in your email address';
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Please enter a valid email address';
        }
    }

    if (empty($message)) {
        $errors['message'] = 'Please enter a message to send';
    }

    if (!empty($errors)) {
        echo json_encode($errors);
        die();
    }

    echo json_encode(['success' => 'Thank you for your message. If necessary I\'ll get back to you as soon as possible.']);

} else {
    echo json_encode(['error' => 'There was a problem with your submission, please refresh and try again.']);
}
