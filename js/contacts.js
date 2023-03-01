sendEmail();

function sendEmail() {
    var params = {
        from_name : document.getElementById('name').value,
        email : document.getElementById('email').value,
        message : document.getElementById('message').value,  
    }
    emailjs.send("service_6iolwog", "template_cw3lczf", params).then(function (res) {
        alert("success " + res.status);
    });
}