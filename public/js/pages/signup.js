/*!
 * dashmix - v3.1.0
 * @author pixelcave - https://pixelcave.com
 * Copyright (c) 2020
 */
!function() {
    function e(e, a) {
        for (var n = 0; n < a.length; n++) {
            var r = a[n];
            r.enumerable = r.enumerable || !1,
            r.configurable = !0,
            "value"in r && (r.writable = !0),
            Object.defineProperty(e, r.key, r)
        }
    }
    var a = function() {
        function a() {
            !function(e, a) {
                if (!(e instanceof a))
                    throw new TypeError("Cannot call a class as a function")
            }(this, a)
        }
        var n, r;
        return n = a,
        r = [{
            key: "initValidation",
            value: function() {
                Dashmix.helpers("validation"),
                jQuery(".js-validation-signup").validate({
                    rules: {
                        "signup-name": {
                            required: !0,
                            minlength: 6
                        },
                        "signup-email": {
                            required: !0,
                            email: !0
                        },
                        "signup-password": {
                            required: !0,
                            minlength: 8
                        },
                        "signup-password-confirm": {
                            required: !0,
                            equalTo: "#signup-password"
                        },
                        "signup-terms": {
                            required: !0
                        }
                    },
                    messages: {
                        "signup-name": {
                            required: "Please enter a name",
                        },
                        "signup-email": "Please enter a valid email address",
                        "signup-password": {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 8 characters long"
                        },
                        "signup-password-confirm": {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 6 characters long",
                            equalTo: "Please enter the same password as above"
                        },
                        "signup-terms": "You must agree to the service terms!"
                    }
                })
            }
        }, {
            key: "init",
            value: function() {
                this.initValidation()
            }
        }],
        null && e(n.prototype, null),
        r && e(n, r),
        a
    }();
    jQuery((function() {
        a.init()
    }
    ))
}();
