<?php
include('GoogleChartRow.php');
include('GoogleChartColumn.php');
class GoogleChart implements JsonSerializable{
	private $cols;
	private $rows;
	public function __construct() {
		$this->cols = [];
		$this->rows= [];
	}
	public function setColumns($columns) {
		$this->cols = $columns;
	}
	public function getColumns() {
		return $this->cols;
	}
	public function setRows($rows) {
		$this->rows = $rows;
	}
	public function getRows() {
		return $this->rows;
	}
	public function addColumn(GoogleChartColumn $column) {
		array_push($this->cols, $column);
	}
	public function addRow(GoogleChartRow $row) {
		array_push($this->rows, $row);
	}
	public function jsonSerialize()
	{
		return get_object_vars($this);
	}
}
?>