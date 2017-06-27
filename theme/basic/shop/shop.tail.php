<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
    return;
}

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>

    </div>
    <!-- } 콘텐츠 끝 -->

<!-- 하단 시작 { -->
</div>

<div id="ft">
    <div>
        <ul>
            <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">company info</a></li>
            <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">agreement</a></li>
            <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">privacy policy</a></li>
        </ul>
        <p>
            <span><b>company</b> <?php echo $default['de_admin_company_name']; ?></span>
            <span><b>address</b> <?php echo $default['de_admin_company_addr']; ?></span><br>
            <span><b>business license</b> <?php echo $default['de_admin_company_saupja_no']; ?></span>
            <span><b>owner</b> <?php echo $default['de_admin_company_owner']; ?></span>
            <span><b>tel</b> <?php echo $default['de_admin_company_tel']; ?></span>
            <span><b>fax</b> <?php echo $default['de_admin_company_fax']; ?></span><br>
            <!-- <span><b>운영자</b> <?php echo $admin['mb_name']; ?></span><br> -->
            <span><b>online sales license</b> <?php echo $default['de_admin_tongsin_no']; ?></span>
            <span><b>personal info manager</b> <?php echo $default['de_admin_info_name']; ?></span>

            <?php //if ($default['de_admin_buga_no']) echo '<span><b>부가통신사업신고번호</b> '.$default['de_admin_buga_no'].'</span>'; ?><br>
            Copyright &copy; 2001-2013 <?php echo $default['de_admin_company_name']; ?>. All Rights Reserved.
        </p>
        <a href="#" id="ft_totop">top</a>
    </div>
</div>

<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script src="<?php echo G5_JS_URL; ?>/sns.js"></script>
<!-- <a href="<?php //echo get_device_change_url(); ?>" id="device_change">모바일 버전으로 보기</a>-->
<!-- } 하단 끝 -->

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');
?>
