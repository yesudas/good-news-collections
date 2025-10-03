<?php
// sitemap.php
// Base directory (change this to your desired root folder)
$baseDir = __DIR__; 
$baseUrl = "https://www.wordofgod.in/good-news-collections";

// Function to recursively find files
function getFiles($dir, $baseUrl) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    $files = [];

    foreach ($rii as $file) {
        if ($file->isDir()) continue;

        $ext = strtolower(pathinfo($file->getFilename(), PATHINFO_EXTENSION));
        if (in_array($ext, ["html", "php"])) {
            $filePath = str_replace("\\", "/", $file->getPathname());
            $relativePath = str_replace(realpath($dir), '', realpath($filePath));
            $relativePath = ltrim($relativePath, "/\\");
            $files[] = $baseUrl . "/" . $relativePath;
        }
    }
    return $files;
}

$files = getFiles($baseDir, $baseUrl);

// Build sitemap XML
$xml = new DOMDocument("1.0", "UTF-8");
$xml->formatOutput = true;

$urlset = $xml->createElement("urlset");
$urlset->setAttribute("xmlns", "http://www.sitemaps.org/schemas/sitemap/0.9");

$today = date("Y-m-d");

foreach ($files as $file) {
    $url = $xml->createElement("url");

    $loc = $xml->createElement("loc", htmlspecialchars($file));
    $url->appendChild($loc);

    $lastmod = $xml->createElement("lastmod", $today);
    $url->appendChild($lastmod);

    $urlset->appendChild($url);
}

$xml->appendChild($urlset);

// Save sitemap.xml in the same folder as sitemap.php
$xml->save(__DIR__ . "/sitemap.xml");

echo "Sitemap generated successfully: sitemap.xml with " . count($files) . " URLs.";
?>
