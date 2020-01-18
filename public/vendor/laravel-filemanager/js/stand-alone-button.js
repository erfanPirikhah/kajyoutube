(function( $ ){

$.fn.filemanager = function(type, options) {
type = type || 'file';

this.on('click', function(e) {
  var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
  var target_input = $('#' + $(this).data('input'));
  var target_preview = $('#' + $(this).data('preview'));
  window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
  window.SetUrl = function (items) {
    //var file_path = items;
    // set the value of the desired input to image url
    target_input.val('').val(items).trigger('change');

    // clear previous preview
    target_preview.attr("src",items).addClass('d-block');

    // set or change the preview image src
    // if (items.isArray()) {
    //   items.forEach(function (item) {
    //     target_preview.append(
    //         $('<img>').css('height', '5rem').attr('src', item.thumb_url)
    //     );
    //   });
    // }


    // trigger change event
    target_preview.trigger('change');
  };
  return false;
});
}

})(jQuery);