<?php

/* melonRefappBundle:Application:creerAppli.html.twig */
class __TwigTemplate_ca558cd1c0721890e54939c90eb0d9ee extends Twig_Template
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
\t\t
\t\t\t<h2>Formulaire de création d'une application</h2>
 
\t\t\t\t<div class=\"formCreerAppli\">
  \t\t\t\t\t<form method=\"post\" ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
  \t\t\t\t\t\t";
        // line 28
        echo "  \t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
\t\t\t\t\t<div class=\"container1\">
\t\t\t\t\t<h4><a onclick=\"hidden_show('InfoGeneral');\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/collapse.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\" id=\"imgInfoGeneral\" alt=\"\" />";
        echo " Informations générales : ";
        echo "</a></h4>
\t\t\t\t\t<div id=\"InfoGeneral\" class=\"formInfo\">
\t\t\t\t\t<div class=\"block-left\">  
\t\t\t\t\t\t\t";
        // line 34
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "code"), 'label', array("label" => "Code* : "));
        echo "
  \t\t\t\t\t\t\t";
        // line 36
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "code"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 38
        echo "  \t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "code"), 'widget');
        echo "<img class=\"warning\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/warning.png"), "html", null, true);
        echo "\" title=\"Champ néccessaire pour compléter l'application\" alt=\"Champ néccessaire pour compléter l'application\" />
\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'label', array("label" => "Nom* :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo "<img class=\"warning\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/warning.png"), "html", null, true);
        echo "\" title=\"Champ néccessaire pour compléter l'application\" alt=\"Champ néccessaire pour compléter l'application\" />
\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "version"), 'label', array("label" => "Version :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "version"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "version"), 'widget');
        echo "
\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "periodeCritique"), 'label', array("label" => "Période critique :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "periodeCritique"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "periodeCritique"), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-right\">
  \t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dossierCNIL"), 'label', array("label" => "Dossier CNIL :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dossierCNIL"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dossierCNIL"), 'widget');
        echo "
\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateCreationDossierCNIL"), 'label', array("label" => "Date de création du dossier :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateCreationDossierCNIL"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateCreationDossierCNIL"), 'widget');
        echo "
  \t\t\t\t\t\t \t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateMiseEnOeuvre"), 'label', array("label" => "Date de mise en oeuvre :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateMiseEnOeuvre"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateMiseEnOeuvre"), 'widget');
        echo "
\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateDerniereMiseAJour"), 'label', array("label" => "Date de la dernière mise a jour :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateDerniereMiseAJour"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateDerniereMiseAJour"), 'widget');
        echo "
\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateFinDeVie"), 'label', array("label" => "Expiration de l'application :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateFinDeVie"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateFinDeVie"), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"InfoGeneral1\" class=\"formInfo2\">
\t\t\t\t\t\t<div class=\"block-left\">
  \t\t\t\t\t\t\t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "objet"), 'label', array("label" => "Objet :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "objet"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "objet"), 'widget');
        echo "
\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fonctionPrincipal"), 'label', array("label" => "Fonction principale :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fonctionPrincipal"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fonctionPrincipal"), 'widget');
        echo "<img class=\"warning\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/warning.png"), "html", null, true);
        echo "\" title=\"Champ néccessaire pour compléter l'application\" alt=\"Champ néccessaire pour compléter l'application\" />
\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "famille"), 'label', array("label" => "Famille :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "famille"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "famille"), 'widget');
        echo "
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbUtilisateur"), 'label', array("label" => "Nombre d'utilisateurs :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbUtilisateur"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbUtilisateur"), 'widget');
        echo "
\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "administrateurFonctionnel"), 'label', array("label" => "Administrateur fonctionnel :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "administrateurFonctionnel"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "administrateurFonctionnel"), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-right\">
  \t\t\t\t\t\t\t";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "traitementDonnee"), 'label', array("label" => "Type de traitement de donnée :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "traitementDonnee"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "traitementDonnee"), 'widget');
        echo "
\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "compatibilite"), 'label', array("label" => "Compatibilité :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "compatibilite"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "compatibilite"), 'widget');
        echo "<img class=\"warning\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/warning.png"), "html", null, true);
        echo "\" title=\"Champ néccessaire pour compléter l'application\" alt=\"Champ néccessaire pour compléter l'application\" />
\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "donneeFederale"), 'label', array("label" => "Existance de donnée fédérale :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "donneeFederale"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "donneeFederale"), 'widget');
        echo "
\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "exterieurCG"), 'label', array("label" => "Accès avec des partenaires extérieurs du CG :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "exterieurCG"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "exterieurCG"), 'widget');
        echo "
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "commentaire"), 'label', array("label" => "Commentaire :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "commentaire"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "commentaire"), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> ";
        // line 119
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"validation\"><h5>* : champ(s) obligatoire(s)</h5><a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_listeAppli"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"annuler\" value=\"Annuler\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<input type=\"submit\" class=\"btn-primary\" name=\"sauvegarder\" value=\"Sauvegarder\"/>
\t\t\t\t\t\t
    \t\t\t\t \t<input type=\"submit\" class=\"btn-primary\" value=\"Sauvegarder et quitter\"/></div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"container1\">
\t\t\t\t\t<h4><a onclick=\"hidden_show('InfoEntites');\"><img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/collapse.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\" id=\"imgInfoEntites\" alt=\"\" />";
        echo " Entités associées : ";
        echo "</a></h4>
\t\t\t\t\t<div id =\"InfoEntites\" class=\"formEntitesAssociees\">
\t\t\t\t\t<div  class=\"block-left\">\t
  \t\t\t\t\t\t\t";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "domaine"), 'label', array("label" => "Domaine :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "domaine"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "domaine"), 'widget');
        echo "
  \t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "editeur"), 'label', array("label" => "Editeur :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "editeur"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "editeur"), 'widget');
        echo "\t<img class=\"warning\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/warning.png"), "html", null, true);
        echo "\" title=\"Champ néccessaire pour compléter l'application\" alt=\"Champ néccessaire pour compléter l'application\" />
  \t\t\t\t\t\t\t<a class=\"btn-primary\" href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_nouvelEditeur", array("id" => 0)), "html", null, true);
        echo "\" onclick=\"return confirmation();\"  >Nouvel Editeur</a>
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "marche"), "nature"), 'label', array("label" => "Nature :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "marche"), "nature"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "marche"), "nature"), 'widget');
        echo "  
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-right\">
\t\t\t\t\t\t\t<p>";
        // line 146
        echo "Marché";
        echo "</p>
\t\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "marche"), "dateDebut"), 'label', array("label" => "Date début :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "marche"), "dateDebut"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "marche"), "dateDebut"), 'widget');
        echo "
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "marche"), "dateFin"), 'label', array("label" => "Date de fin :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "marche"), "dateFin"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "marche"), "dateFin"), 'widget');
        echo "
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container1\">
\t\t\t\t\t\t<h4><a onclick=\"hidden_show('InfoDir');\"><img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/collapse.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\" id=\"imgInfoDir\" alt=\"\" />";
        echo " Support DSI : ";
        echo "</a></h4>
\t\t\t\t\t\t<div id =\"InfoDir\" class=\"formObjets\">
\t\t\t\t\t\t <div class=\"block-left\">\t
  \t\t\t\t\t\t\t";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "directions"), 'label', array("label" => "Direction(s) :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "directions"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "directions"), 'widget');
        echo "<img class=\"warning\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/warning.png"), "html", null, true);
        echo "\" title=\"Champ néccessaire pour compléter l'application\" alt=\"Champ néccessaire pour compléter l'application\" />
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t\t\t<a href=\"#\" class=\"InfoBulle\" title=\"Appuyer sur Ctrl pour sélectionner plusieurs champs\" >
\t\t\t\t\t\t\t<img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/infobulle.png"), "html", null, true);
        echo "\" alt=\"Infobulle\" />
\t\t\t\t\t\t</a>
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "responsablesDsi"), 'label', array("label" => "Responsable(s)* :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "responsablesDsi"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "responsablesDsi"), 'widget');
        echo "<img class=\"warning\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/warning.png"), "html", null, true);
        echo "\" title=\"Champ néccessaire pour compléter l'application\" alt=\"Champ néccessaire pour compléter l'application\" />
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t\t\t<a href=\"#\" class=\"InfoBulle\" title=\"Appuyer sur Ctrl pour sélectionner plusieurs champs\" >
\t\t\t\t\t\t\t<img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/infobulle.png"), "html", null, true);
        echo "\" alt=\"Infobulle\" />
\t\t\t\t\t\t</a>
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t<div class=\"block-right\">\t\t\t\t\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "servicesAppliDsi"), 'label', array("label" => "Service(s) associé(s) :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "servicesAppliDsi"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "servicesAppliDsi"), 'widget');
        echo "<img class=\"warning\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/warning.png"), "html", null, true);
        echo "\" title=\"Champ néccessaire pour compléter l'application\" alt=\"Champ néccessaire pour compléter l'application\" />
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t\t\t<a href=\"#\" class=\"InfoBulle\" title=\"Appuyer sur Ctrl pour sélectionner plusieurs champs\" >
\t\t\t\t\t\t\t<img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/infobulle.png"), "html", null, true);
        echo "\" alt=\"Infobulle\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div style=\"display:none;\">
  \t\t\t\t\t\t\t";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "competences"), 'label', array("label" => "Compétence(s) :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "competences"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "competences"), 'widget');
        echo "
\t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t</div>
  \t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"container1\">
\t\t\t\t\t<h4><a onclick=\"hidden_show('Applications');\"><img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/collapse.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\" id=\"imgApplications\" alt=\"\" />";
        echo " Application(s) et composant(s) associé(s) : ";
        echo "</a> <img class=\"warning\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/warning.png"), "html", null, true);
        echo "\" title=\"Champ néccessaire pour compléter l'application\" alt=\"Champ néccessaire pour compléter l'application\" /></h4>
 \t\t\t\t\t<div id =\"Applications\" class =\"formApplicationsAssoc\"> 
\t\t\t\t\t<div id=\"tableficheAppli\">\t\t\t
  \t\t\t\t\t\t\t";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "applications"), 'label', array("label" => "Applications(s) associée(s) :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "applications"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "applications"), 'widget');
        echo "
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t<a href=\"#\" class=\"InfoBulle\" title=\"Appuyer sur Ctrl pour sélectionner plusieurs champs\" >
\t\t\t\t\t\t\t<img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/infobulle.png"), "html", null, true);
        echo "\" alt=\"Infobulle\" />
\t\t\t\t\t\t</a>
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t\t";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "composants"), 'label', array("label" => "Composant(s) associé(s) :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "composants"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "composants"), 'widget');
        echo "
  \t\t\t\t\t
\t\t\t\t\t\t<a href=\"#\" class=\"InfoBulle\" title=\"Appuyer sur Ctrl pour sélectionner plusieurs champs\" >
\t\t\t\t\t\t\t<img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/infobulle.png"), "html", null, true);
        echo "\" alt=\"Infobulle\" />
\t\t\t\t\t\t</a>
  \t\t\t\t\t\t\t";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "technologies"), 'label', array("label" => "Technologie(s) associée(s) :"));
        echo "
  \t\t\t\t\t\t\t";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "technologies"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "technologies"), 'widget');
        echo "
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t<a href=\"#\" class=\"InfoBulle\" title=\"Appuyer sur Ctrl pour sélectionner plusieurs champs\" >
\t\t\t\t\t\t\t<img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/infobulle.png"), "html", null, true);
        echo "\" alt=\"Infobulle\" />
\t\t\t\t\t\t</a>
  \t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"container1\">
\t\t\t\t\t<div class=\"formEnvEtDoc\" >
\t\t\t\t\t<div class=\"formEnvironnement\">
\t\t\t\t\t\t<h4><a onclick=\"hidden_show('formEnv');\"><img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/collapse.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\" id=\"imgformEnv\" alt=\"\" /></a>";
        echo " Associer un environnement : ";
        echo "<img class=\"warning\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/warning.png"), "html", null, true);
        echo "\" title=\"Champ néccessaire pour compléter l'application\" alt=\"Champ néccessaire pour compléter l'application\" /></h4>
\t\t\t\t\t\t\t<div id=\"formEnv\" style=\"display:inline-block;\">
  \t\t\t\t\t\t\t";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "environnements"), 'label');
        echo "
  \t\t\t\t\t\t\t";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "environnements"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "environnements"), 'widget');
        echo " \t
  \t\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div> \t
\t\t\t\t\t<div class=\"formDocumentation\"> 
\t\t\t\t\t\t<h4><a onclick=\"hidden_show('formDoc');\"><img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/collapse.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\" id=\"imgformDoc\" alt=\"\" /></a>";
        echo "Associer une documentation : ";
        echo "\t<img class=\"warning\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/warning.png"), "html", null, true);
        echo "\" title=\"Champ néccessaire pour compléter l'application\" alt=\"Champ néccessaire pour compléter l'application\" /></h4> \t\t\t\t\t\t
   \t\t\t\t\t\t\t<div id=\"formDoc\" style=\"display:inline-block;\">
  \t\t\t\t\t\t\t";
        // line 238
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "documentations"), 'label');
        echo "
  \t\t\t\t\t\t\t";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "documentations"), 'errors');
        echo "
  \t\t\t\t\t\t\t";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "documentations"), 'widget');
        echo "
  \t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t</div>
  \t\t\t\t\t</div>
  \t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo " \t\t\t\t\t
  \t\t\t\t\t\t<div class=\"validation\"><h5>* : champ(s) obligatoire(s)</h5>
  \t\t\t\t\t\t<a href=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_listeAppli"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn-primary\" name=\"annuler\" value=\"Annuler\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<input type=\"submit\" class=\"btn-primary\" name=\"sauvegarder\" value=\"Sauvegarder\"/>
    \t\t\t\t \t<input type=\"submit\" class=\"btn-primary\" value=\"Sauvegarder et quitter\"/></div>
  \t\t\t\t\t</form>
\t\t\t\t</div>
\t\t</div>

\t
\t\t

\t";
    }

    // line 261
    public function block_javascript($context, array $blocks = array())
    {
        // line 262
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
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/expand.gif"), "html", null, true);
        echo "\";
    \timgin.src=src=\"";
        // line 273
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
        return "melonRefappBundle:Application:creerAppli.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  735 => 273,  731 => 272,  717 => 262,  714 => 261,  697 => 247,  692 => 245,  684 => 240,  680 => 239,  676 => 238,  667 => 236,  660 => 232,  656 => 231,  652 => 230,  643 => 228,  631 => 219,  625 => 216,  621 => 215,  617 => 214,  612 => 212,  606 => 209,  602 => 208,  598 => 207,  592 => 204,  586 => 201,  582 => 200,  578 => 199,  568 => 196,  559 => 190,  555 => 189,  551 => 188,  545 => 185,  537 => 182,  533 => 181,  529 => 180,  521 => 175,  513 => 172,  509 => 171,  505 => 170,  499 => 167,  491 => 164,  487 => 163,  483 => 162,  475 => 159,  467 => 154,  463 => 153,  459 => 152,  454 => 150,  450 => 149,  446 => 148,  441 => 146,  435 => 143,  431 => 142,  427 => 141,  422 => 139,  416 => 138,  412 => 137,  408 => 136,  403 => 134,  399 => 133,  395 => 132,  387 => 129,  375 => 120,  372 => 119,  366 => 115,  362 => 114,  358 => 113,  353 => 111,  349 => 110,  345 => 109,  340 => 107,  336 => 106,  332 => 105,  325 => 103,  321 => 102,  317 => 101,  312 => 99,  308 => 98,  304 => 97,  298 => 94,  294 => 93,  290 => 92,  285 => 90,  281 => 89,  277 => 88,  272 => 86,  268 => 85,  264 => 84,  257 => 82,  253 => 81,  249 => 80,  244 => 78,  240 => 77,  236 => 76,  228 => 71,  224 => 70,  220 => 69,  215 => 67,  211 => 66,  207 => 65,  202 => 63,  198 => 62,  194 => 61,  189 => 59,  185 => 58,  181 => 57,  176 => 55,  172 => 54,  168 => 53,  162 => 50,  158 => 49,  154 => 48,  149 => 46,  145 => 45,  141 => 44,  134 => 42,  130 => 41,  126 => 40,  118 => 38,  113 => 36,  108 => 34,  100 => 30,  94 => 28,  90 => 26,  83 => 21,  80 => 20,  74 => 16,  72 => 15,  66 => 13,  63 => 12,  59 => 8,  56 => 7,  49 => 4,  46 => 3,  14 => 10,);
    }
}
