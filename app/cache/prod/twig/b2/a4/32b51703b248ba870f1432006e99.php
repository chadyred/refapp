<?php

/* melonRefappBundle:Administration:ficheResponsableDsi.html.twig */
class __TwigTemplate_b2a432b51703b248ba870f1432006e99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("melonRefappBundle::layout.html.twig");

        $this->blocks = array(
            'menu_deroulant' => array($this, 'block_menu_deroulant'),
            'login' => array($this, 'block_login'),
            'contenu' => array($this, 'block_contenu'),
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
        echo "\t\t<div id='corps'>
\t\t\t<h2>Fiche responsable Dsi </h2>
\t\t\t<div class=\"formAjoutObjet\">
\t\t\t\t<div class=\"contAjoutObjet\">
\t\t\t\t<p>";
        // line 15
        echo "Nom :";
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "responsableDsi"), "getNom"), "html", null, true);
        echo "</p>
\t\t\t\t<p>";
        // line 16
        echo "Prenom :";
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "responsableDsi"), "getPrenom"), "html", null, true);
        echo "</p>
\t\t\t<p>\t";
        // line 17
        echo "Matricule :";
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "responsableDsi"), "getUsername"), "html", null, true);
        echo "</p>
\t\t\t<p>\t";
        // line 18
        echo "Numero de téléphone :";
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "responsableDsi"), "getNumTel"), "html", null, true);
        echo "</p>
\t\t\t<p>\t";
        // line 19
        echo "Service :";
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "responsableDsi"), "serviceAppliDsi"), "getNom"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"bouton\">
\t\t\t
\t\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_administration"), "html", null, true);
        echo "\">
\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"retour\" value=\"Retour à la liste\"/>
\t\t\t</a>
\t\t\t<a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierResponsableDsi", array("id" => $this->getAttribute($this->getContext($context, "responsableDsi"), "id"))), "html", null, true);
        echo "\">
\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"modifier \"value=\"Modifier\"/>
\t\t\t</a>
\t\t</div>
\t\t</div>
\t\t</div>\t
\t";
    }

    public function getTemplateName()
    {
        return "melonRefappBundle:Administration:ficheResponsableDsi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  89 => 23,  80 => 19,  74 => 18,  68 => 17,  62 => 16,  56 => 15,  50 => 11,  47 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
