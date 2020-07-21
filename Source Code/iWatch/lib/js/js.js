$(document).ready(function(){

    //Phần xử lý chuyển các tab
  	$(".product-tabs .product-tabs-nav a").click(function(){
    	$('.product-tabs .product-tabs-nav a.product-tabs__nav--current').removeClass('product-tabs__nav--current');
    	$(this).addClass('product-tabs__nav--current');
  	});
  	$('.product-tabs .product-tabs-nav a.short-desc').click(function(){
  		$('.product-tabs .product-tabs__panel div.current').removeClass('current');
    	$('.product-tabs .product-tabs__panel #short-desc').addClass('current');
  	});
  	$('.product-tabs .product-tabs-nav a.guarantee').click(function(){
  		$('.product-tabs .product-tabs__panel div.current').removeClass('current');
    	$('.product-tabs .product-tabs__panel #guarantee').addClass('current');
  	});
  	$('.product-tabs .product-tabs-nav a.shipping').click(function(){
  		$('.product-tabs .product-tabs__panel div.current').removeClass('current');
    	$('.product-tabs .product-tabs__panel #shipping').addClass('current');
  	});
  	$(".block-1 ul li img").click(function(){
    	$('.block-1 ul li img.current').removeClass('current');
    	$(this).addClass('current');
    	var select = parseInt($(this).attr('id')) + 1;
    	$('.block-2 div.current').removeClass('current');
    	$('.block-2 div:nth-child('+ select +')').addClass('current');
  	});


    //Phần xử lý để chuột vào xem từng hình bự lên
  	$('.tile')
    // tile mouse actions
    .on('mouseover', function(){
      $(this).children('.photo').css({'transform': 'scale('+ $(this).attr('data-scale') +')'});
    })
    .on('mouseout', function(){
      $(this).children('.photo').css({'transform': 'scale(1)'});
    })
    .on('mousemove', function(e){
      $(this).children('.photo').css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'});
    })
    // tiles set up
    .each(function(){
      $(this)
        // add a photo container
        .append('<div class="photo"></div>')
        // set up a background image for each tile based on data-image attribute
        .children('.photo').css({'background-image': 'url('+ $(this).attr('data-image') +')'});
    });

    $('.product-view .info .addition-straps .slick-track .strap-product').click(function(){
  		$(this).toggleClass('is-added');
  	});


    //Phan FAQs
    $('div.faqs div.content div.container div.block-faq div.cover div.one-block a.open-faq').click(function(){
      $(this).toggleClass('active');
      $(this).parent().children('div.hidden').slideToggle();
    });


    //Phần Reply Feedback
  	$('div.feed-back div.container div.header div.row div.col-6 a.open-write-review').click(function(){
      $('.feed-back #message').slideUp();
      $('.feed-back #error-message').slideUp();
  		$('div.feed-back div.container div.form-review').slideToggle();
  	});

  	$('div.feed-back div.container div.review-customer div.one-review div.timing a').click(function(){
      $(this).parent().parent().children('div.form-reply').slideToggle();
  	});




    //Hiển thị hình ảnh account khi select
    function readIMG(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#avatar-img").change(function(){
        readIMG(this);
    });




    //Xử Lý ajax cho phần Review
    $('#form-review form').submit(function(event){

      event.preventDefault();

      var bool = false;

      if ($('#form-review form input[name=Name]').val().length < 2 ) {
        bool = true;
      }

      if ( $('#form-review form input[name=Email]').val().length < 5 ) {
        bool = true;
      }

      if ( $('#form-review form input[name=Title]').val().length < 10 ) {
        bool = true;
      }

      if ( $('#form-review form textarea[name=content]').val().length < 20 ) {
        bool = true;
      }

      if (!$('#form-review form input[name=star]:checked').val()) {
        bool = true;
      }

      $.ajax({

        url: 'watch.php',
        method: 'POST',
        data: {
          IdCustomer  : $('#form-review form input[name=IdCustomer]').val(),
          Avatar      : $('#form-review form input[name=Avatar]').val(),
          Name        : $('#form-review form input[name=Name]').val(),
          Email       : $('#form-review form input[name=Email]').val(),
          IdWatch     : $('#form-review form input[name=IdWatch]').val(),
          Title       : $('#form-review form input[name=Title]').val(),
          content     : $('#form-review form textarea[name=content]').val(),
          star        : $('#form-review form input[name=star]:checked').val(),
          send        : true
        },
        beforeSend: function(){
          $('#form-review form button').html('<img src="lib/images/background/ajax-loader.gif" />');
        },
        success: function(respone){
          $('#form-review form input[name=Title]').val('');
          $('#form-review form textarea[name=content]').val('');
          $('#form-review form input[name=star]').prop("checked", false);
          $('#form-review form button').html('send review');
          $('#form-review').slideUp();
          if (bool) {
            $('.feed-back #error-message p').html('Failed to send feedback!');
            $('.feed-back #error-message').slideDown();
          } else {
            $('.feed-back #message p').html('Thanks for sending feedback!');
            $('.feed-back #message').slideDown();
          }
          
        }

      });

    });

  $('#form-register').submit(function(event){
    $('#form-register button').html('<img src="lib/images/background/ajax-loader.gif" />');
  });

  $('#form-login').submit(function(event){
    $('#form-login button').html('<img src="lib/images/background/ajax-loader.gif" />');
  });

  $('#form-update').submit(function(event){
    $('#form-update button#update').html('<img src="lib/images/background/ajax-loader.gif" />');
  });


});