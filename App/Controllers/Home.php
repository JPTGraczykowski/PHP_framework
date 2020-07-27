<?php

namespace App\Controllers;

class Home extends \Core\Controller
{

    protected function before()
    {
        echo '(before) ';
    }

    protected function after()
    {
        echo ' (after)';
    }

    /* 
    ahow the index page

    @return void 
    */
    public function indexAction()
    {
        echo "Hello in the idex action in the Home controller";
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