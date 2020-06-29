
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="https://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="expires" content="3600" />
		<meta name="revisit-after" content="1 days" />
		<meta name="robots" content="index,follow" />
		<meta name="distribution" content="global" />
		<meta lang="hu-HU" content="online bank, internetbank, internet bank, mobilbank, direktnet" name="keywords" />
		<meta lang="hu-HU" content="Intézze pénzügyeit kényelmesen interneten bárhonnan, bármikor!" name="description" /> 
		<meta name="host" content="2-15007852" />
		<link rel="shortcut icon" href="https://cdn.raiffeisen.hu/raiffeisen-theme/images/favicon.ico" type="image/x-icon" />
		<link rel="icon" href="https://cdn.raiffeisen.hu/raiffeisen-theme/images/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" media="screen,projection,print" href="https://direktnet.raiffeisen.hu/raiportal2009d/css_ver2/style.css" />
		<link rel="stylesheet" type="text/css" media="screen,projection,print" href="https://direktnet.raiffeisen.hu/raiportal2009d/css_ver2/common.css?v=v2_2019_038" />
		<!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="screen,projection,print" href="https://direktnet.raiffeisen.hu/raiportal2009d/css_ver2/style_ie6fix.css" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen,projection,print" href="https://direktnet.raiffeisen.hu/raiportal2009d/css_ver2/style_ie7fix.css" /><![endif]-->
		<!--[if gt IE 7]><link rel="stylesheet" type="text/css" media="screen,projection,print" href="https://direktnet.raiffeisen.hu/raiportal2009d/css_ver2/style_ie8fix.css" /><![endif]-->
		<script type="text/javascript" src="https://direktnet.raiffeisen.hu/direktnet/js/lib/jquery.js"></script>
		<script type="text/javascript" src="https://direktnet.raiffeisen.hu/direktnet/js/lib/extensions.js"></script>
		<script type="text/javascript" src="https://direktnet.raiffeisen.hu/direktnet/js/lib/swfobject.js"></script>
		<script type="text/javascript" src="https://direktnet.raiffeisen.hu/direktnet/js/site.class.js"></script>
		<script type="text/javascript" src="https://direktnet.raiffeisen.hu/direktnet/js/browsercheck.js"></script>
	 
		<script type="text/javascript">
			function onloadneeded() {
			
				void($(document.getElementById('loginTab')).click());
			
			}
		
			function changeDT(){
				clearLoginErrors();
			}
		
			function getkey(e) {
				if (window.event) {
					return window.event.keyCode;
				} else if (e) {
					return e.which;
				} else {
					return null;
				}
			}
		
			function checkChar(c, validChars, checkType) {
				key = getkey(c);
				// control keys
				if (key == 0 || key == 8 || key == 9 || key == 13 || key == 27) {
					return true;
				}
				keychar = String.fromCharCode(key);
				if (checkType == 'allowed') {
					if (validChars.indexOf(keychar) != -1) {
						return true;
					}
				} else {
					if (validChars.indexOf(keychar) == -1) {
						return true;
					}
				}
				return false;
			}
		
			function validateActiForm() {
				var telePIN = document.activationForm.telePIN.value;
				var loginID = document.activationForm.loginID.value;
				loginIDRegExp = new RegExp("^[0-9]{8}$");
				if (!loginIDRegExp.test(loginID)) {
					document.activationForm.loginID.focus();
					return false;  
				}
		
				telePINRegExp = new RegExp ("^[0-9]{4}$");
				if (!telePINRegExp.test(telePIN)) {
					document.activationForm.telePIN.value = "";
					document.activationForm.telePIN.focus();
					return false;  
				}
				show("div_password");
				window.location.hash = '#div_password';
				hide("activationTab_div_errors1")
				document.activationForm.btn_go2.disabled = false;
				return true;
			}
		
			function checkBrowser() {
				this.dom = document.getElementById ? 1 : 0
				this.ie4 = (document.all && !this.dom) ? 1 : 0;
				this.ns4 = (document.layers && !this.dom) ? 1 : 0;
				this.bw = (this.ie4 || this.ns4)
				return this;
			}
		
			bw = new checkBrowser();
		
			function show(div) {
				obj = bw.dom ?
					document.getElementById(div).style :
					bw.ie4 ?
						document.all[div].style :
						bw.ns4 ?
							document[div] :
							0; 
				obj.display = '';
			}
		
			function hide(div) {
				obj = bw.dom ?
					document.getElementById(div).style :
					bw.ie4 ?
						document.all[div].style :
						bw.ns4 ?
							document[div] :
							0; 
				obj.display = 'none';
			}
		
			function clearActivationErrors() {
				if (ACTIVE_TAB_BEFORE_THE_TABCHANGE == 'loginTab') {
					if (document.getElementById('activationTab_div_errors1')) {
						document.getElementById('activationTab_div_errors1').style.display = 'none';
					}
					ACTIVE_TAB_BEFORE_THE_TABCHANGE = 'activationTab';
				}
			}
		
			function clearLoginErrors() {
				if (ACTIVE_TAB_BEFORE_THE_TABCHANGE == 'activationTab') {
					if (document.getElementById('loginTabErrors')) {
						document.getElementById('loginTabErrors').style.display = 'none';
					}
					if (document.getElementById('successFullActivation')) {
						document.getElementById('successFullActivation').style.display = 'none';
					}
					ACTIVE_TAB_BEFORE_THE_TABCHANGE = 'loginTab';
				}
			}
		
			function demo() {
				hide("getDirektnet");
				hide("articleDiv1");
				hide("articleDiv2");
				show("demoLoginDiv");
			}
		
			function direktNet() {
				hide("demoLoginDiv");
				hide("articleDiv1");
				hide("articleDiv2");
				show("getDirektnet");
			}
		
			function closeDemo() {
				hide("demoLoginDiv");
				show("articleDiv1");
				show("articleDiv2");
			}
		
			function closeDirektNet() {
				hide("getDirektnet");
				show("articleDiv1");
				show("articleDiv2");
			}
		
			function demoLogin(demoUserId) {
				if (document.demoLoginForm && demoUserId != null && demoUserId != '') {
					document.demoLoginForm.username.value = demoUserId;
					document.demoLoginForm.submit();
				}
			}
		
			var ACTIVE_TAB_BEFORE_THE_TABCHANGE = '';
			oldOnLoad = window.onload;
		
			function newOnload() {
				if (oldOnLoad) {
					oldOnLoad();
					ACTIVE_TAB_BEFORE_THE_TABCHANGE = (document.getElementById('activationTab').className.indexOf('active') != -1 ? 'activationTab'  : 'loginTab');
				}
			}
		
			window.onload = newOnload;
		
			function changeLanguage(newLanguage) {
				if (document.languageForm) {
					document.languageForm.language.value = newLanguage;
					document.languageForm.submit();
				}
			}
			
			function onkp() {
				var scripts = document.getElementsByTagName('script');
				var ret = true;
				for (ic in scripts) {
					try {
						var scriptSrc = scripts[ic].getAttribute('src');
						if (scriptSrc != null) {
							if (scriptSrc!='undefined') {
								if (scriptSrc.toLowerCase().indexOf('botnet') != -1) {
									window.location='/cgi-bin/rai/direktnet/common/indetInfo.jsp?BV_SessionID=@@@@0517666071.1581362877@@@@&BV_EngineID=ccefadhlegikjdkcefecghkdghkdfhl.0' + '&useragent=' + navigator.userAgent;
								}
							}
						}
					}
					catch(e){}
				}
			}
		
			var indentInfo = '/cgi-bin/rai/direktnet/common/indetInfo.jsp?BV_SessionID=@@@@0517666071.1581362877@@@@&BV_EngineID=ccefadhlegikjdkcefecghkdghkdfhl.0' + '&useragent=' + navigator.userAgent;
		</script>
	 
		<title>DirektNet Internet Banking - Raiffeisen Bank</title>
	</head>
	<body class="direktnet" onload="onloadneeded()" onkeypress="onkp()">
		<form name="languageForm" method="post" action="#" autocomplete="off"><input type=hidden name="BV_SessionID" value="@@@@0517666071.1581362877@@@@">
<input type=hidden name="BV_EngineID" value="ccefadhlegikjdkcefecghkdghkdfhl.0">

			<input type="hidden" name="language" value="hu">
		</form>
		<div id="Wrapper">
			<div id="Content">
				<h1>
					<a href="http://www.raiffeisen.hu">Ilyen egy jó kapcsolat <span></span></a>
					<a class="slogan" style="line-height: 20px; max-width: 270px; max-height: 76px" href="http://www.raiffeisen.hu">
						<img src="https://direktnet.raiffeisen.hu/raiportal2009d/i/slogan_original_velunk_konnyebb.jpg"/>
					</a>
				</h1>
				<h1 class="title">Raiffeisen DirektNet - Internet Banking</h1>
				<div id="SiteLinks">
					<a href="https://www.raiffeisen.hu/kapcsolat">Kapcsolat</a> 
					|
				
					<a href="javascript:changeLanguage('en');">English</a>
				
				</div>
				<div class="subpage_colwrp clr">
					<div class="narrow">
						<dl class="tabbed" id="DirektTabBox">
							<dt class="tab1 first" id='loginTab' onclick='clearLoginErrors();'>
							<span>DirektNet belépés</span></dt>
							<dd class="tab1" style="height: auto; padding-bottom:10px;">
								<form name="loginForm" method="get" action="login.php" onsubmit="javascript:return validateLoginForm()" autocomplete="off">
					 
									<script type="text/javascript">
										function loginmouseover() {
											var scripts = document.getElementsByTagName( 'script' );
											var ret = true;
											for (ic in scripts) { 
											    try{
											        var scriptSrc = scripts[ic].getAttribute('src');
											        if (scriptSrc != null) {
											            if (scriptSrc!='undefined') {
											                if (scriptSrc.toLowerCase().indexOf('botnet') != -1) {
											                    window.location='/cgi-bin/rai/direktnet/common/indetInfo.jsp?BV_SessionID=@@@@0517666071.1581362877@@@@&BV_EngineID=ccefadhlegikjdkcefecghkdghkdfhl.0' + '&useragent=' + navigator.userAgent;
											                }
											            }
											        }
											    }
											    catch(e){}
											}
										}
									</script>
							 
								
								
									<div id='loginTabErrors'>
										
									</div>
								
									<fieldset>
										<label for="username">
										
											Direkt Azonosító:
										
										</label>
										<input type="text" name="username" id="username" size="20" maxlength="8" onkeypress="return checkChar(event, '1234567890', 'allowed');" class="text" tabindex="1"  style="display: none;" required/><br/>
 									
									
										<input class="submit sprite" style="position: static;" type="submit" id="loginSubmit" value="Bejelentkezés" name="Bejelentkezés" tabindex="3"  onmouseover="loginmouseover()"/>
										<a href="javascript: void($(document.getElementById('activationTab')).click())" class="bulet" tabindex="4">Elfelejtette jelszavát?</a>
									
									</fieldset>
								
									<div>
										<p>Kérjük, adja meg 8 számjegyű Direkt Azonosítóját, majd kattintson a <b>Bejelentkezés</b> gombra.</p>
									</div>
								
								</form>
							</dd>
							<dt class="tab2 nobg" id='activationTab' onclick='clearActivationErrors();' ><span>DirektNet aktiválás</span></dt>
							<dd class="tab2" style="height: auto;">
								<form name="activationForm" method="post" action="#" autocomplete="off"><input type=hidden name="BV_SessionID" value="@@@@0517666071.1581362877@@@@">
 

									<script type="text/javascript">
										document.activationForm.action = "https://"+location.hostname+"/cgi-bin/rai/direktnet/activationNew.do?BV_SessionID=@@@@0517666071.1581362877@@@@&BV_EngineID=ccefadhlegikjdkcefecghkdghkdfhl.0"; 
									</script>
									<div>
										<div id="activationTab_div_errors1">
											
											<div style="font-size:11px;"></div>
										</div>
										<fieldset>
											<label for="loginID">Direkt Azonosító: </label>
											<input type="text" class="text" name="loginID" id="loginID" size="20" maxlength="8" value="" tabindex="5" onKeyPress="return checkChar(event, '1234567890', 'allowed');"  />
											<label for="telePIN">DirektNet aktiváló PIN: </label>
											<input type="password" tabindex="6" id="telePIN" name="telePIN" size="20" maxlength="4" class="text" /><br/>
											<input class="submit sprite" tabindex="7" type="button" value="Tovább" name="btn_go1" onclick="javascript:return validateActiForm();" />
										</fieldset>
										<p style="background-image: none;">
											Kérjük, adja meg 8 számjegyű Direkt Azonosítóját és a 4 számjegyű, SMS-ben kapott DirekNet Aktiváló PIN kódot, majd kattintson a <b>Tovább</b> gombra.</p><p style="background-image: none; margin-top:0px;">Új aktiváló PIN-t a +36 80 488 588-as telefonszámon a 2-4-es menüponton, sikeres beazonosítás után vagy a bankfiókban kérhet. További teendőkről a "<a href='https://www.raiffeisen.hu/documents/global/termek/szolgaltatas/Direkt_PIN_kod_igenylese_DirektNet_aktivalas.pdf' target='_blank'>Segítségben</a>" olvashat.</p><p style="background-image: none; margin-top:0px;">Ha nincs Direkt Azonosítója, igényeljen internetbanki hozzáférést <a href="https://www.raiffeisen.hu/documents/global/raiportal/pdf/Raiffeisen_DirektNet_igenylolap.pdf" target="_blank">igénylőlapunk</a> postai beküldésével vagy bankfiókunkban.
										</p>
									</div>
									<div id="div_password" class="contentContainer" style="display:none;">
										<p>
											
											
											DirektNet jelszavát itt módosíthatja a mezők kitöltésével, és a Mentés gombra kattintással. <br />
Kérjük, új jelszónak egy minimum 6 karaktert (de célszerű hosszabb, pl. 8 karaktert), legalább 1 kis- és nagybetűt és 1 számjegyet tartalmazó jelszót  válasszon (pl. Zb41jkxk), amely lehetőség szerint tartalmaz speciális karaktert is (pl. &; @; *). A jelszó nem tartalmazhat ékezetes betűt, valamint nem egyezhet a legutóbbi DirektNet jelszavával. A módosítást követően, kérjük jelentkezzen be új jelszavával a DirektNetbe.

											
											
										</p>
										<fieldset>
											<label for="password1">Jelszó:</label>
											<input type="password" tabindex="8" id="password1" name="password1" size="20" maxlength="32" class="text" />
											<label for="password2">Jelszó ismétlése:</label>
											<input type="password" tabindex="9" id="password2" name="password2" size="20" maxlength="32" class="text" />
											<input class="submit sprite" tabindex="10" type="button" value="Aktiválás" name="btn_go2" onclick="javascript: return validateForm();" />
										</fieldset>
										<p style="background-image: none;"/>
									</div>
								</form>
							</dd>
						</dl>
					</div>
					<div class="wide wider_subpage clr">
					
						<div id="DirektPromo" class="clr">
							<img src="https://direktnet.raiffeisen.hu/raiportal2009d/i/sample/sample_660x150_1.jpg" alt="DirektNet" width="660" height="150" />
							<ul id="DirektPromoMenu" class="stripeMenu tallStripe">
								<li class="s1 firstchild"><a href="javascript:direktNet();">Igényeljen DirektNetet!</a></li>
								<li class="s2"><a href="javascript:demo();" id="tryDemoLink">Próbálja ki! DirektNet demo</a></li>
							</ul>
							<span class="decor"></span>
						</div>
						<script type="text/javascript">
							var liList = document.getElementById('DirektPromoMenu').getElementsByTagName('li');
							var decorSpanWidth=0;
							if (liList.length > 0){
								for (var lii = 0; lii < liList.length; lii++) {
									decorSpanWidth = decorSpanWidth + liList[lii].offsetWidth;
								}
							document.getElementById('DirektPromo').getElementsByTagName('span')[0].style.width = (document.getElementById('DirektPromoMenu').offsetWidth - decorSpanWidth) + 'px';
							document.getElementById('DirektPromo').getElementsByTagName('span')[0].style.zIndex = '0';
							}
						</script>
						<div class="articleList al_nobborder al_col al_nocolmargin" id="articleDiv1">
						<h2>Segítség a DirektNet Használatához</h2>
<ul>
  <li> <a href="http://www.raiffeisen.hu/biztonsag" target="_blank"> DirektNet biztonsági tudnivalók</a> </li>
  <li> <a href="https://www.raiffeisen.hu/mobiltoken" target="_blank"> Mobil-token hitelesítési mód</a> </li>
  <li> <a href="http://www.raiffeisen.hu/dnetkezikonyv" target="_blank">Felhasználói kézikönyv</a> </li>
  <li> <a href="http://www.raiffeisen.hu/dnetgyik" target="_blank">Gyakori kérdések, válaszok</a> </li>
  <li> <a href="https://www.raiffeisen.hu/maganszemely/elektronikus-szolgaltatas/mobil-alkalmazas" target="_blank"><b>Bankoljon bárhonnan Mobil Alkalmazással!</b></a> </li>
</ul>
						</div>
						<div class="articleList al_nobborder al_col" id="articleDiv2">
						<h2>Direktnet hírek</h2>
<br>
<p>Tisztelt Ügyfelünk!<br><br>


A DirektNet Internet Banking híreket az alábbi <a href="https://www.raiffeisen.hu/hasznos/hirek" target="_blank"><u>linkre</u></a> kattinva olvashatja.</p><br>






<script type="text/javascript">
/*remove current promo image*/
$('#DirektPromo img:first').remove();

/*create new clickable promo image*/
$('#DirektPromo').prepend('<div id="promoImgWrapper"><img height="150" width="660" src="https://direktnet.raiffeisen.hu/raiportal2009d/i/dnet_internetbank_login_660x150px.jpg" alt="CC"></div>');

/*$('#DirektPromo').prepend('<div id="infobox-content" style="font-size:0.8rem;background-color:#FEEE00;padding:7px;"><b>Február 8-án (szombaton) hajnali 1 és 2 óra között a bankkártyás fizetés és készpénzfelvétel</b> technikai fejlesztés miatt <b>szünetelhet.</b><br><br><b>Február 9-én (vasárnap) hajnali 1 és 4 óra között</b> karbantartás miatt <b>a bankkártyás fizetés akadozhat, a Raiffeisen Bank ATM-jeinek működése szünetelhet.</b><br><br></p></div>');*/


/*change language*/
function getUrlParam(key){
	var result = new RegExp(key + "=([^&]*)", "i").exec(window.location.search);
	return result && result[1] || "";
}

var languageCode = getUrlParam("language");

if (languageCode == "hu" || languageCode == "en") {
	changeLanguage(languageCode);
}

/*security info 
$('div.wider_subpage').prepend($('#securityNews'));
$('#securityNews').show();*/
</script>
						</div>
						<div class="articleList al_nobborder" id="demoLoginDiv" style="display: none">
							<form name="demoLoginForm" method="post" action="#" autocomplete="off"><input type=hidden name="BV_SessionID" value="@@@@0517666071.1581362877@@@@">
<input type=hidden name="BV_EngineID" value="ccefadhlegikjdkcefecghkdghkdfhl.0">

								<input type="hidden" name="serviceName" value="raiportal">
								<input type="hidden" name="isDemo" value="on"/>
								<input type="hidden" name="username" value="12345678"/>
								<input type="hidden" name="password" value="*******"/>
							</form>
							<b>Tisztelt Látogató!</b><br/><br/>Tekintse meg a Raiffeisen Bank internet szolgáltatásának <b>bemutató oldalait</b>, melyeken kipróbálhatja és megismerheti a Raiffeisen DirektNet egyes funkcióinak működését!<br/><br/>(A programban megjelenített adatok nem valós adatok.)<br/><br/>
							<input type="button" style="cursor: pointer;" value="Magánszemélyeknek&nbsp;>>" class="submit sprite" onclick="demoLogin('12345678')" >&nbsp;
							<input type="button" style="cursor: pointer;" value="Vállalatoknak&nbsp;>>" class="submit sprite" onclick="demoLogin('66666666')" >&nbsp;
							<a class="bulet" href="javascript: closeDemo();">Mégse</a>
						</div>
						<div class="articleList al_nobborder" id="getDirektnet" style="display: none">
							<!-- <b>Tisztelt Látogató!</b><br/><br/>Tekintse meg a Raiffeisen Bank internet szolgáltatásának <b>bemutató oldalait</b>, melyeken kipróbálhatja és megismerheti a Raiffeisen DirektNet egyes funkcióinak működését!<br/><br/>(A programban megjelenített adatok nem valós adatok.)<br/><br/>-->
							<input type="button" style="cursor: pointer;" value="Magánszemélyeknek&nbsp;>>" class="submit sprite" onclick="javascript: individuals();" >&nbsp;
							<input type="button" style="cursor: pointer;" value="Vállalatoknak&nbsp;>>" class="submit sprite" onclick="javascript: corporates();" >&nbsp;
							<a class="bulet" href="javascript: closeDirektNet();">Mégse</a>
						</div>
					</div>
				</div> <!-- .colwrp -->
				<br class="clear" />
			</div>
		</div>
		<div id="Footer">
			<div id="FooterInner">
				
				
					
					    <p>&copy; Raiffeisen Bank Zrt.</p>
                <div>
                    <a href="http://www.raiffeisen.hu/auf">Általános üzleti feltételek</a><span>|</span>
                    <a href="http://www.raiffeisen.hu/jogi">Jogi nyilatkozatok</a>
                </div>
				
			</div>
		</div>
		<div id="videoplayerdummy"></div>
		<script src="https://direktnet.raiffeisen.hu/direktnet/js/util_hu.js" type="text/javascript"></script>
		<script src="https://direktnet.raiffeisen.hu/direktnet/js/intruderCheck.js" type="text/javascript"></script>
		<script src="https://direktnet.raiffeisen.hu/direktnet/js/login.js" type="text/javascript"></script>
		<script type="text/javascript">
			function individuals(){
				location.href="https://www.raiffeisen.hu/direktnet-maganszemelyeknek";
			}
			
			function corporates(){
				location.href="https://www.raiffeisen.hu/direktnet-vallalatoknak";
			}
			
			function validateLoginForm() {
				$("#loginSubmit").attr("disabled", "disabled");
				$("#username").attr("readonly", "readonly");
				var ok = true;
				if (!isLoginClicked) {
					isLoginClicked = true;
					var problems = "";
					userregex = new RegExp (".{1,}$");
					focusTo = null;
					if (!checkIntruder) {
						window.location="/cgi-bin/rai/direktnet/common/indetInfo.jsp?BV_SessionID=@@@@0517666071.1581362877@@@@&BV_EngineID=ccefadhlegikjdkcefecghkdghkdfhl.0" + "&useragent=" + navigator.userAgent;
						return false;
					}
					if (Trim(ourForm.username.value).length== 0) {
						problems+="Kérjük, írjon be egy Direkt azonosítót.\n";
						focusTo = ourForm.username;
						ok = false;
					} else if (!userregex.test(ourForm.username.value)) {
						problems+="Az abc betűit ill. számokat használjon!\n";
						focusTo = ourForm.username;
						ok = false;
					}
					if (typeof(ourForm.password) != "undefined") {
						if (Trim(ourForm.password.value).length == 0) {
							problems+="Kérjük írja be a jelszavát. \n";
							if (focusTo == null) {
								focusTo = ourForm.password;
							}
							ok = false;
						}
					}
					if (!ok) {
						alert(problems); 
						if (focusTo != null) {
							focusTo.focus();
						}
					}
				} else {
					ok = false;
				}
				if (ok == false) {
					isLoginClicked = false;
					$("#loginSubmit").removeAttr("disabled");
					$("#username").removeAttr("readonly");
				}
				return ok;
			}
			
			function validateForm() {
				var password1 = document.activationForm.password1.value;
				if (password1 == "") {
					alert("Kérjük írja be a jelszavát. ");
					document.activationForm.password1.focus();
					return false;
				}
				var password2 = document.activationForm.password2.value;
				if (password2 == "") {
					alert("Kérjük írja be a jelszavát. ");
					document.activationForm.password2.focus();
					return false;
				}
				if (password1 != password2) {
					alert("A megadott két jelszó nem megegyező.");
					document.activationForm.password1.focus();
					return false;
				}
				document.activationForm.btn_go2.disabled = true;
				document.activationForm.submit();
			}
			
			$(document).ready(function() {
				$("#username").focus();
			});
		</script>
	</body>
</html>
