<!DOCTYPE html>
<html>
<head>
	@include('user.head')
</head>
<body>
	@include('user.user-header')
	

<div class="container">
	<div class="container-wrap">
	 @if(session('user_update'))
        <div class="alert  alert-success fade show" role="alert">
           {{ session('user_update') }} 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>                   
       @endif  
		<div>
			<!-- <div class="min-height-200px"> -->
				<div class="row clearfix">
					<div class="col-md-2 _r_left_side">
						@include('user.user-sidebar')
					</div>
					<div class="col-lg-7 col-md-7">
					@include('user.blog-body')
						<!-- <form class="form-inline">
					      <div class="md-form" style="width: 100%;">
					        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width: 100%;">
					      </div>
					    </form> -->
						<div class="row clearfix user_body_wrap">
						@if(isset($user))
						@foreach($user as $u)
							<div class="col-md-4">
					            <div class="card">
					                <canvas class="header-bg" height="70" id="header-blur"></canvas>
					                <div class="avatar">
					                    <img class="card-img-top" src="images/user_profile/{{$u->profile_pic}}" alt="Card image">
					                </div>
					                <div class="content">
					                    <p>{{$u->name}} <br>
					                       More description here</p>
					                    <p>
					                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLoginAvatar">Contact</button></p>
					                </div>
					            </div>
							</div>
							@endforeach
							@endif
						{{-- 	<div class="col-md-4">
					            <div class="card">
					                <canvas class="header-bg" height="70" id="header-blur"></canvas>
					                <div class="avatar">
					                    <img class="card-img-top" src="img/imran.jpg" alt="Card image">
					                </div>
					                <div class="content">
					                    <p>Web Developer <br>
					                       More description here</p>
					                    <p>
					                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLoginAvatar">Contact</button></p>
					                </div>
					            </div>
							</div>
							<div class="col-md-4">
					            <div class="card">
					                <canvas class="header-bg" height="70" id="header-blur"></canvas>
					                <div class="avatar">
					                    <img class="card-img-top" src="img/imran.jpg" alt="Card image">
					                </div>
					                <div class="content">
					                    <p>Web Developer <br>
					                       More description here</p>
					                    <p>
					                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLoginAvatar">Contact</button></p>
					                </div>
					            </div>
							</div>
							<div class="col-md-4">
					            <div class="card">
					                <canvas class="header-bg" height="70" id="header-blur"></canvas>
					                <div class="avatar">
					                    <img class="card-img-top" src="img/imran.jpg" alt="Card image">
					                </div>
					                <div class="content">
					                    <p>Web Developer <br>
					                       More description here</p>
					                    <p>
					                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLoginAvatar">Contact</button></p>
					                </div>
					            </div>
							</div>
							<div class="col-md-4">
					            <div class="card">
					                <canvas class="header-bg" height="70" id="header-blur"></canvas>
					                <div class="avatar">
					                    <img class="card-img-top" src="img/imran.jpg" alt="Card image">
					                </div>
					                <div class="content">
					                    <p>Web Developer <br>
					                       More description here</p>
					                    <p>
					                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLoginAvatar">Contact</button></p>
					                </div>
					            </div>
							</div>
							<div class="col-md-4">
					            <div class="card">
					                <canvas class="header-bg" height="70" id="header-blur"></canvas>
					                <div class="avatar">
					                    <img class="card-img-top" src="img/imran.jpg" alt="Card image">
					                </div>
					                <div class="content">
					                    <p>Web Developer <br>
					                       More description here</p>
					                    <p>
					                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLoginAvatar">Contact</button></p>
					                </div>
					            </div>
							</div> --}}


								<!--Modal: Login with Avatar Form-->
							<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
							        <!--Content-->
							        <div class="modal-content">
							            <!--Header-->
							            <div class="modal-header d-flex">
							            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                    <span aria-hidden="true">&times;</span>
							                </button>
											<img src="img/imran.jpg" alt="avatar" class="rounded-circle img-responsive">
							            </div>
							            <!--Body-->
							            <div class="modal-body text-center mb-1">
							                <h5>Mohammad Imran</h5>
							                <p>01723535363</p>
							                <p>intoiit bangladesh LTD</p>
							                <p>Dhaka, Mirpur</p>
							                <p>B+</p>
							            </div>
							      	 </div>
							    	</div>
								</div>
							</div>
						</div>
					<div class="col-md-3">
					@include('user.blog-right-sidebar')
					</div>
				</div>
			</div>
			@include('user.footer')
		</div>
	</div>

 <script type="text/javascript" src="3rd-party/js/mdb.min.js"></script>
</body>
</html>