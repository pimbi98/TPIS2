<!-- Subir un repositorio git a Github con un programa sencillo en PHP (cada estudiante debe inventar una consigna sencilla, un programa que tenga entre 10 y 50 líneas de código aproximadamente).

Dicho repositorio debe tener al menos 3 commits

    Primer commit: La “consigna” (el objetivo) del programa escrita como comentario.
    Segundo commit: El programa sin concluir, “a mitad de camino”.
    Commits subsiguientes: Todos los commits intermedios que hagan falta.
    Último commit: El programa terminado. -->
<!-- //El programa obtiene a partir de un numero dado, la raiz cuadrada, siempre en caso de ser positivo
//en caso de ser negativo, otorgara un mensaje de error. -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Raìz cuadrada</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?php
        if ($_SERVER['REQUEST_METHOD']=='POST')
        {
            $numero = floatval ($_POST['numero']);
            if($numero>=0)
                $raiz_cuadrada=sqrt($numero);
            else
            {
                $raiz_cuadrada=sqrt(-$numero);
                echo 'ra&iacute;z imaginaria<br>';
            }
            echo 'Valor de raiz cuadrada: ' . $raiz_cuadrada . "<br/>\n";
        }

        if ($_SERVER['REQUEST_METHOD']=='POST')
           {
            $numero_entero = floatval ($_POST['numero_entero']);
            $raiz_cubica=pow($numero_entero,1.0/3.0);
            echo 'Valor de raiz cubica: ' . $raiz_cubica . "<br/>\n";
           }
        ?>
         <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="numero">Ingresa el valor de numero:</label>
                        </td>
                        <td>
                            <input name="numero" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Raiz cuadrada" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <br>
        <br>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="numero_entero">Ingresa el valor de numero entero:</label>
                        </td>
                        <td>
                            <input name="numero_entero" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Raiz cubica" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>



