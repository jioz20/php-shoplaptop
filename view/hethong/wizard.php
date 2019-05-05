<div class="container-fluid">
                    <div class="col-sm-8 col-sm-offset-2">
                        <!--      Wizard container        -->
                        <div class="wizard-container">
                            <div class="card wizard-card active" data-color="rose" id="wizardProfile">
                                <form action="" method="" novalidate="novalidate">
                                    <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                                    <div class="wizard-header">
                                        <h3 class="wizard-title">
                                            Build Your Profile
                                        </h3>
                                        <h5>This information will let us know more about you.</h5>
                                    </div>
                                    <div class="wizard-navigation">
                                        <ul class="nav nav-pills">
                                            <li class="active" style="width: 33.3333%;">
                                                <a href="#about" data-toggle="tab" aria-expanded="true">About</a>
                                            </li>
                                            <li style="width: 33.3333%;">
                                                <a href="#account" data-toggle="tab">Account</a>
                                            </li>
                                            <li style="width: 33.3333%;">
                                                <a href="#address" data-toggle="tab">Address</a>
                                            </li>
                                        </ul>
                                    <div class="moving-tab" style="width: 186.219px; transform: translate3d(-8px, 0px, 0px); transition: transform 0s;">About</div></div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="about">
                                            <div class="row">
                                                <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                                <div class="col-sm-4 col-sm-offset-1">
                                                    <div class="picture-container">
                                                        <div class="picture">
                                                            <img src="<?=template_admin1_path?>/assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="">
                                                            <input type="file" id="wizard-picture">
                                                        </div>
                                                        <h6>Choose Picture</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">First Name
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="firstname" type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">record_voice_over</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Last Name
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="lastname" type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10 col-lg-offset-1">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">email</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Email
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="email" type="email" class="form-control">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="account">
                                            <h4 class="info-text"> What are you doing? (checkboxes) </h4>
                                            <div class="row">
                                                <div class="col-lg-10 col-lg-offset-1">
                                                    <div class="col-sm-4">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="jobb" value="Design">
                                                            <div class="icon">
                                                                <i class="fa fa-pencil"></i>
                                                            </div>
                                                            <h6>Design</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="jobb" value="Code">
                                                            <div class="icon">
                                                                <i class="fa fa-terminal"></i>
                                                            </div>
                                                            <h6>Code</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="jobb" value="Develop">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>Develop</h6>
                                                        </div>
                                                        <div class="btn-group bootstrap-select"><button type="button" class="dropdown-toggle bs-placeholder btn btn-primary btn-round" data-toggle="dropdown" role="button" title="Choose city"><span class="filter-option pull-left">Choose city</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="1" class="disabled selected"><a tabindex="-1" class="" data-tokens="null" role="option" href="#" aria-disabled="true" aria-selected="true"><span class="text">Choose city</span><span class="material-icons  check-mark"> done </span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Foobar</span><span class="material-icons  check-mark"> done </span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Is great</span><span class="material-icons  check-mark"> done </span></a></li></ul></div><select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7" tabindex="-98"><option class="bs-title-option" value="">Single Select</option>
                                                            <option disabled="" selected="">Choose city</option>
                                                            <option value="2">Foobar</option>
                                                            <option value="3">Is great</option>
                                                        </select></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="address">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="info-text"> Are you living in a nice area? </h4>
                                                </div>
                                                <div class="col-sm-7 col-sm-offset-1">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Street Name</label>
                                                        <input type="text" class="form-control">
                                                    <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Street No.</label>
                                                        <input type="text" class="form-control">
                                                    <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">City</label>
                                                        <input type="text" class="form-control">
                                                    <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Country</label>
                                                        <select name="country" class="form-control">
                                                            <option disabled="" selected=""></option>
                                                            <option value="Afghanistan"> Afghanistan </option>
                                                            <option value="Albania"> Albania </option>
                                                            <option value="Algeria"> Algeria </option>
                                                            <option value="American Samoa"> American Samoa </option>
                                                            <option value="Andorra"> Andorra </option>
                                                            <option value="Angola"> Angola </option>
                                                            <option value="Anguilla"> Anguilla </option>
                                                            <option value="Antarctica"> Antarctica </option>
                                                            <option value="...">...</option>
                                                        </select>
                                                    <span class="material-input"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wizard-footer">
                                        <div class="pull-right">
                                            <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Next">
                                            <input type="button" class="btn btn-finish btn-fill btn-rose btn-wd" name="finish" value="Finish" style="display: none;">
                                        </div>
                                        <div class="pull-left">
                                            <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Previous">
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- wizard container -->
                    </div>
                </div>