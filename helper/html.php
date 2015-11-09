<?php
	
	class html {
		/*
		*	$tagName = "div, input";
		*	$className = "string";
		* 	$attribs = "array";
		*/
		private function __construct(){}

		public function create_element($tagName, $className, $attribs=[]){
			$attribs_extracted = count($attribs) > 0 ? implode($this->extract_attribs($attribs)) : "";
			return "<$tagName class='$className' >%s</$tagName>";
		}

		public function div($className, $attribs=[]){
			return $this->create_element('div', $className, $attribs=[]);
		}
		public function label($className, $attribs){
			return $this->create_element('label',$className, $attribs=[]);
		}
		private function extract_attribs($attribs){
			$extracted = [];
			foreach ($attribs as $key => $value) {
				$extracted[] = "$key='$value'";
			}
			return $extracted;
		}
	}