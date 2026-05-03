<?php
session_start();
$score = $_SESSION['score'] ?? 0;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Viva Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #141e30, #243b55);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-family: Segoe UI;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            width: 400px;
        }

        .score {
            font-size: 50px;
            font-weight: bold;
            color: #00ffcc;
        }
    </style>
</head>

<body>

    <div class="card">

        <h3>🎉 Viva Completed</h3>

        <p class="mt-3">Your Final Score</p>

        <div class="score">
            <?php echo $score; ?>
        </div>

        <div class="mt-4">

            <a href="practice.php?reset=1" class="btn btn-success w-100 mb-2">
                🔄 Restart Viva
            </a>


            <a href="index.php" class="btn btn-dark w-100">
                🏠 Home
            </a>

        </div>

    </div>

</body>

</html>