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
