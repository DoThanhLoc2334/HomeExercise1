<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse String</title>
</head>
<body>
    <h2>Reverse a String</h2>
    <form method="post">
        <label for="text">Enter a string:</label>
        <input type="text" name="text">
        <button type="submit">Reverse</button>
    </form>

    <?php
    if (isset($_POST['text'])) 
    {
        $input = $_POST['text'];
        $reversed = strrev($input);
        echo "Reversed string: $reversed";
    }
    ?>
</body>
</html>
