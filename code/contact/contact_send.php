<?php


/*************************************************
 * //ファイルアップロード関連ここまで
 **************************************************/

$input1 = ! empty( $_POST['input1'] ) ? $_POST['input1'] : '';
$input12 = ! empty( $_POST['input12'] ) ? $_POST['input12'] : '';
$input2 = ! empty( $_POST['input2'] ) ? $_POST['input2'] : '';
$input21 = ! empty( $_POST['input21'] ) ? $_POST['input21'] : '';
$input3 = ! empty( $_POST['input3'] ) ? $_POST['input3'] : '';
$select4 = ! empty( $_POST['select4'] ) ? $_POST['select4'] : '';
$input5 = ! empty( $_POST['input5'] ) ? $_POST['input5'] : '';
$input6 = ! empty( $_POST['input6'] ) ? $_POST['input6'] : '';
$phone_number = ! empty( $_POST['phone_number'] ) ? $_POST['phone_number'] : '';
$email = ! empty( $_POST['email'] ) ? $_POST['email'] : '';
$select8 = ! empty( $_POST['select8'] ) ? $_POST['select8'] : '';
$select9 = ! empty( $_POST['select9'] ) ? $_POST['select9'] : '';
$join_date_1 = ! empty( $_POST['join_date_1'] ) ? $_POST['join_date_1'] : '';
$join_date_2 = ! empty( $_POST['join_date_2'] ) ? $_POST['join_date_2'] : '';

$input10 = ! empty( $_POST['input10'] ) ? $_POST['input10'] : '';
$input101 = ! empty( $_POST['input101'] ) ? $_POST['input101'] : '';
$input102 = ! empty( $_POST['input102'] ) ? $_POST['input102'] : '';
$input103 = ! empty( $_POST['input103'] ) ? $_POST['input103'] : '';
$input104 = ! empty( $_POST['input104'] ) ? $_POST['input104'] : '';
$input105 = ! empty( $_POST['input105'] ) ? $_POST['input105'] : '';
$input106 = ! empty( $_POST['input106'] ) ? $_POST['input106'] : '';
$input107 = ! empty( $_POST['input107'] ) ? $_POST['input107'] : '';
$input108 = ! empty( $_POST['input108'] ) ? $_POST['input108'] : '';
$input109 = ! empty( $_POST['input109'] ) ? $_POST['input109'] : '';
$input1010 = ! empty( $_POST['input1010'] ) ? $_POST['input1010'] : '';
$input1011 = ! empty( $_POST['input1011'] ) ? $_POST['input1011'] : '';

$input11 = ! empty( $_POST['input11'] ) ? $_POST['input11'] : '';
$select111 = ! empty( $_POST['select111'] ) ? $_POST['select111'] : '';
$select112 = ! empty( $_POST['select112'] ) ? $_POST['select112'] : '';

$input12_1= ! empty( $_POST['input12_1'] ) ? $_POST['input12_1'] : '';
$input12_2= ! empty( $_POST['input12_2'] ) ? $_POST['input12_2'] : '';
$input12_3= ! empty( $_POST['input12_3'] ) ? $_POST['input12_3'] : '';
$input12_4= ! empty( $_POST['input12_4'] ) ? $_POST['input12_4'] : '';
$input12_5= ! empty( $_POST['input12_5'] ) ? $_POST['input12_5'] : '';
$input12_6= ! empty( $_POST['input12_6'] ) ? $_POST['input12_6'] : '';
$input12_7= ! empty( $_POST['input12_7'] ) ? $_POST['input12_7'] : '';
$input12_8= ! empty( $_POST['input12_8'] ) ? $_POST['input12_8'] : '';

$select12_1= ! empty( $_POST['select12_1'] ) ? $_POST['select12_1'] : '';
$select12_2= ! empty( $_POST['select12_2'] ) ? $_POST['select12_2'] : '';
$select12_3= ! empty( $_POST['select12_3'] ) ? $_POST['select12_3'] : '';
$select12_4= ! empty( $_POST['select12_4'] ) ? $_POST['select12_4'] : '';
$select12_5= ! empty( $_POST['select12_5'] ) ? $_POST['select12_5'] : '';
$select12_6= ! empty( $_POST['select12_6'] ) ? $_POST['select12_6'] : '';
$select12_7= ! empty( $_POST['select12_7'] ) ? $_POST['select12_7'] : '';
$select12_8= ! empty( $_POST['select12_8'] ) ? $_POST['select12_8'] : '';







$mail = new PHPMailer();

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "xxxxxx";
$mail->Password = "xxxx";
$mail->SetFrom("xxxxxx@xxxxx.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("xxxxxx@xxxxx.com");

if(!$mail->Send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "Message has been sent";
}

// ホームページ運営者に返信するメール
mb_language( "Japanese" );
mb_internal_encoding( "UTF-8" );
$today = date( "Y/m/d H:i:s" );

/* 案件によって調整
------------------------------------------------------------ */

/* 件名、本文冒頭 */
$mail_title = "■■■";
//$mail_title = $passmaster_array['hptitle'];

/* クライアントメールアドレス */
//$mailto   = "system@extlink.co.jp";
//$mailto = $infomail;
//$mailto = "truongcongluan@gmail.com";
$mailto = "thang.pham@365dep.vn";

/* エンドユーザー返信メール末尾の案件アドレス */
$site_url_mail = "http://●●●.net/●●●/●●●/";
//$site_url_mail = $site_url;

/* --------------------------------------------------------- */


$subject = "{$mail_title}ホームページの『お問い合わせ』より送信";

$message = <<< maildata
{$mail_title}ホームページの『お問い合わせ』よりメールがありました。

送信日時：{$today}


お名前： 姓: {$input1}　　名： {$input12}

フリガナ： セイ: {$input2}　　メイ：{$input21}

住　所： 〒: {$input3}　　
		都道府県名：{$select4}
		市町村名：{$input5}
		番地・マンション名・部屋番号：{$input6}

電話番号：{$phone_number}

メールアド：{$email}

参加人数： 大人: {$select8}　　こども： {$select9}

参加日： 11/16 : {$join_date_1}　　こども： {$join_date_2}

興味のある セミナー : 
{$input10}　　
{$input101}
{$input102}
{$input103}
{$input104}
{$input105}
{$input106}
{$input107}
{$input108}
{$input109}
{$input1010}
{$input1011}

託児所利用：{$input11}
▽ご利用人数: {$select111}
▽ご希望の時間帯: {$select112}

参加メーカーとの 個別相談希望: 
{$input12_1}   ご希望の時間帯: {$select12_1}
{$input12_2}   ご希望の時間帯: {$select12_2}
{$input12_3}   ご希望の時間帯: {$select12_3}
{$input12_4}   ご希望の時間帯: {$select12_4}
{$input12_5}   ご希望の時間帯: {$select12_5}
{$input12_6}   ご希望の時間帯: {$select12_6}
{$input12_7}   ご希望の時間帯: {$select12_7}
{$input12_8}   ご希望の時間帯: {$select12_8}

maildata;

$fromName = mb_encode_mimeheader( $mail_title );


// 添付ファイルを付ける場合↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓

$contentType = 'text/plain; charset="ISO-2022-JP"';

// ヘッダー情報
$header = <<< headerdata
X-Mailer: PHP5
From:{$fromName}
MIME-Version: 1.0
Content-Type: {$contentType}
Content-Transfer-Encoding: 7bit
headerdata;

// 添付ファイルを付ける場合↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑

//メール送信
mb_send_mail( $mailto, $subject, $message, $header );

// ユーザー宛
$header       = "From:" . mb_encode_mimeheader( $mail_title ) . "<" . $mailto . ">\r\n";
$mailto_guest = $email;
$subject      = "【{$mail_title}】お問い合わせフォーム確認メール";
$message      = <<<_message
『{$mail_title}』ホームページ より、
お問い合わせ頂きまして、誠にありがとうございます。
お問い合わせ内容については、後日こちらよりご連絡をさせて頂きます。

このメールは、メールサーバより自動送信しています。

送信日時：{$today}

----------------------------------------------------------------------


お名前： 姓: {$input1}　　名： {$input12}

フリガナ： セイ: {$input2}　　メイ：{$input21}

住　所： 〒: {$input3}　　
		都道府県名：{$select4}
		市町村名：{$input5}
		番地・マンション名・部屋番号：{$input6}

電話番号：{$phone_number}

メールアド：{$email}

参加人数： 大人: {$select8}　　こども： {$select9}

参加日： 11/16 : {$join_date_1}　　こども： {$join_date_2}

興味のある セミナー : 
{$input10}　　
{$input101}
{$input102}
{$input103}
{$input104}
{$input105}
{$input106}
{$input107}
{$input108}
{$input109}
{$input1010}
{$input1011}

託児所利用：{$input11}

参加メーカーとの 個別相談希望: 
{$input12_1}   ご希望の時間帯: {$select12_1}
{$input12_2}   ご希望の時間帯: {$select12_2}
{$input12_3}   ご希望の時間帯: {$select12_3}
{$input12_4}   ご希望の時間帯: {$select12_4}
{$input12_5}   ご希望の時間帯: {$select12_5}
{$input12_6}   ご希望の時間帯: {$select12_6}
{$input12_7}   ご希望の時間帯: {$select12_7}
{$input12_8}   ご希望の時間帯: {$select12_8}

----------------------------------------------------------------------

{$mail_title}ホームページの『お問い合わせ』より送信
URL：{$site_url_mail}

_message;


//メール送信
mb_send_mail( $mailto_guest, $subject, $message, $header );
