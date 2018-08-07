<?php include "controller/newItemsController.php";?>
<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">THÊM MẶT HÀNG SẮP MUA</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12"></div>
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Bảng nhập thông tin
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills">
                        <li class="<?php if($newItem) echo 'active';?>"><a href="#home-pills" data-toggle="tab"><i class="fa fa-plus"></i> Mua bây giờ</a>
                        </li>
                        <li class="<?php if($newItemIntend) echo 'active';?>"><a href="#profile-pills" data-toggle="tab"><i class="fa fa-clock-o"></i> Dự định mua</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home-pills"><br>
                            <form role="form" method="post" action="?view=newItems&act=addItem">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Loại mặt hàng</label>
                                            <select class="form-control" name="itemtype" required>
                                                <option value="">-- Chọn một loại mặt hàng --</option>
                                                <option value="1">Thức ăn</option>
                                                <option value="2">Nước uống</option>
                                                <option value="3">Đồ ăn vặt</option>
                                                <option value="4">Quẩn áo</option>
                                                <option value="5">Dụng cụ nhà</option>
                                                <option value="6">Loại khác ...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Ngày mua</label>
                                            <input class="form-control" name="buydate" type="date" id="datePicker" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-empire"></i></span>
                                    <input type="text" name="itemname" class="form-control" placeholder="Tên mặt hàng" required>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                    <input type="text" name="itemcost" class="form-control" placeholder="Giá tiền" required>
                                    <span class="input-group-addon">VND</span>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                                    <textarea name="comment" id="" cols="30" rows="3" class="form-control" placeholder="Vì sao mua sản phẩm này ?" style="resize: vertical"></textarea>
                                </div>
                                <div class="form-group input-group">
                                    <button type="submit" name="addItem" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Lưu lại</button></a>
                                </div>
                                <?php 
                                    if ($message != '') {
                                        echo "<div class='alert alert-success alert-dismissable'>
                                            <button type='button' class='close' data-dismiss='alert'>×</button>
                                            ".$message."
                                        </div>";
                                    }
                                ?>
                                
                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile-pills"><br>
                            <form role="form" method="post" action="?view=newItems&act=addItemIntend">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Loại mặt hàng</label>
                                            <select class="form-control" name="itemtype" required>
                                                <option value="">-- Chọn một loại mặt hàng --</option>
                                                <option value="1">Thức ăn</option>
                                                <option value="2">Nước uống</option>
                                                <option value="3">Đồ ăn vặt</option>
                                                <option value="4">Quẩn áo</option>
                                                <option value="5">Dụng cụ nhà</option>
                                                <option value="6">Loại khác ...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Ngày mua</label>
                                            <input class="form-control" name="buydate" type="date" id="datePicker2" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-empire"></i></span>
                                    <input type="text" class="form-control" name="itemname_intend" placeholder="Tên mặt hàng" required>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                    <input type="text" name="itemcost_intend" class="form-control" placeholder="Giá tiền" required>
                                    <span class="input-group-addon">VND</span>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                                    <textarea name="comment_intend" id="" cols="30" rows="3" class="form-control" placeholder="Vì sao mua sản phẩm này ?" style="resize: vertical"></textarea>
                                </div>
                                <div class="form-group input-group">
                                    <label>Dạng mua hàng:&nbsp;&nbsp;</label>
                                    <label class="radio-inline">
                                        <input type="radio" class="online" name="isOnline" value="0" checked> mua ngoài cửa hàng
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" class="online" name="isOnline" value="1"> mua trực tuyến
                                    </label>
                                </div>
                                <div id="showLink" class="form-group input-group hidden">
                                    <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                    <input type="text" name="link_intend" class="form-control" placeholder="Link">
                                </div>
                                <div class="form-group input-group">
                                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Lưu lại</button>
                                </div>
                                <?php 
                                    if ($message != '') {
                                        echo "<div class='alert alert-success alert-dismissable'>
                                            <button type='button' class='close' data-dismiss='alert'>×</button>
                                            ".$message."
                                        </div>";
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-info">
            <div class="panel-heading"><i class="fa  fa-money ">&nbsp;</i>Đã mua gần đây</div>
                <div class="panel-body purchased">
                    
                    <?php 
                        foreach ($justBought as $item) {
                    ?>

                    <div>
                        <p>
                            <span style="font-weight: 600;font-size:12px;">Tên SP: </span>
                            <span style="color: #096dec"><?= $item['name'];?></span>
                        </p>
                        <i style="font-size:12px;">Ngày mua: <?= date('d-m-Y', strtotime($item['buydate']));?></i>
                        <span style="margin-left:5px;margin-right:5px;">|</span>
                        <span style="font-size:12px;">
                            <span style="font-weight: 700;">Giá: </span>
                            <span style="color:red"><?= number_format($item['cost']);?></span> VNĐ
                        </span>
                    </div>
                    <hr style="margin-top:5px;margin-bottom:8px;">
                    
                    <?php }?>

                </div>
                <div class="panel-footer">
                    <i class="fa fa-smile-o"></i>
                    <i class="fa  fa-frown-o"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('datePicker').valueAsDate = new Date();
    document.getElementById('datePicker2').valueAsDate = new Date();
    $(document).ready(function() {
        $('.online').click(function() {
            $online = $('input[name=isOnline]:checked').val(); 
            if ($online == 1) {
                setTimeout(function() {
                    $('#showLink').removeClass('hidden');
                }, 500);
            } else {
                setTimeout(function() {
                    $('#showLink').addClass('hidden')
                }, 500);
            }
        });
    });
</script>

<style>
    .purchased {
        height: 400px;
        overflow-y:scroll;
    }
</style>