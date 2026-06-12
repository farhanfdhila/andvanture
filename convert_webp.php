<?php
$dir = __DIR__ . '/public/images';
$files = scandir($dir);

foreach ($files as $file) {
    if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png'])) {
        $imgPath = $dir . '/' . $file;
        $webpPath = $dir . '/' . pathinfo($file, PATHINFO_FILENAME) . '.webp';
        
        if (file_exists($webpPath)) {
            continue;
        }

        $image = null;
        if (pathinfo($file, PATHINFO_EXTENSION) === 'png') {
            $image = imagecreatefrompng($imgPath);
            imagepalettetotruecolor($image);
            imagealphablending($image, true);
            imagesavealpha($image, true);
        } else {
            $image = imagecreatefromjpeg($imgPath);
        }

        if ($image) {
            imagewebp($image, $webpPath, 80);
            imagedestroy($image);
            echo "Converted: $file -> " . basename($webpPath) . "\n";
        } else {
            echo "Failed to load: $file\n";
        }
    }
}
echo "Conversion complete.\n";
