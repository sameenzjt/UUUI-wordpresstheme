$(function(){
    $(".post-font-size-change span").click(function(){
        var thisEle = $(".post-content").css("font-size"); 
        var textFontSize = parseFloat(thisEle , 10);
        var unit = thisEle.slice(-2); //获取单位
        var cName = $(this).attr("class");
        if(cName == "bigger"){
            if( textFontSize <= 22 ){
                textFontSize += 1;
            }
        }else if(cName == "smaller"){
            if( textFontSize >= 12  ){
                textFontSize -= 1;
            }
        }else{
            textFontSize = $(this).text();
        }
        $(".post-content").css("font-size",  textFontSize + unit);
    });
});