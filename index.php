<?php
include 'counter.php';
?>
<!DOCTYPE html>
<html lang="ta">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>நற்செய்தி தொகுப்புகள் | Good News Tamil Christian Collections</title>
    <meta name="description" content="Free Tamil Christian Bible study collections by Good News Publishers, hosted by Word of God Team. Interlinear Bibles, commentaries, life of Jesus, and more.">

    <link rel="manifest" href="/good-news-collections/manifest.json?v=8">
    <meta name="theme-color" content="#317a53">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Manrope:wght@400;600;700&family=Noto+Sans+Tamil:wght@400;600;700&family=Noto+Serif+Tamil:wght@500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css?v=8">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8ZYHRZG9B8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-8ZYHRZG9B8');
    </script>
</head>
<body>
    <header class="site-header">
        <div class="site-header__inner">
            <a class="brand" href="/good-news-collections/">
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
                <a href="/good-news-collections/" aria-current="page">Good News Collections</a>
                <a href="https://wordofgod.in/bible-wallpapers/" target="_blank" rel="noopener">Bible Wallpapers</a>
                <a href="https://wordofgod.in/bible-devotions/" target="_blank" rel="noopener">Bible Devotions</a>
                <a href="https://wordofgod.in/bible-app-modules/" target="_blank" rel="noopener">Bible App Modules</a>
                <a href="https://wordofgod.in/wog/word-of-god-வெளியீடுகள்-download-all-our-published-materials-free-of-cost/" target="_blank" rel="noopener">All Our Resources</a>
                <a href="https://wordofgod.in/" target="_blank" rel="noopener">Free Christian Resources</a>
                <a href="https://www.wordofgodteam.com/" target="_blank" rel="noopener">About Us</a>
                <button id="installAppBtn" class="btn btn--primary" type="button">Install as App</button>
            </nav>
        </div>
    </header>

    <section class="hero" aria-label="Good News Collections">
        <div class="hero__media" aria-hidden="true">
            <img src="images/hero-open-ministry.jpg" alt="" width="1920" height="1080" fetchpriority="high">
        </div>
        <div class="hero__veil" aria-hidden="true"></div>
        <div class="hero__content">
            <h1 class="hero__brand">
                நற்செய்தி
                <span class="hero__brand-en">Good News Collections</span>
            </h1>
            <p class="hero__headline">Tamil Christian study tools, freely shared.</p>
            <p class="hero__lede">Bibles, dictionaries, commentaries, and the life of Jesus — open to every reader.</p>
            <div class="hero__actions">
                <a class="btn btn--primary" href="#collections">Browse collections</a>
                <a class="btn btn--secondary" href="download.php?d=false">Download PDFs</a>
            </div>
        </div>
    </section>

    <main id="collections">
        <section class="section">
            <div class="site-shell">
                <header class="section__header">
                    <p class="section__kicker">Bibles &amp; Reference</p>
                    <h2 class="section__title">
                        வேதாகமம் &amp; அகராதிகள்
                        <span class="section__title-en">Bibles &amp; dictionaries</span>
                    </h2>
                    <p class="section__lede">Interlayer and interlinear Bibles, plus Tamil and Strong’s reference works.</p>
                </header>
                <div class="collection-grid">
                    <a class="collection-card" href="படிநிலை-வேதாகமம்/">
                        <h3 class="collection-card__ta">படிநிலை வேதாகமம்</h3>
                        <p class="collection-card__en">Tamil Interlayer Bible</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="இணைநிலை-வேதாகமம்/">
                        <h3 class="collection-card__ta">இணைநிலை வேதாகமம்</h3>
                        <p class="collection-card__en">Tamil Interlinear Bible</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="வேதாகமம்-சொல்லகராதி/">
                        <h3 class="collection-card__ta">வேதாகமம் சொல்லகராதி</h3>
                        <p class="collection-card__en">Tamil Bible Dictionary</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="பெயர்-அகராதி/">
                        <h3 class="collection-card__ta">பெயர் அகராதி</h3>
                        <p class="collection-card__en">Tamil Bible Dictionary of Names</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="https://wordofgod.in/bibledictionary/ஸ்ட்ராங்க்ஸ்-எபிரேய-அகராதி/">
                        <h3 class="collection-card__ta">ஸ்ட்ராங்க்ஸ் எபிரேய அகராதி</h3>
                        <p class="collection-card__en">Strong’s Hebrew Dictionary</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="https://wordofgod.in/bibledictionary/ஸ்ட்ராங்க்ஸ்-கிரேக்க-அகராதி/">
                        <h3 class="collection-card__ta">ஸ்ட்ராங்க்ஸ் கிரேக்க அகராதி</h3>
                        <p class="collection-card__en">Strong’s Greek Dictionary</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="site-shell">
                <header class="section__header">
                    <p class="section__kicker">Commentary &amp; Study</p>
                    <h2 class="section__title">
                        விரிவுரை &amp; ஆய்வு
                        <span class="section__title-en">Commentaries &amp; study aids</span>
                    </h2>
                    <p class="section__lede">Expository notes, brief commentaries, and concordance helps for deeper reading.</p>
                </header>
                <div class="collection-grid">
                    <a class="collection-card" href="வேதாகமம்-விரிவுரை/">
                        <h3 class="collection-card__ta">வேதாகமம் விரிவுரை</h3>
                        <p class="collection-card__en">Tamil Bible Commentary</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="சங்கீதம்-வியாக்கியானத்-தொகுப்பு/">
                        <h3 class="collection-card__ta">சங்கீதம் வியாக்கியானத் தொகுப்பு</h3>
                        <p class="collection-card__en">Psalms Expository Commentary</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="வேதாகமம்-தொகுப்புரை/">
                        <h3 class="collection-card__ta">வேதாகமம் தொகுப்புரை</h3>
                        <p class="collection-card__en">Tamil Bible Editorial Collection</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="வேதாகமம்-சுருக்கவுரை/">
                        <h3 class="collection-card__ta">வேதாகமம் சுருக்கவுரை</h3>
                        <p class="collection-card__en">Tamil Bible Brief Commentary</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="ஒத்தவாக்கிய-விளக்கவுரை/">
                        <h3 class="collection-card__ta">ஒத்தவாக்கிய விளக்கவுரை</h3>
                        <p class="collection-card__en">Tamil Bible Concordance</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="site-shell">
                <header class="section__header">
                    <p class="section__kicker">Life of Jesus</p>
                    <h2 class="section__title">
                        இயேசு கிறிஸ்துவின் வாழ்க்கை
                        <span class="section__title-en">Gospels &amp; the life of Christ</span>
                    </h2>
                    <p class="section__lede">History, ministry, teachings, parables, passion, and prayers — gathered for study.</p>
                </header>
                <div class="collection-grid">
                    <a class="collection-card" href="சமநோக்கு-சுவிசேஷங்கள்/">
                        <h3 class="collection-card__ta">சமநோக்கு சுவிசேஷங்கள்</h3>
                        <p class="collection-card__en">Synoptic Gospels</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="சுவிசேஷ-பிரபந்தப்-பொருத்தம்/">
                        <h3 class="collection-card__ta">சுவிசேஷ பிரபந்தப் பொருத்தம்</h3>
                        <p class="collection-card__en">Harmony of the Gospels</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="இயேசு-கிறிஸ்துவின்-சரித்திரம்/">
                        <h3 class="collection-card__ta">இயேசு கிறிஸ்துவின் சரித்திரம்</h3>
                        <p class="collection-card__en">History of Jesus Christ</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="இயேசு-கிறிஸ்துவின்-ஊழியம்/">
                        <h3 class="collection-card__ta">இயேசு கிறிஸ்துவின் ஊழியம்</h3>
                        <p class="collection-card__en">Ministry of Jesus Christ</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="இயேசு-கிறிஸ்துவின்-உபதேசங்கள்/">
                        <h3 class="collection-card__ta">இயேசு கிறிஸ்துவின் உபதேசங்கள்</h3>
                        <p class="collection-card__en">Teachings of Jesus Christ</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="இயேசு-கிறிஸ்துவின்-உவமைகள்/">
                        <h3 class="collection-card__ta">இயேசு கிறிஸ்துவின் உவமைகள்</h3>
                        <p class="collection-card__en">Parables of Jesus Christ</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="இயேசு-கிறிஸ்துவின்-கட்டளைகள்/">
                        <h3 class="collection-card__ta">இயேசு கிறிஸ்துவின் கட்டளைகள்</h3>
                        <p class="collection-card__en">Commands of Jesus Christ</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="இயேசு-கிறிஸ்துவின்-பதில்கள்/">
                        <h3 class="collection-card__ta">இயேசு கிறிஸ்துவின் பதில்கள்</h3>
                        <p class="collection-card__en">Answers of Jesus Christ</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="இயேசு-கிறிஸ்துவின்-பாடுகள்/">
                        <h3 class="collection-card__ta">இயேசு கிறிஸ்துவின் பாடுகள்</h3>
                        <p class="collection-card__en">Passion of Jesus Christ</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="இயேசு-கிறிஸ்துவின்-ஜெபங்கள்/">
                        <h3 class="collection-card__ta">இயேசு கிறிஸ்துவின் ஜெபங்கள்</h3>
                        <p class="collection-card__en">Prayers of Jesus Christ</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="இயேசு-கிறிஸ்துவும்-யூதரும்/">
                        <h3 class="collection-card__ta">இயேசு கிறிஸ்துவும் யூதரும்</h3>
                        <p class="collection-card__en">Jesus Christ and the Jews</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="கிறிஸ்துவின்-பிரசங்கங்கள்-உரையாடல்கள்/">
                        <h3 class="collection-card__ta">கிறிஸ்துவின் பிரசங்கங்கள் உரையாடல்கள்</h3>
                        <p class="collection-card__en">Sermons &amp; Discourse of Christ</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="site-shell">
                <header class="section__header">
                    <p class="section__kicker">Paul</p>
                    <h2 class="section__title">
                        பவுலின் ஊழியம்
                        <span class="section__title-en">Paul’s journeys &amp; letters</span>
                    </h2>
                    <p class="section__lede">Missionary journeys and the Pauline epistles in Tamil study form.</p>
                </header>
                <div class="collection-grid">
                    <a class="collection-card" href="பவுலின்-மிஷினரி-பயணங்கள்/">
                        <h3 class="collection-card__ta">பவுலின் மிஷினரி பயணங்கள்</h3>
                        <p class="collection-card__en">Paul’s Missionary Journeys</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                    <a class="collection-card" href="பவுலின்-பிரயாண-நிருபங்கள்/">
                        <h3 class="collection-card__ta">பவுலின் பிரயாண நிருபங்கள்</h3>
                        <p class="collection-card__en">Pauline Epistles</p>
                        <span class="collection-card__go">Open</span>
                    </a>
                </div>
            </div>
        </section>

        <aside class="download-banner">
            <div>
                <h2>Need the PDFs?</h2>
                <p>Download the full Good News Bible Study Collection as PDFs for offline reading.</p>
            </div>
            <a class="btn btn--primary" href="download.php?d=false">Open PDF library</a>
        </aside>

        <section class="about" id="about">
            <div class="about__grid">
                <div>
                    <h2>About these collections</h2>
                    <p>
                        These exhaustive Tamil Christian collections were created by honorable Arulappan and originally printed at their press in Srivilliputtur, Tamil Nadu. The next generation prepared PDF and Android editions and released them as public domain, freely given as per Matthew 10:8.
                    </p>
                    <p>
                        <strong>Word of God Team</strong> recovered these works when they were nearly unavailable online and rebuilt them as a free website for the Tamil Christian world. Glory to God alone.
                    </p>
                </div>
                <div class="about__meta">
                    <div class="meta-block">
                        <strong>Published by</strong>
                        <span>Tamil Good News Publishers and Bell Wether International, நற்செய்திப் பதிப்பகம்</span>
                    </div>
                    <div class="meta-block">
                        <strong>Hosted by</strong>
                        <span>Word of God Team, <a target="_blank" rel="noopener" href="https://www.WordOfGod.in">www.WordOfGod.in</a></span>
                    </div>
                    <div class="meta-block">
                        <strong>Copyright</strong>
                        <span>Public Domain, as per Matthew 10:8 — “Freely you have received, freely give.”</span>
                    </div>
                    <div class="meta-block">
                        <strong>Contact</strong>
                        <span>Email: <a href="mailto:wordofgod@wordofgod.in">wordofgod@wordofgod.in</a><br>WhatsApp: <a href="https://wa.me/917676505599">+91 7676 50 5599</a></span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="site-footer__inner">
            <p>No copyright. Freely copy and distribute (Matthew 10:8). <a target="_blank" rel="noopener" href="https://www.wordofgod.in/">www.WordOfGod.in</a></p>
            <p class="visitors">Visitors: <?= htmlspecialchars((string) $visitors2) ?></p>
        </div>
        <p class="footer-links">
            <a href="https://wordofgod.in/bibledictionary/" target="_blank" rel="noopener">Bible Dictionaries</a>
            <a href="https://wordofgod.in/bible-concordance/" target="_blank" rel="noopener">Bible Concordance</a>
            <a href="https://wordofgod.in/bibles/" target="_blank" rel="noopener">Online Bibles</a>
            <a href="/good-news-collections/">Good News Collections</a>
            <a href="https://wordofgod.in/bible-wallpapers/" target="_blank" rel="noopener">Bible Wallpapers</a>
            <a href="https://wordofgod.in/bible-devotions/" target="_blank" rel="noopener">Bible Devotions</a>
            <a href="https://wordofgod.in/bible-app-modules/" target="_blank" rel="noopener">Bible App Modules</a>
            <a href="https://wordofgod.in/wog/word-of-god-வெளியீடுகள்-download-all-our-published-materials-free-of-cost/" target="_blank" rel="noopener">All Our Resources</a>
            <a href="https://wordofgod.in/" target="_blank" rel="noopener">Free Christian Resources</a>
            <a href="https://www.wordofgodteam.com/" target="_blank" rel="noopener">About Us</a>
        </p>
    </footer>

    <script src="js/script.js?v=8"></script>
</body>
</html>
