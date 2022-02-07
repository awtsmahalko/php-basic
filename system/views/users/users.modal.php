<div class="modal fade" id="large_modal">
    <div class="modal-dialog" id="large_modal_dialog">
        <form id="frmAddUser" method="POST">
            <div class="modal-content">
                <div class="modal-header bg-danger" style="padding:8px;">
                    <h5 class="modal-title text-center" id="large_modal_title">Add new user</h5>
                    <ul style="margin: unset;padding: unset;font-size: 11px;list-style: none;" id="large_modal_by"></ul>
                </div>
                <div class="modal-body" id="large-modal-content">
                    <div class="form-group">
                        <label>Fullname</label>
                        <input type="text" class="form-control" name="fullname">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Repeat Password</label>
                            <input name="password2" type="password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group-btn pull-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger" data-toggle-modal="close">Close</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>