(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    
    $(".back-to-top").click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1000);
    });


    // Vendor carousel
    $('.creaker-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:2
            },
            576:{
                items:3
            },
            768:{
                items:4
            },
            992:{
                items:5
            },
            1200:{
                items:6
            }
        }
    });


    // Related carousel
    $('.creaker2-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            }
        }
    });


    // Product Quantity
    $('.quantity button').on('click', function () {
        var button = $(this);
        var oldValue = button.parent().parent().find('input').val();
        if (button.hasClass('btn-plus')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        button.parent().parent().find('input').val(newVal);
    });

    //common

// var tbl = document.getElementById("some1");
// var tbltdid= document.getElementById("qttot");
//     if (tbl != null) {
//       for (var i = 0; i < tbl.rows.length; i++) {
//         for (var j = 0; j < tbl.rows[i].cells.length; j++)
//           tbl.rows[i].cells[5].onclick = function () { getval(this); };
//       }
//     }
//     function getval(cel) {
//       alert(cel.innerHTML);
//       cel.setAttribute('style', 'background-color:red');
//     }

var tbl = document.getElementById("some1");
    if (tbl != null) {
      for (var i = 0; i < tbl.rows.length; i++) {
        for (var j = 0; j < tbl.rows[i].cells.length; j++)
        //   tbl.rows[i].cells[5];
        var cel=tbl.rows[i].cells[5];
        var cel2=tbl.rows[i].cells[6];
        var cel3=cel.innerHTML;
        
        // alert(cel3);
        // console.log(cel.innerHTML);
        //  console.log(tbltdid);
        // console.log(cel3);
        // console.log(cel2);
        if(cel3==0)
        {
            
            var cel2=tbl.rows[i].cells[6];
            // alert(cel2);
            cel2.style.display="none";


            // document.getElementById('qttot').style.backgroundColor = red;
        }else
        {
            cel2.style.display="block"; 
        }
       
          

      }
    }


    //qty add minus values
    let qtyElements=document.querySelectorAll('.cart-quantity');
    qtyElements.forEach((input)=>{
        input.addEventListener('change',changeqty);
    });
    
       //change quantity
 function changeqty(){
    if(isNaN(this.value) || this.value<1){
        this.value=1;
        loadcontent();
    }
 }



    
    
    
   
   


    
    
  

// console.log(hidbtn);

    
    
   
       
    
})(jQuery);

