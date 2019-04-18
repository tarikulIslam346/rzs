<div class="left-side-deco">
    <div class="card hovercard">
    	<a href="modal" data-toggle="modal" data-target="#login-modal" class="edit-avatar btn btn-primary btn-twitter btn-sm">
    		<i class="fa fa-edit"></i>
    	</a>

        <div class="cardheader">

        </div>
        <div class="avatar">
        <img src="/images/user_profile/{{\Auth::user()->profile_pic}}" alt="" class="avatar-photo">	
        </div>
        <div class="info">
            <div class="title">
                <a target="_blank" href="https://scripteden.com/">{{\Auth::user()->name}}</a>
            </div>
            <div class="desc">Passionate designer</div>
            <div class="desc">Curious developer</div>
            <div class="desc">Tech geek</div>
        </div>
        <div class="bottom">
            <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                <i class="fa fa-twitter"></i>
            </a>
            <a class="btn btn-danger btn-sm" rel="publisher"
               href="https://plus.google.com/+ahmshahnuralam">
                <i class="fa fa-google-plus"></i>
            </a>
            <a class="btn btn-primary btn-sm" rel="publisher"
               href="https://plus.google.com/shahnuralam">
                <i class="fa fa-facebook"></i>
            </a>
            <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                <i class="fa fa-behance"></i>
            </a>
        </div>
    </div>
</div>
		<!-- <div class="profile-photo"> -->

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header d-flex">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
				<img src="/images/user_profile/{{\Auth::user()->profile_pic}}" alt="avatar" class="rounded-circle img-responsive">
            </div>
            <!--Body-->
            <div class="modal-body text-center mb-1">
                <form action="/user_update/{{\Auth::id()}}" method="POST">
        					@csrf
                  <div class="md-form ml-0 mr-0">
                    <input type="text" name="name" id="edit_name" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="edit_name" class="ml-0">Chage Name</label>
                  </div>
                  <div class="md-form ml-0 mr-0">
                    <input type="text" name="email" id="edit_uName" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="edit_uName" class="ml-0">Chage Email</label>
                  </div>
                  <div class="md-form ml-0 mr-0">
                    <input type="password" name="password" id="edit_password" class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="edit_password" class="ml-0">Chage Password</label>
                  </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
      	 </div>
    </div>
</div>