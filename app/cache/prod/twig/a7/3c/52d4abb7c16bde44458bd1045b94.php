<?php

/* melonRefappBundle:Application:ficheAppli.html.twig */
class __TwigTemplate_a73c52d4abb7c16bde44458bd1045b94 extends Twig_Template
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
        echo "\t\t<div id='corps'>

\t\t\t<h2>Fiche synthèse de l'application ";
        // line 13
        echo twig_escape_filter($this->env, ((((("\"" . $this->getAttribute($this->getContext($context, "appli"), "getNom")) . "\"") . " (application mise a jour le ") . twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getDateDerniereMiseAJour"), "d/m/Y")) . ")"), "html", null, true);
        echo " </h2>
\t\t\t\t<div class=\"formFicheAppli\">
\t\t\t\t\t\t\t<div class=\"validation\">
 \t\t\t
\t\t\t";
        // line 17
        $context["b"] = 1;
        echo " 
\t\t\t";
        // line 18
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "\t\t\t\t\t\t\t\t    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierAppli", array("id" => $this->getAttribute($this->getContext($context, "appli"), "id"))), "html", null, true);
            echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"modifier \"value=\"Modifier\"/>
\t\t\t\t</a> 
                \t\t\t\t";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE_APPLICATION")) {
            // line 23
            echo "                \t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "appli"), "getResponsablesDsi", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                // line 24
                echo "                \t\t\t\t\t";
                if ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "getUsername", array(), "method") == $this->getAttribute($this->getContext($context, "responsable"), "getUsername", array(), "method")) && ($this->getContext($context, "b") == 1))) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierAppli", array("id" => $this->getAttribute($this->getContext($context, "appli"), "id"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"modifier \"value=\"Modifier\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    // line 28
                    $context["b"] = 0;
                    echo " 
\t\t\t\t\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t";
        }
        // line 32
        echo "\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 33
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerAppli", array("id" => $this->getAttribute($this->getContext($context, "appli"), "id"))), "html", null, true);
            echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"supprimer\" value=\"Supprimer\"/>
\t\t\t\t</a>
\t\t\t";
        }
        // line 37
        echo "\t\t\t</div>
\t\t\t\t\t<div class=\"container1\">
\t\t\t\t\t<h4><a onclick=\"hidden_show('InfoGeneral');\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/collapse.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\" id=\"imgInfoGeneral\" alt=\"\" />";
        echo " Informations générales : ";
        echo "</a></h4>
\t\t\t\t\t<div id=\"InfoGeneral\" class=\"formInfo\">
\t\t\t\t\t<div class=\"block-left\">  
\t\t\t\t\t<p><span>";
        // line 42
        echo "Code :";
        echo " </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getCode"), "html", null, true);
        echo "\t</p>\t\t
\t\t\t\t\t<p><span>";
        // line 43
        echo "Nom :";
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getNom"), "html", null, true);
        echo "</p>
\t\t\t\t\t";
        // line 44
        if (($this->getAttribute($this->getContext($context, "appli"), "version") == null)) {
            // line 45
            echo "\t\t\t\t\t\t<p><span>";
            echo "Version : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t\t\t<p><span>";
            echo "Version :";
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getVersion", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 48
        echo "\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 50
        if (($this->getAttribute($this->getContext($context, "appli"), "periodeCritique") == null)) {
            // line 51
            echo "\t\t\t\t\t\t<p><span>";
            echo "Période Critique : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t\t<p><span>";
            echo "Période Critique :";
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getPeriodeCritique", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 54
        echo "\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"block-right\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 58
        if (($this->getAttribute($this->getContext($context, "appli"), "dossierCNIL") == null)) {
            // line 59
            echo "\t\t\t\t\t\t<p><span>";
            echo "Dossier CNIL : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 61
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getContext($context, "appli"), "getDossierCNIL", array(), "method") == 1)) {
                echo "\t
\t\t\t\t\t\t\t<p><span>";
                // line 62
                echo "Dossier CNIL : ";
                echo "</span>";
                echo "oui";
                echo " </p>
\t\t\t\t\t\t";
            } else {
                // line 64
                echo "\t\t\t\t\t\t\t<p><span>";
                echo "Dossier CNIL : ";
                echo "</span> ";
                echo "non";
                echo "</p>
\t\t\t\t\t\t";
            }
            // line 65
            echo "\t
\t\t\t\t\t";
        }
        // line 66
        echo "\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 68
        if (($this->getAttribute($this->getContext($context, "appli"), "dateCreationDossierCNIL") == null)) {
            // line 69
            echo "\t\t\t\t\t\t<p><span>";
            echo "Date de création du dossier : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 71
            echo "\t\t\t\t\t\t<p><span>";
            echo "Date de création du dossier : ";
            echo " </span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getDateCreationDossierCNIL", array(), "method"), "d/m/Y"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 72
        echo "\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 75
        if (($this->getAttribute($this->getContext($context, "appli"), "dateMiseEnOeuvre") == null)) {
            // line 76
            echo "\t\t\t\t\t\t<p><span>";
            echo "Date de mise en oeuvre : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 77
            echo "\t
\t\t\t\t\t\t<p><span>";
            // line 78
            echo "Date de mise en oeuvre : ";
            echo " </span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getDateMiseEnOeuvre", array(), "method"), "d/m/Y"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 79
        echo "\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 82
        if (($this->getAttribute($this->getContext($context, "appli"), "dateDerniereMiseAJour") == null)) {
            // line 83
            echo "\t\t\t\t\t\t<p><span>";
            echo "Dernière mise a jour de l'application : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 84
            echo "\t
\t\t\t\t\t\t<p><span>";
            // line 85
            echo "Dernière mise a jour de l'application : ";
            echo " </span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getDateDerniereMiseAJour", array(), "method"), "d/m/Y"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 86
        echo "\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 89
        if (($this->getAttribute($this->getContext($context, "appli"), "dateFinDeVie") == null)) {
            // line 90
            echo "\t\t\t\t\t\t<p><span>";
            echo "L'application expire le : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 91
            echo "\t
\t\t\t\t\t\t<p><span>";
            // line 92
            echo "L'application expire le : ";
            echo "</span> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "dateFinDeVie", array(), "method"), "d/m/Y"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 93
        echo "\t
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"InfoGeneral1\" class=\"formInfo2\">
\t\t\t\t\t<div class=\"block-left\">  
\t\t\t\t\t";
        // line 97
        if (($this->getAttribute($this->getContext($context, "appli"), "objet") == null)) {
            // line 98
            echo "\t\t\t\t\t\t<p><span>";
            echo "Objet : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 99
            echo "\t
\t\t\t\t\t\t<p><span>";
            // line 100
            echo "Objet :";
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getObjet", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 101
        echo "\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 103
        if (($this->getAttribute($this->getContext($context, "appli"), "fonctionPrincipal") == null)) {
            // line 104
            echo "\t\t\t\t\t\t<p><span>";
            echo "Fonction Principale : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 105
            echo "\t
\t\t\t\t\t\t<p><span>";
            // line 106
            echo "Fonction Principale :";
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getFonctionPrincipal", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 107
        echo "\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 109
        if (($this->getAttribute($this->getContext($context, "appli"), "famille") == null)) {
            // line 110
            echo "\t\t\t\t\t\t<p><span>";
            echo "Famille : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 111
            echo "\t
\t\t\t\t\t\t<p><span>";
            // line 112
            echo "Famille :";
            echo " </span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getFamille", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 113
        echo "\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 115
        if (($this->getAttribute($this->getContext($context, "appli"), "nbUtilisateur") == null)) {
            // line 116
            echo "\t\t\t\t\t\t<p><span>";
            echo "Nombre d'utilisateur : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 117
            echo "\t
\t\t\t\t\t\t<p><span>";
            // line 118
            echo "Nombre d'utilisateur :";
            echo " </span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getNbUtilisateur", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 119
        echo "\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 121
        if (($this->getAttribute($this->getContext($context, "appli"), "administrateurFonctionnel") == null)) {
            // line 122
            echo "\t\t\t\t\t\t<p><span>";
            echo "Administrateur fonctionnel : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 123
            echo "\t
\t\t\t\t\t\t<p><span>";
            // line 124
            echo "Administrateur fonctionnel :";
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getAdministrateurFonctionnel", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 125
        echo "\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"block-right\">  
\t\t\t\t\t";
        // line 128
        if (($this->getAttribute($this->getContext($context, "appli"), "traitementDonnee") == null)) {
            // line 129
            echo "\t\t\t\t\t\t<p><span>";
            echo "Traitement de donnée : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 130
            echo "\t
\t\t\t\t\t\t<p><span>";
            // line 131
            echo "Traitement de donnée :";
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getTraitementDonnee", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 132
        echo "\t 
\t\t\t\t\t
\t\t\t\t\t";
        // line 134
        if (($this->getAttribute($this->getContext($context, "appli"), "compatibilite") == null)) {
            // line 135
            echo "\t\t\t\t\t\t<p><span>";
            echo "Compatibilité : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 136
            echo "\t
\t\t\t\t\t\t<p><span>";
            // line 137
            echo "Compatibilité :";
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getCompatibilite", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 138
        echo "\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 140
        if (($this->getAttribute($this->getContext($context, "appli"), "donneeFederale") == null)) {
            // line 141
            echo "\t\t\t\t\t\t<p><span>";
            echo "Donnee Federale : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 143
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getContext($context, "appli"), "getDonneeFederale", array(), "method") == 1)) {
                echo "\t
\t\t\t\t\t\t<p><span>\t";
                // line 144
                echo "Existance de donnée fédérale : ";
                echo "</span>";
                echo "oui";
                echo "</p>
\t\t\t\t\t\t";
            } else {
                // line 146
                echo "\t\t\t\t\t\t<p><span>\t";
                echo "Existance de donnée fédérale : ";
                echo "</span>";
                echo "non";
                echo "</p>
\t\t\t\t\t\t";
            }
            // line 147
            echo "\t\t
\t\t\t\t\t";
        }
        // line 148
        echo "\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 150
        if (($this->getAttribute($this->getContext($context, "appli"), "exterieurCG") == null)) {
            // line 151
            echo "\t\t\t\t\t\t<p><span>";
            echo "Exterieur CG : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 153
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getContext($context, "appli"), "getExterieurCG", array(), "method") == 1)) {
                echo "\t
\t\t\t\t\t\t\t<p><span>";
                // line 154
                echo "Accès avec des partenaires extérieurs du CG : ";
                echo "</span>";
                echo "oui";
                echo "</p>
\t\t\t\t\t\t";
            } else {
                // line 156
                echo "\t\t\t\t\t\t\t<p><span>";
                echo "Accès avec des partenaires extérieurs du CG : ";
                echo "</span>";
                echo "non";
                echo "</p>
\t\t\t\t\t\t";
            }
            // line 157
            echo "\t\t
\t\t\t\t\t";
        }
        // line 158
        echo "\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 160
        if (($this->getAttribute($this->getContext($context, "appli"), "commentaire") == null)) {
            // line 161
            echo "\t\t\t\t\t\t<p><span>";
            echo "Commentaire : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 162
            echo "\t
\t\t\t\t\t\t<p><span>";
            // line 163
            echo "Commentaire :";
            echo " </span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appli"), "getCommentaire", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 164
        echo "\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"container1\">
\t\t\t\t<h4><a onclick=\"hidden_show('InfoEntites');\"><img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/collapse.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\" id=\"imgInfoEntites\" alt=\"\" />";
        echo " Entités associées : ";
        echo "</a></h4>
\t\t\t\t<div id =\"InfoEntites\" class=\"formEntitesAssociees\">
\t\t\t\t\t<div  class=\"block-left\">\t
\t\t\t\t\t";
        // line 173
        if (($this->getAttribute($this->getContext($context, "appli"), "domaine") == null)) {
            // line 174
            echo "\t\t\t\t\t\t<p><span>";
            echo "Domaine : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 176
            echo "\t\t\t\t\t\t<p><span>";
            echo "Domaine :";
            echo " </span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "domaine"), "getNom", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 177
        echo "\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 180
        if (($this->getAttribute($this->getContext($context, "appli"), "editeur") == null)) {
            // line 181
            echo "\t\t\t\t\t\t<p><span>";
            echo "Editeur : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 182
            echo "\t\t\t
\t\t\t\t\t\t<p><span>";
            // line 183
            echo "Editeur : ";
            echo " </span><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheEditeur", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "editeur"), "getId", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "editeur"), "getNom", array(), "method"), "html", null, true);
            echo "</a></p>
\t\t\t\t\t\t<div id=\"InfoEditeur\"> 
\t\t\t\t\t\t\t<p>";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "editeur"), "getNumtel", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p>";
            // line 186
            echo twig_escape_filter($this->env, (((((($this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "editeur"), "getNumero", array(), "method") . " ") . $this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "editeur"), "getRue", array(), "method")) . " ") . $this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "editeur"), "getCodepostal", array(), "method")) . " ") . $this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "editeur"), "getVille", array(), "method")), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p>";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "editeur"), "getMail", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p>";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "editeur"), "getResponsableTechnique", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p>";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "editeur"), "getResponsableApplication", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 191
        echo "\t
\t\t\t\t\t
\t\t\t\t\t<!-- Affiche toutes les directions associ�es � l'application  -->
\t\t\t\t\t";
        // line 194
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "directions"), "count") > 0)) {
            // line 195
            echo "   \t\t\t\t\t\t<p><span>";
            echo "Directions : ";
            echo "</span>
   \t\t\t\t\t";
            // line 196
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "appli"), "directions"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["direction"]) {
                // line 197
                echo "      \t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "direction"), "nom"), "html", null, true);
                echo "
      \t\t\t\t";
                // line 198
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo " - ";
                }
                // line 199
                echo "   \t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['direction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
   \t\t\t\t\t";
        } else {
            // line 201
            echo "   \t\t\t\t\t\t<p><span>";
            echo "Directions : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
 \t\t\t\t\t";
        }
        // line 203
        echo " \t\t\t\t\t
 \t\t\t\t\t\t<!-- Affiche toutes les service(s) associ�es � l'application  -->
\t\t\t\t";
        // line 205
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "servicesAppliDsi"), "count") > 0)) {
            // line 206
            echo "   \t\t\t\t\t<p><span>";
            echo "Service(s) gérant(s) :";
            echo "</span>
   \t\t\t\t\t";
            // line 207
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "appli"), "servicesAppliDsi"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["serviceAppliDsi"]) {
                // line 208
                echo "      \t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "serviceAppliDsi"), "nom"), "html", null, true);
                echo "
      \t\t\t\t";
                // line 209
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo " - ";
                }
                // line 210
                echo "   \t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serviceAppliDsi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
   \t\t\t\t";
        } else {
            // line 212
            echo "   \t\t\t\t\t<p><span>";
            echo "Service(s) gérant(s) : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
 \t\t\t\t";
        }
        // line 214
        echo " \t\t\t\t
 \t\t\t\t<!-- Affiche toutes les directions associ�es � l'application  -->
\t\t\t\t";
        // line 216
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "responsablesDsi"), "count") > 0)) {
            // line 217
            echo "   \t\t\t\t\t<p><span>";
            echo "Responsable(s) :";
            echo "</span>
   \t\t\t\t\t";
            // line 218
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "appli"), "responsablesDsi"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["responsableDsi"]) {
                // line 219
                echo "      \t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "responsableDsi"), "nom"), "html", null, true);
                echo "
      \t\t\t\t";
                // line 220
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo " - ";
                }
                // line 221
                echo "   \t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsableDsi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
   \t\t\t\t";
        } else {
            // line 223
            echo "   \t\t\t\t\t<p><span>";
            echo "Responsable(s) : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
 \t\t\t\t";
        }
        // line 225
        echo " \t\t\t\t
\t\t\t\t\t</div> ";
        // line 227
        echo "\t\t\t\t\t<div class=\"block-right\">\t
\t\t\t\t\t";
        // line 228
        if (($this->getAttribute($this->getContext($context, "appli"), "marche") == null)) {
            // line 229
            echo "\t\t\t\t\t\t<p><span>";
            echo "Marché : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
\t\t\t\t\t";
        } else {
            // line 230
            echo "\t
\t\t\t\t\t\t<p><span>";
            // line 231
            echo "Marché :";
            echo "</span></p>
\t\t\t\t\t\t<p><span>";
            // line 232
            echo "Date début : ";
            echo " </span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "marche"), "getDateDebut", array(), "method"), "d/m/Y"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p><span>";
            // line 233
            echo "Date de fin : ";
            echo "</span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "marche"), "getDateFin", array(), "method"), "d/m/Y"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 235
        echo "\t\t\t\t\t
\t\t\t
 \t\t\t<!-- Affiche toutes les technologie(s) associ�es � l'application  -->
\t\t\t\t";
        // line 238
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "technologies"), "count") > 0)) {
            // line 239
            echo "   \t\t\t\t\t<p><span>";
            echo "Technologie(s) :";
            echo "</span>
   \t\t\t\t\t";
            // line 240
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "appli"), "technologies"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["technologie"]) {
                // line 241
                echo "      \t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "technologie"), "nom"), "html", null, true);
                echo "
      \t\t\t\t";
                // line 242
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo " - ";
                }
                // line 243
                echo "   \t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technologie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
   \t\t\t\t";
        } else {
            // line 245
            echo "   \t\t\t\t\t<p><span>";
            echo "Technologie(s) : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
 \t\t\t\t";
        }
        // line 247
        echo " \t\t\t\t\t
 \t\t\t<!-- Affiche toutes les docs associées à l'application  -->
\t\t\t\t
 \t\t\t\t</div>";
        // line 251
        echo " \t\t\t\t</div>\t";
        // line 252
        echo " \t\t\t\t</div>\t";
        // line 253
        echo " \t\t\t\t<div class=\"container1\">
\t\t\t\t\t<h4><a onclick=\"hidden_show('Composants');\"><img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/collapse.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\" id=\"imgComposants\" alt=\"\" />";
        echo " Composant(s) associé(s)";
        echo "</a></h4>
 \t\t\t\t<div id =\"Composants\" class =\"formComposants\"> 
\t\t\t\t<div class=\"block-left\">\t
 \t\t\t\t";
        // line 257
        $context["nbMois1"] = 0;
        // line 258
        echo "   \t\t\t \t";
        $context["nbMois2"] = 0;
        echo " 
   \t\t\t \t";
        // line 259
        $context["nbMois3"] = 0;
        echo "  
   \t\t\t ";
        // line 260
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "obsolescence"));
        foreach ($context['_seq'] as $context["_key"] => $context["ob"]) {
            echo " 
   \t\t\t \t";
            // line 261
            $context["nbMois1"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois1", array(), "method");
            // line 262
            echo "   \t\t\t \t";
            $context["nbMois2"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois2", array(), "method");
            echo " 
   \t\t\t \t";
            // line 263
            $context["nbMois3"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois3", array(), "method");
            echo "  
   \t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ob'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo " \t\t\t<!-- Affiche toutes les langages associ�es � l'application  -->
 \t\t\t
   \t\t\t";
        // line 267
        if (($this->getContext($context, "list_langage_appli") == null)) {
            // line 268
            echo "   \t\t\t\t<p>\t<span class=\"attribut\">";
            echo "Langage(s) : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
   \t\t\t";
        } else {
            // line 270
            echo "   \t\t\t\t<p><span class=\"attribut\">";
            echo "Langage(s) : ";
            echo "</span></p>
   \t\t\t\t<ul>
   \t\t\t\t\t";
            // line 272
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_langage_appli"));
            foreach ($context['_seq'] as $context["_key"] => $context["langage"]) {
                // line 273
                echo "   \t\t\t\t\t\t";
                if (($this->getAttribute($this->getContext($context, "langage"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == (-1))) {
                    echo " <!-- Non renseigné -->
   \t\t\t\t\t\t   \t<li class=\"normal\">";
                    // line 274
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "langage"), "nom") . " ") . $this->getAttribute($this->getContext($context, "langage"), "version")), "html", null, true);
                    echo " </li>\t
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "langage"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 0)) {
                    // line 275
                    echo " \t<!-- Périmé depuis dateFin-->
   \t\t\t\t\t\t\t<li class=\"rouge\">";
                    // line 276
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "langage"), "nom") . " ") . $this->getAttribute($this->getContext($context, "langage"), "version")), "html", null, true);
                    echo " : langage déja obsolete depuis ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "langage"), "getDateFin", array(), "method"), "d/m/Y"), "html", null, true);
                    echo "</li>  \t\t
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "langage"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 1)) {
                    // line 277
                    echo " \t<!-- Périmé dans 1 mois-->
   \t\t\t\t\t\t\t<li class=\"jaune\">";
                    // line 278
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "langage"), "nom") . " ") . $this->getAttribute($this->getContext($context, "langage"), "version")), "html", null, true);
                    echo " : langage obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois3"), "html", null, true);
                    echo " mois </li>
      \t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "langage"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 3)) {
                    // line 279
                    echo "\t<!-- Périmé dans 3 mois-->
   \t\t\t\t\t\t\t<li class=\"orange\">";
                    // line 280
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "langage"), "nom") . " ") . $this->getAttribute($this->getContext($context, "langage"), "version")), "html", null, true);
                    echo " : langage obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois2"), "html", null, true);
                    echo " mois </li>
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "langage"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 6)) {
                    // line 281
                    echo "\t<!-- Périmé dans 6 mois-->
   \t\t\t\t\t\t\t<li class=\"rouge\">";
                    // line 282
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "langage"), "nom") . " ") . $this->getAttribute($this->getContext($context, "langage"), "version")), "html", null, true);
                    echo " : langage obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois1"), "html", null, true);
                    echo " mois </li>
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "langage"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 9)) {
                    // line 283
                    echo " \t<!-- A jour -->
   \t\t\t\t\t\t\t<li class=\"normal\">";
                    // line 284
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "langage"), "nom") . " ") . $this->getAttribute($this->getContext($context, "langage"), "version")), "html", null, true);
                    echo "  </li>
   \t\t\t\t\t\t";
                } else {
                    // line 286
                    echo "   \t\t\t\t\t\t\t<li class=\"normal\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "langage"), "nom") . " ") . $this->getAttribute($this->getContext($context, "langage"), "version")), "html", null, true);
                    echo " <!-- Exception -->  </li>
   \t\t\t\t\t\t";
                }
                // line 287
                echo "\t
      \t\t\t\t
   \t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 290
            echo "   \t\t\t\t</ul>
   \t\t\t";
        }
        // line 292
        echo "   \t\t
   \t\t\t\t
   \t\t\t\t<!-- Affiche toutes les sgbd associ�es � l'application  -->
 \t\t\t\t";
        // line 295
        if (($this->getContext($context, "list_sgbd_appli") == null)) {
            // line 296
            echo "   \t\t\t\t\t<p><span class=\"attribut\">";
            echo "Sgbd(s) : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
   \t\t\t\t";
        } else {
            // line 298
            echo "   \t\t\t\t\t<p><span class=\"attribut\">";
            echo "Sgbd(s) : ";
            echo "</span></p>
   \t\t\t\t\t<ul>
   \t\t\t\t\t";
            // line 300
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_sgbd_appli"));
            foreach ($context['_seq'] as $context["_key"] => $context["sgbd"]) {
                // line 301
                echo "   \t\t\t\t\t\t";
                if (($this->getAttribute($this->getContext($context, "sgbd"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == (-1))) {
                    echo " <!-- Non renseigné -->
   \t\t\t\t\t\t   \t<li class=\"normal\">";
                    // line 302
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "sgbd"), "nom") . " ") . $this->getAttribute($this->getContext($context, "sgbd"), "version")), "html", null, true);
                    echo " </li>\t
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "sgbd"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 0)) {
                    // line 303
                    echo " \t<!-- Périmé mois d'un 1 mois-->
   \t\t\t\t\t\t\t<li class=\"rouge\">";
                    // line 304
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "sgbd"), "nom") . " ") . $this->getAttribute($this->getContext($context, "sgbd"), "version")), "html", null, true);
                    echo "  : sgbd déja obsolete depuis ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "sgbd"), "getDateFin", array(), "method"), "d/m/Y"), "html", null, true);
                    echo "</li>  \t\t
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "sgbd"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 1)) {
                    // line 305
                    echo " \t<!-- Périmé dans 1 mois-->
   \t\t\t\t\t\t\t<li class=\"jaune\">";
                    // line 306
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "sgbd"), "nom") . " ") . $this->getAttribute($this->getContext($context, "sgbd"), "version")), "html", null, true);
                    echo " : sgbd obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois3"), "html", null, true);
                    echo " mois </li>
      \t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "sgbd"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 3)) {
                    // line 307
                    echo "\t<!-- Périmé dans 3 mois-->
   \t\t\t\t\t\t\t<li class=\"orange\">";
                    // line 308
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "sgbd"), "nom") . " ") . $this->getAttribute($this->getContext($context, "sgbd"), "version")), "html", null, true);
                    echo " : sgbd obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois2"), "html", null, true);
                    echo " mois </li>
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "sgbd"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 6)) {
                    // line 309
                    echo "\t<!-- Périmé dans 6 mois-->
   \t\t\t\t\t\t\t<li class=\"rouge\">";
                    // line 310
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "sgbd"), "nom") . " ") . $this->getAttribute($this->getContext($context, "sgbd"), "version")), "html", null, true);
                    echo " : sgbd obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois1"), "html", null, true);
                    echo " mois </li>
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "sgbd"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 9)) {
                    // line 311
                    echo " \t<!-- A jour -->
   \t\t\t\t\t\t\t<li class=\"normal\">";
                    // line 312
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "sgbd"), "nom") . " ") . $this->getAttribute($this->getContext($context, "sgbd"), "version")), "html", null, true);
                    echo "  </li>
   \t\t\t\t\t\t";
                } else {
                    // line 314
                    echo "   \t\t\t\t\t\t<li class=\"normal\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "sgbd"), "nom") . " ") . $this->getAttribute($this->getContext($context, "sgbd"), "version")), "html", null, true);
                    echo " <!-- Exception -->  </li>
   \t\t\t\t\t\t";
                }
                // line 315
                echo "\t
   \t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sgbd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 317
            echo "   \t\t\t\t\t</ul>
   \t\t\t\t";
        }
        // line 319
        echo "   \t\t
   \t\t\t
   \t\t\t\t<!-- Affiche toutes les logiciels associ�es � l'application  -->\t\t\t\t
   \t\t\t\t";
        // line 322
        if (($this->getContext($context, "list_logiciel_appli") == null)) {
            // line 323
            echo "   \t\t\t\t\t<p><span class=\"attribut\">";
            echo "Logiciel(s) : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
   \t\t\t\t";
        } else {
            // line 325
            echo "   \t\t\t\t\t<p><span class=\"attribut\">";
            echo "Logiciel(s) : ";
            echo "</span></p>
   \t\t\t\t\t<ul>
   \t\t\t\t\t";
            // line 327
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_logiciel_appli"));
            foreach ($context['_seq'] as $context["_key"] => $context["logiciel"]) {
                // line 328
                echo "   \t\t\t\t\t\t";
                if (($this->getAttribute($this->getContext($context, "logiciel"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == (-1))) {
                    echo " <!-- Non renseigné -->
   \t\t\t\t\t\t   \t<li class=\"normal\">";
                    // line 329
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "logiciel"), "nom") . " ") . $this->getAttribute($this->getContext($context, "logiciel"), "version")), "html", null, true);
                    echo " </li>\t
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "logiciel"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 0)) {
                    // line 330
                    echo " \t<!-- Périmé mois d'un 1 mois-->
   \t\t\t\t\t\t\t<li class=\"rouge\">";
                    // line 331
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "logiciel"), "nom") . " ") . $this->getAttribute($this->getContext($context, "logiciel"), "version")), "html", null, true);
                    echo "  : logiciel déja obsolete depuis ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "logiciel"), "getDateFin", array(), "method"), "d/m/Y"), "html", null, true);
                    echo "</li>  \t\t
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "logiciel"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 1)) {
                    // line 332
                    echo " \t<!-- Périmé dans 1 mois-->
   \t\t\t\t\t\t\t<li class=\"jaune\">";
                    // line 333
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "logiciel"), "nom") . " ") . $this->getAttribute($this->getContext($context, "logiciel"), "version")), "html", null, true);
                    echo " : logiciel obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois3"), "html", null, true);
                    echo " mois </li>
      \t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "logiciel"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 3)) {
                    // line 334
                    echo "\t<!-- Périmé dans 3 mois-->
   \t\t\t\t\t\t\t<li class=\"orange\">";
                    // line 335
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "logiciel"), "nom") . " ") . $this->getAttribute($this->getContext($context, "logiciel"), "version")), "html", null, true);
                    echo " : logiciel obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois2"), "html", null, true);
                    echo " mois </li>
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "logiciel"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 6)) {
                    // line 336
                    echo "\t<!-- Périmé dans 6 mois-->
   \t\t\t\t\t\t\t<li class=\"rouge\">";
                    // line 337
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "logiciel"), "nom") . " ") . $this->getAttribute($this->getContext($context, "logiciel"), "version")), "html", null, true);
                    echo " : logiciel obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois1"), "html", null, true);
                    echo " mois </li>
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "logiciel"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 9)) {
                    // line 338
                    echo " \t<!-- A jour -->
   \t\t\t\t\t\t\t<li class=\"normal\">";
                    // line 339
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "logiciel"), "nom") . " ") . $this->getAttribute($this->getContext($context, "logiciel"), "version")), "html", null, true);
                    echo "  </li>
   \t\t\t\t\t\t";
                } else {
                    // line 341
                    echo "   \t\t\t\t\t\t\t<li class=\"normal\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "logiciel"), "nom") . " ") . $this->getAttribute($this->getContext($context, "logiciel"), "version")), "html", null, true);
                    echo " <!-- Exception -->  </li>
   \t\t\t\t\t\t";
                }
                // line 342
                echo "\t
   \t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logiciel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            echo "   \t\t\t\t\t</ul>
   \t\t\t\t";
        }
        // line 346
        echo "   \t\t\t\t</div>
   \t\t\t\t<div class=\"block-right\">
   \t\t\t\t<!-- Affiche toutes les os associ�es � l'application  -->
 \t\t\t\t";
        // line 349
        if (($this->getContext($context, "list_os_appli") == null)) {
            // line 350
            echo "   \t\t\t\t\t<p><span class=\"attribut\">";
            echo "Os(s) : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
   \t\t\t\t";
        } else {
            // line 352
            echo "   \t\t\t\t\t<p><span class=\"attribut\">";
            echo "Os(s) : ";
            echo "</span></p>
   \t\t\t\t\t<ul>
   \t\t\t\t\t";
            // line 354
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_os_appli"));
            foreach ($context['_seq'] as $context["_key"] => $context["os"]) {
                // line 355
                echo "   \t\t\t\t\t\t";
                if (($this->getAttribute($this->getContext($context, "os"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == (-1))) {
                    echo " <!-- Non renseigné -->
   \t\t\t\t\t\t   \t<li class=\"normal\">";
                    // line 356
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "os"), "nom") . " ") . $this->getAttribute($this->getContext($context, "os"), "version")), "html", null, true);
                    echo " </li>\t
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "os"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 0)) {
                    // line 357
                    echo " \t<!-- Périmé mois d'un 1 mois-->
   \t\t\t\t\t\t\t<li class=\"rouge\">";
                    // line 358
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "os"), "nom") . " ") . $this->getAttribute($this->getContext($context, "os"), "version")), "html", null, true);
                    echo " : os déja obsolete depuis ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "os"), "getDateFin", array(), "method"), "d/m/Y"), "html", null, true);
                    echo " </li>  \t\t
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "os"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 1)) {
                    // line 359
                    echo " \t<!-- Périmé dans 1 mois-->
   \t\t\t\t\t\t\t<li class=\"jaune\">";
                    // line 360
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "os"), "nom") . " ") . $this->getAttribute($this->getContext($context, "os"), "version")), "html", null, true);
                    echo " : os obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois3"), "html", null, true);
                    echo " mois </li>
      \t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "os"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 3)) {
                    // line 361
                    echo "\t<!-- Périmé dans 3 mois-->
   \t\t\t\t\t\t\t<li class=\"orange\">";
                    // line 362
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "os"), "nom") . " ") . $this->getAttribute($this->getContext($context, "os"), "version")), "html", null, true);
                    echo " : os obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois2"), "html", null, true);
                    echo " mois </li>
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "os"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 6)) {
                    // line 363
                    echo "\t<!-- Périmé dans 6 mois-->
   \t\t\t\t\t\t\t<li class=\"rouge\">";
                    // line 364
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "os"), "nom") . " ") . $this->getAttribute($this->getContext($context, "os"), "version")), "html", null, true);
                    echo " : os obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois1"), "html", null, true);
                    echo " mois </li>
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "os"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 9)) {
                    // line 365
                    echo " \t<!-- A jour -->
   \t\t\t\t\t\t\t<li class=\"normal\">";
                    // line 366
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "os"), "nom") . " ") . $this->getAttribute($this->getContext($context, "os"), "version")), "html", null, true);
                    echo "  </li>
   \t\t\t\t\t\t";
                } else {
                    // line 368
                    echo "   \t\t\t\t\t\t\t<li class=\"normal\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "os"), "nom") . " ") . $this->getAttribute($this->getContext($context, "os"), "version")), "html", null, true);
                    echo " <!-- Exception -->  </li>
   \t\t\t\t\t\t";
                }
                // line 369
                echo "\t
   \t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['os'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 370
            echo "</ul>
   \t\t\t\t";
        }
        // line 372
        echo "   \t\t\t\t
   \t\t\t\t
   \t\t\t\t<!-- Affiche toutes les serveurWeb associ�es � l'application  -->
   \t\t\t\t";
        // line 375
        if (($this->getContext($context, "list_serveurWeb_appli") == null)) {
            // line 376
            echo "   \t\t\t\t\t<p><span class=\"attribut\">";
            echo "Serveur(s) : ";
            echo "</span>";
            echo "N/A";
            echo "</p>
   \t\t\t\t";
        } else {
            // line 378
            echo "   \t\t\t\t\t<p><span class=\"attribut\">";
            echo "Serveur(s) : ";
            echo "</span></p>
   \t\t\t\t\t<ul>
   \t\t\t\t\t";
            // line 380
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_serveurWeb_appli"));
            foreach ($context['_seq'] as $context["_key"] => $context["serveurWeb"]) {
                // line 381
                echo "   \t\t\t\t\t\t";
                if (($this->getAttribute($this->getContext($context, "serveurWeb"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == (-1))) {
                    echo " <!-- Non renseigné -->
   \t\t\t\t\t\t   \t<li class=\"normal\">";
                    // line 382
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "serveurWeb"), "nom") . " ") . $this->getAttribute($this->getContext($context, "serveurWeb"), "version")), "html", null, true);
                    echo " </li>\t
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "serveurWeb"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 0)) {
                    // line 383
                    echo " \t<!-- Périmé mois d'un 1 mois-->
   \t\t\t\t\t\t\t<li class=\"rouge\">";
                    // line 384
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "serveurWeb"), "nom") . " ") . $this->getAttribute($this->getContext($context, "serveurWeb"), "version")), "html", null, true);
                    echo "  : serveurWeb déja obsolete depuis ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "serveurWeb"), "getDateFin", array(), "method"), "d/m/Y"), "html", null, true);
                    echo " </li>  \t\t
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "serveurWeb"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 1)) {
                    // line 385
                    echo " \t<!-- Périmé dans 1 mois-->
   \t\t\t\t\t\t\t<li class=\"jaune\">";
                    // line 386
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "serveurWeb"), "nom") . " ") . $this->getAttribute($this->getContext($context, "serveurWeb"), "version")), "html", null, true);
                    echo " : serveurWeb obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois3"), "html", null, true);
                    echo " mois </li>
      \t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "serveurWeb"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 3)) {
                    // line 387
                    echo "\t<!-- Périmé dans 3 mois-->
   \t\t\t\t\t\t\t<li class=\"orange\">";
                    // line 388
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "serveurWeb"), "nom") . " ") . $this->getAttribute($this->getContext($context, "serveurWeb"), "version")), "html", null, true);
                    echo " : serveurWeb obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois2"), "html", null, true);
                    echo " mois </li>
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "serveurWeb"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 6)) {
                    // line 389
                    echo "\t<!-- Périmé dans 6 mois-->
   \t\t\t\t\t\t\t<li class=\"rouge\">";
                    // line 390
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "serveurWeb"), "nom") . " ") . $this->getAttribute($this->getContext($context, "serveurWeb"), "version")), "html", null, true);
                    echo " : serveurWeb obsolete dans ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "nbMois1"), "html", null, true);
                    echo " mois </li>
   \t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getContext($context, "serveurWeb"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method") == 9)) {
                    // line 391
                    echo " \t<!-- A jour -->
   \t\t\t\t\t\t\t<li class=\"normal\">";
                    // line 392
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "serveurWeb"), "nom") . " ") . $this->getAttribute($this->getContext($context, "serveurWeb"), "version")), "html", null, true);
                    echo "  </li>
   \t\t\t\t\t\t";
                } else {
                    // line 394
                    echo "   \t\t\t\t\t\t\t<li class=\"normal\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "serveurWeb"), "nom") . " ") . $this->getAttribute($this->getContext($context, "serveurWeb"), "version")), "html", null, true);
                    echo " <!-- Exception -->  </li>
   \t\t\t\t\t\t";
                }
                // line 395
                echo "\t
   \t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serveurWeb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 396
            echo "</ul>
   \t\t\t\t";
        }
        // line 398
        echo "   \t\t\t\t</div>\t \t\t\t<!-- fin blockright  -->
   \t\t\t\t</div>\t \t\t\t<!-- fin form -->
   \t\t\t\t</div>\t \t\t\t<!-- fin container1  -->
   \t\t\t\t
   \t\t\t\t<div class=\"container1\">
\t\t\t\t<h4><a onclick=\"hidden_show('Environnements');\"><img src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/collapse.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\" id=\"imgEnvironnements\" alt=\"\" />";
        echo " Environnement(s) associé(s)";
        echo "</a></h4>
 \t\t\t\t<div id =\"Environnements\" class =\"formSup2\"> 
\t\t\t\t<div  id=\"tableficheAppli\">\t
 \t\t\t<!-- Affiche toutes les docs associ�es � l'application  -->
\t\t\t\t";
        // line 407
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "environnements"), "count") > 0)) {
            // line 408
            echo "  \t\t\t\t\t<table class=\"display\" id=\"listeEnv\">
      \t\t\t\t
   \t\t\t\t\t";
            // line 410
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "appli"), "environnements"));
            foreach ($context['_seq'] as $context["_key"] => $context["environnement"]) {
                // line 411
                echo "      \t\t\t
      \t\t\t\t\t\t<tr>
      \t\t\t\t\t\t\t<td>
      \t\t\t\t\t\t\t<a><span>";
                // line 414
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "environnement"), "nom"), "html", null, true);
                echo "</span></a>
      \t\t\t\t\t\t\t<p>";
                // line 415
                echo "Répertoire : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "environnement"), "repertoire"), "html", null, true);
                echo "</p>
      \t\t\t\t\t\t\t<p>";
                // line 416
                echo "Nom de l'instance : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "environnement"), "nomInstance"), "html", null, true);
                echo "</p>
      \t\t\t\t\t\t\t<p>";
                // line 417
                echo "Utilisateur Bdd : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "environnement"), "utilisateurBdd"), "html", null, true);
                echo "<p>
      \t\t\t\t\t\t\t<p>";
                // line 418
                echo "Serveur(s) associé(s) : ";
                echo "</p>
      \t\t\t\t\t\t\t<ul>
      \t\t\t\t\t\t\t";
                // line 420
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "environnement"), "serveurs"));
                foreach ($context['_seq'] as $context["_key"] => $context["serveur"]) {
                    // line 421
                    echo "      \t\t\t\t\t\t\t
      \t\t\t\t\t\t\t\t<li>
      \t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 423
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheServeur", array("id" => $this->getAttribute($this->getContext($context, "serveur"), "getId", array(), "method"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 424
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "serveur"), "nom"), "html", null, true);
                    echo "
                \t\t\t\t\t\t</a>\t              \t\t\t
      \t\t\t\t\t\t\t\t</li>
      \t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serveur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 428
                echo "      \t\t\t\t\t\t\t</ul>
      \t\t\t\t\t\t\t<p>";
                // line 429
                echo "Composant(s) associé(s) : ";
                echo "</p>
      \t\t\t\t\t\t\t<ul>
      \t\t\t\t\t\t\t";
                // line 431
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "environnement"), "composants"));
                foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
                    // line 432
                    echo "      \t\t\t\t\t\t\t
      \t\t\t\t\t\t\t\t<li>
      \t\t\t\t\t\t\t\t\t<p class=\"bold\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 435
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comp"), "nomComplet"), "html", null, true);
                    echo "
                \t\t\t\t\t\t</p>\t              \t\t\t
      \t\t\t\t\t\t\t\t</li>
      \t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 439
                echo "      \t\t\t\t\t\t\t</ul>
      \t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t</tr>
      \t\t\t
      \t\t\t\t\t
  
   \t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['environnement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 446
            echo "   \t\t\t\t</table>
   \t\t\t\t";
        } else {
            // line 448
            echo "   \t\t\t\t\t<p class=\"NA\"><span>";
            echo "Environnements(s) : ";
            echo " </span>";
            echo "N/A";
            echo "\t<p>
 \t\t\t\t";
        }
        // line 450
        echo "\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div> \t\t\t\t\t
 \t\t\t\t<div class=\"container1\">
\t\t\t\t<h4><a onclick=\"hidden_show('Documentations');\"><img src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/collapse.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\" id=\"imgDocumentations\" alt=\"\" />";
        echo " Documentation(s) associée(s)";
        echo "</a></h4>
 \t\t\t\t<div id =\"Documentations\" class =\"formSup3\"> 
\t\t\t\t<div id=\"tableficheAppli\">\t\t
 \t\t\t\t<!-- Affiche toutes les docs associ�es � l'application  -->
\t\t\t\t";
        // line 458
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "documentations"), "count") > 0)) {
            // line 459
            echo "\t\t\t<table class=\"display\" id=\"listeDoc\">
      \t\t\t\t
   \t\t\t\t\t";
            // line 461
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "appli"), "documentations"));
            foreach ($context['_seq'] as $context["_key"] => $context["documentation"]) {
                // line 462
                echo "      \t\t\t\t
      \t\t\t\t\t\t<tr>
      \t\t\t\t\t\t\t<td>
      \t\t\t\t\t\t\t<a><span>";
                // line 465
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "documentation"), "nom"), "html", null, true);
                echo "</span></a>
      \t\t\t\t\t\t\t<ul>
      \t\t\t\t\t\t\t<li>";
                // line 467
                echo "Lien : ";
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "documentation"), "lien"), "html", null, true);
                echo "\"  onclick=\"window.open(this.href);\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "documentation"), "lien"), "html", null, true);
                echo "</a></li>
      \t\t\t\t\t\t\t<li>";
                // line 468
                echo "Mis à jour le : ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "documentation"), "dateMaj"), "d/m/Y"), "html", null, true);
                echo "</li>
      \t\t\t\t\t\t\t<li>";
                // line 469
                echo "Version : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "documentation"), "version"), "html", null, true);
                echo "</li>
      \t\t\t\t\t\t\t</ul>
      \t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t</tr>
      \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['documentation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 474
            echo "      \t\t\t</table>
   \t\t\t\t";
        } else {
            // line 476
            echo "   \t\t\t\t\t<p class=\"NA\"><span>";
            echo "Documentation(s) : ";
            echo " </span>";
            echo "N/A";
            echo "\t</p>
 \t\t\t\t";
        }
        // line 478
        echo " \t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
 \t\t\t\t<div class=\"container1\">
\t\t\t\t<h4><a onclick=\"hidden_show('Applications');\"><img src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/collapse.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\" id=\"imgApplications\" alt=\"\" />";
        echo " Application(s) associée(s)";
        echo "</a></h4>
 \t\t\t\t<div id =\"Applications\" class =\"formSup4\"> 
\t\t\t\t<div id=\"tableficheAppli\">\t\t
 \t\t\t<!-- Affiche toutes les applications liées à l'application  -->
\t\t\t\t";
        // line 486
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "appli"), "applications"), "count") > 0)) {
            // line 487
            echo "\t\t\t\t<table class=\"display\" id=\"listeAppli\">
      \t
   \t\t\t <tbody>
   \t\t\t";
            // line 490
            $context["nbMois1"] = 0;
            // line 491
            echo "   \t\t\t \t";
            $context["nbMois2"] = 0;
            echo " 
   \t\t\t \t";
            // line 492
            $context["nbMois3"] = 0;
            echo "  
   \t\t\t ";
            // line 493
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "obsolescence"));
            foreach ($context['_seq'] as $context["_key"] => $context["ob"]) {
                echo " 
   \t\t\t \t";
                // line 494
                $context["nbMois1"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois1", array(), "method");
                // line 495
                echo "   \t\t\t \t";
                $context["nbMois2"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois2", array(), "method");
                echo " 
   \t\t\t \t";
                // line 496
                $context["nbMois3"] = $this->getAttribute($this->getContext($context, "ob"), "getNbMois3", array(), "method");
                echo "  
   \t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ob'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 498
            echo "    \t\t\t ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "appli"), "applications"));
            foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
                // line 499
                echo "    \t\t\t ";
                if (($this->getAttribute($this->getContext($context, "application"), "EnFinDeVie", array(), "method") == 0)) {
                    // line 500
                    echo "    \t\t\t  ";
                    $context["comp"] = (-1);
                    echo "\t\t \t
    \t\t\t \t";
                    // line 501
                    $context["composants"] = $this->getAttribute($this->getContext($context, "application"), "getComposants", array(), "method");
                    // line 502
                    echo "    \t\t\t \t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "composants"));
                    foreach ($context['_seq'] as $context["_key"] => $context["composant"]) {
                        // line 503
                        echo "    \t\t\t \t\t\t";
                        if (($this->getContext($context, "comp") <= $this->getAttribute($this->getContext($context, "composant"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method"))) {
                            // line 504
                            echo "    \t\t\t \t\t\t\t";
                            $context["comp"] = $this->getAttribute($this->getContext($context, "composant"), "getObsolescence", array(0 => $this->getContext($context, "nbMois1"), 1 => $this->getContext($context, "nbMois2"), 2 => $this->getContext($context, "nbMois3")), "method");
                            // line 505
                            echo "    \t\t\t \t\t\t\t";
                            // line 506
                            echo "    \t\t\t \t\t\t";
                        }
                        // line 507
                        echo "    \t\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['composant'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " 
    \t\t\t ";
                    // line 508
                    if (($this->getContext($context, "comp") != (-1))) {
                        echo " ";
                        // line 509
                        echo "    \t\t\t\t ";
                        if (($this->getContext($context, "comp") == 9)) {
                            // line 510
                            echo "    \t\t\t  \t\t<tr>\t  
    \t\t\t  \t ";
                        } elseif (($this->getContext($context, "comp") == 1)) {
                            // line 512
                            echo "        \t\t\t\t<tr class=\"jaune\">\t        \t\t\t\t
    \t\t\t  \t ";
                        } elseif (($this->getContext($context, "comp") == 3)) {
                            // line 513
                            echo "   
    \t\t\t  \t \t<tr class=\"orange\">\t  
    \t\t\t  \t ";
                        } elseif (($this->getContext($context, "comp") == 6)) {
                            // line 516
                            echo "        \t\t\t\t<tr class=\"rouge\">\t
        \t\t\t";
                        } elseif (($this->getContext($context, "comp") == 0)) {
                            // line 518
                            echo "        \t\t\t\t<tr class=\"rouge\">\t
        \t\t\t";
                        }
                        // line 519
                        echo "   \t
        \t\t";
                    } else {
                        // line 521
                        echo "        \t\t\t<tr>
        \t\t";
                    }
                    // line 522
                    echo " 
        \t\t \t\t\t\t
      \t\t\t\t\t\t\t<td>
      \t\t\t\t\t\t\t<a href=\"";
                    // line 525
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                    echo "\">            \t\t\t\t
                \t\t\t\t\t<span>";
                    // line 526
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "application"), "getNom", array(), "method") . " ") . $this->getAttribute($this->getContext($context, "application"), "getVersion", array(), "method")), "html", null, true);
                    echo "</span>
                \t\t\t\t</a>\t
      \t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t</tr>
      \t\t\t
      \t\t\t";
                } else {
                    // line 532
                    echo "        \t\t\t<tr class=\"gris\">
        \t\t\t\t\t<td>
      \t\t\t\t\t\t\t<a href=\"";
                    // line 534
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                    echo "\">            \t\t\t\t
                \t\t\t\t\t<span>";
                    // line 535
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "application"), "getNom", array(), "method") . " ") . $this->getAttribute($this->getContext($context, "application"), "getVersion", array(), "method")), "html", null, true);
                    echo "</span>
                \t\t\t\t\t
                \t\t\t\t</a>\t
                \t\t\t\t<a href=\"";
                    // line 538
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                    echo "\">
        \t\t\t\t\t\t <span>";
                    // line 539
                    echo "Application Obsolète";
                    echo "</span></a>
      \t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t</tr>
        \t\t\t\t
        \t\t";
                }
                // line 543
                echo " 
        \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 545
            echo "      \t\t\t</tbody>
      \t\t\t</table>
   \t\t\t\t";
        } else {
            // line 548
            echo "   \t\t\t\t\t<p class=\"NA\"><span>";
            echo "Application(s) : ";
            echo " </span>";
            echo "N/A";
            echo "\t</p>
 \t\t\t\t";
        }
        // line 550
        echo " \t\t\t\t</div>
 \t\t\t\t</div>
 \t\t\t\t</div>
 \t\t\t\t<div class=\"validation\">
 \t\t\t\t";
        // line 554
        $context["b"] = 1;
        echo " 
\t\t\t\t";
        // line 555
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 556
            echo "\t\t\t\t\t\t\t\t    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierAppli", array("id" => $this->getAttribute($this->getContext($context, "appli"), "id"))), "html", null, true);
            echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"modifier \"value=\"Modifier\"/>
\t\t\t\t</a> 
                \t\t\t\t";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE_APPLICATION")) {
            // line 560
            echo "                \t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "appli"), "getResponsablesDsi", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["responsable"]) {
                // line 561
                echo "                \t\t\t\t\t";
                if ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "getUsername", array(), "method") == $this->getAttribute($this->getContext($context, "responsable"), "getUsername", array(), "method")) && ($this->getContext($context, "b") == 1))) {
                    // line 562
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modifierAppli", array("id" => $this->getAttribute($this->getContext($context, "appli"), "id"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"modifier \"value=\"Modifier\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    // line 565
                    $context["b"] = 0;
                    echo " 
\t\t\t\t\t\t\t\t\t";
                }
                // line 567
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 568
            echo "\t\t\t";
        }
        // line 569
        echo "\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 570
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_supprimerAppli", array("id" => $this->getAttribute($this->getContext($context, "appli"), "id"))), "html", null, true);
            echo "\">
\t\t\t\t\t<input  type=\"submit\" class=\"btn-primary\" name=\"supprimer\" value=\"Supprimer\"/>
\t\t\t\t</a>
\t\t\t";
        }
        // line 574
        echo "\t\t\t</div>
\t\t</div>
\t\t</div>
\t";
    }

    // line 578
    public function block_javascript($context, array $blocks = array())
    {
        // line 579
        echo "\t\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\$('#listeEnv').dataTable();
\t\t\t\t\t\t 
\t\t\t\t\t} );

\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\$('#listeDoc').dataTable();
\t\t\t\t\t\t 
\t\t\t\t\t} );
\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\$('#listeAppli').dataTable();
\t\t\t\t\t\t 
\t\t\t\t\t} );
\t\t
\t\t\t\t\timgout=new Image(9,9);
\t\t\t\t    imgin=new Image(9,9);

\t\t\t\t    /////////////////BEGIN USER EDITABLE///////////////////////////////
\t\t\t\t    \timgout.src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/expand.gif"), "html", null, true);
        echo "\";
\t\t\t\t    \timgin.src=src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/melonrefapp/images/collapse.gif"), "html", null, true);
        echo "\";
\t\t\t\t    ///////////////END USER EDITABLE///////////////////////////////////

\t\t\t\t    //this switches expand collapse icons
\t\t\t\t    function filter(imagename,objectsrc){
\t\t\t\t    \tif (document.images){
\t\t\t\t    \t\tdocument.images[imagename].src=eval(objectsrc+\".src\");
\t\t\t\t    \t}
\t\t\t\t    }

\t\t\t\t    //show OR hide funtion depends on if element is shown or hidden
\t\t\t\t    function hidden_show(id) { 
\t\t\t\t    \t
\t\t\t\t    \tif (document.getElementById) { // DOM3 = IE5, NS6
\t\t\t\t    \t\tif (document.getElementById(id).style.display == \"none\"){
\t\t\t\t    \t\t\tdocument.getElementById(id).style.display = 'inline-block';
\t\t\t\t    \t\t\tfilter((\"img\"+id),'imgin');\t\t\t
\t\t\t\t    \t\t} else {
\t\t\t\t    \t\t\tfilter((\"img\"+id),'imgout');
\t\t\t\t    \t\t\tdocument.getElementById(id).style.display = 'none';\t\t\t
\t\t\t\t    \t\t}\t
\t\t\t\t    \t} else { 
\t\t\t\t    \t\tif (document.layers) {\t
\t\t\t\t    \t\t\tif (document.id.display == \"none\"){
\t\t\t\t    \t\t\t\tdocument.id.display = 'inline-block';
\t\t\t\t    \t\t\t\tfilter((\"img\"+id),'imgin');
\t\t\t\t    \t\t\t} else {
\t\t\t\t    \t\t\t\tfilter((\"img\"+id),'imgout');\t
\t\t\t\t    \t\t\t\tdocument.id.display = 'none';
\t\t\t\t    \t\t\t}
\t\t\t\t    \t\t} else {
\t\t\t\t    \t\t\tif (document.all.id.style.visibility == \"none\"){
\t\t\t\t    \t\t\t\tdocument.all.id.style.display = 'inline-block';
\t\t\t\t    \t\t\t} else {
\t\t\t\t    \t\t\t\tfilter((\"img\"+id),'imgout');
\t\t\t\t    \t\t\t\tdocument.all.id.style.display = 'none';
\t\t\t\t    \t\t\t}
\t\t\t\t    \t\t}
\t\t\t\t    \t}
\t\t\t\t    }

</script>
\t";
    }

    public function getTemplateName()
    {
        return "melonRefappBundle:Application:ficheAppli.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1999 => 600,  1995 => 599,  1971 => 579,  1968 => 578,  1961 => 574,  1953 => 570,  1950 => 569,  1947 => 568,  1941 => 567,  1936 => 565,  1929 => 562,  1926 => 561,  1921 => 560,  1913 => 556,  1911 => 555,  1907 => 554,  1901 => 550,  1893 => 548,  1888 => 545,  1881 => 543,  1873 => 539,  1869 => 538,  1863 => 535,  1859 => 534,  1855 => 532,  1846 => 526,  1842 => 525,  1837 => 522,  1833 => 521,  1829 => 519,  1825 => 518,  1821 => 516,  1816 => 513,  1812 => 512,  1808 => 510,  1805 => 509,  1802 => 508,  1794 => 507,  1791 => 506,  1789 => 505,  1786 => 504,  1783 => 503,  1778 => 502,  1776 => 501,  1771 => 500,  1768 => 499,  1763 => 498,  1755 => 496,  1750 => 495,  1748 => 494,  1742 => 493,  1738 => 492,  1733 => 491,  1731 => 490,  1726 => 487,  1724 => 486,  1715 => 482,  1709 => 478,  1701 => 476,  1697 => 474,  1685 => 469,  1680 => 468,  1672 => 467,  1667 => 465,  1662 => 462,  1658 => 461,  1654 => 459,  1652 => 458,  1643 => 454,  1637 => 450,  1629 => 448,  1625 => 446,  1613 => 439,  1603 => 435,  1598 => 432,  1594 => 431,  1589 => 429,  1586 => 428,  1576 => 424,  1572 => 423,  1568 => 421,  1564 => 420,  1559 => 418,  1554 => 417,  1549 => 416,  1544 => 415,  1540 => 414,  1535 => 411,  1531 => 410,  1527 => 408,  1525 => 407,  1516 => 403,  1509 => 398,  1505 => 396,  1498 => 395,  1492 => 394,  1487 => 392,  1484 => 391,  1477 => 390,  1474 => 389,  1467 => 388,  1464 => 387,  1457 => 386,  1454 => 385,  1447 => 384,  1444 => 383,  1439 => 382,  1434 => 381,  1430 => 380,  1424 => 378,  1416 => 376,  1414 => 375,  1409 => 372,  1405 => 370,  1398 => 369,  1392 => 368,  1387 => 366,  1384 => 365,  1377 => 364,  1374 => 363,  1367 => 362,  1364 => 361,  1357 => 360,  1354 => 359,  1347 => 358,  1344 => 357,  1339 => 356,  1334 => 355,  1330 => 354,  1324 => 352,  1316 => 350,  1314 => 349,  1309 => 346,  1305 => 344,  1298 => 342,  1292 => 341,  1287 => 339,  1284 => 338,  1277 => 337,  1274 => 336,  1267 => 335,  1264 => 334,  1257 => 333,  1254 => 332,  1247 => 331,  1244 => 330,  1239 => 329,  1234 => 328,  1230 => 327,  1224 => 325,  1216 => 323,  1214 => 322,  1209 => 319,  1205 => 317,  1198 => 315,  1192 => 314,  1187 => 312,  1184 => 311,  1177 => 310,  1174 => 309,  1167 => 308,  1164 => 307,  1157 => 306,  1154 => 305,  1147 => 304,  1144 => 303,  1139 => 302,  1134 => 301,  1130 => 300,  1124 => 298,  1116 => 296,  1114 => 295,  1109 => 292,  1105 => 290,  1097 => 287,  1091 => 286,  1086 => 284,  1083 => 283,  1076 => 282,  1073 => 281,  1066 => 280,  1063 => 279,  1056 => 278,  1053 => 277,  1046 => 276,  1043 => 275,  1038 => 274,  1033 => 273,  1029 => 272,  1023 => 270,  1015 => 268,  1013 => 267,  1009 => 265,  1001 => 263,  996 => 262,  994 => 261,  988 => 260,  984 => 259,  979 => 258,  977 => 257,  969 => 254,  966 => 253,  964 => 252,  962 => 251,  957 => 247,  949 => 245,  932 => 243,  928 => 242,  923 => 241,  906 => 240,  901 => 239,  899 => 238,  894 => 235,  887 => 233,  881 => 232,  877 => 231,  874 => 230,  866 => 229,  864 => 228,  861 => 227,  858 => 225,  850 => 223,  833 => 221,  829 => 220,  824 => 219,  807 => 218,  802 => 217,  800 => 216,  796 => 214,  788 => 212,  771 => 210,  767 => 209,  762 => 208,  745 => 207,  740 => 206,  738 => 205,  734 => 203,  726 => 201,  709 => 199,  705 => 198,  700 => 197,  683 => 196,  678 => 195,  676 => 194,  671 => 191,  665 => 189,  661 => 188,  657 => 187,  653 => 186,  649 => 185,  640 => 183,  637 => 182,  629 => 181,  627 => 180,  622 => 177,  614 => 176,  606 => 174,  604 => 173,  596 => 170,  588 => 164,  581 => 163,  578 => 162,  570 => 161,  568 => 160,  564 => 158,  560 => 157,  552 => 156,  545 => 154,  540 => 153,  532 => 151,  530 => 150,  526 => 148,  522 => 147,  514 => 146,  507 => 144,  502 => 143,  494 => 141,  492 => 140,  488 => 138,  481 => 137,  478 => 136,  470 => 135,  468 => 134,  464 => 132,  457 => 131,  454 => 130,  446 => 129,  444 => 128,  439 => 125,  432 => 124,  429 => 123,  421 => 122,  419 => 121,  415 => 119,  408 => 118,  405 => 117,  397 => 116,  395 => 115,  391 => 113,  384 => 112,  381 => 111,  373 => 110,  371 => 109,  367 => 107,  360 => 106,  357 => 105,  349 => 104,  347 => 103,  343 => 101,  336 => 100,  333 => 99,  325 => 98,  323 => 97,  317 => 93,  310 => 92,  307 => 91,  299 => 90,  297 => 89,  292 => 86,  285 => 85,  282 => 84,  274 => 83,  272 => 82,  267 => 79,  260 => 78,  257 => 77,  249 => 76,  247 => 75,  242 => 72,  234 => 71,  226 => 69,  224 => 68,  220 => 66,  216 => 65,  208 => 64,  201 => 62,  196 => 61,  188 => 59,  186 => 58,  180 => 54,  172 => 53,  164 => 51,  162 => 50,  158 => 48,  150 => 47,  142 => 45,  140 => 44,  134 => 43,  128 => 42,  120 => 39,  116 => 37,  108 => 33,  105 => 32,  102 => 31,  96 => 30,  91 => 28,  84 => 25,  81 => 24,  76 => 23,  68 => 19,  66 => 18,  62 => 17,  55 => 13,  51 => 11,  48 => 10,  44 => 8,  41 => 7,  34 => 4,  31 => 3,);
    }
}
