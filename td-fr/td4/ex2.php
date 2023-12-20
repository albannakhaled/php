<?php
session_start();

// Function to start a new game
function startNewGame() {
    $randomNumber = rand(1, 100);
    $_SESSION['randomNumber'] = $randomNumber;
    $_SESSION['attempts'] = 0;
}

// Check if a new game needs to be started
if (!isset($_SESSION['randomNumber'])) {
    startNewGame();
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $guess = isset($_POST['guess']) ? (int)$_POST['guess'] : null;

    if ($guess !== null) {
        $_SESSION['attempts']++;

        // Check the guess
        if ($guess == $_SESSION['randomNumber']) {
            $message = 'Congratulations! You guessed the correct number.';
            startNewGame(); // Start a new game
        } elseif ($guess < $_SESSION['randomNumber']) {
            $message = 'Too low! Try again.';
        } else {
            $message = 'Too high! Try again.';
        }
    }
}

// Set a cookie to remember the number of attempts across sessions
setcookie('attempts', $_SESSION['attempts'], time() + 3600, "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Number Guessing Game</title>
</head>
<body>
    <h1>Number Guessing Game</h1>
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="guess">Enter your guess (1-100): </label>
        <input type="number" name="guess" id="guess" required>
        <button type="submit">Submit Guess</button>
    </form>

    <p>Number of attempts: <?php echo $_SESSION['attempts']; ?></p>

    <p>Your best score: <?php echo isset($_COOKIE['attempts']) ? $_COOKIE['attempts'] : 'No attempts yet.'; ?></p>
</body>
</html>
