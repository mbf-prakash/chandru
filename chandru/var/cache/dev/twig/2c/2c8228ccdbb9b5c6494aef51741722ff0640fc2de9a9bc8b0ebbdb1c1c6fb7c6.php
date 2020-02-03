<?php

/* :purchaseitems:purchaseitems.html.twig */
class __TwigTemplate_4793eef737565a2d6a2e2edc007bd987c3dc48e266db220313f8fe360acc2cea extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":purchaseitems:purchaseitems.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":purchaseitems:purchaseitems.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":purchaseitems:purchaseitems.html.twig"));

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



<div class=\"table-responsive\">
<table class=\"table table-hover no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Invoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Supplier Name</th>
<th class=\"text-center\">Product Name</th>
<th class=\"text-center\">Quantity</th>
<th class=\"text-center\">Amount</th>
</tr>
</thead>
<tbody>



";
        // line 29
        $context["totalinamount"] = 0;
        // line 30
        $context["counter"] = 1;
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pinvoiceitem"]) || array_key_exists("pinvoiceitem", $context) ? $context["pinvoiceitem"] : (function () { throw new Twig_Error_Runtime('Variable "pinvoiceitem" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            $context["totalinamount"] = ((isset($context["totalinamount"]) || array_key_exists("totalinamount", $context) ? $context["totalinamount"] : (function () { throw new Twig_Error_Runtime('Variable "totalinamount" does not exist.', 32, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["item"], "amount", array()));
            // line 33
            echo "
<tr>
<td class=\"text-center\"> ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "</td>
<td class=\"text-center\"> ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "pinvoice", array()), "invoicedate", array()), "d-m-Y"), "html", null, true);
            echo " </td>
<td class=\"text-center\"> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "pinvoice", array()), "supplier", array()), "supplier", array()), "html", null, true);
            echo "</td>
<td class=\"text-center\"> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product", array()), "html", null, true);
            echo "</td>
<td class=\"text-center\"> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", array()), "html", null, true);
            echo "</td>
<td class=\"text-right\"><span>";
            // line 40
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", array()), 2, ".", ","), "html", null, true);
            echo "</span></td>
</tr>


";
            // line 44
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new Twig_Error_Runtime('Variable "counter" does not exist.', 44, $this->source); })()) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
<tr>
<th class=\"text-right\" colspan=\"5\">Total Amount</th>
<th class=\"text-right\">";
        // line 49
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalinamount"]) || array_key_exists("totalinamount", $context) ? $context["totalinamount"] : (function () { throw new Twig_Error_Runtime('Variable "totalinamount" does not exist.', 49, $this->source); })()), 2, ".", ","), "html", null, true);
        echo "</th>
</tr>


</tbody>
</table>
</div>


<div class=\"row \">
<div class=\"col-sm-12 text-center\">

               ";
        // line 62
        echo "               <div class=\"navigation\">
               <ul class=\"p12\">
               <li>
               ";
        // line 65
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pinvoiceitem"]) || array_key_exists("pinvoiceitem", $context) ? $context["pinvoiceitem"] : (function () { throw new Twig_Error_Runtime('Variable "pinvoiceitem" does not exist.', 65, $this->source); })()));
        echo "
               </li>
               </ul>

               </div>
</div>
</div>



</div>
</div>
</div>


 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":purchaseitems:purchaseitems.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 65,  147 => 62,  132 => 49,  127 => 46,  121 => 44,  114 => 40,  110 => 39,  106 => 38,  102 => 37,  98 => 36,  94 => 35,  90 => 33,  88 => 32,  84 => 31,  82 => 30,  80 => 29,  44 => 3,  15 => 1,);
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



<div class=\"table-responsive\">
<table class=\"table table-hover no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Invoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Supplier Name</th>
<th class=\"text-center\">Product Name</th>
<th class=\"text-center\">Quantity</th>
<th class=\"text-center\">Amount</th>
</tr>
</thead>
<tbody>



{% set totalinamount = 0 %}
{% set counter = 1 %}
{% for item in pinvoiceitem %}
{% set totalinamount = totalinamount + item.amount %}

<tr>
<td class=\"text-center\"> {{ item.id }}</td>
<td class=\"text-center\"> {{ item.pinvoice.invoicedate|date('d-m-Y') }} </td>
<td class=\"text-center\"> {{ item.pinvoice.supplier.supplier }}</td>
<td class=\"text-center\"> {{ item.product }}</td>
<td class=\"text-center\"> {{ item.quantity }}</td>
<td class=\"text-right\"><span>{{ item.amount|number_format(2, '.', ',') }}</span></td>
</tr>


{% set counter = counter + 1 %}
{% endfor %}

<tr>
<th class=\"text-right\" colspan=\"5\">Total Amount</th>
<th class=\"text-right\">{{ totalinamount|number_format(2, '.', ',') }}</th>
</tr>


</tbody>
</table>
</div>


<div class=\"row \">
<div class=\"col-sm-12 text-center\">

               {# display navigation #}
               <div class=\"navigation\">
               <ul class=\"p12\">
               <li>
               {{ knp_pagination_render(pinvoiceitem) }}
               </li>
               </ul>

               </div>
</div>
</div>



</div>
</div>
</div>


 {% endblock %}", ":purchaseitems:purchaseitems.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/purchaseitems/purchaseitems.html.twig");
    }
}
