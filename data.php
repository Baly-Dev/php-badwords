<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>

    <?php 
        $word = $_POST['word'];
        $private_word = str_repeat('*', strlen($word));
    ?>

    <h1>The length word is about <?php echo strlen($word) ?></h1>
    <h1>The word is <?php echo $private_word ?></h1>
</body>
</html>


