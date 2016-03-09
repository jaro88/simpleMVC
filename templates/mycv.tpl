{include file="header.tpl"}
    <div id="wrapper">

        <!-- Sidebar -->
            {include file="menu.tpl"}
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" style="margin-left: -40px" id="menu-toggle">Menu</a>
                        <h1>Životopis</h1>

                                <iframe src="{$rootURL}ViewerJS/#../zivotopis.pdf" width="100%" height="800px"></iframe>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper --> 

{include file="footer.tpl"}
