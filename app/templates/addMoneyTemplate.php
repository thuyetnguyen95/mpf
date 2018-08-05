<?php
    if (!$hasMoneyInMonth) {
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="?view=myMoney&act=addMoney">
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
                    <button type="submit" class="btn btn-primary" name="submit">Lưu số tiền</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php } else { ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="?view=myMoney&act=addMoney">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"> Thêm tiền cho tháng <?php echo date('n');?></h4>
                    <small class="text-muted">Bạn đã nhập số tiền khả dụng trong tháng <?php echo date('n');?> trước đó, nên chỉ có thể thêm!</small>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Số tiền bạn muốn<small class="text-danger">&nbsp;(chỉ nhập số)</small></label>
                        <input type="number" class="form-control" name="money_add" placeholder="vd: 1,500,000" required>
                        <small class="text-muted">Tiền muốn thêm: là số tiền bạn cần phải sử dụng thêm trong tháng này</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" name="submit">Lưu số tiền</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>