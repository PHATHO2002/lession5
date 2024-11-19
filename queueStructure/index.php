<?php
class Element
{
    public $value;
    public $next;
}
class Queue
{
    private $front;
    private $back;
    public function isEmpty()
    {
        return $this->front == null;
    }
    public function enqueue($value)
    {
        $oldback = $this->back;
        $this->back = new Element();
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldback->next = $this->back;
        };
    }
    public function dequeue()
    {
        if ($this->isEmpty()) {
            throw new \Exception("hàng đợi rỗng");
        } else {
            $removedEl = $this->front->value;
            $this->front = $this->front->next;
            return $removedEl;
        }
    }
}
$queue = new Queue();

$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
echo $queue->dequeue() . "\n";
echo $queue->dequeue() . "\n";

if ($queue->isEmpty()) {
    echo 'quene is empty';
} else {
    echo 'quene not empty';
}
$queue->enqueue(2);
$queue->enqueue(3);
echo $queue->dequeue() . "\n";
echo $queue->dequeue() . "\n";
echo $queue->dequeue() . "\n";
if ($queue->isEmpty()) {
    echo 'quene is empty';
} else {
    echo 'quene not empty';
}
