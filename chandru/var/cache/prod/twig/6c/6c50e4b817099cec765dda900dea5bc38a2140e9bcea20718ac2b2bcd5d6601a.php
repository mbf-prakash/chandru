<?php

/* :purchaselog:index.html.twig */
class __TwigTemplate_51b7f6e0c87261734ad0a10f156d10d740ef5dd88238852e3522f033759ac225 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":purchaselog:index.html.twig", 1);
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

<div class=\"padding-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
</div>
  <div class=\"bg-white table-bg\">
 
  <div class=\"row\">
  <div class=\"col-sm-6\">
    <h2>Purchase log</h2>
    </div>
     <div class=\"col-sm-6 text-right\">
   
    </div>
    </div>
    ";
        // line 22
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid($this->env, ($context["grid"] ?? null));
        echo "
";
        // line 23
        $this->displayBlock('grid_filters', $context, $blocks);
        // line 24
        echo "  </div>
  </div>
</div>
<!-- table ends here -->

 ";
    }

    // line 23
    public function block_grid_filters($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":purchaselog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  61 => 24,  59 => 23,  55 => 22,  36 => 5,  33 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":purchaselog:index.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/purchaselog/index.html.twig");
    }
}
