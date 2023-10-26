
		<div style="width: 924px; height: 610px; ">
			<div style="width: 746px; margin-top:18px;float: left;margin-left: 88px">
				<div style="width: 100%; height: 200px; float: left;">
					<div style="width: 50%; height: 180px;margin-top: 8px;margin-left: 28px;float:left">
						
					</div>
					<div style="width: 40%; height: 180px;margin-top: 8px;margin-left: 28px;float:left">
						
					<p>
						Điện thoại:<strong>(+84) {{$TGeneral['phone']}}</strong>
					</p>
					
					<p>
						Email : <strong>{{$TGeneral['email']}}</strong>
					</p>
					
					</div>
				</div>
				<div style="width: 100%; height: 3px; background: #f98632;float: left;"></div>
				<div style="width: 100%;float: left;background: #fff;">
					<div style="width: 100%;height: 35px;float: left;padding-left: 18px;">
						<a href="#" style="font: bold 16pt Tahoma;color: #04439a;text-decoration: none;line-height: 41px;cursor: default">Dear Admin,  </a>
					</div>
					Thông tin người vừa liên hệ: {{date("d-m-Y H:i:s")}}
					<br />
					<div style="width: 100%;float: left;">
						<table style="background:#fbeaea;width: 100%;float: left;height: 100%;padding-left: 20px;border-right: 1px solid #DDD;">
						
							<tbody style="width: 100%;height: 100%;">
							
								<tr>
									<td style="font: normal 10pt Tahoma;color: #000;height: 20px;width: 100%;float: left">Họ và tên:</td>
									<td style="width: 60%"><a style="font: bold 10pt Tahoma;color: #000;text-align: left;">{{$data['name']}}</a></td>
								</tr>
								<tr>
									<td style="font: normal 10pt Tahoma;color: #000;height: 20px;">Email:</td>
									<td><a style="font: normal 10pt Tahoma;color: #047cae;text-align: left;">{{$data['email']}}</a></td>
								</tr>
								<tr>
									<td style="font: normal 10pt Tahoma;color: #000;height: 20px;">Điện Thoại:</td>
									<td><a style="font: normal 10pt Tahoma;color: #000;text-align: left;">{{$data['phone']}}</a></td>
								</tr>
								<tr>
									<td style="font: normal 10pt Tahoma;color: #000;height: 20px;">Địa chỉ :</td>
									<td><a style="font: normal 10pt Tahoma;color: #000;text-align: left;">{{$data['subject']}}</a></td>
								</tr>
							
								
								<tr>
									<td style="font: normal 10pt Tahoma;color: #000;height: 20px;">Ghi chú:</td>
									<td><a style="font: normal 10pt Tahoma;color: #000;text-align: left;">{{$data['message']}}</a></td>
								</tr>
								
							</tbody>
						</table>
											
					</div>
					
					<div style="margin-top: 5px;margin-left: 10px;float: left;width: 100%;">
						<a style="font: normal 12pt Tahoma;color: #9fa1a2">Thông tin: <span style="font: normal 12pt Tahoma;color: #5095b8">http://<?php echo $_SERVER['SERVER_NAME'];?></span>
								{{$TGeneral['name']}}
						 </a>
					</div>
				</div>
				<div style="text-align: center;width: 100%;"><a style="font: normal 10pt Tahoma;color: #fff"> &#169; 2021.All Right Reseved</a></div>
			</div>
			
		</div>
