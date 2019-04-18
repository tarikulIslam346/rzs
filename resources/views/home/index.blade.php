@extends('layouts.master')
@section('content')
<!-- Start your project here-->
<section id="_r_rzsian_home">
  @if(session('registration'))
  <div class="alert  alert-success fade show" role="alert">
    {{ session('registration') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
  @if(count($errors))
  <div class="form-group">
    @foreach($errors->all() as $error)
    <div class="alert  alert-danger fade show" role="alert">
      {{ $error }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endforeach
  </div>
  @endif
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      @if(auth()->check())
      <div class="col-md-12">
        <!-- <div class="_r_nav_wrap"> -->
          <!--Navbar -->
          <!-- <div class="container"> -->
            <nav class="navbar-expand-lg navbar navbar-dark default-color">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                  <!-- <li class="nav-item active">
                    <a class="nav-link" href="/user"><i class="fa fa-envelope"></i> Me <span class="sr-only">(current)</span></a>
                  </li> -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profile </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                      <!-- <a class="dropdown-item" href="#">My account</a> -->
                      <a class="dropdown-item" href="/logout_user">Log out</a>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
          <!-- </div> -->
        <!-- </div> -->
      </div>
      <div class="col-md-12">
        <!-- <div class="_r_rzsian_sitelogo_wrap"> -->
          <div class="_r_rzsian_sitelogo">
            <!-- Button trigger modal-->
            @if(session('volunteer_register'))
            <div class="alert  alert-success fade show" role="alert">
              {{ session('volunteer_register') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            @if(session('question_answers'))
            <div class="alert  alert-success fade show" role="alert">
              {{ session('question_answers') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            @if(auth()->user()->volunteer_status!=1)
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalConfirmDelete">Yes, I Want to be a volunteer </button>
            @endif
            <!--Modal: modalConfirmDelete-->
            <div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
                <!--Content-->
                <div class="modal-content text-center">
                  <!--Header-->
                  <div class="modal-header d-flex justify-content-center">
                    <p class="heading">Are you sure?</p>
                  </div>
                  <!--Body-->
                  <div class="modal-body">
                  <p>If you are interested then press yes button</p>
                  <!-- <i class="fa fa-user-cog"></i> -->
                  </div>
                  <!--Footer-->
                  <div class="modal-footer flex-center">
                    <a href="/volunteer_register/{{\Auth::id()}}" class="btn  btn-outline-danger">Yes</a>
                    <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
                  </div>
                </div>
                <!--/.Content-->
              </div>
            </div>
            <!--Modal: modalConfirmDelete-->

            <!-- registration form -->
            <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Answer all the questions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="/question_answers" method="POST">
        					@csrf
                  <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" value="a" id="q1_1" name="q1">
                        <label class="custom-control-label"  for="q1_1">Option 1</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" value="b" id="q1_2" name="q1">
                        <label class="custom-control-label" for="q1_2">Option 2</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" value="c" id="q1_3" name="q1">
                        <label class="custom-control-label" for="q1_3">Option 3</label>
                      </div>
                    </div>

                    // end
                    <div class="md-form mb-5">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q2_1" name="q2">
                        <label class="custom-control-label" for="q2_1">Option 1</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q2_2" name="q2">
                        <label class="custom-control-label" for="q2_2">Option 2</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q2_3" name="q2">
                        <label class="custom-control-label" for="q2_3">Option 3</label>
                      </div>
                    </div>

                    // end
                    <div class="md-form mb-5">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q3_1" name="q3">
                        <label class="custom-control-label" for="q3_1">Option 1</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q3_2" name="q3">
                        <label class="custom-control-label" for="q3_2">Option 2</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q3_3" name="q3">
                        <label class="custom-control-label" for="q3_3">Option 3</label>
                      </div>
                    </div>

                    // end
                    <div class="md-form mb-5">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q4_1" name="q4">
                        <label class="custom-control-label" for="q4_1">Option 1</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q4_2" name="q4">
                        <label class="custom-control-label" for="q4_2">Option 2</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q4_3" name="q4">
                        <label class="custom-control-label" for="q4_3">Option 3</label>
                      </div>
                    </div>

                    // end
                    <div class="md-form mb-5">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q5_1" name="q5">
                        <label class="custom-control-label" for="q5_1">Option 1</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q5_2" name="q5">
                        <label class="custom-control-label" for="q5_2">Option 2</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q5_3" name="q5">
                        <label class="custom-control-label" for="q5_3">Option 3</label>
                      </div>
                    </div>

                    // end
                    <div class="md-form mb-5">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q6_1" name="q6">
                        <label class="custom-control-label" for="q6_1">Option 1</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q6_2" name="q6">
                        <label class="custom-control-label" for="q6_2">Option 2</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q6_3" name="q6">
                        <label class="custom-control-label" for="q6_3">Option 3</label>
                      </div>
                    </div>

                    // end
                    <div class="md-form mb-5">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q7_1" name="q7">
                        <label class="custom-control-label" for="q7_1">Option 1</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q7_2" name="q7">
                        <label class="custom-control-label" for="q7_2">Option 2</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q7_3" name="q7">
                        <label class="custom-control-label" for="q7_3">Option 3</label>
                      </div>
                    </div>

                    // end
                    <div class="md-form mb-5">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q8_1" name="q8">
                        <label class="custom-control-label" for="q8_1">Option 1</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q8_2" name="q8">
                        <label class="custom-control-label" for="q8_2">Option 2</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q8_3" name="q8">
                        <label class="custom-control-label" for="q8_3">Option 3</label>
                      </div>
                    </div>

                    // end
                    <div class="md-form mb-5">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q9_1" name="q9">
                        <label class="custom-control-label" for="q9_1">Option 1</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q9_2" name="q9">
                        <label class="custom-control-label" for="q9_2">Option 2</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q9_3" name="q9">
                        <label class="custom-control-label" for="q9_3">Option 3</label>
                      </div>
                    </div>

                    // end
                    <div class="md-form mb-5">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q10_1" name="q10">
                        <label class="custom-control-label" for="q10_1">Option 1</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q10_2" name="q10">
                        <label class="custom-control-label" for="q10_2">Option 2</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="q10_3" name="q10">
                        <label class="custom-control-label" for="q10_3">Option 3</label>
                      </div>
                    </div>
                    // end
                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-deep-orange">Submit</button>
                  </div>
                </form>
                </div>
                
              </div>
            </div>
            <?php 
                $answer_check = \App\Question_answer::where(['user_id' => auth()->user()->id])->get();
        
                if(count($answer_check)<1){
            ?>
            <div class="text-center">
              <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
                Modal Register Form</a>
            </div>
                <?php } ?>
            <!-- registration form -->
          </div>
        <!-- </div> -->
      </div>
      @else
      <div class="col-md-12">
        <div class="_r_rzsian_sitelogo_wrap">
          <div class="_r_rzsian_sitelogo">
            <!-- <img src="img/main_logo.png"> -->
          </div>
        </div>
      </div>
      <div class="_r_rzsian_allsite_wrap">
        <div class="_r_rzsian_allsite">
          <a href="" data-toggle="modal" data-target=".modalLRForm">
            <div class="_r_rzsian_site btn btn-default btn-rounded">
              <p>Login please</p>
            </div>
          </a>
        </div>
      </div>
      @endif
    </div>
  </div>
  </div>
</section>

<!-- register with login -->
<!--Modal: Login / Register Form-->
@if(!auth()->check())
<div class="modal fade modalLRForm" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content" style="padding: 0">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
              <form method="POST" action="/login">
                @csrf
                <input type="hidden" name="status" value=0>
                <div class="md-form form-sm mb-5">
                  <i class="fa fa-user prefix"></i>
                  <input type="text" id="modalLRInput10" class="form-control form-control-sm validate" name="phone">
                  <label data-error="wrong" data-success="right" for="modalLRInput10">Your Phone</label>
                </div>

                <div class="md-form form-sm mb-4">
                  <i class="fa fa-lock prefix"></i>
                  <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="password">
                  <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                </div>
                <input type="hidden" name="status" value="0">
                <div class="text-center mt-2">
                  <button class="btn btn-info" type="submit">Log in <i class="fa fa-sign-in ml-1"></i></button>
                </div>
              </form>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <!-- <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p> -->
                <!-- <p>Forgot <a href="#" class="blue-text">Password?</a></p> -->
              </div>
              <!-- <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button> -->
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">

              <form method="POST" action="/register" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="status" value=0>
                <div class="row">
                  <div class="col-md-8">
                    <div class="md-form form-sm mb-5">
                      <i class="fa fa-user prefix"></i>
                      <input type="text" id="modalLRInput15" class="form-control form-control-sm validate" name="name">
                      <label data-error="wrong" data-success="right" for="modalLRInput15">Your Name</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="md-form form-sm mb-5">
                      <i class="fa fa-pencil prefix"></i>
                      <input type="text" id="registerBatch" class="form-control form-control-sm validate" name="batch">
                      <label data-error="wrong" data-success="right" for="registerBatch">SSC Batch</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form form-sm mb-5">
                      <i class="fa fa-envelope prefix"></i>
                      <input type="email" id="modalLRInput12" class="form-control form-control-sm validate" name="email">
                      <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form form-sm mb-5">
                      <i class="fa fa-phone prefix"></i>
                      <input type="text" id="registerMobile" class="form-control form-control-sm validate" name="phone">
                      <label data-error="wrong" data-success="right" for="registerMobile">Your Phone No</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form form-sm mb-5">
                      <i class="fa fa-lock prefix"></i>
                      <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" name="password">
                      <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form form-sm mb-4">
                      <i class="fa fa-lock prefix"></i>
                      <input type="password" id="modalLRInput14" class="form-control form-control-sm validate" name="password_confirmation">
                      <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
                    </div>
                  </div>
                </div>


                <div class="md-form form-sm mb-5">
                  <i class="fa fa-image prefix"></i>
                  <input type="file" id="modalLRInput16" class="form-control form-control-sm validate" name="profile_pic">
                </div>

                <div class="text-center form-sm mt-2">
                  <button class="btn btn-info">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                </div>
              </form>

            </div>
            <!--Footer-->
            <!--  <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div> -->

          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
@endif
@endsection