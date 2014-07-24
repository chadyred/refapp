<?php

/* melonRefappBundle:Serveur:creerServeur.html.twig */
class __TwigTemplate_9b9dd882f32b86abbcd1cd07f90cde57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("melonRefappBundle::layout.html.twig");

        $_trait_0 = $this->env->loadTemplate("form_div_layout.html.twig");
        // line 10
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_0_blocks["base_form_label"] = $_trait_0_blocks["form_label"]; unset($_trait_0_blocks["form_label"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'menu_deroulant' => array($this, 'block_menu_deroulant'),
                'login' => array($this, 'block_login'),
                'form_label' => array($this, 'block_form_label'),
                'contenu' => array($this, 'block_contenu'),
                'javascript' => array($this, 'block_javascript'),
            )
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

    // line 12
    public function block_form_label($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayBlock("base_form_label", $context, $blocks);
        echo "

    ";
        // line 15
        if ($this->getContext($context, "required")) {
            // line 16
            echo "        <span class=\"required\" title=\"Ce champ est obligatoire\">*</span>
    ";
        }
    }

    // line 20
    public function block_contenu($context, array $blocks = array())
    {
        // line 21
        echo "\t\t<div id='corps'>
\t\t\t<h2>Création d'un Serveur</h2>
 
\t\t\t\t<div class=\"formCreerServeur\">
  \t\t\t\t\t<form method=\"post\" ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
  \t\t\t\t\t\t";
        // line 27
        echo "  \t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"formInfo\">
  \t\t\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'label', array("label" => "Nom* :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo "
\t\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ip"), 'label', array("label" => "Ip* :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ip"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ip"), 'widget');
        echo "
\t\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "hostname"), 'label', array("label" => "Hostname :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "hostname"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "hostname"), 'widget');
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "typeServeur"), 'label', array("label" => "Type :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "typeServeur"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "typeServeur"), 'widget');
        echo "
\t
  \t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateCreation"), 'label', array("label" => "Date de création :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateCreation"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateCreation"), 'widget');
        echo "
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "emplacement"), 'label', array("label" => "Emplacement :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "emplacement"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "emplacement"), 'widget');
        echo "
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t
\t\t\t\t\t\t<h5>* : champ(s) obligatoire(s)</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"validation\">
\t\t\t\t\t\t<a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_rechercheServeur"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"annuler\" value=\"Annuler\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<input type=\"submit\" class=\"btn-primary\" value=\"Créer le serveur\"/>
    \t\t\t\t </div>
    \t\t\t\t \t
  \t\t\t\t\t</form>
  \t\t\t\t\t
\t\t\t\t</div>
\t\t</div>
\t\t\t
\t";
    }

    // line 72
    public function block_javascript($context, array $blocks = array())
    {
        // line 73
        echo "\t\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\$(function(){
\$(\".InfoBulle\").tipTip();
});\t
\t\t\t
    imgout=new Image(9,9);
    imgin=new Image(9,9);

    /////////////////BEGIN USER EDITABLE///////////////////////////////
    \timgout.src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/expand.gif"), "html", null, true);
        echo "\";
    \timgin.src=src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/collapse.gif"), "html", null, true);
        echo "\";
    ///////////////END USER EDITABLE///////////////////////////////////

    //this switches expand collapse icons
    function filter(imagename,objectsrc){
    \tif (document.images){
    \t\tdocument.images[imagename].src=eval(objectsrc+\".src\");
    \t}
    }

    //show OR hide funtion depends on if element is shown or hidden
    function hidden_show(id) { 
    \t
    \tif (document.getElementById) { // DOM3 = IE5, NS6
    \t\tif (document.getElementById(id).style.display == \"none\"){
    \t\t\tdocument.getElementById(id).style.display = 'inline-block';
    \t\t\tfilter((\"img\"+id),'imgin');\t\t\t
    \t\t} else {
    \t\t\tfilter((\"img\"+id),'imgout');
    \t\t\tdocument.getElementById(id).style.display = 'none';\t\t\t
    \t\t}\t
    \t} else { 
    \t\tif (document.layers) {\t
    \t\t\tif (document.id.display == \"none\"){
    \t\t\t\tdocument.id.display = 'inline-block';
    \t\t\t\tfilter((\"img\"+id),'imgin');
    \t\t\t} else {
    \t\t\t\tfilter((\"img\"+id),'imgout');\t
    \t\t\t\tdocument.id.display = 'none';
    \t\t\t}
    \t\t} else {
    \t\t\tif (document.all.id.style.visibility == \"none\"){
    \t\t\t\tdocument.all.id.style.display = 'inline-block';
    \t\t\t} else {
    \t\t\t\tfilter((\"img\"+id),'imgout');
    \t\t\t\tdocument.all.id.style.display = 'none';
    \t\t\t}
    \t\t}
    \t}
    }

    function confirmation() {

    if (window.confirm('La sauvegarde n\\'a pas été éffectuée, Vous allez être redirigé vers une autre page. Êtes-vous sur de vouloir continuer ?')) {
        return true;
     } else {
        return false;
     }
    }   
    
</script>
\t";
    }

    public function getTemplateName()
    {
        return "melonRefappBundle:Serveur:creerServeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 84,  219 => 83,  205 => 73,  202 => 72,  186 => 59,  178 => 54,  172 => 51,  168 => 50,  164 => 49,  159 => 47,  155 => 46,  151 => 45,  146 => 43,  142 => 42,  138 => 41,  133 => 39,  129 => 38,  125 => 37,  120 => 35,  116 => 34,  112 => 33,  107 => 31,  103 => 30,  99 => 29,  93 => 27,  89 => 25,  83 => 21,  80 => 20,  74 => 16,  72 => 15,  66 => 13,  63 => 12,  59 => 8,  56 => 7,  49 => 4,  46 => 3,  14 => 10,);
    }
}
