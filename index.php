<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <h1>My Blog</h1>
    </div>
    <div class="container">
        <h2>Blog Posts</h2>
        <?php
        if (file_exists('posts.txt')) {
            $posts = file('posts.txt', FILE_IGNORE_NEW_LINES);
            foreach ($posts as $post) {
                list($title, $content) = explode('|', $post);
                echo '<div class="post">';
                echo '<h3 class="post-title">' . htmlspecialchars($title) . '</h3>';
                echo '<p class="post-content">' . nl2br(htmlspecialchars($content)) . '</p>';
                echo '</div>';
            }
        } else {
            echo '<p>No posts available.</p>';
        }
        ?>
    </div>
    <div class="container">
        <h2>Create a New Post</h2>
        <form class="form-container" action="create_post.php" method="post">
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="content" placeholder="Content" rows="5" required></textarea>
            <button type="submit">Create Post</button>
        </form>
    </div>
</body>
</html>
