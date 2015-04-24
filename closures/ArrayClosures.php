class Loop extends ArrayObject{
    protected $i = null;

    /**
     * @param Closure $c
     */
    public function each(Closure $c){
        $i = $this->getIterator();
        while($i->valid()){
            $c($i->current());
            $i->next();
        }
    }

    public function loops(Closure $c){
        $c($this->getIterator());
    }
    public function for_each(Closure $c){
        foreach($this->getArrayCopy() as $k => $v){

        }
    }

    public function adder($i, Closure $c){
        return $c($i);
    }
}

$a = new Loop(array(1, 2, 3, 4, 5));
$r = null;
var_dump($r);
$a->each(function($a) use(&$r){
    $r += $a;
    var_dump("Current: $a");
});
var_dump($r);
$a->loops(function($i) use(&$r){
    /** @var \ArrayIterator $i */
    $i;
    while($i->valid()){
        $r *=$i->current();
        $i->next();
    }
});
var_dump($r);
$v = 0;
var_dump($v);
$v = $a->adder(2, function($i){
    return $i + 8;
});
var_dump($v);
