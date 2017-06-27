<?php
if (! defined ( "_GNUBOARD_" ))
	exit (); // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
	include_once (G5_THEME_MSHOP_PATH . '/shop.head.php');
	return;
}

include_once (G5_THEME_PATH . '/head.sub.php');
include_once (G5_LIB_PATH . '/outlogin.lib.php');
include_once (G5_LIB_PATH . '/poll.lib.php');
include_once (G5_LIB_PATH . '/visit.lib.php');
include_once (G5_LIB_PATH . '/connect.lib.php');
include_once (G5_LIB_PATH . '/popular.lib.php');
include_once (G5_LIB_PATH . '/latest.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd">
	<h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

	<div id="skip_to_container">
		<a href="#container">본문 바로가기</a>
	</div>

    <?php
				
				if (defined ( '_INDEX_' )) { // index에서만 실행
					include G5_BBS_PATH . '/newwin.inc.php'; // 팝업레이어
				}
				?>

    <aside id="hd_qnb">
		<h2>쇼핑몰 퀵메뉴</h2>
		<!-- 		<div> 
			<a href="<?php //echo G5_SHOP_URL; ?>/cart.php"><img
				src="<?php //echo G5_SHOP_URL; ?>/img/hd_nb_cart.gif" alt="장바구니"></a>
			<a href="<?php //echo G5_SHOP_URL; ?>/wishlist.php"><img
				src="<?php //echo G5_SHOP_URL; ?>/img/hd_nb_wish.gif" alt="위시리스트"></a>
			<a href="<?php //echo G5_SHOP_URL; ?>/orderinquiry.php"><img
				src="<?php //echo G5_SHOP_URL; ?>/img/hd_nb_deli.gif" alt="주문/배송조회"></a>
 		</div> -->
		<div>
                <?php if ($is_member) { ?>
                <?php if ($is_admin) {  ?>
                <a href="<?php echo G5_ADMIN_URL; ?>/shop_admin/"><b>Admin</b></a>
                <?php }  ?>
                <!--<a
					 href="<?php //echo G5_BBS_URL; ?>/member_confirm.php?url=register_form.php">정보수정</a> -->
			<a href="<?php echo G5_BBS_URL; ?>/logout.php?url=shop">Logout</a>
                <?php } else { ?>
                <a href="<?php echo G5_BBS_URL; ?>/register.php">Join</a>
			<a
				href="<?php echo G5_BBS_URL; ?>/login.php?url=<?php echo $urlencode; ?>"><b>Login</b></a>
                <?php } ?>
                <a href="<?php echo G5_SHOP_URL; ?>/cart.php">Cart</a>
                <a href="<?php echo G5_SHOP_URL; ?>/mypage.php">MyPage</a>
			<a href="<?php echo G5_BBS_URL; ?>/faq.php">FAQ</a> <a
				href="<?php echo G5_BBS_URL; ?>/qalist.php">1:1Inquiry</a>
			<!-- <a href="<?php //echo G5_SHOP_URL; ?>/personalpay.php">개인결제</a> -->
			<a href="<?php echo G5_SHOP_URL; ?>/itemuselist.php">Review</a>
                <?php if(G5_COMMUNITY_USE) { ?>
                <a href="<?php echo G5_URL; ?>/">커뮤니티</a>
                <?php } ?>
                
                <div id="hd_sch">
				<h3>쇼핑몰 검색</h3>
				<form name="frmsearch1"
					action="<?php echo G5_SHOP_URL; ?>/search.php"
					onsubmit="return search_submit(this);">

					<label for="sch_str" class="sound_only">검색어<strong
						class="sound_only"> 필수</strong></label> <input type="text"
						name="q"
						value="<?php echo stripslashes(get_text(get_search_string($q))); ?>"
						id="sch_str" required>
					<button type="submit" id="sch_submit">
						<img style="width: 13px; height: 13px;" alt="검색"
							src="<?php echo G5_DATA_URL; ?>/common/icon_search.png">
					</button>
					<!--  <input type="submit" id="sch_submit"> -->

				</form>
				<script>
            function search_submit(f) {
                if (f.q.value.length < 2) {
                    alert("검색어는 두글자 이상 입력하십시오.");
                    f.q.select();
                    f.q.focus();
                    return false;
                }

                return true;
            }
            </script>
			</div>
		</div>
	</aside>

	<div id="hd_wrapper">
		<div id="logo">
			<a href="<?php echo G5_SHOP_URL; ?>/">MODIOS <!-- <img
				src="<?php //echo G5_DATA_URL; ?>/common/logo_img"
				alt="<?php //echo $config['cf_title']; ?>">
				 -->
			</a>
		</div>
		<div id="tnb">
			<h3>회원메뉴</h3>
			<!-- 	<ul>
                <?php //if ($is_member) { ?>
                <?php //if ($is_admin) {  ?>
                <li><a href="<?php //echo G5_ADMIN_URL; ?>/shop_admin/"><b>관리자</b></a></li>
                <?php //}  ?>
                <li><a
					href="<?php //echo G5_BBS_URL; ?>/member_confirm.php?url=register_form.php">정보수정</a></li>
				<li><a href="<?php //echo G5_BBS_URL; ?>/logout.php?url=shop">로그아웃</a></li>
                <?php //} else { ?>
                <li><a href="<?php //echo G5_BBS_URL; ?>/register.php">회원가입</a></li>
				<li><a
					href="<?php //echo G5_BBS_URL; ?>/login.php?url=<?php //echo $urlencode; ?>"><b>로그인</b></a></li>
                <?php //} ?>
                <li><a href="<?php //echo G5_SHOP_URL; ?>/mypage.php">마이페이지</a></li>
				<li><a href="<?php //echo G5_BBS_URL; ?>/faq.php">FAQ</a></li>
				<li><a href="<?php //echo G5_BBS_URL; ?>/qalist.php">1:1문의</a></li>
				<li><a href="<?php //echo G5_SHOP_URL; ?>/personalpay.php">개인결제</a></li>
				<li><a href="<?php //echo G5_SHOP_URL; ?>/itemuselist.php">사용후기</a></li>
                <?php //if(G5_COMMUNITY_USE) { ?>
                <li><a href="<?php //echo G5_URL; ?>/">커뮤니티</a></li>
                <?php //} ?>
            </ul>  -->
		</div>
		<div id="ssel">
			<h3>상품 카테고리</h3>
			<div id="sses1">
				<ul>
    		<?php
						$hsql = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where length(ca_id) = '2' and ca_use = '1' order by ca_order, ca_id ";
						$hresult = sql_query ( $hsql );
						$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
						for($i = 0; $row = sql_fetch_array ( $hresult ); $i ++) {
							$gnb_zindex -= 1; // html 구조에서 앞선 gnb_1dli 에 더 높은 z-index 값 부여
							                  // 2단계 분류 판매 가능한 것만
							$sql2 = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where LENGTH(ca_id) = '4' and SUBSTRING(ca_id,1,2) = '{$row['ca_id']}' and ca_use = '1' order by ca_order, ca_id ";
							$result2 = sql_query ( $sql2 );
							$count = sql_num_rows ( $result2 );
							?>
            <li style = "z-index:<?php echo $gnb_zindex; ?>"><a
						href="<?php echo G5_SHOP_URL.'/list.php?ca_id='.$row['ca_id']; ?>"><?php echo $row['ca_name']; ?></a>
					</li>
           	<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<script>
/*! Visit www.menucool.com for source code, other menu scripts and web UI controls
*  Please keep this notice intact. Thank you. */

var sse1 = function () {
    var rebound = 20; //set it to 0 if rebound effect is not prefered
    var slip, k;
    return {
        buildMenu: function () {
            var m = document.getElementById('sses1');
            if(!m) return;
            var ul = m.getElementsByTagName("ul")[0];
            m.style.width = ul.offsetWidth+1+"px";
            var items = m.getElementsByTagName("li");
            var a = m.getElementsByTagName("a");

            slip = document.createElement("li");
            slip.className = "highlight";
            ul.appendChild(slip);

            var url = document.location.href.toLowerCase();
            k = -1;
            var nLength = -1;
            for (var i = 0; i < a.length; i++) {
                if (url.indexOf(a[i].href.toLowerCase()) != -1 && a[i].href.length > nLength) {
                    k = i;
                    nLength = a[i].href.length;
                }
            }

            if (k == -1 && /:\/\/(?:www\.)?[^.\/]+?\.[^.\/]+\/?$/.test) {
                for (var i = 0; i < a.length; i++) {
                    if (a[i].getAttribute("maptopuredomain") == "true") {
                        k = i;
                        break;
                    }
                }
                if (k == -1 && a[0].getAttribute("maptopuredomain") != "false")
                    k = 0;
            }

            if (k > -1) {
                slip.style.width = items[k].offsetWidth + "px";
                //slip.style.left = items[k].offsetLeft + "px";
                sse1.move(items[k]); //comment out this line and uncomment the line above to disable initial animation
            }
            else {
                slip.style.visibility = "hidden";
            }

            for (var i = 0; i < items.length - 1; i++) {
                items[i].onmouseover = function () {
                    if (k == -1) slip.style.visibility = "visible";
                    if (this.offsetLeft != slip.offsetLeft) {
                        sse1.move(this);
                    }
                }
            }

            m.onmouseover = function () {
                if (slip.t2)
                    slip.t2 = clearTimeout(slip.t2);
            };

            m.onmouseout = function () {
                if (k > -1 && items[k].offsetLeft != slip.offsetLeft) {
                    slip.t2 = setTimeout(function () { sse1.move(items[k]); }, 50);
                }
                if (k == -1) slip.t2 = setTimeout(function () { slip.style.visibility = "hidden"; }, 50);
            };
        },
        move: function (target) {
            clearInterval(slip.timer);
            var direction = (slip.offsetLeft < target.offsetLeft) ? 1 : -1;
            slip.timer = setInterval(function () { sse1.mv(target, direction); }, 15);
        },
        mv: function (target, direction) {
            if (direction == 1) {
                if (slip.offsetLeft - rebound < target.offsetLeft)
                    this.changePosition(target, 1);
                else {
                    clearInterval(slip.timer);
                    slip.timer = setInterval(function () {
                        sse1.recoil(target, 1);
                    }, 15);
                }
            }
            else {
                if (slip.offsetLeft + rebound > target.offsetLeft)
                    this.changePosition(target, -1);
                else {
                    clearInterval(slip.timer);
                    slip.timer = setInterval(function () {
                        sse1.recoil(target, -1);
                    }, 15);
                }
            }
            this.changeWidth(target);
        },
        recoil: function (target, direction) {
            if (direction == -1) {
                if (slip.offsetLeft > target.offsetLeft) {
                    slip.style.left = target.offsetLeft + "px";
                    clearInterval(slip.timer);
                }
                else slip.style.left = slip.offsetLeft + 2 + "px";
            }
            else {
                if (slip.offsetLeft < target.offsetLeft) {
                    slip.style.left = target.offsetLeft + "px";
                    clearInterval(slip.timer);
                }
                else slip.style.left = slip.offsetLeft - 2 + "px";
            }
        },
        changePosition: function (target, direction) {
            if (direction == 1) {
                //following +1 will fix the IE8 bug of x+1=x, we force it to x+2
                slip.style.left = slip.offsetLeft + Math.ceil(Math.abs(target.offsetLeft - slip.offsetLeft + rebound) / 10) + 1 + "px";
            }
            else {
                //following -1 will fix the Opera bug of x-1=x, we force it to x-2
                slip.style.left = slip.offsetLeft - Math.ceil(Math.abs(slip.offsetLeft - target.offsetLeft + rebound) / 10) - 1 + "px";
            }
        },
        changeWidth: function (target) {
            if (slip.offsetWidth != target.offsetWidth) {
                var diff = slip.offsetWidth - target.offsetWidth;
                if (Math.abs(diff) < 4) slip.style.width = target.offsetWidth + "px";
                else slip.style.width = slip.offsetWidth - Math.round(diff / 3) + "px";
            }
        }
    };
} ();

if (window.addEventListener) {
    window.addEventListener("load", sse1.buildMenu, false);
}
else if (window.attachEvent) {
    window.attachEvent("onload", sse1.buildMenu);
}
else {
    window["onload"] = sse1.buildMenu;
}
</script>

<div id="wrapper">
	
    <?php //include(G5_SHOP_SKIN_PATH.'/boxtodayview.skin.php'); // 오늘 본 상품 ?>

    <!-- <div id="aside">
        <?php //echo outlogin('theme/shop_basic'); // 아웃로그인 ?>

        <?php //include_once(G5_SHOP_SKIN_PATH.'/boxcategory.skin.php'); // 상품분류 ?>

        <?php //include_once(G5_SHOP_SKIN_PATH.'/boxcart.skin.php'); // 장바구니 ?>

        <?php //include_once(G5_SHOP_SKIN_PATH.'/boxwish.skin.php'); // 위시리스트 ?>

        <?php //include_once(G5_SHOP_SKIN_PATH.'/boxevent.skin.php'); // 이벤트 ?>

        <?php //include_once(G5_SHOP_SKIN_PATH.'/boxcommunity.skin.php'); // 커뮤니티 ?>

        <!-- 쇼핑몰 배너 시작 { -->
        <?php //echo display_banner('왼쪽'); ?>
        <!-- } 쇼핑몰 배너 끝 -->
	<!-- </div>
	 
	<!-- } 상단 끝 -->

	<!-- 콘텐츠 시작 { -->
	<div id="container">
		
        <?php if ((!$bo_table || $w == 's' ) && !defined('_INDEX_')) { ?><div
			id="wrapper_title"><?php echo $g5['title'] ?></div><?php } ?>
        <!-- 글자크기 조정 display:none 되어 있음 시작 { -->
		<div id="text_size">
			<button class="no_text_resize"
				onclick="font_resize('container', 'decrease');">작게</button>
			<button class="no_text_resize" onclick="font_default('container');">기본</button>
			<button class="no_text_resize"
				onclick="font_resize('container', 'increase');">크게</button>
		</div>
		<!-- } 글자크기 조정 display:none 되어 있음 끝 -->