<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title># Snack 2</title>
</head>
<body>
    <?php
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];       
    ?>

    <p>
        <?php
            if (strlen($name) >= 3 && $mailCont = strpos($mail, '@') !== false && $mailCont = strpos($mail, '.') !== false && is_numeric($age)) {
                echo 'Accesso riuscito!' . '<br>' . $name . '<br>' . $mail;
            } else {
                echo 'Accesso negato!';
            }
        ?>
    </p>
</body>
</html>

