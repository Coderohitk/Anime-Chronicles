<?php
include 'reusable/connect.php';

$sql = "SELECT c.name, c.role, c.power_level, c.image_url, a.title AS anime_title 
        FROM anime_characters c
        JOIN anime_series a ON c.anime_id = a.id";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Characters</title>
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
        <div class="anime-container">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="character-card">
                    <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['name']; ?>">
                    <div class="card-content">
                        <h2><?php echo $row['name']; ?></h2>
                        <p><strong>Anime:</strong> <?php echo $row['anime_title']; ?></p>
                        <p><strong>Role:</strong> <?php echo $row['role']; ?></p>
                        <p><strong>Power Level:</strong> <?php echo $row['power_level']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Anime Chronicles. All rights reserved.</p>
    </footer>
</body>
</html>

<?php $conn->close(); ?>
