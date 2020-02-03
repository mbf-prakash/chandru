<?php

/* :emails:resetting.email.twig */
class __TwigTemplate_f0d6d4436e2864b81c243b21838d396466b4daad2dee63861d9de60ab28b7f63 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        echo "Resetting your password for Radios Book account";
    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        // line 5
        echo "Hello ";
        echo twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array());
        echo " !

You can reset your password by accessing ";
        // line 7
        echo ($context["confirmationUrl"] ?? null);
        echo "

Greetings,
Radios Book Team
";
    }

    // line 14
    public function block_body_html($context, array $blocks = array())
    {
        // line 15
        $this->loadTemplate("emails/resetting.html.twig", ":emails:resetting.email.twig", 15)->display($context);
    }

    public function getTemplateName()
    {
        return ":emails:resetting.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  64 => 14,  55 => 7,  49 => 5,  46 => 3,  40 => 1,  36 => 14,  33 => 13,  31 => 3,  28 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":emails:resetting.email.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/emails/resetting.email.twig");
    }
}
