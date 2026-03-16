
// affix
$('#affixNav').affix();

// 山下TODO event/indexでエラー
$('#lfm').filemanager('image');
$('#lfm-sub_0').filemanager('image');
$('#lfm-sub_1').filemanager('image');
$('#lfm-sub_2').filemanager('image');
$('#lfm-sub_3').filemanager('image');
$('#lfm-sub_4').filemanager('image');
$('#lfm-sub_5').filemanager('image');
$('#lfm-sub_6').filemanager('image');
//Date picker

function counter() {
        var x = 0;
        return function() {
            return x++;
        };
    }
// 山下TODO event/indexでエラー
$(document).ready(function() {
      $('#inputKeyword').tagit({
          fieldName: 'keywords[]',
          availableTags: ['KidsUP','キッズアップ']
      });
});
var count = {
        append      : counter(),
        dmy: null
    };
$('.add-list').on('click', function() {
        // var dom = '<li class="add">&lt;li&gt;追加されました: ' + count.append() + '個目&lt;/li&gt;</li>';
        var num = count.append();
        if(num < 9) {
        var dom = [
                    '<li id="item-list'+num+'" class="row">',
                    '<div class="col-sm-10">',
                    '<div class="input-group">',
                    '<span class="input-group-btn">',
                    '<a id="lfm" data-input="sub-thumb'+num+'" class="btn btn-primary">',
                    '<i class="fa fa-picture-o"></i> 写真を選択',
                    '</a>',
                    '</span>',
                    '<input id="sub-thumb'+num+'" class="form-control" type="text" name="sub-images['+num+']">',
                    '</div>',
                    '</div>',
                    '<div class="col-sm-2 op-icon">',
                    '<i class="delete-list fa fa-times" aria-hidden="true"></i>',
                    '</div>',
                    '</li>',
                  ].join('');
        var $target = $('ul#imageList');
        $target.append(dom);
      } else {
        alert('画像は最大10枚までとなります');
      }
      $('.delete-list').on('click', function() {

      });
});
$(function () {
var dateFormat = 'yy-mm-dd';
  $('#datepicker').datepicker({
    autoclose: true,
    dateFormat: dateFormat
  });
  $('#datepicker2').datepicker({
    autoclose: true,
    dateFormat: dateFormat
  });
});
//説明会スケジュール取得
function getEventSchedule(start, end) {
    var start_date = start;
    var end_date   = end;
    var _token = $('#token').val();

    //tokenをセット
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : _token }
    });

    return $.ajax({
        type: 'post',
        scriptCharset: 'utf-8',
        url:  '/event/create/search',
        dataType:'json',
        data: {'start_date':start_date, 'end_date':end_date}
        });
};
