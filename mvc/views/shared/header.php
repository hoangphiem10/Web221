<header class="page-header">
    <div class="page-header__bottom">
        <div class="uk-container">
            <div class="uk-navbar-container bg-green" data-uk-navbar="">
                <div class="uk-navbar-left">
                    <a href="http://localhost/web212/home/index">
                        <img class="logo__img logo__img--full" src="../../../web212/public/assets/img/Bach-Hoa-Xanh-Logo.png" alt="logo">
                    </a>
                </div>

                <div class="uk-navbar-center">
                    <ul class="uk-navbar-nav">
                        <li <?php if ($_SERVER['REQUEST_URI'] == "/web212/home/index") { ?> class="active" <?php   }  ?>>
                            <a href="/web212/home/index"><span class="nav-btn">Trang chủ</span></a>
                        </li>
                        <li <?php if ($_SERVER['REQUEST_URI'] == "/web212/home/catalog") { ?> class="active" <?php   }  ?>>
                            <a href="/web212/home/catalog"><span class="nav-btn">Sản Phẩm</span></a>
                        </li>
                        <li <?php if ($_SERVER['REQUEST_URI'] == "/web212/news/index") { ?> class="active" <?php   }  ?>>
                            <a href="/web212/news/index"><span class="nav-btn">Tin tức</span></a>
                        </li>
                        <li <?php if ($_SERVER['REQUEST_URI'] == "/web212/home/contact") { ?> class="active" <?php   }  ?>>
                            <a href="/web212/home/contact"><span class="nav-btn">Liên hệ</span></a>
                        </li>
                    </ul>
                </div>

                <div class="uk-navbar-right">
                    <div class="other-links">
                        <ul class="other-links-list">
                            <li>
                                <?php
                                if (isset($_SESSION['name'])) {
                                    echo "Xin chào, " . "<span>" .  $_SESSION['name'] . "</span>";
                                } else echo "<a style='color: white; font-weight: bold' href='http://localhost/web212/User/sign_in' class='nav-btn'>Đăng nhập</a>";

                                echo "<span style='margin: 0 12px'> | </span>";
                                ?>
                            </li>
                            <li><a href="#modal-full" data-uk-toggle><span class="text-white" data-uk-icon="search"></span></a></li>
                            <li><a href="http://localhost/web212/home/cart">
                                    <span class="text-white" data-uk-icon="cart">
                                    </span></a></li>

                            <?php
                            if (isset($_SESSION['id'])) {
                                echo "<li><a href='http://localhost/web212/home/account'><span class='text-white' data-uk-icon='user'></span></a></li>
                                  <li><a href='http://localhost/web212/User/log_out'><span class='text-white' data-uk-icon='sign-out'></span></a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-header__top">
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar="">

                <div class="uk-navbar-left">
                    <button class="uk-button" type="button" data-target="#offcanvas" data-uk-toggle data-uk-icon="menu"></button>
                </div>
                <div class="uk-navbar-right">
                    <div class="other-links">
                        <ul class="other-links-list">
                            <li>
                                <?php
                                if (isset($_SESSION['name'])) {
                                    echo "Xin chào, " . "<span>" .  $_SESSION['name'] . "</span>";
                                } else echo "<a style='color: white; font-weight: bold' href='http://localhost/web212/User/sign_in' class='nav-btn'>Đăng nhập</a>";
                                ?>
                            </li>

                            <?php
                            if (isset($_SESSION['id'])) {
                                echo "<li><a href='http://localhost/web212/home/account'><span class='text-white' data-uk-icon='user'></span></a></li>
                                  <li><a href='http://localhost/web212/User/log_out'><span class='text-white' data-uk-icon='sign-out'></span></a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>
    <div style="background-color: #56B280; height: 1px; width: 100%; margin: 0"></div>
    <div id="offcanvas" data-uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">
            <div class="uk-margin-bottom">
                <div class="uk-margin">
                    <form class="uk-search uk-search-default" name="searchform" action="#" method="POST">
                        <span class="uk-search-icon-flip" uk-search-icon></span>
                        <input class="uk-search-input" type="search" aria-label="Search" aria-label="Search" name="searchinput" placeholder="Nhập sản phẩm cần tìm...">
                    </form>
                </div>
                <button class="uk-offcanvas-close" type="button" data-uk-close="" style="margin-top:8px"></button>

            </div>
            <hr class="uk-margin">
            <div class="uk-margin-top">
                <ul class="uk-navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="http://localhost/web212/home/index">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/web212/home/catalog">Sản phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/web212/News/index">Tin tức</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/web212/home/contact">Liên hệ</a></li>
                </ul>
            </div>
            <hr class="uk-margin">
            <ul class="uk-nav uk-nav-parent-icon" data-uk-nav>
                <li class="">
                    <a href="http://localhost/web212/home/catalog">Trái cây</a>
                </li>

                <li class="">
                    <a href="http://localhost/web212/home/catalog">Thịt</a>
                </li>

                <li class="">
                    <a href="http://localhost/web212/home/catalog">Rau củ quả</a>
                </li>

                <li class="">
                    <a href="http://localhost/web212/home/catalog">Thủy hải sản</a>
                </li>
            </ul>
            <hr class="uk-margin">
            <div class="uk-margin-bottom">
                <a href="http://localhost/web212/home/index">
                    <img class="" src="../../../web212/public/assets/img/Bach-Hoa-Xanh-Logo.png" alt="logo">
                </a>
            </div>
        </div>
    </div>
    <div class="uk-flex-top" id="callback" data-uk-modal="">
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="button" data-uk-close=""></button>
            <p></p>
        </div>
    </div>
    <div class="uk-modal-full uk-modal" id="modal-full" data-uk-modal>
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle modal-search" data-uk-height-viewport>
            <button class="uk-modal-close-full" type="button" data-uk-close></button>
            <form class="uk-search uk-search-large" name="searchform" action="#" method="POST">
                <input class="uk-search-input uk-text-center" type="search" name="searchinput" placeholder="Nhập sản phẩm cần tìm..." autofocus>
            </form>
        </div>
    </div>

</header>

<?php
if (isset($_POST['searchinput'])) {
    echo '<script type = "text/javascript">
        window.location.href = "http://localhost/web212/home/search/' . $_POST['searchinput'] . '"</script>';
}
?>

<style>
    .uk-navbar-nav.uk-subnav-pill .active {
        background: #2C5F2D;
    }

    .nav-item a.active {
        color: red;
    }
</style>