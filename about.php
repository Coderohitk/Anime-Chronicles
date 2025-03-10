<?php include 'reusable/connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Anime Chronicles</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="anime_list.php">Anime List</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="about-section">
            <h2>Welcome to Anime Chronicles</h2>
            <p>Anime Chronicles is your ultimate destination for discovering and exploring your favorite anime series. 
               Our platform provides comprehensive details on various anime, including genres, episode counts, release years, and ratings.</p>
            <p>We aim to bring anime enthusiasts together by offering a user-friendly experience to browse and learn more about their favorite shows.</p>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Anime Chronicles. All rights reserved.</p>
    </footer>
</body>
</html>
