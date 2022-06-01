$(function(){

	$('#taskList').on('click', '.btn-danger', function(e){
		return confirm("Estàs segur que vols eliminar la tasca?");
	});
	
});
