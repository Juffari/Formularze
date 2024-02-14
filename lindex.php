<?php 
//***ĆWICZENIA***
//zrobić pliki logów
//if (file_exists("dokument.txt")) echo "plik istnieje";
// $plik=fopen("dokument.txt", "a+")or die("Nie udało się otworzyć pliku");
// $zawartosc = "Przykładowa treść, którą umieścimy w pliku.";
// $zawartosc .= "Utniemy wiadomość po 30 znakach.";
// fwrite($plik, $zawartosc, 30) or die("Nie udało się zapisać danych w");
//$zawartosc = fread($plik, 8192);
//echo $zawartosc; 
// while(!feof($plik))
// {
//     $linia = fgetc($plik);
//     $zawartosc .= $linia;
// }
// echo $zawartosc;
// $uchwyt = fopen("dokument.txt", "w");
// unlink("dokument.txt");
?>

<?php 

/********************************************* 
* plik zapisujący dane z formularza
*********************************************/


if(empty($_POST['pole1']) and empty($_POST['pole2'])) 
{
    // prosty formularz zawierający dwa pola 

    echo '<form action="" method="post"> <input type="text" name="pole1" style="width: 200px;" />
    <br /> <textarea name="pole2" style="width: 200px; height: 100px;"> </textarea><br /> 
    <input type="submit" value="Zapisz" /> </form>'; 

} 
else 
{ 
    $pole1 = trim($_POST['pole1']); 
    $pole2 = trim($_POST['pole2']);

    $dane = $pole1."`".$pole2."\n"; // dane pochodzące z formularza 

    $file = "baza.txt"; // przypisanie zmiennej $file nazwy pliku 

    $fp = fopen($file, "a");// uchwyt pliku, otwarcie do dopisania 

    flock($fp, 2); // blokada pliku do zapisu

    fwrite($fp, $dane); // zapisanie danych do pliku

    flock($fp, 3); // odblokowanie pliku 

    fclose($fp); // zamknięcie pliku

    echo "Dane zostały zapisane!<br />"; 
    echo "<a href=\"podglad.php\">Zobacz wpisane dane</a>"; 

}

?>