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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'liste_cat', '_controller' => 'App\\Controller\\AdminController::listCategory'], null, null, null, false, false, null]],
        '/admin/category/add' => [[['_route' => 'add_category', '_controller' => 'App\\Controller\\AdminController::createUpdateCategory'], null, null, null, false, false, null]],
        '/admin/product' => [[['_route' => 'liste_product', '_controller' => 'App\\Controller\\AdminController::listProduct'], null, null, null, false, false, null]],
        '/admin/product/add' => [[['_route' => 'add_product', '_controller' => 'App\\Controller\\AdminController::createUpdateProduct'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'liste_user', '_controller' => 'App\\Controller\\AdminController::listClient'], null, null, null, false, false, null]],
        '/admin/order' => [[['_route' => 'liste_order', '_controller' => 'App\\Controller\\AdminController::listOrder'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::listProduct'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\IndexController::inscription'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\IndexController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\IndexController::logout'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\IndexController::panier'], null, null, null, true, false, null]],
        '/order' => [[['_route' => 'order', '_controller' => 'App\\Controller\\IndexController::order'], null, null, null, false, false, null]],
        '/order/confirm' => [[['_route' => 'order_confirm', '_controller' => 'App\\Controller\\IndexController::orderConfirm'], null, null, null, false, false, null]],
        '/mon_compte' => [[['_route' => 'compte', '_controller' => 'App\\Controller\\IndexController::monCompte'], null, null, null, false, false, null]],
        '/mon_compte/infos' => [[['_route' => 'update_infos', '_controller' => 'App\\Controller\\IndexController::updateInfos'], null, null, null, false, false, null]],
        '/mon_compte/password' => [[['_route' => 'update_password', '_controller' => 'App\\Controller\\IndexController::updatePassword'], null, null, null, false, false, null]],
        '/client/order' => [[['_route' => 'client_order', '_controller' => 'App\\Controller\\IndexController::listOrder'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|category/(?'
                        .'|add/([^/]++)(*:203)'
                        .'|([^/]++)(*:219)'
                    .')'
                    .'|product/(?'
                        .'|add/([^/]++)(*:251)'
                        .'|([^/]++)(*:267)'
                    .')'
                    .'|user/([^/]++)(*:289)'
                    .'|order/([^/]++)(*:311)'
                .')'
                .'|/index/details/([^/]++)(*:343)'
                .'|/panier/(?'
                    .'|add/([^/]++)(*:374)'
                    .'|remove/([^/]++)(*:397)'
                .')'
                .'|/client/order/([^/]++)(*:428)'
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
        203 => [[['_route' => 'update_category', '_controller' => 'App\\Controller\\AdminController::createUpdateCategory'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        219 => [[['_route' => 'delete_cat', '_controller' => 'App\\Controller\\AdminController::deleteCategory'], ['id'], ['SUP' => 0], null, false, true, null]],
        251 => [[['_route' => 'product_update', '_controller' => 'App\\Controller\\AdminController::createUpdateProduct'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        267 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\AdminController::deleteProduct'], ['id'], ['SUP' => 0], null, false, true, null]],
        289 => [[['_route' => 'details_user', '_controller' => 'App\\Controller\\AdminController::detailsClient'], ['id'], null, null, false, true, null]],
        311 => [[['_route' => 'details_order_user', '_controller' => 'App\\Controller\\AdminController::detailsOrderClient'], ['id'], null, null, false, true, null]],
        343 => [[['_route' => 'details_product', '_controller' => 'App\\Controller\\IndexController::detailsProduct'], ['id'], null, null, false, true, null]],
        374 => [[['_route' => 'add_panier', '_controller' => 'App\\Controller\\IndexController::addPanier'], ['id'], null, null, false, true, null]],
        397 => [[['_route' => 'panier_remove', '_controller' => 'App\\Controller\\IndexController::remove'], ['id'], null, null, false, true, null]],
        428 => [
            [['_route' => 'details_order', '_controller' => 'App\\Controller\\IndexController::detailsOrder'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
