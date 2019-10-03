<?php


/*************************************************
 * //ファイルアップロード関連ここまで
 **************************************************/


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


お名前： 姓: {$_POST['input1']}　　名： {$_POST['input12']}

フリガナ： セイ: {$_POST['input2']}　　メイ：{$_POST['input21']}

住　所： 〒: {$_POST['input3']}　　
		都道府県名：{$_POST['select4']}
		市町村名：{$_POST['input5']}
		番地・マンション名・部屋番号：{$_POST['input6']}

電話番号：{$_POST['phone_number']}

メールアド：{$_POST['email']}

参加人数： 大人: {$_POST['select8']}　　こども： {$_POST['select9']}

参加日： 11/16 : {$_POST['join_date_1']}　　こども： {$_POST['join_date_2']}

興味のある セミナー : 
{$_POST['input10']}　　
{$_POST['input101']}
{$_POST['input102']}
{$_POST['input103']}
{$_POST['input104']}
{$_POST['input105']}
{$_POST['input106']}

託児所利用：{$_POST['input11']}

参加メーカーとの 個別相談希望: 
{$_POST['input12_1']}   ご希望の時間帯: {$_POST['select12_1']}
{$_POST['input12_2']}   ご希望の時間帯: {$_POST['select12_2']}
{$_POST['input12_3']}   ご希望の時間帯: {$_POST['select12_3']}
{$_POST['input12_4']}   ご希望の時間帯: {$_POST['select12_4']}
{$_POST['input12_5']}   ご希望の時間帯: {$_POST['select12_5']}
{$_POST['input12_6']}   ご希望の時間帯: {$_POST['select12_6']}
{$_POST['input12_7']}   ご希望の時間帯: {$_POST['select12_7']}
{$_POST['input12_8']}   ご希望の時間帯: {$_POST['select12_8']}

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
$mailto_guest = $_POST['email'];
$subject      = "【{$mail_title}】お問い合わせフォーム確認メール";
$message      = <<<_message
『{$mail_title}』ホームページ より、
お問い合わせ頂きまして、誠にありがとうございます。
お問い合わせ内容については、後日こちらよりご連絡をさせて頂きます。

このメールは、メールサーバより自動送信しています。

送信日時：{$today}

----------------------------------------------------------------------



お名前： 姓: {$_POST['input1']}　　名： {$_POST['input12']}

フリガナ： セイ: {$_POST['input2']}　　メイ：{$_POST['input21']}

住　所： 〒: {$_POST['input3']}　　
		都道府県名：{$_POST['select4']}
		市町村名：{$_POST['input5']}
		番地・マンション名・部屋番号：{$_POST['input6']}

電話番号：{$_POST['phone_number']}

メールアド：{$_POST['email']}

参加人数： 大人: {$_POST['select8']}　　こども： {$_POST['select9']}

参加日： 11/16 : {$_POST['join_date_1']}　　こども： {$_POST['join_date_2']}

興味のある セミナー : 
{$_POST['input10']}　　
{$_POST['input101']}
{$_POST['input102']}
{$_POST['input103']}
{$_POST['input104']}
{$_POST['input105']}
{$_POST['input106']}

託児所利用：{$_POST['input11']}

参加メーカーとの 個別相談希望: 
{$_POST['input12_1']}   ご希望の時間帯: {$_POST['select12_1']}
{$_POST['input12_2']}   ご希望の時間帯: {$_POST['select12_2']}
{$_POST['input12_3']}   ご希望の時間帯: {$_POST['select12_3']}
{$_POST['input12_4']}   ご希望の時間帯: {$_POST['select12_4']}
{$_POST['input12_5']}   ご希望の時間帯: {$_POST['select12_5']}
{$_POST['input12_6']}   ご希望の時間帯: {$_POST['select12_6']}
{$_POST['input12_7']}   ご希望の時間帯: {$_POST['select12_7']}
{$_POST['input12_8']}   ご希望の時間帯: {$_POST['select12_8']}


----------------------------------------------------------------------

{$mail_title}ホームページの『お問い合わせ』より送信
URL：{$site_url_mail}

_message;


//メール送信
mb_send_mail( $mailto_guest, $subject, $message, $header );
