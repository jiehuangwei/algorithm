<?php
class Graph
{
    protected $_len = 0;
    protected $_g = array();
    protected $_visited = array();

    public function __construct()
    {
        $this->_g = array(
            array(1, 0, 0, 1, 0, 0),
            array(0, 1, 0, 0, 1, 0),
            array(1, 0, 1, 0, 0, 0),
            array(0, 0, 0, 1, 0, 0),
            array(0, 1, 0, 1, 1, 0),
            array(0, 0, 1, 0, 0, 1),
        );

        $this->_len = count($this->_g);

        $this->_initVisited();
    }

    protected function _initVisited()
    {
        for ($i = 0; $i < $this->_len; $i++) {
            $this->_visited[$i] = 0;
        }
    }

    public function depthFirst($vertex)
    {
        $this->_visited[$vertex] = 1;

        echo $vertex . "\n";

        for ($i = 0; $i < $this->_len; $i++) {
            if ($this->_g[$vertex][$i] == 1 && !$this->_visited[$i]) {
                $this->depthFirst($i);
            }
        }
    }

    public function breadthFirst($start)
    {
        $queue = [];
        // initially enqueue only the starting vertex
        array_push($queue, $start);
        $this->_visited[$start] = 1;

        echo $start, "\n";
        while (count($queue)) {
            $node = array_shift($queue);
            foreach ($this->_g[$node] as $key => $value) {
                if ( !$this->_visited[$key] && $value == 1 )
                {
                    $this->_visited[$key] = 1;
                    array_push($queue, $key);
                    echo $key, "->\t";
                }
            }
            echo "\n";
        }
    }
}

$g = new Graph();

// $g->depthFirst(1);

// $g->breadthFirst(1);