<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Marcado de Votos">
		<meta name="author" content="TKT">
        <title>Marcado</title>
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ asset('vendor/animate/animate.css') }}">

		<link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('css/theme.css') }}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('css/skins/default.css') }}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign body-locked">
			<div class="center-sign">
                    {!! Alert::render() !!}
				<div class="panel card-sign">
					<div class="card-body">
                            <div style="display: none;" class="current-user text-center">
                                    <img src="img/!logged-user.jpg" alt="John Doe" class="rounded-circle user-image" />
                                    <p class="user-name text-dark m-0">John Doe</p>
                                    <a href="#" id="enlace" class="btn btn-success simple-ajax-modal">Registrar</a>
                                </div>
						<form id="searchForm">
							<div class="form-group mb-3">
								<div class="input-group">
									<input id="pwd" type="tex" class="form-control form-control-lg" placeholder="Cedula" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-id"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-6"  >
									<button type="submit" class="btn btn-success pull-right">Buscar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
            </div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
		<script src="{{ asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{ asset('vendor/popper/umd/popper.min.js') }}"></script>
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('vendor/common/common.js') }}"></script>
		<script src="{{ asset('vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
		<script src="{{ asset('vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

        <script src="{{ asset('js/theme.js') }}"></script>
        <script src="{{asset('js/examples/examples.modals.js')}}"></script>
        <script src="{{asset('js/examples/examples.notifications.js')}}"></script>
		<script src="{{ asset('js/custom.js') }}"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#searchForm").submit(function (e) {
                e.preventDefault();
                var cedula = $('#pwd').val();
                var data={cedula:cedula};
                $.ajax({
                    type: "post",
                    url: "{{ route('search') }}",
                    data: data,
                    success: function (res) {
                        if(res.voter){
                            if(res.voter.sufrago == 0){
                                var modal = $('.modal-basic').magnificPopup({
                                type: 'inline',
                                preloader: false,
                                modal: true
                            });
                            $('#searchForm').hide();
                            $('.current-user').show();
                            $('.user-name').html('<span>'+res.voter.name+' '+res.voter.lastname+'</span>');
                            $('#enlace').attr('href',"{{Config::get('app.url')}}"+'/voters/'+res.voter.id);
                            }
                            else{
                                alert('Votante ya hizo la votación');
                                $('#pwd').val('');
                                $('#pwd').focus();
                            }

                        }
                        else{
                            alert('Votante no registrado');
                            $('#pwd').val('');
                            $('#pwd').focus();
                        }

                    }
                });
            });
        </script>
		<script src="{{ asset('js/theme.init.js') }}"></script>

	</body>
</html>
