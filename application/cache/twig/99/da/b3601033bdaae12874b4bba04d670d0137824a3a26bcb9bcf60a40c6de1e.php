<?php

/* mostrecentproperties.html.twig */
class __TwigTemplate_99dab3601033bdaae12874b4bba04d670d0137824a3a26bcb9bcf60a40c6de1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'most_recent_property' => array($this, 'block_most_recent_property'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('most_recent_property', $context, $blocks);
    }

    public function block_most_recent_property($context, array $blocks = array())
    {
        // line 2
        echo "<h2>Naujausi pasiūlymai</h2>

    <div class=\"content\">
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mostrecentprop"]) ? $context["mostrecentprop"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mostrecentproperty"]) {
            // line 6
            echo "        <div class=\"property clearfix\">
            <div class=\"image\" style=\"height: 75px; background: none;\">
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["property_url"]) ? $context["property_url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mostrecentproperty"]) ? $context["mostrecentproperty"] : null), "link"), "html", null, true);
            echo "\">
                    <img width=\"570\" height=\"425\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/property/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mostrecentproperty"]) ? $context["mostrecentproperty"] : null), "main_img"), "html", null, true);
            echo "\"
                         class=\"thumbnail-image \" alt=\"19\"/>
                </a>
            </div>
            <!-- /.image -->

            <div class=\"wrapper\">
                <div class=\"title\">
                    <h3><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["property_url"]) ? $context["property_url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mostrecentproperty"]) ? $context["mostrecentproperty"] : null), "link"), "html", null, true);
            echo "\">
                            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mostrecentproperty"]) ? $context["mostrecentproperty"] : null), "name"), "html", null, true);
            echo " 
                        </a></h3>
                </div>
                <!-- /.title -->

                <div class=\"location\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mostrecentproperty"]) ? $context["mostrecentproperty"] : null), "locationname"), "html", null, true);
            echo "</div>
                <!-- /.location -->

                <div class=\"price\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mostrecentproperty"]) ? $context["mostrecentproperty"] : null), "price"), "html", null, true);
            echo " €</div>
                <!-- /.price -->
            </div>
            <!-- /.wrapper -->
        </div>
        <!-- /.property -->        
        
        <div class=\"property-info clearfix\">
            <div class=\"area\">
                <i class=\"icon icon-normal-cursor-scale-up\"></i>
                ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mostrecentproperty"]) ? $context["mostrecentproperty"] : null), "area"), "html", null, true);
            echo "m<sup>2</sup>
            </div>
            <!-- /.area -->
            <div class=\"bedrooms\">
                <i class=\"icon icon-normal-bed\"></i>
                ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mostrecentproperty"]) ? $context["mostrecentproperty"] : null), "bedrooms"), "html", null, true);
            echo "
            </div>
            <!-- /.bedrooms -->

        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mostrecentproperty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "       
    </div>
";
    }

    public function getTemplateName()
    {
        return "mostrecentproperties.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 47,  99 => 41,  91 => 36,  78 => 26,  72 => 23,  64 => 18,  58 => 17,  45 => 9,  35 => 6,  31 => 5,  76 => 23,  68 => 20,  59 => 18,  55 => 17,  50 => 15,  43 => 14,  39 => 8,  26 => 2,  20 => 1,  1475 => 1079,  1472 => 1078,  1465 => 385,  1462 => 384,  1455 => 144,  1452 => 143,  1394 => 1081,  1392 => 1078,  960 => 649,  951 => 642,  944 => 640,  929 => 631,  920 => 625,  905 => 613,  897 => 608,  891 => 607,  884 => 602,  878 => 598,  876 => 597,  870 => 594,  864 => 590,  860 => 588,  856 => 586,  854 => 585,  841 => 579,  837 => 578,  831 => 577,  825 => 573,  821 => 572,  814 => 570,  806 => 565,  798 => 559,  778 => 546,  769 => 540,  755 => 529,  747 => 524,  741 => 523,  734 => 518,  728 => 514,  726 => 513,  720 => 510,  714 => 506,  710 => 504,  706 => 502,  704 => 501,  691 => 495,  687 => 494,  681 => 493,  675 => 489,  671 => 488,  568 => 387,  566 => 384,  419 => 239,  408 => 237,  404 => 236,  388 => 222,  377 => 220,  373 => 219,  361 => 210,  302 => 188,  261 => 186,  246 => 173,  233 => 170,  227 => 169,  221 => 168,  209 => 167,  203 => 166,  198 => 165,  194 => 164,  174 => 146,  172 => 143,  131 => 105,  121 => 98,  22 => 1,);
    }
}
