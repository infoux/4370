<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

?>





<section class="board ucc-view">
    <div class="container">

        <h2><?php echo $board['bo_subject'] ?></h2>

<!-- 게시물 읽기 시작 { -->

    <div class="bo-content">



        <!-- 본문 내용 시작 { -->

        <div class="video">


			<?php
				$youtubeID = $view['wr_link1']; 
				//현재 전체 주소를 가져온다. 예) http://www.naver.com
				$youtubeID = explode('/',$youtubeID); 
				//echo $youtubeID[3];
				?>
			<?php if(wr_link1){ // 리스트에 동영상 보여줌 ?>
			<iframe name="video" width="560" height="315" src="//www.youtube.com/embed/<?php echo $youtubeID[3]; ?>" frameborder="0" allowfullscreen></iframe><br>
			<?php echo get_view_thumbnail($view['content']); ?>
			<?php } else { ?>
			<?php echo get_view_thumbnail($view['content']); ?>
			<?php } ?>


        </div>



        <dl class="text">
            <dt>제목</dt>
            <dd><?php echo $view['wr_subject']; ?></dd>

            <dt>URL</dt>
            <dd>

            <?php echo $view['wr_link1']; ?>

            </dd>

            <dt>내용</dt>
            <dd><?php echo get_view_thumbnail($view['content']); ?></dd>
        </dl>



        </div>

        <div class="board-tools">
            <ul class="btn-set">
                <a class="back" href="<?php echo $list_href ?>" class="circle-btn">목록으로</a>
                <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_b01">수정</a></li><?php } ?>
                <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01" onclick="del(this.href); return false;">삭제</a></li><?php } ?>
            </ul>
        </div>


<!-- } 게시판 읽기 끝 -->









    </div>
</section>





<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->