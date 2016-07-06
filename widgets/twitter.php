<?php

return [

    'name' => 'twitter/twitterwidget',

    'label' => 'Twitter',

    'events' => [

        'view.scripts' => function ($event, $scripts) use ($app) {
            $scripts->register('widget-twitterwidget', 'twitter:js/widget.js', ['~widgets']);
        }

    ],

    'render' => function ($widget) use ($app) {

        // ...

        return $app->view('twitter/widget.php');
    }

];