<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manchester Gita Festival - Friday 9th August 2024</title>

    <style>
    body{
        
        font-family: 'Poppins', sans-serif;
        line-height: 1.6;
        background: linear-gradient(to bottom right, #f9f5e9, #f7e092);
        color: #333;
        scroll-behavior: smooth;
        min-height: 100vh;
    }

    .row {
        display: flex;
        max-width: 1200px;
        width: 90%;
        margin: 0 auto;
    }

    .card-img {
        width: 100%;
        cursor: pointer;
        transition: transform 0.2s;
    }

    .card-img:hover {
        transform: scale(1.05);
    }

    .card-columns {
        column-gap: 15px;
    }

    /* Responsive column layout */
    @media (max-width: 767px) {
        .card-columns {
            column-count: 2;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .card-columns {
            column-count: 3;
        }
    }

    @media (min-width: 992px) {
        .card-columns {
            column-count: 5;
        }
    }

    /* Lightbox overlay styling */
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

    <div class="mt-3">
        <?php include 'parts/_header.php' ?>
    </div>
    <div class="row">

        <div class="card-columns">
            <?php
            $dir = "gallary/";  // Specify the directory containing images
            $images = array_diff(scandir($dir), array('.', '..'));

            foreach ($images as $index => $image) {
                $imagePath = $dir . $image;
                echo '
                <a href="#lightbox-' . $index . '">
                    <img class="card-img" src="' . $imagePath . '" alt="Card image">
                </a>
                <div id="lightbox-' . $index . '" class="lightbox">
                    <a href="#" class="close">&times;</a>
                    <img src="' . $imagePath . '" alt="Lightbox image">
                </div>';
            }
            ?>
        </div>
    </div>

</body>

</html>