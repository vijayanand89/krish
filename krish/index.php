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

if($this->countModules('content-right')) {
	$content_span = 'span9';
} else {
	$content_span = 'span12';
}

if($this->countModules('bottom1 and bottom2 and bottom3 and bottom4')) {
    $bottom_span = 3;
}elseif( $this->countModules('bottom1 and bottom2 and bottom3') 
		|| $this->countModules('bottom2 and bottom3 bottom4')
		|| $this->countModules('bottom3 and bottom4 and bottom1')
		) {
	$bottom_span = 4;
}elseif( $this->countModules('bottom1 and bottom2')
		|| $this->countModules('bottom1 and bottom3')
		|| $this->countModules('bottom1 and bottom4')
		|| $this->countModules('bottom2 and bottom1')
		|| $this->countModules('bottom2 and  bottom3')
		|| $this->countModules('bottom2 and bottom4')
		|| $this->countModules('bottom3 and bottom1')
		|| $this->countModules('bottom3 and bottom2')
		|| $this->countModules('bottom3 and  bottom4')
		|| $this->countModules('bottom4 and  bottom1')
		|| $this->countModules('bottom4 and bottom2')
		|| $this->countModules('bottom4 and bottom3')
		){
	$bottom_span = 6;
}elseif( $this->countModules('bottom1')
		||$this->countModules('bottom2')
		||$this->countModules('bottom3')
		||$this->countModules('bottom4')
		){
	$bottom_span= 12;
}

if($this->countModules('footer1 and footer2 and footer3 and footer4')) {
	$footer_span = 3;
}elseif( $this->countModules('footer1 and footer2 and footer3')
		|| $this->countModules('footer2 and footer3 footer4')
		|| $this->countModules('footer3 and footer4 and footer1')
) {
	$footer_span = 4;
}elseif( $this->countModules('footer1 and footer2')
		|| $this->countModules('footer1 and footer3')
		|| $this->countModules('footer1 and footer4')
		|| $this->countModules('footer2 and footer1')
		|| $this->countModules('footer2 and  footer3')
		|| $this->countModules('footer2 and footer4')
		|| $this->countModules('footer3 and footer1')
		|| $this->countModules('footer3 and footer2')
		|| $this->countModules('footer3 and  footer4')
		|| $this->countModules('footer4 and  footer1')
		|| $this->countModules('footer4 and footer2')
		|| $this->countModules('footer4 and footer3')
){
	$footer_span = 6;
}elseif( $this->countModules('footer1')
		||$this->countModules('footer2')
		||$this->countModules('footer3')
		||$this->countModules('footer4')
){
	$footer_span=12;
}

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
	      <div class="row-fluid"><!--header logo row starts here -->
	          <?php if($this->countModules('header-logo')): ?>
	        <div class="span12"><!-- header logo span starts here -->
	          <jdoc:include type="modules" name="header-logo" style="none" />
	        </div><!-- header logo span ends here -->
	      </div><!-- header logo row ends here -->
	          <?php endif; ?> 
		    <div class="span12"><!-- navigation span starts here -->
		    <center>
			  <?php if($this->countModules('navigation')): ?>
			 <div class="navigation navbar">
			   <jdoc:include type="modules" name="navigation" style="none" />
		      </div>
		      <?php endif; ?> 
		    </div><!-- navigation span ends here -->
	            
	  </section>
	   <!-- header section ends -->
	 
	   <!-- slideshow starts -->
	     <section class="slideshow">
	      <?php if($this->countModules('slideshow')): ?>
	      <div class="row-fluid">
	     <jdoc:include type="modules" name="slideshow" style="xhtml" />
	      </div>
	       <?php endif; ?>
	      </section>
	   <!-- slideshow ends -->
	   
	<section class="content">
		<div class="container">
			<div class="row-fluid">
				<div class="<?php echo $content_span; ?>">
			   <!-- content-top section starts -->
			      <?php if($this->countModules('content-top')): ?>
			      	 <div class="content-top"><!--contetnt-top section starts here  -->
					      <jdoc:include type="modules" name="content-top" style="xhtml" />
					 </div><!-- contetnt-top sectionends here -->    
				  <?php endif; ?> 
				  <!-- content-top section ends -->
			
				  <!-- content-middle starts -->
				  <?php if($this->countModules('content-middle')): ?>
				 	  <div class="content-middle"><!-- content-middle section starts here -->
				 	     <jdoc:include type="modules" name="content-middle" style="xhtml" />
				     </div><!-- content-middle container ends here -->
				    <?php endif; ?>
					<div class="content-main">		    
			   			<jdoc:include type="message" />
						<jdoc:include type="component" />
					</div>
				  <!-- content-bottom starts -->
				   <?php if($this->countModules('content-bottom')): ?>
				   		<div class="content-bottom">
				    	  <jdoc:include type="modules" name="content-bottom" style="xhtml" />
				 		</div>
				  <?php endif; ?>
				  <!-- content-bottom ends -->
				  
			</div>
		
	  <!-- content-right starts -->
	    <?php if($this->countModules('content-right')): ?>
	    	<div class="span3 pull-right">
	    	  <jdoc:include type="modules" name="content-right" style="xhtml" />
	        </div>
	       <?php endif; ?>
	  <!-- content-right ends -->
	  </div> <!-- content row ends -->
	 </div> <!-- content container ends -->
	</section> <!--  end of content section -->
		<!-- bottom starts -->
			<section>
			  <div class="container">
			    <div calss="row">
			    <h3>WORK TEAM</h3>
			      <?php if($this->countModules('bottom1')): ?>
			      	 <div class="span<?php echo $bottom_span; ?>">
					      <jdoc:include type="modules" name="bottom1" style="xhtml" />
					 </div>   
				  <?php endif; ?> 
				  <?php if($this->countModules('bottom2')): ?>
			      	 <div class="span<?php echo $bottom_span; ?>">
					      <jdoc:include type="modules" name="bottom2" style="xhtml" />
					 </div>   
				  <?php endif; ?>
				  <?php if($this->countModules('bottom3')): ?>
			      	 <div class="span<?php echo $bottom_span; ?>">
					      <jdoc:include type="modules" name="bottom3" style="xhtml" />
					 </div>   
				  <?php endif; ?>
				  <?php if($this->countModules('bottom4')): ?>
			      	 <div class="span<?php echo $bottom_span; ?>">
					      <jdoc:include type="modules" name="bottom4" style="xhtml" />
					 </div>   
				  <?php endif; ?>				  
			    </div>
			  </div>
			</section>
		<!-- bottom ends -->  
	 <!-- footer starts -->
	   <footer>
			  <div class="container">
			    <div calss="row">
			     <?php if($this->countModules('footer1')): ?>
			      	 <div class="span<?php echo $footer_span; ?>">
					      <jdoc:include type="modules" name="footer1" style="xhtml" />
					 </div>   
				  <?php endif; ?> 
				  <?php if($this->countModules('footer2')): ?>
			      	 <div class="span<?php echo $footer_span; ?>">
					      <jdoc:include type="modules" name="footer2" style="xhtml" />
					 </div>   
				  <?php endif; ?>
				  <?php if($this->countModules('footer3')): ?>
			      	 <div class="span<?php echo $footer_span; ?>">
					      <jdoc:include type="modules" name="footer3" style="xhtml" />
					 </div>   
				  <?php endif; ?>
				  <?php if($this->countModules('footer4')): ?>
			      	 <div class="span<?php echo $footer_span; ?>">
					      <jdoc:include type="modules" name="footer4" style="xhtml" />
					 </div>   
				  <?php endif; ?>				  
			    </div>
			  </div>
			</footer>
			<!-- footer-logo starts -->
	 	      <div class="container">
			    <div class="row-fluid">
			      <?php if($this->countModules('footer-logo')): ?>
			    	<div class="span12">
			          <div class="footer-logo">
					   <jdoc:include type="modules" name="footer-logo" style="xhtml" />
					  </div> 
				   </div>
			    </div>
		      </div>   
				  <?php endif; ?> 
				  <!-- footer-logo ends -->
	 <!-- footer ends -->
</body>
</html>