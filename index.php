<?php


ob_start();
define('API_KEY','5050513243:AAHvWFoTaYsxR7fKTCasnNhXDl7zK5XGKVw'); 
$admin = "2067700229"; 
   $botname="Group_clean_uzbot";
   
if(true){
error_reporting(E_ALL & ~(E_NOTICE | E_USER_NOTICE | E_DEPRECATED));
ini_set('display_errors', 1);
}
function del($nomi){
   array_map('unlink', glob("$nomi"));
   }
    
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
 
$y = json_decode(file_get_contents('php://input'));
$ms = $y->message;
$c = $ms->chat->id;
$t = $ms->text;
$m = $ms->message_id;
$na=$ms->from->first_name;
$id=$ms->from->id;
$tg="tg://user?id=$id";
$contact=$ms->contact;
$nom=$ms->contact->phone_number;
$type=$ms->chat->type;
$kun=date("d",strtotime("3 hour"));
$soat=date("H:i:s",strtotime("3 hour"));

if($t=="/start" or $t=="/start@Group_clean_uzbot"){
bot('sendMessage',[
'chat_id'=>$c,
    'message_id'=>$m,
'text'=>"✌Sàlem [$na]($tg)
*👨‍🔧Men Guppada kirdi-shiqtilardi,
🔱Chat Nicki almassa, taza sùret qoyilsa
🗑Usilardi tazalap turaman 
Bar joģi meni gruppańizģa admin qiliń
statistika /stat*",
'parse_mode'=>'markdown',
]);
}
 
if($y->message->new_chat_member or $y->message->new_chat_photo or $y->message->new_chat_title or $y->message->left_chat_member or $y->message->pinned_message){
    bot('deleteMessage',[
        'chat_id'=>$c,
        'message_id'=>$m,
    ]);
}
 
$lichka=file_get_contents("lichka.db");
$gruppa=file_get_contents("gruppa.db");
if($type=="private"){
if(strpos($lichka,"$c") !==false){
}else{
file_put_contents("lichka.db","$lichka\n$c");
}
} 

if($type=="supergroup" or $type=="group"){
if(strpos($gruppa,"$c") !==false){
}else{
file_put_contents("gruppa.db","$gruppa\n$c");
}
}
 
if($t=="/stat"){
$lichka=file_get_contents("lichka.db");
$gruppa=file_get_contents("gruppa.db");
$lich=substr_count($lichka,"\n");
$gr=substr_count($gruppa,"\n");
$um=$lich + $gr;
bot('sendMessage',[
'chat_id'=>$c,
    'text'=>"📊Bot Statistikasi: \n▶👤Adamlar:  $lich ta \n▶👥Guruppalar:  $gr ta \n▶♾Bari:  $um  ta \n⏰Hàzir saģat: $soat ",
'parse_mode' => 'html', 
]);
}


?>