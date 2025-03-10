<?php
include 'reusable/connect.php';

$sql = "SELECT id, title, genre, episodes, release_year, rating, poster_url FROM anime_series";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime List</title>
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
                <div class="anime-card">
                    <img src="<?php echo $row['poster_url']; ?>" alt="<?php echo $row['title']; ?>">
                    <div class="card-content">
                        <h2><?php echo $row['title']; ?></h2>
                        <p><strong>Genre:</strong> <?php echo $row['genre']; ?></p>
                        <p><strong>Episodes:</strong> <?php echo $row['episodes']; ?></p>
                        <p><strong>Release Year:</strong> <?php echo $row['release_year']; ?></p>
                        <p><strong>Rating:</strong> <?php echo $row['rating']; ?>/10</p>
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
