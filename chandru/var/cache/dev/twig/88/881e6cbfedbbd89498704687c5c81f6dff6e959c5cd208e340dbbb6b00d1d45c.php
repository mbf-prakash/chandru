<?php

/* :dashboard:index.html.twig */
class __TwigTemplate_ea9a538e5db33a4da63b9d79d33465d9fbeaca1ec48e3a27eb717260d02a9de5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":dashboard:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dashboard:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dashboard:index.html.twig"));

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


\t
\t\t\t
\t

<section id=\"content-wrapper\">
<div class=\"container-fluid padding-20\">
<div class=\"row\">

<div class=\"col-sm-3\">
<div class=\"application blue\">
<div class=\"text-right text-white likes\">
";
        // line 18
        $context["totalsalesamount"] = 0;
        // line 19
        $context["counter"] = 1;
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sales"]) || array_key_exists("sales", $context) ? $context["sales"] : (function () { throw new Twig_Error_Runtime('Variable "sales" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            $context["totalsalesamount"] = ((isset($context["totalsalesamount"]) || array_key_exists("totalsalesamount", $context) ? $context["totalsalesamount"] : (function () { throw new Twig_Error_Runtime('Variable "totalsalesamount" does not exist.', 21, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()));
            // line 22
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new Twig_Error_Runtime('Variable "counter" does not exist.', 22, $this->source); })()) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salebymonth");
        echo "\">
<h2><i class=\"fa fa-inr\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["totalsalesamount"]) || array_key_exists("totalsalesamount", $context) ? $context["totalsalesamount"] : (function () { throw new Twig_Error_Runtime('Variable "totalsalesamount" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t\t\t\t<h5>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["monthyear"]) || array_key_exists("monthyear", $context) ? $context["monthyear"] : (function () { throw new Twig_Error_Runtime('Variable "monthyear" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " Sales</h5> </a>
</div>
  <i class=\"fa fa-line-chart fontsize-30 app-icon\" aria-hidden=\"true\"></i>   


</div>
</div>



<div class=\"col-sm-3\">


<div class=\"application vilate\">
<div class=\"text-right text-white likes\">
";
        // line 41
        $context["totalpurchaseamount"] = 0;
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new Twig_Error_Runtime('Variable "purchase" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            $context["totalpurchaseamount"] = ((isset($context["totalpurchaseamount"]) || array_key_exists("totalpurchaseamount", $context) ? $context["totalpurchaseamount"] : (function () { throw new Twig_Error_Runtime('Variable "totalpurchaseamount" does not exist.', 43, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchasebymonth");
        echo "\">
<h2><i class=\"fa fa-inr\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["totalpurchaseamount"]) || array_key_exists("totalpurchaseamount", $context) ? $context["totalpurchaseamount"] : (function () { throw new Twig_Error_Runtime('Variable "totalpurchaseamount" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t\t\t\t<h5>";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["monthyear"]) || array_key_exists("monthyear", $context) ? $context["monthyear"] : (function () { throw new Twig_Error_Runtime('Variable "monthyear" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " Purchase</h5>
          </a>
</div>
  <i class=\"fa fa-area-chart fontsize-30 app-icon\" aria-hidden=\"true\"></i>   


</div>
</div>




<div class=\"col-sm-3\">


<div class=\"application blue1\">
<div class=\"text-right text-white likes\">
<h2><i class=\"fa fa-inr\"></i> ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["upamount"]) || array_key_exists("upamount", $context) ? $context["upamount"] : (function () { throw new Twig_Error_Runtime('Variable "upamount" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "</h2>
<h5>Sales UnPaid</h5>
</div>
  <i class=\"fa fa-file-text-o fontsize-30 app-icon\" aria-hidden=\"true\"></i>   
</div>
</div>


<div class=\"col-sm-3\">

<div class=\"application d-green\">
<div class=\"text-right text-white likes\">
<h2><i class=\"fa fa-inr\"></i> ";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["pupamount"]) || array_key_exists("pupamount", $context) ? $context["pupamount"] : (function () { throw new Twig_Error_Runtime('Variable "pupamount" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " </h2>
\t\t\t\t\t<h5>Purchase UnPaid</h5>
</div>
  <i class=\"fa fa-book fontsize-30 app-icon\" aria-hidden=\"true\"></i>   


</div>
</div>




</div>
</div>
</section>



<section id=\"sales\" class=\"margintop-20\">
<div class=\"container-fluid\">
<div class=\"row\">

<div class=\"col-sm-6\">
<div class=\"bg-white padding-10 border\">
<h5 class=\"page-title text-center\">";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["monthyear"]) || array_key_exists("monthyear", $context) ? $context["monthyear"] : (function () { throw new Twig_Error_Runtime('Variable "monthyear" does not exist.', 100, $this->source); })()), "html", null, true);
        echo " Sales</h5>


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
        // line 117
        $context["totalsalesamount"] = 0;
        // line 118
        $context["counter"] = 1;
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sales"]) || array_key_exists("sales", $context) ? $context["sales"] : (function () { throw new Twig_Error_Runtime('Variable "sales" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 120
            $context["totalsalesamount"] = ((isset($context["totalsalesamount"]) || array_key_exists("totalsalesamount", $context) ? $context["totalsalesamount"] : (function () { throw new Twig_Error_Runtime('Variable "totalsalesamount" does not exist.', 120, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()));
            // line 121
            echo "
<tr>
<td class=\"text-center\"> ";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicenumber", array()), "html", null, true);
            echo "</td>
<td class=\"text-center\"> ";
            // line 124
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicedate", array()), "d-m-Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "company", array()), "html", null, true);
            echo "</td>
<td class=\"text-right\"><span>";
            // line 126
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "status", array()) == true)) {
                echo " Paid ";
            } else {
                echo " UnPaid ";
            }
            echo "</span> </td>
<td class=\"text-right\"><span>";
            // line 127
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()), 2, ".", ","), "html", null, true);
            echo "</span></td>
</tr>


";
            // line 131
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new Twig_Error_Runtime('Variable "counter" does not exist.', 131, $this->source); })()) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
<tr>
<th class=\"text-right\" colspan=\"4\">Total Amount</th>
<th class=\"text-right\">";
        // line 136
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalsalesamount"]) || array_key_exists("totalsalesamount", $context) ? $context["totalsalesamount"] : (function () { throw new Twig_Error_Runtime('Variable "totalsalesamount" does not exist.', 136, $this->source); })()), 2, ".", ","), "html", null, true);
        echo "</th>
</tr>


</tbody>
</table>
</div>

</div>
</div>



<div class=\"col-sm-6\">
<div class=\"bg-white padding-10 border\">
<h5 class=\"page-title text-center\">";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["monthyear"]) || array_key_exists("monthyear", $context) ? $context["monthyear"] : (function () { throw new Twig_Error_Runtime('Variable "monthyear" does not exist.', 151, $this->source); })()), "html", null, true);
        echo " Purchase</h5>


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
        // line 169
        $context["totalpurchaseamount"] = 0;
        // line 170
        $context["counter"] = 1;
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new Twig_Error_Runtime('Variable "purchase" does not exist.', 171, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 172
            $context["totalpurchaseamount"] = ((isset($context["totalpurchaseamount"]) || array_key_exists("totalpurchaseamount", $context) ? $context["totalpurchaseamount"] : (function () { throw new Twig_Error_Runtime('Variable "totalpurchaseamount" does not exist.', 172, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()));
            // line 173
            echo "
<tr>
<td class=\"text-center\"> ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicenumber", array()), "html", null, true);
            echo "</td>
<td class=\"text-center\"> ";
            // line 176
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicedate", array()), "d-m-Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "supplier", array()), "supplier", array()), "html", null, true);
            echo "</td>
<td class=\"text-right\"><span>";
            // line 178
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "status", array()) == true)) {
                echo " Paid ";
            } else {
                echo " UnPaid ";
            }
            echo "</span> </td>
<td class=\"text-right\"><span>";
            // line 179
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()), 2, ".", ","), "html", null, true);
            echo "</span></td>
</tr>


";
            // line 183
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new Twig_Error_Runtime('Variable "counter" does not exist.', 183, $this->source); })()) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "
<tr>
<th class=\"text-right\" colspan=\"4\">Total Amount</th>
<th class=\"text-right\">";
        // line 188
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalpurchaseamount"]) || array_key_exists("totalpurchaseamount", $context) ? $context["totalpurchaseamount"] : (function () { throw new Twig_Error_Runtime('Variable "totalpurchaseamount" does not exist.', 188, $this->source); })()), 2, ".", ","), "html", null, true);
        echo "</th>
</tr>

</table>
</div>
</div>
<div class=\"clearfix\"></div>



</div>
</div>
</div>
</section>


<p>&nbsp; <br><br></p>


<section id=\"sales\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-sm-12\">

";
        // line 212
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Dashboard:spchart"));
        echo " 


</div>


</div>
</div>
</section>






<p>&nbsp; <br><br></p>


<section id=\"sales\">
<div class=\"container-fluid\">
<div class=\"row\">

<div class=\"col-sm-12\">
<div class=\"bg-white border marginbot-20 padding-10\">

<h5 class=\"page-title text-center\">UnPaid Bills in Sales</h5>

<div class=\"table-responsive\">
<table class=\"table no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Invoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Customer</th>
<th class=\"text-center\">Mobile</th>
<th class=\"text-center\">Total Amount</th>
<th class=\"text-center\">Balance Amount</th>
</tr>
</thead>
<tbody>

";
        // line 253
        $context["counter"] = 1;
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sales"]) || array_key_exists("sales", $context) ? $context["sales"] : (function () { throw new Twig_Error_Runtime('Variable "sales" does not exist.', 254, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 255
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "status", array()) == 0)) {
                // line 256
                echo "

<tr>
<td class=\"text-center\"> ";
                // line 259
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicenumber", array()), "html", null, true);
                echo " </td>
<td class=\"text-center\"> ";
                // line 260
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicedate", array()), "d-m-Y"), "html", null, true);
                echo " </td>
<td> ";
                // line 261
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "company", array()), "html", null, true);
                echo "</td>
<td>";
                // line 262
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "mobile", array()), "html", null, true);
                echo "</td>
<td class=\"text-right\"><span>";
                // line 263
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()), 2, ".", ","), "html", null, true);
                echo "</span></td>
<td class=\"text-right\"><span>";
                // line 264
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "balance", array()), 2, ".", ","), "html", null, true);
                echo "</span></td>
</tr>


";
                // line 268
                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new Twig_Error_Runtime('Variable "counter" does not exist.', 268, $this->source); })()) + 1);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "

<tr>
<th class=\"text-right\" colspan=\"5\">Total Unpaid</th>
<th class=\"text-right\">";
        // line 275
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["upamount"]) || array_key_exists("upamount", $context) ? $context["upamount"] : (function () { throw new Twig_Error_Runtime('Variable "upamount" does not exist.', 275, $this->source); })()), 2, ".", ","), "html", null, true);
        echo "</th>
</tr>

</tbody>
</table>
</div>

</div>
</div>

<div class=\"col-sm-12\">
<div class=\"bg-white border marginbot-20 padding-10\">

<h5 class=\"page-title text-center\">UnPaid Bills in Purchase</h5>

<div class=\"table-responsive\">
<table class=\"table no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Pinvoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Supplier</th>
<th class=\"text-center\">Total Amount</th>
<th class=\"text-center\">Balance Amount</th>
</tr>
</thead>
<tbody>

";
        // line 303
        $context["counter"] = 1;
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new Twig_Error_Runtime('Variable "purchase" does not exist.', 304, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 305
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "status", array()) == 0)) {
                // line 306
                echo "

<tr>
<td class=\"text-center\"> ";
                // line 309
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicenumber", array()), "html", null, true);
                echo " </td>
<td class=\"text-center\"> ";
                // line 310
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicedate", array()), "d-m-Y"), "html", null, true);
                echo " </td>
<td> ";
                // line 311
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "supplier", array()), "supplier", array()), "html", null, true);
                echo "</td>
<td class=\"text-right\"><span>";
                // line 312
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()), 2, ".", ","), "html", null, true);
                echo "</span></td>
<td class=\"text-right\"><span>";
                // line 313
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "balance", array()), 2, ".", ","), "html", null, true);
                echo "</span></td>
</tr>


";
                // line 317
                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new Twig_Error_Runtime('Variable "counter" does not exist.', 317, $this->source); })()) + 1);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        echo "

<tr>
<th class=\"text-right\" colspan=\"4\">Total Unpaid</th>
<th class=\"text-right\">";
        // line 324
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["pupamount"]) || array_key_exists("pupamount", $context) ? $context["pupamount"] : (function () { throw new Twig_Error_Runtime('Variable "pupamount" does not exist.', 324, $this->source); })()), 2, ".", ","), "html", null, true);
        echo "</th>
</tr>

</tbody>
</table>
</div>

</div>



</div>
</div>
</section>


\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 324,  557 => 320,  550 => 317,  543 => 313,  539 => 312,  535 => 311,  531 => 310,  527 => 309,  522 => 306,  520 => 305,  516 => 304,  514 => 303,  483 => 275,  477 => 271,  470 => 268,  463 => 264,  459 => 263,  455 => 262,  451 => 261,  447 => 260,  443 => 259,  438 => 256,  436 => 255,  432 => 254,  430 => 253,  386 => 212,  359 => 188,  354 => 185,  348 => 183,  341 => 179,  333 => 178,  329 => 177,  325 => 176,  321 => 175,  317 => 173,  315 => 172,  311 => 171,  309 => 170,  307 => 169,  286 => 151,  268 => 136,  263 => 133,  257 => 131,  250 => 127,  242 => 126,  238 => 125,  234 => 124,  230 => 123,  226 => 121,  224 => 120,  220 => 119,  218 => 118,  216 => 117,  196 => 100,  169 => 76,  154 => 64,  134 => 47,  130 => 46,  125 => 45,  119 => 43,  115 => 42,  113 => 41,  95 => 26,  91 => 25,  86 => 24,  80 => 22,  78 => 21,  74 => 20,  72 => 19,  70 => 18,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}
{% block content %}

<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>


\t
\t\t\t
\t

<section id=\"content-wrapper\">
<div class=\"container-fluid padding-20\">
<div class=\"row\">

<div class=\"col-sm-3\">
<div class=\"application blue\">
<div class=\"text-right text-white likes\">
{% set totalsalesamount = 0 %}
{% set counter = 1 %}
{% for item in sales %}
{% set totalsalesamount = totalsalesamount + item.grandtotal %}
{% set counter = counter + 1 %}
{% endfor %}
<a href=\"{{ path('salebymonth') }}\">
<h2><i class=\"fa fa-inr\"></i> {{ totalsalesamount }}</h2>
\t\t\t\t\t<h5>{{ monthyear }} Sales</h5> </a>
</div>
  <i class=\"fa fa-line-chart fontsize-30 app-icon\" aria-hidden=\"true\"></i>   


</div>
</div>



<div class=\"col-sm-3\">


<div class=\"application vilate\">
<div class=\"text-right text-white likes\">
{% set totalpurchaseamount = 0 %}
{% for item in purchase %}
{% set totalpurchaseamount = totalpurchaseamount + item.grandtotal %}
{% endfor %}
<a href=\"{{ path('purchasebymonth') }}\">
<h2><i class=\"fa fa-inr\"></i> {{ totalpurchaseamount }}</h2>
\t\t\t\t\t<h5>{{ monthyear }} Purchase</h5>
          </a>
</div>
  <i class=\"fa fa-area-chart fontsize-30 app-icon\" aria-hidden=\"true\"></i>   


</div>
</div>




<div class=\"col-sm-3\">


<div class=\"application blue1\">
<div class=\"text-right text-white likes\">
<h2><i class=\"fa fa-inr\"></i> {{ upamount }}</h2>
<h5>Sales UnPaid</h5>
</div>
  <i class=\"fa fa-file-text-o fontsize-30 app-icon\" aria-hidden=\"true\"></i>   
</div>
</div>


<div class=\"col-sm-3\">

<div class=\"application d-green\">
<div class=\"text-right text-white likes\">
<h2><i class=\"fa fa-inr\"></i> {{ pupamount }} </h2>
\t\t\t\t\t<h5>Purchase UnPaid</h5>
</div>
  <i class=\"fa fa-book fontsize-30 app-icon\" aria-hidden=\"true\"></i>   


</div>
</div>




</div>
</div>
</section>



<section id=\"sales\" class=\"margintop-20\">
<div class=\"container-fluid\">
<div class=\"row\">

<div class=\"col-sm-6\">
<div class=\"bg-white padding-10 border\">
<h5 class=\"page-title text-center\">{{ monthyear }} Sales</h5>


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



<div class=\"col-sm-6\">
<div class=\"bg-white padding-10 border\">
<h5 class=\"page-title text-center\">{{ monthyear }} Purchase</h5>


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
</div>
</div>
</section>


<p>&nbsp; <br><br></p>


<section id=\"sales\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-sm-12\">

{{ render(controller('AppBundle:Dashboard:spchart')) }} 


</div>


</div>
</div>
</section>






<p>&nbsp; <br><br></p>


<section id=\"sales\">
<div class=\"container-fluid\">
<div class=\"row\">

<div class=\"col-sm-12\">
<div class=\"bg-white border marginbot-20 padding-10\">

<h5 class=\"page-title text-center\">UnPaid Bills in Sales</h5>

<div class=\"table-responsive\">
<table class=\"table no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Invoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Customer</th>
<th class=\"text-center\">Mobile</th>
<th class=\"text-center\">Total Amount</th>
<th class=\"text-center\">Balance Amount</th>
</tr>
</thead>
<tbody>

{% set counter = 1 %}
{% for item in sales %}
{% if item.status == 0 %}


<tr>
<td class=\"text-center\"> {{ item.invoicenumber }} </td>
<td class=\"text-center\"> {{ item.invoicedate|date('d-m-Y') }} </td>
<td> {{ item.company }}</td>
<td>{{ item.mobile }}</td>
<td class=\"text-right\"><span>{{ item.grandtotal|number_format(2, '.', ',') }}</span></td>
<td class=\"text-right\"><span>{{ item.balance|number_format(2, '.', ',') }}</span></td>
</tr>


{% set counter = counter + 1 %}
{% endif %}
{% endfor %}


<tr>
<th class=\"text-right\" colspan=\"5\">Total Unpaid</th>
<th class=\"text-right\">{{ upamount|number_format(2, '.', ',') }}</th>
</tr>

</tbody>
</table>
</div>

</div>
</div>

<div class=\"col-sm-12\">
<div class=\"bg-white border marginbot-20 padding-10\">

<h5 class=\"page-title text-center\">UnPaid Bills in Purchase</h5>

<div class=\"table-responsive\">
<table class=\"table no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Pinvoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Supplier</th>
<th class=\"text-center\">Total Amount</th>
<th class=\"text-center\">Balance Amount</th>
</tr>
</thead>
<tbody>

{% set counter = 1 %}
{% for item in purchase %}
{% if item.status == 0 %}


<tr>
<td class=\"text-center\"> {{ item.invoicenumber }} </td>
<td class=\"text-center\"> {{ item.invoicedate|date('d-m-Y') }} </td>
<td> {{ item.supplier.supplier }}</td>
<td class=\"text-right\"><span>{{ item.grandtotal|number_format(2, '.', ',') }}</span></td>
<td class=\"text-right\"><span>{{ item.balance|number_format(2, '.', ',') }}</span></td>
</tr>


{% set counter = counter + 1 %}
{% endif %}
{% endfor %}


<tr>
<th class=\"text-right\" colspan=\"4\">Total Unpaid</th>
<th class=\"text-right\">{{ pupamount|number_format(2, '.', ',') }}</th>
</tr>

</tbody>
</table>
</div>

</div>



</div>
</div>
</section>


\t

{% endblock %}

", ":dashboard:index.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/dashboard/index.html.twig");
    }
}
