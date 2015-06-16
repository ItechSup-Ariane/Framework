<?php
spl_autoload_register(function ($class) {

    $prefix = 'Itechsup\\FormFwk';

    $base_dir = __DIR__.DIRECTORY_SEPARATOR.'classes';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir.str_replace('\\', DIRECTORY_SEPARATOR, $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulaire</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
	</body>
</html>
