<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <h2>Find Factorial Of A Number</h2>
    <form action="" method="post">
        <label for="number">Enter a number</label>
        <input type="number" name="number">
        <button type="submit">Calculate</button>
    </form>

    <?php
    if(isset($_POST['number']))
    {
        $n = $_POST['number'];
        $fact = 1;
        for($i = 1; $i <= $n; $i++)
        {
            $fact *= $i; 
        }
        echo "Factorial of number is $fact";
    }
    ?>
</body>
</html>