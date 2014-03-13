<?php
//include ('c_load.php');
class C_Pdf extends MY_Controller {
	var $rows, $combined_form, $message;

	public function __construct() {
		parent::__construct();
		//print var_dump($this->tValue); exit;
		$this -> rows = '';
		$this -> combined_form;

	}

	public function index() {
	}

	public function test_mnh() {
		$pdf = '<table>

	<th>FACILITY INFORMATION</th>

	<tbody>
		<tr>
			<td>Facility Name </td>
			<td>
			<input type="text" />
			</td>
			<td>Facility Level </td>
			<td><!--input type="text" id="facilityLevel" name="facilityLevel" class="cloned"  size="40"/-->
			<input type="text" />
			</td>
			<td>County </td>
			<td>
			<input type="text" />
		</tr>
		<tr>
			<td>Facility Type </td>
			<td>
			<input type="text" />
			</td>
			<td>Owned By </td>
			<td>
			<input type="text" />
			</td>

			<td>District/Sub County </td>
			<td>
			<input type="text" />
			</td>
		</tr>
	</tbody>
</table>';
		return $pdf;
	}

	public function get_mnh_form() {
		$this -> combined_form .= '<link href="' . base_url() . 'assets/css/style.css" ref ="stylesheet">
<link href="' . base_url() . 'assets/css/style.css" ref ="stylesheet">
<form class="bbq" name="mnh_tool" id="mnh_tool" method="POST">

	<p id="data" class="feedback"></p>
	<!--h3 align="center">COMMODITY, SUPPLIES AND EQUIPMENT ASSESSMENT</h3-->
	<p style="color:#488214;font-size:20px;font-style:bold">
		You are currently taking ' . (((strtoupper($this -> session -> userdata('survey'))) == 'CH') ? 'Child Health' : 'Maternal and Newborn Health') . ' Survey.
	</p>
	<div id="section-1" class="step">
		<input type="hidden" name="step_name" value="section-1"/>
		<p style="display:true" class="message success">
			SECTION 1 of 7: FACILITY INFORMATION
		</p>
		<table border="2">

			<thead>
				<th colspan="9">FACILITY INFORMATION</th>
			</thead>
			<tbody>
				<tr>
					<td>Facility Name </td><td>
					<input type="text" size="40">
					</td><td>Facility Level </td><td><!--input type="text" id="facilityLevel" name="facilityLevel" class="cloned"  size="40"/-->
					<input type="text" size="40" >
					</td><td>County </td>
					<td>
					<input type="text" size="40" >
					</td>
				</tr>
				<tr>
					<td>Facility Type </td>
					<td>
					<input type="text" size="40" >
					</td>
					<td>Owned By </td>
					<td>
					<input type="text" size="40" >
					</td>

					<td>District/Sub County </td>
					<td>
					<input type="text" size="40" >
					</td>
				</tr>
			</tbody>
		</table>
		<table>
			<thead>
				<th colspan="3" >FACILITY CONTACT INFORMATION</th>
			</thead>
			<tbody>
				<tr >
					<th scope="col" colspan="2" >CADRE</th>
					<th>NAME</th>
					<th >MOBILE</th>
					<th >EMAIL</th>
				</tr>
				<tr>
					<td  colspan="2">Incharge </td><td>
					<input type="text" id="facilityInchargename" name="facilityInchargename" class="cloned" size="40"/>
					</td><td>
					<input type="text" id="facilityInchargemobile" name="facilityInchargemobile" class="phone" size="40"/>
					</td>
					<td>
					<input type="text" id="facilityInchargeemail" name="facilityInchargeemail" class="cloned mail" size="40"/>
					</td>
				</tr>
				<tr>
					<td  colspan="2">MCH </td><td>
					<input type="text" id="facilityMchname" name="facilityMchname" class="cloned" size="40"/>
					</td><td>
					<input type="text" id="facilityMchmobile" name="facilityMchmobile" class="phone" size="40"/>
					</td>
					<td>
					<input type="text" id="facilityMchemail" name="facilityMchemail" class="cloned mail" size="40"/>
					</td>
				</tr>
				<tr>
					<td  colspan="2">Maternity </td><td>
					<input type="text" id="facilityMaternityname" name="facilityMaternityname" class="cloned" size="40"/>
					</td>
					<td>
					<input type="text" id="facilityMaternitymobile" name="facilityMaternitymobile" class="phone" size="40"/>
					</td>
					<td>
					<input type="text" id="facilityMaternityemail" name="facilityMaternityemail" class="cloned mail" size="40"/>
					</td>
				</tr>
			</tbody>
		</table>
		</br></br>
		<table>
		<tr>
			<td>
				<th> DOES THIS FACILITY CONDUCT DELIVERIES?</th>
			</td>
			
				
					<td> Yes
					<input type="checkbox">
					No
					<input type="checkbox">
					</td>
				</tr>
			
		</table>
	
			<table >

				<thead>
				<tr>
					<th colspan ="12">IF NO, WHAT ARE THE MAIN REASONS FOR NOT CONDUCTING DELIVERIES? </br>(multiple selections allowed)</th>
			</tr>
				<tr>
					<th colspan ="2">Inadequate skill</th>
					<th colspan ="2">Inadequate staff</th>
					<th colspan ="2"> Inadequate infrastructure </th>
					<th colspan="2">Inadequate Equipment</th>
					<th colspan ="2"> Inadequate commodities and supplies</th>
					<th colspan ="2"> Other (Please specify)</th>
				</tr>
	</thead>
				<tr>
					<td style ="text-align:center;" colspan ="2">
					<input type="checkbox" name="facRsnNoDeliveries[]" id="rsnDeliveriesSkill" value="1" class="cloned" />
					</td>
					<td style ="text-align:center;" colspan ="2">
					<input type="checkbox" name="facRsnNoDeliveries[]" id="rsnDeliveriesInfra" value="6" />
					</td>
					<td style ="text-align:center;" colspan ="2">
					<input type="checkbox" name="facRsnNoDeliveries[]" id="rsnDeliveriesInfra" value="2" />
					</td>
					<td style ="text-align:center;" colspan ="2">
					<input type="checkbox" name="facRsnNoDeliveries[]" id="rsnDeliveriesCommo" value="3" />
					</td>
					<td style ="text-align:center;" colspan ="2">
					<input type="checkbox" name="facRsnNoDeliveries[]" id="rsnDeliveriesequiip" value="5" />
					</td>
					<td style ="text-align:center;" colspan ="2">
					<input type="checkbox" name="facRsnNoDeliveries[]" id="rsnDeliveriesOther" value="4" />
					<input type="text" name="facRsnNoDeliveries[]" id="rsnDeliveriesOther" value="" />
					</td>

				</tr>
			</table>
			<table>
			<thead>
				
					<th colspan="2" >PROVISION OF Nurses</th>
			
				<tr>
					<th >QUESTION</th>
					<th>RESPONSE</th>

				</tr>
			</thead>
			' . $this -> nurses . '
		</table>
	
	</div><!--\.the section-1 -->

	<div id="Yes" class="step">
		<input type="hidden" name="step_name" value="section-2"/>
		<p style="display:true" class="message success">
			SECTION 2 of 7: DELIVERIES CONDUCTED DATA, PROVISION OF BEmONC FUNCTIONS
		</p>
		<table>

			<thead>
				<tr>
					<th colspan="13" >INDICATE THE NUMBER OF DELIVERIES CONDUCTED IN THE FOLLOWING PERIODS </th>
				</tr>
				<tr>
					<th> MONTH</th><th> JANUARY</th><th>FEbrUARY</th><th>MARCH</th><th> APRIL</th><th> MAY</th><th>JUNE</th><th> JULY</th><th> AUGUST</th>
					<th> SEPTEMBER</th><th> OCTOBER</th><th> NOVEMBER</th><th> DECEMBER</th>
				</tr>
			</thead>
			<tr>
				<td>2013</td>
				<td style ="text-align:center;">
				<input type="text" id="dnjanuary_13" size="8" name="dnjanuary_13" class="cloned numbers"/>
				</td>

				<td style ="text-align:center;">
				<input type="text" id="dnfebruary_13" name="dnfebruary_13" size="8"class="cloned numbers"/>
				</td>
				<td style ="text-align:center;">
				<input type="text" id="dnmarch_13" name="dnmarch_13" size="8"class="cloned numbers"/>
				</td>
				<td style ="text-align:center;">
				<input type="text" id="dnapril_13" name="dnapril_13" size="8"class="cloned numbers"/>
				</td>
				<td style ="text-align:center;">
				<input type="text" id="dnmay_13" name="dnmay_13" size="8"class="cloned numbers" />
				</td>
				<td style ="text-align:center;">
				<input type="text" id="dnjune_13" name="dnjune_13" size="8"class="cloned numbers" />
				</td>
				<td style ="text-align:center;">
				<input type="text" id="dnjuly_13" size="8" name="dnjuly_13" class="cloned numbers" >
				</td>
				<td style ="text-align:center;">
				<input type="text" id="dnaugust_13" size="8" name="dnaugust_13" class="cloned numbers" >
				</td>
				<td  style ="text-align:center;">
				<input type="text" id="dnseptember_13" size="8" name="dnseptember_13" class="cloned numbers" >
				</td>
				<td style ="text-align:center;">
				<input type="text" id="dnoctober_13" size="8" name="dnoctober_13" class="cloned numbers" >
				</td>
				<td style ="text-align:center;" width="15">
				<input type="text" id="dnnovember_13" size="8" name="dnnovember_13" class="cloned numbers">
				</td>

				<td style ="text-align:center;">
				<input type="text" id="dndecember_13" size="8" name="dndecember_13" class="cloned numbers" >
				</td>
			</tr>
		</table>

		<table>
			<thead>
				<tr>
					<th colspan="14" >PROVISION OF BEmONC SIGNAL FUNCTIONS  IN THE LAST THREE MONTHS </th>
				</tr>
				<tr>

					<th  colspan="7">SIGNAL FUNCTION</th>
					<th   colspan="2"> WAS IT CONDUCTED? </th>
					<th  colspan="5">INDICATE MAJOR CHALLENGE</th>

				</tr>
			</thead>
			' . $this -> signalFunctionsSectionPDF . '
		</table>
		<table class="centre">
		<thead>
			<th colspan="12" >PROVISION OF CEmONC SERVICES IN THE LAST THREE MONTHS</th>
				<tr>		
					<th colspan="7">QUESTION</th>
					<th colspan="5">RESPONSE</th>	
		</tr>
		</thead>' . $this -> mnhCEOCAspectsSectionPDF . '
	</table>
		<table >
			<thead>
				<tr>
					<th colspan="12" >PROVISION OF HIV Testing and Counselling</th>
				</tr>
				<tr>
					<th style="width:35%">QUESTION</th>
					<th style="width:65%;text-align:left">RESPONSE</th>

				</tr>
			</thead>
			' . $this -> mnhHIVTestingAspectsSectionPDF . '
		</table>
		
		<table >
			<thead>
			<tr>
			<th>
		<h4>Criteria for Preparedness</h4>
		 <ol>
		 	<li>Adult Resuscitation Kit. Complete, working and clean</li>
		 	<li>Newborn Resuscitation Kit. Complete, working and clean</li>
		 	<li>Receiving Place</li>
		 	<li>Adequate Light</li>
		 	<li>No draft(cold air)</li>
		 	<li>Clean (delivery beds and all surfaces)</li>
		 	<li>Waste Disposal System</li>
		 	<li>Sterilization color-coded</li>
		 	<li>Sharp Container</li>
		 	<li>Privacy</li>		
		 </ol>
		</th>
		</tr>
				<tr>
					<th colspan="12" >Preparedness for Delivery</th>
				</tr>
				<tr>
					<th style="width:35%">QUESTION</th>
					<th style="width:65%;text-align:left">RESPONSE</th>

				</tr>
			</thead>
			' . $this -> mnhPreparednessAspectsSectionPDF . '
		</table>
		<table >
			<thead>
				<tr>
					<th colspan="12" >GUIDELINES AVAILABILITY</th>
				</tr>
				<tr>
					<th style="width:35%">ASPECTS</th>
					<th style="width:35%;text-align:left">RESPONSE</th>
					<th style="width:30%;text-align:left">QUANTITY</th>

				</tr>
			</thead>
			' . $this -> mnhGuidelinesAspectsSectionPDF . '
		</table>
		
				<table >
			<thead>
				<tr>
					<th colspan="12" >JOB AIDS</th>
				</tr>
				<tr>
					<th style="width:35%">ASPECTS</th>
					<th style="width:35%;text-align:left">RESPONSE</th>
					<th style="width:30%;text-align:left">QUANTITY</th>

				</tr>
			</thead>
			' . $this -> mnhJobAidsAspectsSectionPDF . '
		</table>
		<table class="centre">
			<thead><tr>
				<th colspan="2" >COMMUNITY STRATEGY </th>
					</tr><tr>
				<th  colspan="1" >ASPECT</th>
				<th   colspan="1" > RESPONSE </th>	
			</tr>		
			</thead>
			' . $this -> mnhCommunityStrategySectionPDF . '
	</table>
		
	</div><!--\.section 2-->

<div id="section-3" class="step">
		<p style="display:true" class="message success">
			SECTION 3 of 7: COMMODITY AVAILABILITY
		</p>
		<table   class="centre persist-area" >
			<thead>
				<tr class="persist-header">
					<th colspan="13">INDICATE THE AVAILABILITY, LOCATION, SUPPLIER AND QUANTITIES ON HAND OF THE FOLLOWING COMMODITIES.INCLUDE REASON FOR UNAVAILABILITY. </th>
				</tr>

				<tr>
					<th rowspan="2" >Commodity Name</th>
					<th rowspan="2" >Commodity Unit</th>
					<th colspan="3" style="text-align:center"> Availability <strong></br> (One Selection Allowed) </strong></th>
					<th colspan="5" style="text-align:center"> Location of Availability </br><strong> (Multiple Selections Allowed)</strong></th>
					<th rowspan="2" >Available Quantities</th>
					<th rowspan="2" > Main Supplier </th>
					<th rowspan="2"> Main Reason For  Unavailability </th>

				</tr>
				<tr>
					<th >Available</th>
					<th>Sometimes Available</th>
					<th>Never Available</th>
					<th>Delivery room</th>
					<th>Pharmacy</th>
					<th>Store</th>
					<th>Other</th>
					<th>Not Applicable</th>
					

				</tr>
			</thead>
			' . $this -> commodityAvailabilitySectionPDF . '

		</table>
	</div><!--\.section-3-->

	<div id="section-4" class="step">
		<input type="hidden" name="step_name" value="section-4"/>
		<p style="display:true" class="message success">
			SECTION 4 of 7: STAFF TRAINING
		</p>
		<table  >
			<thead>
				<tr>
					<th colspan="4"  >IN THE LAST 2 YEARS, HOW MANY STAFF MEMBERS HAVE BEEN TRAINED IN THE FOLLOWING?</th>
				</tr>
				<tr>
					<th colspan ="2" style="text-align:left"> TRAININGS</th><th style="text-align:left">Number Trained in the Last 2 Years</th>
					<th colspan ="2" style="text-align:left">
					<div style="width: 500px" >
						How Many Of The Staff Members
						Trained in the Last 2 Years are still Working in the Marternity Unit?
					</div></th>
				</tr>

			</thead>
			' . $this -> trainingGuidelineSection . '

		</table>
	</div><!--\.section-4-->

	<div id="section-5" class="step">
		<input type="hidden" name="step_name" value="section-5"/>
		<p style="display:true" class="message success">
			SECTION 5 of 7: COMMODITY USAGE
		</p>
		<table >
			<thead>
				<tr>
					<th colspan="11"> IN THE LAST 3 MONTHS INDICATE THE USAGE, NUMBER OF TIMES THE COMMODITY WAS NOT AVAILABLE.</br>
					WHEN THE COMMODITY WAS NOT AVAILABLE WHAT HAPPENED? </th>
				</tr>
				<tr >
					<th colspan="2" rowspan="2">
					<div style="width: 100px" >
						Commodity Name
					</div></th>
					<th rowspan="2"  >					
						Unit Size
					</th>
					<th>					
						Usage
					</th>
					<th  colspan="2">
						Number Of Times the commodity was unavailable
					</th>
					<th  colspan="5">
						When the commodity was not available what happened?
						</br>
						<strong>(Multiple Selections Allowed)</strong>
					</th>

				</tr>

				<tr >
					
					<th colspan="1">Total Units Used</th>
					<th colspan="2">Times Unavailable </th>

					<th colspan="1">
					<div style="width: 100px" >
						Patient purchased the commodity privately
					</div></th>
					<th colspan="1">
					<div style="width: 100px" >
						Facility purchased the commodity privately
					</div></th>
					<th colspan="1">
					<div style="width: 100px" >
						Facility received the commodity from another facility
					</div></th>
					<th colspan="1">
					<div style="width: 100px" >
						The procedure was not conducted
					</div></th>
					<th colspan="1">
					<div style="width: 100px" >
						The procedure was conducted without the commodity
					</div></th>

				</tr>
			</thead>
			' . $this -> commodityUsageAndOutageSectionPDF . '
		</table>
	</div><!--\.section-5-->
	<div id="section-6" class="step">
		<input type="hidden" name="step_name" value="section-6"/>
		<p style="display:true" class="message success">
			SECTION 6 of 7: I. EQUIPMENT AVAILABILITY AND FUNCTIONALITY
		</p>

		<table>
			<thead>
				<th colspan="10">INDICATE THE AVAILABILITY, LOCATION  AND FUNCTIONALITY OF THE FOLLOWING EQUIPMENT.</th>
			

			<tr>
				<th  rowspan="2">Equipment Name</th>

				<th colspan="3" style="text-align:center">Availability <strong></br> (One Selection Allowed) </strong></th>
				<th colspan="4" style="text-align:center"> Location of Availability </br><strong> (Multiple Selections Allowed)</strong></th>
				<th colspan="2">Available Quantities</th>
			</tr>
			<tr >
		

				<th >Available</th>
				<th>Sometimes Available</th>
				<th>Never Available</th>
				<th>Delivery room</th>
				<th>Pharmacy</th>
				<th>Store</th>
				<th>Other</th>
				<th>Fully-Functional</th>
				<th>Non-Functional</th>
			</tr>
			</thead>
			' . $this -> equipmentsSection . '
			</table>
			<table>
			<thead>
			<tr>
				<th scope="2" rowspan="2">Delivery Equipment Name</th>

				<th colspan="3" style="text-align:center">Availability <strong></br> (One Selection Allowed) </strong></th>
				<th colspan="4" style="text-align:center"> Location of Availability </br><strong> (Multiple Selections Allowed)</strong></th>
				<th colspan="2">Available Quantities</th>
			</tr>
			<tr >
				<th >Available</th>
				<th>Sometimes Available</th>
				<th>Never Available</th>
				<th>Delivery room</th>
				<th>Pharmacy</th>
				<th>Store</th>
				<th>Other</th>
				<th>Fully-Functional</th>
				<!--td>Partially Functional</td-->
				<th>Non-Functional</th>
			</tr>
			</thead>
			' . $this -> deliveryEquipmentSection . '

		</table>

		<p style="display:true" class="message success">
			SECTION 6 of 7: II. AVAILABILITY OF WATER
		</p>

		<table>
			<thead>
				<th colspan="11">INDICATE THE AVAILABILITY, LOCATION AND MAIN SOURCE OF THE FOLLOWING.</th>
			
			<tr>
				<th  rowspan="2">Resource Name</th>

				<th colspan="3" style="text-align:center"> Availability <strong></br> (One Selection Allowed) </strong></th>
				<th colspan="5" style="text-align:center"> Location of Availability </br><strong> (Multiple Selections Allowed)</strong></th>
				<th rowspan="2" > Main Source </th>
				

			</tr>
			<tr >
				<th >Available</th>
				<th>Sometimes Available</th>
				<th>Never Available</th>
				<th>OPD</th>
				<th>MCH</th>
				<th>U5 Clinic</th>
				<th>Maternity</th>
				<th>Other</th>
			</tr>
			</thead>
			' . $this -> suppliesMNHOtherSectionPDF . '
		</table>

		<table >
			<thead>
			<th colspan="12" >INDICATE THE STORAGE AND ACCESS TO WATER BY THE COMMUNITY </th>
				<tr>
			<th  colspan="7">ASPECT</th>
			<th   colspan="5"> RESPONSE </th>			
			<th   colspan="2"> SPECIFY </th>	

		</tr>
		</thead>' . $this -> mnhWaterAspectsSectionPDF . '
		</table>
 <p style="display:true" class="message success">SECTION 6 of 7: III. ELECTRICTY AND HARDWARE RESOURCES</p>
		 <table  class="centre" >
		<thead><tr>
			<th colspan="6">INDICATE THE AVAILABILITY, LOCATION AND SUPPLIER OF THE FOLLOWING.</th></tr>
		
		<tr>
			<th rowspan="2">Resource Name</th>
			
			<th colspan="3" style="text-align:center"> Availability  
			 <strong></BR>
			(One Selection Allowed) </strong></th>
			<th rowspan="2">
			
				Main Supplier
			</th>
			<th rowspan="2">			
				Main Source	
			</th>
		</tr>
		<tr >
			<th >Available</th>
			<th>Sometimes Available</th>
			<th>Never Available</th>		
		</tr>
		</thead>' . $this -> hardwareMNHSectionPDF . '
		</table>
	</div><!--\.section-6-->

	<div id="section-7" class="step">
		<input type="hidden" name="step_name" value="section-7"/>
		<p style="margin-top:350px;display:true" class="message success">
			SECTION 7 of 7: SUPPLIES AVAILABILITY
		</p>

		<table>
			<thead>
				<tr>
					<th colspan="11">INDICATE THE AVAILABILITY, LOCATION, SUPPLIER AND QUANTITIES ON HAND OF THE FOLLOWING SUPPLIES.INCLUDE REASON FOR UNAVAILABILITY.</th>
				</tr>
				<tr>
					<th colspan="1" rowspan="2">Supplies Name</th>

					<th colspan="3" style="text-align:center"> Availability <strong></br> (One Selection Allowed) </strong></th>
					<th colspan="4" style="text-align:center"> Location of Availability </br><strong> (Multiple Selections Allowed)</strong></th>
					<th colspan="1" rowspan="2">Available Supplies</th>
					<th colspan="1" rowspan="2"> Main Supplier </th>
					<th colspan="1" rowspan="2">Main Reason For  Unavailability</th>

				</tr>

				<tr>		
					<th >Available</th>
					<th>Sometimes Available</th>
					<th>Never Available</th>
					<th>Delivery room</th>
					<th>Pharmacy</th>
					<th>Store</th>
					<th>Other</th>	
				</tr>
			</thead>
			' . $this -> suppliesSectionPDF . '
		</table>
		<table>
			<thead>
				<!--th colspan="11"> IN THE LAST 3 MONTHS INDICATE THE USAGE, NUMBER OF TIMES THE SUPPLY WAS NOT AVAILABLE.</br>
				WHEN THE SUPPLY WAS NOT AVAILABLE WHAT HAPPENED? </th-->
				<th colspan="11"> IN THE LAST 3 MONTHS INDICATE NUMBER OF TIMES THE SUPPLY WAS NOT AVAILABLE.</br>
				WHEN THE SUPPLY WAS NOT AVAILABLE WHAT HAPPENED? </th>

				<tr>
					<th scope="col"  colspan="2">
					<div style="width: 100px" >
						Supply Name
					</div></th>

					<!--th scope="col" colspan="2">
					<div style="width: 40px" >
					Usage
					</div></th-->

					<th scope="col" colspan="2">
					<div style="width: 100px" >
						Number Of Times the supply was unavailable
					</div></th>
					<th scope="col" colspan="5">
					<div style="width: 600px" >
						When the supply was not available what happened?
						</br>
						<strong>(Multiple Selections Allowed)</strong>
					</div></th>

				</tr>
				<tr >
					<th colspan="2">&nbsp;</th>
					<!--th colspan="2">Total Units Used</th -->
					<th colspan="2">Times Unavailable </th>

					<th colspan="1">
					<div style="width: 100px" >
						Patient purchased the supply privately
					</div></th>
					<th colspan="1">
					<div style="width: 100px" >
						Facility purchased the supply privately
					</div></th>
					<th colspan="1">
					<div style="width: 100px" >
						Facility received the supply from another facility
					</div></th>
					<th colspan="1">
					<div style="width: 100px" >
						The procedure was not conducted
					</div></th>
					<th colspan="1">
					<div style="width: 100px" >
						The procedure was conducted without the supply
					</div></th>

				</tr>
			</thead>
			' . $this -> suppliesUsageAndOutageSectionPDF . '
		</table>

	</div><!--\.section-7-->
</form>

';
		return $this -> combined_form;
	}

	public function get_mch_form() {
		$this -> combined_form .= '<form class="bbq" name="mch_tool" id="mch_tool" method="POST">
	<p id="data" class="feedback"></p>
	<!--h3 align="center">COMMODITY, SUPPLIES AND EQUIPMENT ASSESSMENT</h3-->
	<p style="color:#488214;font-size:20px;font-style:bold">
		You are currently taking ' . (((strtoupper($this -> session -> userdata('survey'))) == 'CH') ? 'Child Health' : 'Maternal and Newborn Health') . ' Survey.
	</p>
	<div id="section-1" class="step">
		<input type="hidden" name="step_name" value="section-1"/>
		<p style="display:true" class="message success">
			SECTION 1 of 7: FACILITY INFORMATION
		</p>
		<table border="2">

			<thead>
				<th colspan="9">FACILITY INFORMATION</th>
			</thead>
			<tbody>
				<tr>
					<td>Facility Name </td><td>
					<input type="text" size="40">
					</td><td>Facility Level </td><td><!--input type="text" id="facilityLevel" name="facilityLevel" class="cloned"  size="40"/-->
					<input type="text" size="40" >
					</td><td>County </td>
					<td>
					<input type="text" size="40" >
					</td>
				</tr>
				<tr>
					<td>Facility Type </td>
					<td>
					<input type="text" size="40" >
					</td>
					<td>Owned By </td>
					<td>
					<input type="text" size="40" >
					</td>

					<td>District/Sub County </td>
					<td>
					<input type="text" size="40" >
					</td>
				</tr>
			</tbody>
		</table>
		<table>
			<thead>
				<th colspan="3" >FACILITY CONTACT INFORMATION</th>
			</thead>
			<tbody>
				<tr >
					<th scope="col" colspan="2" >CADRE</th>

					<th>NAME</th>
					<th >MOBILE</th>
					<th >EMAIL</th>
				</tr>
				<tr>
					<td  colspan="2">Incharge </td><td>
					<input type="text" id="facilityInchargename" name="facilityInchargename" class="cloned" size="40"/>
					</td><td>
					<input type="text" id="facilityInchargemobile" name="facilityInchargemobile" class="phone" size="40"/>
					</td>
					<td>
					<input type="text" id="facilityInchargeemail" name="facilityInchargeemail" class="cloned mail" size="40"/>
					</td>
				</tr>
				<tr>
					<td  colspan="2">MCH </td><td>
					<input type="text" id="facilityMchname" name="facilityMchname" class="cloned" size="40"/>
					</td><td>
					<input type="text" id="facilityMchmobile" name="facilityMchmobile" class="phone" size="40"/>
					</td>
					<td>
					<input type="text" id="facilityMchemail" name="facilityMchemail" class="cloned mail" size="40"/>
					</td>
				</tr>
				<tr>
					<td  colspan="2">Maternity </td><td>
					<input type="text" id="facilityMaternityname" name="facilityMaternityname" class="cloned" size="40"/>
					</td>
					<td>
					<input type="text" id="facilityMaternitymobile" name="facilityMaternitymobile" class="phone" size="40"/>
					</td>
					<td>
					<input type="text" id="facilityMaternityemail" name="facilityMaternityemail" class="cloned mail" size="40"/>
					</td>
				</tr>
			</tbody>
		</table>

		<table class="centre">
			<thead>
				<th colspan="2" >COMMUNITY STRATEGY </th>
				<tr>
					<th  style="width:35%">ASPECT</th>
					<th   style="width:65%;text-align:left"> RESPONSE </th>
				</tr>
			</thead>
			' . $this -> mchCommunityStrategySection . '
		</table>

	</div><!--\.the section-1 -->
	<div id="section-2" class="step">
		<input type="hidden" name="step_name" value="section-2"/>
		<p style="display:true" class="message success">
			SECTION 2 of 7: GUIDELINES, STAFF TRAINING AND COMMODITY AVAILABILITY
		</p>

		<table class="centre">
			<thead>
				<th colspan="3" >GUIDELINES AVAILABILITY </th>
				<tr>
					<th  style="width:35%">ASPECT</th>
					<th   style="width:10.5%;text-align:left"> RESPONSE </th>
					<th   style="width:52.5%;text-align:left"> If <strong>Yes</strong>, Indicate Total Quantities Available </th>
				</tr>
			</thead>
			' . $this -> mchGuidelineAvailabilitySection . '
		</table>

		<table class="centre">
			<thead>
				<th colspan="4"  >IN THE LAST 2 YEARS, HOW MANY STAFF MEMBERS HAVE BEEN TRAINED IN THE FOLLOWING?</th>
				<tr>
					<th colspan ="2" style="text-align:left"> TRAININGS</th>
					<th style="text-align:left">Number Trained in the Last 2 Years</th>
					<th colspan ="2" style="text-align:left"> How Many Of The Staff Members
					Trained in the Last 2 Years are still Working in Child Health? </th>
				</tr>
			</thead>
			' . $this -> mchTrainingGuidelineSection . '

		</table>

		<table >
			<thead>
				<th colspan="15">INDICATE THE AVAILABILITY, LOCATION, SUPPLIER AND QUANTITIES ON HAND OF THE FOLLOWING COMMODITIES.INCLUDE REASON FOR UNAVAILABILITY. </th>
				<tr>
					<th rowspan="2">Commodity Name</th>
					<th rowspan="2">Commodity Unit</th>
					<th colspan="3" style="text-align:center"> Availability <strong></br> (One Selection Allowed) </strong></th>
					<th>Main Reason For  Unavailability	</th>
					<th colspan="6" style="text-align:center"> Location of Availability </br><strong> (Multiple Selections Allowed)</strong></th>
					<th colspan="2">Available Quantities</th>
					<th scope="col" rowspan="2"> Main Supplier </th>

				</tr>
				<tr >
					<th >Available</th>
					<th>Sometimes Available</th>
					<th>Never Available</th>
					<th> Unavailability</th>
					<th>OPD</th>
					<th>MCH</th>
					<th>U5 Clinic</th>
					<th>Ward</th>
					<th>Other</th>
					<th>Not Applicable</th>
					<th>No. of Units</th>
					<th>Expiry Date</th>

				</tr>
			</thead>
			' . $this -> mchCommodityAvailabilitySection . '

		</table>
	</div><!--\.section 2-->';
		return $this -> combined_form;

	}

	public function loadPDF($survey) {
		$stylesheet = ('
		input[type="text"]{
			width:600px;
		}
		input[type="number"]{
			width:400px;
		}
		table{
			width:1000px;
		}
		.break { page-break-before: always; }
		.success {
background: #cbc9c9;
color: #000;
border-color: #FFFFEE;
font: bold 100% sans-serif;}
		td{
			background:#d5eaf0;
		}
		th {
text-align: center;
background: #91c5d4;
}
		
		');

		switch($survey) {
			case 'mnh' :
				$html = $this -> get_mnh_form();
				break;
			case 'mch' :
				$html = $this -> get_mch_form();
				break;
		}
		//$html = $this -> get_mnh_form();
		//echo $html;die;
		$this -> load -> library('mpdf');
		$this -> mpdf = new mPDF('', 'A4-L', 0, '', 15, 15, 16, 16, 9, 9, '');
		$this -> mpdf -> SetTitle('MNH Assessment Tool');
		$this -> mpdf -> SetHTMLHeader('<em>MNH Assessment Tool</em>');
		$this -> mpdf -> SetHTMLFooter('<em>MNH Assessment Tool</em>');
		$this -> mpdf -> simpleTables = true;
		$this -> mpdf -> WriteHTML($stylesheet, 1);
		$this -> mpdf -> WriteHTML($html, 2);
		$report_name = 'MNH Assessment Tool' . ".pdf";
		$this -> mpdf -> Output($report_name, 'D');

	}

}