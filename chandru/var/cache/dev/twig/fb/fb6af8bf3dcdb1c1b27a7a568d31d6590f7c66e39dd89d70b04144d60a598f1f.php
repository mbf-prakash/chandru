<?php

/* invoiceitem/invoiceitem.html.twig */
class __TwigTemplate_c165581f810a195a7dd42ac77fdd7c7e1bbe76ddd458f9e2cb0b23dd99976189 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", "invoiceitem/invoiceitem.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'grid_filters' => array($this, 'block_grid_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "invoiceitem/invoiceitem.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "invoiceitem/invoiceitem.html.twig"));

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

   ";
        // line 10
        echo twig_include($this->env, $context, "site/_flash_messages.html.twig");
        echo "
  <div class=\"bg-white table-bg\">
  <h2></h2>
 
 ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', array("method" => "post", "attr" => array("novalidate" => "novalidate")));
        echo " 
 


<div class=\"form-group\">

<div class=\"row\">
<div class=\"col-sm-8\">
<label>Select Product<span class=\"required\">*</span></label>
";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "product", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Product Name")));
        echo "
    <span class=\"error required\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "product", array()), 'errors');
        echo "</span>
</div>
<div class=\"col-sm-1\">
<label>Disc(%)<span class=\"required\">*</span></label>
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "discount", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "discount", array()), 'errors');
        echo "</span>
</div> 

<div class=\"col-sm-1\">
<label>Qty<span class=\"required\">*</span></label>
";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "quantity", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "quantity", array()), 'errors');
        echo "</span>
</div> 

<div class=\"col-sm-2\">
<div style=\"padding-bottom:6px\">&nbsp;</div>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\">
<i class=\"fa fa-floppy-o\"></i> &nbsp; Save </button> 
</div>
</div>

";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "


";
        // line 48
        if (((isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new Twig_Error_Runtime('Variable "subtotal" does not exist.', 48, $this->source); })()) > 0)) {
            // line 49
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid($this->env, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 49, $this->source); })()));
            echo "

";
            // line 51
            $this->displayBlock('grid_filters', $context, $blocks);
            // line 52
            echo "<div class=\"grid\">
<table class=\"table table-striped\">
<tbody>

    <tr>
        <td style=\"width:50px\"></td>
        <td style=\"text-align:right;color:red;\">Sub Total</td> 
        <td style=\"width:100px;text-align:right;color:red;\">";
            // line 59
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new Twig_Error_Runtime('Variable "subtotal" does not exist.', 59, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td style=\"width:135px;\"></td>
    </tr>
";
            // line 62
            if (((isset($context["igst"]) || array_key_exists("igst", $context) ? $context["igst"] : (function () { throw new Twig_Error_Runtime('Variable "igst" does not exist.', 62, $this->source); })()) == 0)) {
                // line 63
                echo "    <tr>
        <td></td>
        <td style=\"text-align:right\">CGST</td> 
        <td style=\"text-align:right\">";
                // line 66
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cgst"]) || array_key_exists("cgst", $context) ? $context["cgst"] : (function () { throw new Twig_Error_Runtime('Variable "cgst" does not exist.', 66, $this->source); })()), 2, ".", ","), "html", null, true);
                echo "</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td style=\"text-align:right\">SGST</td> 
        <td style=\"text-align:right\">";
                // line 72
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sgst"]) || array_key_exists("sgst", $context) ? $context["sgst"] : (function () { throw new Twig_Error_Runtime('Variable "sgst" does not exist.', 72, $this->source); })()), 2, ".", ","), "html", null, true);
                echo "</td>
        <td></td>
    </tr>
   ";
            } else {
                // line 76
                echo "   <tr>
        <td></td>
        <td style=\"text-align:right\">IGST</td> 
        <td style=\"text-align:right\">";
                // line 79
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["igst"]) || array_key_exists("igst", $context) ? $context["igst"] : (function () { throw new Twig_Error_Runtime('Variable "igst" does not exist.', 79, $this->source); })()), 2, ".", ","), "html", null, true);
                echo "</td>
        <td></td>
    </tr>
";
            }
            // line 83
            echo "    <tr>
        <td></td>
        <td style=\"text-align:right;color:red;\">Total</td> 
        <td style=\"text-align:right;color:red;\">";
            // line 86
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 86, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td></td>
    </tr>

</tbody>
</table>
</div>
";
        }
        // line 94
        echo "
</div>
</div>
</div>


 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_grid_filters($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_filters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_filters"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "invoiceitem/invoiceitem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 51,  202 => 94,  191 => 86,  186 => 83,  179 => 79,  174 => 76,  167 => 72,  158 => 66,  153 => 63,  151 => 62,  145 => 59,  136 => 52,  134 => 51,  129 => 49,  127 => 48,  121 => 45,  108 => 35,  104 => 34,  96 => 29,  92 => 28,  85 => 24,  81 => 23,  69 => 14,  62 => 10,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}
    
{% block content %} 

<div class=\"padding-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
</div>

   {{ include('site/_flash_messages.html.twig')}}
  <div class=\"bg-white table-bg\">
  <h2></h2>
 
 {{ form_start(form, {'method': 'post', 'attr': {'novalidate': 'novalidate' }}) }} 
 


<div class=\"form-group\">

<div class=\"row\">
<div class=\"col-sm-8\">
<label>Select Product<span class=\"required\">*</span></label>
{{ form_widget(form.product, {'attr': {'class': 'form-control', 'placeholder':'Product Name'} }) }}
    <span class=\"error required\">{{ form_errors(form.product) }}</span>
</div>
<div class=\"col-sm-1\">
<label>Disc(%)<span class=\"required\">*</span></label>
{{ form_widget(form.discount, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.discount) }}</span>
</div> 

<div class=\"col-sm-1\">
<label>Qty<span class=\"required\">*</span></label>
{{ form_widget(form.quantity, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.quantity) }}</span>
</div> 

<div class=\"col-sm-2\">
<div style=\"padding-bottom:6px\">&nbsp;</div>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\">
<i class=\"fa fa-floppy-o\"></i> &nbsp; Save </button> 
</div>
</div>

{{ form_end(form) }}


{% if subtotal > 0 %}
{{ grid(grid) }}

{% block grid_filters %}{% endblock %}
<div class=\"grid\">
<table class=\"table table-striped\">
<tbody>

    <tr>
        <td style=\"width:50px\"></td>
        <td style=\"text-align:right;color:red;\">Sub Total</td> 
        <td style=\"width:100px;text-align:right;color:red;\">{{ subtotal|number_format(2, '.', ',') }}</td>
        <td style=\"width:135px;\"></td>
    </tr>
{% if igst == 0 %}
    <tr>
        <td></td>
        <td style=\"text-align:right\">CGST</td> 
        <td style=\"text-align:right\">{{ cgst|number_format(2, '.', ',') }}</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td style=\"text-align:right\">SGST</td> 
        <td style=\"text-align:right\">{{ sgst|number_format(2, '.', ',') }}</td>
        <td></td>
    </tr>
   {% else %}
   <tr>
        <td></td>
        <td style=\"text-align:right\">IGST</td> 
        <td style=\"text-align:right\">{{ igst|number_format(2, '.', ',') }}</td>
        <td></td>
    </tr>
{% endif %}
    <tr>
        <td></td>
        <td style=\"text-align:right;color:red;\">Total</td> 
        <td style=\"text-align:right;color:red;\">{{ total|number_format(2, '.', ',') }}</td>
        <td></td>
    </tr>

</tbody>
</table>
</div>
{% endif %}

</div>
</div>
</div>


 {% endblock %}", "invoiceitem/invoiceitem.html.twig", "E:\\pandiaraj\\chandru\\app\\Resources\\views\\invoiceitem\\invoiceitem.html.twig");
    }
}
