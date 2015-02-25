<?php

/* propertylist.html.twig */
class __TwigTemplate_1a14f3856027c6e8f2aa96403d257f3c234a9388a637e4ebd0cc9547613333bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"main\" class=\"span9 property-listing\">
<h1 class=\"page-header\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["listname"]) ? $context["listname"] : null), "html", null, true);
        echo " </h1>



<div class=\"clearfix\">
<script type=\"text/javascript\">
    jQuery(document).ready(function (\$) {
\t/*
        \$('select[name=filter_sort_by]').change(function () {
            \$('form.form-sort').submit();
        });
*/
        //\$('select[name=filter_order]').change(function () {
\t\t\$('.sort').change(function () {
\t\t\tvar direction = \$('select[name=filter_order]').val();
\t\t\tvar order_by = \$('select[name=filter_sort_by]').val();
\t\t\t\$('.sort_by').val(order_by);
\t\t\t\$('.sort_dir').val(direction);
\t\t\t
\t\t\t\$('form.search_form').submit();
\t\t\t//\$('.property').tsort(order_by, {order: direction});\t
        });
    });


</script>

<div class=\"properties-rows\">
<div class=\"filter-wrapper\">
        <div class=\"filter pull-right\">
            ";
        // line 35
        if ((isset($context["showorderform"]) ? $context["showorderform"] : null)) {
            // line 36
            echo "            <form action=\"javascript:void(0)\" method=\"get\" class=\"form-sort form-horizontal pull-right\">

                <div class=\"pager pull-right\">
                    <ul class=\"pager\">
                        <li><a href=\"";
            // line 40
            echo (isset($context["prev_url"]) ? $context["prev_url"] : null);
            echo "\"><i class=\"icon icon-normal-left-arrow-small\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 41
            echo (isset($context["next_url"]) ? $context["next_url"] : null);
            echo "\"><i class=\"icon icon-normal-right-arrow-small\"></i></a></li>
                        
                    </ul>
                </div>
                <!-- /.pager -->

                <div class=\"control-group pull-right\">
                    <div class=\"controls\">
                        <select class=\"sort\" name=\"filter_sort_by\" id=\"inputSortBy\">
\t\t\t\t\t\t\t<option ";
            // line 50
            if ((array_key_exists("sort_by", $context) && ((isset($context["sort_by"]) ? $context["sort_by"] : null) == "modify_date"))) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"modify_date\">Data</option>
                            <option ";
            // line 51
            if ((array_key_exists("sort_by", $context) && ((isset($context["sort_by"]) ? $context["sort_by"] : null) == "price"))) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"price\">Kaina</option>
                        </select>
                    </div>
                </div>

                <div class=\"control-group pull-right\">
                    <div class=\"controls\">
                        <select class=\"sort\" id=\"inputOrder\" name=\"filter_order\" class=\"chosen\">
\t\t\t\t\t\t\t<option ";
            // line 59
            if ((array_key_exists("sort_dir", $context) && ((isset($context["sort_dir"]) ? $context["sort_dir"] : null) == "asc"))) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"asc\">Didėjančiai</option>
                            <option ";
            // line 60
            if ((array_key_exists("sort_dir", $context) && ((isset($context["sort_dir"]) ? $context["sort_dir"] : null) == "desc"))) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"desc\">Mažėjančiai</option>                            
                        </select>
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->
            </form>
            <!-- /.filter -->
            ";
        }
        // line 69
        echo "        </div>
    </div>
    <!-- /.properties-rows --> 
<div class=\"row\">

";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 75
            echo "<div class=\"property span9\">
    <div class=\"row\">
        <div class=\"span3\">
            <div class=\"image\">
                <div class=\"content\">
                    <a href=\"property-detail.html\">
                        <img width=\"570\" height=\"425\"
                             src=\"";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/property/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "main_img"), "html", null, true);
            echo "\"
                             class=\"thumbnail-image\" alt=\"20\">
                    </a>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.image -->
        </div>

        <div class=\"body span6\">
            <div class=\"title-price row\">
                <div class=\"title span4\">
                    <h2><a href=\"";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["property_url"]) ? $context["property_url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "name"), "html", null, true);
            echo "</a></h2>
                </div>
                <!-- /.title -->

                <div class=\"price\">\t\t\t\t\t
                   <div class=\"intprice\" style=\"display:inline\"> ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "price"), "html", null, true);
            echo "</div> <span class=\"suffix\">€</span></div>
                <!-- /.price -->
\t\t\t\t<div class=\"date\"> ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "modify_date"), "html", null, true);
            echo " </div>
            </div>
            <!-- /.title -->

            <div class=\"location\">";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "location_name"), "html", null, true);
            echo "</div>
            <!-- /.location -->

            <div class=\"body\">
                <p>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "short_description"), "html", null, true);
            echo "</p>
            </div>
            <!-- /.body -->

            <div class=\"property-info clearfix\">
                <div class=\"area\">
                    <i class=\"icon icon-normal-cursor-scale-up\"></i>
                    ";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "area"), "html", null, true);
            echo "m<sup>2</sup>
                </div>
                <!-- /.area -->

                <div class=\"bedrooms\">
                    <i class=\"icon icon-normal-bed\"></i>
                    ";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bedrooms"), "html", null, true);
            echo "
                </div>
                <!-- /.bedrooms -->

               ";
            // line 130
            echo "                <!-- /.bathrooms -->

                <div class=\"more-info\">
                    <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["property_url"]) ? $context["property_url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "link"), "html", null, true);
            echo "\">Plačiau<i
                          class=\"icon icon-normal-right-arrow-circle\"></i></a>
                </div>
            </div>
            <!-- /.info -->
        </div>
        <!-- /.body -->
    </div>
    <!-- /.row -->
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "</div>
<!-- /.row -->
</div>
<!-- /.properties-grid -->
<div class=\"pagination pagination-centered\">
    <ul class=\"unstyled\">
\t\t";
        // line 150
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
    </ul>
</div>


</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "propertylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 150,  248 => 144,  229 => 133,  224 => 130,  217 => 122,  208 => 116,  198 => 109,  191 => 105,  184 => 101,  179 => 99,  167 => 94,  150 => 82,  141 => 75,  137 => 74,  130 => 69,  116 => 60,  110 => 59,  97 => 51,  91 => 50,  79 => 41,  75 => 40,  69 => 36,  67 => 35,  34 => 5,  31 => 4,  28 => 3,);
    }
}
