$(document).ready(function(){
    $("#loading").hide();
    /*************************************************
     * Get autocomplete blok
     * Author : Andre
     * param  : none
     * return : none
     *************************************************/
    
    /*************************************************
     * Get autocomplete propinsi
     * Author : Fransiscus
     * param  : none
     * return : none
     *************************************************/
    
//    $( "#provinsi" ).autocomplete({
//		source: Shop.basePath + "ajax/provinsi",
//		minLength:1,
//		select: function(event, ui) {
//			$("#pid").val(ui.item.id);
//			$("#cop").val(ui.item.cop);
//		}
//    });
//    
    
	$( "#tags").autocomplete({
		source: Shop.basePath + "ajax/tags",
		minLength:1,
		loading: $("#loading").show(),
		success: $("#loading").hide(),
	});
	
	$( "#NewsTags" ).autocomplete({
		source: Shop.basePath + "ajax/tags",
		minLength:1,
	});
    	
});
