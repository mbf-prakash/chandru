<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b8109343b95a4c412dc547c3fa052fca82099f10021d643909afd19ee241d9df extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"admin\" class=\"img-fluid img-center\">

               
                <form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"margintopbott-40\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\" />
    ";
        // line 11
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "    <div class=\"error text-center\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 12, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 12, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 14
        echo "                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Username / Email Address\">
                    </div>
                    <div class=\"form-group\">
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control form-size\" placeholder=\"Password\">
                      </div>
                      <div class=\"form-check\">
                      <label class=\"form-check-label\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" class=\"form-check-input\" value=\"\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                      </label>
                      <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\" class=\"body-color\" ><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> Forgot pwd?</a>
                      
                    </div>
                    <p class=\"paddingtopbott-30\">
                     <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"LOG IN\" class=\"btn btn-info login\" />
                     </p>
                   
                </form>
<!--
<ul class=\"text-center\">
  <li class=\"list-item-inline\"><a href=\"https://www.facebook.com/\" title=\"Login with facebook\" data-toggle=\"tooltip\" target=\"_blank\"><i class=\"fa fa-facebook fa-icon face-color\" aria-hidden=\"true\"></i></a></li> 
  <li class=\"list-item-inline\"><a href=\"https://plus.google.com\" title=\"Login with google+\" data-toggle=\"tooltip\" target=\"_blank\"><i class=\"fa fa-google-plus fa-icon google-color\" aria-hidden=\"true\"></i></a></li> 
</ul>
                <p class=\"text-center\">Don't have an account? <a href=\"#\" class=\"sign\">Sign Up</a></p> -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  89 => 22,  79 => 15,  76 => 14,  70 => 12,  68 => 11,  64 => 10,  60 => 9,  53 => 6,  44 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<img src=\"{{ asset('images/logo.png') }}\" alt=\"admin\" class=\"img-fluid img-center\">

               
                <form action=\"{{ path('fos_user_security_check') }}\" method=\"post\" class=\"margintopbott-40\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% if error %}
    <div class=\"error text-center\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Username / Email Address\">
                    </div>
                    <div class=\"form-group\">
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control form-size\" placeholder=\"Password\">
                      </div>
                      <div class=\"form-check\">
                      <label class=\"form-check-label\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" class=\"form-check-input\" value=\"\">{{ 'security.login.remember_me'|trans }}
                      </label>
                      <a href=\"{{ path('fos_user_resetting_request')}}\" class=\"body-color\" ><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> Forgot pwd?</a>
                      
                    </div>
                    <p class=\"paddingtopbott-30\">
                     <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"LOG IN\" class=\"btn btn-info login\" />
                     </p>
                   
                </form>
<!--
<ul class=\"text-center\">
  <li class=\"list-item-inline\"><a href=\"https://www.facebook.com/\" title=\"Login with facebook\" data-toggle=\"tooltip\" target=\"_blank\"><i class=\"fa fa-facebook fa-icon face-color\" aria-hidden=\"true\"></i></a></li> 
  <li class=\"list-item-inline\"><a href=\"https://plus.google.com\" title=\"Login with google+\" data-toggle=\"tooltip\" target=\"_blank\"><i class=\"fa fa-google-plus fa-icon google-color\" aria-hidden=\"true\"></i></a></li> 
</ul>
                <p class=\"text-center\">Don't have an account? <a href=\"#\" class=\"sign\">Sign Up</a></p> -->

{% endblock fos_user_content %} 
", "FOSUserBundle:Security:login.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
