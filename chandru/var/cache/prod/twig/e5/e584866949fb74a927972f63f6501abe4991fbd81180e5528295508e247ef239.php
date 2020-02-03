<?php

/* :imagebrowser:index.html.twig */
class __TwigTemplate_fee71d0e97e91c0522abec97c1a1d3e4a789c7d937ac1868334ba5dc9e263cbe extends Twig_Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("novalidate" => "novalidate")));
        echo " 
 



  <div class=\"form-group\">
 
  ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", array()), 'widget', array("attr" => array("class" => "form-control filestyle")));
        echo "
    <span class=\"error required\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", array()), 'errors');
        echo "</span>
 
  </div>

  <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i> Upload</button>
 <div class=\"paddtopbottom-20\">
    ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    <div class=\"userimages\">
";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["userimage"] ?? null));
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
        return array (  112 => 60,  102 => 58,  96 => 57,  91 => 55,  82 => 49,  78 => 48,  68 => 41,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":imagebrowser:index.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/imagebrowser/index.html.twig");
    }
}
