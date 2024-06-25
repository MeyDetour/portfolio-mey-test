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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/techs' => [[['_route' => 'get_technology', '_controller' => 'App\\Controller\\ApiController::getTechnologies'], null, null, null, false, false, null]],
        '/texts' => [[['_route' => 'get_texts', '_controller' => 'App\\Controller\\ApiController::getTextes'], null, null, null, false, false, null]],
        '/certifs' => [[['_route' => 'get_certificatinons', '_controller' => 'App\\Controller\\ApiController::getCertifications'], null, null, null, false, false, null]],
        '/lastProject' => [[['_route' => 'get_last_project', '_controller' => 'App\\Controller\\ApiController::getLastProject'], null, null, null, false, false, null]],
        '/projects' => [[['_route' => 'get_projects', '_controller' => 'App\\Controller\\ApiController::getProjects'], null, null, null, false, false, null]],
        '/qualities' => [[['_route' => 'get_qualities', '_controller' => 'App\\Controller\\ApiController::getQualities'], null, null, null, false, false, null]],
        '/medias' => [[['_route' => 'get_medias', '_controller' => 'App\\Controller\\ApiController::getMedias'], null, null, null, false, false, null]],
        '/profile/certifis' => [[['_route' => 'certifications', '_controller' => 'App\\Controller\\CertificationController::show'], null, null, null, false, false, null]],
        '/profile/certification/new' => [[['_route' => 'new_certification', '_controller' => 'App\\Controller\\CertificationController::new'], null, null, null, false, false, null]],
        '/profile/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/profile/lastProject' => [[['_route' => 'lastProject', '_controller' => 'App\\Controller\\LastProjectController::show'], null, null, null, false, false, null]],
        '/profile/lastProject/new' => [[['_route' => 'new_last_project', '_controller' => 'App\\Controller\\LastProjectController::new'], null, null, null, false, false, null]],
        '/profile/projets' => [[['_route' => 'projets', '_controller' => 'App\\Controller\\ProjectController::index'], null, null, null, false, false, null]],
        '/profile/project/new' => [[['_route' => 'new_projet', '_controller' => 'App\\Controller\\ProjectController::new'], null, null, null, false, false, null]],
        '/profile/quality' => [[['_route' => 'qualities', '_controller' => 'App\\Controller\\QualityController::index'], null, null, null, false, false, null]],
        '/profile/quality/new' => [[['_route' => 'new_quality', '_controller' => 'App\\Controller\\QualityController::new'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::register'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profile/media/new' => [[['_route' => 'new_media', '_controller' => 'App\\Controller\\SocialMediaController::new'], null, null, null, false, false, null]],
        '/profile/tech' => [[['_route' => 'add_technology', '_controller' => 'App\\Controller\\TechnologyController::index'], null, null, null, false, false, null]],
        '/profile/text' => [[['_route' => 'show_texts', '_controller' => 'App\\Controller\\TextController::show'], null, null, null, true, false, null]],
        '/profile/text/new' => [[['_route' => 'new_texts', '_controller' => 'App\\Controller\\TextController::new'], null, null, null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|errors(?:/(\\d+))?(*:70)'
                        .'|validation_errors/([^/]++)(*:103)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:140)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:171)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:210)'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:247)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:289)'
                    .'|wdt/([^/]++)(*:309)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:351)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:388)'
                                .'|router(*:402)'
                                .'|exception(?'
                                    .'|(*:422)'
                                    .'|\\.css(*:435)'
                                .')'
                            .')'
                            .'|(*:445)'
                        .')'
                    .')'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:510)'
                    .'|([A-z0-9_-]*)/(.+)(*:536)'
                .')'
                .'|/pro(?'
                    .'|ject/([^/]++)(*:565)'
                    .'|file/(?'
                        .'|certification/(?'
                            .'|edit/([^/]++)(*:611)'
                            .'|remove/([^/]++)(*:634)'
                        .')'
                        .'|image/([^/]++)/(?'
                            .'|technology(*:671)'
                            .'|project(*:686)'
                            .'|media(*:699)'
                        .')'
                        .'|lastProject/(?'
                            .'|edit/([^/]++)(*:736)'
                            .'|remove/([^/]++)(*:759)'
                        .')'
                        .'|project/(?'
                            .'|edit/([^/]++)(*:792)'
                            .'|remove/([^/]++)(*:815)'
                        .')'
                        .'|quality/(?'
                            .'|edit/([^/]++)(*:848)'
                            .'|remove/([^/]++)(*:871)'
                        .')'
                        .'|media/(?'
                            .'|edit/([^/]++)(*:902)'
                            .'|remove/([^/]++)(*:925)'
                        .')'
                        .'|te(?'
                            .'|ch/(?'
                                .'|edit/([^/]++)(*:958)'
                                .'|remove/([^/]++)(*:981)'
                            .')'
                            .'|xt/edit/([^/]++)(*:1006)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        70 => [[['_route' => 'api_errors', '_controller' => 'api_platform.action.not_exposed', 'status' => '500'], ['status'], null, null, false, true, null]],
        103 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], null, null, false, true, null]],
        140 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        171 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        210 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        247 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        289 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        309 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        351 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        388 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        402 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        422 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        435 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        445 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        510 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        536 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        565 => [[['_route' => 'get_project', '_controller' => 'App\\Controller\\ApiController::getProject'], ['id'], null, null, false, true, null]],
        611 => [[['_route' => 'edit_certification', '_controller' => 'App\\Controller\\CertificationController::edit'], ['id'], null, null, false, true, null]],
        634 => [[['_route' => 'remove_certification', '_controller' => 'App\\Controller\\CertificationController::remove'], ['id'], null, null, false, true, null]],
        671 => [[['_route' => 'technology_add_image', '_controller' => 'App\\Controller\\ImageController::addImageToTechnology'], ['id'], null, null, false, false, null]],
        686 => [[['_route' => 'project_add_image', '_controller' => 'App\\Controller\\ImageController::addImageToProject'], ['id'], null, null, false, false, null]],
        699 => [[['_route' => 'media_add_image', '_controller' => 'App\\Controller\\ImageController::addImageToMedia'], ['id'], null, null, false, false, null]],
        736 => [[['_route' => 'edit_last_project', '_controller' => 'App\\Controller\\LastProjectController::edit'], ['id'], null, null, false, true, null]],
        759 => [[['_route' => 'remove_last_project', '_controller' => 'App\\Controller\\LastProjectController::remove'], ['id'], null, null, false, true, null]],
        792 => [[['_route' => 'edit_projet', '_controller' => 'App\\Controller\\ProjectController::edit'], ['id'], null, null, false, true, null]],
        815 => [[['_route' => 'remove_project', '_controller' => 'App\\Controller\\ProjectController::remove'], ['id'], null, null, false, true, null]],
        848 => [[['_route' => 'edit_quality', '_controller' => 'App\\Controller\\QualityController::edit'], ['id'], null, null, false, true, null]],
        871 => [[['_route' => 'remove_quality', '_controller' => 'App\\Controller\\QualityController::remove'], ['id'], null, null, false, true, null]],
        902 => [[['_route' => 'edit_media', '_controller' => 'App\\Controller\\SocialMediaController::edit'], ['id'], null, null, false, true, null]],
        925 => [[['_route' => 'remove_media', '_controller' => 'App\\Controller\\SocialMediaController::remove'], ['id'], null, null, false, true, null]],
        958 => [[['_route' => 'edit_technology', '_controller' => 'App\\Controller\\TechnologyController::edit'], ['id'], null, null, false, true, null]],
        981 => [[['_route' => 'remove_technology', '_controller' => 'App\\Controller\\TechnologyController::remove_tech'], ['id'], null, null, false, true, null]],
        1006 => [
            [['_route' => 'edit_texts', '_controller' => 'App\\Controller\\TextController::edit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
