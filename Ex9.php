<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Check number is Palindrome</h2>
    <form action="" method="post">
        <label for="number">Enter a number</label>
        <input type="number" name="number">
        <button type="submit">Check</button>
    </form>
    

    <?php
    if(isset($_POST['number']))
    {
        $number = $_POST['number'];
        $reversed = strrev($number);
        if($number == $reversed)
        {
            echo "$number is Palindrome";
        }else
        {
            echo "$number is not Palindrome";
        }
    }
    ?>
</body>
</html>