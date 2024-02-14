<?php
/*********************************************
* plik podglad.php
*********************************************/

$file = file("baza.txt"); // wczytanie zawartości pliku do tablicy

foreach($file as $value) // przechodzimy przez tablicę za pomocą pętli foreach
{
	$exp = explode("`",$value);// rozbijamy poszczególne linie na części
	echo $exp[0]."<br />".$exp[1]."<hr />";// wyświetlamy rozbity tekst
}
echo "<a href=\"index.php\">Dodaj kolejne dane </a>
<br>
<a href=\"del.php\"> Usuń plik</a>"; 
echo "<a href=\"index.php\">Dodaj dane</a><br><br>"; 
echo "Plik został usunięty";
?>