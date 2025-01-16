<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EDOFOX</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Handlee&family=Patrick+Hand&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
    </style>

    <!-- STYLES -->

    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Raleway";
        }

        .header {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 4rem;
            background: rgb(251, 123, 63);
            background: linear-gradient(90deg, rgba(251, 123, 63, 1) 32%, rgba(252, 70, 70, 1) 100%);

        }

        .logo {
            height: 3.5rem;
            width: 2.5rem;
        }

        .logo-text {

            height: 3rem;

        }

        .navigation ul {
            display: flex;
            flex-direction: row;
            column-gap: 5rem;
            list-style-type: none;
            text-decoration: none;

        }

        .navigation ul li a {
            text-decoration: none;
            color: white;
            font-size: 1.5rem
        }

        .sign-up-btn {
            padding: 0.8rem;
            font-size: 1.2rem;
            background-color: yellow;
            border-width: 0;
            border-radius: 0.2rem
        }

        /* home */

        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            column-gap: 1rem;
            border: 2px solid blue;
        }

        .home-headings {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 5rem;
        }

        .home-headings h1 {
            font-size: 3rem;
        }

        .home-headings p {
            font-size: 1rem;
            margin-top: 1rem;
        }

        .home-buttons {
            display: flex;
            flex-direction: row;
            column-gap: 1rem;
            margin-top: 2rem;
        }

        .signup-free-btn {
            font-size: 1.2rem;
            border-width: 0;
            background-color: #fb7b3f;
            color: white;
            padding: 1rem;
            border-radius: 0.3rem;
            min-width: 15rem;
        }

        .online-demo-btn {
            font-size: 1.2rem;
            border-width: 0.25rem;
            border-color: #ff7b1b;
            border-radius: 0.3rem;
            background-color: white;
            padding: 1rem;
            min-width: 15rem;
        }

        .home-img-container img {
            max-width: 40rem;
            max-height: 40rem;
        }

        /* features */

        .features-container {}

        .features-heading {
            text-align: center;
        }

        .features-heading h1 {
            font-size: 2.5rem;
            margin-top: 2rem;
        }

        .features-heading p {
            font-size: 1rem;
            margin-top: 1rem;
        }

        .features-grid-container {
            margin-top: 1rem;

            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr;

            padding: 2rem;
            border: 2px solid green;
        }

        .feature {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            padding: 3rem;
            text-align: center;
        }

        .feature img {
            width: 5rem;
            height: 5rem;
        }

        .feature h1 {
            margin-top: 1rem;
        }

        .feature p {
            margin-top: 1rem;
        }

        /* customers */
        .customers-container {
            margin-top: 1rem;
            border: 2px red solid;
        }

        .customers-container h1 {
            font-size: 2.5rem;
            text-align: center;
            margin-top: 1rem;
        }

        .scroller-container {
            margin-top: 2rem;
            overflow: hidden;
        }

        .scroll-images {
            display: flex;
            width: 100%;
            animation: scroll 50s linear infinite;

            padding: 1rem;
            column-gap: 1.5rem;
        }

        .scroll-images img {
            width: 100%;
            height: 7rem;
        }

        /* Keyframes for scrolling effect */
        @keyframes scroll {
            from {
                transform: translateX(0);
                /* Start position */
            }

            to {
                transform: translateX(-550%);
                /* End position */
            }
        }

        /* services */
        .services-container {
            padding-top: 3rem;
            background-color: rgb(216, 235, 252);
        }

        .services-container h1 {
            font-size: 2.5rem;
            text-align: center;
        }

        .service {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;

            padding: 2rem 9rem;
            column-gap: 3rem;
        }

        .service img {
            width: 30rem;
            height: 30rem;

            border-radius: 15rem;
        }

        .service-text p {
            margin-top: 2rem;
        }

        .service-text button {
            margin-top: 2rem;
        }

        .service button {
            font-size: 1rem;
            padding: 1rem;
            border-radius: 1rem;
            border-width: 0;
            background-color: #ff7b1b;
            color: white;
        }

        /* red-section */
        .red-section {
            background-color: rgb(230, 21, 21);
            color: white;

            padding: 3rem 1rem;
        }

        .red-section h1 {
            text-align: center;
            padding: 2rem 7rem;
            font-size: 2.5rem;
        }

        .red-section span {
            color: black;
        }

        .info-container {
            margin-top: 1rem;
            display: flex;
            flex-direction: row;
            justify-content: center;
            column-gap: 4rem;
        }

        .info {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .info img {
            width: 7rem;
            height: 7rem;
        }

        .info-text h2 {
            font-size: 2.5rem;
        }

        .info-text p {
            margin-top: 1rem;
        }

        /* social links */
    </style>
</head>

<body>

    <!-- Navigation header -->
    <header>
        <div class="header">
            <div class>
                <img class="logo" src="<?php echo base_url('images/home/edofox-logo.png'); ?>" alt="logo">
                <img class="logo-text" src="<?php echo base_url('images/home/edofox-logo-text.png'); ?>" alt="logo text">
            </div>
            <nav class="navigation">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                </ul>
            </nav>

            <button class="sign-up-btn">Sign Up</button>
        </div>
    </header>

    <!-- Home page headings and image -->
    <section class="grid-container">
        <div class="home-headings">
            <h1>
                All-in-one <br /> Solution for <br /> Educational institutes
            </h1>
            <p>
                One stop solution to solve all of your problems starting from Admissions to
            </p>
            <p>
                Assessments, Parent communication, Fees Management and much more. </p>
            <p>
                Launch Your own academy Software Now!
            </p>
            <div class="home-buttons">
                <button class="signup-free-btn">Sign Up for Free Trial</button>
                <button class="online-demo-btn">Book an Online Demo</button>
            </div>
        </div>
        <div class="home-img-container">
            <img src="<?php echo base_url('images/home/home-page-img.png') ?>" alt="home page computers image">
        </div>
    </section>

    <!-- Our Features -->
    <section class="features-container">
        <div class="features-heading">
            <h1>Our Features</h1>
            <p>EDOFOX, is new-age EdTech online assessment platform, offering features that enable you to manage any function of your education/ coaching institute</p>
        </div>
        <div class="features-grid-container">
            <div class="feature">
                <img src="<?php echo base_url('images/features/super-fast-exam-creation.png') ?>" alt="">
                <h1>Super Fast Exam Creation</h1>
                <p>In 15 mins, convert any type of PDF in online exam</p>
            </div>

            <div class="feature">
                <img src="<?php echo base_url('images/features/cloud-based-omr.png') ?>" alt="">
                <h1>Cloud Based OMR</h1>
                <p>In minutes Automate offline MCQ tests and publish them</p>
            </div>

            <div class="feature">
                <img src="<?php echo base_url('images/features/realtime-attendance.png') ?>" alt="">
                <h1>Realtime Attendance</h1>
                <p>Integrate your biometric devices to track student’s attendance</p>
            </div>

            <div class="feature">
                <img src="<?php echo base_url('images/features/crm-and-marketing.png') ?>" alt="">
                <h1>CRM and Marketing</h1>
                <p>Manage all of your admission enquiries at one place</p>
            </div>

            <div class="feature">
                <img src="<?php echo base_url('images/features/online-fees-collection.png') ?>" alt="">
                <h1>Online Fees Collection</h1>
                <p>Seamless fees management for online and cash payments</p>
            </div>

            <div class="feature">
                <img src="<?php echo base_url('images/features/parent-communication.png') ?>" alt="">
                <h1>Parent Communication</h1>
                <p>Notify parents about performance, notices and attendance</p>
            </div>

            <div class="feature">
                <img src="<?php echo base_url('images/features/doubt-management.png') ?>" alt="">
                <h1>Doubt management</h1>
                <p>Resolve all your student doubts on one dashboard</p>
            </div>

            <div class="feature">
                <img src="<?php echo base_url('images/features/timetable-and-planner.png') ?>" alt="">
                <h1>Timetable and planner</h1>
                <p>Digitize your academic plan into a digital time table</p>
            </div>

            <div class="feature">
                <img src="<?php echo base_url('images/features/question-bank.png') ?>" alt="">
                <h1>Question bank</h1>
                <p>Digitize your PDF questions into massive online question bank</p>
            </div>
        </div>
    </section>

    <!-- Our Customers -->
    <section class="customers-container">
        <h1>Our Customers</h1>
        <div class="scroller-container">
            <div class="scroll-images">
                <img src="<?php echo base_url('images/customers/abs.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/ambitious.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/anees-defence.webp') ?>" alt="">
                <img src="<?php echo base_url('images/customers/bandewar.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/bansal.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/basveshwar.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/bellweather.jpg') ?>" alt="">
                <img src="<?php echo base_url('images/customers/bhonshala.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/bright.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/caa.webp') ?>" alt="">
                <img src="<?php echo base_url('images/customers/deeper.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/excellence.webp') ?>" alt="">
                <img src="<?php echo base_url('images/customers/KGMittal.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/kisan.jpg') ?>" alt="">
                <img src="<?php echo base_url('images/customers/kota-guru.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/lakshya-academy.jpeg') ?>" alt="">
                <img src="<?php echo base_url('images/customers/lakshya.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/lrt.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/MITPune.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/momentum.webp') ?>" alt="">
                <img src="<?php echo base_url('images/customers/ncc.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/pace.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/phulbani.webp') ?>" alt="">
                <img src="<?php echo base_url('images/customers/radical.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/reliance-latur.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/reliance.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/sadhan.jpg') ?>" alt="">
                <img src="<?php echo base_url('images/customers/sharada.jpeg') ?>" alt="">
                <img src="<?php echo base_url('images/customers/shiv-chatrapati.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/spectrum.jpg') ?>" alt="">
                <img src="<?php echo base_url('images/customers/sspzest.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/study-smart.jpg') ?>" alt="">
                <img src="<?php echo base_url('images/customers/unique.jpeg') ?>" alt="">
                <img src="<?php echo base_url('images/customers/vc.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/wagh.webp') ?>" alt="">
                <img src="<?php echo base_url('images/customers/wankhede.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/wedcell.png') ?>" alt="">
                <img src="<?php echo base_url('images/customers/zeal.png') ?>" alt="">
            </div>
        </div>
    </section>

    <!-- Our Services -->
    <section class="services-container">

        <h1>Our Services</h1>

        <div class="service">
            <img src="<?php echo base_url('images/services/exam-creation-platform.jpg') ?>" alt="fastest exam creation platform">
            <div class="service-text">
                <h2>India’s fastest online exam creation platform</h2>
                <p>Create an online exam and online practice test in just 15 minutes and with EDOFOX’s, the top online exam software – Create any online exam in less than 15 minutes using AI driven PDF parsing solution</p>
                <button>Read More</button>
            </div>
        </div>

        <div class="service">
            <img src="<?php echo base_url('images/services/OMR.jpg') ?>" alt="Automated offline exam conduction (OMR)">
            <div class="service-text">
                <h2>Automated offline exam conduction (OMR)</h2>
                <p>Use our cloud based OMR software to automatically generate and distribute results of any offline exams in no time. Students will also be able generate their comprehensive performance report of full academic year helping them improve perpetually</p>
                <button>Read More</button>
            </div>
        </div>


        <div class="service">
            <img src="<?php echo base_url('images/services/learning-management.jpg') ?>" alt="Learning Management System
">
            <div class="service-text">
                <h2>Learning Management System</h2>
                <p>Manage various critical aspects of your educational setup, such as student enrolment, online fee collection, comprehensive live virtual classroom management, teacher-classroom allocation, and online content creation and management with our optimized, efficient and easy to use LMS.</p>
                <button>Read More</button>
            </div>
        </div>

        <div class="service">
            <img src="<?php echo base_url('images/services/business-management.jpg') ?>" alt="Business/ Institution Management Platform
">
            <div class="service-text">
                <h2>Business/ Institution Management Platform</h2>
                <p>Our tailored/ custom configured platform enables you to handle crucial functions that include centralized admissions, hostel management, university examination system, outcome-based education, eLearning, and other verticals such as HR, finance, library, Training and Placement, general administration, etc.</p>
                <button>Read More</button>
            </div>
        </div>
    </section>

    <section class="red-section">
        <h1>Empower the <span>Education Sector</span> with Sustainable <br /> EdTech Solutions</h1>
        <div class="info-container">
            <div class="info">
                <img src="<?php echo base_url('images/red-section/active-students.png') ?>" alt="active students">
                <div class="info-text">
                    <h2>247,968+</h2>
                    <p>Active Students</p>
                </div>
            </div>

            <div class="info">
                <img src="<?php echo base_url('images/red-section/total-test.png') ?>" alt="total test submit">
                <div class="info-text">
                    <h2>1,884,350+</h2>
                    <p>Total Test Submit</p>
                </div>
            </div>

            <div class="info">
                <img src="<?php echo base_url('images/red-section/total-institute.png') ?>" alt="Total institutes">
                <div class="info-text">
                    <h2>800+</h2>
                    <p>Total institutes</p>
                </div>
            </div>

            <div class="info">
                <img src="<?php echo base_url('images/red-section/student-count.png') ?>" alt="Student Counts">
                <div class="info-text">
                    <h2>3+</h2>
                    <p>Student Count</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER: CONTACT US -->

    <footer>

    </footer>

    <!-- SCRIPTS -->

    <script>

    </script>

</body>

</html>