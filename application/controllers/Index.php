<?php
class IndexController extends Yaf_Controller_Abstract {
   // default action name
   public function indexAction() {
        $this->getView()->assign("content", "Hello World11");
   }
}
?>