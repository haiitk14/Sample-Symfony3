<?php

/* authentication/login.html.twig */
class __TwigTemplate_7d1d5c1543be9c6c8481e176efebbdfad789e7b41d7c4538a763f7b744c8d6a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "authentication/login.html.twig", 1);
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
        $__internal_2515525811034893e1ec0382053c79ded1cc32b60752828f4080a02a5269e12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2515525811034893e1ec0382053c79ded1cc32b60752828f4080a02a5269e12d->enter($__internal_2515525811034893e1ec0382053c79ded1cc32b60752828f4080a02a5269e12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentication/login.html.twig"));

        $__internal_715e5caba33d04ba95828b5c060a0cd023548e2d3a93c15b5e58237e87d30497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715e5caba33d04ba95828b5c060a0cd023548e2d3a93c15b5e58237e87d30497->enter($__internal_715e5caba33d04ba95828b5c060a0cd023548e2d3a93c15b5e58237e87d30497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentication/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2515525811034893e1ec0382053c79ded1cc32b60752828f4080a02a5269e12d->leave($__internal_2515525811034893e1ec0382053c79ded1cc32b60752828f4080a02a5269e12d_prof);

        
        $__internal_715e5caba33d04ba95828b5c060a0cd023548e2d3a93c15b5e58237e87d30497->leave($__internal_715e5caba33d04ba95828b5c060a0cd023548e2d3a93c15b5e58237e87d30497_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28c227bd605793ec459d5453e0d60cd1c2df0c9044814028bfb64cdf12084820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c227bd605793ec459d5453e0d60cd1c2df0c9044814028bfb64cdf12084820->enter($__internal_28c227bd605793ec459d5453e0d60cd1c2df0c9044814028bfb64cdf12084820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_065c86f191932bf24a6292cc1a7d6d62825b9a2aabc7faf45298f1855166e57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065c86f191932bf24a6292cc1a7d6d62825b9a2aabc7faf45298f1855166e57a->enter($__internal_065c86f191932bf24a6292cc1a7d6d62825b9a2aabc7faf45298f1855166e57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form class=\"form-inline\" role=\"form\" method=\"POST\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login_check");
        echo "\">
        ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array())), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 10
        echo "        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\" style=\"text-align: center\">Login</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\" style=\"text-align: center\">
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>User Name</label>
                        </div>
                        <div class=\"col-md-6\">
                            <input class=\"form-control\" type=\"text\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div><br/><br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label> Password</label>
                        </div>
                        <div class=\"col-md-6\">
                            <input class=\"form-control\" type=\"password\" name=\"_password\" >
                        </div>
                    </div>
                </div><br/><br/>


            </div><br/>
            <!-- /.box-body -->
            <div class=\"box-footer\" style=\"text-align: center\">
                <div class=\"form-group\">
                    <button class=\"btn btn-info btn-flat\" type=\"submit\">Sign in</button>
                </div><br/>
                <div class=\"form-group\">
                    <a href=\"/signup\">Sign up</a>
                </div>
            </div>
            <!-- box-footer -->
        </div>
        <!-- /.box -->
    </form>
";
        
        $__internal_065c86f191932bf24a6292cc1a7d6d62825b9a2aabc7faf45298f1855166e57a->leave($__internal_065c86f191932bf24a6292cc1a7d6d62825b9a2aabc7faf45298f1855166e57a_prof);

        
        $__internal_28c227bd605793ec459d5453e0d60cd1c2df0c9044814028bfb64cdf12084820->leave($__internal_28c227bd605793ec459d5453e0d60cd1c2df0c9044814028bfb64cdf12084820_prof);

    }

    public function getTemplateName()
    {
        return "authentication/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  65 => 10,  59 => 7,  56 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <form class=\"form-inline\" role=\"form\" method=\"POST\" action=\"{{ path('security_login_check') }}\">
        {% if error %}
            <div class=\"alert alert-danger\">
                {{ error.messageKey|trans(error.messageData) }}
            </div>
        {% endif %}
        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\" style=\"text-align: center\">Login</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\" style=\"text-align: center\">
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>User Name</label>
                        </div>
                        <div class=\"col-md-6\">
                            <input class=\"form-control\" type=\"text\" name=\"_username\" value=\"{{ last_username }}\">
                        </div>
                    </div>
                </div><br/><br/>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label> Password</label>
                        </div>
                        <div class=\"col-md-6\">
                            <input class=\"form-control\" type=\"password\" name=\"_password\" >
                        </div>
                    </div>
                </div><br/><br/>


            </div><br/>
            <!-- /.box-body -->
            <div class=\"box-footer\" style=\"text-align: center\">
                <div class=\"form-group\">
                    <button class=\"btn btn-info btn-flat\" type=\"submit\">Sign in</button>
                </div><br/>
                <div class=\"form-group\">
                    <a href=\"/signup\">Sign up</a>
                </div>
            </div>
            <!-- box-footer -->
        </div>
        <!-- /.box -->
    </form>
{% endblock %}", "authentication/login.html.twig", "/home/haidt/shop/app/Resources/views/authentication/login.html.twig");
    }
}
