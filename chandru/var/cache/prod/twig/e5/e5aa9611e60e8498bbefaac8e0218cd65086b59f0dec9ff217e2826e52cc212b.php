<?php

/* :category:editcategory.html.twig */
class __TwigTemplate_b0421ab0c331e35f2d8ec9378de09cad75fa71d1117e72eeb0ecbc83c6e2efe2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":category:editcategory.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo " 

<div class=\"padding-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
</div>
  <div class=\"bg-white table-bg\">
  <h2>Edit Category</h2>
 
 ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("novalidate" => "novalidate")));
        echo " 
 

  <div class=\"form-group\">
  <label>Category<span class=\"error\">*</span></label>
  ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", array()), 'errors');
        echo "</span>
 
  </div>

  <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-floppy-o\"></i> Save Changes</button>
  <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category");
        echo "\" class=\"btn btn-secondary\"><i class=\"fa fa-ban\" aria-hidden=\"true\"></i> Cancel</a>
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
    </div>
    </div>

 ";
    }

    public function getTemplateName()
    {
        return ":category:editcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  65 => 23,  57 => 18,  53 => 17,  45 => 12,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":category:editcategory.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/category/editcategory.html.twig");
    }
}
