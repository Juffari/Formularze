<?php
if ($_SERVER["REQUEST_METHOD"] =="POST")
{
    if (isset($_POST["username"]))
    {
        $username = $_POST["username"];
        echo "Nazwa użytkownika: ".$username . "<br>";
    }
}
?>