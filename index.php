<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gita Mahotsav UK : GIEO Gita</title>
  <link rel="icon" type="image/x-icon" href="https://gieogita.org/wp-content/uploads/2022/09/GieoGita_logo-removebg-preview.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/style.css">
  <style>
    body {
      background: #f7e092;
      background: rgb(247, 224, 146);
      background: radial-gradient(circle, rgba(247, 224, 146, 1) 35%, rgba(223, 185, 56, 1) 100%);
    }

    .heading {
      font-family: 'Ubuntu', sans-serif;
    }

    .clr1 {
      color: #924500;
    }

    .videossection {
      flex: 1 0 250px;
    }

    .videossection iframe {
      aspect-ratio: 16/9;
      border-radius: 10px;
    }

    .btn-bg {
      background-color: #924500;
      outline: none;
      border: none;
    }

    .btn-bg:hover {
      background-color: #612d00;
    }

    .overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
      z-index: 100;
    }

    /* Styles for the popup container */
    .popup {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      text-align: center;
      position: relative;
      animation: scaleUp 0.3s ease-in-out;
      z-index: 102;
    }

    /* Styles for the close button */
    .close-btn {
      cursor: pointer;
      color: #555;
      font-size: 20px;
      position: absolute;
      top: 10px;
      right: 15px;
    }

    .close-btn-below {

      color: #fff;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 15px;
    }

    /* Styles for the tick mark */
    .tick-mark {
      color: #4CAF50;
      font-size: 40px;
      margin-bottom: 10px;
    }

    /* Animation keyframes */
    @keyframes scaleUp {
      0% {
        transform: scale(0.7);
        opacity: 0;
      }

      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    .logosp {
      position: relative;
    }

    .logosp {
      overflow: hidden;
    }

    .logos {
      display: flex;
      overflow: hidden;
    }

    .logos img {
      margin-right: 20px;
      max-height: 70px;
      border-radius: 5px;
    }

    .logosp::before {
      content: '';
      position: absolute;
      background-color: red;
      background: linear-gradient(to right, #f7e092, rgba(0, 0, 0, 0));
      height: 200px;
      width: 50px;
      left: 0;
      top: 0;
      z-index: 20;
    }

    .logosp::after {
      content: '';
      position: absolute;
      background-color: red;
      background: linear-gradient(to left, #f7e092, rgba(0, 0, 0, 0));
      height: 200px;
      width: 50px;
      right: 0;
      top: 0;
      z-index: 20;
    }

    .bg:hover {
      scale: 1.05;


    }
  </style>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Modal -->
  <div class="modal fade " id="volunteerModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <form style="width: 100%" id="v-submitForm" action="" method="post">


            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="v-name" name="v-name" placeholder="country" required />
              <label for="v-name">Full Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="v-age" name="v-age" placeholder="Phone" required />
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
                <input class="form-check-input" type="radio" name="organisation" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Temple </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="organisation" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Sanstha </label>
              </div>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="v-organisation-name " name="v-organisation-name" placeholder="name@example.com" required />
              <label for="v-organisation-name ">Organisation Name(Temple/Sanstha) </label>
            </div>
            <div class="form-floating mb-3">
              <input type="tel" class="form-control" id="v-Telephone " name="v-Telephone" placeholder="name@example.com" required />
              <label for="v-Telephone ">Telephone </label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="v-email" name="v-email" placeholder="name@example.com" required />
              <label for="v-email">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="v-sewa1" name="v-sewa1" placeholder="name@example.com" required />
              <label for="v-sewa1">Sewa Preference 1</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="v-sewa2" name="v-sewa2" placeholder="name@example.com" required />
              <label for="v-sewa2">Sewa Preference 2</label>
            </div>
            <div class="form-floating mb-3 text-center">
              <button type="button" class="btn btn-primary btn-bg fs-5" id="submitBtn">Submit</button>
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


  <div class="heading my-3 text-center rounded-2 text-danger-emphasis ">
    <h2 class="mt-2 container fw-semibold">IN ASSOCIATION WITH</h2>
  </div>
  <br>
  <div class="container mb-5 logosp">
    <div id="logos" class="logos">
      <img src="logos/shree radhe krishn mandir.jpg" alt="logo1">
      <img src="logos/BHARTIYA VIDYA BHAVAN.jpg" alt="logo2">
      <img src="logos/insight uk.jpg" alt="logo3">
      <img src="logos/MARATHI manchaster mandal.jpg" alt="logo5">
      <img src="logos/northwest dishasaaj.png" alt="logo6">
      <img src="logos/Bengali hindu adarsha sangha uk.jpg" alt="logo7">
      <img src="logos/BHF-Radio.jpg" alt="logo8">
      <img src="logos/bolton-hindu.jpg" alt="logo9">
      <img src="logos/indian-association.jpg" alt="logo10">
      <img src="logos/kaho.jpg" alt="logo11">
      <img src="logos/kannada-sangha.jpg" alt="logo12">
      <img src="logos/MTM logo.jpg" alt="logo13">
      <img src="logos/jeeyar educational trust uk.jpg" alt="logo4">
      <img src="logos/Sewa-day.jpg" alt="logo14">
      <img src="logos/north-west-marathi.jpg" alt="logo15">
      <img src="logos/om logo.jpg" alt="logo16">
    </div>
  </div>


  <div class="container mb-4">

    <div class="row">
      <div class="col-md d-flex justify-content-center align-items-center ">
        <div>
          <form style="width: 100%" id="submitForm" action="" method="post">
            <div class="text-center mb-3"><img width="100px" src="Logo.png" alt="GIEO Gita logo"></div>
            <p class="heading fs- text-center mb-2 clr1">‘GIEO Gita UK’
              under guidance of H H Shri Swami Gyananandji Maharaj
            </p>
            <p class="heading fs-6  clr1">For information or to be part of the event please complete the form below:</p>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" placeholder="Name" />
              <label for="floatingPassword">Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="country" placeholder="country" />
              <label for="floatingPassword">Country</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="phone2" placeholder="Phone" />
              <label for="floatingPassword">Phone</label>
            </div>


            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <button type="button" class="btn btn-primary btn-bg fs-6" id="submitBtn">Submit</button>
            </div>
            <hr>
          </form>
          <div class="mb-3">
            <button class="btn btn-primary btn-bg fs-6 " data-bs-toggle="modal" data-bs-target="#volunteerModal">Become
              A Volunteer</button>
            <button class="btn btn-primary btn-bg fs-6 " data-jg-donate-button data-charityId="3576214" data-marketCode="GB" data-linkType="givingCheckout">Donate Now</button>
          </div>
        </div>

      </div>

      <div class="col-md">
        <div>
          <img style="width: 100%" src="banner.png" alt="" />
        </div>
      </div>
    </div>
  </div>



  <div class="container-fluid bg-light py-4">
    <div style="text-align:justify" class="container clr1 text-justify text-justify">
      <h2 class="heading mb-2 mt-2 fw-semibold text-center">OVERVIEW</h2>
      GIEO GITA UK (Global Inspiration Enlightenment Organisation of the Bhagwad Gita) is an extension of the
      International GIEO GITA organization based in India. Its main objective is to unite likeminded individuals
      worldwide
      who believe in the universality of the Bhagwad Gita's teachings. By bringing together people from diverse
      backgrounds, GIEO GITA UK aims to create an environment conducive to religious unity, universal brotherhood, and
      the
      welfare of all. The organization seeks to promote understanding and appreciation of the Bhagwad Gita's wisdom as a
      means to foster harmony among different religious communities. Through various activities such as seminars,
      workshops, and cultural events, GIEO GITA UK endeavors to spread the message of peace, compassion, and spiritual
      enlightenment embodied in the Bhagwad Gita. By emphasizing the common values shared by humanity, regardless of
      cultural or religious differences, GIEO GITA UK strives to build bridges of understanding and cooperation among
      people worldwide. Ultimately, the organization envisions a world where individuals can coexist peacefully,
      embracing
      diversity while working together for the betterment of society.
    </div>
  </div>


  <div class="my-2">.</div>
  <div class="container text-center mt-4">
    <div class="row mb-3 heading text-danger-emphasis ">
      <div class="col">
        <h2 class="heading mb-5 fw-semibold ">SUBJECT</h2>
        <div class="border border-3 p-3 bg-warning-subtle bg">Three-Day Multi-Faith Cultural Event – The Manchester Gita
          Festival - Promoting Peace, Love, and Harmony inspired by the teachings of the Bhagwad Gita.</div>

      </div>
      <div class="col">
        <h2 class="heading mb-5 fw-semibold ">AIM</h2>
        <div class="border border-3 p-3 bg-warning-subtle bg">Our aim is to create a platform that brings together
          diverse communities, fostering understanding and unity through the shared principles found in the Bhagwad
          Gita. This event will feature enlightening discussions, cultural performances, and interact.</div>

      </div>
      <div class="col">
        <h2 class="heading mb-5 fw-semibold ">DESCRIPTION</h2>
        <div class="border border-3 p-3 bg-warning-subtle bg">GIEO GITA UK (Global Inspiration Enlightenment
          Organisation of the Bhagwad Gita) is an extension of the International GIEO GITA organisation based in India.
          The main objective of this organisation is to bring together the likeminded people residing worldwide
          believing in the university of the Bhagwad Gita and to create an environment conducive to religious unity,
          universal brotherhood, and welfare of all.</div>
      </div>
    </div>
  </div>
 





  <div class="container">
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper ">
        
        <?php
        // Directory containing images
        $imageDir = "partners/";

        // Get all files in the directory
        $files = scandir($imageDir);

        // Loop through each file
        foreach ($files as $file) {
          // Get the file extension
          $extension = pathinfo($file, PATHINFO_EXTENSION);

          // Check if the file is an image
          if (in_array($extension, array("jpg", "jpeg", "png", "gif"))) {
            // Display the image
            echo '<div height="150px" class="swiper-slide d-flex align-items-center"><img    src=" '.$imageDir.$file.'" alt="'.$file.'"></div>';
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
        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/sNarIn_uuO4?si=QpMjZnVK8c4olYLF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="videossection col-md bg">
        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/VtcM15YOnd0?si=Rti4V9GTHwsnvCl9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>

      <div class="videossection col-md bg">
        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/CZah0vZifFI?si=gUrIo4T77pJkiMlm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <!-- =========================Social icons ========================================== -->
  <div class="container-fluid bg-light py-4">
    <div class="container  my-5">
      <h2 class="heading container text-center fw-semibold MY-2 ">CONNECT WITH SOCIAL MEDIA</h2>
      <div class="d-flex gap-5 align-items-center justify-content-center clr1">
        <a target="_blank" href="https://www.facebook.com/GitaManishi"><i class="fa-brands fa-facebook clr1 btn fs-1"></i></a>
        <a target="_blank" href="https://www.instagram.com/gieo_gita_uk/"><i class="fa-brands fa-instagram clr1 btn fs-1"></i></a>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>










  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script src="js/script.js"></script>

  <script src="https://www.justgiving.com/widgets/scripts/widget.js" data-version="2" data-widgetType="attachCheckout" type="text/javascript"></script>
  <script>

  </script>



</body>

</html>