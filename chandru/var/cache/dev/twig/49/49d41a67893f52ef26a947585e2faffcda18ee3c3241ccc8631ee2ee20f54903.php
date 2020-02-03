<?php

/* salebymonth/salebymonth.html.twig */
class __TwigTemplate_af9d4a50f5732ae7093f022f8e628ffbc4a3c14f4f1d583fbabf6a67af33b3f6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", "salebymonth/salebymonth.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "salebymonth/salebymonth.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "salebymonth/salebymonth.html.twig"));

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
        // line 17
        echo twig_escape_filter($this->env, (isset($context["monthyear"]) || array_key_exists("monthyear", $context) ? $context["monthyear"] : (function () { throw new Twig_Error_Runtime('Variable "monthyear" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " Sales</h5>
<center>


";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "  

<div class=\"form-inline\">

<div class=\"form-group mgrt-30\">
";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "month", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "month", array()), 'errors');
        echo "</span>
</div>



<div class=\"form-group\">
";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "year", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "year", array()), 'errors');
        echo "</span>
</div>

<button type=\"submit\" class=\"btn btn-primary\">Search</button>

</div>



";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "

</center>
<br>


<div class=\"table-responsive\">
<table class=\"table table-hover no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Invoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Customer</th>
<th class=\"text-center\">Status</th>
<th class=\"text-center\">Total</th>
</tr>
</thead>
<tbody>


";
        // line 63
        $context["totalsalesamount"] = 0;
        // line 64
        $context["counter"] = 1;
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sales"]) || array_key_exists("sales", $context) ? $context["sales"] : (function () { throw new Twig_Error_Runtime('Variable "sales" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 66
            $context["totalsalesamount"] = ((isset($context["totalsalesamount"]) || array_key_exists("totalsalesamount", $context) ? $context["totalsalesamount"] : (function () { throw new Twig_Error_Runtime('Variable "totalsalesamount" does not exist.', 66, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()));
            // line 67
            echo "
<tr>
<td class=\"text-center\"> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicenumber", array()), "html", null, true);
            echo "</td>
<td class=\"text-center\"> ";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicedate", array()), "d-m-Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "company", array()), "html", null, true);
            echo "</td>
<td class=\"text-right\"><span>";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "status", array()) == true)) {
                echo " Paid ";
            } else {
                echo " UnPaid ";
            }
            echo "</span> </td>
<td class=\"text-right\"><span>";
            // line 73
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()), 2, ".", ","), "html", null, true);
            echo "</span></td>
</tr>


";
            // line 77
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new Twig_Error_Runtime('Variable "counter" does not exist.', 77, $this->source); })()) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
<tr>
<th class=\"text-right\" colspan=\"4\">Total Amount</th>
<th class=\"text-right\">";
        // line 82
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalsalesamount"]) || array_key_exists("totalsalesamount", $context) ? $context["totalsalesamount"] : (function () { throw new Twig_Error_Runtime('Variable "totalsalesamount" does not exist.', 82, $this->source); })()), 2, ".", ","), "html", null, true);
        echo "</th>
</tr>


</tbody>
</table>
</div>

</div>

</div>
<section>

</div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "salebymonth/salebymonth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 82,  183 => 79,  177 => 77,  170 => 73,  162 => 72,  158 => 71,  154 => 70,  150 => 69,  146 => 67,  144 => 66,  140 => 65,  138 => 64,  136 => 63,  113 => 43,  101 => 34,  97 => 33,  88 => 27,  84 => 26,  76 => 21,  69 => 17,  53 => 3,  44 => 2,  15 => 1,);
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
<h5 class=\"page-title text-center\">{{ monthyear }} Sales</h5>
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

</center>
<br>


<div class=\"table-responsive\">
<table class=\"table table-hover no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Invoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Customer</th>
<th class=\"text-center\">Status</th>
<th class=\"text-center\">Total</th>
</tr>
</thead>
<tbody>


{% set totalsalesamount = 0 %}
{% set counter = 1 %}
{% for item in sales %}
{% set totalsalesamount = totalsalesamount + item.grandtotal %}

<tr>
<td class=\"text-center\"> {{ item.invoicenumber }}</td>
<td class=\"text-center\"> {{ item.invoicedate|date('d-m-Y') }} </td>
<td> {{ item.company }}</td>
<td class=\"text-right\"><span>{% if item.status == true %} Paid {% else %} UnPaid {% endif %}</span> </td>
<td class=\"text-right\"><span>{{ item.grandtotal|number_format(2, '.', ',') }}</span></td>
</tr>


{% set counter = counter + 1 %}
{% endfor %}

<tr>
<th class=\"text-right\" colspan=\"4\">Total Amount</th>
<th class=\"text-right\">{{ totalsalesamount|number_format(2, '.', ',') }}</th>
</tr>


</tbody>
</table>
</div>

</div>

</div>
<section>

</div>




{% endblock %}

", "salebymonth/salebymonth.html.twig", "E:\\pandiaraj\\chandru\\app\\Resources\\views\\salebymonth\\salebymonth.html.twig");
    }
}
