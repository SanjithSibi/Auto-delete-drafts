<?php
/*
 Plugin Name: Draft Post Auto Deleter
 Description: Automatically deletes all draft posts every day at 10:00 AM.
 Version: 1.0
 Author: Sibi
*/

use App\Router;

defined('ABSPATH') or die();


defined("DRAFT_POST_AUTO_DELETER_CRON_HOOK") or define("DRAFT_POST_AUTO_DELETER_CRON_HOOK",'deleteDraftPosts');

defined("DRAFT_POST_AUTO_DELETER_SCHEDULE_TIME") or define("DRAFT_POST_AUTO_DELETER_SCHEDULE_TIME",'10:00');







$router = new Router();
$router->hook();



