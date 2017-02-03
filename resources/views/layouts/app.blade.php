<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>{{ config('app.name', 'Laravel') }}</title>
<link href="image/favicon.png" rel="icon" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="clean modern and elegant corporate look eCommerce html template">
<meta name="author" content="">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/slideshow.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen" />
<link rel="stylesheet" type="text/css" href="js/colorbox/colorbox.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/carousel.css" media="screen" />
<!-- CSS Part End-->
<!-- JS Part Start-->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/cloud_zoom.js"></script>
<script type="text/javascript" src="js/jquery.dcjqaccordion.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/html5.js"></script>
<!-- JS Part End-->
<!-- Google Fonts (Droid Sans) Start -->
<link href='//fonts.googleapis.com/css?family=Droid+Sans&v1' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=&v1' rel='stylesheet' type='text/css'>
<!-- Google Fonts (Droid Sans) End -->
</head>
<body>
<div class="wrapper-box">
  <div class="main-wrapper">
    <!--Header Part Start-->
    <header id="header">
      <div class="htop">
        <div id="language"> <span>Language<b></b></span>
          <ul>
            <li><a title="English"><img src="image/flags/gb.png" alt="English" />English</a></li>
            <li><a title="Türkçe"><img src="image/flags/tr.png" alt="Türkçe" />Türkçe</a></li>
          </ul>
        </div>
        <div id="currency"> <span>Currency<b></b></span>
          <ul>
            <li> <a title="Euro">€ - Euro</a> </li>
            <li> <a title="Pound Sterling">£ - Pound Sterling</a> </li>
            <li> <a title="US Dollar"><b>$ - US Dollar</b></a> </li>
          </ul>
        </div>
        <div class="links"> <a href="login">Login</a> <a href="register.html">Register</a> <a href="#" id="wishlist-total">Wish List (0)</a> <a href="#">My Account</a> <a href="checkout.html">Checkout</a> </div>
      </div>
      <section class="hsecond">
        <div id="logo"><a href="/"><img src="image/logo.png" title="Polishop" alt="Polishop" /></a></div>
        <div id="search">
          <div class="button-search"></div>
          <input type="text" name="search" placeholder="Search" value="" />
        </div>
        <!--Mini Shopping Cart Start-->
        <section id="cart">
          <div class="heading">
            <h4><img width="32" height="32" alt="" src="image/cart-bg.png"></h4>
            <a><span id="cart-total">2 item(s) - $710.18</span></a> </div>
          <div class="content">
            <div class="mini-cart-info">
              <table>
                <tr>
                  <td class="image"><a href="product"><img src="image/product/lotto-sports-shoes-white-47x47.jpg" alt="Lotto Sports Shoes" title="Lotto Sports Shoes" /></a></td>
                  <td class="name"><a href="product">Lotto Sports Shoes</a></td>
                  <td class="quantity">x&nbsp;1</td>
                  <td class="total">$589.50</td>
                  <td class="remove"><img src="image/remove-small.png" alt="Remove" title="Remove" /></td>
                </tr>
                <tr>
                  <td class="image"><a href="product"><img src="image/product/iphone_1-47x47.jpg" alt="iPhone 4s" title="iPhone 4s" /></a></td>
                  <td class="name"><a href="product">iPhone 4s</a></td>
                  <td class="quantity">x&nbsp;1</td>
                  <td class="total">$120.68</td>
                  <td class="remove"><img src="image/remove-small.png" alt="Remove" title="Remove" /></td>
                </tr>
              </table>
            </div>
            <div class="mini-cart-total">
              <table>
                <tr>
                  <td class="right"><b>Sub-Total:</b></td>
                  <td class="right">$601.00</td>
                </tr>
                <tr>
                  <td class="right"><b>Eco Tax (-2.00):</b></td>
                  <td class="right">$4.00</td>
                </tr>
                <tr>
                  <td class="right"><b>VAT (17.5%):</b></td>
                  <td class="right">$105.18</td>
                </tr>
                <tr>
                  <td class="right"><b>Total:</b></td>
                  <td class="right">$710.18</td>
                </tr>
              </table>
            </div>
            <div class="checkout"><a class="button" href="cart">View Cart</a> &nbsp; <a class="button" href="checkout">Checkout</a></div>
          </div>
        </section>
        <!--Mini Shopping Cart End-->
        <div class="clear"></div>
      </section>
      <!--Top Menu(Horizontal Categories) Start-->
      <nav id="menu">
        <ul>
          <li class="home"><a title="Home" href="/"><span>Home</span></a></li>
          <li class="categories_hor"><a>Categories</a>
            <div>
              <div class="column"> <a href="category">Electronics</a>
                <div>
                  <ul>
                    <li><a href="category">Laptops (0)</a></li>
                    <li><a href="category">Desktops (0)</a></li>
                    <li><a href="category">Components (1)</a></li>
                    <li><a href="category">Software (1)</a></li>
                    <li><a href="category">Phones &amp; PDAs (4)</a></li>
                    <li><a href="category">Cameras (2)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Jewellery</a>
                <div>
                  <ul>
                    <li><a href="category">Children's Jewellery (0)</a></li>
                    <li><a href="category">Men's Jewellery (1)</a></li>
                    <li><a href="category">Women's Jewellery (0)</a></li>
                    <li><a href="category">Sample Test (0)</a></li>
                    <li><a href="category">Sample Test11 (0)</a></li>
                    <li><a href="category">Sample Test12 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Shoes</a>
                <div>
                  <ul>
                    <li><a href="category">Children's Shoes (1)</a></li>
                    <li><a href="category">Men's Shoes (2)</a></li>
                    <li><a href="category">Women's Shoes (1)</a></li>
                    <li><a href="category">Test Sample (0)</a></li>
                    <li><a href="category">Test Sample1 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Clothing</a>
                <div>
                  <ul>
                    <li><a href="category">Men (1)</a></li>
                    <li><a href="category">Women (1)</a></li>
                    <li><a href="category">Boys (0)</a></li>
                    <li><a href="category">Girls (0)</a></li>
                    <li><a href="category">Accessories (0)</a></li>
                    <li><a href="category">Sample Test21 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Kids</a>
                <div>
                  <ul>
                    <li><a href="category">Toys Kids (0)</a></li>
                    <li><a href="category">Games (1)</a></li>
                    <li><a href="category">Sample Test22 (0)</a></li>
                    <li><a href="category">Sample Test15 (1)</a></li>
                    <li><a href="category">Sample Kids (1)</a></li>
                    <li><a href="category">Sample Test6 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Watches</a>
                <div>
                  <ul>
                    <li><a href="category">Women's Watches (1)</a></li>
                    <li><a href="category">Men's Watches (0)</a></li>
                    <li><a href="category">Children's Watches (1)</a></li>
                    <li><a href="category">Sample16 (0)</a></li>
                    <li><a href="category">Sample17 (0)</a></li>
                    <li><a href="category">test 18 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Sports</a>
                <div>
                  <ul>
                    <li><a href="category">Women's Sports (1)</a></li>
                    <li><a href="category">Children's Sports (0)</a></li>
                    <li><a href="category">Men's Sports (1)</a></li>
                    <li><a href="category">test 7 (0)</a></li>
                    <li><a href="category">Sample 8 (0)</a></li>
                    <li><a href="category">test 9 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Health</a>
                <div>
                  <ul>
                    <li><a href="category">Sample Test1 (1)</a></li>
                    <li><a href="category">Sample Test2 (0)</a></li>
                    <li><a href="category">test 20 (0)</a></li>
                    <li><a href="category">test 21 (0)</a></li>
                    <li><a href="category">test 22 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Furniture</a>
                <div>
                  <ul>
                    <li><a href="category">Bedrooms Furniture (0)</a></li>
                    <li><a href="category">Kidsrooms furniture (0)</a></li>
                    <li><a href="category">Kitchen Furniture (1)</a></li>
                    <li><a href="category">Showcase Furniture (0)</a></li>
                    <li><a href="category">Table Furniture (1)</a></li>
                    <li><a href="category">Wall Furniture (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"><a href="category">Books</a>
                <div>
                  <ul>
                    <li><a href="category">Audio Books (1)</a></li>
                    <li><a href="category">Comedy Book (1)</a></li>
                    <li><a href="category">Comics Books (0)</a></li>
                    <li><a href="category">Computer Book (1)</a></li>
                    <li><a href="category">Cookies Books (0)</a></li>
                    <li><a href="category">English Books (1)</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li><a target="_blank" href="#">Headers</a>
            <div>
              <ul>
                <li><a href="/">Header Style 1</a></li>
                <li><a href="header-footer-2">Header Style 2</a></li>
                <li><a href="header-footer-3">Header Style 3</a></li>
              </ul>
            </div>
          </li>
          <li><a target="_blank" href="#">Menus</a>
            <div>
              <ul>
                <li><a href="/">Horizontal Categories</a></li>
                <li><a href="header-footer-2">Vertical Categories</a></li>
                <li><a href="header-footer-3">Simple Categories</a></li>
              </ul>
            </div>
          </li>
          <li><a target="_blank" href="#">Sliders</a>
            <div>
              <ul>
                <li><a href="/">Nivo Slider</a></li>
                <li><a href="header-footer-2">Flex Slider</a></li>
              </ul>
            </div>
          </li>
          <li><a target="_blank" href="#">Footers</a>
            <div>
              <ul>
                <li><a href="/">Footer Style 1</a></li>
                <li><a href="header-footer-2">Footer Style 2</a></li>
                <li><a href="header-footer-3">Footer Style 3</a></li>
              </ul>
            </div>
          </li>
          <li><a href="">Custom Block</a>
            <div class="custom_block">
              <ul>
                <li>
                  <table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
                    <tbody>
                      <tr>
                        <td><h3>You can insert any content here.</h3>
                          <p>&nbsp;</p></td>
                      </tr>
                      <tr>
                        <td><strong><img alt="responsive" src="image/product/responsive.jpg" style="width: 250px; height: 150px; border-width: 0px; border-style: solid; float: left; margin-left: 10px; margin-right: 10px;" />Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</td>
                      </tr>
                    </tbody>
                  </table>
                </li>
              </ul>
            </div>
          </li>
          <li><a>My Account</a>
            <div>
              <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Order History</a></li>
                <li><a href="#" id="wishlist-total">Wish List (0)</a></li>
                <li><a href="#">Newsletter</a></li>
              </ul>
            </div>
          </li>
          <li><a>Information</a>
            <div>
              <ul>
                <li><a href="about">About Us</a></li>
                <li><a href="about">Delivery Information</a></li>
                <li><a href="about">Privacy Policy</a></li>
                <li><a href="elements">Elements</a></li>
              </ul>
            </div>
          </li>
          <li><a href="contact">Contact Us</a></li>
        </ul>
      </nav>
      <!--Top Menu(Horizontal Categories) End-->
      <!-- Mobile Menu Start-->
      <nav id="menu" class="m-menu"> <span>Menu</span>
        <ul>
          <li class="categories"><a>Categories</a>
            <div>
              <div class="column"> <a href="category">Electronics</a>
                <div>
                  <ul>
                    <li><a href="category">Laptops (0)</a></li>
                    <li><a href="category">Desktops (0)</a></li>
                    <li><a href="category">Components (1)</a></li>
                    <li><a href="category">Software (1)</a></li>
                    <li><a href="category">Phones &amp; PDAs (4)</a></li>
                    <li><a href="category">Cameras (2)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Jewellery</a>
                <div>
                  <ul>
                    <li><a href="category">Children's Jewellery (0)</a></li>
                    <li><a href="category">Men's Jewellery (1)</a></li>
                    <li><a href="category">Women's Jewellery (0)</a></li>
                    <li><a href="category">Sample Test (0)</a></li>
                    <li><a href="category">Sample Test11 (0)</a></li>
                    <li><a href="category">Sample Test12 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Shoes</a>
                <div>
                  <ul>
                    <li><a href="category">Children's Shoes (1)</a></li>
                    <li><a href="category">Men's Shoes (2)</a></li>
                    <li><a href="category">Women's Shoes (1)</a></li>
                    <li><a href="category">Test Sample (0)</a></li>
                    <li><a href="category">Test Sample1 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Clothing</a>
                <div>
                  <ul>
                    <li><a href="category">Men (1)</a></li>
                    <li><a href="category">Women (1)</a></li>
                    <li><a href="category">Boys (0)</a></li>
                    <li><a href="category">Girls (0)</a></li>
                    <li><a href="category">Accessories (0)</a></li>
                    <li><a href="category">Sample Test21 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Kids</a>
                <div>
                  <ul>
                    <li><a href="category">Toys Kids (0)</a></li>
                    <li><a href="category">Games (1)</a></li>
                    <li><a href="category">Sample Test22 (0)</a></li>
                    <li><a href="category">Sample Test15 (1)</a></li>
                    <li><a href="category">Sample Kids (1)</a></li>
                    <li><a href="category">Sample Test6 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Watches</a>
                <div>
                  <ul>
                    <li><a href="category">Women's Watches (1)</a></li>
                    <li><a href="category">Men's Watches (0)</a></li>
                    <li><a href="category">Children's Watches (1)</a></li>
                    <li><a href="category">Sample16 (0)</a></li>
                    <li><a href="category">Sample17 (0)</a></li>
                    <li><a href="category">test 18 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Sports</a>
                <div>
                  <ul>
                    <li><a href="category">Women's Sports (1)</a></li>
                    <li><a href="category">Children's Sports (0)</a></li>
                    <li><a href="category">Men's Sports (1)</a></li>
                    <li><a href="category">test 7 (0)</a></li>
                    <li><a href="category">Sample 8 (0)</a></li>
                    <li><a href="category">test 9 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Health</a>
                <div>
                  <ul>
                    <li><a href="category">Sample Test1 (1)</a></li>
                    <li><a href="category">Sample Test2 (0)</a></li>
                    <li><a href="category">test 20 (0)</a></li>
                    <li><a href="category">test 21 (0)</a></li>
                    <li><a href="category">test 22 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category">Furniture</a>
                <div>
                  <ul>
                    <li><a href="category">Bedrooms Furniture (0)</a></li>
                    <li><a href="category">Kidsrooms furniture (0)</a></li>
                    <li><a href="category">Kitchen Furniture (1)</a></li>
                    <li><a href="category">Showcase Furniture (0)</a></li>
                    <li><a href="category">Table Furniture (1)</a></li>
                    <li><a href="category">Wall Furniture (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"><a href="category">Books</a>
                <div>
                  <ul>
                    <li><a href="category">Audio Books (1)</a></li>
                    <li><a href="category">Comedy Book (1)</a></li>
                    <li><a href="category">Comics Books (0)</a></li>
                    <li><a href="category">Computer Book (1)</a></li>
                    <li><a href="category">Cookies Books (0)</a></li>
                    <li><a href="category">English Books (1)</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <!-- Mobile Menu End-->
    </header>
  <!--Header Part End-->

        @yield('content')
  <!--Footer Part Start-->
  <footer id="footer">
    <div class="fpart-inner">
      <div class="social-part">
        <!-- Custom Column Part Start-->
        <div class="custom_column part3">
          <h3>Custom Column</h3>
          <p>You can insert any content here.<br>
            <br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br>
            <br>
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic. <br><br>It has survived not only five centuries, but also the leap into electronic.</p>
        </div>
        <!-- Custom Column Part End-->
        <!-- Twitter Feeds Part Start-->
        <div id="twitter_footer" class="part3">
          <h3>Twitter Feed</h3>
          <div class="twitter_footer">
<!-- <a class="twitter-timeline" href="https://twitter.com/adidas" data-chrome="noheader nofooter noborders transparent" data-theme="dark" data-height="250"  data-related="twitterapi,twitter" data-aria-polite="assertive" data-widget-id="347621595801608192">Tweets by @adidas</a> -->

<a class="twitter-timeline" href="https://twitter.com/adidas" data-chrome="noheader nofooter noborders transparent" data-theme="dark" data-height="250"  data-related="twitterapi,twitter" data-aria-polite="assertive" >Tweets by adidas</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
        </div>
        <!-- Twitter Feeds Part End-->
        <!-- Facebook Box Part Start-->
        <div id="facebook" class="part3">
        <h3>Join us on Facebook</h3>
  <div class="fb-page" data-href="http://www.facebook.com/WebDev.less" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"></div></div>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</div>
        <!-- Facebook Box Part End-->
      </div>
      <div class="column">
        <h3>Information</h3>
        <ul>
          <li><a href="about">About Us</a></li>
          <li><a href="about">Delivery Information</a></li>
          <li><a href="about">Privacy Policy</a></li>
          <li><a href="elements">Elements</a></li>
        </ul>
      </div>
      <div class="column">
        <h3>Customer Service</h3>
        <ul>
          <li><a href="contact-us">Contact Us</a></li>
          <li><a href="#">Returns</a></li>
          <li><a href="sitemap">Site Map</a></li>
        </ul>
      </div>
      <div class="column">
        <h3>Extras</h3>
        <ul>
          <li><a href="#">Brands</a></li>
          <li><a href="#">Gift Vouchers</a></li>
          <li><a href="#">Affiliates</a></li>
          <li><a href="#">Specials</a></li>
        </ul>
      </div>
      <div class="column">
        <h3>My Account</h3>
        <ul>
          <li><a href="#">My Account</a></li>
          <li><a href="#">Order History</a></li>
          <li><a href="#">Wish List</a></li>
          <li><a href="#">Newsletter</a></li>
        </ul>
      </div>
      <!-- Contact Details Start-->
      <div class="contact contact_icon">
        <h3>Contact Us</h3>
        <ul>
          <li class="address">King Mongkut's Institute of Technology Ladkrabang. Chalongkrung Rd. Ladkrabang, Bangkok Thailand 10520</li>
          <li class="mobile">+91 9896989598</li>
          <li class="fax">+91 9896989598</li>
          <li class="email"><a href="mailto:btophen06@gmail.com">btophen06@gmail.com</a></li>
        </ul>
      </div>
      <!-- Contact Details End-->
      <div class="clear"></div>
      <div id="powered">
        <!-- Payment Images Icon Start-->
        <div class="payments_types part3"> <img src="image/payment_paypal.png" alt="paypal" title="PayPal"> <img src="image/payment_american.png" alt="american-express" title="American Express"> <img src="image/payment_2checkout.png" alt="2checkout" title="2checkout"> <img src="image/payment_maestro.png" alt="maestro" title="Maestro"> <img src="image/payment_discover.png" alt="discover" title="Discover"> </div>
        <!-- Payment Images Icon End-->
        <!-- Powered by Text Start-->
        <div class="powered_text part3">
          <p>Polishop Template © 2013<br />
            Development By <a target="_blank" href="https://www.facebook.com/btophen">Pattarapon Design</a></p>
        </div>
        <!-- Powered by Text End-->
        <!-- Follow Social Icons Start-->
        <div class="social part3"> <a href="https://www.facebook.com/btophen" target="_blank"><img src="image/facebook.png" alt="Facebook" title="Facebook"></a> 
        <a href="https://twitter.com/#!/harnishdesign" target="_blank"><img src="image/twitter.png" alt="Twitter" title="Twitter"> </a> <a href="#" target="_blank"> <img src="image/googleplus.png" alt="Google+" title="Google+"> </a> <a href="#" target="_blank"> <img src="image/pinterest.png" alt="Pinterest" title="Pinterest"> </a> <a href="#" target="_blank"> <img src="image/rss.png" alt="RSS" title="RSS"> </a> <a href="http://www.vimeo.com/#" target="_blank"> <img src="image/vimeo.png" alt="Vimeo" title="Vimeo"> </a> </div>
        <!-- Follow Social Icons End-->
        <div class="clear"></div>
      </div>
      <!-- Back to Top Button Start-->
      <div class="back-to-top" id="back-top"><a title="Back to Top" href="javascript:void(0)" class="backtotop">Top</a></div>
      <!-- Back to Top Button End-->
    </div>
  </footer>
  <!--Footer Part End-->
</div>
</body>
</html>