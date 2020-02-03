<?php

/* :expanses:addexpanses.html.twig */
class __TwigTemplate_c1e72f6084aea5a1ab5f4f0ddf2f0414c1885b12b57f5b1208d8517ce7524d43 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":expanses:addexpanses.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":expanses:addexpanses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":expanses:addexpanses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 

<div class=\"padding-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
</div>
  <div class=\"bg-white table-bg\">
  <h2>Create Expenses</h2>
 
 ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', array("method" => "post", "attr" => array("novalidate" => "novalidate")));
        echo " 
 

<div class=\"form-group\">
  <label>Date<span class=\"error\">*</span></label>
";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "invoicedate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "invoicedate", array()), 'errors');
        echo "</span>
</div>




<div class=\"form-group\">
  <label>Name<span class=\"error\">*</span></label>
";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "name", array()), 'errors');
        echo "</span>
</div>




<div class=\"form-group\">
  <label>Amount<span class=\"error\">*</span></label>
";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "amount", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "amount", array()), 'errors');
        echo "</span>
</div>



<div class=\"form-group\">
  <label>Description<span class=\"error\">*</span></label>
";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "description", array()), 'errors');
        echo "</span>
</div>

  <br>
  <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-floppy-o\"></i> Create Expenses</button>
  <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("expanses");
        echo "\" class=\"btn btn-secondary\"><i class=\"fa fa-ban\" aria-hidden=\"true\"></i> Cancel</a>
    ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
    </div>
    </div>
    </div>

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":expanses:addexpanses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 50,  127 => 49,  119 => 44,  115 => 43,  105 => 36,  101 => 35,  90 => 27,  86 => 26,  75 => 18,  71 => 17,  63 => 12,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}
    
{% block content %} 

<div class=\"padding-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
</div>
  <div class=\"bg-white table-bg\">
  <h2>Create Expenses</h2>
 
 {{ form_start(form, {'method': 'post', 'attr': {'novalidate': 'novalidate' }}) }} 
 

<div class=\"form-group\">
  <label>Date<span class=\"error\">*</span></label>
{{ form_widget(form.invoicedate, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.invoicedate) }}</span>
</div>




<div class=\"form-group\">
  <label>Name<span class=\"error\">*</span></label>
{{ form_widget(form.name, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.name) }}</span>
</div>




<div class=\"form-group\">
  <label>Amount<span class=\"error\">*</span></label>
{{ form_widget(form.amount, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.amount) }}</span>
</div>



<div class=\"form-group\">
  <label>Description<span class=\"error\">*</span></label>
{{ form_widget(form.description, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.description) }}</span>
</div>

  <br>
  <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-floppy-o\"></i> Create Expenses</button>
  <a href=\"{{ path('expanses') }}\" class=\"btn btn-secondary\"><i class=\"fa fa-ban\" aria-hidden=\"true\"></i> Cancel</a>
    {{ form_end(form) }}
    </div>
    </div>
    </div>

 {% endblock %}", ":expanses:addexpanses.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/expanses/addexpanses.html.twig");
    }
}
