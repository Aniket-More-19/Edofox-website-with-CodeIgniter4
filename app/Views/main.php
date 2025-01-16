<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'EDOFOX' ?></title>
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
            padding-bottom: 3rem;
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

        .social-links-container {
            background-color: rgb(235, 232, 230);
            padding: 1.5rem;
        }

        .social-links {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            column-gap: 2rem;
        }

        .link img {
            width: 1.5rem;
            height: 1.5rem;
        }

        .link p {
            font-size: 0.8rem;
        }

        .link a {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            column-gap: 0.3rem;
            text-decoration: none;
        }

        .facebook {
            color: rgb(63, 131, 208);
        }

        .instagram {
            color: red;
        }

        .youtube {
            color: red;
        }

        .linkedin {
            color: rgb(63, 131, 208);
        }

        /* footer */
        .footer-grid-container {
            background-color: black;
            color: white;

            display: grid;
            grid-template-columns: 1fr 0.5fr 1.5fr;
            padding: 3rem 5rem;
            column-gap: 3rem;
        }

        .edofox-logo {
            display: flex;
        }

        .edofox-logo img {
            width: 100%;
            height: 4rem;
        }

        .edofox-info p {
            margin-top: 2rem;
            text-align: left;
        }

        .social-icons {
            margin-top: 2rem;
            display: flex;
            flex-direction: row;
            column-gap: 1rem;
        }

        .quick-links {}

        .links-container {
            margin-top: 1.5rem;
            display: flex;
            flex-direction: column;
            row-gap: 0.5rem;
        }

        .links-container h3 {
            font-weight: 600;
        }

        .get-in-touch button {
            margin-top: 1rem;
            padding: 1rem 2rem;
            font-size: 1rem;
            background-color: #ff7b1b;
            color: white;
            border-width: 0;
            border-radius: 1rem;
        }

        .get-in-touch p {
            margin-top: 1.5rem;
        }

        /* about us styles*/
        .overlay-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .overlay img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .overlay::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-100%, -60%);
            z-index: 2;

            color: white;
            max-width: 50rem;
            padding: 1.2rem;
        }

        .overlay-text p {
            font-size: 2rem;
        }

        .overlay-text h1 {
            margin-top: 3rem;
            font-size: 3rem;
            margin-bottom: 3rem;
        }

        .sign-up-free-trial {
            padding: 1.2rem 3rem;
            font-size: 1rem;
            border-width: 0;
            border-radius: 0.3rem;
            background-color: #ff7b1b;
            text-decoration: underline;
            color: white;
        }

        .book-online-demo {
            margin-left: 2rem;
            padding: 1rem 3rem;
            font-size: 1rem;
            border-width: 0.25rem;
            border-radius: 0.3rem;
            border-color: #ff7b1b;
            text-decoration: underline;
            color: white;
            background: transparent;
        }

        /* orange section */
        .orange-section {
            background-color: #ff7b1b;
            color: white;

            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            column-gap: 3rem;
            padding: 4rem 10rem;
        }

        .image-and-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            row-gap: 0.5rem;
        }

        .image-and-text img {
            width: 4rem;
            height: 4rem;
        }

        .image-and-text h1 {
            font-size: 2rem;
            min-width: 12rem;
        }

        .orange-section p {
            font-size: 1.3rem;
            line-height: 1.8rem;
        }

        .orange-section span {
            color: black;
        }

        /* more about edofox */
        .more-about-edofox {
            padding: 3rem 8rem;
        }

        .more-about-edofox h1 {
            text-align: center;
            font-size: 2.5rem;
        }

        .more-about-edofox p {
            margin-top: 2rem;
            font-size: 1.2rem;
        }

        /* meet our team */
        .meet-our-team {
            padding: 2rem;
        }

        .meet-our-team h1 {
            font-size: 2.5rem;
            text-align: center;
        }

        .team-members-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(3, 1fr);
            column-gap: 3rem;
            row-gap: 3rem;
            padding: 3rem 6rem;
        }

        .team-member {
            text-align: center;
            border: 0.2rem solid #ff7b1b;
            padding: 1.7rem;
            border-radius: 0.4rem;
        }

        .team-member h2 {
            margin-top: 0.5rem;
        }

        .team-member h3 {
            margin-top: 0.5rem;
        }

        .team-member p {
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
                    <li><a href="<?= site_url('home') ?>">Home</a></li>
                    <li><a href="<?= site_url('about') ?>">About Us</a></li>
                </ul>
            </nav>

            <button class="sign-up-btn">Sign Up</button>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>


    <!-- social links -->
    <section class="social-links-container">
        <div class="social-links">
            <div class="link">
                <a href="https://www.facebook.com/edofoxonline?=undefined" target="_blank">
                    <img src="<?php echo base_url('images/social-links/facebook.png') ?>" alt="Facebook">
                    <p class="facebook">Facebook</p>
                </a>
            </div>
            <div class="link">
                <a href="https://www.instagram.com/edofox_official/?=undefined" target="_blank">
                    <img src="<?php echo base_url('images/social-links/Instagram.png') ?>" alt="Instagram">
                    <p class="instagram">Instagram</p>
                </a>
            </div>
            <div class="link">
                <a href="https://www.youtube.com/@edofox_official" target="_blank">
                    <img src="<?php echo base_url('images/social-links/Youtube.png') ?>" alt="Youtube">
                    <p class="youtube">Youtube</p>
                </a>
            </div>
            <div class="link">
                <a href="  https://www.linkedin.com/company/edofox/?=undefined" target="_blank">
                    <img src="<?php echo base_url('images/social-links/Linkedin.png') ?>" alt="LinkedIn">
                    <p class="linkedin">LinkedIn</p>
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER: CONTACT US -->

    <footer class="footer-grid-container">
        <div class="edofox-info">
            <div class="edofox-logo">
                <img src="<?php echo base_url('images/home/edofox-logo.png') ?>" alt="edofox logo">
                <img src="<?php echo base_url('images/home/edofox-logo-text.png') ?>" alt="edofox logo text">
            </div>
            <p>Launched in 2017, EDOFOX is a significant value-addition to the education sector. The platform allows institutes to focus on teaching and growing the institute making all the internal operations efficient and automated by taking care of technology aspects.</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/edofoxonline?=undefined" target="_blank"> <img src="<?php echo base_url('images/social-links/facebook.png') ?>" alt="facebook"></a>
                <a href="https://www.linkedin.com/company/edofox/?=undefined" target="_blank"> <img src="<?php echo base_url('images/social-links/LinkedIn.png') ?>" alt="linkedin"></a>
                <a href="https://www.instagram.com/edofox_official/?=undefined" target="_blank"><img src="<?php echo base_url('images/social-links/Instagram.png') ?>" alt="instagram"></a>
            </div>
        </div>
        <div class="quick-links">
            <h2>QUICK LINKS</h2>
            <div class="links-container">
                <h3>Home</h3>
                <h3>About</h3>
                <h3>Features</h3>
                <h3>Contact Us</h3>
                <h3>Privacy Policy</h3>

            </div>
        </div>
        <div class="get-in-touch">
            <h2>GET IN TOUCH</h2>

            <button>Sign Up for Updates</button>
            <p>
                9423040642 / 8668937047 <br />
                contact@edofox.com
            </p>
            <p>
                Latur – Matter Softwares Pvt. Ltd. 3rd floor, Shinde Heights, Khori Galli, Mitra Nagar, 413512
            </p>
            <p>
                Pune – Ideas to impacts, Lane, 3, near VIJAY SALES – BANER, Pallod Farms, Baner, Pune, Maharashtra 411045
            </p>
            <p>
                Ch. Sambhaji Nagar – Khinwasara August High Street, Plot No 21 22 Khinwasara Park, 3rd Floor, Road: Ulka Nagri
            </p>
            <p>
                Nashik – Office No.3 Old Aagra Road, Panchavati, Nirmaan Raghuveer Plaza, Nashik
            </p>
        </div>
    </footer>

    <!-- SCRIPTS -->

    <script>

    </script>

</body>

</html>