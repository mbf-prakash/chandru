<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b844cd3a9916008fcb5f30021428937c12160bad155b87da30a9286622ea5680 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

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
        echo "<section id=\"section-banner\">
  <div class=\"container\">
<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12 form1\">
<center>
  <h3>Email Confirmed</h3>
  
</center>
</div>

<div class=\"col-lg-8 col-md-8 col-md-offset-2 col-xs-12 col-sm-12 \">
<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Confirmation email\" title=\"Confirmation email\"> 
<div class=\"email_bg\">
<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">

<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3\">
<i class=\"fa fa-envelope email\"></i>
</div>

<div class=\"col-lg-11 col-md-11 col-sm-9 col-xs-9\">

<span class=\"email-address\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->source); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo ".";
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
       
    ";
        }
        // line 29
        echo "</span>
</div><div class=\"clearfix\"></div>

<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"></div>

</div>
</div>
</div>
</div>
</section>
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  82 => 27,  78 => 26,  65 => 16,  53 => 6,  44 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<section id=\"section-banner\">
  <div class=\"container\">
<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12 form1\">
<center>
  <h3>Email Confirmed</h3>
  
</center>
</div>

<div class=\"col-lg-8 col-md-8 col-md-offset-2 col-xs-12 col-sm-12 \">
<img src=\"{{ asset('images/3.jpg') }}\" class=\"img-responsive\" alt=\"Confirmation email\" title=\"Confirmation email\"> 
<div class=\"email_bg\">
<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">

<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3\">
<i class=\"fa fa-envelope email\"></i>
</div>

<div class=\"col-lg-11 col-md-11 col-sm-9 col-xs-9\">

<span class=\"email-address\">{{ 'registration.confirmed'|trans({'%username%': user.username}) }}.{% if targetUrl %}
    <a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a>
       
    {% endif %}</span>
</div><div class=\"clearfix\"></div>

<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"></div>

</div>
</div>
</div>
</div>
</section>
 
{% endblock fos_user_content %}", "FOSUserBundle:Registration:confirmed.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
