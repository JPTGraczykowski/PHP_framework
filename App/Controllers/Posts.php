<?php

namespace App\Controllers;

use Core\View;

class Posts extends \Core\Controller
{

    public function indexAction()
    {
        View::renderTemplate('Posts/index.html');

    }

    public function addNewAction()
    {
        echo "Hello in the addNew action in the Posts controller";
    }

    public function editAction()
    {
        echo "Hello in the edit action in the Posts controller";
        echo '<p>Route parameters: <pre>'.
            htmlspecialchars(print_r($this->route_params, true)).'</pre></p>';
    }


}