<!DOCTYPE html>
<html>
<head>
    <title> PHP </title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 400px;
            padding: 0px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
            margin-bottom: 20px;
        }

        section {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 8px;
        }

        input, textarea {
            margin-bottom: 16px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        h2, h3 {
            color: #333;
            margin-top: 0;
        }

        p {
            margin-bottom: 16px;
            color: #333;
        }

        pre {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
            color: #333;
        }
    </style>
</head>
<body>

    <header>
        <h1>PHP Webpage </h1>
    </header>

    <section>
        <h2>Declaration Examples</h2>
        <p>
            <?php
            // Declaration Examples
            $text = "This is a text.";
            $number = 42;
            $stringVar = "Hello, PHP!";
            $listExample = array("item1", "item2", "item3");
            $currentTime = date("Y-m-d H:i:s");
            echo "<br>";
            echo "Text: $text<br><br>";
            echo "Number: $number<br><br>";
            echo "String: $stringVar<br><br>";
            echo "List: " . implode(", ", $listExample) . "<br><br>";
            echo "Current Time: $currentTime<br><br>";
            ?>
        </p>
    </section>

    <section>
        <h2>Form Example</h2>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Submit Form</button>
        </form>

        <?php
        // Handle Form Submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<p style='color: #4caf50;'>Form submitted successfully!</p>";
        }
        ?>
    </section>

    <section>
        <h2>Word Count Function</h2>
        <form method="post" action="">
            <label for="wordInput">Enter a word or phrase:</label>
            <input type="text" name="wordInput" required>
            <button type="submit">Calculate Word Count</button>
        </form>

        <?php
        // Word Count Function
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['wordInput'])) {
            $userInput = $_POST['wordInput'];
            $userWordCount = str_word_count($userInput);
            echo "<p>Word count for '$userInput': $userWordCount</p>";
        }
        ?>
    </section>

    <section>
        <h2>Loop Example</h2>
        <pre>
            <?php
            // Loop Example
            for ($i = 1; $i <= 5; $i++) {
                echo "$i ";
            }
            ?>
        </pre>
    </section>

    <section>
        <h2>Arithmetic Operations</h2>
        <form method="post" action="">
            <label for="num1">Enter the first number:</label>
            <input type="number" name="num1" required>

            <label for="num2">Enter the second number:</label>
            <input type="number" name="num2" required>

            <button type="submit">Perform Operations</button>
        </form>

        <?php
        // Arithmetic Operations
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num1']) && isset($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            echo "<p>Sum: " . ($num1 + $num2) . "</p>";
            echo "<p>Difference: " . ($num1 - $num2) . "</p>";
            echo "<p>Product: " . ($num1 * $num2) . "</p>";

            if ($num2 != 0) {
                echo "<p>Quotient: " . ($num1 / $num2) . "</p>";
            } else {
                echo "<p style='color: #ff0000;'>Division by zero is undefined.</p>";
            }
        }
        ?>
    </section>

</body>
</html>
