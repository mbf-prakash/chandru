<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_eabef959fd4f6f4390b4320e91912265a0f9926097d614c6ec61564e48afef8d extends Twig_Template
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
        echo " 

<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"admin\" class=\"img-fluid img-center\">
  <form action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"margintopbott-40\">
        <p>Please enter your email address. You will receive a link to create a new password via email.</p>
          <div class=\"form-group\">
          <input type=\"email\" id=\"username\" name=\"username\" class=\"form-control\" placeholder=\"Email Address\">
    <span class=\"error\">";
        // line 8
        if ((isset($context["invalid_username"]) || array_key_exists("invalid_username", $context))) {
            // line 9
            echo "            The email address does not exist. Please try again
        ";
        }
        // line 10
        echo "</span>
           
          </div>
          <input type=\"submit\" value=\"RESET PASSWORD\" class=\"btn btn-info login\">
        </form>
        <div class=\"text-right\">
        <p><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-ban\" aria-hidden=\"true\"></i> Cancel</a></p>
        </div>


 

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  44 => 10,  40 => 9,  38 => 8,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:request_content.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
