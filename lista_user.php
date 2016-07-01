<?php

$result = mysql_query ("SELECT nome, email, telefone, endereco FROM usuarios", $conn);
while (list ($nome, $email, $telefone, $endereco) = mysql_fetch_row ($result)) {
     echo " <tr>\n" .
           "  <td><a href=\"cadastro.php?email=$email\">$nome</a></td>\n" .
           "  <td>$telefone</td>\n" .
           "  <td>$endereco</td>\n" .
            " </tr>\n";
}

?>