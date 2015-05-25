<?php
class Nodo {
	private $dato = null;
	private $nodo = null;
	/**
	 * @params $dato
	 */
	public function setDato($dato){
		$this->dato = $dato;
	}
	/**
	 * Regresa el dato contenido en el nodo.
	 */
	public function getDato(){
		return $this->dato;
	}
	/**
	 * Valida si existe un nodo o es nulo
	 * @return boolean
	 */
	public function valid(){
		return !is_null($this->nodo);
	}
	/**
	 * @params Nodo $nodo
	 */
	public function setNodo(Nodo $nodo){
		$this->nodo = $nodo;
	}
	/**
	 * @return Nodo
	 */
	public function getNodo(){
		return $this->nodo;
	}

	public function __destruct(){}
}

$list = new Nodo();

$i = 0;
while(12860 != $i){
	$nodo = new Nodo();
	$nodo->setDato(rand());
	$nodo->setNodo($lista);
	$lista = $nodo;
	$i++;
}
$list = $lista;
//print_r($lista);


while($lista->valid()){
	echo $lista->getDato();
	$lista = $lista->getNodo();
	echo "\n";
}
