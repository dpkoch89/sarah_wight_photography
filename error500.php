<?php
header("HTTP/1.0 500 Internal Server Error");
?>

<?php
$title = '500 Internal Server Error';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<div class="sixteen columns">

<h2>Internal Server Error</h2>
<p>We're sorry, the server encountered an internal error that prevented it from fulfilling the request (Error 500). Please use your browser's back button to return to the previous page, or click to go to our <a href="/">home page</a>.</p>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
