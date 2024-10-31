<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
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

    <h1>Available Vehicles</h1>
    <div id="vehicle-list"></div>

    <script>
    fetch('vehicle.php?type=all')
        .then(response => response.json())
        .then(data => {
            const vehicleList = document.getElementById('vehicle-list');
            vehicleList.innerHTML = '';
            data.forEach(vehicle => {
                const vehicleItem = document.createElement('div');
                vehicleItem.className = 'vehicle-item';
                vehicleItem.innerHTML = `
                    <img src="images/${vehicle.image}" alt="${vehicle.make} ${vehicle.model}">
                    <h3>${vehicle.make} ${vehicle.model}</h3>
                    <p>Year: ${vehicle.year}</p>
                    <p>Price: $${vehicle.price}/day</p>
                    <p>Type: ${vehicle.type}</p>
                    <a href="booking.php?id=${vehicle.id}" class="book-button">Book It</a>
                `;
                vehicleList.appendChild(vehicleItem);
            });
        });
    </script>
</body>
</html>
