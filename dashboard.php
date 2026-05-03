<!DOCTYPE html>
<html>

<head>
    <title>Smart Viva Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: white;
            height: 100vh;
        }

        .container-box {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            border-radius: 25px;
            padding: 35px;
            width: 420px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .title {
            font-weight: bold;
            font-size: 24px;
        }

        .subtitle {
            font-size: 14px;
            opacity: 0.8;
        }

        .form-select {
            border-radius: 15px;
            padding: 12px;
        }

        .btn-start {
            margin-top: 20px;
            border-radius: 30px;
            padding: 10px;
            font-weight: 600;
        }

        .btn-back {
            margin-top: 10px;
            border-radius: 30px;
        }

        .icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        @media(max-width:500px) {
            .card {
                width: 90%;
                padding: 25px;
            }
        }
    </style>
</head>

<body>

    <div class="container-box">
        <div class="card">

            <div class="icon">🎓</div>

            <div class="title">Smart Viva Dashboard</div>
            <div class="subtitle">Select subject for viva practice</div>

            <form action="practice.php" method="GET">

                <select name="subject" class="form-select mt-3">
                    <option value="mad">📱 Mobile Application Development</option>
                    <option value="blockchain">🔗 Blockchain Technology</option>
                    <option value="angular">🅰 Angular JS</option>
                    <option value="java">☕ Java Programming</option>
                </select>

                <button class="btn btn-light btn-start w-100">
                    🚀 Start Viva
                </button>

                <button type="button" onclick="history.back()" class="btn btn-outline-light btn-back w-100">
                    ⬅ Back
                </button>

            </form>

        </div>
    </div>

</body>

</html>