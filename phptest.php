
<html>
    <head>
        <style>
            .a{
margin-top:10px;
padding-top:-30px;
            }
.b{
    font-family:arial;
    font-style:bold;
    font-size:25px;
    margin-top:-30px;
    margin-left:50px;
}.c{
    color:black;
    font-size:20px;
    font-family:vardana;
    margin-top:-100px;
    margin-left:-50px;
}.d{
    size:20px;
}
.button{
    
           background-color: #555;
           border:0px  ;     
           border-radius: 10px;
           color:white;
           padding-left: 30PX;
           padding-right: 30PX;
           padding-top: 10px;
           padding-bottom: 10px;
           position: absolute;
           margin-left:30px;   
           margin-top: 20px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;   
            font-size: 20px;
            
        }
.b1:hover{
  background-color:black;
}
.ans{
    color:green;
    margin-left:50px;
    margin-top:50px;
    font-size:30px;
}
.corect_ans{
    color:red;
    margin-left:50px;
    margin-top:0px;
    font-size:30px;
}

    

</style>
    </head>
    <body>
    <?php
include('./studentnavigation.php');
?>
<pre>
<h1>Quiz</h1>
<div id="quiz-container" class="a">
        <h3 id="question" class="b"></h3>
        <ul id="choices" class="c">
            <input type="radio" name="answer" class="d" value="A">   <span id="choiceA" ></span>

            <input type="radio" name="answer" class="d" value="B">   <span id="choiceB" ></span>

            <input type="radio" name="answer" class="d" value="C">   <span id="choiceC" ></span>

            <button id="submit-btn" class="button">Submit</button>
        <p id="result" class="ans"></p>
        <p id="correct-answer" class="corect_ans"></p>
    </div>
    </pre>
    <script>
        const quizContainer = document.getElementById('quiz-container');
        const questionElement = document.getElementById('question');
        const choiceAElem = document.getElementById('choiceA');
        const choiceBElem = document.getElementById('choiceB');
        const choiceCElem = document.getElementById('choiceC');
        const submitBtn = document.getElementById('submit-btn');
        const resultElement = document.getElementById('result');
        const correctAnswerElement = document.getElementById('correct-answer');

        const quizData = [
            {
                question: "1)  What does PHP stand for?",
                choices: {
                    A: " Personal Hypertext Processor",
                    B: " PHP: Hypertext Preprocessor",
                    C: "Private home page"
                },
                correctAnswer: "B"
            },
            {
                question: "2)  The default file extension in PHP are ____",
                choices: {
                    A: ".html",
                    B: ".php",
                    C: ".js"
                },
                correctAnswer: "B"
            },
            {
                question: "3)  Which of the following is the correct way to declare the constant in PHP?",
                choices: {
                    A: "const",
                    B: "define",
                    C: "let"
                },
                correctAnswer: "B"
            },
            {
                question: "4)  How does the name of the variable in PHP starts?",
                choices: {
                    A: "sign !",
                    B: "sign *",
                    C: "sign $"
                },
                correctAnswer: "C"
            },
            {
                question: "5) Variable name in PHP starts with -",
                choices: {
                    A: "! (Exclamation)",
                    B: "$ (Dollar)",
                    C: "& (Ampersand)"
                },
                correctAnswer: "B"
            },
            {
                question: "6)  Which of the following is not a variable scope in PHP?",
                choices: {
                    A: "Extern",
                    B: "Global",
                    C: "Static"
                },
                correctAnswer: "A"
            },
            {
                question: "7)  Which of the following is correct to add a comment in php?",
                choices: {
                    A: "Both (b) and (c)",
                    B: "// ……",
                    C: "/* …… */"
                },
                correctAnswer: "A"
            },
            {
                question: "8)  Which of the following is used to display the output in PHP?",
                choices: {
                    A: "echo",
                    B: "write",
                    C: "Both"
                },
                correctAnswer: "C"
            },
            {
                question: "9)  Which of the following is used for concatenation in PHP?",
                choices: {
                    A: "+ (plus)",
                    B: "* (Asterisk)",
                    C: ". (dot)"
                },
                correctAnswer: "C"
            },
        ];

        let currentQuestionIndex = 0;

        function showQuestion() {
            const currentQuestion = quizData[currentQuestionIndex];
            questionElement.textContent = currentQuestion.question;
            choiceAElem.textContent = currentQuestion.choices.A;
            choiceBElem.textContent = currentQuestion.choices.B;
            choiceCElem.textContent = currentQuestion.choices.C;
        }

        function checkAnswer() {
            const currentQuestion = quizData[currentQuestionIndex];
            const selectedAnswer = document.querySelector('input[name="answer"]:checked');

            if (selectedAnswer && selectedAnswer.value === currentQuestion.correctAnswer) {
                resultElement.textContent = "Correct!";
                correctAnswerElement.textContent = "";
            } else {
                resultElement.textContent = "Incorrect!";
                correctAnswerElement.textContent = "The correct answer is " + currentQuestion.choices[currentQuestion.correctAnswer];
            }
        }

        function nextQuestion() {
            resultElement.textContent = "";
            correctAnswerElement.textContent = "";
            currentQuestionIndex++;

            if (currentQuestionIndex < quizData.length) {
                showQuestion();
            } else {
                quizContainer.innerHTML = "<h2> Thank you for submiting your response! You have completed the quiz!</h2>";
            }
        }

        submitBtn.addEventListener('click', function() {
            checkAnswer();
            setTimeout(nextQuestion, 2000);
        });

        showQuestion();
    </script>

</body>
</html>