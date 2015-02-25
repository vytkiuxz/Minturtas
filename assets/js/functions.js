/********************************
CK EDITOR
********************************/
if( $.isFunction($.fn.ckeditor) ){
	CKEDITOR.disableAutoInline = true;
	$('#ckeditor').ckeditor();
}