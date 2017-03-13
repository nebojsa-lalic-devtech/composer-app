<?php

require_once '../vendor/autoload.php';

use Klein\Klein;
use app\NL\Models\Employee\Employee;
use app\NL\Models\Company\Company;
use app\NL\Models\Project\Project;

$klein = new Klein();

$klein->respond('GET', '/', function () {
    $smarty = new Smarty();

    $user = new Employee('Nebojsa', 'Lalic', 'nebojsa.lalic@devtechgroup.com', 'Software developer');
    $user2 = new Employee('Petar', 'Petrovic', 'petarpetrovic@gmail.com', 'QA');
    $user3 = new Employee('X', 'Man', 'xman@yahoo.com', 'Project manager');

    $userDetails = $user->getUserDetails();
    $user2Details = $user2->getUserDetails();
    $user3Details = $user3->getUserDetails();

    $smarty->assign('userDetails', $userDetails);
    $smarty->assign('user2Details', $user2Details);
    $smarty->assign('user3Details', $user3Details);

    $indexView = $smarty->display('index.tpl');
    return $indexView;
});

$klein->respond('GET', '/about', function () {
    $smarty = new Smarty();

    $company = new Company('DevTech', array('Mihajla Pupina 12', 'Janka Cmelika 7'), 'Information Technology');

    $companyDetails = $company->getCompanyDetails();

    $smarty->assign('companyDetails', $companyDetails);

    $aboutView = $smarty->display('about.tpl');

    return $aboutView;
});

$klein->respond('GET', '/project', function () {
    $smarty = new Smarty();
    
    $project = new Project('AppRiver', 'In Progress', 'Google', 'Street 01', 'IT');

    $projectDetails = $project->getProject();
    
    $smarty->assign('projectDetails', $projectDetails);

    $projectView = $smarty->display('project.tpl');
    
    return $projectView;
});

$klein->dispatch();
