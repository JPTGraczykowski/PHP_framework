<?php

namespace App\Controllers;

use Core\View;
use App\Models\Post;

class Posts extends \Core\Controller
{

    public function indexAction()
    {
        $posts = Post::getAll();
        View::renderTemplate('Posts/index.html', ['posts' => $posts]);
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