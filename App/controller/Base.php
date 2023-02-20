<?php

namespace App\controller;
defined('ABSPATH') or die();

class Base
{

       function draftPostAutoDeleterActivate()
        {
            if (!wp_next_scheduled(DRAFT_POST_AUTO_DELETER_CRON_HOOK)) {
                wp_schedule_event(strtotime(DRAFT_POST_AUTO_DELETER_SCHEDULE_TIME), 'daily', DRAFT_POST_AUTO_DELETER_CRON_HOOK);
            }
        }

        function draftPostAutoDeleterDeactivate()
        {
            wp_clear_scheduled_hook(DRAFT_POST_AUTO_DELETER_CRON_HOOK);
        }


        function deleteDraftPosts()
        {
            $draft_posts = get_posts(array(
                'post_status' => 'draft',
                'number posts' => -1
            ));

            foreach ($draft_posts as $post) {
                wp_delete_post($post->ID, true);
            }
        }



}