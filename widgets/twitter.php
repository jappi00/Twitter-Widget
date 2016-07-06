<?php

return [

    'name' => 'twitter/twitterwidget',

    'label' => 'Twitter',

    'render' => function ($widget) use ($app) {

        // ...

        return $app->view('twitter/widget.php');
    }

];