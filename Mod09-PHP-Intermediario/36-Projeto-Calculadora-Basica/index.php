<style>
    * {font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;}
    select,
    input {padding: 5px;}
    select { font-weight: bold;font-size: 20px;}
</style>

<a href="../">< Raiz Módulo 09</a>
<br><br>

<form action="calc.php" method="get">
    <input type="number" name="n1" />
    <select name="op">
        <option>-</option> <!-- value="-" -->
        <option>+</option> <!-- value="+" -->
        <option>*</option> <!-- value="*" -->
        <option>/</option> <!-- value="/" -->
    </select>
    <input type="number" name="n2" />
    <input type="submit" value="Calcular">
</form>