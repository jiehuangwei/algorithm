<?php
/**
 * node 节点
 */
class Node
{
    public $parent = null;
    public $left   = null;
    public $right  = null;
    public $data   = null;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function __toString()
    {
        return $this->data;
    }
}

/**
 * Binary tree
 */
class BinaryTree
{
    protected $_root = null;
    /**
     * 构造 Binary tree
     *
     * @param  object $new  入树的节点
     * @param  object $node 开始节点
     *
     * @return none
     */
    protected function _insert($new, $node)
    {
        if ($node == null) {
            $this->_root = $new;
            return;
        }

        // 左子树
        if ($new->data <= $node->data) {
            if ($node->left == null) {
                $node->left = $new;
                $new->parent = $node;
            } else {
                $this->_insert($new, $node->left);
            }

        // 右子树
        } else {
            if ($node->right == null) {
                $node->right = $new;
                $new->parent = $node;
            } else {
                $this->_insert($new, $node->right);
            }
        }
    }

    protected function _search($target, $node)
    {
        if ( $target == $node ) {
            return 1;

        } elseif ( $target->data > $node->data && isset($node->right) ) {
            return $this->_search($target, $node->right);

        } elseif ( $target->data <= $node->data && isset($node->left) ) {
            return $this->_search($target, $node->left);
        }

        return 0;
    }

    public function insert($node)
    {
        $this->_insert($node, $this->_root);
    }

    public function search($item)
    {
        return $this->_search($item, $this->_root);
    }
}

$a = new Node(3);
$b = new Node(2);
$c = new Node(4);
$d = new Node(1);
$e = new Node(6);

$t = new BinaryTree();

$t->insert($a);
$t->insert($b);
$t->insert($c);
$t->insert($d);
$t->insert($e);
echo "<pre>";
print_r($t);
echo $t->search($c);