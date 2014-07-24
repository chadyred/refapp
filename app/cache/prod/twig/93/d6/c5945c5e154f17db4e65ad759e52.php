<?php

/* melonRefappBundle:Application:mesAppli.html.twig */
class __TwigTemplate_93d6c5945c5e154f17db4e65ad759e52 extends Twig_Template
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
        echo "\t";
        $this->displayParentBlock("menu_deroulant", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_login($context, array $blocks = array())
    {
    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        // line 11
        echo "\t\t<div id='corps' class=\"corpsSite\">
\t\t<h2>Mes applications</h2>
\t\t\t\t<form class=\"formFilterAppli\" method=\"post\" ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
  \t\t\t\t\t\t";
        // line 15
        echo "  \t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"blocfilter\">
\t\t\t\t\t\t<div class=\"filterGeneral\">
  \t\t\t\t\t\t\t<p style=\"display:none;\">
  \t\t\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
\t\t\t\t\t\t\t<p style=\"display:none;\">
  \t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "code"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "code"), 'widget');
        echo " 
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "direction"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "direction"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "domaine"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "domaine"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t\t <p>
  \t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "editeur"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "editeur"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "responsableDsi"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "responsableDsi"), 'widget');
        echo " 
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p> \t\t\t\t\t\t
  \t\t\t\t\t\t</div>
  \t\t\t\t\t\t<div class=\"filterGeneral2\">\t
  \t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "serviceAppliDsi"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "serviceAppliDsi"), 'widget');
        echo " 
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "technologie"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "technologie"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "competence"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "competence"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "os"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "os"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t</div>\t
  \t\t\t\t\t\t<div class=\"filterComposant\">
  \t\t\t\t\t\t\t  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "serveurWeb"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "serveurWeb"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t\t  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sgbd"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sgbd"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t\t  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "logiciel"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "logiciel"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t\t  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "langage"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "langage"), 'widget');
        echo "  
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t\t\t\t\t<div class=\"divbtnRechercher\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn-filter\" value=\"Filtrer\"/>
\t\t\t\t\t\t\t<INPUT TYPE=\"button\" VALUE=\"Rétablir les valeurs par défaut\" onClick=\"this.form.reset();\">
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>";
        // line 85
        echo "\t
\t\t\t\t\t
  \t\t\t</form>
\t\t\t<div id=\"dt_liste\">
\t\t\t<table  class=\"display\" id=\"listeAppli\">
\t\t\t";
        // line 90
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE_APPLICATION")) {
            // line 91
            echo "\t\t<div id=\"div-email\">
\t\t\t<a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_rapportObsolescence"), "html", null, true);
            echo "\">Rapport de vos applications</a>
\t\t</div>
\t";
        }
        // line 95
        echo "    \t\t\t<thead>
        \t\t<tr>
            \t\t<th>Code</th>
            \t</tr>
    \t\t\t</thead>
   \t\t\t <tbody>
   \t\t\t";
        // line 101
        $context["nbMois1"] = 0;
        // line 102
        echo "   \t\t\t \t";
        $context["nbMois2"] = 0;
        echo " 
   \t\t\t \t";
        // line 103
        $context["nbMois3"] = 0;
        echo "  
   \t\t\t ";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "obsolescence"));
        foreach ($context['_seq'] as $context["_key"] => $context["ob"]) {
            echo " 
   \t\t\t \t";
            // line 105
            $context["nbMois1"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois1", array(), "method");
            // line 106
            echo "   \t\t\t \t";
            $context["nbMois2"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois2", array(), "method");
            echo " 
   \t\t\t \t";
            // line 107
            $context["nbMois3"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois3", array(), "method");
            echo "  
   \t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ob'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "    \t\t\t ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_Application"));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 110
            echo "    \t\t\t ";
            if (($this->getAttribute($this->getContext($context, "application"), "EnFinDeVie", array(), "method") == 0)) {
                // line 111
                echo "    \t\t\t  ";
                $context["comp"] = (-1);
                echo "\t\t \t
    \t\t\t \t";
                // line 112
                $context["composants"] = $this->getAttribute($this->getContext($context, "application"), "getComposants", array(), "method");
                // line 113
                echo "    \t\t\t \t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "composants"));
                foreach ($context['_seq'] as $context["_key"] => $context["composant"]) {
                    // line 114
                    echo "    \t\t\t \t\t\t";
                    if (($this->getContext($context, "comp") <= $this->getAttribute($this->getContext($context, "composant"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method"))) {
                        // line 115
                        echo "    \t\t\t \t\t\t\t";
                        $context["comp"] = $this->getAttribute($this->getContext($context, "composant"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method");
                        // line 116
                        echo "    \t\t\t \t\t\t\t";
                        // line 117
                        echo "    \t\t\t \t\t\t";
                    }
                    // line 118
                    echo "    \t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['composant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
    \t\t\t ";
                // line 119
                if (($this->getContext($context, "comp") != (-1))) {
                    echo " ";
                    // line 120
                    echo "    \t\t\t\t ";
                    if (($this->getContext($context, "comp") == 9)) {
                        // line 121
                        echo "    \t\t\t  \t\t<tr>\t  
    \t\t\t  \t ";
                    } elseif (($this->getContext($context, "comp") == 1)) {
                        // line 123
                        echo "        \t\t\t\t<tr class=\"jaune\">\t        \t\t\t\t
    \t\t\t  \t ";
                    } elseif (($this->getContext($context, "comp") == 3)) {
                        // line 124
                        echo "   
    \t\t\t  \t \t<tr class=\"orange\">\t  
    \t\t\t  \t ";
                    } elseif (($this->getContext($context, "comp") == 6)) {
                        // line 127
                        echo "        \t\t\t\t<tr class=\"rouge\">\t
        \t\t\t";
                    } elseif (($this->getContext($context, "comp") == 0)) {
                        // line 129
                        echo "        \t\t\t\t<tr class=\"rouge\">\t
        \t\t\t";
                    }
                    // line 130
                    echo "   \t
        \t\t";
                } else {
                    // line 132
                    echo "        \t\t\t<tr>
        \t\t";
                }
                // line 133
                echo "  \t
                \t\t\t
                \t\t\t<td>  
                \t\t\t\t<a href=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                echo "\">            \t\t\t\t
                \t\t\t\t\t<span>";
                // line 137
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "application"), "getNom", array(), "method") . " ") . $this->getAttribute($this->getContext($context, "application"), "getVersion", array(), "method")), "html", null, true);
                echo "</span>
                \t\t\t\t</a>\t
                \t\t\t\t<div class=\"block_actions\">
                \t\t\t\t";
                // line 140
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"liens\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 142
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/delete.png"), "html", null, true);
                    echo "\" title=\"Supprimer l'application\" alt=\"supprimer\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 144
                echo " 
\t\t\t\t\t\t\t\t";
                // line 145
                $context["b"] = 1;
                echo "   
\t\t\t\t\t\t\t\t";
                // line 146
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 147
                    echo "\t\t\t\t\t\t\t\t    <a class=\"liens\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img  src=\"";
                    // line 148
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
                    echo "\" title=\"Modifier l'application\" alt=\"modifier\" />
\t\t\t\t\t\t\t\t\t</a> 
                \t\t\t\t";
                } elseif ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE_APPLICATION")) {
                    // line 151
                    echo "                \t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "application"), "getResponsablesDsi", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                        // line 152
                        echo "                \t\t\t\t\t";
                        if ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "getUsername", array(), "method") == $this->getAttribute($this->getContext($context, "responsable"), "getUsername", array(), "method")) && ($this->getContext($context, "b") == 1))) {
                            // line 153
                            echo "\t\t\t\t\t\t\t\t\t<a class=\"liens\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<img  src=\"";
                            // line 154
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
                            echo "\" title=\"Modifier l'application\" alt=\"modifier\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                            // line 156
                            $context["b"] = 0;
                            echo " 
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 158
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 159
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 160
                echo "\t\t\t\t\t\t\t
                \t\t\t\t<a class=\"liens\" href=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                echo "\">            \t\t\t\t
                \t\t\t\t\t<img  src=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/page.png"), "html", null, true);
                echo "\" title=\"Fiche de l'application\" alt=\"fiche\" />
                \t\t\t\t</a>
                \t\t\t\t";
                // line 164
                if (($this->getAttribute($this->getContext($context, "application"), "AppliComplete", array(), "method") == false)) {
                    echo " ";
                    // line 165
                    echo "                \t\t\t\t<a class=\"liens\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                    echo "\">            \t\t\t\t
                \t\t\t\t\t<img  src=\"";
                    // line 166
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/warning.png"), "html", null, true);
                    echo "\" title=\"Application incomplète\" alt=\"dossier incomplet\" />
                \t\t\t\t</a>
                \t\t\t\t";
                }
                // line 169
                echo "\t\t\t\t\t\t\t\t  </div>\t\t\t\t
                \t\t\t</td>
        \t\t\t\t</tr>
     \t\t\t";
            }
            // line 173
            echo "    \t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "        \t</tbody>
\t\t\t</table>
\t\t\t</div>
\t
\t\t
\t</div>\t
\t";
    }

    // line 182
    public function block_javascript($context, array $blocks = array())
    {
        // line 183
        echo "\t\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\$('#listeAppli').dataTable({

\t\t\t\t\t\t\t\t\"aLengthMenu\": [[30, 60, 90, -1], [30, 60, 90, \"Tous\"]],
\t\t\t\t\t\t\t    \"iDisplayLength\": 30,
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
        return "melonRefappBundle:Application:mesAppli.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  523 => 183,  520 => 182,  510 => 174,  504 => 173,  498 => 169,  492 => 166,  487 => 165,  484 => 164,  479 => 162,  475 => 161,  472 => 160,  469 => 159,  463 => 158,  458 => 156,  453 => 154,  448 => 153,  445 => 152,  440 => 151,  434 => 148,  429 => 147,  427 => 146,  423 => 145,  420 => 144,  414 => 142,  409 => 141,  407 => 140,  401 => 137,  397 => 136,  392 => 133,  388 => 132,  384 => 130,  380 => 129,  376 => 127,  371 => 124,  367 => 123,  363 => 121,  360 => 120,  357 => 119,  349 => 118,  346 => 117,  344 => 116,  341 => 115,  338 => 114,  333 => 113,  331 => 112,  326 => 111,  323 => 110,  318 => 109,  310 => 107,  305 => 106,  303 => 105,  297 => 104,  293 => 103,  288 => 102,  286 => 101,  278 => 95,  272 => 92,  269 => 91,  267 => 90,  260 => 85,  251 => 79,  246 => 77,  242 => 76,  238 => 75,  233 => 73,  229 => 72,  225 => 71,  220 => 69,  216 => 68,  212 => 67,  207 => 65,  203 => 64,  199 => 63,  192 => 59,  188 => 58,  184 => 57,  179 => 55,  175 => 54,  171 => 53,  166 => 51,  162 => 50,  158 => 49,  153 => 47,  149 => 46,  145 => 45,  138 => 41,  134 => 40,  130 => 39,  125 => 37,  121 => 36,  117 => 35,  112 => 33,  108 => 32,  104 => 31,  99 => 29,  95 => 28,  91 => 27,  86 => 25,  82 => 24,  78 => 23,  73 => 21,  69 => 20,  65 => 19,  57 => 15,  53 => 13,  49 => 11,  46 => 10,  41 => 7,  34 => 4,  31 => 3,);
    }
}
