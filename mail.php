<?php include 'shared/head.php';?>
<?php include 'shared/sidebar.php';?>



    <div class="all-content-wrapper">
        
        <?php include 'shared/header.php';?>

        <div class="mailbox-area mg-b-15">
            <div class="container-fluid">
                <div class="row first">
                    <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">

                                <ul class="mailbox-list">
                                    <li class="active">
                                        <a href="#">
												<span class="pull-right">1</span>
												<i class="fa fa-envelope"></i> Inbox
											</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-paper-plane"></i> Verzonden</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pencil"></i> Concepten</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-trash"></i> Verwijderd</a>
                                    </li>
                                </ul>
                                <hr>
                                <ul class="mailbox-list">
                                    <li>
                                        <a href="#"><i class="fa fa-calendar text-success"></i> Herinnering</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-flag text-primary"></i> Updates</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-file text-danger"></i> Belangrijk</a>
                                    </li>
                                </ul>
                                <hr>
                                <ul class="mailbox-list">
                                    <li>
                                        <a href="#"><i class="fa fa-gears"></i> Mailbox instellingen</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="hpanel">
                            <div class="panel-heading hbuilt mailbox-hd">
                                <div class="text-center p-xs font-normal">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-sm" placeholder="Zoeken..."> <span class="input-group-btn active-hook"> <button type="button" class="btn btn-sm btn-default">Search
											</button> </span></div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 col-md-6 col-sm-6 col-xs-8">
                                        <div class="btn-group ib-btn-gp active-hook mail-btn-sd mg-b-15">
                                            <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-default btn-sm"><i class="fa fa-exclamation"></i></button>
                                            <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                                            <button class="btn btn-default btn-sm"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-default btn-sm"><i class="fa fa-tag"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-6 col-sm-6 col-xs-4 mailbox-pagination">
                                        <div class="btn-group ib-btn-gp active-hook mail-btn-sd mg-b-15">
                                            <a href="#"><button class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Nieuw bericht</button></a>
                                            <button class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i></button>
                                            <button class="btn btn-default btn-sm"><i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive ib-tb">
                                    <table class="table table-hover table-mailbox">
                                        <tbody>
                                            <tr class="unread">
                                                <td class="">
                                                    <div class="checkbox checkbox-single checkbox-success">
                                                        <input type="checkbox" checked>
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td><a href="#">Team Avatar </a><span class="label label-success">Herinnering</span></td>
                                                <td><a href="#">Herinnering: Sprint meeting, 25 juni 2020 om 14:30</a>
                                                </td>
                                                <td><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right mail-date">Vr, 5 juni</td>
                                            </tr>
                                            <tr>
                                                <td class="">
                                                    <div class="checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td><a href="#">Raies Bengattou</a></td>
                                                <td><a href="#">Social media moodboard</a>
                                                </td>
                                                <td></td>
                                                <td class="text-right mail-date">Wo, 3 juni</td>
                                            </tr>
                                            <tr>
                                                <td class="">
                                                    <div class="checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td><a href="#">Team Avatar</a> <span class="label label-primary">Update</span></td>
                                                <td><a href="#">Hier is die dan: de update van juni!</a></td>
                                                <td><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right mail-date">Ma, 1 juni</td>
                                            </tr>
                                            <tr>
                                                <td class="">
                                                    <div class="checkbox checkbox-single">
                                                        <input type="checkbox" checked>
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td><a href="#">Anouk Martens</a></td>
                                                <td><a href="#">Nieuwe brainstorm sessie</a></td>
                                                <td></td>
                                                <td class="text-right mail-date">Do, 21 mei</td>
                                            </tr>
                                            <tr>
                                                <td class="">
                                                    <div class="checkbox checkbox-single checkbox-success">
                                                        <input type="checkbox" checked>
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td><a href="#">Giancarlo de Windt</a></td>
                                                <td><a href="#">Feedback Brandbook</a></td>
                                                <td><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right mail-date">Vr, 15 mei</td>
                                            </tr>
                                            <tr>
                                                <td class="">
                                                    <div class="checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td><a href="#">Team Avatar </a><span class="label label-danger">Belangrijk</span></td>
                                                <td><a href="#">Factuur aanbetaling</a></td>
                                                <td><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right mail-date">Wo, 6 mei</td>
                                            </tr>
                                            <tr>
                                                <td class="">
                                                    <div class="checkbox checkbox-single checkbox-success">
                                                        <input type="checkbox" checked>
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td><a href="#">Anouk Martens</a></td>
                                                <td><a href="#">Debriefing brainstormsessie</a>
                                                </td>
                                                <td><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right mail-date">Ma, 27 april</td>
                                            </tr>
                                            <tr>
                                                <td class="">
                                                    <div class="checkbox checkbox-single checkbox-success">
                                                        <input type="checkbox" checked>
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td><a href="#">Team Avatar </a><span class="label label-success">Herinnering</span></td>
                                                <td><a href="#">Herinnering: Brainstormsessie, 23 april 2020 om 14:30</a>
                                                </td>
                                                <td><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right mail-date">Ma, 20 april</td>
                                            </tr>
                                            <tr>
                                                <td class="">
                                                    <div class="checkbox">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td><a href="#">Anouk Martens</a></td>
                                                <td><a href="#">RE: Brainstormsessie 23 april</a></td>
                                                <td></td>
                                                <td class="text-right mail-date">Di, 14 april</td>
                                            </tr>
                                            <tr>
                                                <td class="">
                                                    <div class="checkbox checkbox-single">
                                                        <input type="checkbox" checked>
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td><a href="#">Anouk Martens</a></td>
                                                <td><a href="#">Brainstormsessie 23 april</a></td>
                                                <td></td>
                                                <td class="text-right mail-date">Ma, 13 april</td>
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
        
        <?php include 'shared/footer.php';?>
