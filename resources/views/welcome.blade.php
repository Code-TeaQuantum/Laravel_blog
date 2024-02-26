<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY Blog</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <div class="container">
        <h1>Hello, World!</h1>
    </div>
    <div class="artical">
        <?php
        foreach ($posts as $post) :
        ?>
            <article>
                <?php echo $post ?>
            </article>
        <?php
        endforeach
        ?>
    </div>
</body>

</html>