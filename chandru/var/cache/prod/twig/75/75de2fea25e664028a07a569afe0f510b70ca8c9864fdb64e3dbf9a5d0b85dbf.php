<?php

/* :changepassword:index.html.twig */
class __TwigTemplate_14cf0ea3c93c8de40bf496583a53b5883331a8d44bf82e027d9d3a8967482303 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":changepassword:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo " 

<div class=\"padding-20\">
<div class=\"container-fluid\">
  <div class=\"bg-white table-bg\">
  ";
        // line 8
        echo twig_include($this->env, $context, "site/_flash_messages.html.twig");
        echo "
  <h2>Change Password</h2>
 
 ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("novalidate" => "novalidate")));
        echo " 
 

  <div class=\"form-group\">
  <label>Current Password<span class=\"error\">*</span></label>
  ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "oldPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "oldPassword", array()), 'errors');
        echo "</span>
 
  </div>

   <div class=\"form-group\">
  <label>New Password<span class=\"error\">*</span></label>
  ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "first", array()), 'errors');
        echo "</span>
 
  </div>

   <div class=\"form-group\">
  <label>Confirm New Password<span class=\"error\">*</span></label>
  ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "second", array()), 'errors');
        echo "</span>
 
  </div>


  <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-floppy-o\"></i> Change Password</button>
 
    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
    </div>
    </div>

 ";
    }

    public function getTemplateName()
    {
        return ":changepassword:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 38,  85 => 31,  81 => 30,  72 => 24,  68 => 23,  59 => 17,  55 => 16,  47 => 11,  41 => 8,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":changepassword:index.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/changepassword/index.html.twig");
    }
}
