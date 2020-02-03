<?php

/* :invoice:invoiceview.html.twig */
class __TwigTemplate_8a2a9efb4dfac81938b7a6a83cac7a14e699adef3bf203135e4c3f76fc4d9834 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "invoicenumber", array()), "html", null, true);
        echo "</b></div>
</td>
<td class=\"bl-none\">
<div style=\"padding-left:5px\">Dated<br>
<b>";
        // line 251
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "invoicedate", array()), "d-M-Y"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "invoicedate", array()), "+15 day"), "d-M-Y"), "html", null, true);
        echo "</b>
    <br>
    </div>
  </td>
 </tr>

<tr>
  <td rowspan=\"2\" colspan=\"4\" class=\"br-none\">
  <div style=\"padding-left:5px\"> Buyer<br><b>";
        // line 271
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "company", array()), "html", null, true);
        echo "</b><br>
";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "address1", array()), "html", null, true);
        echo ",<br/>
";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "address2", array()), "html", null, true);
        echo ",<br/> 
";
        // line 274
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "city", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "pincode", array()), "html", null, true);
        echo " CELL ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "mobile", array()), "html", null, true);
        echo "<br> 
GSTIN/UIN: ";
        // line 275
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "gstin", array()), "html", null, true);
        echo "<br> 
State Name: ";
        // line 276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "state", array()), "state", array()), "html", null, true);
        echo ", Code: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "state", array()), "statecode", array()), "html", null, true);
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
            $context["totalquantity"] = (($context["totalquantity"] ?? null) + twig_get_attribute($this->env, $this->source, $context["item"], "quantity", array()));
            // line 350
            echo "
<tr>
  

  <td class=\"amountboth\">
    <div style=\"padding-left:5px\">";
            // line 355
            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
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
            $context["counter"] = (($context["counter"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "subtotal", array()), 2, ".", ","), "html", null, true);
        echo "</div>
  </td>
</tr>

";
        // line 426
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "igst", array()) == 0)) {
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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "cgst", array()), 2, ".", ","), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "sgst", array()), 2, ".", ","), "html", null, true);
            echo "</div>
  </td>
</tr>


";
            // line 477
            if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "cashdiscount", array()) > 0)) {
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
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "cashdiscount", array()) + twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "grandtotal", array()), 2, ".", ",")), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "cashdiscount", array()), 2, ".", ","), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "igst", array()), 2, ".", ","), "html", null, true);
            echo "</div>
  </td>
</tr>

";
            // line 556
            if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "cashdiscount", array()) > 0)) {
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
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "cashdiscount", array()) + twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "grandtotal", array()), 2, ".", ",")), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "cashdiscount", array()), 2, ".", ","), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["totalquantity"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "grandtotal", array()), 2, ".", ","), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["inwords"] ?? null), "html", null, true);
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
        return array (  670 => 658,  639 => 630,  628 => 622,  610 => 606,  601 => 600,  575 => 577,  553 => 557,  551 => 556,  544 => 552,  517 => 527,  508 => 521,  482 => 498,  460 => 478,  458 => 477,  450 => 472,  422 => 447,  400 => 427,  398 => 426,  391 => 422,  364 => 397,  358 => 395,  351 => 391,  344 => 387,  337 => 383,  330 => 379,  321 => 375,  312 => 371,  305 => 367,  298 => 363,  291 => 359,  284 => 355,  277 => 350,  275 => 349,  271 => 348,  269 => 347,  267 => 346,  192 => 276,  188 => 275,  180 => 274,  176 => 273,  172 => 272,  168 => 271,  157 => 263,  142 => 251,  135 => 247,  105 => 219,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":invoice:invoiceview.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/invoice/invoiceview.html.twig");
    }
}
