<?php
    require_once __DIR__.'/Models/System.php';
    require_once __DIR__.'/Models/Email.php';
    require_once __DIR__.'/Models/Sms.php';
    require_once __DIR__.'/Models/Notification.php';
    require_once __DIR__.'/Models/db.php';
    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- link bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>PHP OOP 3</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php foreach($systems as $system):?>
                    <div class="col-12">
                        <?php echo $system->getMittente() ?>
                    </div>
                    <div class="col-12">
                        <?php echo $system->suono ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>