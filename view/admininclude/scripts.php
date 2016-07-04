<!-- jQuery -->
<script src="<?php asset('bower_components/jquery/dist/jquery.min.js')?>"></script>
<script src="<?php asset('js/jquery-confirm.min.js')?>"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php asset('bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php asset('bower_components/metisMenu/dist/metisMenu.min.js')?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php asset('dist/js/sb-admin-2.js')?>"></script>

<script>
	function confirmar(url){
		$.confirm({
				title: '¿Deseas eliminar este registro?',
				content: 'Se eliminará completamente del sistema',
				confirmButtonClass: 'btn-danger',
    			cancelButtonClass: 'btn-success',
    			confirmButton: 'Confirmar',
    			cancelButton: 'Cancelar',
				confirm: function(){
		        window.location.href=url;
		    }
		});
	}
</script>
