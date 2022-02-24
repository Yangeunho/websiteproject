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
		<meta name="description" content="">
		
        <title>사업안내 2</title>

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
		<link rel="stylesheet" href="<?php echo G5_THEME_URL ?>/css/bootstrap-select.css">
        <!-- slide -->
		<link href="<?php echo G5_THEME_URL ?>/slide/responsive-slider.css" rel="stylesheet">
        <!--cube css-->
        <link href="<?php echo G5_THEME_URL ?>/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
		<!-- chart -->
		<link href="<?php echo G5_THEME_URL ?>/morris/morris.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo G5_THEME_URL ?>/css/magnific-popup.css" rel="stylesheet" type="text/css">
		
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
                        <h4>Business</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo G5_URL?>">Home</a></li>
                            <li>Business</li>
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
		<div class="divide80 hidden-sm hidden-xs"></div>
        <div class="container">
            <div class="row" style="overflow: hidden;">
                <div class="col-sm-3" style="overflow-y: auto;">
					<?php include_once(G5_THEME_PATH.'/left_menu.php');?>
                </div><!--sidebar col end-->
                <div class="col-sm-9">


					<div class="row">
						<div class="col-md-12">
							<div id="work-carousel" class="owl-carousel owl-theme owl-spaced">
								<div>
									<div class="item-img-wrap ">
										<img src="https://via.placeholder.com/500x413" class="img-responsive" alt="workimg">
										<div class="item-img-overlay">
											<a href="https://via.placeholder.com/500x413" class="show-image">
												<span></span>
											</a>
										</div>
									</div> <!--item img wrap-->
								</div><!--owl item-->
								<div> 
									<div class="item-img-wrap ">
										<img src="https://via.placeholder.com/500x413" class="img-responsive" alt="workimg">
										<div class="item-img-overlay">
											<a href="https://via.placeholder.com/500x413" class="show-image">
												<span></span>
											</a>
										</div>
									</div>
								</div><!--owl item-->
								<div> 
									<div class="item-img-wrap ">
										<img src="https://via.placeholder.com/500x413" class="img-responsive" alt="workimg">
										<div class="item-img-overlay">
											<a href="https://via.placeholder.com/500x413" class="show-image">
												<span></span>
											</a>
										</div>
									</div> 
								</div><!--owl item-->
								<div> 
									<div class="item-img-wrap ">
										<img src="https://via.placeholder.com/500x413" class="img-responsive" alt="workimg">
										<div class="item-img-overlay">
											<a href="https://via.placeholder.com/500x413" class="show-image">
												<span></span>
											</a>
										</div>
									</div> 
								</div><!--owl item-->
							</div>

						</div>
					</div><!--row-->


					<div class="row wow animated bounceInUp animated" data-wow-delay="0.2s">
						<div class="col-md-12">
							<p class="kn" style='padding-top:20px'>
								1~2년 전만 해도 수많은 악성코드의 한 종류에 불과했던 랜섬웨어는 현재 막대한 피해를 동반하며 전세계를 휩쓰는 광풍이 되었다. 이와 관련해 안랩 시큐리티대응센터(AhnLab Security Emergency-response Center, 이하 ASEC)는 2017년 2분기 ASEC 리포트를 통해 2017년 상반기 랜섬웨어 동향을 발표할 예정이다.
							</p>
						</div>
						<div class="col-md-12 no-padding">
							  <!-- BAR CHART -->
							  <div class="box box-success">
								<div class="box-header with-border">
								  <div class="box-tools pull-right"></div>
								</div>
								<div class="box-body chart-responsive">
								  <div class="chart" id="bar-chart" style="height: 300px;"></div>
								</div>
								<!-- /.box-body -->
							  </div>
							  <!-- /.box -->
							  <div class="divide20"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 margin20">
							<div class="services-box wow animated fadeInUp" data-wow-delay="0.1s">
								<div class="services-box-icon-default">
									<i class="material-icons">assignment</i>
								</div><!--services icon-->
								<div class="services-box-info">
									<h4 class="ko">1.지원접수</h4>
									<p class="kn">
										예산에 맞는 편성을하여 기업들과 계획을 수립합니다.
									</p>
								</div>
							</div><!--services box-->
						</div><!--services col-->
						<div class="col-md-6 margin20">
							<div class="services-box wow animated fadeInUp" data-wow-delay="0.2s">
								<div class="services-box-icon-default">
									<i class="material-icons">book</i>
								</div><!--services icon-->
								<div class="services-box-info">
									<h4 class="ko">2. 공급기업모집</h4>
									<p class="kn">
										예산에 맞는 공급기업을 모집하여 심사 후에 공급기업을 선정합니다.
									</p>
								</div>
							</div><!--services box-->
						</div><!--services col-->
						<div class="col-md-6 margin20">
							<div class="services-box wow animated fadeInUp" data-wow-delay="0.3s">
								<div class="services-box-icon-default">
									<i class="material-icons">business</i>
								</div><!--services icon-->
								<div class="services-box-info">
									<h4 class="ko">3. 수요기업공모</h4>
									<p class="kn">
										수요기업에 맞는 기업을 추가로 선정하여 예산과 맞는 업체를 선별하고 규모를 판멸하여 공모를 합니다.
									</p>
								</div>
							</div><!--services box-->
						</div><!--services col-->
						<div class="col-md-6 margin20">
							<div class="services-box wow animated fadeInUp" data-wow-delay="0.3s">
								<div class="services-box-icon-default">
									<i class="material-icons">forward_to_inbox</i>
								</div><!--services icon-->
								<div class="services-box-info">
									<h4 class="ko">4. 신청접수</h4>
									<p class="kn">
										신청접수를 통해서 중소기업 위주로 신청접수를 먼저 진행합니다.
									</p>
								</div>
							</div><!--services box-->
						</div><!--services col-->
						<div class="col-md-6 margin20">
							<div class="services-box wow animated fadeInUp" data-wow-delay="0.3s">
								<div class="services-box-icon-default">
									<i class="material-icons">nat</i>
								</div><!--services icon-->
								<div class="services-box-info">
									<h4 class="ko">5. 수요기업 선정평가</h4>
									<p class="kn">
										중소기업 위주로 수요기업에 대한 선정평가를 진행합니다.
									</p>
								</div>
							</div><!--services box-->
						</div><!--services col-->
						<div class="col-md-6 margin20">
							<div class="services-box wow animated fadeInUp" data-wow-delay="0.3s">
								<div class="services-box-icon-default">
									<i class="material-icons">insights</i>
								</div><!--services icon-->
								<div class="services-box-info">
									<h4 class="ko">6. 결과평가안내</h4>
									<p class="kn">
										중소기업과 대기업과의 결과평과를 별도로 구분하여 중소기업과 대기업간에 차이를 줄여 평가를 합니다.
									</p>
								</div>
							</div><!--services box-->
						</div><!--services col-->
					</div><!--services row-->

					<div class="divide40"></div>
					<div class="row">
						<div class="col-md-12">
							<h3 class="ko f20">주요사업안내</h3>
						</div>
					</div>
					<table class="tablecss kn">
						<thead>
							<tr>
								<th width="30%">구분</th>
								<th>주요사업</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>공공기관</td>
								<td style='text-align:left;padding-left:15px;'>사업 추진계획 및 수립</td>
							</tr>
							<tr>
								<td>사설업체</td>
								<td style='text-align:left;padding-left:15px;'>
									분야별 수요 발굴 협력, 해당 분야 접수, 사전검토<br>
									분야별 활용기업 우수사례 확산 및 후속지원
								</td>
							</tr>
							<tr>
								<td>과기정통부</td>
								<td style='text-align:left;padding-left:15px;'>사업 추진계획 및 수립</td>
							</tr>
							<tr>
								<td>부처 전문기관</td>
								<td style='text-align:left;padding-left:15px;'>사업 추진계획 및 수립</td>
							</tr>
							
						</tbody>
					</table>
					<div class="divide40"></div>
					<div class="row">
						<div class="col-md-12">
							<h3 class="ko f20">관련문의</h3>
						</div>
					</div>
					<table class="tablecss kn">
						<thead>
							<tr>
								<th width="30%">구분</th>
								<th>주요사업</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>공공기관</td>
								<td style='text-align:left;padding-left:15px;'>사업 추진계획 및 수립</td>
							</tr>
							<tr>
								<td>사설업체</td>
								<td style='text-align:left;padding-left:15px;'>
									분야별 수요 발굴 협력, 해당 분야 접수, 사전검토
								</td>
							</tr>
							<tr>
								<td>과기정통부</td>
								<td style='text-align:left;padding-left:15px;'>사업 추진계획 및 수립</td>
							</tr>
						</tbody>
					</table>

                </div>
            </div>
        </div><!--left sidebar container-->
		<div class="divide80"></div>
        <div class="intro-text-1 light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="animated slideInDown ko">BUSINESS</h4>

                        <p class="kn">
                            문의사항이나 제품에 대한 궁금증이 있으시다면 바로가기를 클릭해 주세요.
                        </p>                   
                    </div>
                    <div class="col-sm-4">
                        <a href="<?php echo G5_URL?>/bbs/qalist.php" target="_blank" class="btn border-theme btn-lg ko">바로가기</a>
                    </div>
                </div>
            </div>
        </div> <!--intro text end-->
		<?php
		include_once(G5_THEME_PATH."/footer.php");
		?>
        <!--must need plugin jquery-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.min.js"></script>        
        <!--bootstrap js plugin-->
        <script src="<?php echo G5_THEME_URL ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="<?php echo G5_THEME_URL ?>/js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.stellar.min.js" type="text/javascript"></script>
        
        
        <!--digit countdown plugin-->
        <script src="<?php echo G5_THEME_URL ?>/js/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="<?php echo G5_THEME_URL ?>/js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="<?php echo G5_THEME_URL ?>/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="<?php echo G5_THEME_URL ?>/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
		<!-- responsive-slider -->
		<script src="<?php echo G5_THEME_URL ?>/slide/responsive-slider.js"></script> 
		<script src="<?php echo G5_THEME_URL ?>/js/raphael-min.js"></script>
		<script src="<?php echo G5_THEME_URL ?>/morris/morris.min.js"></script> 
		<script src="<?php echo G5_THEME_URL ?>/js/jquery.backstretch.js"></script>
		<script src="<?php echo G5_THEME_URL ?>/js/jquery.socialfloating.js"></script>
		<!-- select -->
		<script src="<?php echo G5_THEME_URL ?>/js/jquery.selectric.min.js"></script>
		<script src="<?php echo G5_THEME_URL ?>/js/custom.js" type="text/javascript"></script>

		<!-- 차트는 이곳에서 수정하세요. -->
		<script>
		  $(function () {
			"use strict";

			//BAR CHART
			var bar = new Morris.Bar({
			  element: 'bar-chart',
			  resize: true,
			  data: [
				{y: '2014', a: 100, b: 90},
				{y: '2015', a: 75, b: 65},
				{y: '2016', a: 50, b: 40},
				{y: '2017', a: 75, b: 65},
				{y: '2018', a: 50, b: 40},
				{y: '2019', a: 75, b: 65},
				{y: '2020', a: 100, b: 90}
			  ],
			  barColors: ['#32c5d2', '#008998'],
			  xkey: 'y',
			  ykeys: ['a', 'b'],
			  labels: ['SOLUTION', 'THEME'],
			  hideHover: 'auto'
			});
		  });
		</script>

    </body>
</html>
