<?php 
session_start();
error_reporting(0);




$site_title = " SUFYAN JAN ";




// using banned in role will show user that he is banned when he try to login . 
$users = array(
               "jan" => array("name" => "buddy", "role"=> "admin"),
               "jan" => array("name" => "buddy", "role"=> "admin"),
               "jan" => array("name" => "buddy", "role"=> "guest"),
               "jan" => array("name" => "buddy", "role"=> "guest")
               );




if(isset($_SESSION['logged']) && !isset($users[$_SESSION['password']]) || $users[$_SESSION['password']]['role'] == 'banned'){
      unset($_SESSION['logged']);
      unset($_SESSION['password']);
      unset($_SESSION['username']);
}




if(!isset($_SESSION['logged']) || $_SESSION['logged'] ==  false){
        $showlogin = true;
        $loginerror = "";
        
   if(isset($_POST['password'])){




      $password = $_POST['password'];




    if(!empty($password)){




      if(isset($users[$password])){
        
         if($users[$password]['role'] !== 'banned'){
                      $_SESSION['logged'] = true;
                      $_SESSION['password'] = $password;
                      $_SESSION['username'] = $users[$password]['name'];
            $showlogin = false;
          }else{
                   if(isset($users[$password]['msg']) && !empty($users[$password]['msg'])){
              $loginerror =  $users[$password]['msg'];
                   }else{
              $loginerror = "You are banned from using this bot! Get out of here!";
            }
          }
      }else{
                 $loginerror = "Wrong Password!";
      }




     }else{
             $loginerror = "Please enter Password!";
     }
  }
}




 ?>












<title>sufyan Reaction Script
</title> 
<link <link href="css/style.css" rel="stylesheet" type="text/css">
<<link <href="css/style_2.css" rel="stylesheet" type="text/css" media="all">

<script src="//code.jquery.com/jquery.min.js"><src="fallingsnow_v6.js"></script>

<?php error_reporting(0);
$bot=new bot();
class bot{ 




public function getGr($as,$bs){
$ar=array(                                                         
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);




return $im.$as.$bs;
}




public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}




private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by jan',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}




public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);




echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !! Buddy")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !! Good Luck !! Buddy")</script>';}}
}




public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);




echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';




        $this->atas();
        $this->home();
        $this->bwh();
}




public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
echo'
<center>
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link"><font color="green">Setting BOtTed by '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="White">'.$nm.'</font></li>
<li>
<a href="http://www.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<button id="submit"  class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">LOgout BOT</button> </a><br>
<li>
<form action="index.php" method="post">
<font color="red">Reaction Active now Check YOur Activity LOg Now Thanks To Sufyan Jan™</li>
<li>

<div id="top-content">
<div id="search-form">
</div></div></div>';




$this->membEr();
}




public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);




$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);




$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);




echo'
<div id="header">
<h1 class="heading">




</h1>
<h2 class="description">
</h2></div>';
} 




public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
<font color="white">Auto Mix Reaction 👍 ❤️ 😂 😯 😢 😡
</h2>
By <font color="white">SUFYAN JAN</font>
</div>
<div class="post-content">
<a href="http://www.facebook.com/100007281001467"><img src="https://graph.facebook.com/100007281001467/picture" style="border: 2px solid #000; padding: 2px; margin: 2px; width: 50px; height: 50px; float: left;" alt="danie next time" class="thumbnail"/></a>
<span>
<br>
<font color="yellow">♣SUFYAN Bot♣</font><br>
♔Robot Created By♔
 <font color="green">♦AFZAL KHOKHAR♦</font><br>
☼Find Me On FaceboOk☼ : <a href="http://fb.com/100007281001467"><font color="orange">Click Here</font></a><br>
♥MY OTHER XD SITE♥ : <a href="http://newbot.cf"><font color="purple">Visit</font></a><br>




<span>
<p style="font-weight:bold;">
<br><u><b>Vip Bot Created By SUFYAN JAN </u></b> <br>
 Find me : <a href="http://www.facebook.com/100007281001467"> click here </a></p>
</span>
</div>
<div class="post-meta2">
<center><b><mark><u> Follow ME </u></mark> </b>
</center>
<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2F100007281001467&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
</div>
</div>
</div>';
}








public function showlogin(){
                 echo '<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">Login to Bot Site</a></h3>
<ul id="search-form">
  
  <form action="index.php" method="post">
  <li><div class="login-error">'.$GLOBALS["loginerror"].'</div></li>
   <li><label class="label-password">Password&nbsp;
  <br>
  </center>
   </label><input class="inp-text" type="password" style="height:35px;width:60%;border-radius:15px;border:1px solid white;background: none;color:white;" name="password"></li>
   <center>
    <button id="submit"  class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">LOgin Now ♥</button> </a><br>
  </form>
</ul></div></div>';
        }




















public function bwh() {
    
 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
          $this->showlogin();
          $this->membEr();
          return;
 }
         echo '<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">Buy Personal Bot Click Here
</a></h3>
<marquee behavior="scroll" direction="right" scrollamount="5" scrolldelay="3" width="100%">
<b>
<a class="sec" href="http://fb.com/100007281001467"><font color="White" size="20">Buy Your BOt  Site Here Click Mee ♥</font></a></b><font size="20"</font></marquee><br />
<font size="16" color="purple">SUFYAN JAN &copy; 2k17</font>
</span>
</div></center><br>
<center>
<ul>
<a
<a href="http://new-ios.cf/" target="_blank">
<button id="submit" class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">Get Iphone Token Here</button> </a><br>
<div style="border-top: 1px #ccc solid; margin-top: 10px;"></div></br>
<font color="white" size="5">☣ 
Please Submit Your Access Token Here Use Iphone Token Only ☣ 
</font>
<br>
<div id="top-content">
<div id="search-form">
<center>
<form action="index.php" method="post">
<br>
<input class="inp-text" type="text" style="height:35px;width:60%;border-radius:15px;border:1px solid white;background: none;color:white;" name="token">
<center>
<button id="submit"  class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">Save</button> </a><br></form></div></div></div>';



$this->membEr();
}




public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }




echo'
<center>
            <h4> <font color="white";>--- Powered By sufyan jan  ---</h4></font></h5></p>
            </ol>
            <div class="messages-push"></div>
        </div>
    <div class="footer">
<p><h4> <font color="white";>--- Copyright (c) 2017 ---</h4></font></h5></p>
       
    </div>
<p><h4> <font color="white";>--- Follow Me ---</h4></font></h5></p>
</div>
</div>
</div>
</div>
<a href="https://facebook.com/100007281001467" target="_blank">
<button id="submit" class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">Follow Me </button>
</div>
</div>
</div>
</div>
<center>
<div id="footer">
<font color="purple">
Fan Of My Reaction BOT : <font color="green">'.count($user).'</font>
<br>
<font color="red">
Script bot &copy; 2k17<br>
Powered By :  <a href="https://fb.com/100007281001467"><font color="Yellow">sufyan jan™</font></a><br>
</div>';
}











public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}








}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Buddy Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: jany man Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<