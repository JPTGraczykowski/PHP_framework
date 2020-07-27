<?php

namespace App\Controllers;

class Posts extends \Core\Controller
{

    public function indexAction()
    {
        echo "Hello in the idex action in the Posts controller";
        echo '<p>Query string parameters: <pre>'.
            htmlspecialchars(print_r($_GET, true)).'</pre></p>';

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