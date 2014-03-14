<?php


          $wallet = "ipsBruno"; // label to address
          
          $addressbtc = PegarEndereço("Bitcoin", $wallet);
          $addressltc = PegarEndereço("Litecoin", $wallet);
          
          
          $valuebtc = ValorDisponivel("Bitcoin", $wallet); 
          $valueltc = ValorDisponivel("Litecoin", $wallet); 
          
          EnviarQuantia("Bitcoin", $wallet, "addresstosend", $valor)

?>
