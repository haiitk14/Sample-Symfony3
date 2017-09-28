<?php

/* product/show.html.twig */
class __TwigTemplate_ce40766ed716eaecae9ba9c73bc428cb649fe9db0cced2fe42a8d5b5d8e27755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
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
        $__internal_eef42d79ee123e213d56314b4bfeeba0f01099572f281127625d16a4f2269ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef42d79ee123e213d56314b4bfeeba0f01099572f281127625d16a4f2269ab2->enter($__internal_eef42d79ee123e213d56314b4bfeeba0f01099572f281127625d16a4f2269ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_3c2b14af0641171971e7d8b01c9ee233d9ea4b1c36a7332bff150aefa9bc4d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2b14af0641171971e7d8b01c9ee233d9ea4b1c36a7332bff150aefa9bc4d8d->enter($__internal_3c2b14af0641171971e7d8b01c9ee233d9ea4b1c36a7332bff150aefa9bc4d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eef42d79ee123e213d56314b4bfeeba0f01099572f281127625d16a4f2269ab2->leave($__internal_eef42d79ee123e213d56314b4bfeeba0f01099572f281127625d16a4f2269ab2_prof);

        
        $__internal_3c2b14af0641171971e7d8b01c9ee233d9ea4b1c36a7332bff150aefa9bc4d8d->leave($__internal_3c2b14af0641171971e7d8b01c9ee233d9ea4b1c36a7332bff150aefa9bc4d8d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_26a7aabda45677c186da8f3be01fa1827ee5231e705640f4a52a720939ae1285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a7aabda45677c186da8f3be01fa1827ee5231e705640f4a52a720939ae1285->enter($__internal_26a7aabda45677c186da8f3be01fa1827ee5231e705640f4a52a720939ae1285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3852fda42b33482d4a800e472ffa696ac707263ad16a0eb3e9d0f20a3115c77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3852fda42b33482d4a800e472ffa696ac707263ad16a0eb3e9d0f20a3115c77c->enter($__internal_3852fda42b33482d4a800e472ffa696ac707263ad16a0eb3e9d0f20a3115c77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "        <script
                src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
                integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
                crossorigin=\"anonymous\"></script>
        <ul class=\"nav nav-tabs\" id=\"tabContent\">
            <li ><a href=\"/load\" >Product</a></li>
            <li class=\"active\"><a href=\"/define\">Desigin</a></li>
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" >
                <form>
                    <h1>Product Name: <span id=\"name\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["productname"]) ? $context["productname"] : $this->getContext($context, "productname")), "html", null, true);
        echo "</span> </h1>     <br/>
                    <table border=\"1\" width=\"1500px\">
                        <tr>
                            <th colspan=\"7\" style=\"text-align: center\" ><h1>Show/Test values</h1></th>
                        </tr>
                        <tr>
                            <th style=\"text-align: center\">Design Shape</th>
                            <th style=\"text-align: center\">Design name</th>
                            <th style=\"text-align: center\">Real Weight (cm)</th>
                            <th style=\"text-align: center\">ISO (cm)</th>
                            <th style=\"text-align: center\">Weigth (cm)</th>
                            <th style=\"text-align: center\">Volume (cm)</th>
                        </tr>
                        ";
        // line 27
        if ((null === (isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")))) {
            // line 28
            echo "                            <tr></tr>
                        ";
        } else {
            // line 30
            echo "                        <tr>
                            <td style=\"text-align: center\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align: center\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "name", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align: center\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "desRealweight", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align: center\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "desIso", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align: center\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "desWeight", array()), "html", null, true);
            echo "</td>
                            <td style=\"text-align: center\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "desVolume", array()), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        // line 39
        echo "                    </table><br/><br/><br/><br/><br/>


                    <table border=\"1\" width=\"1500px\">
                        <tr>
                            <th colspan=\"7\" style=\"text-align: center\" ><h1>Show values</h1></th>
                        </tr>
                        <tr>
                            ";
        // line 47
        if ((null === (isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")))) {
            // line 48
            echo "                                <th style=\"text-align: center\">Design name</th>
                            ";
        } else {
            // line 50
            echo "                                ";
            if (($this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "slab")) {
                // line 51
                echo "                                    <th style=\"text-align: center\">Design name</th>
                                    <th style=\"text-align: center\">Design Shape</th>
                                    <th style=\"text-align: center\">Thickness (cm)</th>

                                ";
            } elseif (((($this->getAttribute(            // line 55
(isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Rectangular block (Vertical layer)") || ($this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Rectangular block (Horizontal layer)")) || ($this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Rectangular block (breaded)"))) {
                // line 56
                echo "                                    <th style=\"text-align: center\">Design name</th>
                                    <th style=\"text-align: center\">Design Shape</th>
                                    <th style=\"text-align: center\">Width (cm)</th>
                                    <th style=\"text-align: center\">Heigth (cm)</th>
                                    <th style=\"text-align: center\">Length (cm)</th>

                                ";
            } elseif (($this->getAttribute(            // line 62
(isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Standing clinder")) {
                // line 63
                echo "                                    <th style=\"text-align: center\">Design name</th>
                                    <th style=\"text-align: center\">Design Shape</th>
                                    <th style=\"text-align: center\">Heigth (cm)</th>
                                    <th style=\"text-align: center\">Diameter (cm)</th>

                                ";
            } elseif (($this->getAttribute(            // line 68
(isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Lying cylinder")) {
                // line 69
                echo "                                    <th style=\"text-align: center\">Design name</th>
                                    <th style=\"text-align: center\">Design Shape</th>
                                    <th style=\"text-align: center\">Length (cm)</th>
                                    <th style=\"text-align: center\">Diameter (cm)</th>

                                ";
            } elseif (($this->getAttribute(            // line 74
(isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Sphere")) {
                // line 75
                echo "                                    <th style=\"text-align: center\">Design name</th>
                                    <th style=\"text-align: center\">Design Shape</th>
                                    <th style=\"text-align: center\">Diameter (cm)</th>

                                ";
            } elseif (($this->getAttribute(            // line 79
(isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Standing concentric cylinder")) {
                // line 80
                echo "                                    <th style=\"text-align: center\">Design name</th>
                                    <th style=\"text-align: center\">Design Shape</th>
                                    <th style=\"text-align: center\">Heigth (cm)</th>
                                    <th style=\"text-align: center\">Diameter (cm)</th>

                                ";
            } elseif (($this->getAttribute(            // line 85
(isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Lying concentric Cylinder")) {
                // line 86
                echo "                                    <th style=\"text-align: center\">Design name</th>
                                    <th style=\"text-align: center\">Design Shape</th>
                                    <th style=\"text-align: center\">Length (cm)</th>
                                    <th style=\"text-align: center\">Diameter (cm)</th>
                                ";
            }
            // line 91
            echo "                            ";
        }
        // line 92
        echo "

                        </tr>

                            <tr>
                                ";
        // line 97
        if ((null === (isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")))) {
            // line 98
            echo "                                    <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">New Product</a></td>
                                ";
        } else {
            // line 100
            echo "
                                    ";
            // line 101
            if (($this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "slab")) {
                // line 102
                echo "                                            <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "name", array()), "html", null, true);
                echo "</a></td>
                                            <td style=\"text-align: center\">";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()), "html", null, true);
                echo "</td>
                                    ";
                // line 105
                echo "                                        ";
            } elseif (((($this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Rectangular block (Vertical layer)") || ($this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Rectangular block (Horizontal layer)")) || ($this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Rectangular block (breaded)"))) {
                // line 106
                echo "                                         <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "name", array()), "html", null, true);
                echo "</a></td>
                                            <td style=\"text-align: center\">";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()), "html", null, true);
                echo "</td>
                                            ";
                // line 109
                echo "                                            ";
                // line 110
                echo "                                            ";
                // line 111
                echo "
                                    ";
            } elseif (($this->getAttribute(            // line 112
(isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Standing clinder")) {
                // line 113
                echo "                                        <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "name", array()), "html", null, true);
                echo "</a></td>
                                        <td style=\"text-align: center\">";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 116
                echo "                                        ";
                // line 117
                echo "
                                    ";
            } elseif (($this->getAttribute(            // line 118
(isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Lying cylinder")) {
                // line 119
                echo "                                        <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "name", array()), "html", null, true);
                echo "</a></td>
                                        <td style=\"text-align: center\">";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 122
                echo "                                        ";
                // line 123
                echo "
                                    ";
            } elseif (($this->getAttribute(            // line 124
(isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Sphere")) {
                // line 125
                echo "                                        <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "name", array()), "html", null, true);
                echo "</a></td>
                                        <td style=\"text-align: center\">";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 128
                echo "
                                    ";
            } elseif (($this->getAttribute(            // line 129
(isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Standing concentric cylinder")) {
                // line 130
                echo "                                        <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "name", array()), "html", null, true);
                echo "</a></td>
                                        <td style=\"text-align: center\">";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 133
                echo "                                        ";
                // line 134
                echo "
                                    ";
            } elseif (($this->getAttribute(            // line 135
(isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()) == "Lying concentric Cylinder")) {
                // line 136
                echo "                                        <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "name", array()), "html", null, true);
                echo "</a></td>
                                        <td style=\"text-align: center\">";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "shapeid", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 139
                echo "                                        ";
                // line 140
                echo "
                                    ";
            }
            // line 142
            echo "                                ";
        }
        // line 143
        echo "                            </tr>
                        </table>






                    <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
                        <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                    <h4 class=\"modal-title\">Modal Header</h4>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Design Name\" name=\"_newpro\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Design Shape</label>
                                        <select name=\"_shape\" id=\"shapeName\" class=\"form-control\">
                                            ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listshape"]) ? $context["listshape"] : $this->getContext($context, "listshape")));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 166
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "shapeid", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "name", array()), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                                        </select>
                                    </div><br/>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Demension 1\" id=\"D1\" name=\"_D1\" disabled>
                                    </div>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Demension 2\" id=\"D2\" name=\"_D2\" disabled>
                                    </div>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Demension 3\" id=\"D3\" name=\"_D3\" disabled>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" id=\"confirm\" class=\"btn btn-info\" >Confirm</button>
                                    ";
        // line 183
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <script>
        \$('#shapeName').change(function() {
//            alert(\$(this).val());
            \$('#D1').prop( \"disabled\", true );
            \$('#D2').prop( \"disabled\", true );
            \$('#D3').prop( \"disabled\", true );

            if( \$(this).val() == 1) {
                \$('#D1').prop( \"disabled\", true );
                \$('#D2').prop( \"disabled\", true );
                \$('#D3').prop( \"disabled\", true );
//                alert('ccccc');
            }

            else if (\$(this).val() == 2 || \$(this).val() == 3 || \$(this).val() == 9) {
                \$('#D1').prop( \"disabled\", false );
                \$('#D3').prop( \"disabled\", false );
            }

            else if (\$(this).val() == 4 || \$(this).val() == 5 || \$(this).val() == 7 || \$(this).val() == 8) {
                \$('#D1').prop( \"disabled\", false );
            }

            else if (\$(this).val() == 6) {
                \$('#D1').prop( \"disabled\", true );
                \$('#D2').prop( \"disabled\", true );
                \$('#D3').prop( \"disabled\", true );
            }

        });
    </script>
";
        
        $__internal_3852fda42b33482d4a800e472ffa696ac707263ad16a0eb3e9d0f20a3115c77c->leave($__internal_3852fda42b33482d4a800e472ffa696ac707263ad16a0eb3e9d0f20a3115c77c_prof);

        
        $__internal_26a7aabda45677c186da8f3be01fa1827ee5231e705640f4a52a720939ae1285->leave($__internal_26a7aabda45677c186da8f3be01fa1827ee5231e705640f4a52a720939ae1285_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 183,  362 => 168,  351 => 166,  347 => 165,  323 => 143,  320 => 142,  316 => 140,  314 => 139,  310 => 137,  305 => 136,  303 => 135,  300 => 134,  298 => 133,  294 => 131,  289 => 130,  287 => 129,  284 => 128,  280 => 126,  275 => 125,  273 => 124,  270 => 123,  268 => 122,  264 => 120,  259 => 119,  257 => 118,  254 => 117,  252 => 116,  248 => 114,  243 => 113,  241 => 112,  238 => 111,  236 => 110,  234 => 109,  230 => 107,  225 => 106,  222 => 105,  218 => 103,  213 => 102,  211 => 101,  208 => 100,  204 => 98,  202 => 97,  195 => 92,  192 => 91,  185 => 86,  183 => 85,  176 => 80,  174 => 79,  168 => 75,  166 => 74,  159 => 69,  157 => 68,  150 => 63,  148 => 62,  140 => 56,  138 => 55,  132 => 51,  129 => 50,  125 => 48,  123 => 47,  113 => 39,  107 => 36,  103 => 35,  99 => 34,  95 => 33,  91 => 32,  87 => 31,  84 => 30,  80 => 28,  78 => 27,  62 => 14,  49 => 3,  40 => 2,  11 => 1,);
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
        <script
                src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
                integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
                crossorigin=\"anonymous\"></script>
        <ul class=\"nav nav-tabs\" id=\"tabContent\">
            <li ><a href=\"/load\" >Product</a></li>
            <li class=\"active\"><a href=\"/define\">Desigin</a></li>
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" >
                <form>
                    <h1>Product Name: <span id=\"name\">{{ productname}}</span> </h1>     <br/>
                    <table border=\"1\" width=\"1500px\">
                        <tr>
                            <th colspan=\"7\" style=\"text-align: center\" ><h1>Show/Test values</h1></th>
                        </tr>
                        <tr>
                            <th style=\"text-align: center\">Design Shape</th>
                            <th style=\"text-align: center\">Design name</th>
                            <th style=\"text-align: center\">Real Weight (cm)</th>
                            <th style=\"text-align: center\">ISO (cm)</th>
                            <th style=\"text-align: center\">Weigth (cm)</th>
                            <th style=\"text-align: center\">Volume (cm)</th>
                        </tr>
                        {% if show is null %}
                            <tr></tr>
                        {% else %}
                        <tr>
                            <td style=\"text-align: center\">{{ show.shapeid }}</td>
                            <td style=\"text-align: center\">{{ show.name }}</td>
                            <td style=\"text-align: center\">{{ show.desRealweight }}</td>
                            <td style=\"text-align: center\">{{ show.desIso }}</td>
                            <td style=\"text-align: center\">{{ show.desWeight }}</td>
                            <td style=\"text-align: center\">{{ show.desVolume }}</td>
                        </tr>
                        {% endif %}
                    </table><br/><br/><br/><br/><br/>


                    <table border=\"1\" width=\"1500px\">
                        <tr>
                            <th colspan=\"7\" style=\"text-align: center\" ><h1>Show values</h1></th>
                        </tr>
                        <tr>
                            {% if show is null %}
                                <th style=\"text-align: center\">Design name</th>
                            {% else %}
                                {% if show.shapeid == \"slab\" %}
                                    <th style=\"text-align: center\">Design name</th>
                                    <th style=\"text-align: center\">Design Shape</th>
                                    <th style=\"text-align: center\">Thickness (cm)</th>

                                {% elseif show.shapeid == \"Rectangular block (Vertical layer)\" or show.shapeid == \"Rectangular block (Horizontal layer)\" or show.shapeid == \"Rectangular block (breaded)\"    %}
                                    <th style=\"text-align: center\">Design name</th>
                                    <th style=\"text-align: center\">Design Shape</th>
                                    <th style=\"text-align: center\">Width (cm)</th>
                                    <th style=\"text-align: center\">Heigth (cm)</th>
                                    <th style=\"text-align: center\">Length (cm)</th>

                                {% elseif show.shapeid == \"Standing clinder\" %}
                                    <th style=\"text-align: center\">Design name</th>
                                    <th style=\"text-align: center\">Design Shape</th>
                                    <th style=\"text-align: center\">Heigth (cm)</th>
                                    <th style=\"text-align: center\">Diameter (cm)</th>

                                {% elseif show.shapeid == \"Lying cylinder\" %}
                                    <th style=\"text-align: center\">Design name</th>
                                    <th style=\"text-align: center\">Design Shape</th>
                                    <th style=\"text-align: center\">Length (cm)</th>
                                    <th style=\"text-align: center\">Diameter (cm)</th>

                                {% elseif show.shapeid == \"Sphere\" %}
                                    <th style=\"text-align: center\">Design name</th>
                                    <th style=\"text-align: center\">Design Shape</th>
                                    <th style=\"text-align: center\">Diameter (cm)</th>

                                {% elseif show.shapeid == \"Standing concentric cylinder\" %}
                                    <th style=\"text-align: center\">Design name</th>
                                    <th style=\"text-align: center\">Design Shape</th>
                                    <th style=\"text-align: center\">Heigth (cm)</th>
                                    <th style=\"text-align: center\">Diameter (cm)</th>

                                {% elseif show.shapeid == \"Lying concentric Cylinder\" %}
                                    <th style=\"text-align: center\">Design name</th>
                                    <th style=\"text-align: center\">Design Shape</th>
                                    <th style=\"text-align: center\">Length (cm)</th>
                                    <th style=\"text-align: center\">Diameter (cm)</th>
                                {% endif %}
                            {% endif %}


                        </tr>

                            <tr>
                                {% if show is null %}
                                    <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">New Product</a></td>
                                {% else %}

                                    {% if show.shapeid == \"slab\" %}
                                            <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">{{ show.name }}</a></td>
                                            <td style=\"text-align: center\">{{ show.shapeid }}</td>
                                    {#<td style=\"text-align: center\">{{ show.thickness }}</td>#}
                                        {% elseif show.shapeid == \"Rectangular block (Vertical layer)\" or show.shapeid == \"Rectangular block (Horizontal layer)\" or show.shapeid == \"Rectangular block (breaded)\" %}
                                         <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">{{ show.name }}</a></td>
                                            <td style=\"text-align: center\">{{ show.shapeid }}</td>
                                            {#<td style=\"text-align: center\">{{ show.width }}</td>#}
                                            {#<td style=\"text-align: center\">{{ show.heigth }}</td>#}
                                            {#<td style=\"text-align: center\">{{ show.length }}</td>#}

                                    {% elseif show.shapeid == \"Standing clinder\" %}
                                        <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">{{ show.name }}</a></td>
                                        <td style=\"text-align: center\">{{ show.shapeid }}</td>
                                        {#<td style=\"text-align: center\">{{ show.heigth }}</td>#}
                                        {#<td style=\"text-align: center\">{{ show.diameter }}</td>#}

                                    {% elseif show.shapeid == \"Lying cylinder\" %}
                                        <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">{{ show.name }}</a></td>
                                        <td style=\"text-align: center\">{{ show.shapeid }}</td>
                                        {#<td style=\"text-align: center\">{{ show.length }}</td>#}
                                        {#<td style=\"text-align: center\">{{ show.diameter }}</td>#}

                                    {% elseif show.shapeid == \"Sphere\" %}
                                        <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">{{ show.name }}</a></td>
                                        <td style=\"text-align: center\">{{ show.shapeid }}</td>
                                        {#<td style=\"text-align: center\">{{ show.diameter }}</td>#}

                                    {% elseif show.shapeid == \"Standing concentric cylinder\" %}
                                        <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">{{ show.name }}</a></td>
                                        <td style=\"text-align: center\">{{ show.shapeid }}</td>
                                        {#<td style=\"text-align: center\">{{ show.heigth }}</td>#}
                                        {#<td style=\"text-align: center\">{{ show.diameter }}</td>#}

                                    {% elseif show.shapeid == \"Lying concentric Cylinder\" %}
                                        <td style=\"text-align: center\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">{{ show.name }}</a></td>
                                        <td style=\"text-align: center\">{{ show.shapeid }}</td>
                                        {#<td style=\"text-align: center\">{{ show.length }}</td>#}
                                        {#<td style=\"text-align: center\">{{ show.diameter }}</td>#}

                                    {% endif %}
                                {% endif %}
                            </tr>
                        </table>






                    <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
                        <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                    <h4 class=\"modal-title\">Modal Header</h4>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Design Name\" name=\"_newpro\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Design Shape</label>
                                        <select name=\"_shape\" id=\"shapeName\" class=\"form-control\">
                                            {% for list in listshape %}
                                                <option value=\"{{ list.shapeid }}\">{{ list.name }}</option>
                                            {% endfor %}
                                        </select>
                                    </div><br/>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Demension 1\" id=\"D1\" name=\"_D1\" disabled>
                                    </div>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Demension 2\" id=\"D2\" name=\"_D2\" disabled>
                                    </div>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Demension 3\" id=\"D3\" name=\"_D3\" disabled>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" id=\"confirm\" class=\"btn btn-info\" >Confirm</button>
                                    {#<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>#}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <script>
        \$('#shapeName').change(function() {
//            alert(\$(this).val());
            \$('#D1').prop( \"disabled\", true );
            \$('#D2').prop( \"disabled\", true );
            \$('#D3').prop( \"disabled\", true );

            if( \$(this).val() == 1) {
                \$('#D1').prop( \"disabled\", true );
                \$('#D2').prop( \"disabled\", true );
                \$('#D3').prop( \"disabled\", true );
//                alert('ccccc');
            }

            else if (\$(this).val() == 2 || \$(this).val() == 3 || \$(this).val() == 9) {
                \$('#D1').prop( \"disabled\", false );
                \$('#D3').prop( \"disabled\", false );
            }

            else if (\$(this).val() == 4 || \$(this).val() == 5 || \$(this).val() == 7 || \$(this).val() == 8) {
                \$('#D1').prop( \"disabled\", false );
            }

            else if (\$(this).val() == 6) {
                \$('#D1').prop( \"disabled\", true );
                \$('#D2').prop( \"disabled\", true );
                \$('#D3').prop( \"disabled\", true );
            }

        });
    </script>
{% endblock %}
", "product/show.html.twig", "/home/haidt/shop/app/Resources/views/product/show.html.twig");
    }
}
