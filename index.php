<?php

    define( 'ABSPATH', getcwd() );
    define( 'APPPATH', ABSPATH . '/APP' );
    define( 'SITE_URL', "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}/docs");
    define( 'GITHUB_PAGES', 'https://usmanahmed.github.io/docs/');

    include APPPATH . '/init.php';
