<?php
// TODO: People want tracking on keywords.
/**
 * Include twilio-php, the offical Twilio PHP Helper Library, which can be found at
 * http://www.twilio.com/docs/libraries
 */
include('Services/Twilio.php');
/* ## Controller ## */
function index(){
	$response = new Services_Twilio_Twiml();
	$response->sms("I'm sorry, that vitamin is currently not in our database or was misspelt. Please try again. Ex: vit B23");
	echo $response;
}

function vitA(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Carrots, sweet potatoes, dark leafy greens
Adults: Age 19+:
Males: 900 μg
Females: 700 μg
Infants/children: ( below 18)
boys years : 900 μg
girls years : 700 μg
');
	echo $response;
}
function vitD(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Fish, cheese, eggs
Adults:
Age 19–70: 15μg/600 IU
 Age 70+: 20μg/800 IU
Infants /children:
0-12 months: 10μg/400 IU*
1–18 years: 15μg/600 IU
');
	echo $response;
}
function vitE(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Almonds, raw seeds, spinach
Adults:19+ years: 15mg
Infants:
0–6 months: 4mg
7–12 months: 5mg
1–3 years: 6mg
4–8 years: 7mg
9–13 years: 11mg
14–18 years: 15mg
');
	echo $response;
}
function vitK(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Green Leafy Vegetables:Spinach
Adults: 19+ years:
Males: 120 μg
Females: 90 μg
Infants/children:
14–18 years (boys):    120 μg
14–18 years (girls): 75 μg
');
	echo $response;

function vitC(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Citrus fruits (orange, lime), strawberries
Adults (> 19 years):
Males: 90mg
Females: 75mg
Infants/children: (*)
14–18 years (boys): 75mg
14–18 years (girls): 65mg
');
	echo $response;

function vitB1(){
	$response = new Services_Twilio_Twiml();
	$response->sms('pork and ham, eel, tuna, whole grain bread
Adults > 19 years
Males: 1.2mg
Females: 1.1mg
Infants/children
14–18 years (boys): 1.2 mg
14–18 years (girls): 1.1 mg
');
	echo $response;

function vitThiamine(){
	$response = new Services_Twilio_Twiml();
	$response->sms('pork and ham, eel, tuna, whole grain bread
Adults > 19 years
Males: 1.2mg
Females: 1.1mg
Infants/children
14–18 years (boys): 1.2 mg
14–18 years (girls): 1.1 mg
');
	echo $response;

function vitRiboflavin(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Cheese, Almonds, Beef, Lamb
Adults (ages 19+):
Males: 1.3mg
Females: 1.1mg
children: (*)
14–18 years (boys): 1.3mg
14–18 years (girls): 1.0mg
');
	echo $response;

function vitB2(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Cheese, Almonds, Beef, Lamb
Adults (ages 19+):
Males: 1.3mg
Females: 1.1mg
children: (*)
14–18 years (boys): 1.3mg
14–18 years (girls): 1.0mg
');
	echo $response;

function vitNiacin(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Tuna, Chicken, Turkey
Adult >age 14: 17mg
children: (*)
0–12 months: 3.0mg
1–8 years: 7.0mg
9–13 years (boys): 12.0mg
');
	echo $response;

function vitB3(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Tuna, Chicken, Turkey
Adult >age 14: 17mg
children: (*)
0–12 months: 3.0mg
1–8 years: 7.0mg
9–13 years (boys): 12.0mg
');
	echo $response;

function vitB5(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Avocado, Broccoli, Kale
Adults (ages 19+): 5.0mg
children: (*)
0–12 months: 1.7mg
1–8 years: 2.5mg
9–13 years (boys): 4.0mg
14–18 years (boys): 5.0mg
');
	echo $response;

function vitPantothenicacid(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Avocado, Broccoli, Kale
Adults (ages 19+): 5.0mg
children: (*)
0–12 months: 1.7mg
1–8 years: 2.5mg
9–13 years (boys): 4.0mg
14–18 years (boys): 5.0mg
');
	echo $response;

function vitPyridoxine(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Meat, fish, poultry
Adults:
Ages 19–50: 1.3mg
Age 51+ : 1.6mg
children:
0–12 months: 2.5 mg
1–8 years: 0.5mg
9–13 : 1.0mg
14–18 years : 1.3mg
');
	echo $response;

function vitB6(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Meat, fish, poultry
Adults:
Ages 19–50: 1.3mg
Age 51+ : 1.6mg
children:
0–12 months: 2.5 mg
1–8 years: 0.5mg
9–13 : 1.0mg
14–18 years : 1.3mg
');
	echo $response;

function vitFolicAcid(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Lentils, dried beans, dark green vegetables (spinach)
Adults (ages 19+): 400 µg
Infants/children: (*)
0–12 months: 80 µg
1–8 years: 180 µg
9–18 years: 350 µg
');
	echo $response;

function vitB12(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Beef liver, shellfish, eggs
Adults (ages 19+): 2.4 µg
Infants/children:
0–12 months: 0.5 µg
1–4 years: 0.9 µg
4–8 years: 1.2 µg
9–13 years: 1.8 µg
4–18 years: 2.4 µg
');
	echo $response;
function vitBiotin(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Eggs, Almonds, peanuts
Adults (ages 19+):30 µg
Infants/children:
0–12 months: 6µg
1–3 years: 8 µg
4–8 years: 12µg
9–13 years: 20µg
14–18 years: 25 µg
');
	echo $response;

function vitCholine(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Beef liver,Legumes, cauliflower
Adults(ages 19+)
Men: 550mg
Women 425mg
Infants/children:
0-12months: 200mg
1–8 years: 230mg
9–13 years: 375mg
14–18 years:500mg
');
	echo $response;
}
/* Read the contents of the 'Body' field of the Request. */
$body = $_REQUEST['Body'];
/* Remove formatting from $body until it is just lowercase characters without punctuation or spaces. */
$result = preg_replace("/[^A-Za-z0-9]/u", " ", $body);
$result = trim($result);
$result = strtolower($result);
/* ##Router## */
switch ($result) {
    case 'vita':
        vitA();
        break;
    case 'vitd':
        vitD();
        break;
    case 'vite':
        vitE();
        break;
    case 'vite':
        vitK();
        break;
	case 'vitk':
        vitC();
        break;
	case 'vitb1':
        vitB1();
        break;
	case 'vitthiamine':
        vitThiamine();
        break;
	case 'vitriboflavin':
        vitRiboflavin();
        break;
	case 'vitb2':
        vitb2();
        break;
	case 'vitniacin':
        vitNiacin();
        break;
	case 'vitb3':
        vitB3();
        break;
	case 'vitb5':
        vitB5();
        break;
	case 'vitpantothenicacid':
        vitPantothenicacid();
        break;
	case 'vitpyridoxine':
        vitPyridoxine();
        break;
	case 'vitb6':
        vitB6();
        break;
	case 'vitpantothenicacid':
        vitPantothenicacid();
        break;
	case 'vitfolicacid':
        vitFolicAcid();
        break;
	case 'vitb12':
        vitB12();
        break;
	case 'vitbiotin':
        vitBiotin();
		break;
	case 'vitcholine':
        vitCholine();
		break;

    /* Add new routing logic above this line. */
    default:
        index();
}
