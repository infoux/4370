<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH.'/thumbnail.lib.php');
if (!$width) $width = 500;
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->



<ul>
    <?php for ($i=0; $i<count($list); $i++) { 
        
        
                    
        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $width, "0");
        $img_url = $thumb["src"];     


        ?>
    <li>
        <?php
                echo "<a href=\"".$list[$i]['href']."\">";


                echo "<p class='image'><img src='".$img_url."'></p>";
                echo "<h3>".$list[$i]['subject']."</h3>";
                echo "<p class='location'>".$list[$i]['wr_2']."</p>";
                echo "<i>".$list[$i]['wr_1']."</i>";


            echo "</a>";
             ?>
    </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li>게시물이 없습니다.</li>
    <?php }  ?>
</ul>

<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->