<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gita Mahotsav UK : GIEO Gita</title>
    <link rel="icon" type="image/x-icon"
        href="https://gieogita.org/wp-content/uploads/2022/09/GieoGita_logo-removebg-preview.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;1,400&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script src="https://www.justgiving.com/widgets/scripts/widget.js" data-version="2" data-widgetType="attachCheckout"
        type="text/javascript"></script>
    <script src="js/script.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="style.css">
    <style>
        .flex-item {
            flex: 1 0 150px;
        }

        .popdiv {
            background: rgba(255, 255, 255, 0.5);
            border-radius: 3rem;
            padding: 3rem;
            overflow-y: auto;
            width: 95vw;
            max-width: 700px;
            font-size: 1rem;
        }

        * {
            font-family: 'Poppins', sans-serif !important;
        }
    </style>
    <style>
        #about {
            background-image: url('imgs/gita-bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            /* Parallax effect */
            position: relative;
            overflow: hidden;
            min-height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #about .background-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            /* Adjust opacity */
            z-index: 1;
        }

        #about .content {
            position: relative;
            z-index: 2;
            color: white;
        }
    </style>
</head>

<body>
    <?php include 'parts/_header.php' ?>
    <!-- Popup Image -->
    <div class="backdrop"></div>
    <div id="popupImage" class="popup-image">
        <button class="close-btn" onclick="closePopup()">&times;</button>
        <!-- <img src="popup/popup.jpg" alt="Popup Image"> -->
        <div class="popdiv text-center p-3 overflow-y-auto">
            <h4 class="fw-bold">Jai Shri Krishna</h4>

            <p>
                We look forward to welcoming you to the <b>Manchester Gita Festival</b>.
            </p>
            <p>

                We understand that recent events across the country may have caused some concern regarding the Festival
                and
                its arrangements.
            </p>
            <p>

                Please be assured that we are in constant contact with local authorities, including the Police and Local
                Council, and there are currently no causes for concern.
                Security measures will be in place for all three days of the event.
                Authorities are already taking steps to ensure normal proceedings remain uninterrupted.
                Additionally, there are no organised protests allowed in Manchester City Centre on Sunday the 11th and
                those
                leading security from our team are in constant dialogue around the plan and management.
                Any questions please don’t hesitate to contact us
            </p>
        </div>
    </div>

    <!-- ----sponsers modal -------------- -->

    <!-- Modal -->
    <div class="modal fade" id="sponserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="sponsorForm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Become a sponser</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <div class="mb-3">
                            <label for="s-name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="s-name" name="s-name">
                        </div>
                        <div class="mb-3">
                            <label for="s-phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="s-phone" name="s-phone">
                        </div>
                        <div class="mb-3">
                            <label for="s-phone" class="form-label">Email</label>
                            <input type="text" class="form-control" id="s-email" name="s-email">
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-bg fs-6">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- ----sponsers modal end-------------- -->

    <!-- Modal -->
    <div class="modal fade " id="volunteerModal" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content bg-warning-subtle">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 d-flex gap-2 align-items-center" id="exampleModalLabel">
                        <p class="heading fs-2 text-center  clr1">
                        <div class="text-center mb-2"><img width="50px" src="Logo.png" alt="GIEO Gita logo"></div>
                        Become a Volunteer
                        </p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form style="width: 100%" id="vsubmitForm" action="" method="post">
                        <select id="v-aider" name="v-aider" class="form-select mb-3"
                            aria-label="Default select example">
                            <option value="" selected>Are you a first aider?</option>
                            <option value="Yes"> Yes </option>
                            <option value="No">No</option>
                        </select>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="v-name" name="v-name" placeholder="country"
                                required />
                            <label for="v-name">Full Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="v-age" name="v-age" placeholder="Phone"
                                required />
                            <label for="v-age">Age</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="v-city" name="v-city" required />
                            <label for="v-city">Town/City </label>
                        </div>
                        <div class="px-2 form-floating mb-3 bg-light border  rounded">
                            <div class="">
                                Affiliated organisation
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="organisation" id="inlineRadio1"
                                    value="Temple">
                                <label class="form-check-label" for="inlineRadio1">Temple </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="organisation" id="inlineRadio2"
                                    value="Sanstha">
                                <label class="form-check-label" for="inlineRadio2">Sanstha </label>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="v-organisation-name " name="v-organisation-name"
                                placeholder="name@example.com" required />
                            <label for="v-organisation-name ">Organisation Name(Temple/Sanstha) </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="v-Telephone " name="v-Telephone"
                                placeholder="name@example.com" required />
                            <label for="v-Telephone ">Telephone </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="v-email" name="v-email"
                                placeholder="name@example.com" required />
                            <label for="v-email">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="v-sewa1" name="v-sewa1"
                                placeholder="name@example.com" required />
                            <label for="v-sewa1">Sewa Preference 1</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="v-sewa2" name="v-sewa2"
                                placeholder="name@example.com" required />
                            <label for="v-sewa2">Sewa Preference 2</label>
                        </div>
                        <div class="form-floating mb-3 text-center">
                            <button type="submit" class="btn btn-primary btn-bg fs-5" id="vsubmitBtn">Submit</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>



    <div class="overlay" id="overlay">
        <div class="popup">
            <span class="close-btn" onclick="hidePopup()">&times;</span>
            <div class="tick-mark">&#10004;</div>
            <p>Thanks for submitting the form!</p>
            <a href='https://gieogita.org/'><button class="close-btn-below btn-bg" onclick="hidePopup()">Ok</button></a>
        </div>
    </div>














    <!-- overview------------- -->
    <div id="about" class="container-fluid bg-light py-4" style="position: relative;">
        <div class="background-overlay"></div>
        <div style="text-align:justify" class="container clr1 text-justify text-justify content">
            <h2 class="heading mb-2 mt-2 fw-semibold text-center">OVERVIEW</h2>
            GIEO GITA UK (Global Inspiration Enlightenment Organisation of the Bhagwad Gita) is an extension of the
            International GIEO GITA organization based in India. Its main objective is to unite likeminded individuals
            worldwide
            who believe in the universality of the Bhagwad Gita's teachings. By bringing together people from diverse
            backgrounds, GIEO GITA UK aims to create an environment conducive to religious unity, universal brotherhood,
            and
            the
            welfare of all. The organization seeks to promote understanding and appreciation of the Bhagwad Gita's
            wisdom as a
            means to foster harmony among different religious communities. Through various activities such as seminars,
            workshops, and cultural events, GIEO GITA UK endeavors to spread the message of peace, compassion, and
            spiritual
            enlightenment embodied in the Bhagwad Gita. By emphasizing the common values shared by humanity, regardless
            of
            cultural or religious differences, GIEO GITA UK strives to build bridges of understanding and cooperation
            among
            people worldwide. Ultimately, the organization envisions a world where individuals can coexist peacefully,
            embracing
            diversity while working together for the betterment of society.
        </div>
    </div>

    <div class="my-2">.</div>
    <div class="container text-center mt-4">
        <div class="row mb-3 heading text-danger-emphasis ">
            <div class="col-md">
                <h2 class="heading mt-2 fw-semibold ">SUBJECT</h2>
                <div class="border border-3 p-3 bg-warning-subtle bg">Three-Day Multi-Faith Cultural Event – The
                    Manchester Gita
                    Festival - Promoting Peace, Love, and Harmony inspired by the teachings of the Bhagwad Gita.</div>

            </div>
            <div class="col-md">
                <h2 class="heading mt-2 fw-semibold ">AIM</h2>
                <div class="border border-3 p-3 bg-warning-subtle bg">Our aim is to create a platform that brings
                    together
                    diverse communities, fostering understanding and unity through the shared principles found in the
                    Bhagwad
                    Gita. This event will feature enlightening discussions, cultural performances, and interact.</div>

            </div>
            <div class="col-md">
                <h2 class="heading mt-2 fw-semibold ">DESCRIPTION</h2>
                <div class="border border-3 p-3 bg-warning-subtle bg">GIEO GITA UK (Global Inspiration Enlightenment
                    Organisation of the Bhagwad Gita) is an extension of the International GIEO GITA organisation based
                    in India.
                    The main objective of this organisation is to bring together the likeminded people residing
                    worldwide
                    believing in the university of the Bhagwad Gita and to create an environment conducive to religious
                    unity,
                    universal brotherhood, and welfare of all.</div>
            </div>
        </div>
    </div>

    <!-- overview-------------end  -->

    <!-- in association with start -->

    <div class="heading my-3 text-center rounded-2 text-danger-emphasis ">
        <h2 class="mt-2 container fw-semibold">IN ASSOCIATION WITH</h2>
    </div>
    <br>
    <div class="container mb-5 logosp">
        <div id="logos" class="logos">
            <?php
            $imageDir = "logos/";
            $files = scandir($imageDir);
            foreach ($files as $file) {
                $extension = pathinfo($file, PATHINFO_EXTENSION);
                if (in_array($extension, array("jpg", "jpeg", "png", "gif"))) {
                    echo '<img    src=" ' . $imageDir . $file . '" alt="' . $file . '">';
                }
            }
            ?>

        </div>
    </div>

    <!-- in association with end -->



    <div class="container mb-4">

        <div class="row">
            <div class="col-md d-flex justify-content-center align-items-center ">
                <div>
                    <form style="width: 100%" id="submitForm" action="" method="post">
                        <div class="text-center mb-3"><img width="100px" src="Logo.png" alt="GIEO Gita logo"></div>
                        <p class="heading fs- text-center mb-2 clr1">‘GIEO Gita UK’
                            under guidance of H H Shri Swami Gyananandji Maharaj
                        </p>
                        <p class="heading fs-6  clr1">For information or to be part of the event please complete the
                            form below:</p>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Name" required />
                            <label for="floatingPassword">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="country" placeholder="country" required />
                            <label for="floatingPassword">Country</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="phone2" placeholder="Phone" required />
                            <label for="floatingPassword">Phone</label>
                        </div>


                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                                required />
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <button type="button" class="btn btn-primary btn-bg fs-6" id="submitBtn">Submit</button>
                        </div>
                        <hr>
                    </form>
                    <div class="mb-3 d-flex gap-2 flex-wrap">
                        <button id="volunTrigger" class=" flex-item btn btn-primary btn-bg fs-6" data-bs-toggle="modal"
                            data-bs-target="#volunteerModal">Become a Volunteer</button>
                        <button class=" flex-item btn btn-primary btn-bg fs-6" data-jg-donate-button
                            data-charityId="3576214" data-marketCode="GB" data-linkType="givingCheckout">Donate
                            Now</button>
                        <button id="sponsorTrigger" class=" flex-item btn btn-primary btn-bg fs-6"
                            data-bs-toggle="modal" data-bs-target="#sponserModal">Become a Sponsor</button>

                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <button class=" flex-item  btn btn-primary btn-bg fs-6" data-day="1"
                            onclick="redirectTo1()">Friday</button>
                        <button class="flex-item btn btn-primary btn-bg fs-6" data-day="2"
                            onclick="redirectTo2()">Saturday</button>
                        <button class="flex-item btn btn-primary btn-bg fs-6" data-day="3"
                            onclick="redirectTo3()">Sunday</button>
                    </div>

                    <script>
                        function redirectTo1() {
                            window.location.href = 'day1.php';
                        }

                        function redirectTo2() {
                            window.location.href = 'day2.php';
                        }

                        function redirectTo3() {
                            window.location.href = 'day3.php';
                        }
                    </script>



                </div>

            </div>

            <div class="col-md ">
                <div style="height: 100%;" class="d-flex flex-column justify-content-center align-items-center">
                    <img style="width: 100%" src="imgs/banner.png" alt="" />
                </div>
            </div>
        </div>
    </div>





    <style>
        :root {
            --darkbrown: '#3b0f13';
        }
.themeclr{
    color: #924500;
}
        .spacer {
            height: 50px !important;
        }
    </style>

    <div class="spacer"></div>
    <div class="container my-3">
        <div class="heading my-3 text-center rounded-2 text-danger-emphasis ">
            <h2 class=" container fw-semibold mt-2">GAU SEVA</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img width="100%" src="gausala-2.jpg" alt="Gau Seva Image">
            </div>
            <div style="color:#924500" class="col-md-8  ">
                <h3 style=" font-weight:800" class="mt-3 heading">GIEO Gita Gaushala Seva in India: The Importance of Gau Seva and GIEO Gita's Mission</h3>
                <p>
                    Gau Seva, or service to cows, holds a special place in Indian culture, spirituality, and agricultural life.
                    Revered as a sacred symbol of motherhood and nourishment, the cow is central to Hindu beliefs, representing purity, non-violence, and compassion.
                </p>
                <ul class="list-unstyled">
                    <li><strong>Spiritual Significance:</strong> Serving cows (Gau Seva) is believed to purify one’s soul and remove obstacles in life.</li>
                    <li><strong>Ecological Impact:</strong> Cows play a vital role in sustainable agriculture by promoting organic farming.</li>
                    <li><strong>Economic and Agricultural Benefits:</strong> Cows provide sustenance and support rural livelihoods.</li>
                    <li><strong>Health and Wellness:</strong> Products derived from cows promote good health through nutrients and Ayurveda.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="spacer"></div>


    <!-- ---------education -------------------- -->

    <div class="spacer"></div>
    <div class="container my-3">
        <!-- Bhagwad Gita Event Section -->
        <div class="heading my-3 text-center rounded-2 text-danger-emphasis">
            <h2 class="container fw-semibold mt-2">AN INTRODUCTION TO THE BHAGWAD GITA</h2>
        </div>
        <div class="row mb-4 d-flex justify-content-center align-items-center">
            <div class="col-md-8" style="color:#924500">
                <h3 style="font-weight:800" class="mt-3">Join us for a Unique Course on the Bhagwad Gita</h3>
                <p>
                    Led by Dr. Deepak Gupta and Dr. Anand Kulkarni under the guidance of Gita Manishi Swami Gyananandji Maharaj,
                    this course brings the timeless wisdom of the Bhagwad Gita to modern life. Whether you're a beginner or
                    looking to deepen your understanding, this course is for everyone.
                </p>
                <p><strong>📅 Date:</strong> 24th November 2024, 1pm - 5pm GMT</p>
                <p><strong>📍 Venue:</strong> Indian Association Oldham</p>
                <p><strong>💻 Available:</strong> In-person and online</p>
                <p>Don’t miss this chance to connect with the Bhagwad Gita’s teachings.</p>
                <p><a href="bhagwat-gita-course.php" target="_blank" class="btn btn-primary btn-bg">Know More...!</a></p>
                <p><a href="https://forms.office.com/r/7zBZzmaxRL" target="_blank" class="btn btn-primary btn-bg">Register Today!</a></p>
            </div>
            <div class="col-md-4">
                <img width="100%" src="imgs/gita course image.jpg" alt="Bhagwad Gita Course Image">
            </div>
        </div>
    </div>
    <div class="spacer"></div>


    <!-- ---------education --------------------end -->









<!-- ----------------------event section -------------------------- -->
<div id="events" class="container my-5 py-4 event-section">
    
    <div class="heading text-center mb-4">
        <h2 class="fw-semibold text-uppercase text-danger-emphasis">Events</h2>
    </div>
    <div class="spacer"></div>
    <div class="row g-4 justify-content-center">
        <!-- Event Card 1 -->
        <div class="col-12 col-md-6 col-lg-5">
            <div class="card event-card h-100 shadow-lg border-0">
                <div class="row g-0 align-items-center">
                    <div class="col-4">
                        <img src="imgs/festival2024.jpg" class="img-fluid rounded-start" alt="Manchester Gita Festival">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 style="color:#924500" class="card-title text-dark fw-bold themeclr">Manchester Gita Festival 2024</h5>
                            <p class="card-text text-secondary themeclr">
                                ‘GIEO Gita UK’ under guidance of H H Shri Swami Gyananandji Maharaj organised Manchester Gita Festival...
                            </p>
                            <a href="manchester-gita-festival" class="btn btn-danger btn-sm mt-2">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Card 2 -->
        <div class="col-12 col-md-6 col-lg-5">
            <div class="card event-card h-100 shadow-lg border-0">
                <div class="row g-0 align-items-center">
                    <div class="col-4">
                        <img src="imgs/diwali cup.jpg" class="img-fluid rounded-start" alt="Diwali Cup">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title text-dark fw-bold themeclr">Manchester Diwali Cup 2024</h5>
                            <p class="card-text text-secondary themeclr">
                                Greater Manchester Comes Together for Inaugural "Diwali Cup" Cricket Tournament...
                            </p>
                            <a href="diwali-cup" class="btn btn-danger btn-sm mt-2">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer"></div>

</div>
<!-- ----------------------event section --------------------------end -->

<style>
/* Custom Styles for Event Section */
.event-section {
    background-color: #faf2e4;
    border-radius: 15px;
    padding: 20px;
}

.event-card {
    transition: transform 0.3s, box-shadow 0.3s;
    border-radius: 12px;
    max-width: 540px; /* Limit card width */
}

.event-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
}

.img-fluid {
    height: 100%;
    object-fit: cover;
}

.card-body {
    padding: 1rem;
}

.card-title {
    font-size: 1.2rem;
    color: #343a40;
    margin-bottom: 0.5rem;
}

.card-text {
    font-size: 0.9rem;
    color: #6c757d;
}

.btn-danger {
    background-color: #924500;
    color: #fff;
    border-radius: 20px;
    padding: 0.3rem 1rem;
    transition: background-color 0.3s;
}

.btn-danger:hover {
    background-color: #c72c3b;
}



.heading h2 {
    font-family: 'Arial', sans-serif;
    letter-spacing: 1.5px;
}
</style>













    <div class="container my-3 mt-5">
        <div class="heading my-3 text-center rounded-2 text-danger-emphasis ">
            <h2 class=" container fw-semibold mt-2">OUR PARTNERS</h2>
        </div>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <?php
                $imageDir = "partners/";
                $files = scandir($imageDir);
                foreach ($files as $file) {
                    $extension = pathinfo($file, PATHINFO_EXTENSION);
                    if (in_array($extension, array("jpg", "jpeg", "png", "gif"))) {
                        // Display the image
                        echo '<div height="150px" style="background:transperent !important " class="swiper-slide  d-flex align-items-center"><img    src=" ' . $imageDir . $file . '" alt="' . $file . '"></div>';
                        echo "";
                    }
                }
                ?>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="container my-2 py-3">


        <div class="heading mb-3 text-center rounded-2 text-danger-emphasis ">
            <h2 class=" container fw-semibold MY-2">VIDEOS</h2>
        </div>

        <div class="row d-flex">
            <div class="videossection col-md bg">
                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/sNarIn_uuO4?si=QpMjZnVK8c4olYLF"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="videossection col-md bg">
                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/VtcM15YOnd0?si=Rti4V9GTHwsnvCl9"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="videossection col-md bg">
                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/CZah0vZifFI?si=gUrIo4T77pJkiMlm"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- =========================Social icons ========================================== -->
    <div class="container-fluid bg-light py-4">
        <div class="container  my-5">
            <h2 class="heading container text-center fw-semibold MY-2 ">CONNECT WITH SOCIAL MEDIA</h2>
            <div class="d-flex gap-5 align-items-center justify-content-center clr1">
                <a target="_blank" href="https://www.facebook.com/GitaManishi"><img width="40px" src="https://img.icons8.com/?size=512&id=118497&format=png" alt=""></a>
                <a target="_blank" href="https://www.instagram.com/gieo_gita_uk/">
                    <img width="40px" src="https://image.similarpng.com/very-thumbnail/2021/01/Instagram-icon-illustration-on-transparent-background-PNG.png" alt="">
                </a>
            </div>
        </div>
    </div>

    <?php
    include 'parts/_footer.php';
    ?>


</body>

</html>
<!-- Your existing content goes here -->

</body>

</html>