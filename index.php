<?php

ini_set('display_errors', 1);

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


// On crée le formulaire               
$form = new Itechsup\FormFwk\Form\Form();

// On crée les widgets et les options
$options = ['les lettres' => ['a' => 'Ma lettre A', 'b' => 'Ma lettre B', 'c' => 'Ma lettre C'], '001' => 'tutu is so plop'];
$WSelectSimple = new Itechsup\FormFwk\Widget\Choice\Impl\WidgetSelectSimple('s', 'label1', [], $options);
$WText1 = new Itechsup\FormFwk\Widget\WidgetImpl\WidgetText('text1', 'text1', []);
$WText2 = new Itechsup\FormFwk\Widget\WidgetImpl\WidgetText('text2', 'text2', []);
$WText3 = new Itechsup\FormFwk\Widget\WidgetImpl\WidgetText('text3', 'text3', []);
$WSimpleExpanded = new Itechsup\FormFwk\Widget\Choice\Impl\WidgetSimpleExpanded('se', 'label2', [], $options);
$WMultipleExpanded = new Itechsup\FormFwk\Widget\Choice\Impl\WidgetMultipleExpanded('me', 'label3', [], $options);
$WMultiple = new Itechsup\FormFwk\Widget\Choice\Impl\WidgetMultiple('m', 'label4', [], $options);

// On ajoute les widgets et leurs validateurs au formulaire
$form->addWidget($WSelectSimple, [new \Itechsup\FormFwk\Validator\ValidatorYouShouldNotPass()]);
$form->addWidget($WSimpleExpanded);
$form->addWidget($WMultipleExpanded);
$form->addWidget($WMultiple);
$form->addWidget($WText1, [new \Itechsup\FormFwk\Validator\ValidatorSpecialChars("Ne doit pas contenir de caractères spéciaux")]);
$form->addWidget($WText2);
$form->addWidget($WText3);

// On crée des groupes de widgets et leurs validateurs
$form->addGroupWidget([$WText1, $WText2, $WText3], new \Itechsup\FormFwk\Validator\ValidatorGroupWidget\ValidatorTextEqual("Ce n'est pas égal...", [$WText1, $WText2, $WText3]) );
$form->addGroupWidget([$WSelectSimple, $WSimpleExpanded], new \Itechsup\FormFwk\Validator\ValidatorYouShouldNotPass() );

// Si des données ont déjà été envoyées, on les affecte au formulaire
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
            
                // On affiche le formulaire
                // $renderOptions = new Itechsup\FormFwk\Factory\TableRenderer();
                $renderOptions = new Itechsup\FormFwk\Factory\DivRenderer();
                // $renderOptions = new Itechsup\FormFwk\Factory\ListRenderer();
                echo $form->render($renderOptions); 
            
                // Si des données ont été envoyées, on les affiche
                if (!empty($_POST)) {
                    echo '<pre>';
                    print_r($_POST);
                    echo '</pre>';
                }
            ?>
        </div>
	</body>
</html>

