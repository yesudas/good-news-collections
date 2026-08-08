<?php
// header.php
if (isset($_GET['v'])) {
    $version = $_GET['v'];
} else {
    $version = "2026.08";
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#317a53">
    <link rel="manifest" href="/good-news-collections/manifest.json?v=7">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Manrope:wght@400;600;700&family=Noto+Sans+Tamil:wght@400;600;700&family=Noto+Serif+Tamil:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo htmlspecialchars($version); ?>">
    <title>Good News Tamil Christian Collections | Word of God Team</title>
    <meta name="description" content="Good News Tamil Christian Collections, published by Good News, hosted by Word of God Team, www.WordOfGod.in">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8ZYHRZG9B8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-8ZYHRZG9B8');
    </script>
</head>
