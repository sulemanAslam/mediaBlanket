<?php

  $url = "https://leads.supadata.co.uk/submit-lead";
  
  $ch = curl_init();

  $data = array(
    'aff_id' => 161,
    'aff_password' => 'XfXaQWmUWjhhBZKWv0gwHTa',
    'sub_id' => '1471',
    'referring_website' => 'www.test-website.com',
    'loan_amount' => 200,
    'load_purpose' => 'car_purchase',
    'loan_term' => 12,
    'guarantor' => 'yes',
    'title' => 'mr',
    'first_name' => 'TestSuleman',
    'last_name' => 'TestSuleman',
    'gender' => 'male',
    'date_of_birth' => '09-12-1990',
    'marital_status' => 'single',
    'number_of_dependents' => 0,
    'house_number' => 22,
    'house_name' => 'Clifford',
    'flat_number' => '20',
    'street_name' => 'Avenue',
    'city' => 'bolton',
    'county' => 'lancashire',
    'post_code' => 'm5 6tf',
    'residental_status' => 'other',
    'address_move_in_date' => '20-01-2015',
    'mobile_number' => '07000000001',
    'home_number' => 01611234567,
    'work_number' => 01617654321,
    'mobile_phone_type' => 'contract',
    'email_address' => 'test@mediablanket.co.uk',
    'employment_status' => 'full_time',
    'payment_frequency' => 'last_friday',
    'payment_method' => 'uk_direct_deposit',
    'monthly_income' => 2000,
    'next_pay_date' => '31-03-2023',
    'following_pay_date' => '28-04-2023',
    'job_title' => 'developer',
    'employer_name' => 'mediablanket',
    'employer_industry' => 'professional',
    'employment_start_date' => '12-01-2015',
    'expenditure_housing' => 600.90,
    'expenditure_credit' => 100.20,
    'expenditure_transport' => 70.40,
    'expenditure_food' => 120.50,
    'expenditure_utilities' => 200.30,
    'expenditure_other' => 20.55,
    'bank_name' => 'coop',
    'bank_account_number' => '11223344',
    'bank_sort_code' => '11-22-33',
    'bank_card_type' => 'visa_debit',
    'consent_email_sms' => true,
    'consent_email' => true,
    'consent_sms' => true,
    'consent_call' => true,
    'consent_credit_search' => true,
    'consent_financial' => true,
    'user_agent' => 'example',
    'ip_address' => '192.168.9.1'
    );
  $new_data = json_encode($data, true);

  $array_options = array(
 
    CURLOPT_URL=>$url,
      
    CURLOPT_POST=>true,

    CURLOPT_POSTFIELDS=>$new_data,

    CURLOPT_RETURNTRANSFER=>true,
      
    CURLOPT_HTTPHEADER=>array('Content-Type:application/json')
  );
  
  curl_setopt_array($ch,$array_options);
  
  $resp = curl_exec($ch);
  
    $final_decoded_data = json_decode($resp, true);
    foreach($final_decoded_data as $key => $val){
      echo $key . ': ' . $val . '<br>';
    }
  
  curl_close($ch);