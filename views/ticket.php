<h1>SMĚNÁRENSKÝ LÍSTEK</h1>
<p>Jméno zákazníka <?php echo htmlspecialchars($_GET["name"])?></p>
<p>Částka: <?php echo htmlspecialchars($_GET["money"]) ?></p>
<p>Zvolená valuta:<?php echo htmlspecialchars($_GET["currency"])?></p>
<p>Druh převodu:<?php echo htmlspecialchars($_GET["typeChange"]=="sale"?"Prodej":"Nákup")?></p>
<p>Směnárenský poplatek:<?php echo htmlspecialchars($_GET["charge"]=="charge"?"Ano":"Ne")?></p>
<p>Směnárenský poplatek - částka:<?php echo htmlspecialchars($_GET["charge"]=="charge"?$chargeValue:0 )?> Kč</p>
<?php
    if ($_GET["typeChange"]=="purchase") {
        echo "Za vaše valuty jste získal celkem $changeValue Kč";
    }
    else {
        echo "Za požadované valuty jste zaplatil $changeValue Kč";
    }
?>

