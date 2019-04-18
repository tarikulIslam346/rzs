<div class="container-fluid">
<div class="row">
    <section>
      <div class="home_content_wrap">
        <div class="card">
          <i class="fa fa-ellipsis-h settings"></i>
          <div class="row write_blog">
            <div class="col-md-12">
             <div class="item_body ">
                <div class="item_body_head">
                  <div class="row">
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
                <div class="item_body_footer">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="file" name="post_image" class="form-control-file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                </div>
                <button class="btn btn-outline-primary btn-lg btn-block" type="submit">Post</button>
              </form>
             </div>
            </div>
          </div>
        </div>
      </div>

      
      @if(isset($post))
		  	@foreach($post as $p)
        <div class="home_content_wrap">
        <div class="card">
          <i class="fa fa-ellipsis-h settings"></i>
          <div class="row">
            <div class="col-md-4">
              <div class="item_head">
                <img src="img/add.jpg">
              </div>
            </div>
            <div class="col-md-8">
             <div class="item_body">
                <div class="item_body_head">
                  <div class="row">
                    <img src="img/add.jpg">
                    <div class="col-md-10">
                      <div class="item_body_title"><a href="/single-page"><p>{{$p->title}}</p></a></div>
                      <div class="item_body_meta"><p>Posted by <span><a href="#">Mohammad Imran</a></span>, 26 March 2019</p></div>
                    </div>
                  </div>
                </div>
                <div class="item_body_content">
                  <p>{{$p->post}}</p>
                </div>
                <div class="item_body_footer">
                  <div class="row">
                    <div class="col-md-3">Like</div>
                    <div class="col-md-3">Share</div>
                    <div class="col-md-3">View</div>
                    <div class="col-md-3">Comment</div>
                  </div>
                </div>
             </div>
            </div>
          </div>
        </div>
        </div>
			  @endforeach
			@endif
 

    </section>
</div>
</div>