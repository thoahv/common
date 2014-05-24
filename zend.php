 <!-- add file js, css -->
<?php 
   $this->inlineScript()->appendFile(ASSETS_CDN . '/js/x_editable_1.5.0.js');
   $this->headLink()->prependStylesheet(ASSETS_CDN . '/css/x_editable.css');
  ?>

 <!-- View file form modules different -->
$view = new Zend_View();
		$view->setScriptPath(APPLICATION_PATH . '/modules/site/views/scripts/index');
		echo $view->partial('list_league.phtml',array('id'=>$this->id));