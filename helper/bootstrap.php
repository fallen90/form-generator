<?php

	/**
	*	Bootstrap v3.3.5
	**/
	class Bootstrap {
		private $chain = "";
		public function __construct(){
			
		}

		public function form_group(){
			$this->chain = html::div('form-control');
			return $this;
		}
		public function control_label(){
			$this->chain = sprintf($this->chain,html::label('control-label') . '%s') ;
			return $this;
		}
	}