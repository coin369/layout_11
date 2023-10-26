@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href=""> Danh Mục Tin Tức     ({{$data_list->total()}})  </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
            {!! Form::open(['method'=>'get']) !!}

               <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Tìm kiếm thông tin   </label>
 {!! Form::text('search',@$search,['class'=>!empty($error['name'])? "form-control  is-invalid":"form-control ", "placeholder"=>"Nhập tên Danh Mục Tin Tức     ..."  ]) !!}
  <button type="submit" class="btn btn-sm btn-warning"><i class="fa fa-ban"></i> TÌM KIẾM  </button>
                                                </div>
                                            </div>
            {!! Form::close()!!}


<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Danh Mục Tin Tức     ( {{$data_list->total()}} )
                                </div>
                                <div class="card-block">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>ID </th>
                                                <th>Tên   </th>
                                                <th> Ngày tạo  </th>
                                         
                                                <th> Trạng thái  </th>
                                                    
                                                <th> Tuỳ chọn </th>
                                                 <th> Danh mục con  </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data_list as $list):?>
                                              
                                            <tr>
                                                <td><?php echo $list['id'];?></td>
                                                <td>
                                                     <a href='/tin-tuc/{{$list["alias"]}}' target='_black'>
                                                            {{$list['name']}}
                                                         </a>
                                                            

                                                        </td>
                                                <td>
                                                   
                                                     <small>Created at : {{$list['created_at']}}</small><br />
                                                    <small>Updated at : {{$list['updated_at']}}</small>
                                                </td>
                                               
                                                <td>
                                                    <?php if($list['status']=='1'):?>
                                                         <a class="badge badge-primary "> Hiển thị  </a>
                                                    <?php else:?>
                                                         <a class="badge badge-warning "> ẨN...  </a>
                                                    <?php endif;?>
                                                </td>
                                                 
                                                <td>
                                                    <a class="btn btn-sm btn-success" href='/admin/news/editcate/<?php echo $list['id'];?>'><i class="fa fa-edit"></i> Sửa </a><br /><br />
                                                    <a class="btn btn-sm btn-danger click_remove" href='/admin/news/removecate?id=<?php echo $list['id'];?>&_token={{ csrf_token() }}'> <i class="fa fa-remove"></i> Xoá  </a>
                                                </td>
                                                <td>
                                                    @if($list->Child())
                                                        <table class="table table-sm">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID </th>
                                                                        <th>Tên   </th>
                                                                        <th> Ngày tạo  </th>
                                                                 
                                                                        <th> Trạng thái  </th>
                                                                            
                                                                        <th> Tuỳ chọn </th>
                                                                       
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach($list->Child() as $c):?>
                                                                      
                                                                    <tr>
                                                                        <td><?php echo $c['id'];?></td>
                                                                        <td>
                                                                             <a href='/tin-tuc/{{$c["alias"]}}' target='_black'>
                                                                                    {{$c['name']}}
                                                                                 </a>
                                                                                    

                                                                                </td>
                                                                        <td>
                                                                           
                                                                             <small>Created at : {{$c['created_at']}}</small><br />
                                                                            <small>Updated at : {{$c['updated_at']}}</small>
                                                                        </td>
                                                                       
                                                                        <td>
                                                                            <?php if($c['status']=='1'):?>
                                                                                 <a class="badge badge-primary "> Hiển thị  </a>
                                                                            <?php else:?>
                                                                                 <a class="badge badge-warning "> ẨN...  </a>
                                                                            <?php endif;?>
                                                                        </td>
                                                                         
                                                                        <td>
                                                                            <a class="btn btn-sm btn-success" href='/admin/news/editcate/<?php echo $c['id'];?>'><i class="fa fa-edit"></i> Sửa </a><br /><br />
                                                                            <a class="btn btn-sm btn-danger click_remove" href='/admin/news/removecate?id=<?php echo $c['id'];?>&_token={{ csrf_token() }}'> <i class="fa fa-remove"></i> Xoá  </a>
                                                                        </td>
                                                                       
                                                                    </tr>
                                                                   
                                                                   <?php endforeach;?>
                                                                   
                                                                </tbody>
                                                            </table>
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
        
              //document.getElementById('multi_picture').addEventListener('change', handleFileSelectMulti, false);
        </script>
    @endsection