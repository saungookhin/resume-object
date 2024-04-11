function addFamilyField() {
    var familyFields = document.getElementById('familyFields');
    var newFamilyField = document.createElement('div');
    newFamilyField.classList.add('family-field');
    newFamilyField.innerHTML = `
    <div class="line">     
							<div class="form-group">
								<label for="schoolName">氏名Name:</label>
								<input type="text" class="schoolName" name="schoolName" required>
        </div>
								<div class="form-group">
									<label for="major">続柄 Relation:</label>
									<select id="nationality" name="nationality" required>
                                        <option value="uk">続柄を選択してください。 Select Relation</option>
                                        <option value="">父/Father</option>
                                        <option value="us">母/Mother</option>
                                        <option value="uk">夫/Husband</option>
                                        <option value="ca">妻/Wife</option>
                                        <option value="">娘/Son</option>
                                        <option value="us">娘/Daughter</option>
                                        <option value="uk">Other</option>
                                        






                                      </select>
        </div>
        <div class="form-group">
            <label for="major">年齢 Age:</label>
            <input type="text" class="major" name="major" required>
</div>
									<div class="form-group">
										<label for="degree">職業\Work:</label>
										<input type="text" class="degree" name="degree" required>
        </div>
        <div class="form-group">
            <label for="degree">現住所　Address:</label>
            <textarea id="presentAddress" name="presentAddress" row="4" required></textarea>
</div>
<div class="form-group">
    <label for="degree">電話番号 Tel:</label>
    <input type="text" class="major" name="major" required>
    
</div>
									</div>
    `;
    familyFields.appendChild(newFamilyField);
  }
  