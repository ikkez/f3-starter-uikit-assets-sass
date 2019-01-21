<?php

namespace Controller;


class Page {

	function index(\Base $f3, $params) {

		echo \View\Template::instance()->render('template/layout.html');

	}

}