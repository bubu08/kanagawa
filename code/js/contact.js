//送信先URL
var url_  = 'contact_send.php';

//フォームid名
var fName = '#orderForm';


$(function() {

	$("body").append('<div id="dialog" style="display: none;"></div>');

	$.fn.autoKana('#name',  '#kana', { katakana : false }); // ふりがな変換

	$(fName).validationEngine('attach', {
		ajaxFormValidation         : true,
		onBeforeAjaxFormValidation : submitForm
	});

	// 送信チェック
	function submitForm() {

	    $("#dialog").html('送信してよろしいですか？');
		    $("#dialog").dialog({
	        resizable: false,
	        draggable: false,
	        closeOnEscape: false,
	        open: function(event, ui) {
	            $(".ui-dialog-titlebar-close").hide();
	        },
	        modal: true,
	        title: '確認',
	        width: 400,
	        height: 150,
	        buttons: {
	            'OK': function() {
	                submitData();
	            },
	            '閉じる': function() {
	                $(this).dialog('close');
	            }
	        }
	    });
	}

	// 送信データ処理
	function submitData(){
		var f = $(fName);
		var method_ = f.prop('method');
		var formdata = new FormData( f.get(0) );


		// POSTでアップロード
		$.ajax({
			url    : url_,
			method : method_,
			type   : 'POST',
			data : formdata,
			cache       : false,
			contentType : false,
			processData : false,
			success: function(data) {
				$("#dialog").dialog({
			        buttons: {}
			    });

			    $("#dialog").html('メールを配信しました。');
				    $("#dialog").dialog({
			        resizable: false,
			        draggable: false,
			        closeOnEscape: false,
			        open: function(event, ui) {
			            $(".ui-dialog-titlebar-close").hide();
			        },
			        modal: true,
			        title: '配信完了',
			        width: 400,
			        height: 150,
			        buttons: {
			            '閉じる': function() {
			                $(this).dialog('close');
			            }
			        }
			    });

			}
		}).fail(function(data) {
			alert('送信失敗しました！');
		});
	}
});
