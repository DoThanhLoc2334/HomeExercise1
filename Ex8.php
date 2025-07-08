<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Area</title>
</head>
<body>
    <h2>Calculate Area of a Circle</h2>
    <form method="post">
        <label for="radius">Enter radius:</label>
        <input type="number" name="radius">
        <button type="submit">Calculate</button>
    </form>

    <?php
    if (isset($_POST['radius'])) 
    {
        $r = $_POST['radius'];
        $area = pi() * $r * $r;
        echo "Area of the circle: $area";
    }
    ?>
</body>
</html>
