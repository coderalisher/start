<?php
$token = "5051984039:AAEde_2xQssn0OnmevrMriPxXBh-aQkYDDc";
define('API_KEY',$token); 
$admin = array("2067700229"); //admin id


   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
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
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$text = $message->text;
$status = $statjson['result']['status'];
$silent = file_get_contents("data/$chat_id/silent.txt");
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$rtid = $update->message->reply_to_message->from->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$rt = $update->message->reply_to_message;
$super_silent = explode("n", $silent);
$re_name = $update->message->reply_to_message->from->first_name;
$mtext = $message->text;
$type = $message->chat->type;
$uid= $message->from->id;
$namegroup = $update->message->chat->title;
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;
$capt = $message->caption;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$from_id = $message->from->id;
$step=file_get_contents("data/$fadmin/name.txt");


$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$botim="ChannelNBPBot"; //bot useri
$soat = date('H:i', strtotime('3 hour'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$fadmin = $message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;


$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$is_bot = $message->new_chat_member->is_bot;

$gif = $message->animation;
$photo = $message->photo;
$sticker = $message->sticker;
$video = $message->video;
$music = $message->audio;
$document = $message->document;
$forward_from = $message->forward_from;
$voice = $message->voice;
$doc = $message->document;
$rasm = $message->photo;
$animation = $message->animation;
$music = $update->message->audio;
$contact = $message->contact;
 $location = $message->location;
$video_note = $message->video_note;
$is_animated = $message->is_animated;
$reply_to_message = $message->reply_to_message;
$game = $message->game;
$kirish = $message->kirish;

$photoset = $message->chat_photo_changed;
$titleset = $message->chat_title_changed;
$descset = $message->chat_description_changed;
$userset = $message->chat_username_changed;
$pinset = $message->pinned_message;

$new = $message->new_chat_member;
$left = $message->left_chat_member;

$kanali="@PlayMarketUz_ilovalar";
$cusername = $message->chat->username;
$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;

$channel = $update->channel_post; 
$channel_text = $channel->text;
$channel_mid = $channel->message_id; 
$channel_id = $channel->chat->id; 
$channel_title = $channel->chat->title;
$channel_user = $channel->chat->username; 
$chanel_doc = $channel->document; 
$chanel_vid = $channel->video; 
$chanel_mus = $channel->audio; 
$chanel_voi = $channel->voice; 
$chanel_gif = $channel->animation; 
$chanel_fot = $channel->photo; 
$chanel_txt = $channel->text; 
$caption =$channel->caption;

$message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;


$message_ch_author = $message_ch->author_signature;
$message_ch_mid = $message_ch->message_id;
$message_ch_chid = $message_ch->chat->id;
$message_ch_user = $message_ch->chat->username;
$audio_ch = $message_ch->audio;

$soat = date("H:i", strtotime("3 hour"));
$sana = date('d.m.y',strtotime('0 hour'));

$texxx = $message_ch->caption;

$date = date('d-M Y',strtotime('3 hour'));

$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
$kanallar = file_get_contents("stat/kanal.list");
mkdir("warn");
mkdir("stat");
mkdir("sozlama");
mkdir("avto");
mkdir("avto/$cid");
mkdir("matn");
mkdir("kanall");
$avtoinfo = file_get_contents("avto/$cid/avtoinfo.txt");
$avtosoni = file_get_contents("avto/$cid/avtosoni.txt");

$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;
$sana = date('d-M Y',strtotime('0 hour'));
$soat = date('H:i', strtotime('3 hour'));
$login0 = $message->chat->username;
if($login0 == null){
$logincha = "Kiritlmagan!";}else{
$logincha = "@".$login0;	
}

$kun3 = date('N',strtotime('0 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 
$kun1 = date('z ',strtotime('0 hour')); 
$a = 153;
$c2 = $a-$kun1;
$d = date('L ',strtotime('0 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('0 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('0 hour')); 
$a3 = 59;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('0 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;

if(true){
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>"👋 Guruppamizğa xosh kelibsiz!
😊Kùniñz xayrli, Bereketli òtsin!
📆Bùgùn: $sana-yil
⏰Sağat: $soat
📅Háfte kùni: $hafta1
🛡Guruppamiz: $logincha
👥Guruppa ağzalari: $count
Adam qosqan admin(adminka).
",
]);
}


if(mb_stripos($text,"/admin") !== false){
$gname = $message->chat->title;
$cusername = $message->chat->username;
$name = $message->from->first_name;
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Sizga yangi xabar bor.

Guruppa haqqinda:
Guruppa ati: $gname
Guruppa useri: @$cusername

Xabar haqqinda:
Name: <a href='tg://user?id=$uid'>$name</a>
Useri: @$username

Xabar jaziwi:
<b>$text</b>",
   'parse_mode'=>'html'
  ]);
}

$chpost = $update->channel_post;
$channel_id = $chpost->chat->id;
$channel_title = $chpost->chat->title;
$channel_mid = $chpost->message_id;
$channel_title = $chpost->new_chat_title;
$soat = date("H:i", strtotime("3 hour"));
$sana = date('d.m.y',strtotime('3 hour'));


if(true){
bot ('SetChatTitle', [
'chat_id'=>"@Qoraqolpoqchabot",
'title'=>"BOTLAR | $soat |💣",
]);
bot ('SetChatDescription', [
'chat_id'=>"@Qoraqolpoqchabot",
'description'=>"⚡️Eñ Zor Botlar Kanali⚡️



❣️⏰ Saat: $soat 🕰❣️ 

❣️📅 Sàne: $sana 📅❣️",
]);
}

if(isset($channel_title)){
bot ('DeleteMessage', [
'chat_id'=> $channel_id,
'message_id'=> $channel_mid,
]);
}
if(isset($channel_title)){
bot ('DeleteMessage', [
'chat_id'=> $channel_id,
'message_id'=> $channel_mid,
]);
}
if(isset($channel_title)){
bot ('DeleteMessage', [
'chat_id'=> $channel_id,
'message_id'=> $channel_mid,
]);
}


if($text == "/start" or $text == "/start@ChannelNBPBot"){
$prime = file_get_contents("prime.txt");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "😊Assalawma aleykim $ufname $uname ❗️
😍Xosh kelipsiz, Men Guruppa infosina  sağat qoyatin bot bolaman.
💟Meni kõp gruppağa qosiñ hãm usi guruppa eng zor guruppa boladi💥

💎Esletpe! Eger siz gruppañizğa sağat qoymaqshi bolsañiz Bot Admin boliwi shart bolmasa istemidi❗️
🎁Kanallarimizğa qosilğanlarğa bepul🎁",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[ 
[['text'=>'🔐 Kanalimiz 🔐', 'url' => "https://T.me/PlayMarketUz_ilovalar"],['text'=>'😎 Admin  😎', 'url' => "https://t.me/mega_coder"]],
[['text'=>"👨‍💻 Creator 👨‍💻", 'url'=>"https://t.me/kingalion"]],
[['text'=>'💣 Gruppağa qosiw','url'=>'telegram.me/ChannelNBPBot?startgroup=new']],
]   
]),
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "$prime",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[ 
[['text'=>'📮 Reklama 📮', 'url' => "t.me/Kingalion"]],
]   
]),
]);
}

file_get_contents("ball.dat");
if($message->new_chat_member->id != $message->new_chat_members->id){
$war=file_get_contents("ball.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("ball.dat",$jazo); 
$war=file_get_contents("ball.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
if($str=="100"){
$rep=str_replace($soni,"","$war");
file_put_contents("ball.dat",$rep);
$vaqti = strtotime("3 minutes");
bot('promoteChatmember',[
'chat_id'=>$chat_id,
'user_id'=>$user_id,
'can_change_info'=>true,
'can_post_messages'=>false,
'can_edit_messages'=>false,
'can_delete_messages'=>true,
'can_invite_users'=>true,
'can_restrict_members'=>false,
'can_pin_messages'=>true,
'can_promote_members'=>false
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"[$first_name](tg://user?id=$fadmin) *Sizdiñ baliñiz 100 ball. 👏Qutlayman Siz Gruppa Adminstratorisiz!*",
'parse_mode'=>'markdown',
]);
}if($str<"100"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"[$first_name](tg://user?id=$fadmin) *Sizge 1 ball berdik! 
Ballariñiz sani 100 ball bolğanda Siz gruppa adminstratoriğa aylanasiz*
⭕Hàzirgi ballariñiz $str~100",
'parse_mode'=>'markdown',
]);
}
}

if(mb_stripos($text,"/prime") !== false){
if($cid == $admin){
	$ppp = str_replace("/prime","",$text);
file_put_contents('prime.txt',"$ppp");
bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>"<b>PRIME</b> - O'zgertirildi!
	
	$ppp",
    'parse_mode'=>'html',
  ]);
}	
}
