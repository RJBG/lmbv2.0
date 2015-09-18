<div class="container">
	<button class="btn btn-sm btn-info" onclick="window.location.href='?page=store'">
        <span class="glyphicon glyphicon-list"></span> Store List
    </button><br><br>

    <div id="msg" class="alert alert-danger alert-dismissable">
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <strong>Warning!</strong> Please fill the form.
    </div>
    
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#store" data-toggle="tab"> New Store </a>
        </li>
        <li>
            <a href="#add_info" data-toggle="tab"> Additional Info </a>
        </li>
        <li>
            <a href="#history" data-toggle="tab"> History </a>
        </li>
        <button type="button" class="btn btn-sm btn-danger pull-right" onclick="window.location.href='?page=navigator'">
            CLOSE <span class="glyphicon glyphicon-remove"></span>
        </button><br><br>
    </ul>

    <div class="tab-content">
        <div id="store" class="tab-pane fade in active">
            <form method="post">
                <fieldset>
                    <h4>Store Information</h4>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>Store Code <span class="red">*</span></label>
                            <input class="form-control input-box" name="storeCode" type="text" placeholder="" autofocus required>
                        </div>
                        <div class="form-group">
                            <label>Store Name <span class="red">*</span></label>
                            <input class="form-control input-box" name="storeName" type="text" placeholder="" required>                                                
                        </div>

                        <div class="form-group">
                            <label>Store Address <span class="red">*</span></label>
                            <input class="form-control input-box" name="storeAddress" type="text" placeholder="" required>                                                
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>MISC 1</label>
                            <textarea class="form-control input-box" name="misc1" placeholder="optional"></textarea>
                        </div>
                        <div class="form-group">
                            <label>MISC 2</label>
                            <textarea class="form-control input-box" name="misc2" placeholder="optional"></textarea>
                        </div>
                        <div class="form-group">
                            <label>MISC 3</label>
                            <textarea class="form-control input-box" name="misc3" placeholder="optional"></textarea>
                        </div>
                    </div>
                </fieldset>
                <div class="pull-right">
                    <br><br>
                    <button class="btn btn-primary btn-sm" type="button" id="push-store">
                        <span class="glyphicon glyphicon-save"></span> Add Store
                    </button>
                </div>
            </form>
        </div>

        <div id="add_info" class="tab-pane fade in">
            <h4>Addtional Information here</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>

        <div id="history" class="tab-pane fade in">
            <h4>History here</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
    </div>

</div>
<br>