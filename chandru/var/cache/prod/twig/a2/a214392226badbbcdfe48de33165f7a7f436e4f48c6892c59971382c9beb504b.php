<?php

/* :customer:editcustomer.html.twig */
class __TwigTemplate_18531613de1b22a8ca9791feefee7b2f27a7fb199cfc1bf028ed84719eadfd46 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":customer:editcustomer.html.twig", 1);
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

<div class=\"padding-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
</div>
  <div class=\"bg-white table-bg\">
  <h2>Edit Customer</h2>

 ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "  

<div class=\"form-group\">
<label>Company<span class=\"required\">*</span></label>
";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Address1<span class=\"required\">*</span></label>
";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address1", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Address2</label>
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "   
</div>

<div class=\"form-group\">
<label>City<span class=\"required\">*</span></label>
";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Pincode<span class=\"required\">*</span></label>
";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pincode", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pincode", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Mobile<span class=\"required\">*</span></label>
";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mobile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mobile", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>GSTIN</label>
";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gstin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>



<div class=\"form-group\">
<label>State Name<span class=\"required\">*</span></label>
";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", array()), 'errors');
        echo "</span>
</div>


<div class=\"form-group\">
<label>Member Since<span class=\"required\">*</span></label>
";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "joineddate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "joineddate", array()), 'errors');
        echo "</span>
</div>



<div class=\"form-group\">
<label></label>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\"><i class=\"fa fa-floppy-o\"></i> &nbsp; Save </button> 
</div>
</div>
</div>



";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    </div>
  </div>
</div>
</section>

 ";
    }

    public function getTemplateName()
    {
        return ":customer:editcustomer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 80,  148 => 66,  144 => 65,  135 => 59,  131 => 58,  121 => 51,  113 => 46,  109 => 45,  101 => 40,  97 => 39,  89 => 34,  85 => 33,  77 => 28,  69 => 23,  65 => 22,  57 => 17,  53 => 16,  46 => 12,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":customer:editcustomer.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/customer/editcustomer.html.twig");
    }
}
