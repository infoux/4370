<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.php');

?>


<?php echo groupmenu('sir'); ?>

<section class="sub-content register-ok">
    <div class="container">
        <h2><?php echo $g5['title']; ?></h2>


    <p>
        <strong><?php echo get_text($mb['mb_name']); ?></strong>님의 회원가입을 진심으로 축하합니다.<br>
    </p>

    <p>
        회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.<br>
        감사합니다.
    </p>

    <div class="member-btn">
        <a href="<?php echo G5_URL ?>/" class="black">메인으로</a>
    </div>

<!-- } 회원가입결과 끝 -->


    </div>
</section>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>