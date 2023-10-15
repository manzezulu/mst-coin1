<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<header>
        <nav>
            <img src="images/logo.png" alt="MST COIN">
            <ul>
                <li><a href="index.php">Home</a></li>
                <!-- <li><a href="#about">About</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="reviews.php"> Review</a></li> -->
                <!-- <li class="topnav-left"><a href="#">&#9776;</a> -->
            </ul>
            <!-- <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <li><a href="#top">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="reviews.php"> Review</a></li>
            </div> -->
            <div class="menu-icon">
                <span onclick="openNav()">&#9776;</span>
            </div>

        </nav>
        <h1>Welcome to <div class="bouncing-text"><div class="m">M</div><div class="s">S</div><div class="t">T</div><div class="shadow"></div><div class="shadow-two"></div></div> <span>Coin</span> </h1>
        <h1><span>Reviews</span></h1> 

        <p>Empowering varsity students with a revolutionary cryptocurrency.</p>
        <a href="signup.php" class="cta">Get Started</a>
    </header>
<section id="reviews">
        
        <h2>Website Reviews</h2>
        
        <!-- User Review Form -->
        <form id="reviewForm" action="reviews.php" method = "post">
            <div class="review-item">
                <label for="userName">Name:</label>
                <input type="text" id="userName" name ="userName" required>
            </div>

            <div class="review-item">
                <label for="userComment">Comment:</label>
                <textarea id="userComment" rows="4" name ="userComment" required></textarea>
            </div>

            <button type="submit" class="submit-button">Submit Review</button>
        </form>
            </section>

            
            <?php
            // Database Connection
            require_once("db_connection.php");

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_POST['userName'];
                $comment = $_POST['userComment'];

                $sql = "INSERT INTO reviews (name, comment) VALUES (?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $name, $comment);

                if ($stmt->execute()) {
                    echo "Review submitted successfully.";
                } else {
                    echo "Error submitting review: " . $stmt->error;
                }

                $stmt->close();
            }

            // Retrieve and display existing reviews
            $sql = "SELECT * FROM reviews";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="review-item">';
                    echo '<div class="review-title">' . $row['name'] . '</div>';
                    echo '<div class="review-text">' . $row['comment'] . '</div>';
                    echo '</div>';
                }
            } else {
                echo "No reviews yet.";
            }

            $conn->close();
            ?>
            </body>
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
            </html>