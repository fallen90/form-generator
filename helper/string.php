<?php

class String {
	public $bootstrap;
	public function __construct($field){
		$this->bootstrap = new Bootstrap();
		return $this->create($field);
	}
	private function create($field){
		$this->bootstrap->form_group();
	}
}