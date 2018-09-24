<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
</head>
<body>
    <h2><?= $title ?></h2>
    <ul>
        <?php
            foreach ($results as $result){
                echo "<li>$result->user_name</li>";
            }
        ?>
    </ul>
</body>
</html>