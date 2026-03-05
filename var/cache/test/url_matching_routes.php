<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/classe/(?'
                    .'|([^/]++)(*:26)'
                    .'|front/([^/]++)(*:47)'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:73)'
                            .'|users(*:85)'
                            .'|a(?'
                                .'|udit(?'
                                    .'|(*:103)'
                                    .'|/api(*:115)'
                                .')'
                                .'|rchive(*:130)'
                            .')'
                            .'|suggestions(*:150)'
                        .')'
                        .'|(*:159)'
                    .')'
                    .'|front/([^/]++)/stats(*:188)'
                    .'|([^/]++)/(?'
                        .'|export/(?'
                            .'|csv(*:221)'
                            .'|pdf(*:232)'
                        .')'
                        .'|generate(*:249)'
                    .')'
                .')'
                .'|/front/(?'
                    .'|groupe/projet/(?'
                        .'|(\\d+)/proposition/new(*:307)'
                        .'|(\\d+)(*:320)'
                        .'|(\\d+)/edit(*:338)'
                        .'|(\\d+)/delete(*:358)'
                        .'|proposition/(?'
                            .'|(\\d+)(*:386)'
                            .'|(\\d+)/edit(*:404)'
                            .'|(\\d+)/delete(*:424)'
                        .')'
                    .')'
                    .'|objectif/sante/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:468)'
                            .'|suivis(?'
                                .'|(*:485)'
                                .'|/(?'
                                    .'|new(*:500)'
                                    .'|filter(*:514)'
                                .')'
                            .')'
                        .')'
                        .'|(*:525)'
                    .')'
                .')'
                .'|/matiereclasse/(?'
                    .'|front(?:/([^/]++))?(*:572)'
                    .'|([^/]++)(?'
                        .'|(*:591)'
                        .'|/edit(*:604)'
                        .'|(*:612)'
                    .')'
                    .'|classe/([^/]++)/matieres(?'
                        .'|(*:648)'
                        .'|/ajax(*:661)'
                    .')'
                .')'
                .'|/objectif/sante/([^/]++)(?'
                    .'|(*:698)'
                    .'|/(?'
                        .'|edit(*:714)'
                        .'|suivis(?'
                            .'|(*:731)'
                            .'|/(?'
                                .'|new(*:746)'
                                .'|([^/]++)/(?'
                                    .'|edit(*:770)'
                                    .'|delete(*:784)'
                                .')'
                                .'|filter(*:799)'
                            .')'
                        .')'
                    .')'
                    .'|(*:810)'
                .')'
                .'|/preference/alerte/([^/]++)(?'
                    .'|(*:849)'
                    .'|/edit(*:862)'
                    .'|(*:870)'
                .')'
                .'|/groupe/([^/]++)/proposition(?'
                    .'|(*:910)'
                    .'|/(?'
                        .'|ajax/filter(*:933)'
                        .'|new(*:944)'
                        .'|([^/]++)(?'
                            .'|(*:963)'
                            .'|/edit(*:976)'
                            .'|(*:984)'
                        .')'
                    .')'
                .')'
                .'|/admin/quiz/(?'
                    .'|matiere/([^/]++)(?'
                        .'|(*:1029)'
                        .'|/(?'
                            .'|new(*:1045)'
                            .'|stats(*:1059)'
                        .')'
                    .')'
                    .'|question/([^/]++)/(?'
                        .'|edit(*:1095)'
                        .'|delete(*:1110)'
                    .')'
                .')'
                .'|/quiz/matiere/([^/]++)(*:1143)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1188)'
                .'|/s(?'
                    .'|alle/([^/]++)(?'
                        .'|(*:1218)'
                        .'|/edit(*:1232)'
                        .'|(*:1241)'
                    .')'
                    .'|eance/(?'
                        .'|by\\-classe/(\\d+)(*:1276)'
                        .'|(\\d+)(*:1290)'
                        .'|(\\d+)/edit(*:1309)'
                        .'|(\\d+)(*:1323)'
                    .')'
                .')'
                .'|/tache/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:1363)'
                            .'|action(?'
                                .'|(*:1381)'
                            .')'
                        .')'
                        .'|(*:1392)'
                    .')'
                    .'|search\\-by\\-(?'
                        .'|title(*:1422)'
                        .'|email(*:1436)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|edit/([^/]++)(*:1469)'
                    .'|d(?'
                        .'|elete/([^/]++)(*:1496)'
                        .'|ashboard/(?'
                            .'|task/([^/]++)/(?'
                                .'|edit(*:1538)'
                                .'|show(*:1551)'
                            .')'
                            .'|FrontOffice/(?'
                                .'|show/([^/]++)(*:1589)'
                                .'|edit/([^/]++)(*:1611)'
                                .'|add/([^/]++)(*:1632)'
                                .'|detail/([^/]++)/([^/]++)(*:1665)'
                            .')'
                            .'|preference/([^/]++)/set\\-active(*:1706)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'app_classe_show', '_controller' => 'App\\Controller\\ClasseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        47 => [[['_route' => 'app_classe_front_show', '_controller' => 'App\\Controller\\ClasseController::frontShow'], ['id'], ['GET' => 0], null, false, true, null]],
        73 => [[['_route' => 'app_classe_edit', '_controller' => 'App\\Controller\\ClasseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        85 => [[['_route' => 'app_classe_users', '_controller' => 'App\\Controller\\ClasseController::users'], ['id'], ['GET' => 0], null, false, false, null]],
        103 => [[['_route' => 'app_classe_audit', '_controller' => 'App\\Controller\\ClasseController::audit'], ['id'], ['GET' => 0], null, false, false, null]],
        115 => [[['_route' => 'app_classe_audit_api', '_controller' => 'App\\Controller\\ClasseController::auditApi'], ['id'], ['GET' => 0], null, false, false, null]],
        130 => [[['_route' => 'app_classe_archive', '_controller' => 'App\\Controller\\ClasseController::archive'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        150 => [[['_route' => 'app_classe_suggestions', '_controller' => 'App\\Controller\\ClasseController::suggestions'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        159 => [[['_route' => 'app_classe_delete', '_controller' => 'App\\Controller\\ClasseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        188 => [[['_route' => 'app_classe_stats', '_controller' => 'App\\Controller\\ClasseController::stats'], ['id'], ['GET' => 0], null, false, false, null]],
        221 => [[['_route' => 'app_classe_export_csv', '_controller' => 'App\\Controller\\ClasseController::exportCsv'], ['id'], ['GET' => 0], null, false, false, null]],
        232 => [[['_route' => 'app_classe_export_pdf', '_controller' => 'App\\Controller\\ClasseController::exportPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        249 => [[['_route' => 'app_classe_generate', '_controller' => 'App\\Controller\\ClasseController::generate'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        307 => [[['_route' => 'front_proposition_reunion_new', '_controller' => 'App\\Controller\\FrontGroupeProjetController::newProposition'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        320 => [[['_route' => 'front_groupe_projet_show', '_controller' => 'App\\Controller\\FrontGroupeProjetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        338 => [[['_route' => 'front_groupe_projet_edit', '_controller' => 'App\\Controller\\FrontGroupeProjetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        358 => [[['_route' => 'front_groupe_projet_delete', '_controller' => 'App\\Controller\\FrontGroupeProjetController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        386 => [[['_route' => 'front_proposition_reunion_show', '_controller' => 'App\\Controller\\FrontGroupeProjetController::showProposition'], ['id'], ['GET' => 0], null, false, true, null]],
        404 => [[['_route' => 'front_proposition_reunion_edit', '_controller' => 'App\\Controller\\FrontGroupeProjetController::editProposition'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        424 => [[['_route' => 'front_proposition_reunion_delete', '_controller' => 'App\\Controller\\FrontGroupeProjetController::deleteProposition'], ['id'], ['POST' => 0], null, false, false, null]],
        468 => [[['_route' => 'front_objectif_sante_edit', '_controller' => 'App\\Controller\\FrontObjectifSanteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        485 => [[['_route' => 'front_objectif_suivis', '_controller' => 'App\\Controller\\FrontSuiviBienEtreController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        500 => [[['_route' => 'front_suivi_new', '_controller' => 'App\\Controller\\FrontSuiviBienEtreController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        514 => [[['_route' => 'front_suivi_filter', '_controller' => 'App\\Controller\\FrontSuiviBienEtreController::filter'], ['id'], ['GET' => 0], null, false, false, null]],
        525 => [
            [['_route' => 'front_objectif_sante_delete', '_controller' => 'App\\Controller\\FrontObjectifSanteController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'front_objectif_sante_show', '_controller' => 'App\\Controller\\FrontObjectifSanteController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        572 => [[['_route' => 'app_matiere_classe_front_index', 'id' => null, '_controller' => 'App\\Controller\\MatiereClasseController::frontIndex'], ['id'], ['GET' => 0], null, false, true, null]],
        591 => [[['_route' => 'app_matiere_classe_show', '_controller' => 'App\\Controller\\MatiereClasseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        604 => [[['_route' => 'app_matiere_classe_edit', '_controller' => 'App\\Controller\\MatiereClasseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        612 => [[['_route' => 'app_matiere_classe_delete', '_controller' => 'App\\Controller\\MatiereClasseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        648 => [[['_route' => 'app_matiere_classe_by_classe', '_controller' => 'App\\Controller\\MatiereClasseController::byClasse'], ['id'], null, null, false, false, null]],
        661 => [[['_route' => 'app_matiere_classe_by_classe_ajax', '_controller' => 'App\\Controller\\MatiereClasseController::byClasseAjax'], ['id'], ['GET' => 0], null, false, false, null]],
        698 => [[['_route' => 'app_objectif_sante_show', '_controller' => 'App\\Controller\\ObjectifSanteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        714 => [[['_route' => 'app_objectif_sante_edit', '_controller' => 'App\\Controller\\ObjectifSanteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        731 => [[['_route' => 'app_objectif_suivis', '_controller' => 'App\\Controller\\ObjectifSuiviBienEtreController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        746 => [[['_route' => 'app_objectif_suivi_new', '_controller' => 'App\\Controller\\ObjectifSuiviBienEtreController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        770 => [[['_route' => 'app_objectif_suivi_edit', '_controller' => 'App\\Controller\\ObjectifSuiviBienEtreController::edit'], ['id', 'suiviId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        784 => [[['_route' => 'app_objectif_suivi_delete', '_controller' => 'App\\Controller\\ObjectifSuiviBienEtreController::delete'], ['id', 'suiviId'], ['POST' => 0], null, false, false, null]],
        799 => [[['_route' => 'app_objectif_suivis_filter', '_controller' => 'App\\Controller\\ObjectifSuiviBienEtreController::filter'], ['id'], ['GET' => 0], null, false, false, null]],
        810 => [[['_route' => 'app_objectif_sante_delete', '_controller' => 'App\\Controller\\ObjectifSanteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        849 => [[['_route' => 'app_preference_alerte_show', '_controller' => 'App\\Controller\\PreferenceAlerteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        862 => [[['_route' => 'app_preference_alerte_edit', '_controller' => 'App\\Controller\\PreferenceAlerteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        870 => [[['_route' => 'app_preference_alerte_delete', '_controller' => 'App\\Controller\\PreferenceAlerteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        910 => [[['_route' => 'app_proposition_reunion_index', '_controller' => 'App\\Controller\\PropositionReunionController::index'], ['groupeId'], ['GET' => 0], null, true, false, null]],
        933 => [[['_route' => 'app_proposition_reunion_ajax_filter', '_controller' => 'App\\Controller\\PropositionReunionController::ajaxFilter'], ['groupeId'], ['GET' => 0], null, false, false, null]],
        944 => [[['_route' => 'app_proposition_reunion_new', '_controller' => 'App\\Controller\\PropositionReunionController::new'], ['groupeId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        963 => [[['_route' => 'app_proposition_reunion_show', '_controller' => 'App\\Controller\\PropositionReunionController::show'], ['groupeId', 'id'], ['GET' => 0], null, false, true, null]],
        976 => [[['_route' => 'app_proposition_reunion_edit', '_controller' => 'App\\Controller\\PropositionReunionController::edit'], ['groupeId', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        984 => [[['_route' => 'app_proposition_reunion_delete', '_controller' => 'App\\Controller\\PropositionReunionController::delete'], ['groupeId', 'id'], ['POST' => 0], null, false, true, null]],
        1029 => [[['_route' => 'app_admin_quiz_matiere', '_controller' => 'App\\Controller\\QuizAdminController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1045 => [[['_route' => 'app_admin_quiz_new', '_controller' => 'App\\Controller\\QuizAdminController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1059 => [[['_route' => 'app_admin_quiz_matiere_stats', '_controller' => 'App\\Controller\\QuizAdminController::stats'], ['id'], ['GET' => 0], null, false, false, null]],
        1095 => [[['_route' => 'app_admin_quiz_edit', '_controller' => 'App\\Controller\\QuizAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1110 => [[['_route' => 'app_admin_quiz_delete', '_controller' => 'App\\Controller\\QuizAdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1143 => [[['_route' => 'app_quiz_matiere', '_controller' => 'App\\Controller\\QuizController::quizForMatiere'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1188 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1218 => [[['_route' => 'app_salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1232 => [[['_route' => 'app_salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1241 => [[['_route' => 'app_salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1276 => [[['_route' => 'app_seance_by_classe', '_controller' => 'App\\Controller\\SeanceController::showSeanceByClasse'], ['id'], ['GET' => 0], null, false, true, null]],
        1290 => [[['_route' => 'app_seance_show', '_controller' => 'App\\Controller\\SeanceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1309 => [[['_route' => 'app_seance_edit', '_controller' => 'App\\Controller\\SeanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1323 => [[['_route' => 'app_seance_delete', '_controller' => 'App\\Controller\\SeanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1363 => [[['_route' => 'app_tache_edit', '_controller' => 'App\\Controller\\TacheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1381 => [
            [['_route' => 'app_tache_action', '_controller' => 'App\\Controller\\TacheController::action'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'app_tache_action_user', '_controller' => 'App\\Controller\\TacheController::actionUser'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        1392 => [
            [['_route' => 'app_tache_show', '_controller' => 'App\\Controller\\TacheController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_tache_delete', '_controller' => 'App\\Controller\\TacheController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1422 => [[['_route' => 'app_tache_search_by_title', '_controller' => 'App\\Controller\\TacheController::searchByTitle'], [], ['GET' => 0], null, false, false, null]],
        1436 => [[['_route' => 'app_tache_search_by_email', '_controller' => 'App\\Controller\\TacheController::searchByEmail'], [], ['GET' => 0], null, false, false, null]],
        1469 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, true, null]],
        1496 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1538 => [[['_route' => 'app_task_edit', '_controller' => 'App\\Controller\\UserController::editTask'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1551 => [[['_route' => 'app_task_show', '_controller' => 'App\\Controller\\UserController::showTask'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1589 => [[['_route' => 'front_preference_alerte_show', '_controller' => 'App\\Controller\\UserController::showPreferencesbyUser'], ['id'], ['GET' => 0], null, false, true, null]],
        1611 => [[['_route' => 'front_preference_alerte_edit', '_controller' => 'App\\Controller\\UserController::editPreferencesbyUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1632 => [[['_route' => 'front_preference_alerte_add', '_controller' => 'App\\Controller\\UserController::addPreferencesbyUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1665 => [[['_route' => 'front_preference_alerte_detail', '_controller' => 'App\\Controller\\UserController::detail'], ['userId', 'preferenceId'], ['GET' => 0], null, false, true, null]],
        1706 => [
            [['_route' => 'app_preference_set_active', '_controller' => 'App\\Controller\\UserController::setActive'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
