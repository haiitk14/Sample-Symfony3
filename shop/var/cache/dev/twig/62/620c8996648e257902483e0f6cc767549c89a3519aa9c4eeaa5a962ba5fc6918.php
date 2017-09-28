<?php

/* authentication/register.html.twig */
class __TwigTemplate_1606f240e049f52719435eb0964860c7dce575da8486fbc58630bbc10bcddae6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "authentication/register.html.twig", 1);
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
        $__internal_a00e78493da8557865ce07443975d79d0b23969dcd394c7c29d0acfe04fafbf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00e78493da8557865ce07443975d79d0b23969dcd394c7c29d0acfe04fafbf2->enter($__internal_a00e78493da8557865ce07443975d79d0b23969dcd394c7c29d0acfe04fafbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentication/register.html.twig"));

        $__internal_13dc53a6619458813ff995eeea2072e44dc89b86ad6b43839daa9d5dd44440ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13dc53a6619458813ff995eeea2072e44dc89b86ad6b43839daa9d5dd44440ad->enter($__internal_13dc53a6619458813ff995eeea2072e44dc89b86ad6b43839daa9d5dd44440ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentication/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a00e78493da8557865ce07443975d79d0b23969dcd394c7c29d0acfe04fafbf2->leave($__internal_a00e78493da8557865ce07443975d79d0b23969dcd394c7c29d0acfe04fafbf2_prof);

        
        $__internal_13dc53a6619458813ff995eeea2072e44dc89b86ad6b43839daa9d5dd44440ad->leave($__internal_13dc53a6619458813ff995eeea2072e44dc89b86ad6b43839daa9d5dd44440ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_539a5278aeb56c6ea724018b1fb8ec3a43ca83629bd28f63ccd0e55b9be2ed06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539a5278aeb56c6ea724018b1fb8ec3a43ca83629bd28f63ccd0e55b9be2ed06->enter($__internal_539a5278aeb56c6ea724018b1fb8ec3a43ca83629bd28f63ccd0e55b9be2ed06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4de0cd8721fc29abdd74f19bce5d30af0ec5933fce01681f98ada38fa945c0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de0cd8721fc29abdd74f19bce5d30af0ec5933fce01681f98ada38fa945c0e7->enter($__internal_4de0cd8721fc29abdd74f19bce5d30af0ec5933fce01681f98ada38fa945c0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form class=\"form-inline\" role=\"form\" method=\"POST\" action=\"/signup\">
    <div class=\"box\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\" style=\"text-align: center\">Regsiter</h3>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\" style=\"text-align: center\">
            <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label>User Name</label>
                    </div>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"text\" name=\"_username\" placeholder=\"Example: huy, thang ....\">
                    </div>
                </div>
            </div><br/><br/>
            <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label> Password</label>
                    </div>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"password\" name=\"_password\" placeholder=\"123\">
                    </div>
                </div>
            </div><br/><br/>
            <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label>Confirm password</label>
                    </div>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"password\" name=\"_confirm\" placeholder=\"123\">
                    </div>
                </div>
            </div>

        </div><br/>
        <!-- /.box-body -->
        <div class=\"box-footer\" style=\"text-align: center\">
            <div class=\"form-group\">
                <button class=\"btn btn-info btn-flat\" type=\"submit\">Sign up</button>
            </div>
        </div>
        <!-- box-footer -->
    </div>
    <!-- /.box -->
    </form>
";
        
        $__internal_4de0cd8721fc29abdd74f19bce5d30af0ec5933fce01681f98ada38fa945c0e7->leave($__internal_4de0cd8721fc29abdd74f19bce5d30af0ec5933fce01681f98ada38fa945c0e7_prof);

        
        $__internal_539a5278aeb56c6ea724018b1fb8ec3a43ca83629bd28f63ccd0e55b9be2ed06->leave($__internal_539a5278aeb56c6ea724018b1fb8ec3a43ca83629bd28f63ccd0e55b9be2ed06_prof);

    }

    public function getTemplateName()
    {
        return "authentication/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    <form class=\"form-inline\" role=\"form\" method=\"POST\" action=\"/signup\">
    <div class=\"box\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\" style=\"text-align: center\">Regsiter</h3>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\" style=\"text-align: center\">
            <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label>User Name</label>
                    </div>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"text\" name=\"_username\" placeholder=\"Example: huy, thang ....\">
                    </div>
                </div>
            </div><br/><br/>
            <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label> Password</label>
                    </div>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"password\" name=\"_password\" placeholder=\"123\">
                    </div>
                </div>
            </div><br/><br/>
            <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label>Confirm password</label>
                    </div>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"password\" name=\"_confirm\" placeholder=\"123\">
                    </div>
                </div>
            </div>

        </div><br/>
        <!-- /.box-body -->
        <div class=\"box-footer\" style=\"text-align: center\">
            <div class=\"form-group\">
                <button class=\"btn btn-info btn-flat\" type=\"submit\">Sign up</button>
            </div>
        </div>
        <!-- box-footer -->
    </div>
    <!-- /.box -->
    </form>
{% endblock %}", "authentication/register.html.twig", "/home/haidt/shop/app/Resources/views/authentication/register.html.twig");
    }
}
