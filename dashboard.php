<?php
// Start a session
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or show an access denied message if not logged in
    header("Location: signup.php");
    exit();
}
require_once("db_connection.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MST Coin Auction - Your Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link rel="stylesheet" href="dashboards.css">
    <link href='https://fonts.googleapis.com/css?family=Young Serif' rel='stylesheet'>
    <link rel="icon" href="images/logo2.png" type="image/x-icon">
    <script defer src="JS_index1.js"></script>
    <script defer src="JS_index.js"></script>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f2f2f2; margin: 0; padding: 0;">
<style>
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
    <!-- Header -->
    <header>
        <h1>Welcome to MST Coin Auction</h1>
    </header>

    <!-- Breadcrumb -->
    <nav>
        <ul>
            <li><a href="dashboard.php"><i class="feather icon-home"></i> Dashboard</a></li>
            <li><a href="logout1.php">Logout</a></li>  
            <div class="menu-icon" id="topnav-right">
                <span onclick="openNav()">&#9776;</span>
            </div>
        </ul>
        <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <li><a href="index.php">Home</a></li>
                <li class="topnav-right"><a href="bankdetails.php">Banking Details</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li class="topnav-right"><a href="logout.php">Sign Out</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </div>
            
    </nav>

    <!-- <div class="bank-details">
        <?php
        
        ?>
    </div> -->
    <!-- Coins Currently in the Market Section -->
    <section class="market-coins-section">
        <div class="container">
            <h2>Coins Currently in the Market</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="coin-item">
                        <img src="images/coin1.png" width="150px" height="150px">
                        <p>Price: R1</p>
                        <p>Available Quantity: 500</p>
                        <button class="btn btn-primary">50% Return</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="coin-item">
                        <img src="images/coin2.png" width="150px" height="150px">
                        <p>Price: R5</p>
                        <p>Available Quantity: 1000</p>
                        <button class="btn btn-primary">75% Return</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="coin-item">
                        <img src="images/coin3.png" width="180px" height="150px">
                        <p>Price: R10</p>
                        <p>Available Quantity: 300</p>
                        <button class="btn btn-primary">100% Return</button>
                    </div>
                    <div class="col-md-4">
                        <div class="coin-item">
                            <img src="images/coin1.png" width="150px" height="150px">
                            <p>Price: R15</p>
                            <p>Available Quantity: 300</p>
                            <button class="btn btn-primary">150% Return</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Balance of Coins Section -->
    <section class="balance-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Your Coin Balance</h2>
                    <p>Your current balance of coins:</p>
                    <div id="coinBalance" class="balance-value">K0</div>
                </div>
                <div class="col-md-6">
                    <!-- Button to update balance (for demonstration) -->
                    <button id="updateBalanceButton" class="btn btn-primary">Update Balance</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Buy Section -->
    <section class="buy-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Buy Coins</h2>
                    <p>Get ready to bid on your favorite coins and expand your collection.</p>
                    <button id="buyCoinsButton" class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Sell Section -->
    <section class="sell-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sell Coins</h2>
                    <p>Ready to cash in on your rare coins? Sell them to eager collectors.</p>
                    <button class="btn btn-primary">Sell Now</button>
                </div>
            </div>
        </div>
    </section>


    <!-- Main Content -->
    <main>
        <section>
            <div class="countdown-timer">
                <h2>Token Sale Countdown</h2>
                <p>Time to Next Auction: <span id="countdown"></span></p>
                <!--countclock with javascript-->
                <div class="launch-timer">
                    <div>
                        <p id="days">00</p>
                        <span>Days</span>
                    </div>
                    <div>
                        <p id="hours">00</p>
                        <span>Hours</span>
                    </div>
                    <div>
                        <p id="minutes">00</p>
                        <span>Minutes</span>
                    </div>
                    <div>
                        <p id="seconds">00</p>
                        <span>Seconds</span>
                    </div>
                </div>

            </div>
        </section>
        <!-- Main Content -->
        <main class="main-content">
            <div class="summary-container">
                <h2>Daily Summary</h2>
                <div class="summary-items">
                    <div class="summary-item blue-bg">
                        <h3>Coins Bought</h3>
                        <p>K0</p>
                    </div>
                    <div class="summary-item green-bg">
                        <h3>Coins Sold</h3>
                        <p>K0</p>
                    </div>
                    <div class="summary-item yellow-bg">
                        <h3>Referral Commission</h3>
                        <p>K0</p>
                    </div>
                </div>
            </div>

            <div class="transactions-container">
                <h2>Recent Transactions</h2>
                <table class="transaction-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Recipient</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5">No Coin Pay</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        <!-- Footer -->
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