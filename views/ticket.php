<h1>SMĚNÁRENSKÝ LÍSTEK</h1>
<p>Jméno zákazníka <?php echo htmlspecialchars($_GET["name"])?></p>
<p>Částka: <?php echo htmlspecialchars($_GET["money"]) ?></p>
<p>Zvolená valuta:<?php echo htmlspecialchars($_GET["currency"])?></p>
<p>Druh převodu:<?php echo htmlspecialchars($_GET["typeChange"]=="sale"?"Prodej":"Nákup")?></p>
<p>Směnárenský poplatek:<?php echo htmlspecialchars($_GET["charge"]=="charge"?"Ano":"Ne")?></p>
<p>Směnárenský poplatek - částka:<?php echo $chargeValue?> Kč</p>
<?php
    if ($_GET["typeChange"]=="purchase") {
        echo "Za vaše valuty jste získal celkem $changeValue Kč";
    }
    else {
        echo "Za tuto částku v korunách jste od nás získal celkem $changeValue ve vámi vybrané valutě";
    }
?>

