<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manchester Gita Festival - Friday 9th August 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background: linear-gradient(to bottom right, #f9f5e9, #f7e092);
            color: #333;
            scroll-behavior: smooth;
            min-height: 100vh;
        }

        .card-img,
        .video-thumb {
            width: 100%;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .card-img:hover,
        .video-thumb:hover {
            transform: scale(1.05);
        }

        .lightbox {
            display: none;
            position: fixed;
            z-index: 999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
        }

        .lightbox img {
            max-width: 90%;
            max-height: 90%;
        }

        .lightbox:target {
            display: flex;
        }

        .close {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <?php include 'parts/_header.php'; ?>

    <div class="container my-5">
        <!-- Row for Cards -->
        <div class="row">
            <!-- Image Gallery Card -->
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Event Images</h3>
                        <div id="gallery-container" class="row row-cols-2 g-3">
                            <!-- Images will be loaded here dynamically -->
                        </div>
                        <div class="text-center mt-4">
                            <button id="loadMoreImages" class="btn btn-primary">Load More Images</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Gallery Card -->
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Event Videos</h3>
                        <div id="video-container" class="row row-cols-1 g-3">
                            <!-- Videos will be loaded here dynamically -->
                        </div>
                        <div class="text-center mt-4">
                            <button id="loadMoreVideos" class="btn btn-secondary">Load More Videos</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'parts/_footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Image Variables
        let imageOffset = 0;
        const imagesPerLoad = 10;
        const galleryDir = "imgs/gallery/";
        const images = <?php echo json_encode(array_diff(scandir($dir), array('.', '..'))); ?>;

        // Video Variables
        let videoOffset = 0;
        const videosPerLoad = 6;
        const videoDir = "videos/gallery/";
        const videos = <?php echo json_encode(array_diff(scandir('videos/gallery/'), array('.', '..'))); ?>;

        const galleryContainer = document.getElementById('gallery-container');
        const videoContainer = document.getElementById('video-container');
        const loadMoreImagesButton = document.getElementById('loadMoreImages');
        const loadMoreVideosButton = document.getElementById('loadMoreVideos');

        // Function to load images
        function loadImages() {
            const maxImages = images.length;
            const end = Math.min(imageOffset + imagesPerLoad, maxImages);

            for (let i = imageOffset; i < end; i++) {
                const image = images[i];
                const imagePath = galleryDir + image;

                const imageHTML = `
                    <div class="col">
                        <a href="#lightbox-${i}">
                            <img class="card-img" src="${imagePath}" alt="Card image">
                        </a>
                        <div id="lightbox-${i}" class="lightbox">
                            <a href="#" class="close">&times;</a>
                            <img src="${imagePath}" alt="Lightbox image">
                        </div>
                    </div>
                `;

                galleryContainer.innerHTML += imageHTML;
            }

            imageOffset += imagesPerLoad;

            if (imageOffset >= maxImages) {
                loadMoreImagesButton.style.display = 'none';
            }
        }

        // Function to load videos
        function loadVideos() {
            const maxVideos = videos.length;
            const end = Math.min(videoOffset + videosPerLoad, maxVideos);

            for (let i = videoOffset; i < end; i++) {
                const video = videos[i];
                const videoPath = videoDir + video;

                const videoHTML = `
                    <div class="col">
                        <div class="card">
                            <video class="video-thumb" controls>
                                <source src="${videoPath}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                `;

                videoContainer.innerHTML += videoHTML;
            }

            videoOffset += videosPerLoad;

            if (videoOffset >= maxVideos) {
                loadMoreVideosButton.style.display = 'none';
            }
        }

        // Initial Load
        loadImages();
        loadVideos();

        // Event Listeners for Load More buttons
        loadMoreImagesButton.addEventListener('click', loadImages);
        loadMoreVideosButton.addEventListener('click', loadVideos);
    </script>
</body>

</html>
