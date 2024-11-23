<?php
?>

<h1>Clock-in/Clock-out</h1>

<p id="start_time"></p>
<p id="end_time"></p>
<p id="time_spent"></p>

<button id="clock_in" style="background-color: green;" onclick="clockIn()">Clock-In</button>
<button id="clock_out" style="display: none; background-color: red" onclick="clockOut()">Clock-Out</button>

<script>
    var clockInTimestamp = 0;
    var clockOutTimestamp = 0;
    var duration = 0;
    var startTime = "";
    var endTime = "";
    function clockIn(){
        clockInTimestamp = Date.now();
        startTime = new Date(clockInTimestamp).toString();
        document.getElementById('end_time').innerHTML = "";
        document.getElementById('time_spent').innerHTML = "";
        document.getElementById('start_time').innerHTML = startTime;
        document.getElementById('clock_in').style.display = "none";
        document.getElementById('clock_out').style.display = "block";
    }
    function clockOut(){
        clockOutTimestamp = Date.now();
        endTime = new Date(clockOutTimestamp).toString();
        duration = (clockOutTimestamp - clockInTimestamp) / 1000;
        document.getElementById('end_time').innerHTML = endTime;
        document.getElementById('time_spent').innerHTML = duration;
        document.getElementById('clock_in').style.display = "block";
        document.getElementById('clock_out').style.display = "none";
    }
</script>