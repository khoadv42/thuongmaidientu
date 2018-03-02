$(document).ready(function(){
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:5,
    nav:true,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
});
});


// function mainInfo(value){
// 	$.ajax({
// 		type:"GET",
// 		url:"managerUser.php",
// 		data:'value='+value,
// 		processData:false,
// 		contentType:false,
// 		success:function(data){
// 			document.getElementById('#opt').innerHTML=data;
// 		}
// 	},false);
// };


$(".act").click(function(){
	$.get('seat_2.php',function(data){
		$("#shown").html(data);
	});
	
});