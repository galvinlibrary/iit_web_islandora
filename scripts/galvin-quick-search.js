(function($){

  
  function qs_set_form(formName){
    var forms = ["searchEbsco", "searchOpac", "searchWebsite", "searchResearch"]; //these names correspond to the IDs of the divs for this page
    $.each(forms, function( key, value ) {
      if (value === formName){
        $("#" + value).removeClass("hide");
      }
      else {
        $("#" + value).addClass("hide");
      }
    });
  }
  
	$(document).ready(function(){
    qs_set_form("searchEbsco"); // initial state
    
    $('#ebsco').click(function() {
      qs_set_form("searchEbsco");
    });
    $('#opac').click(function() {
      qs_set_form("searchOpac");
    });    
    $('#website').click(function() {
      qs_set_form("searchWebsite");
    });
	$('#research').click(function() {
      qs_set_form("searchResearch");
    });    
	});
})(jQuery);