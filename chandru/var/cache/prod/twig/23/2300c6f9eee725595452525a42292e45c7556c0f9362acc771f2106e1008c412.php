<?php

/* FOSCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_c32d7e633508e4c4b03d46f0b38cb5f8747d5e55847b00cbf7390e8cc9555f53 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
            'ckeditor_javascript' => array($this, 'block_ckeditor_javascript'),
            '_ckeditor_javascript' => array($this, 'block__ckeditor_javascript'),
            'ckeditor_widget_extra' => array($this, 'block_ckeditor_widget_extra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('ckeditor_javascript', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_ckeditor_javascript', $context, $blocks);
    }

    // line 1
    public function block_ckeditor_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if ((($context["enable"] ?? null) &&  !($context["async"] ?? null))) {
            // line 5
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
    }

    // line 9
    public function block_ckeditor_javascript($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if ((($context["enable"] ?? null) && ($context["async"] ?? null))) {
            // line 11
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
    }

    // line 15
    public function block__ckeditor_javascript($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        if (($context["autoload"] ?? null)) {
            // line 17
            echo "        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"";
            // line 18
            echo $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderBasePath(($context["base_path"] ?? null));
            echo "\";
        </script>
        <script type=\"text/javascript\" src=\"";
            // line 20
            echo $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderJsPath(($context["js_path"] ?? null));
            echo "\"></script>
        ";
            // line 21
            if (($context["jquery"] ?? null)) {
                // line 22
                echo "            <script type=\"text/javascript\" src=\"";
                echo $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderJsPath(($context["jquery_path"] ?? null));
                echo "\"></script>
        ";
            }
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <script type=\"text/javascript\">
        ";
        // line 26
        if (($context["jquery"] ?? null)) {
            // line 27
            echo "            \$(function () {
        ";
        }
        // line 29
        echo "
        ";
        // line 30
        if (($context["require_js"] ?? null)) {
            // line 31
            echo "            require(['ckeditor'], function() {
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        echo $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderDestroy(($context["id"] ?? null));
        echo "

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? null));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
            // line 37
            echo "            ";
            echo $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderPlugin($context["plugin_name"], $context["plugin"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
            // line 41
            echo "            ";
            echo $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderStylesSet($context["style_name"], $context["style"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
            // line 45
            echo "            ";
            echo $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderTemplate($context["template_name"], $context["template"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('ckeditor_widget_extra', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        echo $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderWidget(($context["id"] ?? null), ($context["config"] ?? null), array("auto_inline" =>         // line 51
($context["auto_inline"] ?? null), "inline" =>         // line 52
($context["inline"] ?? null), "input_sync" =>         // line 53
($context["input_sync"] ?? null), "filebrowsers" =>         // line 54
($context["filebrowsers"] ?? null)));
        // line 55
        echo "

        ";
        // line 57
        if (($context["require_js"] ?? null)) {
            // line 58
            echo "            });
        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if (($context["jquery"] ?? null)) {
            // line 62
            echo "            });
        ";
        }
        // line 64
        echo "    </script>
";
    }

    // line 48
    public function block_ckeditor_widget_extra($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  214 => 48,  209 => 64,  205 => 62,  203 => 61,  200 => 60,  196 => 58,  194 => 57,  190 => 55,  188 => 54,  187 => 53,  186 => 52,  185 => 51,  184 => 50,  181 => 49,  179 => 48,  176 => 47,  167 => 45,  163 => 44,  160 => 43,  151 => 41,  147 => 40,  144 => 39,  135 => 37,  131 => 36,  126 => 34,  123 => 33,  119 => 31,  117 => 30,  114 => 29,  110 => 27,  108 => 26,  105 => 25,  102 => 24,  96 => 22,  94 => 21,  90 => 20,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  68 => 11,  65 => 10,  62 => 9,  54 => 5,  52 => 4,  44 => 2,  41 => 1,  37 => 15,  34 => 14,  32 => 9,  29 => 8,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSCKEditorBundle:Form:ckeditor_widget.html.twig", "/opt/bitnami/apache2/htdocs/chandru/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
