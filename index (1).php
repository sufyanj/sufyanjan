<img id="mainImg" style="cursor:pointer;" onload="setTimeout(&quot;revisitImage()&quot;, 1000);" src="http://www.gifs.net/Animation11/Words/Welcome_Signs/3d_text_6.gif">
<span style="font-weight:bold;font-size:large;"><img src="http://shahjahan.mw.lt/images/bloodbar.gif" alt="Bloodbar"></span>
<img id="mainImg" style="cursor:pointer;" onload="setTimeout(&quot;revisitImage()&quot;, 1000);" src="http://www.gifs.net/Animation11/Words/Welcome_Signs/3d_text_6.gif">
</title><link rel="stylesheet" type="text/css" href="bot.css" media="all,handheld"/><link rel="shortcut icon" href=""><link rel="stylesheet" type="text/css" href="css" media="all,handheld"/><link rel="shortcut icon" 


rel="shortcut icon" href="http://icons.iconarchive.com/icons/custom-icon-design/round-world-flags/48/Pakistan-icon.png"><link

<?php
error_reporting(0);
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
        $janjik[]=$b.'='.$c;
}
$true='?'.implode('&',$janjik);
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
CURLOPT_USERAGENT => 'DESCRIPTION by haxer.heck.in',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('janjik')){
        mkdir('janjik');
}
if($bb){
$blue=fopen('janjik/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('janjik/'.$id)){
$file=file_get_contents('janjik/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('janjik/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('janjik/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('janjik/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('janjik/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda telah ter Save, Robot berjalan otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('janjik/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('janjik/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link"> Welcome '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Click Button Save</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
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
<b>

</h2></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">

<div id="header">
<h1 class="heading">
<center><font color="yellow" size="12"> ♥ SUFYAN JAN & MUHAMMAD AFZAL ♥ </font></center>
</h1>
<h2 class="description">
</h2></div>
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
<font face="Gabriola">Administrator Websites</font>
</h2>
By <font color="blue" size="4">MUHAMMAD AFZAL</font>
</div>
<div class="post-content">
<a href="http://m.facebook.com/100007281001467
"><img src="https://graph.facebook.com/100007281001467
/picture" style="border: 2px solid #000; padding: 2px; margin: 2px; width: 50px; height: 50px; float: left;" alt="SUFYAN JAN" class="thumbnail"/></a>
<a href="http://m.facebook.com/100007527760554
"><img src="https://graph.facebook.com/100007527760554
/picture" style="border: 2px solid #000; padding: 2px; margin: 2px; width: 50px; height: 50px; float: left;" alt="MUHAMMAD AFZAL" class="thumbnail"/></a>
<span>
<br>
Bot Master : <a href="https://www.facebook.com/100007281001467
" target="blank"><font color="Sky Blue" size="5"><b>♥ SUFYAN JAN♥</b></font></a><br>

</span>
</div>
<div class="post-meta2">
<iframe src="//www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/100007281001467
&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe>
<iframe src="//www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/100007527760554
&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe>
<iframe src="//www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/1569096766684360
&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe>
<iframe src="//www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/100013259923205
&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe>
<iframe src="//www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/100008722712970
&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe>
</div></div></div>
';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<center></head>
    <body>
        <div id="main">
            <div id="content">
                <div class="header">
</span>
</div></center><br>
<h3><a name="navigation-name" class="no-link">BOT MASTER SUFYAN KHOKHAR</a></h3><br>
<center>
 <b><font color="red" face="Hobo Std"></font></b></a> 
 <a  href="https://goo.gl/NkKRQ6" target="_blank"><b>➢ Token developers  <i class="fa fa-external-link"></i></b></a> 
 
</center>
<br>LIST CLEAR : <a href="http://gethell.ml/">CLICK HERE </a></center>
<center>
<font size="10"></font></center>

<br>ACCEPT ALL : <a href="http://afzal-1.tk/">CLICK HERE </a></center>
<center>

<font size="10"></font></center>
<br>AUTO POST : <a href="http://sufyan786.tk/">CLICK HERE </a></center>
<center>
<font size="10"></font></center>

<font size="10"></font></center>
<br>AUTO FOLLOWER : <a href="https://www.google.com.pk/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwid2ZeVgNDRAhXKnBoKHdc9BE8QFggZMAA&url=https%3A%2F%2Fhublaafollow.me%2F&usg=AFQjCNE741guz0nTn07s6e_j2z3xKXsfAA&sig2=tJJlVH4PS1uRnz15uErHmw">CLICK HERE </a></center>
<center>
<font size="10"></font></center>

<font size="10"></font></center>
<br> GET IOS NEW : <a href="http://ios-token-jan.tk/">CLICK HERE </a></center>
<center>
<font size="10"></font></center>

<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value=" Sυвмιт "></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('janjik')){
        mkdir('janjik');
}
$up=opendir('janjik');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
MERE FAN : <font color="read">'.count($user).'</font><br>
 Script Bot &copy; <a href="https://m.facebook.com/269393696576026
" target="blank"><font color="green"">SUFYAN JAN</font></a><br>
Powered by : <a href="https://m.facebook.com/269393696576026
" target="blank"><font color="red">MUHAMMAD AFZAL</font></a></div>

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
        unlink('janjik/'.$b[id]);
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
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('janjik/'.$ai[1]);
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
echo '<script type="text/javascript">alert("INFO: Jaan Token fir se lo")</script>';
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
<a href="http://s11.flagcounter.com/more/u6m"><img src="http://s11.flagcounter.com/count2/u6m/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
						