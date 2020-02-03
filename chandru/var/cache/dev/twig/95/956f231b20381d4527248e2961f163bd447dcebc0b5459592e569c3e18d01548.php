<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_2d9f359a21514a91cea9812f711471286c58a5100a214786d92b5c98571d5226 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<!-- content left starts here -->
        <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12 hide-bg\">
        </div>
      <!-- content left ends here -->

  <!-- content right starts here -->

    <div class=\"col-lg-4 col-md-4 col-xs-12  col-sm-12 form\">
<center><h1>Create an Account</h1>
</center>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', array("method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => array("class" => "form-horizontal", "role" => "form", "novalidate" => "novalidate")));
        echo "
<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">        
<div class=\"form-group\">
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "contactname", array()), 'widget', array("attr" => array("class" => "form-control form-size", "placeholder" => "Full Name")));
        echo "
    <span class=\"error\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "contactname", array()), 'errors');
        echo "</span>
</div>
        </div>

<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">        
<div class=\"form-group\">
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "mobile", array()), 'widget', array("attr" => array("class" => "form-control form-size", "placeholder" => "Mobile")));
        echo "<span class=\"error\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "mobile", array()), 'errors');
        echo "</span>
  
    </div>
  </div>
<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\"> 
<div class=\"form-group\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control form-size", "placeholder" => "Email Address")));
        echo "<span class=\"error\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "email", array()), 'errors');
        echo "</span>
    </div>
</div> 
<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">
<div class=\"form-group\">
    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control form-size", "placeholder" => "Password")));
        echo "<span class=\"error\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "plainPassword", array()), "first", array()), 'errors');
        echo "</span>
 
    </div>
</div> 
        <div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">
<div class=\"form-group\">
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control form-size", "placeholder" => "Confirm Password")));
        echo "<span class=\"error\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "plainPassword", array()), "second", array()), 'errors');
        echo "</span>
 
            </div>
</div> 


 <div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">
  <div class=\"terms\">
  <p>By clicking 'Create Account', you agree to the <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms");
        echo "\"> Terms of Service</a> and <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy");
        echo "\">Privacy Policy.</a></p>
  </div>
</div>
   <div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">
  <div class=\"form-group\">
        <input type=\"submit\" value=\"CREATE ACCOUNT\" class=\"btn btn-danger btn-block btn-lg\">
    </div>
</div>
";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
      </div> <!-- content right ends here -->
      </div>
    </div>
  <!-- content ends here -->

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 55,  105 => 47,  92 => 39,  81 => 33,  71 => 28,  60 => 22,  51 => 16,  47 => 15,  41 => 12,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<!-- content left starts here -->
        <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12 hide-bg\">
        </div>
      <!-- content left ends here -->

  <!-- content right starts here -->

    <div class=\"col-lg-4 col-md-4 col-xs-12  col-sm-12 form\">
<center><h1>Create an Account</h1>
</center>
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'form-horizontal', 'role':'form', 'novalidate': 'novalidate'}}) }}
<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">        
<div class=\"form-group\">
{{ form_widget(form.contactname, {'attr': {'class': 'form-control form-size', 'placeholder': 'Full Name'} }) }}
    <span class=\"error\">{{ form_errors(form.contactname) }}</span>
</div>
        </div>

<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">        
<div class=\"form-group\">
    {{ form_widget(form.mobile, {'attr': {'class': 'form-control form-size', 'placeholder': 'Mobile'} }) }}<span class=\"error\">{{ form_errors(form.mobile) }}</span>
  
    </div>
  </div>
<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\"> 
<div class=\"form-group\">
    {{ form_widget(form.email, {'attr': {'class': 'form-control form-size', 'placeholder': 'Email Address'} }) }}<span class=\"error\">{{ form_errors(form.email) }}</span>
    </div>
</div> 
<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">
<div class=\"form-group\">
    {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control form-size', 'placeholder': 'Password'} }) }}<span class=\"error\">{{ form_errors(form.plainPassword.first) }}</span>
 
    </div>
</div> 
        <div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">
<div class=\"form-group\">
    {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control form-size', 'placeholder': 'Confirm Password'} }) }}<span class=\"error\">{{ form_errors(form.plainPassword.second) }}</span>
 
            </div>
</div> 


 <div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">
  <div class=\"terms\">
  <p>By clicking 'Create Account', you agree to the <a href=\"{{ path('terms') }}\"> Terms of Service</a> and <a href=\"{{ path('privacy') }}\">Privacy Policy.</a></p>
  </div>
</div>
   <div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">
  <div class=\"form-group\">
        <input type=\"submit\" value=\"CREATE ACCOUNT\" class=\"btn btn-danger btn-block btn-lg\">
    </div>
</div>
{{ form_end(form) }}
      </div> <!-- content right ends here -->
      </div>
    </div>
  <!-- content ends here -->

", "FOSUserBundle:Registration:register_content.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
