<!DOKTYPE>
<html lang="pl">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv=X-UA-Compatibile content="IE-edge, chrome=1"/>
        
        <script defer src="scripts.js"></script>
        
        <title>Praktyki</title>   
        
    </head>
    <body>
<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    $dataIsValid = true;

    if($firstName == '' || $firstName == null){
        echo "Imie jest niepoprawne ";
        $dataIsValid = false;
    }
    if($lastName == '' || $lastName == null){
        echo "Nazwisko jest niepoprawne ";
        $dataIsValid = false;
    }
    if(!preg_match($pattern, $email)){
        echo "E-mail jest niepoprawny ";
        $dataIsValid = false;
    }
    if($message == '' || $message == null){
        echo "Treść wiadomości jest niepoprawna ";
        $dataIsValid = false;
    }

    if($dataIsValid == true){
        echo "<table border='1'>";
            echo "<tr>";
                echo "<td>Imię</td>";
                echo "<td>$firstName</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Nazwisko</td>";
                echo "<td>$lastName</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>E-mail</td>";
                echo "<td>$email</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Treść wiadomości</td>";
                echo "<td>$message</td>";
            echo "</tr>";
        echo "</table>";    
    }    

?>
    </body>
</html>