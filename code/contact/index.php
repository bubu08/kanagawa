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

    <!-- For everything else -->

    <!-- /icon -->
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
                                <input type="text" class="form-control validate[required]" name="input1" required/>
                            </div>
                            <div class="form-group form-flex col-md-4">
                                <label for="text">名</label>
                                <input type="text" class="form-control validate[required]" name="input12"/>
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
                                <input type="text" class="form-control validate[required]" name="input2"/>
                            </div>
                            <div class="form-group form-flex col-md-4">
                                <label for="text">メイ</label>
                                <input type="text" class="form-control validate[required]" name="input21"/>
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
                                <input type="text" class="form-control validate[required]" name="input3"/>
                            </div>
                            <div class="form-group col-md-4 dropText custom-input">
                                ＊ハイフンなしで入力
                            </div>
                        </div>
                        <div class="row mT15">
                            <div class="col-md-3"></div>
                            <div class="form-group col-md-4 form4">
                                <label for="text" class="w-100">都道府県名</label>
                                <div class="wrapSelect">
                                    <select class="selectForm" name="select4">
                                        <option value="北海道">北海道</option>
                                        <option value="青森県">青森県</option>
                                        <option value="岩手県">岩手県</option>
                                        <option value="宮城県">宮城県</option>
                                        <option value="秋田県">秋田県</option>
                                        <option value="山形県">山形県</option>
                                        <option value="福島県">福島県</option>
                                        <option value="茨城県">茨城県</option>
                                        <option value="栃木県">栃木県</option>
                                        <option value="群馬県">群馬県</option>
                                        <option value="埼玉県">埼玉県</option>
                                        <option value="千葉県">千葉県</option>
                                        <option value="東京都">東京都</option>
                                        <option value="神奈川県" selected="selected">神奈川県</option>
                                        <option value="新潟県">新潟県</option>
                                        <option value="富山県">富山県</option>
                                        <option value="石川県">石川県</option>
                                        <option value="福井県">福井県</option>
                                        <option value="山梨県">山梨県</option>
                                        <option value="長野県">長野県</option>
                                        <option value="岐阜県">岐阜県</option>
                                        <option value="静岡県">静岡県</option>
                                        <option value="愛知県">愛知県</option>
                                        <option value="三重県">三重県</option>
                                        <option value="滋賀県">滋賀県</option>
                                        <option value="京都府">京都府</option>
                                        <option value="大阪府">大阪府</option>
                                        <option value="兵庫県">兵庫県</option>
                                        <option value="奈良県">奈良県</option>
                                        <option value="和歌山県"> 和歌山県</option>
                                        <option value="鳥取県">鳥取県</option>
                                        <option value="島根県">島根県</option>
                                        <option value="岡山県">岡山県</option>
                                        <option value="広島県">広島県</option>
                                        <option value="山口県">山口県</option>
                                        <option value="徳島県">徳島県</option>
                                        <option value="香川県">香川県</option>
                                        <option value="愛媛県">愛媛県</option>
                                        <option value="高知県">高知県</option>
                                        <option value="福岡県">福岡県</option>
                                        <option value="佐賀県">佐賀県</option>
                                        <option value="長崎県">長崎県</option>
                                        <option value="熊本県">熊本県</option>
                                        <option value="大分県">大分県</option>
                                        <option value="宮崎県">宮崎県</option>
                                        <option value="鹿児島県"> 鹿児島県</option>
                                        <option value="沖縄県">沖縄県</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ol-md-5"></div>
                        </div>
                        <div class="row mT15">
                            <div class="col-md-3"></div>
                            <div class="form-group col-md-7 form5">
                                <label for="text" class="w-100">市町村名</label>
                                <input type="text" class="form-control w-100 validate[required]" name="input5"/>
                            </div>
                            <div class="form-group col-md-3"></div>
                        </div>
                        <div class="row lineForm mT15">
                            <div class="col-md-3"></div>
                            <div class="form-group col-md-7 form6">
                                <label for="text" class="w-100">番地・マンション名・部屋番号</label>
                                <input type="text" class="form-control w-100 validate[required]" name="input6"/>
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
                                <input type="text" class="form-control w-100 validate[required]" name="phone_number"/>
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
                                <input type="text" class="form-control w-100 validate[required]" name="email"/>
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
                                <div class="wrapSelect small">
                                    <select class="selectForm" name="select8">
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
                            <div class="form-group mb-block col-md-4 form9">
                                <label class="double" for="text">こども</label>
                                <div class="wrapSelect small">
                                    <select class="selectForm" name="select9">
                                        <option value="0人">0人</option>
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
                                    <label class="multi">11/16 <input type="checkbox"
                                                                      class="checkbox validate[minCheckbox[1]]"
                                                                      name="join_date[]"/>
                                        <span class="checkmark"> </span></label>
                                    <img src="../images/content/form/form7image1.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="wrapCheckmart">
                                    <label class="multi">11/17<input type="checkbox"
                                                                     class="checkbox validate[minCheckbox[1]]"
                                                                     name="join_date[]"
                                        /><span
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
                                    <p>興味のあるセミナー</p>
                                    <p class="text-12">＊複数選択可</p>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="wrapCheckmart">
                                    <label class="unset">11/16 広さに頼らない「心地よい住まい」のつくり方
                                        <input type="checkbox" class="validate[minCheckbox[1]]"
                                               value="11/16 広さに頼らない「心地よい住まい」のつくり方"
                                               name="input10[]"/>
                                        <span
                                                class="checkmark "></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/16 あなたの願い、設計のプロが叶えます！メジャー8社の設計者によるトークバトル（ヘーベルハウス、住友林業、セキスイハイム、積水ハウス）
                                        <input type="checkbox" class="validate[minCheckbox[1]]"
                                               value="11/16 あなたの願い、設計のプロが叶えます！メジャー8社の設計者によるトークバトル（ヘーベルハウス、住友林業、セキスイハイム、積水ハウス）"
                                               name="input10[]"/>
                                        <span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/16 安心安全に暮らす 神奈川県の防災対策と対処法
                                        <input type="checkbox"
                                               class="validate[minCheckbox[1]]"
                                               value="11/16 安心安全に暮らす 神奈川県の防災対策と対処法"
                                               name="input10[]"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/16 あなたの願い、設計のプロが叶えます！メジャー8社の設計者によるトークバトル（ダイワハウス、パナソニックホームズ、ミサワホーム、三井ホーム）
                                        <input type="checkbox"
                                               class="validate[minCheckbox[1]]"
                                               value="11/16 あなたの願い、設計のプロが叶えます！メジャー8社の設計者によるトークバトル（ダイワハウス、パナソニックホームズ、ミサワホーム、三井ホーム）"
                                               name="input10[]"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/16「美人収納」捨てるのが苦手な人もできる仕分け術
                                        <input type="checkbox"
                                               class="validate[minCheckbox[1]]"
                                               value="11/16「美人収納」捨てるのが苦手な人もできる仕分け術"
                                               name="input10[]"/>
                                        <span class="checkmark"></span>
                                    </label>

                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/16 元号、消費税の変化に伴い、押さえておきたいお金の話！
                                        <input type="checkbox"
                                               class="validate[minCheckbox[1]]"
                                               value="11/16 元号、消費税の変化に伴い、押さえておきたいお金の話！"
                                               name="input10[]"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/17 実質金利ゼロ!? 住宅ローン&家計で2,000万節約するマル秘テクニック
                                        <input type="checkbox"
                                               class="validate[minCheckbox[1]]"
                                               value="11/17 実質金利ゼロ!? 住宅ローン&家計で2,000万節約するマル秘テクニック"
                                               name="input10[]"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/17 あなたの願い、設計のプロが叶えます！メジャー8社の設計者によるトークバトル（ダイワハウス、パナソニックホームズ、ミサワホーム、三井ホーム）
                                        <input type="checkbox"
                                               class="validate[minCheckbox[1]]"
                                               value="11/17 あなたの願い、設計のプロが叶えます！メジャー8社の設計者によるトークバトル（ダイワハウス、パナソニックホームズ、ミサワホーム、三井ホーム）"
                                               name="input10[]"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/17 元号、消費税の変化に伴い、押さえておきたいお金の話！
                                        <input type="checkbox"
                                               class="validate[minCheckbox[1]]"
                                               value="11/17 元号、消費税の変化に伴い、押さえておきたいお金の話！"
                                               name="input10[]"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/17 あなたの願い、設計のプロが叶えます！メジャー8社の設計者によるトークバトル（ヘーベルハウス、住友林業、セキスイハイム、積水ハウス）
                                        <input type="checkbox"
                                               class="validate[minCheckbox[1]]"
                                               value="11/17 あなたの願い、設計のプロが叶えます！メジャー8社の設計者によるトークバトル（ヘーベルハウス、住友林業、セキスイハイム、積水ハウス）"
                                               name="input10[]"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/17 災害に強い 安心・安全な住まいとは
                                        <input type="checkbox"
                                               value="11/17 災害に強い 安心・安全な住まいとは"
                                               name="input10[]" class="validate[minCheckbox[1]]"/><span
                                                class="checkmark"></span></label>
                                </div>
                                <div class="wrapCheckmart">
                                    <label class="unset">11/17 相続・贈与時のお得な減税制度とは
                                        <input type="checkbox"
                                               value="11/17 相続・贈与時のお得な減税制度とは"
                                               name="input10[]" class="validate[minCheckbox[1]]"/><span
                                                class="checkmark"></span></label>
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
                                        <label class="unset">利用する<input type="checkbox" value="利用する"
                                                                        name="input11"/><span
                                                    class="checkmark"></span></label>
                                    </div>
                                </div>
                                <div class="row ml--15 hide">

                                    <div class="form-group col-md-4">
                                        <label class="w-100" for="text">▽ご利用人数</label>
                                        <div class="wrapSelect small">
                                            <select class="selectForm disabled validate[required]" disabled
                                                    name="select111">
                                                <option value="" selected>選択してください</option>
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
                                            <select class="selectForm disabled validate[required]" disabled
                                                    name="select112">
                                                <!--午前
                                                    午後
                                                    両方-->
                                                <option value="">選択してください</option>
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
                                            <label class="unset">へーベルハウス<input type="checkbox"
                                                                               name="input12_1"/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group form-flex flex-sp col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm " name="select12_1">
                                                <option value="">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 11時半〜">11/16 11時半〜</option>
                                                <option value="11/16 12時半〜">11/16 12時半〜</option>
                                                <option value="11/16 13時半〜">11/16 13時半〜</option>
                                                <option value="11/16 14時半〜">11/16 14時半〜</option>
                                                <option value="11/16 15時半〜">11/16 15時半〜</option>
                                                <option value="11/17 10時半〜">11/17 10時半〜</option>
                                                <option value="11/17 11時半〜">11/17 11時半〜</option>
                                                <option value="11/17 12時半〜">11/17 12時半〜</option>
                                                <option value="11/17 13時半〜">11/17 13時半〜</option>
                                                <option value="11/17 14時半〜">11/17 14時半〜</option>
                                                <option value="11/17 15時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">住友林業<input type="checkbox"
                                                                            name="input12_2"/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group form-flex flex-sp  col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm " name="select12_2">
                                                <option value="">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 11時半〜">11/16 11時半〜</option>
                                                <option value="11/16 12時半〜">11/16 12時半〜</option>
                                                <option value="11/16 13時半〜">11/16 13時半〜</option>
                                                <option value="11/16 14時半〜">11/16 14時半〜</option>
                                                <option value="11/16 15時半〜">11/16 15時半〜</option>
                                                <option value="11/17 10時半〜">11/17 10時半〜</option>
                                                <option value="11/17 11時半〜">11/17 11時半〜</option>
                                                <option value="11/17 12時半〜">11/17 12時半〜</option>
                                                <option value="11/17 13時半〜">11/17 13時半〜</option>
                                                <option value="11/17 14時半〜">11/17 14時半〜</option>
                                                <option value="11/17 15時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">セキスイハイム<input type="checkbox"
                                                                               name="input12_3"/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group form-flex flex-sp  col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm " name="select12_3">
                                                <option value="">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 11時半〜">11/16 11時半〜</option>
                                                <option value="11/16 12時半〜">11/16 12時半〜</option>
                                                <option value="11/16 13時半〜">11/16 13時半〜</option>
                                                <option value="11/16 14時半〜">11/16 14時半〜</option>
                                                <option value="11/16 15時半〜">11/16 15時半〜</option>
                                                <option value="11/17 10時半〜">11/17 10時半〜</option>
                                                <option value="11/17 11時半〜">11/17 11時半〜</option>
                                                <option value="11/17 12時半〜">11/17 12時半〜</option>
                                                <option value="11/17 13時半〜">11/17 13時半〜</option>
                                                <option value="11/17 14時半〜">11/17 14時半〜</option>
                                                <option value="11/17 15時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">積水ハウス<input type="checkbox"
                                                                               name="input12_4"/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group form-flex flex-sp  col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm  " name="select12_4">
                                                <option value="">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 11時半〜">11/16 11時半〜</option>
                                                <option value="11/16 12時半〜">11/16 12時半〜</option>
                                                <option value="11/16 13時半〜">11/16 13時半〜</option>
                                                <option value="11/16 14時半〜">11/16 14時半〜</option>
                                                <option value="11/16 15時半〜">11/16 15時半〜</option>
                                                <option value="11/17 10時半〜">11/17 10時半〜</option>
                                                <option value="11/17 11時半〜">11/17 11時半〜</option>
                                                <option value="11/17 12時半〜">11/17 12時半〜</option>
                                                <option value="11/17 13時半〜">11/17 13時半〜</option>
                                                <option value="11/17 14時半〜">11/17 14時半〜</option>
                                                <option value="11/17 15時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">ダイワハウス <input type="checkbox"
                                                                               name="input12_5"/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group form-flex flex-sp  col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm  " name="select12_5">
                                                <option value="">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 11時半〜">11/16 11時半〜</option>
                                                <option value="11/16 12時半〜">11/16 12時半〜</option>
                                                <option value="11/16 13時半〜">11/16 13時半〜</option>
                                                <option value="11/16 14時半〜">11/16 14時半〜</option>
                                                <option value="11/16 15時半〜">11/16 15時半〜</option>
                                                <option value="11/17 10時半〜">11/17 10時半〜</option>
                                                <option value="11/17 11時半〜">11/17 11時半〜</option>
                                                <option value="11/17 12時半〜">11/17 12時半〜</option>
                                                <option value="11/17 13時半〜">11/17 13時半〜</option>
                                                <option value="11/17 14時半〜">11/17 14時半〜</option>
                                                <option value="11/17 15時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">パナソニックホームズ<input type="checkbox"
                                                                                   name="input12_6"/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group form-flex flex-sp col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm " name="select12_6">
                                                <option value="">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 11時半〜">11/16 11時半〜</option>
                                                <option value="11/16 12時半〜">11/16 12時半〜</option>
                                                <option value="11/16 13時半〜">11/16 13時半〜</option>
                                                <option value="11/16 14時半〜">11/16 14時半〜</option>
                                                <option value="11/16 15時半〜">11/16 15時半〜</option>
                                                <option value="11/17 10時半〜">11/17 10時半〜</option>
                                                <option value="11/17 11時半〜">11/17 11時半〜</option>
                                                <option value="11/17 12時半〜">11/17 12時半〜</option>
                                                <option value="11/17 13時半〜">11/17 13時半〜</option>
                                                <option value="11/17 14時半〜">11/17 14時半〜</option>
                                                <option value="11/17 15時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">ミサワホーム<input type="checkbox" name="input12_7"
                                                /><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group form-flex flex-sp col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm " name="select12_7">
                                                <option value="">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 11時半〜">11/16 11時半〜</option>
                                                <option value="11/16 12時半〜">11/16 12時半〜</option>
                                                <option value="11/16 13時半〜">11/16 13時半〜</option>
                                                <option value="11/16 14時半〜">11/16 14時半〜</option>
                                                <option value="11/16 15時半〜">11/16 15時半〜</option>
                                                <option value="11/17 10時半〜">11/17 10時半〜</option>
                                                <option value="11/17 11時半〜">11/17 11時半〜</option>
                                                <option value="11/17 12時半〜">11/17 12時半〜</option>
                                                <option value="11/17 13時半〜">11/17 13時半〜</option>
                                                <option value="11/17 14時半〜">11/17 14時半〜</option>
                                                <option value="11/17 15時半〜">11/17 15時半〜</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mT20 ml--15">
                                    <div class="form-group col-md-4">
                                        <div class="wrapCheckmart">
                                            <label class="unset">三井ホーム<input type="checkbox" name="input12_8"/><span
                                                        class="checkmark"></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="form-group form-flex flex-sp  col-md-8">
                                        <label class="double width-auto" for="text">ご希望の時間帯</label>
                                        <div class="wrapSelect large">
                                            <select class="selectForm " name="select12_8">
                                                <option value="">選択してください</option>
                                                <option value="11/16 10時半〜">11/16 10時半〜</option>
                                                <option value="11/16 11時半〜">11/16 11時半〜</option>
                                                <option value="11/16 12時半〜">11/16 12時半〜</option>
                                                <option value="11/16 13時半〜">11/16 13時半〜</option>
                                                <option value="11/16 14時半〜">11/16 14時半〜</option>
                                                <option value="11/16 15時半〜">11/16 15時半〜</option>
                                                <option value="11/17 10時半〜">11/17 10時半〜</option>
                                                <option value="11/17 11時半〜">11/17 11時半〜</option>
                                                <option value="11/17 12時半〜">11/17 12時半〜</option>
                                                <option value="11/17 13時半〜">11/17 13時半〜</option>
                                                <option value="11/17 14時半〜">11/17 14時半〜</option>
                                                <option value="11/17 15時半〜">11/17 15時半〜</option>
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
                    <span class="alert-text">
                        ※個人情報は、セミナーの受付と個別相談会、出展企業からの住宅情報のご案内、ご提供に使用させていただく場合がございます。あらかじめご了承の上お申込みください。
                    </span>
                </div>
                <div class="row">

                    <a class="confirmbntttt" href="">
                        <div class="confirmBtn">
                            確認画面へ
                        </div>
                    </a>
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
