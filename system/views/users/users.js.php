<script>
    $("#frmAddUser").submit(function(e) {
        e.preventDefault();

    });

    $(function() {
        getUser();
    });

    function getUser() {
        $("#table_field").DataTable();
    }

    function getUsers() {
        $("#table_field").DataTable().destroy();
        $('#table_field').DataTable({
            "processing": true,
            "ajax": {
                "url": controller + "users_data_dt.php",
            },
            "columns": [{
                    "data": "count"
                },
                {
                    "mRender": function(data, type, row) {
                        if (row.is_admin == 1) {
                            return "";
                        } else {
                            return "<center>" +
                                "<li class='dropdown' style='list-style: none; font-size: 18px; color: #FFF;'>" +
                                "<a href='#' class='dropdown-toggle' data-toggle='dropdown' style='color: #607D8B;'><strong><span class='fa fa-gear'></span></strong></a>" +
                                "<ul class='dropdown-menu'>" +
                                "<ul style='background: #444; border: 1px solid #333; padding: 5px 10px;'>" +
                                "<li style='list-style:none;color:#FFF;'>" +
                                "<a href='#' onClick='setPrivilege(" + row.user_id + ");'style='color: #fff;'><span class='fa fa-pencil'></span> Set Privilege</a>" +
                                "</li>" +
                                "</ul>" +
                                "</ul>" +
                                "</li>" +
                                "</center>";
                        }
                    }
                },
                {
                    "data": "fullname"
                },
                {
                    "data": "address"
                },
                {
                    "data": "position"
                },
                {
                    "data": "date"
                }
            ]
        });
    }

    function addModal() {
        $("#large_modal").modal('show');
    }
</script>