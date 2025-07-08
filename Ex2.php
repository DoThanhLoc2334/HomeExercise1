<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Converter Celsius to Fahrenheit</h2>
    <form action="" method="post">
        <label for="celsius">Enter temperature</label>
        <input type="number" name="celsius">
        <button type="submit">Converter</button>
    </form>

    <?php
    if(isset($_POST['celsius']))
    {
        $celsius = $_POST['celsius'];
        $fahrenheit = ($celsius * 9 / 5) + 32;
        echo "$celsius °C = $fahrenheit °F";    
    }
    ?>
</body>
</html>