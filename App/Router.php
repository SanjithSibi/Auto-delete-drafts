<?php

namespace App;

use App\controller\Base;
defined('ABSPATH') or die();
//use Sgm\App\controller\Base;

class Router
{
    public function hook(){
        $cont = new Base();
        add_action('admin_menu' , array($cont,'deleteDraftPosts'));
        register_activation_hook( __FILE__, array($cont,'draftPostAutoDeleterActivate' ));
        register_deactivation_hook( __FILE__, array($cont,'draftPostAutoDeleterDeactivate') );






    }

}