<?php

	// Retorna la variable POST $postId filtrada
	function p($postId){
		if( ! isset($_POST[$postId]) ) return "";
		return filter_var($_POST[$postId], FILTER_SANITIZE_STRING);
	}

	// Retorna la variable GET $getId filtrada
	function g($getId){
		if( ! isset($_GET[$getId]) ) return "";
		return filter_var($_GET[$getId], FILTER_SANITIZE_STRING);
	}

	// var_dump() + die() formatat
	function dd($var){
		echo "<pre>";
		var_dump($var);
		echo "</pre>";
		die();
	}

	// print_r formatat
	function pr($array){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}