<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech</title>
    <!--link css-->
    <link rel="stylesheet" type="text/css" title="" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" title="" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" title="" href="css/lib/slick.min.css">
    <link rel="stylesheet" type="text/css" title="" href="css/lib/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" title="" href="css/lib/jquery.mmenu.all.css">
    <link rel="stylesheet" type="text/css" title="" href="css/style.css">

    <script type="text/javascript" src="js/lib/jquery.min.js"></script> 
</head>
<body>  
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo"><a href=""><img src="images/logo.png" class="img-fluid" alt=""></a></div>
                    </div>
                    <div class="col-md-9">
                        <div class="head-right">
                            <div class="social">
                                <ul>
                                    <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div>
                            <div class="info-head-top">
                                <ul>
                                    <li>
                                        <div class="icon"><img src="images/hotline.png" class="img-fluid" alt=""></div>
                                        <div class="info">
                                            <span>Hotline</span>
                                            <p>0928 737 717</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><img src="images/gmail.png" class="img-fluid" alt=""></div>
                                        <div class="info">
                                            <span>Email</span>
                                            <p>demo@gmail.com.vn</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <div class="h-menu">
                            <ul>
                                <li><a href="" class="active">Trang chủ</a></li>
                                <li><a href="">Giới thiệu</a></li>
                                <li>
                                    <a href="">Khóa học <i class="fa fa-angle-down"></i></a>
                                    <div class="mega-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="item-submenu">
                                                        <h3>Lịch khai giảng</h3>
                                                        <ul>
                                                            <li><a href=""><i class="fa fa-caret-right"></i>Luyện thi IELTS</a></li>
                                                            <li><a href=""><i class="fa fa-caret-right"></i>Luyện thi IELTS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="item-submenu">
                                                        <h3>Luyện thi IELTS</h3>
                                                        <ul>
                                                            <li><a href=""><i class="fa fa-caret-right"></i>Luyện thi IELTS</a></li>
                                                            <li><a href=""><i class="fa fa-caret-right"></i>Luyện thi IELTS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="item-submenu">
                                                        <h3>Luyện thi TOEIC</h3>
                                                        <ul>
                                                            <li><a href=""><i class="fa fa-caret-right"></i>Luyện thi IELTS</a></li>
                                                            <li><a href=""><i class="fa fa-caret-right"></i>Luyện thi IELTS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="item-submenu">
                                                        <h3>Bài thi khác</h3>
                                                        <ul>
                                                            <li><a href=""><i class="fa fa-caret-right"></i>Luyện thi IELTS</a></li>
                                                            <li><a href=""><i class="fa fa-caret-right"></i>Luyện thi IELTS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="">Sách</a></li>
                                <li><a href="">Kiến thức</a></li>
                                <li><a href="">Liên hệ</a></li>
                                <li><a href="">Tuyển dụng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <div class="box-user">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i><span>Đăng nhập</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="content-popup">
                            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>  -->
                            <h3 class="text-uppercase">Đăng nhập</h3>
                            <div class="frm-popup">
                                <div class="item"><input type="text" placeholder="Tài khoản" class="txt_field"></div>
                                <div class="item"><input type="password" placeholder="Mật khẩu" class="txt_field"></div>
                                <div class="item text-center"><input type="submit" value="Đăng nhập" class="btn_field"></div>
                                <div class="item text-center"><a href="">Quên mật khẩu?</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
 