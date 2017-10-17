 $(function(){

     function func1(){
         new picFn({
             k:0.7702265372168285,//高宽比系数
             oDivCla:'.exchangeBox li .expic ',//图片外框
         });
     }
     function func2(){

     }
     function func3(){

     }
     function addLoadEvent(func){
         var oldonload=window.onload;
         if(typeof window.onload!="function"){
             window.onload=func;
         }
         else{
             window.onload=function(){
                 oldonload();
                 func();
             }
         }
     }
     addLoadEvent(func1);
     addLoadEvent(func2);
     addLoadEvent(func3);
     function picFn(option){
         var k=option.k;//高宽比系数
         var oDiv=$(option.oDivCla);//图片外框
         imgFn();
         function imgFn(){
             oDiv.each(function(){
                 var iWid=$(this).width();
                 $(this).height(k*iWid);
             })
         }
     }
     $(window).resize(function () {
         var timer=setTimeout(function(){
             func1();
             func2();
             func3();
         },100)

     });
	
});