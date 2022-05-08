
<div class="place" id="place">
    <div class="form-place sign-up-place">
        <form id="register" action="/register" method="POST">
            @csrf
            <h1>Create Account</h1>
            <input  type="text"  class ="fname form-control" placeholder="Full Name" required/>
        
            <input type="email"  class ="email form-control" placeholder="Email" required/>

            
            <button>Sign Up</button>
        </form>
    </div>

    <div class="form-place sign-in-place">
        <form action="/login">
            <h1>Sign in</h1>
            <input type="email"class="is-invalid" placeholder="Email" />
            <button>Sign In</button>
        </form>
    </div>

    <div class="overlay-place">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p class="overlay-text">To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p class="overlay-text">Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
    
</div>

<script>
    //Untuk Register (Belum Selesai)
    //1.Mungkin Login dan Register DIpisah
    //2.Controller Regis blm lengkap
 
         $(document).ready(function() {
             $('#email').blur(function() {
                 event.preventDefault();
                 var email = $(this).val();
                 $.ajax({
                     type: 'POST',
                     url: 'user.php?aksi=validasi-email',
                     data: 'email=' + email,
                     success: function(data) {
                         if (data == "invalid") {
                             setError("#email", "Email is not valid");
                         } else if (data == "ok") {
                             setSucces("#email");
                         } else {
                             setError("#email", "Email has been used")
                         }
                     }
                 });
             });


             $('#uname').blur(function() {
                 event.preventDefault();
                 var uname = $(this).val();
                 $.ajax({
                     type: 'POST',
                     url: 'user.php?aksi=validasi-uname',
                     data: 'uname=' + uname,
                     success: function(data) {
                         if (data == "less") {
                             setError("#uname", "Username must be at least 5 characters");
                         } else if (data == "too much") {
                             setError("#uname", "Username cannot be more than 20 characters")
                         } else if (data == "ok") {
                             setSucces("#uname");
                         } else {
                             setError("#uname", "username has been used")
                         }
                     }
                 });
             });




             $('#form-reg').submit(function() {

                 // validasi email
                 if ($('#email').val().length == 0) {
                     setError("#email", "Email cannot be blank");
                     return false;
                 } else {
                     setSucces("#email");
                 }


                 // validasi username
                 if ($('#uname').val().length < 5) {
                     setError("#uname", "Username must be at least 5 characters");
                     return false;
                 } else {
                     setSucces("#uname");
                 }

                 if ($('#uname').val().length >= 20) {
                     setError("#uname", "Username cannot be more than 20 characters");
                     return false;
                 } else {
                     setSucces("#uname");
                 }


                 // validasi nama
                 if ($('#name').val().length == 0) {
                     setError("#name", "Name cannot be blank");
                     return false;
                 } else {
                     setSucces("#name");
                 }

             });




             $('#name').blur(function() {
                 event.preventDefault();
                 if ($('#name').val().length == 0) {
                     setError("#name", "Name cannot be blank");
                 } else {
                     setSucces("#name");
                 }
             });




             function setError(id, message) {
                 $(id).removeClass('is-valid');
                 $(id).addClass('is-invalid');
                 $(id + '-validation').removeClass('valid-feedback');
                 $(id + '-validation').addClass('invalid-feedback');
                 $(id + '-validation').html(message);
                 return false;
             }

             function setSucces(id) {
                 $(id).removeClass('is-invalid');
                 $(id).addClass('is-valid');
                 $(id + '-validation').removeClass('invalid-feedback');
                 $(id + '-validation').html("");
                 return true;
             }


         });


     </script>
   



 