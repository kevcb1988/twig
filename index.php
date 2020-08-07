<?php

    require_once './vendor/autoload.php';

    /*Llamado básico de twig*/
    /*
    $loader = new Twig\Loader\ArrayLoader(array(
        'index' => 'Hola {{ name }} desde ¡TWIG!'
    ));
    $twig = new Twig\Environment($loader);s
    echo $twig -> render('index', array('name' => 'Mao'));
    */

    $loader = new \Twig\Loader\FilesystemLoader('./templates');
    $twig = new \Twig\Environment($loader, []);

    $libros = ['Libro 1', 'Libro 2'];

    echo $twig->render('index.html.twig', ['name' => 'Pokemon'], compact('libros'));
