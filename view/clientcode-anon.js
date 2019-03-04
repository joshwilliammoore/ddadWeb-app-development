$(document).ready(function(){
  $("div#searchfield input").keyup(function(){
    var search = $("div#searchfield input").val().trim();
    if (search != "")
    {
      $.get("searchSuggestion.php?surname="+search,function(results)
      {
          console.log(results);
          $("div#searchfield div.results").empty();
          for (var i = 0; i < results.length; i++)
          {
            var result = $('<div class="result">'+results[i]+'</div>');
            result.click(function(){
              $("div#searchfield div.results").hide();
              $("input[name=searchname]").val($(this).text());
              $("form").get(0).submit();
            });
            $("div#searchfield div.results").append(result);
          }
          if (results.length == 0)
          {
            $("div#searchfield div.results").hide();
          }
          else {
            $("div#searchfield div.results").show();
          }
      });
    }
    else
    {
      $("div#searchfield div.results").hide();
    }
  });
  $("input#searchfield").click(function(){
    var search = $("input[name=searchfield]").val().trim();
    $.get("getCustomersBySurname_service.php?surname="+search,function(results){
      $("table#resultstable tbody").empty();
      for (var i = 0; i < results.length; i++)
      {
        var customer = results[i];
        var newrow = $("<tr></tr>");
        newrow.css("color","blue");
        newrow.append("<td>"+customer.givenname+"</td>");
        newrow.append("<td>"+customer.surname+"</td>");
        newrow.append("<td>"+customer.address+"</td>");
        $("table#resultstable tbody").append(newrow);
      }
    });
  });
});
