<?php
include_once './lib/lib.php';
View::start("Prueba");

//Util::showForm();

echo' <div id=general>';

echo' <div id=bar>';
View::superiorBar();
echo '</div> ';

echo' <div id=nav-bar>';
View::lateralBar();
echo '</div> ';

echo' <div id=footer> </div> ';

echo' </div>';

View::end();