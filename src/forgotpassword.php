<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style_createCus.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   
        <title></title>
        
    </head>
    <body>
        <div class="signup container-fluid">
        <h2 class="signup_heading">Forget Password</h2>
        <p class="signup_already">Create New Account ? <a href="create_account.php" class="signup_link signup_link-under">Sign Up</a></p>
        <form class="signup_form" action="" onsubmit="return checkForget()">
            <div class="form_group">
                <input type="text" class="form_input" id="txtname">
                <label for="" class="form_label">Full Name</label>
            </div>
            <div class="form_group">
                <input type="email" class="form_input" id="txtemail">
                <label for="" class="form_label">Email</label>
            </div>
            <div class="form_group">
                <input type="number" class="form_input" id="txtphone">
                <label for="" class="form_label">Phone</label>
            </div>
          
            <div class="form_group">
                <button type="submit" class="form_submit" onclick="checkForget()"><span class="form_submit-text">Send</span> <i class="fa fa-long-arrow-right form_submit-icon"></i></button>
            </div>
        </form>
    </div>
        
    </body>
    <script>
    function checkForget(){
        var name = document.getElementById('txtname').value;
        var email = document.getElementById('txtemail').value;
        var phone = document.getElementById('txtphone').value;
        var opassword = document.getElementById('password').value;
        var filter = /^[a-zA-Z0-9_\.\-]+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(name == '' || name == null){
            alert('Please Enter Full Name!');
            document.getElementById('txtname').focus();
            return false;
        }else{
            if(name.length <= 1){
                alert('Please Enter Full Name!');
                document.getElementById('txtname').focus();
                return false;
            }
            if(email == '' || email == null){
                alert('Please Enter Email!');
                document.getElementById('txtemail').focus();
                return false;
            }else{
                if(!filter.test(email)){
                    alert('Invalid email. Please re-enter!');
                    document.getElementById('txtemail').focus();
                    return false;
                };
            };
            if(phone == '' || phone == null){
                alert('Please Enter Number Phone!');
                document.getElementById('txtphone').focus();
                return false;
            }else{
                if(phone.length < 5){
                    alert('Phone number must not be less than 5 digits!');
                    document.getElementById('txtphone').focus();
                    return false;
                };
            };
            if(opassword == '' || opassword == null){
                alert('Please Enter Odl Password!');
                document.getElementById('password').focus();
                return false;
            }else{
                if(opassword.length < 8){
                    alert('Old Password must not be less than 8 characters!');
                    document.getElementById('password').focus();
                    return false;
                };
            };
        };
        alert('We have received information from ' + name +  ' !');
        return true;
    };
</script>
</html>
    