<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
        $array = array("shxq","xxj","zl","dr","fy","ly");
        array_push($array,"ly");
	// Sort the list
        sort($array);
        print join(",",$array);
	// Randomly select a winner!
        $winner = $array[rand(0,count($array)-1)];
        print strtoupper($winner);
	// Print the winner's name in ALL CAPS
  //字符串函数
	//strlen() strtoupper() strtolower() substr($string,start,end) strpos("shxq","x")
  //数学函数
  //round()取整或者round(M_PI,4)取几位有效数组
  //rand(start,end) 随机函数
  //数组函数
  //array_push($array,"shxq") count($array) join(",",$array);
	?>
	</p>
</html>
