<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.php');

?>


<?php echo groupmenu('sir'); ?>

<section class="sub-content login">
    <div class="container">
        <h2><?php echo $g5['title']; ?></h2>



<!-- 로그인 시작 { -->

    <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
    <input type="hidden" name="url" value="<?php echo $login_url ?>">

    <fieldset>
        <legend class="sr-only">로그인 폼</legend>

        <h3><small>4·3 70주년</small>회원로그인</h3>
        <label for="login_id" class="sr-only">회원아이디</label>
        <input type="text" name="mb_id" id="login_id" placeholder="회원아이디">

        <label for="login_pw" class="sr-only">비밀번호</label>
        <input type="password" name="mb_password" id="login_pw" placeholder="비밀번호">

        <input type="submit" value="로그인">

        <div class="chkbox">
            <input type="checkbox" name="auto_login" id="login_auto_login">
            <label for="login_auto_login">자동로그인</label>
        </div>
    </fieldset>

    <div class="login-info">
        <h3>회원로그인 안내</h3>
        <p>
            회원아이디 및 비밀번호가 기억 안나실 때는 아이디/비밀번호 찾기를 이용하십시오.<br>
            아직 회원이 아니시라면 회원으로 가입 후 이용해 주십시오.
        </p>
        <div>
            <a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" id="login_password_lost">아이디 비밀번호 찾기</a>
            <a href="./register.php">회원 가입</a>
            <a class="main" href="<?php echo G5_URL ?>/">메인으로 돌아가기</a>
        </div>
    </div>

    </form>

<script>
$(function(){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 끝 -->




    </div>
</section>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>