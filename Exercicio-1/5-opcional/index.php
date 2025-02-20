<?php 

class Counter {
    private $value;

    public  function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getValue () {
        return $this->value . "\n";
    }

    public function zero () {
        $this->value -= $this->value;
    }

    public function add ($num) {
        $this->value += $num;
    }
}

$counter = new Counter(94);

echo $counter->getValue();
$counter->add(6);
echo $counter->getValue();
$counter->zero();
echo $counter->getValue();
$counter->add(12);
echo $counter->getValue();

