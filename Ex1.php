<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check number</title>
</head>
<body>
    <h2>Check if number is Even or Odd</h2>
    <form action="" method="post">
        <label for="number">Enter a number: </label>]
        <input type="number" name="number" id="number" require>
        <button type="submit">Check</button>
    </form>

    <?php
        if(isset($_POST['number']))
        {
            $num = $_POST['number'];
            if($num % 2 == 0)
            {
                echo "$num is  even number";
            }else
            {
                echo "$num is odd number";
            }
        }
    ?>
</body>
</html>