<?php

/* Books/View/list.html.twig */
class __TwigTemplate_b649fd57f55cf861f39a15c6acd4aea8d4a2a9f0deb0cbdee321e653df9bbdea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Books/View/Layout/layout.html.twig", "Books/View/list.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Books/View/Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<h1>Rekordy</h1>
<table class=\"table table-hover\">
    <tr>
        <th>nazwa</th>
        <th>opis</th>
        <th class=\"text-right\">akcje</th>
    </tr>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 14
            echo "        <tr>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "description", array()), "html", null, true);
            echo "</td>
            <td class=\"text-right\">
                <a class=\"btn btn-primary\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("bookEdit", array("id" => $this->getAttribute($context["row"], "id", array())))), "html", null, true);
            echo "\" role=\"button\">Edytuj</a>
            </td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</table>

";
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
        return array (  68 => 23,  57 => 18,  52 => 16,  48 => 15,  45 => 14,  41 => 13,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'Books/View/Layout/layout.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/* <h1>Rekordy</h1>*/
/* <table class="table table-hover">*/
/*     <tr>*/
/*         <th>nazwa</th>*/
/*         <th>opis</th>*/
/*         <th class="text-right">akcje</th>*/
/*     </tr>*/
/*     {% for row in books %}*/
/*         <tr>*/
/*             <td>{{ row.name }}</td>*/
/*             <td>{{ row.description }}</td>*/
/*             <td class="text-right">*/
/*                 <a class="btn btn-primary" href="{{ url('bookEdit', {'id' : row.id}) }}" role="button">Edytuj</a>*/
/*             </td>*/
/* */
/*         </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* */
/* {% endblock %}*/
