<?php
class GoogleChartColumn implements JsonSerializable {
	private $label;
	private $type;
	public function setLabel($label) {
		$this->label = $label;
	}
	public function getLabel() {
		return $this->label;
	}
	public function setType($type) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
	public function jsonSerialize() {
		return get_object_vars ( $this );
	}
}
?>