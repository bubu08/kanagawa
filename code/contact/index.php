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
    <title>日本酒専門店「ゆとり」</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!-- Cache -->
    <!-- /Cache -->
    <!-- ogp -->

    <!-- ogp -->
    <meta name="viewport" content="width=device-width"/>
    <!-- icon -->

    <!-- For everything else -->

    <!-- /icon -->
    <!-- default Header Object -->
    <link rel="stylesheet" type="text/css" media="all" href="../js/lib/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="../js/lib/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="../css/global/import.css"/>
    <!-- /default Header Object -->
    <!-- content Header Object -->
    <link rel="stylesheet" type="text/css" media="all" href="../css/content/form.css"/>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- /content Header Object -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

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
                    <div class="leftHeader">
                        <h2 class="mainTitle">
                            かながわ <span> 住 </span> まいづくりフェア
                        </h2>

                        <p class="subTitle">お申込フォーム</p>

                        <p class="caption">後日、参加券を郵送いたします。</p>
                    </div>
                    <div class="rightHeader">
                        <a href="#">
                            <img src="../images/content/form/logo.png" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /#formHeader -->

    <div id="container" class="formContent">
        <div class="container">
            <div class="row">
                <div class="contentBody">
                    <form action="confirm.php" class="orderForm form-inline" id="confirmform"
                          method="POST">
                        <div class="row lineForm form1">
                            <div class="col-md-3">
                                <div class="label-infor">
                                    <span>必須</span>
                                    <p>お名前</p>
                                </div>
                            </div>
                            <div class="form-group form-flex col-md-4">
                                <label for="text1">姓</label>
                                <input type="text" class="form-control" name="input1"/>
                            </div>
                            <div class="form-group form-flex col-md-4">
                                <label for="text">名</label>
                                <input type="text" class="form-control" name="input12"/>
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
                                <input type="text" class="form-control" name="input2"/>
                            </div>
                            <div class="form-group form-flex col-md-4">
                                <label for="text">メイ</label>
                                <input type="text" class="form-control" name="input21"/>
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
                                <input type="text" class="form-control" name="input3"/>
                            </div>
                            <div class="form-group col-md-4 dropText">
                                ＊ハイフンなしで入力
                            </div>
                        </div>
                        <div class="row mT15">
                            <div class="col-md-3"></div>
                            <div class="form-group col-md-4 form4">
                                <label for="text" class="w-100">都道府県名</label>
                                <div class="wrapSelect">
                                    <select class="selectForm" name="select4" id="">
                                        <option value="test">test</option>
                                        <option value="test1">test1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ol-md-5"></div>
                        </div>
                        <div class="row mT15">
                            <div class="col-md-3"></div>
                            <div class="form-group col-md-7 form5">
                                <label for="text" class="w-100">市町村名</label>
                                <input type="text" class="form-control w-100" name="input5"/>
                            </div>
                            <div class="form-group col-md-3"></div>
                        </div>
                        <div class="row lineForm mT15">
                            <div class="col-md-3"></div>
                            <div class="form-group col-md-7 form6">
                                <label for="text" class="w-100">番地・マンション名・部屋番号</label>
                                <input type="text" class="form-control w-100" name="input6"/>
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
                                <input type="text" class="form-control w-100" name="phone_number"/>
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
                                <input type="text" class="form-control w-100" name="email"/>
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
                            <div class="form-group col-md-4 form8">
                                <label class="double" for="text">大人</label>
                                <div class="wrapSelect small">
                                    <select class="selectForm" name="select8">
                                        <option value="test">test</option>
                                        <option value="test1">test1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4 form9">
                                <label class="double" for="text">こども</label>
                                <div class="wrapSelect small">
                                    <select class="selectForm" name="select9">
                                        <option value="test">test</option>
                                        <option value="test1">test1</option>
                                    </select>
                                </div>
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
                                    <label class="multi">11/16 <input type="checkbox" name="join_date_1" value="yes"/>
                                        <span class="checkmark"> </span></label>
                                    <img src="../images/content/form/form7image1.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="wrapCheckmart">
                                    <label class="multi">11/17<input type="checkbox" name="join_date_2"
                                                                     value="yes"/><span
                                                class="checkmark"></span></label>
                                    <img src="../images/content/form/form7image2.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row lineForm mT15 form10">
                            <div class="col-md-3">
                              <div class="label-infor">
                                <span>必須</span>
                                <p>興味のある
                                  セミナー</p>
                                  <p class="text-12">＊複数選択可</p>
                              </div>
                            </div>
                            <div class="col-md-9">
                                <div class="wrapCheckmart">
                                    <label class="unset">貴方の願い、設計のプロが叶えます！
                                        メジャー8社の設計者によるトークバトル
                                        広さに頼らない「心地よい住まい」のつくり方
                                        安心安全に暮らす 神奈川県の防災対策と対処法 「美人収納」
                                        捨てるが苦手な人も<input type="checkbox"
                                                        value="貴方の願い、設計のプロが叶えます！メジャー8社の設計者によるトークバトル広さに頼らない「心地よい住まい」のつくり方安心安全に暮らす 神奈川県の防災対策と対処法 「美人収納」捨てるが苦手な人も"
                                                        name="input10"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">広さに頼らない「心地よい住まい」のつくり方
                                        <input type="checkbox" value="広さに頼らない「心地よい住まい」のつくり方"
                                               name="input101"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">安心安全に暮らす 神奈川県の防災対策と対処法
                                        <input type="checkbox" value="安心安全に暮らす 神奈川県の防災対策と対処法"
                                               name="input102"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">「美人収納」 捨てるが苦手な人もできる仕分け術
                                        <input type="checkbox"
                                               value="「美人収納」 捨てるが苦手な人もできる仕分け術"
                                               name="input103"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">元号、消費税の変化に伴い、抑えておきたいお金の話！
                                        <input type="checkbox"
                                               value="元号、消費税の変化に伴い、抑えておきたいお金の話！"
                                               name="input104"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">実質金利ゼロ!?
                                        住宅ローン&家計で2,000万節約するマル秘テクニック
                                        <input type="checkbox" value="実質金利ゼロ!?住宅ローン&家計で2,000万節約するマル秘テクニック"
                                               name="input105"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">災害に強い安心・安全な住まいとは
                                        <input type="checkbox" value="災害に強い安心・安全な住まいとは"
                                               name="input105"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">相続・贈与時の お得な減税制度とは
                                        <input type="checkbox" value="相続・贈与時の お得な減税制度とは"
                                               name="input106"/><span
                                                class="checkmark"></span></label>
                                </div>
                            </div>
                        </div>
                        <div class="row lineForm mT15 form11">
                            <div class="col-md-3">
                              <div class="label-infor">
                                <span class="gray-span">必須</span>
                                  <p>託児所利用</p>
                              </div>
                            </div>
                            <div class="col-md-10">
                                <div class="lineFormchild hide-line">
                                    <div class="wrapCheckmart">
                                        <label class="unset">利用する<input type="checkbox" value="利用する"
                                                                        name="input11"/><span
                                                    class="checkmark"></span></label>
                                    </div>
                                </div>
                                <div class="row ml--15 hide">

                                    <div class="form-group col-md-4">
                                        <label class="w-100" for="text">▽ご利用人数</label>
                                        <div class="wrapSelect small">
                                            <select class="selectForm disabled" disabled name="select111">
                                                <option value="選択してください" selected>選択してください</option>
                                                <option value="1人">1人</option>
                                                <option value="2人">2人</option>
                                                <option value="3人">3人</option>
                                                <option value="4人">4人</option>
                                                <option value="5人">5人</option>
                                                <option value="6人">6人</option>
                                                <option value="7人">7人</option>
                                                <option value="8人">8人</option>
                                                <option value="9人">9人</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="w-100" for="text">▽ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm disabled" disabled name="select112">
                                                <!--午前
                                                    午後
                                                    両方-->
                                                <option value="選択してください">選択してください</option>
                                                <option value="午前">午前</option>
                                                <option value="午前">午後</option>
                                                <option value="午前">両方</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3"></div>
                                </div>

                            </div>
                        </div>

                        <div class="row mT15 form12">
                            <div class="col-md-3">
                              <div class="label-infor">
                                <span class="gray-span">必須</span>
                                  <p>参加メーカーとの
                                    個別相談希望</p>
                                    <p class="text-12">＊複数選択可</p>
                              </div>
                            </div>
                            <div class="col-md-10">
                                <h2 class="m0"> 希望するハウスメーカー・ご希望時間をお選びください。 </h2>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">へーベルハウス<input type="checkbox" value=""
                                                                               name="input12_1"/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm disabled" disabled name="select12_1">
                                                <option value="選択してください">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 10時半〜">11/16 11時半〜</option>
                                                <option value="11/16 10時半〜">11/16 12時半〜</option>
                                                <option value="11/16 10時半〜">11/16 13時半〜</option>
                                                <option value="11/16 10時半〜">11/16 14時半〜</option>
                                                <option value="11/16 10時半〜">11/16 15時半〜</option>
                                                <option value="11/16 10時半〜">11/17 10時半〜</option>
                                                <option value="11/16 10時半〜">11/17 11時半〜</option>
                                                <option value="11/16 10時半〜">11/17 12時半〜</option>
                                                <option value="11/16 10時半〜">11/17 13時半〜</option>
                                                <option value="11/16 10時半〜">11/17 14時半〜</option>
                                                <option value="11/16 10時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">住友林業<input type="checkbox" value=""
                                                                            name="input12_2"/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm disabled" disabled name="select12_2">
                                                <option value="選択してください">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 10時半〜">11/16 11時半〜</option>
                                                <option value="11/16 10時半〜">11/16 12時半〜</option>
                                                <option value="11/16 10時半〜">11/16 13時半〜</option>
                                                <option value="11/16 10時半〜">11/16 14時半〜</option>
                                                <option value="11/16 10時半〜">11/16 15時半〜</option>
                                                <option value="11/16 10時半〜">11/17 10時半〜</option>
                                                <option value="11/16 10時半〜">11/17 11時半〜</option>
                                                <option value="11/16 10時半〜">11/17 12時半〜</option>
                                                <option value="11/16 10時半〜">11/17 13時半〜</option>
                                                <option value="11/16 10時半〜">11/17 14時半〜</option>
                                                <option value="11/16 10時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">セキスイハイム<input type="checkbox" value=""
                                                                               name="input12_3"/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm disabled" disabled name="select12_3">
                                                <option value="選択してください">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 10時半〜">11/16 11時半〜</option>
                                                <option value="11/16 10時半〜">11/16 12時半〜</option>
                                                <option value="11/16 10時半〜">11/16 13時半〜</option>
                                                <option value="11/16 10時半〜">11/16 14時半〜</option>
                                                <option value="11/16 10時半〜">11/16 15時半〜</option>
                                                <option value="11/16 10時半〜">11/17 10時半〜</option>
                                                <option value="11/16 10時半〜">11/17 11時半〜</option>
                                                <option value="11/16 10時半〜">11/17 12時半〜</option>
                                                <option value="11/16 10時半〜">11/17 13時半〜</option>
                                                <option value="11/16 10時半〜">11/17 14時半〜</option>
                                                <option value="11/16 10時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">ダイワハウス <input type="checkbox" value=""
                                                                               name="input12_4"/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm  disabled" disabled name="select12_4">
                                                <option value="選択してください">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 10時半〜">11/16 11時半〜</option>
                                                <option value="11/16 10時半〜">11/16 12時半〜</option>
                                                <option value="11/16 10時半〜">11/16 13時半〜</option>
                                                <option value="11/16 10時半〜">11/16 14時半〜</option>
                                                <option value="11/16 10時半〜">11/16 15時半〜</option>
                                                <option value="11/16 10時半〜">11/17 10時半〜</option>
                                                <option value="11/16 10時半〜">11/17 11時半〜</option>
                                                <option value="11/16 10時半〜">11/17 12時半〜</option>
                                                <option value="11/16 10時半〜">11/17 13時半〜</option>
                                                <option value="11/16 10時半〜">11/17 14時半〜</option>
                                                <option value="11/16 10時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">パナソニック ホームズ<input type="checkbox" value=""
                                                                                   name="input12_5"/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm disabled" disabled name="select12_5">
                                                <option value="選択してください">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 10時半〜">11/16 11時半〜</option>
                                                <option value="11/16 10時半〜">11/16 12時半〜</option>
                                                <option value="11/16 10時半〜">11/16 13時半〜</option>
                                                <option value="11/16 10時半〜">11/16 14時半〜</option>
                                                <option value="11/16 10時半〜">11/16 15時半〜</option>
                                                <option value="11/16 10時半〜">11/17 10時半〜</option>
                                                <option value="11/16 10時半〜">11/17 11時半〜</option>
                                                <option value="11/16 10時半〜">11/17 12時半〜</option>
                                                <option value="11/16 10時半〜">11/17 13時半〜</option>
                                                <option value="11/16 10時半〜">11/17 14時半〜</option>
                                                <option value="11/16 10時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">へーベルハウス<input type="checkbox" name="input12_6"
                                                                               value=""/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm disabled" disabled name="select12_6">
                                                <option value="選択してください">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 10時半〜">11/16 11時半〜</option>
                                                <option value="11/16 10時半〜">11/16 12時半〜</option>
                                                <option value="11/16 10時半〜">11/16 13時半〜</option>
                                                <option value="11/16 10時半〜">11/16 14時半〜</option>
                                                <option value="11/16 10時半〜">11/16 15時半〜</option>
                                                <option value="11/16 10時半〜">11/17 10時半〜</option>
                                                <option value="11/16 10時半〜">11/17 11時半〜</option>
                                                <option value="11/16 10時半〜">11/17 12時半〜</option>
                                                <option value="11/16 10時半〜">11/17 13時半〜</option>
                                                <option value="11/16 10時半〜">11/17 14時半〜</option>
                                                <option value="11/16 10時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">ミサワホーム<input type="checkbox" name="input12_7"
                                                                              value=""/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm disabled" disabled name="select12_7">
                                                <option value="選択してください">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 10時半〜">11/16 11時半〜</option>
                                                <option value="11/16 10時半〜">11/16 12時半〜</option>
                                                <option value="11/16 10時半〜">11/16 13時半〜</option>
                                                <option value="11/16 10時半〜">11/16 14時半〜</option>
                                                <option value="11/16 10時半〜">11/16 15時半〜</option>
                                                <option value="11/16 10時半〜">11/17 10時半〜</option>
                                                <option value="11/16 10時半〜">11/17 11時半〜</option>
                                                <option value="11/16 10時半〜">11/17 12時半〜</option>
                                                <option value="11/16 10時半〜">11/17 13時半〜</option>
                                                <option value="11/16 10時半〜">11/17 14時半〜</option>
                                                <option value="11/16 10時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">三井ホーム<input type="checkbox" name="input12_8" value=""/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="double" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm disabled" disabled name="select12_8">
                                                <option value="選択してください">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 10時半〜">11/16 11時半〜</option>
                                                <option value="11/16 10時半〜">11/16 12時半〜</option>
                                                <option value="11/16 10時半〜">11/16 13時半〜</option>
                                                <option value="11/16 10時半〜">11/16 14時半〜</option>
                                                <option value="11/16 10時半〜">11/16 15時半〜</option>
                                                <option value="11/16 10時半〜">11/17 10時半〜</option>
                                                <option value="11/16 10時半〜">11/17 11時半〜</option>
                                                <option value="11/16 10時半〜">11/17 12時半〜</option>
                                                <option value="11/16 10時半〜">11/17 13時半〜</option>
                                                <option value="11/16 10時半〜">11/17 14時半〜</option>
                                                <option value="11/16 10時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
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
                    <a class="confirmbntttt" href="">
                        <div class="confirmBtn">
                            確認画面へ
                        </div>
                    </a>
                    <p class="caption"> かながわ住まいづくりフェア事務局 </p>
                    <p class="dig"> 〒231−8445　神奈川新聞社デジタルビジネス局内 </p>
                    <p class="tel"> TEL.045-640-0125 （平日 10：00〜18：00）</p>
                    <p class="mal"> info@kanagawaselect8.jp </p>
                </div>
            </div>
    </div>
    </footer>
    <!-- /#formFooter -->
</div>
<!-- /#container -->
<div class="copyright">© Kanagawa Shimbun.  </div>
</div>
<!-- /#wrapper -->
<!-- default Header Object -->
<script src="../js/contact.js"></script>
<!-- /content Header Object -->
</body>

</html>