<div class="row">
    <div class="">
        <br>
    </div>

    <div class="col-md-12">
        <div class="money--info">
            <div class="col-md-4">
                <p class="left-border-primary">Số dư khả dụng: 1.500.000 VNĐ</p>
                <p class="left-border-primary">Số dư đầu tháng: 2.500.000 VNĐ</p>
            </div>
            <div class="col-md-4">
                <p class="left-border-primary">Số tiền đã sử dụng: 1.000.000 VNĐ</p>
                <p class="left-border-primary">Số ngày còn lại trong tháng: 15 ngày</p>
            </div>
            <div class="col-md-4">
                <p class="left-border-primary">Số tiền tối đa một ngày: 100.000/ngày</p>
            </div>
        </div>
    </div>
    <div class="row break-line-info"></div>
    <div class="row mt-25">
        <div class="col-md-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                <i class="fa fa-plus" aria-hidden="true"></i> Nhập tiền của bạn
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="?view=yourMoney&act=addMoney">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"> Nhập thông tin tiền của bạn</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Số tiền khả dụng trong tháng <small class="text-danger">(chỉ nhập số)</small></label>
                                <input type="number" class="form-control" name="money_first" placeholder="vd: 1,500,000" required>
                                <small class="text-muted">Tiền khả dụng: là số tiền bạn dự định được phép sử dụng trong tháng này</small>
                            </div>
                            <div class="form-group">
                                <label>Số tiền hạn mức cho 1 ngày (ước lượng) <small class="text-danger">(chỉ nhập số)</small></label>
                                <input type="number" class="form-control" name="money_max" placeholder="vd: 50,000" required>
                                <small class="text-muted">Số tiền hạn mức: là số tiền bạn mong muốn 1 ngày sử dụng không quá hạn mức đó</small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">Lưu số tiền</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- List money for month -->
    <div class="row mt-25">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeX">
                                <td>Misc</td>
                                <td>Lynx</td>
                                <td>Text only</td>
                                <td class="center">-</td>
                                <td class="center">X</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Misc</td>
                                <td>IE Mobile</td>
                                <td>Windows Mobile 6</td>
                                <td class="center">-</td>
                                <td class="center">C</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Misc</td>
                                <td>PSP browser</td>
                                <td>PSP</td>
                                <td class="center">-</td>
                                <td class="center">C</td>
                            </tr>
                            <tr class="gradeU">
                                <td>Other browsers</td>
                                <td>ahihihihi</td>
                                <td>-</td>
                                <td class="center">-</td>
                                <td class="center">U</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
