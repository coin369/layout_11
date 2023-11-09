@extends("admin.admin")
 @section('content')
<ol class="breadcrumb">
                <li class="breadcrumb-item"> 
                        <a href="/" target="_black">Home </a>
                 </li>

                 
                <li class="breadcrumb-item"><a href="">  Contact   ({{$data_list->total()}})    </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
          

<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Contact  ( {{$data_list->total()}} )
                                </div>
                                <div class="card-block">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>ID </th>
                                                <th>Name    </th>
                                               
                                                <th> Kana </th>
                                                 <th> Old </th>
                                                <th> Email </th>
                                                <th> Phone </th>
                                                <th style="max-width:200px"> Content  </th>
                                                <th> Option </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data_list as $list):?>
                                            <tr>
                                                <td><?php echo $list['id'];?></td>
                                                <td>
                                                    <?php echo $list['name'];?>
                                                 </td>   
                                                 <td>
                                                    <?php echo $list['kana'];?>
                                                 </td>  
                                                  <td>
                                                    <?php echo $list['old'];?>
                                                 </td>   
                                                  <td>
                                                    <?php echo $list['email'];?>
                                                 </td>   
                                                   <td>
                                                    <?php echo $list['phone'];?>
                                                 </td>            
                                                  <td style="width: 200px;">
                                                    <?php echo substr($list['content'], 0,3000)?>
                                                 </td>   

                                                       
                                               
                                                <td>
                                                 
                                                    <a class="btn btn-sm btn-danger click_remove" href='/admin/contact/remove?id=<?php echo $list['id'];?>&_token={{ csrf_token() }}'> <i class="fa fa-remove"></i>   </a>
                                                    <br />

                                                     <small>{{$list['created_at']}}</small>
                                                </td>

                                            </tr>
                                            
                                           <?php endforeach;?>
                                           
                                        </tbody>
                                    </table>
                                    <nav>
                                        {!! $data_list->appends(['search'=>$search])->render() !!}
                                       
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
     @endsection
    @section('script_js') 
        <script type="text/javascript">
            document.getElementById('picture_name').addEventListener('change', handleFileSelect, false);
            document.getElementById('banner_name').addEventListener('change', handleFileSelectBanner, false);
            initEditor('description');
              //document.getElementById('multi_picture').addEventListener('change', handleFileSelectMulti, false);
        </script>
    @endsection