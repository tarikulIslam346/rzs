<div class="container-fluid">
  <div class="row">
      <section style="width:100%">
        <div class="home_content_wrap">
          <div class="card">
            <div class="row write_blog">
              <div class="col-md-12">
               <div class="item_body ">
                  <div class="item_body_head">
                    <div class="row user_image">
                      <img src="img/add.jpg">
                      <div class="col-md-10">
                        <div class="item_body_title"><p>Mohammad Imran</p></div>
                        <div class="item_body_meta"><p>26 March 2019</p></div>
                      </div>
                    </div>
                  </div>
                  <form action="/post_create" method="POST">
  				        @csrf
                  <div class="item_body_content">
                    <div class="form-group">
                    <input class="form-control" placeholder="Post title" name="title" id="exampleTextarea">
                  </div>
                   <div class="form-group">
                    <textarea class="form-control" placeholder="Write your post here...." name="post" id="exampleTextarea" rows="3"></textarea>
                  </div>
                  </div>
                  <div class="item_post_footer">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="file" name="post_image" class="form-control-file" id="exampleInputFile">
                        </div>
                      </div>
                      <div class="col-md-6 post_submit_button">
                        <button class="submit_button btn btn-info btn-sm my-0 waves-effect waves-light" type="submit">submit</button>
                      </div>
                    </div>
                  </div>
                </form>
               </div>
              </div>
            </div>
          </div>
        </div>

        
        @if(isset($post))
  		  	@foreach($post as $p)
          <div class="home_content_wrap">
              <div class="row">
                <div class="col-md-12">
                    <div class="item_body">
                        <div class="item_body_head">
                          <div class="card">
                          <div class="dropdown settings">
                              <i class="fa fa-trash"></i>
                             
                            </div>
                            <div class="card-header user_image">
                              <img src="img/add.jpg">
                              <div class="col-md-10">
                                <div class="item_body_title"><a href="/single-page"><p>{{$p->title}}</p></a></div>
                                <div class="item_body_meta"><p>Posted by <span><a href="#">Mohammad Imran</a></span>, 26 March 2019</p></div>
                              </div>
                            </div>
                            <div class="card-body">
                              <div class="item_body_content">
                                <p>{{$p->post}}</p>
                                <div class="item_head">
                                  <img src="img/add.jpg">
                                </div>
                              </div>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="item_body_footer">
                                  <div class="row">
                                    <div class="col-md-3 footer_element">Like<span>200</span></div>
                                    <div class="col-md-3 footer_element">Share<span>200</span></div>
                                    <div class="col-md-3 footer_element">View<span>200</span></div>
                                    <div class="col-md-3 footer_element"><button id="{{$p->id}}">Comments</button><span>200</span></div>
                                  </div>
                                </div>
                              
                            </div>
                            <div class="card-footer text-muted" style="background:gray; padding: 5px">
       
        </div><div id="comment_{{$p->id}}">                     <div class="avatar">
        <img src="/images/user_profile/{{\Auth::user()->profile_pic}}"  width="30" alt="" class="avatar-photo">	</div>
                                <div class="item_body_footer">
                                  <div class="comments-container">
                                    <ul id="comments-list" class="comments-list">
                                      <li>
                                        <div class="comment-main-level">
                                          <!-- Avatar -->
                                          <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
                                          <!-- Contenedor del Comentario -->
                                          <div class="comment-box">
                                            <div class="comment-head">
                                              <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                                              <span>hace 20 minutos</span>
                                              <i class="fa fa-reply"></i>
                                              <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="comment-content">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                            </div>
                                          </div>
                                        </div>
                                        <!-- Respuestas de los comentarios -->
                                        <ul class="comments-list reply-list">
                                          <li>
                                            <!-- Avatar -->
                                            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                                            <!-- Contenedor del Comentario -->
                                            <div class="comment-box">
                                              <div class="comment-head">
                                                <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
                                                <span>hace 10 minutos</span>
                                                <i class="fa fa-reply"></i>
                                                <i class="fa fa-heart"></i>
                                              </div>
                                              <div class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                              </div>
                                            </div>
                                          </li>

                                          <li>
                                            <!-- Avatar -->
                                            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
                                            <!-- Contenedor del Comentario -->
                                            <div class="comment-box">
                                              <div class="comment-head">
                                                <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                                                <span>hace 10 minutos</span>
                                                <i class="fa fa-reply"></i>
                                                <i class="fa fa-heart"></i>
                                              </div>
                                              <div class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                              </div>
                                            </div>
                                          </li>
                                        </ul>
                                      </li>

                                      <li>
                                        <div class="comment-main-level">
                                          <!-- Avatar -->
                                          <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                                          <!-- Contenedor del Comentario -->
                                          <div class="comment-box">
                                            <div class="comment-head">
                                              <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
                                              <span>hace 10 minutos</span>
                                              <i class="fa fa-reply"></i>
                                              <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="comment-content">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                            </div>
                                          </div>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
            <!-- </div> -->
          </div>
          <script>
$(document).ready(function() {
    $("#{{$p->id}}").click(function() {
        $('#comment_{{$p->id}}').after("<form method='POST'action=''><input type='text' name='comment'><br><button type='submit'>Submit</button></form><br>");
    });
})
</script> 
  			  @endforeach
  			@endif
      </section>
  </div>
</div>


<!-- page script -->

