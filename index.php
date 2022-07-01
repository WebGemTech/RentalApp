<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<title>
        Registration
    </title>

	<style>

		/* Styling the Body element i.e. Color,
		Font, Alignment */
		body {
			font-family: Verdana;
			text-align: center;
		}

		/* Styling the Form (Color, Padding, Shadow) */
		form {
			background-color: #fff;
			max-width: 500px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
		}

		/* Styling form-control Class */
		.form-control {
			text-align: left;
			margin-bottom: 25px;
		}

		/* Styling form-control Label */
		.form-control label {
			display: block;
			margin-bottom: 10px;
		}

		/* Styling form-control input,
		select, textarea */
		.form-control input,
		.form-control select,
		.form-control textarea {
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			padding: 10px;
			display: block;
			width: 95%;
		}

		/* Styling form-control Radio
		button and Checkbox */
		.form-control input[type="radio"],
		.form-control input[type="checkbox"] {
			display: inline-block;
			width: auto;
		}

		/* Styling Button */
		button {
			font-size: 21px;
			margin-top: 10px;
			margin-bottom: 20px;
		}
        
        p {
          text-align: left;
          }
           
	</style>
</head>

<body>
<h1>Registration</h1>
	<!-- Create Form -->
	<form id="form">

		<!-- Details -->
		<div class="form-control">
			<label for="full name" id="label-full name">
				Full Name
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="full name"
				placeholder/>
		</div>

		<div class="form-control">
			<label for="email" id="label-email">
				E-mail
			</label>

			<!-- Input Type Email-->
			<input type="email"
				id="email"
				placeholder/>
		</div>
        
        <div class="form-control">
			<label for="presentaddress" id="label-presentaddress">
				Present Address
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="presentaddress"
				placeholder/>
		</div>
        
        <div class="form-control">
			<label for="city" id="label-city">
				City
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="city"
				placeholder/>
		</div>
        
           <div class="form-control">
			<label for="province" id="label-province">
				Province
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="province"
				placeholder/>
		</div>
        
           <div class="form-control">
			<label for="postalcode" id="label-postalcode">
				Postal Code
			</label>

			<!-- Input Type Text -->
			<input type="code"
				id="postalcode"
				placeholder/>
		</div>
        
           <div class="form-control">
			<label for="HowLongthere" id="label-HowLongthere">
				How Long there?
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="HowLongthere"
				placeholder/>
		</div>
        
           <div class="form-control">
			<label for="SocialInsuranceNumber" id="label-SocialInsuranceNumber">
				Social Insurance Number
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="SocialInsuranceNumber"
				placeholder/>
		</div>
        
           <div class="form-control">
			<label for="DateofBirth" id="label-DateofBirth">
				Date of Birth
			</label>

			<!-- Input Type Text -->
			<input type="date"
				id="DateofBirth"
				placeholder/>
		</div>
        
           <div class="form-control">
			<label for="HmPhone" id="label-HmPhone">
				Hm Phone
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="HmPhone"
				placeholder/>
		</div>
        
           <div class="form-control">
			<label for="WkPhone" id="label-WkPhone">
				Wk Phone
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="WkPhone"
				placeholder/>
		</div>
        
           <div class="form-control">
			<label for="CellPhone" id="label-CellPhone">
				Cell Phone
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="CellPhone"
				placeholder/>
		</div>
        
           <div class="form-control">
			<label for="Landlord'sName" id="label-Landlord'sName">
				Landlord's Name
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="Landlord'sName"
				placeholder/>
		</div>
        
           <div class="form-control">
			<label for="Landlord'sPHNumber" id="label-Landlord'sPHNumber">
				Landlord's PH Number
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="Landlord'sPHNumber"
				placeholder>
		</div>
        
           <div class="form-control">
			<label for="CurrentMonthlyPayment" id="label-CurrentMonthlyPayment">
				Current Monthly Payment?
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="CurrentMonthlyPayment"
				placeholder/>
		</div>
        
           <div class="form-control">
			<label for="EMPLOYER" id="label-EMPLOYER">
				EMPLOYER
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="EMPLOYER"
				placeholder/>
		</div>
        
           <div class="form-control">
			<label for="Position" id="label-Position">
				Position
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="Position"
				placeholder/>
		</div>
        
                   <div class="form-control">
			<label for="Address" id="label-Address">
				Address
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="Address"
				placeholder/>
		</div>
        
                   <div class="form-control">
			<label for="HowLongwithyourpresentEmployer?:IfLESSthan3years,pleaseprovidepreviousEmployer." id="label-HowLongwithyourpresentEmployer?:IfLESSthan3years,pleaseprovidepreviousEmployer.">
				How Long with your present Employer?:If LESS than 3 years, please provide previous Employer.
			</label>

			<!-- Input Type Text -->
			<input type="text"	id="HowLongwithyourpresentEmployer?:IfLESSthan3years,pleaseprovidepreviousEmployer."
				placeholder/>
		</div>
        
                   <div class="form-control">
			<label for="GrossMonthlyIncome" id="label-GrossMonthlyIncome">
				Gross Monthly Income: $
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="GrossMonthlyIncome"
				placeholder/>
		</div>
        
                   <div class="form-control">
			<label for="NameandRelationshipofAnyoneLivingWithYou" id="label-NameandRelationshipofAnyoneLivingWithYou">
				Name and Relationship of Anyone Living With You
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="NameandRelationshipofAnyoneLivingWithYou"
				placeholder/>
		</div>
        
                   <div class="form-control">
			<label for="AnyPets:Yes/No(Describe)" id="label-AnyPets:Yes/No(Describe)">
				Any Pets: Yes/No (Describe)
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="AnyPets:Yes/No(Describe)"
				placeholder/>
		</div>
        
                   <div class="form-control">
			<label for="WhenWouldYouLikeToMoveIn" id="label-WhenWouldYouLikeToMoveIn">
				When Would You Like To Move In
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="WhenWouldYouLikeToMoveIn"
				placeholder/>
		</div>
        
                   <div class="form-control">
			<label for="HowMuchDownPaymentDoYouHave" id="label-HowMuchDownPaymentDoYouHave">
				How Much Down Payment Do You Have
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="HowMuchDownPaymentDoYouHave"
				placeholder/>
		</div>
        
                   <div class="form-control">
			<label for="WhatisyourpresentCreditsituation?" id="label-WhatisyourpresentCreditsituation?">
				What is your present Credit situation? Good / Bad / Fair?
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="WhatisyourpresentCreditsituation?"
				placeholder/>
		</div>
        
        <p>I declare that the application is complete, true and correct, and I here with give my permission for anyone contracted (including Transunion or Equifax) to release the credit or personal 
information of the undersigned applicant to management or their authorized agents. At any time for the purpose of entering into and continuing to offer or collect on any agreement and/or credit 
extended. I Further authorize management or their authorized agent to verify the application information including but not limited to obtaining criminal record, contacting creditors, present or former 
land lords, employers and personal references, where listed or not, at the time of the application and at any time in the future, with any regard to any agreement entered into with management. 
Any false information with constitute grounds for rejection of this application, or management may at any time immediately terminate any agreement entered into in reliance upon miss information 
given on this application. By providing the Home phone numbers and email addresses above I/We here by authorize the vendor to contact me/us at my/our home phone number and email addresses</p>
        
                   <div class="form-control">
			<label for="Applicant'sName" id="label-Applicant'sName">
				Applicant's Name
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="Applicant'sName"
				placeholder/>
		</div>
        
                   <div class="form-control">
			<label for="Signature" id="label-Signature">
				Signature
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="Signature"
				placeholder/>
		</div>
        
                      <div class="form-control">
			<label for="Date" id="label-Date">
				Date
			</label>

			<!-- Input Type Text -->
			<input type="date"
				id="Date"
				placeholder/>
		</div>
        
		<!-- Multi-line Text Input Control -->
		<button type="submit" value="submit">
			Submit
		</button>
        
	</form>
</body>
</html>
