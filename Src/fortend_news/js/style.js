

 noConflict();







jQuery(document).ready(function ($) {
            
    var jssor_1_options = {
        $AutoPlay: true,
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $ThumbnailNavigatorOptions: {
            $Class: $JssorThumbnailNavigator$,
            $Cols: 5,
            $SpacingX: 5,
            $SpacingY: 1,
            $Orientation: 2,
			
            $Scale:true,
            $AutoCenter:1,
            $ArrowKeyNavigation:1,
            $Align: 0
        }
    };
            
    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
    //responsive code begin
    //you can remove responsive code if you don't want the slider scales while window resizes
    function ScaleSlider() {
        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
            refSize = Math.min(refSize);
            jssor_1_slider.$ScaleWidth(refSize);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }
    ScaleSlider();
    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
//responsive code end
            
            
             
      
});


//related post
   
     
        
$('.sync3').click(function(e) {
    e.preventDefault(); //prevent the link from being followed
    $('.sync3').removeClass('selected');
    $(this).addClass('selected');
});





/* ==============================================
Back To Top Button
=============================================== */






    


          




$(document).ready(function(){
   
    });