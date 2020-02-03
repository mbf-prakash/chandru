<?php

/* :pinvoice:pinvoiceamount.html.twig */
class __TwigTemplate_40af52e90709419dd01803a6ae443669fa89a6f67642ea9a479611a22880e923 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":pinvoice:pinvoiceamount.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pinvoice:pinvoiceamount.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pinvoice:pinvoiceamount.html.twig"));

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


";
        // line 10
        if (((isset($context["pinvoiceamt"]) || array_key_exists("pinvoiceamt", $context) ? $context["pinvoiceamt"] : (function () { throw new Twig_Error_Runtime('Variable "pinvoiceamt" does not exist.', 10, $this->source); })()) > 0)) {
            // line 11
            echo "
  <div class=\"bg-white table-bg\">
   ";
            // line 13
            echo twig_include($this->env, $context, "site/_flash_messages.html.twig");
            echo "
  <h2></h2>

 ";
            // line 16
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
            echo "  


<div class=\"row\">
<div class=\"col-sm-2\">
</div>
<div class=\"col-sm-3\">

<div class=\"form-group\">
";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "paiddate", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Paid Date")));
            echo "
    <span class=\"error required\">";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "paiddate", array()), 'errors');
            echo "</span>
</div>

</div>

<div class=\"col-sm-3\">

<div class=\"form-group\">
";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "amount", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Paid Amount")));
            echo "
    <span class=\"error required\">";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "amount", array()), 'errors');
            echo "</span>
</div>

</div>




<div class=\"col-sm-4\">

<div class=\"form-group\">
<label></label>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\"><i class=\"fa fa-floppy-o\"></i> &nbsp; Submit </button> 
 </div>

 </div>

</div>
";
            // line 53
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
            echo "


<div class=\"row justify-content-md-center\">
<div class=\"col-sm-6\">

<div class=\"table-responsive\">
<table class=\"table table-hover no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Invoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Amount</th>
<th class=\"text-center\">Balance</th>
</tr>
</thead>

<tbody>

";
            // line 72
            $context["counter"] = 1;
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paidamount"]) || array_key_exists("paidamount", $context) ? $context["paidamount"] : (function () { throw new Twig_Error_Runtime('Variable "paidamount" does not exist.', 73, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 74
                echo "
<tr>
<td class=\"text-center\"> ";
                // line 76
                echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new Twig_Error_Runtime('Variable "counter" does not exist.', 76, $this->source); })()), "html", null, true);
                echo " </td>
<td class=\"text-center\"> ";
                // line 77
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "paiddate", array()), "d-m-Y"), "html", null, true);
                echo " </td>
<td class=\"text-right\"> ";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", array()), "html", null, true);
                echo "</td>
<td class=\"text-right\">";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "balance", array()), "html", null, true);
                echo "</td>
</tr>


";
                // line 83
                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new Twig_Error_Runtime('Variable "counter" does not exist.', 83, $this->source); })()) + 1);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "
</tbody>
</table>
</div>
</div>
</div>

";
        }
        // line 93
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
        return ":pinvoice:pinvoiceamount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 93,  183 => 85,  177 => 83,  170 => 79,  166 => 78,  162 => 77,  158 => 76,  154 => 74,  150 => 73,  148 => 72,  126 => 53,  105 => 35,  101 => 34,  90 => 26,  86 => 25,  74 => 16,  68 => 13,  64 => 11,  62 => 10,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}
{% block content %}

<div class=\"padding-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
</div>


{% if pinvoiceamt > 0 %}

  <div class=\"bg-white table-bg\">
   {{ include('site/_flash_messages.html.twig')}}
  <h2></h2>

 {{ form_start(form, {'method': 'post', 'attr': {'class': 'form-horizontal', 'novalidate': 'novalidate' }}) }}  


<div class=\"row\">
<div class=\"col-sm-2\">
</div>
<div class=\"col-sm-3\">

<div class=\"form-group\">
{{ form_widget(form.paiddate, {'attr': {'class': 'form-control', 'placeholder':'Paid Date'} }) }}
    <span class=\"error required\">{{ form_errors(form.paiddate) }}</span>
</div>

</div>

<div class=\"col-sm-3\">

<div class=\"form-group\">
{{ form_widget(form.amount, {'attr': {'class': 'form-control', 'placeholder':'Paid Amount'} }) }}
    <span class=\"error required\">{{ form_errors(form.amount) }}</span>
</div>

</div>




<div class=\"col-sm-4\">

<div class=\"form-group\">
<label></label>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\"><i class=\"fa fa-floppy-o\"></i> &nbsp; Submit </button> 
 </div>

 </div>

</div>
{{ form_end(form) }}


<div class=\"row justify-content-md-center\">
<div class=\"col-sm-6\">

<div class=\"table-responsive\">
<table class=\"table table-hover no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Invoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Amount</th>
<th class=\"text-center\">Balance</th>
</tr>
</thead>

<tbody>

{% set counter = 1 %}
{% for item in paidamount %}

<tr>
<td class=\"text-center\"> {{ counter }} </td>
<td class=\"text-center\"> {{ item.paiddate|date('d-m-Y') }} </td>
<td class=\"text-right\"> {{ item.amount }}</td>
<td class=\"text-right\">{{ item.balance }}</td>
</tr>


{% set counter = counter + 1 %}
{% endfor %}

</tbody>
</table>
</div>
</div>
</div>

{% endif %}


    </div>
  </div>
</div>

{% endblock %}", ":pinvoice:pinvoiceamount.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/pinvoice/pinvoiceamount.html.twig");
    }
}
