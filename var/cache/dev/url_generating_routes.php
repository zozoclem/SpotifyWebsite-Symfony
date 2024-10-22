<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'artist_info' => [['id'], ['_controller' => 'App\\Controller\\ArtistController::getArtistInfo'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/artist']], [], [], []],
    'search_artist' => [[], ['_controller' => 'App\\Controller\\ArtistController::searchArtist'], [], [['text', '/search-artist']], [], [], []],
    'favorite_artist_add' => [[], ['_controller' => 'App\\Controller\\ArtistController::addFavoriteArtist'], [], [['text', '/favorite/artist/add']], [], [], []],
    'favorite_artist_remove' => [[], ['_controller' => 'App\\Controller\\ArtistController::removeFavoriteArtist'], [], [['text', '/favorite/artist/remove']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_spotify' => [[], ['_controller' => 'App\\Controller\\SpotifyController::index'], [], [['text', '/spotify']], [], [], []],
    'music_info' => [['id'], ['_controller' => 'App\\Controller\\TrackController::getMusicInfo'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/music']], [], [], []],
    'search_music' => [[], ['_controller' => 'App\\Controller\\TrackController::searchMusic'], [], [['text', '/search-music']], [], [], []],
    'favorite_track_add' => [[], ['_controller' => 'App\\Controller\\TrackController::addFavoriteTrack'], [], [['text', '/favorite/track/add']], [], [], []],
    'favorite_track_remove' => [[], ['_controller' => 'App\\Controller\\TrackController::removeFavoriteTrack'], [], [['text', '/favorite/track/remove']], [], [], []],
    'redirect_root_to_spotify' => [[], ['route' => 'spotify', 'permanent' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], [], [['text', '/']], [], [], []],
    'spotify' => [[], ['_controller' => 'App\\Controller\\SpotifyController::index'], [], [['text', '/spotify']], [], [], []],
    'App\Controller\ArtistController::getArtistInfo' => [['id'], ['_controller' => 'App\\Controller\\ArtistController::getArtistInfo'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/artist']], [], [], []],
    'App\Controller\ArtistController::searchArtist' => [[], ['_controller' => 'App\\Controller\\ArtistController::searchArtist'], [], [['text', '/search-artist']], [], [], []],
    'App\Controller\ArtistController::addFavoriteArtist' => [[], ['_controller' => 'App\\Controller\\ArtistController::addFavoriteArtist'], [], [['text', '/favorite/artist/add']], [], [], []],
    'App\Controller\ArtistController::removeFavoriteArtist' => [[], ['_controller' => 'App\\Controller\\ArtistController::removeFavoriteArtist'], [], [['text', '/favorite/artist/remove']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\RegistrationController::verifyUserEmail' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\SpotifyController::index' => [[], ['_controller' => 'App\\Controller\\SpotifyController::index'], [], [['text', '/spotify']], [], [], []],
    'App\Controller\TrackController::getMusicInfo' => [['id'], ['_controller' => 'App\\Controller\\TrackController::getMusicInfo'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/music']], [], [], []],
    'App\Controller\TrackController::searchMusic' => [[], ['_controller' => 'App\\Controller\\TrackController::searchMusic'], [], [['text', '/search-music']], [], [], []],
    'App\Controller\TrackController::addFavoriteTrack' => [[], ['_controller' => 'App\\Controller\\TrackController::addFavoriteTrack'], [], [['text', '/favorite/track/add']], [], [], []],
    'App\Controller\TrackController::removeFavoriteTrack' => [[], ['_controller' => 'App\\Controller\\TrackController::removeFavoriteTrack'], [], [['text', '/favorite/track/remove']], [], [], []],
];
