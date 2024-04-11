function addWorkField() {
    var educationFields = document.getElementById('workFields');
    var newEducationField = document.createElement('div');
    newEducationField.classList.add('work-field');
    newEducationField.innerHTML = `
	<div class="line">
	<div class="date_group">
		<span>開始年月Started:</span>
		<input type="text" class="startDate" name="startDate" placeholder="YYYY/MM" required
			pattern="\d{4}/\d{2}">
		<span>終了Finished:</span>
		<input type="text" class="finishDate" name="finishDate" placeholder="YYYY/MM" required
			pattern="\d{4}/\d{2}">
	</div>
	<div class="form-group">
		<label for="companyName">社名CompanyName:</label>
		<input type="text" class="companyName" name="companyName" required>
	</div>
	<div class="form-group">
		<label for="jobType">仕事内容Type of Job:</label>
		<input type="text" class="jobType" name="jobType" required>
	</div>
	<div class="form-group">
		<label for="city">市名City:</label>
		<input type="text" class="city" name="city" required>
	</div>
</div>
    `;
    educationFields.appendChild(newEducationField);
  }
  