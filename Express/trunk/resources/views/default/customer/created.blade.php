@extends("default.default")
@section("content")
      
   <main>
        <section class="bread-crumb">
            <div class="container">
                <div class="title-command-wrapper">
                    <h1 class="title" title="#">Tài khoản</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="/" title="Trang chủ">
                                <span>Trang chủ</span>
                            </a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>

                        <li>
                            <strong>Quản lý tài khoản</strong>
                        </li>

                    </ul>
                </div>
            </div>
        </section>
        <div class="container article-wraper padding-top-40">
            <div class="row">
                <section class="right-content col-md-12">
                    <div class="box-heading">
                        <h1 class="title-head">Tạo vận đơn</h1>
                    </div>

                    <form id="order-info__0" class="tl-flex tl-border-0 tl-border-solid tl-border-b tl-border-[#E0E0E0] last:!tl-border-0 tl-py-[30px] tl-relative tl-m-auto order-info__wrapper">
                        <!---->
                        <div class="tl-flex tl-w-full">
                            <div class="col-12 tl-w-[50%] tl-pr-[40px] tl-border-0 tl-border-r tl-border-solid tl-border-[#E0E0E0]">
                                <section class="tl-mb-4">
                                    <div class="tl-uppercase tl-font-bold tl-mb-3 ">Người nhận</div>
                                    <div class="section-content">
                                        <div class="tl-w-full tl-flex tl-items-end tl-mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" class="tl-w-[20px] tl-h-[20px] tl-mr-2.5"><path stroke="#000" d="m5.874 7.683-.025-.045c-.049-.088-.096-.174-.143-.256l1.045-1.045-.877 1.346Zm0 0 .003.005m-.003-.005.003.005m2.71 3.753c1.415 1.42 2.76 2.167 3.742 2.713l.307.171-4.05-2.884Zm0 0c-1.417-1.42-2.164-2.768-2.71-3.753m2.71 3.753-2.71-3.753m.52-1.705L5.353 7.03l-.27.27.189.33.14.25.024.045v.001l.007.011c.549.991 1.323 2.388 2.79 3.858 1.466 1.471 2.863 2.247 3.852 2.796l.31.173.33.182.265-.267 1.556-1.559c.454-.455 1.155-.45 1.564-.042l3.087 3.095c.407.41.413 1.113-.039 1.57l-.698.685-.159.124c-.332.26-.718.481-1.133.644-.388.15-.767.245-1.162.293-.151.015-4.635.43-10.259-5.205C1.585 10.11.18 7.16.56 4.007v-.003c.042-.377.135-.757.289-1.163.164-.42.384-.807.644-1.14l.158-.202.65-.654C2.755.389 3.457.395 3.863.802L6.951 3.9c.408.409.414 1.113-.04 1.57H6.91l-.513.514Z"></path></svg>
                                            <div class="tl-flex tl-items-center tl-relative tl-w-full field-input">
                                                <input type="number" class="customer-tel tl-outline-0 tl-w-full tl-border-0 tl-border-b tl-border-solid" placeholder="Nhập số điện thoại khách hàng">

                                            </div>
                                        </div>
                                        <div class="tl-w-full tl-flex tl-items-end tl-mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" class="tl-w-[20px] tl-h-[20px] tl-mr-2.5"><path fill="#000" d="M9.921 10.777h.144c1.32-.021 2.386-.448 3.174-1.264 1.733-1.797 1.445-4.878 1.414-5.173-.113-2.207-1.247-3.263-2.184-3.756C11.771.215 10.957.017 10.047 0h-.076c-.5 0-1.481.075-2.422.567-.946.493-2.098 1.55-2.21 3.773-.032.295-.32 3.376 1.413 5.173.783.816 1.85 1.243 3.17 1.264Zm-3.38-6.333c0-.012.004-.025.004-.033.148-2.97 2.44-3.289 3.421-3.289H10.02c1.216.025 3.282.48 3.422 3.289 0 .012 0 .025.004.033.005.029.32 2.845-1.112 4.328-.567.588-1.323.878-2.318.886H9.97c-.99-.008-1.752-.298-2.314-.886C6.23 7.298 6.536 4.469 6.54 4.444Z"></path><path fill="#000" d="M19.244 15.887v-.012c0-.033-.004-.066-.004-.104-.027-.82-.086-2.737-2.04-3.35l-.044-.013c-2.03-.476-3.719-1.553-3.737-1.565a.641.641 0 0 0-.846.136.53.53 0 0 0 .148.78c.077.049 1.869 1.196 4.11 1.726 1.05.344 1.166 1.375 1.198 2.32 0 .037 0 .07.005.103.004.373-.023.949-.095 1.28-.73.38-3.588 1.698-7.937 1.698-4.33 0-7.207-1.321-7.94-1.702-.073-.332-.104-.907-.095-1.28 0-.033.004-.066.004-.104.032-.944.149-1.975 1.198-2.319 2.241-.53 4.033-1.681 4.11-1.727a.53.53 0 0 0 .148-.779.641.641 0 0 0-.846-.136c-.018.012-1.697 1.089-3.737 1.565-.018.004-.031.008-.045.013C.846 13.034.787 14.95.76 15.767c0 .038 0 .07-.004.104v.012c-.005.216-.01 1.321.23 1.876a.544.544 0 0 0 .233.261c.135.083 3.372 1.98 8.788 1.98 5.415 0 8.652-1.901 8.787-1.98a.568.568 0 0 0 .234-.26c.226-.552.221-1.657.216-1.873Z"></path></svg>
                                            <div class="tl-flex tl-items-center tl-relative tl-w-full field-input">
                                                <input class="tl-w-full tl-outline-0 tl-border-0 tl-border-b tl-border-solid tl-border-[#C4C4C4]" placeholder="Tên khách hàng" maxlength="1000">

                                            </div>
                                        </div>
                                        <div class="tl-w-full tl-flex tl-items-end tl-mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" fill="none" class="tl-w-[20px] tl-h-[20px] tl-mr-2.5"><path stroke="#000" d="m10.102.535 9.26 8.863a.563.563 0 0 1 .168.393.544.544 0 0 1-.544.542h-1.96v8.417c0 .413-.336.75-.752.75h-3.547a.126.126 0 0 1-.126-.125v-5.417a.71.71 0 0 0-.708-.708H8.137a.709.709 0 0 0-.709.708v5.417a.126.126 0 0 1-.125.125H3.756a.751.751 0 0 1-.752-.75v-8.417h-1.96a.544.544 0 0 1-.385-.926L9.928.535a.126.126 0 0 1 .174 0Z"></path></svg>
                                            <div class="tl-flex tl-relative tl-w-full !tl-items-end">
                                                <div class="tl-w-full tl-relative field-input">
                                                    <input class="address-text tl-w-full tl-outline-0 tl-border-0 tl-border-b tl-border-solid " name="address" placeholder="Địa chỉ chi tiết (Tòa nhà/ Hẻm/ Đường)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Tỉnh/Thành<span class="required">*</span></label>
                                                <select name="province" id="province">
                                                    <option value="0">Chọn</option>
                                                    <option value="1">Hồ Chí Minh</option>
                                                    <option value="2">An Giang</option>
                                                    <option value="3">Bến Tre</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <fieldset class="form-group">
                                                <label>Quận/huyện<span class="required">*</span></label>
                                                <select name="district" id="district">
                                                    <option value="0">Chọn</option>
                                                    <option value="1">Quận 1</option>
                                                    <option value="2">Quận 2</option>
                                                    <option value="3">Quận 3</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                </section>
                                <section class="order-type__section tl-mb-6">
                                    <div class="section-title">Lấy &amp; Giao tận nơi</div>
                                    <div class="section-content section-content-vandon">
                                        <input type="radio" id="age1" name="kl" value="">
                                        <label for="age1">0kg - 10kg</label><br>
                                        <input type="radio" id="age2" name="kl" value="">
                                        <label for="age2">10kg - 20kg</label><br>
                                        <input type="radio" id="age3" name="kl" value="">
                                        <label for="age3">Trên 20kg</label><br><br>
                                    </div>
                                </section>
                                <div class="transport">
                                    <section class="order-type__section tl-mb-6">
                                        <div class="section-title-1"><strong>THỜI ĐIỂM LẤY HÀNG</strong></div>
                                        <div class="section-content section-content-vandon">
                                            <div class="col-sm-6 col-xs-12">
                                                <fieldset class="form-group">
                                                    <label>Hẹn lấy<span class="required"></span></label>
                                                    <select name="province" id="province">
                                                        <option value="0">Ngay lập tức</option>
                                                        <option value="1">Sáng 6h - 12h</option>
                                                        <option value="2">Trưa 12h - 16h</option>
                                                        <option value="3">Chiều 16h - 20h</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <fieldset class="form-group">
                                                    <label>Hẹn giao<span class="required"></span></label>
                                                    <select name="district" id="district">
                                                        <option value="0">Ngay lập tức</option>
                                                        <option value="1">Ngày hôm nay</option>
                                                        <option value="2">Ngày mai</option>
                                                        <option value="3">Ngày mốt</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <section class="pick-option__section">
                                    <div class="section-content tl-w-full">
                                        <div class="tl-mb-5">
                                            <div class="pick-option__item tl-relative !tl-mb-0 has-location">
                                                <div class="checkbox-custom item-label"><label class="section-title-1">NƠI LẤY HÀNG</label></div>
                                                <div class="fsm-select warehouse tl-w-full fsm-select-single fsm-select-show-arrow fsm-select-show-search">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <fieldset class="form-group">
                                                            <label>Tỉnh/Thành<span class="required">*</span></label>
                                                            <select name="province" id="province">
                                                                <option value="0">Chọn</option>
                                                                <option value="1">Hồ Chí Minh</option>
                                                                <option value="2">An Giang</option>
                                                                <option value="3">Bến Tre</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <fieldset class="form-group">
                                                            <label>Quận/huyện<span class="required">*</span></label>
                                                            <select name="district" id="district">
                                                                <option value="0">Chọn</option>
                                                                <option value="1">Quận 1</option>
                                                                <option value="2">Quận 2</option>
                                                                <option value="3">Quận 3</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-sm-12 col-xs-12">
                                                        <fieldset class="form-group">
                                                            <label>Địa chỉ<span class="required">*</span></label>
                                                            <input type="text" name="contact[address]" class="form-control form-control-lg" required />
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class=" col-12 tl-w-[50%] tl-p-0">
                                <div class="orderInfoRight tl-pl-[40px]">
                                    <section id="productOrder" class="tl-mb-6">
                                        <div class="tl-flex tl-justify-between tl-items-center tl-mb-6">
                                            <h4 class="tl-m-0">Sản phẩm</h4>
                                        </div>
                                        <div class="tl-flex tl-justify-between tl-mb-4">
                                            <div class="tl-grid tl-grid-cols-[80px,1fr] tl-w-full tl-rounded tl-border tl-border-solid tl-border-[#c4c4c4]">
                                                <div class="product__image tl-flex tl-items-center tl-justify-center tl-border-0 tl-border-r tl-border-solid tl-border-[#c4c4c4]"><label class="tl-m-0"><svg  xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="none"><rect width="46" height="46" fill="#E5E6E8" rx="23"></rect><path fill="#4E4E4E" d="M34.143 12.613H10.3l-.004 19.352h23.848V12.613Z"></path><path fill="#E5E6E8" d="M33.24 13.512H11.202l-.003 17.547H33.24V13.512Z"></path><path fill="#515151" d="M32.346 14.863H12.55l-.003 14.852h19.8V14.863Z"></path><path fill="#E5E6E8" d="M31.436 15.766h-17.99l-.002 13.046h17.992V15.767Z"></path><path fill="#4F4F4F" d="M20.04 18.766a1.914 1.914 0 1 1-3.827 0 1.914 1.914 0 0 1 3.827 0Zm-2.87 0a.957.957 0 1 0 1.914 0 .957.957 0 0 0-1.914 0Z"></path><circle cx="31.781" cy="31.413" r="8.718" fill="#E5E6E8"></circle><path fill="#4F4F4F" d="M39.196 31.413a7.414 7.414 0 1 1-14.829 0 7.414 7.414 0 0 1 14.829 0Zm-13.727 0a6.312 6.312 0 1 0 12.624 0 6.312 6.312 0 0 0-12.624 0Z"></path><path fill="#E5E6E8" d="M40.499 31.413a8.718 8.718 0 1 1-17.435 0 8.718 8.718 0 0 1 17.435 0Zm-16.14 0a7.422 7.422 0 1 0 14.844 0 7.422 7.422 0 0 0-14.843 0Z"></path><path fill="#4F4F4F" d="M35.94 31.059h-8.093v.902h8.094v-.902Z"></path><path fill="#4F4F4F" d="M31.44 27.464v8.094h.903v-8.094h-.902Z"></path><path fill="#4E504F" d="m16.031 21.575-2.587 2.545v1.302l2.587-2.587 3.808 2.97 5.943-5.209 3.788 4.162.993-.457-4.78-5.104-5.944 5.38-3.808-3.003Z"></path></svg><input  id="upload-image0" class="tl-hidden" type="file" name="upload" accept="image/*, video/*"></label></div>
                                                <div class="tl-grid tl-cols-[1fr 1fr]">
                                                    <div class="tl-flex tl-items-center tl-relative tl-p-2 tl-border-0 tl-border-solid tl-border-b tl-border-[#c4c4c4]">

                                                        <input class="tl-w-full tl-border-0 tl-ml-2 tl-outline-none invalid" type="text" placeholder="Nhập tên sản phẩm">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!---->

                                    </section>
                                    <section id="orderInfo" class="orderInfo">
                                        <div class="total-weight">
                                            <div class="total-weight__wrapper tl-mr-3">
                                                <div>
                                                    <div class="field__row">
                                                        <div>Tổng khối lượng</div>
                                                        <div class="tl-flex tl-items-end">
                                                            <div class="tl-relative order-weight">
                                                                <div class="fsm-select tl-w-3/6 g-weight !tl-m-0 !tl-mr-2 fsm-select-single fsm-select-show-arrow fsm-select-show-search">
                                                                    <input type="text" name="contact[kg]" class="form-control form-control-lg" required="">
                                                                </div><span class="unit">kg</span></div>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                    <div class="field__row">
                                                        <div>Kích thước</div>
                                                        <div class="tl-flex tl-items-end">
                                                            <div class="tl-relative order-weight">
                                                                <div class="fsm-select tl-w-3/6 g-weight !tl-m-0 !tl-mr-2 fsm-select-single fsm-select-show-arrow fsm-select-show-search">
                                                                    <input type="text" name="contact[kg]" class="form-control form-control-lg" required="">
                                                                </div><span class="unit">dài x rộng</span></div>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field__row">
                                                    <h6 class="info-name">Tiền thu hộ</h6>
                                                    <div class="fsm-input-number field-order-value tl-w-full">
                                                        <div class="fsm-input-number-handler-wrap"><span unselectable="on" role="button" aria-label="Increase Value" aria-disabled="false" class="fsm-input-number-handler fsm-input-number-handler-up"><span role="img" aria-label="up" class="anticon anticon-up fsm-input-number-handler-up-inner"><svg focusable="false" class="" data-icon="up" width="1em" height="1em" fill="currentColor" aria-hidden="true" viewBox="64 64 896 896"><path d="M890.5 755.3L537.9 269.2c-12.8-17.6-39-17.6-51.7 0L133.5 755.3A8 8 0 00140 768h75c5.1 0 9.9-2.5 12.9-6.6L512 369.8l284.1 391.6c3 4.1 7.8 6.6 12.9 6.6h75c6.5 0 10.3-7.4 6.5-12.7z"></path></svg></span></span>
                                                            <span unselectable="on" role="button" aria-label="Decrease Value" aria-disabled="false" class="fsm-input-number-handler fsm-input-number-handler-down"><span role="img" aria-label="down" class="anticon anticon-down fsm-input-number-handler-down-inner"><svg focusable="false" class="" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true" viewBox="64 64 896 896"><path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                        </div>
                                                        <div class="fsm-input-number-input-wrap">
                                                            <input autocomplete="off" role="spinbutton" aria-valuenow="0" step="1" placeholder="Nhập tiền thu hộ" class="fsm-input-number-input"></div>
                                                    </div>
                                                </div>
                                                <div class="field__row !tl-mb-0 tl-relative">
                                                    <h6 class="info-name">Giá trị hàng</h6>
                                                    <div class="field-order-value">
                                                        <div class="fsm-input-number tl-w-full tl-border-0 tl-p-0">
                                                            <div class="fsm-input-number-handler-wrap"><span unselectable="on" role="button" aria-label="Increase Value" aria-disabled="false" class="fsm-input-number-handler fsm-input-number-handler-up"><span role="img" aria-label="up" class="anticon anticon-up fsm-input-number-handler-up-inner"><svg focusable="false" class="" data-icon="up" width="1em" height="1em" fill="currentColor" aria-hidden="true" viewBox="64 64 896 896"><path d="M890.5 755.3L537.9 269.2c-12.8-17.6-39-17.6-51.7 0L133.5 755.3A8 8 0 00140 768h75c5.1 0 9.9-2.5 12.9-6.6L512 369.8l284.1 391.6c3 4.1 7.8 6.6 12.9 6.6h75c6.5 0 10.3-7.4 6.5-12.7z"></path></svg></span></span>
                                                                <span unselectable="on" role="button" aria-label="Decrease Value" aria-disabled="false" class="fsm-input-number-handler fsm-input-number-handler-down"><span role="img" aria-label="down" class="anticon anticon-down fsm-input-number-handler-down-inner"><svg focusable="false" class="" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true" viewBox="64 64 896 896"><path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span>
                                                            </div>
                                                            <div class="fsm-input-number-input-wrap"><input autocomplete="off" role="spinbutton" aria-valuenow="0" step="1" placeholder="Nhập giá trị hàng" class="fsm-input-number-input"></div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!---->
                                            </div>

                                        </div>
                                        <div class="field__row">
                                            <h6 class="info-name">Phí ship</h6>
                                            <div class="fee-ship">
                                                <div class="ship-extra tl-flex tl-items-center">
                                                    <div class="ship-fee"><span class="tl-mr-2"><strong style="font-size: 15px;">20.000đ</strong></span>

                                                    </div>
                                                </div>
                                                <div class="field-select">
                                                    <select name="district" id="district" style="padding: 10px;">
                                                        <option value="0">Người gửi trả</option>
                                                        <option value="1">Người nhận trả</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field__row total-money">
                                            <h6 class="info-name">Tổng tiền</h6><span><strong style="font-size: 17px;color: brown;">50.000đ</strong></span></div>
                                        <div class="field__row">
                                            <h6 class="info-name">Ghi chú</h6>
                                            <div class="note"><input type="text" placeholder="Nhập ghi chú riêng của đơn hàng">

                                            </div>
                                        </div>
                                    </section>
                                    <div class="tl-relative">
                                        <div class="tl-font-medium tl-mb-4  tl-font-bold"> Dịch vụ gia tăng </div>
                                        <div class="tl-border-0 tl-border-b tl-border-solid tl-border-[#E8E8E8]">
                                            <div class="section-content section-content-vandon">
                                                <input type="radio" id="dv1" name="dichvu" value="">
                                                <label for="dv1">Hàng dễ vỡ</label><br>
                                                <input type="radio" id="dv2" name="dichvu" value="">
                                                <label for="dv2">Hàng chất lỏng</label><br>
                                                <input type="radio" id="dv3" name="dichvu" value="">
                                                <label for="dv3">Thư tín, tài liệu</label><br>
                                                <input type="radio" id="dv4" name="dichvu" value="">
                                                <label for="dv4">Hàng giá trị cao</label><br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pull-xs-left" style="margin-top:20px;margin-left: 40px;">
                                    <button type="submit" class="btn btn-blues btn-style btn-style-active"><strong>TẠO ĐƠN</strong></button>

                                </div>
                            </div>
                        </div>
                    </form>

                </section>



            </div>
        </div>
    </main>

@endsection