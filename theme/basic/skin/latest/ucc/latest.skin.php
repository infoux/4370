<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH.'/thumbnail.lib.php');
if (!$width) $width = 500;
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->


    <?php for ($i=0; $i<count($list); $i++) { 
        
        $youtubeID = $list[$i]['wr_link1']; 
        //현재 전체 주소를 가져온다. 예) http://www.naver.com
        $youtubeID = explode('/',$youtubeID); 
        //echo $youtubeID[3];

        $thumb = "http://img.youtube.com/vi/".$youtubeID[3]."/sddefault.jpg";

        ?>
    <div>
        <?php
            echo "<a href='".$list[$i]['href']."'>";
            echo "<img src='".$thumb."'>";
            echo "<h3>".$list[$i]['subject']."</h3>";
            echo "</a>";
        ?>

    <?php }  ?>

    </div>

    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    게시물이 없습니다.
    <?php }  ?>


<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->