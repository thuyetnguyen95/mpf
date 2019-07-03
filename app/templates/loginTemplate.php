<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Login to Wami-MPF system</h3>
                </div>
                <div class="panel-body">
                    <form id="formSignin" role="form" onsubmit="return false;" method="post">
                        <fieldset>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text"
                                        class="form-control"
                                        placeholder="Enter username"
                                        id="username"
                                        autofocus 
                                        value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];}?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input
                                        type="password"
                                        placeholder="Enter your password"
                                        class="form-control"
                                        id="password"
                                        value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input id="remember" name="remember" value="1" type="checkbox"
                                    <?php if(isset($_COOKIE['username'])){echo 'checked';};?>>Remember Me
                                </label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" id="btnLogin">
                                    <span class="glyphicon glyphicon-log-in"></span>&nbsp;<span class="txtBtnLogin">Login</span>
                                </button>
                            </div>
                            <div class="alert alert-danger hidden"></div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= $_domain;?>app/assets/js/loginAjax.js"></script>
