$(function() {
    	let a = $('#price').val();
    	let b = $('#qtd').val();
    	let result = parseFloat(a) * parseFloat(b);
    	$('#qtotaly').val(result);

    	// if (!$(":checkbox").is(':checked')) {
    	// 	$(".sucess").attr('data-toggle': '#');
    	// }
});
