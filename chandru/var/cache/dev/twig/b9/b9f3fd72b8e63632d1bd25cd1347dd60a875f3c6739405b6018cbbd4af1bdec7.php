<?php

/* :invoice:invoiceview.html.twig */
class __TwigTemplate_f7a68a0badc92181c9ccd3e4a5b6451415119ba32e6a01dba947c5bff427b13c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":invoice:invoiceview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":invoice:invoiceview.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<title>Invoice</title>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
</head>
<style type=\"text/css\">
body
{
font-family: 'Roboto Slab', serif;
font-size: 12px;
letter-spacing: 1px;
/*overflow-y: hidden !important;
*/overflow-x: hidden !important;
}
h1
{

margin: 15px 0px 0px 0px;
padding: 21px 0px 20px 0px;
font-size: 20px;
}

.center {
    text-align: center !important;
}
.text{
  text-decoration: underline !important;
}
.right {
    text-align: right !important;
}
#invoice th, #invoice td{
  border: 0px solid #dddddd !important;
}
.line{
  border-bottom: 2px solid #000;
  width: 100px;
  margin-top: 25px;
}
.form1 td, .form1 th {
    border-left: 1px solid #000;
    border-right: 1px solid #000;
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;
    text-align: left;
    padding: 1px;
    height: 5px !important;
}
table{
    border-collapse: collapse;
    width:100%;
}
#invoice th, #invoice td{
  border: none !important;
}

.amountbottop{
  border-bottom: none !important;
    border-right: none !important;
}
.amountleft{
  border-left: none !important;
}
.amounttop{
    border-top: none !important;
}
.amountboth{
  border-bottom: none !important;
  border-top: none !important;
}
.amountright{
      border-right: none !important;
}




";
        // line 219
        echo "</style>
<body>
<div style=\"margin-bottom:100px;\">
<h1 style=\"text-align:center\">Tax Invoice</h1>





<table class=\"form1\">
<tr>

  <td rowspan=\"2\" colspan=\"4\" class=\"br-none\">
   <div style=\"padding-left:5px\">
    <b>CHANDRU STATIONERY SUPPLIER</b><br>
      GROUND FLOOR 1, 4.,PILLAYAR KOIL FIRST STREET,<br>
   
   LAKSHMIPURAM, CHROMPET,<br>
   CHENNAI - 600044,CELL: 7708521432.<br>
   GSTIN/UIN: 33BCSPN4963N1ZR<br> 
   State Name: Tamil Nadu, Code: 33.<br>
   <br><br>
    </div>
  </td>

<td class=\"bl-none\">
<div style=\"padding-left:5px\">
Invoice No. <br>
<b> ";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 247, $this->source); })()), "invoicenumber", array()), "html", null, true);
        echo "</b></div>
</td>
<td class=\"bl-none\">
<div style=\"padding-left:5px\">Dated<br>
<b>";
        // line 251
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 251, $this->source); })()), "invoicedate", array()), "d-M-Y"), "html", null, true);
        echo "</b>
</div>
</td>

</tr>
<tr>
  <td>
    <div style=\"padding-left:5px\">Suppiler's Ref.</div><br>
    <br>
  </td>
   <td>
    <div style=\"padding-left:5px\">Credit Date<br>
    <b>";
        // line 263
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 263, $this->source); })()), "invoicedate", array()), "+15 day"), "d-M-Y"), "html", null, true);
        echo "</b>
    <br>
    </div>
  </td>
 </tr>

<tr>
  <td rowspan=\"2\" colspan=\"4\" class=\"br-none\">
  <div style=\"padding-left:5px\"> Buyer<br><b>";
        // line 271
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 271, $this->source); })()), "company", array()), "html", null, true);
        echo "</b><br>
";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 272, $this->source); })()), "address1", array()), "html", null, true);
        echo ",<br/>
";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 273, $this->source); })()), "address2", array()), "html", null, true);
        echo ",<br/> 
";
        // line 274
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 274, $this->source); })()), "city", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 274, $this->source); })()), "pincode", array()), "html", null, true);
        echo " CELL ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 274, $this->source); })()), "mobile", array()), "html", null, true);
        echo "<br> 
GSTIN/UIN: ";
        // line 275
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 275, $this->source); })()), "gstin", array()), "html", null, true);
        echo "<br> 
State Name: ";
        // line 276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 276, $this->source); })()), "state", array()), "state", array()), "html", null, true);
        echo ", Code: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 276, $this->source); })()), "state", array()), "statecode", array()), "html", null, true);
        echo "<br>  </div>
</td>

  <td class=\"bl-none\">
    <div style=\"padding-left:5px\">Buyer's Order No.</div><br><br>
</td>
<td class=\"bl-none\">
<div style=\"padding-left:5px\">Dated</div><br><br>
</td>
</tr>
<tr>
  <td rowspan=\"2\" class=\"amountright\">
   <br>
    <br>
  </td>
   <td rowspan=\"2\" class=\"amountleft\">
    <br>
    <br>
  </td>
 </tr>


</table>




<table class=\"form1 .minheight\">

<tr>
<td>
 <div style=\"padding-left:5px\"> Sl.No</div>
</td>
<td>
 <div style=\"padding-left:5px\"> Description of Goods</div>
</td>

<td>
  <div style=\"padding-left:5px\">HSN/SAC</div>
</td>

<td>
 <div style=\"padding-left:5px\">GST Rate</div>
</td>

<td>
  <div style=\"padding-left:5px\">MRP/Marginal</div>
</td>

<td>
  <div style=\"padding-left:5px\">Quantity</div>
</td>

<td>
  <div style=\"padding-left:5px\">Rate</div>
</td>

<td>
 <div style=\"padding-left:5px\"> per</div>
</td>

<td>
  <div style=\"padding-left:5px\">Disc%</div>
</td>

<td>
 <div style=\"padding-left:5px\">Amount</div>
</td>


";
        // line 346
        $context["totalquantity"] = 0;
        // line 347
        $context["counter"] = 1;
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["item"]);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 349
            $context["totalquantity"] = ((isset($context["totalquantity"]) || array_key_exists("totalquantity", $context) ? $context["totalquantity"] : (function () { throw new Twig_Error_Runtime('Variable "totalquantity" does not exist.', 349, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["item"], "quantity", array()));
            // line 350
            echo "
<tr>
  

  <td class=\"amountboth\">
    <div style=\"padding-left:5px\">";
            // line 355
            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new Twig_Error_Runtime('Variable "counter" does not exist.', 355, $this->source); })()), "html", null, true);
            echo "</div>
  </td>

  <td class=\"amountboth\">
   <div style=\"padding-left:5px\"> <b>";
            // line 359
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product", array()), "html", null, true);
            echo "</b></div>
  </td>

    <td class=\"amountboth\">
    <div style=\"padding-left:5px\">";
            // line 363
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "hssncode", array()), "html", null, true);
            echo "</div>
  </td>

  <td class=\"amountboth\">
   <div style=\"padding-left:5px\">";
            // line 367
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "gst", array()), "html", null, true);
            echo "</div>
  </td>

    <td class=\"amountboth\">
    <div style=\"padding-left:5px\">";
            // line 371
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "mrp", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "unit", array()), "unit", array()), "html", null, true);
            echo "</div>
  </td>

    <td class=\"amountboth\">
   <div style=\"padding-left:5px\"><b>";
            // line 375
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "unit", array()), "unit", array()), "html", null, true);
            echo "</b></div>
  </td>

    <td class=\"amountboth\">
    <div style=\"padding-right:5px;text-align:right\">";
            // line 379
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "rate", array()), "html", null, true);
            echo "</div>
  </td>

    <td class=\"amountboth\">
    <div style=\"padding-left:5px\">";
            // line 383
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "unit", array()), "unit", array()), "html", null, true);
            echo "</div>
  </td>

    <td class=\"amountboth\">
    <div style=\"padding-left:5px\">";
            // line 387
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "discount", array()), "html", null, true);
            echo "</div>
  </td>

    <td class=\"amountboth left\">
   <div style=\"padding-right:5px;text-align:right\"><b>";
            // line 391
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", array()), 2, ".", ","), "html", null, true);
            echo "</b></div>
  </td>

   </tr>
";
            // line 395
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new Twig_Error_Runtime('Variable "counter" does not exist.', 395, $this->source); })()) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        echo "




<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left\">
    <div style=\"padding-right:5px;text-align:right\">";
        // line 422
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 422, $this->source); })()), "subtotal", array()), 2, ".", ","), "html", null, true);
        echo "</div>
  </td>
</tr>

";
        // line 426
        if ((twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 426, $this->source); })()), "igst", array()) == 0)) {
            // line 427
            echo "<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"right amountboth\"><div style=\"padding-right:5px\">CGST</div>
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left amountboth\">
  <div style=\"padding-right:5px;text-align:right\">";
            // line 447
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 447, $this->source); })()), "cgst", array()), 2, ".", ","), "html", null, true);
            echo "</div>
  </td>
</tr>


<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"right amountboth\"><div style=\"padding-right:5px\">SGST</div>
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left amountboth\">
  <div style=\"padding-right:5px;text-align:right\">";
            // line 472
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 472, $this->source); })()), "sgst", array()), 2, ".", ","), "html", null, true);
            echo "</div>
  </td>
</tr>


";
            // line 477
            if ((twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 477, $this->source); })()), "cashdiscount", array()) > 0)) {
                // line 478
                echo "<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"right amountboth\"><div style=\"padding-right:5px\">Sub Total</div>
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left\">
  <div style=\"padding-right:5px;text-align:right\">";
                // line 498
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 498, $this->source); })()), "cashdiscount", array()) + twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 498, $this->source); })()), "grandtotal", array()), 2, ".", ",")), "html", null, true);
                echo "</div>
  </td>
</tr>
<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"right amountboth\"><div style=\"padding-right:5px\">Cash Discount</div>
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left amountboth\">
  <div style=\"padding-right:5px;text-align:right\">";
                // line 521
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 521, $this->source); })()), "cashdiscount", array()), 2, ".", ","), "html", null, true);
                echo "</div>
  </td>
</tr>

";
            }
        } else {
            // line 527
            echo "




<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"right amountboth\"><div style=\"padding-right:5px\">IGST</div>
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left amountboth\">
  <div style=\"padding-right:5px;text-align:right\">";
            // line 552
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 552, $this->source); })()), "igst", array()), 2, ".", ","), "html", null, true);
            echo "</div>
  </td>
</tr>

";
            // line 556
            if ((twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 556, $this->source); })()), "cashdiscount", array()) > 0)) {
                // line 557
                echo "<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"right amountboth\"><div style=\"padding-right:5px\">Sub Total</div>
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left\">
  <div style=\"padding-right:5px;text-align:right\">";
                // line 577
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 577, $this->source); })()), "cashdiscount", array()) + twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 577, $this->source); })()), "grandtotal", array()), 2, ".", ",")), "html", null, true);
                echo "</div>
  </td>
</tr>
<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"right amountboth\"><div style=\"padding-right:5px\">Cash Discount</div>
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left amountboth\">
  <div style=\"padding-right:5px;text-align:right\">";
                // line 600
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 600, $this->source); })()), "cashdiscount", array()), 2, ".", ","), "html", null, true);
                echo "</div>
  </td>
</tr>

";
            }
        }
        // line 606
        echo "




<tr>
  <td>
  </td>
 <td class=\"right\"><div style=\"padding-right:5px\">Total (Round Off)</div>
  </td>
  <td>
  </td>
  <td>
  </td>
  <td>
  </td>
  <td class=\"left\"><div style=\"padding-left:5px\"><b>";
        // line 622
        echo twig_escape_filter($this->env, (isset($context["totalquantity"]) || array_key_exists("totalquantity", $context) ? $context["totalquantity"] : (function () { throw new Twig_Error_Runtime('Variable "totalquantity" does not exist.', 622, $this->source); })()), "html", null, true);
        echo "PCS</b></div>
    </td>
  <td>
  </td>
  <td>
  </td>
  <td>
  </td>
  <td class=\"left\"><div style=\"padding-left:5px\"><div style=\"padding-right:5px;text-align:right\"><b>";
        // line 630
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new Twig_Error_Runtime('Variable "invoice" does not exist.', 630, $this->source); })()), "grandtotal", array()), 2, ".", ","), "html", null, true);
        echo "</b></div></div>
  </td>
</tr>

</tr>
</table>


















<table class=\"form1\">
<tr>
<td rowspan=\"2\" colspan=\"4\" class=\"br-none amountbottop\">
<div style=\"padding-left:5px\">Amount Chargeable (in words)<br><br>
<b>";
        // line 658
        echo twig_escape_filter($this->env, (isset($context["inwords"]) || array_key_exists("inwords", $context) ? $context["inwords"] : (function () { throw new Twig_Error_Runtime('Variable "inwords" does not exist.', 658, $this->source); })()), "html", null, true);
        echo " Only</b><br></div>
</td>
<td class=\"bl-none right amountleft\"><div style=\"padding-right:5px\">E & O.E<br>
<br><br><br><br></div></td>


</tr>
<tr>
 
 
 </tr>

<tr>
  <td rowspan=\"2\" colspan=\"4\" class=\"br-none amounttop\" >
  <div style=\"padding-left:5px\">
    <p class=\"text\">Declaration </p><br>
    We declare that this invoice shows the<br>
    actual price of the goods described and that all particulars are true and correct.<br><br></div>
  </td>

  <td rowspan=\"2\" class=\"bl-none right\">
    <div style=\"padding-right:5px\">for Chandru Stationary<br><br><br><br>
     Authorised Signatory</div>
</td>

</tr>



</table>





<div style=\"margin-bottom:100px;\">
<h1 style=\"text-align:center\">This is a Computer Generated Invoice</h1>


</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":invoice:invoiceview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 658,  645 => 630,  634 => 622,  616 => 606,  607 => 600,  581 => 577,  559 => 557,  557 => 556,  550 => 552,  523 => 527,  514 => 521,  488 => 498,  466 => 478,  464 => 477,  456 => 472,  428 => 447,  406 => 427,  404 => 426,  397 => 422,  370 => 397,  364 => 395,  357 => 391,  350 => 387,  343 => 383,  336 => 379,  327 => 375,  318 => 371,  311 => 367,  304 => 363,  297 => 359,  290 => 355,  283 => 350,  281 => 349,  277 => 348,  275 => 347,  273 => 346,  198 => 276,  194 => 275,  186 => 274,  182 => 273,  178 => 272,  174 => 271,  163 => 263,  148 => 251,  141 => 247,  111 => 219,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
<title>Invoice</title>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
</head>
<style type=\"text/css\">
body
{
font-family: 'Roboto Slab', serif;
font-size: 12px;
letter-spacing: 1px;
/*overflow-y: hidden !important;
*/overflow-x: hidden !important;
}
h1
{

margin: 15px 0px 0px 0px;
padding: 21px 0px 20px 0px;
font-size: 20px;
}

.center {
    text-align: center !important;
}
.text{
  text-decoration: underline !important;
}
.right {
    text-align: right !important;
}
#invoice th, #invoice td{
  border: 0px solid #dddddd !important;
}
.line{
  border-bottom: 2px solid #000;
  width: 100px;
  margin-top: 25px;
}
.form1 td, .form1 th {
    border-left: 1px solid #000;
    border-right: 1px solid #000;
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;
    text-align: left;
    padding: 1px;
    height: 5px !important;
}
table{
    border-collapse: collapse;
    width:100%;
}
#invoice th, #invoice td{
  border: none !important;
}

.amountbottop{
  border-bottom: none !important;
    border-right: none !important;
}
.amountleft{
  border-left: none !important;
}
.amounttop{
    border-top: none !important;
}
.amountboth{
  border-bottom: none !important;
  border-top: none !important;
}
.amountright{
      border-right: none !important;
}




{# h2
{
    text-align: center;
    font-size: 28px;
}
.width
{
width: 780px;
border:1px solid #ccc;
}
.logo a
{
padding-left:29%;
}
.heading
{
background-color: #f2f2f2;
text-align: left;
}
table tr td 
{
padding: 8px;
line-height: 1.42857143;
vertical-align: top;
border:1px solid #ddd;
}
.address tr td
{
border:none;
}
table
{
width: 100%;
border-collapse: collapse;
}
table th
{
text-align: left;
border:1px solid #ddd;
padding-left: 9px;
}
.billto th
{
border:none;
}
.header
{
width: 800px;
margin: 0px auto;
}
.customeraddress
{
padding-left: 27px;
width: 50%;
}
.datecontent
{
text-align: right;
}


td .br-left{
  border-left: : none !important;
}
td .br-right{
   border-right: : none !important;
 }

.invoiceheading
{
font-weight: bold;
text-align: center; 
font-size: 24px;
}
.total
{
width: 446px;
}
.amount
{
width: 100%;
}
.amount td
{
line-height: 26px;
text-align: right;
}
.footerdivision
{
width: 530px;
}
.description th
{
background: #484242;
color: #fff;
padding: 10px 0px 10px 10px;
}
.descriptiontitle
{
text-align: center;
}
.alignment
{
text-align: right;
}
.alignright
{
text-align: right;
}
.alignleft
{
text-align: left;
}
.minheight
{
    min-height: 590px !important;
}
.customeraddress h3
{
margin-bottom: -23px;   
}
.form1 .bl-none{
   border-bottom: 0px solid black;
        border-top: 0px solid black;
}









.footeraddress p
{
font-size: 14px !important;
} #}
</style>
<body>
<div style=\"margin-bottom:100px;\">
<h1 style=\"text-align:center\">Tax Invoice</h1>





<table class=\"form1\">
<tr>

  <td rowspan=\"2\" colspan=\"4\" class=\"br-none\">
   <div style=\"padding-left:5px\">
    <b>CHANDRU STATIONERY SUPPLIER</b><br>
      GROUND FLOOR 1, 4.,PILLAYAR KOIL FIRST STREET,<br>
   
   LAKSHMIPURAM, CHROMPET,<br>
   CHENNAI - 600044,CELL: 7708521432.<br>
   GSTIN/UIN: 33BCSPN4963N1ZR<br> 
   State Name: Tamil Nadu, Code: 33.<br>
   <br><br>
    </div>
  </td>

<td class=\"bl-none\">
<div style=\"padding-left:5px\">
Invoice No. <br>
<b> {{ invoice.invoicenumber }}</b></div>
</td>
<td class=\"bl-none\">
<div style=\"padding-left:5px\">Dated<br>
<b>{{ invoice.invoicedate|date(\"d-M-Y\") }}</b>
</div>
</td>

</tr>
<tr>
  <td>
    <div style=\"padding-left:5px\">Suppiler's Ref.</div><br>
    <br>
  </td>
   <td>
    <div style=\"padding-left:5px\">Credit Date<br>
    <b>{{ invoice.invoicedate|date_modify(\"+15 day\")|date(\"d-M-Y\") }}</b>
    <br>
    </div>
  </td>
 </tr>

<tr>
  <td rowspan=\"2\" colspan=\"4\" class=\"br-none\">
  <div style=\"padding-left:5px\"> Buyer<br><b>{{ customer.company }}</b><br>
{{ customer.address1 }},<br/>
{{ customer.address2 }},<br/> 
{{ customer.city }} - {{ customer.pincode }} CELL {{ customer.mobile }}<br> 
GSTIN/UIN: {{ customer.gstin }}<br> 
State Name: {{ customer.state.state }}, Code: {{ customer.state.statecode }}<br>  </div>
</td>

  <td class=\"bl-none\">
    <div style=\"padding-left:5px\">Buyer's Order No.</div><br><br>
</td>
<td class=\"bl-none\">
<div style=\"padding-left:5px\">Dated</div><br><br>
</td>
</tr>
<tr>
  <td rowspan=\"2\" class=\"amountright\">
   <br>
    <br>
  </td>
   <td rowspan=\"2\" class=\"amountleft\">
    <br>
    <br>
  </td>
 </tr>


</table>




<table class=\"form1 .minheight\">

<tr>
<td>
 <div style=\"padding-left:5px\"> Sl.No</div>
</td>
<td>
 <div style=\"padding-left:5px\"> Description of Goods</div>
</td>

<td>
  <div style=\"padding-left:5px\">HSN/SAC</div>
</td>

<td>
 <div style=\"padding-left:5px\">GST Rate</div>
</td>

<td>
  <div style=\"padding-left:5px\">MRP/Marginal</div>
</td>

<td>
  <div style=\"padding-left:5px\">Quantity</div>
</td>

<td>
  <div style=\"padding-left:5px\">Rate</div>
</td>

<td>
 <div style=\"padding-left:5px\"> per</div>
</td>

<td>
  <div style=\"padding-left:5px\">Disc%</div>
</td>

<td>
 <div style=\"padding-left:5px\">Amount</div>
</td>


{% set totalquantity = 0 %}
{% set counter = 1 %}
{% for item in item %}
{% set totalquantity = totalquantity + item.quantity %}

<tr>
  

  <td class=\"amountboth\">
    <div style=\"padding-left:5px\">{{ counter }}</div>
  </td>

  <td class=\"amountboth\">
   <div style=\"padding-left:5px\"> <b>{{ item.product }}</b></div>
  </td>

    <td class=\"amountboth\">
    <div style=\"padding-left:5px\">{{ item.hssncode }}</div>
  </td>

  <td class=\"amountboth\">
   <div style=\"padding-left:5px\">{{ item.gst }}</div>
  </td>

    <td class=\"amountboth\">
    <div style=\"padding-left:5px\">{{ item.mrp }} / {{ item.unit.unit }}</div>
  </td>

    <td class=\"amountboth\">
   <div style=\"padding-left:5px\"><b>{{ item.quantity }} {{ item.unit.unit }}</b></div>
  </td>

    <td class=\"amountboth\">
    <div style=\"padding-right:5px;text-align:right\">{{ item.rate }}</div>
  </td>

    <td class=\"amountboth\">
    <div style=\"padding-left:5px\">{{ item.unit.unit }}</div>
  </td>

    <td class=\"amountboth\">
    <div style=\"padding-left:5px\">{{ item.discount }}</div>
  </td>

    <td class=\"amountboth left\">
   <div style=\"padding-right:5px;text-align:right\"><b>{{ item.amount|number_format(2, '.', ',') }}</b></div>
  </td>

   </tr>
{% set counter = counter + 1 %}
{% endfor %}





<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left\">
    <div style=\"padding-right:5px;text-align:right\">{{ invoice.subtotal|number_format(2, '.', ',') }}</div>
  </td>
</tr>

{% if invoice.igst == 0 %}
<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"right amountboth\"><div style=\"padding-right:5px\">CGST</div>
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left amountboth\">
  <div style=\"padding-right:5px;text-align:right\">{{ invoice.cgst|number_format(2, '.', ',') }}</div>
  </td>
</tr>


<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"right amountboth\"><div style=\"padding-right:5px\">SGST</div>
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left amountboth\">
  <div style=\"padding-right:5px;text-align:right\">{{ invoice.sgst|number_format(2, '.', ',') }}</div>
  </td>
</tr>


{% if invoice.cashdiscount > 0 %}
<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"right amountboth\"><div style=\"padding-right:5px\">Sub Total</div>
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left\">
  <div style=\"padding-right:5px;text-align:right\">{{ invoice.cashdiscount + invoice.grandtotal|number_format(2, '.', ',') }}</div>
  </td>
</tr>
<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"right amountboth\"><div style=\"padding-right:5px\">Cash Discount</div>
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left amountboth\">
  <div style=\"padding-right:5px;text-align:right\">{{ invoice.cashdiscount|number_format(2, '.', ',') }}</div>
  </td>
</tr>

{% endif %}
{% else %}





<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"right amountboth\"><div style=\"padding-right:5px\">IGST</div>
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left amountboth\">
  <div style=\"padding-right:5px;text-align:right\">{{ invoice.igst|number_format(2, '.', ',') }}</div>
  </td>
</tr>

{% if invoice.cashdiscount > 0 %}
<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"right amountboth\"><div style=\"padding-right:5px\">Sub Total</div>
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left\">
  <div style=\"padding-right:5px;text-align:right\">{{ invoice.cashdiscount + invoice.grandtotal|number_format(2, '.', ',') }}</div>
  </td>
</tr>
<tr>
  <td class=\"amountboth\">
  </td>
  <td class=\"right amountboth\"><div style=\"padding-right:5px\">Cash Discount</div>
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td class=\"amountboth\">
  </td>
  <td  class=\"left amountboth\">
  <div style=\"padding-right:5px;text-align:right\">{{ invoice.cashdiscount|number_format(2, '.', ',') }}</div>
  </td>
</tr>

{% endif %}
{% endif %}





<tr>
  <td>
  </td>
 <td class=\"right\"><div style=\"padding-right:5px\">Total (Round Off)</div>
  </td>
  <td>
  </td>
  <td>
  </td>
  <td>
  </td>
  <td class=\"left\"><div style=\"padding-left:5px\"><b>{{ totalquantity }}PCS</b></div>
    </td>
  <td>
  </td>
  <td>
  </td>
  <td>
  </td>
  <td class=\"left\"><div style=\"padding-left:5px\"><div style=\"padding-right:5px;text-align:right\"><b>{{ invoice.grandtotal|number_format(2, '.', ',') }}</b></div></div>
  </td>
</tr>

</tr>
</table>


















<table class=\"form1\">
<tr>
<td rowspan=\"2\" colspan=\"4\" class=\"br-none amountbottop\">
<div style=\"padding-left:5px\">Amount Chargeable (in words)<br><br>
<b>{{ inwords }} Only</b><br></div>
</td>
<td class=\"bl-none right amountleft\"><div style=\"padding-right:5px\">E & O.E<br>
<br><br><br><br></div></td>


</tr>
<tr>
 
 
 </tr>

<tr>
  <td rowspan=\"2\" colspan=\"4\" class=\"br-none amounttop\" >
  <div style=\"padding-left:5px\">
    <p class=\"text\">Declaration </p><br>
    We declare that this invoice shows the<br>
    actual price of the goods described and that all particulars are true and correct.<br><br></div>
  </td>

  <td rowspan=\"2\" class=\"bl-none right\">
    <div style=\"padding-right:5px\">for Chandru Stationary<br><br><br><br>
     Authorised Signatory</div>
</td>

</tr>



</table>





<div style=\"margin-bottom:100px;\">
<h1 style=\"text-align:center\">This is a Computer Generated Invoice</h1>


</div>
</body>
</html>", ":invoice:invoiceview.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/invoice/invoiceview.html.twig");
    }
}
