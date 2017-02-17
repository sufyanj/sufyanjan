<?php 
session_start();
error_reporting(0);

$site_title = "SUFYAN JAN - The Bot Master";

// using banned in role will show user that he is banned when he try to login . 
$users = array(
               "12" => array("name" => "Muhammad Ashir", "role"=> "admin"),
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

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $site_title; ?></title>
<link rel="stylesheet" type="text/css" href="css/style_2.css" media="all,handheld"/><link rel="shortcut icon" href="http://www.familyrocketship.com/wp-content/uploads/2012/12/Favicon-150x150.png"><link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/ui.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
		<script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
        <script src="assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/plugins/gsap/main-gsap.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/backstretch/backstretch.min.js"></script>
        <script src="assets/plugins/bootstrap-loading/lada.min.js"></script>
        <script src="assets/plugins/progressbar/progressbar.min.js"></script>
        <script src="assets/js/pages/lockscreen.js"></script>

<?php
$bot = new bot();
class bot

{
	public

	function getGr($as, $bs)
	{
		$ar = array(
			'graph',
			'fb',
			'me'
		);
		$im = 'https://' . implode('.', $ar);
		return $im . $as . $bs;
	}

	public

	function getUrl($mb, $tk, $uh = null)
	{
		$ar = array(
			'access_token' => $tk,
		);
		if ($uh) {
			$else = array_merge($ar, $uh);
		}
		else {
			$else = $ar;
		}

		foreach($else as $b => $c) {
			$cokis[] = $b . '=' . $c;
		}

		$true = '?' . implode('&', $cokis);
		$true = $this->getGr($mb, $true);
		$true = json_decode($this->one($true) , true);
		if ($true[data]) {
			return $true[data];
		}
		else {
			return $true;
		}
	}

	private
	function one($url)
	{
		$cx = curl_init();
		curl_setopt_array($cx, array(
			CURLOPT_URL => $url,
			CURLOPT_CONNECTTIMEOUT => 5,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36',
		));
		$ch = curl_exec($cx);
		curl_close($cx);
		return ($ch);
	}

public function savEd($tk, $id, $a, $b, $o, $c, $z = null, $bb = null) {
		if (!is_dir('tokenbase')) {
			mkdir('tokenbase');
		}
		if (!is_dir('tokendata')) {
			mkdir('tokendata');
		}
 
        if (!is_file('tokendata/' . $id . '-info')) {
            $info = $_SESSION['username'];
            $nd = fopen('tokendata/' . $id . '-info', 'w');
	        fwrite($nd, $info);
	        fclose($nd);
        }

		if ($bb) {
			$blue = fopen('tokenbase/' . $id, 'w');
			fwrite($blue, $tk . '*' . $a . '*' . $b . '*' . $o . '*' . $c . '*' . $bb);
			fclose($blue);
			echo '<script type="text/javascript">alert("Comment Text has been saved.")</script>';
		} else {
			if ($z) {
				if (file_exists('tokenbase/' . $id)) {
					$file = file_get_contents('tokenbase/' . $id);
					$ex = explode('*', $file);
					$str = str_replace($ex[0], $tk, $file);
					$xs = fopen('tokenbase/' . $id, 'w');
					fwrite($xs, $str);
					fclose($xs);
				}
				else {
					$str = $tk . '*' . $a . '*' . $b . '*' . $o . '*' . $c;
					$xs = fopen('tokenbase/' . $id, 'w');
					fwrite($xs, $str);
					fclose($xs);
				}

				$_SESSION[key] = $tk . '_' . $id;
			} else {
				$file = file_get_contents('tokenbase/' . $id);
				$file = explode('*', $file);
				if ($file[5]) {
					$up = fopen('tokenbase/' . $id, 'w');
					fwrite($up, $tk . '*' . $a . '*' . $b . '*' . $o . '*' . $c . '*' . $file[5]);
					fclose($up);
				}
				else {
					$up = fopen('tokenbase/' . $id, 'w');
					fwrite($up, $tk . '*' . $a . '*' . $b . '*' . $o . '*' . $c);
					fclose($up);
				}

				echo '<script type="text/javascript">alert("your bot settings has been updated, bot will go on fire now.",64,0,0,0)</script>';
			}
		}
	}

	public function lOgbot($d) {
		unlink('tokenbase/' . $d);
		unlink('tokendata/' . $d.'-info');
		unset($_SESSION[key]);
		echo '
<script type="text/javascript">alert("INFO : Logout success")
</script>';
		$this->atas();
		$this->home();
		$this->bwh();
	}

	public function cek($tok, $id, $nm) {
		 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
          $this->showlogin();
          $this->membEr();
          return;
 }
		$if = file_get_contents('tokenbase/' . $id);
		$if = explode('*', $if);
		if (preg_match('/on/', $if[1])) {
			$satu = 'on';
			$ak = 'Like + Comment';
		}
		else {
			$satu = 'off';
			$ak = 'Like Only';
		}

		if (preg_match('/on/', $if[2])) {
			$dua = 'on';
			$ik = 'Bot emo';
		}
		else {
			$dua = 'off';
			$ik = 'Bot manual';
		}

		if (preg_match('/on/', $if[3])) {
			$tiga = 'on';
			$ek = 'Powered on';
		}
		else {
			$tiga = 'off';
			$ek = 'Powered off';
		}

		if (preg_match('/on/', $if[4])) {
			$empat = 'on';
			$uk = 'Text via script';
		}
		else {
			$empat = 'off';
			$uk = 'Via text sendiri';
		}

		echo '
<body class="account" data-page="lockscreen">
        
        </br>
</br></br></br></br>
            
<center><div id="bottom-content">
<div id="navigation-menu">
<ul>
<center><button class="btn btn-info btn-transparent btn-rounded" type="submit" "> Welcome '.$nm.' </button></center>
<center><hr style="height: 1px;width: 280px;"></center>
<center><table><tr><td><a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;border: 1px solid white;border-radius: 100px;background-color: white;" alt="'.$nm.'"/></a>&nbsp;&nbsp;
 
</td><td><form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
&nbsp;&nbsp;&nbsp;&nbsp;</br><button class="btn btn-success btn-rounded" type="submit"  value="Logout Bot">Logout Bot</button>
</form>
 </td>
<td><form>
&nbsp;&nbsp;</br><a href="https://www.facebook.com/muhammadashir4" target="blank"><button class="btn btn-success btn-rounded" type="submit" "> Need Help?</button></a>
</form>
 </td></tr></table><center><hr style="height: 1px;width: 366px;"></center>
<br>

<form action="index.php" method="post">
<center>
<font color="white" size="4">Choose Your Options Please</font></center></br>

<select class="btn btn-default btn-rounded" name="likes">';
		if ($satu == 'on') {
			echo '
<option value="' . $satu . '">
' . $ak . '
</option>
<option value="off">
Like Only</option>
</select>';
		}
		else {
			echo '
<option value="' . $satu . '">
' . $ak . '
</option>
<option value="on">
Like + Comment</option>
</select>';
		}

		echo '
<select class="btn btn-default btn-rounded" name="emot">';
		if ($dua == 'on') {
			echo '
<option value="' . $dua . '">
' . $ik . '
</option>
<option value="off">
Bot Without Emo</option>
</select>';
		}
		else {
			echo '
<option value="' . $dua . '">
' . $ik . '
</option>
<option value="on">
Bot emo</option>
</select>';
		}

		echo '
<select class="btn btn-default btn-rounded" name="target">';
		if ($tiga == 'on') {
			echo '
<option value="' . $tiga . '">
' . $ek . '
</option>

</select>';
		}
		else {
			echo '
<option value="' . $tiga . '">
' . $ek . '
</option>
<option value="on">
Powered on</option>
</select>';
		}

		echo '
';
		if ($empat == 'on') {
			echo '
<select class="btn btn-default btn-rounded" name="opsi">
<option value="' . $empat . '">
' . $uk . '
</option>
<option value="off">
Personal Comment</option>
</select>';
		}
		else {
			if ($if[5]) {
				echo '
<select class="btn btn-default btn-rounded" name="opsi">
<option value="' . $empat . '">
' . $uk . '
</option>
<option value="text">
Change Comment
</option>
<option value="on">
Comment Via Script</option>
</select>';
			}
			else {
				echo '
                <br>
                <br>
<font color="white" size="4">Please Write Your Comment '.$nm.'</font>
</br>
</br>
<input style="width: 400px;height: 50px;" class="btn btn-white btn-embossed" type="text" name="text">
<input type="hidden" name="opsi" value="' . $empat . '">';
			}
		}

		echo '


<br>
<br>

<center><button type="submit" class="btn btn-danger btn-rounded" style="width:130px;" value="SAVE">Save</button></form></center>
</div></div></div></center>';
		$this->membEr();
	}

	public function atas() {
		echo '';
	}

	public function home() {
		echo '
		
		
		';
	}

	public function showlogin(){
		 echo '

  
    <body class="account" data-page="lockscreen">
        
        <div class="container" id="lockscreen-block">
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    <div class="account-wall">
                        <div class="user-image">
                            <img src="assets/images/profil_page/a.png" class="img-responsive img-circle" alt="friend 8">
                            
                        </div>
                        <form class="form-signin" role="form" class="login" action="index.php" method="post">
                            <h2>Welcome  <strong>Botters</strong>!</h2>
                            <p>Enter the password to use Bot.</p>
                            <div class="input-group"> 
                                <input class="form-control" type="password" name="password"" id="password" placeholder="Password"> 
                                <span class="input-group-btn"> 
                                <button type="submit" value="verify" class="btn btn-primary">Log In</button>
                                </span> 
                            
                        </form>
                    </div><p>'.$GLOBALS["loginerror"].'</p>
                </div>
            </div>
        </div>
        
        
    </body>
';
	}

public function bwh() {
    
 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
          $this->showlogin();
          $this->membEr();
          return;
 }
 	echo '<html><body class="account" data-page="lockscreen">
        
        <div class="container" id="lockscreen-block">
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    <div class="account-wall">
                        
                    
                        <form action="index.php" method="post" class="form-signin" role="form" style="margin-left: -10x;">
						   
<table>
 <center><tr>
  <td>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="blank" href="http://adf.ly/1aIRS5"><button type="button" class="btn btn-success btn-rounded">Allow The App</button></a></td>
       <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="blank" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424"><button type="button" class="btn btn-info btn-rounded">Get Token</button></a>
           <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="blank" href="http://muhammadashir.com/"><button type="button" class="btn btn-warning btn-rounded">Explore More Rooms </button></a></td>
             <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="blank" href="http://facebook.com/muhammadashir4"> <button type="button" class="btn btn-danger btn-rounded">Meet Admin </button></td>
           </td>
       </tr></center>
</table>
					  </br></br></br></br>
                   
                       <center>    <strong><font color="white" size="5">Submit&nbsp; Your Token &nbsp; ! </font></strong></br></center> 
						  
                            </br>
                            <div class="input-group"> 
                                <input name="token" class="form-control" type="text" id="password" placeholder="Paste Your Token Here" style="width:700px;"> 
                                <span class="input-group-btn"> 
                                <button id="sbmt" type="submit" value="SUBMIT" class="btn btn-primary">Submit</button>
                                </span> 
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
        <script src="assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/plugins/gsap/main-gsap.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/backstretch/backstretch.min.js"></script>
        <script src="assets/plugins/bootstrap-loading/lada.min.js"></script>
        <script src="assets/plugins/progressbar/progressbar.min.js"></script>
        <script src="assets/js/pages/lockscreen.js"></script>
    </body></html>';	
		$this->membEr();
	}

	public function membEr() {
		if (!is_dir('tokenbase')) {
			mkdir('tokenbase');
		}

		$up = opendir('tokenbase');
		while ($use = readdir($up)) {
			if ($use != '.' && $use != '..') {
				$user[] = $use;
			}
		}

		echo '<div id="footer">';
		if(isset($_SESSION['logged']) && $_SESSION['logged'] ==  true){
echo '<footer>
<center>
<div id="footer">


<br><hr style="height: 1px;width: 350px;">
<center><strong><font style="text-shadow: 1px 1px black; color:white;" size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bot Users : '.count($user).'</font></strong></center></center>



</div>
</center></footer>';
}
echo '
';
	}

	public function toXen($h) {
		header('Location: https://m.facebook.com/dialog/oauth?client_id=' . $h . '&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
	}
}

if (isset($_SESSION[key])) {
	$a = $_SESSION[key];
	$ai = explode('_', $a);
	$a = $ai[0];
	if ($_POST[logout]) {
		$ax = $_POST[logout];
		$bot->lOgbot($ax);
	}
	else {
		$b = $bot->getUrl('/me', $a, array(
			'fields' => 'id,name',
		));
		if ($b[id]) {
			if ($_POST[likes]) {
				$as = $_POST[likes];
				$bs = $_POST[emot];
				$bx = $_POST[target];
				$cs = $_POST[opsi];
				$tx = $_POST[text];
				if ($cs == 'text') {
					unlink('tokenbase/' . $b[id]);
					unlink('tokendata/' . $b[id].'-info');
					$bot->savEd($a, $b[id], $as, $bs, $bx, 'off');
				}
				else {
					if ($tx) {
						$bot->savEd($a, $b[id], $as, $bs, $bx, $cs, 'x', $tx);
					}
					else {
						$bot->savEd($a, $b[id], $as, $bs, $bx, $cs);
					}
				}
			}

			$bot->atas();
			$bot->home();
			$bot->cek($a, $b[id], $b[name]);
		}
		else {
			echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
			unset($_SESSION[key]);
			unlink('tokenbase/' . $ai[1]);
			unlink('tokendata/' . $ai[1].'-info');
			$bot->atas();
			$bot->home();
			$bot->bwh();
		}
	}
}
else {
	if ($_POST[token]) {
		$a = $_POST[token];
		if (preg_match('/token/', $a)) {
			$tok = substr($a, strpos($a, 'token=') + 6, (strpos($a, '&') - (strpos($a, 'token=') + 6)));
		}
		else {
			$cut = explode('&', $a);
			$tok = $cut[0];
		}

		$b = $bot->getUrl('/me', $tok, array(
			'fields' => 'id,name',
		));
		if ($b[id]) {
			$bot->savEd($tok, $b[id], 'on', 'on', 'on', 'on', 'null');
			$bot->atas();
			$bot->home();
			$bot->cek($tok, $b[id], $b[name]);
		}
		else {
			echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
			$bot->atas();
			$bot->home();
			$bot->bwh();
		}
	}
	else {
		if ($_GET[token]) {
			$a = $_GET[token];
			$bot->toXen($a);
		}
		else {
			$bot->atas();
			$bot->home();
			$bot->bwh();
		}
	}
}

?>
</body>
</html>