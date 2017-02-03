  @extends('layouts.app')

  @section('content')

    <div id="container">
      <!--Left Part-->
      <div id="column-left">
        <div class="box">
          <div class="box-heading">Information</div>
          <div class="box-content">
            <ul class="list-item">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Delivery Information</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="contact">Contact Us</a></li>
              <li><a href="sitemap">Site Map</a></li>
            </ul>
          </div>
        </div>
        <div class="box">
          <div class="box-heading">Bestsellers</div>
          <div class="box-content">
            <div class="box-product">
              <div class="flexslider">
                <ul class="slides">
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/sony_vaio_1-45x45.jpg" alt="Friendly Jewelry" /></a></div>
                      <div class="name"><a href="product">Friendly Jewelry</a></div>
                      <div class="price">$1,177.00</div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/apple_cinema_30-45x45.jpg" alt="Apple Cinema 30&quot;" /></a></div>
                      <div class="name"><a href="product">Apple Cinema 30&quot;</a></div>
                      <div class="price"><span class="price-old">$119.50</span> <span class="price-new">$107.75</span></div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/ipod_classic_1-45x45.jpg" alt="iPad Classic" /></a></div>
                      <div class="name"><a href="product">iPad Classic</a></div>
                      <div class="price">$119.50</div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/lotto-sports-shoes-white-45x45.jpg" alt="Lotto Sports Shoes" /></a></div>
                      <div class="name"><a href="product">Lotto Sports Shoes</a></div>
                      <div class="price">$589.50</div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product"><img src="image/product/Jeep-Casual-Shoes-45x45.jpg" alt="Jeep-Casual-Shoes" /></a></div>
                      <div class="name"><a href="product">Jeep-Casual-Shoes</a></div>
                      <div class="price">$131.25</div>
                      <div class="clear"></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Left End-->
      <!--Middle Part Start-->
   <div id="content">
        <!--Breadcrumb Part Start-->
        <div class="breadcrumb"><a href="/">Home</a> » <a href="about">About Us</a></div>
        <!--Breadcrumb Part End-->
        <h1>About Us</h1>
        <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
        <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
      </div>
      <!--Middle Part End-->
      <div class="clear"></div>
    </div>
  </div>
   @endsection