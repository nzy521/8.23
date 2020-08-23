$(function () {
    $(".form-horizontal").validate({
        rules: {
            uname: {
                required: true,
                minlength: 5
            },
            pass: {
                required: true
            }
        },
        messages: {
            uname: {
                required: "用户名不能为空",
                minlegth: "要符合用户名规则"
            },
            pass: {
                required: "不能为空"
            }
        }
    })
})