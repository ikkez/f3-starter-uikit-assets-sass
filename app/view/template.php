<?php

namespace View;


class Template extends \Prefab {

	function __construct() {

		\Assets::instance();
		\Assets\Sass::instance()->init();

		/** @var \Base $f3 */
		$f3 = \Base::instance();
		$f3->baseURL = $f3->SCHEME.'://'.$f3->HOST.
			($f3->PORT && !in_array($f3->PORT,[80,443])?(':'.$f3->PORT):'')
			.$f3->BASE.'/';
	}

	function render($template) {

		ini_set('max_execution_time',180);

		return \Template::instance()->render($template);
	}

}