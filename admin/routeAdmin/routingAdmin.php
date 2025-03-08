<?php
    $host = explode('?', $_SERVER['REQUEST_URI'])[0];
    $num = substr_count($host, '/');
    $path = explode('/', $host)[$num];

    if ($path == '' OR $path == 'index' OR $path == 'index.php') {
        $response = controllerAdmin::formLoginSite();
    }

    elseif($path == 'login.php' OR $path == 'login') {
        $response = controllerAdmin::loginAction();
    }

    elseif($path == 'logout.php' OR $path == 'logout') {
        $response = controllerAdmin::logoutAction();
    }

    elseif($path == 'newsAdmin.php' OR $path == 'newsAdmin') {
        $response = controllerAdminNews::NewsList();
    }

        elseif($path == 'newsAdd.php' OR $path == 'newsAdd') {
            $response = controllerAdminNews::newsAddForm();
        }

    elseif($path == 'newsAddResult.php' OR $path == 'newsAddResult') {
        $response = controllerAdminNews::newsAddResult();
    }

    else {
        $response = controllerAdmin::error404();
    }

?>