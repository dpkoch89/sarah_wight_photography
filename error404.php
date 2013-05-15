<?php
header("HTTP/1.0 404 Not Found");
?>

<?php
$title = '404 Not Found';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<div class="sixteen columns">

<h2>Page Not Found</h2>
<p>We're sorry, the page you requested could not be found (Error 404).  This could be caused by a bad or missing link, or by a misspelled url. Please use your browser's back button to return to the previous page, or click to go to our <a href="/">home page</a>.</p>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>