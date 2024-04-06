<?php
require_once './vendor/stripe/init.php'; // Include Stripe PHP library

// Set your API keys
\Stripe\Stripe::setApiKey('put your sercet API Here');

// Retrieve form data
$customer_id = isset($_POST['customer_id']) ? $_POST['customer_id'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$client_name = isset($_POST['client_name']) ? $_POST['client_name'] : '';

try {
    // Check if customer ID is provided
    if (!empty($customer_id)) {
        // Update existing customer
        $customer = \Stripe\Customer::update(
            $customer_id,
            [
                'email' => $email,
                'name' => $name,
                'metadata' => ['client_name' => $client_name]
                // You can add more parameters or metadata as needed
            ]
        );
    } else {
        // Create a new customer
        $customer = \Stripe\Customer::create([
            'email' => $email,
            'name' => $name,
            'metadata' => ['client_name' => $client_name]
            // You can add more parameters or metadata as needed
        ]);
    }

    // Output success message or handle the customer object as needed
    echo 'Customer ' . ($customer_id ? 'updated' : 'created') . ' successfully with ID: ' . $customer->id;
} catch (Exception $e) {
    // Handle any exceptions
    echo 'Error: ' . $e->getMessage();
}
?>
