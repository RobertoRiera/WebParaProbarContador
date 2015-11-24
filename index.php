<?php
include_once './lib/lib.php';
View::start("Prueba");

//Util::showForm();

echo' <div id=general>';

    echo' <div id=head>';
        View::cabecera('Página de prueba');
    echo '</div> ';

    echo' <div id=bar>';
        View::superiorBar();
    echo '</div> ';

    echo' <div id=nav-bar>';
        View::lateralBar();
    echo '</div> ';

    echo' <div id=info>';
        View::loremIpsum();
    echo'</div> ';

    echo' <div id=footer> </div> ';

echo' </div>';

View::end();