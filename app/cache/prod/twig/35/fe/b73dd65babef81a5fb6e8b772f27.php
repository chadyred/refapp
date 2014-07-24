<?php

/* melonRefappBundle:Administration:ajoutServiceAppliDsi.html.twig */
class __TwigTemplate_35feb73dd65babef81a5fb6e8b772f27 extends Twig_Template
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
\t\t\t<h2>Ajouter un Service Dsi</h2>
\t\t\t<form method=\"post\" class=\"formAjoutObjet\" ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
  \t\t\t\t\t<div class=\"contAjoutObjet\">
  \t\t\t\t\t\t";
        // line 16
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
\t\t\t\t\t\t<div>  
\t\t\t\t\t\t\t";
        // line 19
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'label', array("label" => "Nom* :"));
        echo "
 
  \t\t\t\t\t\t\t";
        // line 22
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'errors');
        echo "
 
  \t\t\t\t\t\t\t";
        // line 25
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "\t\t\t\t\t\t
\t\t\t\t\t 
\t\t\t\t\t \t<h5>* : champ(s) obligatoire(s)</h5>
\t\t\t\t\t 
    \t\t\t\t
    \t\t\t\t  </div>
\t\t\t\t\t <div class=\"bouton\">\t<input type=\"submit\" class=\"btn-primary\" value=\"Sauvegarder\" id=\"boutonAjouterAdmin\"/>
  \t\t\t\t\t\t<a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_administration"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"Annuler\" value=\"Annuler\"/>
\t\t\t\t\t\t</a></div>
    \t\t\t\t 
  \t\t\t\t\t</form>
  \t\t\t\t\t
\t\t\t\t
\t\t</div>
\t\t\t
\t";
    }

    public function getTemplateName()
    {
        return "melonRefappBundle:Administration:ajoutServiceAppliDsi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 35,  84 => 28,  77 => 25,  71 => 22,  65 => 19,  59 => 16,  54 => 13,  50 => 11,  47 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
