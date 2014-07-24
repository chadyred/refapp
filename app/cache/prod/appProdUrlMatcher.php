<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/')) {
            // _assetic_989e337
            if ($pathinfo === '/css/989e337.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '989e337',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_989e337',);
            }

            // _assetic_989e337_0
            if ($pathinfo === '/css/989e337_refapp_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '989e337',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_989e337_0',);
            }

            // _assetic_989e337_1
            if ($pathinfo === '/css/989e337_demo_page_2.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '989e337',  'pos' => '1',  '_format' => 'css',  '_route' => '_assetic_989e337_1',);
            }

            // _assetic_989e337_2
            if ($pathinfo === '/css/989e337_demo_table_3.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '989e337',  'pos' => '2',  '_format' => 'css',  '_route' => '_assetic_989e337_2',);
            }

            // _assetic_989e337_3
            if ($pathinfo === '/css/989e337_demo_table_jui_4.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '989e337',  'pos' => '3',  '_format' => 'css',  '_route' => '_assetic_989e337_3',);
            }

            // _assetic_989e337_4
            if ($pathinfo === '/css/989e337_jquery-ui-1.8.4.custom_5.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '989e337',  'pos' => '4',  '_format' => 'css',  '_route' => '_assetic_989e337_4',);
            }

            // _assetic_989e337_5
            if ($pathinfo === '/css/989e337_jquery-ui_6.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '989e337',  'pos' => '5',  '_format' => 'css',  '_route' => '_assetic_989e337_5',);
            }

            // _assetic_989e337_6
            if ($pathinfo === '/css/989e337_listeAppli_7.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '989e337',  'pos' => '6',  '_format' => 'css',  '_route' => '_assetic_989e337_6',);
            }

            // _assetic_989e337_7
            if ($pathinfo === '/css/989e337_listeEnv_8.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '989e337',  'pos' => '7',  '_format' => 'css',  '_route' => '_assetic_989e337_7',);
            }

            // _assetic_989e337_8
            if ($pathinfo === '/css/989e337_listeDoc_9.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '989e337',  'pos' => '8',  '_format' => 'css',  '_route' => '_assetic_989e337_8',);
            }

            // _assetic_989e337_9
            if ($pathinfo === '/css/989e337_listeServ_10.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '989e337',  'pos' => '9',  '_format' => 'css',  '_route' => '_assetic_989e337_9',);
            }

            // _assetic_989e337_10
            if ($pathinfo === '/css/989e337_tipTip_11.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '989e337',  'pos' => '10',  '_format' => 'css',  '_route' => '_assetic_989e337_10',);
            }

            // _assetic_98ee94c
            if ($pathinfo === '/js/98ee94c.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_98ee94c',);
            }

            // _assetic_98ee94c_0
            if ($pathinfo === '/js/98ee94c_jquery_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => '0',  '_format' => 'js',  '_route' => '_assetic_98ee94c_0',);
            }

            // _assetic_98ee94c_1
            if ($pathinfo === '/js/98ee94c_menu_2.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => '1',  '_format' => 'js',  '_route' => '_assetic_98ee94c_1',);
            }

            // _assetic_98ee94c_2
            if ($pathinfo === '/js/98ee94c_formCollectionDocumentation_3.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => '2',  '_format' => 'js',  '_route' => '_assetic_98ee94c_2',);
            }

            // _assetic_98ee94c_3
            if ($pathinfo === '/js/98ee94c_formCollectionEnvironnement_4.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => '3',  '_format' => 'js',  '_route' => '_assetic_98ee94c_3',);
            }

            // _assetic_98ee94c_4
            if ($pathinfo === '/js/98ee94c_formEditeur_5.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => '4',  '_format' => 'js',  '_route' => '_assetic_98ee94c_4',);
            }

            // _assetic_98ee94c_5
            if ($pathinfo === '/js/98ee94c_jquery_6.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => '5',  '_format' => 'js',  '_route' => '_assetic_98ee94c_5',);
            }

            // _assetic_98ee94c_6
            if ($pathinfo === '/js/98ee94c_jquery.dataTables_7.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => '6',  '_format' => 'js',  '_route' => '_assetic_98ee94c_6',);
            }

            // _assetic_98ee94c_7
            if ($pathinfo === '/js/98ee94c_jquery-ui-tabs_8.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => '7',  '_format' => 'js',  '_route' => '_assetic_98ee94c_7',);
            }

            // _assetic_98ee94c_8
            if ($pathinfo === '/js/98ee94c_jquery-ui_9.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => '8',  '_format' => 'js',  '_route' => '_assetic_98ee94c_8',);
            }

            // _assetic_98ee94c_9
            if ($pathinfo === '/js/98ee94c_datepicker-input_10.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => '9',  '_format' => 'js',  '_route' => '_assetic_98ee94c_9',);
            }

            // _assetic_98ee94c_10
            if ($pathinfo === '/js/98ee94c_uidatepicker-fr_11.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => '10',  '_format' => 'js',  '_route' => '_assetic_98ee94c_10',);
            }

            // _assetic_98ee94c_11
            if ($pathinfo === '/js/98ee94c_jquery.tipTip_12.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => '11',  '_format' => 'js',  '_route' => '_assetic_98ee94c_11',);
            }

            // _assetic_98ee94c_12
            if ($pathinfo === '/js/98ee94c_jquery.tipTip.minified_13.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => '12',  '_format' => 'js',  '_route' => '_assetic_98ee94c_12',);
            }

            // _assetic_98ee94c_13
            if ($pathinfo === '/js/98ee94c_jquery-dynamic-form_14.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '98ee94c',  'pos' => '13',  '_format' => 'js',  '_route' => '_assetic_98ee94c_13',);
            }

        }

        if (0 === strpos($pathinfo, '/')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'melon\\RefappBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            // _index
            if ($pathinfo === '/refapp/index') {
                return array (  '_controller' => 'melon\\RefappBundle\\Controller\\IndexController::indexAction',  '_route' => '_index',);
            }

            // _favoris
            if ($pathinfo === '/refapp/favoris') {
                return array (  '_controller' => 'melon\\RefappBundle\\Controller\\FavorisController::favorisAction',  '_route' => '_favoris',);
            }

            if (0 === strpos($pathinfo, '/')) {
                // _ficheAppli
                if (0 === strpos($pathinfo, '/refapp/ficheAppli') && preg_match('#^/refapp/ficheAppli/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\ApplicationController::ficheAppliAction',)), array('_route' => '_ficheAppli'));
                }

                // _listeAppli
                if ($pathinfo === '/refapp/listeAppli') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\ApplicationController::listeAppliAction',  '_route' => '_listeAppli',);
                }

                // _rapportObsolescence
                if ($pathinfo === '/refapp/rapportObsolescence') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\ApplicationController::rapportObsolescenceAction',  '_route' => '_rapportObsolescence',);
                }

                // _pdf
                if ($pathinfo === '/refapp/pdf') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\ApplicationController::pdfAction',  '_route' => '_pdf',);
                }

                // _creerAppli
                if ($pathinfo === '/refapp/creerAppli') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\ApplicationController::creerAppliAction',  '_route' => '_creerAppli',);
                }

                // _mesAppli
                if ($pathinfo === '/refapp/mesAppli') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\ApplicationController::mesAppliAction',  '_route' => '_mesAppli',);
                }

                // _rechercheAppli
                if ($pathinfo === '/refapp/rechercheAppli') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\ApplicationController::rechercheAppliAction',  '_route' => '_rechercheAppli',);
                }

                // _nouvelEditeur
                if (0 === strpos($pathinfo, '/refapp/nouvelEditeur') && preg_match('#^/refapp/nouvelEditeur/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\ApplicationController::nouvelEditeurAction',)), array('_route' => '_nouvelEditeur'));
                }

                // _modifierAppli
                if (0 === strpos($pathinfo, '/refapp/modifierAppli') && preg_match('#^/refapp/modifierAppli/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\ApplicationController::modifierAppliAction',)), array('_route' => '_modifierAppli'));
                }

                // _supprimerAppli
                if (0 === strpos($pathinfo, '/refapp/supprimerAppli') && preg_match('#^/refapp/supprimerAppli/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\ApplicationController::supprimerAppliAction',)), array('_route' => '_supprimerAppli'));
                }

            }

            if (0 === strpos($pathinfo, '/')) {
                // _ficheServeur
                if (0 === strpos($pathinfo, '/refapp/ficheServeur') && preg_match('#^/refapp/ficheServeur/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\ServeurController::ficheServeurAction',)), array('_route' => '_ficheServeur'));
                }

                // _listeServeur
                if ($pathinfo === '/refapp/listeServeur') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\ServeurController::listeServeurAction',  '_route' => '_listeServeur',);
                }

                // _creerServeur
                if ($pathinfo === '/refapp/creerServeur') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\ServeurController::creerServeurAction',  '_route' => '_creerServeur',);
                }

                // _rechercheServeur
                if ($pathinfo === '/refapp/rechercheServeur') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\ServeurController::rechercheServeurAction',  '_route' => '_rechercheServeur',);
                }

                // _modifierServeur
                if (0 === strpos($pathinfo, '/refapp/modifierServeur') && preg_match('#^/refapp/modifierServeur/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\ServeurController::modifierServeurAction',)), array('_route' => '_modifierServeur'));
                }

                // _supprimerServeur
                if (0 === strpos($pathinfo, '/refapp/supprimerServeur') && preg_match('#^/refapp/supprimerServeur/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\ServeurController::supprimerServeurAction',)), array('_route' => '_supprimerServeur'));
                }

            }

            if (0 === strpos($pathinfo, '/')) {
                // _administration
                if ($pathinfo === '/refapp/administration') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::administrationAction',  '_route' => '_administration',);
                }

                // _ficheCompetence
                if (0 === strpos($pathinfo, '/refapp/administration/ficheCompetence') && preg_match('#^/refapp/administration/ficheCompetence/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ficheCompetenceAction',)), array('_route' => '_ficheCompetence'));
                }

                // _ficheDirection
                if (0 === strpos($pathinfo, '/refapp/administration/ficheDirection') && preg_match('#^/refapp/administration/ficheDirection/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ficheDirectionAction',)), array('_route' => '_ficheDirection'));
                }

                // _ficheDomaine
                if (0 === strpos($pathinfo, '/refapp/administration/ficheDomaine') && preg_match('#^/refapp/administration/ficheDomaine/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ficheDomaineAction',)), array('_route' => '_ficheDomaine'));
                }

                // _ficheEditeur
                if (0 === strpos($pathinfo, '/refapp/administration/ficheEditeur') && preg_match('#^/refapp/administration/ficheEditeur/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ficheEditeurAction',)), array('_route' => '_ficheEditeur'));
                }

                // _ficheLangage
                if (0 === strpos($pathinfo, '/refapp/administration/ficheLangage') && preg_match('#^/refapp/administration/ficheLangage/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ficheLangageAction',)), array('_route' => '_ficheLangage'));
                }

                // _ficheLogiciel
                if (0 === strpos($pathinfo, '/refapp/administration/ficheLogiciel') && preg_match('#^/refapp/administration/ficheLogiciel/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ficheLogicielAction',)), array('_route' => '_ficheLogiciel'));
                }

                // _ficheOs
                if (0 === strpos($pathinfo, '/refapp/administration/ficheOs') && preg_match('#^/refapp/administration/ficheOs/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ficheOsAction',)), array('_route' => '_ficheOs'));
                }

                // _ficheResponsableDsi
                if (0 === strpos($pathinfo, '/refapp/administration/ficheResponsableDsi') && preg_match('#^/refapp/administration/ficheResponsableDsi/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ficheResponsableDsiAction',)), array('_route' => '_ficheResponsableDsi'));
                }

                // _ficheServeurWeb
                if (0 === strpos($pathinfo, '/refapp/administration/ficheServeurWeb') && preg_match('#^/refapp/administration/ficheServeurWeb/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ficheServeurWebAction',)), array('_route' => '_ficheServeurWeb'));
                }

                // _ficheServiceAppliDsi
                if (0 === strpos($pathinfo, '/refapp/administration/ficheServiceAppliDsi') && preg_match('#^/refapp/administration/ficheServiceAppliDsi/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ficheServiceAppliDsiAction',)), array('_route' => '_ficheServiceAppliDsi'));
                }

                // _ficheSgbd
                if (0 === strpos($pathinfo, '/refapp/administration/ficheSgbd') && preg_match('#^/refapp/administration/ficheSgbd/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ficheSgbdAction',)), array('_route' => '_ficheSgbd'));
                }

                // _ficheTechnologie
                if (0 === strpos($pathinfo, '/refapp/administration/ficheTechnologie') && preg_match('#^/refapp/administration/ficheTechnologie/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ficheTechnologieAction',)), array('_route' => '_ficheTechnologie'));
                }

                // _ajoutCompetence
                if ($pathinfo === '/refapp/administration/ajoutCompetence') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ajoutCompetenceAction',  '_route' => '_ajoutCompetence',);
                }

                // _ajoutResponsableDsi
                if ($pathinfo === '/refapp/administration/ajoutResponsableDsi') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ajoutResponsableDsiAction',  '_route' => '_ajoutResponsableDsi',);
                }

                // _ajoutServiceAppliDsi
                if ($pathinfo === '/refapp/administration/ajoutServiceAppliDsi') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ajoutServiceAppliDsiAction',  '_route' => '_ajoutServiceAppliDsi',);
                }

                // _ajoutEditeur
                if ($pathinfo === '/refapp/administration/ajoutEditeur') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ajoutEditeurAction',  '_route' => '_ajoutEditeur',);
                }

                // _ajoutTechnologie
                if ($pathinfo === '/refapp/administration/ajoutTechnologie') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ajoutTechnologieAction',  '_route' => '_ajoutTechnologie',);
                }

                // _ajoutDomaine
                if ($pathinfo === '/refapp/administration/ajoutDomaine') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ajoutDomaineAction',  '_route' => '_ajoutDomaine',);
                }

                // _ajoutDirection
                if ($pathinfo === '/refapp/administration/ajoutDirection') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ajoutDirectionAction',  '_route' => '_ajoutDirection',);
                }

                // _ajoutOs
                if ($pathinfo === '/refapp/administration/ajoutOs') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ajoutOsAction',  '_route' => '_ajoutOs',);
                }

                // _ajoutServeurWeb
                if ($pathinfo === '/refapp/administration/ajoutServeurWeb') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ajoutServeurWebAction',  '_route' => '_ajoutServeurWeb',);
                }

                // _ajoutSgbd
                if ($pathinfo === '/refapp/administration/ajoutSgbd') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ajoutSgbdAction',  '_route' => '_ajoutSgbd',);
                }

                // _ajoutLogiciel
                if ($pathinfo === '/refapp/administration/ajoutLogiciel') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ajoutLogicielAction',  '_route' => '_ajoutLogiciel',);
                }

                // _ajoutLangage
                if ($pathinfo === '/refapp/administration/ajoutLangage') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::ajoutLangageAction',  '_route' => '_ajoutLangage',);
                }

                // _listCompetence
                if ($pathinfo === '/refapp/administration/listCompetence') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::listCompetenceAction',  '_route' => '_listCompetence',);
                }

                // _listResponsableDsi
                if ($pathinfo === '/refapp/administration/listResponsableDsi') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::listResponsableDsiAction',  '_route' => '_listResponsableDsi',);
                }

                // _listServiceAppliDsi
                if ($pathinfo === '/refapp/administration/listServiceAppliDsi') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::listServiceAppliDsiAction',  '_route' => '_listServiceAppliDsi',);
                }

                // _listEditeur
                if ($pathinfo === '/refapp/administration/listEditeur') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::listEditeurAction',  '_route' => '_listEditeur',);
                }

                // _listTechnologie
                if ($pathinfo === '/refapp/administration/listTechnologie') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::listTechnologieAction',  '_route' => '_listTechnologie',);
                }

                // _listDomaine
                if ($pathinfo === '/refapp/administration/listDomaine') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::listDomaineAction',  '_route' => '_listDomaine',);
                }

                // _listDirection
                if ($pathinfo === '/refapp/administration/listDirection') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::listDirectionAction',  '_route' => '_listDirection',);
                }

                // _listOs
                if ($pathinfo === '/refapp/administration/listOS') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::listOsAction',  '_route' => '_listOs',);
                }

                // _listServeurWeb
                if ($pathinfo === '/refapp/administration/listServeurWeb') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::listServeurWebAction',  '_route' => '_listServeurWeb',);
                }

                // _listSgbd
                if ($pathinfo === '/refapp/administration/listSgbd') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::listSgbdAction',  '_route' => '_listSgbd',);
                }

                // _listLogiciel
                if ($pathinfo === '/refapp/administration/listLogiciel') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::listLogicielAction',  '_route' => '_listLogiciel',);
                }

                // _listLangage
                if ($pathinfo === '/refapp/administration/listLangage') {
                    return array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::listLangageAction',  '_route' => '_listLangage',);
                }

                // _modifierCompetence
                if (0 === strpos($pathinfo, '/refapp/administration/modifierCompetence') && preg_match('#^/refapp/administration/modifierCompetence/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::modifierCompetenceAction',)), array('_route' => '_modifierCompetence'));
                }

                // _modifierDirection
                if (0 === strpos($pathinfo, '/refapp/administration/modifierDirection') && preg_match('#^/refapp/administration/modifierDirection/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::modifierDirectionAction',)), array('_route' => '_modifierDirection'));
                }

                // _modifierDomaine
                if (0 === strpos($pathinfo, '/refapp/administration/modifierDomaine') && preg_match('#^/refapp/administration/modifierDomaine/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::modifierDomaineAction',)), array('_route' => '_modifierDomaine'));
                }

                // _modifierEditeur
                if (0 === strpos($pathinfo, '/refapp/administration/modifierEditeur') && preg_match('#^/refapp/administration/modifierEditeur/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::modifierEditeurAction',)), array('_route' => '_modifierEditeur'));
                }

                // _modifierLangage
                if (0 === strpos($pathinfo, '/refapp/administration/modifierLangage') && preg_match('#^/refapp/administration/modifierLangage/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::modifierLangageAction',)), array('_route' => '_modifierLangage'));
                }

                // _modifierLogiciel
                if (0 === strpos($pathinfo, '/refapp/administration/modifierLogiciel') && preg_match('#^/refapp/administration/modifierLogiciel/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::modifierLogicielAction',)), array('_route' => '_modifierLogiciel'));
                }

                // _modifierOs
                if (0 === strpos($pathinfo, '/refapp/administration/modifierOs') && preg_match('#^/refapp/administration/modifierOs/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::modifierOsAction',)), array('_route' => '_modifierOs'));
                }

                // _modifierResponsableDsi
                if (0 === strpos($pathinfo, '/refapp/administration/modifierResponsableDsi') && preg_match('#^/refapp/administration/modifierResponsableDsi/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::modifierResponsableDsiAction',)), array('_route' => '_modifierResponsableDsi'));
                }

                // _modifierServeurWeb
                if (0 === strpos($pathinfo, '/refapp/administration/modifierServeurWeb') && preg_match('#^/refapp/administration/modifierServeurWeb/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::modifierServeurWebAction',)), array('_route' => '_modifierServeurWeb'));
                }

                // _modifierServiceAppliDsi
                if (0 === strpos($pathinfo, '/refapp/administration/modifierServiceAppliDsi') && preg_match('#^/refapp/administration/modifierServiceAppliDsi/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::modifierServiceAppliDsiWebAction',)), array('_route' => '_modifierServiceAppliDsi'));
                }

                // _modifierSgbd
                if (0 === strpos($pathinfo, '/refapp/administration/modifierSgbd') && preg_match('#^/refapp/administration/modifierSgbd/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::modifierSgbdAction',)), array('_route' => '_modifierSgbd'));
                }

                // _modifierTechnologie
                if (0 === strpos($pathinfo, '/refapp/administration/modifierTechnologie') && preg_match('#^/refapp/administration/modifierTechnologie/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::modifierTechnologieAction',)), array('_route' => '_modifierTechnologie'));
                }

                // _supprimerCompetence
                if (0 === strpos($pathinfo, '/refapp/administration/supprimerCompetence') && preg_match('#^/refapp/administration/supprimerCompetence/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::supprimerCompetenceAction',)), array('_route' => '_supprimerCompetence'));
                }

                // _supprimerDirection
                if (0 === strpos($pathinfo, '/refapp/administration/supprimerDirection') && preg_match('#^/refapp/administration/supprimerDirection/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::supprimerDirectionAction',)), array('_route' => '_supprimerDirection'));
                }

                // _supprimerDomaine
                if (0 === strpos($pathinfo, '/refapp/administration/supprimerDomaine') && preg_match('#^/refapp/administration/supprimerDomaine/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::supprimerDomaineAction',)), array('_route' => '_supprimerDomaine'));
                }

                // _supprimerEditeur
                if (0 === strpos($pathinfo, '/refapp/administration/supprimerEditeur') && preg_match('#^/refapp/administration/supprimerEditeur/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::supprimerEditeurAction',)), array('_route' => '_supprimerEditeur'));
                }

                // _supprimerLangage
                if (0 === strpos($pathinfo, '/refapp/administration/supprimerLangage') && preg_match('#^/refapp/administration/supprimerLangage/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::supprimerLangageAction',)), array('_route' => '_supprimerLangage'));
                }

                // _supprimerLogiciel
                if (0 === strpos($pathinfo, '/refapp/administration/supprimerLogiciel') && preg_match('#^/refapp/administration/supprimerLogiciel/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::supprimerLogicielAction',)), array('_route' => '_supprimerLogiciel'));
                }

                // _supprimerOs
                if (0 === strpos($pathinfo, '/refapp/administration/supprimerOs') && preg_match('#^/refapp/administration/supprimerOs/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::supprimerOsAction',)), array('_route' => '_supprimerOs'));
                }

                // _supprimerResponsableDsi
                if (0 === strpos($pathinfo, '/refapp/administration/supprimerResponsableDsi') && preg_match('#^/refapp/administration/supprimerResponsableDsi/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::supprimerResponsableDsiAction',)), array('_route' => '_supprimerResponsableDsi'));
                }

                // _supprimerServeurWeb
                if (0 === strpos($pathinfo, '/refapp/administration/supprimerServeurWeb') && preg_match('#^/refapp/administration/supprimerServeurWeb/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::supprimerServeurWebAction',)), array('_route' => '_supprimerServeurWeb'));
                }

                // _supprimerServiceAppliDsi
                if (0 === strpos($pathinfo, '/refapp/administration/supprimerServiceAppliDsi') && preg_match('#^/refapp/administration/supprimerServiceAppliDsi/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::supprimerServiceAppliDsiAction',)), array('_route' => '_supprimerServiceAppliDsi'));
                }

                // _supprimerSgbd
                if (0 === strpos($pathinfo, '/refapp/administration/supprimerSgbd') && preg_match('#^/refapp/administration/supprimerSgbd/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::supprimerSgbdAction',)), array('_route' => '_supprimerSgbd'));
                }

                // _supprimerTechnologie
                if (0 === strpos($pathinfo, '/refapp/administration/supprimerTechnologie') && preg_match('#^/refapp/administration/supprimerTechnologie/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'melon\\RefappBundle\\Controller\\AdministrationController::supprimerTechnologieAction',)), array('_route' => '_supprimerTechnologie'));
                }

            }

            // usuario_junta_nueva_pdf
            if ($pathinfo === '/juntas/nueva/pdf') {
                return array (  '_controller' => 'melon\\RefappBundle\\Controller\\ApplicationController::rapportObsolescenceAction',  '_format' => 'pdf',  '_route' => 'usuario_junta_nueva_pdf',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
