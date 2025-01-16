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



    <!-- FOOTER: CONTACT US -->

    <footer>

    </footer>

    <!-- SCRIPTS -->

    <script>

    </script>

</body>

</html>