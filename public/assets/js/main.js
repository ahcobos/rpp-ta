$( document ).ready(function() {
  $( "#problem_solver" ).submit(function( event ) {
    $( "#answer" ).empty()
    doPostRequest($(this).attr("action"),$(this).serialize())
    event.preventDefault();
  });
});


  function doPostRequest(url, form){
    $.post( url, form,function( data ) {
      $( "#answer" ).empty()
      for (var i = 0, len = data["response"].length; i < len; i++) {
          $( "#answer" ).append("<div>"+data["response"][i]+"</div>");
      }
      // $( "#answer" ).html( data["response"] );
    },"json");
}
