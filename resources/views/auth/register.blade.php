@extends('frontend.layouts')
@section('container')
<div  class="text-blue yellow-container signup-forms" style="margin-bottom: 5%;">
        <form method="POST" id="registerform">
            @csrf
        <div style="text-align: center;">
            <strong>
                <h1>create an account</h1>
            </strong>
            <div class="yellow-container-forms">
                <!--     <label for="email"><b>Email</b></label> -->
                <input maxlength="20" type="text" placeholder="First Name" name="first_name" required>
                <b id="rgErrorName"></b>
                <br>
                <input maxlength="20" type="text" placeholder="Last Name" name="last_name" required>
                <br>
                <input maxlength="25" type="text" placeholder="Email" name="email" required>
                <b id="rgErrorEmail"></b>
                <br>
                <input maxlength="41" type="text" placeholder="Eth wallet address (optional)" name="wallet" >
                <br>
                <!--     <label for="psw"><b>Password</b></label> -->
                <input maxlength="50" type="password" placeholder="Password" name="password" required>
                <br>
                <!--     <label for="psw-repeat"><b>Repeat Password</b></label> -->
                <input maxlength="50" type="password" placeholder="Repeat Password" name="password_confirmation" required>
                <b id="rgErrorPassword1"></b>
                <br>
                <div style="text-align: left;">
                    <p>By creating an account you agree to our <br>
                        <strong> 
                            <label>
                                <input type="checkbox" name="remember" style="margin-bottom:15px" required>
                            </label>
                                <a class="btn-hov" href="/terms_of_use.pdf"> Terms of use</a><br>
                            <label>
                                <input type="checkbox" name="terms_of_use" style="margin-bottom:15px" required>
                            </label>
                            <a class="btn-hov" href="/privacy_policy.pdf">Privacy Policy</a> 
                        </strong>
                    </p>
                </div>
            <div>
                <button type="submit">SIGN UP</button>
            </div>
            <br>
            <div>
                <a href="{{ route('login') }}" class="btn-bottom">Already have an account</a>
            </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('scripts')
<script>
    var registerform = $("#registerform");
        registerform.submit(function(e){
        e.preventDefault();
        var formRgData = registerform.serialize();
       console.log(formRgData);
            $.ajax({
                url:"{{ URL::to('register-user') }}",
                dataType:'json',
                type:'POST',
                data:formRgData,
                success:function(complete){
                    window.location.replace("{{ route('login') }}");
                },
                error: function (err) {
                    // console.log(err.responseJSON[0]['password']);
                
                    // try{
                        
                    // }
                    // catch{
                    //     $('#rgErrorPassword1').hide().html(err.responseJSON[0]['password'][0]).slideUp();
                    // }
                    try{
                        $('#rgErrorEmail').hide().html(err.responseJSON[0]['email'][0]).slideDown();
                    }catch {
                        $('#rgErrorEmail').hide().html(err.responseJSON[0]['email'][0]).slideUp();
                    }
                    try{
                        $('#rgErrorName').hide().html(err.responseJSON[0]['name'][0]).slideDown();
                    }catch {
                        $('#rgErrorName').hide().html(err.responseJSON[0]['name'][0]).slideUp();
                    }
                    try{
                        $('#rgErrorPassword1').hide().html(err.responseJSON[0]['password'][0]).slideDown();
                    }catch {
                        $('#rgErrorPassword1').hide().html(err.responseJSON[0]['password'][0]).slideUp();
                    }
                    // try{
                    //     err.responseJSON[0]['password'][0]
                    // }
                    // alert(err.responseJSON[0]['password'][0]);
                }
            });
        }); 
</script>
@endsection