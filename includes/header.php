<?php include 'configImgs.php'; ?>
<?php include 'configLinks.php'; ?>

<ul class="menu-bar">
    <li>
        <a href="<?php echo $link_home; ?>">
            <i class="fa fa-home" aria-hidden="true"></i>
            <p class="p-menu">หน้าแรก</p>
        </a>
    </li>
    <li>
        <a target="_blank"  href="<?php echo $link_signIn; ?>">

            <i class="fa fa-gamepad" aria-hidden="true"></i>
            <p class="p-menu">บัญชีเกมส์</p>
        </a>
    </li>
    <li>
        <a target="_blank"  href="<?php echo $link_signIn; ?>">
            <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
            <p class="p-menu">ฝากเงิน</p>
        </a>
    </li>
    <li>
        <a target="_blank"  href="<?php echo $link_signIn; ?>">
            <i class="fa fa-caret-square-o-left" aria-hidden="true"></i>
            <p class="p-menu">ถอนเงิน</p>
        </a>
    </li>
    <li>
        <a target="_blank"  href="<?php echo $link_signIn; ?>">
            <i class="fa fa-users" aria-hidden="true"></i>
            <p class="p-menu">แนะนำเพื่อน</p>
        </a>

    </li>
    <li>
        <a target="_blank"  href="<?php echo $link_line; ?>">
            <img class="line-icon" src=<?php echo $line_icon ?>>
            <p class="p-menu">ID LINE: <?php echo $line_name ?></p>
        </a>

    </li>
</ul>

