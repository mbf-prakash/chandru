<?php

/* :emails:resetting.html.twig */
class __TwigTemplate_e19fd6d6b7b381947520ad68b8a07d4e5fc6c58be39df22f64596b2a35bcd587 extends Twig_Template
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
        echo "<div style=\"font-family:'Lucida Grande','Lucida Sans Unicode',Helvetica,Arial,Verdana,sans-serif;font-size:12px;background-color:#ffffff;color:#333333\">
\t<div style=\"width:100%;text-align:left\">
\t\t<div style=\"background-color:#ffffff;border:#e5e5e5 solid 1px\">
\t\t\t<div style=\"background-color:#f4f4f4;min-height:36px\">
\t\t\t\t<a href=\"http://www.radiosbook.com/\" target=\"_blank\">
\t\t\t\t\t<img src=\"http://www.srkitsolutions.com/images/logo.png\" style=\"margin:4px 0px 0px 10px; border:0px\" >
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div style=\"padding:10px;line-height:18px\">
\t\t 
\t\t\t\t
\t\t\t\t<div style=\"font-size:12px;padding:10px 0 0 0\">There is no reason to worry if you have forgotten your RadiosBook password. It happens to the best of us! Here is a simple one click solution for password reset</div>
\t\t\t\t
\t\t\t\t<div style=\"font-size:12px;padding:10px 0 0 0\">Click the link below to take you to the create a new password page. </div>

\t\t\t\t<div style=\"padding:10px 0px 0px 0px;word-wrap:break-word\">
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["confirmationUrl"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["confirmationUrl"] ?? null), "html", null, true);
        echo "</a>
                </div>

\t\t\t\t<div style=\"font-size:12px;padding:10px 0 0 0\">If you have not made any password reset request, it is likely that another user entered your email address by mistake and you can simply disregard this email.</div>

\t\t\t\t<div style=\"font-size:12px;padding:10px 0px 0px 0px\">Look forward to serving your business needs.</div>

\t\t\t\t<div style=\"font-size:12px;padding:10px 0 0 0;line-height:16px\">Thank you
\t\t\t\t<span style=\"color:#888888\"><br>RadiosBook Team<br> 
\t\t\t\t\t<a href=\"http://www.palea.org/\" style=\"color:#00f\" target=\"_blank\">http://www.radiosbook.com/</a>
\t\t\t\t</span></div>

\t\t\t\t
\t\t\t</div>

\t\t</div>

\t
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return ":emails:resetting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 18,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":emails:resetting.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/emails/resetting.html.twig");
    }
}
