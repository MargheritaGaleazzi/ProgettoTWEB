@extends('layout.zonaPubblica')

@section('title', 'FAQ')

@section('content')

<div class="aboutbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="abouttitlepage">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

<<<<<<< Updated upstream
      <section class="faq">
        <ul class="categories">
          <li><a class="selected" href="#basics">Basics</a></li>
          <li><a href="#mobile">Mobile</a></li>
          <li><a href="#account">Account</a></li>
        </ul> <!-- categories -->
      
        <div class="faq-items">
          <ul id="basics" class="faq-group">
            <li class="faq-title"><h2>Basics</h2></li>
            <li>
              <a class="trigger" href="#0">How do I change my password?</a>
              <div class="faq-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non a ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et. Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem! Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem atque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.</p>
              </div> <!-- faq-content -->
            </li>
      
            <li>
              <a class="trigger" href="#0">How do I sign up?</a>
              <div class="faq-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cupiditate et laudantium esse adipisci consequatur modi possimus accusantium vero atque excepturi nobis in doloremque repudiandae soluta non minus dolore voluptatem enim reiciendis officia voluptates, fuga ullam? Voluptas reiciendis cumque molestiae unde numquam similique quas doloremque non, perferendis doloribus necessitatibus itaque dolorem quam officia atque perspiciatis dolore laudantium dolor voluptatem eligendi? Aliquam nulla unde voluptatum molestiae, eos fugit ullam, consequuntur, saepe voluptas quaerat deleniti. Repellendus magni sint temporibus, accusantium rem commodi?</p>
              </div> <!-- faq-content -->
            </li>
      
            <li>
              <a class="trigger" href="#0">Can I remove a post?</a>
              <div class="faq-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
              </div> <!-- faq-content -->
            </li>
      
            <li>
              <a class="trigger" href="#0">How do reviews work?</a>
              <div class="faq-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
              </div> <!-- faq-content -->
            </li>
          </ul> <!-- faq-group -->
        </div> <!-- faq-items -->

        <a href="#0" class="cd-close-panel">Close</a>

      </section> <!-- faq -->

  <script>

        jQuery(document).ready(function($){

    var MqM= 768,
      MqL = 1024;

    var faqsSections = $('.faq-group'),
      faqTrigger = $('.trigger'),
      faqsContainer = $('.faq-items'),
      faqsCategoriesContainer = $('.categories'),
      faqsCategories = faqsCategoriesContainer.find('a'),
      closeFaqsContainer = $('.cd-close-panel');

    //select a faq section 
    faqsCategories.on('click', function(event){
      event.preventDefault();
      var selectedHref = $(this).attr('href'),
        target= $(selectedHref);
      if( $(window).width() < MqM) {
        faqsContainer.scrollTop(0).addClass('slide-in').children('ul').removeClass('selected').end().children(selectedHref).addClass('selected');
        closeFaqsContainer.addClass('move-left');
        $('body').addClass('cd-overlay');
      } else {
            $('body,html').animate({ 'scrollTop': target.offset().top - 19}, 200); 
      }
    });

    //close faq lateral panel - mobile only
    $('body').bind('click touchstart', function(event){
      if( $(event.target).is('body.cd-overlay') || $(event.target).is('.cd-close-panel')) { 
        closePanel(event);
      }
    });
    faqsContainer.on('swiperight', function(event){
      closePanel(event);
    });


    faqTrigger.on('click', function(event){
      event.preventDefault();
      $(this).next('.faq-content').slideToggle(200).end().parent('li').toggleClass('content-visible');
    });

    $(window).on('scroll', function(){
      if ( $(window).width() > MqL ) {
        (!window.requestAnimationFrame) ? updateCategory() : window.requestAnimationFrame(updateCategory); 
      }
    });

    $(window).on('resize', function(){
      if($(window).width() <= MqL) {
        faqsCategoriesContainer.removeClass('is-fixed').css({
          '-moz-transform': 'translateY(0)',
            '-webkit-transform': 'translateY(0)',
          '-ms-transform': 'translateY(0)',
          '-o-transform': 'translateY(0)',
          'transform': 'translateY(0)',
        });
      } 
      if( faqsCategoriesContainer.hasClass('is-fixed') ) {
        faqsCategoriesContainer.css({
          'left': faqsContainer.offset().left,
        });
      }
    });

    function closePanel(e) {
      e.preventDefault();
      faqsContainer.removeClass('slide-in').find('li').show();
      closeFaqsContainer.removeClass('move-left');
      $('body').removeClass('cd-overlay');
    }

    function updateCategory(){
      updateCategoryPosition();
      updateSelectedCategory();
    }

    function updateCategoryPosition() {
      var top = $('.faq').offset().top,
        height = jQuery('.faq').height() - jQuery('.categories').height(),
        margin = 20;
      if( top - margin <= $(window).scrollTop() && top - margin + height > $(window).scrollTop() ) {
        var leftValue = faqsCategoriesContainer.offset().left,
          widthValue = faqsCategoriesContainer.width();
        faqsCategoriesContainer.addClass('is-fixed').css({
          'left': leftValue,
          'top': margin,
          '-moz-transform': 'translateZ(0)',
            '-webkit-transform': 'translateZ(0)',
          '-ms-transform': 'translateZ(0)',
          '-o-transform': 'translateZ(0)',
          'transform': 'translateZ(0)',
        });
      } else if( top - margin + height <= $(window).scrollTop()) {
        var delta = top - margin + height - $(window).scrollTop();
        faqsCategoriesContainer.css({
          '-moz-transform': 'translateZ(0) translateY('+delta+'px)',
            '-webkit-transform': 'translateZ(0) translateY('+delta+'px)',
          '-ms-transform': 'translateZ(0) translateY('+delta+'px)',
          '-o-transform': 'translateZ(0) translateY('+delta+'px)',
          'transform': 'translateZ(0) translateY('+delta+'px)',
        });
      } else { 
        faqsCategoriesContainer.removeClass('is-fixed').css({
          'left': 0,
          'top': 0,
        });
      }
    }

    function updateSelectedCategory() {
      faqsSections.each(function(){
        var actual = $(this),
          margin = parseInt($('.faq-title').eq(1).css('marginTop').replace('px', '')),
          activeCategory = $('.categories a[href="#'+actual.attr('id')+'"]'),
          topSection = (activeCategory.parent('li').is(':first-child')) ? 0 : Math.round(actual.offset().top);
        
        if ( ( topSection - 20 <= $(window).scrollTop() ) && ( Math.round(actual.offset().top) + actual.height() + margin - 20 > $(window).scrollTop() ) ) {
          activeCategory.addClass('selected');
        }else {
          activeCategory.removeClass('selected');
        }
      });
    }
    });
    </script>
      
      

=======
    <div class="container">
        
        
        <div class="accordion">
          <div class="accordion-item">
            <a>What can JavaScript Do?</a>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
          <div class="accordion-item">
            <a>How JavaScript Can Modify HTML and CSS Values?</a>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
          <div class="accordion-item">
            <a>What Is SVG?</a>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
          <div class="accordion-item">
            <a>Is FAQ Section Matters In Website?</a>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
          <div class="accordion-item">
            <a>How To Create a Light FAQ Element?</a>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
        </div>
      </div>
>>>>>>> Stashed changes
@endsection
