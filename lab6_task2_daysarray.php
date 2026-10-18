<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title> Using PHP Variables, arrays and operators </title>
    <!-- add other meta -->
</head>
<body>
    <h1> PHP Variables, Arrays and Operators </h1>
<?php
    $days = array ("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    $frdays = array ("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"); //declare & initialize array
    echo "<p> The days of the week in English are: 
    <br> $days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6]. </p>";
    echo "<p> The days of the week in French are: 
    <br> $frdays[0], $frdays[1], $frdays[2], $frdays[3], $frdays[4], $frdays[5], $frdays[6]. </p>";
?>

</body>
</html>
