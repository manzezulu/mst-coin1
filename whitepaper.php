<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MST Coin WhitePaper</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link rel = "icon" href = "images/logo111.png" type = "image/x-icon"> -->
   <!--<link rel="stylesheet" href="styles.css">--> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <script src="JS_index.js"></script>
    <link rel="icon" href="images/logo2.png" type="image/x-icon">
    <script></script>
</head>
<body >
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1a1a1a;
            color: #fff;
            padding: 15px 0;
            text-align: center;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 60px;
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav img {
            height: 40px;
            margin-right: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li:last-child {
            margin-right: 0;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #e0e0e0;
        }

        #mySidenav {
            display: none;
        }

        .closebtn {
            position: absolute;
            top: 0;
            right: 20px;
            font-size: 30px;
        }
        /* Footer container */
.footer {
  background-color: #137;
  color: #fff;
  padding: 20px 0;
}

/* Footer sections container */
.footer__str {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin-bottom: 20px;
}

/* Footer section cells */
.footer__str-cell {
  flex: 1;
  padding: 0 20px;
}

/* Footer section headings */
.footer__list-title {
  font-size: 18px;
  margin-bottom: 10px;
}

/* Footer links */
#footer__list {
  list-style: none;
}
.footer__list-link {
  color: #fff;
  text-decoration: none;
  display: block;
  margin-bottom: 8px;
  transition: color 0.3s ease;
}

.footer__list-link:hover {
  color: #3f98cb;
}

/* Social media icons */
.footer__social-icon {
  width: 20px;
  height: 20px;
  fill: #fff;
  margin-right: 5px;
}

/* Copyright text */
.footer__text-block {
  text-align: center;
}

/* Grey text */
._grey {
  color: #888;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .footer__str {
    flex-direction: column;
    align-items: center;
  }
  .footer__str-cell {
    flex: 1;
    padding: 0;
    text-align: center;
  }
}
/* Initially hide FAQ container */
.faq-container {
  display: none;
}

/* Style for FAQ items */
.faq-item {
  margin-bottom: 20px;
}

/* Style for FAQ questions */
.question {
  cursor: pointer;
}

/* Style for FAQ answers */
.answer {
  display: none;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
  opacity: 0.7;
}

.fa-facebook {
  background: #3b5998;
  color: white;
}

.fa-twitter {
  background: #55acee;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}



    </style>
    <header>
        <div>
            </div>
            <nav>
            <a href="index.php"><img src="images/logo.png" alt="MST COIN"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="reviews.php"> Review</a></li>
                <!-- <li class="topnav-left"><a href="#">&#9776;</a> -->
            </ul>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <li><a href="#top">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="reviews.php"> Review</a></li>
            </div>
            </nav>

    </header>
    <main>
        <section class="whitepaper">
            <h1>MST Coin Whitepaper</h1>
            <p>MST Coin is a cryptocurrency designed to revolutionize the way varsity students manage their finances. This whitepaper provides a comprehensive overview of the MST Coin project, including its technology, tokenomics, and use cases.</p>
            <h2>Table of Contents</h2>
            <ol>
                <li><a href="#section1"> Introduction</a></li>
                <li><a href="#section2"> Technology and Architecture</a></li>
                <li><a href="#section3"> Tokenomics</a></li>
                <li><a href="#section4"> Use Cases</a></li>
                <li><a href="#section5"> Security Measures</a></li>
                <li><a href="#section6"> Governance</a></li>
                <li><a href="#section7"> Roadmap</a></li>
                <li><a href="#section8"> Team</a></li>
                <li><a href="#section9"> Legal and Compliance</a></li>
            </ol>

            <section id="section1">
               <h2>Introduction</h2>
            <p>Varsity students face unique challenges when it comes to managing their finances. MST Coin aims to address these challenges by providing a secure and accessible cryptocurrency tailored to their needs.</p>
            <h3>Objectives</h3> 
           <ul>
                <p>Simplify financial transactions for students.<br>Foster a sense of community among varsity students through MST Coin.<br>
                Provide an alternative to traditional banking methods for students worldwide.</li>
            </ul> 
            </section>
            
            <section id="section2">
                <h2>Technology and Architecture</h2>
            <ul>
                <li><strong>Blockchain Technology</strong><p>The blockchain is the technology that enables us to create trustless digital records in which we can store information about our accounts without having to rely on third parties</p><p>MST Coin utilizes a permissionless blockchain based on the Proof of Stake (PoS) consensus protocol. This ensures secure and decentralized transaction validation.</p></li>

                <li><strong>Transaction Process</strong><p>Transactions within the MST Coin network are verified through a process known as "Stake and Confirm." This involves users staking a certain amount of MST Coin to validate transactions and secure the network.</p></li>

                <li><strong>Scalability Solutions</strong><p>To accommodate a growing user base, MST Coin incorporates a Layer 2 solution called "MST Lightning" to ensure high throughput and low latency.</p></li>
                
            </ul>
            </section>
            
            <section id="section3"> 
                <h2>Tokenomics</h2>
                <ul>
                    <li><strong>Token Distrubution</strong><p>Initial supply: 100 million MST Coins.<br>
                    Mining rewards: 5% of total supply.<br>
                    Staking rewards: 10% of total supply.<br>
                    Team: 15% of total supply.</p></li>

                    <li><strong>Use of MST Coin</strong><p>MST Coin serves as the primary means of conducting transactions within the MST Coin ecosystem. It can be used for:<br>
                    Purchasing goods and services within partner varsities.<br>
                    Participating in governance decisions.</p>
                    </li>
                
            </ul>
        </section>

            <section id="section4">
                <h2>Use Cases</h2>
                <ul>
                    <li><strong>Student Payments</strong><p>MST Coin enables seamless and secure transactions for various student-related expenses, including tuition fees, accommodation, and textbooks.</p>
                    </li>
    
                    <li><strong>Community Building</strong><p>The MST Coin ecosystem fosters a sense of community among varsity students, providing a platform for shared experiences and opportunities.</p></li> 
                </ul>
            </section>
            <section id="section5">
                <h2>Security Measures</h2>
                <ul>
                    <li><strong>Encryption</strong><p>All transactions within the MST Coin network are encrypted using advanced elliptic curve cryptography to protect user data and ensure privacy.</p></li>
                    <li><strong>Network Security</strong><p>The decentralized nature of the blockchain, coupled with the Delegated Proof of Stake (DPoS) consensus mechanism, safeguards the network against potential attacks.</p></li>
                </ul>
            </section>
            <section id="section6">
                <h2>Governance</h2>
                <ul>
                    <li><strong>Decision-Making Process</strong><p>MST Coin employs a decentralized governance model, allowing token holders to participate in key decisions regarding protocol upgrades and ecosystem development.</p></li>

                    <li><strong>Voting Mechanism</strong><p>Token holders can submit and vote on proposals using their MST Coin holdings, ensuring a fair and transparent governance process.</p></li>
                </ul>
            </section>
            <section id="section7">
                <h2>Roadmap</h2>
                <ul>
                    <li><strong>Milestones</strong><p>Q1 2023: Launch of MST Coin Testnet<br>
                        Q2 2023: Mainnet Launch and Initial Exchange Listings<br>
                        Q3 2023: Integration with Partner Varsities<br>
                        Q4 2023: Expansion of Use Cases
                        </p></li>
                </ul>
            </section>
            <section id="section8">
                <h2>Team</h2>
                <ul>
                    <li><strong>Manzezulu Mazibuko</strong></li>
                    <li><strong>Sange Mqayi</strong></li>
                    <li><strong>Thandokuhle Zulu</strong></li>
                </ul>
            </section>
            <section id="section9">
                <h2>Legal and Compliance</h2>
                <ul>
                    <li><strong>Regulatory Considerations</strong><p>MST Coin is committed to complying with all relevant legal and regulatory requirements. This includes KYC (Know Your Customer) and AML (Anti-Money Laundering) checks for users.</p></li>

                    <li><Strong>Disclaimer</Strong><p>Investors and users of MST Coin should be aware of the associated risks, and conduct their own due diligence before participating in the ecosystem.</p></li>
                </ul>
            </section>
    

           

        </section>
    
    </main>
    <footer class="footer">
        <div class="footer__str">
            <!-- Service section -->
            <section class="footer__str-cell _one-quarter">
                <h4 class="footer__list-title">Services</h4>
                <ul class="footer__list">
                    <li>
                        <a target="_blank" class="footer__list-link" href="#">Contact Us</a>
                    </li>
                    <li>
                        <a class="footer__list-link" href="javascript:void(0);" onclick="toggleFAQ()">FAQ</a>
                        <div id="faq-container" class="faq-container">
                            <!-- FAQ items -->
                            <div class="faq-item">
                                <h3 class="question">1. What is MST Coin?</h3>
                                <div class="answer">MST Coin is a revolutionary cryptocurrency designed to empower
                                    university students. It offers a financial solution tailored to the unique needs of
                                    students, aiming to reduce financial stress and support their financial goals.</div>
                            </div>
                            <div class="faq-item">
                                <h3 class="question">How does MST Coin work?</h3>
                                <div class="answer">MST Coin operates on a blockchain technology platform, providing
                                    students with flexible and profitable investment opportunities. Students can invest
                                    in MST Coin, earn returns, and use it to cover tuition, living expenses, and more.
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="question">What are the benefits of using MST Coin?</h3>
                                <div class="answer">Financial Empowerment <br>
                                    Investment Opportunities <br>
                                    Support for Student Expenses <br>
                                    Exclusive Offers</div>
                            </div>
                            <div class="faq-item">
                                <h3 class="question">Who are the co-founders of MST Coin?</h3>
                                <div class="answer">MST Coin is led by a dynamic team of co-founders with expertise in
                                    finance, technology, and education. The co-founders include Manzezulu Mazibuko
                                    (CEO), Sange Mqayi (CTO), and Thandokuhle Zulu (CCO).</div>
                            </div>
                            <div class="faq-item">
                                <h3 class="question">How can I get in touch with MST Coin?</h3>
                                <div class="answer">If you have any questions or want to explore partnership
                                    opportunities, please feel free to contact us through our website or email us at
                                    [contact@email.com]. We are here to assist you.</div>
                            </div>
                            <div class="faq-item">
                                <h3 class="question">Is MST Coin available for all students?</h3>
                                <div class="answer">Yes, MST Coin is available to university students worldwide. We aim
                                    to provide financial empowerment to students from various educational backgrounds.
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="question">Can I use MST Coin for everyday transactions?</h3>
                                <div class="answer">MST Coin can be used for various transactions, including paying for
                                    education-related expenses, making investments, and participating in exclusive
                                    offers and incentives..</div>
                            </div>
                            <div class="faq-item">
                                <h3 class="question">What security measures does MST Coin have in place?</h3>
                                <div class="answer">MST Coin prioritizes security and employs blockchain technology to
                                    ensure transparency and reliability in its operations. Additionally, stringent
                                    security protocols are implemented to safeguard users' investments and personal
                                    information.</div>
                            </div>
                            <div class="faq-item">
                                <h3 class="question">How do I sign up for MST Coin?</h3>
                                <div class="answer">You can sign up for MST Coin by visiting our website and following
                                    the registration process. We provide a user-friendly platform to get you started on
                                    your journey to financial empowerment.</div>
                            </div>

                            <!-- Add more FAQ items as needed -->
                        </div>
                    </li>

                    <!-- Add more service links as needed -->
                </ul>
            </section>

            <!-- Offers section -->
            <section class="footer__str-cell _one-quarter">
                <h4 class="footer__list-title">Offers</h4>
                <ul class="footer__list">
                    <li>
                        <a target="_blank" class="footer__list-link" href="#">Special Offers</a>
                    </li>
                    <li>
                        <a target="_blank" class="footer__list-link" href="whitepaper.php">WhitePaper</a>
                    </li>
                    <!-- Add more offer links as needed -->
                </ul>
            </section>

            <!-- Legal information section -->
            <section class="footer__str-cell _one-quarter">
                <h4 class="footer__list-title">Legal Information</h4>
                <ul class="footer__list">
                    <li>
                        <a target="_blank" class="footer__list-link" href="#">Terms of Service</a>
                    </li>
                    <li>
                        <a target="_blank" class="footer__list-link" href="#">Privacy Policy</a>
                    </li>
                    <!-- Add more legal links as needed -->
                </ul>
            </section>

            <!-- Social and Personal Area section -->
            <section class="footer__str-cell _one-quarter _social">
                <h4 class="footer__list-title">Social Media</h4>
                <ul class="footer__list _social">
                    <li>
                        <a href="#" target="_blank" rel="noopener" class="footer__list-link">
                            <svg class="footer__social-icon _facebook">
                                <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                            </svg> Facebook
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener" class="footer__list-link">
                            <svg class="footer__social-icon _twitter">

                                <a href="https://twitter.com" class="fa fa-twitter"></a>
                            </svg> Twitter
                        </a>
                    </li>
                    <!-- Add more social media links as needed -->
                </ul>
            </section>
        </div>

        <!-- Copyright section -->
        <div class="footer__str">
            <section class="footer__str-cell _full">
                <div class="footer__text-block _grey">
                    <div>
                        <p>&copy; 2023 MST. All rights reserved.</p>
                    </div>
                </div>
            </section>
        </div>
    </footer>
</body>
</html>