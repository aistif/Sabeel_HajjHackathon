
function login_validator(login) {
    if (document.getElementById("username").value === "") {
            alert("ادخل اسم المستخدم");
            document.getElementById("username").focus();
            return (false);
    }
    if (document.getElementById("password").value === "") {
            alert("ادخل كلمة المرور");
            document.getElementById("password").focus();
            return (false);
    }
}

function toggleThis(dID1, dID2, dID3) {
    var toggled = false;
    if(toggled){
        $(dID1).removeAttr("style").hide();
        $(dID2).removeAttr("style").hide();
        $(dID3).removeAttr("style").hide();
    } else {
        $(dID1).show("slow");
        $(dID2).show("slow");
        $(dID3).show("slow");
        toggled = true;
    }
} 

$(document).ready(function() {
  $('#reportbtn').click(function() {
    var reportBox = $(this).attr('href');
    
    $(reportBox).fadeIn(300);
    
    var popMargTop = ($(reportBox).height() + 24) / 2;
    var popMargLeft = ($(reportBox).width() + 24) / 2; 
    
    $(reportBox).css({ 
      'margin-top' : -popMargTop,
       'margin-left' : -popMargLeft
    });

    $('body').append('<div id="mask"></div>');
    $('#mask').fadeIn(300);

    return false;
  });
});