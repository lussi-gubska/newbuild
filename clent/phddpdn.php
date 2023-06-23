<?
$db_host = "bf301862.mysql.tools"; $db_user = "bf301862_oldbuild"; $db_pswd = "Xp%2teG63!"; $db_name = "bf301862_oldbuild";
$db = mysqli_connect ($db_host, $db_user, $db_pswd, $db_name);
mysqli_query ($db, "SET charset utf8");
mysqli_query ($db, "SET character_set_client = utf8");
mysqli_query ($db, "SET character_set_connection = utf8");
mysqli_query ($db, "SET character_set_results = utf8");
mysqli_query ($db, "SET collation_connection = utf8_general_ci");
mysqli_select_db ($db,"u4845_nsite"); ////////////////////////////////////////////// DB name

//function pr($array)
//{
//    echo "<xmp>";
//    if (! isset($array))
//        echo "pr(): value not set";
//    elseif ($array === false)
//        echo "pr(): bool(false)";
//    elseif (is_object($array))
//        print_r($array);
//    elseif (! is_array($array))
//        echo "pr() string: $array";
//    elseif (! count($array))
//        echo "pr(): array empty";
//    else
//        print_r($array);
//    echo "</xmp>";
//}

function db_connect(){
	$db_host = "bf301862.mysql.tools"; $db_user = "bf301862_oldbuild"; $db_pswd = "Xp%2teG63!"; $db_name = "bf301862_oldbuild";
	$dbconn = mysqli_connect($db_host, $db_user, $db_pswd, $db_name) or die ("Невозможно подключиться к БД");
    mysqli_query ($dbconn, 'set character_set_results = "utf8"');
    mysqli_query ($dbconn, "SET character_set_client = utf8");
    mysqli_query ($dbconn, "SET character_set_connection = utf8");
    mysqli_query ($dbconn, "SET character_set_results = utf8");
    mysqli_query ($dbconn, "SET collation_connection = utf8_general_ci");
	if(!$dbconn || !mysqli_select_db($dbconn, $db_name)) {return false;}
	return $dbconn;
};

// -----simbTrans------------
function simbTrans($title) {
			$trans2 = array("а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d","е"=>"e", "ё"=>"yo","ж"=>"j","з"=>"z","и"=>"i","й"=>"i","к"=>"k","л"=>"l", "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r","с"=>"s","т"=>"t", "у"=>"u","ф"=>"f","х"=>"h","ц"=>"c","ч"=>"ch", "ш"=>"sh","щ"=>"sh","ы"=>"y","э"=>"e","ю"=>"yu","я"=>"ya","є"=>"ye","ї"=>"yi","+"=>"-",
			"А"=>"a","Б"=>"b","В"=>"v","Г"=>"g","Д"=>"d","Е"=>"e", "Ё"=>"yo","Ж"=>"j","З"=>"z","И"=>"i","Й"=>"i","К"=>"k", "Л"=>"l","М"=>"m","Н"=>"n","О"=>"o","П"=>"p", "Р"=>"r","С"=>"s","Т"=>"t","У"=>"u","Ф"=>"f", "Х"=>"h","Ц"=>"c","Ч"=>"ch","Ш"=>"sh","Щ"=>"sh", "Ы"=>"i","Э"=>"e","Ю"=>"yu","Я"=>"ya","Є"=>"ye","Ї"=>"yi",
			"ь"=>"","Ь"=>"","ъ"=>"","Ъ"=>""," "=>"-","-"=>"-",":"=>"",";"=>"","("=>"",")"=>"","%"=>"-","?"=>"","!"=>"","."=>"","–"=>"","—"=>"",","=>"","?"=>"","«"=>"","»"=>"","№"=>"","\""=>"","”"=>"","“"=>"");
			return strtr($title, $trans2);
			}

function simbTransPhoto($photo) {
			$trans1 = array("а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d","е"=>"e", "ё"=>"yo","ж"=>"j","з"=>"z","и"=>"i","й"=>"i","к"=>"k","л"=>"l", "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r","с"=>"s","т"=>"t", "у"=>"y","ф"=>"f","х"=>"h","ц"=>"c","ч"=>"ch", "ш"=>"sh","щ"=>"sh","ы"=>"i","э"=>"e","ю"=>"u","я"=>"ya","є"=>"ye","ї"=>"yi","+"=>"_",
			"А"=>"A","Б"=>"B","В"=>"V","Г"=>"G","Д"=>"D","Е"=>"E", "Ё"=>"Yo","Ж"=>"J","З"=>"Z","И"=>"I","Й"=>"I","К"=>"K", "Л"=>"L","М"=>"M","Н"=>"N","О"=>"O","П"=>"P", "Р"=>"R","С"=>"S","Т"=>"T","У"=>"Y","Ф"=>"F", "Х"=>"H","Ц"=>"C","Ч"=>"Ch","Ш"=>"Sh","Щ"=>"Sh", "Ы"=>"I","Э"=>"E","Ю"=>"U","Я"=>"Ya","Є"=>"YE","Ї"=>"YI",
			"ь"=>"","Ь"=>"","ъ"=>"","Ъ"=>""," "=>"_","Ä"=>"","ä"=>"","Ö"=>"","ö"=>"","Ü"=>"","ü"=>"","ß"=>""," "=>"_");
			return strtr($photo, $trans1);
			}

// -----cut------------
function cut($text, $limit) {
    if (!$firstSpaceAfterLimit = mb_strpos($text, ' ', $limit, 'UTF-8')) {
        $firstSpaceAfterLimit = $limit;}
    return mb_substr($text, 0, $firstSpaceAfterLimit,  'UTF-8');
}

function not_null($value) {
    if (is_array($value)) {
      if (sizeof($value) > 0) {return true;} else {return false;}
    } else {
      if ( (is_string($value) || is_int($value)) && ($value != '') && ($value != 'NULL') && (strlen(trim($value)) > 0)) {return true;} else {return false;}
    }
  }

function clean_input($value) {
	$value = mysqli_real_escape_string($value);
	$value = htmlspecialchars($value); 
	$value = trim($value);
  return $value;
  }

// -----adminav------------
function adminav() {
	$dbconn = db_connect();
	$sel3 = "SELECT * FROM nb_pages WHERE lang='ru' ORDER BY new_prod ASC";
	if ($sel3) {$res3 = mysqli_query ($dbconn, $sel3);
		while ($myrow3 = mysqli_fetch_assoc ($res3)) {?>
<a class="courslnk" href="<? $_SERVER ['DOCUMENT_ROOT'];?>/adminka/nb_edit_page.php?code=<? echo $myrow3['code'];?>"><span class="spi"><i class="fa fa-circle-thin"></i></span><? echo $myrow3['menu'];?></a>
		<? } mysqli_close($dbconn);
	} else {echo mysql_error();}
	return $sel3;
}
// -----seladmtbl------------
function seladmtbl($tbl,$lngg,$zmn) {
	$dbconn = db_connect();
	if (isset($_GET['code'])) {$code = $_GET['code'];} else {$code = $_POST['code'];}
	$result2 = mysqli_query ($dbconn, "SELECT * FROM $tbl WHERE code='$code' and lang='$lngg'");
	if (!$result2) {echo "<p>Ошибка подключения к БД</p>"; exit (mysql_error());}
	if (mysqli_num_rows($result2) > 0) {$myrow2 = mysqli_fetch_assoc ($result2);  echo $myrow2[$zmn]; mysqli_close($dbconn);}
	else {echo '<p class="error">Ошибка.</p>'; exit ();}
	return $result2;
}

// -----seladmtbl2------------
function seladmtbl2($tbl,$lngg,$zmn) {
	$dbconn = db_connect();
	if (isset($_GET['lcode'])) {$lcode = $_GET['lcode'];} else {$lcode = $_POST['lcode'];}
	$result2 = mysqli_query ($dbconn, "SELECT * FROM $tbl WHERE lcode='$lcode' and lang='$lngg'");
	if (!$result2) {echo "<p>Ошибка подключения к БД</p>"; exit (mysql_error());}
	if (mysqli_num_rows($result2) > 0) {$myrow2 = mysqli_fetch_assoc ($result2);  echo $myrow2[$zmn]; mysqli_close($dbconn);}
	else {echo '<p class="error">Ошибка.</p>'; exit ();}
	return $result2;
}

// -----admnavpage------------
function admnavpage() {
	$dbconn = db_connect();
	$sel3 = "SELECT * FROM nb_pages ORDER BY new_prod ASC";
	if ($sel3) {$res3 = mysqli_query ($dbconn, $sel3);
		while ($myrow3 = mysqli_fetch_assoc ($res3))
		{
		?>
		<li><a href="bc_edit_page.php?id=<? echo $myrow3['id'];?>"> <? echo $myrow3['menu'];?></a></li>
		<? } mysqli_close($dbconn);
	} else {echo mysql_error();}
	return $sel3;
}

// -----minf------------
function minf($tbl,$zcode,$lngg,$ttl) {
	$dbconn = db_connect();
	$mres = mysqli_query ($dbconn, "SELECT * FROM $tbl WHERE code='$zcode' AND lang='$lngg'");
	$mrw = mysqli_fetch_array ($mres);
	echo $mrw[$ttl];
    mysqli_close($dbconn);
	return $mrw;
}


// -----minf2------------
function minf2($tbl,$tcode,$zcode,$lngg,$ttl) {
	$dbconn = db_connect();
	$mres = mysqli_query ($dbconn, "SELECT * FROM $tbl WHERE $tcode='$zcode' AND lang='$lngg'");
	$mrw = mysqli_fetch_array ($mres);
	echo $mrw[$ttl];
    mysqli_close($dbconn);
	return $mrw;
}

// -----adminserv------------
function adminserv() {
	$dbconn = db_connect();
	$sel3 = "SELECT * FROM nb_services WHERE lang='ru' ORDER BY new_prod ASC";
	if ($sel3) {$res3 = mysqli_query ($dbconn, $sel3);
		while ($myrow3 = mysqli_fetch_assoc ($res3)) {?>
<a class="courslnk" href="<? $_SERVER ['DOCUMENT_ROOT'];?>/adminka/nb_services_pack.php?id=<? echo $myrow3['lcode'];?>"><span class="spi"><i class="fa fa-circle-thin"></i></span><? echo $myrow3['menu'];?></a>
		<? } mysqli_close($dbconn);
	} else {echo mysql_error();}
	return $sel3;
}

// -----mnav------------
function mnav($lngg) {
$dbconn = db_connect();
$prod1 = "SELECT * FROM nb_pages WHERE lang='$lngg' ORDER BY new_prod ASC";
if ($prod1) {$typepd1 = mysqli_query ($dbconn, $prod1);
while ($type1 = mysqli_fetch_assoc ($typepd1))
{?>
        <div><a href="<? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo $type1['code'];?>.php"><? echo $type1['menu'];?></a></div>
<? } mysqli_close($dbconn);
} else {echo mysql_error();}}


// -----navserv------------
function navserv($lngg) {
$dbconn = db_connect();
$prod1 = "SELECT * FROM nb_services WHERE lang='$lngg' AND swtch='1' ORDER BY new_prod ASC";
if ($prod1) {$typepd1 = mysqli_query ($dbconn, $prod1);
while ($type1 = mysqli_fetch_assoc ($typepd1))
{?>
        <div><a class="aserv" href="<? $_SERVER ['DOCUMENT_ROOT'];?>/services/<? echo $type1['code'];?>"><span class="adot"></span><? echo $type1['menu'];?></a></div>                    
<? } mysqli_close($dbconn);
} else {echo mysql_error();}}



// -----indgal------------
function indgal($lngg) {
$dbconn = db_connect();
$selcat = "SELECT * FROM nb_gallery WHERE lang='$lngg' ORDER BY new_prod ASC LIMIT 12";
if ($selcat) {$rescat = mysqli_query ($dbconn,$selcat);
while ($myrcat = mysqli_fetch_assoc ($rescat)){?>                   
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 infr-col">
                        <div class="infr-row row">
                            <a class="infr-box" href="<? $mres = mysqli_query ($dbconn, "SELECT * FROM nb_gallery_photo WHERE lcodeid='$myrcat[lcode]' ORDER BY new_prod ASC LIMIT 1"); if (mysqli_num_rows($mres) > 0) { $mrw = mysqli_fetch_assoc ($mres); ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$mrw['photo']);}?>" data-fancybox="images-preview<? echo $myrcat["lcode"];?>" data-caption="<? echo $myrcat["title"];?>">
                                <span class="infr-ttl"><span><? echo $myrcat["htitle"];?></span></span>
                                <img class="img-responsive" src="<? if ($myrcat["photo"] != ""){ ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$myrcat['photo']);} else { ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo "img/nophoto.jpg";}?>" alt="<? echo $myrcat["htitle"];?>"/>
                            </a>
                        </div>
                        <div style="display: none;">
<? 
$sel3 = "SELECT * FROM nb_gallery_photo WHERE lcodeid='$myrcat[lcode]' AND id!='$mrw[id]' ORDER BY new_prod ASC";
if ($sel3) {$res3 = mysqli_query ($dbconn,$sel3);
while ($myrow3 = mysqli_fetch_assoc ($res3)){ ?>
                            <a href="<? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$myrow3['photo']);?>" data-fancybox="images-preview<? echo $myrcat['lcode'];?>" data-thumb="<? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$myrow3['photo']);?>" data-caption="<? echo $myrcat['htitle'];?>"></a>
<? }} else {echo mysql_error();}?>
                        </div>                        
                    </div>
                    
<? } mysqli_close($dbconn);
} else {echo mysql_error();}
return $sel3;}


// -----indserv------------
function indserv($lngg) {
$dbconn = db_connect();
$prod1 = "SELECT * FROM nb_services WHERE lang='$lngg' AND swtch='1' ORDER BY new_prod ASC LIMIT 8";
if ($prod1) {$typepd1 = mysqli_query ($dbconn, $prod1);
while ($type1 = mysqli_fetch_assoc ($typepd1))
{?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 serv-col">
                        <div class="serv-row row">
                            <a class="serv-box" href="<? $_SERVER ['DOCUMENT_ROOT'];?>/services/<? echo $type1['code'];?>">
                                <span class="serv-box-img">
                                    <img class="img-responsive" src="<? if ($type1["photomin"] != ""){ ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$type1['photomin']);} else { ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo "img/nophoto.jpg";}?>" alt=""/>
                                    <span class="serv-box-img-bg"></span>
                                    <span class="serv-box-ttl"><? echo $type1['ititle'];?></span>
								</span>
                                <span class="serv-span">
                                    <span class="serv-span-txt"><? $new_string = strip_tags($type1["idscr"]); $nmnwstr =  mb_strlen($new_string, 'utf-8'); if ($nmnwstr < 90) {echo $new_string;} else {echo cut($new_string, 90);}?></span>
                                    <span class="serv-span-lnk">подробнее</span>
                                </span>
                            </a>
                        </div>
                    </div>
<? } mysqli_close($dbconn);
} else {echo mysql_error();}}


// -----pageserv------------
function pageserv($lngg) {
$dbconn = db_connect();
$prod1 = "SELECT * FROM nb_services WHERE lang='$lngg' AND swtch='1' ORDER BY new_prod ASC";
if ($prod1) {$typepd1 = mysqli_query ($dbconn, $prod1);
while ($type1 = mysqli_fetch_assoc ($typepd1))
{?>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 serv-col">
                        <div class="serv-row02 row">
                            <a class="serv-box" href="<? $_SERVER ['DOCUMENT_ROOT'];?>/services/<? echo $type1['code'];?>">
                                <span class="serv-box-img">
										<img class="img-responsive" src="<? if ($type1["photomin"] != ""){ ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$type1['photomin']);} else { ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo "img/nophoto.jpg";}?>" alt="<? echo $type1['menu'];?>"/>
										<span class="serv-box-img-bg"></span>
										<span class="serv-box-ttl"><? echo $type1['menu'];?></span>
								   </span>
                                <span class="serv-span">
                                    <span class="serv-span-txt"><? $new_string = strip_tags($type1["dscr"]); $nmnwstr =  mb_strlen($new_string, 'utf-8'); if ($nmnwstr < 80) {echo $new_string;} else {echo cut($new_string, 80);}?></span>
                                    <span class="serv-span-lnk"><? echo lang('more-lnk');?></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    
<? } mysqli_close($dbconn);
} else {echo mysql_error();}}


// -----pageservblock------------
function pageservblock($lcode,$lngg) {
$dbconn = db_connect();
$prod1 = "SELECT * FROM nb_services_pack WHERE lcodeid='$lcode' AND lang='$lngg' ORDER BY new_prod ASC";
if ($prod1) {$typepd1 = mysqli_query ($dbconn, $prod1);
while ($type1 = mysqli_fetch_assoc ($typepd1))
{?>
            <div class="srv-page">
                <div class="srv-page-bg" style="background:url(<? if ($type1["photo"] != ""){ ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$type1['photo']);} else { ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo "img/nophoto-s.jpg";}?>) center center no-repeat; background-size:cover;"></div>
                <div class="srv-page-div">
                    <div class="srv-page-row">
                        <div class="srv-page-mob">
                            <img src="<? if ($type1["photo"] != ""){ ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$type1['photo']);} else { ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo "img/nophoto-s.jpg";}?>" alt="" class="srv-page-img img-responsive">
                            <div class="srv-page-box">
                                <h2 class="srv-page-ttl"><? echo $type1['title'];?></h2>
                                <? echo $type1['text'];?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
<? } mysqli_close($dbconn);
} else {echo mysql_error();}}


// -----pagenews------------
function pagenews($lngg) {
$dbconn = db_connect();
$prod1 = "SELECT * FROM nb_news WHERE lang='$lngg' ORDER BY date DESC";
if ($prod1) {$typepd1 = mysqli_query ($dbconn, $prod1);
while ($type1 = mysqli_fetch_assoc ($typepd1))
{?>
                   
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 news-col">
                        <div class="news-row row">
                            <a class="news-box" href="<? $_SERVER ['DOCUMENT_ROOT'];?>/news/<? echo $type1['code'];?>">
                                <span class="news-box-img" style="background:url(<? if ($type1["photo"] != ""){ ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$type1['photo']);} else { ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo "img/nophoto.jpg";}?>) center center; background-size:cover;"></span>
                                <span class="news-box-txt">
                                    <span class="news-box-ttl"><? echo $type1['htitle'];?></span>
                                    <span class="news-box-dscr"><? $new_string = strip_tags($type1["dscr"]); $nmnwstr =  mb_strlen($new_string, 'utf-8'); if ($nmnwstr < 90) {echo $new_string;} else {echo cut($new_string, 90);}?></span>
                                    <span class="news-box-lnk">подробнее</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    
<? } mysqli_close($dbconn);
} else {echo mysql_error();}}


// -----morepagenews------------
function morepagenews($lngg,$code) {
$dbconn = db_connect();
$prod1 = "SELECT * FROM nb_news WHERE lang='$lngg' AND code != '$code' ORDER BY date DESC";
if ($prod1) {$typepd1 = mysqli_query ($dbconn, $prod1);
while ($type1 = mysqli_fetch_assoc ($typepd1))
{?>
                   
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 news-col">
                        <div class="news-row row">
                            <a class="news-box" href="<? $_SERVER ['DOCUMENT_ROOT'];?>/news/<? echo $type1['code'];?>">
                                <span class="news-box-img" style="background:url(<? if ($type1["photo"] != ""){ ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$type1['photo']);} else { ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo "img/nophoto.jpg";}?>) center center; background-size:cover;"></span>
                                <span class="news-box-txt">
                                    <span class="news-box-ttl"><? echo $type1['htitle'];?></span>
                                    <span class="news-box-dscr"><? $new_string = strip_tags($type1["dscr"]); $nmnwstr =  mb_strlen($new_string, 'utf-8'); if ($nmnwstr < 90) {echo $new_string;} else {echo cut($new_string, 90);}?></span>
                                    <span class="news-box-lnk">подробнее</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    
<? } mysqli_close($dbconn);
} else {echo mysql_error();}}


// -----pagegal------------
function pagegal($lngg) {
$dbconn = db_connect();
$prod1 = "SELECT * FROM nb_gallery WHERE lang='$lngg' ORDER BY new_prod ASC";
if ($prod1) {$typepd1 = mysqli_query ($dbconn, $prod1);
while ($type1 = mysqli_fetch_assoc ($typepd1))
{?>
                   
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 news-col">
                        <div class="news-row row">
                            <a class="news-box" href="<? $_SERVER ['DOCUMENT_ROOT'];?>/gallery/<? echo $type1['code'];?>">
                                <span class="news-box-img" style="background:url(<? if ($type1["photo"] != ""){ ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$type1['photo']);} else { ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo "img/nophoto.jpg";}?>) center center; background-size:cover;"></span>
                                <span class="news-box-txt">
                                    <span class="news-box-ttl02"><? echo $type1['htitle'];?></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    
<? } mysqli_close($dbconn);
} else {echo mysql_error();}}


// -----galphoto------------
function galphoto($lcode) {
$dbconn = db_connect();
$prod1 = "SELECT * FROM nb_gallery_photo WHERE lcodeid='$lcode' ORDER BY new_prod ASC";
if ($prod1) {$typepd1 = mysqli_query ($dbconn, $prod1);
while ($type1 = mysqli_fetch_assoc ($typepd1))
{?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="gal-box-img row">
                        <a href="<? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$type1['photo']);?>" data-fancybox="group" data-caption="" alt="">
                            <img src="<? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$type1['mphoto']);?>" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
<? } mysqli_close($dbconn);
} else {echo mysql_error();}}



// -----moregal------------
function moregal($lngg,$code) {
$dbconn = db_connect();
$selcat = "SELECT * FROM nb_gallery WHERE lang='$lngg' AND code != '$code' ORDER BY new_prod ASC";
if ($selcat) {$rescat = mysqli_query ($dbconn,$selcat);
while ($myrcat = mysqli_fetch_assoc ($rescat)){?>                   
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 infr-col">
                        <div class="infr-row row">
                            <a class="infr-box" href="<? $mres = mysqli_query ($dbconn, "SELECT * FROM nb_gallery_photo WHERE lcodeid='$myrcat[lcode]' ORDER BY new_prod ASC LIMIT 1"); if (mysqli_num_rows($mres) > 0) { $mrw = mysqli_fetch_assoc ($mres); ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$mrw['photo']);}?>" data-fancybox="images-preview<? echo $myrcat["lcode"];?>" data-caption="<? echo $myrcat["title"];?>">
                                <span class="infr-ttl"><span><? echo $myrcat["htitle"];?></span></span>
                                <img class="img-responsive" src="<? if ($myrcat["photo"] != ""){ ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$myrcat['photo']);} else { ?><? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo "img/nophoto.jpg";}?>" alt="<? echo $myrcat["htitle"];?>"/>
                            </a>
                        </div>
                        <div style="display: none;">
<? 
$sel3 = "SELECT * FROM nb_gallery_photo WHERE lcodeid='$myrcat[lcode]' AND id!='$mrw[id]' ORDER BY new_prod ASC";
if ($sel3) {$res3 = mysqli_query ($dbconn,$sel3);
while ($myrow3 = mysqli_fetch_assoc ($res3)){ ?>
                            <a href="<? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$myrow3['photo']);?>" data-fancybox="images-preview<? echo $myrcat['lcode'];?>" data-thumb="<? $_SERVER ['DOCUMENT_ROOT'];?>/<? echo str_replace('../','',$myrow3['photo']);?>" data-caption="<? echo $myrcat['htitle'];?>"></a>
<? }} else {echo mysql_error();}?>
                        </div>                        
                    </div>
                    
<? } mysqli_close($dbconn);
} else {echo mysql_error();}
return $sel3;}

?>