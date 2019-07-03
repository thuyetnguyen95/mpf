<?php include "controller/listBoughtController.php";?>
<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">DANH SÁCH SẢN PHẨM ĐÃ MUA</h4>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-list" aria-hidden="true"></i> Bảng quản lý sản phẩm đã mua
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="bg-info">
                                <th>#</th>
                                <th>Tên SP</th>
                                <th>Giá</th>
                                <th>Loại mặt hàng</th>
                                <th>Ngày mua</th>
                                <th>Chú thích</th>
                                <th style="width: 140px;">Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($justBought as $key => $item) {
                        ?>
                            <tr>
                                <td><?= $key+1;?></td>
                                <td>
                                    <span style="font-weight: bold"><?= $item['name'];?></span>
                                </td>
                                <td><?= number_format($item['cost']);?> VND</td>
                                <td><?= $typeOfProducts[$item['type_id']];?></td>
                                <td><?= $item['buydate'];?></td>
                                <td><?= $item['comment'];?></td>
                                <td>
                                    <a href="?view=editBought&act=edit&id=<?= $item['id'];?>" class="btn btn-info btn-sm">
                                        <i class="fa fa-edit"></i> Sửa
                                    </a>
                                    <a href="?view=listBought&act=delete&id=<?= $item['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Mày chắc chứ ?')">
                                        <i class="fa fa-trash"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <div style="margin: 50px 0px;">
            <ul class="pagination" style="margin: 0px; padding: 0px; ">
                <li style="pointer-events: none;"><span style=" color: #000">Trang</span></li>
                <?php 
                    for($i=1; $i<=$num_page; $i++) {
                        if (!isset($_GET['p'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['p'];
                        }
                ?>
                <li class="<?php echo ($page == $i) ? "active":"";?>">
                    <a href="?view=listBought&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                
                <?php }
                    if ($num_page > 1) {
                ?>
                    <li class="<?php echo ($page == $i) ? "active":"";?>">
                        <a href="?view=listBought&p=fix_this">
                            10 page <i class="fa fa-angle-double-right"></i>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    <!-- /.panel -->
    </div>
</div>
