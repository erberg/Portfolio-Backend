/**
 * Controls the default input text, removing it when the field is selected, 
 * and adding it back if no data has been entered into the field.
 * @type {Object}
 */

var EMAILFORM = {};
EMAILFORM.clearDefault=function(){
	$("input, textarea").click(function (){
		if( $(this).attr('name') === $(this).val() ) { $(this).val(''); }
	});

	$("input, textarea").blur(function (){
		if( $(this).val() === '' ) { $(this).val($(this).attr('name')); }
	});
};