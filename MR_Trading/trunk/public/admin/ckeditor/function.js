function initEditor(el){
	CKEDITOR.replace(el,{
		resize_enabled: false,
		language:   "jn",
		height : 400,
		width:950,
		uiColor:'#f7d5d6',
		filebrowserBrowseUrl : window.location.protocol+'//'+window.location.host+ '/admin/ckeditor/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : window.location.protocol+'//'+window.location.host+ '/admin/ckeditor/ckfinder/ckfinder.html?Type=Images',
       // filebrowserFlashBrowseUrl : 'http://'+window.location.host+ '/public/ckeditor/ckfinder/ckfinder.html?Type=Flash',
        //filebrowserUploadUrl : 'http://'+window.location.host+ '/public/ckeditor/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Files',
        //filebrowserImageUploadUrl :'http://'+window.location.host+  '/public/ckeditor/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Images',
        //filebrowserFlashUploadUrl :'http://'+window.location.host+  '/public/ckeditor/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Flash'
	});
}
function initEditorSmall(el){
	CKEDITOR.replace(el,{
		toolbarGroups:[{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
						{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
						{ name: 'styles' },
						{ name: 'colors' },
						{ name: 'about' }],
		language:   "en",
		height : 200,
		width:970,
		
	});
}