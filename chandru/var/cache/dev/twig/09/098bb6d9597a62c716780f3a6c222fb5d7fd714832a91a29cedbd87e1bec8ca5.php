<?php

/* base.html.twig */
class __TwigTemplate_1048f9d38463cf841876d1b0be47ac432889afe234bb325f0945f174a919c08d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<head>
    <title>Admin</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, intial-scale-1\">
    <meta name=\"description\" content=\"Admin\">
    <meta name=\"kewords\" content=\"keywords1, keywords2 | Admin\">
    <!-- css starts here -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <!-- css ends here -->
    <!-- font link starts here -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans|Poppins\" rel=\"stylesheet\">
    <!-- font link ends here -->
    </head>
<body>
    <section class=\"login-register\">
        <div class=\"container-fluid\">
            <div class=\"row\">
            <div class=\"col-sm-4\">
            </div>
            <div class=\"col-sm-4 bg-white paddingtop-40 login-form\">
                ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "            </div>

            <div class=\"col-sm-4\">
            </div>

        </div>
        </div>
    </section>


<!-- script starts here -->
<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
  

<!-- sticky starts here-->
<script src=\"js/jquery.sticky.js\"></script>
<script>
  \$(document).ready(function(){
    \$(\"#myNavbar\").sticky({topSpacing:0});
  });
</script>
<!-- sticky ends here --> 
<script>
\$(document).ready(function(){
    \$('[data-toggle=\"tooltip\"]').tooltip();   
});
</script>
<!-- script ends here -->
    </body>
    </html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "                
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  105 => 24,  73 => 38,  60 => 27,  58 => 24,  42 => 11,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<head>
    <title>Admin</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, intial-scale-1\">
    <meta name=\"description\" content=\"Admin\">
    <meta name=\"kewords\" content=\"keywords1, keywords2 | Admin\">
    <!-- css starts here -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">
    <!-- css ends here -->
    <!-- font link starts here -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans|Poppins\" rel=\"stylesheet\">
    <!-- font link ends here -->
    </head>
<body>
    <section class=\"login-register\">
        <div class=\"container-fluid\">
            <div class=\"row\">
            <div class=\"col-sm-4\">
            </div>
            <div class=\"col-sm-4 bg-white paddingtop-40 login-form\">
                {% block content %}
                
                {% endblock %}
            </div>

            <div class=\"col-sm-4\">
            </div>

        </div>
        </div>
    </section>


<!-- script starts here -->
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.min.js') }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
  

<!-- sticky starts here-->
<script src=\"js/jquery.sticky.js\"></script>
<script>
  \$(document).ready(function(){
    \$(\"#myNavbar\").sticky({topSpacing:0});
  });
</script>
<!-- sticky ends here --> 
<script>
\$(document).ready(function(){
    \$('[data-toggle=\"tooltip\"]').tooltip();   
});
</script>
<!-- script ends here -->
    </body>
    </html>
", "base.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/base.html.twig");
    }
}
