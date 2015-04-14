<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="By Tony Cottengim">
	<meta name="author" content="Trinity's Edge">
	<link rel="icon" href="images/favicon.ico">

	<title>Contact &bull; Bold 47 Photography</title>

	<?php include 'widgets/navbar.php'; ?>
	<div class="mainBody contactPage">
		<form id="contactForm" method="post" action="sendEmail.php">
		<table id="formContainer">
			<tr>
			<td>
			<table id="contactInfo">
				<tr id="name_Row">
					<td id="name_Label">
						<label>Name:</label>
					</td>
					<td id="name_First">
						<input type="text" id="firstName" name="firstName" placeholder="First Name" size="20" required="required"/>
					</td>
					<td id="name_Last">
						<input type="text" id="lastName" name="lastName" placeholder="Last Name" size="20" required="required"/>
					</td>
				</tr>
				<tr id="email_Row">
					<td id="email_Label">
						<label>Email:</label>
					</td>
					<td id="email_Input" colspan="2">
						<input type="email" id="email" name="email" placeholder="example@email.com" style="width:100%;" required="required"/>
					</td>
				</tr>
				<tr id="phone_Row">
					<td id="phone_Label">
						<label>Phone:</label>
					</td>
					<td id="phone_Input">
						<input type="tel" id="phone" name="phone" placeholder="(555)555-5555" size="20" required/>
					</td>
					<td>
						&nbsp;
					</td>
				</tr>			   
			</table>
			<td>
			</tr>
			<tr>
			<td>
			<table id="subject_Table">
				<tr id="services_Row">
					<td id="subject_Label">
						<label>Subject:</label>
					</td>
					<td id="services_Radio">
						<input type="radio" id="subject_Radio_Services" name="subject_Radio" onclick="changeSubject('services');"/>Services &nbsp;
					</td>
					<td id="services_TypeAndDate" style="display:none">
						<select id="serviceType" >
							<option id="Wedding">Wedding</option>
							<option id="Event">Event</option>
							<option id="Portraits">Portraits</option>
							<option id="MiniSession">Mini Session</option>
							<option id="BasicSession">Basic Session</option>
							<option id="AdvancedSession">Advanced Session</option>
						</select>
						on <input type="text" id="serviceDate" name="serviceDate" size="10" placeholder="mm/dd/yyyy" />
					</td>
				</tr>
				<tr id="questionsComments_Row">
					<td>
						&nbsp;
					</td>
					<td id="questionsComments_Radio" colspan="2">
						<input type="radio" id="subject_Radio_QuestionsComments" name="subject_Radio" onclick="changeSubject('questionsComments');"/>Questions/Comments
					</td>
				</tr>   
				<tr id="other_Row">
					<td>
						&nbsp;
					</td>
					<td id="other_Radio">
						<input type="radio" id="subject_Radio_Other" name="subject_Radio" onclick="changeSubject('other');"/>Other
					</td>
					<td id="other_Info"  style="display:none">
						<input type="text" id="otherSubject" name="otherSubject" placeholder="Please specify." size="30"/>
					</td>
				</tr>
			</table>
			</td>
			</tr>
			<tr>
			<td>
			<textarea id="message" name="message" rows="10" placeholder="Enter message." required="required"></textarea>
			<br/>
			</td>
			</tr>
			<tr>
			<td>
			<button type="submit" value="Submit" onclick="formatSubject();">Submit</button>
			<button type="reset" value="Reset">Cancel</button>
			</td>
			</tr>
			</table>
			
			
			<input type="hidden" id="subject" name="subject">
		</form>
	</div>

	<?php include'widgets/footer.php'; ?>