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
//$form->addWidget(new Itechsup\FormFwk\Widget\WidgetImpl\WidgetText('txt_name', 'gruesome label for text'));
//$form->addWidget(new Itechsup\FormFwk\Widget\WidgetImpl\WidgetMail('mail_name', 'gruesome label for mail'));
//$form->addWidget(new Itechsup\FormFwk\Widget\Choice\Impl\WidgetMultiple('list_multiple', 'My big list', array("name"=>"maliste"),array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6")));


$option[] = "1"; // $option = ["1", "2", "3"] <-- suggestion de Corentin que je trouve fort à propos
$option[] = "2";
$option[] = "3";

$html[] = "";

//$form->addWidget(new Itechsup\FormFwk\Widget\Choice\Impl\WidgetSelectSimple('liste', 'gruesome label for mail',$html,$option));
$form->addWidget(new Itechsup\FormFwk\Widget\Choice\Impl\WidgetSimpleExpanded('radio_name', 'gruesome label for radio', [], [['toto1', 'toto2'], 'titi', 'tata']));

$options = array('a' => 'Ma lettre A', 'b' => 'Ma lettre B', 'c' => 'Ma lettre C');
$htmlAttributes = array();
//$form->addWidget(new Itechsup\FormFwk\Widget\Choice\Impl\WidgetCheckbox('checkbox_name', 'label for CB', $htmlAttributes, $options));

if (!empty($_POST)) {
    $form->bind($_POST);
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
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
            <?php echo $form->render(); ?>
        </div>
	</body>
</html>
