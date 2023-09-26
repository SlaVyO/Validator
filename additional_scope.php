<?php
class CustomValidatorDartsIncorrectTypeValueException extends Exception {
	function __toString() { 
	    return "<table border=\"\"><tr><td><strong>Исключение ".      $this->getCode()."</strong>: ".$this->getMessage()."<br />".      " в ".$this->getFile().", строка ".$this->getLine().      "</td></tr></table><br />";
	}
}

class CustomValidatorDartsIncorrectValueException extends Exception {
	function __toString() { 
	    return "<table border=\"\"><tr><td><strong>Исключение ".      $this->getCode()."</strong>: ".$this->getMessage()."<br />".      " в ".$this->getFile().", строка ".$this->getLine().      "</td></tr></table><br />";
	}
}

interface DartsShotResult {
        public function getResult();
}
    