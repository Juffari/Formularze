<?php    
    if(empty($_POST['pole1']) and empty($_POST['pole2'])) 
{
    // prosty formularz zawierający dwa pola 

    echo '<form action="" method="post"> <input type="text" name="pole1" style="width: 200px;" />
    <input type="submit" value="Wyślij" /> </form>';

} 
else 
{ 
    $pole1 = trim($_POST['pole1']); 

    $dane = $pole1."`".PHP_EOL; // dane pochodzące z formularza 

    $file = "baza.txt"; // przypisanie zmiennej $file nazwy pliku 

    $fp = fopen($file, "a");// uchwyt pliku, otwarcie do dopisania 

    flock($fp, 2); // blokada pliku do zapisu

    fwrite($fp, $dane); // zapisanie danych do pliku

    flock($fp, 3); // odblokowanie pliku 

    fclose($fp); // zamknięcie pliku

    echo "Dane zostały zapisane!<br />"; 
    echo "<a href=\"podglad.php\">Zobacz wpisane dane</a><br/>"; 
    echo "<a href=\"index.php\">Dodaj dane</a><br><br>"; 
echo "Plik został usunięty";

}

?>
</body>
</html>