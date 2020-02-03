<?php

/* :state:index.html.twig */
class __TwigTemplate_3f367b473956d9d6767a9a5cc0d5b30a362497b97fa3fe063edeab618863d7e7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":state:index.html.twig", 1);
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
  ";
        // line 13
        echo twig_include($this->env, $context, "site/_flash_messages.html.twig");
        echo "
  <div class=\"row\">
  <div class=\"col-sm-6\">
    <h2>State</h2>
    </div>
     <div class=\"col-sm-6 text-right\">
    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addstate");
        echo "\" class=\"btn btn-success add-btn\"><i class=\"fa fa-plus add-icon\" aria-hidden=\"true\"></i> Add New</a>
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
        return ":state:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  67 => 24,  65 => 23,  61 => 22,  55 => 19,  46 => 13,  36 => 5,  33 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":state:index.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/state/index.html.twig");
    }
}
