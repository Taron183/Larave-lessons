//seats__item_selected
$(".seats__item").click(function(){
  $(this).toggleClass("seats__item_selected");
  var num = $(this).attr("data-a");
  var id = $(".seats__row").attr("data-id");
  if($(this).hasClass("seats__item_selected")){
   var check = 1;
    //$(this).toggleClass("seats__item_selected");

  }else{
   var check = 0;

  }
  console.log(num);


  $.ajax({
    url:'/movie/up',
    method:'GET',
    data:{num:num,id:id,check:check},
    dataType: "json",
    success:function(response){
    }
  })

})


$(".level-one").click(function(){

})

