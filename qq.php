<?php

ob_start();
define('API_KEY',"5051984039:AAHGiYTQi4jwrg8AEW8Lta0rnKWMaOIvFe4");
$admin = "2067700229";  ///admin id ozinğniń idñdi bilmeseñ @my_id_bot  qa start bas
$botname = "ChannelNBPBot";  ///bot useri
$kanal = "@U_coder";  // kanal useri


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
$type = $message->chat->type;
$step = file_get_contents("saalahhbot/$cid.step");
mkdir("saalahhbot");
$message = $update->message;
$saat = date("H:i:s",strtotime("3 hour")); 
$sane = date("d-M Y",strtotime("3 hour"));
$mid = $message->message_id; 
$chat_id = $message->chat->id;
$firstname = $message->from->first_name;
$cid = $message->chat->id;
$text = $message->text; 
$mtext = $message->text; 
$tx = $message->text; 
$sreply = $message->reply_to_message->text; 
$reply_menu = json_encode([ 
           'resize_keyboard'=>false, 
            'force_reply' => true, 
            'selective' => true 
        ]); 
$key = json_encode([ 
'resize_keyboard'=>true, 
'keyboard'=>[ 
[['text'=>"📨 Xabar"],['text'=>"♨️ Ağzalar"]],[['text'=>"➕ Grupağa qosiw"],]
] 
]); 
$agza = json_encode([ 
'resize_keyboard'=>true, 
'keyboard'=>[ 
[['text'=>"👥 Ağza boldim"],]
] 
]); 

$artqa = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🏠 Bas bõlimge"],],
]
]);
//---------------------------------------//
$id = $message->from->id;
$from_id = $message->from->id; 
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$kanal&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"Assalawma aliykum **[$firstname](tg://user?id=$cid)** Botimizğa Xosh keldiñiz. Bot gurupalariñizdi qarawilap turiwshi bolip gurupadagi reklama Gif sticker poto bideolardi õshirip baradi hàm olarğa eskertiw beredi.
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
Botdan paydalaniw ushin $kanal kanalğa ağza boliw shàrt",
'reply_markup'=>$agza,
]);
return false;
}

$type = $message->chat->type;
if($type=="private"){
if ($text == "/start" or $text == "👥 Ag`za boldim" and strpos($abood, '"status":"left"') != TRUE){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"*Botdan endi paydalansañiz boladi botdi gurupaga qosiñ hàm oni admin etiñ Bot 24 saat gurupani qarawilaydi*",
'parse_mode'=>'markdown',
'reply_markup'=>$key,
]);
}
}

if($tx=="/gr" or $tx=="➕ Grupağa qosiw"){
bot('sendMessage',[  
     'chat_id'=>$cid,  
     'text'=>"*➕ Grupağa qosiw*\n\nGrupani qosiñ",  
     'parse_mode'=>'markdown',  
'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>"➕Grupani qosiw",'url'=>'t.me/$botname?startgroup=new'],
]
]
])
]);
}
if($tx == "🏠 Bas bõlimge"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Siz bas bõlimdesiz*",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
}

if($tx=="/xabar" or $tx=="📨 Xabar"){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"Xabardi jazin",
'parse_mode'=>'markdown',
        'reply_markup'=>$reply_menu
        ]);
    
}
if($sreply=="Xabardi jazin"){
    bot('sendmessage',[
        'chat_id'=>$admin,
        'text'=>"*Taza xabar keldi✔*\n\n*♾id raqami* $cid \n \n*☠Username:* @$user\n\n🕵*Ismi:* [$name](tg://user?id=$cid ) \n\n*Habar matni:* $tx\n \n*Javob qaytarmochi bolsangiz*\n\n☞ #javob=$cid=javob matni",
'parse_mode'=>'markdown',
        'disable_web_page_preview'=>true,
'reply_markup'=>$key
]);
}if($cid==$admin){
if(strpos($tx,"#javob")!==false){
    $ex=explode("=",$tx);
   $bor= bot('sendmessage',[
        'chat_id'=>"$ex[1]",
        'text'=>"$ex[2]",
        'reply_markup'=>$key
        ]);    
}}
if($sreply=="Xabardi jazin"){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"*xabar jiberildi*",
'parse_mode'=>'markdown',
'reply_markup'=>$key
]);}
if($bor){
    bot('sendmessage',[
        'chat_id'=>$admin,
        'text'=>"Xabar jetkizildi!!"
        
        ]);
}
$baza = file_get_contents("azo.dat");  
if(mb_stripos($baza, $cid) !== false){  
}else{  
file_put_contents("azo.dat", "$baza\n$cid");
}  
if($tx=="/stat" or $tx=="♨️ Ağzalar"){
$baza = file_get_contents("azo.dat"); 
$baza1 = substr_count($baza,"\n"); 
$gruppa = substr_count($baza,"-"); 
$odam = $baza1 - $gruppa; 
bot('sendMessage',[ 
     'chat_id'=>$cid, 
     'text'=>"*♨️ Ağzalar*\n\n👤 Bot azalari: *+$odam*
👥 Gurupalar: *+$gruppa*", 
     'parse_mode'=>'markdown', 
'reply_markup'=>$artqa,
]);  
}
// chiqib ketdi
if(isset($update->message-> left_chat_member )){
    $name = $message->from->first_name;
bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"👣 $name *gurupadan shiğip ketdi*😣",
'parse_mode'=>'markdown',
]);
}
// chiqib ketdi
elseif(isset($update->message-> leaveChat )){
    $name = $message->from->first_name;
bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"👣 $name *gurupadan shiğip ketdi*😣",
'parse_mode'=>'markdown',
]);
}

if($tx=="http://" or $tx=="www" or $tx=="reklama" or $tx=="https://" or $tx=="/" or $tx=="@" or $tx=="link" or $tx=="silka" or $tx=="t.me"){
$name = $message->from->first_name;
  if($get =="member"){
   bot('deleteMessage',[ 
        'chat_id'=>$message->chat->id, 
        'message_id'=>$message->message_id, 
    ]); 
}
}
//salemlew

if(stripos($tx,"Kim bar") !== false){
bot('sendmessage',[
'reply_to_message_id'=>$mid,
'chat_id'=> $cid,
'text'=>"*Men barman tanisiip otirayiq*",
'parse_mode'=>'markdown',
]);
}
//link
if($text == "21" or $text == "poto"){
bot('photo',[
 'chat_id'=>$chat_id, 
 'photo'=>"https://t.me/qarawli/47",
 'reply_to_message_id'=>$message->message_id, 
]);
}

//reklama
if(isset($message->sticker)){ 
    bot('deleteMessage',[ 
        'chat_id'=>$message->chat->id, 
        'message_id'=>$message->message_id, 
    ]); 
}
if(isset($message->voice)){ 
    bot('deleteMessage',[ 
        'chat_id'=>$message->chat->id, 
        'message_id'=>$message->message_id, 
    ]); 
}

if(isset($message->photo)){ 
    bot('deleteMessage',[ 
        'chat_id'=>$message->chat->id, 
        'message_id'=>$message->message_id, 
    ]); 
}

if(isset($message->audio)){ 
    bot('deleteMessage',[ 
        'chat_id'=>$message->chat->id, 
        'message_id'=>$message->message_id, 
    ]); 
}
if(isset($message->document)){ 
    bot('deleteMessage',[ 
        'chat_id'=>$message->chat->id, 
        'message_id'=>$message->message_id, 
    ]); 
} 
if(isset($message->video)){ 
    bot('deleteMessage',[ 
        'chat_id'=>$message->chat->id, 
        'message_id'=>$message->message_id, 
    ]); 
} 

if(isset($message->Gifs)){ 
    bot('deleteMessage',[ 
        'chat_id'=>$message->chat->id, 
        'message_id'=>$message->message_id, 
    ]); 
} 
if(isset($message->file)){ 
    bot('deleteMessage',[ 
        'chat_id'=>$message->chat->id, 
        'message_id'=>$message->message_id, 
    ]); 
} 

if(isset($message->music)){ 
    bot('deleteMessage',[ 
        'chat_id'=>$message->chat->id, 
        'message_id'=>$message->message_id, 
    ]); 
} 

// admin kommanda
if(mb_stripos($mtext,"@") !== false){
$admin_id = $admin;
if($admin_id == $cid){

$bot->sendMessage($cid, "Salom");
}}



?>
