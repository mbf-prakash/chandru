<?php

/* :supplier:editsupplier.html.twig */
class __TwigTemplate_c6fb525680120ea34d432b2092a7c4e5d0b81322d19a01811a3230ef9279eb13 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":supplier:editsupplier.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":supplier:editsupplier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":supplier:editsupplier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "

<div class=\"padding-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
</div>
  <div class=\"bg-white table-bg\">
  <h2>Edit Supplier</h2>

 ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "  

<div class=\"form-group\">
<label>Supplier Name<span class=\"required\">*</span></label>
";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "supplier", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "supplier", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Address1<span class=\"required\">*</span></label>
";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "address1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "address1", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Address2</label>
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "address2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "   
</div>

<div class=\"form-group\">
<label>City<span class=\"required\">*</span></label>
";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "city", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "city", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Pincode<span class=\"required\">*</span></label>
";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "pincode", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "pincode", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Mobile<span class=\"required\">*</span></label>
";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "mobile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "mobile", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>GSTIN</label>
";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "gstin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>


<div class=\"form-group\">
<label>State<span class=\"required\">*</span></label>
";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "state", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "state", array()), 'errors');
        echo "</span>
</div>


<div class=\"form-group\">
<label>Member Since<span class=\"required\">*</span></label>
";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "joineddate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "joineddate", array()), 'errors');
        echo "</span>
</div>



<div class=\"form-group\">
<label></label>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\"><i class=\"fa fa-floppy-o\"></i> &nbsp; Save </button> 
</div>


";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
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
        return ":supplier:editsupplier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 76,  165 => 65,  161 => 64,  152 => 58,  148 => 57,  139 => 51,  131 => 46,  127 => 45,  119 => 40,  115 => 39,  107 => 34,  103 => 33,  95 => 28,  87 => 23,  83 => 22,  75 => 17,  71 => 16,  64 => 12,  53 => 3,  44 => 2,  15 => 1,);
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
  <h2>Edit Supplier</h2>

 {{ form_start(form, {'method': 'post', 'attr': {'class': 'form-horizontal', 'novalidate': 'novalidate' }}) }}  

<div class=\"form-group\">
<label>Supplier Name<span class=\"required\">*</span></label>
{{ form_widget(form.supplier, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.supplier) }}</span>
</div>

<div class=\"form-group\">
<label>Address1<span class=\"required\">*</span></label>
{{ form_widget(form.address1, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.address1) }}</span>
</div>

<div class=\"form-group\">
<label>Address2</label>
{{ form_widget(form.address2, {'attr': {'class': 'form-control',} }) }}   
</div>

<div class=\"form-group\">
<label>City<span class=\"required\">*</span></label>
{{ form_widget(form.city, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.city) }}</span>
</div>

<div class=\"form-group\">
<label>Pincode<span class=\"required\">*</span></label>
{{ form_widget(form.pincode, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.pincode) }}</span>
</div>

<div class=\"form-group\">
<label>Mobile<span class=\"required\">*</span></label>
{{ form_widget(form.mobile, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.mobile) }}</span>
</div>

<div class=\"form-group\">
<label>GSTIN</label>
{{ form_widget(form.gstin, {'attr': {'class': 'form-control',} }) }}
</div>


<div class=\"form-group\">
<label>State<span class=\"required\">*</span></label>
{{ form_widget(form.state, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.state) }}</span>
</div>


<div class=\"form-group\">
<label>Member Since<span class=\"required\">*</span></label>
{{ form_widget(form.joineddate, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.joineddate) }}</span>
</div>



<div class=\"form-group\">
<label></label>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\"><i class=\"fa fa-floppy-o\"></i> &nbsp; Save </button> 
</div>


{{ form_end(form) }}

    </div>
  </div>
</div>


 {% endblock %}", ":supplier:editsupplier.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/supplier/editsupplier.html.twig");
    }
}
