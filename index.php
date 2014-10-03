<?php defined( '_JEXEC' ) or die( 'Restricted access' );

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

// Adjusting content width
if ($this->countModules('left') && $this->countModules('right'))
{
  $span = "span6";
}
elseif ($this->countModules('left') && !$this->countModules('right'))
{
  $span = "span9";
}
elseif (!$this->countModules('left') && $this->countModules('right'))
{
  $span = "span9";
}
else
{
  $span = "span12";
}

?>

<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
  <head>
    <jdoc:include type="head" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/asIAMtemplate/css/bootstrap.css" type="text/css" />

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php echo $this->baseurl ?>"><?php echo $sitename; ?></a>
          <div class="nav-collapse collapse">
            <jdoc:include type="modules" name="navbar" style="none" />
            <jdoc:include type="modules" name="navbar-pull-right" style="none" />
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container-fluid main-banner">
      <!-- images in this container must include the class main-banner-img -->
      <jdoc:include type="modules" name="banner" />
    </div>
    <div id="main-content-section">
      <div class="container">
        <div class="row">
          <?php if ($this->countModules('left')) : ?>
            <div class="span3 left-mod">
              <jdoc:include type="modules" name="left" />
            </div>
          <?php endif; ?>
          <div class="<?php echo $span; ?>">
            <jdoc:include type="modules" name="top" />
            <jdoc:include type="component" />
            <jdoc:include type="modules" name="bottom" />
          </div>
          <?php if ($this->countModules('right')) : ?>
            <div class="span3 right-mod">
              <jdoc:include type="modules" name="right" />
            </div>
          <?php endif; ?>
        </div>
      </div> <!-- /container -->
    </div>

    <!-- Footer -->
    <footer class="footer" role="contentinfo">
      <div class="container">
        <jdoc:include type="modules" name="footer" style="none" />
        <p class="pull-right text-right">&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?></p>
        <p>Design by Brenton Klassen</p>
      </div>
    </footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php JHtml::_('bootstrap.framework'); ?>
    <script src="<?php echo $this->baseurl ?>/templates/asIAMtemplate/js/customjs.js" type="text/javascript">
    </script>
    
  </body>
</html>
