<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.php');

?>


<?php echo groupmenu('sir'); ?>

<section class="sub-content register">
    <div class="container">
        <h2><?php echo $g5['title']; ?></h2>


<!-- 회원가입약관 동의 시작 { -->

    <form  name="fregister" id="fregister" action="<?php echo $register_action_url ?>" onsubmit="return fregister_submit(this);" method="POST" autocomplete="off">

    <p class="info-text">회원가입약관 및 개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.</p>

    <section id="fregister_term">
        <h3>회원가입약관</h3>
        <textarea readonly><?php echo get_text($config['cf_stipulation']) ?></textarea>
    </section>
    <fieldset class="fregister_agree">

            <input type="checkbox" name="agree" value="1" id="agree11">
            <label for="agree11">회원가입약관의 내용에 동의합니다.</label>
    </fieldset>

    <section id="fregister_private">
        <h3>개인정보처리방침안내</h3>
            <table class="left">
                <caption>개인정보처리방침안내</caption>
                <thead>
                <tr>
                    <th>목적</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>이용자 식별 및 본인여부 확인</td>
                </tr>
                <tr>
                    <td>고객서비스 이용에 관한 통지, CS대응을 위한 이용자 식별</td>
                </tr>
                </tbody>
            </table> 
            
            <table>
                <caption>개인정보처리방침안내</caption>
                <thead>
                <tr>
                    <th>항목</th>
                    <th>보유기간</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>아이디, 이름, 비밀번호</td>
                    <td>회원 탈퇴 시까지</td>
                </tr>
                <tr>
                    <td>연락처 (이메일, 휴대전화번호)</td>
                    <td>회원 탈퇴 시까지</td>
                </tr>
                </tbody>
            </table>

    </section>

    <fieldset class="fregister_agree">
        <input type="checkbox" name="agree2" value="1" id="agree21">
        <label for="agree21">개인정보처리방침안내의 내용에 동의합니다.</label>
    </fieldset>
    <div class="member-btn">
        <input class="black" type="submit" value="회원가입">
    </div>


    </form>

    <script>
    function fregister_submit(f)
    {
        if (!f.agree.checked) {
            alert("회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
            f.agree.focus();
            return false;
        }

        if (!f.agree2.checked) {
            alert("개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
            f.agree2.focus();
            return false;
        }

        return true;
    }
    </script>
<!-- } 회원가입 약관 동의 끝 -->



    </div>
</section>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>