<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Sequence</title>
</head>
<body>
    <h2>Generate Fibonacci Sequence</h2>
    <form method="post">
        <label for="n">Enter number of terms:</label>
        <input type="number" name="n">
        <button type="submit">Generate</button>
    </form>

    <?php
    if (isset($_POST['n'])) {
        $n = $_POST['n'];
        $a = 0;
        $b = 1;

        echo "Fibonacci sequence up to $n terms:<br>";

        for ($i = 0; $i < $n; $i++) {
            echo $a . " ";
            $next = $a + $b;
            $a = $b;
            $b = $next;
        }
    }
    ?>
</body>
</html>
