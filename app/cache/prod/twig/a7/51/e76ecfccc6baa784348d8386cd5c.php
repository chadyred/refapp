<?php

/* melonRefappBundle:Administration:ficheServiceAppliDsi.html.twig */
class __TwigTemplate_a751e76ecfccc6baa784348d8386cd5c extends Twig_Template
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

\t\t\t<h2>Fiche service applicatif Dsi </h2>
\t\t\t<div class=\"formAjoutObjet\">
\t\t\t\t<div class=\"contAjoutObjet\">
\t\t\t\t<p>";
        // line 16
        echo "Nom :";
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "serviceAppliDsi"), "getNom"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"bouton\">
\t\t
\t\t\t<a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_administration"), "html", null, true);
        echo "\">
\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"retour\" value=\"Retour à la liste\"/>
\t\t\t</a>
\t\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierServiceAppliDsi", array("id" => $this->getAttribute($this->getContext($context, "serviceAppliDsi"), "id"))), "html", null, true);
        echo "\">
\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"modifier \"value=\"Modifier\"/>
\t\t\t</a>
\t\t\t</div></div>
\t\t</div>\t
\t";
    }

    public function getTemplateName()
    {
        return "melonRefappBundle:Administration:ficheServiceAppliDsi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  66 => 20,  57 => 16,  50 => 11,  47 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
