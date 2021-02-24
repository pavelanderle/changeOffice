<h1>Směnárna 1.O</h1>
<form class="" action="index.php" method="get">
  <p>
    <label for="many">Zadej částku:</label>
    <input type="text" name="money" >
  </p>
  <p>
    <label for="name">Zadej jméno zákazníka:</label>
    <input type="text" name="name">
  </p>
  <p>
    <label for="Currency">Vyber měnu:</label>
    <select class="" name="currency">
      <option value="EUR">Euro</option>
      <option value="USD">US dolar</option>
      <option value="GBP">Libra</option>
      <option value="CHF">Švýcarský frank</option>
    </select>
  </p>
  
  <p>
    <label for="typeChange">Nákup od zákazníka</label>
    <input type="radio" name="typeChange" value="purchase">
    <label for="typeChange">Prodej zákazníkovi</label>
    <input type="radio" name="typeChange" value="sale">
  </p>
  
  <p>
    <label for="charge">Směnárenský poplatek 1%</label>
    <input type="checkbox" name="charge" checked value="charge">
  </p>
  <p>
    <input type="submit" name="submit" value="Převeď">
  </p>
  
</form>
