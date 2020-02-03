<?php

/* :dashboard:index.html.twig */
class __TwigTemplate_8d90cba93157f53e82336850d103127d75930fc5ab1e4c1f2f07868846c5c9de extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["sales"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            $context["totalsalesamount"] = (($context["totalsalesamount"] ?? null) + twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()));
            // line 22
            $context["counter"] = (($context["counter"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, ($context["totalsalesamount"] ?? null), "html", null, true);
        echo "</h2>
\t\t\t\t\t<h5>";
        // line 26
        echo twig_escape_filter($this->env, ($context["monthyear"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["purchase"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            $context["totalpurchaseamount"] = (($context["totalpurchaseamount"] ?? null) + twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()));
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
        echo twig_escape_filter($this->env, ($context["totalpurchaseamount"] ?? null), "html", null, true);
        echo "</h2>
\t\t\t\t\t<h5>";
        // line 47
        echo twig_escape_filter($this->env, ($context["monthyear"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["upamount"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["pupamount"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["monthyear"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["sales"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 120
            $context["totalsalesamount"] = (($context["totalsalesamount"] ?? null) + twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()));
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
            $context["counter"] = (($context["counter"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalsalesamount"] ?? null), 2, ".", ","), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["monthyear"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["purchase"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 172
            $context["totalpurchaseamount"] = (($context["totalpurchaseamount"] ?? null) + twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()));
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
            $context["counter"] = (($context["counter"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalpurchaseamount"] ?? null), 2, ".", ","), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["sales"] ?? null));
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
                $context["counter"] = (($context["counter"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["upamount"] ?? null), 2, ".", ","), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["purchase"] ?? null));
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
                $context["counter"] = (($context["counter"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["pupamount"] ?? null), 2, ".", ","), "html", null, true);
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
        return array (  545 => 324,  539 => 320,  532 => 317,  525 => 313,  521 => 312,  517 => 311,  513 => 310,  509 => 309,  504 => 306,  502 => 305,  498 => 304,  496 => 303,  465 => 275,  459 => 271,  452 => 268,  445 => 264,  441 => 263,  437 => 262,  433 => 261,  429 => 260,  425 => 259,  420 => 256,  418 => 255,  414 => 254,  412 => 253,  368 => 212,  341 => 188,  336 => 185,  330 => 183,  323 => 179,  315 => 178,  311 => 177,  307 => 176,  303 => 175,  299 => 173,  297 => 172,  293 => 171,  291 => 170,  289 => 169,  268 => 151,  250 => 136,  245 => 133,  239 => 131,  232 => 127,  224 => 126,  220 => 125,  216 => 124,  212 => 123,  208 => 121,  206 => 120,  202 => 119,  200 => 118,  198 => 117,  178 => 100,  151 => 76,  136 => 64,  116 => 47,  112 => 46,  107 => 45,  101 => 43,  97 => 42,  95 => 41,  77 => 26,  73 => 25,  68 => 24,  62 => 22,  60 => 21,  56 => 20,  54 => 19,  52 => 18,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":dashboard:index.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/dashboard/index.html.twig");
    }
}
