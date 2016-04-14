  /**
  * is Followed ? Ajax request
  *
  * @data : serie id
  */
$.ajax(
  {
    url:"{{ path('ajax_isfollowed') }}",
    data: { id: {{ serie.id}} },
    success: function(data){
      if (data) {
        $("#follow").html(data);
      }
    },
    error: function(error){
      console.log(error);
    }
  }
);

$('#follow').click( function()
{
  /**
  * Follow Ajax request
  *
  * @data : serie id
  */
  $.ajax(
    {
      url:"{{ path('ajax_follow') }}",
      data: { id: {{ serie.id}} },
      success: function(data){
        $("#follow").html(data);
      },
      error: function(error){
        console.log(error);
      }
    }
  );
});

  /**
   * is seen ? Ajax request
   *
   * @data : seen id
   */
$.ajax(
  {
    url:"{{ path('ajax_isseen') }}",
    data: { id: {{ episode.id}} },
    success: function(data){
      if (data) {
        $("#seen").html(data);
      }
    },
    error: function(error){
      console.log(error);
    }
  }
);

 $('#seen').click( function()
 {
   /**
    * seen Ajax request
    *
    * @data : episode id
    */
   $.ajax(
     {
       url:"{{ path('ajax_seen') }}",
       data: { id: {{ episode.id}} },
       success: function(data){
          $("#seen").html(data);
       },
       error: function(error){
         console.log(error);
       }
     }
   );
 });
