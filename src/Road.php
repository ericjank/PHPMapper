<?php
/**
 * Street class file
 */
class Street {
	public $name;
	public $node_list;

	public function __construct($name, $node_list) {
		$this->name = $name;
		$this->node_list = $node_list;
	}
}