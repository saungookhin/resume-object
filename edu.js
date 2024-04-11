function addEducationField() {
    var educationFields = document.getElementById('educationFields');
    var newEducationField = document.createElement('div');
    newEducationField.classList.add('education-field');
    newEducationField.innerHTML = `
    <div class="line">
    <div class="date_group">
      <span>入学年月Started:</span>
      <input type="text" class="startDate" name="startDate" placeholder="YYYY/MM" required
        pattern="\d{4}/\d{2}">
      <span>卒業Finished:</span>
      <input type="text" class="finishDate" name="finishDate" placeholder="YYYY/MM" required
        pattern="\d{4}/\d{2}">
    </div>
    <div class="form-group">
      <label for="schoolName">学校名School Name:</label>
      <input type="text" class="schoolName" name="schoolName" required>
    </div>
    <div class="form-group">
      <label for="major">専門Major:</label>
      <input type="text" class="major" name="major" required>
    </div>
    <div class="form-group">
      <label for="degree">資格Degree:</label>
      <input type="text" class="degree" name="degree" required>
    </div>
  </div>
    `;
    educationFields.appendChild(newEducationField);
  }
  