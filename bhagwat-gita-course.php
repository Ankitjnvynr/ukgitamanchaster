<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>An Introduction to the Bhagwad Gita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7e092;
        }

   

        .content-section {
            background-image: url('imgs/gita-bg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #924500; /* Text color matching theme */
            padding: 4rem 2rem;
            position: relative;
            min-height: 80vh;
        }

        .content-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.6); /* Dark overlay for readability */
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            color: white;
            max-width: 800px;
            margin: auto;
            text-align: center;
        }

        .btn-custom {
            background-color: #924500; /* Dark orange button */
            border: none;
            color: white;
        }

        .btn-custom:hover {
            background-color: #b35000; /* Slightly lighter shade on hover */
        }
    </style>
</head>

<body>
<?php include 'parts/_header.php' ?>

 

    <!-- Content Section -->
    <section class="content-section">
        <div class="content">
            <h1 style="color:white " class="text-center text-white fw-bold">AN INTRODUCTION TO THE BHAGWAD GITA</h1>
            <h4 class="fw-semibold">Join us for a Unique Course on the Bhagwad Gita</h4>
            <p class="mt-3">
                Led by Dr. Deepak Gupta and Dr. Anand Kulkarni under the guidance of Gita Manishi Swami Gyananandji Maharaj,
                this course brings the timeless wisdom of the Bhagwad Gita to modern life. Whether you're a beginner or 
                looking to deepen your understanding, this course is for everyone.
            </p>
           
            <p>Don’t miss this chance to connect with the Bhagwad Gita’s teachings.</p>
            <div class="mt-4">
                
                <a href="https://forms.office.com/r/7zBZzmaxRL" class="btn btn-custom btn-lg" target="_blank">Register
                    Today!</a>
            </div>
        </div>
    </section>

    
    <!-- ---------education -------------------- -->

    <div class="spacer"></div>
    <div class="container my-3">
        <!-- Bhagwad Gita Event Section -->
        <div class="heading my-3 text-center rounded-2 text-danger-emphasis">
           
        </div>
        <div class="row mb-4 d-flex justify-content-center align-items-center">
            <div class="col-md-8" style="color:#924500">
                <h3 style="font-weight:800" class="mt-3">Join us for a Unique Course on the Bhagwad Gita</h3>
                
                <p><strong>📅 Date:</strong> 24th November 2024, 1pm - 5pm GMT</p>
                <p><strong>📍 Venue:</strong> Indian Association Oldham</p>
                <p><strong>💻 Available:</strong> In-person and online</p>
                <p>Don’t miss this chance to connect with the Bhagwad Gita’s teachings.</p>
                
                <p><a href="https://forms.office.com/r/7zBZzmaxRL" target="_blank" class="btn btn-primary btn-custom">Register Today!</a></p>
            </div>
            <div class="col-md-4">
                <img width="100%" src="imgs/gita course image.jpg" alt="Bhagwad Gita Course Image">
            </div>
        </div>
    </div>
    <div class="spacer"></div>

    
    <?php
    include 'parts/_footer.php';
    ?>




    <!-- ---------education --------------------end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>
