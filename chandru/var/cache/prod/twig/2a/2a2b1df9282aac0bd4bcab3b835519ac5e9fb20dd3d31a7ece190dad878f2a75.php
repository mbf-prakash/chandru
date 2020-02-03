<?php

/* @FOSCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_8e0eaa1e5bfb13774a02acb6ecd42ff3aea4aa82bf12c8ac823260304fac5962 extends Twig_Template
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
        echo "<?php

/*
 * This file is part of the FOSCKEditor Bundle.
 *
 * (c) 2018 - present  Friends of Symfony
 * (c) 2009 - 2017     Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @var CKEditorRendererInterface|FormView[]
 * @var object                               \$form
 * @var string                               \$value
 * @var bool                                 \$enable
 * @var bool                                 \$async
 */
use FOS\\CKEditorBundle\\Renderer\\CKEditorRendererInterface;
use Symfony\\Component\\Form\\FormView;

@trigger_error(
    'The ckeditor_widget.html.php is deprecated since 1.x '.
    'and will be removed with the 2.0 release.',
    E_USER_DEPRECATED
);

?>
<textarea <?php echo \$view['form']->block(\$form, 'attributes'); ?>><?php echo htmlspecialchars(\$value); ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php'; ?>
<?php endif; ?>
";
    }

    public function getTemplateName()
    {
        return "@FOSCKEditor/Form/ckeditor_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSCKEditor/Form/ckeditor_widget.html.php", "/opt/bitnami/apache2/htdocs/chandru/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views/Form/ckeditor_widget.html.php");
    }
}
