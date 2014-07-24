<?php

/* melonRefappBundle:Application:listeAppli.html.twig */
class __TwigTemplate_f40b28f28cc00573bae9cddf3d29cbfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("melonRefappBundle::layout.html.twig");

        $this->blocks = array(
            'menu_deroulant' => array($this, 'block_menu_deroulant'),
            'login' => array($this, 'block_login'),
            'contenu' => array($this, 'block_contenu'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "melonRefappBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu_deroulant($context, array $blocks = array())
    {
        // line 4
        echo "\t\t";
        $this->displayParentBlock("menu_deroulant", $context, $blocks);
        echo "
\t";
    }

    // line 7
    public function block_login($context, array $blocks = array())
    {
        // line 8
        echo "\t";
    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        // line 11
        echo "\t
\t\t<div id='corps' class=\"corpsSite\">
\t\t
\t\t<h2>Rechercher les applications répertoriées par le Conseil général de l'Isère</h2>
\t\t
\t\t<form class=\"formFilterAppli\" method=\"post\" ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
  \t\t\t\t\t\t";
        // line 18
        echo "  \t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"blocfilter\">
\t\t\t\t\t\t<div class=\"filterEntry\">
\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "code"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "code"), 'widget');
        echo " 
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter un code\" /></a></span></p>
\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter un nom\" /></a></span></p>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"filterSelect1\">
  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "direction"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "direction"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter une direction\" /></a></span></p>
  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "domaine"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "domaine"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter un domaine\" /></a></span></p>
  \t\t\t\t\t\t\t <p>
  \t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "editeur"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "editeur"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter un éditeur\" /></a></span></p>
  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "responsableDsi"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "responsableDsi"), 'widget');
        echo " 
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter un responsable\" /></a></span></p> \t\t\t\t\t\t
  \t\t\t\t\t\t</div>
  \t\t\t\t\t\t<div class=\"filterSelect2\">\t
  \t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "serviceAppliDsi"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "serviceAppliDsi"), 'widget');
        echo " 
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter un service applicatif\" /></a></span></p>
  \t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "technologie"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "technologie"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter une technologie\" /></a></span></p>
  \t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "competence"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "competence"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter une compétence\" /></a></span></p>
  \t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "os"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "os"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter un os\" /></a></span></p>
  \t\t\t\t\t\t</div>\t
  \t\t\t\t\t\t<div class=\"filterSelect3\">
  \t\t\t\t\t\t\t  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "serveurWeb"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "serveurWeb"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter un serveur web\" /></a></span></p>
  \t\t\t\t\t\t\t  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sgbd"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sgbd"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter un sgbd\" /></a></span></p>
  \t\t\t\t\t\t\t  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "logiciel"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "logiciel"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter un logiciel\" /></a></span></p>
  \t\t\t\t\t\t\t  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "langage"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "langage"), 'widget');
        echo "  
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter un langage\" /></a></span></p>
  \t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t\t\t\t\t<div class=\"divbtnRechercher\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn-filter\" value=\"Appliquer le filtre\"/>
\t\t\t\t\t\t\t<input type=\"button\" class=\"init\" VALUE=\"Rétablir les valeurs par défaut\" onClick=\"this.form.reset();\">
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>";
        // line 90
        echo "\t
\t\t\t\t\t
  \t\t\t</form>
\t\t\t<div id=\"dt_liste\">
\t\t\t<table  class=\"display\" id=\"listeAppli\">
\t\t\t";
        // line 95
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE_SERVICE")) {
            // line 96
            echo "\t\t<div id=\"div-email\">
\t\t\t<a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_rapportObsolescence"), "html", null, true);
            echo "\">Afficher les applications en fin de support</a>
\t\t</div>
\t";
        }
        // line 100
        echo "    \t\t\t<thead>
        \t\t<tr>
            \t\t<th>Code</th>
            \t</tr>
    \t\t\t</thead>
   \t\t\t <tbody>
   \t\t\t";
        // line 106
        $context["nbMois1"] = 0;
        // line 107
        echo "   \t\t\t \t";
        $context["nbMois2"] = 0;
        echo " 
   \t\t\t \t";
        // line 108
        $context["nbMois3"] = 0;
        echo "  
   \t\t\t ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "obsolescence"));
        foreach ($context['_seq'] as $context["_key"] => $context["ob"]) {
            echo " 
   \t\t\t \t";
            // line 110
            $context["nbMois1"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois1", array(), "method");
            // line 111
            echo "   \t\t\t \t";
            $context["nbMois2"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois2", array(), "method");
            echo " 
   \t\t\t \t";
            // line 112
            $context["nbMois3"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois3", array(), "method");
            echo "  
   \t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ob'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "    \t\t\t ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_Application"));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 115
            echo "    \t\t\t ";
            if (($this->getAttribute($this->getContext($context, "application"), "EnFinDeVie", array(), "method") == 0)) {
                // line 116
                echo "    \t\t\t  ";
                $context["comp"] = (-1);
                echo "\t
    \t\t\t  ";
                // line 117
                $context["expire"] = 0;
                // line 118
                echo "    \t\t\t \t";
                $context["composants"] = $this->getAttribute($this->getContext($context, "application"), "getComposants", array(), "method");
                // line 119
                echo "    \t\t\t \t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "composants"));
                foreach ($context['_seq'] as $context["_key"] => $context["composant"]) {
                    // line 120
                    echo "    \t\t\t \t\t\t";
                    if (($this->getAttribute($this->getContext($context, "composant"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 0)) {
                        // line 121
                        echo "    \t\t\t \t\t\t\t";
                        $context["expire"] = 1;
                        // line 122
                        echo "    \t\t\t \t\t\t";
                    }
                    // line 123
                    echo "    \t\t\t \t\t\t";
                    if ((($this->getContext($context, "comp") <= $this->getAttribute($this->getContext($context, "composant"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method")) && ($this->getAttribute($this->getContext($context, "composant"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") != 9))) {
                        // line 124
                        echo "    \t\t\t \t\t\t\t";
                        $context["comp"] = $this->getAttribute($this->getContext($context, "composant"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method");
                        // line 125
                        echo "    \t\t\t \t\t\t\t
    \t\t\t \t\t\t";
                    }
                    // line 127
                    echo "    \t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['composant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
    \t\t\t ";
                // line 128
                if (($this->getContext($context, "comp") != (-1))) {
                    echo " ";
                    // line 129
                    echo "    \t\t\t
    \t\t\t\t ";
                    // line 130
                    if (($this->getContext($context, "expire") == 1)) {
                        // line 131
                        echo "    \t\t\t  \t\t<tr class=\"rouge\">
    \t\t\t  \t ";
                    } else {
                        // line 132
                        echo "\t  
    \t\t\t  \t ";
                        // line 133
                        if (($this->getContext($context, "comp") == 1)) {
                            // line 134
                            echo "        \t\t\t\t<tr class=\"jaune\">\t        \t\t\t\t
    \t\t\t  \t ";
                        } elseif (($this->getContext($context, "comp") == 3)) {
                            // line 135
                            echo "   
    \t\t\t  \t \t<tr class=\"orange\">\t  
    \t\t\t  \t ";
                        } elseif (($this->getContext($context, "comp") == 6)) {
                            // line 138
                            echo "        \t\t\t\t<tr class=\"rouge\">\t
        \t\t\t";
                        } elseif (($this->getContext($context, "comp") == 9)) {
                            // line 140
                            echo "        \t\t\t\t<tr >\t
        \t\t\t";
                        }
                        // line 141
                        echo "   
        \t\t\t";
                    }
                    // line 142
                    echo "   
        \t\t\t\t
        \t\t";
                } else {
                    // line 145
                    echo "        \t\t\t<tr>
        \t\t";
                }
                // line 146
                echo "  \t
                \t\t\t
                \t\t\t<td>  
                \t\t\t\t<a href=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                echo "\">            \t\t\t\t
                \t\t\t\t\t<p style=\"display:none;\">";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "application"), "getCode", array(), "method"), "html", null, true);
                echo "</p><span>";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "application"), "getNom", array(), "method") . " ") . $this->getAttribute($this->getContext($context, "application"), "getVersion", array(), "method")), "html", null, true);
                echo "</span>
                \t\t\t\t</a>\t
                \t\t\t\t<div class=\"block_actions\">
                \t\t\t\t";
                // line 153
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"liens\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 155
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/delete.png"), "html", null, true);
                    echo "\" title=\"Supprimer l'application\" alt=\"Supprimer l'application \" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 157
                echo " 
\t\t\t\t\t\t\t\t";
                // line 158
                $context["b"] = 1;
                echo "   
\t\t\t\t\t\t\t\t";
                // line 159
                if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE_SERVICE")) {
                    // line 160
                    echo "\t\t\t\t\t\t\t\t    <a class=\"liens\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img  src=\"";
                    // line 161
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
                    echo "\" title=\"Modifier l'application\" alt=\"Modifier l'application\" />
\t\t\t\t\t\t\t\t\t</a> 
                \t\t\t\t";
                } elseif ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE_APPLICATION")) {
                    // line 164
                    echo "                \t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "application"), "getResponsablesDsi", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                        // line 165
                        echo "                \t\t\t\t\t";
                        if ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "getUsername", array(), "method") == $this->getAttribute($this->getContext($context, "responsable"), "getUsername", array(), "method")) && ($this->getContext($context, "b") == 1))) {
                            // line 166
                            echo "\t\t\t\t\t\t\t\t\t<a class=\"liens\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<img  src=\"";
                            // line 167
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
                            echo "\" title=\"Modifier l'application\" alt=\"Modifier l'application\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                            // line 169
                            $context["b"] = 0;
                            echo " 
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 172
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 173
                echo "\t\t\t\t\t\t\t
                \t\t\t\t<a class=\"liens\" href=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                echo "\">            \t\t\t\t
                \t\t\t\t\t<img  src=\"";
                // line 175
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/page.png"), "html", null, true);
                echo "\" title=\"Fiche de l'application\" alt=\"Fiche de l'application\" />
                \t\t\t\t</a>
                \t\t\t\t";
                // line 177
                if (($this->getAttribute($this->getContext($context, "application"), "AppliComplete", array(), "method") == false)) {
                    echo " ";
                    // line 178
                    echo "                \t\t\t\t<a class=\"liens\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                    echo "\">            \t\t\t\t
                \t\t\t\t\t<img  src=\"";
                    // line 179
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/warning.png"), "html", null, true);
                    echo "\" title=\"Application incomplète\" alt=\"Application incomplet\" />
                \t\t\t\t</a>
                \t\t\t\t";
                }
                // line 182
                echo "\t\t\t\t\t\t\t\t  </div>\t\t\t\t
                \t\t\t</td>
        \t\t\t\t</tr>
     \t\t\t";
            }
            // line 186
            echo "    \t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "        \t</tbody>
\t\t\t</table>
\t\t\t</div>
\t
\t\t
\t</div>\t
\t";
    }

    // line 195
    public function block_javascript($context, array $blocks = array())
    {
        // line 196
        echo "\t\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\$('#listeAppli').dataTable({

\t\t\t\t\t\t\t\t\"aLengthMenu\": [[25, 50, 100, -1], [25, 50, 100, \"Tous\"]],
\t\t\t\t\t\t\t    \"iDisplayLength\": 50,
\t\t\t\t\t\t\t   // \"sProcessing\":   \"Chargement...\",
\t\t\t\t\t\t\t \t\"sLengthMenu\":   \"Afficher _MENU_ applications\",
\t\t\t\t\t\t\t \t\"sZeroRecords\":  \"Aucune application trouvée\",
\t\t\t\t\t\t\t \t\"sInfo\":         \"Affiche _START_ à _END_ des _TOTAL_ applications\",
\t\t\t\t\t\t\t \t\"sInfoEmpty\":    \"Affiche 0 à 0 des 0 applications\",
\t\t\t\t\t\t\t \t\"sInfoFiltered\": \"(filtrer de _MAX_ total des applications)\",
\t\t\t\t\t\t\t \t\"sInfoPostFix\":  \"\",
\t\t\t\t\t\t\t \t\"sSearch\":       \"Rechercher :\",
\t\t\t\t\t\t\t \t\"sUrl\":          \"\",
\t\t\t\t\t\t\t \t\"oPaginate\": {
\t\t\t\t\t\t\t \t\t\"sFirst\":    \"Première\",
\t\t\t\t\t\t\t \t\t\"sPrevious\": \"Précédente\",
\t\t\t\t\t\t\t \t\t\"sNext\":     \"Prochaine\",
\t\t\t\t\t\t\t \t\t\"sLast\":     \"Dernière\"
\t\t\t\t\t\t\t \t}
\t\t\t\t\t \t});
\t\t\t\t\t\t 
\t\t\t\t\t} );
\t\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "melonRefappBundle:Application:listeAppli.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 196,  552 => 195,  542 => 187,  536 => 186,  530 => 182,  524 => 179,  519 => 178,  516 => 177,  511 => 175,  507 => 174,  504 => 173,  501 => 172,  495 => 171,  490 => 169,  485 => 167,  480 => 166,  477 => 165,  472 => 164,  466 => 161,  461 => 160,  459 => 159,  455 => 158,  452 => 157,  446 => 155,  441 => 154,  439 => 153,  431 => 150,  427 => 149,  422 => 146,  418 => 145,  413 => 142,  409 => 141,  405 => 140,  401 => 138,  396 => 135,  392 => 134,  390 => 133,  387 => 132,  383 => 131,  381 => 130,  378 => 129,  375 => 128,  367 => 127,  363 => 125,  360 => 124,  357 => 123,  354 => 122,  351 => 121,  348 => 120,  343 => 119,  340 => 118,  338 => 117,  333 => 116,  330 => 115,  325 => 114,  317 => 112,  312 => 111,  310 => 110,  304 => 109,  300 => 108,  295 => 107,  293 => 106,  285 => 100,  279 => 97,  276 => 96,  274 => 95,  267 => 90,  258 => 84,  253 => 82,  249 => 81,  245 => 80,  240 => 78,  236 => 77,  232 => 76,  227 => 74,  223 => 73,  219 => 72,  214 => 70,  210 => 69,  206 => 68,  199 => 64,  195 => 63,  191 => 62,  186 => 60,  182 => 59,  178 => 58,  173 => 56,  169 => 55,  165 => 54,  160 => 52,  156 => 51,  152 => 50,  145 => 46,  141 => 45,  137 => 44,  132 => 42,  128 => 41,  124 => 40,  119 => 38,  115 => 37,  111 => 36,  106 => 34,  102 => 33,  98 => 32,  91 => 28,  87 => 27,  83 => 26,  78 => 24,  74 => 23,  70 => 22,  62 => 18,  58 => 16,  51 => 11,  48 => 10,  44 => 8,  41 => 7,  34 => 4,  31 => 3,);
    }
}
