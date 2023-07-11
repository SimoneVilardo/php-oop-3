<?php

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

    $message = new Sms('Simone Vilardo', 'Gianni Fico', 'Invito', 'Sei invitato alla mia festa di compleanno', 'Letto', 'Risposta', true);
    $message1 = new Sms('Simone Vilardo', 'Michelle Malizia', 'Serata', 'Usciamo stasera per andare al Quetzal', 'Non Letto', 'Risposta', false);

    
    $messages = [
        $message,
        $message1
    ]
        
?>