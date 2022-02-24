<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<link href="<?php echo G5_THEME_URL?>/css/effects.min.css" rel="stylesheet">
<div class="breadcrumb-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h4><?php echo $board['bo_subject']?></h4>
			</div>
			<div class="col-sm-6 hidden-xs text-right">
				<ol class="breadcrumb">
					<li><a href="<?php echo G5_URL?>">Home</a></li>
					<li class="ko"><?php echo $board['bo_subject']?></li>
				</ol>
			</div><!-- /col -->
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
		<div class="container hidden-lg hidden-md">
			<div class="row">
				<div class="col-md-12">
					<?php include_once(G5_THEME_PATH.'/left_menu.php');?>
				</div>
			</div>
		</div>

        <div class="container">
            <div class="row">
				<!-- left -->
                <div class="col-sm-12">
					<!-- 게시판 목록 시작 { -->
					<div id="bo_gall" style="width:<?php echo $width; ?>">
						<?php if ($is_category) { ?>
						<nav id="bo_cate">
							<h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
							<ul id="bo_cate_ul" class="ko">
								<?php echo $category_option ?>
							</ul>
						</nav>
						<?php } ?>
						<!-- 게시판 페이지 정보 및 버튼 시작 { -->
						<div id="bo_btn_top">
							<div id="bo_list_total">
								<span>전체 <?php echo number_format($total_count) ?>건</span>
								<?php echo $page ?> 페이지
							</div>
							<?php if ($rss_href || $write_href) { ?>
							<ul class="btn_bo_user">
								<?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn"><i class="fa fa-rss" aria-hidden="true"></i> RSS</a></li><?php } ?>
								<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn"><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</a></li><?php } ?>
								<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn"><i class="fa fa-pencil" aria-hidden="true"></i>  글쓰기</a></li><?php } ?>
							</ul>
							<?php } ?>
						</div>
						<!-- } 게시판 페이지 정보 및 버튼 끝 -->
						<form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
						<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
						<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
						<input type="hidden" name="stx" value="<?php echo $stx ?>">
						<input type="hidden" name="spt" value="<?php echo $spt ?>">
						<input type="hidden" name="sst" value="<?php echo $sst ?>">
						<input type="hidden" name="sod" value="<?php echo $sod ?>">
						<input type="hidden" name="page" value="<?php echo $page ?>">
						<input type="hidden" name="sw" value="">
						<?php if ($is_checkbox) { ?>
						<div id="gall_allchk">
							<label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
							<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
						</div>
						<?php } ?>
						  <section class="wrapper">
									<div class="row">
									<?php for ($i=0; $i<count($list); $i++) {?>
										<div class="col-xs-12 col-sm-6 col-md-12" style='margin-bottom:30px;'>
											<div class="blog-post" style='margin-bottom:0;'>
												<div class="row">
													<!-- 체크박스 -->
													<div class="gall_chk" style='z-index:99;'>
													<?php if ($is_checkbox) { ?>
													<label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
													<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
													<?php } ?>
													<span class="sound_only">
														<?php
														if ($wr_id == $list[$i]['wr_id'])
															echo "<span class=\"bo_current\">열람중</span>";
														else
															echo $list[$i]['num'];
														 ?>
													</span>
													</div>
													<!-- /체크박스 -->
													<div class="col-md-5 margin20">
															<?php
															if ($list[$i]['is_notice']) { // 공지사항  ?>
																<!--span class="is_notice">공지</span-->
															<?php
																// notice
																$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);
																																
																if($thumb['src']) {
																	$img_content = '<img src="'.$thumb['ori'].'" alt="'.$thumb['alt'].'" style="max-width:100%;">';
																} else {
																	$img_content = '<img src='.G5_THEME_URL.'/img/no-img.png style="max-width:100%;">';
																}
																
																echo "<a href='".$list[$i]['href']."'>".$img_content."</a>";
																
															?>
															<?php } else {

																//echo $thumb['src'];
																$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

																if($thumb['src']) {
																	$img_content = '<img src="'.$thumb['ori'].'" alt="'.$thumb['alt'].'" style="max-width:100%;width:100%;height:298px;">';
																} else {
																	$img_content = '<img src='.G5_THEME_URL.'/img/no-img.png style="max-width:100%;width:100%;height:298px;">';
																}
																echo "<a href='".$list[$i]['href']."'>".$img_content."</a>";
																
															}
															 ?>
													</div>
													<div class="col-md-7 margin20">

														<table class="tablecss ko" style="border-top:3px solid #454545">
															<tbody>
															<?php
															if($list[$i]['wr_1']){
															$arr = explode('|',$list[$i]['wr_1']);
															?>
																<tr>
																	<td style="width:40%;background: #f1f1f1;"><?php echo $arr[0]?></td>
																	<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
																</tr>
															<?php } ?>
															<?php
															if($list[$i]['wr_2']){
															$arr = explode('|',$list[$i]['wr_2']);
															?>
																<tr>
																	<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
																	<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
																</tr>
															<?php } ?>
															<?php
															if($list[$i]['wr_3']){
															$arr = explode('|',$list[$i]['wr_3']);
															?>
																<tr>
																	<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
																	<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
																</tr>
															<?php } ?>
															<?php
															if($list[$i]['wr_4']){
															$arr = explode('|',$list[$i]['wr_4']);
															?>
																<tr>
																	<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
																	<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
																</tr>
															<?php } ?>
															<?php
															if($list[$i]['wr_5']){
															$arr = explode('|',$list[$i]['wr_5']);
															?>
																<tr>
																	<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
																	<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
																</tr>
															<?php } ?>
															<?php
															if($list[$i]['wr_6']){
															$arr = explode('|',$list[$i]['wr_6']);
															?>
																<tr>
																	<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
																	<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
																</tr>
															<?php } ?>
															<?php
															if($list[$i]['wr_7']){
															$arr = explode('|',$list[$i]['wr_7']);
															?>
																<tr>
																	<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
																	<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
																</tr>
															<?php } ?>
															<?php
															if($list[$i]['wr_8']){
															$arr = explode('|',$list[$i]['wr_8']);
															?>
																<tr>
																	<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
																	<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
																</tr>
															<?php } ?>
															<?php
															if($list[$i]['wr_9']){
															$arr = explode('|',$list[$i]['wr_9']);
															?>
																<tr>
																	<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
																	<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
																</tr>
															<?php } ?>
															<?php
															if($list[$i]['wr_10']){
															$arr = explode('|',$list[$i]['wr_10']);
															?>
																<tr>
																	<td style="background: #f1f1f1;"><?php echo $arr[0]?></td>
																	<td style="text-align:left;padding-left:15px;"><?php echo $arr[1]?></td>
																</tr>
															<?php } ?>
															</tbody>
														</table>
														<br />


														<!-------------------------- 이동할 링크 주소 -------------------------->
														<p class="ko"><a href="<?php echo $list[$i]['href']?>" class="btn btn-theme-dark">바로가기</a></p>
													</div>
												</div><!-- row -->
											</div><!--blog post-->
										</div>

									<?php }//for ?>
									
									</div><!-- //row -->

								 <?php if ($list_href || $is_checkbox || $write_href) { ?>
								<div class="bo_fx">
									<?php if ($list_href || $write_href) { ?>
									<ul class="btn_bo_user">
										<?php if ($is_checkbox) { ?>
										<li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn btn_b01"></li>
										<li><input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value" class="btn btn_b01"></li>
										<li><input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value" class="btn btn_b01"></li>
										<?php } ?>
										<?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01 btn">목록</a></li><?php } ?>
										<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn">글쓰기</a></li><?php } ?>
									</ul>
									<?php } ?>
								</div>
								<?php } ?>
								</form>
								 
								   <!-- 게시판 검색 시작 { -->
								<fieldset id="bo_sch">
									<form name="fsearch" method="get">
									<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
									<input type="hidden" name="sca" value="<?php echo $sca ?>">
									<input type="hidden" name="sop" value="and">
									<label for="sfl" class="sound_only">검색대상</label>
									<select name="sfl" id="sfl">
										<option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
										<option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
										<option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
										<option value="mb_id,1"<?php echo get_selected($sfl, 'mb_id,1'); ?>>회원아이디</option>
										<option value="mb_id,0"<?php echo get_selected($sfl, 'mb_id,0'); ?>>회원아이디(코)</option>
										<option value="wr_name,1"<?php echo get_selected($sfl, 'wr_name,1'); ?>>글쓴이</option>
										<option value="wr_name,0"<?php echo get_selected($sfl, 'wr_name,0'); ?>>글쓴이(코)</option>
									</select>
									<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
									<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder="검색어를 입력해주세요">
									<input type="submit" value="검색" class="sch_btn">
									</form>
								</fieldset>
								<!-- } 게시판 검색 끝 --> 


							</section>



						</form>
						 

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>



<!-- 페이지 -->
<?php echo $write_pages;  ?>
<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
});
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->



			</div>
		</div><!--/collapse col-->
	</div><!-- /row -->
</div><!-- /container -->
<div class="divide80"></div>
