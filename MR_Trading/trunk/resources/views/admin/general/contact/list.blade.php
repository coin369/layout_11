@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href=""> Thông tin liên hệ   ({{$data_list->total()}})  </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
            {!! Form::open(['method'=>'get']) !!}

               <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Tìm kiếm thông tin   </label>
 {!! Form::text('search',@$search,['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>"Nhập tên Thông tin liên hệ   ..."  ]) !!}
  <button type="submit" class="btn btn-sm btn-warning"><i class="fa fa-ban"></i> TÌM KIẾM  </button>
                                                </div>
                                            </div>
            {!! Form::close()!!}


<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Thông tin liên hệ   ( {{$data_list->total()}} )
                                </div>
                                <div class="card-block">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>ID </th>
                                                <th>Tên   </th>
                                                <th> Phone </th>
                                                <th> Email </th>
                                                <th> Subject </th>
                                                <th style="max-width:200px"> Content  </th>
                                                <th> Tuỳ chọn </th>
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
                                                    <?php echo $list['phone'];?>
                                                 </td>  
                                                  <td>
                                                    <?php echo $list['email'];?>
                                                 </td>   
                                                  <td>
                                                    <?php echo $list['subject'];?>
                                                 </td>            
                                                  <td style="width: 200px;">
                                                    <?php echo substr($list['content'], 0,3000)?>
                                                 </td>   

                                                       
                                               
                                                <td>
                                                 
                                                    <a class="btn btn-sm btn-danger click_remove" href='/admin/contact/remove?id=<?php echo $list['id'];?>&_token={{ csrf_token() }}'> <i class="fa fa-remove"></i> Xoá  </a>
                                                    <br />

                                                     <small>Created at : {{$list['created_at']}}</small><br />
                                                    <small>Updated at : {{$list['updated_at']}}</small>
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