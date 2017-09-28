<?php

/* product/new.html.twig */
class __TwigTemplate_dddb0d7da575a404b5be00407e43538e1159f33a2e22c0827d6028fd02c22cd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/new.html.twig", 1);
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
        $__internal_887704df6b86a76b30f2cf552b6ba96c883b797e9b4de8078bbdb936c6bc62e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887704df6b86a76b30f2cf552b6ba96c883b797e9b4de8078bbdb936c6bc62e0->enter($__internal_887704df6b86a76b30f2cf552b6ba96c883b797e9b4de8078bbdb936c6bc62e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $__internal_ad12f7c5a12803a0790ca26e959bb6504cd29c755ceaa77dcee7fa9a0a45429b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad12f7c5a12803a0790ca26e959bb6504cd29c755ceaa77dcee7fa9a0a45429b->enter($__internal_ad12f7c5a12803a0790ca26e959bb6504cd29c755ceaa77dcee7fa9a0a45429b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_887704df6b86a76b30f2cf552b6ba96c883b797e9b4de8078bbdb936c6bc62e0->leave($__internal_887704df6b86a76b30f2cf552b6ba96c883b797e9b4de8078bbdb936c6bc62e0_prof);

        
        $__internal_ad12f7c5a12803a0790ca26e959bb6504cd29c755ceaa77dcee7fa9a0a45429b->leave($__internal_ad12f7c5a12803a0790ca26e959bb6504cd29c755ceaa77dcee7fa9a0a45429b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8585df85fa74b982c5eadbda450cf2bee55b6ef8285d70ead11a45c8c16752b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8585df85fa74b982c5eadbda450cf2bee55b6ef8285d70ead11a45c8c16752b->enter($__internal_e8585df85fa74b982c5eadbda450cf2bee55b6ef8285d70ead11a45c8c16752b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f338bd4b1390c45d29ba7c8b19d9e82690502390921b984ea88d1636dfbe9fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f338bd4b1390c45d29ba7c8b19d9e82690502390921b984ea88d1636dfbe9fb3->enter($__internal_f338bd4b1390c45d29ba7c8b19d9e82690502390921b984ea88d1636dfbe9fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form class=\"form-inline\" role=\"form\" method=\"POST\" action=\"/new\">
        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\" style=\"text-align: center\">New product</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\" style=\"text-align: center\">
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Product Name</label>
                        </div>
                        <div class=\"col-md-6\">
                            <input class=\"form-control\" type=\"text\" name=\"_proName\">
                        </div>
                    </div>
                </div><br/><br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label> Detail</label>
                        </div>
                        <div class=\"col-md-6\">
                            <input class=\"form-control\" type=\"text\" name=\"_details\">
                        </div>
                    </div>
                </div><br/><br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Category</label>
                        </div>
                        <div class=\"col-md-6\">
                            <select name=\"_cate\">
                                <option>Select option</option>
                                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")));
        foreach ($context['_seq'] as $context["_key"] => $context["listCate"]) {
            // line 40
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["listCate"], "cateid", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["listCate"], "name", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listCate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                            </select>
                        </div>
                    </div>
                </div><br/><br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Status</label>
                        </div>
                        <div class=\"col-md-6\">
                            <label>Instock
                                <input type=\"radio\" value=\"0\" name=\"_status\">
                            </label>
                            <label>OutStock
                                <input type=\"radio\" value=\"1\" name=\"_status\">
                            </label>
                        </div>
                    </div>
                </div>
            </div><br/>
            <!-- /.box-body -->
            <div class=\"box-footer\" style=\"text-align: center\">
                <div class=\"form-group\">
                    <button class=\"btn btn-info btn-flat\" type=\"submit\">Create new</button>
                    <button class=\"btn btn-danger btn-flat\" type=\"reset\">Reset</button>
                </div>
            </div>
            <!-- box-footer -->
        </div>
        <!-- /.box -->
    </form>
";
        
        $__internal_f338bd4b1390c45d29ba7c8b19d9e82690502390921b984ea88d1636dfbe9fb3->leave($__internal_f338bd4b1390c45d29ba7c8b19d9e82690502390921b984ea88d1636dfbe9fb3_prof);

        
        $__internal_e8585df85fa74b982c5eadbda450cf2bee55b6ef8285d70ead11a45c8c16752b->leave($__internal_e8585df85fa74b982c5eadbda450cf2bee55b6ef8285d70ead11a45c8c16752b_prof);

    }

    public function getTemplateName()
    {
        return "product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  90 => 40,  86 => 39,  49 => 4,  40 => 3,  11 => 1,);
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
    <form class=\"form-inline\" role=\"form\" method=\"POST\" action=\"/new\">
        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\" style=\"text-align: center\">New product</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\" style=\"text-align: center\">
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Product Name</label>
                        </div>
                        <div class=\"col-md-6\">
                            <input class=\"form-control\" type=\"text\" name=\"_proName\">
                        </div>
                    </div>
                </div><br/><br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label> Detail</label>
                        </div>
                        <div class=\"col-md-6\">
                            <input class=\"form-control\" type=\"text\" name=\"_details\">
                        </div>
                    </div>
                </div><br/><br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Category</label>
                        </div>
                        <div class=\"col-md-6\">
                            <select name=\"_cate\">
                                <option>Select option</option>
                                {% for listCate in cate %}
                                    <option value=\"{{ listCate.cateid }}\">{{ listCate.name }}</option>
                                    {% endfor %}
                            </select>
                        </div>
                    </div>
                </div><br/><br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Status</label>
                        </div>
                        <div class=\"col-md-6\">
                            <label>Instock
                                <input type=\"radio\" value=\"0\" name=\"_status\">
                            </label>
                            <label>OutStock
                                <input type=\"radio\" value=\"1\" name=\"_status\">
                            </label>
                        </div>
                    </div>
                </div>
            </div><br/>
            <!-- /.box-body -->
            <div class=\"box-footer\" style=\"text-align: center\">
                <div class=\"form-group\">
                    <button class=\"btn btn-info btn-flat\" type=\"submit\">Create new</button>
                    <button class=\"btn btn-danger btn-flat\" type=\"reset\">Reset</button>
                </div>
            </div>
            <!-- box-footer -->
        </div>
        <!-- /.box -->
    </form>
{% endblock %}", "product/new.html.twig", "/home/haidt/shop/app/Resources/views/product/new.html.twig");
    }
}
