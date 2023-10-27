define ('url',"https://api.telegram.org/bot6317634256:AAETbsW6NwNMXRk_UjkO67dYXMCeJ687Ywk/");
$name = $_GET['name'];
$message = $_GET['message'];
$chat_id = '1098083004';
$message = urlencode("Name:".$name."\n Message : ".$message);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");