<?php
	class Config{
		public static function get($path = null){
			if (isset($path)) {
				$config = $GLOBALS["config"];
				$path = explode("/", $path);
				
				foreach($path as $bit){
					if(isset($config[$bit])){
						$config = $config[$bit];
					}
					else{
						echo "pathway not found to the mysql not found";
						$config = null;
					}
				}
				return $config;
			}
			
		}
	}
?>