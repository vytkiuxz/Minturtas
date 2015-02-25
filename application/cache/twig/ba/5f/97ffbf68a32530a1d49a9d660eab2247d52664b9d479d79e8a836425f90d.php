<?php

/* administrator/propertyedit.html.twig */
class __TwigTemplate_ba5f97ffbf68a32530a1d49a9d660eab2247d52664b9d479d79e8a836425f90d extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>Skelbimo redagavimas <small>validation</small></h1></div>            
            
<div class=\"row\">
    <form  method=\"post\" class=\"validator-form form-horizontal\" action=\"#\">
        <div class=\"col-md-6\">

                <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Duomenys</div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Pavadinimas</label>
                        <div class=\"col-lg-9\">
                            <input type=\"text\" class=\"form-control\" name=\"propname\" />
                        </div>
                    </div>

                    <hr class=\"dotted\">  

                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Tipas</label>
                        <div class=\"col-lg-9\">
                            <select class=\"form-control\" name=\"type\">
                                    <option value=\"\">-- Pasirinkite tipą --</option>
                                    <option value=\"fr\">Butas</option>
                                    <option value=\"de\">Namas</option>
                                    <option value=\"it\">Sklypas</option>
                                </select>
                        </div>
                    </div>

                    <hr class=\"dotted\"> 

                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Parduodamas</label>
                        <div class=\"col-lg-4\">
                            <div class=\"switch-button showcase-switch-button\">
                                <input id=\"sale\" checked name=\"switch-radio\" type=\"radio\">
                                <label for=\"sale\"></label>
                            </div>
                            <div class=\"switch-button showcase-switch-button\">
                                <input id=\"rent\" name=\"switch-radio\" type=\"radio\">
                                <label for=\"rent\"></label>
                            </div>
                        </div>
                        <label class=\"control-label\" style=\"float: left;\">Nuomojamas</label>
                    </div>

                    <hr class=\"dotted\"> 

                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Kaina</label>
                        <div class=\"col-lg-5\">

                            <input type=\"text\" name=\"price\" class=\"form-control inputmask\" data-inputmask=\"'alias': 'numeric', 'groupSeparator': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': true, 'suffix': ' €', 'placeholder': '0'\">
                        </div>
                    </div>

                    <hr class=\"dotted\"> 

                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Plotas</label>
                        <div class=\"col-lg-5\">                        
                            <input type=\"text\" name=\"area\" class=\"form-control inputmask\" data-inputmask=\"'alias': 'numeric'\">
                        </div>
                    </div>

                    <hr class=\"dotted\"> 

                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Kambariai</label>
                        <div class=\"col-lg-5\">                        
                            <input type=\"text\" name=\"rooms\" class=\"form-control inputmask\" data-inputmask=\"'alias': 'numeric'\">
                        </div>
                    </div>

                    <hr class=\"dotted\"> 

                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Aukštas</label>
                        <div class=\"col-lg-5\">                        
                            <input type=\"text\" name=\"floor\" class=\"form-control inputmask\" data-inputmask=\"'alias': 'numeric'\">
                        </div>
                    </div>

                    <hr class=\"dotted\"> 

                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Rekomenduoti</label>
                        <div class=\"col-lg-5\">      
                            <label class=\"cr-styled\">
                                <input type=\"checkbox\" name=\"featured\">
                                <i class=\"fa\"></i> 
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Vietovė</div>
                <div class=\"panel-body\">

                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Miestas</label>
                        <div class=\"col-lg-9\">
                            <select class=\"form-control\" id=\"city\" name=\"city\">
                                <option value=\"\">-- Pasirinkite miestą --</option>
                                <option value=\"1\">Šiauliai</option>
                                <option value=\"2\">Joniškis</option>
                                <option value=\"3\">Kuršėnai</option>
                            </select>
                        </div>
                    </div>

                    <hr class=\"dotted\">

                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Gatvė</label>
                        <div class=\"col-lg-9\">
                            <select class=\"form-control\" id=\"street\" name=\"street\">
                                <option value=\"\">-- Pasirinkite gatvę --</option>
                                <option value=\"gegužių g.\">gegužių g.</option>
                                <option value=\"radviliškio g.\">radviliškio g.</option>
                                <option value=\"vilniaus g.\">vilniaus g.</option>
                            </select>
                        </div>
                    </div>

                    <hr class=\"dotted\">
                    
                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Namas</label>
                        <div class=\"col-lg-5\">                        
                            <input type=\"text\" name=\"house\" id=\"house\" class=\"form-control inputmask\" data-inputmask=\"'alias': 'numeric'\">
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-3 col-sm-9\">
                            <button type=\"button\" class=\"btn btn-primary\" id=\"test\" name=\"find\" value=\"Find\">Rasti</button>
                        </div>
                    </div>
                    
                    <input type=\"hidden\" name=\"lng\" id=\"lng\">
                    <input type=\"hidden\" name=\"lat\" id=\"lat\">
                    
                    <hr class=\"dotted\">
                    <div class=\"form-group\">                        
                        <div id=\"property-map\"
                            style=\"position: relative; height: 400px; background-color: rgb(229, 227, 223); overflow: hidden; -webkit-transform: translateZ(0);\">
                        </div>                        
                    </div>
                    <hr class=\"dotted\">
                </div>
            </div>
        </div>
        
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Aprašymas</div>
                <div class=\"panel-body\">          
                    <textarea cols=\"100\" id=\"ckeditor\" name=\"editor1\" rows=\"10\"></textarea>            
                </div>
            </div>
        </div>         
    </form>
</div>  


    
        

        <script type=\"text/javascript\">
            jQuery(document).ready(function (\$) {
                  var geocoder;
                  var map;
                  function initialize() {
                    geocoder = new google.maps.Geocoder();
                    var latlng = new google.maps.LatLng(-34.397, 150.644);
                    var mapOptions = {
                      zoom: 8,
                      center: latlng
                    }
                    map = new google.maps.Map(document.getElementById(\"property-map\"), mapOptions);
                  }
                var marker;  
                  
                //google.maps.event.addListener(marker, 'dragend', function() { alert('draged'); } ); 
                google.maps.event.addDomListener(window, 'load', initialize);
                
                 
                
                function codeAddress() {
                    //var address = document.getElementById(\"address\").value;
                    var house = \$('#house').val();
                    var street = \$('#street').val();
                    var city = \$('#city option:selected').text();
                    var address = house + ' ' + street + ', ' + city;
                    geocoder.geocode( { 'address': address}, function(results, status) {
                      if (status == google.maps.GeocoderStatus.OK) {
                        map.setCenter(results[0].geometry.location);
                        map.setZoom(17);
                        marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location,
                            draggable:true
                        });
                        \$('#lat').val(marker.getPosition().lat());
                        \$('#lng').val(marker.getPosition().lng());
                        google.maps.event.addListener(marker, 'dragend', function (event) {
                            \$('#lat').val(marker.getPosition().lat());
                            \$('#lng').val(marker.getPosition().lng());
                        }); 
                      } else {
                        alert(\"Paslauga neprieinama: \" + status);
                      }
                    });
                  }
                 

                function thisTouchEnd() {
                    dragFlag = false;
                }

                \$('#test').click(function() {
                    codeAddress();
                });

                function thisTouchMove(e) {
                    if (!dragFlag) return;
                    end = e.touches[0].pageY;
                    window.scrollBy(0, ( start - end ));
                }

                document.getElementById(\"property-map\").addEventListener(\"touchstart\", thisTouchStart, true);
                document.getElementById(\"property-map\").addEventListener(\"touchend\", thisTouchEnd, true);
                document.getElementById(\"property-map\").addEventListener(\"touchmove\", thisTouchMove, true);\t\t\t\t
            });

        </script>
 
";
    }

    public function getTemplateName()
    {
        return "administrator/propertyedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
