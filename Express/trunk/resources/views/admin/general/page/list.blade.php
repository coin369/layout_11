@extends("admin.admin")
 @section('content')

             <ol class="breadcrumb">
                 <li class="breadcrumb-item"> 
                        <a href="/" target="_black">Home </a>
                 </li>
                <li class="breadcrumb-item"><a href=""> Page   ({{$data_list->total()}})  </a>
                </li>
               
              
            </ol>

        <div class="container-fluid">
              <div class="text-right">
                <a href="/admin/page/add" class="text-right" style="text-align: right;">
                   <i  style="font-size: 80px;" class="fa fa-plus-circle"></i>
                </a>
            </div>
<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Page  ( {{$data_list->total()}} )
                                </div>
                                <div class="card-block">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>ID </th>
                                                <th> Name  </th>
                                       
                                            
                                               
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
                                                    <a class="btn btn-sm btn-success" href='/admin/page/edit/<?php echo $list['id'];?>'><i class="fa fa-edit"></i>  </a>
                                                    
                                                    @if($list['status']=='2')
                                                      <a class="btn btn-sm btn-danger click_remove" href='/admin/page/remove?id=<?php echo $list['id'];?>&_token={{ csrf_token() }}'> <i class="fa fa-remove"></i>   </a>
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