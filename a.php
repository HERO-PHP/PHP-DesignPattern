<?php
	//供其参考，如有更好的算法，欢迎来踩
    //
    //$XHPROF_ROOT = dirname(__FILE__).'/';
	//echo $XHPROF_ROOT;
    
    
    //php 求两个有序集合的交集(数据上百万)
    $data1= array();
    for($i=1; $i<=100001; $i++){
        $data1[]    = $i;
    }

    $data2= array();
    for($i=1; $i<=200001; $i++){
        if($i % 5 == 0)
            $data2[]    = $i;
    }
    
    function getIntersect($arr1, $arr2){
        $data   = array();
        $i = $j = 0;
        while($i < count($arr1) && $j < count($arr2))
        {
            if($arr1[$i] < $arr2[$j])
            {
                $i++;
            }elseif($arr1[$i] > $arr2[$j])
            {
                $j++;
            }else{
                $data[]   = $arr1[$i];
                $i++;
                $j++;
            } 
        }
        return $data;
    }
    $data   = getIntersect($data1, $data2);
    var_export($data);
    
    die();
    
?>