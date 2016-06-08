<!DOCTYPE html>
<html >
<head>
    <title>propertyfinder.com</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="Apartment, Real Estate, Flat, Land, Plot, To let, Buy, Sell, Rental, Realtor, Dhaka, Bangladesh" />
    <meta name="generator" content="nopCommerce" />
    
    
            <meta name="viewport" content="width=device-width, initial-scale=1">

    
   <link href="/propertyfinder/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="/propertyfinder/assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="/propertyfinder/assets/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="/propertyfinder/assets/css/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="/propertyfinder/assets/css/owl.theme.css" rel="stylesheet" type="text/css" />
<link href="/propertyfinder/assets/css/color7.css" rel="stylesheet" type="text/css" />
<link href="/propertyfinder/assets/css/sweet-alert.css" rel="stylesheet" type="text/css" />
<link href="/propertyfinder/assets/css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" type="text/css" />
    
    <script src="/propertyfinder/assets/js/modernizr.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/jquery.validate.unobtrusive.min.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/public.common.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/prettyphoto.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/jquery.flexslider.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/helper-plugins.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/bootstrap.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/waypoints.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/init.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/public.ajaxcart.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/sweet-alert.min.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/toggles.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/jquery.mockjax.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/ajax-mocks.js" type="text/javascript"></script>
<script src="/propertyfinder/assets/js/jquery.cascadingdropdown.js" type="text/javascript"></script>


<script>
        $(function() {
        
            $("#RentSell").change(function() {
                $("#PropertyType").load("/propertyfinder/assets/propertydata/" + $(this).val() + ".txt");
            });
            

        });
</script>

<script>
        $(function() {
        
            $("#District").change(function() {
                $("#Area").load("/propertyfinder/assets/locationdata/" + $(this).val() + ".txt");
            });
            

        });
</script>
<link rel="shortcut icon" href="http://www.pbazaar.com/favicon.ico" />
    <!--Powered by nopCommerce - http://www.nopCommerce.com-->
    <!--Copyright (c) 2008-2014-->
</head>
<body>
    


<div id="dialog-notifications-success" title="Notification" style="display:none;">
</div>
<div id="dialog-notifications-error" title="Error" style="display:none;">
</div>
<div id="bar-notification" class="bar-notification">
    <span class="close" title="Close">&nbsp;</span>
</div>




<div class="body">
    
    

<header class="site-header">
    <div class="top-header hidden-xs">
        
        
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-3 header-links-md-5">
            <ul class="horiz-nav pull-left">
                
                <li><span style="font-weight:bold"> <?php echo $username; ?></span></li>
                <li><a href="/propertyfinder/home/yourPosts" class="ico-login">Your Posts</a></li>   
            </ul>
        </div>
        <div class="col-md-9 col-sm-8 header-links-md-7">
            <ul class="horiz-nav pull-right">
                    <li><a href="/propertyfinder/notification/getnotification" ><img src="/propertyfinder/assets/images/notification.png"></a></li>
                    <li><font color="red" size="5"><?php echo $count;?></font></li>
                    
                    <li><a href="/propertyfinder/home/getnewsfeed" class="ico-login">News Feed</a></li>
                    <li><a href="/propertyfinder/home/loaduserinfo" class="ico-register">Edit Info</a></li>
                    <li><a href="/propertyfinder/home/logout" class="ico-login">Log Out</a></li>    
            </ul>
        </div>

    </div>
</div>
    </div>
    <div class="middle-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-4 col-xs-4">
                    <div class="contact-info-blocks hidden-sm hidden-xs">
                        <div>
                            <button class="btn btn-primary btn-lg btn-post" onclick="location.href='/propertyfinder/home/postad'">
                                <i class="fa fa-plus-circle"></i>
                                Post Your Ads
                                
                                
                            </button>
                            
                        </div>
                        <div>
                            <button class="btn btn-primary btn-lg btn-post" onclick="location.href='/propertyfinder/home/requirement'">
                                <i class="fa fa-pencil-square-o"></i>
                                Post Your Requirement
                            </button>
                        </div>
                        <div>
                            
                        </div>
                    </div>

                    <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a>
                    
                </div>
                <div class="col-md-4 col-sm-8 col-xs-8">
                    <h1 class="logo pull-right">
                        <a href=/propertyfinder/home>
                            <img title="" alt="pbazaar.com" src="/propertyfinder/assets/images/logo2.png" class="img-responsive">
                        </a>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    


<div class="main-menu-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navigation">
                    <ul class="sf-menu">
                        
    <li>
        <a href="#">
            Buy
        </a>
                <ul class="dropdown">
    <li>
        <a href="/propertyfinder/buy/apartment">
            Apartment
        </a>

    </li>
    <li>
        <a href="/propertyfinder/buy/commercialspace">
            Commercial Space
        </a>

    </li>
    <li>
        <a href="/propertyfinder/buy/landplot">
            Land/Plot
        </a>

    </li>
    <li>
        <a href="/propertyfinder/buy/shop">
            Shop
        </a>

    </li>
    <li>
        <a href="/propertyfinder/buy/independenthouse">
            Independent House
        </a>

    </li>
                                    </ul>

    </li>
    <li>
        <a href="#">
            Rent
        </a>
                <ul class="dropdown">
    <li>
        <a href="/propertyfinder/rent/residentialapartment">
            Residential Apartment
        </a>

    </li>
    
    <li>
        <a href="#">
            Commercial Space
        </a>
                <ul class="">
    <li>
        <a href="/propertyfinder/rent/apartmentforoffice">
            Apartment for Office
        </a>

    </li>
    <li>
        <a href="/propertyfinder/rent/commercialbuilding">
            Commercial Building
        </a>

    </li>
    <li>
        <a href="/propertyfinder/rent/shop">
            Shop
        </a>

    </li>
    <li>
        <a href="/propertyfinder/rent/warehouse">
            Warehouse
        </a>

    </li>
                                    </ul>

    </li>
    <li>
        <a href="/propertyfinder/rent/independenthouse">
            Independent House
        </a>

    </li>
    <li>
        <a href="#">
            Rooms
        </a>
                <ul class="">
    <li>
        <a href="/propertyfinder/rent/subletwithfamily">
            Sublet with Family
        </a>

    </li>
    <li>
        <a href="/propertyfinder/rent/roommate">
            Roommate
        </a>

    </li>
                                    </ul>

    </li>
    <li>
        <a href="/propertyfinder/rent/garage">
            Garage
        </a>

    </li>
                                    </ul>

    </li>
    <li>
        <a href="/propertyfinder/home/developer">
            Developer
        </a>
    </li>

    <li>
        <a href="/propertyfinder/home/aboutus">
            About Us
        </a>
    </li>
    <li>
        <a href="/propertyfinder/home/contactus">
            Contact Us
        </a>
    </li>
                                <li class="visible-xs">Register</li>
                                <li class="visible-xs"><a href="/en/login" class="ico-login">Log in</a></li>
                        
                        
                    </ul>


                </nav>
            </div>
        </div>
    </div>
</div>



    
    
</header>


<script type="text/javascript">
        AjaxCart.init(false, '.header-links .cart-qty', '.horiz-nav .wishlist-qty', '#flyout-cart');
    </script>


    <div class="main" role="main">
        <div id="content" class="content full">            
            
            <div class="ajax-loading-block-window" style="display: none">
                <div class="loading-image">
                </div>
            </div>
            
        <div class="container">
            <div class="row">
                <div class="col-md-3 sidebar" style="padding-left:10px;padding-right:10px">
                </div>
                <div class="col-md-9">
                        
                <div class="page registration-page">
                    <div class="page-title">
                        <h1>Post Your Ad</h1>
                    </div>

                    <div class="form-fields">
                        <?php echo form_open_multipart('upload/do_upload');?>
                        
                        <fieldset>
                <legend>Select Property Type</legend>
                <div class="form-group" id="pnlRentSell">
                    <label class="col-sm-2 control-label" for="RentSell">Choose type:</label>
                    <span class="required">*</span>
                    <div class="col-sm-4">
                        <select class="form-control" id="RentSell" name="RentSell">
                            <option selected value="base">Select</option>
                            <option value="rent">Rent</option>
                            <option value="sell">Sell</option>
                        </select>
                        <span class="field-validation-valid text-danger" data-valmsg-for="RentSell" data-valmsg-replace="true"></span>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group" id="pnlPropertyType">
                    <label class="col-sm-2 control-label" for="PropertyType">Property type:</label>
                    <span class="required">*</span>
                    <div class="col-sm-4">
                        <select class="form-control" id="PropertyType" name="PropertyType">
                            <option>Select</option>
                        </select>
                    </div>
                </div>
            </fieldset>            
            <fieldset>
                <legend>
                    Location:
                </legend>
                   
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="District">District:</label>
                    <span class="required">*</span>
                    <div class="col-sm-4">
                        <select class="form-control" id="District" name="District">
                            <option selected value="base">Select</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="chittagong">Chittagong</option>
                            <option value="rajshahi">Rajshahi</option>
                            <option value="rangpur">Rangpur</option>
                            <option value="khulna">Khulna</option>
                            <option value="barisal">Barisal</option>
                            <option value="sylhet">Sylhet</option>
                        </select>
                        <span class="field-validation-valid text-danger" data-valmsg-for="District" data-valmsg-replace="true"></span>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group" >
                    <label class="col-sm-2 control-label" for="Area">Area:</label>
                    <span class="required">*</span>
                    <div class="col-sm-4">
                        <select class="form-control" id="Area" name="Area">
                            <option>Select</option>
                        </select>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>
                    Price
                </legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Price">Price:</label>
                        <span class="required">*</span>
                        <div class="col-sm-4">
                            <input class="form-control input-md" data-val="true" data-val-required="Priceis required." id="Price" name="Price" type="text" value="" />                        
                    <span class="field-validation-valid help-block" data-valmsg-for="Price" data-valmsg-replace="true"></span>
                        </div>
                    </div>
            </fieldset>
            <fieldset>
                <legend>
                    Size
                </legend>
                <div class="form-group">
                <label class="col-sm-2 control-label" for="SizeIn">Size In:</label>
                <span class="required">*</span>
                <div class="col-sm-4">
                    <select class="form-control" id="SizeIn" name="SizeIn">
                        <option selected value="base">Select</option>
                        <option value="sqft">Square Feet</option>
                        <option value="katha">Katha</option>
                        <option value="room">Room</option>
                        
                    </select>
                    <span class="field-validation-valid text-danger" data-valmsg-for="District" data-valmsg-replace="true"></span>
                </div>
            </div>
            <fieldset>
            <fieldset>
                    <div class="form-group">
                    <label class="col-sm-2 control-label" for="Size">Size:</label>
                    <span class="required">*</span>
                    <div class="col-sm-4">
                        <input class="form-control input-md" data-val="true" data-val-required="Size is required." id="Size" name="Size" type="text" value="" />                        
                        <span class="field-validation-valid help-block" data-valmsg-for="Size" data-valmsg-replace="true"></span>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Description</legend>
                <div class="form-group">
                    <div class="col-sm-4">
                        <textarea rows="12" cols="100" id="Description" name="Description" type="text" value=""></textarea>
                    </div>
                </div>
                   
            </fieldset>                        
            <fieldset>
                <legend>
                    Upload Property Image
                </legend>
                <div class="form-group">

                    <input type="file" name="userfile" size="40" />
    
                </div>
            </fieldset>

                        <div class="col-md-4 col-md-offset-2">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
            
    </div>

</footer>

<footer class="site-footer-bottom">
    <div class="container">
        

        <div class="row">
            <div class="copyrights-col-left col-md-12 col-sm-12 text-align-center">
                Copyright &copy; 2016 propertyfinder.com. All rights reserved.
            </div>
            
        </div>
    </div>
    
</footer>
<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>

</body>
</html>