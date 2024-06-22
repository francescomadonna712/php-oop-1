<?php
class Film
{
    public $titolo;
    public $anno;
    public $genere;
    public $regista;
}


$Batman = new Film();
$Batman->titolo = "Il cavaliere oscuro";
$Batman->anno = 2008;
$Batman->genere = "Azione";
$Batman->regista = "Christopher Nolan";

$Joker = new Film();
$Joker->titolo = "Joker";
$Joker->anno = 2019;
$Joker->genere = "Drammatico";
$Joker->regista = "Todd Phillips";

$OldMan = new Film();
$OldMan->titolo = "Non è un paese per vecchi";
$OldMan->anno = 2007;
$OldMan->genere = "Thriller";
$OldMan->regista = "Joel & Ethan Coen";

$Films = [$Batman, $Joker, $OldMan];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php OOP</title>
</head>

<body>
    <h1>FIlM BELLISSIMI</h1>
    <ul>
        <?php
        foreach ($Films as $indice => $film) {
            echo "<li>$film->titolo $film->anno $film->genere $film->regista</li>";
        }
        ?>
    </ul>

</body>

</html>