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
  <a class="button" href="?citycode=101190507">启东</a>
  <a class="button" href="?citycode=101010100">北京</a>
  <a class="button" style="float:right" href="https://github.com/baichengzhou/weather.api/blob/master/src/main/resources/citycode-2019-08-23.json">城市码</a>
  <br>
<?php date_default_timezone_set("Asia/Shanghai"); ?>
<?php
if (isset($_GET["citycode"])) {$citycode = $_GET["citycode"];}
else $citycode = "101190507";
$weather_data_raw = file_get_contents("http://t.weather.itboy.net/api/weather/city/".$citycode);
$weather_data = json_decode($weather_data_raw, true);
if (isset($weather_data["data"])){
echo '<div class="small_deco">';
echo $weather_data["cityInfo"]["city"];
echo '</div>';
echo "<table><tr><td>";
echo "今天";
echo "</td><td>";
$high = $weather_data["data"]["forecast"]["0"]["high"];
$low = $weather_data["data"]["forecast"]["0"]["low"];
$type = $weather_data["data"]["forecast"]["0"]["type"];
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
echo "</td></tr><tr><td>";
echo date('m-d',time()+86400);
echo "</td><td>";
$high = $weather_data["data"]["forecast"]["1"]["high"];
$low = $weather_data["data"]["forecast"]["1"]["low"];
$type = $weather_data["data"]["forecast"]["1"]["type"];
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
echo "</td></tr><tr><td>";
echo date('m-d',time()+86400*2);
echo "</td><td>";
$high = $weather_data["data"]["forecast"]["2"]["high"];
$low = $weather_data["data"]["forecast"]["2"]["low"];
$type = $weather_data["data"]["forecast"]["2"]["type"];
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
echo "</td></tr><tr><td>";
echo date('m-d',time()+86400*3);
echo "</td><td>";
$high = $weather_data["data"]["forecast"]["3"]["high"];
$low = $weather_data["data"]["forecast"]["3"]["low"];
$type = $weather_data["data"]["forecast"]["3"]["type"];
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
echo "</td></tr><tr><td>";
echo date('m-d',time()+86400*4);
echo "</td><td>";
$high = $weather_data["data"]["forecast"]["4"]["high"];
$low = $weather_data["data"]["forecast"]["4"]["low"];
$type = $weather_data["data"]["forecast"]["4"]["type"];
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
echo "</td></tr><tr><td>";
echo date('m-d',time()+86400*5);
echo "</td><td>";
$high = $weather_data["data"]["forecast"]["5"]["high"];
$low = $weather_data["data"]["forecast"]["5"]["low"];
$type = $weather_data["data"]["forecast"]["5"]["type"];
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
echo "</td></tr><tr><td>";
echo date('m-d',time()+86400*6);
echo "</td><td>";
$high = $weather_data["data"]["forecast"]["6"]["high"];
$low = $weather_data["data"]["forecast"]["6"]["low"];
$type = $weather_data["data"]["forecast"]["6"]["type"];
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
echo "</td></tr><tr><td>";
echo date('m-d',time()+86400*7);
echo "</td><td>";
$high = $weather_data["data"]["forecast"]["7"]["high"];
$low = $weather_data["data"]["forecast"]["7"]["low"];
$type = $weather_data["data"]["forecast"]["7"]["type"];
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
echo "</td></tr><tr><td>";
echo date('m-d',time()+86400*8);
echo "</td><td>";
$high = $weather_data["data"]["forecast"]["8"]["high"];
$low = $weather_data["data"]["forecast"]["8"]["low"];
$type = $weather_data["data"]["forecast"]["8"]["type"];
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
echo "</td></tr><tr><td>";
echo date('m-d',time()+86400*9);
echo "</td><td>";
$high = $weather_data["data"]["forecast"]["9"]["high"];
$low = $weather_data["data"]["forecast"]["9"]["low"];
$type = $weather_data["data"]["forecast"]["9"]["type"];
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
echo "</td></tr><tr><td>";
echo date('m-d',time()+86400*10);
echo "</td><td>";
$high = $weather_data["data"]["forecast"]["10"]["high"];
$low = $weather_data["data"]["forecast"]["10"]["low"];
$type = $weather_data["data"]["forecast"]["10"]["type"];
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
echo "</td></tr></table>";
}
else echo "citycode error";
?>
  </div>
</body>
</html>
