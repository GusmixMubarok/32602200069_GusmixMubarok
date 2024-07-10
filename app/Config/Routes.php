<?php

// we get performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/'. 'Home::index');
$routes->add('/process-form', 'FormController::submitForm', ['post']);
$routes->get('/HelloWorld','HelloWorld::index');
$routes->get('/experience', 'FormController::experience');
$routes->get('/profile', 'FormControler::profile');