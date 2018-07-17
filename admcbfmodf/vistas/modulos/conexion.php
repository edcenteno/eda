<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=arhuantecedentes",
			            "cabifyperu_arhu",
			            "arhuantecedentes");

		$link->exec("set names utf8");

		return $link;

	}

}