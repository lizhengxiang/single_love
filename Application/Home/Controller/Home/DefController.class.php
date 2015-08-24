<?php

namespace Home\Controller\Home;
use Think\Controller;
class DefController extends Controller {

	public function putChild( &$list , $tree )
	{
    	if( empty( $list ) )
    	{
        	return false;
    	}
    	foreach( $list as $key => $val ){
        	if( $tree['fid'] == $val['id'] && $tree['id'] != $tree['fid'] )
        	{
            	$list[$key]['child'][] = $tree;
            	return true;
        	}
        	if( isset( $val['child'] ) && is_array( $val['child'] ) && !empty( $val['child'] ) )
        	{
            	if( $this->putChild( $list[$key]['child'] , $tree ) )
            	{	
					return true;
            	}
        	}
    	}
    	return false;
	}

}
