<?php

/*************************************************
//ファイルアップロード関連ここまで
**************************************************/


	// ホームページ運営者に返信するメール
	mb_language("Japanese");
	mb_internal_encoding("UTF-8");
	$today = date("Y/m/d H:i:s");

	/* 案件によって調整
	------------------------------------------------------------ */

	/* 件名、本文冒頭 */
	$mail_title = "■■■";
	//$mail_title = $passmaster_array['hptitle'];

	/* クライアントメールアドレス */
	//$mailto   = "system@extlink.co.jp";
	//$mailto = $infomail;
	$mailto   = "truongcongluan@gmail.com";

	/* エンドユーザー返信メール末尾の案件アドレス */
	$site_url_mail = "http://●●●.net/●●●/●●●/";
	//$site_url_mail = $site_url;

	/* --------------------------------------------------------- */


	$subject = "{$mail_title}ホームページの『お問い合わせ』より送信";

	$message = <<< maildata
{$mail_title}ホームページの『お問い合わせ』よりメールがありました。

送信日時：{$today}

＜送信内容＞

商品名： {$_POST['prod_1_name']}　　個数：{$_POST['prod_1_number']}
商品名： {$_POST['prod_2_name']}　　個数：{$_POST['prod_2_number']}
商品名： {$_POST['prod_3_name']}　　個数：{$_POST['prod_3_number']}
商品名： {$_POST['prod_4_name']}　　個数：{$_POST['prod_4_number']}

お名前：{$_POST['name']}
お名前　ふりがな：{$_POST['kana']}

ご住所：〒{$_POST['zip']} {$_POST['add']}
お電話番号：{$_POST['tel']}
メールアドレス：{$_POST['mail']}

伝達事項：{$_POST['msg']}

maildata;

	$fromName = mb_encode_mimeheader($mail_title);


// 添付ファイルを付ける場合↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓

	$contentType = 'text/plain; charset="ISO-2022-JP"';

	// ヘッダー情報
	$header = <<< headerdata
X-Mailer: PHP5
From:{$fromName }
MIME-Version: 1.0
Content-Type: {$contentType}
Content-Transfer-Encoding: 7bit
headerdata;

// 添付ファイルを付ける場合↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑

	//メール送信
	mb_send_mail($mailto, $subject, $message, $header);

	// ユーザー宛
	$header = "From:".mb_encode_mimeheader($mail_title)."<".$mailto.">\r\n";
	$mailto_guest = $_POST['mail'];
	$subject = "【{$mail_title}】お問い合わせフォーム確認メール";
	$message = <<<_message
『{$mail_title}』ホームページ より、
お問い合わせ頂きまして、誠にありがとうございます。
お問い合わせ内容については、後日こちらよりご連絡をさせて頂きます。

このメールは、メールサーバより自動送信しています。

送信日時：{$today}

----------------------------------------------------------------------

＜お問い合わせ内容＞

商品名： {$_POST['prod_1_name']}　　個数：{$_POST['prod_1_number']}
商品名： {$_POST['prod_2_name']}　　個数：{$_POST['prod_2_number']}
商品名： {$_POST['prod_3_name']}　　個数：{$_POST['prod_3_number']}
商品名： {$_POST['prod_4_name']}　　個数：{$_POST['prod_4_number']}

お名前：{$_POST['name']}
お名前　ふりがな：{$_POST['kana']}

ご住所：〒{$_POST['zip']} {$_POST['add']}
お電話番号：{$_POST['tel']}
メールアドレス：{$_POST['mail']}

伝達事項：{$_POST['msg']}

----------------------------------------------------------------------

{$mail_title}ホームページの『お問い合わせ』より送信
URL：{$site_url_mail}

_message;


	//メール送信
	mb_send_mail($mailto_guest,$subject,$message,$header);
