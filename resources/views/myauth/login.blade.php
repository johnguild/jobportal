<section class="contact-page-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form class="form-area " id="form-login" action="{{url('/login')}}" method="post" class="contact-form text-right">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-lg-12 form-group">
              <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="required" type="email">

							<input name="password" placeholder="Enter your password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" class="common-input mb-20 form-control" required="required" type="password">

							<div class="mt-sm-30">
								<div class="">
									<ul class="unordered-list" id="error-message-list">
									</ul>
								</div>
							</div>

							<button class="primary-btn mt-20 text-white" style="float: right;">Submit</button>
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

			$("#form-login").submit(function(e){
					e.preventDefault();

					$("#error-message-list").empty();
					$("#submit-btn").addClass("disable").removeClass("primary-border");
					var f = $(this);
					var loginRequest =
						$.ajax({
              url : f.attr("action"),
              type: f.attr("method"),
              data: f.serialize(),
              success:function(response){
									window.location.reload();
              },
              error:function(xhr){
									for (var i = 0; i < xhr.responseJSON.errors.email.length; i++) {
											var data = xhr.responseJSON.errors.email;
											console.log(xhr.responseJSON.errors.email[i]);
												$("#error-message-list").append("<li class='text-danger'>"+data[i]+"</li>");
									}
									$("#submit-btn").addClass("primary-border").removeClass("disable");
              }
          })
			});
	});
</script>
