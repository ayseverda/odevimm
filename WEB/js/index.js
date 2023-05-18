// Formun submit olayını dinleme
document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Form gönderimini engelleme
  
    // Formdaki girdileri alma
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var age = document.getElementById("age").value;
    var gender = document.getElementById("gender").value;
    var city = document.getElementById("city").value;
    var message = document.getElementById("message").value;
  
    // Girdileri kontrol etme
    if (name === "") {
      alert("Please enter your name.");
      return;
    }
  
    if (email === "") {
      alert("Please enter your email.");
      return;
    }
  
    // ... Diğer kontrolleri buraya ekleyebilirsiniz ...
  
    // Form verilerini işleme veya gönderme
    // Örneğin, form verilerini konsola yazdıralım
    console.log("Name: " + name);
    console.log("Email: " + email);
    console.log("Age: " + age);
    console.log("Gender: " + gender);
    console.log("City: " + city);
    console.log("Message: " + message);
  
    // Formu sıfırlama
    document.getElementById("contactForm").reset();
  });
  