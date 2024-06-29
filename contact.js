function emailSend() {
  var userName = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var subject = document.getElementById("phone").value;
  //   var message = document.getElementById("message").value;

  var messageBody =
    "Name " +
    userName +
    "<br/> Email " +
    email +
    "<br/> subject " +
    subject +
    // "<br/> Message " +
    // message;
    Email.send({
      Host: "smtp.elasticemail.com",
      Username: "alnajmqaconsultation@gmail.com",
      Password: "72F8DE36020F65AC157D6A9528A1F2F93A5",
      To: "SHIMAAMAIL7@gmail.com",
      From: "alnajmqaconsultation@gmail.com",
      Subject: "Contact Form",
      Body: messageBody,
    }).then((message) => {
      if (message == "OK") {
        swal("Secussful", "You clicked the button!", "success");
      } else {
        swal("Error", "You clicked the button!", "error");
      }
    });
}
