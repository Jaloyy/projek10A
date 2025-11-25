<!DOCTYPE html>
<html>
    <head>
        <title>Test Penyisipan PHP Pada HTML</title>
    </head>
    <body>
    Kapal Asing, Silakan identifikasikan diri Anda! <br>
    <?php
    $namad = "Bejo";
    $namat = "Noto";
    $namab = "Negoro";
    ?>
    <b>Ini adalah Kapal Federasi Planet USS Enterprise.<br>
    <?php
        print("Saya $namad,$namat,$namab,kapten kapal.</b>");
        print $namad.$namat.$namab;
    echo "<br>";
    echo "saya", $namad,$namat,$namab;
    ?>
    <h2>NIM : A12.2024.07173</h2>
    <h2>NAMA : Jalu Adi Saputra</h2>
    </body>
</html
