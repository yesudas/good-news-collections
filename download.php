<?php
// download.php
if (isset($_GET['d'])) {
    $d = $_GET['d'];
} else {
    $d = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<body>
<?php include 'menu.php'; ?>

<main class="page-main">
    <header class="page-hero">
        <h1>Download as PDFs</h1>
        <p>Browse and download the Good News Bible Study Collection for offline reading.</p>
    </header>

    <div class="embed-frame">
        <iframe
            src="https://christianpdf.com/index.php?path=Tamil-Christian-Books/08-Bible-College-Notes-and-Books/01-Good-News-Bible-Study-Collection&embed=1"
            title="Good News Bible Study Collection PDFs"
            loading="lazy">
            Your browser doesn't support iframes
        </iframe>
    </div>
</main>

<?php include 'footer.php'; ?>
</body>
</html>
