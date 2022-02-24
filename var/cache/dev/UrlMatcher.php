<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/acceuil' => [[['_route' => 'acceuil', '_controller' => 'App\\Controller\\AcceuilController::index'], null, null, null, false, false, null]],
        '/categorie/rec' => [[['_route' => 'categorie_rec_index', '_controller' => 'App\\Controller\\CategorieRecController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/rec/new' => [[['_route' => 'categorie_rec_new', '_controller' => 'App\\Controller\\CategorieRecController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/aff' => [[['_route' => 'affichage', '_controller' => 'App\\Controller\\ReclamationController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/categorie/rec/([^/]++)(?'
                    .'|(*:195)'
                    .'|/edit(*:208)'
                    .'|(*:216)'
                .')'
                .'|/reclamation/(?'
                    .'|([^/]++)(?'
                        .'|(*:252)'
                        .'|/edit(*:265)'
                        .'|(*:273)'
                    .')'
                    .'|delete/([^/]++)(*:297)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'categorie_rec_show', '_controller' => 'App\\Controller\\CategorieRecController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'categorie_rec_edit', '_controller' => 'App\\Controller\\CategorieRecController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'categorie_rec_delete', '_controller' => 'App\\Controller\\CategorieRecController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        252 => [
            [['_route' => 'reclamation_showFront', '_controller' => 'App\\Controller\\ReclamationController::showFront'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        265 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        273 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        297 => [
            [['_route' => 'reclamation_delete_front', '_controller' => 'App\\Controller\\ReclamationController::delete_front'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
