<?php
ob_start();
define('API_KEY', '5045970120:AAEUEh_S5WNjjly8hteLcUp9kbJB-pSI7Lg');

function Behruz($method,$datas=[]){
    $url = "https://api.telegram.org/Behruz".API_KEY."/".$method;
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
//-----------------------------------------------------------------------------------------
//METHOD
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$edname = $editm ->from->first_name;
$fromid = $update->callback_query->from->id;
$mesid = $message->message_id;
$fadmin = $message->from->id;
$membercall = $update->callback_query->id;
$mid = $message->message_id;
$rt = $update->message->reply_to_message;
$mtext = $message->text;
$name = $update->message->from->first_name;
$last_name = $update->from->last_name;
$forward = $update->message->forward_from;
$namegroup = $update->message->chat->title;
$editm = $update->edited_message;
$text1 = $message->text;
$text = $message->text;
$state1 = file_get_contents("data/$chatid/state.txt");
$state = file_get_contents("data/$from_id/state.txt");
$firstname = $update->callback_query->reply_to_message->from->first_name;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$from_user_first_name = $message->reply_to_message->from->first_name;
$replyid = $update->message->reply_to_message->message_id;
$message_id = $message->reply_to_message->message_id;
$messageid = $message->message_id;
$ism = $message->new_chat_member->first_name;
$new_chat_members = $message->new_chat_member->id;
$from_id = $message->from->id;
mkdir("data/$from_id");
$chat_id = $message->chat->id;
mkdir("data/$chat_id");
mkdir("data/$chat_id/$from_id");
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$cty = $message->chat->type;
$cid = $message->chat->id;
$uid = $message->from->id;
$last_name = $message->from->last_name;
$username = $message->from->username;
mkdir("data/username.txt/$username");
$textmassage = $message->text;
$mtext = $message->text;
$text1 = $message->text;
$text = $message->text;
$chatid = $update->callback_query->message->chat->id;
$fm = $update->callback_query->from->id;
$step= file_get_contents("data/$from_id/file.txt");
$owners= file_get_contents("data/$chat_id/owner.txt");
$owners2= file_get_contents("data/$chatid/owner.txt");
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$welcome= file_get_contents("data/$chat_id/welcome.txt");
$textwelcome= file_get_contents("data/$chat_id/textwelcome.txt");
$admin = '2067700229';
$txtt = file_get_contents('data/users.txt');
$forward_from_chat = $update->message->forward_from_chat;
$from_chat_id = $forward_from_chat->id;
$data = $update->callback_query->data;
$firstcall = $update->callback_query->message->chat->first_name;
$usercall = $update->callback_query->message->chat->username;
$messageid = $update->callback_query->message->message_id;
$tc = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$textpost = file_get_contents("data/$chatid/textpost.txt");
$linkpost = file_get_contents("data/$chatid/linkpost.txt");
$namepost = file_get_contents("data/$chatid/namepost.txt");
$channel = file_get_contents("data/$chatid/channel.txt");
$newchatmemberid = $update->message->new_chat_member->id;
$newchatmemberu = $update->message->new_chat_member->username;
$rt = $update->message->reply_to_message;
$data = $update->callback_query->data ;
$replyid = $update->message->reply_to_message->message_id;
$rtid = $update->message->reply_to_message->from->id;
$tedadmsg = $update->message->message_id;
$fwd = $update->message->forward_from;
$edit = $update->edited_message->text;
$name = $update->message->from->first_name;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$edit_for_id = $update->edited_message->message->from->id;
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$lockphoto= file_get_contents("data/$chat_id/lockphoto.txt");
$lockedit= file_get_contents("data/$chat_id/lockedit.txt");
$lockgame= file_get_contents("data/$chat_id/lockgame.txt");
$locklocation= file_get_contents("data/$chat_id/locklocation.txt");
$lockcontact= file_get_contents("data/$chat_id/lockcontact.txt");
$lockusername= file_get_contents("data/$chat_id/lockusername.txt");
$lockaudio= file_get_contents("data/$chat_id/lockaudio.txt");
$lockvoice= file_get_contents("data/$chat_id/lockvoice.txt");
$locksticker= file_get_contents("data/$chat_id/locksticker.txt");
$lockjoin= file_get_contents("data/$chat_id/lockjoin.txt");
$lockdocument= file_get_contents("data/$chat_id/lockdocument.txt");
$lockvideo= file_get_contents("data/$chat_id/lockvideo.txt");
$lockgif= file_get_contents("data/$chat_id/lockgif.txt");
$lockforward= file_get_contents("data/$chat_id/lockforward.txt");
$lockoperator= file_get_contents("data/$chat_id/lockoperator.txt");
$locklink2= file_get_contents("data/$chatid/locklink.txt");
$lockphoto2= file_get_contents("data/$chatid/lockphoto.txt");
$lockedit2= file_get_contents("data/$chatid/lockedit.txt");
$lockgame2= file_get_contents("data/$chatid/lockgame.txt");
$locklocation2= file_get_contents("data/$chatid/locklocation.txt");
$lockcontact2= file_get_contents("data/$chatid/lockcontact.txt");
$lockusername2= file_get_contents("data/$chatid/lockusername.txt");
$lockaudio2= file_get_contents("data/$chatid/lockaudio.txt");
$muteall2 = file_get_contents("data/$chatid/muteall2.txt");
$lockvoice2= file_get_contents("data/$chatid/lockvoice.txt");
$locksticker2= file_get_contents("data/$chatid/locksticker.txt");
$lockjoin2= file_get_contents("data/$chatid/lockjoin.txt");
$lockdocument2= file_get_contents("data/$chatid/lockdocument.txt");
$lockvideo2= file_get_contents("data/$chatid/lockvideo.txt");
$lockgif2= file_get_contents("data/$chatid/lockgif.txt");
$lockforward2= file_get_contents("data/$chatid/lockforward.txt");
$lockoperator2= file_get_contents("data/$chatid/lockoperator.txt");
$lockBehruzs2= file_get_contents("data/$chatid/lockBehruzs.txt");
$lockBehruzs= file_get_contents("data/$chat_id/lockBehruzs.txt");
$floods= file_get_contents("data/$chat_id/lockflood.txt");
$floods2= file_get_contents("data/$chatid/lockflood.txt");
$flood= file_get_contents("data/$chat_id/numflood.txt");
$flood2= file_get_contents("data/$chatid/numflood.txt");
$text = $update->inline_qurey->qurey;
$token = '5045970120:AAEUEh_S5WNjjly8hteLcUp9kbJB-pSI7Lg';
$stat = file_get_contents("https://api.telegram.org/Behruz$token/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$statjson = json_decode($stat, true);
$status = $statjson['result']['status'];
$lockedit3 = file_get_contents("data/$chat_edit_id/lockedit.txt");
$get = file_get_contents("https://api.telegram.org/Behruz$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$channel = "WebCoding_Uz";
$okchannel = $getchannel->result->status;


function SendMessage($chat_id, $text){
Behruz('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function sendAction($chat_id, $action){
Behruz('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
function Forward($berekoja,$azchejaei,$kodompayam)
{
Behruz('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
//--------------------------------------------------------------------------
if(preg_match('/^\/([Ss]tart)/',$mtext)){
$user = file_get_contents('data/users.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('data/users.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('data/users.txt',$add_user);
    }
          sendAction($chat_id, 'typing');
  Behruz('sendmessage',[
  'chat_id'=>$chat_id,
  'message_id'=>$messageid,
  'text'=>"🙋 Assalomu alaykum *$name*! 
 Men endi guruhlarni nazorat qilaman va qizdiraman. Buning uchun adminka qilishingiz lozim!
Guruhga yozilgan xar qanday turdagi haqoratli gaplarga va reklamalarga *ReadOnly* rejimi bilan turli xil muddatlarda jazolayman va guruhni siz uchun moslab beraman.
🚹 To'liq ma'lumotlarni *Qo'llanma* orqali bilib olishingiz mumkin.

‍$name _Meni guruhlaga qo'shing! 😉_",
        'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
  'resize_keyboard'=>true,
  'inline_keyboard'=>[  
          [['text'=>'➕ Guruhga qo\'shish ➕','url'=>'https://telegram.me/Group_security_OBot?startgroup=new'],['text'=>'Buyruqlar','callback_data'=>'Buyruqlar']],
[['text' => '😘 Qizlar', 'url' => 't.me/savolim_uz'],['text' => '✍ Qo\'llanma', 'url' => 'https://telegra.ph/QOLLANMA-09-23-3']],
[['text'=>'♻️Statistika','callback_data'=>'stat']]

  ]
  ])
  ]);
  }

 if(isset($update->callback_query)){
    $callback = $update->callback_query;
    $call_id= $callback->id;
    $callback_u= $callback->from->id;
    $callback_data= $callback->data;
    $call_mes_id= $callback->message->message_id;
    $chat_id = $callback->message->chat->id;
    $mid =  $callback->message->message_id;

    if($callback_data == 'stat'){
 $sanoq = count(file("users.txt"));
    $soat = date('H:i:s ',strtotime('5 hour')); 
    $sana = date('Y-m-d');    
Behruz('sendChatAction',[
'chat_id'=>$chat_id,
'action'=>"typing"]);
    Behruz('sendmessage',[
        'chat_id'=>$chat_id, 
        'text'=>"JAMI: $sanoq TA 
        $soat $sana",
        'parse_mode'=>'markdown',
        
     ]);

    }
}


if($mtext == "/del" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
    Behruz('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$update->message->reply_to_message->message_id
  ]);
   Behruz('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$update->message->message_id
  ]);
  }
}
if ($text1=="/moder" && $fadmin == $admin) {
if ($tc == 'group' | $tc == 'supergroup'){
  Behruz('promoteChatMember',[

    'chat_id'=>$chat_id,
   'user_id'=>$id,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  Behruz('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<b>$from_user_first_name</b> sizni tabriklayman.🎉 Siz <b>$namegroup</b> guruhining <i>Moderator</i> lavozimiga tayinlandingiz.\nSizda mavjud imkoniyatlar:\n🛠 <b>Xabarni o'chirish</b>\n🛠<b>Foydalanuvchini cheklash.</b>",
    'parse_mode'=>'html'
  ]);
}
}

if ($text1=="/admin" &&$fadmin==$admin) {
  Behruz('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  Behruz('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<b>$from_user_first_name</b> sizni tabriklayman.🎉 Siz <b>$namegroup</b> guruhining <i>Super Moderator</i> lavozimiga tayinlandingiz.\nSizda mavjud imkoniyatlar:\n🛠 <b>Xabarni qadash,</b>\n<b>🛠 Xabarni o'chirish,</b>\n🛠 <b>Foydalanuvchini cheklash,</b>\n🛠 <b>Guruh nomini o'zgartirish,</b>\n🛠 <b>Odam qo'shish.</b> ",
    'parse_mode'=>'html'
  ]);
}

if ($text1=="/fulladmin" &&$fadmin==$admin) {
  Behruz('promoteChatMember',[
    'chat_id'=> $chat_id,
    'user_id'=> $id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  Behruz('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"<b>$from_user_first_name</b> sizni tabriklayman.🎉 Siz <b>$namegroup</b> guruhining <i> Super Admin</i> lavozimiga tayinlandingiz.\nSizda mavjud imkoniyatlar:\n🛠 <b>Xabarni qadash,</b>\n<b>🛠 Xabarni o'chirish,</b>\n🛠 <b>Foydalanuvchini cheklash,</b>\n🛠 <b>Guruh nomini o'zgartirish,</b>\n🛠 <b>Odam qo'shish,</b>\n<b>🛠 Admin berish.</b>",
    'parse_mode'=>'html'
  ]);
}

if ($text1=="/deladmin" &&$fadmin==$admin) {
Behruz('promoteChatMember',[
    'chat_id'=> $chat_id,
    'user_id'=> $id,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>false,
    'can_invite_users'=>false,
    'can_restrict_members'=>false,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  Behruz('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"<b>$from_user_first_name</b> siz  <b>$namegroup</b> guruhida lavozimingizdan ozod etildingiz❗",
    'parse_mode'=>'html'
  ]);
}





       
//PIN
if ($text1=='/pin') {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
  Behruz('pinchatmessage',[
    'chat_id'=>$chat_id,
    'reply_to_message_id'=>$mesid,
    'message_id'=>$message_id
  ]);
    
  Behruz('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"<b>$message_id</b> chi habar guruhga qistirildi!✅",
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true
    ]);
  }  
}


if ($text1=='/unpin') {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
  Behruz('unpinChatMessage',[
    'chat_id'=> $chat_id,
    'reply_to_message_id'=>$mesid,
    'message_id'=>$message_id
  ]);
  Behruz('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"<b>Guruhdagi qistirma o'chirildi!✅</b>",
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true
     ]);
   }
}
//PROGRAMMA
 if($mtext == "Plus" || $mtext == "plus"){
       Behruz('sendDocument',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'document'=>"http://telegram.me/majnunuz/13"
    ]);
  }
  
 if($mtext == "Instagram" || $mtext == "insta" || $mtext == "instagram"){
       Behruz('sendDocument',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'document'=>"http://telegram.me/majnunuz/17"
    ]);
  }
  
 if($mtext == "Tam tam"){
       Behruz('sendDocument',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'document'=>"http://telegram.me/hashtaguz/16"
    ]);
  }
  
 if($mtext == "Prisma"){
       Behruz('sendDocument',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'document'=>"http://telegram.me/hashtaguz/931"
    ]);
  }
  
 if($mtext == "Mobogram" || $mtext == "mobogram"){
       Behruz('sendDocument',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'document'=>"http://telegram.me/majnunuz/21"
    ]);
  }  
  
   if($mtext == "Shazam" || $mtext == "shazam"){
       Behruz('sendDocument',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'document'=>"http://telegram.me/majnunuz/20"
    ]);
  }
  
 if($mtext == "Telegram" || $mtext == "telegram"){
       Behruz('sendDocument',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'document'=>"http://telegram.me/majnunuz/22"
    ]);
  }
  
 if($mtext == "Imo" || $mtext == "imo"){
       Behruz('sendDocument',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'document'=>"http://telegram.me/hashtaguz/9"
    ]);
  }                              
//GOOOOOD NIGHT
 if($text1 == "Hayrli tun" || $text1 == "tun" || $text1 == "Xayrli tun" || $text1 == "Xayrli tun hamaga"){
       Behruz('sendvoice',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'voice'=>"http://telegram.me/majnunuz/8"
    ]);
  }
//joindel
if(isset($message->new_chat_member) or isset($message->left_chat_member)){
    Behruz('deleteMessage',[
        'chat_id'=>$message->chat->id,
        'message_id'=>$message->message_id,
    ]);
}
//SOATSANA
         if(stripos($text1,"Soat") !== false){
Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]); 
         $hour = date('H:i', strtotime('5 hour'));
   $text = "⌚️ Hozir soat: $hour";
   $a=json_encode(Behruz('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
   if(stripos($text1,"Sana") !== false){
Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]); 
         $today = date('d-M Y',strtotime('5 hour')); 
   $text = "⌚️ Bugun: $today";
   $a=json_encode(Behruz('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
        ]));
}

//READONLY
if ((mb_strpos($text1, "https://telegram.me/joinchat/")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz guruhda <b>reklama</b> link (ssilka tashlaganingiz uchun ⌚️ <i>60 daqiqa</i> guruhga yozishdan maxrum bo'ldingiz ❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+60 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "https://t.me/joinchat/")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz guruhda <b>reklama</b> link (ssilka tashlaganingiz uchun ⌚️ <i>60 daqiqa</i> guruhga yozishdan maxrum bo'ldingiz ❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+60 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ($text1=="/unro") {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => true,
        'can_send_media_messages' => true,
        'can_send_other_messages' => true,
        'can_add_web_page_previews' => true
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Sizni <b>🎊tabriklayman🎊</b> Siz  <i>ReadOnly</i>  rejimidan ozod etildingiz.❗",
        'parse_mode' => 'html'
    ]);
        }
}

if ($text1=="/ro") {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz <b>umrbod</b> ga <i>ReadOnly</i>  rejimiga tushdingiz.❗",
        'parse_mode' => 'html'
    ]);
        }
        }
if ($mtext=="Ro1"){
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    $minut = strtotime("+1 minutes");
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz  <b>⌚ 1 daqiqa</b> ga <b>ReadOnly</b> rejimiga tushdingiz Ushbu vaqt davomida siz yozish huquqidan maxrum bo'ldingiz❗",
        'parse_mode' => 'html'
    ]);
}
}
if ($mtext=="Ro10") {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    $minut = strtotime("+10 minutes");
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz  <b>⌚ 10 daqiqa</b> ga <b>ReadOnly</b> rejimiga tushdingiz Ushbu vaqt davomida siz yozish huquqidan maxrum bo'ldingiz❗",
        'parse_mode' => 'html'
    ]);
}
}

if ($mtext=="Ro30") {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    $minut = strtotime("+30 minutes");
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz  <b>⌚ 30 daqiqa</b> ga <b>ReadOnly</b> rejimiga tushdingiz Ushbu vaqt davomida siz yozish huquqidan maxrum bo'ldingiz❗",
        'parse_mode' => 'html'
    ]);
}
}

if ($mtext=="Ro60") {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    $minut = strtotime("+1 minutes");
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz  <b>⌚ 60 daqiqa</b> ga <b>ReadOnly</b> rejimiga tushdingiz Ushbu vaqt davomida siz yozish huquqidan maxrum bo'ldingiz❗",
        'parse_mode' => 'html'
    ]);
}
}

if ($mtext=="Ro120") {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    $minut = strtotime("+120 minutes");
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz  <b>⌚ 2 soat</b> ga <b>ReadOnly</b> rejimiga tushdingiz Ushbu vaqt davomida siz yozish huquqidan maxrum bo'ldingiz❗",
        'parse_mode' => 'html'
    ]);
}
}
if ($mtext=="Ro180") {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    $minut = strtotime("+180 minutes");
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz  <b>⌚ 3 soat</b> ga <b>ReadOnly</b> rejimiga tushdingiz Ushbu vaqt davomida siz yozish huquqidan maxrum bo'ldingiz❗",
        'parse_mode' => 'html'
    ]);
}
}
if ($mtext=="Ro240") {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    $minut = strtotime("+240 minutes");
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz  <b>⌚ 4 soat</b> ga <b>ReadOnly</b> rejimiga tushdingiz Ushbu vaqt davomida siz yozish huquqidan maxrum bo'ldingiz❗",
        'parse_mode' => 'html'
    ]);
}
}
if ($mtext=="Ro300") {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    $minut = strtotime("+300 minutes");
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz  <b>⌚ 5 soat</b> ga <b>ReadOnly</b> rejimiga tushdingiz Ushbu vaqt davomida siz yozish huquqidan maxrum bo'ldingiz❗",
        'parse_mode' => 'html'
    ]);
}
}
if ($mtext=="Ro360") {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    $minut = strtotime("+360 minutes");
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz  <b>⌚ 6 soat</b> ga <b>ReadOnly</b> rejimiga tushdingiz Ushbu vaqt davomida siz yozish huquqidan maxrum bo'ldingiz❗",
        'parse_mode' => 'html'
    ]);
}
}
if ($mtext=="Ro420"&&$fadmin==$admin) {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    $minut = strtotime("+420 minutes");
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz  <b>⌚ 7 soat</b> ga <b>ReadOnly</b> rejimiga tushdingiz Ushbu vaqt davomida siz yozish huquqidan maxrum bo'ldingiz❗",
        'parse_mode' => 'html'
    ]);
}
}
if ($mtext=="Ro480") {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    $minut = strtotime("+480 minutes");
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz  <b>⌚ 8 soat</b> ga <b>ReadOnly</b> rejimiga tushdingiz Ushbu vaqt davomida siz yozish huquqidan maxrum bo'ldingiz❗",
        'parse_mode' => 'html'
    ]);
}
}
if ($mtext=="Ro540") {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    $minut = strtotime("+540 minutes");
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz  <b>⌚ 9 soat</b> ga <b>ReadOnly</b> rejimiga tushdingiz Ushbu vaqt davomida siz yozish huquqidan maxrum bo'ldingiz❗",
        'parse_mode' => 'html'
    ]);
}
}
if ($mtext=="Ro600") {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    $minut = strtotime("+600 minutes");
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz  <b>⌚ 10 soat</b> ga <b>ReadOnly</b> rejimiga tushdingiz Ushbu vaqt davomida siz yozish huquqidan maxrum bo'ldingiz❗",
        'parse_mode' => 'html'
    ]);
}
}

if ($mtext=="Ro3600") {
     $gett = Behruz('getChatMember', [
     'chat_id' => $cid,
     'user_id' => $uid,
     ]);
     $get = $gett->result->status;
      if($get =="administrator" or $get == "creator"){
    $minut = strtotime("+3600 minutes");
    Behruz('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage', [
        'chat_id' =>$chat_id,
        'text' => "<b>$from_user_first_name</b> Siz  <b>⌚ 1 kun</b> ga <b>ReadOnly</b> rejimiga tushdingiz. Ushbu vaqt davomida siz yozish huquqidan maxrum bo'ldingiz❗",
        'parse_mode' => 'html'
    ]);
}
}
//AUTOMATIC READ ONLY
if ((mb_strpos($text1, "Qotoq")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>10 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+600 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Pidaraz")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>1 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+60 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Fuck you")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>1 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+60 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "latta")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>haqorat</b> qilganingiz uchun ⌚️ <i>10 daqiqa</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+10 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "chumo")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>haqorat</b> qilganingiz uchun ⌚️ <i>10 daqiqa</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+10 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "pidaraz")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>1 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+60 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "poxxuymasmi")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>haqorat</b> qilganingiz uchun ⌚️ <i>30 daqiqa</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+30 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "urot")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>haqorat</b> qilganingiz uchun ⌚️ <i>30 daqiqa</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+30 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Qoto")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>10 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+600 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Sikdm")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>4 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+240 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "sikdim")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>4 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+240 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Galuboy")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>3 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+180 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "pizdes")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>odobsiz gapirgan</b>ingiz uchun ⌚️ <i>1 daqiqa</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+1 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "kot")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>1 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+60 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "jalap")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>2 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+120 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "🖕")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>ma'naviyatimizga</b> zid emojidan foydalanganingiz uchun ⌚️ <i>10 daqiqa</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  $minut = strtotime("+10 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Jalap")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>2 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+120 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Jalla")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>10 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+600 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}  
 
 if ((mb_strpos($text1, "jalla")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>2 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+120 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Suka")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>1 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+60 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Skaman")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>2 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+120 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Oneni ami")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida juda qattiq haqorat bilan <b>so'kinganingiz</b> uchun ⌚️ <i>7 kun</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+1080 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "ayeni ami")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida juda qattiq haqorat bilan<b>so'kinganingiz</b> uchun ⌚️ <i>7 kun</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+1080 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Ayeni ami")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida juda qattiq haqorat bilan<b>so'kinganingiz</b> uchun ⌚️ <i>7 kun</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+1080 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Oneni ami")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida juda haqorat bilan<b>so'kinganingiz</b> uchun ⌚️ <i>7 kun</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+1080 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Gandon")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>10 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+600 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "gandon")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>10 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+600 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Пашол")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>haqoratli gap</b> yozganingiz uchun ⌚️ <i>10 daqiqa</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+10 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "Пашол наххуй")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>haqoratli gap</b> yozganingiz uchun ⌚️ <i>10 daqiqa</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+10 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

if ((mb_strpos($text1, "пашол нахуй")!==false)&&($fadmin!=$admin)) {
  Behruz('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    Behruz('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"Diqqat🚫 <b>$name.</b> Siz <b>$namegroup</b>  guruhida <b>so'kinganingiz</b> uchun ⌚️ <i>4 soat</i> <b>(Read Only)</b> rejimiga tushdingiz. Ushbu muddat davomida guruhda yozish imkoniyatidan maxrumsiz❗",
    'parse_mode'=>'html'
  ]);
  Behruz('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
  ]);
  $minut = strtotime("+240 minutes");
  Behruz('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

//CHAAAAAAAAT
$rand = array("Lichkam faqat Majnun uchun","Sizgamas man bilan lichkada gaplashish","Shu yerda ayting dardingizni");
$ra = array_rand($rand, 1);

if($text1 == "  licga qaravoring" || $text1 == "  lichkaga qarab yuboring" || $text1 == "  lickaga qaravoring"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}
$rand = array("Oybodoq","Korpachagul"," ...de nima bolardi");
$ra = array_rand($rand, 1);

if($text1 == "  ismiz nma" || $text1 == "  ismiz nima?" || $text1 == "  ismizni bilsam boladimi" || $text1 == "  ismizi eting"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("Telegram respublikasining lichka viloyatidan🙂");
$ra = array_rand($rand, 1);

if($text1 == "Qattansiz" || $text1 == "Qayerdansiz"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("Man qo'shsam admin qilasmi☺","majnunladan qowing oziz","zerkarli bob ketti xaqqatan qowilaaaaaaa");
$ra = array_rand($rand, 1);

if($text1 == "Odam qowila" || $text1 == "Odam qowilar" || $text1 == "odam qowila"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("Kak buta haaaaamma bekorchi faqat siz ishlavossiz😒","10minut ishlab qoyib hammadan bekorchi yasavoldizmi?","Dunyo bo'yicha faqat siz ishlavossiz (otes malades)");
$ra = array_rand($rand, 1);

if($text1 == "ha bekorcila" || $text1 == "qalesla bekorcila" || $text1 == "bekorcilaga salom" || $text1 == "bekorchila qalesizlar?" || $text1 == "bekorcilaga salomlar" || $text1 == "bekorchila nma gapla" || $text1 == "bekorcila tzumisila" || $text1 == "Bekorcila qalesila" || $text1 == "Ha bekorcila" || $text1 == "Bekorcilaga salom" || $text1 == "Bekorcila nma gap" || $text1 == "Bekorcila nma gapla" || $text1 == "Bekorchila qalesila" || $text1 == "Bekorcilaaa qalesila" || $text1 == " bekorcilar qalesilar" || $text1 == "Bekorcilar salom" || $text1 == "Salom bekorchilar" || $text1 == " Qaleysizlar bekorcilar" || $text1 == "Ha belorcilar" || $text1 == "Bekorcilarga salom"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("Majnun yonimda","Ana majnun @Group_security_OBot","Erim kamandirovkada😆");
$ra = array_rand($rand, 1);

if($text1 == "  majnuniz qani" || $text1 == "layini majnuni bormi?" || $text1 == " ni majnuni qani" ||$text1 == "  majnun qani" || $text1 == "  majnun qani?" || $text1 == "  majnuniz qani?" || $text1 == "  majnuning qani?" || $text1 == "  majnuning qani" || $text1 == "  qani majnun" || $text1 == "  qani majnun" || $text1 == " " ||$text1 == "Majnun qani  " || $text1 == "majnun qani  " || $text1 == "Majnuniz qani  " || $text1 == "Majnun qayerda  " || $text1 == "majnun qatta  " || $text1 == "Majnun qatta  ?"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("Assalomu Aleykum yuripsizmeee chachamay😀","Salom qalisiz?","Salom yaxshi raxmat ozizchi chachamay","Salomalekoom yaxshi kevoldizmi","Qalesiz chachamay");
$ra = array_rand($rand, 1);

if($text1 == "Salom qalesila" || $text1 == "salom qalesila" || $text1 == "Salom qalisila" || $text1 == "salom qalisila" || $text1 == "Saloom" || $text1 == "saloom" || $text1 == "salom kim bor" || $text1 == "Salom kim bor" || $text1 == "salomlar" || $text1 == "Salomlar" || $text1 == "Salooom" || $text1 == "Salom  " || $text1 == "salom  "){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("O'zinga boshqa ermak qidir","Og'zi qiyshu bosayam boyyi bolasi gaprsinakande ","lattaga oxwami ollll😄","Aroq xidi anqib turibdi sizdan😷");
$ra = array_rand($rand, 1);

if($text1 == "Mmm" || $text1 == "LAYLM" || $text1 == " M"  || $text1 == "Laylm"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]
  ]);
}

$rand = array("Teparoqqa chiqsez ko'rasiz","Kim qo'shganini axamiyati yo'q. Asosiysi siz eng zo'r guruhdasiz","Kotta xolezzi kichik o'g'li qo'shib keyin o'zi chiqib ketdi😄");
$ra = array_rand($rand, 1);

if($text1 == "Mani kim qowdi" || $text1 == "Meni kim qowdi" || $text1 == "Meni km qowdi" || $text1 == "Mani km qowdi"|| $text1 == "Mani kim qowdi?"|| $text1 == "Meni kim qoshdi?" || $text1 == " Meni kim qoshdi"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]
  ]);
}

$rand = array("Nimani blasiz ozi","Blganizi yig'sa 1gram bolar a?😄","Bilaman dedim tutuldim,Bilmayman dedim qutildim😄");
$ra = array_rand($rand, 1);

if($text1 == "Blmadm" || $text1 == "Blmadim"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("Hamma shu yerda","Bizdan sizga kim kerak");
$ra = array_rand($rand, 1);

if($text1 == "Alo kim bor" || $text1 == "Kim bor"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]
  ]);
}

$rand = array("Guruhda nazoratchi Adminkaman🙋","Eplasez topvoling","Sizga nima qiziq?😶");
$ra = array_rand($rand, 1);

if($text1 == "  kim" || $text1 == "  kim a?" || $text1 == "  adminka kim?" || $text1 == "  kim?" || $text1 == "  adminka kim"|| $text1 == "  adminka kim" || $text1 == "  kim" || $text1 == "  kim?"){
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]
  ]);
}

$rand = array("Manda otam eshagam yo ismim bor😅","Okaaa manda otam eshagam yo ismim bor😀");
$ra = array_rand($rand, 1);

if($text1 == "Otiz nima" || $text1 == "otiz nma"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("Delta sayyorasining 101 chi yulduzidan","Toza toshkenlimanuuuu bratan😄","Nima sovchi yuborasizmi?");
$ra = array_rand($rand, 1);

if($text1 == "  qattansz" || $text1 == "  qatta turas" || $text1== "  qatta turas" || $text1 == "  qayerdansiz?" || $text1== "  qayerdansiz"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]
  ]);
}

$rand = array("Osvoring masalaxatm (belizdan)😂");
$ra = array_rand($rand, 1);

if($text1 == "Jonga tedi" || $text1 == "Jinga teydi"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("2017 man oka yoshimga tolmadim hali😀","Nmedi😱");
$ra = array_rand($rand, 1);

if($text1 == "  yiliz neci" || $text1 == "  necinci yilsz"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("Sizga nima. Man bilan ishiz bo'masin ERKAAK😣","Sanga nima yursam gruppada","O'chir ovozini svicha kalla, xozir Dubbbayga uchirvoraman");
$ra = array_rand($rand, 1);

if($text1 == "Behruzni nma keregi bor" || $text1 == "Behruzni ciqarib tawela" || $text1 == "Behruzni ocirib tashela" || $text1 == "Behruzni keragi yo" || $text1 == "Optawela Behruzni" || $text1 == "Behruz keremas" ||  $text1 == "Kim qowdi Behruzni" || $text1 == " ni kim qowdi"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("Oziz peshingacha uxlisizu gaprvotkan gapiziya");
$ra = array_rand($rand, 1);

if($text1 == "Salom uyquchila" || $text1 == "Salom uyqicila"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("Uyat bomi xammani oldidaya","Yarashurib olvoti shu qiliq","Eee ol axmoq");
$ra = array_rand($rand, 1);

if($text1 == "😍" || $text1 == "💋"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("Salem jaksimisiz","Salem qalesiz","qales😚");
$ra = array_rand($rand, 1);

if($text1 == "Salem" || $text1 == "salem"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("Salom nikizga gapyo","Salomim so‘lim-so‘lim  kitobdadur o‘ng  qo‘lim.Tringlab hech qoymagan telegramda chap qo‘lim😝","Lug'atizda bowqa gap bormi","Salyut","hello baby😄","Salooom qishloda nma gapla 😁","24 soat onlaynsiz- aa? Nobel berish kere 😜","Vayoooo nma qvos Behruzta","Nmala qvosila chachamay😉");
$ra = array_rand($rand, 1);

if($text1 == "Salom" || $text1 == "salom"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("Oilelada tegovchi yomi😄","sla tarafdan kornmidi");
$ra = array_rand($rand, 1);

if($text1 == "Qattansiz" || $text1 == "qattansz"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("helloo how are you","hi");
$ra = array_rand($rand, 1);

if($text1 == "Hello" || $text1 == "hello" || $text1 == "Hi"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

$rand = array("Sevmi oollll","Nma qli suyunchi berimi","Battar boganiz shu boladi😀");
$ra = array_rand($rand, 1);
if($text1 == "  sizi sevaman" || $text1 == "  sizni sevaman" || $text1 == "  szi sevaman"){
  sendAction($chat_id, 'typing');
Behruz('SendMessage',[
'chat_id'=>$chat_id,    
'reply_to_message_id'=>$mesid,
'text'=>$rand[$ra]

]);
}

function adminlist($chat_id){
  $up = json_decode(file_get_contents('https://api.telegram.org/Behruz'.$token.'/getChatAdministrators?chat_id='.$chat_id),true);
  $result = $up['result'];
$admins = "";
  foreach($result as $key=>$value){
    $found = array_search("administrator",$result[$key]);
    $found2 = array_search("creator",$result[$key]);
    if($found !== false or $found2 !== false){
      $admins = $admins."\n *Ismi >* `".$result[$key]['user']['first_name'].$result[$key]['user']['last_name']."`\n *Usernomi >* [".$result[$key]['user']['username']."](t.me/".$result[$key]['user']['username'].")\n *ID raqami >*` ".$result[$key]['user']['id']."`\n — — — — —";
    }
  }
return $admins;    
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$tx = $message->text;
$uid= $message->from->id;
$rname= $message->reply_to_message->from->first_name;
$rmid= $message->reply_to_message->message_id;
$mention = $message->entities[0]->type;
$ty = $message->chat->type;
$title = $message->chat->title;
$repid = $message->reply_to_message->from->id;
$gruppa = file_get_contents("gruppa.db");
$lichka = file_get_contents("lichka.db");
$new = $message->new_chat_member;
$left = $message->left_chat_member;
$for = $message->forward_from;
$forx = $message->forward_from_chat;
$ssl = file_get_contents("data/$cid/ssilka.db");
          $stic = file_get_contents("data/$cid/stic.db");
          $ras = file_get_contents("data/$cid/rasm.db");
$join = file_get_contents("data/$cid/join.db");
          $gif = file_get_contents("data/$cid/gif.db");
          $ovoz = file_get_contents("data/$cid/ovoz.db");
$sticker = $message->sticker;
$rasm = $message->photo;
$animation = $message->animation;
$voice = $message->voice;
$replytx = $message->reply_to_message->text;
$url = $message->entities[0]->type;
$user =  $message->entities[1]->type;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$type = $message->chat->type;
$text = $message->text;
if($type=="supergroup" or $type=="group"){
    $ex = $msgs[$text];
$ex = explode("|",$ex);
    $txt = $ex[rand(0,count($ex)-1)];
Behruz("sendmessage",[
    'chat_id'=>$message->chat->id,
    'text'=>"$txt",
    'reply_to_message_id'=>$mid
    ]);
}
$mem = Behruz('getChatMembersCount',[
'chat_id'=>$cid,
]);
$azo = $mem->result;

//Yangi odam id si
$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$first_name = $message->from->first_name;
$is_Behruz = $message->new_chat_member->is_Behruz;
$ismcha = $message->from->first_name;
$familiya = $message->from->last_name;
$bio1 = $message->from->about;
$login = $message->from->username;
$soat1 = date('H:i:s',strtotime('5 hour')); 
$sana1 = date('d-M Y',strtotime('5 hour'));
$sana2 = date('z',strtotime('5 hour'));
$gmt = date('O',strtotime('5 hour'));
$oynomi = date('F',strtotime('5 hour'));
$buoy = date('t',strtotime('5 hour'));

if($replytx){
    if($type=="supergroup"  or $type=="group"){
       $replytx = $message->reply_to_message->text;
                 if(strpos($msgs[$replytx],"$text") !==false){
       }else{
        $msgs[$replytx] ="$text|$msgs[$replytx]";
        file_put_contents('msgs.json', json_encode($msgs));
    }
    
}
} 

if($text == "Admins"){
    $adminlist = adminlist($chat_id);
    Behruz('SendMessage',[
    'chat_id'=>$cid,
    'text'=>"*👮 Barcha Adminlar ro`yxati:* \n \n ---------------------------- \n $adminlist",
   'parse_mode'=>'MARKDOWN',
   'disable_web_page_preview'=>'false'
  ]);
} 
    
if($text=="/del_doc"){
unlink("msgs.json");
Behruz("sendmessage",[
"chat_id"=>$cid,
'parse_mode'=>"markdown",
"text"=>"*🗑Baza Tozalandi*"
]);
}

if($text=="/doc"){
Behruz("senddocument",[
"chat_id"=>$message->chat->id,
"document"=>new CURLFile("msgs.json")
]);
}

////////////@Lord_Of_PhP ///////////////////
if($tx=="/panel"){
    $ty = Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$uid
    ]);
$ty = $ty->result->status;
if($ty=="administrator" or $ty=="creator"){
 $ssl = file_get_contents("data/$cid/ssilka.db");
          $stic = file_get_contents("data/$cid/stic.db");
          $ras = file_get_contents("data/$cid/rasm.db");
        $join = file_get_contents("data/$cid/join.db");
          $gif = file_get_contents("data/$cid/gif.db");
          $ovoz = file_get_contents("data/$cid/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","☑️",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","☑️",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","☑️",$ovoz);
          $ssl =  str_replace("on","✅",$ssl);
          $ssl = str_replace("off","☑️",$ssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","☑️",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","☑️",$ras);

    Behruz('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"👇*Holati*


*✅Yoqilgan*
__________

*☑️O'chirilgan*",
'parse_mode'=>"markdown",
'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>"🖼Rasm   $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz       $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker $stic",'callback_data'=>'stic'],['text'=>"🎭Gif            $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka   $ssl",'callback_data'=>'ssl'],['text'=>"👑Forward $join",'callback_data'=>'join']],
                    ],
])
]);
}
}


if($ty=="supergroup"){
mkdir("data");
mkdir("data/$cid");
if(strpos($gruppa,"$cid") !==false){
}else{
file_put_contents("gruppa.db","$gruppa\n$cid");
}

}

 if(($sticker) and $stic=="on"){
     $cr=Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$uid
    ]);
$cr = $cr->result->status;
if($cr=="member"){
Behruz('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
}
 if(($rasm) and $ras=="on"){
     $cr=Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$uid
    ]);
$cr = $cr->result->status;
if($cr=="member"){
Behruz('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
}

    if (($new_chat_members != NUll)&&($is_Behruz!=true)) {
  if((stripos($lan,"fa")!== false) or (stripos($lan,"ar")!==false)){
      $vaqti = strtotime("+999999999999 minutes");
  Behruz('kickChatMember', [
      'chat_id' => $cid,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
    ]);
    }else{
      $test = "<b>👋Salom</b> <a href='tg://user?id=$new_chat_members'>$ismcha</a> ,<b>$title</b> guruhimizga xush kelibsiz!
👥 Grupamiz azolari : $azo";
       Behruz('sendmessage',[
       'chat_id'=>$cid,
       'text'=>$test,
       'parse_mode'=>'html'
     ]);
   }
    }
    if(stripos($text,"/aralash")!==false){ 
        Behruz('sendChatAction',['chat_id'=>$cid,'action'=>"typing"]);
  Behruz('sendmessage', [
      'chat_id' => $cid,
      'text' => str_shuffle($text),
      'parse_mode' => 'html'
  ]);
    }
   if (($new_chat_members != NUll)&&($is_Behruz!=false)) {
$gett = Behruz('getChatMember', [
'chat_id' => $cid,
'user_id' => $uid,
]);
$get = $gett->result->status;
if($get =="member"){
   $vaqti = strtotime("+999999999999 minutes");
  Behruz('kickChatMember', [
      'chat_id' => $cid,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  Behruz('sendChatAction',['chat_id'=>$cid,'action'=>"typing"]);
  Behruz('sendmessage', [
      'chat_id' => $cid,
      'text' => "❗<b>Guruhga faqat adminlar Behruz qo'shishi mumkin!</b>",
      'parse_mode' => 'html'
  ]);
}
}
if($ty=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("lichka.db","$lichka\n$cid");
}
} 
$kanal = "@Webcoding_Uz . @Goal_edu_1";
if($ty=="private"){
   


if($data=="Buyruqlar"){
Behruz('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Meni gruppalarga qo'shing men sizga gruppezi nazoratida bo'laman!
Buning uchun siz meni sozlashingiz kerak bo‘ladi.
Gruppaga meni qo‘shib,adminlik berasiz
va gruppaga* /panel *buyrug‘ini berasiz kerakli kinopka orqali meni osongina sozlashingiz mumkin.*


*Gruppa admini uchun qo‘shimcha commandalar!*
/keep *va so'z - Keep Calmga yozish*
/love *va so'z - I Love ga yozish*
/screen *saytnomi - saytni rasmga olish*
/warn - *Reply qilgan odamga ogohlantirish berasiz!*
/nowarn - *Warnlarini 0 ga tenglaysiz!*
/ban -*Guruhdan ban qilish*
/kick -*Guruhdan kick qilish*
/ro - *Reply qilgan odamizni yozishdan cheklab qo'yasiz!*
/unro - *Reply qilgan odamingizni yozishini kafolatlaysiz!*
/pin - *Reply qilgan textni yuqoriga qistirasiz*
/soat -*Uzbekistondagi aniq vaqt*
/sana -*Aniq Sana*
/InfoTime - *Vaqt haqida*
/InfoUser -* User ma‘lumotnomasi*
/profil - *Sizning profildagi rasmingiz*
/doc - *Behruz Yodlagan So'zlar*

*Shuningdek Behruz inline rejimda kanal va gruppa haqida ma'lumot ham beradi!
Sinab ko'rish tugmasi orqali tekshirib korishingiz mumkin!*


_Funksiyala qo'shilishda davom etadi!_",
'parse_mode'=>"markdown",
'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>"➕Gruppaga qo‘shish",'url'=>'t.me/Group_security_OBehruz?startgroup=new'],
['text'=>"🆔Sinash",'switch_inline_query'=>"@"],],
]
])
]);
}
}
if($mention=="mention"  and $ssl=="on"){
    $cr=Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$uid
    ]);
$cr = $cr->result->status;
if($cr=="member"){
Behruz('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
}
//
 if(($voice) and $ovoz=="on"){
     $cr=Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$uid
    ]);
$cr = $cr->result->status;
if($cr=="member"){
Behruz('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
}
//alooo
 if(($animation) and $gif=="on"){
     $cr=Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$uid
    ]);
$cr = $cr->result->status;
if($cr=="member"){
Behruz('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
}


if($tx == "/InfoUser"){
Behruz('sendmessage',[
'chat_id'=>$cid,
'parse_mode'=>'html',
'text'=>"<b>Ismingiz:</b> $ismcha
<b>Familiyagiz:</b> $familiya
<b>Useringiz:</b> @$login",
]);
}



//
 if($mention=="url" and $ssl=="on"){
     $cr=Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$uid
    ]);
$cr = $cr->result->status;
if($cr=="member"){
Behruz('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
}
 if(($for or $forx) and $join=="on"){
      $cr=Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$uid
    ]);
$cr = $cr->result->status;
if($cr=="member"){
Behruz('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
}
if($new){
Behruz('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
if($left){
Behruz('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
if($mention=="text_link" and $ssl=="on"){
Behruz('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}

if($ty=="supergroup"){

if(strpos($tx,"/start") !==false){
 $cr=Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$uid
    ]);
$cr = $cr->result->status;
if($cr=="creator"or$cr=="administrator"){    
$yes = file_get_contents("data/$cid/index.db");
if($yes){
Behruz('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Men $title gruppasida qayta ishga tushirildim😜</b>",
'parse_mode'=>"html"
]);

}else{

Behruz('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Men $title gruppasida ishga tushirildim😃</b>",
'parse_mode'=>"html"
]);
file_put_contents("data/$cid/index.db","ok");
}
}
}
}
$reply = $message->reply_to_message->text;
$rpl = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true
        ]);
if($tx=="/send" and $cid==$admin){
    Behruz('sendmessage',[
'chat_id'=>$admin,
'text'=>"*📨 Yuboriladigan xabar matnini kiriting. Xabar turi markdown*",'parse_mode'=>"markdown",'reply_markup'=>$rpl
]);
}
    if($reply=="📨 Yuboriladigan xabar matnini kiriting. Xabar turi markdown"){
        $lich = file_get_contents("lichka.db");
        $lichka = explode("\n",$lich);
foreach($lichka as $id){
    Behruz("sendmessage",[
        'chat_id'=>$id,
        'text'=>"$tx"]);
}
}
//sendgroup

     if($tx == "/sendgr" and $cid == $admin){
    Behruz('sendmessage',[
'chat_id'=>$admin,
'text'=>"*📨 Yuboriladigan xabar matnini kiriting. Xabar turi markdown*",'parse_mode'=>"markdown",'reply_markup'=>$rpl
]);
}
    if($reply=="📨 Yuboriladigan xabar matnini kiriting. Xabar turi markdown"){
        $gr = file_get_contents("gruppa.db");
        $gruppa= explode("\n",$gr);
foreach($gruppa as $cid){
    Behruz("sendmessage",[
        'chat_id'=>$cid,
      'text'=>$tx,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
         if($gr){
          Behruz('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"*Umumiy hammaga yuborildi!*",
          'parse_mode'=>'markdown',
          ]);      
        }
      }


//
if($tx=="/screen" or ($tx=="/screen")){
Behruz('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Bu sizga hech qiyinchiliksiz istalgan saytni screen qilib olishingiz mumkin buning uchun*  /screen https://sayt nomi.  \n*Eslatma!* /screen *dan so'ng bitta joy qoldirin*",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$mid,
]);
}

if(mb_stripos($tx,"/screen") !== false){ 
$ex = explode(" ",$tx);
Behruz('SendPhoto',[
'chat_id'=>$cid, 'reply_to_message_id'=>$mid,
'photo'=>"https://api.site-shot.com/?url=$ex[1]",
'caption'=>"by @Goal_edu_1 . @Goal_edu_1 . @Goal_edu_1",
]);
}
///
$id = $update->message->from->id;
$get = file_get_contents("https://api.telegram.org/Behruz".$token."/getUserProfilePhotos?user_id=$id&limit=1");
$json = json_decode($get);
$photo = $json->result->photos[0][0]->file_id;

if($tx == "/profil" or ($tx=="/profil")){
    Behruz('sendPhoto',[
       'chat_id'=>$cid,
        'photo'=>$photo,
        'parse_mode'=>'markdown',
        'caption'=>"*Sizning profildagi rasmingiz*",
        'reply_to_message_id'=>$update->message->message_id,
    ]);
}
/////////////////@Goal_edu_1//////////////////

if(mb_stripos($tx,"/keep") !== false){ 
$soz = explode(" ",$tx);
Behruz('SendPhoto',[
'chat_id'=>$cid,
'photo'=>"http://www.keepcalmstudio.com/-/p.php?t=%EE%BB%AA%0D%0AKEEP%0D%0ACALM%0D%0A$soz[1]%0D%0A$soz[2]%0D%0A$soz[3]&bc=000000&tc=FFFFFF&cc=FFFFFF&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by @Goal_edu_1",
]);
}

if(mb_stripos($tx,"/love") !== false){ 
$ex = explode(" ",$tx);
Behruz('SendPhoto',[
'chat_id'=>$cid, 'reply_to_message_id'=>$mid,
'photo'=>"http://www.iloveheartstudio.com/-/p.php?t=$ex[1]%EE%BB%AE$ex[2]%20$ex[3]%0A$ex[4]%0D%0A%20%20&bc=000000&tc=ffffff&hc=FF0000&f=n&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by @Lord_Of_PhP . @Goal_edu_1",
]);
}


///////////////////@Webcoding_Uz////////////////////
if($tx=="/leavechat" &&$uid==$admin) {
  Behruz('sendmessage', [
      'chat_id' => $cid,
      'text' => "<b>Ho‘p xo‘jayin, guruhni tark etaman!</b>.",
      'parse_mode' => 'html'
  ]);
  Behruz('leaveChat',[
    'chat_id'=>$cid
  ]);
}

//stat

if($tx=="/stat" and  $cid==$admin){
$lich = substr_count($lichka,"\n");
$gr = substr_count($gruppa,"\n");
$jami = $lich + $gr;
 $soat = date('H:i:s', strtotime('5 hour'));
$bugun = date('d-M Y',strtotime('5 hour'));
Behruz('sendmessage',[
'chat_id'=>$cid,
    'text'=> "🔷<b> Behruz statistikasi:</b>\n\n👤 A'zolar: <b>$lich</b>\n👥 Guruhlar: <b>$gr</b>\n📣 Umumiy: <b>$jami</b>\n\n$bugun $soat",
'parse_mode' => 'html',
]);
}
//////////////////Bu Behruz kodi @Lord_Of_PhP ga tegishli///////////////////

        if(stripos($tx,"/soat") !== false){
        $soat = date('H:i:s', strtotime('5 hour'));
  $text = "⏰ Hozir soat: *$soat*";
  $a=json_encode(Behruz('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$cid,
   'text'=>$text,
   'parse_mode' => 'markdown'
  ]));
}

        if(stripos($tx,"/sana") !== false){
        $bugun = date('d-M Y',strtotime('5 hour'));
  $text = "📆 Bugungi sana: *$bugun*";
  $a=json_encode(Behruz('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$cid,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($tx,"/id") !== false){
  $text = "*🆔 Sizning idngiz:* $uid";
  $a=json_encode(Behruz('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$cid,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($tx,"/gid") !== false){
  $text = "*🆔 Guruh idsi:* $cid";
  $a=json_encode(Behruz('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$cid,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if($tx == "/InfoTime"){
Behruz('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Bugun: $sana1-yil
Soat: $soat1
Oy nomi: $oynomi
Oyning: $sana2-kuni
Vaqt mintaqasi: $gmt
Bu oy $buoy kundan iborat*",
'parse_mode'=>"markdown",
]);
}

//warn
$soni = file_get_contents("data/$cid/$uid.db");
    if(stripos($tx,"/warn") !==false){
$cr=Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$uid
    ]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
$azo = Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$repid
    ]);
$yoz = $azo->result->status;

if($yoz=="member"){


   if($soni>=3){
   $kickm = Behruz('kickChatMember', [
        'chat_id' => $cid,
        'user_id' => $repid,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
   if($kickm->ok){
        Behruz('sendMessage', [
        'chat_id' =>$cid,
        'text' => "<b></b><a href='tg://user?id=$repid'>$rname</a><b></b> <b>siz gruppadan chiqarildingiz,chunki shuncha ogohlantirishlarga parvo qilmadingizi!</b>",
        'parse_mode' => 'html'
    ]);
    unlink("data/$cid/$uid.db");
    }
    
}else{
    $hisob = $soni + 1;
$ok = file_put_contents("data/$cid/$uid.db","$hisob");
$soni = file_get_contents("data/$cid/$uid.db");
Behruz('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<b></b><a href='tg://user?id=$repid'>$rname</a><b></b>  <b>Siz ogohlantirish oldiz!
Ogohlantirishlar soni:</b> <code>$soni/4</code>",'parse_mode'=>"html"
    ]);
    
}//ogoh
//kick
}
}
}
//nowarn
$soni = file_get_contents("data/$cid/$uid.db");
    if(stripos($tx,"/nowarn") !==false){
$cr=Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$uid
    ]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
$azo = Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$repid
    ]);
$yoz = $azo->result->status;

if($yoz=="member"){    
if($soni){
  Behruz('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<b></b><a href='tg://user?id=$repid'>$rname</a><b></b>    

<b>sizdagi ogohlantirishlar:</b><code>0/4</code>",'parse_mode'=>"html"
]);
unlink("data/$cid/$uid.db");
}else{
 Behruz('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<b></b><a href='tg://user?id=$repid'>$rname</a><b></b>    

<b>menimcha u ogohlantirish olmagan😊</b> ",'parse_mode'=>"html"
]);
}//ogno
}
}
}
//mte
if ($tx=="/unro"){
    $cr=Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$uid
    ]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
 $ok= Behruz('restrictChatMember',[
    'chat_id'=>$cid,
    'user_id'=>$repid,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
 if($ok->ok){
  Behruz('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<a href='tg://user?id=$repid'>$rname</a><b>siz gruppada yozishingiz mumkin</b>",
    'parse_mode'=>"html"
    ]);
}
}
}



if ($tx=="/ro") {
    $cr=Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$uid
    ]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
$minut = strtotime("+120 minutes");
   $ok = Behruz('restrictChatMember', [
        'chat_id' => $cid,
        'user_id' => $repid,
        'until_date' => $minut,
        'can_send_messages' =>false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
   if($ok->ok){
    Behruz('sendmessage', [
        'chat_id' =>$cid,
        'text' => "<a href='tg://user?id=$repid'>$rname</a><b>siz gruppada 2 soatga yozishdan mahrum etildingiz</b>",
        'parse_mode' => 'html'
    ]);
}
 }    
}
//
if($tx=="/pin"){
    $cr=Behruz('getchatmember',[
    'chat_id'=>$cid,
    'user_id'=>$uid
    ]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
    Behruz('pinchatmessage',[
    'chat_id'=>$cid,
    'message_id'=>$rmid,
    ]);
}
}

    if($tx == "/Kick"  or  $tx == "/kick"){
$gett = Behruz('getChatMember', [
'chat_id' => $cid,
'user_id' => $uid,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $vaqti = strtotime("+1 minutes");
  Behruz('kickChatMember', [
      'chat_id' => $cid,
      'user_id' => $repid,
      'until_date'=> $vaqti,
  ]);
  Behruz('unbanChatMember', [
        'chat_id' => $cid,
        'user_id' => $repid,
    ]);
  Behruz('sendChatAction',['chat_id'=>$cid,'action'=>"typing"]);
  Behruz('sendmessage', [
      'chat_id' => $cid,
      'text' => "🔹 <a href='tg://user?id=$repid'>$rname</a> guruhdan <b>Kick</b> bo‘ldi!",
      'parse_mode' => 'html'
  ]);
}
}

if($tx =="/ban" or $tx == "/Ban"&&$uid==$admin){
       $vaqti = strtotime("+10800000 minutes");
      Behruz('kickChatMember', [
        'chat_id' => $cid,
        'user_id' => $repid,
        'until_date' => $vaqti,
      ]);
    Behruz('sendChatAction',['chat_id'=>$cid,'action'=>"typing"]);
    Behruz('sendMessage', [
        'chat_id'=>$cid,
        'text' => "🔹 <a href='tg://user?id=$repid'>$rname</a> guruhdan <b>ban</b> bo‘ldiz!",
        'parse_mode'=>'html'
    ]);
  }






//inline
$userID = $update->inline_query->from->id;
$theQuery = $update->inline_query->query;
$cid = $update->inline_query->query;
if(mb_stripos($cid,"@")!==false){
$user = Behruz("getchat",[
    'chat_id'=>$cid,
    ]);
$type = $user->result->type;
$id = $user->result->id;
$us = Behruz('getChatMembersCount',[
    'chat_id'=>$cid
    ]);
    $count = $us->result;
if($type=="channel"){
Behruz('answerInlineQuery', [
'inline_query_id'=>$update->inline_query->id,
'cache_time'=>1,
'results'=>json_encode([[
'type'=>'article',
'id'=>base64_encode(1),
'title'=>"$cid\nhaqida ma'lumot",
'input_message_content'=>[
'disable_web_page_preview'=>true,
'parse_mode' => 'markdown',
'message_text'=>"*📡Kanal useri:*  [$cid]\n*👥A'zolari*: `$count`\n*🆔Kanal id:* `$id`",
],
'reply_markup' =>
[ 'inline_keyboard'=>[
                   [["switch_inline_query"=>"@", 'text' => "🆔Aniqlash"],],
               ] ],

]
])
]);
}
//end
if($type=="supergroup"){
Behruz('answerInlineQuery', [
'inline_query_id'=>$update->inline_query->id,
'cache_time'=>1,
'results'=>json_encode([[
'type'=>'article',
'id'=>base64_encode(1),
'title'=>"$cid\ngruppasi haqida ma'lumot",
'input_message_content'=>[
'disable_web_page_preview'=>true,
'parse_mode' => 'markdown',
'message_text'=>"*📡Gruppa useri:*  [$cid]\n*👥 Gruppa a'zolari*: `$count`\n*🆔Gruppa id:* `$id`",
],
'reply_markup' =>
[ 'inline_keyboard'=>[
                   [["switch_inline_query"=>"@", 'text' => "🆔Aniqlash"],],
               ] ],

]
])
]);
}
}
//media
$qid = $update->callback_query->id;
$cid2 = $update->callback_query->message->chat->id;
$from2 = $update->callback_query->from->id;
$mid2 = $update->callback_query->message->message_id;

$data = $update->callback_query->data;
if($data){
    
$ty = Behruz('getchatmember',[
    'chat_id'=>$cid2,
    'user_id'=>$from2
    ]);
$ty = $ty->result->status;
if($ty=="administrator" or $ty=="creator"){

Behruz('answercallbackquery',[
    'callback_query_id'=>$qid
    ]);    
         if($data=="rasm"){         
              $stic = file_get_contents("data/$cid2/rasm.db");
              if($stic){
              if($stic=="on"){
                  file_put_contents("data/$cid2/rasm.db","off");
              }
              if($stic=="off"){
                  file_put_contents("data/$cid2/rasm.db","on");
              }
          }else{
              file_put_contents("data/$cid2/rasm.db","on");
          }
        $ssl = file_get_contents("data/$cid2/ssilka.db");
         $stic = file_get_contents("data/$cid2/stic.db");
          $ras = file_get_contents("data/$cid2/rasm.db");
          $ssl =  str_replace("on","✅",$ssl);
          $ssl = str_replace("off","☑️",$ssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","☑️",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","☑️",$ras);
$join = file_get_contents("data/$cid2/join.db");
          $gif = file_get_contents("data/$cid2/gif.db");
          $ovoz = file_get_contents("data/$cid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","☑️",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","☑️",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","☑️",$ovoz);
        Behruz("editMessageReplyMarkup",[
            'chat_id'=>$cid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>"🖼Rasm   $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz       $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker $stic",'callback_data'=>'stic'],['text'=>"🎭Gif            $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka   $ssl",'callback_data'=>'ssl'],['text'=>"👑Forward $join",'callback_data'=>'join']],
             
 ]
                ]),
        ]);
    }
    

     if($data=="ssl"){
  $ssl = file_get_contents("data/$cid2/ssilka.db");
         if($ssl){
         if($ssl=="on"){
         file_put_contents("data/$cid2/ssilka.db","off");
         }
         if($ssl=="off"){
         file_put_contents("data/$cid2/ssilka.db","on");
         }
         }else{
         file_put_contents("data/$cid2/ssilka.db","on");
         } 
          $ssl = file_get_contents("data/$cid2/ssilka.db");
          $stic = file_get_contents("data/$cid2/stic.db");
          $ras = file_get_contents("data/$cid2/rasm.db");
$join = file_get_contents("data/$cid2/join.db");
          $gif = file_get_contents("data/$cid2/gif.db");
          $ovoz = file_get_contents("data/$cid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","☑️",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","☑️",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","☑️",$ovoz);
          $ssl =  str_replace("on","✅",$ssl);
          $ssl = str_replace("off","☑️",$ssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","☑️",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","☑️",$ras);
        Behruz("editMessageReplyMarkup",[
            'chat_id'=>$cid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                    [['text'=>"🖼Rasm   $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz       $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker $stic",'callback_data'=>'stic'],['text'=>"🎭Gif            $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka   $ssl",'callback_data'=>'ssl'],['text'=>"👑Forward $join",'callback_data'=>'join']],

                    ]
        ]),
        ]);
    }


    if($data=="stic"){
  $ssl = file_get_contents("data/$cid2/stic.db");
         if($ssl){
         if($ssl=="on"){
         file_put_contents("data/$cid2/stic.db","off");
         }
         if($ssl=="off"){
         file_put_contents("data/$cid2/stic.db","on");
         }
         }else{
         file_put_contents("data/$cid2/stic.db","on");
         } 
          $ssl = file_get_contents("data/$cid2/ssilka.db");
          $stic = file_get_contents("data/$cid2/stic.db");
          $ras = file_get_contents("data/$cid2/rasm.db");
           $join = file_get_contents("data/$cid2/join.db");
          $gif = file_get_contents("data/$cid2/gif.db");
          $ovoz = file_get_contents("data/$cid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","☑️",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","☑️",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","☑️",$ovoz);
          $ssl =  str_replace("on","✅",$ssl);
          $ssl = str_replace("off","☑️",$ssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","☑️",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","☑️",$ras);
        Behruz("editMessageReplyMarkup",[
            'chat_id'=>$cid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                 [['text'=>"🖼Rasm   $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz       $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker $stic",'callback_data'=>'stic'],['text'=>"🎭Gif            $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka   $ssl",'callback_data'=>'ssl'],['text'=>"👑Forward $join",'callback_data'=>'join']],
                    ]
                    ]),
        ]);
    }

//JOIN
  if($data=="join"){
  $ssl = file_get_contents("data/$cid2/join.db");
         if($ssl){
         if($ssl=="on"){
         file_put_contents("data/$cid2/join.db","off");
         }
         if($ssl=="off"){
         file_put_contents("data/$cid2/join.db","on");
         }
         }else{
         file_put_contents("data/$cid2/join.db","on");
         } 
          $ssl = file_get_contents("data/$cid2/ssilka.db");
          $stic = file_get_contents("data/$cid2/stic.db");
          $ras = file_get_contents("data/$cid2/rasm.db");
           $join = file_get_contents("data/$cid2/join.db");
          $gif = file_get_contents("data/$cid2/gif.db");
          $ovoz = file_get_contents("data/$cid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","☑️",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","☑️",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","☑️",$ovoz);
          $ssl =  str_replace("on","✅",$ssl);
          $ssl = str_replace("off","☑️",$ssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","☑️",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","☑️",$ras);
        Behruz("editMessageReplyMarkup",[
            'chat_id'=>$cid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                  [['text'=>"🖼Rasm   $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz       $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker $stic",'callback_data'=>'stic'],['text'=>"🎭Gif            $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka   $ssl",'callback_data'=>'ssl'],['text'=>"👑Forward $join",'callback_data'=>'join']],
                    ]
                    ]),
        ]);
    }
//ovoz
  if($data=="ovoz"){
  $ssl = file_get_contents("data/$cid2/ovoz.db");
         if($ssl){
         if($ssl=="on"){
         file_put_contents("data/$cid2/ovoz.db","off");
         }
         if($ssl=="off"){
         file_put_contents("data/$cid2/ovoz.db","on");
         }
         }else{
         file_put_contents("data/$cid2/ovoz.db","on");
         } 
          $ssl = file_get_contents("data/$cid2/ssilka.db");
          $stic = file_get_contents("data/$cid2/stic.db");
          $ras = file_get_contents("data/$cid2/rasm.db");
           $join = file_get_contents("data/$cid2/join.db");
          $gif = file_get_contents("data/$cid2/gif.db");
          $ovoz = file_get_contents("data/$cid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","☑️",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","☑️",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","☑️",$ovoz);
          $ssl =  str_replace("on","✅",$ssl);
          $ssl = str_replace("off","☑️",$ssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","☑️",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","☑️",$ras);
        Behruz("editMessageReplyMarkup",[
            'chat_id'=>$cid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                  [['text'=>"🖼Rasm   $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz        $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker $stic",'callback_data'=>'stic'],['text'=>"🎭Gif             $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka   $ssl",'callback_data'=>'ssl'],['text'=>"👑Forward $join",'callback_data'=>'join']],
                    ]
                    ]),
        ]);
    }
//gif
  if($data=="gif"){
  $ssl = file_get_contents("data/$cid2/gif.db");
         if($ssl){
         if($ssl=="on"){
         file_put_contents("data/$cid2/gif.db","off");
         }
         if($ssl=="off"){
         file_put_contents("data/$cid2/gif.db","on");
         }
         }else{
         file_put_contents("data/$cid2/gif.db","on");
         } 
          $ssl = file_get_contents("data/$cid2/ssilka.db");
          $stic = file_get_contents("data/$cid2/stic.db");
          $ras = file_get_contents("data/$cid2/rasm.db");
           $join = file_get_contents("data/$cid2/join.db");
          $gif = file_get_contents("data/$cid2/gif.db");
          $ovoz = file_get_contents("data/$cid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","☑️",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","☑️",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","☑️",$ovoz);
          $ssl =  str_replace("on","✅",$ssl);
          $ssl = str_replace("off","☑️",$ssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","☑️",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","☑️",$ras);
        Behruz("editMessageReplyMarkup",[
            'chat_id'=>$cid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                  [['text'=>"🖼Rasm   $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz        $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker $stic",'callback_data'=>'stic'],['text'=>"🎭Gif             $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka   $ssl",'callback_data'=>'ssl'],['text'=>"👑Forward $join",'callback_data'=>'join']],
                    ]
                    ]),
        ]);
    }


 }else{
Behruz('answercallbackquery',[
    'callback_query_id'=>$qid
    ]);
}
}
///inline
$userID = $update->inline_query->from->id;
$theQuery = $update->inline_query->query;
$cid = $update->inline_query->query;