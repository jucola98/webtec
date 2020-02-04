var starstart;

$(".star").hover(function(){
    var starnumber=parseInt($(this).attr("name"));
    for (var i=0;i<starnumber;i++){
        var starArray=$(".star").get();
        starArray.forEach(element => {
            if($(element).attr("name")<=starnumber)
            $(element).removeClass().addClass("star active");
        });
    }
    for (var i=0;i<5-starnumber;i++){
        var starArray=$(".star").get();
        starArray.forEach(element => {
            if($(element).attr("name")>starnumber)
            $(element).removeClass().addClass("no star");
        });
    }
},function(){
    $("#starrating").html("");
    $("#starrating").append(starstart);
});
$(document).ready(function(){
    starstart= $("#starrating").html();
    console.log(starstart);
    

});