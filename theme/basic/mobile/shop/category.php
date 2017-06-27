<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

function get_mshop_category($ca_id, $len)
{
    global $g5;

    $sql = " select ca_id, ca_name from {$g5['g5_shop_category_table']}
                where ca_use = '1' ";
    if($ca_id)
        $sql .= " and ca_id like '$ca_id%' ";
    $sql .= " and length(ca_id) = '$len' order by ca_order, ca_id ";

    return $sql;
}
?>

<button type="button" id="hd_ct">분류</button>
<div id="category">
    <div class="ct_wr">
        <ul class="cate_tab">
            <li><a href="#" class="ct_tab_sl">Menu</a></li>
           <!--  <li><a href="<?php echo G5_SHOP_URL; ?>/mypage.php">MY PAGE</a></li>
            <li><a href="<?php echo G5_SHOP_URL; ?>/cart.php">CART</a></li>  -->
        </ul>
        <ul class = "cate">
        <?php if ($is_member) { ?>
        <?php if ($is_admin) {  ?>
        <li><a href="<?php echo G5_ADMIN_URL ?>/shop_admin/"><b>관리자</b></a></li>
        <?php } else { ?>
        <li><a href="<?php echo G5_BBS_URL; ?>/member_confirm.php?url=register_form.php">Update info</a></li>
        <?php } ?>
        <li><a href="<?php echo G5_BBS_URL; ?>/logout.php?url=shop">Logout</a></li>
        <?php } else { ?>
        <li><a href="<?php echo G5_BBS_URL; ?>/login.php?url=<?php echo $urlencode; ?>">Login</a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/register.php" id="snb_join">Join</a></li>
        <?php } ?>
        <li><a href="<?php echo G5_SHOP_URL; ?>/mypage.php">Mypage</a></li>
        <li><a href="<?php echo G5_SHOP_URL; ?>/cart.php" class="tnb_cart">Cart</a></li>
        	<li><a href = "<?php echo G5_BBS_URL; ?>/faq.php">FAQ</a></li>
        	<li><a href="<?php echo G5_BBS_URL; ?>/qalist.php">1:1Inquiry</a></li>
        </ul>
       
        <button type="button" class="pop_close"><span class="sound_only">카테고리 </span>닫기</button>
    </div>
</div>

<script>
$(function (){
    var $category = $("#category");

    $("#hd_ct").on("click", function() {
        $category.css("display","block");
    });

    $("#category .pop_close").on("click", function(){
        $category.css("display","none");
    });

    $("button.sub_ct_toggle").on("click", function() {
        var $this = $(this);
        $sub_ul = $(this).closest("li").children("ul.sub_cate");

        if($sub_ul.size() > 0) {
            var txt = $this.text();

            if($sub_ul.is(":visible")) {
                txt = txt.replace(/닫기$/, "열기");
                $this
                    .removeClass("ct_cl")
                    .text(txt);
            } else {
                txt = txt.replace(/열기$/, "닫기");
                $this
                    .addClass("ct_cl")
                    .text(txt);
            }

            $sub_ul.toggle();
        }
    });
});
</script>
