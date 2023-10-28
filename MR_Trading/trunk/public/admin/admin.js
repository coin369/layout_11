 $(document).ready(function(){  

              $(".main_picture").change(function(evt){
                          var files = evt.target.files;
                          var th=$(this);
                           var span='';
             
                            for (var i = 0, f; f = files[i]; i++) {

                              // Only process image files.
                              if (!f.type.match('image.*')) {
                                continue;
                              }

                              var reader = new FileReader();

                               
                              reader.onload = (function(theFile) {
                                return function(e) {
                            
                               
                                  span = span + "<img class='img-thumbnail m-2' style='float:left;width:200px;' src='"+e.target.result+"' />";
                                  console.log(e.target.result);
                                  $(th).parent().children('.view_picture').html(span);
                                };
                              })(f);

                              
                              reader.readAsDataURL(f);
                            }
              });
            });


 
   jQuery(document).ready(function($){  
          $(".click_remove").click(function(){
              if(confirm("Do you want ? ")){
                  $.post($(this).attr("href"));
                  $(this).parent().parent().remove();
              }
              return false;
          });
          $(".select_ajax").change(function(){
             
                  $.post($(this).attr("href")+"?value="+$(this).val()+"&_token={{csrf_token()}}");

          });

          $(".click_remove_cate").click(function(){
              if(confirm("Bạn muốn xoá dữ liệu ")){
                  $.post($(this).attr("href"));
                  $(this).parent().parent().next().remove();
                  $(this).parent().parent().remove();
              }
              return false;
          });
      });
      function handleFileSelectBanner(evt) {
                var files = evt.target.files;

             
                for (var i = 0, f; f = files[i]; i++) {

                  // Only process image files.
                  if (!f.type.match('image.*')) {
                    continue;
                  }

                  var reader = new FileReader();

              
                  reader.onload = (function(theFile) {
                    return function(e) {
                
                      var span = document.createElement('span');
                      span.innerHTML = ['<img class="thumb"  src="', e.target.result,
                                        '" title="', escape(theFile.name), '"/>'].join('');

                      
                      $('.detail_banner').html(span);
                    };
                  })(f);

                  
                  reader.readAsDataURL(f);
                }
              }
       function handleFileSelect(evt) {
                var files = evt.target.files;

             
                for (var i = 0, f; f = files[i]; i++) {

                  // Only process image files.
                  if (!f.type.match('image.*')) {
                    continue;
                  }

                  var reader = new FileReader();

              
                  reader.onload = (function(theFile) {
                    return function(e) {
                
                      var span = document.createElement('span');
                      span.innerHTML = ['<img class="thumb" style="" src="', e.target.result,
                                        '" title="', escape(theFile.name), '"/>'].join('');

                      
                      $('.detail_picture').html(span);
                    };
                  })(f);

                  
                  reader.readAsDataURL(f);
                }
              }
              function handleFileSelectMulti(evt) {
                var files = evt.target.files;
                 $('.multi_view').html('');
             
                for (var i = 0, f; f = files[i]; i++) {

              
                  if (!f.type.match('image.*')) {
                    continue;
                  }

                  var reader = new FileReader();

              
                  reader.onload = (function(theFile) {
                    return function(e) {
                
                      var span = document.createElement('span');
                      span.innerHTML = ['<img class="thumb" style="width:200px;border:1px solid #ddd;margin:10px;display:inline-block" src="', e.target.result,
                                        '" title="', escape(theFile.name), '"/>'].join('');

                      
                      $('.multi_view').append(span);
                    };
                  })(f);

                  
                  reader.readAsDataURL(f);
                }
              }
