<?php

/* featuredproperties.html.twig */
class __TwigTemplate_261b491e83c371000c6fff1bd11a49fbbe386373da7252e7a474f0219aee1469 extends Twig_Template
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
        // line 1
        echo "<div id=\"featuredproperties_widget-2\" class=\"widget properties\">

        <h2>Populiariausi</h2>

        <div class=\"content\">
            ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["featured_property"]) ? $context["featured_property"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["featured"]) {
            // line 7
            echo "            <div class=\"property clearfix\">
                <div class=\"image\">
                    <a href=\"properties/property-detail.html\">
                        <img width=\"570\" height=\"425\" src=\"assets/img/property/1.jpg\"
                             class=\"thumbnail-image \" alt=\"1\"/>
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"wrapper\">
                    <div class=\"title\">
                        <h3><a href=\"properties/property-detail.html\">
                                20th St NE
                            </a></h3>
                    </div>
                    <!-- /.title -->

                    <div class=\"location\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "locationname"), "html", null, true);
            echo "</div>
                    <!-- /.location -->

                    <div class=\"price\">
                        ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "price"), "html", null, true);
            echo "
                    </div>
                    <!-- /.price -->
                </div>
                <!-- /.wrapper -->
            </div>
            <!-- /.property -->

            <div class=\"property-info clearfix\">
                <div class=\"area\">
                    <i class=\"icon icon-normal-cursor-scale-up\"></i>
                    450m<sup>2</sup>
                </div>
                <!-- /.area -->

                <div class=\"bedrooms\">
                    <i class=\"icon icon-normal-bed\"></i>
                    1
                </div>
                <!-- /.bedrooms -->

                <div class=\"bathrooms\">
                    <i class=\"icon icon-normal-shower\"></i>
                    2
                </div>
                <!-- /.bathrooms -->
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['featured'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            <!-- /.info -->
            
        </div>
        <!-- /.content -->

    </div>";
    }

    public function getTemplateName()
    {
        return "featuredproperties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 56,  56 => 28,  49 => 24,  30 => 7,  19 => 1,  111 => 47,  99 => 41,  91 => 36,  78 => 26,  72 => 23,  64 => 18,  58 => 17,  45 => 9,  35 => 6,  31 => 5,  76 => 23,  68 => 20,  59 => 18,  55 => 17,  50 => 15,  43 => 14,  39 => 8,  26 => 6,  20 => 1,  1475 => 1079,  1472 => 1078,  1465 => 385,  1462 => 384,  1455 => 144,  1452 => 143,  1394 => 1081,  1392 => 1078,  960 => 649,  951 => 642,  944 => 640,  929 => 631,  920 => 625,  905 => 613,  897 => 608,  891 => 607,  884 => 602,  878 => 598,  876 => 597,  870 => 594,  864 => 590,  860 => 588,  856 => 586,  854 => 585,  841 => 579,  837 => 578,  831 => 577,  825 => 573,  821 => 572,  814 => 570,  806 => 565,  798 => 559,  778 => 546,  769 => 540,  755 => 529,  747 => 524,  741 => 523,  734 => 518,  728 => 514,  726 => 513,  720 => 510,  714 => 506,  710 => 504,  706 => 502,  704 => 501,  691 => 495,  687 => 494,  681 => 493,  675 => 489,  671 => 488,  568 => 387,  566 => 384,  419 => 239,  408 => 237,  404 => 236,  388 => 222,  377 => 220,  373 => 219,  361 => 210,  302 => 188,  261 => 186,  246 => 173,  233 => 170,  227 => 169,  221 => 168,  209 => 167,  203 => 166,  198 => 165,  194 => 164,  174 => 146,  172 => 143,  131 => 105,  121 => 98,  22 => 1,);
    }
}
