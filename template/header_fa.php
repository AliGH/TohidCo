<?php include('head_fa.php'); ?>
<body <?php if( $pageId == 'home-page' ) echo "onLoad='homeImageSlider();'" ?> >

<!-- start === page container ===== -->
<div class="page-container" id="<?php echo $pageId; ?>">
	
    <!-- start === header ===== -->
	<div class="header-container">
    	<div class="logo-wrapper">
        </div>
        <div class="menu-container">
        	<?php $activeMenu; include 'menu_fa.php'; ?>
        </div>
        <div class="lang-wrapper">
            <div class="languages-wrpr">
                <a href="<?php echo $langUrl; ?>" class="language" >English</a>
            </div>
        </div>
    </div><!-- end === header ===== -->