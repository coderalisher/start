<?php
ob_start();
$API_KEY = "5045970120:AAEUEh_S5WNjjly8hteLcUp9kbJB-pSI7Lg"; 
$admin = '2067700229'; 
$mybot = "php_joylashbot";
define('API_KEY',$API_KEY);
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
$message = $update->message;
$chat_id = $message->chat->id;
$mesid = $message->message_id;
$text = $message->text; 
$data = $update->callback_query->data;
$id = $update->callback_query->id;
$chatid = $update->callback_query->message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$type = $update->message->chat->type;
$namegroup = $update->message->chat->title;
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;
$uid= $message->from->id;
$capt = $message->caption;
$query = $update->inline_query->query;
$inlineid = $update->inline_query->from->id; 
$mtext = $message->text; 
//=>=>=>@Professional_Coders<=<=<=
$channelid = file_get_contents("azo/$chat_id/channelid.txt");
$photo = $update->message->photo;
$forward = $update->message->forward_from;
$video = $update->message->video;
$location = $update->message->location;
$sticker = $update->message->sticker;
$document = $update->message->document;
$contact = $update->message->contact;
$game = $update->message->game;
$music = $update->message->audio;
$gif = $update->message->gif;
$voice = $update->message->voice;
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=@$channelid&user_id=".$uid)); 
$tch = $forchaneel->result->status;
$type = $update->message->chat->type;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$uid);
$info = json_decode($get, true);
$tach = $info['result']['status'];
//=>=>=>@Professional_Coders<=<=<=
mkdir("data");
mkdir("azo");
mkdir("azo/$chat_id");
$odam=file_get_contents("azo/$chat_id/$uid.txt");
$ok=file_get_contents("$chat_id/ok.txt");
$guruhlar=file_get_contents("data/Guruh.lar");
$userlar=file_get_contents("data/User.lar");
$from_id = $message->from->id;
if(file_get_contents("azo/$chat_id/$uid.txt")){
}else{    file_put_contents("bot/$chatid.referal","0");
}

if(isset($message)){
  if($type == "group" or $type == "supergroup"){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
    file_put_contents("data/Guruh.lar","$guruhlar\n$chat_id");
    }
  }else{
   $userlar = file_get_contents("data/User.lar");
   if(stripos($userlar,"$chat_id")!==false){
    }else{
    file_put_contents("data/User.lar","$userlar\n$chat_id");
   }}}

$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;
$sana = date('d-M Y',strtotime('5 hour'));
$soat = date('H:i', strtotime('5 hour'));
$login0 = $message->chat->username;
if($login0 == null){
$logincha = "Kiritlmagan!";}else{
$logincha = "@".$login0;	
}

$kun3 = date('N',strtotime('5 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 
$kun1 = date('z ',strtotime('5 hour')); 
$a = 153;
$c2 = $a-$kun1;
$d = date('L ',strtotime('5 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('5 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('5 hour')); 
$a3 = 59;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('5 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;
$so = file_get_contents("azo/$chat_id/soat.txt");

if($so==true){
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>"👋 Guruhimizga xush kelibsiz!\n😊Kuningiz xayrli va Barokatli o'tsin! \n📆Bugun: $sana-yil \n⏰Soat: $soat \n📅Hafta kuni: $hafta1 \n🛡Guruhimiz: $logincha \n👥Guruh a'zolari: $count",
]);
}

if(isset($update->message-> new_chat_member )){
    bot('deleteMessage', [
       'chat_id' => $chat_id,
       'message_id' => $mesid
    ]);
      $add = $odam + 1;
  file_put_contents("azo/$chat_id/$uid.txt","$add");
}

if(isset($update->message-> left_chat_member )){
    bot('deleteMessage', [
       'chat_id' => $chat_id,
       'message_id' => $mesid
    ]);
    unlink("azo/$chat_id/$uid.txt");
}
if(isset($update->message-> leaveChat )){
bot('deleteMessage', [
       'chat_id' => $chat_id,
       'message_id' => $mesid
    ]);
}

if($text=="/start"  or $text=="/start@$mybot"){
	bot('SendMessage',[
	'chat_id' => $chat_id,
	'text' => "🎲 Assalomu Alaykum 👨🏻‍✈️Bizning bot guruxlarda ishlaydi! 👨‍💻Gruxingizga Admin qiling va 🤖Botimiz o'z ish faoliyatini boshlaydi 🧾Botimiz haqida to'liq ma'lumot uchun 🎗️/haqida tugmachasini bosing",
         'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => " ➕Guruhga qo'shish",'url'=>"https://telegram.me/$mybot?startgroup=new"]],
    ]
])
        ]);
}

if((stripos($text,"/start")!==false)){
	if($type == "supergroup" or $type == "group"){
	bot('SendMessage',[
	'chat_id' => $chat_id,
	'text' => "🎲 Assalomu Alaykum 👨🏻‍✈️Bizning bot guruxingizga qo'shildi! 👨‍💻Gruxingizga Admin qiling va 🤖Botimiz o'z ish faoliyatini to'liq boshlaydi",
        ]);
}
}

if((mb_stripos($mtext,"http") !==false) or (stripos($capt,"http")!==false) or (stripos($capt,"bot?start=")!==false) or (stripos($mtext,"bot?start=")!==false) or (stripos($mtext,".me/")!==false)  or (stripos($capt,".me/")!==false)){
	$jazo = file_get_contents("data/jazolangan.$chat_id");
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $uid,
]);
$get = $gett->result->status;
if($get =="member"){
    bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $mesid,
    ]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🔒 <a href='tg://user?id=$uid'>$ufname</a> gruppaga reklama tarqatganingiz uchun 5 soat gruxda yoza olmaysiz! 📌Agar Guruxga 50 ta a'zo qo'shsangiz sizni ozod qilamiz! 🧾Gruxga 50 ta a'zo qo'shib pastdagi 🔐Ozod bo'lish tugmasini bosing🎁",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => " 🔐Ozod bo'lish",'callback_data'=>"oq"]],
    ]
])
    ]);
     $vaqti = strtotime("+300 minutes");
  bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $uid,
        'until_date' => $vaqti,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false,
        'can_invite_users'=>true,
      ]);
}
file_put_contents("azo/$chat_id/$mesid.jazo","$uid");
}

if($data=="oq"){
	  $gett = bot('getChatMember', [
'chat_id' => $chat_id2,
'user_id' => $uid,
'message_id' => $message_id2,
]);
$get = $gett->result->status;
$son = 50;
$mos = $message_id2 - 1;
$jid = file_get_contents("azo/$chat_id2/$mos.jazo");
$odam = file_get_contents("azo/$chat_id2/$jid.txt");
	if($odam>$son or $get =="administrator" or $get == "creator"){
		bot('deleteMessage', [
        'chat_id' => $chat_id2,
        'message_id' => $message_id2,
    ]);
    unlink("azo/$chat_id2/$mos.jazo");
    $sonik = $odam - $son;
    file_put_contents("azo/$chat_id2/$jid.txt","$sonik");
    bot("answerCallbackQuery",[
    "callback_query_id"=>$id,
              "text"=>"✨ Tabriklaymiz Grux foydalanuvchisiga yozish huquqini berdingiz!\nEslatib o'tamiz siz qo'shgan a'zolar soni $son taga kamaydi🎃",
              "show_alert"=>true,
]);
  bot('restrictChatMember',[
    'chat_id'=>$chat_id2,
    'user_id'=>$jid,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true,
    'can_invite_users'=>true,
  ]);
  }else{
  	bot("answerCallbackQuery",[
    "callback_query_id"=>$id,
              "text"=>"☝️ Siz ushbu foydalanuvchini yozishga ruxsat bermoqchi bo'lsangiz siz Gruxga $son ta a'zo qo'shishingiz  kerak!",
              "show_alert"=>true,
]);
}
}
	
	if($text=="/mymember" or $text=="/mymember@$mybot"){
if($type == "supergroup" or $type == "group"){
$odam = file_get_contents("azo/$chat_id/$uid.txt");
		bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $mesid,
    ]);
    if($odam==true){
        bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "⚡ <a href='tg://user?id=$uid'>$ufname</a> siz gruppaga $odam ta a'zo qo'shdingiz🎁",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
  }else{
  	bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🎗️ <a href='tg://user?id=$uid'>$ufname</a> siz gruppaga hali a'zo qo'shmadingiz🎁",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
}
}
}

if($data=="och"){
	bot('deleteMessage', [
        'chat_id' => $chat_id2,
        'message_id' => $message_id2,
    ]);
}

if($text=="/haqida"){
	bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🎗️ Bu botni siz Gruxingizga Admin qiling \n🌍 Bot sizning guruxingizda kirdi-chiqdilarni tozalaydi \n🕰️ Grux infosiga soat sana shunga o'xshash ma'lumotlar qo'yadi \n⏰ Shu Funksiyani Yoqish uchun gruxda /soat buyrug'ini bering \n🎚️ Grux foydalanuvchilari gruxga qo'shgan a'zolarini sanab boradi \n🎰 Nechta a'zo qo'shganingizni bilish uchun /mymember buyrug'ini bering \n✈️ Gruxga reklama tashlaganlarni jazolab 5 soat \n🖋️ Gruxda yoza olmaydigan qilib qo'yadi \n➕ Siz uchun muximi Agar jazolangan inson gruxga \n👥 A'zo qo'shsa bot uni yozishiga ruhsat beradi \n✨ Siz shu funksiya orqali gruxingizga a'zo qo'shila boshlaydi! \n✈️ Siz /kanal buyrug'i orqali kanalingzini gruxingizga ulab olasiz! \n📬 Agar kimdir kanalga a'zo bo'lmasa guruxga yoza olmaydi \n👨‍✈️ Agar Grux A'zosi Gruxga 100 ta A'zo qo'shsa Admin qilib qo'yish funksiyasi ham mavjud. \n📌 Shu funksiyani ishlatish uchun gruxda /avtoadmin buyrug'ini bering \n⚡ Tez Kunda Yana Yangiliklar Bo'ladi ⚡",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => " ➕Guruhga qo'shish",'url'=>"https://telegram.me/$mybot?startgroup=new"]],
    ]
])
    ]);
}

if($text=="/avtoadmin" or $text=="/avtoadmin@$mybot"){
if($type == "supergroup" or $type == "group"){
$tek = file_get_contents("azo/$chat_id/avto.txt");
 $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $uid,
'message_id' => $mesid,
]);
$get = $gett->result->status;
		bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $mesid,
    ]);
   if($get =="member"){
   	bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "⚡ Bu tugma faqat adminlar uchun",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
    }else{
    if($tek==true){
        bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "⚡ <a href='tg://user?id=$uid'>$ufname</a>  Bu funksiya oldin yoqilgan🎁",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
  }else{
  	bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🎗️ <a href='tg://user?id=$uid'>$ufname</a>  Gruxda avto adminlik funksiyasi yoqildi ⚡ Endi Kim Gruxga 100 ta a'zo qo'shsa Avtomatik Admin bo'ladi 🎁 Funksiyani o'chirish /noaadm",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
    file_put_contents("azo/$chat_id/avto.txt","true");
}
}
}
}

if($text=="/noaadm" or $text=="/noaadm@$mybot"){
if($type == "supergroup" or $type == "group"){
$tek = file_get_contents("azo/$chat_id/avto.txt");
 $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $uid,
'message_id' => $mesid,
]);
$get = $gett->result->status;
		bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $mesid,
    ]);
   if($get =="member"){
   	bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "⚡ Bu tugma faqat adminlar uchun",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
    }else{
    if($tek==true){
        bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "⚡ <a href='tg://user?id=$uid'>$ufname</a>  Avto Admin funksiyasi o'chirildi",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
    file_put_contents("azo/$chat_id/avto.txt","");
    
  }else{
  	bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🎗️ <a href='tg://user?id=$uid'>$ufname</a>  Avto Adminlik Funksiyasi avval o'chirib bo'lingan",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
}
}
}
}

$tek = file_get_contents("azo/$chat_id/avto.txt");
$odam = file_get_contents("azo/$chat_id/$uid.txt");
if($tek==true){
	if($odam>99){
		bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$uid,
    'can_change_info'=>true,
    'can_post_messages'=>true,
    'can_edit_messages'=>true,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false,
  ]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<a href='tg://user?id=$uid'>$ufname</a> Gruxga 100 ta a'zo qo'shgani uchun Admin bo'ldi!👏",
    'parse_mode'=>'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
  ]);
        $ayir = $odam - 100;
  file_put_contents("azo/$chat_id/$uid.txt","$ayir");
 }
 }
 
  	
  if($text=="/soat" or $text=="/soat@$mybot"){
if($type == "supergroup" or $type == "group"){
$so = file_get_contents("azo/$chat_id/soat.txt");
 $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $uid,
'message_id' => $mesid,
]);
$get = $gett->result->status;
		bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $mesid,
    ]);
   if($get =="member"){
   	bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "⚡ Bu tugma faqat adminlar uchun",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
    }else{
    if($so==true){
        bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "⚡ <a href='tg://user?id=$uid'>$ufname</a>  Bu funksiya oldin yoqilgan🎁",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
  }else{
  	bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🎗️ <a href='tg://user?id=$uid'>$ufname</a>  Gruxingiz infosiga soat qo'yildi 🎁 Funksiyani o'chirish /nosoat",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
    file_put_contents("azo/$chat_id/soat.txt","true");
}
}
}
}

if($text=="/nosoat" or $text=="/nosoat@$mybot"){
if($type == "supergroup" or $type == "group"){
$so = file_get_contents("azo/$chat_id/soat.txt");
 $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $uid,
'message_id' => $mesid,
]);
$get = $gett->result->status;
		bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $mesid,
    ]);
   if($get =="member"){
   	bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "⚡ Bu tugma faqat adminlar uchun",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
    }else{
    if($so==true){
        bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "⚡ <a href='tg://user?id=$uid'>$ufname</a>  Infoga soat funksiyasi o'chirildi",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
    file_put_contents("azo/$chat_id/soat.txt","");
  }else{
  	bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🎗️ <a href='tg://user?id=$uid'>$ufname</a>  Infoga Soat Funksiyasi avval o'chirib bo'lingan",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
}
}
}
}

$kan = file_get_contents("azo/$chat_id/kan.txt");
if($kan==true){
if($tach != "creator" && $tach != "administrator"){ 
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
if($type == "supergroup" or $type == "group"){
bot('sendmessage', [
            'chat_id' => $chat_id,
            'message_id' => $mesid,
            'text' => "<a href='tg://user?id=$uid'>$ufname</a> Siz @$channelid kanalimizga a'zo bo'lsangizgina,bu guruhda xabar yoza olasiz!",
				'parse_mode'=>'html',
            'reply_markup' =>  json_encode([
                'inline_keyboard' => [
    [['text' => "➕A'zo bo'lish",'url'=>"https://telegram.me/$channelid"]],
    ]
])
        ]);
    }}}
if($text || $photo || $video || $location || $sticker || $document || $contact || $music || $gif || $voice){
if($tch != 'member'){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
}
}

  if($text=="/kanal" or $text=="/kanal@$mybot"){
if($type == "supergroup" or $type == "group"){
$kan = file_get_contents("azo/$chat_id/kan.txt");
 $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $uid,
'message_id' => $mesid,
]);
$get = $gett->result->status;
		bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $mesid,
    ]);
   if($get =="member"){
   	bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "⚡ Bu tugma faqat adminlar uchun",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
    }else{
    if($kan==true){
        bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "⚡ <a href='tg://user?id=$uid'>$ufname</a>  Bu funksiya oldin yoqilgan🎁",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
  }else{
  	bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🎗️ <a href='tg://user?id=$uid'>$ufname</a>  Gruxingizga Kanal ulamoqchi bo'lsangiz  Kanal usernamesi ni @ siz yuboring Misol: U_coder 🎁 Funksiyani o'chirish /nosoat",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
    file_put_contents("azo/$chat_id/kanid.txt","$uid");
    file_put_contents("azo/$chat_id/step.txt","kan");
}
}
}
}

$kanid = file_get_contents("azo/$chat_id/kanid.txt");
$step = file_get_contents("azo/$chat_id/step.txt");
if($step == "kan"){
	if($uid == $kanid){
		if((stripos($text,"@")!==false) or (stripos($text,".me/")!==false)){
			bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🎗️ <a href='tg://user?id=$uid'>$ufname</a> iltimos kanal username sini @ yoki t.me/ siz yuboring! Misol uchun @U_coder  endi menga shuni Professional_Coders ko'rinishida yuboring!",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
    }else{
		bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🎗️ <a href='tg://user?id=$uid'>$ufname</a>  Gruxingizga @$text kanali ulandi 🎁 Funksiyani o'chirish /nokanal",
        'parse_mode' => 'html',
                 'reply_markup' =>  json_encode([
                'inline_keyboard' => [
[['text' => "🗑️Xabarni o'chirish",'callback_data'=>"och"]],
    ]
])
    ]);
    file_put_contents("azo/$chat_id/channelid.txt","$text");
    unlink("azo/$chat_id/step.txt");
    unlink("azo/$chat_id/kanid.txt");
 }
}
}