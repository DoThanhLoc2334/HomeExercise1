<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Perimeter</title>
</head>
<body>
    <h2>Calculate the Perimeter of a Triangle</h2>
    <form method="post">
        <label for="a">Side a:</label>
        <input type="number" name="a">
        <label for="b">Side b:</label>
        <input type="number" name="b">
        <label for="c">Side c:</label>
        <input type="number" name="c" >
        <button type="submit">Calculate</button>
    </form>

    <?php
    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) 
    {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $perimeter = $a + $b + $c;
        echo "Perimeter: $perimeter";
    }
    ?>
</body>
</html>
