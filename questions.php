<?php
// Start or resume the session
session_start();

// Initialize the score if it doesn't exist in the session
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

include('db.php');

// Function to fetch a random question from the database
function getRandomQuestion($conn) {
    if($_GET['category'] != ""){
        $sql = "SELECT question_id, question_text FROM questions WHERE category = '$_GET[category]' ORDER BY RAND() LIMIT 1";
    }else{
        $sql = "SELECT question_id, question_text FROM questions ORDER BY RAND() LIMIT 1";
    }
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
    } else {
        return null;
    }
}

// Function to fetch answers for a specific question
function getRandomIncorrectAnswers($conn, $question_id, $exclude_answer_id) {
    $sql = "SELECT answer_id, answer_text FROM answers WHERE question_id != $question_id AND answer_id != $exclude_answer_id ORDER BY RAND() LIMIT 2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return null;
    }
}

// Check if the request is for loading a question or submitting an answer
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $randomQuestion = getRandomQuestion($conn);
    if ($randomQuestion) {
        $_SESSION['question_id'] = $randomQuestion["question_id"]; // Set the question_id in the session
        $question_text = $randomQuestion["question_text"];
        
        // Fetch the correct answer for the question
        $correctAnswerQuery = "SELECT answer_id, answer_text FROM answers WHERE question_id = " . $_SESSION['question_id'] . " AND is_correct = 1";
        $correctAnswerResult = $conn->query($correctAnswerQuery);
        
        if ($correctAnswerResult->num_rows === 1) {
            $correctAnswerRow = $correctAnswerResult->fetch_assoc();
            $correctAnswer_id = $correctAnswerRow["answer_id"];
            $correctAnswer_text = $correctAnswerRow["answer_text"];
            
            // Fetch two random incorrect answers
            $incorrectAnswers = getRandomIncorrectAnswers($conn, $_SESSION['question_id'], $correctAnswer_id);
            
            if ($incorrectAnswers !== null) {
                // Combine the correct and incorrect answers
                $answers = array_merge(array(array("answer_id" => $correctAnswer_id, "answer_text" => $correctAnswer_text)), $incorrectAnswers);

                // Shuffle the answers to randomize their order
                shuffle($answers);

                // Build the HTML form for the question and answers
                echo "<h3><span class='text-warning'>السؤال:</span> $question_text</h3>";
                echo "<h4 class='text-warning'>الإجابة:</h4>";
                echo "<form id='quizForm'>";
                foreach ($answers as $answer) {
                    $answer_id = $answer["answer_id"];
                    $answer_text = $answer["answer_text"];
                    echo "<input type='radio' name='answer' value='$answer_id' id='radio$answer_id'><label for='radio$answer_id'>$answer_text</label><br>";
                }
                echo "<br><button type='submit' style='width: 50%;' class='btn btn-outline-primary' id='checkansbtn'>إرسال</button><button type='button' style='width: 50%;' class='btn btn-outline-info' onclick='loadQuestion()'>تجاهل</button>";
                echo "</form>";
            } else {
                echo "<span class='text-danger'>لم يتم العثور على إجابات غير صحيحة لهذا السؤال</span>";
            }
        } else {
            echo "<span class='text-danger'>تعذر التحقق من الإجابة الصحيحة</span>";
        }
    } else {
        echo "<span class='text-danger'>لا توجد أسئلة</span>";
    }
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Handle the user's answer submission
    if (isset($_POST["answer"])) {
        $selectedAnswer = $_POST["answer"];
        
        // Get the correct answer for the question
        if (isset($_SESSION['question_id'])) { // Check if 'question_id' is set in the session
            $question_id = $_SESSION['question_id'];
            $correctAnswerQuery = "SELECT answer_id FROM answers WHERE question_id = $question_id AND is_correct = 1";
            $result = $conn->query($correctAnswerQuery);
            
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $correctAnswer = $row["answer_id"];
                
                if ($selectedAnswer == $correctAnswer) {
                    echo "<script>var audio = new Audio('Sounds/true.mp3'); audio.play();</script><span class='text-success'>إجابة صحيحة!</span>";
                    // Increase the user's score
                    $_SESSION['score']++;
                } else {
                    echo "<script>var audio = new Audio('Sounds/false.mp3'); audio.play();</script><span class='text-danger'>إجابة غير صحيحة!</span>";
                }
            } else {
                echo "<span class='text-danger'>تعذر التحقق من الإجابة الصحيحة</span>";
            }
            
            // Load the next question
            unset($_SESSION['question_id']); // Remove the question ID from the session
            /*loadQuestion();*/
        } else {
            echo "<span class='text-danger'>تعذر التحقق من الإجابة الصحيحة</span>"; // Handle the case when there's no question ID in the session
        }
    } else {
        echo "<span class='text-danger'>أنت لم تختر إجابة</span>";
    }
}

// Function to load the next question
/*function loadQuestion() {
    global $conn;
    $randomQuestion = getRandomQuestion($conn);
    if ($randomQuestion) {
        $_SESSION['question_id'] = $randomQuestion["question_id"];
        $question_text = $randomQuestion["question_text"];
        $answers = getAnswersForQuestion($conn, $_SESSION['question_id']);

        if ($answers) {
            // Build the HTML form for the question and answers
            echo "<h2>$question_text</h2>";
            echo "<form id='quizForm'>";
            foreach ($answers as $answer) {
                $answer_id = $answer["answer_id"];
                $answer_text = $answer["answer_text"];
                echo "<input type='radio' name='answer' value='$answer_id'>$answer_text<br>";
            }
            echo "<input type='submit' value='Submit'>";
            echo "</form>";
        } else {
            echo "No answers found for this question.";
        }
    } else {
        echo "No more questions.";
    }
}*/

$conn->close();
?>
