<?php

require_once '../app/NL/Autoload/autoloader.php';

use app\NL\Route\FrontController;
use app\NL\Models\Employee\Employee;
use app\NL\Models\Company\Company;
use app\NL\Models\Project\Project;

$frontController = new FrontController();

$frontController->getUri();

$frontController->setRoute('/', function () {
    $user = new Employee('Nebojsa', 'Lalic', 'nebojsa.lalic@devtechgroup.com', 'Software developer');
    $user2 = new Employee('Petar', 'Petrovic', 'petarpetrovic@gmail.com', 'QA');
    $user3 = new Employee('X', 'Man', 'xman@yahoo.com', 'Project manager');

    echo 'Welcome to <b>Home Page</b> :)!<br>';
    echo '-------------------------------------------------------';
    echo '<h2>Hello from autoloaded class("Employee") with next details:</h2><br>';
    echo '<p>' . $user->getUserDetails() . '</p>';
    echo '<br>' . '<p>' . $user2->getUserDetails() . '</p>';
    echo '<br>' . '<p>' . $user3->getUserDetails() . '</p>';
});

$frontController->setRoute('/about', function () {
    $company = new Company('DevTech', array('Mihajla Pupina 12', 'Janka Cmelika 7'), 'Information Technology');

    echo 'If you want <b>about page</b>, you are right there! :)<br>';
    echo '-------------------------------------------------------';
    echo '<h2>This is page about company:</h2><br>';
    echo '<p>' . $company->getCompanyDetails() . '</p>';
});

$frontController->setRoute('/project', function () {
    $project = new Project('AppRiver', 'In Progress', 'Google', 'Street 01', 'IT');

    echo $project->getProject();
});

$frontController->dispatch();

