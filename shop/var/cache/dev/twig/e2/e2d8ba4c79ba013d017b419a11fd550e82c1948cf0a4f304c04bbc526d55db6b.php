<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5556941d221de67d008a9a2ad3bc89cc3bab3a982159a00852e920be63b93eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5556941d221de67d008a9a2ad3bc89cc3bab3a982159a00852e920be63b93eeb->enter($__internal_5556941d221de67d008a9a2ad3bc89cc3bab3a982159a00852e920be63b93eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4213446b1264067e32c8cb7c63b22d6ed7611929b7fa026d1b592f848e7353df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4213446b1264067e32c8cb7c63b22d6ed7611929b7fa026d1b592f848e7353df->enter($__internal_4213446b1264067e32c8cb7c63b22d6ed7611929b7fa026d1b592f848e7353df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_5556941d221de67d008a9a2ad3bc89cc3bab3a982159a00852e920be63b93eeb->leave($__internal_5556941d221de67d008a9a2ad3bc89cc3bab3a982159a00852e920be63b93eeb_prof);

        
        $__internal_4213446b1264067e32c8cb7c63b22d6ed7611929b7fa026d1b592f848e7353df->leave($__internal_4213446b1264067e32c8cb7c63b22d6ed7611929b7fa026d1b592f848e7353df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_733fd717a1fff0a60d99cefcf263105150ee5d4086f2142823cb89b64b0791f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733fd717a1fff0a60d99cefcf263105150ee5d4086f2142823cb89b64b0791f2->enter($__internal_733fd717a1fff0a60d99cefcf263105150ee5d4086f2142823cb89b64b0791f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4116b24d5321138cb43a58ca949517af02e1abee6375ece50a415d72f0335ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4116b24d5321138cb43a58ca949517af02e1abee6375ece50a415d72f0335ab->enter($__internal_e4116b24d5321138cb43a58ca949517af02e1abee6375ece50a415d72f0335ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e4116b24d5321138cb43a58ca949517af02e1abee6375ece50a415d72f0335ab->leave($__internal_e4116b24d5321138cb43a58ca949517af02e1abee6375ece50a415d72f0335ab_prof);

        
        $__internal_733fd717a1fff0a60d99cefcf263105150ee5d4086f2142823cb89b64b0791f2->leave($__internal_733fd717a1fff0a60d99cefcf263105150ee5d4086f2142823cb89b64b0791f2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f95cdc69771b3703f93172ba137fef8624a880c0c01f997e481d6ecbd102f280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95cdc69771b3703f93172ba137fef8624a880c0c01f997e481d6ecbd102f280->enter($__internal_f95cdc69771b3703f93172ba137fef8624a880c0c01f997e481d6ecbd102f280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a1de336864953ab78cf731852de2aa830c0a323548a8cc5b5d9275cc4c4350f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1de336864953ab78cf731852de2aa830c0a323548a8cc5b5d9275cc4c4350f->enter($__internal_7a1de336864953ab78cf731852de2aa830c0a323548a8cc5b5d9275cc4c4350f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7a1de336864953ab78cf731852de2aa830c0a323548a8cc5b5d9275cc4c4350f->leave($__internal_7a1de336864953ab78cf731852de2aa830c0a323548a8cc5b5d9275cc4c4350f_prof);

        
        $__internal_f95cdc69771b3703f93172ba137fef8624a880c0c01f997e481d6ecbd102f280->leave($__internal_f95cdc69771b3703f93172ba137fef8624a880c0c01f997e481d6ecbd102f280_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b4a14c54c195f01937c4be7895969db838634259799eaad863d4f1a968e1b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b4a14c54c195f01937c4be7895969db838634259799eaad863d4f1a968e1b39->enter($__internal_8b4a14c54c195f01937c4be7895969db838634259799eaad863d4f1a968e1b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41ec5a4ab501a3866470610be2fba4a9577c1eaf1ffae4dda8d64173f99956e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ec5a4ab501a3866470610be2fba4a9577c1eaf1ffae4dda8d64173f99956e7->enter($__internal_41ec5a4ab501a3866470610be2fba4a9577c1eaf1ffae4dda8d64173f99956e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_41ec5a4ab501a3866470610be2fba4a9577c1eaf1ffae4dda8d64173f99956e7->leave($__internal_41ec5a4ab501a3866470610be2fba4a9577c1eaf1ffae4dda8d64173f99956e7_prof);

        
        $__internal_8b4a14c54c195f01937c4be7895969db838634259799eaad863d4f1a968e1b39->leave($__internal_8b4a14c54c195f01937c4be7895969db838634259799eaad863d4f1a968e1b39_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/haidt/shop/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
