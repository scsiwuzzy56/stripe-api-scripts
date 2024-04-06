<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create or Update Customer</title>
</head>
<body>
<h2>Create or Update Customer</h2>
<form action="process_customer.php" method="post">
    <label for="customer_id">Customer ID (optional for updates):</label><br>
    <input type="text" id="customer_id" name="customer_id"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="client_name">Client Name:</label><br>
    <input type="text" id="client_name" name="client_name" required><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>