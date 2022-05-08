<!-- 
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php
include_once __DIR__ . '/classes/user.php';
include_once __DIR__ . '/classes/registeredUser.php';
include_once __DIR__ . '/classes/product.php';
include_once __DIR__ . '/classes/order.php';
include_once __DIR__ . '/classes/creditCard.php';


$products_miki = [
    new Toy ('Giocattolo_1', 'Giocattolissimi', '25$'),
    new Toy ('Giocattolo_2', 'Giocattolissimissimi', '42$'),
];

$registeredUser_miki = new registeredUser('miki','cola','mikicola@mail.it','Via della Pigna 7 - 12378 Paesesperduto', 'passwordSuperSicura');

$creditCard_miki = new CreditCard ('miki','cola','1111 2222 3333 4444', '08', '2023');

var_dump($products_miki);
var_dump($registeredUser_miki);
var_dump($creditCard_miki);
