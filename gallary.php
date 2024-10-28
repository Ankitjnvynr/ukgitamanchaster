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

        .card-img {
            width: 100%;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .card-img:hover {
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

   
        <?php include 'parts/_header.php' ?>
   

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3">
                    <?php
                    $dir = "gallary/";  // Specify the directory containing images
                    $images = array_diff(scandir($dir), array('.', '..'));

                    foreach ($images as $index => $image) {
                        $imagePath = $dir . $image;
                        echo '
                        <div class="col">
                            <a href="#lightbox-' . $index . '">
                                <img class="card-img" src="' . $imagePath . '" alt="Card image">
                            </a>
                            <div id="lightbox-' . $index . '" class="lightbox">
                                <a href="#" class="close">&times;</a>
                                <img src="' . $imagePath . '" alt="Lightbox image">
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
