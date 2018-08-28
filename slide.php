<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Example - jQuery SilverTrack</title>

  <meta name="description" content="A smart and very extensible jquery sliding carousel">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=8" />

  <link rel="stylesheet" href="../silver/example/css/gh-buttons.css" type="text/css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="../silver/example/css/style.css" type="text/css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="../silver/example/css/responsive.css" type="text/css" media="screen" charset="utf-8">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript" src="../silver/lib/jquery-easing-1.3.0.js"></script>
  <script type="text/javascript" src="../silver/lib/modernizr.mediaqueries.transforms3d.js"></script>
  <script type="text/javascript" src="../silver/lib/responsive-hub.js"></script>
  <script type="text/javascript" src="../silver/src/jquery.silver_track.js" charset="utf-8"></script>
  <script type="text/javascript" src="../silver/src/plugins/jquery.silver_track.navigator.js" charset="utf-8"></script>
  <script type="text/javascript" src="../silver/src/plugins/jquery.silver_track.bullet_navigator.js" charset="utf-8"></script>
  <script type="text/javascript" src="../silver/src/plugins/jquery.silver_track.remote_content.js" charset="utf-8"></script>
  <script type="text/javascript" src="../silver/src/plugins/jquery.silver_track.responsive_hub_connector.js" charset="utf-8"></script>
  <script type="text/javascript" src="../silver/src/plugins/jquery.silver_track.css3_animation.js" charset="utf-8"></script>
  <script type="text/javascript" src="../silver/src/plugins/jquery.silver_track.circular_navigator.js" charset="utf-8"></script>

  <script type="text/javascript" src="../silver/example/js/script.js" charset="utf-8"></script>
  <script type="text/javascript" src="../silver/example/js/example1.js" charset="utf-8"></script>
  <script type="text/javascript" src="../silver/example/js/example2_and_3.js" charset="utf-8"></script>
  <script type="text/javascript" src="../silver/example/js/example4.js" charset="utf-8"></script>
  <script type="text/javascript" src="../silver/example/js/example5.js" charset="utf-8"></script>
  <script type="text/javascript" src="../silver/example/js/example6.js" charset="utf-8"></script>
  <script type="text/javascript" src="../silver/example/js/example7.js" charset="utf-8"></script>

  <script>
    $(function() {
      $.responsiveHub({
        layouts: {
          480:  "phone",
          481:  "small-tablet",
          731:  "tablet",
          981:  "web"
        },
        defaultLayout: "web"
      });
    });
  </script>
</head>
<body>

 

  <div class="track example-3">
    <div class="inner">
      <h2>Cover 2</h2>
      <div class="view-port">
        <div id="example-3" class="slider-container huge">
          <div class="item cover cover-2">
            <div class="side-a">
              <img src="http://ib3.huluim.com/show/70?size=476x268">
              <div class="img-area">
                <div class="img-block">
                  <img src="http://ib1.huluim.com/show/1968?size=220x124">
                </div>
                <div class="img-block">
                  <img src="http://ib1.huluim.com/show/2252?size=220x124">
                </div>
              </div>
            </div>
            <div class="side-b">
              <img src="http://ib4.huluim.com/show/2103?size=476x268">
              <div class="img-area">
                <div class="img-block">
                  <img src="http://ib3.huluim.com/show/902?size=220x124">
                </div>
                <div class="img-block">
                  <img src="http://ib3.huluim.com/show/54?size=220x124">
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="img-block">
              <img src="http://ib2.huluim.com/show/9673?size=220x124">
            </div>
            <div class="img-block">
              <img src="http://ib3.huluim.com/show/8290?size=220x124">
            </div>
            <div class="img-block">
              <img src="http://ib4.huluim.com/show/903?size=220x124">
            </div>
          </div>
          <div class="item">
            <div class="img-block">
              <img src="http://ib2.huluim.com/show/7529?size=220x124">
            </div>
            <div class="img-block">
              <img src="http://ib1.huluim.com/show/44?size=220x124">
            </div>
            <div class="img-block">
              <img src="http://ib1.huluim.com/show/7528?size=220x124">
            </div>
          </div>
          <div class="item">
            <div class="img-block">
              <img src="http://ib2.huluim.com/show/389?size=220x124">
            </div>
            <div class="img-block">
              <img src="http://ib3.huluim.com/show/11226?size=220x124">
            </div>
            <div class="img-block">
              <img src="http://ib3.huluim.com/show/11430?size=220x124">
            </div>
          </div>
          <div class="item">
            <div class="img-block">
              <img src="http://ib4.huluim.com/show/1603?size=220x124">
            </div>
            <div class="img-block">
              <img src="http://ib2.huluim.com/show/53?size=220x124">
            </div>
            <div class="img-block">
              <img src="http://ib1.huluim.com/show/11248?size=220x124">
            </div>
          </div>
          <div class="item">
            <div class="img-block">
              <img src="http://ib2.huluim.com/show/2553?size=220x124">
            </div>
            <div class="img-block">
              <img src="http://ib4.huluim.com/show/7555?size=220x124">
            </div>
            <div class="img-block">
              <img src="http://ib4.huluim.com/show/11431?size=220x124">
            </div>
          </div>
          <div class="item">
            <div class="img-block">
              <img src="http://ib2.huluim.com/show/11253?size=220x124">
            </div>
            <div class="img-block">
              <img src="http://ib4.huluim.com/show/6979?size=220x124">
            </div>
            <div class="img-block">
              <img src="http://ib3.huluim.com/show/10?size=220x124">
            </div>
          </div>
        </div>
      </div>

      <div class="bullet-pagination"></div>
      <div class="actions button-group">
        <a href="#" class="button primary icon reload">Restart</a>
      </div>
    </div>

    <div class="pagination">
      <a href="#" class="prev disabled"></a>
      <a href="#" class="next disabled"></a>
    </div>
  </div>

</body>
</html>