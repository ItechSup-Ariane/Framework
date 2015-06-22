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
$WSelectSimple = new Itechsup\FormFwk\Widget\Choice\Impl\WidgetSelectSimple('s', 'label1', [], $options);
$WText1 = new Itechsup\FormFwk\Widget\WidgetImpl\WidgetText('text1', 'text1', []);
$WText2 = new Itechsup\FormFwk\Widget\WidgetImpl\WidgetText('text2', 'text2', []);
$WSimpleExpanded = new Itechsup\FormFwk\Widget\Choice\Impl\WidgetSimpleExpanded('se', 'label2', [], $options);
$WMultipleExpanded = new Itechsup\FormFwk\Widget\Choice\Impl\WidgetMultipleExpanded('me', 'label3', [], $options);
$WMultiple = new Itechsup\FormFwk\Widget\Choice\Impl\WidgetMultiple('m', 'label4', [], $options);

$form->addWidget($WSelectSimple,[new \Itechsup\FormFwk\Validator\ValidatorYouShouldNotPass()]);
$form->addWidget($WSimpleExpanded);
$form->addWidget($WMultipleExpanded);
$form->addWidget($WMultiple);

$form->addWidget($WText1);
$form->addWidget($WText2);

$form->addGroupWidget([$WText1, $WText2], new \Itechsup\FormFwk\Validator\ValidatorGroupWidget\ValidatorTextEqual("c'est pas egal", [$WText1, $WText2]) );
$form->addGroupWidget([$WSelectSimple, $WSimpleExpanded], new \Itechsup\FormFwk\Validator\ValidatorYouShouldNotPass() );


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

