$(document).ready(function () {
    $('#submit').click(function () {
        
        
        
        
        
        var name_regex = /^[a-zA-Z]+$/;
        var name = $("#name").val();
        {
            if (name == "")

            {
                $("#nameerror").css("display", "inline");
                $('#nameerror').html("This field is required");
                $("input").focus(function () {

                    $("#nameerror").css("display", "none");

                });
                return false;

            }
            if (!name.match(name_regex))
            {
                $("#nameerror").css("display", "inline");
                $("#nameerror").html("Alphabets only");

                return false;

            }
            if ((name.length <= 3) || (name.length > 15))
            {
                $("#nameerror").css("display", "inline");
                $("#nameerror").html("Name must have 3 to 15 characters");
                return false;
            }
        }
        var pwd = $("#pwd").val();
        {
            if (pwd == "")

            {
                $("#pwderror").css("display", "inline");
                $('#pwderror').html("This field is required");
                $("input").focus(function () {

                    $("#pwderror").css("display", "none");

                });
                return false;

            }
        }
        
        var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
        var email = $("#email").val();
        {

            if (email == "")

            {
                $("#emailerror").css("display", "inline");
                $('#emailerror').html("This field is required");
                $("input").focus(function () {

                    $("#emailerror").css("display", "none");

                });
                return false;

            }
            if (!email.match(email_regex))
            {
                $("#emailerror").css("display", "inline");
                $("#emailerror").html("Enter vaild email id (Ex:john@gmail.com)");

                return false;

            }
        }
        var dob = $("#dob").val();
        {
            if (dob == "")

            {
                $("#doberror").css("display", "inline");
                $('#doberror').html("This field is required");
                $("input").focus(function () {

                    $("#doberror").css("display", "none");

                });
                return false;

            }
        }
        var phone_regex = /^[0-9]+$/;
        var mobile = $("#mobile").val();
        {
            if (mobile == "")
            {
                $("#mobileerror").css("display", "inline");
                $('#mobileerror').html("This field is required");
                $("input").focus(function () {

                    $("#mobileerror").css("display", "none");

                });
                return false;
            }
            if (!mobile.match(phone_regex))
            {
                $("#mobileerror").css("display", "inline");
                $("#mobileerror").html("Enter vaild mobile number (Ex:8667776387)");
                return false;

            }
            if ((mobile.length != 10))
            {
                $("#mobileerror").css("display", "inline");
                $("#mobileerror").html("Invalid Mobile number");
                return false;
            }
        }

        var gender = $('#gender').val();
        {
            if ($("#gender:checked").length == 0)
            {
                $("#generror").css("display", "inline");
                $('#generror').html("This field is required");
                $("input").focus(function () {

                    $("#generror").css("display", "none");

                });

                return false;
            }
        }
        var pic = $("#pic").val();
        {
            if (pic == "")

            {
                $("#picerror").css("display", "inline");
                $('#picerror').html("This field is required");
                $("input").focus(function () {

                    $("#picerror").css("display", "none");

                });
                return false;

            }
        }


        var addrs = $("#address").val();
        {
            if (addrs == "")
            {
                $("#addresserror").css("display", "inline");
                $('#addresserror').html("This field is required");
                $("textarea").focus(function () {

                    $("#addresserror").css("display", "none");

                });
                return false;
            }
        }

    });
  $("#name").keyup(function () {

        var name_regex = /^[a-zA-Z]+$/;
        var name = $("#name").val();
        if (!name_regex.test(name))
        {
            $("#nameerror").css("display", "inline");
            $("#nameerror").html("Alphabets only");
            return false;
        } else
        {
            $("#nameerror").css("display", "none");
            return true;
        }

    });
    $("#mobile").keyup(function () {
        var phone_regex = /^[0-9]+$/;
        var mobile = $("#mobile").val();
        if (!mobile.match(phone_regex))
        {
            $("#mobileerror").css("display", "inline");
            $("#mobileerror").html("Enter vaild mobile number (Ex:8667776387)");
            return false;
        } else
        {
            $("#mobileerror").css("display", "none");
            return true;
        }
    });
});
