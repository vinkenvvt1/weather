<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="skeleton.css">
<style>
.button {font-size:18px;padding:10px;height:100%;}
.small_deco {font-size:18px;background-color:#1EAEDB;color:#fff;display:inline-block;border:1px solid #1EAEDB;border-radius:4px;padding:2px;}
img {width:36px;}
</style>
</head>
<body>
  <div class="container">
  <a class="button" href="map.html">选择城市</a>
  <br>
<?php date_default_timezone_set("Asia/Shanghai"); ?>
<?php
if (isset($_GET["citycode"])) {$citycode = $_GET["citycode"];}
else $citycode = "101190501";
$weather_data_raw = file_get_contents("http://t.weather.itboy.net/api/weather/city/".$citycode);
$weather_data = json_decode($weather_data_raw, true);

if (isset($weather_data["data"])) {
echo '<div class="small_deco">'.$weather_data["cityInfo"]["city"].'</div>';
$count_forecast = count($weather_data["data"]["forecast"]);
echo "<table>";
for ($i=0;$i<$count_forecast;$i++) {
echo "<tr><td>";
echo date('m-d',time()+86400*$i);
echo "</td><td>";
$high = $weather_data["data"]["forecast"][$i]["high"];
$low = $weather_data["data"]["forecast"][$i]["low"];
$type = $weather_data["data"]["forecast"][$i]["type"];
echo str_replace("高温 ","",$high);
echo "</td><td>";
echo str_replace("低温 ","",$low);
echo "</td><td>";
if ($type == "晴"){echo '<img src="2600.png">';}
if ($type == "阴"){echo '<img src="2601.png">';}
if ($type == "多云"){echo '<img src="1f325.png">';}
if ($type == "小雨"||$type == "中雨"||$type == "大雨"){echo '<img src="1f327.png">';}
if ($type == "小雪"||$type == "中雪"||$type == "大雪"){echo '<img src="1f328.png">';}
if ($type == "霾"){echo '<img src="2601.png">';}
echo "</td></tr>";
}
echo "</table>";
}
else echo "citycode error";
?>
  </div>
</body>
</html>
