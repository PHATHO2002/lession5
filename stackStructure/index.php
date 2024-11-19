<?php
class Stack
{
    private $stack = [];
    private $limit;
    public function __construct($limit)
    {
        $this->limit = $limit;
    }

    public function push($value)
    {
        if (empty($this->stack)) {
            array_unshift($this->stack, $value);
        } else {

            if (count($this->stack) < $this->limit) {
                array_unshift($this->stack, $value);
            } else {
                throw new RunTimeException('Stack is full!');
            }
        }
    }
    public function pop()
    {
        if (empty($this->stack)) {
            throw new RunTimeException('Stack is empty!');
        } else {
            return array_shift($this->stack);
        }
    }
    public function top()
    {
        if (empty($this->stack)) {
            throw new RunTimeException('Stack is empty!');
        } else {
            return $this->stack[0];
        }
    }
    public function  isEmpty()
    {
        if (empty($this->stack)) {
            echo ' Stack is empty!';
        } else {
            echo 'Stack is not empty!';
        }
    }
}
$test = new Stack(5);

$test->push(1);
$test->push(2);
$test->push(3);
$test->push(4);
$test->push(5);

echo $test->pop() . ' ';
echo $test->pop() . ' ';
echo $test->pop() . ' ';
$test->push(9);
$test->push(10);

$test->isEmpty();
echo $test->pop() . ' ';
echo $test->pop() . ' ';
echo $test->pop() . ' ';
echo $test->pop() . ' ';

$test->isEmpty();
