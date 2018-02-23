<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->

<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

<!-- S:skip_navi -->
<div class="skip_navi">
    <a class="sr-only sr-only-focusable" href="#content">본문 바로가기</a>
    <a class="sr-only sr-only-focusable" href="#footer">푸터 바로가기</a>
</div>
<!-- E:skip_navi -->

<header id="header">
    <div class="sns-links">
        <div class="container">
            <input id="sns-check" type="checkbox">
            <label for="sns-check"><i class="icon-share"></i>SNS 공유하기</label>
            <ul>
                <li>
                    <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//4370jeju.infomind.co.kr/" target="_blank"><i class="icon-facebook"></i>페이스북</a>
                </li>
                <li>
                    <a class="twitter" href="https://twitter.com/home?status=http%3A//4370jeju.infomind.co.kr/" target="_blank"><i class="icon-twitter"></i>트위터</a>
                </li>
                <!--<li>
                    <a class="instagram" href="" target="_blank"><i class="icon-instagram"></i>인스타그램</a>
                </li>
                <li class="kakao" href="#"  id="kakaostory-share-button" data-url="http://4370jeju.infomind.co.kr/"><i class="icon-kakao"></i>카카오스토리
                </li>-->
            </ul>
        </div>
    </div>
    <div class="container">

        <ul class="tnb">
            <?php if ($is_member) {  ?>
            <li>
                <a
                    href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">
                    <i class="icon-modify"></i>정보수정</a>
            </li>
            <li>
                <a href="<?php echo G5_BBS_URL ?>/logout.php">
                    <i class="icon-logout"></i>로그아웃</a>
            </li>
        <?php } else {  ?>

            <li>
                <a href="<?php echo G5_BBS_URL ?>/login.php">
                    <i class="icon-login"></i>로그인
                </a>
            </li>
            <li>
                <a href="<?php echo G5_BBS_URL ?>/register.php">
                    <i class="icon-join"></i>회원가입
                </a>
            </li>
            <?php }  ?>
        </ul>

        <h1>
            <a href="/"><?php echo $config['cf_title']; ?></a>
        </h1>
        <button class="menu">
            <i class="icon-menu"></i>메뉴토글</button>

    </div>
    <nav>
        
        <ul class="main-menu">









            <?php
            $sql = " select *
                        from {$g5['menu_table']}
                        where me_use = '1'
                          and length(me_code) = '2'
                        order by me_order, me_id ";
            $result = sql_query($sql, false);
            $gnb_zindex = 999; // gnb_1dli z-index 값 설정용

            for ($i=0; $row=sql_fetch_array($result); $i++) {


              if(strstr($row['me_link'], ".php?"))
        				$qstr = "&me_code=".$row['me_code'];
        			// link주소에 파라미터가 없는 경우
        			else
        				$qstr = "?me_code=".$row['me_code'];
        					?>

            <li class="depth1">
                <a class="hd1" href="<?php echo $row['me_link']; ?><?php echo $qstr; ?>" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
                
                <?php
                $sql2 = " select *
                            from {$g5['menu_table']}
                            where me_use = '1'
                              and length(me_code) = '4'
                              and substring(me_code, 1, 2) = '{$row['me_code']}'
                            order by me_order, me_id ";
                $result2 = sql_query($sql2);

                for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                if(strstr($row2['me_link'], ".php?"))
                  $qstr2 = "&me_code=".$row2['me_code'];
        				// link주소에 파라미터가 없는 경우
        				else
        					$qstr2 = "?me_code=".$row2['me_code'];


                    if($k == 0)
                        echo '<ul class="depth2">'.PHP_EOL;
                ?>
                    <li><a href="<?php echo $row2['me_link']; ?><?php echo $qstr2; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                <?php
                }

                if($k > 0)
                    echo '</ul>'.PHP_EOL;
                ?>
            </li>
            <?php
            }

            if ($i == 0) {  ?>
                <li id="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
            <?php } ?>






        </ul>





        <div class="head-links">
            <a class="archive" href="http://www.43archives.or.kr" target="_blank">4·3 70주년 아카이브</a>
            <a class="facebook" href="https://www.facebook.com/jeju4370/" target="_blank"><i class="icon-facebook"></i>4·3 페이스북</a>
            <a class="blog" href="https://blog.naver.com/4370jeju" target="_blank"><i class="icon-blog"></i>4·3 블로그</a>
        </div>
    </nav>

</header>

<!-- 콘텐츠 시작 { -->

<!-- S:content -->
<div id="content" <?php if(defined('_INDEX_')) { echo "class='main'";} ?>>



