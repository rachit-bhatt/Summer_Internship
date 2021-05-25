<!-- Registration Page -->
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration Page using Table Tag - Task 1</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body class="dark-theme">
		<table class="table">
		<caption>Task 1 - Registration Page using Table tag</caption>
			<!--<thead>
				<tr>
					<th></th>
				</tr>
			</thead>-->
			<tbody>
				<tr>
					<th>Name</th>
					<td><input type="text" placeholder="Enter your name" autofocus/></td>
				</tr>
				<tr>
					<th>E-Mail</th>
					<td><input type="text" placeholder="Enter your e-mail"/></td>
				</tr>
				<tr>
					<th>Contact</th>
					<td><input type="text" placeholder="Enter your contact number"/></td>
				</tr>
				<tr>
					<th>Gender</th>
					<td>
						<label for="Male">Male</label>
						<input id="Male" name="gender" type="radio">
						<label for="Female">Female</label>
						<input id="Female" name="gender" type="radio">
					</td>
				</tr>
				<tr>
					<th>Hobbies</th>
					<td>
						<div class="labeledCheckbox">
							<label for="Coding">Coding</label>
							<input id="Coding" type="checkbox"/>
						</div>
						<div class="labeledCheckbox">
							<label for="Reading">Reading</label>
							<input id="Reading" type="checkbox"/>
						</div>
						<div class="labeledCheckbox">
							<label for="Writing">Writing</label>
							<input id="Writing" type="checkbox"/>
						</div>
						<div class="labeledCheckbox">
							<label for="Dancing">Dancing</label>
							<input id="Dancing" type="checkbox"/>
						</div>
						<div class="labeledCheckbox">
							<label for="Traveling">Traveling</label>
							<input id="Traveling" type="checkbox"/>
						</div>
						<div class="labeledCheckbox">
							<label for="Photography">Photography</label>
							<input id="Photography" type="checkbox"/>
						</div>
						<div class="labeledCheckbox">
							<label for="Painting">Painting</label>
							<input id="Painting" type="checkbox"/>
						</div>
						<div class="labeledCheckbox">
							<label for="Music">Music</label>
							<input id="Music" type="checkbox"/>
						</div>
						<div class="labeledCheckbox">
							<label for="Singing">Singing</label>
							<input id="Singing" type="checkbox"/>
						</div>
					</td>
				</tr>
				<tr>
					<th>Favorite Colour</th>
					<td>
						<select>
							<option>Red</option>
							<option>Green</option>
							<option>Blue</option>
							<option>Yellow</option>
							<option>Orange</option>
							<option>Violet</option>
							<option>Indigo</option>
							<option>Black</option>
							<option>White</option>
						</select>
					</td>
				</tr>
				<tr>
					<th style="border-bottom: 0px;">
						<input type="submit" value="Submit"/>
					</th>
					<td style="border-bottom: 0px;">
						<input type="reset" value="Reset"/>
					</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>