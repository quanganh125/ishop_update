<?php $profile = $this->request->getSession()->read('User')?>
<div class="header-advance-area">
    <!--Mobile Menu start-->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard v.1</a></li>

                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="mailbox.html">Inbox</a>
                                        </li>

                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#others" href="#">Ranking <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                    <ul id="others" class="collapse dropdown-header-top">
                                        <li><a href="file-manager.html">File Manager</a></li>
                                    </ul>
                                </li>

                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="login.html">Login</a>
                                        </li>
                                        <li><a href="register.html">Register</a>
                                        </li>
                                        <li><a href="lock.html">Lock</a>
                                        </li>
                                        <li><a href="password-recovery.html">Password Recovery</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Mobile Menu end -->
    <div class="breadcome-area">
        <div class="container-fluid  ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row z-depth-3">
                            <div class="profile-user-pic aligncenter">
                                <img src="<?=$profile->avatar?>" width="350px" alt="user avatar" class="img-responsive img-circle">
                            </div>
                            <div class="profile-user-title text-center" style="color: white">
                                <div class="profile-user-name ">
                                    <h3><?=$profile->name?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcome-area">
        <div class="container-fluid  ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <h2 class="mt-3 text-center" style="color: white">INFORMATION</h2>
                        <hr class="badge-light mt-0 w-30">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="font-weight-bold" style="font-size: medium; color: white"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Email:</span></p>
                                <h4 class="text-info"><?=$profile->email?></h4>
                            </div>
                            <div class="col-md-6">
                                <p class="font-weight-bold" style="font-size: medium; color: white"><i class="fa fa-phone-square"></i>  <span class="mini-click-non">Tel:</span></p>
                                <h4 class="text-info"><?=$profile->phonenumber?></h4>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 3%; margin-top: 3%">
                            <div class="col-md-6">
                                <p class="font-weight-bold" style="font-size: medium;color: white"><i class="fa fa-hand-paper-o"></i>  <span class="mini-click-non">User ID</span></p>
                                <h4 class="text-info"><?=$profile->id?></h4>
                            </div> 
                    </div> 
                    <hr class="badge-light mt-0 w-30">l
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="button-style-four btn-mg-b-10">
    <button type="button" class="btn btn-custon-four btn-primary aligncenter" onclick="$('.review-tab-pro-inner').slideToggle();">
        Edit Profile</button>
</div>        

<div class="single-product-tab-area mg-b-30">
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner" style="display: none;">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#profile"><i class="icon nalika-chat" aria-hidden="true"></i> Profile</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit" style="margin-bottom: 10px;">
                            <div class="product-tab-list tab-pane fade active in" id="profile">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="card-block">
                                                <div class="text-muted f-w-400" style="margin-bottom: 4%;">
                                                    <p>You can change profile below:</p>
                                                </div>
                                                <div class="m-t-10"></div>
                                                <?= $this->Form->create(null, ['type'=>'file',
                                                                                'url' => ['controller' => 'Users',
                                                                                        'action' => 'edit']]);?>
                                                    <div class="input-group mg-b-15" title="unable to change email">
                                                        <span class="input-group-addon"><i class="icon nalika-mail" aria-hidden="true"></i></span>
                                                        <label type="text" class="form-control"><?=$profile->email?></label>
                                                    </div>
                                                    <div class="input-group mg-b-15 mg-t-15">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="User Name" value="<?=$profile->name?>" name="new_name" required>
                                                    </div>
                                                    <div class="input-group mg-b-15 mg-t-15">
                                                        <span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Phone Number" value="<?=$profile->phonenumber?>" name="new_phonenumber" required>
                                                    </div>
                                                    <div class="input-group mg-b-15">
                                                        <span class="input-group-addon"><i class="icon nalika-picture" aria-hidden="true"></i></span>
                                                        <input type="file" class="form-control" placeholder="Avatar" name="new_avatar">
                                                    </div>
                                                
                                                    <div class="button-style-four btn-mg-b-10 aligncenter">
                                                        <button type="submit" class="btn btn-custon-four btn-primary aligncenter">
                                                        Save change  <i class="fa fa-info-circle adminpro-informatio " aria-hidden="true"></i></button>
                                                    </div> 
                                                </form>                                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="profile">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="card-block">
                                                <div class="text-muted f-w-400" style="margin-bottom: 4%;">
                                                    <p>You can change password below:</p>
                                                </div>
                                                <div class="m-t-10"></div>
                                                <?=$this->Form->create(null, ['url' => 'users/change_password/']);?>
                                                    <div class="input-group mg-b-15">
                                                        <span class="input-group-addon" style="padding-left: 17px;"><i class="fa fa-unlock-alt"></i></span>
                                                        <input type="password" class="form-control" placeholder="Current Password" name="cur_pass" required>
                                                    </div>

                                                    <div class="input-group mg-b-15">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="password" class="form-control" placeholder="New Password" name="new_pass" required>
                                                    </div>

                                                    <div class="input-group mg-b-15">
                                                        <span class="input-group-addon"><i class="icon nalika-pie-chart icon-wrap" aria-hidden="true"></i></span>
                                                        <input type="password" class="form-control" placeholder="Confirm password" name="cf_pass" required>
                                                    </div>
                                                    <div class="button-style-four btn-mg-b-10 aligncenter">
                                                        <button type="submit" class="btn btn-custon-four btn-primary aligncenter">
                                                        Change password  <i class="fa fa-info-circle adminpro-informatio " aria-hidden="true"></i></button>
                                                    </div>  
                                                </form>                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;">
                    <div class="button-style-four btn-mg-b-10">
                        <?=$this->Form->create(null, ['url' => 'users/delete/']);?>
                            <button type="submit" class="btn btn-custon-four btn-danger" 
                            onclick="return confirm(`Warning!!! Are you sure you want to delete your account?`)" title="Delete">
                            <i class="fa fa-times adminpro-danger-error" aria-hidden="true"></i> Delete Account</button>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>