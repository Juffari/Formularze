<?php

// var_dump(isset($_GET['imie']));
// var_dump(empty($_GET['imie']));

if(isset($_GET['wyslij'])){
    if(!empty($_GET['imie'])){
        echo "<ol>";
        echo "Witaj {$_GET['imie']}";
        echo "</ol>";
    }
    if(!empty($_GET['wiadomosc'])){
        echo "<ol>";
        echo "Twoja wiadomość to: {$_GET['wiadomosc']}";
        echo "</ol>";
    }
}
    if(!empty($_GET['plec'])){
        echo "<ol>";
        echo "Wybrana przez Ciebie płeć to: ".$_GET['plec'];
        echo "</ol>";
}
    if(!empty($_GET['gry'])){
        echo "<ol>";
        foreach($_GET['gry'] as $g){
            echo "<li>Ulubione gry: $g</li>";
        }
}
        echo "</ol>";
    if(!empty($_GET['klasa'])){
        echo "<ol>";
        echo "Chodzisz do klasy: ".$_GET['klasa'];
        echo "</ol>";
    if(!empty($_GET['hobby'])){
        echo "<ol>";
        foreach($_GET['hobby'] as $h){
            echo "<li>Twoje hobby to: $h</li>";
            echo "</ol>";
}
}

}else{
    echo "Wyślij formularz";
}
// $imie = $_GET['imie'];
// echo $imie;


//tablice suerglobalne
//GET
//POST
?>

<form action="" method="GET">
    Imie: <input type="text" name="imie"><br>
    Wiadomość: <br> <textarea cols="30" rows="10" name="wiadomosc"></textarea><br>
    Płeć:
    <input type="radio" value="kobieta" name="plec">K 
    <input type="radio" value="mężczyzna" name="plec">M 
    <input type="radio" value="inne" name="plec">I
    <br>Ulubione gry:
    LOL <input type="checkbox" value="LOL" name="gry[]"> 
    CS <input type="checkbox" value="CS" name="gry[]">
    GTA <input type="checkbox" value="GTA" name="gry[]">
    Minecraft <input type="checkbox" value="Minecraft" name="gry[]">
    <br>Klasa: <br>
    <select name="klasa">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <br>Hobby: <br>
    <select multiple name="hobby[]">
        <option value="IT">IT</option>
        <option value="PHP">PHP</option>
        <option value="Sport">Sport</option>
        <option value="Gry komputerowe">Gry komputerowe</option>
    </select>
    <br><input type="submit" value="Wyślij" name="wyslij">
</form>