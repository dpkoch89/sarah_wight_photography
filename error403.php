<?php
header("HTTP/1.0 403 Forbidden");
?>

<?php
$title = '403 Forbidden';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<div class="sixteen columns">

<h2>Forbidden</h2>
<p>We're sorry, you do not have permission for this request (Error 403). Please use your browser's back button to return to the previous page, or click to go to our <a href="/">home page</a>.</p>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
