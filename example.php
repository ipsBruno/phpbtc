<?php

          include 'operacoes.php';

          $wallet = "ipsBruno"; // label to address
                    
          $addressbtc = PegarEndereço("Bitcoin", $wallet);
          $addressltc = PegarEndereço("Litecoin", $wallet);
          
          echo "BTC Address: {$addressbtc}<br/>LTC Address: {$addressltc}";
          
          $valuebtc = ValorDisponivel("Bitcoin", $wallet); 
          $valueltc = ValorDisponivel("Litecoin", $wallet); 
          
          echo "BTC Ammount: {$valuebtc}<br/>LTC Ammount: {$valueltc}";
          
          $sendaddress = "13Cj69uTLTFwVYTP6HZ9PqXFkBKV84UsRY";
          $valor = "0.2"; // 0.2 BTC
          
          EnviarQuantia("Bitcoin", $wallet, $sendaddress, $valor)

          echo "You sent {$valor} BTC to Address: {$sendaddress}";

?>
