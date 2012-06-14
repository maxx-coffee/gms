<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  
  <title>New Website</title>
  
  <meta name="description" content="" />
  <meta name="keywords" value="" />
 <meta name="viewport" content="width=device-width,
                                maximum-scale=1.0" />
  <link rel="stylesheet" href="/gms/css/styles.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="http://cubiq.org/dropbox/iscroll4/src/iscroll.js" type="text/javascript"></script>
  <script type="text/javascript">
  var myScroll;
  
  function loaded() {
  	myScroll = new iScroll('wrapper', {
  		snap: true,
  		momentum: false,
  		hScrollbar: false,
  				onBeforeScrollStart: function (e) {
  					var target = e.target;
  					while (target.nodeType != 1) target = target.parentNode;
  		
  					if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA')
  						e.preventDefault();
  				}
  	 });
  }
  
  document.addEventListener('DOMContentLoaded', loaded, false);
  </script>
  
  <script>
  
  	$(function(){
  		$(".rounded .rounded h3").each(function(){
  			var height = $(this).height();
  			var parent_height = $(".rounded .rounded").height()/1.6;
  			$(this).css("top",parent_height - height);
  		});
  		$(".small .rounded h3,.med .rounded h3").each(function(){
  			var height = $(this).height() ;
  			var parent_height = $(".rounded .rounded").height()/2;
  			$(this).css("top",parent_height - height);
  		});
  		var small_height = $(".totals .first").height();
  		$(".height").each(function(){
  			$(this).css("height", small_height);
  		});
  		var count = $("section").size();
  		var wrap_width = count * 1024+300;
  		$("#scroller").css("width", wrap_width);
  	});

  </script>

</head>
<body>
<div id="wrapper">
  <div id="scroller">
  <?echo form_open('presentation/submit_entry');?>
  	<section id="landing">
  	 <img src="http://thecreatatory.com/gms/images/bottom_tab.jpg" alt="" class="bottom_tab" />
  	 	<article class="header">
  	 		<h2 class="gray_header">Group Management Services</h2>
  	 		<h3 class="white_header">Professional Employer Organization (PEO) Proposal</h3>
  	 	</article>
  	 	<article class="center">
  	 		<img src="http://thecreatatory.com/gms/images/landing_log.jpg" alt="" />
  	 	</article>
  	 	<!-- end center-->
  	 	<article class="bottom">
  	 		<h2 class="gray_header">prepared For</h2>
  	 		<h3 class="white_header"><input type="text" name="prepared_for" value="" /></h3>
  	 		<div id="sales_rep">
  	 			<h3 class="green_header"><input type="text" name="sales_rep" value="" /></h3>
  	 		</div>
  	 		
  	 	</article>
  	 	<!-- end footer-->
  	 </section>
  	 <!-- end landing section -->
  	 
  	 
  	 <section class="sub_section" id="about"> 
  	 <h4 class="gray_tab">Employee Management Made Simple</h4>
  	 	<h2 style="margin: 0 0 0 22px;" class="gray_header">about GMS</h2>
  	 	<p>
  	 	GMS is a Professional Employer Organization (PEO) that enables clients to outsource non-core business functions. The proposal outlines our business services, specific benefits gained through these services, the general benefits of outsourcing and the financial impact of partnering with GMS. A Human Resource Analysis and Financial Analysis conclude this proposal.
  	 	</p>
  	 </section>
  	 <!-- about -->
  	 
  	 <section class="sub_section" id="about"> 
  	 <h4 class="gray_tab">Employee Management Made Simple</h4>
  	 	<ul style="padding:0 0 0 50px;">
  	 		<li>15+ years of successful industry experience</li>
  	 		<li>Performing services for over 600 clients and over 13,000 worksite employees</li>
  	 		<li>Managing over $400 million in payroll and $80 million in employee benefits</li>
  	 		<li>Founded and headquartered in Richfield, OH with offices in Columbus and Cincinnati</li>
  	 	</ul>
  	 	
  	 </section>
  	 <!-- about -->
  	 
  	 <section class="sub_section" id="service_overview"> 
  	 <h4 class="gray_tab">GMS Menu oF ServiceS - overview</h4>
  	 	<p>
  	 	<br>
  	 	GMS offers a wide array of services for our clients. We customize each service plan according to each client’s wants and needs. The pricing is all-inclusive. Certain services, such as Drug Free Safety Program Training and Job Ad placements, do involve additional charges and are noted on our menu. Everything else is included in the pricing as stated on the Financial Analysis.
  	 	</p>  	
  	 </section>
  	 
  	 <!-- service_overview -->
  	 
  	 <section class="sub_section" id="service_overview"> 
  	 <h4 class="gray_tab">GMS Menu oF ServiceS - overview</h4>
  		<img src="http://thecreatatory.com/gms/images/service_overview_img.jpg" alt="" class="service_overview_img" />
  	 </section>
  	 
  	  	 
  	 <section class="sub_section payroll" > 
  	 <h4 class="gray_tab">GMS Menu oF ServiceS - overview</h4>
  	 	<h2 class="gray_header">payroll ServiceS</h2>
  	 	<article class="col1">
  	 	<ul>
  	 	  	<li>Full Service Payroll Processing</li>
  	 	  	<li>Electronic New Hire Reporting</li>
  	 	  	<li>Cafeteria Benefits Plan Administration</li>
  	 	  	<li>500+ Customizable Payroll Reports with</li>
  	 	  	<li>Job Costing Capabilities</li>
  	 	  	<li>Internet Based Payroll Processing</li>
  	 	  	<li>Employee Online Compensation Analysis</li>
  	 	  	<li>Payroll Tax Payment &amp; Filing (includes 940, 941, State, County &amp; Multiple Local Tax Calculations and Filings)</li>
  	 	</ul>
  	 	</article>
  	 	<article class="col2">
  	 	<ul>
  	 		<li>Retirement Plan Calculations</li>
  	 		<li>Special Batch Runs</li>
  	 		<li>Direct Deposit</li>
  	 		<li>Time Keeping Systems (includes installation, programming and technical support)(cost determined by customer needs, range
  	 		from $1,500 - $5,000)</li>
  	 		<li>Garnishment Processing &amp; Payment ($2 fee billed to employee)</li>
  	 		<li>GMS Debit Card Option</li>
  	 		<li>Workers Comp Calculations &amp; Filing</li>
  	 		<li>W2’s</li>
  	 	</ul>
  	 	</article>
  	 </section>
  	 
  	 <!-- service_overview -->
  	 
  	 
  	 <section class="sub_section payroll" > 
  	 <h4 class="gray_tab">GMS Menu oF ServiceS - overview</h4>
  	 	<h2  class="gray_header">payroll Service analysis</h2>
  	 	<article style="margin:50px 0 0 0">
  	 		<div class="rounded">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">Current Payroll Processing</h3>
  	 			</div>
  	 			<input type="number" name="current_payroll_processing" value="" />
  	 		</div>
  	 		<div class="spacer">
  	 			<div class="plus">+</div>
  	 		</div>
  	 		<div class="rounded">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">Accountant Fees Eliminated</h3>
  	 			</div>
  	 			<input type="number" name="accountant_fees_eliminated" value="" />
  	 		</div>
  	 		<div class="spacer">
  	 			<div class="plus">+</div>
  	 		</div>
  	 		<div class="rounded">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">Additional Items</h3>
  	 			</div>
  	 			<input type="number" name="additional_items" value="" />
  	 		</div>
  	 		<div class="spacer">
  	 			<div class="equal">=</div>
  	 		</div>
  	 		<div class="rounded">
  	 			<div class="rounded green">
  	 				<h3 class="white_header">Payroll Savings</h3>
  	 			</div>
  	 			<span class="green_subheader">------</span>
  	 		</div>
  	 		
  	 	</article>
  	 </section>
  	 
  	 <!-- service_overview -->
  	 
  	 
  	 
  	 
  	 <section class="sub_section payroll" > 
  	 <h4 class="gray_tab">GMS Menu oF ServiceS - overview</h4>
  	 	<h2 class="gray_header">Benefit ServiceS</h2>
  	 	<article class="col1">
  	 	<ul>
  	 		<li>Savings on Group Healthcare Plans</li>
  	 		<li>Access and Savings on Ancillary Benefits, like:
  	 		<p>- Dental and Vision Pans<br> 
  	 		- Short Term & Long Term</p>
  			</li>  		
  			<li>
  			Disability
  	 		<p>- Life Insurance</p>
  	 		</li>
  	 		<li>HealthcareEnrollment Meetings</li>
  	 		<li>Eligibility Audits</li>
  	 		<li>
  	 		Complete Healthcare Administration
  	 		<p>
  	 		- Claims Questions<br>
  	 		- EOB Questions<br>
  	 		- Rx / Provider Solutions - Adds/Terms<br>
  	 		- Billing</p>
  	 		</li>
  	 	</ul>
  	 	</article>
  	 	<article class="col2">
  	 	<ul>
  	 		<li>
  	 		Administration of your savings accounts
  	 		<p>
  	 		- Flexible Spending Account ($5.85 per/month paid by employee)<br>
  	 		- Health Savings Account ($2.50 per/month/employee)<br>
  	 		- Section 125 Administration
  	 		</p>
  	 		</li>
  	 		<li>
  	 		COBRA Administration<br>
  	 		(2% admin fee paid by employee)
  	 		</li>
  	 		<li>Access to Claims Data</li>
  	 		<li>Account Reviews / Pre-Renewal Meetings</li>
  	 		<li>Wellness Programs & Implementation</li>
  	 		<li>Retirement Plan Administration ($1,000 annual Admin Fee) </li> 	
  	 		</ul>
  	 	</article>
  	 </section>
  	 
  	 <!-- Benefit Services -->
  	 
  	 
  	 <section class="sub_section benefit_analysis" style="overflow: hidden;" > 
  	 <h4 class="gray_tab">GMS Menu oF ServiceS - overview</h4>
  	 	<h2  class="gray_header">Benefit Service analysis</h2>
  	 	<article style="margin:70px 0 0 0">
  	 		<div class="rounded">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">GMS Healthcare Plan 1</h3>
  	 			</div>
  	 			<input type="number" name="gms_healthcare_plan_1" value="" />
  	 		</div>
  	 		<div class="spacer">
  	 			<div class="plus" style="padding:10px 12px">or</div>
  	 		</div>
  	 		<div class="rounded">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">GMS Healthcare Plan 2</h3>
  	 			</div>
  	 			<input type="number" name="gms_healthcare_plan_2" value="" />
  	 		</div>
  	 		<div class="spacer">
  	 			<div class="plus" style="padding:10px 19px">-</div>
  	 		</div>
  	 		<div class="rounded">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">Current Healthcare Annual Premium</h3>
  	 			</div>
  	 			<input type="number" name="current_healthcare_ann_premium" value="" />
  	 		</div>
  	 		
  	 		
  	 	</article>
  	 	<article style="padding:40px 0 10px 170px;clear: both; overflow: hidden;">
  	 	<div class="spacer">
  	 		<div class="plus" >+</div>
  	 	</div>
  	 		<div class="rounded">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">401k Admin Fee Eliminated </h3>
  	 			</div>
  	 			<input type="number" name="admin_fee_eliminated" value="" />
  	 		</div>
  	 		<div class="spacer">
  	 			<div class="plus" >+</div>
  	 		</div>
  	 		<div class="rounded">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">Additional Items</h3>
  	 			</div>
  	 			<input type="number" name="benefit_additional_items" value="" />
  	 		</div>
  	 		<div class="spacer">
  	 			<div class="equal" >=</div>
  	 		</div>
  	 		<div class="rounded">
  	 			<div class="rounded green">
  	 				<h3 class="white_header">Benefits Savings</h3>
  	 			</div>
  	 			----
  	 		</div>
  	 		
  	 		
  	 	</article>
  	 </section>
  	 
  	 <!-- service_overview -->
  	 
  	 
  	 <section class="sub_section payroll" > 
  	 <h4 class="gray_tab">GMS Menu oF ServiceS - overview</h4>
  	 	<h2 class="gray_header">Risk Management ServiceS</h2>
  	 	<article class="col1">
  	 	<ul>
  	 	  	<li>Workers’ Comp Discount • Programs & Administration</li>
  	 	  	<li>Claims Administration & • Hearing Representation</li>
  	 	  	<li>LossControlSolutions</li>
  	 	  	<li>First Report of Injury Procedures & Accident Investigation</li>
  	 	  	<li>Safety Inspections/OSHA Compliance & OSHA 300 Logs</li>
  	 	  	<li>Unemployment Compensation Management</li>
  	 	</ul>
  	 	</article>
  	 	<article class="col2">
  	 	<ul>
  	 		<li>Transitional Work & Wage Continuation Programs</li>
  	 		<li>Safety Training & Safety Grant Assistance (additional fees may apply based on safety programs)</li>
  	 		<li>Drug Free Safety Program Implementation & Training</li>
  	 		<li>BWC Updates </li>
  	 		<li>Safety Analysis</li>
  	 	</ul>
  	 	</article>
  	 </section>
  	 
  	 <!-- risk management services-->
  	 
  	 <section class="sub_section payroll" style="overflow: hidden;" > 
  	 <h4 class="gray_tab">GMS Menu oF ServiceS - overview</h4>
  	 	<h2  class="gray_header">Risk Management Services Analysis</h2>
  	 	<article class="totals" style="margin:20px 0 0 0">
  	 		<div class="rounded small first height">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">Man. Class</h3>
  	 			</div>
  	 			<ul>
  	 				<li><input type="number" name="man_class[]" value="" /></li>
  	 				<li><input type="number" name="man_class[]" value="" /></li>
  	 				<li><input type="number" name="man_class[]" value="" /></li>
  	 				<li><input type="number" name="man_class[]" value="" /></li>
  	 				<li><input type="number" name="man_class[]" value="" /></li>
  	 				<li>Totals</li>
  	 			</ul>
  	 		</div>
  	 		
  	 		<div class="rounded small height">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">Description</h3>
  	 			</div>
  	 			<ul>
  	 				<li><input type="text" name="description[]" value="" /></li>
  	 				<li><input type="text" name="description[]" value="" /></li>
  	 				<li><input type="text" name="description[]" value="" /></li>
  	 				<li><input type="text" name="description[]" value="" /> </li>
  	 				<li><input type="text" name="description[]" value="" /></li>
  	 			</ul>
  	 		</div>
  	
  	 		<div class="rounded small height">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">Payroll</h3>
  	 			</div>
  	 			<ul>
  	 			<li><input type="number" name="payroll[]" value="" /></li>
  	 			<li><input type="number" name="payroll[]" value="" /></li>
  	 			<li><input type="number" name="payroll[]" value="" /></li>
  	 			<li><input type="number" name="payroll[]" value="" /></li>
  	 			<li><input type="number" name="payroll[]" value="" /></li>
  	 			</ul>
  	 		</div>
  	 		
  	 		<div class="rounded small height">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">Current Rate</h3>
  	 			</div>
  	 			<ul>
  	 			<li><input type="number" name="current_rate[]" value="" /></li>
  	 			<li><input type="number" name="current_rate[]" value="" /></li>
  	 			<li><input type="number" name="current_rate[]" value="" /></li>
  	 			<li><input type="number" name="current_rate[]" value="" /></li>
  	 			<li><input type="number" name="current_rate[]" value="" /></li>
  	 			
  	 			</ul>
  	 		</div>
  	 		
  	 		<div class="rounded small height">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">Current Premium</h3>
  	 			</div>
  	 			<ul>
  	 				<li><input type="number" name="current_premium[]" value="" /></li>
  	 				<li><input type="number" name="current_premium[]" value="" /></li> 
  	 				<li><input type="number" name="current_premium[]" value="" /></li> 
  	 				<li><input type="number" name="current_premium[]" value="" /></li>
  	 				<li><input type="number" name="current_premium[]" value="" /></li>
  	 			</ul>
  	 		</div>
  	 		
  	 		<div class="rounded small height">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">GMS Rate</h3>
  	 			</div>
  	 			<ul>
  	 				<li><input type="number" name="gms_rate[]" value="" /></li>
  	 				<li><input type="number" name="gms_rate[]" value="" /></li>
  	 				<li><input type="number" name="gms_rate[]" value="" /></li> 
  	 				<li><input type="number" name="gms_rate[]" value="" /> </li>
  	 				<li><input type="number" name="gms_rate[]" value="" /></li>
  	 			</ul>
  	 		</div>
  	 		
  	 		<div class="rounded small height">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">GMS Premium</h3>
  	 			</div>
  	 			<ul>
  	 			<li><input type="number" name="gms_premium[]" value="" /></li>
  	 			<li><input type="number" name="gms_premium[]" value="" /></li> 
  	 			<li><input type="number" name="gms_premium[]" value="" /></li> 
  	 			<li><input type="number" name="gms_premium[]" value="" /></li> 
  	 			<li><input type="number" name="gms_premium[]" value="" /></li>
  	 			</ul>
  	 		</div>
  	 		
  	 		<div class="rounded small height">
  	 			<div class="rounded orange">
  	 				<h3 class="white_header">Savings</h3>
  	 			</div>
  	 			<ul>
  	 			<li>----</li>
  	 			<li>----</li> 
  	 			<li>----</li>
  	 			<li>----</li> 
  	 			<li>----</li>
  	 			<li>----</li>
  	 			</ul>
  	 		</div>
  	 		
  	 		
  	 	</article>
  	 	<article style="clear:both;padding: 10px 20px 0 0;" >
  	 	<div class="rounded small" style="float:right">
  	 	
  	 	 			<ul>
  	 	 				<li><input type="number" name="tpa_fee" value="" /></li>
  	 	 				<li><input type="number" name="unemployment_savings" value="" /></li>
  	 	 				<li><input type="number" name="drug_free_program" value="" /></li>
  	 	 				<li><input type="number" name="drug_free_training" value="" /></li>
  	 	 			</ul>
  	 	 		</div>
  	 	
  	 		<ul class="small_ul">
  	 			<li>TPA and/or Association Fee</li>
  	 			<li>Average Annual Unemployment Savings</li>
  	 			<li>Drug Free Safety Program</li>
  	 			<li>*** drug Free Safety Program Training</li>
  	 		</ul>
  	 		  		
  	 	</article>
  	 	<article style="clear:both;padding: 10px 20px 0 0;">
  	 	<div class="rounded" style="float:right">
  	 		<div class="rounded green">
  	 			<h3 class="white_header">Risk Management Savings</h3>
  	 		</div>
  	 		----
  	 	</div>
  	 	<div class="spacer" style="float:right">
  	 		<div class="equal" >=</div>
  	 	</div>
  	 	</article>
  	 </section>
  	 
  	 <!-- service_overview -->
  	 
  	 <section class="sub_section payroll" > 
  	 <h4 class="gray_tab">GMS Menu oF ServiceS - overview</h4>
  	 	<h2 class="gray_header">Human Resources Services</h2>
  	 	<article class="col1">
  	 	<ul>
  	 	  	<li>Human Resources Audit / HR Evaluations</li>
  	 	  	<li>New Hire Process / Performance Appraisals</li>
  	 	  	<li>Compliance Advice & Assistance including COBRA, ERISA, HIPAA, ADA, FMLA, FLSA, EEOC, DOL</li>
  	 	  	<li>Employee Communication/ Publications</li>
  	 	  	<li>Disciplinary Procedures</li>
  	 	  	<li>Recruitment Assistance (advertisement fee paid by employer)</li>
  	 	  	<li>Vacation & Leave Policies</li>
  	 	</ul>
  	 	</article>
  	 	<article class="col2">
  	 	<ul>
  	 		<li>Background Checks ($20+ depending on extent of search)</li>
  	 		<li>Termination Advice & Assistance</li>
  	 		<li>Exit Interviews</li>
  	 		<li>Training Courses - Discipline
  	 		<p>
  	 		- Sexual Harassment<br>
  	 		- Team Building<br>
  	 		- Violence in the Workplace - Hiring<br>
  	 		- Orientation
  	 		</p>
  	 		</li>
  	 		<li>EmploymentPractice Liability Insurance Policy</li>
  	 		<li>EmployeeAssistanceProgram ($2 / month / employee)</li>
  	 	</ul>
  	 	</article>
  	 </section>
  	 
  	 <!-- Human Resources Services-->
  	 
  	 
  	 <section class="sub_section payroll" > 
  	 <h4 class="gray_tab">GMS Menu oF ServiceS - overview</h4>
  	 	<h2 class="gray_header">Human Resource Management Report</h2>
  	 	<h2 class="white_header">www.salary.com</h2>
  	 	<p>
  	 	The median expected salary for a typical Human Resource Manager in Ohio
  	 	is $66,499. This basic market pricing report was prepared using our Certified Compensation Professionals’ analysis of survey data collected from thousands of HR professionals at employers of 100 employees from various industries.
  	 	</p>
  	 	<h2 class="white_header">www.salaryexpert.com</h2>
  	 	<p>
  	 	The Human Resource Manager working in Ohio now earns an average annual salary of $66,933. These numbers are derived from survey data from thousands of HR Professional at employers of 100 employees+ from various industries. When benefits are included, the average total compensation package would be $77,958.
  	 	</p>
  	 	<h2 class="white_header">www.wsj.com</h2>
  	 	<p>
  	 	
  	 	The Human Resource Manager working in Ohio – Statewide now earns an average annual salary of $66,000. These numbers are derived from area pecific government survey data at 100+ companies. Companies that employee less than 100 employees and do not have a fulltime HR professional on staff should invest (HR median salary / 100) X # of employees.
  	 	</p>
  	  </section>
  	  
  	  
  	  
  	  <section class="sub_section payroll" > 
  	  <h4 class="gray_tab">GMS Menu oF ServiceS - overview</h4>
  	  	<h2  class="gray_header">HUMAN RESOURCES</h2>
  	  	<article style="margin:50px 0 0 0">
  	  		<div class="rounded">
  	  			<div class="rounded orange">
  	  				<h3 class="white_header">Average Salary per 100 employees</h3>
  	  			</div>
  	  			<input type="number" name="average_sallary_per_100" value="" />
  	  		</div>
  	  		<div class="spacer">
  	  			<div class="plus">+</div>
  	  		</div>
  	  		<div class="rounded">
  	  			<div class="rounded orange">
  	  				<h3 class="white_header">Cost Per Employee</h3>
  	  			</div>
  	  			<input type="number" name="cost_per_employee" value="" />
  	  		</div>
  	  		<div class="spacer">
  	  			<div class="plus">+</div>
  	  		</div>
  	  		<div class="rounded">
  	  			<div class="rounded orange">
  	  				<h3 class="white_header">Number of Employees</h3>
  	  			</div>
  	  			<input type="number" name="number_of_employees" value="" />
  	  		</div>
  	  		<div class="spacer">
  	  			<div class="equal">=</div>
  	  		</div>
  	  		<div class="rounded">
  	  			<div class="rounded green">
  	  				<h3 class="white_header">HR Value</h3>
  	  			</div>
  	  			----
  	  		</div>
  	  		
  	  	</article>
  	  </section>
  	  
  	  <!-- service_overview -->
  	  
  	  
  	  <section class="sub_section payroll" > 
  	  <h4 class="gray_tab">GMS Menu oF ServiceS - overview</h4>
  	  	<h2  class="gray_header">FINANCIAL ANALYSIS</h2>
  	  	<article style="margin:50px 0 0 0;overflow: hidden;">
  	  		<div class="rounded med">
  	  			<div class="rounded green">
  	  				<h3 class="white_header">HR Value</h3>
  	  			</div>
  	  			----
  	  		</div>
  	  		<div class="spacer">
  	  			<div class="plus">+</div>
  	  		</div>
  	  		<div class="rounded med">
  	  			<div class="rounded green ">
  	  				<h3 class="white_header">Payroll Savings</h3>
  	  			</div>
  	  			----
  	  		</div>
  	  		<div class="spacer">
  	  			<div class="plus">+</div>
  	  		</div>
  	  		<div class="rounded med">
  	  			<div class="rounded green ">
  	  				<h3 class="white_header">Benefits Savings</h3>
  	  			</div>
  	  			----
  	  		</div>
  	  		<div class="spacer">
  	  			<div class="plus">+</div>
  	  		</div>
  	  		<div class="rounded med">
  	  			<div class="rounded green">
  	  				<h3 class="white_header">Risk Management Savings</h3>
  	  			</div>
  	  			----
  	  		</div>
  	  		<div class="spacer">
  	  			<div class="equal">=</div>
  	  		</div>
  	  		<div class="rounded med">
  	  			<div class="rounded green">
  	  				<h3 class="white_header">Total Savings</h3>
  	  			</div>
  	  			----
  	  		</div>
  	  		
  	  	</article>
  	  	
  	  	<article style="margin:10px 31px 0 0;clear: both;">
  	  		<div class="rounded med" style="float:right">
  	  			<div class="rounded green">
  	  				<h3 class="white_header">GMS Admin Fees</h3>
  	  			</div>
  	  			----
  	  		</div>
  	  		<div class="spacer" style="float:right">
  	  			<div class="plus">-</div>
  	  		</div>
  	  		   		
  	  	</article>
  	  	
  	  	
  	  	<article style="margin:10px 31px 0 0;clear: both;">
  	  	<div style="float:left; width: 500px;">
  	  		<h3 class="white_header" style="margin:0 0 10px 0">Group Management Service Fees</h3>
  	  		<div class="rounded small" style="height:150px">
  	  			<div class="rounded green">
  	  				<h3 class="white_header">One-Time Set-Up Fee</h3>
  	  			</div>
  	  			<input type="number" name="set_up_fee" value="" />
  	  		</div>
  	  		<div class="rounded small" style="height:150px">
  	  			<div class="rounded green ">
  	  				<h3 class="white_header">Admin Fee</h3>
  	  			</div>
  	  			<input type="number" name="admin_fee" value="" />
  	  		</div>
  	  		<div class="spacer">
  	  			<div class="equal">x</div>
  	  		</div>
  	  		<div class="rounded small" style="height:150px">
  	  			<div class="rounded green ">
  	  				<h3 class="white_header">Gross Wages</h3>
  	  			</div>
  	  			<input type="number" name="gross_wages" value="" />
  	  		</div>
  	  		
  	  	</div>
  	  		<div class="rounded med" style="float:right; margin: 15px 0 0 0;">
  	  			<div class="rounded orange">
  	  				<h3 class="white_header">Total Proposed Savings</h3>
  	  			</div>
  	  			----
  	  		</div>
  	  		<div class="spacer" style="float:right">
  	  			<div class="plus">=</div>
  	  		</div>
  	  		   		
  	  	</article>
  	  	
  	  </section>
  	  
  	  <!-- service_overview -->
  	  <section>
  	  <input type="submit" class="submit" name="" value="Submit" />
  	  </section>
  	  </form>
  	  
  </div>
</div>
  
  
</body>
</html>
  