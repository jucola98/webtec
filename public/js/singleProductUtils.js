function changeAmounts(arrayTotal,arrayCart){
    $(document).ready(function(){
        
        var value=$("#selsizes :selected").val();
        console.log(value);
        console.log (arrayTotal[value-1]);
        $("#stock").html("");
        $("#stock").append(arrayTotal[value-1].amount);
        $("#inCart").html("");
        var propval=$("#selsizes").prop("selectedIndex");
        $("#inCart").append(arrayCart[propval]?arrayCart[propval].amount:"no");
        $("#availwrapper").html("");
        if(arrayTotal[value-1].amount){
            $("#visibilityCheck").show();
            $("#availwrapper").append( function(){
                return"<b>Available:</b> <span class=\"green-color\"> In Stock </span> ";
            });
            $("#amountselector").html("");
            $("#amountselector").append("<a class=\"btn minus\" onclick='productTextHandler(false,"+arrayTotal[value-1].amount+");'><i class=\"icon_minus-06\"></i></a><input type=\"number\" title=\"Qty\" value=\"1\" name=\"quantity\" min=\"1\" max=\""+arrayTotal[value-1].amount+"\" step=\"1\" class=\"form-control qty\" text=\"1\" id=\"quant\" onchange='changeValueInput(this,"+arrayTotal[value-1].amount+");'><a class=\"btn plus\" onclick='productTextHandler(true,"+arrayTotal[value-1].amount+");'><i class=\"icon_plus\"></i></a>");
        }else{
            $("#visibilityCheck").hide();
            return"<b>Available:</b> <span class=\"red-color\"> Not In Stock </span> ";
        }
        /*
        <a class=\"btn minus\" onclick='productTextHandler(false,{{$details->first()->amount}});'><i class=\"icon_minus-06\"></i></a>
        <input type=\"number\" title=\"Qty\" value=\"1\" name=\"quantity\" min=\"1\" max=\"{{$singart->stock}}\" step=\"1\" class=\"form-control qty\" text=\"1\" id=\"quant\" onchange='changeValueInput(this,{{$singart->stock}});'>
        <a class=\"btn plus\" onclick='productTextHandler(true,{{$details->first()->amount}});'><i class=\"icon_plus\"></i></a>  */     }
    );
}
function checkIfCartExists(cart,details){
    return cart!=undefined?details-cart:details;

}