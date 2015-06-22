<?php
spl_autoload_register(function ($class) {

    $prefix = 'Itechsup\\FormFwk';

    $base_dir = __DIR__ . DIRECTORY_SEPARATOR . 'classes';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', DIRECTORY_SEPARATOR, $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});

$form = new Itechsup\FormFwk\Form\Form();
$options = ['les lettres' => ['a' => 'Ma lettre A', 'b' => 'Ma lettre B', 'c' => 'Ma lettre C'], '001' => 'tutu is so plop'];
$form->addWidget(new Itechsup\FormFwk\Widget\Choice\Impl\WidgetSelectSimple('s', 'label1', [], $options), [new \Itechsup\FormFwk\Validator\ValidatorYouShouldNotPass()]);
$form->addWidget(new Itechsup\FormFwk\Widget\Choice\Impl\WidgetSimpleExpanded('se', 'label2', [], $options));
$form->addWidget(new Itechsup\FormFwk\Widget\Choice\Impl\WidgetMultipleExpanded('me', 'label3', [], $options));
$form->addWidget(new Itechsup\FormFwk\Widget\Choice\Impl\WidgetMultiple('m', 'label4', [], $options));
$form->addGroupValidator("groupe1", [new Itechsup\FormFwk\Validator\ValidatorComparisonImpl\ValidatorEqual("erreur")]);
$form->bindGroupValidator("groupe1", ["s", "se"]);

if (!empty($_POST)) {
    $form->bind($_POST);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Incroyable! jamais vu !</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link href="http://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="wrapper">
            <?php
            echo $form->render();

            if (!empty($_POST)) {
                echo '<pre>';
                print_r($_POST);
                echo '</pre>';
            }
            ?>
        </div>
    </body>
</html>
