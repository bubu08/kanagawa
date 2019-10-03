(function ($) {

//送信先URL
    var url_ = 'contact_send.php';

//フォームid名
    var fName = '#confirmform';

    $("body").append('<div id="dialog" style="display: none;"></div>');

    $(fName).validationEngine('attach', {
        ajaxFormValidation         : false,
        onBeforeAjaxFormValidation : confirm_buttom
    });
    // 送信データ処理
    function submitData() {
        var f = $(fName);
        var method_ = f.prop('method');

        // var formdata = new FormData(f.get(0));
        // let serialize = $('#orderForm').serialize();
        // var formdata = new FormData(f.get(0));
        // let serialize = $('#orderForm').serialize();
        // console.log(serialize);

        var data = $('#orderForm').data('form');
        $("#dialog").dialog({
            buttons: {}
        });

        $("#dialog").html('メールを配信しました。');
        $("#dialog").dialog({
            resizable: false,
            draggable: false,
            closeOnEscape: false,
            open: function (event, ui) {
                $(".ui-dialog-titlebar-close").hide();
            },
            modal: true,
            title: '配信完了',
            width: 400,
            height: 150,
            buttons: {
                '閉じる': function () {
                    $(this).dialog('close');
                }
            }
        });

        // POSTでアップロード
        $.ajax({
            url: url_,
            method: method_,
            type: 'POST',
            // data: formdata,
            data: data,
            success: function (data) {
                console.log(data);
                window.location.href = 'thankyou.php';


            }
        }).fail(function (data) {
            alert('送信失敗しました！');
        });
    }


    function inputcheckhideshow() {
        $("input[name='input11']").on('click', function (e) {
            if ($(this).is(':checked')) {

                let parents = $(this).parents('.lineFormchild.hide-line');
                var siblings = parents.siblings();
                siblings.removeClass('hide');
                siblings.find('select').prop('disabled', false);
                siblings.find('select').removeClass('disabled');
                parents.removeClass('hide-line');
            } else {
                let parents = $(this).parents('.lineFormchild');
                var siblings1 = parents.siblings();
                siblings1.addClass('hide');
                siblings1.find('select').prop('disabled', 'disabled');
                siblings1.find('select').addClass('disabled');
                parents.addClass('hide-line');

            }

        })
    }


    function input_select_disable() {
        var i = 1;
        for (i; i <= 9; i++) {
            $('input[name="input12_' + i + '"]').on('click', {i: i}, function (e) {


                let $sleect = $('select[name="select12_' + e.data.i + '"]');
                console.log($sleect);
                if ($(this).is(':checked')) {
                    console.log(e.data.i);
                    $sleect.prop('disabled', false);
                    $sleect.removeClass('disabled');
                } else {
                    console.log(e.data.i);
                    $sleect.prop('disabled', 'disabled');
                    $sleect.addClass('disabled');


                }
            });
        }
    }

    function submit_button() {
        $('a.submitbtn').on('click', function (e) {
            e.preventDefault();

            $("#dialog").html('送信してよろしいですか？');
            $("#dialog").dialog({
                resizable: false,
                draggable: false,
                closeOnEscape: false,
                open: function (event, ui) {
                    $(".ui-dialog-titlebar-close").hide();
                },
                modal: true,
                title: '確認',
                width: 400,
                height: 150,
                buttons: {
                    'OK': function () {
                        submitData();
                    },
                    '閉じる': function () {
                        $(this).dialog('close');
                    }
                }
            });
        });

    }

    function confirm_buttom() {
        $('a.confirmbntttt').on('click', function (e) {
            e.preventDefault();
            console.log('cormfirn');
            $("#confirmform").submit();
        })
    }


    $(document).ready(function () {
        inputcheckhideshow();
        // input_select_disable();
        confirm_buttom();
        submit_button();
    });
})(jQuery);