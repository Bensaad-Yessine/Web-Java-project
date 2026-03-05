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
        '/classe' => [[['_route' => 'app_classe_index', '_controller' => 'App\\Controller\\ClasseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/classe/ajax/filter' => [[['_route' => 'app_classe_ajax_filter', '_controller' => 'App\\Controller\\ClasseController::ajaxFilter'], null, ['GET' => 0], null, false, false, null]],
        '/classe/new' => [[['_route' => 'app_classe_new', '_controller' => 'App\\Controller\\ClasseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/groupe/projet' => [[['_route' => 'front_groupe_projet_index', '_controller' => 'App\\Controller\\FrontGroupeProjetController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/groupe/projet/new' => [[['_route' => 'front_groupe_projet_new', '_controller' => 'App\\Controller\\FrontGroupeProjetController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/groupe/projet/propositions' => [[['_route' => 'front_proposition_reunion_index', '_controller' => 'App\\Controller\\FrontGroupeProjetController::indexPropositions'], null, ['GET' => 0], null, false, false, null]],
        '/front/objectif/sante' => [[['_route' => 'front_objectif_sante_index', '_controller' => 'App\\Controller\\FrontObjectifSanteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/front/objectif/sante/filter' => [[['_route' => 'front_objectif_sante_filter', '_controller' => 'App\\Controller\\FrontObjectifSanteController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/front/objectif/sante/new' => [[['_route' => 'front_objectif_sante_new', '_controller' => 'App\\Controller\\FrontObjectifSanteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/groupe-projet' => [
            [['_route' => 'app_groupe_projet_index', '_controller' => 'App\\Controller\\GroupeProjetController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'groupe_projet_list', '_controller' => 'App\\Controller\\GroupeProjetController::list'], null, null, null, true, false, null],
        ],
        '/groupe-projet/ajax/filter' => [[['_route' => 'app_groupe_projet_ajax_filter', '_controller' => 'App\\Controller\\GroupeProjetController::ajaxFilter'], null, ['GET' => 0], null, false, false, null]],
        '/groupe-projet/new' => [[['_route' => 'app_groupe_projet_new', '_controller' => 'App\\Controller\\GroupeProjetController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/matiereclasse' => [[['_route' => 'app_matiere_classe_index', '_controller' => 'App\\Controller\\MatiereClasseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/matiereclasse/ajax/filter' => [[['_route' => 'app_matiere_classe_ajax_filter', '_controller' => 'App\\Controller\\MatiereClasseController::ajaxFilter'], null, ['GET' => 0], null, false, false, null]],
        '/matiereclasse/new' => [[['_route' => 'app_matiere_classe_new', '_controller' => 'App\\Controller\\MatiereClasseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/objectif/sante' => [[['_route' => 'app_objectif_sante_index', '_controller' => 'App\\Controller\\ObjectifSanteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/objectif/sante/new' => [[['_route' => 'app_objectif_sante_new', '_controller' => 'App\\Controller\\ObjectifSanteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/objectif/sante/filter' => [[['_route' => 'app_objectif_sante_filter', '_controller' => 'App\\Controller\\ObjectifSanteController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/preference/alerte' => [[['_route' => 'app_preference_alerte_index', '_controller' => 'App\\Controller\\PreferenceAlerteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/preference/alerte/new' => [[['_route' => 'app_preference_alerte_new', '_controller' => 'App\\Controller\\PreferenceAlerteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/salle' => [[['_route' => 'app_salle_index', '_controller' => 'App\\Controller\\SalleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/salle/ajax/filter' => [[['_route' => 'app_salle_ajax_filter', '_controller' => 'App\\Controller\\SalleController::ajaxFilter'], null, ['GET' => 0], null, false, false, null]],
        '/salle/new' => [[['_route' => 'app_salle_new', '_controller' => 'App\\Controller\\SalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/seance' => [[['_route' => 'app_seance_index', '_controller' => 'App\\Controller\\SeanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/seance/ajax/filter' => [[['_route' => 'app_seance_ajax_filter', '_controller' => 'App\\Controller\\SeanceController::ajaxFilter'], null, ['GET' => 0], null, false, false, null]],
        '/seance/new' => [[['_route' => 'app_seance_new', '_controller' => 'App\\Controller\\SeanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/suivi/tache' => [[['_route' => 'app_suivi_tache', '_controller' => 'App\\Controller\\SuiviTacheController::index'], null, null, null, false, false, null]],
        '/tache' => [[['_route' => 'app_tache_index', '_controller' => 'App\\Controller\\TacheController::index'], null, ['GET' => 0], null, false, false, null]],
        '/tache/new' => [[['_route' => 'app_tache_new', '_controller' => 'App\\Controller\\TacheController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/ajax/filter' => [[['_route' => 'app_user_ajax_filter', '_controller' => 'App\\Controller\\UserController::ajaxFilter'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/show' => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], null, null, null, false, false, null]],
        '/user/dashboard' => [
            [['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\UserController::dashboard'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_my_tasks', '_controller' => 'App\\Controller\\UserController::mytasks'], null, ['GET' => 0], null, false, false, null],
        ],
        '/user/dashboard/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, ['GET' => 0], null, false, false, null]],
        '/user/dashboard/profile/update' => [[['_route' => 'app_profile_update', '_controller' => 'App\\Controller\\UserController::updateProfile'], null, ['POST' => 0], null, false, false, null]],
        '/user/dashboard/task/add' => [[['_route' => 'app_task_add', '_controller' => 'App\\Controller\\UserController::addTask'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/classe/(?'
                    .'|([^/]++)(*:221)'
                    .'|front/([^/]++)(*:243)'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:270)'
                            .'|users(*:283)'
                            .'|a(?'
                                .'|udit(?'
                                    .'|(*:302)'
                                    .'|/api(*:314)'
                                .')'
                                .'|rchive(*:329)'
                            .')'
                            .'|suggestions(*:349)'
                        .')'
                        .'|(*:358)'
                    .')'
                    .'|front/([^/]++)/stats(*:387)'
                    .'|([^/]++)/(?'
                        .'|export/(?'
                            .'|csv(*:420)'
                            .'|pdf(*:431)'
                        .')'
                        .'|generate(*:448)'
                    .')'
                .')'
                .'|/front/(?'
                    .'|groupe/projet/(?'
                        .'|(\\d+)/proposition/new(*:506)'
                        .'|(\\d+)(*:519)'
                        .'|(\\d+)/edit(*:537)'
                        .'|(\\d+)/delete(*:557)'
                        .'|proposition/(?'
                            .'|(\\d+)(*:585)'
                            .'|(\\d+)/edit(*:603)'
                            .'|(\\d+)/delete(*:623)'
                        .')'
                    .')'
                    .'|objectif/sante/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:667)'
                            .'|suivis(?'
                                .'|(*:684)'
                                .'|/(?'
                                    .'|new(*:699)'
                                    .'|filter(*:713)'
                                .')'
                            .')'
                        .')'
                        .'|(*:724)'
                    .')'
                .')'
                .'|/matiereclasse/(?'
                    .'|front(?:/([^/]++))?(*:771)'
                    .'|([^/]++)(?'
                        .'|(*:790)'
                        .'|/edit(*:803)'
                        .'|(*:811)'
                    .')'
                    .'|classe/([^/]++)/matieres(?'
                        .'|(*:847)'
                        .'|/ajax(*:860)'
                    .')'
                .')'
                .'|/objectif/sante/([^/]++)(?'
                    .'|(*:897)'
                    .'|/(?'
                        .'|edit(*:913)'
                        .'|suivis(?'
                            .'|(*:930)'
                            .'|/(?'
                                .'|new(*:945)'
                                .'|([^/]++)/(?'
                                    .'|edit(*:969)'
                                    .'|delete(*:983)'
                                .')'
                                .'|filter(*:998)'
                            .')'
                        .')'
                    .')'
                    .'|(*:1009)'
                .')'
                .'|/preference/alerte/([^/]++)(?'
                    .'|(*:1049)'
                    .'|/edit(*:1063)'
                    .'|(*:1072)'
                .')'
                .'|/groupe/([^/]++)/proposition(?'
                    .'|(*:1113)'
                    .'|/(?'
                        .'|ajax/filter(*:1137)'
                        .'|new(*:1149)'
                        .'|([^/]++)(?'
                            .'|(*:1169)'
                            .'|/edit(*:1183)'
                            .'|(*:1192)'
                        .')'
                    .')'
                .')'
                .'|/admin/quiz/(?'
                    .'|matiere/([^/]++)(?'
                        .'|(*:1238)'
                        .'|/(?'
                            .'|new(*:1254)'
                            .'|stats(*:1268)'
                        .')'
                    .')'
                    .'|question/([^/]++)/(?'
                        .'|edit(*:1304)'
                        .'|delete(*:1319)'
                    .')'
                .')'
                .'|/quiz/matiere/([^/]++)(*:1352)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1397)'
                .'|/s(?'
                    .'|alle/([^/]++)(?'
                        .'|(*:1427)'
                        .'|/edit(*:1441)'
                        .'|(*:1450)'
                    .')'
                    .'|eance/(?'
                        .'|by\\-classe/(\\d+)(*:1485)'
                        .'|(\\d+)(*:1499)'
                        .'|(\\d+)/edit(*:1518)'
                        .'|(\\d+)(*:1532)'
                    .')'
                .')'
                .'|/tache/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:1572)'
                            .'|action(?'
                                .'|(*:1590)'
                            .')'
                        .')'
                        .'|(*:1601)'
                    .')'
                    .'|search\\-by\\-(?'
                        .'|title(*:1631)'
                        .'|email(*:1645)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|edit/([^/]++)(*:1678)'
                    .'|d(?'
                        .'|elete/([^/]++)(*:1705)'
                        .'|ashboard/(?'
                            .'|task/([^/]++)/(?'
                                .'|edit(*:1747)'
                                .'|show(*:1760)'
                            .')'
                            .'|FrontOffice/(?'
                                .'|show/([^/]++)(*:1798)'
                                .'|edit/([^/]++)(*:1820)'
                                .'|add/([^/]++)(*:1841)'
                                .'|detail/([^/]++)/([^/]++)(*:1874)'
                            .')'
                            .'|preference/([^/]++)/set\\-active(*:1915)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        221 => [[['_route' => 'app_classe_show', '_controller' => 'App\\Controller\\ClasseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        243 => [[['_route' => 'app_classe_front_show', '_controller' => 'App\\Controller\\ClasseController::frontShow'], ['id'], ['GET' => 0], null, false, true, null]],
        270 => [[['_route' => 'app_classe_edit', '_controller' => 'App\\Controller\\ClasseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        283 => [[['_route' => 'app_classe_users', '_controller' => 'App\\Controller\\ClasseController::users'], ['id'], ['GET' => 0], null, false, false, null]],
        302 => [[['_route' => 'app_classe_audit', '_controller' => 'App\\Controller\\ClasseController::audit'], ['id'], ['GET' => 0], null, false, false, null]],
        314 => [[['_route' => 'app_classe_audit_api', '_controller' => 'App\\Controller\\ClasseController::auditApi'], ['id'], ['GET' => 0], null, false, false, null]],
        329 => [[['_route' => 'app_classe_archive', '_controller' => 'App\\Controller\\ClasseController::archive'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        349 => [[['_route' => 'app_classe_suggestions', '_controller' => 'App\\Controller\\ClasseController::suggestions'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        358 => [[['_route' => 'app_classe_delete', '_controller' => 'App\\Controller\\ClasseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        387 => [[['_route' => 'app_classe_stats', '_controller' => 'App\\Controller\\ClasseController::stats'], ['id'], ['GET' => 0], null, false, false, null]],
        420 => [[['_route' => 'app_classe_export_csv', '_controller' => 'App\\Controller\\ClasseController::exportCsv'], ['id'], ['GET' => 0], null, false, false, null]],
        431 => [[['_route' => 'app_classe_export_pdf', '_controller' => 'App\\Controller\\ClasseController::exportPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        448 => [[['_route' => 'app_classe_generate', '_controller' => 'App\\Controller\\ClasseController::generate'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        506 => [[['_route' => 'front_proposition_reunion_new', '_controller' => 'App\\Controller\\FrontGroupeProjetController::newProposition'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        519 => [[['_route' => 'front_groupe_projet_show', '_controller' => 'App\\Controller\\FrontGroupeProjetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        537 => [[['_route' => 'front_groupe_projet_edit', '_controller' => 'App\\Controller\\FrontGroupeProjetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        557 => [[['_route' => 'front_groupe_projet_delete', '_controller' => 'App\\Controller\\FrontGroupeProjetController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        585 => [[['_route' => 'front_proposition_reunion_show', '_controller' => 'App\\Controller\\FrontGroupeProjetController::showProposition'], ['id'], ['GET' => 0], null, false, true, null]],
        603 => [[['_route' => 'front_proposition_reunion_edit', '_controller' => 'App\\Controller\\FrontGroupeProjetController::editProposition'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        623 => [[['_route' => 'front_proposition_reunion_delete', '_controller' => 'App\\Controller\\FrontGroupeProjetController::deleteProposition'], ['id'], ['POST' => 0], null, false, false, null]],
        667 => [[['_route' => 'front_objectif_sante_edit', '_controller' => 'App\\Controller\\FrontObjectifSanteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        684 => [[['_route' => 'front_objectif_suivis', '_controller' => 'App\\Controller\\FrontSuiviBienEtreController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        699 => [[['_route' => 'front_suivi_new', '_controller' => 'App\\Controller\\FrontSuiviBienEtreController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        713 => [[['_route' => 'front_suivi_filter', '_controller' => 'App\\Controller\\FrontSuiviBienEtreController::filter'], ['id'], ['GET' => 0], null, false, false, null]],
        724 => [
            [['_route' => 'front_objectif_sante_delete', '_controller' => 'App\\Controller\\FrontObjectifSanteController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'front_objectif_sante_show', '_controller' => 'App\\Controller\\FrontObjectifSanteController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        771 => [[['_route' => 'app_matiere_classe_front_index', 'id' => null, '_controller' => 'App\\Controller\\MatiereClasseController::frontIndex'], ['id'], ['GET' => 0], null, false, true, null]],
        790 => [[['_route' => 'app_matiere_classe_show', '_controller' => 'App\\Controller\\MatiereClasseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        803 => [[['_route' => 'app_matiere_classe_edit', '_controller' => 'App\\Controller\\MatiereClasseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        811 => [[['_route' => 'app_matiere_classe_delete', '_controller' => 'App\\Controller\\MatiereClasseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        847 => [[['_route' => 'app_matiere_classe_by_classe', '_controller' => 'App\\Controller\\MatiereClasseController::byClasse'], ['id'], null, null, false, false, null]],
        860 => [[['_route' => 'app_matiere_classe_by_classe_ajax', '_controller' => 'App\\Controller\\MatiereClasseController::byClasseAjax'], ['id'], ['GET' => 0], null, false, false, null]],
        897 => [[['_route' => 'app_objectif_sante_show', '_controller' => 'App\\Controller\\ObjectifSanteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        913 => [[['_route' => 'app_objectif_sante_edit', '_controller' => 'App\\Controller\\ObjectifSanteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        930 => [[['_route' => 'app_objectif_suivis', '_controller' => 'App\\Controller\\ObjectifSuiviBienEtreController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        945 => [[['_route' => 'app_objectif_suivi_new', '_controller' => 'App\\Controller\\ObjectifSuiviBienEtreController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        969 => [[['_route' => 'app_objectif_suivi_edit', '_controller' => 'App\\Controller\\ObjectifSuiviBienEtreController::edit'], ['id', 'suiviId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        983 => [[['_route' => 'app_objectif_suivi_delete', '_controller' => 'App\\Controller\\ObjectifSuiviBienEtreController::delete'], ['id', 'suiviId'], ['POST' => 0], null, false, false, null]],
        998 => [[['_route' => 'app_objectif_suivis_filter', '_controller' => 'App\\Controller\\ObjectifSuiviBienEtreController::filter'], ['id'], ['GET' => 0], null, false, false, null]],
        1009 => [[['_route' => 'app_objectif_sante_delete', '_controller' => 'App\\Controller\\ObjectifSanteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1049 => [[['_route' => 'app_preference_alerte_show', '_controller' => 'App\\Controller\\PreferenceAlerteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1063 => [[['_route' => 'app_preference_alerte_edit', '_controller' => 'App\\Controller\\PreferenceAlerteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1072 => [[['_route' => 'app_preference_alerte_delete', '_controller' => 'App\\Controller\\PreferenceAlerteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1113 => [[['_route' => 'app_proposition_reunion_index', '_controller' => 'App\\Controller\\PropositionReunionController::index'], ['groupeId'], ['GET' => 0], null, true, false, null]],
        1137 => [[['_route' => 'app_proposition_reunion_ajax_filter', '_controller' => 'App\\Controller\\PropositionReunionController::ajaxFilter'], ['groupeId'], ['GET' => 0], null, false, false, null]],
        1149 => [[['_route' => 'app_proposition_reunion_new', '_controller' => 'App\\Controller\\PropositionReunionController::new'], ['groupeId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1169 => [[['_route' => 'app_proposition_reunion_show', '_controller' => 'App\\Controller\\PropositionReunionController::show'], ['groupeId', 'id'], ['GET' => 0], null, false, true, null]],
        1183 => [[['_route' => 'app_proposition_reunion_edit', '_controller' => 'App\\Controller\\PropositionReunionController::edit'], ['groupeId', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1192 => [[['_route' => 'app_proposition_reunion_delete', '_controller' => 'App\\Controller\\PropositionReunionController::delete'], ['groupeId', 'id'], ['POST' => 0], null, false, true, null]],
        1238 => [[['_route' => 'app_admin_quiz_matiere', '_controller' => 'App\\Controller\\QuizAdminController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1254 => [[['_route' => 'app_admin_quiz_new', '_controller' => 'App\\Controller\\QuizAdminController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1268 => [[['_route' => 'app_admin_quiz_matiere_stats', '_controller' => 'App\\Controller\\QuizAdminController::stats'], ['id'], ['GET' => 0], null, false, false, null]],
        1304 => [[['_route' => 'app_admin_quiz_edit', '_controller' => 'App\\Controller\\QuizAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1319 => [[['_route' => 'app_admin_quiz_delete', '_controller' => 'App\\Controller\\QuizAdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1352 => [[['_route' => 'app_quiz_matiere', '_controller' => 'App\\Controller\\QuizController::quizForMatiere'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1397 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1427 => [[['_route' => 'app_salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1441 => [[['_route' => 'app_salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1450 => [[['_route' => 'app_salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1485 => [[['_route' => 'app_seance_by_classe', '_controller' => 'App\\Controller\\SeanceController::showSeanceByClasse'], ['id'], ['GET' => 0], null, false, true, null]],
        1499 => [[['_route' => 'app_seance_show', '_controller' => 'App\\Controller\\SeanceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1518 => [[['_route' => 'app_seance_edit', '_controller' => 'App\\Controller\\SeanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1532 => [[['_route' => 'app_seance_delete', '_controller' => 'App\\Controller\\SeanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1572 => [[['_route' => 'app_tache_edit', '_controller' => 'App\\Controller\\TacheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1590 => [
            [['_route' => 'app_tache_action', '_controller' => 'App\\Controller\\TacheController::action'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'app_tache_action_user', '_controller' => 'App\\Controller\\TacheController::actionUser'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        1601 => [
            [['_route' => 'app_tache_show', '_controller' => 'App\\Controller\\TacheController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_tache_delete', '_controller' => 'App\\Controller\\TacheController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1631 => [[['_route' => 'app_tache_search_by_title', '_controller' => 'App\\Controller\\TacheController::searchByTitle'], [], ['GET' => 0], null, false, false, null]],
        1645 => [[['_route' => 'app_tache_search_by_email', '_controller' => 'App\\Controller\\TacheController::searchByEmail'], [], ['GET' => 0], null, false, false, null]],
        1678 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, true, null]],
        1705 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1747 => [[['_route' => 'app_task_edit', '_controller' => 'App\\Controller\\UserController::editTask'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1760 => [[['_route' => 'app_task_show', '_controller' => 'App\\Controller\\UserController::showTask'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1798 => [[['_route' => 'front_preference_alerte_show', '_controller' => 'App\\Controller\\UserController::showPreferencesbyUser'], ['id'], ['GET' => 0], null, false, true, null]],
        1820 => [[['_route' => 'front_preference_alerte_edit', '_controller' => 'App\\Controller\\UserController::editPreferencesbyUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1841 => [[['_route' => 'front_preference_alerte_add', '_controller' => 'App\\Controller\\UserController::addPreferencesbyUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1874 => [[['_route' => 'front_preference_alerte_detail', '_controller' => 'App\\Controller\\UserController::detail'], ['userId', 'preferenceId'], ['GET' => 0], null, false, true, null]],
        1915 => [
            [['_route' => 'app_preference_set_active', '_controller' => 'App\\Controller\\UserController::setActive'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
