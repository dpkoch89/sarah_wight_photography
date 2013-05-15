<?php
header("HTTP/1.0 400 Bad Request");
?>

<?php
$title = '400 Bad Request';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<div class="sixteen columns">

<h2>Bad Request</h2>
<p>We're sorry, the request could not be understood by the server due to malformed syntax (Error 400). Please use your browser's back button to return to the previous page, or click to go to our <a href="/">home page</a>.</p>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
