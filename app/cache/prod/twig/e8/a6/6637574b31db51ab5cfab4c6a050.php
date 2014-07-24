<?php

/* melonRefappBundle:Serveur:rechercheServeur.html.twig */
class __TwigTemplate_e8a66637574b31db51ab5cfab4c6a050 extends Twig_Template
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
        echo "\t<div id='corps'>
\t\t<h2>Rechercher un serveur</h2>
\t\t<form class=\"formFilterAppli\" method=\"post\" ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
  \t\t\t\t\t\t";
        // line 15
        echo "  \t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"blocfilter\" id=\"BlockServ\">
\t\t\t\t\t\t<div class=\"filterGeneral\">
  \t\t\t\t\t\t\t<p>
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
\t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ip"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ip"), 'widget');
        echo " 
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "hostname"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "hostname"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t\t\t\t\t
  \t\t\t\t\t\t</div>
  \t\t\t\t\t\t<div class=\"filterGeneral2\">\t
  \t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "typeServeur"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "typeServeur"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>\t
  \t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "environnement"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "environnement"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t</div>
  \t\t\t\t\t\t<div class=\"filterComposant\">
  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "serveurWeb"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "serveurWeb"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "os"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "os"), 'widget');
        echo "
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t\t<p>
  \t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "langage"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "langage"), 'widget');
        echo "  
\t\t\t\t\t\t\t<span> <a id=\"plus5\" href=\"\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/plus.png"), "html", null, true);
        echo "\" alt=\"Ajouter\" /></a></span></p>
  \t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t\t\t\t\t<div class=\"divbtnRechercher\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn-filter\" value=\"Filtrer\"/>
\t\t\t\t\t\t\t<INPUT TYPE=\"button\" VALUE=\"Rétablir les valeurs par défaut\" onClick=\"this.form.reset();\">
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>";
        // line 62
        echo "\t
\t\t\t\t\t
  \t\t\t</form>
  \t\t<div class=\"formListeServeur\">\t\t
\t\t<div class=\"container1\">
\t\t\t<h4><a href=\"#listeServeurs\" onclick=\"hidden_show('listeServeurs');\">";
        // line 67
        echo "Liste des serveurs : ";
        echo "</a></h4>
 \t\t\t<div id =\"listeServeurs\" class=\"listeServeurs\"> 
 \t\t\t<div id=\"tablelisteServeur\">
\t\t\t<table  class=\"display\" id=\"listeServ\">
\t\t\t<thead>
        \t\t<tr>
            \t\t<th>Nom</th>
            \t</tr>
    \t\t\t</thead>
   \t\t\t <tbody>
   \t\t\t";
        // line 77
        $context["nbMois1"] = 0;
        // line 78
        echo "   \t\t\t";
        $context["nbMois2"] = 0;
        echo " 
   \t\t\t";
        // line 79
        $context["nbMois3"] = 0;
        echo "  
   \t\t\t";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "obsolescence"));
        foreach ($context['_seq'] as $context["_key"] => $context["ob"]) {
            echo " 
   \t\t\t\t";
            // line 81
            $context["nbMois1"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois1", array(), "method");
            // line 82
            echo "   \t\t\t \t";
            $context["nbMois2"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois2", array(), "method");
            echo " 
   \t\t\t \t";
            // line 83
            $context["nbMois3"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois3", array(), "method");
            echo "  
   \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ob'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "    \t\t\t\t\t 
   \t\t\t\t ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_Serveur"));
        foreach ($context['_seq'] as $context["_key"] => $context["serveur"]) {
            // line 87
            echo "   \t\t\t\t \t";
            $context["env"] = (-1);
            // line 88
            echo "   \t\t\t\t \t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "serveur"), "environnements"));
            foreach ($context['_seq'] as $context["_key"] => $context["environnement"]) {
                echo "\t
   \t\t\t\t  \t\t";
                // line 89
                $context["comp"] = (-1);
                echo "\t \t\t \t
    \t\t\t \t\t";
                // line 90
                $context["composants"] = $this->getAttribute($this->getContext($context, "environnement"), "getComposants", array(), "method");
                // line 91
                echo "    \t\t\t \t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "composants"));
                foreach ($context['_seq'] as $context["_key"] => $context["composant"]) {
                    // line 92
                    echo "    \t\t\t \t\t\t";
                    if ((($this->getContext($context, "comp") <= $this->getAttribute($this->getContext($context, "composant"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method")) && ($this->getAttribute($this->getContext($context, "composant"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") != 9))) {
                        // line 93
                        echo "    \t\t\t \t\t\t\t";
                        $context["comp"] = $this->getAttribute($this->getContext($context, "composant"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method");
                        // line 94
                        echo "    \t\t\t \t\t\t";
                    }
                    // line 95
                    echo "    \t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['composant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
    \t\t\t\t\t";
                // line 96
                if (($this->getContext($context, "comp") >= $this->getContext($context, "env"))) {
                    // line 97
                    echo "    \t\t\t\t\t\t";
                    $context["env"] = $this->getContext($context, "comp");
                    // line 98
                    echo "    \t\t\t\t\t";
                }
                // line 99
                echo "    \t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['environnement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
    \t\t\t \t";
            // line 100
            if (($this->getContext($context, "env") != (-1))) {
                echo " ";
                // line 101
                echo "    \t\t\t\t\t";
                if (($this->getContext($context, "env") == 9)) {
                    // line 102
                    echo "    \t\t\t  \t\t\t<tr>\t  
    \t\t\t  \t \t";
                } elseif (($this->getContext($context, "env") == 6)) {
                    // line 104
                    echo "        \t\t\t\t\t<tr class=\"jaune\">\t        \t\t\t\t
    \t\t\t  \t\t ";
                } elseif (($this->getContext($context, "env") == 3)) {
                    // line 105
                    echo "   
    \t\t\t  \t\t \t<tr class=\"orange\">\t  
    \t\t\t  \t \t";
                } elseif (($this->getContext($context, "env") == 1)) {
                    // line 108
                    echo "        \t\t\t\t\t<tr class=\"rouge\">\t
        \t\t\t\t";
                } elseif (($this->getContext($context, "env") == 0)) {
                    // line 110
                    echo "        \t\t\t\t\t<tr class=\"rouge\">\t
        \t\t\t\t";
                }
                // line 111
                echo "   \t
        \t\t\t";
            } else {
                // line 113
                echo "        \t\t\t\t<tr>
        \t\t\t";
            }
            // line 114
            echo "  \t
    \t\t\t \t<td>
    \t\t\t \t<a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheServeur", array("id" => $this->getAttribute($this->getContext($context, "serveur"), "getId", array(), "method"))), "html", null, true);
            echo "\">
                \t\t\t\t\t";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "serveur"), "getNom", array(), "method"), "html", null, true);
            echo "
                \t</a>\t
                \t<a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheServeur", array("id" => $this->getAttribute($this->getContext($context, "serveur"), "getId", array(), "method"))), "html", null, true);
            echo "\">            \t\t\t\t
                \t\t\t\t\t";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "serveur"), "getIp", array(), "method"), "html", null, true);
            echo "
                \t</a>
                \t<a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheServeur", array("id" => $this->getAttribute($this->getContext($context, "serveur"), "getId", array(), "method"))), "html", null, true);
            echo "\">            \t\t\t
                \t\t\t\t\t";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "serveur"), "getHostName", array(), "method"), "html", null, true);
            echo "   
                \t</a>\t                   
    \t\t\t ";
            // line 125
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "serveur"), "environnements"));
            foreach ($context['_seq'] as $context["_key"] => $context["environnement"]) {
                echo "\t\t 
    \t\t\t \t<p><span>";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "environnement"), "nomInstance"), "html", null, true);
                echo "</span><p>
      \t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['environnement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "      \t\t\t\t</td>
\t\t\t\t</tr>
    \t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serveur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "\t
        \t</tbody>
\t\t\t</table>
\t\t\t</div>
\t\t</div>\t\t
\t\t</div>
\t\t</div>
\t</div>\t
\t";
    }

    // line 140
    public function block_javascript($context, array $blocks = array())
    {
        // line 141
        echo "\t\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\t\t\t
\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\$('#listeServ').dataTable({

\t\t\t\t\t\t\t\t\"aLengthMenu\": [[30, 60, 90, -1], [30, 60, 90, \"Tous\"]],
\t\t\t\t\t\t\t    \"iDisplayLength\": 30,
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

\t\t\t\t\t   function hidden_show(id) {
\t\t\t\t\t       var e = document.getElementById(id);
\t\t\t\t\t       if(e.style.display == 'inline-block'){
\t\t\t\t\t      \t e.setAttribute(\"style\",\"display:none;\");
\t\t\t\t\t       }
\t\t\t\t\t       else{
\t\t\t\t\t    \t
\t\t\t\t\t\t\t\te.setAttribute(\"style\",\"display:inline-block;\");
\t\t\t\t\t\t   \t\t
\t\t\t\t\t       }
\t\t\t\t\t      }
\t\t</script>
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "melonRefappBundle:Serveur:rechercheServeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 141,  398 => 140,  386 => 130,  378 => 128,  370 => 126,  364 => 125,  359 => 123,  355 => 122,  350 => 120,  346 => 119,  341 => 117,  337 => 116,  333 => 114,  329 => 113,  325 => 111,  321 => 110,  317 => 108,  312 => 105,  308 => 104,  304 => 102,  301 => 101,  298 => 100,  290 => 99,  287 => 98,  284 => 97,  282 => 96,  274 => 95,  271 => 94,  268 => 93,  265 => 92,  260 => 91,  258 => 90,  254 => 89,  247 => 88,  244 => 87,  240 => 86,  237 => 85,  229 => 83,  224 => 82,  222 => 81,  216 => 80,  212 => 79,  207 => 78,  205 => 77,  192 => 67,  185 => 62,  176 => 56,  171 => 54,  167 => 53,  163 => 52,  158 => 50,  154 => 49,  150 => 48,  145 => 46,  141 => 45,  137 => 44,  130 => 40,  126 => 39,  122 => 38,  117 => 36,  113 => 35,  109 => 34,  101 => 29,  97 => 28,  93 => 27,  88 => 25,  84 => 24,  80 => 23,  75 => 21,  71 => 20,  67 => 19,  59 => 15,  55 => 13,  51 => 11,  48 => 10,  44 => 8,  41 => 7,  34 => 4,  31 => 3,);
    }
}
