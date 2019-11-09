$(document).ready(function () {
	$(".closebtn").click(function(){
    closeNav();
	});
		$(".close-side").click(function () {
	    closeNav();
	});
		$("#opennav").click(function () {
	    openNav();
	});
	$(window).scroll(function(){
        if($(this).scrollTop()>100){
            $('.menu-2').css('position','fixed');
            $('.menu-2').css('top','0px');
            $('.menu-2').css('z-index','99999');
        }else{
            $('.menu-2').css('position','unset');
            $('.menu-2').css('top','-180px');
        }
    });
});
function openNav() {
    $("#mySidenav").css('width', "324px");
    $(".close-side").css("visibility", "visible");
    $(".close-side").css("opacity", "1");
}
function closeNav() {
    $("#mySidenav").css('width', '0');
    $(".close-side").css("visibility", "hidden");
    $(".close-side").css("opacity", "0");
}