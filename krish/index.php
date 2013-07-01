<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.krish
 *
 * @copyright   Copyright (C) 2013 - 2021 ThemeParrot.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;
$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
	<?php JHtml::_('bootstrap.framework'); ?>
	
	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
	<![endif]-->
	
</head>
<body>
    <!-- header section starts -->
	  <section class="header"><!-- header starts here --> 
	    <div class="container"><!-- header container starts here -->
	      <div class="row"><!--header logo row starts here -->
	          <?php if($this->countModules('header-logo')): ?>
	        <div class="span12"><!-- header logo span starts here -->
	          <jdoc:include type="modules" name="header-logo" style="none" />
	        </div><!-- header logo span ends here -->
	      </div><!-- header logo row ends here -->
	          <?php endif; ?> 
		    <div class="span12"><!-- navigation span starts here -->
		    <center>
			  <?php if($this->countModules('navigation')): ?>
		     <div class="navbar">
		      
			   <jdoc:include type="modules" name="navigation" style="xhtml" />
		       <ul class="nav ">
		       </ul>
		      </div>
		      <?php endif; ?> 
		    </div><!-- navigation span ends here -->
	            
	  </section>
	   <!-- header section ends -->
	   <!-- slideshow starts -->
	 
	  
	  
	   <!-- slideshow ends -->
	   <!-- content-top section starts -->
		 <section class="content-top"><!--contetnt-top section starts here  -->
		   <div class=container><!-- contetnt-top container starts here -->
		      <?php if($this->countModules('content-top')): ?>
		      <jdoc:include type="modules" name="content-top" style="xhtml" />
		   </div><!-- contetnt-top container ends here -->
		    <?php endif; ?> 
		  </section><!-- contetnt-top sectionends here -->
		  <!-- content-top section ends -->
	  <!-- content-middle starts -->
	  <section class="content-middle"><!-- content-middle section starts here -->
	    <div class="container"><!-- content-middle container starts -->
	  
	  <?php if($this->countModules('content-middle')): ?>
	      <jdoc:include type="modules" name="content-middle" style="xhtml" />
	  
	    </div><!-- content-middle container ends here -->
	    <?php endif; ?>
	  </section><!-- content-middle section ends -->
	  <!-- content-middle ends -->
</body>
</html>