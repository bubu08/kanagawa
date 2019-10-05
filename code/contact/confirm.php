<?php


$input1       = ! empty( $_POST['input1'] ) ? $_POST['input1'] : '';
$input12      = ! empty( $_POST['input12'] ) ? $_POST['input12'] : '';
$input2       = ! empty( $_POST['input2'] ) ? $_POST['input2'] : '';
$input21      = ! empty( $_POST['input21'] ) ? $_POST['input21'] : '';
$input3       = ! empty( $_POST['input3'] ) ? $_POST['input3'] : '';
$select4      = ! empty( $_POST['select4'] ) ? $_POST['select4'] : '';
$input5       = ! empty( $_POST['input5'] ) ? $_POST['input5'] : '';
$input6       = ! empty( $_POST['input6'] ) ? $_POST['input6'] : '';
$phone_number = ! empty( $_POST['phone_number'] ) ? $_POST['phone_number'] : '';
$email        = ! empty( $_POST['email'] ) ? $_POST['email'] : '';
$select8      = ! empty( $_POST['select8'] ) ? $_POST['select8'] : '';
$select9      = ! empty( $_POST['select9'] ) ? $_POST['select9'] : '';
$join_date_1  = ! empty( $_POST['join_date'][0] ) ? 'checkedmark' : 'checkmark';
$join_date_2  = ! empty( $_POST['join_date'][1] ) ? 'checkedmark' : 'checkmark';

$input10   = isset( $_POST['input10'][0] ) ? 'checkedmark' : 'checkmark';
$input101  = isset( $_POST['input10'][1] ) ? 'checkedmark' : 'checkmark';
$input102  = isset( $_POST['input10'][2] ) ? 'checkedmark' : 'checkmark';
$input103  = isset( $_POST['input10'][3] ) ? 'checkedmark' : 'checkmark';
$input104  = isset( $_POST['input10'][4] ) ? 'checkedmark' : 'checkmark';
$input105  = isset( $_POST['input10'][5] ) ? 'checkedmark' : 'checkmark';
$input106  = isset( $_POST['input10'][6] ) ? 'checkedmark' : 'checkmark';
$input107  = isset( $_POST['input10'][7] ) ? 'checkedmark' : 'checkmark';
$input108  = isset( $_POST['input10'][8] ) ? 'checkedmark' : 'checkmark';
$input109  = isset( $_POST['input10'][9] ) ? 'checkedmark' : 'checkmark';
$input1010 = isset( $_POST['input10'][10] ) ? 'checkedmark' : 'checkmark';
$input1011 = isset( $_POST['input10'][11] ) ? 'checkedmark' : 'checkmark';

$input11 = isset( $_POST['input11'] ) ? 'checkedmark' : 'checkmark';

$input12_1 = isset( $_POST['input12_1'] ) ? 'checkedmark' : 'checkmark';
$input12_2 = isset( $_POST['input12_2'] ) ? 'checkedmark' : 'checkmark';
$input12_3 = isset( $_POST['input12_3'] ) ? 'checkedmark' : 'checkmark';
$input12_4 = isset( $_POST['input12_4'] ) ? 'checkedmark' : 'checkmark';
$input12_5 = isset( $_POST['input12_5'] ) ? 'checkedmark' : 'checkmark';
$input12_6 = isset( $_POST['input12_6'] ) ? 'checkedmark' : 'checkmark';
$input12_7 = isset( $_POST['input12_7'] ) ? 'checkedmark' : 'checkmark';
$input12_8 = isset( $_POST['input12_8'] ) ? 'checkedmark' : 'checkmark';

$select111 = ! empty( $_POST['select111'] ) ? $_POST['select111'] : '';
$select112 = ! empty( $_POST['select112'] ) ? $_POST['select112'] : '';

$select12_1 = ! empty( $_POST['select12_1'] ) ? $_POST['select12_1'] : '';
$select12_2 = ! empty( $_POST['select12_2'] ) ? $_POST['select12_2'] : '';
$select12_3 = ! empty( $_POST['select12_3'] ) ? $_POST['select12_3'] : '';
$select12_4 = ! empty( $_POST['select12_4'] ) ? $_POST['select12_4'] : '';
$select12_5 = ! empty( $_POST['select12_5'] ) ? $_POST['select12_5'] : '';
$select12_6 = ! empty( $_POST['select12_6'] ) ? $_POST['select12_6'] : '';
$select12_7 = ! empty( $_POST['select12_7'] ) ? $_POST['select12_7'] : '';
$select12_8 = ! empty( $_POST['select12_8'] ) ? $_POST['select12_8'] : '';

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie7" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 8]>
<html class="ie8 lt-ie8" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 9]>
<html class="ie9 lt-ie9" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if gt IE 9]><!-->
<html dir="ltr" lang="ja" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>かながわ住まいづくりフェア2019</title>
    <meta name="keywords" content=""/>
    <meta name="description" content="神奈川県内、大手メーカーの設計士と一緒に、安心・安全・快適な家づくりについて考えましょう。こちら設置"/>
    <!-- Cache -->
    <!-- /Cache -->
    <!-- ogp -->

    <!-- ogp -->
    <meta name="viewport" content="width=device-width"/>
    <!-- icon -->

    <!-- default Header Object -->
    <link rel="stylesheet" type="text/css" media="all" href="../js/lib/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="../js/lib/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="../css/global/import.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="../css/validationEngine.jquery.css">

    <!-- /default Header Object -->
    <!-- content Header Object -->
    <link rel="stylesheet" type="text/css" media="all" href="../css/content/form.css"/>

    <!--    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
    <script src="../js/lib/jquery-2.2.4.min.js"></script>
    <script src="../js/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- /content Header Object -->


    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>

    <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-ja.js"></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css"/>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K4L5WF3');</script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K4L5WF3"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

</head>

<body class="form">
<div id="wrapper">
    <header id="formHeader" class="formHeader">
        <div class="container">
            <div class="row">
                <div class="contentHeader">
					<picture>
                        <source media="(min-width: 768px)" srcset="../images/content/form/banner.png">
                        <img src="../images/content/form/banner-mb.png" alt="" class="ct-img" />
                    </picture>


                </div>
            </div>
        </div>
    </header>
    <!-- /#formHeader -->

    <div id="container" class="formContent">
        <div class="container">
            <div class="row">
                <div class="contentBody">
                    <form action="#" data-form='<?php echo json_encode( $_POST ) ?>' class="orderForm form-inline"
                          id="orderForm" method="POST">
                        <div class="row lineForm form1">
                            <div class="col-md-3">
                                <div class="label-infor">
                                    <span>必須</span>
                                    <p>お名前</p>
                                </div>
                            </div>
                            <div class="form-group form-flex col-md-4">
                                <label for="text1">姓</label>
                                <span class="text"><?= $input1 ?></span>

                            </div>
                            <div class="form-group form-flex col-md-4">
                                <label for="text">名</label>
                                <span class="text"><?= $input12 ?></span>
                            </div>
                        </div>

                        <div class="row lineForm form2">
                            <div class="col-md-3">
                                <div class="label-infor">
                                    <span>必須</span>
                                    <p>フリガナ</p>
                                </div>
                            </div>
                            <div class="form-group form-flex col-md-4">
                                <label for="text">セイ</label>
                                <span class="text">
                                    <span class="text"><?= $input2 ?></span>
                                </span></div>
                            <div class="form-group form-flex col-md-4">
                                <label for="text">メイ</label>
                                <span class="text">
                                    <span class="text"><?= $input21 ?></span>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="label-infor">
                                    <span>必須</span>
                                    <p>住　所</p>
                                </div>
                            </div>
                            <div class="form-group col-md-4 form-flex form3">
                                <label for="text">〒</label>
                                <span class="text"><?= $input3 ?></span>
                            </div>

                        </div>
                        <div class="row mT15">
                            <div class="col-md-3"></div>
                            <div class="form-group col-md-4 form4">
                                <label for="text" class="w-100">都道府県名</label>
                                <span class="text"><?= $select4 ?></span>
                            </div>
                            <div class="form-group ol-md-5"></div>
                        </div>
                        <div class="row mT15">
                            <div class="col-md-3"></div>
                            <div class="form-group col-md-7 form5">
                                <label for="text" class="w-100">市町村名</label>
                                <span class="text"><?= $input5 ?></span>
                            </div>
                            <div class="form-group col-md-3"></div>
                        </div>
                        <div class="row lineForm mT15">
                            <div class="col-md-2"></div>
                            <div class="form-group col-md-7 form6">

                            </div>
                            <div class="form-group col-md-3"></div>
                        </div>
                        <div class="row lineForm mT15">
                            <div class="col-md-3">
                                <div class="label-infor">
                                    <span>必須</span>
                                    <p>電話番号</p>
                                    <p class="text-12">＊ハイフンなしで入力</p>
                                </div>
                            </div>
                            <div class="form-group col-md-7">
                                <span class="text"><?= $phone_number ?></span>
                            </div>
                            <div class="form-group ol-md-3"></div>
                        </div>
                        <div class="row lineForm mT15">
                            <div class="col-md-3">
                                <div class="label-infor">
                                    <span>必須</span>
                                    <p>メールアドレス</p>
                                </div>
                            </div>
                            <div class="form-group col-md-7 form7">
                                <span class="text"><?= $email ?></span>
                            </div>
                            <div class="form-group col-md-3"></div>
                        </div>
                        <div class="row lineForm mT15">
                            <div class="col-md-3">
                                <div class="label-infor">
                                    <span>必須</span>
                                    <p>参加人数</p>
                                </div>
                            </div>
                            <div class="form-group mb-block col-md-4 form8">
                                <label class="double" for="text">大人</label>
                                <span class="text"><?= $select8 ?></span>
                            </div>
                            <div class="form-group mb-block col-md-4 form9">
                                <label class="double" for="text">こども</label>
                                <span class="text"><?= $select9 ?></span>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row lineForm mT15">
                            <div class="col-md-3">
                                <div class="label-infor">
                                    <span>必須</span>
                                    <p>参加日</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="wrapCheckmart">
                                    <label class="multi">11/16
                                        <span class="<?= $join_date_1 ?>"> </span>
                                    </label>
                                    <img src="../images/content/form/form7image1.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="wrapCheckmart">
                                    <label class="multi">11/17
                                        <span class="<?= $join_date_2 ?>"> </span>
                                    </label>
                                    <img src="../images/content/form/form7image2.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row lineForm mT15 form10">
                            <div class="col-md-3">
                                <div class="label-infor">
                                    <span>必須</span>
                                    <p>興味のあるセミナー</p>
                                    <p class="text-12">＊複数選択可</p>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="wrapCheckmart">
                                    <label class="unset">11/16 広さに頼らない「心地よい住まい」のつくり方
                                        <span
                                                class="<?= $input10 ?>"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">
                                        11/16 あなたの願い、設計のプロが叶えます！メジャー8社の設計者によるトークバトル（ヘーベルハウス、住友林業、セキスイハイム、積水ハウス）
                                        <span
                                                class="<?= $input101 ?>"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/16 安心安全に暮らす 神奈川県の防災対策と対処法

                                        <span class="<?= $input102 ?>"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/16 あなたの願い、設計のプロが叶えます！メジャー8社の設計者によるトークバトル（ダイワハウス、パナソニックホームズ、ミサワホーム、三井ホーム）

                                        <span class="<?= $input103 ?>"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/16「美人収納」捨てるのが苦手な人もできる仕分け術

                                        <span class="<?= $input104 ?>"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/16 元号、消費税の変化に伴い、押さえておきたいお金の話！
                                        <span
                                                class="<?= $input105 ?>"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/17 実質金利ゼロ!? 住宅ローン&家計で2,000万節約するマル秘テクニック

                                        <span
                                                class="<?= $input106 ?>"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/17 あなたの願い、設計のプロが叶えます！メジャー8社の設計者によるトークバトル（ダイワハウス、パナソニックホームズ、ミサワホーム、三井ホーム）

                                        <span class="<?= $input107 ?>"></span>
                                    </label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/17 元号、消費税の変化に伴い、押さえておきたいお金の話！
                                        <span class="<?= $input108 ?>"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/17 あなたの願い、設計のプロが叶えます！メジャー8社の設計者によるトークバトル（ヘーベルハウス、住友林業、セキスイハイム、積水ハウス）
                                        <span class="<?= $input109 ?>"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/17 災害に強い 安心・安全な住まいとは
                                        <span class="<?= $input1010 ?>"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/17 相続・贈与時のお得な減税制度とは
                                        <span class="<?= $input1011 ?>"></span></label>
                                </div>
                            </div>
                        </div>
                        <div class="row lineForm mT15 form11">
                            <div class="col-md-3">
                                <div class="label-infor">
                                    <span class="gray-span">任意</span>
                                    <p>託児所利用</p>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="lineFormchild hide-line">
                                    <div class="wrapCheckmart">
                                        <label class="unset">利用する
                                            <span class="<?= $input11 ?>"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row ml--15 ">

                                    <div class="form-group col-md-4">
                                        <label class="w-100" for="text">▽ご利用人数</label>
                                        <span class="text"><?= $select111 ?></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="w-100" for="text">▽ご希望の時間帯</label>
                                        <span class="text"><?= $select112 ?></span>
                                    </div>
                                    <div class="form-group col-md-2"></div>
                                </div>

                            </div>
                        </div>

                        <div class="row mT15 form12">
                            <div class="col-md-3">
                                <div class="label-infor">
                                    <span class="gray-span">任意</span>
                                    <p>参加メーカーとの個別相談希望</p>
                                    <p class="text-12">＊複数選択可</p>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h2 class="m0"> 希望するハウスメーカー・ご希望時間をお選びください。 </h2>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">へーベルハウス
                                                <span
                                                        class="<?= $input12_1 ?>"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <span class="text"><?= $select12_1 ?></span>

                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">住友林業<span
                                                        class="<?= $input12_2 ?>"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <span class="text"><?= $select12_2 ?></span>

                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">セキスイハイム<span
                                                        class="<?= $input12_3 ?>"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <span class="text"><?= $select12_3 ?></span>

                                    </div>
                                </div>
                                 <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">積水ハウス <span
                                                        class="<?= $input12_4 ?>"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <span class="text"><?= $select12_4 ?></span>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">ダイワハウス <span
                                                        class="<?= $input12_5 ?>"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <span class="text"><?= $select12_5 ?></span>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">パナソニック ホームズ<span
                                                        class="<?= $input12_6 ?>"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <span class="text"><?= $select12_6 ?></span>

                                    </div>
                                </div>

                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">ミサワホーム<span
                                                        class="<?= $input12_7 ?>"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <span class="text"><?= $select12_7 ?></span>

                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">三井ホーム
                                                <span
                                                        class="<?= $input12_8 ?>"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <span class="text"><?= $select12_8 ?></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer id="formFooter" class="formFooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"><a class="" href="javascript:history.back()">
                            <div class="confirmBtn1 backingbtn">
                                編集画面に戻る
                            </div>
                        </a></div>
                    <div class="col-md-6"><a class="submitbtn" href="">
                            <div class="confirmBtn">
                                確定する
                            </div>
                        </a></div>


                </div>
                <div class="row">

                    <p class="caption"> かながわ住まいづくりフェア事務局 </p>
                    <p class="dig"> 〒231−8445　神奈川新聞社デジタルビジネス局内 </p>
                    <p class="tel"> TEL.045-640-0125 （平日 10：00〜18：00）</p>
                    <p class="mal">お問合せメールアドレス：<a href="mailto:info@kanagawaselect8.jp">info@kanagawaselect8.jp</a></p>

                </div>
            </div>
    </div>
    </footer>
    <!-- /#formFooter -->
</div>
<!-- /#container -->
<div class="copyright">© Kanagawa Shimbun.</div>
</div>
<!-- /#wrapper -->
<!-- default Header Object -->
<script src="../js/contact.js"></script>
<!-- /content Header Object -->
</body>

</html>
