document.getElementById('basicInfoForm').addEventListener('submit', function (e) {
    e.preventDefault(); // prevent form submission
  
    // Retrieve form data
    var formData = new FormData(this);
  
    // Log form data (You can perform further processing here)
    for (var pair of formData.entries()) {
      console.log(pair[0] + ': ' + pair[1]);
    }
  
    // You can send the form data to the server using AJAX or submit the form traditionally
    // Example using fetch API:
    // fetch('submit_url', {
    //   method: 'POST',
    //   body: formData
    // })
    // .then(response => response.json())
    // .then(data => console.log(data))
    // .catch(error => console.error('Error:', error));
  });
  