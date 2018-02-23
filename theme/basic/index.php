<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<section class="main-issue">
    <div class="container">
        <h2>
            <small>
                4·3 70주년 2018 제주방문의 해</small>다시 꽃 피우는 평화의 섬 제주</h2>
    </div>
</section>

<section class="main-comm">
    <div class="container">
        <h2>
            <small>4·3 70주년</small>
            기념행사 안내</h2>
            
            <?php echo latest('theme/comm', comm, 4, 100); ?>

    </div>
</section>

<section class="main-notice">
    <div class="container">
        <h2>공지사항</h2>

        <?php echo latest('theme/notice', notice, 1, 100); ?>

    </div>
</section>


<!-- 추모관 주석처리
<section class="main-banner">
    <div class="container">
        <a href="">
            <h2>온라인 추모관</h2>
            <p>4·3을 기억하고 추모하는 마음을 담아보세요</p>
            <span>바로가기</span>
        </a>
    </div>
</section>
-->

<section class="main-txt">
    <div class="container txt">
        <h2>제주 4·3사건은 반드시<small>기억해야 할 우리나라 국민의 아픈 역사입니다.</small></h2>

        <p>
            <span>4·3의 영혼들은 붉은 동백꽃처럼</span> 차가운 땅으로 소리없이 스러져갔습니다.
        </p>
        <p>
        <span>그날의 뼈아픈 고통을 생생하게 몸으로 기억하는 <strong>생존자들도</span>
            사실상 마지막 생애주기</strong>를 맞고 있습니다.
        </p>
    </div>

    <div class="container ucc">
        <h2>4·3 70주년 UCC</h2>

        <?php echo latest('theme/ucc', ucc, 1, 100); ?>

    </div>

</section>



<section class="main-links">
    <div class="container">
        <h2 class="sr-only">관련사이트</h2>

        <a href="http://jejupark43.1941.co.kr/" target="_blank"><img src="/theme/basic/img/banner01.png" alt="제주 4·3평화공원"></a>
        <a href="http://www.43archives.or.kr" target="_blank"><img src="/theme/basic/img/banner02.png" alt="제주 4·3아카이브"></a>
        <a href="http://www.jeju43.net" target="_blank"><img src="/theme/basic/img/banner03.png" alt="제주 4·3희생자유족회"></a>
        <a href="http://www.jeju43.org/" target="_blank"><img src="/theme/basic/img/banner04.png" alt="제주 4·3연구소"></a>

    </div>
</section>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>