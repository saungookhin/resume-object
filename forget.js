document.getElementById('resetForm').addEventListener('submit', function (e) {
    e.preventDefault(); // prevent form submission
  
    var email = document.getElementById('email').value;
    if (!email) {
      showMessage('Please enter your email address.', 'error');
      return;
    }
  
    // Here you would perform the actual password reset process, such as sending an email
    // This example just displays a message
    showMessage('Password reset email sent to ' + email + '.', 'success');
  });
  
  function showMessage(message, type) {
    var messageDiv = document.getElementById('message');
    messageDiv.innerHTML = message;
    messageDiv.className = type; // 'error' or 'success'
  }