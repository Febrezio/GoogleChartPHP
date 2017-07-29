<?php
class GoogleChartCellValue  implements JsonSerializable {
	private $v;
	public function setValue($value) {
		$this->v = $value;
	}
	public function getValue() {
		return $this->v;
	}
	public function jsonSerialize()
	{
		return get_object_vars($this);
	}
}
?>