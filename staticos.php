<?php 
//Un método o propiedad estático es accesible sin la necesidad 
//de instanciar la clase en la que se encuentra.
	class miclase{
		public $mensaje=1;

		public function hola(){
			return "hola";
		}
		public static function metodo(){
			return self::hola();
		}
	}

	echo miclase::metodo();

 ?>