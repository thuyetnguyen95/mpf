<?php include "controller/myMoneyController.php";?>

<div class="row">
    <div class="">
        <br>
    </div>

    <div class="col-md-12">
        <div class="money--info">
            <div class="col-md-4">
                <p class="left-border-primary">Số dư khả dụng: <?= $money['money_rest'];?> VNĐ</p>
                <p class="left-border-primary">Số dư đầu tháng: <?= $money['money_first'];?> VNĐ</p>
            </div>
            <div class="col-md-4">
                <p class="left-border-primary">Số tiền đã sử dụng: 1.000.000 VNĐ</p>
                <p class="left-border-primary">Số ngày còn lại trong tháng: 15 ngày</p>
            </div>
            <div class="col-md-4">
                <p class="left-border-primary">Số tiền tối đa một ngày: 100.000/ngày</p>
                <p class="left-border-primary">Tổng tiền trong tháng: <?= number_format(($money['money_first'] + $money['money_add'] - $money['money_rest']))?> VNĐ</p>
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
            <?php include_once "addMoneyTemplate.php" ?>
        </div>
    </div>

    <!-- Message for add money success -->
    <div class="row row mt-25">
        <div class="col-md-6">
            <?php
                if (isset($message) && $message != '') {
                    echo "<div class='alert alert-success alert-dismissable'>
                        <button type='button' class='close' data-dismiss='alert'>×</button>
                        ".$message."
                    </div>";
                }
            ?>
        </div>
    </div>
    
    <!-- List money for month -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Số tiền đã sử dụng qua các tháng
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center">Tháng</th>
                                <th class="text-center">Tổng tiền sử dụng</th>
                                <th class="text-center">Tổng tiền trong tháng</th>
                                <th class="text-center">Số lần thêm</th>
                                <th class="text-center">Max</th>
                                <th class="text-center">Số lần vượt max</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $stt = 0;
                            foreach ($allMoney as $moneyDetail) {
                            $stt++
                        ?>
                            <tr class="gradeX">
                                <td class="text-center" style="width:10px;"><?= $stt;?></td>
                                <td class="text-center"><?= $moneyDetail['month'];?></td>
                                <td class="text-center"><?php echo number_format(($moneyDetail['money_first'] + $moneyDetail['money_add'] - $moneyDetail['money_rest']));?> VNĐ</td>
                                <td class="text-center"><?= number_format($moneyDetail['money_first'] + $moneyDetail['money_add']);?> VNĐ</td>
                                <td class="text-center"><?= $moneyDetail['count_money_add'];?> lần</td>
                                <td class="text-center"><?= number_format($moneyDetail['money_max']);?>/ngày</td>
                                <td class="text-center"><?= $moneyDetail['over_max'];?> lần</td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
