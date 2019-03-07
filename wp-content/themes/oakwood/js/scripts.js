jQuery(document).ready(function(){
	jQuery('.h-s1_carousel').owlCarousel({
   loop:true,
   nav:true,
   items: 1,
   animateOut: 'fadeOut',
   animateIn: 'fadeIn',
   smartSpeed: 2000,
   nav: true,
   navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
   autoplay:true,
   autoplayTimeout:4000
 });

  jQuery('.nav-button').click(function(){
    jQuery('.nav-mobile').toggleClass('nav-mobile-activ');
  });

	//init wow effects
	new WOW().init();

//main slider scroll bottom
jQuery(".icon-scroll").click(function(event){     
  event.preventDefault();
  jQuery('html,body').animate({scrollTop:jQuery(this.hash).offset().top - 100}, 500);
});

jQuery(".to-product-item").click(function(event){     
  event.preventDefault();
  jQuery('html,body').animate({scrollTop:jQuery(this.hash).offset().top - 100}, 500);
});

jQuery(window).scroll(function () {
  if (jQuery(this).scrollTop() > 200) {
    jQuery('.scrollup').fadeIn();
  } else {
    jQuery('.scrollup').fadeOut();
  }
});






  //header opacity 
  jQuery(window).bind('scroll', function () {
    if (jQuery(window).scrollTop() > 160) {
      jQuery('header').addClass('menu-opacity');
    } else {
      jQuery('header').removeClass('menu-opacity');
    }
  });

  function check_active(){
    jQuery('.home-s1 .owl-item:not(.active) h2').removeClass('s1_h1-anim');
    jQuery('.home-s1 .owl-item:not(.active) .h-s1_inner2 p').removeClass('s1_h1-anim_p');
    jQuery('.home-s1 .owl-item.active h2').addClass('s1_h1-anim');
    jQuery('.home-s1 .owl-item.active .h-s1_inner2 p').addClass('s1_h1-anim_p');
  }

  setInterval(check_active,500);

  if(jQuery('body.page-template-product-page').length){
    /*jQuery(".p-s2 input[type=checkbox]" ).on( "click", function(){
      if( jQuery(this).is(':checked')) {
        jQuery(".p-s3").show('slow');
      } else {
        jQuery(".p-s3").hide('slow');



      }*/

      jQuery(".p-s3 input[type=checkbox]" ).on( "click", function(){
        if( jQuery(this).is(':checked')) {
          jQuery(".p-s4").show('slow');
          
        } else {
          jQuery(".p-s4").hide('slow');
        }


        jQuery(".p-s4 input[type=checkbox]" ).on( "click", function(){
          if( jQuery(this).is(':checked')) {
            jQuery(".p-s5").show('slow');
          } else {
            jQuery(".p-s5").hide('slow');
          }

        });
        /*});*/
      });
      jQuery('#wpcf7-f119-o1 input[value="20 mm"]').prop( "checked", true );

      function form_small(id,name){
        jQuery( id + ' ' +'input[type="checkbox"]').on('change', function() {

          jQuery(id + ' ' +'input[type="checkbox"]').not(this).prop('checked', false);

          if(jQuery(id + ' ' +'input').is(':checked')){

            var imgForm =  jQuery(id + ' ' +'input:checked').siblings('img').attr('src');
            var checked = jQuery(id + ' ' +'input:checked').val();



          jQuery('#wpcf7-f119-o1 input[value="'+ checked +'"]').prop( "checked", true );//.not(this).prop('checked', false);
          var not_checked = !jQuery('#wpcf7-f119-o1 input').is(':checked');
          jQuery(not_checked).prop('checked', false).siblings('.res-img').html('');


          if(jQuery('#wpcf7-f119-o1 input[value="'+ checked +'"]').is(':checked')){

            jQuery('#wpcf7-f119-o1 input[value="'+ checked +'"]').after('<div class="res-img"><img src="'+ imgForm +'" /></div>');
            jQuery('#wpcf7-f119-o1 input[value="'+ checked +'"]').parent().prepend('<span class="zbl">'+ name + '</span>');

            //jQuery(!jQuery('#wpcf7-f119-o1 input').is(':checked'))
          }

          if(id == '.p-s5'){
            jQuery('.done-choose').addClass('done-choose-block');
          }
        } //else {
          /*var unchecked = jQuery(!id + ' ' +'input:checkbox').prop('checked', false);
          jQuery('#wpcf7-f119-o1 input[value="'+ unchecked +'"]').prop( "checked", false );
          jQuery('#wpcf7-f119-o1 input[value="'+ unchecked +'"]').siblings('.res-img').html('');

           
        jQuery('#wpcf7-f119-o1 input').siblings('.res-img').html(' ');


        */
         // 
        //}

      });
      }

        //
        //form_small('.p-s2','Thickness');
       form_small('.p-s3','Width');
        form_small('.p-s4','Package-size');
        form_small('.p-s5','Quality');
      }

      jQuery('#wpcf7-f119-o1 input[value="20 mm"]').after('<div class="res-img"><img src="http://oakwoodtimber.com/wp-content/uploads/2018/11/20mm.jpg" /></div>');
      jQuery('#wpcf7-f119-o1 input[value="20 mm"]').parent().prepend('<span class="zbl">Thickness</span>');



      jQuery('#wpcf7-f119-o1 form.wpcf7-form').addClass('container').append('<div class="close-result"><i class="fa fa-times-circle-o" aria-hidden="true"></i></div>');
      jQuery('#wpcf7-f119-o1').wrapInner('<div><div></div></div>')
      jQuery('#wpcf7-f119-o1 form > p:nth-child(2)').wrapInner('<div class="col-md-7 inner-form"></div>');
      jQuery('#wpcf7-f119-o1 form > p:nth-child(3)').wrapInner('<div class="col-md-5 inner-form"></div>');
      jQuery('#wpcf7-f119-o1 form > p:nth-child(4)').wrapInner('<div class="col-md-12 inner-form header-button"></div>');
      jQuery('#wpcf7-f119-o1 form >p > .inner-form').unwrap();

      jQuery('.done-choose').click(function(){
        jQuery('#wpcf7-f119-o1').addClass('wpcf7-f119-o1-block');;
      });

      jQuery(".header-button button").click(function () {
        jQuery(".error").hide();
        var valueX = jQuery(".email").val();
        var valueY = jQuery(".reemail").val();
        jQuery('.reemail').css('color','red');
        if (valueX != valueY) {
          alert("Emails do not match.");
        }
      });

      jQuery('.close-result i').click(function(){
        jQuery('#wpcf7-f119-o1 ').removeClass('wpcf7-f119-o1-block');
      });

      jQuery( "body.page-template-contact-page .cs1-bussines input" ).click(function() {  

        if(jQuery('body.page-template-contact-page .c-s2:visible').length){
          jQuery('body.page-template-contact-page .c-s2').hide("slide", { direction: "top" }, 500);
        }
        else{
          jQuery('body.page-template-contact-page .c-s2').show("slide"); 
          jQuery("html, body").animate({
            scrollTop: jQuery(document).height()  * 0.85 - jQuery(window).height()
          },1000);
          return false;
        }


        
      });

      jQuery('body.page-template-contact-page .cs1-bussines .to-down').click( function(e){
        e.preventDefault();
        jQuery('html,body').animate({scrollTop:jQuery(this.hash).offset().top - 100}, 500);
      });


      if(jQuery('body.faq-page').length > 0){
        jQuery("#accardion").accordion();
      }

      if(jQuery('body.page-template-product-page').length >0){
        jQuery('input[type="checkbox"]').click(function(){
          if(jQuery(this).prop("checked") == true){
            jQuery(this).parent('div').css({'border':'5px solid red'});
            jQuery(this).parent().parent().siblings('.type-p').children('div').css({'border':'0px solid red'});
          }
          else if(jQuery(this).prop("checked") == false){
            jQuery(this).parent('div').css({'border':'0px solid red'});
          }
        });
      }

      jQuery('button.view-img').click(function(){
        if(jQuery('.view-img_img:visible').length){
          jQuery('.view-img_img').hide(100);
        }else{
          jQuery('.view-img_img').show(100);
        }
      });

      if (jQuery(window).width() < 768) {
       jQuery('.done-choose').click(function(){
        jQuery("html, body").animate({
          scrollTop: 0
        }, 600);
        return false;
      });
     }

     jQuery('.screen-reader-text').html('Posts navigation');

     jQuery('.scrollup').click(function () {
      jQuery("html, body").animate({
        scrollTop: 0
      }, 600);
      return false;
    });

     jQuery(".p-s3 input").click(function(){     

      jQuery("html, body").animate({scrollTop: jQuery(window).scrollTop() + 500}, 500);
    });
     jQuery(".p-s4 input").click(function(){     

      jQuery("html, body").animate({scrollTop: jQuery(window).scrollTop() + 800}, 500);
    });
     jQuery(".p-s5 input").click(function(){     

      jQuery("html, body").animate({scrollTop: jQuery(window).scrollTop() + 1500}, 500);
    });





     jQuery('#wpcf7-f119-o1 .your-email').next().remove();
     jQuery('#wpcf7-f119-o1 span.your-email').addClass('col-md-6');
     jQuery('#wpcf7-f119-o1 span.your-email-confirm').addClass('col-md-6');

     jQuery('#wpcf7-f119-o1 .your-square').next().remove();
     jQuery('#wpcf7-f119-o1 span.your-square').addClass('col-md-6');
     jQuery('#wpcf7-f119-o1 span.your-date').addClass('col-md-6');
   });




/*jQuery(window).on('load', function(){
  jQuery('.p-s2 input').prop('checked', true);
});*/