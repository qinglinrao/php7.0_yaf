<?php
class Git_logController extends Yaf_Controller_Abstract {
   // default action name
   public function git_logAction() { //默认action
        $this->getView()->assign("content", "git_log");
   }
}
?>
