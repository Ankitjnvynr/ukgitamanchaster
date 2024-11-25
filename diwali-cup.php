<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diwali Cup Cricket Tournament</title>
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
            color: #924500;
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
            background-color: rgba(0, 0, 0, 0.6);
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
            background-color: #924500;
            border: none;
            color: white;
        }

        .btn-custom:hover {
            background-color: #b35000;
        }
    </style>
</head>

<body>
    <?php include 'parts/_header.php'; ?>

    <!-- Content Section -->
    <section class="content-section">
        <div class="content">
            <h1 class="text-center fw-bold">Greater Manchester Comes Together for Inaugural "Diwali Cup" Cricket Tournament</h1>
            <p class="mt-3">
                This Sunday, the Indian community in Greater Manchester celebrated the five-day festival of Diwali in style with the first-ever "Diwali Cup" cricket tournament at the Emirates Old Trafford Indoor Centre. Organised in partnership between <b>GIEO GITA UK</b> (Global Inspiration Enlightenment Organisation of the Bhagavad Gita) and the <b>Lancashire Cricket Foundation</b>, with support from the <b>ECB Core Cities programme</b>, the event brought together eight teams from across the region to compete in two categories: the Diwali Cup and the Diwali Trophy.
            </p>
            <p>The event began with opening speeches from Lancashire Cricket Foundation Executive Director Jen Barden, Councillor Vimal Choksi MBE, and MP Navendu Mishra, each commending the tournament for offering a unique way to celebrate Diwali through sport, culture, and community. They noted that the tournament is a powerful example of how sports can unite communities and provide a platform to celebrate shared heritage.</p>
            <p>Supported by the ECB Core Cities programme, this Diwali Cup is part of a broader initiative to engage diverse communities in cricket and make the sport accessible to all. The programme’s involvement was instrumental in ensuring a well-coordinated event and raising awareness about the importance of inclusivity in sports. “We’re delighted to see the ECB’s support making such an impact in fostering community spirit through cricket," said Aneet Kapoor, Trustee of GIEO GITA UK. "The programme has helped us engage and include so many from different backgrounds.”</p>
        </div>
    </section>

    <!-- Event Highlights Section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 d-flex flex-column justify-content-center  text-justify" style="color:#924500;">
                <h3 class="fw-semibold">Event Highlights</h3>
                <p>The tournament featured five hours of fast-paced cricket, with teams from all over Greater Manchester competing for the titles. The lively atmosphere was enriched by the sound of traditional Indian music, vibrant decorations, and the aroma of vegetarian food provided by Manchester’s ISKCON Temple.</p>
                <p>One of the most memorable highlights occurred during the Diwali Cup final on Bhai Dooj, which celebrates the bond between siblings. On this day, siblings Lakhan Kapoor and Sanjivani found themselves as captains of opposing teams, exemplifying Diwali’s spirit and bringing an element of playful rivalry that thrilled the crowd.</p>
                <p>The Indoor Centre’s entrance was beautifully transformed by dedicated volunteers into a vibrant "teleport capsule," featuring life-sized cut-outs of Lord Rama, Sita, and Lord Hanuman, symbolising their return to Ayodhya. Enhanced with colourful lights and devotional music, this immersive display invited attendees to light diyas as a gesture of prayer before the cricket festivities began.</p>
            </div>
            <div class="col-md-4">
                <img src="imgs/diwali cup.jpg" alt="Diwali Cup Event Image" class="img-fluid rounded mb-4">
            </div>
        </div>
    </div>

    <!-- Winners Section -->
    <div class="container my-5 py-3">
        <div class="row">
            <div class="col-md-6">
                <img src="imgs/diwali-cup-winner.jpg" alt="Diwali Cup Event Image" class="img-fluid rounded mb-4">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-end text-justify" style="color:#924500;">
                <h3 class="fw-semibold text-center">Tournament Winners</h3>
                <p>After a day of spirited competition, <b>The Firecrackers</b> emerged as the Diwali Cup champions, while <b>HSS Sale</b> took home the Diwali Trophy. Spectators cheered on their favourite teams, and families engaged in Diwali crafts and rangoli art while enjoying cultural performances by Pyramid Yoga and Dance Academy and a traditional drum show by SKSST Bolton.</p>

            </div>
        </div>
    </div>








    <!-- Gallery Section -->
    <div class="container my-5">
        <h3 class="fw-semibold text-center" style="color:#924500;">Event Gallery</h3>
        <div id="gallery" class="row">
            <!-- Images will be loaded here dynamically -->
        </div>
        <div class="text-center mt-4">
            <button id="loadMore" class="btn btn-custom btn-lg">Show More</button>
        </div>
    </div>





    
   <!-- Community Feedback Section -->
<div class="container my-5 py-5 rounded" style="color:#924500;">
    <h3 class="fw-bold text-center mb-4" style="font-size: 1.8rem;">Community Feedback</h3>
    <p class="text-center mb-5 text-muted" style="font-size: 1.1rem;">Feedback from the community was overwhelmingly positive.</p>
    <div class="row text-center g-4" >
        <div class="col-md-4 shadow-lg">
            <blockquote class="blockquote text-muted">
                <p class="mb-3" style="font-size: 1.1rem;">"Heartfelt thanks to GIEO Gita UK, the Lancashire Cricket Foundation, and the ECB Core Cities team for an incredible event. The entire family had a fantastic experience; it felt like we were back in India celebrating Diwali."</p>
            </blockquote>
        </div>
        <div class="col-md-4 shadow-lg">
            <blockquote class="blockquote text-muted">
                <p class="mb-3" style="font-size: 1.1rem;">"This landmark event brought together communities from all corners of India—North, South, East, and West—uniting Hindus, Sikhs, Jains, and Swaminarayan followers in a joyful celebration with the Lancashire Cricket Foundation. We’re incredibly grateful for their partnership."</p>
                <footer class="blockquote-footer" style="font-size: 0.9rem;">Aneet Kapoor, Trustee of GIEO GITA UK</footer>
            </blockquote>
        </div>
        <div class="col-md-4 shadow-lg">
            <blockquote class="blockquote text-muted">
                <p class="mb-3" style="font-size: 1.1rem;">"It’s an honour to be part of the inaugural Diwali Cup. This event truly reflects our strong connection with the Hindu community in Greater Manchester. Diversity is our strength, and this tournament is a wonderful testament to that."</p>
                <footer class="blockquote-footer" style="font-size: 0.9rem;">Ammar Ashraf, Urban Cricket Manager</footer>
            </blockquote>
        </div>
    </div>
</div>







    <!-- Closing Section -->
    <div class="container my-5" style="color:#924500;">
        <h3 class="fw-semibold text-center">A Look to the Future</h3>
        <p>With the Diwali Cup’s resounding success, organisers are already looking ahead to expanding next year’s event, making it a cherished annual celebration of cricket, culture, and community in Greater Manchester.</p>

    </div>




    <?php
    include 'parts/_footer.php';
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




    <script>
        let imageOffset = 0;
        const galleryPath = 'imgs/diwali-gallery/';

        // Function to load images
        function loadImages() {
            $.ajax({
                url: 'parts/load_images.php',
                method: 'GET',
                data: {
                    offset: imageOffset,
                    path: galleryPath
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data); // For debugging
                    const gallery = $('#gallery');

                    // Check if data.images is an array and iterate if true
                    if (Array.isArray(data.images)) {
                        data.images.forEach(img => {
                            const imgDiv = $('<div>').addClass('col-md-4 mb-4');
                            imgDiv.html(`<img style="object-fit:cover; aspect-ratio:16/9;" src="imgs/diwali-gallery/${img}" class="img-fluid rounded" alt="Gallery Image">`);
                            gallery.append(imgDiv);
                        });
                        imageOffset += 10; // Update offset for next batch
                    } else {
                        console.error("Error: data.images is not an array or is undefined", data.images);
                    }

                    // Check if more images are available
                    if (!data.hasMore) {
                        $('#loadMore').hide();
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error loading images:", error);
                }
            });
        }

        // Initial load
        loadImages();

        // Load more images on button click
        $('#loadMore').on('click', loadImages);
    </script>
</body>

</html>