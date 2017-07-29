<?php
include('GoogleChartCellValue.php');
class GoogleChartRow implements JsonSerializable {
	private $c;
	public function __construct() {
		$this->c = [ ];
	}
	public function addValue($value) {
		$cellValue = new GoogleChartCellValue();
		$cellValue->setValue($value);
		array_push ( $this->c, $cellValue);
	}
	public function setValues($values) {
		$this->c = $values;
	}
	public function getValues() {
		return $this->c;
	}	
	public function jsonSerialize()
	{
		return get_object_vars($this);
	}
}
?>