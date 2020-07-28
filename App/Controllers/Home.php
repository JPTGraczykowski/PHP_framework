<?php

namespace App\Controllers;

use \Core\View;


class Home extends \Core\Controller
{

    protected function before()
    {
    }

    protected function after()
    {
    }

    /* 
    ahow the index page

    @return void 
    */
    public function indexAction()
    {
        View::renderTemplate('Home/index.html', [ 
                    'name' => 'Dave', 
                    'colours' => ['red', 'green', 'blue']
                    ]);
    }

    /* 
    how the new page

    @return void 
    */
    public function addNewAction()
    {
        echo "Hello in the addNew action in the Home controller";
    }
}