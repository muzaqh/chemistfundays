
!function() {
    function e(e, n) {
        for (var i = 0; i < n.length; i++) {
            var a = n[i];
            a.enumerable = a.enumerable || !1,
            a.configurable = !0,
            "value"in a && (a.writable = !0),
            Object.defineProperty(e, a.key, a)
        }
    }
    var n = function() {
        function n() {
            !function(e, n) {
                if (!(e instanceof n))
                    throw new TypeError("Cannot call a class as a function")
            }(this, n)
        }
        var i, a;
        return i = n,
        a = [{
            key: "initValidation",
            value: function() {
                Dashmix.helpers("validation"),
                jQuery(".js-validation-signin").validate({
                    rules: {
                        "login-email": {
                            required: !0,
                            email: !0
                        },
                        "login-password": {
                            required: !0,
                            minlength: 8
                        }
                    },
                    messages: {
                        "login-email": "Please enter a email",
                        "login-password": {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long"
                        }
                    }
                })
            }
        }, {
            key: "init",
            value: function() {
                this.initValidation()
            }
        }],
        null && e(i.prototype, null),
        a && e(i, a),
        n
    }();
    jQuery((function() {
        n.init()
    }
    ))
}();
