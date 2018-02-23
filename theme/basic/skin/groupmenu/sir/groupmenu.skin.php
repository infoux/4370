<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가


?>

<!-- 메뉴 시작 { -->

<?php for ($i=0; $i<count($menu); $i++) {

	?>


	<section class="indicator">
    <div class="container">
      <ul class="sub">
        <li>
          <a href="/" class="home"><i class="icon-home" aria-hidden="true"></i>홈</a>
        </li>
        <li>
          <a><?php echo $menu[$i]['name'] ?></a>

        </li>
        <li>
          <a><?php echo $g5['title']; ?><i class="icon-angle-down" aria-hidden="true"></i></a>

          <div class="sub-menu">
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

          </div>
        </li>
      </ul>

    </div>
  </section>



<?php
}
?>
