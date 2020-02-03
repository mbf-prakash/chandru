<?php

/* :product:editproduct.html.twig */
class __TwigTemplate_93bd7b2e9321aaccc245cb6539104e61b30f2df49cfd20c0589d6a0d751979cf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":product:editproduct.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:editproduct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:editproduct.html.twig"));

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

<div class=\"paddtopbottom-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
<p><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">Dashboard</a> / <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        echo "\">Product</a> / Edit Product</p>
</div>
  <div class=\"bg-white table-bg\">
  <h2>Edit Product</h2>

 ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "  


<div class=\"form-group\">
<label>Category<span class=\"required\">*</span></label>
";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "category", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "category", array()), 'errors');
        echo "</span>
</div>


<div class=\"form-group\">
<label>Product Name<span class=\"required\">*</span></label>
";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "product", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "product", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Unit<span class=\"required\">*</span></label>
";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "unit", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "unit", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>HSSN Code<span class=\"required\">*</span></label>
";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "hssncode", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "hssncode", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>GST Percentage<span class=\"required\">*</span></label>
";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "gst", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "gst", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>MRP<span class=\"required\">*</span></label>
";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "mrp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "mrp", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Discount Percentage<span class=\"required\">*</span></label>
";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "discount", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "discount", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Selling Rate<span class=\"required\">*</span></label>
";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "rate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "rate", array()), 'errors');
        echo "</span>
</div>




<div class=\"form-group\">
<label>Stock<span class=\"required\">*</span></label>
";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), "stock", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), "stock", array()), 'errors');
        echo "</span>
</div>


<div class=\"form-group\">
<label></label>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\"><i class=\"fa fa-floppy-o\"></i> &nbsp; Save </button> 
</div>


";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        echo "

    </div>
  </div>
</div>


 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "
 ";
        // line 91
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
\$(document).ready(function(){
    \$(\"#product_mrp\").change(function(){
        var num=\$(\"#product_mrp\").val()-(\$(\"#product_mrp\").val()*(\$(\"#product_discount\").val()/100));
        var gst=1+(\$(\"#product_gst\").val()/100);
        num=num/gst;
        \$(\"#product_rate\").val(num.toFixed(2));
       
    });
      \$(\"#product_discount\").change(function(){
        var num=\$(\"#product_mrp\").val()-(\$(\"#product_mrp\").val()*(\$(\"#product_discount\").val()/100));
        var gst=1+(\$(\"#product_gst\").val()/100);
        num=num/gst;
        \$(\"#product_rate\").val(num.toFixed(2));
       
    });
     \$(\"#product_gst\").change(function(){
        var num=\$(\"#product_mrp\").val()-(\$(\"#product_mrp\").val()*(\$(\"#product_discount\").val()/100));
        var gst=1+(\$(\"#product_gst\").val()/100);
        num=num/gst;
        \$(\"#product_rate\").val(num.toFixed(2));
       
    });
});
</script>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":product:editproduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 91,  223 => 90,  214 => 89,  196 => 81,  183 => 71,  179 => 70,  168 => 62,  164 => 61,  156 => 56,  152 => 55,  144 => 50,  140 => 49,  132 => 44,  128 => 43,  120 => 38,  116 => 37,  108 => 32,  104 => 31,  96 => 26,  92 => 25,  83 => 19,  79 => 18,  71 => 13,  61 => 8,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}
{% block content %}


<div class=\"paddtopbottom-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
<p><a href=\"{{ path('dashboard') }}\">Dashboard</a> / <a href=\"{{ path('product') }}\">Product</a> / Edit Product</p>
</div>
  <div class=\"bg-white table-bg\">
  <h2>Edit Product</h2>

 {{ form_start(form, {'method': 'post', 'attr': {'class': 'form-horizontal', 'novalidate': 'novalidate' }}) }}  


<div class=\"form-group\">
<label>Category<span class=\"required\">*</span></label>
{{ form_widget(form.category, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.category) }}</span>
</div>


<div class=\"form-group\">
<label>Product Name<span class=\"required\">*</span></label>
{{ form_widget(form.product, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.product) }}</span>
</div>

<div class=\"form-group\">
<label>Unit<span class=\"required\">*</span></label>
{{ form_widget(form.unit, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.unit) }}</span>
</div>

<div class=\"form-group\">
<label>HSSN Code<span class=\"required\">*</span></label>
{{ form_widget(form.hssncode, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.hssncode) }}</span>
</div>

<div class=\"form-group\">
<label>GST Percentage<span class=\"required\">*</span></label>
{{ form_widget(form.gst, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.gst) }}</span>
</div>

<div class=\"form-group\">
<label>MRP<span class=\"required\">*</span></label>
{{ form_widget(form.mrp, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.mrp) }}</span>
</div>

<div class=\"form-group\">
<label>Discount Percentage<span class=\"required\">*</span></label>
{{ form_widget(form.discount, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.discount) }}</span>
</div>

<div class=\"form-group\">
<label>Selling Rate<span class=\"required\">*</span></label>
{{ form_widget(form.rate, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.rate) }}</span>
</div>




<div class=\"form-group\">
<label>Stock<span class=\"required\">*</span></label>
{{ form_widget(form.stock, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.stock) }}</span>
</div>


<div class=\"form-group\">
<label></label>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\"><i class=\"fa fa-floppy-o\"></i> &nbsp; Save </button> 
</div>


{{ form_end(form) }}

    </div>
  </div>
</div>


 {% endblock %}
  {% block javascripts %}

 {{ parent() }}
  <script>
\$(document).ready(function(){
    \$(\"#product_mrp\").change(function(){
        var num=\$(\"#product_mrp\").val()-(\$(\"#product_mrp\").val()*(\$(\"#product_discount\").val()/100));
        var gst=1+(\$(\"#product_gst\").val()/100);
        num=num/gst;
        \$(\"#product_rate\").val(num.toFixed(2));
       
    });
      \$(\"#product_discount\").change(function(){
        var num=\$(\"#product_mrp\").val()-(\$(\"#product_mrp\").val()*(\$(\"#product_discount\").val()/100));
        var gst=1+(\$(\"#product_gst\").val()/100);
        num=num/gst;
        \$(\"#product_rate\").val(num.toFixed(2));
       
    });
     \$(\"#product_gst\").change(function(){
        var num=\$(\"#product_mrp\").val()-(\$(\"#product_mrp\").val()*(\$(\"#product_discount\").val()/100));
        var gst=1+(\$(\"#product_gst\").val()/100);
        num=num/gst;
        \$(\"#product_rate\").val(num.toFixed(2));
       
    });
});
</script>

  {% endblock %}", ":product:editproduct.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/product/editproduct.html.twig");
    }
}
