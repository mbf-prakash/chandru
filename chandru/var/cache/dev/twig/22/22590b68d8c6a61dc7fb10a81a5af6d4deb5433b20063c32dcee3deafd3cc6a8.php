<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_83d261f4b4667b758936ca11e325c876b10f6e306bf188b2cf8c1a50e3b95cb0 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  58 => 16,  50 => 10,  46 => 9,  44 => 8,  37 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %} 

<img src=\"{{ asset('images/logo.png') }}\" alt=\"admin\" class=\"img-fluid img-center\">
  <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"margintopbott-40\">
        <p>Please enter your email address. You will receive a link to create a new password via email.</p>
          <div class=\"form-group\">
          <input type=\"email\" id=\"username\" name=\"username\" class=\"form-control\" placeholder=\"Email Address\">
    <span class=\"error\">{% if invalid_username is defined %}
            The email address does not exist. Please try again
        {% endif %}</span>
           
          </div>
          <input type=\"submit\" value=\"RESET PASSWORD\" class=\"btn btn-info login\">
        </form>
        <div class=\"text-right\">
        <p><a href=\"{{ path('home') }}\" class=\"btn btn-danger\"><i class=\"fa fa-ban\" aria-hidden=\"true\"></i> Cancel</a></p>
        </div>


 

", "FOSUserBundle:Resetting:request_content.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
