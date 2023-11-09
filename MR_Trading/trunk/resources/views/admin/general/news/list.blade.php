@extends("admin.admin")
 @section('content')

          
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> 
                        <a href="/" target="_black">Home </a>
                 </li>

                 
                <li class="breadcrumb-item"><a href="">  News   ({{$data_list->total()}})    </a>
                </li>
               
              
            </ol>

        <div class="container-fluid">
           
           <div class="text-right">
                <a href="/admin/news/add" class="text-right" style="text-align: right;">
                   <i  style="font-size: 80px;" class="fa fa-plus-circle"></i>
                </a>
            </div>


<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-list"></i> News  ( {{$data_list->total()}} )
                                </div>
                                <div class="card-block">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>ID </th>
                                                <th>Name   </th>
                                                <th> Created At </th>
                                              
                                                <th> Status </th>
                                             
                                                <th> Option </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data_list as $list):?>
                                              
                                            <tr>
                                                <td><?php echo $list['id'];?></td>
                                                <td>
                                                     <a href='/news/detail/{{$list["alias"]}}' target='_black'>
                                                        <?php echo $list['name'];?>
                                                   
                                                   
                                                      </a>

                                                        </td>
                                                <td>
                                                   
                                                 <small>{{$list['created_at']}}</small><br />
                                                 <small>Updated at : {{$list['updated_at']}}</small>
                                                </td>
                                                
                                                <td>
                                                        <?php if($list['status']=='1'):?>
                                                             <a class="border text-primary p-1 border-primary "> Active </a>
                                                        <?php else:?>
                                                              <a class="border text-warning p-1 border-warning "> Hidden  </a>
                                                        <?php endif;?>
                                                </td>
                                             
                                                <td>
                                               


                                                    <a class="btn btn-sm btn-success" href='/admin/news/edit/<?php echo $list['id'];?>'><i class="fa fa-edit"></i>  </a>
                                                    <a class="btn btn-sm btn-danger click_remove" href='/admin/news/remove?id=<?php echo $list['id'];?>&_token={{ csrf_token() }}'> <i class="fa fa-remove"></i>   </a>
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
            // document.getElementById('picture_name').addEventListener('change', handleFileSelect, false);
            // document.getElementById('banner_name').addEventListener('change', handleFileSelectBanner, false);
           
              //document.getElementById('multi_picture').addEventListener('change', handleFileSelectMulti, false);
        </script>
    @endsection