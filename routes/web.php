<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'homecontroller@index')->name('home');


//Route::get('/home/{id}','homecontroller@viewspeciality');

Route::get('/neonatology', function () {
    return view('neonatology');
});

Route::get('/dentist', function () {
    return view('dentist');
});

Route::get('/orthopedic', function () {
    return view('orthopedic');
});

Route::get('/laboratory', function () {
    return view('laboratory');
});

Route::get('/doctor/{id}','imagecontroller@single_page')->name('doctor_image');

Route::get('/patient/{id}','patimagecontroller@singlepage')->name('pat_image');


Route::get('/about', function () {
    return view('about');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/news', function () {
    return view('news');
});

Route::post('/make-prescription', 'prescriptioncontroller@makeprescription')->name('make-prescription');
Route::post('/make-treatment', 'treatmentcontroller@maketreatment')->name('make-treatment');

Route::get('/services', function () {
    return view('services');
});


Route::get('/login', function () {
    return view('login');
});
Route::post('/login','rootcontroller@attemptLogin')->name('attemptLogin');
Route::post('/logout','registercontroller@logout')->name('Logout');


Route::get('/register', function () {
    return view('register');
});
Route::post('save-data','registercontroller@register_add')->name('saveData');
Route::get('/register_show','registercontroller@register_show');
Route::get('/delete/{id}','registercontroller@delete')->name('deletePost');
Route::get('/update/{id}','registercontroller@update')->name('updatePost');
Route::get('/save-updated-data/{id}','registercontroller@saveupdated')->name('saveupdatedPost');

Route::get('/forgot-password', function() {
    return view('forgot-password');
});
Route::get('/doctors','doctorcontroller@showdoctor');

Route::get('/all_doctors', function () {
    return view('all_doctors');
});

Route::get('/patients','patientcontroller@showpatient');

//appointment
Route::get('/appointmentadd',function() {
        return view('appointmentadd');
});
Route::get('appointmentadd',"appointmentcontroller@showAddForm")->name('appointmentaddAddForm');
Route::post('appointmentsave-data',"appointmentController@appointmentadd")->name("appointmentsave");
Route::get('/appointmentshow','appointmentcontroller@appointmentshow');
Route::get('/appointmentdelete/{id}','appointmentcontroller@appointmentdelete')->name('appointmentdeletePost');//you can get id as the second param of method
Route::get('/appointmentupdate/{id}','appointmentcontroller@appointmentupdate')->name('appointmentupdatePost');//you can get id as the second param of method
Route::post('/appointmentsave-updated-data','appointmentcontroller@appointmentsaveupdated')->name('appointmentsaveUpdatedPost');//you can get id as the second param of method
Route::get('/appointmentview/{id}','appointmentcontroller@appointmentview')->name('appointmentviewPost');

Route::post('make-appointment',"appointmentController@makeappointment")->name("make-appointment");
//treatment

Route::get('/treatment_show','treatmentcontroller@treatment_show');
//prescription
Route::get('/prescription_add', function () {
	return view('prescription_add');//Name of the blade file
});
Route::post('/prescriptionsave',"prescriptionController@prescription_add")->name("prescriptionsaveData");
Route::get('/prescription_show','prescriptioncontroller@prescription_show');
Route::get('/prescription_delete/{id}','prescriptioncontroller@prescriptiondelete')->name('prescriptiondeletePost');//you can get id as the second param of method
Route::get('/prescription_update/{id}','prescriptioncontroller@prescription_update')->name('prescriptionupdatePost');//you can get id as the second param of method
Route::post('/prescriptionsave-updated-data','prescriptioncontroller@prescriptionsaveupdated')->name('prescriptionsaveupdatedpost');//you can get id as the second param of method
Route::get('/prescription_view/{id}','prescriptioncontroller@prescription_view')->name('prescriptionviewPost');
Route::get('prescription_preview','prescriptioncontroller@prescription_preview');
//speciality
Route::get('/speciality_add', function() {
    return view('speciality_add');//Name of the blade file
});
Route::post('/specialitysave-data',"specialityController@speciality_add")->name("specialitysaveData");
Route::get('/speciality_show','specialityController@speciality_show');
Route::get('/speciality_delete/{id}','specialitycontroller@speciality_delete')->name('specialitydeletePost');//you can get id as the second param of method
Route::get('/speciality_update/{id}','specialitycontroller@speciality_update')->name('specialityupdatePost');//you can get id as the second param of method
Route::post('/specialitysave-updated-data','specialityController@specialitysaveupdated')->name('specialitysaveupdatedpost');//you can get id ad the second param of method
Route::get('/speciality_view/{id}','specialitycontroller@speciality_view')->name('specialityviewPost');

//feedback
Route::get('/feedback_add', function() {
    return view('feedback_add');//Name of the blade file
});
Route::post('/feedbacksave-data',"feedbackcontroller@feedback_add")->name("feedbacksaveData");
Route::get('/feedback_show','feedbackcontroller@feedback_show');
Route::get('/feedback_delete/{id}','feedbackcontroller@feedback_delete')->name('feedbackdeletePost');//you can get id as the second param of method
Route::get('/feedback_view/{id}','feedbackcontroller@feedback_view')->name('feedbackviewPost');
Route::post('/post-quick-feedback',"feedbackcontroller@postQuickFeedback")->name("post-quick-feedback");


//schedule
Route::get('/schedule_add', function() {
    return view('schedule_add');
});
Route::post('/schedulesave-data',"schedulecontroller@schedule_add")->name("schedulesaveData");
Route::get('/schedule_show','schedulecontroller@schedule_show');
Route::get('/schedule_delete/{id}','schedulecontroller@schedule_delete')->name('scheduledeletePost');
Route::get('/schedule_update/{id}','schedulecontroller@schedule_update')->name('scheduleupdatePost');
Route::post('/schedulesave-updated-data','schedulecontroller@schedulesaveupdated')->name('schedulesaveupdatedpost');
Route::get('/schedule_view/{id}','schedulecontroller@schedule_view')->name('scheduleviewPost');

//doctor

Route::get('/doctor_add', function() {
    return view('doctor_add');
});
Route::post('/doctorsave-data',"doctorcontroller@doctor_add")->name("doctorsaveData");

Route::get('/doctor_delete/{id}','doctorcontroller@doctor_delete')->name('doctordeletePost');
Route::get('/doctor_update/{id}','doctorcontroller@doctor_update')->name('doctorupdatePost');
Route::post('/doctorsave-updated-data','doctorcontroller@doctorsaveupdated')->name('doctorsaveupdatedpost');
Route::get('/doctor_view/{id}','doctorcontroller@doctor_view')->name('doctorviewPost');

//state
Route::get('/state_add', function() {
    return view('state_add');
});
Route::post('/statesave',"statecontroller@state_add")->name("statesaveData");
Route::get('/state_show','statecontroller@state_show');
Route::get('/state_delete/{id}','statecontroller@state_delete')->name('statedeletePost');
Route::get('/state_update/{id}','statecontroller@state_update')->name('stateupdatePost');
Route::post('/statesave-updated-data','statecontroller@statesaveupdated')->name('statesaveupdatedpost');


//city
Route::get('/city_add', function() {
    return view('city_add');
});
Route::post('/citysave',"citycontroller@city_add")->name("citysaveData");
Route::get('/city_show','citycontroller@city_show');
Route::get('/city_delete/{id}','citycontroller@city_delete')->name('citydeletePost');
Route::get('/city_update/{id}','citycontroller@city_update')->name('cityupdatePost');
Route::post('/citysave-updated-data','citycontroller@citysaveupdated')->name('citysaveupdatedpost');


//patient
Route::get('/patient_add',function() {
    return view('patient_add');
});
Route::post('/patientsave',"patientcontroller@patient_add")->name('patientsaveData');

Route::get('/patient_delete/{id}','patientcontroller@patient_delete')->name('patientdeletePost');
Route::get('/patient_update/{id}','patientcontroller@patient_update')->name('patientupdatePost');
Route::post('/patientsave-updated-data','patientcontroller@patientsaveupdated')->name('patientsaveupdatedpost');
Route::get('/patient_view/{id}','patientcontroller@patient_view')->name('patientviewPost');

Route::get('/treatment_view',function() {
    return view('treatment_view');
});