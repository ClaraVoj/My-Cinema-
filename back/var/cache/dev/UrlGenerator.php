<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'adminadminIndex' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], []],
    'adminpersonne' => [['params'], ['_controller' => 'App\\Controller\\AdminController::RecherchePersonne'], [], [['variable', '/', '[^/]++', 'params', true], ['text', '/admin/search/personne']], [], []],
    'adminadmin_new_abo' => [[], ['_controller' => 'App\\Controller\\AdminController::AddAbo'], [], [['text', '/admin/add_abo']], [], []],
    'adminadmin_delete_abo' => [[], ['_controller' => 'App\\Controller\\AdminController::DeleteAbo'], [], [['text', '/admin/delete_abo']], [], []],
    'adminadmin_afficher_film' => [['id'], ['_controller' => 'App\\Controller\\AdminController::HistoriqueMembre'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/afficher_film']], [], []],
    'adminadmin_ajouter_film' => [[], ['_controller' => 'App\\Controller\\AdminController::AjouteFilm'], [], [['text', '/admin/ajouter_film']], [], []],
    'avis_film' => [[], ['_controller' => 'App\\Controller\\AvisFilmController::index'], [], [['text', '/avis/film']], [], []],
    'avis' => [[], ['_controller' => 'App\\Controller\\AvisFilmController::AjouteAvis'], [], [['text', '/ajout/avis/']], [], []],
    'avisA' => [['id'], ['_controller' => 'App\\Controller\\AvisFilmController::DisplayAvis'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/afficher/avis']], [], []],
    'recherche' => [[], ['_controller' => 'App\\Controller\\RechercheController::index'], [], [['text', '/recherche']], [], []],
    'genre' => [['id'], ['_controller' => 'App\\Controller\\RechercheController::RechercheGenre'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/search/genre']], [], []],
    'titre' => [['params'], ['_controller' => 'App\\Controller\\RechercheController::RechercheTitre'], [], [['variable', '/', '[^/]++', 'params', true], ['text', '/search/titre']], [], []],
    'genres' => [[], ['_controller' => 'App\\Controller\\RechercheController::GetAllGenre'], [], [['text', '/genres']], [], []],
    'dst' => [['id'], ['_controller' => 'App\\Controller\\RechercheController::RechercheDst'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/search/dst']], [], []],
    'projection' => [['date'], ['_controller' => 'App\\Controller\\RechercheController::RechercheFilmDate'], [], [['variable', '/', '[^/]++', 'date', true], ['text', '/search/Projection']], [], []],
];
