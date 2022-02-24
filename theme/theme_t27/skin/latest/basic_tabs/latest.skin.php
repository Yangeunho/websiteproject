<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<div class="lat_list_tab">
    <ul>
    <?php for ($i=0; $i<count($list); $i++) {  ?>
        <li>
            <?php
            if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";

            if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";

            if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\">H<span class=\"sound_only\">인기글</span></span>";

 
            echo "<a href=\"".$list[$i]['href']."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong><span class='hidden-md hidden-lg' style='position: absolute;right: 0;'>".$list[$i]['datetime2']."</span>";
            else
                echo $list[$i]['subject']."<span class='hidden-md hidden-lg' style='position: absolute;right: 0;'>".$list[$i]['datetime2']."</span>";
            echo "</a>";

            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

             //echo $list[$i]['icon_reply']." ";
           // if ($list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            //if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;


            if ($list[$i]['comment_cnt'])  echo "
            <span class=\"lt_cmt\">+ ".$list[$i]['comment_cnt']."</span>";

            ?>

            <span class="lt_date hidden-xs hidden-sm"><?php echo $list[$i]['datetime2'] ?></span>
        </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
</div>
