<?php
// menu.php
$d = $_GET['d'] ?? "";
$currentPath = basename(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '');
$isHome = ($currentPath === '' || $currentPath === 'index.php' || $currentPath === 'index.html' || $currentPath === 'good-news-collections');
?>
    <header class="site-header">
        <div class="site-header__inner">
            <a class="brand" href="https://wordofgod.in/good-news-collections">
                <span class="brand__tamil">நற்செய்தி</span>
                <span class="brand__en">Good News</span>
            </a>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="siteNav" data-nav-toggle>
                Menu
            </button>
            <nav class="site-nav" id="siteNav" data-site-nav>
                <a href="https://wordofgod.in/bibledictionary/" target="_blank" rel="noopener">Bible Dictionaries</a>
                <a href="https://wordofgod.in/bible-concordance/" target="_blank" rel="noopener">Bible Concordance</a>
                <a href="https://wordofgod.in/bibles/" target="_blank" rel="noopener">Online Bibles</a>
                <a href="https://wordofgod.in/good-news-collections/"<?php echo $isHome ? ' aria-current="page"' : ''; ?>>Good News Collections</a>
                <a href="https://wordofgod.in/bible-wallpapers/" target="_blank" rel="noopener">Bible Wallpapers</a>
                <a href="https://wordofgod.in/bible-devotions/" target="_blank" rel="noopener">Bible Devotions</a>
                <a href="https://wordofgod.in/bible-app-modules/" target="_blank" rel="noopener">Bible App Modules</a>
                <a href="https://wordofgod.in/wog/word-of-god-வெளியீடுகள்-download-all-our-published-materials-free-of-cost/" target="_blank" rel="noopener">All Our Resources</a>
                <a href="https://wordofgod.in/" target="_blank" rel="noopener">Free Christian Resources</a>
                <button id="installAppBtn" class="btn btn--primary" type="button">Install as App</button>
            </nav>
        </div>
    </header>
