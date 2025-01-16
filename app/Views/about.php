<!-- /app/Views/about.php -->

<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<section class="about-us-container">
    <div class="overlay-container">
        <div class="overlay">
            <img src="<?php echo base_url('images/about-us/team-background.jpg') ?>" alt="">
        </div>
        <div class="overlay-text">
            <p>About US</p>
            <h1>We Provide Not Just the <br /> Technological Edge, but the <br /> Pricing Advantage as <br />Well.</h1>
            <button class="sign-up-free-trial">Sign Up for Free Trial</button>
            <button class="book-online-demo">Book an Online Demo</button>
        </div>
    </div>
</section>
<section class="orange-section">
    <div class="image-and-text">
        <img src="<?php echo base_url('images/about-us/right-tick.png') ?>" alt="right tick image on about us page orange section">
        <h1>Our History</h1>
    </div>
    <p>
        We started our journey in 2014 as Matter Softwares Private Limited with a focus on creating efficient and business-specific software products that add value to our client’s business. EDOFOX, <span> the best online exam software, </span>focused on the EdTech needs of the education sector, was launched in 2017.
    </p>
</section>

<section class="more-about-edofox">
    <h1>More About EdoFox</h1>
    <p>Online assessments form an integral part of the online education system. However, often teachers are seen struggling with creating online assessments. But not anymore! EDOFOX, the leading EdTech company in India, crafts customized online assessment platforms that enable international schools, colleges, universities, and multinational corporations to create online examinations in a matter of just 15 minutes!</p>
    <p>At EDOFOX, we are a value and result driven EdTech brand with a team of self-motivated and extensively experienced EdTech professionals. Our product EDOFOX is an EdTech solution that empowers our clients with features and functionalities that add value to online education and help them achieve their objectives.</p>
    <p>We ensure continual innovation and improvement to deliver breakthrough solutions. Our smart and customized EdTech solutions to various global schools, universities, colleges, and MNCs include Student and Teacher Management.</p>
    <p>We envision a completely digitized education sector, prepared to facilitate competitive learning, and foster comprehensive development through effective online learning and challenging online assessments. We aim to create an online education ecosystem through transformations that enable various types of education players to optimize the benefits of online learning and development and deliver the expected value.</p>
</section>

<section class="meet-our-team">
    <h1>Meet Our Team</h1>
    <div class="team-members-container">
        <div class="team-member">
            <img src="<?php echo base_url('images/team/anand-kore.png') ?>" alt="anand kore">
            <h2>Anand Kore</h2>
            <h3>Chief Executive Officer & Founder
            </h3>
            <p>Anand has more than 10+ experience in the industry. Anand with his understanding nature he is a born leader, leading the EDOFOX team towards its goal. Anand is an allrounder and takes care of every roadblock faced by the company with his knowledge of the market and calm nature.</p>
        </div>
        <div class="team-member">
            <img src="<?php echo base_url('images/team/ajinkya-kulkarni.png') ?>" alt="ajinkya kulkarni">
            <h2>Ajinkya Kulkarni</h2>
            <h3>Chief Technology Officer & Co-Founder
            </h3>
            <p>Ajinkya is an experienced developer having vast experience in Java & is an excellent software architect. Having experience of 10+ years in the Tech Industry he is an amazing Team Leader and Team Player. With his passion for the work he leads the team toward success.</p>
        </div>
        <div class="team-member">
            <img src="<?php echo base_url('images/team/kiran-kore.png') ?>" alt="kiran kore">
            <h2>Kiran Kore</h2>
            <h3>Chief Operations Officer & Co-Founder
            </h3>
            <p>Kiran has a deep knowledge of the backend infrastructure required to run a complex product like Edofox, with 7+ years of experience in operations. he is the go-to guy for all DevOps related queries and single handedly manages it.</p>
        </div>

        <div class="team-member">
            <img src="<?php echo base_url('images/team/hemant-kulkarni.png') ?>" alt="hemant kulkarni">
            <h2>Hemant Kulkarni</h2>
            <h3>Chief Experience Officer & Co-Founder
            </h3>
            <p>Having more than 8+ year’s experience in the industry, Hemant delivers an amazing User Experience through our platform. He is a multitasker how also adds his values in the product development. With a very friendly attitude Hemant is an understanding team leader supporting his members through thick and thin</p>
        </div>

        <div class="team-member">
            <img src="<?php echo base_url('images/team/mayur-heganekar.png') ?>" alt="mayur heganekar">
            <h2>Mayur Heganekar </h2>
            <h3>Graphic Designer</h3>
            <p>I’m an experienced Creative Lead Graphic Designer skilled in both print and digital design. With a passion for innovative concepts and collaboration, I manage projects, deliver on time, and excel in branding, typography, and layout. Proficient in Adobe Creative Suite and Sketch, I build strong client relationships to achieve impactful results</p>
        </div>

        <div class="team-member">
            <img src="<?php echo base_url('images/team/shubham-choudhary.png') ?>" alt="shubham choudhary">
            <h2>Shubham Choudhary</h2>
            <h3>Software Developer</h3>
            <p>Shubham has 2+ years of experience in web development, handling dynamic web applications. He works on both front and back end processes. One of our newest members of our team, he is enthusiastic to explore new work domains and projects.</p>
        </div>


    </div>
</section>
<?= $this->endSection() ?>