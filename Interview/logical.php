<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Logical Reasoning</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');
.container{
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
  font-size:1.1em; 
  letter-spacing: 0.5px;
  transition: all 0.3s ease;
}

nav ul li a:hover{
  color: #111;
  text-decoration: none;
}

#main {
    float: left;
    width: 63%;
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

 #side {
  float: right;
  width: 34%;
  margin-top: 20px;
  margin-left: 2px;
  background-color: #e9ecef;
}

.cards{
  max-width: 100%;
  margin: 0 auto;
  padding: 10px;
}

h2{
  background-color: #e0aaff;
  padding: 15px;
  font-size: 30px;
  margin: 0 0 30px 0;
  text-transform: uppercase;
  letter-spacing: 1px;
  text-align: center;
}

.cards img{
  margin-bottom: 10px;
}


.content{
  margin: 10px;
  width: auto;
  padding: 10px;
  border: 2px solid black;
  border-radius: 4px;
  transition: all .3s ease;
}

.content > *{
  flex: 1 1 100%;
}

.content-2 a:hover{
  color: white;
  background-color: #000000;
  padding: 5px 8px;
  border-radius: 15px;
  font-size: 1em;
} 

 .content h3{
  font-size: 1.1em;
  font-weight: bold;
  margin: 16px 0;
  letter-spacing: 1px;
  text-transform: uppercase;
}  

.content p{
  font-size: 16px;
  font-family: 'Poppins',sans-serif;
}

.content a{
  color: white;
  background-color: #000000;
  padding: 5px 8px;
  border-radius: 15px;
  font-size: 1em;
}

.content a:hover{
  color: #fb5607;
  background-color: #caf0f8;
  text-decoration: none;
  font-weight: 600;
}

.question{
	font-weight: 600;
    font-size: 1em;
    font-family: 'Lato', sans-serif;
    margin-left: 12px;
    margin-right: 12px;
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

<body>
   <nav class="logic">
      <div class="logo">
         <img src="../Images/logo1.png" alt="" style="width:70px; height:70px; float:left;">
       <a href="index.php" style="font-size:2.1em; font-family:ui-sans-serif; padding-top:7px; text-decoration:none; display:flex; align-items:center; padding-left:5px;"> <span class="head" style="color:red; font-family: Georgia, serif; text-decoration:line-through; font-size:1.2em; padding-right:6px;">JOB</span> PORTAL</a>
      </div>
      <ul>
         <li><a href="../index.php">Main Menu</a></li>
      </ul>
   </nav>
   <section class="container">
      <div id="main">
         <h2>Logical Reasoning</h2>
         <div id="quiz"></div>
         <button id="submit">Submit Quiz</button>
         <div id="results"></div>
      </div>

      <div id="side">
         <h2 class="header" style="
      color: #f8f9fa;">
            Career Guidance
         </h2>
         <div class="cards">

            <div class="services">
               <div class="content content-1">
                  <h3>
                     Interview Experiences
                  </h3>
                  <img src="../Images/interview.jpg" alt="" width="310">
                  <h4 style="font-size: 1em; color: #9d4edd;">Hinduja Global Solutions: Interview Experience of fresher
                  </h4>
                  <p>
                     I applied for this job role at Hinduja Global Solutions via my college’s Training and Placement
                     Office. So did all my other classmates who met the eligibility criteria of HGS....
                  </p>
                  <a href="#">Read More</a>
               </div>
               <div class="content content-2">
                  <h3>
                     Covid-19 Resources.
                  </h3>
                  <img src="../Images/covid-19.jpg" alt="" width="310">
                  <h4 style="font-size: 1em; color: #9d4edd;">How to get a job as fresher in covid-19 pandemic?</h4>
                  <p>
                     If you are looking forward to getting your career started this year, finding new job opportunities
                     during COVID-19 is not going to be the same game. The pandemic has certainly …
                  </p>
                  <a href="#">Read More</a>
               </div>
               <div class="content content-3">
                  <h3>
                     Career Management.
                  </h3>
                  <img src="../Images/freshers.jpg" alt="" width="310">
                  <h4 style="font-size: 1em; color: #9d4edd;">Ways freshers can grow in a new job</h4>
                  <p>
                     Congratulations on your new job! You must have already planned the ways you will follow to excel in
                     your new role. If you haven’t done it yet, we advise you …
                  </p>
                  <a href="#">Read More</a>
               </div>
            </div>
         </div>
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
        question: "1. Look at this series: 12, 11, 13, 12, 14, 13, … What number should come next?",
        answers: {
          a: "10",
          b: "16",
          c: "15",
          d: "13"
        },
        correctAnswer: "c"
      },
      {
        question: "2. Pick the odd one out?",
        answers: {
          a: "just",
          b: "fair",
          c: "equitable",
          d: "biased"
        },
        correctAnswer: "d"
      },
      {
        question: "3. Paw : Cat :: Hoof : ?",
        answers: {
          a: "Lamb",
          b: "Horse",
          c: "Elephant",
          d: "Tiger"
        },
        correctAnswer: "d"
      },
      {
        question: "4. An Informal Gathering occurs when a group of people get together in a casual, relaxed manner. Which situation below is the best example of an Informal Gathering?",
        answers: {
          a: "A debating club meets on the first Sunday morning of every month.",
          b: "After finding out about his salary raise, Jay and a few colleagues go out for a quick dinner after work.",
          c: "Meena sends out 10 invitations for a bachelorette party she is giving for her elder sister.",
          d: "Whenever she eats at a Chinese restaurant, Roop seems to run into Dibya."
        },
        correctAnswer: "b"
      },
      {
        question: "5.  CUP : LIP :: BIRD : ?",
        answers: {
          a: "GRASS",
          b: " FOREST",
          c: "BEAK",
          d: "BUSH"
        },
        correctAnswer: "c"
      },
      {
        question: "6. AMB, CLB, BKC, DJC, ______",
        answers: {
          a: "EID",
          b: "CJD",
          c: "EIF",
          d: "EJF"
        },
        correctAnswer: "c"
      },
      {
        question: "7. FAG, GAF, HAI, IAH, ___",
        answers: {
          a: "JAK",
          b: "HAL",
          c: "HAK",
          d: "JAI"
        },
        correctAnswer: "a"
      },
      {
        question: "8. Look at this series: 53, 53, 40, 40, 27, 27, ... What number should come next?",
        answers: {
          a: "12",
          b: "14",
          c: "27",
          d: "53"
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