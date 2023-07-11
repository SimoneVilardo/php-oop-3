<?php

    // $email = new Email('simone@gmail.com', 'loris@gmail.com', 'Incontro per cena', 'Ciao Loris, stiamo organizzando una cena', null, null, null, null, null);
    // $email->addAllegato('C:/Documents/foto.png');
    // $email->addAllegato('C:/Documents/ricevuta.png');
    // $email->addAllegato('C:/Documents/video-del-matrimonio.mp4');
    $email = new Email('Simone Vilardo', 'Marco Troisi', 'Riforme','Ciao .....', true);
    $allegato= new Allegato('pdf', '52mb');
    $email->setAllegato($allegato);
    
    $email2 = new Email('Simone Vilardo', 'Giovanni Vilardo', 'Cena','Ciao sono',false);
   
    $email3 = new Email('Simone Vilardo', 'Alberto Arrigoni', 'Progetto','Ciao mi chiamo e ti parlo', true);

    $email4 = new Email('Simone Vilardo', 'Davide Accornero', 'Bussiness','Inizia a fare Trading con noi',false);
    $allegato= new Allegato('jpg', '3mb');
    $email4->setAllegato($allegato);

    $email5 = new Email('Simone Vilardo', 'Roberto Benfini', 'Compra un pc Nuovo','Controlla le caratteristiche...',false);
    $allegato= new Allegato('jpg', '1mb');
    $email5->setAllegato($allegato);

    $email6 = new Email('Simone Vilardo', 'Antonello Stefania', 'Partita di calcetto','Trova almeno 8 persone per poter organizzare',false);

    
    $systems = [
        $email,
        $email2,
        $email3,
        $email4,
        $email5,
        $email6
    ];
    
        
?>