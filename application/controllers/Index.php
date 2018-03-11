<?php
class IndexController extends Yaf_Controller_Abstract {
   // default action name
   public function indexAction() { //默认action
        $this->getView()->assign("content", "Hello World");
   }
}
?>
