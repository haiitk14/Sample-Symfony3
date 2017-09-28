<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afa250aceb723e1765af08a1cde4dc0ab0498221b300a054791186c3d4c886c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa250aceb723e1765af08a1cde4dc0ab0498221b300a054791186c3d4c886c6->enter($__internal_afa250aceb723e1765af08a1cde4dc0ab0498221b300a054791186c3d4c886c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cbc3dbff8ff7353a0187b968a963c46f4417b50c8f58169c19a624e5a6ce4797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc3dbff8ff7353a0187b968a963c46f4417b50c8f58169c19a624e5a6ce4797->enter($__internal_cbc3dbff8ff7353a0187b968a963c46f4417b50c8f58169c19a624e5a6ce4797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afa250aceb723e1765af08a1cde4dc0ab0498221b300a054791186c3d4c886c6->leave($__internal_afa250aceb723e1765af08a1cde4dc0ab0498221b300a054791186c3d4c886c6_prof);

        
        $__internal_cbc3dbff8ff7353a0187b968a963c46f4417b50c8f58169c19a624e5a6ce4797->leave($__internal_cbc3dbff8ff7353a0187b968a963c46f4417b50c8f58169c19a624e5a6ce4797_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7055f007126aa8066b3b899aa92e62cbcb72c681f81e248b3013be2f21429be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7055f007126aa8066b3b899aa92e62cbcb72c681f81e248b3013be2f21429be6->enter($__internal_7055f007126aa8066b3b899aa92e62cbcb72c681f81e248b3013be2f21429be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9bf6a38879314ab868e63f884b080ea350601e42d2f6969b440a3c66239cdff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf6a38879314ab868e63f884b080ea350601e42d2f6969b440a3c66239cdff8->enter($__internal_9bf6a38879314ab868e63f884b080ea350601e42d2f6969b440a3c66239cdff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9bf6a38879314ab868e63f884b080ea350601e42d2f6969b440a3c66239cdff8->leave($__internal_9bf6a38879314ab868e63f884b080ea350601e42d2f6969b440a3c66239cdff8_prof);

        
        $__internal_7055f007126aa8066b3b899aa92e62cbcb72c681f81e248b3013be2f21429be6->leave($__internal_7055f007126aa8066b3b899aa92e62cbcb72c681f81e248b3013be2f21429be6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd33035d634baca09f140b87ba789bac5e1b5419e235259318b954d281efbf50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd33035d634baca09f140b87ba789bac5e1b5419e235259318b954d281efbf50->enter($__internal_dd33035d634baca09f140b87ba789bac5e1b5419e235259318b954d281efbf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5369424bb9fedaa88ceb14f2c19c0fa09a611548a121f1a1d3bab53993cd0942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5369424bb9fedaa88ceb14f2c19c0fa09a611548a121f1a1d3bab53993cd0942->enter($__internal_5369424bb9fedaa88ceb14f2c19c0fa09a611548a121f1a1d3bab53993cd0942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5369424bb9fedaa88ceb14f2c19c0fa09a611548a121f1a1d3bab53993cd0942->leave($__internal_5369424bb9fedaa88ceb14f2c19c0fa09a611548a121f1a1d3bab53993cd0942_prof);

        
        $__internal_dd33035d634baca09f140b87ba789bac5e1b5419e235259318b954d281efbf50->leave($__internal_dd33035d634baca09f140b87ba789bac5e1b5419e235259318b954d281efbf50_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d5edb3d6586b0a29a96d469adf36aab28ce6289ca38c984ce1ac2c103c1031d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5edb3d6586b0a29a96d469adf36aab28ce6289ca38c984ce1ac2c103c1031d->enter($__internal_5d5edb3d6586b0a29a96d469adf36aab28ce6289ca38c984ce1ac2c103c1031d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce7c5ca817eb2e2feea1ba1f1412977e5aa041e94fcde8efad04aaaae2afb1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7c5ca817eb2e2feea1ba1f1412977e5aa041e94fcde8efad04aaaae2afb1c0->enter($__internal_ce7c5ca817eb2e2feea1ba1f1412977e5aa041e94fcde8efad04aaaae2afb1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ce7c5ca817eb2e2feea1ba1f1412977e5aa041e94fcde8efad04aaaae2afb1c0->leave($__internal_ce7c5ca817eb2e2feea1ba1f1412977e5aa041e94fcde8efad04aaaae2afb1c0_prof);

        
        $__internal_5d5edb3d6586b0a29a96d469adf36aab28ce6289ca38c984ce1ac2c103c1031d->leave($__internal_5d5edb3d6586b0a29a96d469adf36aab28ce6289ca38c984ce1ac2c103c1031d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/haidt/shop/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
