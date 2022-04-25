<?php include 'header.php';?>
<style>footer {display: none;}</style>
<main>
	<section class="box-ads">
		<a href="" target="_blank"><img src="images/bn-top.png" class="img-fluid w-100" alt=""></a>
	</section>
	<section class="box-register">
		<div class="container">
			<div class="content-register">
				<div class="title-regis text-center">
					<h2>Đăng ký tài khoản </h2>
					<p>Vui lòng nhập thông tin bên dưới</p>
				</div>
				<div class="content-form"> 
					<div class="item">
						<div class="left">
							<label>Số điện thoại *</label>
						</div>
						<div class="right">
							<input type="text" placeholder="Nhập số điện thoại đăng ký" class="txt_field">
						</div>
					</div>
					<div class="item">
						<div class="left">
							<label>Địa chỉ email*</label>
						</div>
						<div class="right">
							<input type="text" placeholder="Nhập địa chỉ email đăng ký" class="txt_field">
						</div>
					</div>
					<div class="item">
						<div class="left">
							<label>Mã giới thiệu(nếu có)</label>
						</div>
						<div class="right">
							<input type="text" placeholder="Nhập mã giới thiệu" class="txt_field">
						</div>
					</div>
					<div class="item">
						<div class="left">
							<label>Chọn loại hình kinh doanh*</label>
						</div>
						<div class="right">
							<div class="tab-form">
								<ul>
									<li><a href="javascript:void(0)" data-tab="acc-1" class="active">Cá nhân</a></li>
									<li><a href="javascript:void(0)" data-tab="acc-2">Doanh nghiệp/ Hộ kinh doanh</a></li>
								</ul>
							</div>
						</div> 
					</div>
					<div class="tab-register">
						<div class="regis-acc active" id="acc-1">
							<div class="item">
								<div class="left"></div>
								<div class="right">
									<h4>Xác thực thông tin cá nhân</h4>
								</div>
							</div> 
							<div class="item"> 
								<div class="left">
									<label>Hình ảnh CMND <br>mặt trước và sau)</label>
								</div>
								<div class="right">
									<div class="list-acc">
										<ul>
											<li class="imgUp">
												<div class="avarta-acc text-center">
													<div class="icon"><img src="images/xt-1.png" class="img-fluid" alt=""></div>
													<p>Mặt trước</p>

													<div class="imagePreview"></div>
													<input type="file" class="uploadFile img" value="Upload Photo">
												</div>
											</li>
											<li class="imgUp">
												<div class="avarta-acc text-center">
													<div class="icon"><img src="images/xt-1.png" class="img-fluid" alt=""></div>
													<p>Mặt sau</p>

													<div class="imagePreview"></div>
													<input type="file" class="uploadFile img" value="Upload Photo">
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="item"> 
								<div class="left">
									<label>Hình ảnh chân dung*</label>
								</div>
								<div class="right">
									<div class="list-acc">
										<ul>
											<li class="imgUp">
												<div class="avarta-acc text-center">
													<div class="icon"><img src="images/xt-2.png" class="img-fluid" alt=""></div>
													<p>Tải hình ảnh chân dung <br> (selfie) </p>

													<div class="imagePreview"></div>
													<input type="file" class="uploadFile img" value="Upload Photo">
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="left">
									<label></label>
								</div>
								<div class="right">
									<h4>Xác thực thông tin cửa hàng</h4>
								</div>
							</div>

							<div class="item">
								<div class="left">
									<label><strong>Link gian hàng online*</strong></label>
								</div>
								<div class="right">
									<input type="text" placeholder="Địa chỉ website/ứng dụng, fanpage, instagram, tiktok, shopee, tiki.. " class="txt_field">
								</div>
							</div>
							<div class="item"> 
								<div class="left">
									<label><strong>Tải hình ảnh cửa hàng/ <br>kho hàng/văn phòng <br>(nếu có)</strong></label>
								</div>
								<div class="right">
									<div class="list-acc">
										<ul>
											<li class="imgUp">
												<div class="avarta-acc text-center">
													<div class="icon"><img src="images/xt-3.png" class="img-fluid" alt=""></div>
													<p>Tải hình ảnh cửa hàng</p>

													<div class="imagePreview"></div>
													<input type="file" class="uploadFile img" value="Upload Photo">
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="regis-acc" id="acc-2">
							<div class="item">
								<div class="left"></div>
								<div class="right">
									<h4>Xác thực thông tin doanh nghiệp/hộ kinh doanh</h4>
								</div>
							</div> 
							<div class="item"> 
								<div class="left">
									<label>Thông tin giấy <br>đăng ký kinh doanh*</label>
								</div>
								<div class="right">
									<div class="list-acc">
										<ul>
											<li class="imgUp">
												<div class="avarta-acc text-center">
													<div class="icon"><img src="images/xt-3.png" class="img-fluid" alt=""></div>
													<p>Tải hình ảnh giấy <br>đăng ký kinh doanh  <br>(định dạng png, jpg, pdf...)</p>

													<div class="imagePreview"></div>
													<input type="file" class="uploadFile img" value="Upload Photo">
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="item"> 
								<div class="left">
									<label>Hình ảnh CMND <br>mặt trước và sau)</label>
								</div>
								<div class="right">
									<div class="list-acc">
										<ul>
											<li class="imgUp">
												<div class="avarta-acc text-center">
													<div class="icon"><img src="images/xt-1.png" class="img-fluid" alt=""></div>
													<p>Mặt trước</p>

													<div class="imagePreview"></div>
													<input type="file" class="uploadFile img" value="Upload Photo">
												</div>
											</li>
											<li class="imgUp">
												<div class="avarta-acc text-center">
													<div class="icon"><img src="images/xt-1.png" class="img-fluid" alt=""></div>
													<p>Mặt sau</p>

													<div class="imagePreview"></div>
													<input type="file" class="uploadFile img" value="Upload Photo">
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="left">
									<label></label>
								</div>
								<div class="right">
									<h4>Xác thực thông tin cửa hàng</h4>
								</div> 
							</div>

							<div class="item">
								<div class="left">
									<label><strong>Link gian hàng online*</strong></label>
								</div>
								<div class="right">
									<input type="text" placeholder="Địa chỉ website/ứng dụng, fanpage, instagram, tiktok, shopee, tiki.. " class="txt_field">
								</div>
							</div>
							<div class="item"> 
								<div class="left">
									<label>Hình ảnh cửa hàng/ <br>kho hàng/văn phòng <br>(nếu có)</label>
								</div>
								<div class="right">
									<div class="list-acc">
										<ul>
											<li class="imgUp">
												<div class="avarta-acc text-center">
													<div class="icon"><img src="images/xt-3.png" class="img-fluid" alt=""></div>
													<p>Tải hình ảnh cửa hàng/ <br>kho hàng/văn phòng</p>

													<div class="imagePreview"></div>
													<input type="file" class="uploadFile img" value="Upload Photo">
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="left"></div>
						<div class="right">
							<div class="accept-policy">
								<input type="checkbox" id="1001"><label for="1001">Tôi đã đọc và đồng ý với <a href="policy.php" target="_blank">Điều khoản và chích sách 9Pay</a></label>
							</div>
						</div>
					</div>
					<div class="item justify-content-center mb-0">
						<div class="btn-regis text-center"><input type="submit" class="btn_field" value="Đăng ký" data-toggle="modal" data-target="#modal-regis"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade modal-success" id="modal-regis">
			<div class="modal-dialog">
			    <div class="modal-content">
				    <div class="modal-body">
				      	<div class="content-popup text-center">
				      		<button type="button" class="close" data-dismiss="modal">
				      			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M16.0641 8.31561C16.0641 8.21249 15.9797 8.12811 15.8766 8.12811L14.3297 8.13514L12 10.9125L9.67265 8.13749L8.12344 8.13046C8.02031 8.13046 7.93594 8.21249 7.93594 8.31796C7.93594 8.36249 7.95234 8.40468 7.98047 8.43983L11.0297 12.0726L7.98047 15.7031C7.95215 15.7375 7.93643 15.7805 7.93594 15.825C7.93594 15.9281 8.02031 16.0125 8.12344 16.0125L9.67265 16.0055L12 13.2281L14.3273 16.0031L15.8742 16.0101C15.9773 16.0101 16.0617 15.9281 16.0617 15.8226C16.0617 15.7781 16.0453 15.7359 16.0172 15.7008L12.9727 12.0703L16.0219 8.43749C16.05 8.40468 16.0641 8.36014 16.0641 8.31561Z" fill="black"/>
									<path d="M12 1.52344C6.20156 1.52344 1.5 6.225 1.5 12.0234C1.5 17.8219 6.20156 22.5234 12 22.5234C17.7984 22.5234 22.5 17.8219 22.5 12.0234C22.5 6.225 17.7984 1.52344 12 1.52344ZM12 20.7422C7.18594 20.7422 3.28125 16.8375 3.28125 12.0234C3.28125 7.20938 7.18594 3.30469 12 3.30469C16.8141 3.30469 20.7188 7.20938 20.7188 12.0234C20.7188 16.8375 16.8141 20.7422 12 20.7422Z" fill="black"/>
								</svg>
				      		</button>
				      		<div class="icon">
				      			<svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M13.5 27L22.5 36L40.5 18" stroke="#15AE62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M27 51.75C40.669 51.75 51.75 40.669 51.75 27C51.75 13.331 40.669 2.25 27 2.25C13.331 2.25 2.25 13.331 2.25 27C2.25 40.669 13.331 51.75 27 51.75Z" stroke="#15AE62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
				      		</div>
				      		<h4>Gửi thông tin thành công</h4>
				      		<p>Kết quả xác thực sẽ được thông báo cho bạn trong thời gian sớm nhất.</p>
				      		<p>Vui lòng kiểm tra email để nhận kết quả.</p>
				      	</div>
				    </div>
			    </div>
			</div>
		</div>
	</section>
	<section class="box-copyright text-center">
		<div class="container">
			<div class="info-copyright">
				<p>Copyright © 2020 9Pay. All right reserved</p>
				<ul>
					<li><img src="images/f-1.png" class="img-fluid" alt=""></li>
					<li><img src="images/f-2.png" class="img-fluid" alt=""></li>
					<li><img src="images/f-3.png" class="img-fluid" alt=""></li>
				</ul>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php';?>     
  