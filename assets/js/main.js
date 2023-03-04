//navbar
$('#check__toggle').change(function(){
    $(this).prop('checked') ? (
        $('#collapsibleNavId').css('display','block'),
        $('.btn__toggler').addClass('btn__toggler__animated'),
        $('.btn__toggler div:nth-child(3)').css('transform',' rotate(45deg)'),
        $('.btn__toggler div:nth-child(2)').css('transform','translateY(15px) rotate(-45deg)'),
        $('.btn__toggler div:last-child').css('display','none')
        ) : (
        $('#collapsibleNavId').css('display','none'),
        $('.btn__toggler').removeClass('btn__toggler__animated'),
        $('.btn__toggler div:nth-child(3)').css('transform','translateY(-50%) rotate(0deg)'),
        $('.btn__toggler div:nth-child(2)').css('transform','translateY(0px) rotate(0deg)'),
        $('.btn__toggler div:last-child').css('display','block')
        )
})


//typer in home

$("#typer").typer({
    strings: ["FRONT END DEVELOPER","BACK END DEVELOPER"],
    typeSpeed: 60,
    backspaceSpeed: 20,
    backspaceDelay: 800,
    repeatDelay: 1000,
    repeat: true,
    autoStart: true,
    startDelay: 100,
});

//show back-to-top
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 30) {
      $('.back-to-top').css('display','block');
    }
    else {
        $('.back-to-top').css('display','none');
    }
});

//navbar active
$('.nav-item').click(function(){
    $('.nav-item').removeClass('active');
    $(this).addClass('active');
    $('.btn-toggler').click();
});


//filter active
$('.portfolio__controlers a').click(function(){
    $('.portfolio__controlers a').removeClass('active');
    $(this).addClass('active');
});

//animate on scroll
AOS.init();

//scroll effects
var lastScrollTop=0;
$(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    
    //home content fadaIn
    $('.home__content').css({
        opacity: function() {
        var elementHeight = $(this).height()-150;
        // console.log(elementHeight);
        return 1 - (scrollTop-elementHeight) / elementHeight;
        }
    });
    console.log($('.home__content').css('opacity'));
    //change navbar background
    scrollTop > 500 && scrollTop > lastScrollTop ? ($('.navbar').css({'backgroundColor':"rgba(255,255,255,.8)",'transform':'translateY(-100%)'}) ,
        $('.nav-link').css('color','rgba(0,0,0,.7)'),
        $('.btn__toggler div').css('backgroundColor','rgba(0,0,0,.7)'),
        $('.navbar-collapse').css('backgroundColor','rgba(255,255,255,.8)')) :
        $('.navbar').css({'transform':'translateY(0)'}) ;
    scrollTop <500 ? ($('.navbar').css('backgroundColor',"transparent"), $('.nav-link').css('color','#FFF')
     , $('.btn__toggler div').css('backgroundColor','#FFF'),
     $('.navbar-collapse').css('backgroundColor','rgba(0,0,0,.7)') ) : '';
    lastScrollTop = scrollTop;
});


//mixitup projects section
var mixer = mixitup('.portfolio .container .row');
