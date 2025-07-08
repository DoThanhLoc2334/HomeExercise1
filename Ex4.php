<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Checker</title>
</head>
<body>
    <h2>Check if a Number is Prime</h2>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" min="0" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if (isset($_POST['number'])) {
        $n = $_POST['number'];
        $isPrime = true;

        if ($n <= 1) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) {
                    $isPrime = false;
                    
                }
            }
        }

        echo $isPrime ? "Prime" : "Not Prime";
    }
    ?>
</body>
</html>
