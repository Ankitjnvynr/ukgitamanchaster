<footer style="background: #4e151b;" class="text-white fs-6 py-5">
    <div class="container">
        <div class="row">
            <!-- Logo Section -->
            <div class="col-md-3 my-3 d-flex flex-column  align-items-center  gap-2" > 
                <img src="logo.png" alt="Logo" class="img-fluid" style="max-width: 150px; max-height: 150px;">
                <h2 class="fw-bold mb-4">GIEO Gita </h2>
            </div>

            <!-- Services Section -->
            <div class="col-md-3 mb-3">
                <h5>Services</h5>
                <ul class="list-unstyled d-flex flex-column   gap-2">
                    <!-- <li>Health</li>
                    <li>Education</li>
                    <li>Gaushala</li>
                    <li>Nature Conservation</li>
                    <li>Donation</li>
                    <li>Membership</li> -->
                    <li><a href="./gau-seva.php" class="quick-link">Gau Seva</a></li>
                    <li><a href="./bhagwat-gita-course.php" class="quick-link">Bhagwad Gita Course</a></li>
                </ul>
            </div>

            <!-- Quick Links Section -->
            <div class="col-md-3 mb-3">
                <h5>Quick Links</h5>
                <ul class="list-unstyled d-flex flex-column   gap-2">
                    <li><a href="./" class="quick-link">Home</a></li>
                    <li><a href="./#events" class="quick-link">Events</a></li>
                    <li><a href="./gallery.php" class="quick-link">Gallery</a></li>
                    
                    <!-- <li><a href="#" class="quick-link">Contact</a></li> -->
                    <li><a href="./#about" class="quick-link">About Us</a></li>
                </ul>
            </div>

            <!-- Contact Info Section -->
            <div class="col-md-3 mb-3">
                <h5>Contact Info</h5>
                <p>Gita Gyan Sansthanam, KDB Road, Kurukshetra.</p>
                <p><strong>Phone1:</strong> 99965 51615</p>
                <p><strong>Phone2:</strong> 70271 01899</p>
                <p><strong>Email:</strong> <a href="mailto:gieogita@gmail.com" class="text-white">gieogita@gmail.com</a></p>
                <!-- <p><strong>Website:</strong></p>
                <ul class="list-unstyled">
                    <li><a href="http://www.gieogita.org" class="text-white">www.gieogita.org</a></li>
                    <li><a href="http://www.gieogitaeducourses.org" class="text-white">www.gieogitaeducourses.org</a></li>
                </ul> -->
            </div>
        </div>
    </div>

    <style>
        /* Quick Links Hover Effect */
        .quick-link {
            color: white;
            text-decoration: none;
            display: inline-block;
            position: relative;
            transition: all 0.3s ease;
        }

        .quick-link:hover {
           
            color: #ffcc00; /* Change text color */
        }

        .quick-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 0;
            height: 2px;
            background: #ffcc00;
            transition: width 0.3s ease;
        }

        .quick-link:hover::after {
            width: 100%;
        }
    </style>
</footer>
