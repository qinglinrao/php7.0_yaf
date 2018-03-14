<?php
class GameController extends Yaf_Controller_Abstract {
   // default action name
   public function indexAction() {



           //$arr1 = array(1, 3, 4, 2, 5, 6, 77, 98, 155, 100, 1349, 199, 90000, 3200000, 0);
           // $arr2 = array('1'=>1, 'b'=>'b', '45'=>45, 'f'=>'f', 56, 'k');
//        krsort($arr2);
//        print_r($arr2);
        //print_r($arr[count($arr)-1]);exit;
        //$this->binary(array(1,3,4,5,6,77,98,155,1349,90000,3200000), 1349);
        //$this->binary($arr1, 98);

        $str1 = 'aaaa';
        $str2 = 'aaaA';
        $str3 = 'aaaa';

        var_dump($str1 == $str2);
        var_dump($str1 === $str2);

        var_dump($str1 == $str3);
        var_dump($str1 === $str3);

        $this->getView();
   }

    function a(){
        print_r('aaaaaaaaaa');
    }

    //  非递归算法：
    //  $target是要查找的目标 $arr是已经排序好的数组
    function binary(&$arr, $target){
        $low = $arr[0];
        $top = count($arr);print_r($top);
        while($low <= $top){
    //由于php取商是有小数的，所以向下取整，不过也可不加，数组也会取整
          $mid = floor(($low+$top)/2);
          echo $mid."<br>";
          if($arr[$mid]==$target){
            return $arr[$mid];
          }elseif($arr[$mid]<$target){
            $low = $mid+1;
          }else{
            $top = $mid-1;
          }
        }
        return -1;
    }



}
?>