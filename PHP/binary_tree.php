<?php 
	// $arr = array('a' =>array('id' =>1,'name'=>'2' ),'b' =>array('id' =>2,'name'=>'2' ) );
    //连接本地的 Redis 服务

   // $redis = new Redis();
   // $redis->connect('127.0.0.0', 6379);
   // // var_dump($a)
   //       //查看服务是否运行
   //  $a = $redis->ping();
   //  var_dump($a);

    // $redis = new Redis();
    // $redis->connect('127.0.0.1',6379);
    // $redis->set('test','hello redis');
    // echo $redis->get('test');

	// $s1 = "http://2811.liveplay.myqcloud.com/2811_ea921845c5e611e69776e435c87f075e.m3u8";
	// $pos1 = strpos($s1, "com/");
	// $s2 = substr_replace($s1, "live/", $pos1+4,0);
	// echo $s2;

	class Node{
		// public $key = null;
		public $value = null;
		public $left = null;
		public $right = null;
	}

	$arr = [2=>"222",1=>"111",0=>"000",4=>"444",3=>"333"];
	binary_tree_build($arr);

	function binary_tree_build($arr){
		if (empty($arr)) {
			return null;
		}

		$root = new Node();
		$level = 1;
		foreach ($arr as $key => $value) {
			if ($level == 1) {
				$root->value = $value;
			}else{
				$new_Node = new Node();
				$new_Node->value = $value;
				insert_binary_tree($root,$new_Node);
			}
			$level++;
		}
		print_r($root);
		return $root;
	}

	function insert_binary_tree($root,$new_Node){
		if (intval($root->value) == intval($new_Node->value)) {
			return true;
		}elseif (intval($root->value) > intval($new_Node->value)) {
			if ($root->left == null) {
				$root->left = $new_Node;
				return true;
			}else{
				$root = $root->left;
				insert_binary_tree($root,$new_Node);
			}
		}else {
			if (intval($root->value) < intval($new_Node->value)) {
				if ($root->right == null) {
				$root->right = $new_Node;
				return true;
			}else{
				$root = $root->right;
				insert_binary_tree($root,$new_Node);
			}
			}
		}
	}
?>