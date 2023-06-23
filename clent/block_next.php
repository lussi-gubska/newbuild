<?
if(isset($_POST['submit02'])) {

    $subject = trim($_POST['subject']);
    if ((strlen($subject) >= 1)) {header("HTTP/1.1 301 Moved Permanently"); header("Location: $_SERVER ['DOCUMENT_ROOT']/index.php"); exit ();}

    if(trim($_POST['title']) == '') {$hasError = true;} else {$title = trim($_POST['title']);}
    if ((strlen($title) >= 2) and (strlen($title) <= 25))
        {$title = stripslashes($title); $title = html_entity_decode($title); $title = strip_tags($title);} else {$hasError2 = true;}

    if(trim($_POST['phone']) == '') {$hasError = true;} else {$phone = trim($_POST['phone']);}
    if(isset($_POST['phone'])) {$phone = stripslashes($phone); $phone = html_entity_decode($phone); $phone = strip_tags($phone);}



    if(!isset($hasError) && !isset($hasError2) && !isset($hasError4)) {
        $to = "hiwebminton@gmail.com";
        $to2 = "ywebcard@gmail.com";
        $subject = "Сообщение с сайта ".$_SERVER['SERVER_NAME']." \n";
        $message = "Имя: $title \n\nНомер телефона: $phone";
        mail ($to,$subject,$message, "Content-type:text/plain; charset = utf-8\r\nFrom:newbuildua@gmail.com");
        mail ($to2,$subject,$message, "Content-type:text/plain; charset = utf-8\r\nFrom:newbuildua@gmail.com");
        $emailSent = true;
    }
}

if(isset($_POST['submitzz'])) {

    $subject = trim($_POST['subject']);
    if ((strlen($subject) >= 1)) {
        $message = "Заходил кто-то";
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: index.php");
        exit ();
        }

    if(trim($_POST['title']) == '') {$hasError = true;} else {$title = trim($_POST['title']);}
    if ((strlen($title) >= 2) and (strlen($title) <= 25))
        {
        $title = stripslashes($title);
        $title = html_entity_decode($title);
        $title = strip_tags($title);
        }
        else {$hasError2 = true;}

    if(trim($_POST['email']) == '') {$hasError = true;}
        else if (preg_match ("/^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$/", trim($_POST['email']))) {$hasError4 = true;}
        else {$email = trim($_POST['email']);}


    // if(isset($_POST['phone'])) {$phone = trim($_POST['phone']); $phone = stripslashes($phone); $phone = html_entity_decode($phone); $phone = strip_tags($phone);}


    if(trim($_POST['text']) == '') {$hasError = true;}
        else {
            $text = stripslashes($_POST['text']);
            $text = html_entity_decode($_POST['text']);
               $text = strip_tags($_POST['text']);
            }

    if(!isset($hasError) && !isset($hasError2) && !isset($hasError4)) {
        ?>
        <script type="text/javascript">
        $("document").ready(function(){
        $('.mddv2').modal('hide');
        });
        </script>
        <?
        $to = "hiwebminton@gmail.com";
        $to2 = "ywebcard@gmail.com";
        $subject = "Сообщение с сайта ".$_SERVER['SERVER_NAME']." \n";
        $message = "Имя: $title \n\nE-mail: $email \n\nСообщение: $text";
        mail ($to,$subject,$message, "Content-type:text/plain; charset = utf-8\r\nFrom:$email");
        mail ($to2,$subject,$message, "Content-type:text/plain; charset = utf-8\r\nFrom:$email");
        $emailSent = true;
    }
}
?>
