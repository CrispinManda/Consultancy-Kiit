<?php
$path = preg_replace('/wp-content.*$/', '', __DIR__);
require_once($path . "wp-load.php");

if (isset($_POST['form_example_contact_submit'])) {
    // get the data from the fields
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_text_field($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $event = sanitize_text_field($_POST['event']);

    $message = 'Hi <br/> <br/> The Following Information Has Been Submitted. <br/>';
    $message .= 'Name:' . $name . '</br>';
    $message .= 'Email:' . $email . '</br>';
    $message .= 'Phone:' . $phone . '</br>';
    $message .= 'Event:' . $event . '</br>';

    wp_mail('consultancy@kiit.ac.ke', 'Training Registrations', $message);

    echo '<script type="text/javascript">';
    echo 'alert("Form submitted successfully!");';
    echo 'window.location.href = "http://localhost/Easy-Manage/success-page";';
    echo '</script>';
    exit();
}
?>
