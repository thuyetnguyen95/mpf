<?php include "controller/editBoughtController.php"; ?>

<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Chỉnh sửa thông tin sản phẩm đã mua</h4>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Form nhập thông tin
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-pills">
                    <li class="active"><a href="#home-pills" data-toggle="tab"><i class="fa fa-plus"></i> Mua bây giờ</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="home-pills"><br>
                        <form role="form" method="post" action="?view=editBought&act=updateItem">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Loại mặt hàng</label>
                                        <select class="form-control" name="type_id" required="">
                                            <option value="">-- Chọn một loại mặt hàng --</option>
                                            <option value="1" <?= $itemEdit['type_id'] == 1 ? 'selected' : '' ?>>Thức ăn</option>
                                            <option value="2" <?= $itemEdit['type_id'] == 2 ? 'selected' : '' ?>>Nước uống</option>
                                            <option value="3" <?= $itemEdit['type_id'] == 3 ? 'selected' : '' ?>>Đồ ăn vặt</option>
                                            <option value="4" <?= $itemEdit['type_id'] == 4 ? 'selected' : '' ?>>Quẩn áo</option>
                                            <option value="5" <?= $itemEdit['type_id'] == 5 ? 'selected' : '' ?>>Dụng cụ nhà</option>
                                            <option value="6" <?= $itemEdit['type_id'] == 6 ? 'selected' : '' ?>>Loại khác ...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Ngày mua</label>
                                        <input class="form-control" name="buydate" type="date" id="datePicker" required="" value="<?= $itemEdit['buydate'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-empire"></i></span>
                                <input type="text" name="itemname" class="form-control" placeholder="Tên mặt hàng" required="" value="<?= $itemEdit['name'] ?>">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" name="itemcost" class="form-control" placeholder="Giá tiền" required="" value="<?= $itemEdit['cost'] ?>">
                                <span class="input-group-addon">VND</span>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                                <textarea name="comment" id="" cols="30" rows="3" class="form-control" placeholder="Vì sao mua sản phẩm này ?" style="resize: vertical"><?= $itemEdit['comment'] ?></textarea>
                            </div>
                            <div class="form-group input-group">
                                <button type="submit" name="addItem" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Lưu lại</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
</div>