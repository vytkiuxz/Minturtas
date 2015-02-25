<?php

/* administrator/propertylist.html.twig */
class __TwigTemplate_961aa736e90d6b99065656631c7ae1b9dc60409686a2fe30fae32651a4634eca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("administrator/base.html.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "administrator/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"page-header\"><h1>Skelbimai</h1></div>
            
            
            
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Skelbimų sąrašas</div>
        <div class=\"panel-body\">
            <form name=\"properties_action\" method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "administrator/properties/doaction\">
                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"table table-striped table-bordered\" id=\"basic-datatable\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Pavadinimas</th>
                            <th>Kategorija</th>
                            <th>Miestas</th>
                            <th>Kaina</th>
                            <th>Atnaujinimo Data</th>
                        </tr>
                    </thead>
                    <tbody>

                        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 27
            echo "                        <tr class=\"gradeA\">
                            <td><input type=\"checkbox\" name=\"properties[]\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "id"), "html", null, true);
            echo "\"</td>
                            <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["property_url"]) ? $context["property_url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "id"), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["property_url"]) ? $context["property_url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "name"), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "type"), "html", null, true);
            echo "</td>
                            <td class=\"center\"> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "location"), "html", null, true);
            echo "</td>
                            <td class=\"center\"> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "price"), "html", null, true);
            echo " €</td>
                            <td class=\"center\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "modify_date"), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                      
                    </tbody>
                </table>
                        <!--
                <div class=\"row\">
                    <div class=\"col-lg-2\" >
                                         
                            <select class=\"form-control  form-control-flat input-sm\">
                              <option>Veiksmai</option>
                              <option>Trinti</option>
                              <option>Aktyvuoti</option>
                              <option>Atnaujinti</option>
                            </select>
                            <button  class=\"btn btn-default btn-sm btn-flat\" type=\"submit\">Vykdyti</button>                        
                        
                    </div>
                </div>
                -->
            </form>              
        </div>
    </div>


    
";
    }

    public function getTemplateName()
    {
        return "administrator/propertylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 37,  97 => 34,  93 => 33,  89 => 32,  85 => 31,  77 => 30,  69 => 29,  65 => 28,  62 => 27,  58 => 26,  40 => 11,  31 => 4,  28 => 3,);
    }
}
