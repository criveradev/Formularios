<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\PageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/contacto-v1' => [[['_route' => 'contact-v1', '_controller' => 'App\\Controller\\PageController::contactoV1'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contacto-v2' => [[['_route' => 'contact-v2', '_controller' => 'App\\Controller\\PageController::contactoV2'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contacto-v3' => [[['_route' => 'contact-v3', '_controller' => 'App\\Controller\\PageController::contactoV3'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/crear' => [[['_route' => 'post_create', '_controller' => 'App\\Controller\\PostController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/post/([^/]++)/editar(*:63)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        63 => [
            [['_route' => 'post_edit', '_controller' => 'App\\Controller\\PostController::editar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
