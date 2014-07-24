<?php

/* melonRefappBundle::layout.html.twig */
class __TwigTemplate_fd7514369db070f4c70186e4c367e59f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascript' => array($this, 'block_javascript'),
            'header' => array($this, 'block_header'),
            'login' => array($this, 'block_login'),
            'menu_deroulant' => array($this, 'block_menu_deroulant'),
            'contenu' => array($this, 'block_contenu'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
         
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
      \t";
        // line 8
        echo "      \t\t 
\t\t";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "989e337_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_989e337_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/989e337_refapp_1.css");
            // line 22
            echo "\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t\t";
            // asset "989e337_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_989e337_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/989e337_demo_page_2.css");
            // line 22
            echo "\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t\t";
            // asset "989e337_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_989e337_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/989e337_demo_table_3.css");
            // line 22
            echo "\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t\t";
            // asset "989e337_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_989e337_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/989e337_demo_table_jui_4.css");
            // line 22
            echo "\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t\t";
            // asset "989e337_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_989e337_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/989e337_jquery-ui-1.8.4.custom_5.css");
            // line 22
            echo "\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t\t";
            // asset "989e337_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_989e337_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/989e337_jquery-ui_6.css");
            // line 22
            echo "\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t\t";
            // asset "989e337_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_989e337_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/989e337_listeAppli_7.css");
            // line 22
            echo "\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t\t";
            // asset "989e337_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_989e337_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/989e337_listeEnv_8.css");
            // line 22
            echo "\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t\t";
            // asset "989e337_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_989e337_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/989e337_listeDoc_9.css");
            // line 22
            echo "\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t\t";
            // asset "989e337_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_989e337_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/989e337_listeServ_10.css");
            // line 22
            echo "\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t\t";
            // asset "989e337_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_989e337_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/989e337_tipTip_11.css");
            // line 22
            echo "\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t\t";
        } else {
            // asset "989e337"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_989e337") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/989e337.css");
            // line 22
            echo "\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t\t";
        }
        unset($context["asset_url"]);
        // line 25
        echo "      \t";
        // line 26
        echo "\t\t\t\t
\t\t";
        // line 27
        $this->displayBlock('javascript', $context, $blocks);
        // line 48
        echo "\t\t\t\t
\t\t\t
    </head>
    
    <body>
    
    <!------ Block Header ------> 
\t\t";
        // line 55
        $this->displayBlock('header', $context, $blocks);
        // line 100
        echo "\t\t
    <!------ Block Login ------> 
\t    ";
        // line 102
        $this->displayBlock('login', $context, $blocks);
        // line 103
        echo "\t
        
     <!------ Block menu_deroulant ------> \t
        ";
        // line 106
        $this->displayBlock('menu_deroulant', $context, $blocks);
        // line 148
        echo "
    <!------ Block Contenu ------> \t
        ";
        // line 150
        $this->displayBlock('contenu', $context, $blocks);
        // line 153
        echo "\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 156
        echo "\t
               
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Référentiel d'applications - v.2.0";
    }

    // line 27
    public function block_javascript($context, array $blocks = array())
    {
        // line 28
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "98ee94c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c_jquery_1.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
            // asset "98ee94c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c_menu_2.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
            // asset "98ee94c_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c_formCollectionDocumentation_3.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
            // asset "98ee94c_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c_formCollectionEnvironnement_4.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
            // asset "98ee94c_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c_formEditeur_5.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
            // asset "98ee94c_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c_jquery_6.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
            // asset "98ee94c_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c_jquery.dataTables_7.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
            // asset "98ee94c_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c_jquery-ui-tabs_8.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
            // asset "98ee94c_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c_jquery-ui_9.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
            // asset "98ee94c_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c_datepicker-input_10.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
            // asset "98ee94c_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c_uidatepicker-fr_11.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
            // asset "98ee94c_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c_jquery.tipTip_12.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
            // asset "98ee94c_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c_jquery.tipTip.minified_13.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
            // asset "98ee94c_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c_jquery-dynamic-form_14.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
        } else {
            // asset "98ee94c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_98ee94c") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/98ee94c.js");
            // line 43
            echo " 
\t\t
 \t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script> 
\t\t";
        }
        unset($context["asset_url"]);
        // line 47
        echo "\t\t";
    }

    // line 55
    public function block_header($context, array $blocks = array())
    {
        echo "   
\t\t\t<div class=\"banniere\">
\t\t\t\t<h1>Référentiel d'applications - v.2.0</h1>
\t\t\t</div>
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_index"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/logo.png"), "html", null, true);
        echo "\" alt=\"Conseil général de l'Isère\" />  </a>            
\t\t\t</div>
\t\t\t<div class=\"etatConnexion\">
\t\t\t\t\t";
        // line 63
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 64
            echo "\t\t\t\t\t\t";
            echo "Administrateur";
            echo "
\t\t\t\t\t\t<br />\t
\t\t\t\t\t";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 67
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "nom"), "html", null, true);
            echo "\t
\t\t\t\t\t\t";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "prenom"), "html", null, true);
            echo "<br />
\t\t\t\t\t\t";
            // line 69
            echo "Administrateur";
            echo "
\t\t\t\t\t\t<br />
\t\t\t\t\t";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE_SERVICE")) {
            // line 72
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "nom"), "html", null, true);
            echo "\t
\t\t\t\t\t\t";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "prenom"), "html", null, true);
            echo "
\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
            // line 75
            echo "Responsable de service";
            echo "
\t\t\t\t\t\t<br />
\t\t\t\t\t";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE_APPLICATION")) {
            // line 78
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "nom"), "html", null, true);
            echo "\t
\t\t\t\t\t\t";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "prenom"), "html", null, true);
            echo "
\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
            // line 81
            echo "Responsable d'application";
            echo "
\t\t\t\t\t\t<br />
\t\t\t\t\t";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE_EXPLOITATION")) {
            // line 84
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "nom"), "html", null, true);
            echo "\t
\t\t\t\t\t\t";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "prenom"), "html", null, true);
            echo "<br />
\t\t\t\t\t\t";
            // line 86
            echo "Responsable d'exploitation";
            echo "
\t\t\t\t\t\t<br />\t\t\t
\t\t\t\t\t";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_UTILISATEUR")) {
            // line 88
            echo "\t
\t\t\t\t\t\t";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "nom"), "html", null, true);
            echo "\t
\t\t\t\t\t\t";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "prenom"), "html", null, true);
            echo "\t<br />\t\t\t
\t\t\t\t\t\t";
            // line 91
            echo "Utilisateur";
            echo "
\t\t\t\t\t\t<br />
\t\t\t\t\t";
        }
        // line 93
        echo "\t
\t\t\t\t\t\t\t
\t\t\t\t<a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/exit.png"), "html", null, true);
        echo "\" title=\"Déconnection\" alt=\"déconnection\" />
\t\t\t\t</a>\t
\t\t </div>
\t\t";
    }

    // line 102
    public function block_login($context, array $blocks = array())
    {
        echo "   
        ";
    }

    // line 106
    public function block_menu_deroulant($context, array $blocks = array())
    {
        echo "   
             <div class=\"menu_deroulant\">
             \t<ul id=\"menu\">
        \t\t\t<li>
                \t\t<a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_index"), "html", null, true);
        echo "\">Accueil</a>
        \t\t\t</li>       
        \t\t\t<li>
                \t\t<a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_listeAppli"), "html", null, true);
        echo "\">Applications</a>
               \t\t\t<ul>
                                            \t
                        <!-- Permet d'afficher le cas d'utilisation seulement si la personne connecter dispose du ROLE adequate-->
                        \t";
        // line 117
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE_APPLICATION")) {
            // line 118
            echo "                        \t   <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_creerAppli"), "html", null, true);
            echo "\">Créer une application</a></li>    
                        \t";
        }
        // line 119
        echo "\t
                        \t<li><a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_listeAppli"), "html", null, true);
        echo "\">Rechercher une application</a></li>
                        \t   ";
        // line 121
        if ((!$this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 122
            echo "                        \t                   \t
                        \t\t";
            // line 123
            if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE_APPLICATION")) {
                // line 124
                echo "                        \t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_mesAppli"), "html", null, true);
                echo "\">Mes applications</a></li>
                        \t\t";
            }
            // line 125
            echo "\t
                          ";
        }
        // line 126
        echo "\t
                        
                \t\t</ul>
        \t\t\t</li>
        \t\t<li>
        \t\t\t<a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_rechercheServeur"), "html", null, true);
        echo "\">Serveurs</a>
                \t\t<ul>    
                       \t\t";
        // line 133
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE_EXPLOITATION")) {
            // line 134
            echo "                       \t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_creerServeur"), "html", null, true);
            echo "\">Créer un serveur </a></li>
                       \t\t";
        }
        // line 136
        echo "                       \t\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_rechercheServeur"), "html", null, true);
        echo "\">Rechercher un serveur</a></li>
                \t\t</ul>
        \t\t</li> 
        \t
        \t\t<li>
        \t\t\t";
        // line 141
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 142
            echo "                \t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_administration"), "html", null, true);
            echo "\">Administration</a>
                \t";
        }
        // line 144
        echo "        \t\t</li>   
\t\t\t </ul>
          </div>   
        ";
    }

    // line 150
    public function block_contenu($context, array $blocks = array())
    {
        // line 151
        echo "\t\t\t      <!-- tout le contenu se trouve ici -->\t\t\t                
        ";
    }

    // line 153
    public function block_footer($context, array $blocks = array())
    {
        // line 154
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "melonRefappBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 154,  603 => 153,  598 => 151,  595 => 150,  588 => 144,  582 => 142,  580 => 141,  571 => 136,  565 => 134,  563 => 133,  558 => 131,  551 => 126,  547 => 125,  541 => 124,  539 => 123,  536 => 122,  534 => 121,  530 => 120,  527 => 119,  521 => 118,  519 => 117,  512 => 113,  506 => 110,  498 => 106,  491 => 102,  483 => 96,  479 => 95,  475 => 93,  469 => 91,  465 => 90,  461 => 89,  458 => 88,  452 => 86,  448 => 85,  443 => 84,  437 => 81,  432 => 79,  427 => 78,  421 => 75,  416 => 73,  411 => 72,  405 => 69,  401 => 68,  396 => 67,  389 => 64,  387 => 63,  379 => 60,  370 => 55,  366 => 47,  360 => 45,  356 => 43,  349 => 45,  345 => 43,  339 => 45,  335 => 43,  329 => 45,  325 => 43,  319 => 45,  315 => 43,  309 => 45,  305 => 43,  299 => 45,  295 => 43,  289 => 45,  285 => 43,  279 => 45,  275 => 43,  269 => 45,  265 => 43,  259 => 45,  255 => 43,  249 => 45,  245 => 43,  239 => 45,  235 => 43,  229 => 45,  225 => 43,  219 => 45,  215 => 43,  210 => 28,  207 => 27,  201 => 6,  193 => 156,  190 => 153,  188 => 150,  184 => 148,  182 => 106,  177 => 103,  175 => 102,  171 => 100,  169 => 55,  160 => 48,  158 => 27,  155 => 26,  153 => 25,  147 => 23,  144 => 22,  137 => 23,  134 => 22,  128 => 23,  125 => 22,  119 => 23,  116 => 22,  110 => 23,  107 => 22,  101 => 23,  98 => 22,  92 => 23,  89 => 22,  83 => 23,  80 => 22,  74 => 23,  71 => 22,  65 => 23,  56 => 23,  53 => 22,  47 => 23,  44 => 22,  40 => 9,  37 => 8,  33 => 6,  26 => 1,  99 => 43,  93 => 41,  90 => 40,  81 => 33,  66 => 22,  62 => 22,  59 => 18,  52 => 15,  45 => 11,  39 => 8,  30 => 3,);
    }
}
