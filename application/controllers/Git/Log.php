<?php
class  Git_LogController extends Yaf_Controller_Abstract {
   // default action name
   public function blogAction() { //默认action
        $this->getView()->assign("content", "git_log");
   }
}
?>
