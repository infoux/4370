<?php

$g5['title'] = "4·3유적지";

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/sub.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<?php echo groupmenu('sir'); ?>

<section class="sub-content site">
    <div class="container">
        <h2><?php echo $g5['title']; ?></h2>

        <!-- 컨텐츠영역 -->

        <ul class="site-list">
            <li><a href="http://jejupark43.1941.co.kr/" target="_blank"><img src="/theme/basic/img/banner01.png" alt="제주 4·3평화공원"></a></li>
            <li><a href="http://www.43archives.or.kr" target="_blank"><img src="/theme/basic/img/banner02.png" alt="제주 4·3아카이브" title=""></a></li>
            <li><a href="http://www.jeju43.net" target="_blank"><img src="/theme/basic/img/banner03.png" alt="제주 4·3희생자유족회" title=""></a></li>
            <li><a href="http://www.jeju43.org/" target="_blank"><img src="/theme/basic/img/banner04.png" alt="제주 4·3연구소"></a></li>
            
            <li><a href="https://www.facebook.com/jeju4370/" target="_blank"><img src="/theme/basic/img/banner05.png" alt="제주 4·3 70주년 기념사업위원회"></a></li>
            <li><a href="https://www.facebook.com/4370jeju/" target="_blank"><img src="/theme/basic/img/banner06.png" alt="제주 4·3 70주년 범국민위원회"></a></li>
        </ul>

        <!--// 컨텐츠영역 -->

    </div>

</section>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>