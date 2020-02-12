function changeAmounts(arrayTotal,arrayCart){
    $(document).ready(function(){
        
        var value=$("#selsizes :selected").val();
        console.log(value);
        console.log (arrayTotal[value-1]);
        $("#stock").html("");
        $("#stock").append(arrayTotal[value-1].amount);
        $("#inCart").html("");
        var propval=$("#selsizes").prop("selectedIndex");
        $("#inCart").append(arrayCart[propval]?arrayCart[propval].amount:"");
        //console.log(arrayCart[$("#selsizes").prop("selectedIndex")].amount);
        //$("#inCart").append(arrayTotal[value-1].amount);
        //console.log($("#selsizes :selected").val());
        }
    );
}