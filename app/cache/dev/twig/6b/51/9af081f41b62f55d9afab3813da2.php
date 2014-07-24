<?php

/* melonRefappBundle:Security:login.html.twig */
class __TwigTemplate_6b519af081f41b62f55d9afab3813da2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("melonRefappBundle::layout.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu_deroulant' => array($this, 'block_menu_deroulant'),
            'login' => array($this, 'block_login'),
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
    public function block_header($context, array $blocks = array())
    {
        echo "  
\t<div class=\"banniere\">
\t\t<h1>Référentiel d'applications - v.2.0</h1>
\t</div>
\t<div class=\"logo\">
\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" />             
\t</div>
\t<div class=\"etatConnexion\">
\t\t";
        // line 11
        echo "Non connecté";
        echo "
\t</div>
";
    }

    // line 15
    public function block_menu_deroulant($context, array $blocks = array())
    {
        echo "  
";
    }

    // line 18
    public function block_login($context, array $blocks = array())
    {
        // line 19
        echo "   \t\t
<div class=\"panneau\">
  \t";
        // line 22
        echo " \t <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
 \t \t<div class=\"colonneLabelSimpleLogin\">
           \t<div class=\"champs\">
    \t\t\t<label for=\"username\">Identifiant :</label>
    \t\t</div>
    \t\t<div class=\"champs\">\t
    \t\t\t<label for=\"password\">Mot de passe :</label>
    \t\t</div>
    \t</div>\t
    \t<div class=\"colonneInputSimple\">
           \t<div class=\"champs\">    
            \t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
 \t\t   \t</div>
 \t\t   
           \t<div class=\"champs\">
            \t<input type=\"password\" id=\"password\" name=\"_password\" />
           \t</div>
           \t";
        // line 40
        echo "  \t\t\t";
        if ($this->getContext($context, "error")) {
            // line 41
            echo "    \t\t<div class=\"alert alert-error\">";
            echo "Mot de passe incorrect pour ce matricule";
            echo "</div>
  \t\t\t";
        }
        // line 43
        echo "           \t<div class=\"espaceBouton\">
    \t\t<input type=\"submit\" class=\"symfony-button-grey\" value=\"Ok\" />
    \t</div>
        </div>
   \t \t
 \t </form>
  </div>
 
";
    }

    public function getTemplateName()
    {
        return "melonRefappBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 43,  93 => 41,  90 => 40,  81 => 33,  66 => 22,  62 => 19,  59 => 18,  52 => 15,  45 => 11,  39 => 8,  30 => 3,);
    }
}
