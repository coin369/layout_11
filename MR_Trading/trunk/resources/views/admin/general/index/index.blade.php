@extends("admin.admin")
 @section('content')

          
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> 
                        <a href="/" target="_black">Home </a>
                 </li>

                 
                <li class="breadcrumb-item"><a href="">  General   ({{$data_list->total()}})    </a>
                </li>
               
              
            </ol>

        <div class="container-fluid">
           
         

<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-list"></i> General  ( {{$data_list->total()}} )
                                </div>
                                <div class="card-block">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>ID </th>
                                                <th>Name   </th>
                                             
                                                <th>Link</th>
                                           
                                             
                                                <th> Option </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data_list as $list):?>
                                              
                                            <tr>
                                                <td><?php echo $list['id'];?></td>
                                                <td>
                                                     <a href='{{$list["alias"]}}' target='_black'>
                                                        <?php echo $list['name'];?>
                                                   
                                                   
                                                      </a>

                                                        </td>
                                                
                                                 <td>
                                                     <a href='{{$list["alias"]}}' target='_black'>
                                                        <?php echo $list['alias'];?>
                                                   
                                                   
                                                      </a>

                                                        </td>
                                                
                                                <td>
                                               


                                                    <a class="btn btn-sm btn-success" href='/admin/index/edit/<?php echo $list['id'];?>'><i class="fa fa-edit"></i>  </a>
                                                 
                                                </td>

                                            </tr>
                                           
                                           <?php endforeach;?>
                                           
                                        </tbody>
                                    </table>
                                    <nav>
                                        {!! $data_list->appends([])->render() !!}
                                       
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