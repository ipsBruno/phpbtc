<?php

          include 'operacoes.php';

          $wallet = "ipsBruno"; // label to address
                    
          $addressbtc = PegarEndereço("Bitcoin", $wallet);
          $addressltc = PegarEndereço("Litecoin", $wallet);
          
          echo "BTC Address: {$addressbtc}<br/>LTC Address: {$addressltc}";
          
          $valuebtc = ValorDisponivel("Bitcoin", $wallet); 
          $valueltc = ValorDisponivel("Litecoin", $wallet); 
          
          EnviarQuantia("Bitcoin", $wallet, "addresstosend", $valor)

?>
