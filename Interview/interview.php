<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interview</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');

        nav.logic {
            display: flex;
            height: 75px;
            width: 100%;
            background: #e9ecef;
            align-items: center;
            justify-content: space-between;
            padding: 0 50px 0 10px;
            flex-wrap: wrap;
            margin-top: -10px;
            margin-bottom: 15px;
        }

        nav ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin-top: 18px;
        }

        nav ul li {
            margin: 0 5px;
        }

        nav ul li a {
            color: #6c757d;
            font-family: 'Roboto Slab', serif;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 15px;
            margin-right:25px;
            font-size: 1em;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        body section {
            background-color: #e9e6da;
        }

        #main img {
            height: 350px;
            width: 100%;
            object-fit: cover;
            box-shadow: 0 0 7px #333;
        }

        .container {
            width: 95%;
            margin: auto;
            overflow: hidden;
        }

        #main-col {
            margin-top: 20px;
            float: left;
            width: 70%;
            border: 2px solid #e9ecef;
            background-color: #f8f9fa;
            box-shadow: 2px 2px 2px 2px 1px #dee2e6;
            border-radius: 5px;
        }

        h2 {
            font-size: 2em;
            opacity: 0.8;
        }

        #sidebar {
            float: right;
            width: 29%;
            margin-top: 10px;
        }

        .dark {
            /* background: black;
            color: white; */
            border-radius: 5px;
            padding: 15px;
            margin-top: 10px;
            margin-bottom: 16px;
            background-color: #e9ecef;
            box-shadow: 5px 0 5px -5px #333;
            box-shadow: 0 0 5px #333;


        }

        .popular {
            border: 1px solid #adb5bd;
        }


        button {
            width: 100%;
            background-color: #e9ecef;
            margin: auto;
            color: #495057;
            font-family: 'Rubik', sans-serif;
            border: 1px solid #e9ecef;
        }

        button i {
            float: right;
            margin-right: 25px;

        }

        .hidden {
            padding-top: 8px;
            padding-bottom: 8px;
            padding-left: 40px;
            text-align: left;
            font-size: 1.5em;
        }

        #SectionName {
            line-height: 25px;
            width: 85%;
            margin: auto;
        }

        #sectionname {
            line-height: 25px;
            width: 85%;
            margin: auto;
        }

        #Sectionname {
            line-height: 25px;
            width: 85%;
            margin: auto;
        }

        #sectionName {
            line-height: 25px;
            width: 85%;
            margin: auto;
        }

        #sectioNName {
            line-height: 25px;
            width: 85%;
            margin: auto;
        }

        #SectioNName {
            line-height: 25px;
            width: 85%;
            margin: auto;
        }


        #SEctioNName {
            line-height: 25px;
            width: 85%;
            margin: auto;
        }

        #SECtioNName {
            line-height: 25px;
            width: 85%;
            margin: auto;
        }

        #SECTioNName {
            line-height: 25px;
            width: 85%;
            margin: auto;
        }

        #SECTIoNName {
            line-height: 25px;
            width: 85%;
            margin: auto;
        }


        .text p {
            width: 90%;
            margin: auto;
            font-size: 1.1em;
            font-family: 'Nunito Sans', sans-serif;
        }

        .moreText {
            display: none;
        }

        .read-more-btn {
            color: #00bbf9;
            border: none;
            outline: none;
            font-size: 18px;
            cursor: pointer;
            text-decoration: none;
            margin-top: 35px;
            margin-bottom: 35px;
            margin-left: 35px;
        }

        .text.show-more .moreText {
            display: inline;
        }

        .text.show-more .dots {
            display: none;
        }

        /* .resume  i{
            font-size: 2em;
        } */

        .resume a {
            text-decoration: none;
            font-size: 1.8em;
            font-weight: 500;
            padding-left: 10px;
            color: #495057;
            margin-bottom: 10px;
        }

        .resume a i {
            margin-right: 10px;
            margin-bottom: 15px;
        }

        #sidebar .create {
            width: 90%;
            margin: auto;
            padding: 8px 0;
            text-align: center;
            border: 1px solid #00b4d8;
            border-radius: 5px;
        }

        #sidebar .create a {


            text-decoration: none;
            color: #00b4d8;
            font-size: 1.7em;
        }

        #sidebar .create:hover {
            color: #90e0ef;
            background-color: #dee2e6;
        }

        .jobs h3 {
            font-family: 'Crimson Text', serif;
            font-size: 1.2em;
            cursor: pointer;
        }

        .jobs p {
            margin-top: -10px;
            margin-left: 10px;
            font-family: 'Abel', sans-serif;
        }

        .jobs a i {
            margin-left: 5px;

        }

        .jobs a {
            text-decoration: none;
            font-size: 1em;
            font-weight: 500;
            /* padding-left: 10px; */
            color: #495057;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .jobs a i {
            margin-right: 10px;
            margin-bottom: 15px;
        }
    </style>

</head>

<body>
    <header>
        <header>
            <nav class="logic">
                <div class="logo">
                    <img src="../Images/logo1.png" alt="" style="width:70px; height:70px; float:left;">
                    <a href="index.php" style="font-size:1.9em; font-family:ui-sans-serif; padding-top:10px; text-decoration:none; display:flex; align-items:center; padding-left:5px;"> <span class="head" style="color:red; font-family: Georgia, serif; text-decoration:line-through; font-size:1.3em; padding-right:6px;">JOB</span> PORTAL</a>
                </div>
                <ul>
                    <li><a href="company.php">Main-Menu</a></li>
                </ul>
            </nav>
        </header>
    </header>
    <div id="main">
        <img src="../Group 4.png" alt="">
    </div>
    <!-- <div >
        <div class="button">
            <button ONCLICK="ShowAndHide()">Click me</button>

            <div id="SectionName" style="display:none">Text to be shown and hidden</div>
        </div>
    </div> -->

    <section id="main">
        <div class="container">
            <h2>Your Interview Questions And Answers</h2>
            <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 500; text-decoration: underline;">
                Here the Name and details are just an Example...</p>
            <article id="main-col">
                <div class="button" style="box-shadow: 0 0 4px #333;background-color: #e9e6da;">
                    <button ONCLICK="ShowAndHide()" class="hidden" style="padding: 15px 0px 15px 35px; border-bottom: 1px solid #adb5bd; border-radius: 5px;  cursor:pointer;">Tell
                        Me About
                        Yourself ?
                        <i class="fas fa-angle-down"></i>
                    </button>

                    <div id="SectionName" style="display:none;">
                        <p class="text"> <br> Sir/Ma’am, <br> <br>

                            My name is Naveen N. I was born and brought up in Bengaluru / Bangalore and I am presently
                            based out of same location. <br> <br>

                            My highest degree is a full time BCA / BCM in Computers from New Horizon College of
                            Engineering, Bengaluru that I completed in Mar-2021. My Percentage is 76.15. <br> <br>

                            My Computers degree(s) has given a range of skills that I feel are crucial for my career and
                            life. Despite limited exposure, I have understood that hard work and determination can make
                            anything possible. I am ready to do that. Also, I am trying to develop a habit of reading
                            current trends and industry news. <br> <br>

                            When it comes to schooling, I secured 55.0% in my XIIth Karnataka Senior Secondary
                            examination in 2018 in English medium with 80 marks in Maths and<span class="dots">
                                ...</span> <span class="moreText"> 53 marks in English. In Xth CISCE(ICSE/ISC) Board, I
                                got 70.0%. During my schooling, I developed strong communication skills and also had the
                                opportunity to participate and excel in several extracurricular activities. Because of
                                these exposures and experiences during my academic years, I have gradually been able to
                                develop effective communication skills. So, I can interact freely within a team. <br>
                                <br>

                                Lastly, I am a quick learner and believe in learning from my past mistakes. This is a
                                virtue as it can take me ahead in both my professional and personal life. <br> </span>
                        </p>
                        <a href="#" class="read-more-btn">Read More</a>

                    </div>
                    <div class="button">
                        <button ONCLICK="showandhide()" class="hidden" style="padding: 15px 0px 15px 35px; border-bottom: 1px solid #adb5bd; border-radius: 5px; cursor:pointer;">Why
                            Should We Hire You?
                            <i class="fas fa-angle-down"></i>
                        </button>

                        <div id="sectionname" style="display:none">
                            <p class="text"> <br> Sir/Ma’am, <br> <br>

                                Having graduated from New Horizon College of Engineering, Bengaluru, which is one of the
                                reputed colleges in the country, has exposed me to interaction and teamwork with
                                students with high intellect and belonging to various cultures and backgrounds. Also,
                                studying in this college gave me immense opportunities to delve in various
                                extracurricular activities. I believe that apart from a good academic background, these
                                qualities go a long way in shaping personalities and creating efficient workforce. <br>
                                <br>

                                I genuinely believe that all these qualities make me a perfect fit for this job role.
                        </div>
                        <br>
                        <div class="button">
                            <button ONCLICK="Showandhide()" class="hidden" style="padding: 15px 0px 15px 35px; border-bottom: 1px solid #adb5bd; border-radius: 5px; cursor:pointer;">What
                                Is Your Short And Long Term Goals?
                                <i class="fas fa-angle-down"></i>
                            </button>

                            <div id="Sectionname" style="display:none">
                                <p class="text"> <br> Sir/Ma’am, <br> <br>
                                    My short term goals are to simply break into the Computers field. As a college
                                    graduate, I need to start building a strong presence in the industry, working for a
                                    company I respect and doing a job that I enjoy. I am really excited to apply the
                                    learnings of my degree - BCA / BCM to solve real world problems. <br> <br>

                                    My long term goals are to earn new responsibilities within the company, ultimately
                                    reaching higher positions as they open and helping the company succeed in the long
                                    term.
                            </div>
                            <br>
                            <div class="button">
                                <button ONCLICK="showandHide()" class="hidden" style="padding: 15px 0px 15px 35px; border-bottom: 1px solid #adb5bd; border-radius: 5px; cursor:pointer;">Tell
                                    Us More About Your Project And
                                    Internships?
                                    <i class="fas fa-angle-down"></i>
                                </button>

                                <div id="sectionName" style="display:none">
                                    <p class="text"> <br> Sir/Ma’am, <br> <br>
                                        I have always believed that internships are a great way to apply the knowledge
                                        from the classroom to real-world experience. It not only boost our confidence
                                        but also help in developing the soft skills that are much needed at workplace
                                        and in leadership positions. <br> <br>

                                        Unfortunately, I haven’t really got an opportunity to intern with a company till
                                        now. <br> <br>

                                        As far as academic projects are concerned, I am aware that project work enables
                                        students to think out of the box owing to the creative levels of imagination.
                                        Right from choosing a topic from an area of interest, project work involves
                                        finding creative solutions to various project-related problems and many
                                        technical challenges. <br> <br>

                                        However, I don’t have any real time project experience as such. Having said
                                        that, I would like to mention that I’m really excited about this opportunity
                                        because I think it will give me the right exposure and develop my skills
                                        further.
                                </div>
                                <br>
                                <div class="button">
                                    <button ONCLICK="showAndhide()" class="hidden" style="padding: 15px 0px 15px 35px; border-bottom: 1px solid #adb5bd; border-radius: 5px; cursor:pointer;">Tell
                                        Us About Yours Past WorK
                                        Experience?
                                        <i class="fas fa-angle-down"></i>
                                    </button>

                                    <div id="sectioNName" style="display:none">
                                        <p class="text"> <br> Sir/Ma’am, <br> <br>
                                            I have always believed that internships are a great way to apply the
                                            knowledge from the classroom to real-world experience. It not only boost our
                                            confidence but also help in developing the soft skills that are much needed
                                            at workplace and in leadership positions. <br> <br>

                                            Unfortunately, I haven’t really got an opportunity to intern with a company
                                            till now. <br> <br>

                                            As far as academic projects are concerned, I am aware that project work
                                            enables students to think out of the box owing to the creative levels of
                                            imagination. Right from choosing a topic from an area of interest, project
                                            work involves finding creative solutions to various project-related problems
                                            and many technical challenges. <br> <br>

                                            However, I don’t have any real time project experience as such. Having said
                                            that, I would like to mention that I’m really excited about this opportunity
                                            because I think it will give me the right exposure and develop my skills
                                            further.
                                    </div>
                                    <br>
                                    <div class="button">
                                        <button ONCLICK="sHowAndhide()" class="hidden" style="padding: 15px 0px 15px 35px; border-bottom: 1px solid #adb5bd; border-radius: 5px; cursor:pointer;">What
                                            Is The Biggest Acheivement
                                            Till Date?
                                            <i class="fas fa-angle-down"></i>
                                        </button>

                                        <div id="sEctioNName" style="display:none">
                                            <p class="text"> <br> Sir/Ma’am, <br> <br>
                                                When it comes to my achievements, I am proud of many things that I have
                                                accomplished in the past few years. <br><br>

                                                My biggest academic achievement was completing my BCA / BCM degree with
                                                a 76.15%. I would also like to mention that I secured 55.0% in my XIIth
                                                board, with 80 marks in Maths, 53 marks in English and 70.0% in my Xth
                                                board, which I feel are also are academic achievements. <br><br>

                                                Being a hard worker, a positive and an adaptable person, I feel I am
                                                ready to jump start my career. I have good communication skills, I am
                                                ambitious and also a hard worker. Hence, I feel I will be able to
                                                contribute to this position substantially and also add many more
                                                achievements to my resume in the days ahead.
                                        </div>
                                        <br>
                                        <div class="button">
                                            <button ONCLICK="sHOwAndhide()" class="hidden" style="padding: 15px 0px 15px 35px; border-bottom: 1px solid #adb5bd; border-radius: 5px; cursor:pointer;">What
                                                Are Your Strength And
                                                Weakness?
                                                <i class="fas fa-angle-down"></i>
                                            </button>

                                            <div id="sECtioNName" style="display:none">
                                                <p class="text"> <br> Sir/Ma’am, <br> <br>
                                                    I enjoy working in a team or a group and I feel my collaborative
                                                    nature is my biggest strength. During every single academic project,
                                                    I worked side-by-side with every member involved to achieve the
                                                    target. By nature, I am an empathetic person and I can relate to
                                                    people and understand their needs easily. Also, I work well under
                                                    pressure and I have never missed a deadline in my academic years.
                                                    <br><br>

                                                    My weakness is that I can be overly critical of myself. On
                                                    completing a project, I always have a feeling that it could have
                                                    been done in a better way. This happens even after I receive a
                                                    positive response which leads me to overwork and often I am left
                                                    feeling burned out.
                                            </div>
                                            <br>
                                            <div class="button">
                                                <button ONCLICK="sHOWAndhide()" class="hidden" style="padding: 15px 0px 15px 35px; border-bottom: 1px solid #adb5bd; border-radius: 5px; cursor:pointer;">Are
                                                    You Willing To
                                                    Relocate Or Travel?
                                                    <i class="fas fa-angle-down"></i>
                                                </button>

                                                <div id="sECTioNName" style="display:none">
                                                    <p class="text"> <br> Sir/Ma’am, <br> <br>
                                                        My preferred work location is Bengaluru / Bangalore. However, I
                                                        am absolutely willing to relocate and travel if needed for the
                                                        right opportunity. And I believe that this role and company is
                                                        one such good opportunity for my career growth. <br> <br>

                                                        Also, I can start working Immediately.
                                                </div>
                                                <br>
                                                <div class="button">
                                                    <button ONCLICK="sHOWANdhide()" class="hidden" style="padding: 15px 0px 15px 35px; border-bottom: 1px solid #adb5bd; border-radius: 5px; cursor:pointer;">Do
                                                        You Have Any
                                                        Questions For Me?
                                                        <i class="fas fa-angle-down"></i>
                                                    </button>

                                                    <div id="sECTIoNName" style="display:none">
                                                        <p class="text"> <br> Sir/Ma’am, <br> <br>
                                                            1. Can you throw some light on the day-to-day
                                                            responsibilities of this job ? <br><br>

                                                            2. What important qualities are you looking in a person who
                                                            you would want to excel in this role ? <br><br>

                                                            3. What are your expectations from this role in the first 90
                                                            days ? <br><br>

                                                            4. How would you describe the company’s culture ? <br><br>

                                                            5. Who do you consider your top competitor and why ?
                                                            <br><br>
                                                    </div>
                                                    <br>

            </article>

            <aside id="sidebar">
                <div class="dark" style="box-shadow: 0 0 4px #333;">
                    <div class="resume">
                        <a href="#" style="font-family: 'Libre Baskerville', serif;;"><i class="fas fa-file-alt"></i> Resume Maker</a>
                    </div>
                    <p style="font-family: 'Abel', sans-serif;">
                        Based on your profile create your resume, free to download..
                    </p>
                    <div class="create">
                        <a href="">Create Your Resume</a>
                    </div>
                </div>
                <div class="dark" style="box-shadow: 0 0 4px #333;">
                    <div class="resume">
                        <a href="#" style="font-family: 'Libre Baskerville', serif; font-weight: 600;"> Popular Jobs</a>
                    </div>
                    <!-- <p>
                        Register To Apply for jobs And Internships...
                    </p>
                    <div class="create">
                        <a href="">Create Your Account</a>
                    </div>
                    <div>
                        <p style="font-size: 1.2em; text-align: center;">Already registered ? <a href="#"
                                style="text-decoration: none; color: #f77f00;">Login Now</a></p>
                    </div> -->
                    <div class="jobs">
                        <div class="job1">
                            <h3>1. Human Resource Manager</h3>
                            <p>Hiring Manager</p>
                            <a href="#" style="margin-top: -10px;"><i class="fas fa-map-marker-alt"></i>E-city</a>
                        </div>
                        <div class="job2">
                            <h3>2. Budget/Accounting Analyst</h3>
                            <p>Accounting of Company</p>
                            <a href="#" style="margin-top: 10px;"><i class="fas fa-map-marker-alt"></i>Marathalli</a>
                        </div>
                        <div class="job1">
                            <h3>3. Programme Analyst</h3>
                            <p>Anlalyze the program and check errors</p>
                            <a href="#" style="margin-top: -10px;"><i class="fas fa-map-marker-alt"></i>Lalbhagh Jn</a>
                        </div>
                        <div class="job1">
                            <h3>4. Operations Executive</h3>
                            <p>Econship Tech Pvt. Ltd</p>
                            <a href="#" style="margin-top: -10px;"><i class="fas fa-map-marker-alt"></i>Banashankri</a>
                        </div>
                    </div>
                </div>

            </aside>
        </div>
    </section>

    <script>
        function ShowAndHide() {
            var x = document.getElementById('SectionName');
            if (x.style.display == 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

        function showandhide() {
            var x = document.getElementById('sectionname');
            if (x.style.display == 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

        function Showandhide() {
            var x = document.getElementById('Sectionname');
            if (x.style.display == 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

        function showandHide() {
            var x = document.getElementById('sectionName');
            if (x.style.display == 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

        function showAndhide() {
            var x = document.getElementById('sectioNName');
            if (x.style.display == 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

        function sHowAndhide() {
            var x = document.getElementById('sEctioNName');
            if (x.style.display == 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

        function sHOwAndhide() {
            var x = document.getElementById('sECtioNName');
            if (x.style.display == 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

        function sHOWAndhide() {
            var x = document.getElementById('sECTioNName');
            if (x.style.display == 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

        function sHOWANdhide() {
            var x = document.getElementById('sECTIoNName');
            if (x.style.display == 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }


        const readMoreBtn = document.querySelector(".read-more-btn");
        const text = document.querySelector(".text");

        readMoreBtn.addEventListener("click", (e) => {
            text.classList.toggle("show-more");
            if (readMoreBtn.innerText === "Read More") {
                readMoreBtn.innerText = "Read Less";
            } else {
                readMoreBtn.innerText = "Read More";
            }
        });
    </script>
</body>

</html>