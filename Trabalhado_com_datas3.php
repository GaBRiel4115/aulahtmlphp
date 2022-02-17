<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com Datas Futuras</title>
</head>
<body>
    <?php
        print "Data atual: " . date("d/m/Y");
        print "<br/>";

        $data_futura1 = strtotime("10 days");
        print "<br/>";
        print "Data atual + 10 dias é igual a " . date("d/m/y", $data_futura1);

        $data_futura2 = strtotime("10 months");
        print "<br/>";
        print "Data atual + 10 meses é igual a " . date("d/m/y", $data_futura2);

        $data_futura3 = strtotime("10 years");
        print "<br/>";
        print "Data atual + 10 anos é igual a " . date("d/m/y", $data_futura3);

        $data_futura4 = strtotime("10 weeks");
        print "<br/>";
        print "Data atual + 10 semanas é igual a " . date("d/m/Y", $data_futura4);

        $data_futura4 = strtotime("-10 weeks");
        print "<br/>";
        print "Data atual - 10 semanas atrás é igual a " . date("d/m/Y", $data_futura4);
    ?>  
</body>
</html>