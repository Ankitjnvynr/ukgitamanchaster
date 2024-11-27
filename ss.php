<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Masonry Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

    <style>
        #gallery {
            columns: 5;
        }

        /* Desktop: 4 columns */
        @media (max-width: 1200px) {
            #gallery {
                columns: 4;
            }
        }

        /* Tablet: 3 columns */
        @media (max-width: 768px) {
            #gallery {
                columns: 4;
            }
        }

        /* Mobile: 1 column */
        @media (max-width: 480px) {
            #gallery {
                columns: 1;
            }
        }
    </style>
    <!-- Gallery Section -->
    <div class="container my-5">
        <h3 class="fw-semibold text-center" style="color:#924500;">Event Gallery</h3>
        <div id="gallery">
            <!-- Images will be loaded here dynamically -->
        </div>
        <div class="text-center mt-4">
            <button id="loadMore" class="btn btn-custom btn-lg">Show More</button>
        </div>
    </div>


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
                    console.log(data); // For debugging purposes
                    const gallery = $('#gallery');

                    // Check if data.images is an array and iterate if true
                    if (Array.isArray(data.images)) {
                        data.images.forEach(img => {
                            // Create an img element
                            const imgTag = $('<img>', {
                                src: `${galleryPath}${img}`, // Set the source of the image
                                alt: img, // Optional: use image name as alt
                                class: 'gallery-image mb-3 rounded', // Optional: for styling
                                style: 'width:100%; ',

                            });

                            // Append the image to the gallery
                            gallery.append(imgTag);
                        });

                        // Update offset for the next batch of images
                        imageOffset += data.images.length;
                    } else {
                        console.error("Error: data.images is not an array or is undefined", data.images);
                    }

                    // Check if more images are available
                    if (!data.hasMore) {
                        $('#loadMore').hide(); // Hide the Load More button if no more images
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error loading images:", error);
                }
            });
        }

        // Initial load
        $(document).ready(function() {
            loadImages();

            // Load more images on button click
            $('#loadMore').on('click', loadImages);
        });
    </script>

</body>

</html>