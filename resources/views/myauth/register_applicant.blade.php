<section class="contact-page-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form class="form-area " id="form-register-applicant" action="{{url('api/register/applicant')}}" method="post" class="contact-form text-right">
					{{csrf_field()}}
					<div class="row">
						<div class="col-lg-12 form-group">
							<input name="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'" class="common-input mb-20 form-control" required="required" type="text">

							<input name="last_name" placeholder="Enter Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Last Name'" class="common-input mb-20 form-control" required="required" type="text">


              <input name="email" placeholder="Email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="required" type="email">

							<input name="password" placeholder="Your password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" class="common-input mb-20 form-control" required="required" type="password">

							<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-suitcase" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select" >
									<select style="display: none;" name="sector">
										@foreach($sectors as $s)
											<option value="{{$s->id}}">{{$s->title}}</option>
										@endforeach
									</select>
									<div class="nice-select" tabindex="0">
										<span class="current">{{$sectors[0]->title}}</span>
										<ul class="list">
											@foreach($sectors as $s)
												<option data-value="{{$s->id}}" class="option @if($s->id == '1') selected focus @endif">{{$s->title}}</option>
											@endforeach
										</ul>
									</div>
								</div>
							</div>

							<div class="mt-sm-30">
								<div class="">
									<ul class="unordered-list" id="error-message-list">
									</ul>
								</div>
							</div>

							<button id="submit-btn" class="genric-btn primary-border radius mt-10" style="float: right;">Register</button>
							<div class="mt-20 alert-msg" style="text-align: left;"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	$(document).ready(function(){

			$("#form-register-applicant").submit(function(e){
					e.preventDefault();

					$("#error-message-list").empty();
					$("#submit-btn").addClass("disable").removeClass("primary-border");
					var email = $("input[name=email]").val();
					var f = $(this);
					var registerRequest =
						$.ajax({
              url : f.attr("action"),
              type: f.attr("method"),
              data: f.serialize(),
              success:function(response){
                	switch (response.status) {
                		case 0:
											for (var i = 0; i < response.data.length; i++) {
												$("#error-message-list").append("<li class='text-danger'>"+response.data[i]+"</li>");
											}
											$("#submit-btn").addClass("primary-border").removeClass("disable");
                			break;
										case 1:
                		default:
											$('.modal.show').modal('toggle');
											setTimeout(function(){
													$('a#login-link').trigger("click");
										 }, 1200);

											break;
                	}
              },
              error:function(xhr){
                  //$('#my-progress').hide();
                  console.log(xhr);
									$("#submit-btn").addClass("primary-border").removeClass("disable");
              }
          })
			});
	});
</script>
