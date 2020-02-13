function productTextHandler(check,stock){
    if(stock)
    if(check&&($("#quant").attr("value")<stock)){//devo bloccare input
        $("#quant").attr("value",parseInt($("#quant").val())+1);
        $("#quant").val(parseInt($("#quant").attr("value")));
    }
    if(!check&&($("#quant").attr("value")>1)){
        $("#quant").attr("value",parseInt($("#quant").val())-1);
        $("#quant").val(parseInt($("#quant").attr("value")));
    }
   
}
function changeValueInput(input,stock){
    if($(input).val()>stock){
        $("#quant").attr("value",stock);
        $("#quant").val(stock);
    }else{
        $("#quant").attr("value",$(input).val());
        //$("#quant").val(parseInt($("#quant").attr("value")));
    }
}
function openEditForm(varid){
   var variant="#qtyhide"+varid;
   $(variant).hide();
   variant="#formshow"+varid;
   $(variant).show();
}
function closeEditForm(varid){
   var variant="#qtyhide"+varid;
   $(variant).show();
   variant="#formshow"+varid;
   $(variant).hide();
}

  
                    
  
  
    
  
  // RESTRICT INPUTS TO NUMBERS ONLY WITH A MIN OF 0 AND A MAX 100
  $('input').on('blur', function(){
  
      var input = $(this);
      var value = parseInt($(this).val());
      var inputmax = input.closest('div').find('input[name="maxvariant"]').val();
      console.log(inputmax);
  
          if (value < 0 || isNaN(value)) {
              input.val(0);
          } else if
              (value > inputmax) {
              input.val(inputmax);
          }
  });