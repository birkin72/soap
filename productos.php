<?php
Class Productos{
	var $productos = Array(1=>"jabon",2=>"cloro",3=>"desodorante");
	 /**
     * @return array
     */
	public function getProductos(){
		return $this->productos;
	}
}

