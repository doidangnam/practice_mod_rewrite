<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Display content of my-article -->
    <?php if (isset($_GET['articleId']) && $_GET['articleId'] = 'my-article') { ?>
        <p>This is my-article</p>
    <?php } ?> 
    
</body>
</html>