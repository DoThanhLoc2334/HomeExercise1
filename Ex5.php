<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Count Vowel</h2>
    <form action="" method="post">
        <label for="text">Enter a string</label>
        <input type="text" name="text">
        <button type="submit">Count</button>
    </form>
    <?php
    if(isset($_POST['text']))
    {
        $str = strtolower($_POST['text']);
        $vowels = ['a', 'o', 'e', 'u', 'i'];
        $count = 0;

        for($i = 0; $i < strlen($str); $i++)
        {
            if(in_array($str[$i], $vowels))
            {
                $count++;
            }
        }
        echo "Number of vowerls: $count";
    }
    ?>
</body>
</html>