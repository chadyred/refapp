<?php

/* melonRefappBundle:Administration:ajoutResponsableDsi.html.twig */
class __TwigTemplate_128fd249ac802f84ae180e8a6c9af55f extends Twig_Template
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
\t\t\t<h2>Ajouter un Responsable Dsi</h2>
\t\t\t\t\t<form method=\"post\" class=\"formAjoutObjet\" ";
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
\t\t\t\t\t\t<div>  
\t\t\t\t\t\t\t";
        // line 29
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'label', array("label" => "Prenom* :"));
        echo "
 
  \t\t\t\t\t\t\t";
        // line 32
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'errors');
        echo "
 
  \t\t\t\t\t\t\t";
        // line 35
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>  
\t\t\t\t\t\t\t";
        // line 39
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'label', array("label" => "Identifiant* :"));
        echo "
 
  \t\t\t\t\t\t\t";
        // line 42
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'errors');
        echo "
 
  \t\t\t\t\t\t\t";
        // line 45
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>  
\t\t\t\t\t\t\t";
        // line 49
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'label', array("label" => "Mot de passe* :"));
        echo "
 
  \t\t\t\t\t\t\t";
        // line 52
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'errors');
        echo "
 
  \t\t\t\t\t\t\t";
        // line 55
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>  
\t\t\t\t\t\t\t";
        // line 59
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "roles"), 'label', array("label" => "Rôles* :"));
        echo "
 
  \t\t\t\t\t\t\t";
        // line 62
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "roles"), 'errors');
        echo "
 
  \t\t\t\t\t\t\t";
        // line 65
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "roles"), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>  
\t\t\t\t\t\t\t";
        // line 69
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numTel"), 'label', array("label" => "Numero de téléphone :"));
        echo "
 
  \t\t\t\t\t\t\t";
        // line 72
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numTel"), 'errors');
        echo "
 
  \t\t\t\t\t\t\t";
        // line 75
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numTel"), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t<h5>* : champ(s) obligatoire(s)</h5>
\t\t\t\t\t  </div>
\t\t\t\t\t <div class=\"bouton\">\t<input type=\"submit\" class=\"btn-primary\" value=\"Sauvegarder\" id=\"boutonAjouterAdmin\"/>
  \t\t\t\t\t\t<a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_administration"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"Annuler\" value=\"Annuler\"/>
\t\t\t\t\t\t</a></div>
    \t\t\t\t 
  \t\t\t\t\t</form>
  \t\t\t\t\t
\t\t\t\t
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "melonRefappBundle:Administration:ajoutResponsableDsi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 83,  179 => 78,  172 => 75,  166 => 72,  160 => 69,  153 => 65,  147 => 62,  141 => 59,  134 => 55,  128 => 52,  122 => 49,  115 => 45,  109 => 42,  103 => 39,  96 => 35,  90 => 32,  84 => 29,  77 => 25,  71 => 22,  65 => 19,  59 => 16,  54 => 13,  50 => 11,  47 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
