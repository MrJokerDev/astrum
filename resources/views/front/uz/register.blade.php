<!DOCTYPE html>
<html lang="en">
<head>
	<title>Astrum | Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('register/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('register/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('register/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('register/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('register/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('register/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('register/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>	

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="{{ asset('register/images/img-01.png')}}" alt="IMG">
			</div>

			<form action="{{ route('create.user') }}" method="POST" class="contact1-form validate-form">
            	@csrf
				<span class="contact1-form-title">
					Get in touch
				</span>

				<div class="wrap-input1 validate-input" data-validate="Ism kiritilishi shart">
					<input class="input1" type="text" name="first_name" placeholder="Ism">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Familiya kiritilishi shart">
					<input class="input1" type="text" name="last_name" placeholder="Familiya">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Yaroqli elektron pochta manzili talab qilinadi: astrum@mail.uz">
					<input class="input1" type="text" name="email" placeholder="Elektron pochta">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Telefon raqami kiritilishi shart">
					<input class="input1" type="number" name="phone" value="998" placeholder="998 71 202 42 22">
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Yuborish
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>

		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{ asset('register/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('register/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('register/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('register/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('register/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="{{ asset('register/js/main.js')}}"></script>

</body>
</html>
