<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>PHP Variables, Arrays and Operators</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>
<?php
    $daysEnglish = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

    $daysFrench = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
?>
    <p>
        The days of the week in English are:<br/>
        <?php echo implode(", ", $daysEnglish); ?>.
    </p>
    <p>
        The days of the week in French are:<br/>
        <?php echo implode(", ", $daysFrench); ?>.
    </p>
</body>
</html>