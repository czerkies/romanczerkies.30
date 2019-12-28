<?php
    header('Content-type: application/xml');
    echo '<?xml version="1.0" encoding="UTF-8"?>
        <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
?>
    <url>
        <loc><?= $_SERVER['HTTP_HOST'] . '/' . $_SERVER['SERVER_NAME'] ?></loc>
        <priority>1</priority>
    </url>
</urlset>
