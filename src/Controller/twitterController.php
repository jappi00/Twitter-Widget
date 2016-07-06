<?php

namespace mediatrax\twitter\Controller;
use Pagekit\Application as App;
class twitterController
{
    /**
     * @Access(admin=true)
     */
    public function indexAction()
    {
        return [
            '$view' => [
                'title' => __('Twitter Settings'),
                'name'  => 'twitter:views/admin/settings.php'
            ],
            '$data' => [
                'config' => App::module('twitter')->config()
            ]
        ];
    }
}