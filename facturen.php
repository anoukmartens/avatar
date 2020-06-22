<?php include 'shared/head.php';?>
<?php include 'shared/header.php';?>

    <div class="main-container extra">

        <?php include 'shared/sidebar.php';?>

        <div class="content-container">

        <div class="mailbox-area mg-b-15">
            <div class="container-fluid">
                <div class="row first">
                
                <h1>Facturen</h1>
                    <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="hpanel">
                            <div class="panel-body">
                                <div class="table-responsive ib-tb">
                                    <table class="table table-hover table-mailbox">
                                        <tbody>
                                            <tr>
                                                <td class="">
                                                    <div class="checkbox checkbox-single checkbox-success">
                                                        <input type="checkbox" checked>
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td>Factuur juni 2020</td>
                                                <td>Nog niet voldaan
                                                </td>
                                                <td><a onclick="downloadFactuur()" href="#"><i class="fa fa-download"></i></a></td>
                                                <td class="text-right mail-date">Ma, 22 juni</td>
                                            </tr>
                                            <tr>
                                                <td class="">
                                                    <div class="checkbox checkbox-single checkbox-success">
                                                        <input type="checkbox" checked>
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td>Factuur mei 2020</td>
                                                <td>Betaald
                                                </td>
                                                <td><a onclick="downloadFactuur()" href="#"><i class="fa fa-download"></i></a></td>
                                                <td class="text-right mail-date">Vr, 25 mei</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
        
        <?php include 'shared/footer.php';?>
