<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_328af236a9b96a67a0f4f616ac696781cb42178e802cd238eb9093e9980181e8 extends Twig_Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => array("class" => "form-horizontal", "role" => "form", "novalidate" => "novalidate")));
        echo "
<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">        
<div class=\"form-group\">
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contactname", array()), 'widget', array("attr" => array("class" => "form-control form-size", "placeholder" => "Full Name")));
        echo "
    <span class=\"error\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contactname", array()), 'errors');
        echo "</span>
</div>
        </div>

<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">        
<div class=\"form-group\">
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mobile", array()), 'widget', array("attr" => array("class" => "form-control form-size", "placeholder" => "Mobile")));
        echo "<span class=\"error\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mobile", array()), 'errors');
        echo "</span>
  
    </div>
  </div>
<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\"> 
<div class=\"form-group\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'widget', array("attr" => array("class" => "form-control form-size", "placeholder" => "Email Address")));
        echo "<span class=\"error\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'errors');
        echo "</span>
    </div>
</div> 
<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">
<div class=\"form-group\">
    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control form-size", "placeholder" => "Password")));
        echo "<span class=\"error\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "first", array()), 'errors');
        echo "</span>
 
    </div>
</div> 
        <div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12\">
<div class=\"form-group\">
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control form-size", "placeholder" => "Confirm Password")));
        echo "<span class=\"error\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "second", array()), 'errors');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
      </div> <!-- content right ends here -->
      </div>
    </div>
  <!-- content ends here -->

";
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
        return array (  112 => 55,  99 => 47,  86 => 39,  75 => 33,  65 => 28,  54 => 22,  45 => 16,  41 => 15,  35 => 12,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:register_content.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
