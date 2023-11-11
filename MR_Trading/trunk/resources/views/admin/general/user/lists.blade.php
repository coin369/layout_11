@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href=""> Users:      ({{$data_list->total()}})  </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
             

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
                                                <th> Name  </th>
                                              
                                                <th>  Username  </th>
                                            
                                    
                                                <th>  Option </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data_list as $list):?>
                                              
                                            <tr>
                                                <td><?php echo $list['id'];?></td>
                                                <td>
                                                       Name : <strong> {{$list['name']}}</strong><br />
                                                       Email: <strong> {{$list['email']}}</strong><br />
                                                      Phone: <strong> {{$list['phone']}}</strong><br />

                                                        </td>
                                                      
                                                             <td>
                                                             {{$list['username']}}
                                                          </td>
                                                    
                                                       
                                                 
                                                          
                                                <td>
                                                    <a class="btn btn-sm btn-success" href='/admin/customer/edit/<?php echo $list['id'];?>'><i class="fa fa-edit"></i>  </a>
                                                    @if($list['role']==2)
                                                    <a class="btn btn-sm btn-danger click_remove" href='/admin/customer/remove?id=<?php echo $list['id'];?>&_token={{ csrf_token() }}'> <i class="fa fa-remove"></i>   </a>
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