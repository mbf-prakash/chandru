<?php

/* :purchasebymonth:purchasebymonth.html.twig */
class __TwigTemplate_2e2b1487b5e989dc4a96518cb0925e04ff11e67742996b0dc440bcdd4020f42a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":purchasebymonth:purchasebymonth.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":purchasebymonth:purchasebymonth.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":purchasebymonth:purchasebymonth.html.twig"));

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
<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>


\t<div class=\"padding-20\">
    
    
    
    
    <section id=\"sales\" class=\"margintop-20\">
<div class=\"container-fluid\">



<div class=\"bg-white padding-10 border\">
<h5 class=\"page-title text-center\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["monthyear"]) || array_key_exists("monthyear", $context) ? $context["monthyear"] : (function () { throw new Twig_Error_Runtime('Variable "monthyear" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " Purchase</h5>

<center>


";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "  

<div class=\"form-inline\">

<div class=\"form-group mgrt-30\">
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "month", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "month", array()), 'errors');
        echo "</span>
</div>



<div class=\"form-group\">
";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "year", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "year", array()), 'errors');
        echo "</span>
</div>

<button type=\"submit\" class=\"btn btn-primary\">Search</button>

</div>



";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "

</center> <br>

<div class=\"table-responsive\">
<table class=\"table table-hover no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Invoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Supplier</th>
<th class=\"text-center\">Status</th>
<th class=\"text-center\">Total</th>
</tr>
</thead>




";
        // line 64
        $context["totalpurchaseamount"] = 0;
        // line 65
        $context["counter"] = 1;
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new Twig_Error_Runtime('Variable "purchase" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 67
            $context["totalpurchaseamount"] = ((isset($context["totalpurchaseamount"]) || array_key_exists("totalpurchaseamount", $context) ? $context["totalpurchaseamount"] : (function () { throw new Twig_Error_Runtime('Variable "totalpurchaseamount" does not exist.', 67, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()));
            // line 68
            echo "
<tr>
<td class=\"text-center\"> ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicenumber", array()), "html", null, true);
            echo "</td>
<td class=\"text-center\"> ";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicedate", array()), "d-m-Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "supplier", array()), "supplier", array()), "html", null, true);
            echo "</td>
<td class=\"text-right\"><span>";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "status", array()) == true)) {
                echo " Paid ";
            } else {
                echo " UnPaid ";
            }
            echo "</span> </td>
<td class=\"text-right\"><span>";
            // line 74
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()), 2, ".", ","), "html", null, true);
            echo "</span></td>
</tr>


";
            // line 78
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new Twig_Error_Runtime('Variable "counter" does not exist.', 78, $this->source); })()) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
<tr>
<th class=\"text-right\" colspan=\"4\">Total Amount</th>
<th class=\"text-right\">";
        // line 83
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalpurchaseamount"]) || array_key_exists("totalpurchaseamount", $context) ? $context["totalpurchaseamount"] : (function () { throw new Twig_Error_Runtime('Variable "totalpurchaseamount" does not exist.', 83, $this->source); })()), 2, ".", ","), "html", null, true);
        echo "</th>
</tr>

</table>
</div>
</div>
<div class=\"clearfix\"></div>

</div>
<section>

</div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":purchasebymonth:purchasebymonth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 83,  184 => 80,  178 => 78,  171 => 74,  163 => 73,  159 => 72,  155 => 71,  151 => 70,  147 => 68,  145 => 67,  141 => 66,  139 => 65,  137 => 64,  115 => 45,  103 => 36,  99 => 35,  90 => 29,  86 => 28,  78 => 23,  70 => 18,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}
{% block content %}

<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>


\t<div class=\"padding-20\">
    
    
    
    
    <section id=\"sales\" class=\"margintop-20\">
<div class=\"container-fluid\">



<div class=\"bg-white padding-10 border\">
<h5 class=\"page-title text-center\">{{ monthyear }} Purchase</h5>

<center>


{{ form_start(form, {'method': 'post', 'attr': {'class': 'form-horizontal', 'novalidate': 'novalidate' }}) }}  

<div class=\"form-inline\">

<div class=\"form-group mgrt-30\">
{{ form_widget(form.month, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.month) }}</span>
</div>



<div class=\"form-group\">
{{ form_widget(form.year, {'attr': {'class': 'form-control',} }) }}
    <span class=\"error required\">{{ form_errors(form.year) }}</span>
</div>

<button type=\"submit\" class=\"btn btn-primary\">Search</button>

</div>



{{ form_end(form) }}

</center> <br>

<div class=\"table-responsive\">
<table class=\"table table-hover no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Invoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Supplier</th>
<th class=\"text-center\">Status</th>
<th class=\"text-center\">Total</th>
</tr>
</thead>




{% set totalpurchaseamount = 0 %}
{% set counter = 1 %}
{% for item in purchase %}
{% set totalpurchaseamount = totalpurchaseamount + item.grandtotal %}

<tr>
<td class=\"text-center\"> {{ item.invoicenumber }}</td>
<td class=\"text-center\"> {{ item.invoicedate|date('d-m-Y') }} </td>
<td> {{ item.supplier.supplier }}</td>
<td class=\"text-right\"><span>{% if item.status == true %} Paid {% else %} UnPaid {% endif %}</span> </td>
<td class=\"text-right\"><span>{{ item.grandtotal|number_format(2, '.', ',') }}</span></td>
</tr>


{% set counter = counter + 1 %}
{% endfor %}

<tr>
<th class=\"text-right\" colspan=\"4\">Total Amount</th>
<th class=\"text-right\">{{ totalpurchaseamount|number_format(2, '.', ',') }}</th>
</tr>

</table>
</div>
</div>
<div class=\"clearfix\"></div>

</div>
<section>

</div>




{% endblock %}

", ":purchasebymonth:purchasebymonth.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/purchasebymonth/purchasebymonth.html.twig");
    }
}
