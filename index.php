<?php
    require_once __DIR__.'/Models/System.php';
    require_once __DIR__.'/Models/Email.php';
    require_once __DIR__.'/Models/Sms.php';
    require_once __DIR__.'/Models/Notification.php';
    require_once __DIR__.'/Models/Allegato.php';
    require_once __DIR__.'/Models/db.php';
    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- link fortawsome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <!-- link bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>PHP OOP 3</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center fw-bold">EMAIL</h1>
                </div>
                <?php foreach($systems as $system):?>
                    <div class="card col-4">
                        <h4> Suono:
                            <?php echo System::$suono ?>
                        </h4>
                        <h3>Mittente:
                            <?php echo $system->getMittente() ?>
                        </h3>
                        <h3>Destinatario:
                            <?php echo $system->getDestinatario() ?>
                        </h3>
                        <div>
                            Allegato:
                            <?php if(!is_null($system->getAllegato())){ ?>
                                <i class="fa-solid fa-paperclip" style="color: #000000;"></i><span><?php echo $system->getAllegato()->getNome() ?></span>
                                <span><?php echo $system->getAllegato()->getDimensione() ?></span>
                            <?php } ?>
                        </div>
                        
                        <h4>
                            <?php echo $system->getNotificaInvio()?>
                        </h4>
                        <h4>Oggetto:
                            <?php echo $system->getOggetto()?>
                        </h4>
                        <h4>Contenuto
                            <?php echo $system->getContenuto()?>
                        </h4>
                        <h4>
                            <?php echo $system->getInoltro()?>
                        </h4>
                        <h4>
                            <?php echo $system->getStampa()?>
                        </h4>
                        <h4>Colore:
                            <?php echo Email::$colore ?>
                        </h4>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>