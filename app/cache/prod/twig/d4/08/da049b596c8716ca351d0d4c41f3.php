<?php

/* melonRefappBundle:Index:index.html.twig */
class __TwigTemplate_d408da049b596c8716ca351d0d4c41f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("melonRefappBundle::layout.html.twig");

        $this->blocks = array(
            'menu_deroulant' => array($this, 'block_menu_deroulant'),
            'login' => array($this, 'block_login'),
            'contenu' => array($this, 'block_contenu'),
            'footer' => array($this, 'block_footer'),
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
";
    }

    // line 7
    public function block_login($context, array $blocks = array())
    {
    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        // line 11
        echo "\t<div id='corps' class='corpsIndex'>
\t<div class=\"dt_index\">
\t\t<table class=\"tableIndex\">
\t\t<thead>
       </thead>
\t\t\t
\t\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeAlpha"));
        foreach ($context['_seq'] as $context["_key"] => $context["lettre"]) {
            // line 18
            echo "\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"lettre\"><a href=\"#\" onclick=\"toggle_visibility('";
            // line 20
            echo twig_escape_filter($this->env, $this->getContext($context, "lettre"), "html", null, true);
            echo "');\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "lettre"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cont\" id=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getContext($context, "lettre"), "html", null, true);
            echo "\"  style=\"display: none;\"> 
\t\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeApplication"));
            foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
                // line 24
                echo "    \t\t\t \t";
                $context["vide"] = "";
                echo " ";
                // line 25
                echo "    \t\t\t\t";
                $context["temp"] = twig_upper_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "application"), "getNom", array(), "method"), 1, false, $this->getContext($context, "vide")));
                // line 26
                echo "    \t\t\t \t";
                if (($this->getContext($context, "lettre") == $this->getContext($context, "temp"))) {
                    // line 27
                    echo "    \t\t\t \t\t<div>
    \t\t\t \t\t\t<a href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheAppli", array("id" => $this->getAttribute($this->getContext($context, "application"), "getId", array(), "method"))), "html", null, true);
                    echo "\">  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "application"), "getNom", array(), "method"), "html", null, true);
                    echo "</a>
    \t\t\t \t\t</div>
\t    \t\t\t";
                }
                // line 31
                echo "    \t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
    \t\t\t ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeServeur"));
            foreach ($context['_seq'] as $context["_key"] => $context["serveur"]) {
                // line 33
                echo "    \t\t\t \t";
                $context["vide"] = "";
                echo " ";
                // line 34
                echo "    \t\t\t\t";
                $context["temp"] = twig_upper_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "serveur"), "getNom", array(), "method"), 1, false, $this->getContext($context, "vide")));
                // line 35
                echo "    \t\t\t \t";
                if (($this->getContext($context, "lettre") == $this->getContext($context, "temp"))) {
                    // line 36
                    echo "    \t\t\t \t\t<div>
    \t\t\t \t\t\t<a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ficheServeur", array("id" => $this->getAttribute($this->getContext($context, "serveur"), "getId", array(), "method"))), "html", null, true);
                    echo "\">
                \t\t\t\t\t";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "serveur"), "getNom", array(), "method"), "html", null, true);
                    echo "
                \t\t\t\t</a>\t              \t\t\t\t           \t\t\t
    \t\t\t \t\t</div>
\t    \t\t\t";
                }
                // line 42
                echo "    \t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serveur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lettre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t
\t\t</table>
\t\t</div>
\t</div>



";
    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        // line 57
        echo "\t
\t<script type=\"text/javascript\">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block'){
      \t e.setAttribute(\"style\",\"width:40px;display:none;\");
       }
       else{
    \t   var first = \"A\", last = \"Z\";
    \t   for(var i = first.charCodeAt(0); i <= last.charCodeAt(0); i++) {
         \tdocument.getElementById(eval(\"String.fromCharCode(\" + i + \")\")).setAttribute(\"style\",\"display:none;\");
    \t   }
\t\t\te.setAttribute(\"style\",\"width:750px;display:block;\");
\t   \t\t
       }
      }
//-->
</script>
";
    }

    public function getTemplateName()
    {
        return "melonRefappBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 57,  164 => 56,  153 => 48,  137 => 42,  130 => 38,  126 => 37,  123 => 36,  120 => 35,  117 => 34,  113 => 33,  109 => 32,  101 => 31,  93 => 28,  90 => 27,  87 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  65 => 20,  61 => 18,  57 => 17,  49 => 11,  46 => 10,  41 => 7,  34 => 4,  31 => 3,);
    }
}
