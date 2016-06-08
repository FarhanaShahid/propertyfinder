<?php?>


<!DOCTYPE html>
<html >
<head>
    <title>Login  |  propertyfinder.com</title>
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
<link href="/propertyfinder/assets/css/bootstrap-social.css" rel="stylesheet" type="text/css" />    
  
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
        <div class="col-md-3 col-sm-4 header-links-md-5">
            <ul class="horiz-nav pull-left">
                
                <li><span style="font-weight:bold"></li>
                
            </ul>
        </div>
        <div class="col-md-9 col-sm-8 header-links-md-7">

            <ul class="horiz-nav pull-right">
                <li><a href="/propertyfinder/login" class="ico-login">Log in</a></li>    
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
                            <button class="btn btn-primary btn-lg btn-post" onclick="location.href='/propertyfinder/login'">
                                <i class="fa fa-plus-circle"></i>
                                Post Your Ads
                                
                                
                            </button>
                            
                        </div>
                        <div>
                            <button class="btn btn-primary btn-lg btn-post" onclick="location.href='/propertyfinder/login'">
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
                        <a href="/propertyfinder/publichome">
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
        <a href="/propertyfinder/publicbuy/apartment">
            Apartment
        </a>

    </li>
    <li>
        <a href="/propertyfinder/publicbuy/commercialspace">
            Commercial Space
        </a>

    </li>
    <li>
        <a href="/propertyfinder/publicbuy/landplot">
            Land/Plot
        </a>

    </li>
    <li>
        <a href="/propertyfinder/publicbuy/shop">
            Shop
        </a>

    </li>
    <li>
        <a href="/propertyfinder/publicbuy/independenthouse">
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
        <a href="/propertyfinder/publicrent/residentialapartment">
            Residential Apartment
        </a>

    </li>
    
    <li>
        <a href="/propertyfinder/publicrent/comercialspace">
            Commercial Space
        </a>
                <ul class="">
    <li>
        <a href="/propertyfinder/publicrent/apartmentforoffice">
            Apartment for Office
        </a>

    </li>
    <li>
        <a href="/propertyfinder/publicrent/commercialbuilding">
            Commercial Building
        </a>

    </li>
    <li>
        <a href="/propertyfinder/publicrent/shop">
            Shop
        </a>

    </li>
    <li>
        <a href="/propertyfinder/publicrent/warehouse">
            Warehouse
        </a>

    </li>
                                    </ul>

    </li>
    <li>
        <a href="/propertyfinder/publicrent/independenthouse">
            Independent House
        </a>

    </li>
    <li>
        <a href="#">
            Rooms
        </a>
                <ul class="">
    <li>
        <a href="/propertyfinder/publicrent/subletwithfamily">
            Sublet with Family
        </a>

    </li>
    <li>
        <a href="/propertyfinder/publicrent/roommate">
            Roommate
        </a>

    </li>
                                    </ul>

    </li>
    <li>
        <a href="/propertyfinder/publicrent/garage">
            Garage
        </a>

    </li>
                                    </ul>

    </li>
    <li>
        <a href="/propertyfinder/publichome/developerlist">
            Developer
        </a>
                
    </li>

    <li><a href="/propertyfinder/registration/reg">Register</a>
        
    </li>

    <li>
        <a href="/propertyfinder/publichome/aboutus">
            About Us
        </a>
    </li>
    <li>
        <a href="/propertyfinder/publichome/contactus">
            Contact Us
        </a>
    </li>
    
</ul>

                </nav>
            </div>
        </div>
    </div>
</div>

    
</header>
<div class="main" role="main">
        <div id="content" class="content full">            
            
            <div class="ajax-loading-block-window" style="display: none">
                <div class="loading-image">
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-3 sidebar" style="padding-left:4px;padding-right:4px"></div>
                    <div class="col-md-12">
                        <?php $action_path="/propertyfinder/".$category."/".$propertytype."filter" ;  ?>
                        
                        <form action="<?php echo $action_path; ?>"class="form-horizontal" role="form" method="post" >
                        <div class="page registration-page">
                            <div class="page-title">
                                <h1>Search</h1>
                            </div>
                            <fieldset>
                                <div class="form-group">
                                <label class="col-sm-2 control-label" for="District">District:</label>
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
                                
                                <div class="col-sm-4">
                                    <select class="form-control" id="Area" name="Area">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            </fieldset>

                            <fieldset>
                                <div class="form-group">
                                <label class="col-sm-2 control-label" for="Price">Price:</label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="Price" name="Price">
                                        <option selected value="base">Select</option>
                                        <option value="0">৳1000-৳3000</option>
                                        <option value="1">৳3000-৳6000</option>
                                        <option value="2">৳6000-৳10,000</option>
                                        <option value="3">৳10,000-৳15,000</option>
                                        <option value="4">৳15,000-৳$20,000</option>
                                        <option value="5">৳20,000-৳25,000</option>
                                        <option value="6">৳25,000-৳50,000</option>
                                        <option value="7">৳50,000-৳1,00,000</option>
                                        <option value="8">৳1,00,000-৳3,00,000</option>
                                        <option value="9">৳3,00,000-৳5,00,000</option>
                                        <option value="10">৳5,00,000-৳10,00,000</option>
                                        <option value="11">৳10,00,000-৳20,00,000</option>
                                        <option value="12">৳20,00,000-৳40,00,000</option>
                                        <option value="13">৳40,00,000-৳70,00,000</option>
                                        <option value="14">৳70,00,000-৳1,00,00,000</option>
                                        <option value="15">৳1,00,00,000-৳3,00,00,000</option>
                                    </select>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Price" data-valmsg-replace="true"></span>
                                </div>
                            </fieldset>

                            <fieldset>
                            <div class="col-sm-4 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                            </fieldset>

                            <fieldset>
                                <legend>Search Result</legend>
                            <?php $data=$result;?>
                            <table rules="rows" style="border:1px solid:#000; width=100%; overflow:auto">
                                <col width="80">
                                <col width="100">
                                <col width="120">
                                <col width="120">
                                <col width="560">
                                <col width="200">
                                <col width="50">
                                <col width="250">
                                <col width="100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Location</th>
                                        <th>Price</th>
                                        <th>Size</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th></th>
                                        <th>Owner</th>
                                        <th>Contact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $row) {?>
                                    <tr id="<?php echo $row->propertyId ?>">
                                        <td><?php echo $row->propertyId ?></td>
                                        <td><?php echo $row->area; echo " , "; echo $row->district ?></td>
                                        <td><?php echo $row->price; echo " tk." ?></td>
                                        <td><?php echo $row->size ; echo " "; echo $row->sizeIn ?></td>
                                        <td><?php echo $row->description ;?></td>
                                        <td><img style="width:200px; height:150px;" 
                                        src="<?php echo "/propertyfinder/assets/uploads/".$row->image ?>"></td>
                                        <td></td>
                                        <td><?php echo $row->username;?></td>
                                        <td><?php echo $row->contact;?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            </fieldset>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

</div>

<footer class="site-footer-bottom">
    <div class="container">
        <div class="row">
            <div class="copyrights-col-left col-md-12 col-sm-12 text-align-center">
                Copyright &copy; 2016 propertyfinder.com. All rights reserved.
            </div>
            
        </div>
    </div>
    
</footer>
</body>
</html>