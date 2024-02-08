
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
    margin-left:10px;
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
include('./stud_java_navi.php');
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
                question: "1)  Which one of the following is not a Java feature?",
                choices: {
                    A: "Object-oriented",
                    B: "Use of pointers",
                    C: "Portable"
                },
                correctAnswer: "B"
            },
            {
                question: "2)  What is the extension of java code files?",
                choices: {
                    A: ".js",
                    B: "  .txt",
                    C: ".java"
                },
                correctAnswer: "C"
            },
            {
                question: "3)  Which of the following is not an OOPS concept in Java?",
                choices: {
                    A: "Polymorphism",
                    B: "Inheritance",
                    C: "Compilation"
                },
                correctAnswer: "C"
            },
            {
                question: "4)  Who invented Java Programming?",
                choices: {
                    A: "Guido van Rossum",
                    B: "James Gosling",
                    C: "Bjarne Stroustrup"
                },
                correctAnswer: "B"
            },
           
            {
                question: "5)   Which of the following is a valid long literal?",
                choices: {
                    A: "ABH8097",
                    B: "0xnf029L",
                    C: "904423"
                },
                correctAnswer: "B"
            },
            {
                question: "6)  What does the expression float a = 35 / 0 return?",
                choices: {
                    A: "Infinity",
                    B: "Run time exception",
                    C: "0"
                },
                correctAnswer: "A"
            },
            {
                question: "7)  In which process, a local variable has the same name as one of the instance variables?",
                choices: {
                    A: "Serialization",
                    B: "Variable Shadowing",
                    C: "Abstraction"
                },
                correctAnswer: "B"
            },
            {
                question: "8)  What is the entry point of a program in Java?",
                choices: {
                    A: "main() method",
                    B: "The first line of code",
                    C: "Last line of code"
                },
                correctAnswer: "A"
            },
            {
                question: "9)  Which of the following is the correct syntax to create a variable in Java?",
                choices: {
                    A: "var name;",
                    B: "int name;",
                    C: "var name int;"
                },
                correctAnswer: "B"
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
                quizContainer.innerHTML = "<h2>You have completed the quiz!</h2>";
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