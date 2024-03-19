<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');

body.quantitative{
	font-size: 20px;
	font-family: sans-serif;
	color: #333;
}

nav.logic{
  display: flex;
  height: 75px;
  width: 100%;
  background: #e9ecef;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 10px;
  flex-wrap: wrap;
}

nav ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin-top: 18px;
}
nav ul li{
  margin: 0 5px;
}
nav ul li a{
  color: #6c757d;
  font-family: 'Roboto Slab', serif;
  text-decoration: none;
  font-weight: 600;
  padding: 8px 15px;
  font-size:1em; 
  letter-spacing: 0.5px;
  transition: all 0.3s ease;
}

nav ul li a:hover{
  color: #111;
  text-decoration: none;
}

#main {
    float: left;
    width: 65%;
    border: 2px solid #e9ecef;
    box-shadow: 2px 2px 2px 2px 1px #dee2e6;
    border-radius: 5px;
    margin-top: 20px;
}

#main h2{
    font-family: 'Roboto Slab', serif;
    font-weight: 600;
    background-color: #333;
    color: #e9ecef;
    opacity: 0.7;
    text-align: center;
    margin-bottom: 15px 0px;
    padding: 10px 0px;
    letter-spacing: 2px;
    font-size: 2em;
}

.question{
	font-weight: 600;
    font-size: 1em;
    font-family: 'Lato', sans-serif;
    margin-left: 12px;
    margin-bottom: 12px;
    text-align: left;
}
.answers {
  margin-bottom: 20px;
  margin-left: 22px;
  margin-top: 6px;
  font-family: 'Rubik', sans-serif;
  font-size: 1em;

}

.answers label{
  display: block;
  cursor: pointer;
}


#submit{
	font-family: 'PT Serif', serif;
	font-size: 18px;
	background-color: #279;
	color: #fff;
	border: 0px;
	border-radius: 3px;
	padding: 9px 16px;
	cursor: pointer;
	margin-bottom: 20px;
}
#submit:hover{
	background-color: #38a;
}

#results{
  float:right;
  font-weight: 600;
  font-size: 1.2em;
  margin-right: 15px;
  margin-bottom: 15px;
  color: #000000;
}
</style>

<body class="quantitative">
    <nav class="logic">
        <div class="logo">
           <img src="../Images/logo1.png" alt="" style="width:70px; height:70px; float:left;">
         <a href="index.php" style="font-size:1.6em; font-family:ui-sans-serif; padding-top:10px; text-decoration:none; display:flex; align-items:center; padding-left:5px;"> <span class="head" style="color:red; font-family: Georgia, serif; text-decoration:line-through; font-size:1.3em; padding-right:6px;">JOB</span> PORTAL</a>
        </div>
        <ul>
        <li><a href="../index.php">Main-Menu</a></li>
        </ul>
     </nav>
    <section class="container">
        <div id="main">
            <h2>Quantitative Aptitude</h2>
            <div id="quiz"></div>
            <button id="submit">Submit Quiz</button>
            <div id="results"></div>
        </div>
    </section>

    <script>
        (function(){
    function buildQuiz(){
      // variable to store the HTML output
      const output = [];
  
      // for each question...
      myQuestions.forEach(
        (currentQuestion, questionNumber) => {
  
          // variable to store the list of possible answers
          const answers = [];
  
          // and for each available answer...
          for(letter in currentQuestion.answers){
  
            // ...add an HTML radio button
            answers.push(
              `<label>
                <input type="radio" name="question${questionNumber}" value="${letter}">
                ${letter} :
                ${currentQuestion.answers[letter]}
              </label>`
            );
          }
  
          // add this question and its answers to the output
          output.push(
            `<div class="question"> ${currentQuestion.question} </div>
            <div class="answers"> ${answers.join('')} </div>`
          );
        }
      );
  
      // finally combine our output list into one string of HTML and put it on the page
      quizContainer.innerHTML = output.join('');
    }
  
    function showResults(){
  
      // gather answer containers from our quiz
      const answerContainers = quizContainer.querySelectorAll('.answers');
  
      // keep track of user's answers
      let numCorrect = 0;
  
      // for each question...
      myQuestions.forEach( (currentQuestion, questionNumber) => {
  
        // find selected answer
        const answerContainer = answerContainers[questionNumber];
        const selector = `input[name=question${questionNumber}]:checked`;
        const userAnswer = (answerContainer.querySelector(selector) || {}).value;
  
        // if answer is correct
        if(userAnswer === currentQuestion.correctAnswer){
          // add to the number of correct answers
          numCorrect++;
  
          // color the answers green
          answerContainers[questionNumber].style.color = '#38b000';
        }
        // if answer is wrong or blank
        else{
          // color the answers red
          answerContainers[questionNumber].style.color = 'red';
        }
      });
  
      // show number of correct answers out of total
      resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
    }
  
    const quizContainer = document.getElementById('quiz');
    const resultsContainer = document.getElementById('results');
    const submitButton = document.getElementById('submit');
    const myQuestions = [
      {
        question: "1. Direction: Two statements are given & then two conclusions – 1 & 2 are given. You have to consider the statement as true though it seems to be different from the actual facts. Then give your answer regarding the given statement that which of the conclusion/s is/are followed by it properly.    Q.1. Statement: 1. All the well-graced people are happy. 2. Any unhappy person is not the well-graced...  Conclusion: 1. Happiness & well-graciousness are correlated 2. Unhappy person is not well-graced",
        answers: {
          a: "Only 1 is followed",
          b: "Only 2 is followed",
          c: "Neither 1 nor 2 is followed",
          d: "1 & 2 – both are followed"
        },
        correctAnswer: "d"
      },
      {
        question: "2. Which word is at last after arranging the following according to dictionary?",
        answers: {
          a: "Satin",
          b: "Satire",
          c: "Saturn",
          d: "Satiate"
        },
        correctAnswer: "c"
      },
      {
        question: "3. Direction: A word is given in each of the following questions. Then four options are given below each word. One of the options is a word which cannot be made using the letters of the given word. Identify that option. 'EXEMPLIFICATION '",
        answers: {
          a: "FIXATION",
          b: "EXAMPLE",
          c: "AXE",
          d: "EXTRA"
        },
        correctAnswer: "d"
      },
      {
        question: "4. Two pipes A and B can fill a tank in 24 hours and hours respectively. Harihar opened the pipes A and B to fill an empty tank and sometimes later he closed the taps A and B , when the tank was supposed to be full. After that it was found that the tank was emptied in 2.5 hours because an outlet pipe 'C' connected to the tank was open from the beginning. If Harihar closed the pipe C instead of closing pipes A and B the remaining tank would have been filled in:",
        answers: {
          a: "8 hours",
          b: "2 hours",
          c: "4 hours",
          d: "9 hours",
          e: "6 hours"
        },
        correctAnswer: "a"
      },
      {
        question: "5. A and B together can do a piece of work in 40 days. A having worked for 20 days, B finishes the remaining work alone in 60 days. In How many days shall B finish the whole work alone?",
        answers: {
          a: "70",
          b: "60",
          c: "90",
          d: "80"
        },
        correctAnswer: "d"
      },
      {
        question: "6. If the total investment flows from FII's were to be doubled in the next year and the investment flows from all other sources had remained constant at their existing levels for this year, then what would be the proportion of FII investment in the total investment into India Bonds next year (in US $ millions)?",
        answers: {
          a: "30%",
          b: "45%",
          c: "85%",
          d: "50%"
        },
        correctAnswer: "b"
      }
    ];
  
    // Kick things off
    buildQuiz();
  
    // Event listeners
    submitButton.addEventListener('click', showResults);
  })();
    </script>
</body>

</html>