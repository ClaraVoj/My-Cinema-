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
        '/admin' => [[['_route' => 'adminadminIndex', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/add_abo' => [[['_route' => 'adminadmin_new_abo', '_controller' => 'App\\Controller\\AdminController::AddAbo'], null, null, null, false, false, null]],
        '/admin/delete_abo' => [[['_route' => 'adminadmin_delete_abo', '_controller' => 'App\\Controller\\AdminController::DeleteAbo'], null, null, null, false, false, null]],
        '/admin/ajouter_film' => [[['_route' => 'adminadmin_ajouter_film', '_controller' => 'App\\Controller\\AdminController::AjouteFilm'], null, null, null, false, false, null]],
        '/avis/film' => [[['_route' => 'avis_film', '_controller' => 'App\\Controller\\AvisFilmController::index'], null, null, null, false, false, null]],
        '/ajout/avis' => [[['_route' => 'avis', '_controller' => 'App\\Controller\\AvisFilmController::AjouteAvis'], null, null, null, true, false, null]],
        '/recherche' => [[['_route' => 'recherche', '_controller' => 'App\\Controller\\RechercheController::index'], null, null, null, false, false, null]],
        '/genres' => [[['_route' => 'genres', '_controller' => 'App\\Controller\\RechercheController::GetAllGenre'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|search/personne/([^/]++)(*:206)'
                        .'|afficher_film/([^/]++)(*:236)'
                    .')'
                    .'|fficher/avis/([^/]++)(*:266)'
                .')'
                .'|/search/(?'
                    .'|genre/([^/]++)(*:300)'
                    .'|titre/([^/]++)(*:322)'
                    .'|dst/([^/]++)(*:342)'
                    .'|Projection/([^/]++)(*:369)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'adminpersonne', '_controller' => 'App\\Controller\\AdminController::RecherchePersonne'], ['params'], null, null, false, true, null]],
        236 => [[['_route' => 'adminadmin_afficher_film', '_controller' => 'App\\Controller\\AdminController::HistoriqueMembre'], ['id'], null, null, false, true, null]],
        266 => [[['_route' => 'avisA', '_controller' => 'App\\Controller\\AvisFilmController::DisplayAvis'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'genre', '_controller' => 'App\\Controller\\RechercheController::RechercheGenre'], ['id'], null, null, false, true, null]],
        322 => [[['_route' => 'titre', '_controller' => 'App\\Controller\\RechercheController::RechercheTitre'], ['params'], null, null, false, true, null]],
        342 => [[['_route' => 'dst', '_controller' => 'App\\Controller\\RechercheController::RechercheDst'], ['id'], null, null, false, true, null]],
        369 => [
            [['_route' => 'projection', '_controller' => 'App\\Controller\\RechercheController::RechercheFilmDate'], ['date'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
