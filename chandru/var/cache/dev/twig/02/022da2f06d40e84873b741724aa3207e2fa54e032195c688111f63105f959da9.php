<?php

/* :imagebrowser:index.html.twig */
class __TwigTemplate_d937f7818305473e2605116bb74ce702e0f963ebe264c87531968e6eb9470a9a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":imagebrowser:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":imagebrowser:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1 user-scalable=no\">

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/adminstyle.css"), "html", null, true);
        echo "\"> 
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<!-- font link starts here -->
<link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
<!-- font link ends here -->

    <script>
        // Helper function to get parameters from the query string.
        function getUrlParam( paramName ) {
            var reParam = new RegExp( '(?:[\\?&]|&)' + paramName + '=([^&]+)', 'i' );
            var match = window.location.search.match( reParam );

            return ( match && match.length > 1 ) ? match[1] : null;
        }
        // Simulate user action of selecting a file to be returned to CKEditor.
        function returnFileUrl(myurl) {

            var funcNum = getUrlParam( 'CKEditorFuncNum' );
            var fileUrl = myurl;
            window.opener.CKEDITOR.tools.callFunction( funcNum, fileUrl );
            window.close();
        }
    </script>
</head>
<body> 


<div class=\"paddtopbottom-20\">
<div class=\"container-fluid\">
  <div class=\"bg-white table-bg\">
 
 ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), 'form_start', array("method" => "post", "attr" => array("novalidate" => "novalidate")));
        echo " 
 



  <div class=\"form-group\">
 
  ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "imageFile", array()), 'widget', array("attr" => array("class" => "form-control filestyle")));
        echo "
    <span class=\"error required\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "imageFile", array()), 'errors');
        echo "</span>
 
  </div>

  <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i> Upload</button>
 <div class=\"paddtopbottom-20\">
    ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
    <div class=\"userimages\">
";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userimage"]) || array_key_exists("userimage", $context) ? $context["userimage"] : (function () { throw new Twig_Error_Runtime('Variable "userimage" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " 
<button onclick=\"returnFileUrl('";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl(("/images/assets/" . twig_get_attribute($this->env, $this->source, $context["item"], "imageName", array()))), "html", null, true);
            echo "')\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl(("/images/assets/" . twig_get_attribute($this->env, $this->source, $context["item"], "imageName", array()))), "html", null, true);
            echo "\" class=\"resize\" alt=\"Images\"></button> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "</div>
</div>
    </div>
    </div>
    </div>






<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>

</body>
</html> ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":imagebrowser:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 60,  108 => 58,  102 => 57,  97 => 55,  88 => 49,  84 => 48,  74 => 41,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1 user-scalable=no\">

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/adminstyle.css') }}\"> 
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<!-- font link starts here -->
<link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
<!-- font link ends here -->

    <script>
        // Helper function to get parameters from the query string.
        function getUrlParam( paramName ) {
            var reParam = new RegExp( '(?:[\\?&]|&)' + paramName + '=([^&]+)', 'i' );
            var match = window.location.search.match( reParam );

            return ( match && match.length > 1 ) ? match[1] : null;
        }
        // Simulate user action of selecting a file to be returned to CKEditor.
        function returnFileUrl(myurl) {

            var funcNum = getUrlParam( 'CKEditorFuncNum' );
            var fileUrl = myurl;
            window.opener.CKEDITOR.tools.callFunction( funcNum, fileUrl );
            window.close();
        }
    </script>
</head>
<body> 


<div class=\"paddtopbottom-20\">
<div class=\"container-fluid\">
  <div class=\"bg-white table-bg\">
 
 {{ form_start(form, {'method': 'post', 'attr': {'novalidate': 'novalidate' }}) }} 
 



  <div class=\"form-group\">
 
  {{ form_widget(form.imageFile, {'attr': {'class': 'form-control filestyle',} }) }}
    <span class=\"error required\">{{ form_errors(form.imageFile) }}</span>
 
  </div>

  <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i> Upload</button>
 <div class=\"paddtopbottom-20\">
    {{ form_end(form) }}
    <div class=\"userimages\">
{% for item in userimage %} 
<button onclick=\"returnFileUrl('{{ absolute_url('/images/assets/'~item.imageName) }}')\"><img src=\"{{ absolute_url('/images/assets/'~item.imageName) }}\" class=\"resize\" alt=\"Images\"></button> 
{% endfor %}
</div>
</div>
    </div>
    </div>
    </div>






<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>

</body>
</html> ", ":imagebrowser:index.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/imagebrowser/index.html.twig");
    }
}
