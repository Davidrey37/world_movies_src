<?php 
	/**
	 *  
	 */
	class RoutesController{
		public function RequestRoute(){
			if (isset($_GET["view"])) {
				$url = explode("/", $_GET["view"]);
				$items = count($url);
				
				if ($items==1) {
					$path = "app/views/".$url[0]."_view.php";
				}else if($items>=2) {
					$path = "app/views/".$url[0]."/".$url[1]."_view.php";
				}

				if (file_exists($path)) {
					$response = $path;

				}else{
					$response = "app/views/404_view.php";
				}
			}else {
				$response = "app/views/inicio_view.php";
			}

			return $response;
		}
	}
 ?>