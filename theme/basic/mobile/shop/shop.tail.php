<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>

</div><!-- container End -->

<div id="ft">
    <h2><?php echo $config['cf_title']; ?> 정보</h2>
    <p>
        <span><b>company</b> <?php echo $default['de_admin_company_name']; ?></span><br>
        <span><b>address</b> <?php echo $default['de_admin_company_addr']; ?></span><br>
        <span><b>business license</b> <?php echo $default['de_admin_company_saupja_no']; ?></span><br>
        <span><b>owner</b> <?php echo $default['de_admin_company_owner']; ?></span>
        <span><b>tel</b> <?php echo $default['de_admin_company_tel']; ?></span>
        <span><b>fax</b> <?php echo $default['de_admin_company_fax']; ?></span><br>
        <!-- <span><b>운영자</b> <?php echo $admin['mb_name']; ?></span><br> -->
        <span><b>online sales license</b> <?php echo $default['de_admin_tongsin_no']; ?></span><br>
        <span><b>personal info manager</b> <?php echo $default['de_admin_info_name']; ?></span>

        <?php if ($default['de_admin_buga_no']) echo '<span><b>부가통신사업신고번호</b> '.$default['de_admin_buga_no'].'</span>'; ?><br>
        Copyright &copy; 2001-2013 <?php echo $default['de_admin_company_name']; ?>. All Rights Reserved.
    </p>
    <a href="#" id="ft_to_top">TOP↑</a>
</div>

<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script src="<?php echo G5_JS_URL; ?>/sns.js"></script>

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');
?>
