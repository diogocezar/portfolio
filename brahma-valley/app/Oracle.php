<?php

	require_once('autoload.php');

	/**
	* 	Oracle
	* 	Class to integrate all componentes of composer and give to literal-object all server-side informations required.
	* 	Author: Diogo Cezar Teixeira Batista
	*	Year: 2015
	*/

	class Oracle{

		/**
		* Attribute to store an instance of PageBuilder
		*/
		private static $instance = null;

		/**
		* Method that returns an instance
		*/
		public static function getInstance(){
			if (!isset(self::$instance) && is_null(self::$instance)) {
				$c = __CLASS__;
				self::$instance = new $c;
			}
			return self::$instance;
		}

		/**
		* Private constructor to prevent direct criation
		*/
		private function __construct(){}

		/**
		*	Internal Controls
		*/

		/**
		* 	Check if have some information at $_POST
		*/
		private function __check_posts(){
			return (!$_POST) ? true : false;
		}

		/**
		*	Method to trnasforma all posts in rawurldecode
		*/
		private function __to_raw_url(){
			foreach ($_POST as $key => $value) {
				$_POST[$key] = rawurldecode($value);
			}
		}

		/**
		*	Invoke all methods to prepare the main method
		*/
		private function __method_controls(){
			$this->__to_raw_url();
		}

		/**
		* 	Public Controls
		*/

		/**
		*   Print showFromUrl JS Artists
		*/
		public function showArtist(){
			if(!empty($_GET['artista'])){
				$show = $_GET['artista'];
				echo "<script>$(window).load(function(){Artists.showFromUrl('".$show."');})</script>";
			}
		}

		/**
		*   Print showFromUrl JS Experiences
		*/
		public function showExp(){
			if(!empty($_GET['exp'])){
				$show = $_GET['exp'];
				echo "<script>$(window).load(function(){Experiences.showFromUrl('".$show."');})</script>";
			}
		}

		/**
		*   Get Head Informations from Config
		*/
		public function getConfig($var, $key, $echo=true){
			if(empty($var))
				return;
			if(empty($key)){
				return Config::$config[$var];
			}
			else{
				if($echo)
					echo Config::$config[$var][$key];
				else
					return Config::$config[$var][$key];
			}
		}

		/**
		* Send an email
		*/
		public function sendMail(){
			// Implements Here
		}
	}

	if(isset($_GET['method'])){
		$method = $_GET['method'];
		if(!empty($method)){
			$instance = Troops::getInstance();
			$instance->{$method}();
		}
	}
?>