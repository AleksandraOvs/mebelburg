$("#areas input[type=checkbox]").change( function(){
    var row = $(this).parent();
    var id=row.attr("id");

    var map = document.getElementById('svg_map');
    if(this.checked){
        row.toggleClass("selected");
        $('#map-'+id, map).addClass("selected");
    }
    
    else {
        row.removeClass("selected");
        $('#map-'+id, map).removeClass("selected");
    }
});