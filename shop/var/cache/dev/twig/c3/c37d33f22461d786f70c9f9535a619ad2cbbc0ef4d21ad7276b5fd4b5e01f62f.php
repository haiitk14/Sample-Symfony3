<?php

/* authentication/changepassword.html.twig */
class __TwigTemplate_b20f695edb3f88de857b9a50ac3a33ce9b7a8b19d4c88e98053cffefe76f0f24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "authentication/changepassword.html.twig", 1);
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
        $__internal_b31767bc4357bb9bcd3016e65bbc897a438f66db036e0cd26af0b502ea67fd59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31767bc4357bb9bcd3016e65bbc897a438f66db036e0cd26af0b502ea67fd59->enter($__internal_b31767bc4357bb9bcd3016e65bbc897a438f66db036e0cd26af0b502ea67fd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentication/changepassword.html.twig"));

        $__internal_478e3c292e39b86b0891a9b6bea1f86da81eac84116b81dba00f74a6caf017ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478e3c292e39b86b0891a9b6bea1f86da81eac84116b81dba00f74a6caf017ff->enter($__internal_478e3c292e39b86b0891a9b6bea1f86da81eac84116b81dba00f74a6caf017ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentication/changepassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b31767bc4357bb9bcd3016e65bbc897a438f66db036e0cd26af0b502ea67fd59->leave($__internal_b31767bc4357bb9bcd3016e65bbc897a438f66db036e0cd26af0b502ea67fd59_prof);

        
        $__internal_478e3c292e39b86b0891a9b6bea1f86da81eac84116b81dba00f74a6caf017ff->leave($__internal_478e3c292e39b86b0891a9b6bea1f86da81eac84116b81dba00f74a6caf017ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac5d6777d1e44ba17a5a635f9daa132f3631b36d1125f0b7c407c68122ac0b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5d6777d1e44ba17a5a635f9daa132f3631b36d1125f0b7c407c68122ac0b15->enter($__internal_ac5d6777d1e44ba17a5a635f9daa132f3631b36d1125f0b7c407c68122ac0b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d7ea5be9bfea45ce8e1068103a76ae7b91af26072c9774f10e0ce2cd56e3c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7ea5be9bfea45ce8e1068103a76ae7b91af26072c9774f10e0ce2cd56e3c50->enter($__internal_7d7ea5be9bfea45ce8e1068103a76ae7b91af26072c9774f10e0ce2cd56e3c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form class=\"form-inline\" role=\"form\" method=\"POST\" action=\"/change\">
        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\" style=\"text-align: center\">Change password</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\" style=\"text-align: center\">
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Old Password</label>
                        </div>
                        <div class=\"col-md-6\">
                            <input class=\"form-control\" type=\"text\" name=\"_oldPass\">
                        </div>
                    </div>
                </div><br/><br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label> New Password</label>
                        </div>
                        <div class=\"col-md-6\">
                            <input class=\"form-control\" type=\"password\" name=\"_newPass\">
                        </div>
                    </div>
                </div><br/><br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Confirm password</label>
                        </div>
                        <div class=\"col-md-6\">
                            <input class=\"form-control\" type=\"password\" name=\"_confirmPass\">
                        </div>
                    </div>
                </div>

            </div><br/>
            <!-- /.box-body -->
            <div class=\"box-footer\" style=\"text-align: center\">
                <div class=\"form-group\">
                    <button class=\"btn btn-info btn-flat\" type=\"submit\">Save</button>
                </div>
            </div>
            <!-- box-footer -->
        </div>
        <!-- /.box -->
    </form>
";
        
        $__internal_7d7ea5be9bfea45ce8e1068103a76ae7b91af26072c9774f10e0ce2cd56e3c50->leave($__internal_7d7ea5be9bfea45ce8e1068103a76ae7b91af26072c9774f10e0ce2cd56e3c50_prof);

        
        $__internal_ac5d6777d1e44ba17a5a635f9daa132f3631b36d1125f0b7c407c68122ac0b15->leave($__internal_ac5d6777d1e44ba17a5a635f9daa132f3631b36d1125f0b7c407c68122ac0b15_prof);

    }

    public function getTemplateName()
    {
        return "authentication/changepassword.html.twig";
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
    <form class=\"form-inline\" role=\"form\" method=\"POST\" action=\"/change\">
        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\" style=\"text-align: center\">Change password</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\" style=\"text-align: center\">
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Old Password</label>
                        </div>
                        <div class=\"col-md-6\">
                            <input class=\"form-control\" type=\"text\" name=\"_oldPass\">
                        </div>
                    </div>
                </div><br/><br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label> New Password</label>
                        </div>
                        <div class=\"col-md-6\">
                            <input class=\"form-control\" type=\"password\" name=\"_newPass\">
                        </div>
                    </div>
                </div><br/><br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Confirm password</label>
                        </div>
                        <div class=\"col-md-6\">
                            <input class=\"form-control\" type=\"password\" name=\"_confirmPass\">
                        </div>
                    </div>
                </div>

            </div><br/>
            <!-- /.box-body -->
            <div class=\"box-footer\" style=\"text-align: center\">
                <div class=\"form-group\">
                    <button class=\"btn btn-info btn-flat\" type=\"submit\">Save</button>
                </div>
            </div>
            <!-- box-footer -->
        </div>
        <!-- /.box -->
    </form>
{% endblock %}", "authentication/changepassword.html.twig", "/home/haidt/shop/app/Resources/views/authentication/changepassword.html.twig");
    }
}
