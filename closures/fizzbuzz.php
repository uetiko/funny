<?php
/**
 * Una clase feliz con un for simple solo para jugar
 * @author Angel Barrientos <uetiko@gmail.com>
 */
class Loop {
	/** @var int $init */
	private $init = null;
	/** @var int $end */
	private $end = null;

	public function __construct($init, $end){
		$this->init = $init;
		$this->end = $end;
	}
	/**
	 * Una implemetasión simple de un for con un closure
	 * @params Closure
	 */
	public function simpleFor(\Closure $closure){
		for($x = $this->init; $x<= $this->end; $x++){
			$closure($x);
		}
	}
}

$loop = new Loop(1, 50);
/**
 * Un closure feliz para hacer un fizzbuzz usando un switch.
 */
$loop->simpleFor(function($x){
	switch(true){
		case (0 == ($x % 3) && 5 == ($x % 5)):
				echo 'FizzBuzz';
				break;
		case (0 == ($x % 3)):
			echo "buzz\n";
			break;
		case (0 == ($x % 5)):
			echo "fizz\n";
			break;
		default:
			echo "{$x}\n";
	}
});
