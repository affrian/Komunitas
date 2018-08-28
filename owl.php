
    <!-- Owl Carousel Assets -->
    <link href="asset/owl_carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="asset/owl_carousel/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="asset/owl_carousel/owl-carousel/owl.transitions.css" rel="stylesheet">

    <link href="asset/owl_carousel/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  
    

     
   
    <div id="title">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h1>CSS3 Transitions</h1>
          </div>
        </div>
      </div>
    </div>

      <div id="demo">
        <div class="container">
          <div class="row">
            <div class="span12">

              <div id="owl-demo" class="owl-carousel">
                <div class="item"><img src="asset/images/cover.jpg" alt="Owl Image"></div>
                <div class="item"><img src="assets/owl2.jpg" alt="Owl Image"></div>
                <div class="item"><img src="assets/owl3.jpg" alt="Owl Image"></div>
                <div class="item"><img src="assets/owl4.jpg" alt="Owl Image"></div>
                <div class="item"><img src="assets/owl5.jpg" alt="Owl Image"></div>
                <div class="item"><img src="assets/owl6.jpg" alt="Owl Image"></div>
                <div class="item"><img src="assets/owl7.jpg" alt="Owl Image"></div>
                <div class="item"><img src="assets/owl8.jpg" alt="Owl Image"></div>
              </div>
              
            </div>
          </div>
        </div>

    </div>

    <script src="asset/owl_carousel/owl-carousel/owl.carousel.js"></script>

    <!-- Demo -->

    <style>
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>


    <script>
    $(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel({
        navigation : true,
        singleItem : true,
        transitionStyle : "fade"
      });

      //Select Transtion Type
      $("#transitionType").change(function(){
        var newValue = $(this).val();

        //TransitionTypes is owlCarousel inner method.
        owl.data("owlCarousel").transitionTypes(newValue);

        //After change type go to next slide
        owl.trigger("owl.next");
      });
    });
    </script>

    <script src="asset/owl_carousel/assets/js/bootstrap-collapse.js"></script>
    <script src="assetasset/owl_carousel/assets/js/bootstrap-transition.js"></script>
    <script src="asset/owl_carousel/assets/js/bootstrap-tab.js"></script>

    <script src="assetasset/owl_carousel/assets/js/google-code-prettify/prettify.js"></script>
    <script src="asset/owl_carousel/assets/js/application.js"></script>

