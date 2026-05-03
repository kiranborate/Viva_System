<?php
session_start();

if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

$subject = $_GET['subject'] ?? 'mad';

$questions = [

    "mad" => [
        ["q" => "What is Activity in Android?", "a" => "Activity is a single screen UI in Android."],
        ["q" => "What is Intent?", "a" => "Intent is used to move between activities."],
        ["q" => "What is Fragment?", "a" => "Reusable UI part."],
        ["q" => "What is Toast?", "a" => "Short popup message."],
        ["q" => "What is RecyclerView?", "a" => "Used for large lists."],
        ["q" => "What is Service?", "a" => "Background component without UI."],
        ["q" => "What is Broadcast Receiver?", "a" => "Receives system messages."],
        ["q" => "What is Content Provider?", "a" => "Shares data between apps."],
        ["q" => "What is Layout?", "a" => "Defines UI structure."],
        ["q" => "What is LinearLayout?", "a" => "Arranges views in one direction."],
        ["q" => "What is RelativeLayout?", "a" => "Positions views relative to each other."],
        ["q" => "What is ConstraintLayout?", "a" => "Flexible layout using constraints."],
        ["q" => "What is ListView?", "a" => "Displays scrollable list."],
        ["q" => "What is Adapter?", "a" => "Connects data to UI."],
        ["q" => "What is Manifest file?", "a" => "Contains app configuration."],
        ["q" => "What is APK?", "a" => "Android Package file."],
        ["q" => "What is Gradle?", "a" => "Build automation tool."],
        ["q" => "What is View?", "a" => "Basic UI component."],
        ["q" => "What is Button?", "a" => "Clickable UI element."],
        ["q" => "What is EditText?", "a" => "Input field."]
    ],

    "blockchain" => [
        ["q" => "What is Blockchain?", "a" => "Distributed ledger technology."],
        ["q" => "What is Block?", "a" => "Collection of transactions."],
        ["q" => "What is Hash?", "a" => "Unique digital fingerprint."],
        ["q" => "What is Mining?", "a" => "Validating transactions."],
        ["q" => "What is Node?", "a" => "Computer in blockchain network."],
        ["q" => "What is Consensus?", "a" => "Agreement among nodes."],
        ["q" => "What is Public Blockchain?", "a" => "Open to everyone."],
        ["q" => "What is Private Blockchain?", "a" => "Controlled access."],
        ["q" => "What is Smart Contract?", "a" => "Self executing contract."],
        ["q" => "What is Cryptocurrency?", "a" => "Digital currency."],
        ["q" => "What is Genesis Block?", "a" => "First block."],
        ["q" => "What is Merkle Tree?", "a" => "Hash tree structure."],
        ["q" => "What is Wallet?", "a" => "Stores crypto keys."],
        ["q" => "What is Token?", "a" => "Digital asset."],
        ["q" => "What is Distributed Ledger?", "a" => "Shared database."],
        ["q" => "What is Proof of Work?", "a" => "Consensus mechanism."],
        ["q" => "What is Proof of Stake?", "a" => "Stake based validation."],
        ["q" => "What is Double Spending?", "a" => "Using same coin twice."],
        ["q" => "What is Peer-to-Peer?", "a" => "Direct network communication."],
        ["q" => "What is Gas fee?", "a" => "Transaction cost."]
    ],

    "angular" => [
        ["q" => "What is AngularJS?", "a" => "JavaScript framework."],
        ["q" => "What is Module?", "a" => "Application container."],
        ["q" => "What is Controller?", "a" => "Controls data."],
        ["q" => "What is Directive?", "a" => "Extends HTML."],
        ["q" => "What is ng-model?", "a" => "Data binding."],
        ["q" => "What is ng-repeat?", "a" => "Loop directive."],
        ["q" => "What is ng-bind?", "a" => "Bind data to view."],
        ["q" => "What is Scope?", "a" => "Connects view and controller."],
        ["q" => "What is Service?", "a" => "Reusable logic."],
        ["q" => "What is Factory?", "a" => "Creates services."],
        ["q" => "What is Filter?", "a" => "Formats data."],
        ["q" => "What is Dependency Injection?", "a" => "Inject dependencies."],
        ["q" => "What is Two way binding?", "a" => "Sync model and view."],
        ["q" => "What is Expression?", "a" => "Angular evaluation."],
        ["q" => "What is ng-app?", "a" => "Defines Angular app."],
        ["q" => "What is ng-controller?", "a" => "Attach controller."],
        ["q" => "What is ng-if?", "a" => "Conditional display."],
        ["q" => "What is ng-show?", "a" => "Show element."],
        ["q" => "What is ng-hide?", "a" => "Hide element."],
        ["q" => "What is Routing?", "a" => "Navigation between views."]
    ],

    "java" => [
        ["q" => "What is Java?", "a" => "Object oriented language."],
        ["q" => "What is JVM?", "a" => "Runs Java bytecode."],
        ["q" => "What is JDK?", "a" => "Java Development Kit."],
        ["q" => "What is JRE?", "a" => "Java Runtime Environment."],
        ["q" => "What is Class?", "a" => "Blueprint."],
        ["q" => "What is Object?", "a" => "Instance of class."],
        ["q" => "What is Inheritance?", "a" => "Reuse code."],
        ["q" => "What is Polymorphism?", "a" => "Multiple forms."],
        ["q" => "What is Encapsulation?", "a" => "Data hiding."],
        ["q" => "What is Abstraction?", "a" => "Hide implementation."],
        ["q" => "What is Interface?", "a" => "Abstract methods."],
        ["q" => "What is Package?", "a" => "Group of classes."],
        ["q" => "What is Exception?", "a" => "Runtime error."],
        ["q" => "What is Try Catch?", "a" => "Exception handling."],
        ["q" => "What is Finally?", "a" => "Always executes."],
        ["q" => "What is Constructor?", "a" => "Initialize object."],
        ["q" => "What is Method?", "a" => "Function in class."],
        ["q" => "What is Variable?", "a" => "Data storage."],
        ["q" => "What is Loop?", "a" => "Repeated execution."],
        ["q" => "What is Array?", "a" => "Collection of elements."]
    ]

];

$random = $questions[$subject][array_rand($questions[$subject])];

if (isset($_GET['correct'])) {
    $_SESSION['score']++;
}

if (isset($_GET['reset'])) {
    $_SESSION['score'] = 0;
}
?>

<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>

<head>
    <title>Practice Viva</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            min-height: 100vh;
            color: white;
            font-family: 'Segoe UI', sans-serif;
        }

        .card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            width: 100%;
            max-width: 650px;
            margin: auto;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
        }

        .question-box {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 15px;
            margin-top: 15px;
            font-size: 18px;
        }

        .answer {
            display: none;
            margin-top: 15px;
            background: rgba(0, 255, 150, 0.15);
            padding: 15px;
            border-radius: 12px;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .timer {
            font-weight: bold;
            color: #ffc107;
        }

        .btn {
            border-radius: 12px;
        }

        .progress {
            height: 12px;
            border-radius: 10px;
        }

        @media(max-width:600px) {
            .card {
                padding: 20px;
            }
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center">

    <div class="card">

        <div class="top-bar">
            <h5>🏆 Score: <?php echo $_SESSION['score']; ?></h5>
            <h6 class="timer">⏱ <span id="timer">15</span>s</h6>
        </div>

        <div class="progress mt-2">
            <div class="progress-bar bg-success"
                style="width: <?php echo ($_SESSION['score'] * 10); ?>%">
            </div>
        </div>

        <h4 class="text-center mt-3">🎤 Viva Question</h4>

        <div class="question-box">
            <?php echo $random['q']; ?>
        </div>

        <div class="answer" id="answer">
            <?php echo $random['a']; ?>
        </div>

        <div class="text-center mt-3">
            <button class="btn btn-light" onclick="showAnswer()">Show Answer</button>
            <button class="btn btn-secondary" onclick="speakQuestion()">🔊 Speak</button>
        </div>

        <div class="d-flex justify-content-between mt-3">
            <a href="?subject=<?php echo $subject ?>&correct=1" class="btn btn-success w-50 me-2">
                Correct
            </a>

            <a href="?subject=<?php echo $subject ?>" class="btn btn-danger w-50">
                Wrong
            </a>
        </div>

        <div class="d-grid gap-2 mt-3">
            <a href="?subject=<?php echo $subject ?>" class="btn btn-warning">
                Next Question
            </a>

            <a href="result.php" class="btn btn-info">
                Finish Viva
            </a>

            <a href="?reset=1" class="btn btn-outline-light">
                Reset Score
            </a>
            <button onclick="history.back()" class="btn btn-secondary">
                ⬅ Back
            </button>
        </div>

    </div>

    <script>
        function speakQuestion() {
            let text = document.querySelector(".question-box").innerText;
            let speech = new SpeechSynthesisUtterance(text);
            speech.lang = "en-US";
            window.speechSynthesis.speak(speech);
        }

        function showAnswer() {
            document.getElementById("answer").style.display = "block";
        }

        let time = 15;
        setInterval(function() {
            time--;
            document.getElementById("timer").innerText = time;

            if (time == 0) {
                document.getElementById("answer").style.display = "block";
            }
        }, 1000);
    </script>

</body>

</html>