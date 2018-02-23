<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>


</div>
        <!-- E:content -->


        <!-- S:footer -->
        <footer id="footer">
            <div class="container">

                <div class="site-link">
                    <input id="link" class="sr-only" type="checkbox">
                    <label for="link">관련기관<i class="icon-down-micro" aria-hidden="true"></i></label>
                    <ul>
                        <li><a href="http://www.jeju.go.kr" target="_blank">제주특별자치도청</a></li>
                        <li><a href="http://www.jje.go.kr" target="_blank">제주특별자치도교육청</a></li>
                        <li><a href="http://www.council.jeju.kr" target="_blank">제주특별자치도의회</a></li>
                        <li><a href="http://www.seogwipo.go.kr" target="_blank">서귀포시</a></li>
                    </ul>
                </div>

                <p class="copyright">Copyright ⓒ 제주 4·3 70주년 기념사업위원회</p>
                <address>제주특별자치도 제주로 123</address>
                <p class="contact">제안 또는 문의<a href="mailto:43jeju70@gmail.com">43jeju70@gmail.com</a></p>
            </div>

        </footer>

        <?php

            if ($config['cf_analytics']) {
                echo $config['cf_analytics'];
            }
        ?>
 

        <!-- E:footer -->
<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
