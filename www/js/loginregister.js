let regEx = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{3,})");
let registerButton;
let loginButton;
let password1Input;
let password2Input;

//After the whole page is loaded do this function.
window.onload = function()
{

    //find register button and when clicked, register user
    registerButton = document.getElementById("regButton");
    registerButton.onclick = register;

    //By default register button is deactived
    registerButton.disabled = true;

    //Get passwords 1 & 2
    password1Input = document.getElementById("regPassword");
    password2Input = document.getElementById("regPassword2");

    //Every time a password key is pressed, checkRegistrationPassword.
    password1Input.onkeyup = checkRegistrationPassword;
    password2Input.onkeyup = checkRegistrationPassword;
}

//************** REGISTRATION ****************

//Check if password matches regEx
function checkRegistrationPassword()
{

    //Check password strength
    let password1 = document.getElementById("regPassword").value;
    let password2 = document.getElementById("regPassword2").value;
    let result = regEx.test(password1) && (password1 == password2);
    
    //if matches regExpression then let user click the sign up button
    if(result)
    {
        registerButton.disabled = false;
    }
    //else display this message.
    else
    {
        document.getElementById("isPasswordRegExp").innerHTML = 
            "Password Requires atleast:<br>1 upper-case letter<br>1 lower-case letter<br> 2 numbers<br>4 Or more characters<br>The passwords must also match";
        registerButton.disabled = true;
    }
}

//Storing user details function
function register()
{
    //object to store on registration success
    var usrObject = {};
    usrObject.username = document.getElementById("regUsername").value
    usrObject.email = document.getElementById("regEmail").value;
    usrObject.phone = document.getElementById("regPhone").value;
    usrObject.password = document.getElementById("regPassword").value;

    //see if email has @ sign
    let hasEmailSign = false;

    //Loop searching for an @ in the email
    for(i = 0; i < usrObject.email.length; i++)
    {
        if(usrObject.email.charAt(i) == '@')
        {
            hasEmailSign = true;
        }
    }

    //Is phone number all in digits? loop.
    let isPhoneInDigits = true;;
    
    for(i = 0; i < usrObject.phone.length; i++)
    {
        //If the charAt can be parsed into an int, then it is a digit.
        if( isNaN(parseInt(usrObject.phone.charAt(i))))
        {
            isPhoneInDigits = false;
        }
    }

    //IF empty input
    if(usrObject.username.length == 0 || usrObject.email.length == 0
        || usrObject.phone.length == 0)
    {
        window.alert("Sign up successful, but you're Missing fields in registration.");
        location.reload();
    }
    //else if phone input is not 10 digits and does not begin with 07
    else if(usrObject.phone.length != 11 || usrObject.phone.charAt(0) != 0 || usrObject.phone.charAt(1) != 7 || isPhoneInDigits == false)
    {
        window.alert("Sign up successful, but you're phone must be 11 digits and must begin with 07");
        location.reload();
    }
    else if(hasEmailSign == false)
    {
        window.alert("Sign up successful, but you're missing an @ sign in your email");
        location.reload();
    }
    else if(usrObject.username.length > 8)
    {
        window.alert("Sign up successful, but you're Username needs to be less than 9 characters.");
        location.reload();
    }

    //Else sign up success!
    else 
    {
        //Inform user of result
        window.alert("Registration successful");
    }
}

