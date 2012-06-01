<?
class Presentations extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function view_all(){
    	$query = $this->db->get('entries');
    	return $query;
    }
    function insert_entry()
    {
    	
    
        $this->current_payroll_processing   = $_POST['current_payroll_processing']; // please read the below note
		$this->accountant_fees_eliminated   = $_POST['accountant_fees_eliminated'];
		$this->additional_items   = $_POST['additional_items'];
		$this->gms_healthcare_plan_1   = $_POST['gms_healthcare_plan_1'];
		$this->gms_healthcare_plan_2   = $_POST['gms_healthcare_plan_2'];
		$this->benefit_additional_items   = $_POST['benefit_additional_items'];
		$this->admin_fee_eliminated   = $_POST['admin_fee_eliminated'];
		$this->current_healthcare_ann_premium   = $_POST['current_healthcare_ann_premium'];
		$this->average_sallary_per_100   = $_POST['average_sallary_per_100'];
		$this->cost_per_employee   = $_POST['cost_per_employee'];
		$this->number_of_employees   = $_POST['number_of_employees'];


		//$this->hr_benefits_savings   = $_POST['hr_benefits_savings'];
		//$this->risk_management_savings   = $_POST['risk_management_savings'];
		//$this->gms_admin_fees   = $_POST['gms_admin_fees'];
		$this->set_up_fee   = $_POST['set_up_fee'];
		$this->admin_fee   = $_POST['admin_fee'];
		$this->gross_wages   = $_POST['gross_wages'];
		if($this->input->post('sales_rep')){
		   $this->sales_rep   = $_POST['sales_rep'];
		} 
		
		if($this->input->post('prepared_for')){
		   $this->prepared_for   = $_POST['prepared_for'];
		} 
		$this->man_class   = json_encode($_POST['man_class']);
		$this->description   = json_encode($_POST['description']);
		$this->payroll   = json_encode($_POST['payroll']);
		$this->current_rate   = json_encode($_POST['current_rate']);
		$this->current_premium   = json_encode($_POST['current_premium']);
		$this->gms_rate   = json_encode($_POST['gms_rate']);
		$this->gms_premium   = json_encode($_POST['gms_premium']);
		$this->tpa_fee   = $_POST['tpa_fee'];
		$this->unemployment_savings   = $_POST['unemployment_savings'];
		$this->drug_free_program   = $_POST['drug_free_program'];
		$this->drug_free_training   = $_POST['drug_free_training'];
        $this->db->insert('entries', $this);
    }


function edit($id)
{
	

    $this->current_payroll_processing   = $_POST['current_payroll_processing']; // please read the below note
	$this->accountant_fees_eliminated   = $_POST['accountant_fees_eliminated'];
	$this->additional_items   = $_POST['additional_items'];
	$this->gms_healthcare_plan_1   = $_POST['gms_healthcare_plan_1'];
	$this->gms_healthcare_plan_2   = $_POST['gms_healthcare_plan_2'];
	$this->current_healthcare_ann_premium   = $_POST['current_healthcare_ann_premium'];
	$this->average_sallary_per_100   = $_POST['average_sallary_per_100'];
	$this->cost_per_employee   = $_POST['cost_per_employee'];
	$this->number_of_employees   = $_POST['number_of_employees'];
	$this->benefit_additional_items   = $_POST['benefit_additional_items'];
	$this->admin_fee_eliminated   = $_POST['admin_fee_eliminated'];
	//$this->hr_value   = $_POST['hr_value'];
	//$this->hr_payroll_savings   = $_POST['hr_payroll_savings'];
	//$this->hr_benefits_savings   = $_POST['hr_benefits_savings'];
	//$this->risk_management_savings   = $_POST['risk_management_savings'];
	//$this->gms_admin_fees   = $_POST['gms_admin_fees'];
	$this->set_up_fee   = $_POST['set_up_fee'];
	$this->admin_fee   = $_POST['admin_fee'];
	$this->gross_wages   = $_POST['gross_wages'];
	if($this->input->post('sales_rep')){
	   $this->sales_rep   = $_POST['sales_rep'];
	} 
	
	if($this->input->post('prepared_for')){
	   $this->prepared_for   = $_POST['prepared_for'];
	} 
	$this->man_class   = json_encode($_POST['man_class']);
	$this->description   = json_encode($_POST['description']);
	$this->payroll   = json_encode($_POST['payroll']);
	$this->current_rate   = json_encode($_POST['current_rate']);
	$this->current_premium   = json_encode($_POST['current_premium']);
	$this->gms_rate   = json_encode($_POST['gms_rate']);
	$this->gms_premium   = json_encode($_POST['gms_premium']);
	$this->tpa_fee   = $_POST['tpa_fee'];
	$this->unemployment_savings   = $_POST['unemployment_savings'];
	$this->drug_free_program   = $_POST['drug_free_program'];
	$this->drug_free_training   = $_POST['drug_free_training'];
    $this->db->where('id', $id);
    $this->db->update('entries', $this); 
}

    function get_entry($id)
    {
    	$query = $this->db->get_where('entries', array('id' => $id), 1, 0);
    	return $query;
    }
    
    function delete($id)
    {
    	$this->db->delete('entries', array('id' => $id)); 
    }

}
?>