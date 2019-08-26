<?php
class Core {

	public function run() {
        $url = D_S.(isset($_GET['url'])?$_GET['url']:'');

		$params = array();
		if(!empty($url) && $url != D_S) {
			$url = explode(D_S, $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && $url[0] != D_S) {
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}

			if(count($url) > 0) {
				$params = $url;
			}

		} else {
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		if(!file_exists('controllers'.D_S.$currentController.'.php')) {
			$currentController = 'notFoundController';
			$currentAction = 'index';
		}

		$c = new $currentController();

		if(!method_exists($c, $currentAction)) {
			$currentAction = 'index';
		}

		call_user_func_array(array($c, $currentAction), $params);

	}

}
?>