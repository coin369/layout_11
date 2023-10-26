@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href=""> Users:      ({{$data_list->total()}})  </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
              {!! Form::open(['method'=>'get']) !!}

            <div class="row"> 
          
               <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label for="name">Tên khách hàng:  </label>
 {!! Form::text('name',@$search['name'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>""  ]) !!}
  
                                                </div>
                                            </div>

               <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label for="name">Số điện thoại :    </label>
 {!! Form::text('phone',@$search['phone'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>""  ]) !!}
  
                                                </div>
                                            </div>

               <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label for="name">Email:    </label>
 {!! Form::text('email',@$search['email'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>""  ]) !!}
  
                                                </div>
                                            </div>
                                             <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label for="name">Tên đăng nhập    </label>
 {!! Form::text('username',@$search['username'],['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>""  ]) !!}
 
                                                </div>
                                            </div>
            <div class="col-sm-5">
                 <button type="submit" name='is_search' value='1' class="btn btn-sm btn-warning"><i class="fa fa-ban"></i> TÌM KIẾM  </button>
        </div>
 

        </div>
        {!! Form::close()!!}

<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Users      ( {{$data_list->total()}} )
                                </div>
                                <div class="card-block">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>ID </th>
                                                <th>Thông tin       </th>
                                              
                                                <th> Tên đăng nhập   </th>
                                            
                                    
                                                <th> Tuỳ chọn </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data_list as $list):?>
                                              
                                            <tr>
                                                <td><?php echo $list['id'];?></td>
                                                <td>
                                                       Tên: <strong> {{$list['name']}}</strong><br />
                                                       Email: <strong> {{$list['email']}}</strong><br />
                                                       Số điện thoại: <strong> {{$list['phone']}}</strong><br />

                                                        </td>
                                                      
                                                             <td>
                                                             {{$list['username']}}
                                                          </td>
                                                    
                                                       
                                                 
                                                          
                                                <td>
                                                    <a class="btn btn-sm btn-success" href='/admin/customer/edit/<?php echo $list['id'];?>'><i class="fa fa-edit"></i> Sửa </a>
                                                    @if($list['role']==2)
                                                    <a class="btn btn-sm btn-danger click_remove" href='/admin/customer/remove?id=<?php echo $list['id'];?>&_token={{ csrf_token() }}'> <i class="fa fa-remove"></i> Xoá  </a>
                                                    @endif
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