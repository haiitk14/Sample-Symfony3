<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b06f7f32b9ac064ebef6959c84771ec0b80ca866c5f404067bf774584713fa0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06f7f32b9ac064ebef6959c84771ec0b80ca866c5f404067bf774584713fa0b->enter($__internal_b06f7f32b9ac064ebef6959c84771ec0b80ca866c5f404067bf774584713fa0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2105e429a78de4aa13c7124e1d490a441dc131ba54b0b4cfa9e57524923f3490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2105e429a78de4aa13c7124e1d490a441dc131ba54b0b4cfa9e57524923f3490->enter($__internal_2105e429a78de4aa13c7124e1d490a441dc131ba54b0b4cfa9e57524923f3490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    </body>
</html>
";
        
        $__internal_b06f7f32b9ac064ebef6959c84771ec0b80ca866c5f404067bf774584713fa0b->leave($__internal_b06f7f32b9ac064ebef6959c84771ec0b80ca866c5f404067bf774584713fa0b_prof);

        
        $__internal_2105e429a78de4aa13c7124e1d490a441dc131ba54b0b4cfa9e57524923f3490->leave($__internal_2105e429a78de4aa13c7124e1d490a441dc131ba54b0b4cfa9e57524923f3490_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9f7df803ab2b70c5e172ca354d576d2ba8440bb9f66a342f5ca7767e3e2f93c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f7df803ab2b70c5e172ca354d576d2ba8440bb9f66a342f5ca7767e3e2f93c->enter($__internal_a9f7df803ab2b70c5e172ca354d576d2ba8440bb9f66a342f5ca7767e3e2f93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a5a5cef53651747924be2c26b088039c92ee86fe7e1fe5ed43610b640b9ce926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a5cef53651747924be2c26b088039c92ee86fe7e1fe5ed43610b640b9ce926->enter($__internal_a5a5cef53651747924be2c26b088039c92ee86fe7e1fe5ed43610b640b9ce926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a5a5cef53651747924be2c26b088039c92ee86fe7e1fe5ed43610b640b9ce926->leave($__internal_a5a5cef53651747924be2c26b088039c92ee86fe7e1fe5ed43610b640b9ce926_prof);

        
        $__internal_a9f7df803ab2b70c5e172ca354d576d2ba8440bb9f66a342f5ca7767e3e2f93c->leave($__internal_a9f7df803ab2b70c5e172ca354d576d2ba8440bb9f66a342f5ca7767e3e2f93c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40d10b13f7c25c9c00d91cab84cffb92c1a6995b6035179a2bfe5c0baab52427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d10b13f7c25c9c00d91cab84cffb92c1a6995b6035179a2bfe5c0baab52427->enter($__internal_40d10b13f7c25c9c00d91cab84cffb92c1a6995b6035179a2bfe5c0baab52427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dbbe7866c0a414277b80778b4dcad822135c57402c09f0cfda01c0768f714eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbe7866c0a414277b80778b4dcad822135c57402c09f0cfda01c0768f714eda->enter($__internal_dbbe7866c0a414277b80778b4dcad822135c57402c09f0cfda01c0768f714eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

        ";
        
        $__internal_dbbe7866c0a414277b80778b4dcad822135c57402c09f0cfda01c0768f714eda->leave($__internal_dbbe7866c0a414277b80778b4dcad822135c57402c09f0cfda01c0768f714eda_prof);

        
        $__internal_40d10b13f7c25c9c00d91cab84cffb92c1a6995b6035179a2bfe5c0baab52427->leave($__internal_40d10b13f7c25c9c00d91cab84cffb92c1a6995b6035179a2bfe5c0baab52427_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_408a7e771c7aef4e5d7d0490b51e9acfeca7f18b23fc292d1a43c661670ae378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408a7e771c7aef4e5d7d0490b51e9acfeca7f18b23fc292d1a43c661670ae378->enter($__internal_408a7e771c7aef4e5d7d0490b51e9acfeca7f18b23fc292d1a43c661670ae378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcde22c817c52204034d8b2f0d876a26541da208be375f7fa4dc7ff205e7f35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcde22c817c52204034d8b2f0d876a26541da208be375f7fa4dc7ff205e7f35f->enter($__internal_bcde22c817c52204034d8b2f0d876a26541da208be375f7fa4dc7ff205e7f35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "Noitce"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_massage"]) {
            // line 17
            echo "                <span style=\"color:red\";><strong>";
            echo twig_escape_filter($this->env, $context["flash_massage"], "html", null, true);
            echo "</strong></span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_massage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        ";
        
        $__internal_bcde22c817c52204034d8b2f0d876a26541da208be375f7fa4dc7ff205e7f35f->leave($__internal_bcde22c817c52204034d8b2f0d876a26541da208be375f7fa4dc7ff205e7f35f_prof);

        
        $__internal_408a7e771c7aef4e5d7d0490b51e9acfeca7f18b23fc292d1a43c661670ae378->leave($__internal_408a7e771c7aef4e5d7d0490b51e9acfeca7f18b23fc292d1a43c661670ae378_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cca83eb49514313ee1bc4b7142340f15a1509b69f9b1f81e00a9a48f7af7579c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca83eb49514313ee1bc4b7142340f15a1509b69f9b1f81e00a9a48f7af7579c->enter($__internal_cca83eb49514313ee1bc4b7142340f15a1509b69f9b1f81e00a9a48f7af7579c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_56308e909d4561c5f4e4a09d42eadc003e80621d2ddc67a77453d787e8aaeb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56308e909d4561c5f4e4a09d42eadc003e80621d2ddc67a77453d787e8aaeb40->enter($__internal_56308e909d4561c5f4e4a09d42eadc003e80621d2ddc67a77453d787e8aaeb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "            <script type=\"text/javascript\">

                function getProduct(val) {

                    var ajaxUrl = \"/load\";
                    \$.ajax({
                        type: \"POST\",
                        url: ajaxUrl,
                        data:'product_id='+val,
                        success: function(data){
                            \$(\"#detail\").html(data);
                        }
                    });
                }
            </script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_56308e909d4561c5f4e4a09d42eadc003e80621d2ddc67a77453d787e8aaeb40->leave($__internal_56308e909d4561c5f4e4a09d42eadc003e80621d2ddc67a77453d787e8aaeb40_prof);

        
        $__internal_cca83eb49514313ee1bc4b7142340f15a1509b69f9b1f81e00a9a48f7af7579c->leave($__internal_cca83eb49514313ee1bc4b7142340f15a1509b69f9b1f81e00a9a48f7af7579c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 21,  139 => 20,  129 => 19,  120 => 17,  115 => 16,  106 => 15,  93 => 7,  84 => 6,  66 => 5,  54 => 39,  51 => 20,  49 => 15,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}

            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        {% block body %}
            {% for flash_massage in app.session.flashbag.get('Noitce') %}
                <span style=\"color:red\";><strong>{{flash_massage}}</strong></span>
            {% endfor %}
        {% endblock %}
        {% block javascripts %}
            <script type=\"text/javascript\">

                function getProduct(val) {

                    var ajaxUrl = \"/load\";
                    \$.ajax({
                        type: \"POST\",
                        url: ajaxUrl,
                        data:'product_id='+val,
                        success: function(data){
                            \$(\"#detail\").html(data);
                        }
                    });
                }
            </script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/haidt/shop/app/Resources/views/base.html.twig");
    }
}
