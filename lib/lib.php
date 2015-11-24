<?php
class View{
    public static function  start($title){
        $html = "<!DOCTYPE html>
<html>
<head>
<meta charset=\"ISO-8859-1\">
<link rel='stylesheet' type='text/css' href='./css/style.css'>
<script type='text/javascript' src='../js/scripts.js'></script>
<title>$title</title>
</head>
<body>";
        echo $html;
    }

    public static function loremIpsum(){
        echo '
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non eros volutpat, dapibus odio vitae, iaculis ipsum. Aenean semper et nibh pretium tristique. Proin ac enim vestibulum, volutpat ex sed, fermentum libero. Pellentesque orci urna, tincidunt ut lacus nec, elementum varius arcu. Morbi fringilla mi commodo arcu consectetur, non aliquam sapien feugiat. Ut euismod, massa ut mattis cursus, lectus dui pharetra magna, convallis pellentesque sapien nisi dapibus arcu. Duis varius sem varius eros malesuada, ut varius mauris lobortis. Nulla lobortis et leo consectetur aliquam. Pellentesque malesuada lacus nibh, eget posuere quam consectetur quis. Nunc sollicitudin placerat diam, ut venenatis arcu egestas sed.
Cras rhoncus lectus vel dapibus hendrerit. Nullam nunc augue, consectetur at venenatis vulputate, convallis vitae ex. Mauris ullamcorper ullamcorper tellus, at lobortis nibh imperdiet vitae. Vestibulum efficitur nulla ac mi lobortis mattis. Vivamus gravida, enim et posuere ullamcorper, nunc justo vulputate elit, ac sagittis enim erat in lorem. Phasellus non porttitor sem. Vivamus vitae ex scelerisque, sollicitudin mi nec, porta sem. Fusce at ornare erat. Sed nunc turpis, sagittis ut libero in, elementum vulputate lectus. Ut lobortis convallis porta. Quisque congue ac ante quis tempus. 191 palabras (estas incluidas)';
    }

    public static function loremIpsum2(){
        echo '
Lorem ipsum dolor sit amet, tristique. Proin ac enim vestibulum, volutpat ex sed, fermentum libero. Pellentesque orci urna, tincidunt ut lacus nec, elementum varius arcu. Morbi fringilla mi commodo arcu consectetur, non aliquam sapien feugiat. Ut euismod, massa ut mattis cursus, lectus dui pharetra magna, convallis pellentesque sapien nisi dapibus arcu. Duis varius sem varius eros malesuada, ut varius mauris lobortis. Nulla lobortis et leo consectetur aliquam. Pellentesque malesuada lacus nibh, eget posuere quam consectetur quis. Nunc sollicitudin placerat diam, ut venenatis arcu egestas sed.
Cras rhoncus lectus vel convallis vitae ex. Mauris ullamcorper ullamcorper tellus, at lobortis nibh imperdiet vitae. Vestibulum efficitur nulla ac mi lobortis mattis. Vivamus gravida, enim et posuere ullamcorper, nunc justo vulputate elit, ac sagittis enim erat in lorem. Phasellus non porttitor sem. Vivamus vitae ex scelerisque, sollicitudin mi nec, porta sem. Fusce at ornare erat. Sed nunc turpis, sagittis ut libero in, elementum vulputate lectus. Ut lobortis convallis porta. Quisque congue ac ante quis tempus. 191 palabras (estas incluidas)';
    }

    public static function loremIpsum3(){
        echo '
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non eros volutpat, dapibus odio vitae, iaculis ipsum. Aenean semper et nibh pretium tristique. Proin ac enim vestibulum, volutpat ex sed, fermentum libero. Pellentesque orci urna, tincidunt ut lacus nec, elementum varius arcu. Morbi fringilla mi commodo arcu consectetur, non aliquam sapien feugiat. Ut euismod, massa ut mattis cursus, lectus dui pharetra magna, convallis pellentesque sapien nisi dapibus arcu. Duis varius sem varius eros malesuada, ut varius mauris lobortis. Nulla lobortis et leo consectetur aliquam. Pellentesque malesuada lacus nibh, eget posuere quam consectetur quis. Nunc sollicitudin placerat diam, ut venenatis arcu egestas sed.
Cras rhoncus lectus vel dapibus hendrerit. Nullam nunc agusti ut libero in, elementum vulputate lectus. Ut lobortis convallis porta. Quisque congue ac ante quis tempus. 191 palabras (estas incluidas)';
    }

    public static function superiorBar(){
        echo '<ol>
            <li class="superior-bar-elemento"><a href="index.php">Index</a></li>
            <li class="superior-bar-elemento"><a href="page1.php">Page 1</a></li>
            <li class="superior-bar-elemento"><a href="page2.php">Page 2</a></li>
            <li class="superior-bar-elemento"><a href="page3.php">Page 3</a></li>
        </ol>';
    }

    public static function end(){
        echo '</body>
</html>';
    }

    public static function cabecera(){
        echo"<span>Página de prueba!</span>";
    }

    public static function lateralBar(){
        echo'<ul class="lista">
            <li class="lateral-bar-elemento">Enchufar correctamente</li>
            <li class="lateral-bar-elemento">Comprobar conexiones</li>
            <li class="lateral-bar-elemento">Encender el aparato</li>
        </ul>';
    }


}
class Util{

    public static function showForm(){

        echo '<form method="post" onsubmit="return validarPass()">';
        echo 'Nombre <input id="nombre" type="text" name="usuario">\n';
        echo 'Forma de contacto <input id="clave" type="text" name="clave">';
        echo 'Forma de contacto <input id="clave" type="text" name="clave">';
        echo 'Servicio a realizar <input id="clave" type="text" name="clave">';
        echo'Servicio a realizar?
        <select name="service">
            <option value="Void">Select...</option>
            <option value="Localización de Software">Localización de Software</option>
            <option value="Consultoría en adaptación cultural">Consultoría en adaptación cultural</option>
            <option value="Consultoría en adaptación cultural">Consultoría web multilingüe</option>
            <option value="Consultoría en adaptación cultural">Consultoría web multilingüe</option>
        </select>';
        echo '<input type="submit" value="Entrar">';
        echo '</form>';

        echo'<form method="post" action="upload.php" enctype="multipart/form-data">
            ¡Sube tu foto!: <input type="file" name="foto" /> <input type="submit" name="enviar" value="Enviar" />
      </form>';

    }

}

