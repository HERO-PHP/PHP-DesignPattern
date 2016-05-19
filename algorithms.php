<?php
	/*
     * PHP commonly used algorithm
     */

    $ary    = array(2,1,4,5,3,6,10,8);
    $len    = count($ary);
    
    //First one ： Bubble sort
    for( $i = 0; $i < $len; $i++ ) {
        
        for( $j = $len - 1; $j > $i; $j-- ){
            
            if( $ary[$j] < $ary[$j-1] ){
                
                $tmp        = $ary[$j];
                $ary[$j]    = $ary[$j-1];
                $ary[$j-1]  = $tmp;
            }
        }
    }
    //var_export($ary);exit;
    
    //The second : Selection sort
    for( $i = 0; $i < $len; $i++ ) {
        
        $min_key  = $i;//Assume that $ary[$i] is the smallest
        
        for( $j = $i + 1; $j < $len; $j++ ){
            
            if( $ary[$min_key] > $ary[$j] ){
                
                $min_key    = $j;
            }
        }
        
        if( $ary[$min_key] < $ary[$i] ) {
            
            $tmp            = $ary[$i];
            $ary[$i]        = $ary[$min_key];
            $ary[$min_key]  = $tmp;
        }
    }
    //var_export($ary);exit;
    
    //The third : Quick sort —— Use recursion to help me
    function quickSort($arr) {
        
        $len        = count($arr);
        
        if( $len <= 1 ) return $arr;
        
        $tmp        = $arr[0];//Define an intermediate value
        $leftArr    = $rightArr = array();
        
        for( $i = 1; $i < $len; $i++ ) {
            
            if( $arr[$i] <= $tmp ) {
                
                $leftArr[]  = $arr[$i];
                
            } else {
                
                $rightArr[] = $arr[$i];
            }
        }

        $leftArr        = quickSort($leftArr);
        $rightArr       = quickSort($rightArr);
        
        return array_merge($leftArr, array($tmp), $rightArr);
    }
    $res    = quickSort($ary);
    //var_export($res);exit;


    /*
     * Seeking the intersection of two ordered queues
     */

    $data1  = $data2 = array();
    
    //Define the first ordered queue
    for( $i = 1; $i <= 200001; $i++ ) {
        
        $data1[]    = $i;
    }

    //Define the second ordered queue
    for( $i = 1; $i <= 300001; $i++ ) {
        
        if($i % 5 == 0)
            $data2[]    = $i;
        
    }
    
    function getIntersect( $arr1, $arr2 ) {
        
        $data   = array();
        $i      = $j = 0;
        
        while( $i < count($arr1) && $j < count($arr2) )
        {
            if( $arr1[$i] < $arr2[$j] )
            {
                $i++;
            }
            elseif( $arr1[$i] > $arr2[$j] )
            {
                $j++;
            }
            else
            {
                $data[]   = $arr1[$i];
                
                $i++;    $j++;
            } 
        }
        
        return $data;
    }
    
    $data   = getIntersect($data1, $data2);
    var_dump($data);
    exit;
    
?>