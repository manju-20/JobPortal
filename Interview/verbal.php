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
body{
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

#side {
  float: right;
  width: 34%;
  margin-top: 20px;
  margin-left: 2px;
  background-color: #e9ecef;
}

#side h3{
  font-family: 'Roboto Slab', serif;
  font-weight: 600;
  text-align: center;
  margin-bottom: 30px;
  margin-top: 15px;
  text-transform: uppercase;
}

#side .images{
  text-align: center;
  margin-bottom: 10px;
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

<body>
    <nav class="logic">
        <div class="logo">
           <img src="../Images/logo1.png" alt="" style="width:70px; height:70px; float:left;">
         <a href="index.php" style="font-size:1.8em; font-family:ui-sans-serif; padding-top:7px; text-decoration:none; display:flex; align-items:center; padding-left:5px;"> <span class="head" style="color:red; font-family: Georgia, serif; text-decoration:line-through; font-size:1.2em; padding-right:6px;">JOB</span> PORTAL</a>
        </div>
        <ul>
           <li><a href="../index.php">Main-Menu</a></li>
        </ul>
     </nav>
    <div class="container">
        <div id="main">
            <h2>Verbal Reasoning</h2>
            <div id="quiz"></div>
            <button id="submit">Submit Quiz</button>
            <div id="results"></div>
        </div>
    
        <div id="side">
            <h3>Best Companies...</h3>
            <!-- <img src="images/All companies.jpg" alt="" width="350" height="250"> -->
    
            <div class="images">
                <img src="../Images2/adobe.png" alt="" width="75" height="50">
                <img src="../Images2/amd.png" alt="" width="80" height="50">
                <img src="../Images2/fb.jpg" alt="" width="65" height="55">
                <img src="../Images2/IBM.png" alt="" width="85" height="40" style="margin-left: 5px;">
                <img src="../Images2/lenovo.png" alt="" width="80" height="50" style="margin-top:10px; margin-left: -7px;">
                <img src="../Images2/java.png" alt="" width="45" height="60" style="margin-top:10px; margin:0px 10px;">
                <img src="../Images2/oracle.jpg" alt="" width="85" height="35" style="margin-top:10px; margin-left: 10px;">
                <img src="../Images2/google.jpg" alt="" width="50" height="40" style="margin-top:10px; margin-left: 10px;">
                <img src="../Images2/yahoo.png" alt="" width="85" height="40" style="margin-top:10px; margin-left: 10px;">
                <img src="../Images2/wd.png" alt="" width="85" height="30" style="margin-top:10px; margin-left: 10px;">
                <img src="../Images2/sap.jpg" alt="" width="85" height="40" style="margin-top:10px; margin-left: 10px;">
                <img src="../Images2/aws.png" alt="" width="80" height="35" style="margin-top:10px; margin-left: 10px;">
                <img src="../Images2/nvidia.jpg" alt="" width="75" height="45" style="margin-top:10px; margin-left: 10px;">
                <img src="../Images2/apple.jpg" alt="" width="55" height="35" style="margin-top:10px; margin-left: 10px;">
                <img src="../Images2/cisco.jpg" alt="" width="75" height="35" style="margin-top:10px; margin-left: 10px;">
                <img src="../Images2/toshiba.jpg" alt="" width="75" height="30" style="margin-top:10px; margin-left: 10px;">
                <img src="../Images2/hp.png" alt="" width="60" height="35" style="margin-top:10px; margin-left: 10px;">
                <img src="../Images2/microsoft.png" alt="" width="75" height="35" style="margin-top:10px; margin-left: 10px;">
                <img src="../Images2/dell.jpg" alt="" width="55" height="35" style="margin-top:10px; margin-left: 10px;">
            </div>
        </div>
    
    </div>
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
        question: "1. Choose the combination of words that is most suitable to fill in the blanks: Work-life balance schemes in the workplace have been __________ by employees and increase morale and ________ at work.",
        answers: {
          a: "commended, motivate",
          b: "celebrated, discourage",
          c: "condemned, inspiration",
          d: "applauded, motivation",
          e: "criticised, inspired"
        },
        correctAnswer: "d"
      },
      {
        question: "2. Just as the sun’s rays can be focused on by a magnifying glass to burn a piece of paper, high-intensity ultrasound waves can be concentrated to burn human tissue. The waves are harmless until they converge at the focal point, so a surgeon can operate deep inside the body without harming the surrounding tissue. HIFU requires no cuts to be made, and many operations don’t even need an anaesthetic so that the patient can be in and out of hospital within a day.. How can HIFU enable the early release of patients from the hospital?",
        answers: {
          a: "Ultrasound waves can be very focused.",
          b: "It allows for very deep penetration into the body.",
          c: "It is harmless.",
          d: "No cuts are required."
        },
        correctAnswer: "d"
      },
      {
        question: "3.Choose the word among the answers that can best replace the capitalized word in the sentence: The new ceo PLEDGED to deal with the company's environmental issues.",
        answers: {
          a: "Implicated",
          b: "Negated",
          c: "Affirmed",
          d: "Engrossed"
        },
        correctAnswer: "c"
      },
      {
        question: "4. Butterfly → caterpillar : toad → ?",
        answers: {
          a: "tadpole",
          b: "frog",
          c: "swamp",
          d: "fly",
          e: "lizard"
        },
        correctAnswer: "a"
      },
      {
        question: "5. Please identify which type of error appears in the sentence: The heat of the desert affected the traveller greatly, and he regretted not leaving with the professor whom had offered him a ride to the city.",
        answers: {
          a: "Grammer",
          b: "Spelling",
          c: "Punctuation and capitalization",
          d: "None of the above"
        },
        correctAnswer: "a"
      },
      {
        question: "6. Please select a pair of words that have a similar relationship:  sand : glass",
        answers: {
          a: "cotton : wool",
          b: "tree : paper",
          c: "seed : flower",
          d: "stove : oven"
        },
        correctAnswer: "b"
      },
      {
        question: "7. NEUTRAL means the same as…",
        answers: {
          a: "BEIGE",
          b: "TERRITORY",
          c: "NONCOMMITTAL",
          d: "BLAND",
          e: "FLAG"
        },
        correctAnswer: "c"
      },
      {
        question: "8. Select the word that is spelled incorrectly:",
        answers: {
          a: "apprehensive",
          b: "deduction",
          c: "retreive",
          d: "misspell"
        },
        correctAnswer: "c"
      },
      {
        question: "9. The new health and safety regulations state that helmets should be worn and fastened and the head torch operating at all times whilst working within the mine. Other safety devices would be prioritised according to the previous depth regulations and following the mine's security engineer daily instructions. On dates of detonations, maximal safety wear should be implemented inside and within a 500 meters external diameter outside the mine with no exception. The mine's security engineer is the only source of authority to decide which safety gear is worn by miners.",
        answers: {
          a: "True",
          b: "False",
          c: "Cannot say"
        },
        correctAnswer: "b"
      },
      {
        question: "10. IMPERIOUS is the opposite of...",
        answers: {
          a: "ARROGANT",
          b: "MOODY",
          c: "SUBSERVIENT",
          d: "QUIET",
          e: "STORMY"
        },
        correctAnswer: "c"
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