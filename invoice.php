<?php
require("header.php");

var_dump($conn->query("SELECT * FROM billing.user")->fetch_all());


$data = [
    "westin_123" => [
        "job_type" => "General Maintenance",
        'hours' => 1,
        'location' => "Sally's House",
    ],
    "westin_321" => [
        "job_type" => "General Maintenance",
        'hours' => 3,
        'location' => "Sally's House",
    ],
    "chris_123" => [
        "job_type" => "General Maintenance",
        'hours' => 2,
        'location' => "Sally's House",
    ],
];


$invoice_data = [];

?>

<h1>Invoice Builder</h1>

<h2>Time Entries</h2>
<div>
<?php
foreach($data as $timeid => $time_entry){
    echo "<div style='display: flex; gap: 10px'>";
    echo "<p>" . $timeid . "</p>";
    echo "<p>" . $time_entry['job_type'] . "</p>";
    echo "<p>" . $time_entry['hours'] . "</p>";
    echo "<p>" . $time_entry['location'] . "</p>";
    echo "<button onclick='addToInvoice(" . $timeid . ")'>Add</button>";
    echo "</div>";
}
?>
</div>

<h2>Invoice</h2>

<p id="invoice_total"></p>

<div id="invoice"></div>

<script>
    function addToInvoice(timeid){

    }
</script>