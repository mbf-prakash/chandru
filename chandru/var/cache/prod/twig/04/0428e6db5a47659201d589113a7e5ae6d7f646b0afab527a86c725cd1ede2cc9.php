<?php

/* adminbase.html.twig */
class __TwigTemplate_4b416c801d16828c82982539a08870f1c36633e2e1b04723397c6d1d4349728e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<head>
\t<title>Admin</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, intial-scale-1\">
\t<meta name=\"description\" content=\"Admin\">
\t<meta name=\"kewords\" content=\"keywords1, keywords2 | Admin\">
\t<!-- css starts here -->
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/adminstyle.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/mm-vertical.css"), "html", null, true);
        echo "\">
  \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/datepicker.css"), "html", null, true);
        echo "\">
\t<!-- css ends here -->
\t<!-- font link starts here -->
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
\t<!-- font link ends here -->
\t</head>
<body>


<!-- menu starts here -->


<div id=\"main\">
 <nav class=\"navbar navbar-expand-sm head-top\">
\t<div class=\"container-fluid \">

  <div class=\"col-sm-2\">
  <ul class=\"paddleft-0\">
    <li class=\"list-inline-item\"><h1>Chandru Stationary</h1></li>
    
  </ul>
</div>

<div class=\"col-sm-8 text-right\">

    
  <ul class=\"navbar-nav\" id=\"menu\">

    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">Dashboard</a> 
    </li>

    
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice");
        echo "\">Sales</a>
    </li>

    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pinvoice");
        echo "\">Purchase</a>
    </li>

    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer");
        echo "\">Customers</a>
    </li>

    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supplier");
        echo "\">Suppliers</a>
    </li>

     <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchaselog");
        echo "\">Purchase Logs</a>
    </li>

     <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("expanses");
        echo "\">Expenses</a>
    </li>

    


     <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle dropbtn\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
        Settings
      </a>
      <div class=\"dropdown-menu dropdown-content\">
        <a class=\"dropdown-item nav-link\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category");
        echo "\">Product Category</a>
        <a class=\"dropdown-item nav-link\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        echo "\">Products</a>
        <a class=\"dropdown-item nav-link\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unit");
        echo "\">Unit</a>
         <a class=\"dropdown-item nav-link\" href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("state");
        echo "\">State</a>
        

      </div>
    </li>

    
     <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle dropbtn\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
        Reports
      </a>
      <div class=\"dropdown-menu dropdown-content\">
        <a class=\"dropdown-item nav-link\" href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salebymonth");
        echo "\">Sale by Month</a>
        <a class=\"dropdown-item nav-link\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salebyyear");
        echo "\">Sale by Year</a>
        <a class=\"dropdown-item nav-link\" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchasebymonth");
        echo "\">Purchase by Month</a>
         <a class=\"dropdown-item nav-link\" href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchasebyyear");
        echo "\">Purchase by Year</a>
         <a class=\"dropdown-item nav-link\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("expensesbymonth");
        echo "\">Expenses by Month</a>
         <a class=\"dropdown-item nav-link\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("saleitems");
        echo "\">Sales Items</a>
         <a class=\"dropdown-item nav-link\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchaseitems");
        echo "\">Purchase Items</a>
        

      </div>
    </li>





</ul>
</li>




  </ul>



    <div class=\"dropdown-menu\">
       <a class=\"dropdown-item\" href=\"changepassword\"><i class=\"fa fa-unlock-alt logicon-color\" aria-hidden=\"true\"></i> &nbsp Change Password</a>
      <a class=\"dropdown-item\" href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out logicon-color\" aria-hidden=\"true\"></i> &nbspLog Out</a>
     
    </div>
</div>
<div class=\"col-sm-2 text-right log-out\">
  <div class=\"dropdown\">
    <a class=\"dropdown btn\" data-toggle=\"dropdown\">
      <i class=\"fa fa-ellipsis-v text-white margintop-13\" aria-hidden=\"true\"></i>
    </a>
    <div class=\"dropdown-menu\">
       <a class=\"dropdown-item\" href=\"changepassword\"><i class=\"fa fa-unlock-alt logicon-color\" aria-hidden=\"true\"></i> &nbsp Change Password</a>
      <a class=\"dropdown-item\" href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out logicon-color\" aria-hidden=\"true\"></i> &nbspLog Out</a>
   </div>
  </div>
</div>

</div>
</nav>

<!-- menu ends here -->
<!-- Application / Dashboard starts here -->
\t<div class=\"container-fluid\">
    ";
        // line 143
        $this->displayBlock('content', $context, $blocks);
        // line 146
        echo "\t</div>
<!-- Application / Dashboard ends here -->
</div>

";
        // line 150
        $this->displayBlock('javascripts', $context, $blocks);
        // line 163
        echo "\t</body>
\t</html>
";
    }

    // line 143
    public function block_content($context, array $blocks = array())
    {
        // line 144
        echo "
    ";
    }

    // line 150
    public function block_javascripts($context, array $blocks = array())
    {
        // line 151
        echo "\t<!-- script starts here -->
<script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
  
<!-- menu script starts here -->


<!-- menu script ends here -->
<script type=\"text/javascript\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/js-datepicker.js"), "html", null, true);
        echo "\"></script>
<!-- script ends here -->
";
    }

    public function getTemplateName()
    {
        return "adminbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 160,  268 => 152,  265 => 151,  262 => 150,  257 => 144,  254 => 143,  248 => 163,  246 => 150,  240 => 146,  238 => 143,  224 => 132,  210 => 121,  185 => 99,  181 => 98,  177 => 97,  173 => 96,  169 => 95,  165 => 94,  161 => 93,  146 => 81,  142 => 80,  138 => 79,  134 => 78,  120 => 67,  113 => 63,  106 => 59,  99 => 55,  92 => 51,  85 => 47,  77 => 42,  45 => 13,  41 => 12,  37 => 11,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "adminbase.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/adminbase.html.twig");
    }
}
