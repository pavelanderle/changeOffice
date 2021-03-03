<?php
  function ratesFromCNB ($fileCurrencyCNB,$fileCurrencyMy){
    $validCurrencyCNB=["EUR","USD","GBP","CHF","HRK","CAD","AUD","SEK","NOK"];
    $fo = fopen($fileCurrencyCNB,"r");
    $foCurrency = fopen($fileCurrencyMy,"w");
    $date = fgetCSV($fo,4096,"|");
    fwrite($foCurrency,"<?php".PHP_EOL);
    while ($row = fgetCSV($fo,4096,"|")) {
      if (in_array($row[3],$validCurrencyCNB)) {
        $purchase='$currencies["'.$row[3].'"]["purchase"]='.str_replace(",",".",$row[4])/1.01.';';
        $sale='$currencies["'.$row[3].'"]["sold"]='.str_replace(",",".",$row[4])*1.01.';';
        fwrite($foCurrency,$purchase.PHP_EOL);
        fwrite($foCurrency,$sale.PHP_EOL);
      }
    }
    fwrite($foCurrency,"?>".PHP_EOL);
  }

 ?>
