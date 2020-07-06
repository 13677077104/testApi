$(function () {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-center',
        showConfirmButton: false,
        timer: 3000
    });
    // 禁止所有表单的btn默认事件
    $('#form button').on('click', function (e) {
        e.preventDefault();
    });

    // 文章列表初始化
    $("#article-list").DataTable({
        "searching": false,
        "serverSide": true,
        "iDisplayLength": 10,
        "processing": true,
        "autoWidth": false,
        "lengthMenu": [10, 25, 50, 75, 100],
        "ajax": {
            url: "/admin/article/list",
            type: 'POST',
            dataSrc: function (rest) {
                if (rest.timeout) {
                    return "";
                }
                return rest.data;
            },
        },
        "columns": [
            { "data": "id"},
            { "data": "title" },
            /*{ "data": "content" },*/
            { "data": "create_time" },
            { "data": "update_time" },
            { "data": null }
        ],
        "columnDefs": [ {
            "render" : function(data, type, row, meta){
                let _html = '<a href="article/'+row.id+'" class="update-article">编辑</a> | ' +
                    '<a href="javascript:;" data-id="'+row.id+'" class="delete-article">删除</a>';
                return _html;
            },
            "targets" : 4
        },]
    })
        .on('click', '.delete-article', function (e) {
            let _this = $(this);
            let id = _this.data('id');
            if (confirm('是否删除？删除后不可恢复')){
                $.get({
                    url:"article/"+id,
                    method:'delete',
                    success: function (res) {
                        let rs = JSON.parse(res);
                        if (rs.status) {
                            Toast.fire({
                                icon: 'success',
                                title: rs.msg
                            });
                            _this.parents('tr').remove();
                        }else{
                            Toast.fire({icon: 'error', title: rs.msg });
                        }

                    }
                });
            }


        });

    // 富文本编辑器初始化
    $('.full-editor').summernote({
        minHeight : 500,
    });

    $('#form').on('click', '.submit-form', function () {
        let form = $(this).parents('form');
        let url = form.attr('action');
        let data = form.serialize();
        if (!url){
            err('没有设置提交地址');
            return false;
        }
        $.ajax({
            url: url,
            method:"post",
            data:data,
            success: function (res) {
                let rs = JSON.parse(res);
                if (!rs.status) {
                    err(rs.msg);
                    return false;
                }
                succ(rs.msg);
                if(rs.url){
                    setTimeout(function () {
                        window.location.href = rs.url;
                    }, 3000);
                }
            }
        });

    });



    function err(msg) {
        Toast.fire({
            icon: 'error',
            title: msg
        });
    }

    function succ(msg) {
        Toast.fire({
            icon: 'success',
            title: msg
        });
    }
});