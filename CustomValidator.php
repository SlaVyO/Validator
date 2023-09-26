<?php
require_once "additional_scope.php";
   


class ValidClass {
  
  public static $chekArray =[ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 24, 25, 26, 27, 28, 30, 32, 33, 34, 36, 38, 39, 40, 42, 45, 48, 50, 51, 54, 57, 60 ];

  public static function valid($param) 
  {
  	$paramType = gettype($param);
	//echo $paramType;
	$flag = false;
	try {
		switch ($paramType) {
		case 'array':
			$newArray = [];
			foreach ($param as $value) {
						$arrayParamType = gettype($value);
						switch ($arrayParamType) {
							case 'integer':
								$newArray[] = $arrayParamType;
								break;
							case 'double':
								$newArray[] = (int) $arrayParamType;
								break;
							case 'string':
								$newArray[] = (int) $arrayParamType;
								break;
							default:
								$flag = true;
								break;
						}
						

					}		
			if ($flag ){
				throw new CustomValidatorDartsIncorrectTypeValueException ("Error Processing Request", 2);
			}
			break;
		case 'integer':
			$intParam = $param;
			break;
		case 'double':
			$intParam = (int) $param;
			break;
		case 'string':
			$intParam = (int) $param;
			break;
		default:
			throw new CustomValidatorDartsIncorrectTypeValueException ("Error Processing Request", 3);
			$flag = true;
			break;
		}

		
	} catch (CustomValidatorDartsIncorrectTypeValueException $e) {
		echo $e;
		exit;
	}


	try {
		if (!$flag && $paramType != "array"){
			if (!in_array($intParam, self::$chekArray)) {
		    	throw new CustomValidatorDartsIncorrectValueException("Error Processing Request", 4);
			}else{
				return "Good";
			}
		}elseif (!$flag) {
			foreach ($newArray as $value) {
				if (!in_array($value, self::$chekArray)) {
		   			throw new CustomValidatorDartsIncorrectValueException("Error Processing Request", 5);
				}else{
					return "Good";
				}
			}
		}
		
	} catch (CustomValidatorDartsIncorrectValueException $e) {
		echo $e;
		exit;
	}
    
  }
}

