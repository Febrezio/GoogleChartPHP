# GoogleChartPHP

First, you should read the [Google Chart Guide](https://developers.google.com/chart/interactive/docs/php_example) to learn how to consume JSON data in JavaScript

Example PHP producing GoogleChart table data (JSON)
```
$chart = new GoogleChart();

// Set Column data
$dateColumn = new GoogleChartColumn();
$usersColumn= new GoogleChartColumn();
$dateColumn->setLabel("Date");
$dateColumn->setType("date");
$usersColumn->setLabel("Users");
$usersColumn->setType("number");

// Add columns to chart
$chart->addColumn($dateColumn);
$chart->addColumn($usersColumn);

// Set row data
$row = new GoogleChartRow();
$date = new GoogleChartDate();
$date->setDateString("2017-01-05");
$row->addValue($date);
$row->addValue(1);

// Add row to chart
$chart->addRow($row);

// Encode GoogleChart to JSON and echo the result
echo json_encode ( $chart );
```
