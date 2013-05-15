<?php
header("HTTP/1.0 401 Unauthorized");
?>

<?php
$title = '401 Unauthorized';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<div class="sixteen columns">

<h2>Unauthorized</h2>
<p>We're sorry, the request you made requires user authentication (Error 401). Please use your browser's back button to return to the previous page, or click to go to our <a href="/">home page</a>.</p>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
