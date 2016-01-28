<?php

/* Books/View/list.html.twig */
class __TwigTemplate_b649fd57f55cf861f39a15c6acd4aea8d4a2a9f0deb0cbdee321e653df9bbdea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Rekordy</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 4
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "name", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "description", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "Books/View/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <h1>Rekordy</h1>*/
/* <ul>*/
/*     {% for row in books %}*/
/*         <li>{{ row.name }}, {{ row.description }}</li>*/
/*     {% endfor %}*/
/* </ul>*/
