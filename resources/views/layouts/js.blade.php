<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/499c790285.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.set-bg').each(function(index) {
			var url = $(this).data('setbg');
			$(this).css('background-image', 'url(\'' + url + '\')');
		});
	});
</script>

@yield('page_js')