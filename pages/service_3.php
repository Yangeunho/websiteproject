<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/SF.lib.php');
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SOFTZONE - 소프트존 반응형 홈페이지 템플릿 COMPNAY 9 템플릿</title>

        <!-- Bootstrap -->
        <link href="<?php echo G5_THEME_URL ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- font awesome for icons -->
        <link href="<?php echo G5_THEME_URL ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- flex slider css -->
        <link href="<?php echo G5_THEME_URL ?>/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  -->
        <link href="<?php echo G5_THEME_URL ?>/css/animate.css" rel="stylesheet" type="text/css" media="screen"> 
        <!-- Revolution Style-sheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_URL ?>/rs-plugin/css/settings.css">
        <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_URL ?>/css/rev-style.css">
        <!--owl carousel css-->
        <link href="<?php echo G5_THEME_URL ?>/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo G5_THEME_URL ?>/owl-carousel/assets/owl.theme.default.css" rel="stylesheet" type="text/css" media="screen">
        <!--mega menu -->
        <link href="<?php echo G5_THEME_URL ?>/css/yamm.css" rel="stylesheet" type="text/css">
        <!--cube css-->
        <link href="<?php echo G5_THEME_URL ?>/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo G5_THEME_URL ?>/css/bootstrap-select.css">
		<!-- chart -->
		<link href="<?php echo G5_THEME_URL ?>/morris/morris.css" rel="stylesheet" type="text/css" media="screen">        
		
		<!-- 좌측에 고정되어 있는 메뉴를 사용하지 않을지 아래 스타일시트를 제거하시거나 주석처리 해주세요. -->
		<link href="<?php echo G5_THEME_URL?>/css/socialfloating.css" rel="stylesheet">		
	
		<!-- custom css-->
        <link href="<?php echo G5_THEME_URL ?>/css/style_aqours.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo G5_THEME_URL ?>/css/common.css" rel="stylesheet" type="text/css" media="screen">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
		<?php
		include_once(G5_THEME_PATH.'/navigation.php');
		?>
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Company</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo G5_URL?>">Home</a></li>
                            <li>Company</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="container-fluid hidden-sm hidden-xs top-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-1 home-btn"><a href="<?php echo G5_URL?>"><i class="fa fa-home f36" aria-hidden="true"></i></a></div>
					<div class="col-sm-4"><?php include_once(G5_THEME_PATH.'/left_top.php');?></div>
					<div class="col-sm-7">
						
					</div><!--sidebar col end-->
				</div>
			</div><!-- ./container -->
		</div><!-- ./container-fulid -->
        <div class="divide80 mobile-none"></div>
        <div class="container">
            <div class="row" style="overflow: hidden;">
                <div class="col-sm-3" style="overflow-y: auto;">
					<?php include_once(G5_THEME_PATH.'/left_menu.php');?>
                </div><!--sidebar col end-->
                <div class="col-sm-9">

				<!-- left start -->
					<div class="row">
						<div class="col-md-12">
							<h3>INTRODUCE</h3>
							<div class="divide20"></div>
						</div>
					</div>
					<!--<h2 class="line">Item introduction</h2>-->

					<div class="row">
						<div class="col-md-12">
							  <!-- LINE CHART -->
							  <div class="box box-info">
								<div class="box-header with-border">
								  <div class="box-tools pull-right"></div>
								</div>
								<div class="box-body chart-responsive">
								  <div class="chart" id="line-chart" style="height: 300px;"></div>
								</div>
								<!-- /.box-body -->
							  </div>
							   <!-- LINE CHART -->
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
						<p class="kn">
						밝은 곳이 있으면 어두운 곳도 있다는 만고의 진리처럼, IT 기술의 발전은 항상 새로운 보안 위협을 동반해왔다. 2017년에는 비교적 새로운 기술이라 할 수 있는 사물인터넷 기기와 관련된 위협이 전망된다. 더불어 기존의 보안 위협은 더욱 강력하고 교묘한 모습으로 사회 전반을 파고들 것으로 보인다.

						특히 올해도 세계 경제 전망이 좋지 않은 만큼, 사이버 공격자들은 즉각적으로 금전적 이득을 취할 수 있는 공격에 집중할 것으로 보인다. 2016년 전세계를 집어삼킨 랜섬웨어(Ransomware)에서 이미 그 조짐이 드러났다. 일반 기업과 마찬가지로 악의적인 공격자들 역시 투자 대비 수익률이 높은 방법을 모색할 것이 분명하다.

						카스퍼스키랩은 윈도용 무료 애플리케이션인 '카스퍼스키 SW 업데이터'를 출시, 이러한 문제 해결을 지원하고 나섰다. 이 솔루션은 기기 내 자주 사용되는 프로그램 중 업데이트가 필요한 프로그램을 검색한 뒤, 취약점을 기준으로 업데이트 우선순위를 매겨 사용자에게 보고한다. 					
						</p>
						</div>
					</div>

					<div class="divide50"></div>


					<div class="row">
						<div class="col-md-12">
							<h3>INTRODUCE</h3>
							<div class="divide20"></div>
						</div>
					</div>

					  <div class="row">
						<div class="col-md-12 no-padding">
							  <!-- AREA CHART -->
							  <div class="box box-primary">
								<div class="box-body chart-responsive">
									<div class="chart" id="revenue-chart" style="height: 300px;"></div>
								</div>
							  </div>
							  <!-- //AREA CHART -->
						  </div>
					  </div><!-- /.row -->



					  <div class="row">
						  <div class="col-md-12">
							  <p class="kn">
									밝은 곳이 있으면 어두운 곳도 있다는 만고의 진리처럼, IT 기술의 발전은 항상 새로운 보안 위협을 동반해왔다. 2017년에는 비교적 새로운 기술이라 할 수 있는 사물인터넷 기기와 관련된 위협이 전망된다. 더불어 기존의 보안 위협은 더욱 강력하고 교묘한 모습으로 사회 전반을 파고들 것으로 보인다. 특히 올해도 세계 경제 전망이 좋지 않은 만큼, 사이버 공격자들은 즉각적으로 금전적 이득을 취할 수 있는 공격에 집중할 것으로 보인다. 2016년 전세계를 집어삼킨 랜섬웨어(Ransomware)에서 이미 그 조짐이 드러났다. 일반 기업과 마찬가지로 악의적인 공격자들 역시 투자 대비 수익률이 높은 방법을 모색할 것이 분명하다. 카스퍼스키랩은 윈도용 무료 애플리케이션인 '카스퍼스키 SW 업데이터'를 출시, 이러한 문제 해결을 지원하고 나섰다. 이 솔루션은 기기 내 자주 사용되는 프로그램 중 업데이트가 필요한 프로그램을 검색한 뒤, 취약점을 기준으로 업데이트 우선순위를 매겨 사용자에게 보고한다.
							  </p>
						  </div><!-- //col -->
					  </div><!-- /.row -->

                </div>
            </div>
        </div><!--left sidebar container-->

		<div class="divide80"></div>
		<?php
		include_once(G5_THEME_PATH."/footer.php");
		?>
        <!--must need plugin jquery-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.min.js"></script>        
        <!--bootstrap js plugin-->
        <script src="<?php echo G5_THEME_URL?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.stellar.min.js" type="text/javascript"></script>
		<script src="<?php echo G5_THEME_URL?>/js/jquery.backstretch.js"></script>
        <!--digit countdown plugin-->
        <script src="<?php echo G5_THEME_URL?>/js/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="<?php echo G5_THEME_URL?>/js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="<?php echo G5_THEME_URL?>/js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="<?php echo G5_THEME_URL?>/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?php echo G5_THEME_URL?>/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
		<script src="<?php echo G5_THEME_URL?>/js/raphael-min.js"></script>
		<script src="<?php echo G5_THEME_URL?>/morris/morris.min.js"></script> 
		<script src="<?php echo G5_THEME_URL ?>/js/jquery.socialfloating.js"></script>
		<!-- select -->
		<script src="<?php echo G5_THEME_URL ?>/js/jquery.selectric.min.js"></script>
		<script src="<?php echo G5_THEME_URL?>/js/custom.js" type="text/javascript"></script>




		<!-- 차트는 이곳에서 수정하세요. -->
		<script>
		  $(function () {
			"use strict";

			// AREA CHART
			var area = new Morris.Area({
			  element: 'revenue-chart',
			  resize: true,
			  data: [
				{y: '2015 Q1', item1: 2666, item2: 2666},
				{y: '2015 Q2', item1: 2778, item2: 2294},
				{y: '2015 Q3', item1: 4912, item2: 1969},
				{y: '2015 Q4', item1: 3767, item2: 3597},
				{y: '2016 Q1', item1: 6810, item2: 1914},
				{y: '2016 Q2', item1: 5670, item2: 4293},
				{y: '2016 Q3', item1: 4820, item2: 3795},
				{y: '2016 Q4', item1: 15073, item2: 5967},
				{y: '2017 Q1', item1: 10687, item2: 4460},
				{y: '2017 Q2', item1: 8432, item2: 5713}
			  ],
			  xkey: 'y',
			  ykeys: ['item1', 'item2'],
			  labels: ['Item 1', 'Item 2'],
			  lineColors: ['#a0d0e0', '#3c8dbc'],
			  hideHover: 'auto'
			});

			// LINE CHART
			var line = new Morris.Line({
			  element: 'line-chart',
			  resize: true,
			  data: [
				{y: '2015 Q1', item1: 2666},
				{y: '2015 Q2', item1: 2778},
				{y: '2015 Q3', item1: 4912},
				{y: '2015 Q4', item1: 3767},
				{y: '2016 Q1', item1: 6810},
				{y: '2016 Q2', item1: 5670},
				{y: '2016 Q3', item1: 4820},
				{y: '2016 Q4', item1: 15073},
				{y: '2017 Q1', item1: 10687},
				{y: '2017 Q2', item1: 8432}
			  ],
			  xkey: 'y',
			  ykeys: ['item1'],
			  labels: ['Item 1'],
			  lineColors: ['#3c8dbc'],
			  hideHover: 'auto'
			});

		  });
		</script>

    </body>
</html>
