@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href=""> Trang: ({{$data_list->total()}})  </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
            {!! Form::open(['method'=>'get']) !!}

               <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label for="name">Tìm kiếm thông tin   </label>
 {!! Form::text('search',@$search,['class'=> "form-control ", "placeholder"=>"Nhập tên  ..."  ]) !!}
  <button type="submit" class="btn btn-sm btn-warning"><i class="fa fa-ban"></i> TÌM KIẾM  </button>
                                                </div>
                                            </div>
            {!! Form::close()!!}


<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Trang  ( {{$data_list->total()}} )
                                </div>
                                <div class="card-block">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>ID </th>
                                                <th>Trang  </th>
                                                <th> Thời gian  </th>
                                            
                                               
                                                <th> Tuỳ chọn </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data_list as $list):?>
                                            <tr>
                                                <td><?php echo $list['id'];?></td>
                                                <td>
                                                     <a href='/trang-<?php echo $list['alias'];?>' target='_black'>
                                                        <?php echo $list['name'];?>
                                                    </a>
                                                            

                                                        </td>
                                                <td>
                                                    <small>Created at : {{$list['created_at']}}</small><br />
                                                    <small>Updated at : {{$list['updated_at']}}</small>
                                                </td>
                                                
                                                
                                                <td>
                                                    <a class="btn btn-sm btn-success" href='/admin/page/edit/<?php echo $list['id'];?>'><i class="fa fa-edit"></i> Sửa </a>
                                                    @if($list['status']=='2')
                                                      <a class="btn btn-sm btn-danger click_remove" href='/admin/page/remove?id=<?php echo $list['id'];?>&_token={{ csrf_token() }}'> <i class="fa fa-remove"></i> Xoá  </a>
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
           
        </script>
    @endsection