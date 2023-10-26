@extends("default.default")
@section("content")
     <div class="main-container col2-right-layout">
            <div class="main container">
                <div class="breadcrumbs">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul>
                                        <li> <a href="/" title="{{$TGeneral['name']}}">Trang chủ</a> <span>/</span> </li>
                                        
                                             <li> <span> Thông tin cá nhân </span> </li>
                                     
                                    </ul>
                                </div>
                            </div>
                        </div>

                
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 box_contact">
                        @include("default.customer.sidebar")
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                         <fieldset>
                                <table class="data-table cart-table" id="shopping-cart-table">
                                    <colgroup><col width="1"><col><col width="1"><col width="1"><col width="1"><col width="1"><col width="1">
                                    </colgroup>
                                    <thead>
                                        <tr class="first last">
                                            <th colspan="1">Mã đơn hàng </th>
                                            <th colspan="1" style="width: 200px">Chi tiết Thiết kế</th>
                                          
                                        
                                            <th colspan="1" class="a-center">Thành tiền</th>
                                             <th colspan="1" class="a-center">Trạng thái </th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                          @foreach($data->Order() as $pr)
                                        <tr>

                                            <td class="image" >
                                                {{$pr['number_order']}}
                                            </td>
                                             <td class="a-right">
                                               @if(count($pr->Detail()) > 0) 
                                                @foreach($pr->Detail() as $product)
                                                 <a href="/{{$product->Product()->Cate()['alias']}}/{{$product->Product()['alias']}} " title=" {{$product->Product()['name']}} " target="_black">

                                                        {{$product->Product()['name']}} 
                                                </a><br />
                                                @endforeach
                                               @else
                                               @endif
                                            </td>
                                           
                                            <td class="a-right">
                                              
                                               {{App\MrData::toPrice($pr['total'])}}
                                            </td>
                                             <td class="a-right">
                                                @if($pr['approved']=='1')
                                                  <strong class="text text-primary">  Mới tạo </strong>
                                                  <br />
                                                  <a href="/api/destroy_order/{{$pr['id']}}" class="btn btn-small btn-danger bnt-destroy-order">
                                                      Huỷ Đơn Hàng
                                                  </a>
                                                @endif
                                                 @if($pr['approved']=='2')
                                                  <strong class="text text-info">  Đang giao  </strong>
                                                @endif
                                                   @if($pr['approved']=='3')
                                                  <strong class="text text-success">  Thành công </strong>
                                                @endif
                                                   @if($pr['approved']=='4')
                                                  <strong class="text text-danger">  Đã huỷ  </strong>
                                                @endif
                                            </td>
                                           
                                         
                                        </tr>
                                       @endforeach
                                    </tbody>
                                    
                                    <tfoot>
                                        
                                    </tfoot>
                                </table>
                            </fieldset>

                    </div>
                  
                </div>
            </div>
        </div>
  @endsection
