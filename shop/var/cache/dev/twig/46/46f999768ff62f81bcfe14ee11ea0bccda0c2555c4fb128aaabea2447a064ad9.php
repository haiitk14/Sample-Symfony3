<?php

/* authentication/home.html.twig */
class __TwigTemplate_6d4df3dc1173d8c16839ce70b051110cb5d6f4317ec3a3837de87a0a46764ae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "authentication/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88e84013e853949dda833099cc7b57268d305b6cb7e8ad85a6c712930cbda842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e84013e853949dda833099cc7b57268d305b6cb7e8ad85a6c712930cbda842->enter($__internal_88e84013e853949dda833099cc7b57268d305b6cb7e8ad85a6c712930cbda842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentication/home.html.twig"));

        $__internal_5851f72de2c0410f8de65eddb0b633e88ddfdbac5dd62ca4336f1bfdd17c0a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5851f72de2c0410f8de65eddb0b633e88ddfdbac5dd62ca4336f1bfdd17c0a9f->enter($__internal_5851f72de2c0410f8de65eddb0b633e88ddfdbac5dd62ca4336f1bfdd17c0a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentication/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88e84013e853949dda833099cc7b57268d305b6cb7e8ad85a6c712930cbda842->leave($__internal_88e84013e853949dda833099cc7b57268d305b6cb7e8ad85a6c712930cbda842_prof);

        
        $__internal_5851f72de2c0410f8de65eddb0b633e88ddfdbac5dd62ca4336f1bfdd17c0a9f->leave($__internal_5851f72de2c0410f8de65eddb0b633e88ddfdbac5dd62ca4336f1bfdd17c0a9f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6b3a6116df8bc1077aa39f1ba50d32a8b0b843c4a269e61b93d2bda17a1e855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b3a6116df8bc1077aa39f1ba50d32a8b0b843c4a269e61b93d2bda17a1e855->enter($__internal_a6b3a6116df8bc1077aa39f1ba50d32a8b0b843c4a269e61b93d2bda17a1e855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5b245d090b0e1befb6898313fe09fe2b47a48744f0d7f0f2b5c325f05839db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b245d090b0e1befb6898313fe09fe2b47a48744f0d7f0f2b5c325f05839db5->enter($__internal_e5b245d090b0e1befb6898313fe09fe2b47a48744f0d7f0f2b5c325f05839db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Hello Mr/Mis: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </h1>
    <a href=\"/logout\">Sign out</a>
    <h2>Show list</h2>
    <table border=\"1\">
        <thead>
        <tr>
            <th style=\"text-align: center; width: 300px;\">Name</th>
            <th style=\"text-align: center; width: 300px;\">Detail</th>
            <th style=\"text-align: center; width: 300px;\">Cate</th>
            <th style=\"text-align: center; width: 300px;\">Status</th>
            <th style=\"text-align: center; width: 300px;\">Action</th>
        </tr>
        </thead>
        <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 18
            echo "                <tr>
                    <th style=\"text-align:center;\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["rs"], "name", array()), "html", null, true);
            echo "</th>
                    <th style=\"text-align:center;\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["rs"], "details", array()), "html", null, true);
            echo "</th>
                    <th style=\"text-align:center;\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["rs"], "cateid", array()), "html", null, true);
            echo "</th>
                    <th style=\"text-align:center;\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["rs"], "status", array()), "html", null, true);
            echo "</th>
                    <th><a href=\"/edit/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["rs"], "productid", array()), "html", null, true);
            echo "\">Update</a></th>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
    <div class=\"row\">
        <div class=\"col-md-3\">
            <a href=\"/new\">Create new product</a>
        </div>
        <div class=\"col-md-3\">
            <a href=\"/load\">Load product</a>
        </div>

    </div>

    <a href=\"/change\">Change password</a>
";
        
        $__internal_e5b245d090b0e1befb6898313fe09fe2b47a48744f0d7f0f2b5c325f05839db5->leave($__internal_e5b245d090b0e1befb6898313fe09fe2b47a48744f0d7f0f2b5c325f05839db5_prof);

        
        $__internal_a6b3a6116df8bc1077aa39f1ba50d32a8b0b843c4a269e61b93d2bda17a1e855->leave($__internal_a6b3a6116df8bc1077aa39f1ba50d32a8b0b843c4a269e61b93d2bda17a1e855_prof);

    }

    public function getTemplateName()
    {
        return "authentication/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  71 => 18,  67 => 17,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <h1>Hello Mr/Mis: {{ app.user.username }} </h1>
    <a href=\"/logout\">Sign out</a>
    <h2>Show list</h2>
    <table border=\"1\">
        <thead>
        <tr>
            <th style=\"text-align: center; width: 300px;\">Name</th>
            <th style=\"text-align: center; width: 300px;\">Detail</th>
            <th style=\"text-align: center; width: 300px;\">Cate</th>
            <th style=\"text-align: center; width: 300px;\">Status</th>
            <th style=\"text-align: center; width: 300px;\">Action</th>
        </tr>
        </thead>
        <tbody>
            {% for rs in result %}
                <tr>
                    <th style=\"text-align:center;\">{{ rs.name }}</th>
                    <th style=\"text-align:center;\">{{ rs.details }}</th>
                    <th style=\"text-align:center;\">{{ rs.cateid }}</th>
                    <th style=\"text-align:center;\">{{ rs.status }}</th>
                    <th><a href=\"/edit/{{ rs.productid }}\">Update</a></th>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <div class=\"row\">
        <div class=\"col-md-3\">
            <a href=\"/new\">Create new product</a>
        </div>
        <div class=\"col-md-3\">
            <a href=\"/load\">Load product</a>
        </div>

    </div>

    <a href=\"/change\">Change password</a>
{% endblock %}", "authentication/home.html.twig", "/home/haidt/shop/app/Resources/views/authentication/home.html.twig");
    }
}
