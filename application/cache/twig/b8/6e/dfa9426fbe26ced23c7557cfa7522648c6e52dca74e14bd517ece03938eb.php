<?php

/* menu.html.twig */
class __TwigTemplate_b86edfa9426fbe26ced23c7557cfa7522648c6e52dca74e14bd517ece03938eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('menu', $context, $blocks);
    }

    public function block_menu($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"navigation navbar clearfix\">
    <div class=\"pull-left\">
        <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>

        <div class=\"nav-collapse collapse\">
            <ul id=\"menu-main\" class=\"nav\">
                
                ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
            // line 14
            echo "                <li class=\"menu-item active-menu-item ";
            if ($this->getAttribute((isset($context["menuitem"]) ? $context["menuitem"] : null), "child")) {
                echo "menu-item-parent ";
            }
            echo "\">
                    <a href=\"default.htm\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menuitem"]) ? $context["menuitem"] : null), "caption"), "html", null, true);
            echo "</a>
                    <ul class=\"sub-menu\">
                        ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["menuitem"]) ? $context["menuitem"] : null), "child"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 18
                echo "                        <li class=\"menu-item\"><a href=\"frontpage-slider.html\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "caption"), "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                    </ul>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                
                <!--
                <li class=\"menu-item menu-item-parent\">
                    <a href=\"#\">Listings</a>

                    <ul class=\"sub-menu\">
                        <li class=\"menu-item\"><a href=\"properties/default.htm\">Properties listing</a></li>
                        <li class=\"menu-item\"><a href=\"properties/property-detail.html\">Property detail</a></li>

                        <li class=\"menu-item\"><a href=\"agencies/default.htm\">Agencies listing</a></li>
                        <li class=\"menu-item\"><a href=\"agencies/agency-detail.html\">Agencies detail</a></li>

                        <li class=\"menu-item\"><a href=\"agents/default.htm\">Agents listing</a></li>
                        <li class=\"menu-item\"><a href=\"agents/agent-detail.html\">Agent detail</a></li>

                        <li class=\"menu-item\"><a href=\"register.html\">Register</a></li>
                        <li class=\"menu-item\"><a href=\"login.html\">Login</a></li>
                    </ul>
                </li>

                <li class=\"menu-item menu-item-parent\">
                    <a href=\"#\">Pages</a>
                    <ul class=\"sub-menu\">
                        <li class=\"menu-item\"><a href=\"404.html\">404 page</a></li>
                        <li class=\"menu-item\"><a href=\"faq.html\">FAQ page</a></li>
                        <li class=\"menu-item\"><a href=\"pricing.html\">Pricing</a></li>
                    </ul>
                </li>

                <li class=\"menu-item menu-item-parent\">
                    <a href=\"#\">Submissions</a>
                    <ul class=\"sub-menu\">
                        <li class=\"menu-item\"><a href=\"submissions/default.htm\">List submissions</a></li>
                        <li class=\"menu-item\"><a href=\"submissions/add.html\">Add submission</a></li>
                        <li class=\"menu-item\"><a href=\"submissions/edit.html\">Edit submission</a></li>
                    </ul>
                </li>

                <li class=\"menu-item menu-item-parent\">
                    <a href=\"#\">Templates</a>
                    <ul class=\"sub-menu\">
                        <li class=\"menu-item\"><a href=\"templates/default-left.html\">Left sidebar</a></li>
                        <li class=\"menu-item\"><a href=\"templates/default-right.html\">Right sidebar</a></li>
                        <li class=\"menu-item\"><a href=\"templates/default-full.html\">Full width</a></li>
                    </ul>
                </li>

                <li class=\"menu-item\">
                    <a href=\"contact.html\">Contact</a>
                </li>
                -->
            </ul>
        </div>
    </div>

    <div class=\"pull-right\">
        <div class=\"list-property\">
            <a href=\"submissions/default.htm\">Patalpinti skelbimą<div class=\"ribbon\"><span class=\"icon icon-normal-circle-plus\"></span></div>
            </a>
        </div>
        <!-- /.list-property -->
    </div>
    <!-- /.pull-right -->

</div>

";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  68 => 20,  59 => 18,  55 => 17,  50 => 15,  43 => 14,  39 => 13,  26 => 2,  20 => 1,  1475 => 1079,  1472 => 1078,  1465 => 385,  1462 => 384,  1455 => 144,  1452 => 143,  1394 => 1081,  1392 => 1078,  960 => 649,  951 => 642,  944 => 640,  929 => 631,  920 => 625,  905 => 613,  897 => 608,  891 => 607,  884 => 602,  878 => 598,  876 => 597,  870 => 594,  864 => 590,  860 => 588,  856 => 586,  854 => 585,  841 => 579,  837 => 578,  831 => 577,  825 => 573,  821 => 572,  814 => 570,  806 => 565,  798 => 559,  778 => 546,  769 => 540,  755 => 529,  747 => 524,  741 => 523,  734 => 518,  728 => 514,  726 => 513,  720 => 510,  714 => 506,  710 => 504,  706 => 502,  704 => 501,  691 => 495,  687 => 494,  681 => 493,  675 => 489,  671 => 488,  568 => 387,  566 => 384,  419 => 239,  408 => 237,  404 => 236,  388 => 222,  377 => 220,  373 => 219,  361 => 210,  302 => 188,  261 => 186,  246 => 173,  233 => 170,  227 => 169,  221 => 168,  209 => 167,  203 => 166,  198 => 165,  194 => 164,  174 => 146,  172 => 143,  131 => 105,  121 => 98,  22 => 1,);
    }
}
