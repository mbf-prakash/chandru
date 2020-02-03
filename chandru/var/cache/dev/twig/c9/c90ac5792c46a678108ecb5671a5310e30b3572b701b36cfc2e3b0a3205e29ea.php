<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_25455c61644259e0195bfa39b80aae070cc1da65c09e868764eeb1290e916687 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 1
        echo " 
<img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"admin\" class=\"img-fluid img-center\">

               
                
                ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', array("method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->source); })()))), "attr" => array("class" => "margintopbott-40", "role" => "form", "novalidate" => "novalidate")));
        echo "
    
   
                    <div class=\"form-group\">
                        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control form-size", "placeholder" => "New Password")));
        echo "<span class=\"error\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "plainPassword", array()), "first", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                     ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control form-size", "placeholder" => "Confirm New Password")));
        echo "<span class=\"error\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "plainPassword", array()), "second", array()), 'errors');
        echo "</span>
                      </div>
                    
                    <p class=\"paddingtopbott-30\">
                     <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"RESET PASSWORD\" class=\"btn btn-info login\" />
                     </p>
                   
               ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "


 


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  54 => 13,  46 => 10,  39 => 6,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %} 
<img src=\"{{ asset('images/logo.png') }}\" alt=\"admin\" class=\"img-fluid img-center\">

               
                
                {{ form_start(form, {'method': 'post', 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': {'class': 'margintopbott-40', 'role':'form', 'novalidate': 'novalidate'}}) }}
    
   
                    <div class=\"form-group\">
                        {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control form-size', 'placeholder': 'New Password'} }) }}<span class=\"error\">{{ form_errors(form.plainPassword.first) }}</span>
                    </div>
                    <div class=\"form-group\">
                     {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control form-size', 'placeholder': 'Confirm New Password'} }) }}<span class=\"error\">{{ form_errors(form.plainPassword.second) }}</span>
                      </div>
                    
                    <p class=\"paddingtopbott-30\">
                     <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"RESET PASSWORD\" class=\"btn btn-info login\" />
                     </p>
                   
               {{ form_end(form) }}


 


", "FOSUserBundle:Resetting:reset_content.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
