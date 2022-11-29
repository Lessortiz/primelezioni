<!DOCTYPE html>
<html>
<head>
    <title>Pasticceria Musa</title>
    <style>
        p{
            font-size: 11px;
            font-weight: bold;
            text-align: end;
            
        }

        h1 {
        text-align: center;
        background-color: cadetblue;
        }

        h2 {
            font-size: 11px;
            text-align: center;
        }

        table {
            width: 40%;
            text-align: center;
        
        }

        td {
            border: 1px solid black;
            text-align: center;
            background-color: cadetblue;
        }
    </style>
</head>   

<body>
    <header >
        <h1>PASTICCERIA MUSA1</h1>
    </header>

    <?php

    $nome= " LESLY ";
    $saluto= " BENVENUTA ALLA PASTICCERIA MUSA ";
    $dolce1 = "Torta 3 leches";
    $dolce2 = "Mazamorra";
    $dolce3 = "Flan";
    $prezzo1 = "4 euro";
    $prezzo2 = "3 euro";
    $prezzo3 = "3 euro";
    $ora = date('H:i');
    $data = date('d-m-Y');
    $salutofinale = "SIAMO FELICI DI RIVERDERTI OGGI ";


    function benvenuto($nome, $saluto){
        echo "<h2>CIAO ". $nome. '</br>'. $saluto. "!</h2>";
    }
    benvenuto($nome, $saluto);


    function elencoDolci($dolce1, $dolce2, $dolce3, $prezzo1, $prezzo2, $prezzo3) 
    {
            echo "<h3>Ecco i nostri dolci del giorno: </h3>
                <table>
                <tr>
                    <td> DOLCI PERUVIANI </td>
                    <td> PREZZI <div class= 'titolo'></div> </td>
                </tr>
                <tr>
                    <td>$dolce1</td>
                    <td>$prezzo1</td>
                </tr>
                <tr>
                    <td>$dolce2</td>
                    <td>$prezzo2</td>
                </tr>
                <tr>
                    <td>$dolce3</td>
                    <td>$prezzo3</td>
                </tr>
                </table><hr>";
                   
           }

    elencoDolci($dolce1, $dolce2, $dolce3, $prezzo1, $prezzo2, $prezzo3);

    function salutofinale1($nome,$salutofinale,$data,$ora){
    echo " <p> CIAO ". $nome . $salutofinale . $data . " ALLE " . $ora . "</p>";
    }
    salutofinale1($nome,$salutofinale,$data,$ora);
?>
</body>
</html>
