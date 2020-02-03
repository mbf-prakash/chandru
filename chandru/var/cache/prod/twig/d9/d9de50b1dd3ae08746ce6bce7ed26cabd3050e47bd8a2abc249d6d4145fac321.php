<?php

/* :product:index.html.twig */
class __TwigTemplate_57bef5157b2d5134b3cf672d6749f7aa2a5e74f5e1143e4bd8a5172460fa3b0e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":product:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'grid_filters' => array($this, 'block_grid_filters'),
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<!-- table starts here -->

<div class=\"paddtopbottom-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
<p><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">Dashboard</a>  / Product</p>
</div>
  <div class=\"bg-white table-bg\">
  ";
        // line 14
        echo twig_include($this->env, $context, "site/_flash_messages.html.twig");
        echo "
  <div class=\"row\">
  <div class=\"col-sm-6\">
    <h2>Product</h2>
    </div>
     <div class=\"col-sm-6 text-right\">
    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addproduct");
        echo "\" class=\"btn btn-success add-btn\"><i class=\"fa fa-plus add-icon\" aria-hidden=\"true\"></i> Add New</a>
    </div>
    </div>
    ";
        // line 23
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid($this->env, ($context["grid"] ?? null));
        echo "
";
        // line 24
        $this->displayBlock('grid_filters', $context, $blocks);
        // line 25
        echo "  </div>
  </div>
</div>
<!-- table ends here -->

 ";
    }

    // line 24
    public function block_grid_filters($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  71 => 25,  69 => 24,  65 => 23,  59 => 20,  50 => 14,  44 => 11,  36 => 5,  33 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":product:index.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/product/index.html.twig");
    }
}
