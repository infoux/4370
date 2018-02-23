<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.php');

?>


<?php echo groupmenu('sir'); ?>

<section class="sub-content login pw">
    <div class="container">
        <h2><?php echo $g5['title']; ?></h2>


    <p class="info-text">
        <strong>비밀번호를 한번 더 입력해주세요.</strong>
        <?php if ($url == 'member_leave.php') { ?>
        비밀번호를 입력하시면 회원탈퇴가 완료됩니다.
        <?php }else{ ?>
        회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다.
        <?php }  ?>
    </p>

    <form name="fmemberconfirm" action="<?php echo $url ?>" onsubmit="return fmemberconfirm_submit(this);" method="post">
    <input type="hidden" name="mb_id" value="<?php echo $member['mb_id'] ?>">
    <input type="hidden" name="w" value="u">

    <fieldset>
        <p>회원아이디
        <span id="mb_confirm_id"><?php echo $member['mb_id'] ?></span></p>

        <label class="sr-only" for="confirm_mb_password">비밀번호<strong>필수</strong></label>
        <input type="password" name="mb_password" id="confirm_mb_password" placeholder="비밀번호">
        <input type="submit" value="확인" id="btn_submit" class="btn_submit">
    </fieldset>

    </form>

    <div class="member-btn">
        <a href="<?php echo G5_URL ?>">메인으로 돌아가기</a>
    </div>

</div>

<script>
function fmemberconfirm_submit(f)
{
    document.getElementById("btn_submit").disabled = true;

    return true;
}
</script>
<!-- } 회원 비밀번호 확인 끝 -->



    </div>
</section>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>