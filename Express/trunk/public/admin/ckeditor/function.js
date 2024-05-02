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
        //filebrowserFlashUploadUrl :'http://'+window.location.host+  '/public/ckeditor/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Flash',
        
	});
}
function initEditorBig(el){
	//CKEDITOR.document.appendStyleSheet( 'http://vangdecor.local/build/assets/app-436fa69a.css' );
	


	CKEDITOR.replace(el,{
		resize_enabled: true,
		language:   "jn",
		height : 800,
		width:1050,
		uiColor:'#f7d5d6',
		filebrowserBrowseUrl : window.location.protocol+'//'+window.location.host+ '/admin/ckeditor/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : window.location.protocol+'//'+window.location.host+ '/admin/ckeditor/ckfinder/ckfinder.html?Type=Images',
       // filebrowserFlashBrowseUrl : 'http://'+window.location.host+ '/public/ckeditor/ckfinder/ckfinder.html?Type=Flash',
        //filebrowserUploadUrl : 'http://'+window.location.host+ '/public/ckeditor/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Files',
        //filebrowserImageUploadUrl :'http://'+window.location.host+  '/public/ckeditor/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Images',
        //filebrowserFlashUploadUrl :'http://'+window.location.host+  '/public/ckeditor/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Flash',
        //  on: {
		//         instanceReady: function() {
		//             this.document.appendStyleSheet( 'http://vangdecor.local/build/assets/app-6b9d856c.css' );
		           

		//             //  var head = CKEDITOR.instances.metas.document.getHead();
		// 	 	    // head.append( CKEDITOR.document.createElement( 'script', {
		// 		    //      attributes : {
		// 		    //         type : 'text/javascript',
		// 		    //         src : "http://vangdecor.local/build/assets/app-0390a907.js"
		// 		    //      }
		// 		    //   })
		//         }
		// },
		   
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
		uiColor:'#f7d5d6',
		height : 200,
		width:940,
		
	});
}