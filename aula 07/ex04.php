<?php
    $valorProduto = 20;
    $valorTotal = 10 + (10 * 0.16);
    $valorParcela = $valorTotal / 10;

    echo "<div style='text-align:center;'>", "O valor do produto é: ", "<b>",$valorProduto,"</b>", "<br>", "O valor da parcela é: ", "<b>",$valorParcela,"</b>", "<br>", "O valor total é: ", "<b>",$valorTotal,"</b>", "<br>","</div>";
     
?>