<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de casos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h3>Listado de casos a desarrollar  en PHP</h3>
    </header>
    <section>
        <?php
            for ($i=1; $i <= 10 ; $i++) { 
        ?>
        <p>Caso <?php echo $i; ?></p>
        <?php
            }

        /* $variable = ñiteral
        entero º0 100 230 -123
        reales 20.50 0.0052 - 23.635
        booleanos true false 
        caracter 'a' "c"
        cadena de caracteres 'jefe' "administracion"
        */

        /*
        operadores 
        +Suma   $a = $b + $c
        -resta  $a = $b - $c
        *Multiplicacion $a = $b * $c
        /Divicion  entera $a = $b / $c
        % Resto de la divicion $a = $b % $C 
        */

        /*
        operadores de caracteres:
        . punto (sirve par a unir o contatenar cadena de caracteres)
        */
        ?>

    </section>
    <footer>
        <h6>Todo los derechos reservados - Men Lee Hector</h6>
    </footer>
</body>
</html>