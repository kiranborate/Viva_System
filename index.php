<!DOCTYPE html>
<html>

<head>
    <title>Smart Viva Preparation</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
        }

        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .card-box {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1.5s ease-in-out;
        }

        h1 {
            font-size: 40px;
            font-weight: bold;
        }

        p {
            font-size: 18px;
            opacity: 0.9;
        }

        .btn-main {
            margin-top: 20px;
            padding: 12px 30px;
            font-size: 18px;
            border-radius: 30px;
            transition: 0.3s;
        }

        .btn-main:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        }

        .features {
            margin-top: 30px;
            text-align: left;
        }

        .features i {
            color: #00ffd5;
            margin-right: 10px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <div class="hero">

        <div class="card-box">
            <h1><i class="bi bi-mortarboard-fill"></i> Smart Viva Preparation</h1>

            <p>Practice smart. Perform better. Crack your viva with confidence.</p>

            <div class="features">
                <p><i class="bi bi-check-circle"></i> Random Questions Generator</p>
                <p><i class="bi bi-check-circle"></i> Timer Based Practice</p>
                <p><i class="bi bi-check-circle"></i> Multiple Subjects</p>
                <p><i class="bi bi-check-circle"></i> Instant Answers</p>
            </div>

            <a href="dashboard.php" class="btn btn-light btn-main">
                🚀 Start Practice
            </a>

        </div>
    </div>

</body>

</html>