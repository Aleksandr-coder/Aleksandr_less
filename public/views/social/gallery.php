<!DOCTYPE html>
<head>    
</head>

<body>

	<h1>I am Gallery-view</h1>
    <?php foreach ($newKey as $key => $value) : ?>
        <?= $key ?>
        <br>
        <?=$value?>
        <br>
        <?php endforeach?>

</body>

</html>