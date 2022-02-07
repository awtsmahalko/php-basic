<section class="content-header">
    <div class="container-fluid">
        <div class="row" style="background: #bbd9f3;padding: 5px;border-radius: 5px;">
            <div class="col-sm-6">
                <h6 style="font-weight: bold;color: #1b466b;"><span class="fa fa-users"></span> Users</h6>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<style>
    .h30 {
        height: 30px;
        font-size: 12px;
    }
</style>
<section class="content">
    <div class="row">
        <div class="col-12" style="display: flex;flex-direction: column;justify-content: center;">
            <div class="pull-right">
                <div class="btn-group" style="float:right;">
                    <button class="btn btn-outline-secondary btn-sm" type="button" onclick="addModal()">
                        <span class="fa fa-plus-circle"></span> Add New User</button>
                    </button>
                    <button class="btn btn-outline-danger btn-sm" type="button" onclick="removeSales()">
                        <span class="fa fa-trash"></span> Delete</button>
                    </button>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="table_field" class="table table-bordered table-striped display" style="width: 100%;">
                        <thead>
                            <tr>
                                <th width="25px">#</th>
                                <th width="25px"></th>
                                <th>FULLNAME</th>
                                <th>ADDRESS</th>
                                <th>POSITION</th>
                                <th>DATE ADDED</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php file_exists($modal_file) ? include $modal_file : ''; ?>
<?php file_exists($js_file) ? include $js_file : ''; ?>