<?php
/* Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 */

if (empty($_GET)) {
    echo 'Inserisci i valori';
} else {
    $name = $_GET['user_name'];
    $mail = $_GET['user_mail'];
    $age = $_GET['user_age'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        <div>
            <label for="user_name">Name</label>
            <input type="text" id="user_name" name="user_name">
        </div>

        <div>
            <label for="user_mail">Mail</label>
            <input type="text" id="user_mail" name="user_mail">
        </div>

        <div>
            <label for="user_age">Age</label>
            <input type="number" id="user_age" name="user_age">
        </div>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

    <div>
        <?php if (strlen($name) > 3 && str_contains($mail, '.') && str_contains($mail, '.')) : ?>
            <p><?php echo $name ?></p>
            <p><?php echo $mail ?></p>
            <p><?php echo $age ?></p>
        <?php else : ?>
            <p>Valori errati!</p>
        <?php endif; ?>
    </div>
</body>

</html>