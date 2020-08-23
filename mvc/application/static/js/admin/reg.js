$(function () {
    var str = $(".entry ").html() + "/admin/reg/checkName";
    $(".form-horizontal").validate({
        rules: {
            uname: {
                required: true,
                minlength: 5,
                remote: {
                    url: str,
                    type: 'post',
                    data: {
                        uname: $("input:eq(0)").attr("value")
                    }
                }
            },
            pass: {
                required: true,
                rangelength: [6, 10],
                equalTo: "#pass1"
            },
            pass1: {
                required: true,
                rangelength: [6, 10],
                equalTo: "#pass"
            }
        },
        messages: {
            uname: {
                required: "用户名不能为空",
                minlength: "要符合用户名规则",
                remote: "用户名已经存在"
            },
            pass: {
                required: "不能为空",
                rangelength: "密码在6-10位之间",
                equalTo: "密码不一致"
            },
            pass1: {
                required: "不能为空",
                rangelength: "密码在6-10位之间",
                equalTo: "密码不一致"
            }
        }
    })
})