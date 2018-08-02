
function login_validator(login) {
    if (document.getElementById("username").value == "") {
            alert("ادخل اسم المستخدم");
            document.getElementById("username").focus();
            return (false);
    }
    if (document.getElementById("password").value == "") {
            alert("ادخل كلمة المرور");
            document.getElementById("password").focus();
            return (false);
    }
}

function toggleThis(eID) {
    var details = document.getElementById("eID");
    if (details.style.display === "none") {
        details.style.display = "block";
    } else {
        details.style.display = "none";
    }
} 

$(document).ready(function() {
    $('addNewRef input[type=submit]').click(function() {
        return confirm('تم العثور على ثلاجات جديدة، هل ترغب بإضافتها للقائمة؟');
    });
});