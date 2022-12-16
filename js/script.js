    $(window).scroll(function() {
        if ($(this).scrollTop() > 25){
            $('.navbar').addClass("dis");         
        }
            else{
            $('.navbar').removeClass("dis");         
        }
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 25){
            $('.nav-a-individ').addClass("dis");         
        }
            else{
            $('.nav-a-individ').removeClass("dis");         
        }
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 25){
            $('.btn-focus').addClass("dis");         
        }
            else{
            $('.btn-focus').removeClass("dis");         
        }
    });
