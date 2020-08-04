<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home',
            'child' => '',
            'content' => 'v_home.php'
        ];
        return view('index-backend.php', $data);
    }

    //--------------------------------------------------------------------

}
