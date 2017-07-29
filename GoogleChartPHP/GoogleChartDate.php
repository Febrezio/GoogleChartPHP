<?php
class GoogleChartDate implements JsonSerializable {
	private $date;
	public function __construct() {
		$this->date = null;
	}
	public function setDateString($dateString) {
		$this->date = strtotime ( $dateString );
	}
	public function setDate($date) {
		$this->date = $date;
	}
	public function jsonSerialize() {
		return "Date(" . date ( 'Y', $this->date ) . ", " . (date ( 'n', $this->date ) - 1) . ", " . date ( 'j', $this->date ) . ")";
	}
}
?>