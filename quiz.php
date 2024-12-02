<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Quiz</title>
</head>

<body>
    <h2>Online Quiz</h2>
    <form method="post" action="">
        <p>1. What is the capital of France?</p>
        <input type="radio" name="q1" value="A" required> A. Berlin<br>
        <input type="radio" name="q1" value="B"> B. Madrid<br>
        <input type="radio" name="q1" value="C"> C. Paris<br>
        <input type="radio" name="q1" value="D"> D. Rome<br>

        <p>2. What is 2 + 2?</p>
        <input type="radio" name="q2" value="A" required> A. 3<br>
        <input type="radio" name="q2" value="B"> B. 4<br>
        <input type="radio" name="q2" value="C"> C. 5<br>
        <input type="radio" name="q2" value="D"> D. 6<br>

        <p>3. What is the capital of Japan?</p>
        <input type="radio" name="q3" value="A" required> A. Beijing<br>
        <input type="radio" name="q3" value="B"> B. Seoul<br>
        <input type="radio" name="q3" value="C"> C. Tokyo<br>
        <input type="radio" name="q3" value="D"> D. Bangkok<br>

        <p>4. What is the largest planet in our solar system?</p>
        <input type="radio" name="q4" value="A" required> A. Earth<br>
        <input type="radio" name="q4" value="B"> B. Jupiter<br>
        <input type="radio" name="q4" value="C"> C. Mars<br>
        <input type="radio" name="q4" value="D"> D. Saturn<br>

        <p>5. What is the square root of 64?</p>
        <input type="radio" name="q5" value="A" required> A. 6<br>
        <input type="radio" name="q5" value="B"> B. 7<br>
        <input type="radio" name="q5" value="C"> C. 8<br>
        <input type="radio" name="q5" value="D"> D. 9<br>

        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Correct answers
        $correctAnswers = [
            'q1' => 'C',
            'q2' => 'B',
            'q3' => 'C',
            'q4' => 'B',
            'q5' => 'C'
        ];

        // Retrieve user answers
        $userAnswers = [
            'q1' => $_POST['q1'] ?? '',
            'q2' => $_POST['q2'] ?? '',
            'q3' => $_POST['q3'] ?? '',
            'q4' => $_POST['q4'] ?? '',
            'q5' => $_POST['q5'] ?? ''
        ];

        // Validate and calculate score
        $score = 0;
        foreach ($correctAnswers as $question => $correctAnswer) {
            if ($userAnswers[$question] === $correctAnswer) {
                $score++;
            }
        }

        // Display results
        echo "<h3>Your Score: $score / 5</h3>";

        // Display correct answers for review
        echo "<h3>Correct Answers:</h3><ul>";
        foreach ($correctAnswers as $question => $correctAnswer) {
            echo "<li>Question " . substr($question, 1) . ": $correctAnswer</li>";
        }
        echo "</ul>";
    }
    ?>
</body>

</html>