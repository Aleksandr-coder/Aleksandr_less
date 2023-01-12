<!DOCTYPE html>
<head>    
</head>

<body>

	<h1>I am Gallery-view</h1>
    <?php foreach ($newKey as $key => $value) : ?>
        <?= $key ?>
        <br>
        <?php print_r($value); ?>
        <br>
        <?php endforeach?>

</body>

</html>