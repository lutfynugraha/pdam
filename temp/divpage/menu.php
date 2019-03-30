<div id="sidebar-wrapper">  
    <div class="user-panel">
        <div class="image pull-left" style="width:100%; background: ">
            <img src="assets/img/logo.png" style="padding: 0px 20px 0px 0px; width: 220px; height: 100px">
        </div>
    </div>
    <ul class="sidebar-nav" style="margin-top: 140px; margin-bottom: 50px">
        <li><h3>NAVIGASI</h3></li>

        <li <?php if($menu == "pa") echo 'id="active"'; ?> >
        <a href="?menu=pa">
        <span class="glyphicon glyphicon-cd"></span>&nbsp; Monitoring Penggunaan</a>
        </li>

        <li <?php if($menu == "pelanggan") echo 'id="active"'; ?> >
        <a href="?menu=pelanggan">
        <span class="glyphicon glyphicon-user"></span>&nbsp; Pelanggan</a>
        </li>

        <li <?php if($menu == "totalpenggunaan") echo 'id="active"'; ?> >
        <a href="?menu=totalpenggunaan">
        <span class="glyphicon glyphicon-list"></span>&nbsp; Total Penggunaan</a>
        </li>

        <li <?php if($menu == "admin") echo 'id="active"'; ?> >
        <a href="?menu=admin">
        <span class="glyphicon glyphicon-tower"></span>&nbsp; Admin</a>
        </li>

        <li <?php if($menu == "tentang") echo 'id="active"'; ?> >
        <a href="?menu=tentang">
        <span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp; Tentang</a></li>


</div>