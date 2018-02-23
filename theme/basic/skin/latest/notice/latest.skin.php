<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
    



    <?php for ($i=0; $i<count($list); $i++) {  ?>

        <p>

            <?php
                //echo $list[$i]['icon_reply']." ";
                echo "<a href=\"".$list[$i]['href']."\">";
                echo "<i>[".str_replace("-", ".", $list[$i][datetime])."]</i>";
                echo $list[$i]['subject'];
                echo "</a>";

                // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
                // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

                if (isset($list[$i]['icon_new'])) echo " " . $list[$i]['icon_new'];
                if (isset($list[$i]['icon_hot'])) echo " " . $list[$i]['icon_hot'];
                if (isset($list[$i]['icon_file'])) echo " " . $list[$i]['icon_file'];
                if (isset($list[$i]['icon_link'])) echo " " . $list[$i]['icon_link'];
                if (isset($list[$i]['icon_secret'])) echo " " . $list[$i]['icon_secret'];
             ?>

        </p>

        <a class="more" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>"><span>공지사항 </span>바로가기<i class="icon-angle-right"></i></a>

    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <p>게시물이 없습니다.</p>
    <?php }  ?>


<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->