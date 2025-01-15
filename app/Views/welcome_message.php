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
    </style>
</head>

<body>

    <!-- -->
    <header>
        <div class="header">
            <div class>
                <img class="logo" src="<?php echo base_url('images/edofox-logo.png'); ?>" alt="logo">
                <img class="logo-text" src="<?php echo base_url('images/edofox-logo-text.png'); ?>" alt="logo text">
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
            <img src="<?php echo base_url('images/home-page-img.png') ?>" alt="home page computers image">
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