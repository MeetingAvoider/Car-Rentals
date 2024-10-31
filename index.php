<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car and Bike Rental</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="category.php">Book Now</a>
        <?php session_start(); if (isset($_SESSION['user_id'])): ?>
            <a href="orders.php">Bookings</a>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="signup.php">Sign Up</a>
        <?php endif; ?>
    </nav>

    <h1>Welcome to Car and Bike Rental!</h1>
    <p>Your adventure starts here. Rent a vehicle today!</p>

    <div class="vehicles">
        <div class="vehicle">
            <img src="images/toyota_camry.jpg" alt="Car 1">
            <h3>Toyota Camry</h3>
            <p>Price: $50/day</p>
            <a href="category.php" class="book-button">Book Now</a>
        </div>
        <div class="vehicle">
            <img src="images/yamaha_mt09.jpg" alt="Bike 1">
            <h3>Yamaha MT-09</h3>
            <p>Price: $30/day</p>
            <a href="category.php" class="book-button">Book Now</a>
        </div>
    </div>
</body>
</html>
