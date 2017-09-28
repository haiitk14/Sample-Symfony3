<?php

/* product/load.html.twig */
class __TwigTemplate_9121557c04739ff4d5e084f1346bff344a5b8c867a507e11679bfc69413b28ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/load.html.twig", 1);
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
        $__internal_7b58b9146172b39dc00fd2110496961c4f8c02b503cc35fb03d457beca077c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b58b9146172b39dc00fd2110496961c4f8c02b503cc35fb03d457beca077c81->enter($__internal_7b58b9146172b39dc00fd2110496961c4f8c02b503cc35fb03d457beca077c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/load.html.twig"));

        $__internal_22ee322a27e6ab82bcb0f7d73c7f84160c7875b4c3f0a4d34a45f47888bc5970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ee322a27e6ab82bcb0f7d73c7f84160c7875b4c3f0a4d34a45f47888bc5970->enter($__internal_22ee322a27e6ab82bcb0f7d73c7f84160c7875b4c3f0a4d34a45f47888bc5970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/load.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b58b9146172b39dc00fd2110496961c4f8c02b503cc35fb03d457beca077c81->leave($__internal_7b58b9146172b39dc00fd2110496961c4f8c02b503cc35fb03d457beca077c81_prof);

        
        $__internal_22ee322a27e6ab82bcb0f7d73c7f84160c7875b4c3f0a4d34a45f47888bc5970->leave($__internal_22ee322a27e6ab82bcb0f7d73c7f84160c7875b4c3f0a4d34a45f47888bc5970_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_129ec6600832ee65df634d052420aba5bed9221d043f7f2820bdc994edabea83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129ec6600832ee65df634d052420aba5bed9221d043f7f2820bdc994edabea83->enter($__internal_129ec6600832ee65df634d052420aba5bed9221d043f7f2820bdc994edabea83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b30a336fdf12e9f7ab934c09765b809fce8528b1685ff591392eea8df59b83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b30a336fdf12e9f7ab934c09765b809fce8528b1685ff591392eea8df59b83e->enter($__internal_3b30a336fdf12e9f7ab934c09765b809fce8528b1685ff591392eea8df59b83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <script
            src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
            integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
            crossorigin=\"anonymous\"></script>
    <ul class=\"nav nav-tabs\" id=\"tabContent\">
        <li class=\"active\"><a href=\"/load\" >Product</a></li>
        <li><a id=\"linkDefine\" href=\"/define\">Desigin</a></li>
    </ul>
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" >

            <div class=\"box\">
                <form class=\"form-inline\" id=\"load-form\" role=\"form\" method=\"POST\" action=\"/load\">
                    <h1>Product Name: <span id=\"name1\"></span>  </h1>     <br/>
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\" style=\"text-align: center\">Load product------- ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class=\"box-body\" style=\"text-align: center\">
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <label>Product Name</label>
                                </div>
                                <div class=\"col-md-6\">
                                    <select id=\"ProductList\" name=\"productid\">
                                        <option >Select option</option>
                                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 32
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rs"], "productid", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rs"], "name", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <br/><br/>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <label> Detail</label>
                                </div>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" id=\"ProName\" disabled name=\"_detailsload\">
                                </div>
                            </div>
                        </div>
                        <br/><br/>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <label>Category</label>
                                </div>
                                <div class=\"col-md-6\">
                                    <select id=\"cateload\" name=\"_cateload\">
                                        <option selected>Select option</option>
                                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")));
        foreach ($context['_seq'] as $context["_key"] => $context["listCate"]) {
            // line 59
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["listCate"], "cateid", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["listCate"], "name", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listCate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <br/><br/>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <label>Status</label>
                                </div>
                                <div class=\"col-md-6\">
                                    <label>Instock
                                        <input class=\"ss\" type=\"radio\" id=\"Instock\" value=\"0\" name=\"_statusload\">
                                    </label>
                                    <label>OutStock
                                        <input class=\"ss\" type=\"radio\" id=\"Outstock\"  value=\"1\" name=\"_statusload\">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <!-- /.box-body -->
                    <div class=\"box-footer\" style=\"text-align: center\">
                        <div class=\"form-group\">
                            <a href=\"home\" class=\"btn btn-default btn-flat\" type=\"submit\">Home</a>
                            <button class=\"btn btn-info btn-flat\" type=\"submit\">Save As</button>
                            <button class=\"btn btn-success btn-flat\" id=\"update\" name=\"updateid\" type=\"submit\">Update</button>
                            <button id=\"delete\" name=\"productid\" class=\"btn btn-danger btn-flat\" type=\"submit\">Delete</button>
                        </div>
                    </div>

                </form>
                <!-- box-footer -->
            </div>
            <!-- /.box -->

        </div>

        <div class=\"tab-pane\" id=\"access-security\">
            content 0
        </div>
    </div>


    <script type=\"text/javascript\">
        \$(function changName() {
            \$('#ProductList').on('change', function () {
                var that = \$(this);
                //alert(that.val());
                var id = that.val();
                \$.ajax('/load',{
                    data : {'id': id },
                    type:'POST',
                    dataType: 'json',
                    success:function(ret){
                        var info = ret;
                        \$('#ProName').val(info['details']);
                        \$('#cateload').val(info['cateid']);
                        if(info['status']){
                            \$('#Outstock').prop(\"checked\", true)
                        } else {
                            \$('#Instock').prop(\"checked\", true)
                        }
                        \$('#delete').val(info['productid']);
                        \$('#update').val(info['updateid']);
                        var pro_name = \$(\"#ProductList option:selected\").text();
                        document.getElementById(\"name1\").innerHTML = pro_name;

                        var link = \$('#linkDefine');
                        link.attr('href', '/define/' + id + '/' + pro_name);

                    }
                })

            });

            \$('#delete').click(function(){
                //change action for form
                \$(\"#load-form\").attr(\"action\", \"/delete\");
                //form.submit
                document.getElementById(\"#load-form\").submit();
            })
            \$('#update').click(function(){
                //change action for form
                \$(\"#load-form\").attr(\"action\", \"/update\");
                //form.submit
                document.getElementById(\"#load-form\").submit();
            })


        });

    </script>


";
        
        $__internal_3b30a336fdf12e9f7ab934c09765b809fce8528b1685ff591392eea8df59b83e->leave($__internal_3b30a336fdf12e9f7ab934c09765b809fce8528b1685ff591392eea8df59b83e_prof);

        
        $__internal_129ec6600832ee65df634d052420aba5bed9221d043f7f2820bdc994edabea83->leave($__internal_129ec6600832ee65df634d052420aba5bed9221d043f7f2820bdc994edabea83_prof);

    }

    public function getTemplateName()
    {
        return "product/load.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 61,  126 => 59,  122 => 58,  96 => 34,  85 => 32,  81 => 31,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
        <li class=\"active\"><a href=\"/load\" >Product</a></li>
        <li><a id=\"linkDefine\" href=\"/define\">Desigin</a></li>
    </ul>
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" >

            <div class=\"box\">
                <form class=\"form-inline\" id=\"load-form\" role=\"form\" method=\"POST\" action=\"/load\">
                    <h1>Product Name: <span id=\"name1\"></span>  </h1>     <br/>
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\" style=\"text-align: center\">Load product------- {{ app.user.username }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class=\"box-body\" style=\"text-align: center\">
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <label>Product Name</label>
                                </div>
                                <div class=\"col-md-6\">
                                    <select id=\"ProductList\" name=\"productid\">
                                        <option >Select option</option>
                                        {% for rs in result %}
                                            <option value=\"{{ rs.productid }}\">{{ rs.name }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br/><br/>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <label> Detail</label>
                                </div>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" id=\"ProName\" disabled name=\"_detailsload\">
                                </div>
                            </div>
                        </div>
                        <br/><br/>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <label>Category</label>
                                </div>
                                <div class=\"col-md-6\">
                                    <select id=\"cateload\" name=\"_cateload\">
                                        <option selected>Select option</option>
                                        {% for listCate in cate %}
                                            <option value=\"{{ listCate.cateid }}\" >{{ listCate.name }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br/><br/>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <label>Status</label>
                                </div>
                                <div class=\"col-md-6\">
                                    <label>Instock
                                        <input class=\"ss\" type=\"radio\" id=\"Instock\" value=\"0\" name=\"_statusload\">
                                    </label>
                                    <label>OutStock
                                        <input class=\"ss\" type=\"radio\" id=\"Outstock\"  value=\"1\" name=\"_statusload\">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <!-- /.box-body -->
                    <div class=\"box-footer\" style=\"text-align: center\">
                        <div class=\"form-group\">
                            <a href=\"home\" class=\"btn btn-default btn-flat\" type=\"submit\">Home</a>
                            <button class=\"btn btn-info btn-flat\" type=\"submit\">Save As</button>
                            <button class=\"btn btn-success btn-flat\" id=\"update\" name=\"updateid\" type=\"submit\">Update</button>
                            <button id=\"delete\" name=\"productid\" class=\"btn btn-danger btn-flat\" type=\"submit\">Delete</button>
                        </div>
                    </div>

                </form>
                <!-- box-footer -->
            </div>
            <!-- /.box -->

        </div>

        <div class=\"tab-pane\" id=\"access-security\">
            content 0
        </div>
    </div>


    <script type=\"text/javascript\">
        \$(function changName() {
            \$('#ProductList').on('change', function () {
                var that = \$(this);
                //alert(that.val());
                var id = that.val();
                \$.ajax('/load',{
                    data : {'id': id },
                    type:'POST',
                    dataType: 'json',
                    success:function(ret){
                        var info = ret;
                        \$('#ProName').val(info['details']);
                        \$('#cateload').val(info['cateid']);
                        if(info['status']){
                            \$('#Outstock').prop(\"checked\", true)
                        } else {
                            \$('#Instock').prop(\"checked\", true)
                        }
                        \$('#delete').val(info['productid']);
                        \$('#update').val(info['updateid']);
                        var pro_name = \$(\"#ProductList option:selected\").text();
                        document.getElementById(\"name1\").innerHTML = pro_name;

                        var link = \$('#linkDefine');
                        link.attr('href', '/define/' + id + '/' + pro_name);

                    }
                })

            });

            \$('#delete').click(function(){
                //change action for form
                \$(\"#load-form\").attr(\"action\", \"/delete\");
                //form.submit
                document.getElementById(\"#load-form\").submit();
            })
            \$('#update').click(function(){
                //change action for form
                \$(\"#load-form\").attr(\"action\", \"/update\");
                //form.submit
                document.getElementById(\"#load-form\").submit();
            })


        });

    </script>


{% endblock %}

", "product/load.html.twig", "/home/haidt/shop/app/Resources/views/product/load.html.twig");
    }
}
