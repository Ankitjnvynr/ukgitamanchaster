<?php
$imagesPerPage = 15;
$offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
$path = isset($_GET['path']) ? $_GET['path'] : 'imgs/diwali-gallery';

// Adjust path to handle relative directory
$path = '../' . $path;

// Ensure the folder exists and is accessible
if (!is_dir($path)) {
    echo json_encode(['images' => [], 'hasMore' => false]);
    exit;
}

// Get all image files, excluding '.' and '..'
$allImages = array_diff(scandir($path), array('.', '..'));
$allImages = array_values($allImages);

$totalImages = count($allImages);
$slicedImages = array_slice($allImages, $offset, $imagesPerPage);

// Only return image names (without directory path)
$imageNames = array_map(function($img) {
    return $img; // Just the image filename
}, $slicedImages);

$response = [
    'images' => $imageNames,
    'hasMore' => $offset + $imagesPerPage < $totalImages
];

// Set the header and output JSON
header('Content-Type: application/json');
echo json_encode($response, JSON_UNESCAPED_SLASHES);
