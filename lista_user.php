<?php

$result = mysql_query ("SELECT nome, email, telefone, endereco FROM usuarios", $conn);
while (list ($nome, $email, $telefone, $endereco) = mysql_fetch_row ($result)) {
     echo " <tr>\n" .
           "  <td><a href=\"info.php?id=$id\">$nome</a></td>\n" .
           "  <td>$salario</td>\n" .
            " </tr>\n";
}

?>