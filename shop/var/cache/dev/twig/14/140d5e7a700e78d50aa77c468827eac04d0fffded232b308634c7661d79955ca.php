<?php

/* @Twig/Exception/trace.html.twig */
class __TwigTemplate_78dd2bab0e30e76a40c0e85be0694a6fecc967d21c8c2fe6c37db582788c692b extends Twig_Template
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
        $__internal_afd2365f27e50c0596bc2a4a23d110babdcce104ba54f5258008ae5fbda24975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd2365f27e50c0596bc2a4a23d110babdcce104ba54f5258008ae5fbda24975->enter($__internal_afd2365f27e50c0596bc2a4a23d110babdcce104ba54f5258008ae5fbda24975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.html.twig"));

        $__internal_a9d0a72a740c07b21e1dab148119b6df9cb8cb1df546f1b022c4b49992427c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d0a72a740c07b21e1dab148119b6df9cb8cb1df546f1b022c4b49992427c3d->enter($__internal_a9d0a72a740c07b21e1dab148119b6df9cb8cb1df546f1b022c4b49992427c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.html.twig"));

        // line 1
        echo "<div class=\"trace-line-header ";
        echo (((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array()), false)) : (false))) ? ("sf-toggle") : (""));
        echo "\" data-toggle-selector=\"#trace-html-";
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo (((isset($context["_display_code_snippet"]) ? $context["_display_code_snippet"] : $this->getContext($context, "_display_code_snippet"))) ? ("display") : (""));
        echo "\">
    ";
        // line 2
        if ((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array()), false)) : (false))) {
            // line 3
            echo "        <span class=\"icon icon-close\">";
            echo twig_include($this->env, $context, "@Twig/images/icon-minus-square.svg");
            echo "</span>
        <span class=\"icon icon-open\">";
            // line 4
            echo twig_include($this->env, $context, "@Twig/images/icon-plus-square.svg");
            echo "</span>
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 8
            echo "        <span class=\"trace-class\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()));
            echo "</span>";
            if ( !twig_test_empty($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array()))) {
                echo "<span class=\"trace-type\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array()), "html", null, true);
                echo "</span>";
            }
            echo "<span class=\"trace-method\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()), "html", null, true);
            echo "</span><span class=\"trace-arguments\">(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")</span>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if ((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array()), false)) : (false))) {
            // line 12
            echo "        ";
            $context["line_number"] = (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array()), 1)) : (1));
            // line 13
            echo "        ";
            $context["file_link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array()), (isset($context["line_number"]) ? $context["line_number"] : $this->getContext($context, "line_number")));
            // line 14
            echo "        ";
            $context["file_path"] = twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array()), (isset($context["line_number"]) ? $context["line_number"] : $this->getContext($context, "line_number")))), array((" at line " . (isset($context["line_number"]) ? $context["line_number"] : $this->getContext($context, "line_number"))) => ""));
            // line 15
            echo "        ";
            $context["file_path_parts"] = twig_split_filter($this->env, (isset($context["file_path"]) ? $context["file_path"] : $this->getContext($context, "file_path")), twig_constant("DIRECTORY_SEPARATOR"));
            // line 16
            echo "
        <span class=\"block trace-file-path\">
            in
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["file_link"]) ? $context["file_link"] : $this->getContext($context, "file_link")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, (isset($context["file_path_parts"]) ? $context["file_path_parts"] : $this->getContext($context, "file_path_parts")), 0,  -1), twig_constant("DIRECTORY_SEPARATOR")), "html", null, true);
            echo twig_escape_filter($this->env, twig_constant("DIRECTORY_SEPARATOR"), "html", null, true);
            echo "<strong>";
            echo twig_escape_filter($this->env, twig_last($this->env, (isset($context["file_path_parts"]) ? $context["file_path_parts"] : $this->getContext($context, "file_path_parts"))), "html", null, true);
            echo "</strong></a>
            (line ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["line_number"]) ? $context["line_number"] : $this->getContext($context, "line_number")), "html", null, true);
            echo ")
        </span>
    ";
        }
        // line 23
        echo "</div>
";
        // line 24
        if ((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array()), false)) : (false))) {
            // line 25
            echo "    <div id=\"trace-html-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "-") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "\" class=\"trace-code sf-toggle-content\">
        ";
            // line 26
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array()), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array()), 5), array("#DD0000" => "#183691", "#007700" => "#a71d5d", "#0000BB" => "#222222", "#FF8000" => "#969896"));
            // line 31
            echo "
    </div>
";
        }
        
        $__internal_afd2365f27e50c0596bc2a4a23d110babdcce104ba54f5258008ae5fbda24975->leave($__internal_afd2365f27e50c0596bc2a4a23d110babdcce104ba54f5258008ae5fbda24975_prof);

        
        $__internal_a9d0a72a740c07b21e1dab148119b6df9cb8cb1df546f1b022c4b49992427c3d->leave($__internal_a9d0a72a740c07b21e1dab148119b6df9cb8cb1df546f1b022c4b49992427c3d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  116 => 26,  111 => 25,  109 => 24,  106 => 23,  100 => 20,  91 => 19,  86 => 16,  83 => 15,  80 => 14,  77 => 13,  74 => 12,  72 => 11,  69 => 10,  53 => 8,  51 => 7,  48 => 6,  43 => 4,  38 => 3,  36 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"trace-line-header {{ trace.file|default(false) ? 'sf-toggle' }}\" data-toggle-selector=\"#trace-html-{{ prefix }}-{{ i }}\" data-toggle-initial=\"{{ _display_code_snippet ? 'display' }}\">
    {% if trace.file|default(false) %}
        <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square.svg') }}</span>
        <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square.svg') }}</span>
    {% endif %}

    {% if trace.function %}
        <span class=\"trace-class\">{{ trace.class|abbr_class }}</span>{% if trace.type is not empty %}<span class=\"trace-type\">{{ trace.type }}</span>{% endif %}<span class=\"trace-method\">{{ trace.function }}</span><span class=\"trace-arguments\">({{ trace.args|format_args }})</span>
    {% endif %}

    {% if trace.file|default(false) %}
        {% set line_number = trace.line|default(1) %}
        {% set file_link = trace.file|file_link(line_number) %}
        {% set file_path = trace.file|format_file(line_number)|striptags|replace({ (' at line ' ~ line_number): '' }) %}
        {% set file_path_parts = file_path|split(constant('DIRECTORY_SEPARATOR')) %}

        <span class=\"block trace-file-path\">
            in
            <a href=\"{{ file_link }}\">{{ file_path_parts[:-1]|join(constant('DIRECTORY_SEPARATOR')) }}{{ constant('DIRECTORY_SEPARATOR') }}<strong>{{ file_path_parts|last }}</strong></a>
            (line {{ line_number }})
        </span>
    {% endif %}
</div>
{% if trace.file|default(false) %}
    <div id=\"trace-html-{{ prefix ~ '-' ~ i }}\" class=\"trace-code sf-toggle-content\">
        {{ trace.file|file_excerpt(trace.line, 5)|replace({
            '#DD0000': '#183691',
            '#007700': '#a71d5d',
            '#0000BB': '#222222',
            '#FF8000': '#969896'
        })|raw }}
    </div>
{% endif %}
", "@Twig/Exception/trace.html.twig", "/home/haidt/shop/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.html.twig");
    }
}