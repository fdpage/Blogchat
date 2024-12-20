<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);

    // Save post data to a text file
    $file = fopen('posts.txt', 'a');
    fwrite($file, "$title|$content\n");
    fclose($file);

    header('Location: index.php');
    exit();
}
?>
