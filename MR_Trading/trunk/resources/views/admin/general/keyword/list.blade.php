@extends("admin.admin")
 @section('content')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"> Trang chủ </li>
                <li class="breadcrumb-item"><a href=""> SEO for website.      ({{$data_list->total()}})  </a>
                </li>
               
              
            </ol>


        <div class="container-fluid">
          

<div class="row">


                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i>  Từ khoá   ( {{$data_list->total()}} )
                                </div>
                                <div class="card-block">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>ID </th>
                                               
                                            
                                                
                                                <th> Từ khoá    </th>
                                                 <th> Sản phẩm    </th>
                                                   <th> Tin tức   </th>
                                              
                                                <th> Tuỳ chọn </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data_list as $list):?>
                                              
                                            <tr>
                                                <td><?php echo $list['id'];?></td>
                                                <td>
                                                    @if(!empty($list['alias']))
                                                    <a href="{{route('search.detail',['alias'=>$list['alias']])}}" target="_black">
                                                        <?php echo $list['name'];?>
                                                    </a>
                                                    @endif
                                                        

                                                        </td>
                                                       
                                               
                                                
                                                     <td>
                                                   
                                                 {{count($list->Product()->getResults())}}
                                               
                                                </td>


                                                     <td>
                                                   
                                                 {{count($list->News()->getResults())}}
                                               
                                                </td>
                                                <td>
                                                    

                                                    <a class="btn btn-sm btn-success" href='/admin/keyword/edit/<?php echo $list['id'];?>'><i class="fa fa-edit"></i> Sửa </a>

                                                    @if(count($list->Product()->getResults())==0 && count($list->News()->getResults())==0)
                                                    

                                                    <a class="btn btn-sm btn-danger click_remove" href='/admin/keyword/remove?id=<?php echo $list['id'];?>&_token={{ csrf_token() }}'> <i class="fa fa-remove"></i> Xoá  </a>

                                                    @endif
                                                </td>

                                            </tr>
                                           
                                           <?php endforeach;?>
                                           
                                        </tbody>
                                    </table>
                                    <nav>
                                        {!! $data_list->appends(['search'=>$search])->render() !!}
                                       
                                    </nav>

                                    <code style="display: none;">
                                        <?php 

                                            $t= App\Model\Tag::all();

                                            foreach($t as $x):
                                        ?>
                                        <a href="/tim-kiem/{{$x['alias']}}" title="{{$x['name']}}" target="_black" >
                                            {{$x['name']}}
                                        </a>
                                        ;

                                    <?php endforeach;?>
                                    </code>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
     @endsection
  