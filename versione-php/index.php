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
        <header>
            <div class="container">
                <img src=".../versione-ajax/logo.png" alt="logo" />
                <select name="ricerca" id="ricerca">
                    <option value="tutti">Tutti</option>
                    <option value="rock">Rock</option>
                    <option value="pop">Pop</option>
                    <option value="jazz">Jazz</option>
                    <option value="metal">Metal</option>
                </select>
            </div>
        </header>
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
