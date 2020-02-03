<?php

/* @FOSCKEditor/Form/_ckeditor_javascript.html.php */
class __TwigTemplate_0cd9a0a7e630f1918e4dd2a281bf04ce79b26dd6d1b3a4d9afca0a00ca6ba855 extends Twig_Template
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

use FOS\\CKEditorBundle\\Renderer\\CKEditorRendererInterface;

/*
 * @var CKEditorRendererInterface[] \$view
 * @var string \$id
 * @var string \$base_path
 * @var string \$js_path
 * @var string \$jquery_path
 * @var bool \$jquery
 * @var bool \$require_js
 * @var string[][] \$styles
 * @var string[][] \$plugins
 * @var string[][] \$templates
 * @var string \$auto_inline
 * @var string \$input_sync
 * @var string \$inline
 * @var string \$filebrowsers
 * @var array \$config
 */

@trigger_error(
    'The _ckeditor_javascript.html.php is deprecated since 1.x '.
    'and will be removed with the 2.0 release.',
    E_USER_DEPRECATED
);

?>
<?php if (\$autoload) : ?>
    <script type=\"text/javascript\">
        var CKEDITOR_BASEPATH = \"<?php echo \$view['fos_ckeditor']->renderBasePath(\$base_path); ?>\";
    </script>
    <script type=\"text/javascript\" src=\"<?php echo \$view['fos_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
    <?php if (\$jquery) : ?>
        <script type=\"text/javascript\" src=\"<?php echo \$view['fos_ckeditor']->renderJsPath(\$jquery_path); ?>\"></script>
    <?php endif; ?>
<?php endif; ?>
<script type=\"text/javascript\">
    <?php if (\$jquery) : ?>
        \$(function () {
    <?php endif; ?>

    <?php if (\$require_js) : ?>
        require(['ckeditor'], function() {
    <?php endif; ?>

    <?php echo \$view['fos_ckeditor']->renderDestroy(\$id); ?>

    <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
        <?php echo \$view['fos_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
    <?php endforeach; ?>

    <?php foreach (\$styles as \$styleName => \$style): ?>
        <?php echo \$view['fos_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
    <?php endforeach; ?>

    <?php foreach (\$templates as \$templateName => \$template): ?>
        <?php echo \$view['fos_ckeditor']->renderTemplate(\$templateName, \$template); ?>
    <?php endforeach; ?>

    <?php \$view['slots']->output('ckeditor_widget_extra', ''); ?>

    <?php echo \$view['fos_ckeditor']->renderWidget(
        \$id,
        \$config,
        [
            'auto_inline' => \$auto_inline,
            'inline' => \$inline,
            'input_sync' => \$input_sync,
            'filebrowsers' => \$filebrowsers,
        ]
    ); ?>

    <?php if (\$require_js) : ?>
        });
    <?php endif; ?>

    <?php if (\$jquery) : ?>
        });
    <?php endif; ?>
</script>
";
    }

    public function getTemplateName()
    {
        return "@FOSCKEditor/Form/_ckeditor_javascript.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSCKEditor/Form/_ckeditor_javascript.html.php", "/opt/bitnami/apache2/htdocs/chandru/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views/Form/_ckeditor_javascript.html.php");
    }
}
