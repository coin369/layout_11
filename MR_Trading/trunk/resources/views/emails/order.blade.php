
		<div style="width: 924px; height: 610px; background: url('URLemail.png') repeat-x;margin: auto;">
			<div style="width: 746px; margin-top:18px;float: left;margin-left: 88px">
				<div style="width: 100%; height: 200px; float: left;">
					<div style="width: 50%; height: 180px;margin-top: 8px;margin-left: 28px;float:left">
						<img src="https://nuochoadangcap.vn/upload/banner/logo.png" style='width:180px' />
					</div>
					<div style="width: 40%; height: 180px;margin-top: 8px;margin-left: 28px;float:left">
						<p>
							<a href="https://nuochoadangcap.vn/" style="font-size:10pt;color:#3ab449">
								NƯỚC HOA ĐẲNG CẤP - DÁNG VẤP CỦA NGƯỜI THÀNH ĐẠT
						</a>
					</p>
				
					<p>
						Điện thoại:<strong>(+84) {{$TGeneral['hotmail']}}</strong>
					</p>
					
					<p>
						Email : <strong>{{$TGeneral['email']}}</strong>
					</p>
					
					</div>
				</div>
				<div style="width: 100%; height: 3px; background: #f98632;float: left;"></div>
				<div style="width: 100%;float: left;background: #fff;">
					<div style="width: 100%;height: 35px;float: left;padding-left: 18px;">
						<a href="#" style="font: bold 16pt Tahoma;color: #04439a;text-decoration: none;line-height: 41px;cursor: default">Khách hàng : {{$Payment['name']}} </a>
					</div>
					<br />
					<div style="width: 100%;float: left;">
						<table style="background:#fbeaea;width: 100%;float: left;height: 100%;padding-left: 20px;border-right: 1px solid #DDD;">
						
							<tbody style="width: 100%;height: 100%;">
								<tr>
									<td colspan="2" style="font: bold 13pt Tahoma;color: #fc3b07;text-align: left;">Thông tin người mua</td>
								</tr>
								<tr>
									<td style="font: normal 10pt Tahoma;color: #000;height: 20px;width: 100%;float: left">Họ và tên:</td>
									<td style="width: 60%"><a style="font: bold 10pt Tahoma;color: #000;text-align: left;">{{$Payment['name']}}</a></td>
								</tr>
								<tr>
									<td style="font: normal 10pt Tahoma;color: #000;height: 20px;">Email:</td>
									<td><a style="font: normal 10pt Tahoma;color: #047cae;text-align: left;">{{$Payment['email']}}</a></td>
								</tr>
								<tr>
									<td style="font: normal 10pt Tahoma;color: #000;height: 20px;">Điện Thoại:</td>
									<td><a style="font: normal 10pt Tahoma;color: #000;text-align: left;">{{$Payment['phone']}}</a></td>
								</tr>
								<tr>
									<td style="font: normal 10pt Tahoma;color: #000;height: 20px;">Địa Chỉ:</td>
									<td><a style="font: normal 10pt Tahoma;color: #000;text-align: left;">{{$Payment['address']}}</a></td>
								</tr>
							
								
								<tr>
									<td style="font: normal 10pt Tahoma;color: #000;height: 20px;">Ghi chú:</td>
									<td><a style="font: normal 10pt Tahoma;color: #000;text-align: left;">{{$Payment['note']}}</a></td>
								</tr>
								
							</tbody>
						</table>
											
					</div>
					<br />
					<div  style="margin-top: 10px;float: left;width: 100%;">
						<table class="data-table cart-table" id="shopping-cart-table">
                                    <colgroup><col width="1"><col><col width="1"><col width="1"><col width="1"><col width="1"><col width="1">
                                    </colgroup>
                                    <thead>
                                        <tr class="first last">
                                            <th rowspan="1">&nbsp;</th>
                                            <th rowspan="1"><span class="nobr">Tên Thiết kế</span></th>
                                          
                                            <th colspan="1" class="a-center"><span class="nobr">Giá</span></th>
                                            <th class="a-center" rowspan="1">Số lượng</th>
                                            <th colspan="1" class="a-center">Thành tiền</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php $total=0;?>
                                          @foreach($cart as $pr)
                                        <tr>

                                            <td class="image" style="width: 100px">
                                               
                                               <img style="width: 100px;" alt="{{$pr['product']['name']}}" class='lazyload' data-src="/<?=PUBLIC_URL?>upload/product/small/{{$pr['product']['picture']}}">
                                            </td>
                                            <td>
                                                <h2 class="product-name"> 
                                                    <a href="/{{$pr['product']->Cate()['alias']}}/{{$pr['product']['alias']}}" title="{{$pr['product']['name']}}">{{$pr['product']['name']}}</a> 
                                                </h2>
                                            </td>
                                           
                                            <td class="a-right">
                                                <span class="cart-price">
                                                    <span class="price">
                                                        @if(count($pr['product']->Promotion() ) >0 )
                                                            {{App\MrData::toPrice($pr['product']->PromotionProduct()['price'])}}
                                                                           
                                                         @else
                                                            {{App\MrData::toPrice($pr['product']['price'])}}
                                                              
                                                         @endif
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="a-center movewishlist">
                                                <input class="input-text qty checkLength" title="Qty" size="2" value="{{$pr['quality']}}" name="qty" idx="{{$pr['product']['id']}}" maxlength="2" type='number'>
                                            </td>
                                            <td class="a-right movewishlist">
                                                <span class="cart-price"> 
                                                    <span class="price">
                                                        @if(count($pr['product']->Promotion() ) >0 )
                                                            {{App\MrData::toPrice($pr['product']->PromotionProduct()['price']*$pr['quality'])}}
                                                            <?php $total=$total+ (int) $pr['product']->PromotionProduct()['price']*$pr['quality']; ?>             
                                                         @else
                                                            {{App\MrData::toPrice($pr['product']['price']*$pr['quality'])}}
                                                              <?php $total=$total+ (int) $pr['product']['price']*$pr['quality'] ;?> 
                                                         @endif
                                                    </span> 
                                                </span>
                                            </td>
                                           
                                        </tr>
                                       @endforeach
                                    </tbody>
                                    </table>
					</div>
					<div style="margin-top: 5px;margin-left: 10px;float: left;width: 100%;">
						<a style="font: normal 12pt Tahoma;color: #9fa1a2">Thông tin: <span style="font: normal 12pt Tahoma;color: #5095b8">http://<?php echo $_SERVER['SERVER_NAME'];?></span>
							Nước hoa Đăng cấp
						 </a>
					</div>
				</div>
				<div style="text-align: center;width: 100%;"><a style="font: normal 10pt Tahoma;color: #fff"> &#169; 2018.All Right Reseved</a></div>
			</div>
			
		</div>
