<?php

require '../vendor/autoload.php';
use \App\HtmlElement as element;

$element = new element('p', [], 'Este es el contenido'); //new \App\HtmlElement();  //element;
        
echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');

echo '<br><br>';

$element = new \App\HtmlElement('p', ['id' => 'my_paragraph'], 'Este es el contenido');

echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');

echo '<br><br>';

$element = new \App\HtmlElement('p', ['id' => 'my_paragraph', 'class' => 'paragraph'], 'Este es el contenido');

echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');

echo '<br><br>';

$element = new \App\HtmlElement('img', ['src' => 'img/styde.png']);

echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');

echo '<br><br>';

$element = new \App\HtmlElement('img', ['src' => 'img/styde.png', 'title' => 'Curso de "Refactorización" en Styde']);

echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');

echo '<br><br>';

$element = new \App\HtmlElement('input', ['required']);

echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');

