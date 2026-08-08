<?php
// footer.php
include 'counter.php';
?>

    <section class="about" id="about">
      <?php include 'credits.php'; ?>
    </section>

    <footer class="site-footer">
        <div class="site-footer__inner">
            <p>No copyright. Freely copy and distribute (Matthew 10:8). <a target="_blank" rel="noopener" href="https://www.wordofgod.in/">www.WordOfGod.in</a></p>
            <p class="visitors">Visitors: <?= htmlspecialchars((string) $visitors2) ?></p>
        </div>
        <p class="footer-links site-shell">
            <a href="https://wordofgod.in/bibledictionary/" target="_blank" rel="noopener">Bible Dictionaries</a>
            <a href="https://wordofgod.in/bible-concordance/" target="_blank" rel="noopener">Bible Concordance</a>
            <a href="https://wordofgod.in/bibles/" target="_blank" rel="noopener">Online Bibles</a>
            <a href="https://wordofgod.in/good-news-collections/">Good News Collections</a>
            <a href="https://wordofgod.in/bible-wallpapers/" target="_blank" rel="noopener">Bible Wallpapers</a>
            <a href="https://wordofgod.in/bible-devotions/" target="_blank" rel="noopener">Bible Devotions</a>
            <a href="https://wordofgod.in/bible-app-modules/" target="_blank" rel="noopener">Bible App Modules</a>
            <a href="https://wordofgod.in/wog/word-of-god-வெளியீடுகள்-download-all-our-published-materials-free-of-cost/" target="_blank" rel="noopener">All Our Resources</a>
            <a href="https://wordofgod.in/" target="_blank" rel="noopener">Free Christian Resources</a>
        </p>
    </footer>

    <div class="zoom-controls" aria-label="Zoom controls">
        <button class="zoom-btn" type="button" onclick="zoomIn()" aria-label="Zoom in">+</button>
        <button class="zoom-btn" type="button" onclick="zoomOut()" aria-label="Zoom out">−</button>
        <button class="zoom-btn" type="button" onclick="resetZoom()" aria-label="Reset zoom">⟳</button>
    </div>

    <script src="js/script.js?v=<?php echo htmlspecialchars($version ?? '2026.08'); ?>"></script>
