<aside class="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-header">
            <div class="brand">
                <div class="logo">
                    <span class="l l1"></span>
                    <span class="l l2"></span>
                    <span class="l l3"></span>
                    <span class="l l4"></span>
                    <span class="l l5"></span>
                </div> Dojotomania </div>
        </div>
        <nav class="menu">
            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                <li class="active">
                    <a href="index.html">
                        <i class="fa fa-home"></i> Dashboard </a>
                </li>
                <li>
                    <a href="<?php echo site_url('administrator/post'); ?>">
                        <i class="fa fa-th-large"></i> Buat Post
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-list"></i> List
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="charts-flot.html"> Leads </a>
                        </li>
                        <li>
                            <a href="charts-morris.html"> Users </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-folder"></i> Report
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="charts-flot.html"> Pengunjung </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-area-chart"></i> Charts
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="charts-flot.html"> Flot Charts </a>
                        </li>
                        <li>
                            <a href="charts-morris.html"> Morris Charts </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </nav>
    </div>
    <footer class="sidebar-footer">
        <ul class="sidebar-menu metismenu" id="customize-menu">
            <li>
                <ul>
                    <li class="customize">
                        <div class="customize-item">
                            <div class="row customize-header">
                                <div class="col-4"> </div>
                                <div class="col-4">
                                    <label class="title">fixed</label>
                                </div>
                                <div class="col-4">
                                    <label class="title">static</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="title">Sidebar:</label>
                                </div>
                                <div class="col-4">
                                    <label>
                                        <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed">
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label>
                                        <input class="radio" type="radio" name="sidebarPosition" value="">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="title">Header:</label>
                                </div>
                                <div class="col-4">
                                    <label>
                                        <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label>
                                        <input class="radio" type="radio" name="headerPosition" value="">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="title">Footer:</label>
                                </div>
                                <div class="col-4">
                                    <label>
                                        <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label>
                                        <input class="radio" type="radio" name="footerPosition" value="">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="customize-item">
                            <ul class="customize-colors">
                                <li>
                                    <span class="color-item color-red" data-theme="red"></span>
                                </li>
                                <li>
                                    <span class="color-item color-orange" data-theme="orange"></span>
                                </li>
                                <li>
                                    <span class="color-item color-green active" data-theme=""></span>
                                </li>
                                <li>
                                    <span class="color-item color-seagreen" data-theme="seagreen"></span>
                                </li>
                                <li>
                                    <span class="color-item color-blue" data-theme="blue"></span>
                                </li>
                                <li>
                                    <span class="color-item color-purple" data-theme="purple"></span>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <a href="">
                    <i class="fa fa-cog"></i> Customize </a>
            </li>
        </ul>
    </footer>
</aside>