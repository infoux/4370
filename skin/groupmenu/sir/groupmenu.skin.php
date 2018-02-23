
<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

?>

<section class="sub-issue">
    <div class="container">
        <h2>다시 꽃 피우는 평화의 섬 제주</h2>
    </div>
</section>
<!-- 메뉴 시작 { -->

<?php for ($i=0; $i<count($menu); $i++) {

  if ($g5['title'] == "로그인" || $g5['title'] == "회원가입약관" || $g5['title'] == "회원 가입" || $g5['title'] == "회원가입이 완료되었습니다." || $g5['title'] == "회원 비밀번호 확인" ) {}  else {
    
	?>


	<section class="indicator">
    <div class="container">
      <ul class="sub">
      <li class="home">
          <a href="/">홈</a>
        </li>
        
        <li class="depth1">
          <a>
          
          <?php echo $menu[0]['name']; ?>
          
          </a>
        </li>
        <li class="depth2">
        <input class="sr-only" id="depth2" type="checkbox"><label for="depth2"><?php echo $g5['title']; ?><i class="icon-down-micro" aria-hidden="true"></i></label>

            <ul>
							<?php
              for ($j=0; $j<count($menu[$i]['submenu']); $j++) {
                $submenu = $menu[$i]['submenu'][$j];
              ?>
			        <li<?php if($me_code==$submenu['code']) { echo " class=\"on\""; } ?>><a href="<?php echo $submenu['link'] ?>" target="_<?php echo $submenu['target']; ?>" ><?php echo $submenu['name'] ?>

					</a>
					</li>
			        <?php
                }
              ?>
            </ul>

        </li>
      </ul>

    </div>
  </section>
<?php
}}
?>

