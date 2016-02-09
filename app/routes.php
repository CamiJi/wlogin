<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],

		['GET', '/login', 'Login#index', 'login'],
		['POST', '/loginUser', 'Login#loginUser', 'loginUser'],
		['GET', '/logout', 'Login#logout', 'logout'],

		['GET', '/register', 'Register#index', 'register'],
		['POST', '/registerUser', 'Register#registerUser', 'registerUser'],

		['GET', '/private', 'Default#privateHome', 'privateHome'],
		['GET', '/bo', 'Default#backoffice', 'bo'],
	);