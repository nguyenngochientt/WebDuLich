

$(document).ready(function(){
    for(i=0;i<8;i++){
        $.ajax(
            url="commont_layout/item_newTour.php",
        ).done(function(responsive){
            $(".item").html(responsive);
            $(".btn_booking").each(function(){
                $(this).click(function(){
                   window.location.href="booktour.php";
                })
            })
        })
    }
    // $.getJSON("tours.json",function(tours){
    //     var output="<div>";
    //     $.each(tours, function(index,tour){
    //         output +=" class='tour-col-sm-3'>"
    //             <img src='assets/images/iloveimg-resized/hoian.jpg'>
    //             <h5>Tour du lịch Đà Lạt</h5>
    //             <p>Nơi khởi hành: Đà Nẵng</p>
    //             <p>Điêm dừng chân: Đà Lạt</p>
    //             <p>Thời khởi hành: 20/11/2019</p>
    //             <p>Kéo dài:7 ngày</p>
    //             <button>Xem ngay</button>  
    //     })
    // })
  
})
// 

// Instantiate the Bootstrap carousel
