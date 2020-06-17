<?php
 include 'dischi.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>dischi</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="cds-container container">
            <?php  foreach ($dischi as $disco) { ?>
            <div class="cd">
                <img src=" <?php echo $disco['poster']  ?>" alt="">
                <h3> <?php echo $disco['title']  ?> </h3>
                <span class="author"> <?php echo  $disco['author']  ?> </span>
                <span class="year"> <?php echo $disco['year']  ?> </span>
                <span class="genre"> <?php echo $disco['genre']  ?> </span>
            </div>
            <?php } ?>
        </div>
    </body>
</html>
