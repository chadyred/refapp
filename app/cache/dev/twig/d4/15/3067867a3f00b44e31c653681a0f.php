<?php

/* melonRefappBundle:Administration:administration.html.twig */
class __TwigTemplate_d4153067867a3f00b44e31c653681a0f extends Twig_Template
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
        echo "\t<!-- Corps -->
\t\t<div id='corps' class=\"corpsSite\">
\t\t\t<h2>Administration</h2>
\t\t\t<div class=\"formObsolescence\">
  \t\t\t\t\t<form method=\"post\" ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
  \t\t\t\t\t\t";
        // line 17
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
\t\t\t\t\t\t<div class=\"jauge\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/jauge.png"), "html", null, true);
        echo "\" alt=\"jauge\"/></div>
\t\t\t\t\t\t<div class=\"global\">
\t\t\t\t\t\t<div class=\"double\">  
\t\t\t\t\t\t\t";
        // line 22
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbMois1"), 'label', array("label" => "1ère alerte :"));
        echo "
 
  \t\t\t\t\t\t\t";
        // line 25
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbMois1"), 'widget');
        echo " mois
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 28
        echo "  \t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"double\">  
\t\t\t\t\t\t\t";
        // line 32
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbMois2"), 'label', array("label" => "2ème alerte :"));
        echo "
   \t\t\t\t\t\t\t";
        // line 34
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbMois2"), 'widget');
        echo " mois
  \t\t\t\t\t\t\t";
        // line 36
        echo "  \t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"double\">  
\t\t\t\t\t\t\t";
        // line 40
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbMois3"), 'label', array("label" => "3ème alerte :"));
        echo "
   \t\t\t\t\t\t\t";
        // line 42
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbMois3"), 'widget');
        echo " mois
  \t\t\t\t\t\t\t";
        // line 44
        echo "  \t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbMois3"), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbMois2"), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbMois1"), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t\t\t\t \t<div class=\"input\"><input type=\"submit\" class=\"btn-primary\" value=\"Enregistrer\" id=\"boutonEnregistrerObsolescence\"/>
\t\t\t\t\t \t</div>
  \t\t\t\t\t</form>
  \t\t</div>
\t\t\t<div class=\"general\">
\t\t\t\t<p>Bienvenue sur la partie administration de RefApp38. Ici, vous pouvez créer / modifier / supprimer l'ensemble des composants utilisés par le référentiel : </p>
\t\t\t\t<h3>General</h3>
\t\t\t</div>
\t\t\t\t
\t<!-- Table g�n�rale -->\t
\t
\t\t<div id=\"tabs\">\t\t
\t\t\t<ul>
\t\t\t\t<li><a href=\"#tabs-1\">Direction</a></li>
\t\t\t\t<li><a href=\"#tabs-2\">Domaine</a></li>
\t\t\t\t<li><a href=\"#tabs-3\">Responsable</a></li>
\t\t\t\t<li><a href=\"#tabs-4\">Service Applicatif</a></li>
\t\t\t\t<li><a href=\"#tabs-5\">Technologie</a></li>
\t\t\t\t<li><a href=\"#tabs-6\">Editeur</a></li>
\t\t\t\t<li><a href=\"#tabs-7\">Compétence</a></li>
\t\t\t</ul>
\t\t\t<div id=\"tabs-1\">
\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example1\">
    \t\t\t\t<thead>
        \t\t\t<tr>
            \t\t\t<th>Nom</th>
            \t\t\t<th>Correspondant informatique</th>
            \t\t\t<th>Actions</th>
        \t\t\t</tr>
    \t\t\t\t</thead>
   \t\t\t \t<tbody>
    \t\t\t\t ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_Direction"));
        foreach ($context['_seq'] as $context["_key"] => $context["direction"]) {
            // line 83
            echo "                \t\t<tr>\t        \t\t\t
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheDirection", array("id" => $this->getAttribute($this->getContext($context, "direction"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t                \t\t\t\t
                \t\t\t\t\t";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "direction"), "getNom", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheDirection", array("id" => $this->getAttribute($this->getContext($context, "direction"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t                \t\t\t\t
                \t\t\t\t\t";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "direction"), "getCorrespondantInformatique", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t </a>          \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<div id=\"AdmiEditer\" >\t          
                \t\t\t\t\t<a class=\"lienEditer\" href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierDirection", array("id" => $this->getAttribute($this->getContext($context, "direction"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
            echo "\" alt=\"editer\" height=\"12\" width=\"12\" />  
                \t\t\t\t\t\t";
            // line 98
            echo "Editer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t\t<div id=\"AdmiSupprimer\">
                \t\t\t\t\t<a class=\"lienSupprimer\" href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerDirection", array("id" => $this->getAttribute($this->getContext($context, "direction"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/supp.png"), "html", null, true);
            echo "\" alt=\"supprimer\" height=\"12\" width=\"12\" />
                \t\t\t\t\t\t";
            // line 104
            echo "Supprimer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t</td>                   \t\t\t
        \t\t\t\t</tr>
     \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['direction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "       \t\t\t
        \t\t</tbody>
\t\t\t\t</table>\t\t\t\t
\t\t\t\t<a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ajoutDirection"), "html", null, true);
        echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"ajouterDir\" value=\"Ajouter une direction\"/>
\t\t\t\t</a>\t\t\t
\t\t\t</div>\t\t\t
\t\t\t<div id=\"tabs-2\">
\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example2\">
    \t\t\t\t<thead>
        \t\t\t<tr>
            \t\t\t<th>Nom</th>
            \t\t\t<th>Actions</th>
        \t\t\t</tr>
    \t\t\t\t</thead>
   \t\t\t \t<tbody>
    \t\t\t\t ";
        // line 125
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_Domaine"));
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 126
            echo "                \t\t<tr>\t        \t\t\t
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheDomaine", array("id" => $this->getAttribute($this->getContext($context, "domaine"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t                \t\t\t\t
                \t\t\t\t\t";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "domaine"), "getNom", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>\t\t           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<div id=\"AdmiEditer\" >\t          
                \t\t\t\t\t<a class=\"lienEditer\" href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierDomaine", array("id" => $this->getAttribute($this->getContext($context, "domaine"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
            echo "\" alt=\"editer\" height=\"12\" width=\"12\" />  
                \t\t\t\t\t\t";
            // line 136
            echo "Editer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t\t<div id=\"AdmiSupprimer\">
                \t\t\t\t\t<a class=\"lienSupprimer\" href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerDomaine", array("id" => $this->getAttribute($this->getContext($context, "domaine"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/supp.png"), "html", null, true);
            echo "\" alt=\"supprimer\" height=\"12\" width=\"12\" />
                \t\t\t\t\t\t";
            // line 142
            echo "Supprimer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t</td>               \t\t\t
        \t\t\t\t</tr>
     \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "       \t\t\t
        \t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ajoutDomaine"), "html", null, true);
        echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"ajouterDom\" value=\"Ajouter un domaine\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div id=\"tabs-3\">
\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example3\">
    \t\t\t\t<thead>
        \t\t\t<tr>
            \t\t\t<th>Nom</th>
            \t\t\t<th>Prenom</th>
            \t\t\t<th>Identifiant</th>
            \t\t\t<th>Numero de tèl</th>
            \t\t\t<th>Service</th>
            \t\t\t<th>Actions</th>
        \t\t\t\t</tr>
    \t\t\t\t</thead>
   \t\t\t \t<tbody>
    \t\t\t\t ";
        // line 167
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_ResponsableDsi"));
        foreach ($context['_seq'] as $context["_key"] => $context["responsableDsi"]) {
            // line 168
            echo "                \t\t<tr>\t        \t\t\t
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheResponsableDsi", array("id" => $this->getAttribute($this->getContext($context, "responsableDsi"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t                \t\t\t\t
                \t\t\t\t\t";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "responsableDsi"), "getNom", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>\t           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheResponsableDsi", array("id" => $this->getAttribute($this->getContext($context, "responsableDsi"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t                \t\t\t\t
                \t\t\t\t\t";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "responsableDsi"), "getPrenom", array(), "method"), "html", null, true);
            echo " 
                \t\t\t\t</a>          \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td> 
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheResponsableDsi", array("id" => $this->getAttribute($this->getContext($context, "responsableDsi"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t                \t\t\t\t
                \t\t\t\t\t";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "responsableDsi"), "getUsername", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td> 
                \t\t\t <td>\t
                \t\t\t\t <a href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheResponsableDsi", array("id" => $this->getAttribute($this->getContext($context, "responsableDsi"), "getId", array(), "method"))), "html", null, true);
            echo "\">                \t\t\t\t
                \t\t\t\t\t";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "responsableDsi"), "getNumtel", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>\t           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>  
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheResponsableDsi", array("id" => $this->getAttribute($this->getContext($context, "responsableDsi"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t                \t\t\t\t
                \t\t\t\t\t";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "responsableDsi"), "serviceAppliDsi"), "getNom", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>\t           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<div id=\"AdmiEditer\" >\t          
                \t\t\t\t\t<a class=\"lienEditer\" href=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierResponsableDsi", array("id" => $this->getAttribute($this->getContext($context, "responsableDsi"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
            echo "\" alt=\"editer\" height=\"12\" width=\"12\" />  
                \t\t\t\t\t\t";
            // line 198
            echo "Editer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t\t<div id=\"AdmiSupprimer\">
                \t\t\t\t\t<a class=\"lienSupprimer\" href=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerResponsableDsi", array("id" => $this->getAttribute($this->getContext($context, "responsableDsi"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/supp.png"), "html", null, true);
            echo "\" alt=\"supprimer\" height=\"12\" width=\"12\" />
                \t\t\t\t\t\t";
            // line 204
            echo "Supprimer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t</td>               \t\t\t
        \t\t\t\t</tr>
     \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsableDsi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "       \t\t\t
        \t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<a href=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ajoutResponsableDsi"), "html", null, true);
        echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"ajouterRes\" value=\"Ajouter un responsable\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div id=\"tabs-4\">
\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example4\">
    \t\t\t\t<thead>
        \t\t\t<tr>
            \t\t\t<th>Nom</th>
            \t\t\t<th>Actions</th>
        \t\t\t</tr>
    \t\t\t\t</thead>
   \t\t\t \t<tbody>
    \t\t\t\t ";
        // line 225
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_ServiceAppliDsi"));
        foreach ($context['_seq'] as $context["_key"] => $context["serviceAppliDsi"]) {
            // line 226
            echo "                \t\t<tr>\t        \t\t\t
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 228
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheServiceAppliDsi", array("id" => $this->getAttribute($this->getContext($context, "serviceAppliDsi"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t  \t                \t\t\t\t
                \t\t\t\t\t";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "serviceAppliDsi"), "getNom", array(), "method"), "html", null, true);
            echo " 
                \t\t\t\t</a>          \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<div id=\"AdmiEditer\" >\t          
                \t\t\t\t\t<a class=\"lienEditer\" href=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierServiceAppliDsi", array("id" => $this->getAttribute($this->getContext($context, "serviceAppliDsi"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
            echo "\" alt=\"editer\" height=\"12\" width=\"12\" />  
                \t\t\t\t\t\t";
            // line 236
            echo "Editer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t\t<div id=\"AdmiSupprimer\">
                \t\t\t\t\t<a class=\"lienSupprimer\" href=\"";
            // line 240
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerDirection", array("id" => $this->getAttribute($this->getContext($context, "serviceAppliDsi"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 241
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/supp.png"), "html", null, true);
            echo "\" alt=\"supprimer\" height=\"12\" width=\"12\" />
                \t\t\t\t\t\t";
            // line 242
            echo "Supprimer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t</td>               \t\t\t
        \t\t\t\t</tr>
     \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serviceAppliDsi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "       \t\t\t
        \t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<a href=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ajoutServiceAppliDsi"), "html", null, true);
        echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"ajouterSer\" value=\"Ajouter un service\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div id=\"tabs-5\">
\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example5\">
    \t\t\t\t<thead>
        \t\t\t<tr>
            \t\t\t<th>Nom</th>
            \t\t\t<th>Actions</th>
        \t\t\t</tr>
    \t\t\t\t</thead>
   \t\t\t \t<tbody>
    \t\t\t\t ";
        // line 263
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_Technologie"));
        foreach ($context['_seq'] as $context["_key"] => $context["technologie"]) {
            // line 264
            echo "                \t\t<tr>\t        \t\t\t
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheTechnologie", array("id" => $this->getAttribute($this->getContext($context, "technologie"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "technologie"), "getNom", array(), "method"), "html", null, true);
            echo " 
                \t\t\t\t</a>\t          \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<div id=\"AdmiEditer\" >\t          
                \t\t\t\t\t<a class=\"lienEditer\" href=\"";
            // line 272
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierTechnologie", array("id" => $this->getAttribute($this->getContext($context, "technologie"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 273
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
            echo "\" alt=\"editer\" height=\"12\" width=\"12\" />  
                \t\t\t\t\t\t";
            // line 274
            echo "Editer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t\t<div id=\"AdmiSupprimer\">
                \t\t\t\t\t<a class=\"lienSupprimer\" href=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerTechnologie", array("id" => $this->getAttribute($this->getContext($context, "technologie"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 279
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/supp.png"), "html", null, true);
            echo "\" alt=\"supprimer\" height=\"12\" width=\"12\" />
                \t\t\t\t\t\t";
            // line 280
            echo "Supprimer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t</td>               \t\t\t
        \t\t\t\t</tr>
     \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technologie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "       \t\t\t
        \t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<a href=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ajoutTechnologie"), "html", null, true);
        echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"ajouterTec\" value=\"Ajouter une technologie\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div id=\"tabs-6\">
\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example6\">
    \t\t\t\t<thead>
        \t\t\t<tr>
            \t\t\t<th>Nom</th>
            \t\t\t<th>Numero de tel</th>
            \t\t\t<th>Adresse</th>
            \t\t\t<th>Mail</th>
            \t\t\t<th>Responsable technique</th>
            \t\t\t<th>Responsable d'application</th>
            \t\t\t<th>Actions</th>
        \t\t\t\t</tr>
    \t\t\t\t</thead>
   \t\t\t \t<tbody>
    \t\t\t\t ";
        // line 306
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_Editeur"));
        foreach ($context['_seq'] as $context["_key"] => $context["editeur"]) {
            // line 307
            echo "                \t\t<tr>\t        \t\t\t
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 309
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheEditeur", array("id" => $this->getAttribute($this->getContext($context, "editeur"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t\t                \t\t\t\t
                \t\t\t\t\t";
            // line 310
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "editeur"), "getNom", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>\t               \t\t\t\t           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 314
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheEditeur", array("id" => $this->getAttribute($this->getContext($context, "editeur"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t\t                \t\t\t\t
                \t\t\t\t\t";
            // line 315
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "editeur"), "getNumtel", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td> 
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 319
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheEditeur", array("id" => $this->getAttribute($this->getContext($context, "editeur"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t\t                \t\t\t\t
                \t\t\t\t\t";
            // line 320
            echo twig_escape_filter($this->env, (((((($this->getAttribute($this->getContext($context, "editeur"), "getNumero", array(), "method") . " ") . $this->getAttribute($this->getContext($context, "editeur"), "getRue", array(), "method")) . " ") . $this->getAttribute($this->getContext($context, "editeur"), "getCodepostal", array(), "method")) . " ") . $this->getAttribute($this->getContext($context, "editeur"), "getVille", array(), "method")), "html", null, true);
            echo "
                \t\t\t\t</a>           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td> 
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 324
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheEditeur", array("id" => $this->getAttribute($this->getContext($context, "editeur"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t\t                \t\t\t\t
                \t\t\t\t\t";
            // line 325
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "editeur"), "getMail", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td> 
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 329
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheEditeur", array("id" => $this->getAttribute($this->getContext($context, "editeur"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t\t                \t\t\t\t
                \t\t\t\t\t";
            // line 330
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "editeur"), "getResponsableTechnique", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td> 
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 334
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheEditeur", array("id" => $this->getAttribute($this->getContext($context, "editeur"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t\t                \t\t\t\t
                \t\t\t\t\t";
            // line 335
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "editeur"), "getResponsableApplication", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<div id=\"AdmiEditer\" >\t          
                \t\t\t\t\t<a class=\"lienEditer\" href=\"";
            // line 340
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierEditeur", array("id" => $this->getAttribute($this->getContext($context, "editeur"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 341
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
            echo "\" alt=\"editer\" height=\"12\" width=\"12\" />  
                \t\t\t\t\t\t";
            // line 342
            echo "Editer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t\t<div id=\"AdmiSupprimer\">
                \t\t\t\t\t<a class=\"lienSupprimer\" href=\"";
            // line 346
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerEditeur", array("id" => $this->getAttribute($this->getContext($context, "editeur"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 347
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/supp.png"), "html", null, true);
            echo "\" alt=\"supprimer\" height=\"12\" width=\"12\" />
                \t\t\t\t\t\t";
            // line 348
            echo "Supprimer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t</td>               \t\t\t
        \t\t\t\t</tr>
     \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['editeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "       \t\t\t
        \t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<a href=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ajoutEditeur"), "html", null, true);
        echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"ajouterEdi\" value=\"Ajouter un editeur\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div id=\"tabs-7\">
\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example7\">
    \t\t\t\t<thead>
        \t\t\t<tr>
            \t\t\t<th>Nom</th>
            \t\t\t<th>Niveau</th>
            \t\t\t<th>Compétence</th>
            \t\t\t<th>Actions</th>
        \t\t\t</tr>
    \t\t\t\t</thead>
   \t\t\t \t<tbody>
    \t\t\t\t ";
        // line 371
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_Competence"));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 372
            echo "                \t\t<tr>\t        \t\t\t
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 374
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheCompetence", array("id" => $this->getAttribute($this->getContext($context, "competence"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t\t                \t\t\t\t
                \t\t\t\t\t";
            // line 375
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "competence"), "getNom", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>\t               \t\t\t\t           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 379
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheCompetence", array("id" => $this->getAttribute($this->getContext($context, "competence"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t\t                \t\t\t\t
                \t\t\t\t\t";
            // line 380
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "competence"), "getNiveau", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td> 
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 384
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheCompetence", array("id" => $this->getAttribute($this->getContext($context, "competence"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t\t                \t\t\t\t
                \t\t\t\t\t";
            // line 385
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "competence"), "getDescription", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td> 
                \t\t\t<td>
                \t\t\t\t<div id=\"AdmiEditer\" >\t          
                \t\t\t\t\t<a class=\"lienEditer\" href=\"";
            // line 390
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierCompetence", array("id" => $this->getAttribute($this->getContext($context, "competence"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 391
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
            echo "\" alt=\"editer\" height=\"12\" width=\"12\" />  
                \t\t\t\t\t\t";
            // line 392
            echo "Editer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t\t<div id=\"AdmiSupprimer\">
                \t\t\t\t\t<a class=\"lienSupprimer\" href=\"";
            // line 396
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerCompetence", array("id" => $this->getAttribute($this->getContext($context, "competence"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 397
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/supp.png"), "html", null, true);
            echo "\" alt=\"supprimer\" height=\"12\" width=\"12\" />
                \t\t\t\t\t\t";
            // line 398
            echo "Supprimer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t</td>               \t\t\t
        \t\t\t\t</tr>
     \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 403
        echo "       \t\t\t
        \t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<a href=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ajoutCompetence"), "html", null, true);
        echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"ajouterEdi\" value=\"Ajouter une competence\"/>
\t\t\t\t</a>
\t\t\t</div>
\t
\t\t</div>
\t\t
\t\t\t\t
\t<!-- Table Composant -->\t
\t
\t<div class=\"TitleComposant\"><h3>Composants</h3></div>
\t\t<div id=\"tabs1\">\t\t
\t\t\t<ul>
\t\t\t\t<li><a href=\"#tabs-8\">Os</a></li>
\t\t\t\t<li><a href=\"#tabs-9\">Serveur Web</a></li>
\t\t\t\t<li><a href=\"#tabs-10\">Sgbd</a></li>
\t\t\t\t<li><a href=\"#tabs-11\">Logiciel</a></li>
\t\t\t\t<li><a href=\"#tabs-12\">Langage</a></li>
\t\t\t</ul>
\t\t\t<div id=\"tabs-8\">
\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example7\">
    \t\t\t\t<thead>
        \t\t\t<tr>
            \t\t\t<th>Nom</th>
            \t\t\t<th>Version</th>
            \t\t\t<th>Date de fin</th>\t\t
            \t\t\t<th>Actions</th>
        \t\t\t</tr>
    \t\t\t
   \t\t\t </thead>
   \t\t\t <tbody>
    \t\t\t\t ";
        // line 437
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_Os"));
        foreach ($context['_seq'] as $context["_key"] => $context["os"]) {
            // line 438
            echo "                \t\t<tr>\t        \t\t\t
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheOs", array("id" => $this->getAttribute($this->getContext($context, "os"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 441
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "os"), "getNom", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>\t           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 445
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheOs", array("id" => $this->getAttribute($this->getContext($context, "os"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 446
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "os"), "getVersion", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>\t           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 450
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheOs", array("id" => $this->getAttribute($this->getContext($context, "os"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 451
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "os"), "getDateFin", array(), "method"), "d/m/Y"), "html", null, true);
            echo "
                \t\t\t\t</a>\t           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<div id=\"AdmiEditer\" >\t          
                \t\t\t\t\t<a class=\"lienEditer\" href=\"";
            // line 456
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierOs", array("id" => $this->getAttribute($this->getContext($context, "os"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 457
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
            echo "\" alt=\"editer\" height=\"12\" width=\"12\" />  
                \t\t\t\t\t\t";
            // line 458
            echo "Editer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t\t<div id=\"AdmiSupprimer\">
                \t\t\t\t\t<a class=\"lienSupprimer\" href=\"";
            // line 462
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerOs", array("id" => $this->getAttribute($this->getContext($context, "os"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 463
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/supp.png"), "html", null, true);
            echo "\" alt=\"supprimer\" height=\"12\" width=\"12\" />
                \t\t\t\t\t\t";
            // line 464
            echo "Supprimer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t</td>               \t\t\t
        \t\t\t\t</tr>
     \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['os'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 469
        echo "       \t\t\t
        \t</tbody>
\t\t\t\t</table>
\t\t\t\t<a href=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ajoutOs"), "html", null, true);
        echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"ajouterOs\" value=\"Ajouter un Os\"/>
\t\t\t\t</a>
\t\t\t</div>\t\t\t
\t\t\t<div id=\"tabs-9\">
\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example8\">
    \t\t\t\t<thead>
        \t\t\t<tr>
            \t\t\t<th>Nom</th>
            \t\t\t<th>Version</th>
            \t\t\t<th>Date de fin</th>
            \t\t\t<th>Actions</th>
        \t\t\t</tr>
    \t\t\t\t</thead>
   \t\t\t \t<tbody>
    \t\t\t\t ";
        // line 487
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_ServeurWeb"));
        foreach ($context['_seq'] as $context["_key"] => $context["serveurWeb"]) {
            // line 488
            echo "                \t\t<tr>\t        \t\t\t
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 490
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheServeurWeb", array("id" => $this->getAttribute($this->getContext($context, "serveurWeb"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 491
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "serveurWeb"), "getNom", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 495
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheServeurWeb", array("id" => $this->getAttribute($this->getContext($context, "serveurWeb"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 496
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "serveurWeb"), "getVersion", array(), "method"), "html", null, true);
            echo "
                \t\t\t\t</a>           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 500
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheServeurWeb", array("id" => $this->getAttribute($this->getContext($context, "serveurWeb"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 501
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "serveurWeb"), "getDateFin", array(), "method"), "d/m/Y"), "html", null, true);
            echo "
                \t\t\t\t</a>           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<div id=\"AdmiEditer\" >\t          
                \t\t\t\t\t<a class=\"lienEditer\" href=\"";
            // line 506
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierServeurWeb", array("id" => $this->getAttribute($this->getContext($context, "serveurWeb"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 507
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
            echo "\" alt=\"editer\" height=\"12\" width=\"12\" />  
                \t\t\t\t\t\t";
            // line 508
            echo "Editer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t\t<div id=\"AdmiSupprimer\">
                \t\t\t\t\t<a class=\"lienSupprimer\" href=\"";
            // line 512
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerServeurWeb", array("id" => $this->getAttribute($this->getContext($context, "serveurWeb"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 513
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/supp.png"), "html", null, true);
            echo "\" alt=\"supprimer\" height=\"12\" width=\"12\" />
                \t\t\t\t\t\t";
            // line 514
            echo "Supprimer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t</td>               \t\t\t
        \t\t\t\t</tr>
     \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serveurWeb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 519
        echo "       \t\t\t
        \t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<a href=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ajoutServeurWeb"), "html", null, true);
        echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"ajouterSer\" value=\"Ajouter un serveur web\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div id=\"tabs-10\">
\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example9\">
    \t\t\t\t<thead>
        \t\t\t<tr>
            \t\t\t<th>Nom</th>
            \t\t\t<th>Version</th>
            \t\t\t<th>Date de fin</th>
            \t\t\t<th>Actions</th>
        \t\t\t</tr>
    \t\t\t\t</thead>
   \t\t\t \t<tbody>
    \t\t\t\t ";
        // line 537
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_Sgbd"));
        foreach ($context['_seq'] as $context["_key"] => $context["sgbd"]) {
            // line 538
            echo "                \t\t<tr>\t        \t\t\t
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 540
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheSgbd", array("id" => $this->getAttribute($this->getContext($context, "sgbd"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 541
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sgbd"), "getNom", array(), "method"), "html", null, true);
            echo "           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t\t</a>
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 545
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheSgbd", array("id" => $this->getAttribute($this->getContext($context, "sgbd"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 546
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sgbd"), "getVersion", array(), "method"), "html", null, true);
            echo "           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t\t</a>
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 550
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheSgbd", array("id" => $this->getAttribute($this->getContext($context, "sgbd"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 551
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "sgbd"), "getDateFin", array(), "method"), "d/m/Y"), "html", null, true);
            echo "           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t\t</a>
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<div id=\"AdmiEditer\" >\t          
                \t\t\t\t\t<a class=\"lienEditer\" href=\"";
            // line 556
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierSgbd", array("id" => $this->getAttribute($this->getContext($context, "sgbd"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 557
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
            echo "\" alt=\"editer\" height=\"12\" width=\"12\" />  
                \t\t\t\t\t\t";
            // line 558
            echo "Editer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t\t<div id=\"AdmiSupprimer\">
                \t\t\t\t\t<a class=\"lienSupprimer\" href=\"";
            // line 562
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerSgbd", array("id" => $this->getAttribute($this->getContext($context, "sgbd"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 563
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/supp.png"), "html", null, true);
            echo "\" alt=\"supprimer\" height=\"12\" width=\"12\" />
                \t\t\t\t\t\t";
            // line 564
            echo "Supprimer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t</td>             \t\t\t
        \t\t\t\t</tr>
     \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sgbd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 569
        echo "       \t\t\t
        \t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<a href=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ajoutSgbd"), "html", null, true);
        echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"ajouterSgb\" value=\"Ajouter un sgbd\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div id=\"tabs-11\">
\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example10\">
    \t\t\t\t<thead>
        \t\t\t<tr>
            \t\t\t<th>Nom</th>
            \t\t\t<th>Version</th>
            \t\t\t<th>Date de fin</th>
            \t\t\t<th>Actions</th>
        \t\t\t</tr>
    \t\t\t\t</thead>
   \t\t\t \t<tbody>
    \t\t\t\t ";
        // line 587
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_Logiciel"));
        foreach ($context['_seq'] as $context["_key"] => $context["logiciel"]) {
            // line 588
            echo "                \t\t<tr>\t        \t\t\t
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 590
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheLogiciel", array("id" => $this->getAttribute($this->getContext($context, "logiciel"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 591
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "logiciel"), "getNom", array(), "method"), "html", null, true);
            echo "           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t\t</a>
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 595
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheLogiciel", array("id" => $this->getAttribute($this->getContext($context, "logiciel"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 596
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "logiciel"), "getVersion", array(), "method"), "html", null, true);
            echo "           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t\t</a>
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 600
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheLogiciel", array("id" => $this->getAttribute($this->getContext($context, "logiciel"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 601
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "logiciel"), "getDateFin", array(), "method"), "d/m/Y"), "html", null, true);
            echo "           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t\t</a>
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<div id=\"AdmiEditer\" >\t          
                \t\t\t\t\t<a class=\"lienEditer\" href=\"";
            // line 606
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierLogiciel", array("id" => $this->getAttribute($this->getContext($context, "logiciel"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 607
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
            echo "\" alt=\"editer\" height=\"12\" width=\"12\" />  
                \t\t\t\t\t\t";
            // line 608
            echo "Editer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t\t<div id=\"AdmiSupprimer\">
                \t\t\t\t\t<a class=\"lienSupprimer\" href=\"";
            // line 612
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerLogiciel", array("id" => $this->getAttribute($this->getContext($context, "logiciel"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 613
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/supp.png"), "html", null, true);
            echo "\" alt=\"supprimer\" height=\"12\" width=\"12\" />
                \t\t\t\t\t\t";
            // line 614
            echo "Supprimer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t</td>               \t\t\t
        \t\t\t\t</tr>
     \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logiciel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 619
        echo "       \t\t\t
        \t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<a href=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ajoutLogiciel"), "html", null, true);
        echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"ajouterLog\" value=\"Ajouter un logiciel\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div id=\"tabs-12\">
\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example11\">
    \t\t\t\t<thead>
        \t\t\t<tr>
            \t\t\t<th>Nom</th>
            \t\t\t<th>Version</th>
            \t\t\t<th>Date de fin</th>
            \t\t\t<th>Actions</th>
        \t\t\t</tr>
    \t\t\t\t</thead>
   \t\t\t \t<tbody>
    \t\t\t\t ";
        // line 637
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_Langage"));
        foreach ($context['_seq'] as $context["_key"] => $context["langage"]) {
            // line 638
            echo "                \t\t<tr>\t        \t\t\t
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 640
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheLangage", array("id" => $this->getAttribute($this->getContext($context, "langage"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 641
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "langage"), "getNom", array(), "method"), "html", null, true);
            echo "           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t\t</a>
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 645
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheLangage", array("id" => $this->getAttribute($this->getContext($context, "langage"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 646
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "langage"), "getVersion", array(), "method"), "html", null, true);
            echo "           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t\t</a>
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<a href=\"";
            // line 650
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheLangage", array("id" => $this->getAttribute($this->getContext($context, "langage"), "getId", array(), "method"))), "html", null, true);
            echo "\">\t \t                \t\t\t\t
                \t\t\t\t\t";
            // line 651
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "langage"), "getDatefin", array(), "method"), "d/m/Y"), "html", null, true);
            echo "           \t\t\t\t              \t\t\t\t           \t\t\t
                \t\t\t\t</a>
                \t\t\t</td>
                \t\t\t<td>
                \t\t\t\t<div id=\"AdmiEditer\" >\t          
                \t\t\t\t\t<a class=\"lienEditer\" href=\"";
            // line 656
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierLangage", array("id" => $this->getAttribute($this->getContext($context, "langage"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 657
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/modif.png"), "html", null, true);
            echo "\" alt=\"editer\" height=\"12\" width=\"12\" />  
                \t\t\t\t\t\t";
            // line 658
            echo "Editer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t\t<div id=\"AdmiSupprimer\">
                \t\t\t\t\t<a class=\"lienSupprimer\" href=\"";
            // line 662
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerLangage", array("id" => $this->getAttribute($this->getContext($context, "langage"), "id"))), "html", null, true);
            echo "\">
                \t\t\t\t\t\t<img src=\"";
            // line 663
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/supp.png"), "html", null, true);
            echo "\" alt=\"supprimer\" height=\"12\" width=\"12\" />
                \t\t\t\t\t\t";
            // line 664
            echo "Supprimer";
            echo "
                \t\t\t\t\t</a>
                \t\t\t\t</div>
                \t\t\t</td>               \t\t\t
        \t\t\t\t</tr>
     \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 669
        echo "       \t\t\t
        \t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<a href=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ajoutLangage"), "html", null, true);
        echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"ajouterLan\" value=\"Ajouter un langage\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t
\t\t

\t";
    }

    // line 682
    public function block_javascript($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 683
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\$(\"#tabs\").tabs( {
\t\t\t\t\t\t\t\"show\": function(event, ui) {
\t\t\t\t\t\t\t\tvar table = \$.fn.dataTable.fnTables(true);
\t\t\t\t\t\t\t\tif ( table.length > 0 ) {
\t\t\t\t\t\t\t\t\t\$(table).dataTable().fnAdjustColumnSizing();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} );

\t\t\t\t\t\t\$(\"#tabs1\").tabs( {
\t\t\t\t\t\t\t\"show\": function(event, ui) {
\t\t\t\t\t\t\t\tvar table = \$.fn.dataTable.fnTables(true);
\t\t\t\t\t\t\t\tif ( table.length > 0 ) {
\t\t\t\t\t\t\t\t\t\$(table).dataTable().fnAdjustColumnSizing();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} );
\t\t\t\t
\t\t\t\t\t\$('table.display').dataTable( {
\t\t\t\t\t\t\"aLengthMenu\": [[25,50,100, -1], [25, 50,100, \"Tous\"]],
\t\t\t\t\t    \"iDisplayLength\": 50,
\t\t\t\t\t\t\"sScrollY\": \"400px\",
\t\t\t\t\t\t\t\"bScrollCollapse\": true,
\t\t\t\t\t\t\"bPaginate\": true,
\t\t\t\t\t\t\"bJQueryUI\": true,
\t\t\t\t\t\t\"aoColumnDefs\": [
\t\t\t\t\t\t\t{ \"sWidth\": \"10%\", \"aTargets\": [ -1 ] }
\t\t\t\t\t\t]
\t\t\t\t\t} );
\t\t\t\t} );
\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t";
    }

    public function getTemplateName()
    {
        return "melonRefappBundle:Administration:administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1359 => 683,  1354 => 682,  1341 => 672,  1336 => 669,  1324 => 664,  1320 => 663,  1316 => 662,  1309 => 658,  1305 => 657,  1301 => 656,  1293 => 651,  1289 => 650,  1282 => 646,  1278 => 645,  1271 => 641,  1267 => 640,  1263 => 638,  1259 => 637,  1241 => 622,  1236 => 619,  1224 => 614,  1220 => 613,  1216 => 612,  1209 => 608,  1205 => 607,  1201 => 606,  1193 => 601,  1189 => 600,  1182 => 596,  1178 => 595,  1171 => 591,  1167 => 590,  1163 => 588,  1159 => 587,  1141 => 572,  1136 => 569,  1124 => 564,  1120 => 563,  1116 => 562,  1109 => 558,  1105 => 557,  1101 => 556,  1093 => 551,  1089 => 550,  1082 => 546,  1078 => 545,  1071 => 541,  1067 => 540,  1063 => 538,  1059 => 537,  1041 => 522,  1036 => 519,  1024 => 514,  1020 => 513,  1016 => 512,  1009 => 508,  1005 => 507,  1001 => 506,  993 => 501,  989 => 500,  982 => 496,  978 => 495,  971 => 491,  967 => 490,  963 => 488,  959 => 487,  941 => 472,  936 => 469,  924 => 464,  920 => 463,  916 => 462,  909 => 458,  905 => 457,  901 => 456,  893 => 451,  889 => 450,  882 => 446,  878 => 445,  871 => 441,  867 => 440,  863 => 438,  859 => 437,  825 => 406,  820 => 403,  808 => 398,  804 => 397,  800 => 396,  793 => 392,  789 => 391,  785 => 390,  777 => 385,  773 => 384,  766 => 380,  762 => 379,  755 => 375,  751 => 374,  747 => 372,  743 => 371,  725 => 356,  720 => 353,  708 => 348,  704 => 347,  700 => 346,  693 => 342,  689 => 341,  685 => 340,  677 => 335,  673 => 334,  666 => 330,  662 => 329,  655 => 325,  651 => 324,  644 => 320,  640 => 319,  633 => 315,  629 => 314,  622 => 310,  618 => 309,  614 => 307,  610 => 306,  589 => 288,  584 => 285,  572 => 280,  568 => 279,  564 => 278,  557 => 274,  553 => 273,  549 => 272,  541 => 267,  537 => 266,  533 => 264,  529 => 263,  513 => 250,  508 => 247,  496 => 242,  492 => 241,  488 => 240,  481 => 236,  477 => 235,  473 => 234,  465 => 229,  461 => 228,  457 => 226,  453 => 225,  437 => 212,  432 => 209,  420 => 204,  416 => 203,  412 => 202,  405 => 198,  401 => 197,  397 => 196,  389 => 191,  385 => 190,  378 => 186,  374 => 185,  367 => 181,  363 => 180,  356 => 176,  352 => 175,  345 => 171,  341 => 170,  337 => 168,  333 => 167,  313 => 150,  308 => 147,  296 => 142,  292 => 141,  288 => 140,  281 => 136,  277 => 135,  273 => 134,  265 => 129,  261 => 128,  257 => 126,  253 => 125,  237 => 112,  232 => 109,  220 => 104,  216 => 103,  212 => 102,  205 => 98,  201 => 97,  197 => 96,  189 => 91,  185 => 90,  178 => 86,  174 => 85,  170 => 83,  166 => 82,  131 => 50,  126 => 48,  122 => 47,  118 => 46,  114 => 44,  109 => 42,  104 => 40,  99 => 36,  94 => 34,  89 => 32,  84 => 28,  78 => 25,  72 => 22,  66 => 18,  61 => 17,  57 => 15,  51 => 11,  48 => 10,  44 => 8,  41 => 7,  34 => 4,  31 => 3,);
    }
}
