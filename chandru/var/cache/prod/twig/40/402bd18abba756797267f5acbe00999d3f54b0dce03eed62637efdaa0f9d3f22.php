<?php

/* base.html.twig */
class __TwigTemplate_0a1f7afe4b0cca11c42e3dc1d43a7fa65a8803fe63975a34ebf79167456ea8ff extends Twig_Template
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
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "                
                ";
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
        return array (  96 => 25,  93 => 24,  67 => 38,  54 => 27,  52 => 24,  36 => 11,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/base.html.twig");
    }
}
