<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('admin.login');
});

Route::get('/clear', function() {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    return 'Cleared!';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('lang/change', 'Admin\LocalizationController@change')->name('changeLang');





Route::get('user/checkemail', 'Admin\PeopleController@userEmailCheck')->name('userEmailCheck');
Route::get('user/checkBirthCertificate', 'Admin\PeopleController@userBirthCertificateCheck')->name('userBirthCertificateCheck');


Route::post('/userwisecertificateviewnew','Admin\PeopleController@userwisecer')->name('agent.userwisecer.view');

//Route::group(['prefix' => 'admin'], function () {
 // Login Routes
 Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
 Route::post('admin/login/submit', 'Admin\Auth\LoginController@login')->name('admin.login.submit');
    Route::group(['prefix' => 'admin'], function () {


    //student_id_card
    Route::post('exam_id_template_id_student_id_card', 'DesignMarkSheetController@exam_id_template_id')->name('exam_id_template_id_student_id_card');
     Route::post('print_view_all_or_single_admin_student_id_card', 'StudentIdCardController@print_view_all_or_single_admin')->name('print_view_all_or_single_admin_student_id_card');




    Route::get('generate_student_id_card', 'StudentIdCardController@generate_student_id_card_index')->name('admin.generate_student_id_card');
    Route::post('generate_student_id_card/store', 'StudentIdCardController@generate_student_id_card_store')->name('admin.generate_student_id_card.store');
    Route::post('generate_student_id_card/update/','StudentIdCardController@generate_student_id_card_update')->name('admin.generate_student_id_card.update');
    Route::delete('generate_student_id_card/delete/{id}','StudentIdCardController@generate_student_id_card_destroy')->name('admin.generate_student_id_card.delete');



    Route::get('student_id_card', 'StudentIdCardController@index')->name('admin.student_id_card');
    Route::post('student_id_card/store', 'StudentIdCardController@store')->name('admin.student_id_card.store');
    Route::post('student_id_card/update/','StudentIdCardController@update')->name('admin.student_id_card.update');
    Route::delete('student_id_card/delete/{id}','StudentIdCardController@destroy')->name('admin.student_id_card.delete');



    //staff_id_card


    Route::post('exam_id_template_id_staff_id_card', 'StaffIdCardController@exam_id_template_id')->name('exam_id_template_id_staff_id_card');
     Route::post('print_view_all_or_single_admin_staff_id_card', 'StaffIdCardController@print_view_all_or_single_admin')->name('print_view_all_or_single_admin_staff_id_card');

     Route::post('staff_id_card_post', 'StaffIdCardController@staff_id_card_post')->name('staff_id_card_post');


    Route::get('generate_staff_id_card', 'StaffIdCardController@generate_staff_id_card_index')->name('admin.generate_staff_id_card');
    Route::post('generate_staff_id_card/store', 'StaffIdCardController@generate_staff_id_card_store')->name('admin.generate_staff_id_card.store');
    Route::post('generate_staff_id_card/update/','StaffIdCardController@generate_staff_id_card_update')->name('admin.generate_staff_id_card.update');
    Route::delete('generate_staff_id_card/delete/{id}','StaffIdCardController@generate_staff_id_card_destroy')->name('admin.generate_staff_id_card.delete');




    Route::get('staff_id_card', 'StaffIdCardController@index')->name('admin.staff_id_card');
    Route::post('staff_id_card/store', 'StaffIdCardController@store')->name('admin.staff_id_card.store');
    Route::post('staff_id_card/update/','StaffIdCardController@update')->name('admin.staff_id_card.update');
    Route::delete('staff_id_card/delete/{id}','StaffIdCardController@destroy')->name('admin.staff_id_card.delete');


     //student_certificate
     Route::post('exam_id_template_id_student_certificate', 'StudentCertificateController@exam_id_template_id')->name('exam_id_template_id_student_certificate');
     Route::post('print_view_all_or_single_admin_student_certificate', 'StudentCertificateController@print_view_all_or_single_admin_student_certificate')->name('print_view_all_or_single_admin_student_certificate');



     Route::get('generate_student_certificate', 'StudentCertificateController@generate_student_certificate_index')->name('admin.generate_student_certificate');
     Route::post('generate_student_certificate/store', 'StudentCertificateController@generate_student_certificate_store')->name('admin.generate_student_certificate.store');
     Route::post('generate_student_certificate/update/','StudentCertificateController@generate_student_certificate_update')->name('admin.generate_student_certificate.update');
     Route::delete('generate_student_certificate/delete/{id}','StudentCertificateController@generate_student_certificate_destroy')->name('admin.generate_student_certificate.delete');



     Route::get('student_certificate', 'StudentCertificateController@index')->name('admin.student_certificate');
     Route::post('student_certificate/store', 'StudentCertificateController@store')->name('admin.student_certificate.store');
     Route::post('student_certificate/update/','StudentCertificateController@update')->name('admin.student_certificate.update');
     Route::delete('student_certificate/delete/{id}','StudentCertificateController@destroy')->name('admin.student_certificate.delete');




     //student_mark_sheet

     Route::post('exam_id_template_id_marksheet', 'DesignMarkSheetController@exam_id_template_id')->name('exam_id_template_id_marksheet');
     Route::post('print_view_all_or_single_admin_marksheet', 'DesignMarkSheetController@print_view_all_or_single_admin')->name('print_view_all_or_single_admin_marksheet');

     Route::get('design_mark_sheet', 'DesignMarkSheetController@index')->name('admin.design_mark_sheet');
     Route::post('design_mark_sheet/store', 'DesignMarkSheetController@store')->name('admin.design_mark_sheet.store');
     Route::post('design_mark_sheet/update/','DesignMarkSheetController@update')->name('admin.design_mark_sheet.update');
     Route::delete('design_mark_sheet/delete/{id}','DesignMarkSheetController@destroy')->name('admin.design_mark_sheet.delete');


     Route::get('generate_mark_sheet', 'DesignMarkSheetController@generate_mark_sheet_index')->name('admin.generate_mark_sheet');
     Route::post('generate_mark_sheet/store', 'DesignMarkSheetController@generate_mark_sheet_store')->name('admin.generate_mark_sheet.store');
     Route::post('generate_mark_sheet/update/','DesignMarkSheetController@generate_mark_sheet_update')->name('admin.generate_mark_sheet.update');
     Route::delete('generate_mark_sheet/delete/{id}','DesignMarkSheetController@generate_mark_sheetdestroy')->name('admin.generate_mark_sheet.delete');


     //student_admitcard
     Route::post('exam_id_template_id', 'DesignAdmitController@exam_id_template_id')->name('exam_id_template_id');
     Route::post('print_view_all_or_single_admin', 'DesignAdmitController@print_view_all_or_single_admin')->name('print_view_all_or_single_admin');

     Route::get('design_admit_card', 'DesignAdmitController@index')->name('admin.design_admit_card');
     Route::post('design_admit_card/store', 'DesignAdmitController@store')->name('admin.design_admit_card.store');
     Route::post('design_admit_card/update/','DesignAdmitController@update')->name('admin.design_admit_card.update');
     Route::delete('design_admit_card/delete/{id}','DesignAdmitController@destroy')->name('admin.design_admit_card.delete');


     Route::get('generate_admit_card', 'DesignAdmitController@generate_admit_card_index')->name('admin.generate_admit_card');
     Route::post('generate_admit_card/store', 'DesignAdmitController@generate_admit_card_store')->name('admin.generate_admit_card.store');
     Route::post('generate_admit_card/update/','DesignAdmitController@generate_admit_card_update')->name('admin.generate_admit_card.update');
     Route::delete('generate_admit_card/delete/{id}','DesignAdmitController@generate_admit_card_destroy')->name('admin.generate_admit_card.delete');



      //fee_type
      Route::get('grade_mark', 'GradeMarkController@index')->name('admin.grade_mark');
      Route::post('grade_mark/store', 'GradeMarkController@store')->name('admin.grade_mark.store');
      Route::post('grade_mark/update/','GradeMarkController@update')->name('admin.grade_mark.update');
      Route::delete('grade_mark/delete/{id}','GradeMarkController@destroy')->name('admin.grade_mark.delete');



    //print_header
    Route::get('print_header', 'PrintHeaderController@index')->name('admin.print_header');
    Route::post('print_header/store', 'PrintHeaderController@store')->name('admin.print_header.store');
    Route::post('print_header/update/','PrintHeaderController@update')->name('admin.print_header.update');
    Route::delete('print_header/delete/{id}','PrintHeaderController@destroy')->name('admin.print_header.delete');


    //alumni_information
    Route::get('manage_all_alumni', 'AluminiEventController@manage_all_alumni')->name('admin.manage_all_alumni');
    Route::post('search_session_wise_all', 'AluminiEventController@search_session_wise')->name('admin.search_session_wise_all');
    Route::post('search_admission_no_wise', 'AluminiEventController@search_admission_no_wise')->name('admin.search_admission_no_wise');

    Route::get('alumni_event', 'AluminiEventController@index')->name('admin.alumni_event');
    Route::get('alumni_event/add', 'AluminiEventController@store')->name('admin.alumni_event.add');
    Route::post('alumni_event/store', 'AluminiEventController@store')->name('admin.alumni_event.store');
    Route::post('alumni_event/update/','AluminiEventController@update')->name('admin.alumni_event.update');
    Route::delete('alumni_event/delete/{id}','AluminiEventController@destroy')->name('admin.alumni_event.delete');

    Route::post('alumni_section_search', 'AluminiEventController@alumni_section_search')->name('alumni_section_search');
    Route::post('alumni_section_search_dp_wise', 'AluminiEventController@alumni_section_search_dp_wise')->name('alumni_section_search_dp_wise');


    Route::post('alumni_section_search_edit', 'AluminiEventController@alumni_section_search_edit')->name('alumni_section_search_edit');
    Route::post('alumni_section_search_dp_wise_edit', 'AluminiEventController@alumni_section_search_dp_wise_edit')->name('alumni_section_search_dp_wise_edit');

    //staff_id_card
    // Route::get('staff_id_card', 'StaffIdController@index')->name('admin.staff_id_card');
    Route::get('staff_id_card/add', 'StaffIdController@store')->name('admin.staff_id_card.add');
    // Route::post('staff_id_card/store', 'StaffIdController@store')->name('admin.staff_id_card.store');
    // Route::post('staff_id_card/update/','StaffIdController@update')->name('admin.staff_id_card.update');
    // Route::delete('staff_id_card/delete/{id}','StaffIdController@destroy')->name('admin.staff_id_card.delete');



    //student_id
    // Route::get('student_id_card', 'StudentIdController@index')->name('admin.student_id_card');
    Route::get('student_id_card/add', 'StudentIdController@store')->name('admin.student_id_card.add');
    // Route::post('student_id_card/store', 'StudentIdController@store')->name('admin.student_id_card.store');
    // Route::post('student_id_card/update/','StudentIdController@update')->name('admin.student_id_card.update');
    // Route::delete('student_id_card/delete/{id}','StudentIdController@destroy')->name('admin.student_id_card.delete');


    //certificate
    Route::get('certificate', 'CertificateController@index')->name('admin.certificate');
    Route::get('certificate/add', 'CertificateController@store')->name('admin.certificate.add');
    Route::post('certificate/store', 'CertificateController@store')->name('admin.certificate.store');
    Route::post('certificate/update/','CertificateController@update')->name('admin.certificate.update');
    Route::delete('certificate/delete/{id}','CertificateController@destroy')->name('admin.certificate.delete');


    //fee_type
    Route::get('fee_type', 'FeeTypeController@index')->name('admin.fee_type');
    Route::post('fee_type/store', 'FeeTypeController@store')->name('admin.fee_type.store');
    Route::post('fee_type/update/','FeeTypeController@update')->name('admin.fee_type.update');
    Route::delete('fee_type/delete/{id}','FeeTypeController@destroy')->name('admin.fee_type.delete');


    //fee_group
    Route::get('fee_group', 'FeeGroupController@index')->name('admin.fee_group');
    Route::post('fee_group/store', 'FeeGroupController@store')->name('admin.fee_group.store');
    Route::post('fee_group/update/','FeeGroupController@update')->name('admin.fee_group.update');
    Route::delete('fee_group/delete/{id}','FeeGroupController@destroy')->name('admin.fee_group.delete');


    //fee_discount
    Route::get('fee_discount', 'FeeDiscountController@index')->name('admin.fee_discount');
    Route::post('fee_discount/store', 'FeeDiscountController@store')->name('admin.fee_discount.store');
    Route::post('fee_discount/update/','FeeDiscountController@update')->name('admin.fee_discount.update');
    Route::delete('fee_discount/delete/{id}','FeeDiscountController@destroy')->name('admin.fee_discount.delete');

    //fee_amount
    Route::post('assign_student_to_fee_group', 'FeeAmountController@assign_student_to_fee_group')->name('assign_student_to_fee_group');
    Route::get('fee_amount', 'FeeAmountController@index')->name('admin.fee_amount');
    Route::post('fee_amount/store', 'FeeAmountController@store')->name('admin.fee_amount.store');
    Route::post('fee_amount/update/','FeeAmountController@update')->name('admin.fee_amount.update');
    Route::delete('fee_amount/delete/{id}','FeeAmountController@destroy')->name('admin.fee_amount.delete');
    Route::delete('fee_amount_single/delete/{id}','FeeAmountController@fee_amount_single')->name('admin.fee_amount_single.delete');


    //collect_fee
    Route::post('collect_fee_student_searchBy_class', 'CollectFeeController@collect_fee_student_searchBy_class')->name('collect_fee_student_searchBy_class');
    Route::post('collect_fee_student_searchBy_name', 'CollectFeeController@collect_fee_student_searchBy_name')->name('collect_fee_student_searchBy_name');

    Route::post('collect_discount', 'CollectFeeController@collect_discount')->name('collect_discount');
    //list
    Route::get('collect_fee_list/{id}', 'CollectFeeController@collect_fee_list')->name('collect_fee_list');
    Route::get('collect_fee', 'CollectFeeController@index')->name('admin.collect_fee');
    Route::post('collect_fee/store', 'CollectFeeController@store')->name('admin.collect_fee.store');
    Route::post('collect_fee/update/','CollectFeeController@update')->name('admin.collect_fee.update');
    Route::delete('collect_fee/delete/{id}','CollectFeeController@destroy')->name('admin.collect_fee.delete');


    //reminder_type
    Route::get('reminder_type', 'ReminderTypeController@index')->name('admin.reminder_type');
    Route::post('reminder_type/store', 'ReminderTypeController@store')->name('admin.reminder_type.store');
    Route::post('reminder_type/update/','ReminderTypeController@update')->name('admin.reminder_type.update');
    Route::delete('reminder_type/delete/{id}','ReminderTypeController@destroy')->name('admin.reminder_type.delete');


     //upload content
     Route::get('assignments', 'UploadContentController@assignments')->name('admin.assignments');
     Route::get('study_matrials', 'UploadContentController@study_matrials')->name('admin.study_matrials');
     Route::get('syllabus', 'UploadContentController@syllabus')->name('admin.syllabus');
     Route::get('other_download', 'UploadContentController@other_download')->name('admin.other_download');

     Route::get('upload_content_down_load/{id}', 'UploadContentController@upload_content_down_load')->name('upload_conten_down_load');

     Route::get('upload_content', 'UploadContentController@index')->name('admin.upload_content');
     Route::post('upload_content/store', 'UploadContentController@store')->name('admin.upload_content.store');
     Route::post('upload_content/update/','UploadContentController@update')->name('admin.upload_content.update');
     Route::delete('upload_content/delete/{id}','UploadContentController@destroy')->name('admin.upload_content.delete');


    //homework
    Route::get('homework', 'HomeworkController@index')->name('admin.home_work');
    Route::post('homework/store', 'HomeworkController@store')->name('admin.home_work.store');
    Route::post('homework/update/','HomeworkController@update')->name('admin.home_work.update');
    Route::delete('homework/delete/{id}','HomeworkController@destroy')->name('admin.home_work.delete');


    //session
    Route::get('year_session', 'SessionYearController@index')->name('admin.year_session');
    Route::post('year_session/store', 'SessionYearController@store')->name('admin.year_session.store');
    Route::post('year_session/update/','SessionYearController@update')->name('admin.year_session.update');
    Route::delete('year_session/delete/{id}','SessionYearController@destroy')->name('admin.year_session.delete');


    Route::post('return_date_book', 'BookController@return_date_book')->name('return_date_book');

    Route::get('add_student_to_library', 'BookController@add_student_to_library')->name('add_student_to_library');
    Route::post('add_student_to_library_save', 'BookController@add_student_to_library_save')->name('add_student_to_library_save');
    Route::delete('remove_student_to_library_save/delete/{id}','BookController@remove_student_to_library_save')->name('remove_student_to_library_save');
    Route::post('library_wise_student_view', 'BookController@library_wise_student_view')->name('library_wise_student_view');

    Route::get('add_member_to_library', 'BookController@add_member_to_library')->name('add_member_to_library');
    Route::post('add_member_to_library_save', 'BookController@add_member_to_library_save')->name('add_member_to_library_save');
    Route::delete('remove_member_to_library_save/delete/{id}','BookController@remove_member_to_library_save')->name('remove_member_to_library_save');

    Route::post('quantity_search_of_book', 'BookController@quantity_search_of_book')->name('quantity_search_of_book');
    Route::post('issued_book_list_save', 'BookController@issued_book_list_save')->name('issued_book_list_save');
    Route::get('issued_book_list', 'BookController@issued_book_list')->name('issued_book_list');
    Route::get('member_wise_issued_book_list/{id}/{type}', 'BookController@member_wise_issued_book_list')->name('member_wise_issued_book_list');

    //book
    Route::post('book_list_import', 'BookController@book_list_import')->name('book_list_import');
    Route::get('download_sample_book_file', 'BookController@download_sample_book_file')->name('download_sample_book_file');

    Route::get('book', 'BookController@index')->name('admin.book');
    Route::post('book/store', 'BookController@store')->name('admin.book.store');
    Route::post('book/update/','BookController@update')->name('admin.book.update');
    Route::delete('book/delete/{id}','BookController@destroy')->name('admin.book.delete');


//item
    Route::get('item', 'ItemController@index')->name('admin.item');
    Route::post('item/store', 'ItemController@store')->name('admin.item.store');
    Route::post('item/update/','ItemController@update')->name('admin.item.update');
    Route::delete('item/delete/{id}','ItemController@destroy')->name('admin.item.delete');


    //item_category
    Route::get('item_category', 'ItemCategoryController@index')->name('admin.item_category');
    Route::post('item_category/store', 'ItemCategoryController@store')->name('admin.item_category.store');
    Route::post('item_category/update/','ItemCategoryController@update')->name('admin.item_category.update');
    Route::delete('item_category/delete/{id}','ItemCategoryController@destroy')->name('admin.item_category.delete');


//item_supplier
Route::get('item_supplier', 'ItemSupplierController@index')->name('admin.item_supplier');
Route::post('item_supplier/store', 'ItemSupplierController@store')->name('admin.item_supplier.store');
Route::post('item_supplier/update/','ItemSupplierController@update')->name('admin.item_supplier.update');
Route::delete('item_supplier/delete/{id}','ItemSupplierController@destroy')->name('admin.item_supplier.delete');


//item_store
Route::get('item_store', 'ItemstoreController@index')->name('admin.item_store');
Route::post('item_store/store', 'ItemstoreController@store')->name('admin.item_store.store');
Route::post('item_store/update/','ItemstoreController@update')->name('admin.item_store.update');
Route::delete('item_store/delete/{id}','ItemstoreController@destroy')->name('admin.item_store.delete');


//item_stock
Route::post('item_search', 'ItemStockController@item_search')->name('item_search');
Route::post('quantity_search', 'ItemStockController@quantity_search')->name('quantity_search');
Route::get('item_stock', 'ItemStockController@index')->name('admin.item_stock');
Route::post('item_stock/store', 'ItemStockController@store')->name('admin.item_stock.store');
Route::post('item_stock/update/','ItemStockController@update')->name('admin.item_stock.update');
Route::delete('item_stock/delete/{id}','ItemStockController@destroy')->name('admin.item_stock.delete');


//issue_item
Route::post('user_list_search', 'IssueItemController@user_list_search')->name('user_list_search');
Route::get('issue_item', 'IssueItemController@index')->name('admin.issue_item');
Route::post('issue_item/store', 'IssueItemController@store')->name('admin.issue_item.store');
Route::post('issue_item/update/','IssueItemController@update')->name('admin.issue_item.update');
Route::delete('issue_item/delete/{id}','IssueItemController@destroy')->name('admin.issue_item.delete');




    //for staff_attandance
    Route::post('role_base_search_staff_list','StaffAttandenceController@role_base_search_staff_list')->name('role_base_search_staff_list');
    Route::post('staff_search', 'StaffAttandenceController@staff_search')->name('staff_search');
    Route::get('staff_attandance/create', 'StaffAttandenceController@create')->name('admin.staff_attandance.create');

    Route::get('staff_attandance', 'StaffAttandenceController@index')->name('admin.staff_attandance');
    Route::post('staff_attandance/store', 'StaffAttandenceController@store')->name('admin.staff_attandance.store');
    Route::post('staff_attandance/update/','StaffAttandenceController@update')->name('admin.staff_attandance.update');
    Route::delete('staff_attandance/delete/{id}','StaffAttandenceController@destroy')->name('admin.staff_attandance.delete');
//end for staff_attandance

Route::post('staff_searchlist_for_payroll', 'PayrollController@staff_searchlist_for_payroll')->name('admin.staff_searchlist_for_payroll');


    Route::get('staff_search_for_payroll/{staff_id}/{year}/{month}', 'PayrollController@staff_search_for_payroll')->name('admin.staff_search_for_payroll');


    Route::post('staff_payroll_trasection', 'PayrollController@staff_payroll_trasection')->name('staff_payroll_trasection');
    Route::get('staff_payroll', 'PayrollController@index')->name('admin.staff_payroll');
    Route::post('staff_payroll/store', 'PayrollController@store')->name('admin.staff_payroll.store');
    Route::post('staff_payroll/update/','PayrollController@update')->name('admin.staff_payroll.update');
    Route::delete('staff_payroll/delete/{id}','PayrollController@destroy')->name('admin.staff_payroll.delete');
//end for staff_attandance


    //for staff
    Route::get('staff_doc_download/{title}/{id}', 'StaffController@staff_doc_download')->name('staff_doc_download');

    Route::post('staff_doc_update', 'StaffController@staff_doc_update')->name('staff_doc_update');

    Route::get('staff/status/{status}/{id}', 'StaffController@status')->name('admin.staff.status');

Route::get('staff', 'StaffController@index')->name('admin.staff');

Route::get('dis_able_staff', 'StaffController@dis_able_staff')->name('dis_able_staff');


Route::get('staff/create', 'StaffController@create')->name('admin.staff.create');
Route::get('staff/view/{id}', 'StaffController@view')->name('admin.staff.view');
Route::get('staff/edit/{id}', 'StaffController@edit')->name('admin.staff.edit');
Route::post('staff/store', 'StaffController@store')->name('admin.staff.store');
Route::post('staff/update/','StaffController@update')->name('admin.staff.update');
Route::delete('staff/delete/{id}','StaffController@destroy')->name('admin.staff.delete');
//end for staff


    //for apply_leave
    Route::get('apply_leave_doc_download/{id}', 'ApplyLeaveController@apply_leave_doc_download')->name('admin.apply_leave_doc_download');

    Route::get('apporoved_leave_request', 'ApplyLeaveController@apporoved_leave_request')->name('admin.apporoved_leave_request');

    Route::get('apply_leave', 'ApplyLeaveController@index')->name('admin.apply_leave');
    Route::post('apply_leave/store', 'ApplyLeaveController@store')->name('admin.apply_leave.store');
    Route::post('apply_leave/update/','ApplyLeaveController@update')->name('admin.apply_leave.update');
    Route::delete('apply_leave/delete/{id}','ApplyLeaveController@destroy')->name('admin.apply_leave.delete');

    Route::delete('apporoved_leave/delete/{id}','ApplyLeaveController@apporoved_leave_destroy')->name('admin.apporoved_leave.delete');
//end for apply_leave


    //for staff_department
    Route::get('staff_department', 'HrDepartmentController@index')->name('admin.staff_department');
    Route::post('staff_department/store', 'HrDepartmentController@store')->name('admin.staff_department.store');
    Route::post('staff_department/update/','HrDepartmentController@update')->name('admin.staff_department.update');
    Route::delete('staff_department/delete/{id}','HrDepartmentController@destroy')->name('admin.staff_department.delete');
//end for staff_department


//for staff_designation
Route::get('staff_designation', 'DesignationController@index')->name('admin.staff_designation');
Route::post('staff_designation/store', 'DesignationController@store')->name('admin.staff_designation.store');
Route::post('staff_designation/update/','DesignationController@update')->name('admin.staff_designation.update');
Route::delete('staff_designation/delete/{id}','DesignationController@destroy')->name('admin.staff_designation.delete');
//end for staff_designation


//for leave_type
Route::get('leave_type', 'LeaveTypeController@index')->name('admin.leave_type');
Route::post('leave_type/store', 'LeaveTypeController@store')->name('admin.leave_type.store');
Route::post('leave_type/update/','LeaveTypeController@update')->name('admin.leave_type.update');
Route::delete('leave_type/delete/{id}','LeaveTypeController@destroy')->name('admin.leave_type.delete');
//end for leave_type


    //for income_head route
Route::get('income_head', 'IncomeHeadController@index')->name('admin.income_head');
Route::post('income_head/store', 'IncomeHeadController@store')->name('admin.income_head.store');
Route::post('income_head/update/','IncomeHeadController@update')->name('admin.income_head.update');
Route::delete('income_head/delete/{id}','IncomeHeadController@destroy')->name('admin.income_head.delete');
//end for income_head route


 //for income route
 Route::get('income', 'IncomeController@index')->name('admin.income');
 Route::post('income/store', 'IncomeController@store')->name('admin.income.store');
 Route::post('income/update/','IncomeController@update')->name('admin.income.update');
 Route::delete('income/delete/{id}','IncomeController@destroy')->name('admin.income.delete');


 Route::get('income_search_list', 'IncomeController@income_search_list')->name('admin.income_search_list');

 Route::post('income_search', 'IncomeController@income_search')->name('admin.income_search');
 //end for expense route


    //for expense_head route
Route::get('expense_head', 'ExpenseHeadController@index')->name('admin.expense_head');
Route::post('expense_head/store', 'ExpenseHeadController@store')->name('admin.expense_head.store');
Route::post('expense_head/update/','ExpenseHeadController@update')->name('admin.expense_head.update');
Route::delete('expense_head/delete/{id}','ExpenseHeadController@destroy')->name('admin.expense_head.delete');
//end for expense_head route


 //for expense route
 Route::get('expense', 'ExpenseController@index')->name('admin.expense');
 Route::post('expense/store', 'ExpenseController@store')->name('admin.expense.store');
 Route::post('expense/update/','ExpenseController@update')->name('admin.expense.update');
 Route::delete('expense/delete/{id}','ExpenseController@destroy')->name('admin.expense.delete');


 Route::get('expense_search_list', 'ExpenseController@expense_search_list')->name('admin.expense_search_list');

 Route::post('expense_search', 'ExpenseController@expense_search')->name('admin.expense_search');
 //end for expense route


    //for custome_field

    Route::get('studentTable_database_field', 'CustomeFieldController@studentTable_database_field')->name('admin.studentTable_database_field');
    Route::post('studentTable_database_field_update', 'CustomeFieldController@studentTable_database_field_update')->name('admin.studentTable_database_field_update');
    Route::get('system_field', 'CustomeFieldController@system_field_index')->name('admin.system_field');
    Route::post('system_field_search_category_wise', 'CustomeFieldController@system_field_search_category_wise')->name('system_field_search_category_wise');


    Route::get('custome_field', 'CustomeFieldController@index')->name('admin.custome_field');
    Route::post('custome_field/store', 'CustomeFieldController@store')->name('admin.custome_field.store');
    Route::post('custome_field/update/','CustomeFieldController@update')->name('admin.custome_field.update');
    Route::delete('custome_field/delete/{id}','CustomeFieldController@destroy')->name('admin.custome_field.delete');



    Route::get('drag_drop_custome_field', 'CustomeFieldController@drag_drop_custome_field')->name('drag_drop_custome_field');
    Route::get('drag_drop_custome_field_staff', 'CustomeFieldController@drag_drop_custome_field_staff')->name('drag_drop_custome_field_staff');
    Route::post('drag_drop_custome_field_update', 'CustomeFieldController@drag_drop_custome_field_update')->name('drag_drop_custome_field_update');
    Route::post('drag_drop_custome_field_update_staff', 'CustomeFieldController@drag_drop_custome_field_update_staff')->name('drag_drop_custome_field_update_staff');
//end for custome_field


//for vehicle route
Route::get('vehicle_route', 'VechileRouteController@index')->name('admin.vehicle_route');
Route::post('vehicle_route/store', 'VechileRouteController@store')->name('admin.vehicle_route.store');
Route::post('vehicle_route/update/','VechileRouteController@update')->name('admin.vehicle_route.update');
Route::delete('vehicle_route/delete/{id}','VechileRouteController@destroy')->name('admin.vehicle_route.delete');
//end for vehicle route

//for vehicle
Route::get('vehicle_info', 'VehicleController@index')->name('admin.vehicle_info');
Route::post('vehicle_info/store', 'VehicleController@store')->name('admin.vehicle_info.store');
Route::post('vehicle_info/update/','VehicleController@update')->name('admin.vehicle_info.update');
Route::delete('vehicle_info/delete/{id}','VehicleController@destroy')->name('admin.vehicle_info.delete');
//end for vehicle


//for hostel
Route::get('hostel', 'HostelInfoController@index')->name('admin.hostel');
Route::post('hostel/store', 'HostelInfoController@store')->name('admin.hostel.store');
Route::post('hostel/update/','HostelInfoController@update')->name('admin.hostel.update');
Route::delete('hostel/delete/{id}','HostelInfoController@destroy')->name('admin.hostel.delete');
//end for hostel


//for hostel_room
Route::post('student_hostel_room', 'HostelRoomController@student_hostel_room')->name('student_hostel_room');



Route::get('hostel_room', 'HostelRoomController@index')->name('admin.hostel_room');
Route::post('hostel_room/store', 'HostelRoomController@store')->name('admin.hostel_room.store');
Route::post('hostel_room/update/','HostelRoomController@update')->name('admin.hostel_room.update');
Route::delete('hostel_room/delete/{id}','HostelRoomController@destroy')->name('admin.hostel_room.delete');
//end for hostel_room


//for hostel_room_type
Route::get('hostel_room_type', 'HostelRoomTypeController@index')->name('admin.hostel_room_type');
Route::post('hostel_room_type/store', 'HostelRoomTypeController@store')->name('admin.hostel_room_type.store');
Route::post('hostel_room_type/update/','HostelRoomTypeController@update')->name('admin.hostel_room_type.update');
Route::delete('hostel_room_type/delete/{id}','HostelRoomTypeController@destroy')->name('admin.hostel_room_type.delete');
//end for hostel_room_type

    //for source
    Route::get('source', 'SourceController@index')->name('admin.source');
    Route::post('source/store', 'SourceController@store')->name('admin.source.store');
    Route::post('source/update/','SourceController@update')->name('admin.source.update');
    Route::delete('source/delete/{id}','SourceController@destroy')->name('admin.source.delete');
//end for source


//for purpose
Route::get('purpose', 'PurposeController@index')->name('admin.purpose');
Route::post('purpose/store', 'PurposeController@store')->name('admin.purpose.store');
Route::post('purpose/update/','PurposeController@update')->name('admin.purpose.update');
Route::delete('purpose/delete/{id}','PurposeController@destroy')->name('admin.purpose.delete');
//end for porpose


//for complain_type
Route::get('complain_type', 'ComplainTypeController@index')->name('admin.complain_type');
Route::post('complain_type/store', 'ComplainTypeController@store')->name('admin.complain_type.store');
Route::post('complain_type/update/','ComplainTypeController@update')->name('admin.complain_type.update');
Route::delete('complain_type/delete/{id}','ComplainTypeController@destroy')->name('admin.complain_type.delete');
//end for complain_type



//for complain
Route::get('complain_file_download/{id}', 'ComplainController@complain_file_download')->name('complain_file_download');


Route::get('complain', 'ComplainController@index')->name('admin.complain');
Route::post('complain/store', 'ComplainController@store')->name('admin.complain.store');
Route::post('complain/update/','ComplainController@update')->name('admin.complain.update');
Route::delete('complain/delete/{id}','ComplainController@destroy')->name('admin.complain.delete');
//end for complain



//for postal_receive
Route::get('postal_receive_download/{id}', 'PostalReceiveController@postal_receive_download')->name('postal_receive_download');


Route::get('postal_receive', 'PostalReceiveController@index')->name('admin.postal_receive');
Route::post('postal_receive/store', 'PostalReceiveController@store')->name('admin.postal_receive.store');
Route::post('postal_receive/update/','PostalReceiveController@update')->name('admin.postal_receive.update');
Route::delete('postal_receive/delete/{id}','PostalReceiveController@destroy')->name('admin.postal_receive.delete');
//end for postal_receive



//for postal_dispatch

Route::get('postal_dispatch_download/{id}', 'PostalDispatchController@postal_dispatch_download')->name('postal_dispatch_download');


Route::get('postal_dispatch', 'PostalDispatchController@index')->name('admin.postal_dispatch');
Route::post('postal_dispatch/store', 'PostalDispatchController@store')->name('admin.postal_dispatch.store');
Route::post('postal_dispatch/update/','PostalDispatchController@update')->name('admin.postal_dispatch.update');
Route::delete('postal_dispatch/delete/{id}','PostalDispatchController@destroy')->name('admin.postal_dispatch.delete');
//end for  postal_dispatch


//for phone_call_log
Route::get('phone_call_log', 'PhoneCallLogController@index')->name('admin.phone_call_log');
Route::post('phone_call_log/store', 'PhoneCallLogController@store')->name('admin.phone_call_log.store');
Route::post('phone_call_log/update/','PhoneCallLogController@update')->name('admin.phone_call_log.update');
Route::delete('phone_call_log/delete/{id}','PhoneCallLogController@destroy')->name('admin.phone_call_log.delete');
//end for  phone_call_log


//for visitor_book
Route::get('visitor_book_download/{id}', 'VisitorController@visitor_book_download')->name('visitor_book_download');


Route::get('visitor_book', 'VisitorController@index')->name('admin.visitor_book');
Route::post('visitor_book/store', 'VisitorController@store')->name('admin.visitor_book.store');
Route::post('visitor_book/update/','VisitorController@update')->name('admin.visitor_book.update');
Route::delete('visitor_book/delete/{id}','VisitorController@destroy')->name('admin.visitor_book.delete');
//end for  visitor_book




//for admission_enquiry

Route::post('admission_enquiry_status', 'AdmissionEnquiryController@admission_enquiry_status')->name('admission_enquiry_status');
Route::post('admission_enquiry_extra', 'AdmissionEnquiryController@admission_enquiry_extra')->name('admission_enquiry_extra');


Route::get('admission_enquiry', 'AdmissionEnquiryController@index')->name('admin.admission_enquiry');
Route::post('admission_enquiry/store', 'AdmissionEnquiryController@store')->name('admin.admission_enquiry.store');
Route::post('admission_enquiry/update/','AdmissionEnquiryController@update')->name('admin.admission_enquiry.update');
Route::delete('admission_enquiry/delete/{id}','AdmissionEnquiryController@destroy')->name('admin.admission_enquiry.delete');

Route::delete('/admission_enquiry_detail_delete/{id}', 'AdmissionEnquiryController@admission_enquiry_detail_delete')->name('admission_enquiry_detail_delete');

//end for  admission_enquiry



//for reference
Route::get('reference', 'ReferenceController@index')->name('admin.reference');
Route::post('reference/store', 'ReferenceController@store')->name('admin.reference.store');
Route::post('reference/update/','ReferenceController@update')->name('admin.reference.update');
Route::delete('reference/delete/{id}','ReferenceController@destroy')->name('admin.reference.delete');
//end reference

//for class
    Route::get('institute_class', 'SraniController@index')->name('admin.institute_class');
    Route::post('institute_class/store', 'SraniController@store')->name('admin.institute_class.store');
    Route::post('institute_class/update/','SraniController@update')->name('admin.institute_class.update');
    Route::delete('institute_class/delete/{id}','SraniController@destroy')->name('admin.institute_class.delete');
//end for class


    //for department
    Route::get('department', 'DepartmentController@index')->name('admin.department');
    Route::post('department/store', 'DepartmentController@store')->name('admin.department.store');
    Route::post('department/update/','DepartmentController@update')->name('admin.department.update');
    Route::delete('department/delete/{id}','DepartmentController@destroy')->name('admin.department.delete');
//end for department



 //for lesson

 Route::post('lesson_search_subject_wise', 'TopicController@lesson_search_subject_wise')->name('lesson_search_subject_wise');


 Route::get('lesson', 'LessonController@index')->name('admin.lesson');
 Route::post('lesson/store', 'LessonController@store')->name('admin.lesson.store');
 Route::post('lesson/update/','LessonController@update')->name('admin.lesson.update');
 Route::delete('lesson/delete/{id}','LessonController@destroy')->name('admin.lesson.delete');
//end for lesson


//for lesson_plan
Route::post('class_routine_search_teacherwise', 'LessonPlanController@class_routine_search_teacherwise')->name('class_routine_search_teacherwise');
Route::get('lesson_plan', 'LessonPlanController@index')->name('admin.lesson_plan');
Route::post('lesson_plan/store', 'LessonPlanController@store')->name('admin.lesson_plan.store');
Route::post('lesson_plan/update/','LessonPlanController@update')->name('admin.lesson_plan.update');
Route::delete('lesson_plan/delete/{id}','LessonPlanController@destroy')->name('admin.lesson_plan.delete');
//end for lesson_plan



//for topic
Route::get('topic', 'TopicController@index')->name('admin.topic');
Route::post('topic/store', 'TopicController@store')->name('admin.topic.store');
Route::post('topic/update/','TopicController@update')->name('admin.topic.update');
Route::delete('topic/delete/{id}','TopicController@destroy')->name('admin.topic.delete');
//end for topic



    //for section
    Route::post('search_class_from_exam', 'SectionController@search_class_from_exam')->name('search_class_from_exam');


    Route::get('section', 'SectionController@index')->name('admin.section');
    Route::post('section/store', 'SectionController@store')->name('admin.section.store');
    Route::post('section/update/','SectionController@update')->name('admin.section.update');
    Route::delete('section/delete/{id}','SectionController@destroy')->name('admin.section.delete');
//end for section

    //search section
Route::post('department_search', 'SectionController@department_search')->name('department_search');
Route::post('department_search_name', 'SectionController@department_search_name')->name('department_search_name');
Route::post('section_search', 'SectionController@section_search')->name('section_search');
Route::post('section_search_name', 'SectionController@section_search_name')->name('section_search_name');
Route::post('dpsection_search', 'SectionController@dpsection_search')->name('dpsection_search');
Route::post('dpsection_search_name', 'SectionController@dpsection_search_name')->name('dpsection_search_name');

Route::post('subject_search', 'SectionController@subject_search')->name('subject_search');
Route::post('subject_search_dpwise', 'SectionController@subject_search_dpwise')->name('subject_search_dpwise');
Route::post('student_search', 'SectionController@student_search')->name('student_search');
    //search section

    //for subject
    Route::get('subject', 'SubjectController@index')->name('admin.subject');
    Route::post('subject/store', 'SubjectController@store')->name('admin.subject.store');
    Route::post('subject/update/','SubjectController@update')->name('admin.subject.update');
    Route::delete('subject/delete/{id}','SubjectController@destroy')->name('admin.subject.delete');
//end for subject


     //for teacher
    Route::get('teacher', 'TeacherController@index')->name('admin.teacher');
    Route::post('teacher/store', 'TeacherController@store')->name('admin.teacher.store');
    Route::post('teacher/update/','TeacherController@update')->name('admin.teacher.update');
    Route::delete('teacher/delete/{id}','TeacherController@destroy')->name('admin.teacher.delete');
//end for teacher


//for student_category
Route::get('student_category', 'StudentCategoryController@index')->name('admin.student_category');
Route::post('student_category/store', 'StudentCategoryController@store')->name('admin.student_category.store');
Route::post('student_category/update/','StudentCategoryController@update')->name('admin.student_category.update');
Route::delete('student_category/delete/{id}','StudentCategoryController@destroy')->name('admin.student_category.delete');
//end for student_category


//for student_house
Route::get('student_house', 'StudentHouseController@index')->name('admin.student_house');
Route::post('student_house/store', 'StudentHouseController@store')->name('admin.student_house.store');
Route::post('student_house/update/','StudentHouseController@update')->name('admin.student_house.update');
Route::delete('student_house/delete/{id}','StudentHouseController@destroy')->name('admin.student_house.delete');
//end for student_house



//for student_disable_reason
Route::get('student_disable_reason', 'DisableReasonController@index')->name('admin.student_disable_reason');
Route::post('student_disable_reason/store', 'DisableReasonController@store')->name('admin.student_disable_reason.store');
Route::post('student_disable_reason/update/','DisableReasonController@update')->name('admin.student_disable_reason.update');
Route::delete('student_disable_reason/delete/{id}','DisableReasonController@destroy')->name('admin.student_disable_reason.delete');
//end for student_disable_reason

     //for student
     Route::get('student_bulk_delete_list', 'StudentController@student_bulk_delete_list')->name('student_bulk_delete_list');
     Route::delete('student_bulk_delete_post', 'StudentController@student_bulk_delete_post')->name('student_bulk_delete_post');
     Route::get('student_disable_list', 'StudentController@student_disable_list')->name('student_disable_list');
     Route::post('student_disable_post', 'StudentController@student_disable_post')->name('student_disable_post');

     Route::get('student_related_docDownload/{id}', 'StudentController@student_related_docDownload')->name('student_related_docDownload');

    Route::get('student_wise_result/{student_id}/{exam_id}', 'StudentController@student_wise_result')->name('student_wise_result');
    Route::get('student_result/{id}', 'StudentController@student_result')->name('student_result');
    Route::get('student', 'StudentController@index')->name('admin.student');
    Route::get('student/create', 'StudentController@create')->name('admin.student.create');
    Route::post('student/store', 'StudentController@store')->name('admin.student.store');
    Route::post('student/update/','StudentController@update')->name('admin.student.update');
    Route::delete('student/delete/{id}','StudentController@destroy')->name('admin.student.delete');
    Route::get('student/edit/{id}','StudentController@edit')->name('admin.student.edit');
    Route::get('student/view/{id}','StudentController@view')->name('admin.student.view');

    Route::post('student_doc/store', 'StudentController@store_doc')->name('admin.student_doc.store');
    Route::post('student_doc/update/','StudentController@update_doc')->name('admin.student_doc.update');
    Route::delete('student_doc/delete/{id}','StudentController@destroy_doc')->name('admin.student_doc.delete');
//end for student

    //for exam

    Route::post('exam_name_search', 'ExamController@exam_name_search')->name('exam_name_search');
    Route::get('exam_schedule', 'ExamController@exam_schedule')->name('exam_schedule');
    Route::post('exam_schedule_search', 'ExamController@exam_schedule_search')->name('exam_schedule_search');
    Route::post('exam_schedule_update', 'ExamController@exam_schedule_update')->name('exam_schedule_update');
    Route::delete('exam_schedule/delete/{id}','ExamController@destroy_exam_schedule')->name('admin.exam_schedule.delete');

    Route::post('add_exam_schedule', 'ExamController@add_exam_schedule')->name('add_exam_schedule');
    Route::post('add_teacher_remark', 'ExamController@add_teacher_remark')->name('add_teacher_remark');
    Route::post('student_search_examwise', 'ExamController@student_search_examwise')->name('student_search_examwise');

    Route::post('assaign_class_to_exam', 'ExamController@assaign_class_to_exam')->name('assaign_class_to_exam');
    Route::post('subject_search_for_exam', 'ExamController@subject_search_for_exam')->name('subject_search_for_exam');
    Route::post('subject_search_dpwise_for_exam', 'ExamController@subject_search_dpwise_for_exam')->name('subject_search_dpwise_for_exam');

    Route::get('exam', 'ExamController@index')->name('admin.exam');
    Route::post('exam/store', 'ExamController@store')->name('admin.exam.store');
    Route::post('exam/update/','ExamController@update')->name('admin.exam.update');
    Route::delete('exam/delete/{id}','ExamController@destroy')->name('admin.exam.delete');
//for exam


    //for exam
    Route::get('result_search', 'ResultController@result_search')->name('result_search');
    Route::get('result', 'ResultController@index')->name('admin.result');
    Route::get('result/create', 'ResultController@create')->name('admin.result.create');
    Route::get('result/edit/{id}', 'ResultController@edit')->name('admin.result.edit');
    Route::post('result/store', 'ResultController@store')->name('admin.result.store');
    Route::post('result/update/','ResultController@update')->name('admin.result.update');
    Route::delete('result/delete/{id}','ResultController@destroy')->name('admin.result.delete');
//for exam


    //for institue
    Route::get('institute_information', 'InstituteInformationController@index')->name('admin.institute_information');
    Route::post('institute_information/store', 'InstituteInformationController@store')->name('admin.institute_information.store');
    Route::post('institute_information/update/','InstituteInformationController@update')->name('admin.institute_information.update');
    Route::delete('institute_information/delete/{id}','InstituteInformationController@destroy')->name('admin.institute_information.delete');
//for institue


 //for class_teacher
 Route::get('class_teacher', 'AssignClassToTeacherController@index')->name('admin.class_teacher');
 Route::post('class_teacher/store', 'AssignClassToTeacherController@store')->name('admin.class_teacher.store');
 Route::post('class_teacher/update/','AssignClassToTeacherController@update')->name('admin.class_teacher.update');
 Route::delete('class_teacher/delete/{id}','AssignClassToTeacherController@destroy')->name('admin.class_teacher.delete');
//for class_teacher


//for class_room
Route::get('class_room', 'ClassroomController@index')->name('admin.class_room');
Route::post('class_room/store', 'ClassroomController@store')->name('admin.class_room.store');
Route::post('class_room/update/','ClassroomController@update')->name('admin.class_room.update');
Route::delete('class_room/delete/{id}','ClassroomController@destroy')->name('admin.class_room.delete');
//for class_room



//for class_scedule
Route::get('class_shedule', 'ClassSheduleController@index')->name('admin.class_shedule');
Route::post('class_shedule/store', 'ClassSheduleController@store')->name('admin.class_shedule.store');
Route::post('class_shedule/update/','ClassSheduleController@update')->name('admin.class_shedule.update');
Route::delete('class_shedule/delete/{id}','ClassSheduleController@destroy')->name('admin.class_shedule.delete');
//for class_scedule


//for class_scedule
Route::post('attendance_student_search', 'StudentAttController@attendance_student_search')->name('attendance_student_search');
Route::get('attendance_student/create', 'StudentAttController@create')->name('admin.attendance_student.create');
Route::get('attendance_student', 'StudentAttController@index')->name('admin.attendance_student');
Route::post('attendance_student/store', 'StudentAttController@store')->name('admin.attendance_student.store');
Route::post('attendance_student/update/','StudentAttController@update')->name('admin.attendance_student.update');
Route::delete('attendance_student/delete/{id}','StudentAttController@destroy')->name('admin.attendance_student.delete');
//for class_scedule

Route::post('section_wise_student_view', 'StudentAttController@section_wise_student_view')->name('section_wise_student_view');

//for class_routine

Route::post('class_routine_search_sectionwise', 'ClassRoutineController@class_routine_search_sectionwise')->name('class_routine_search_sectionwise');
Route::post('class_routine_del_up', 'ClassRoutineController@class_routine_del_up')->name('class_routine_del_up');


Route::get('teacher_routine', 'ClassRoutineController@teacher_routine')->name('admin.teacher_routine');
Route::get('class_routine', 'ClassRoutineController@index')->name('admin.class_routine');
Route::get('class_routine/create', 'ClassRoutineController@create')->name('admin.class_routine.create');
Route::post('class_routine/store', 'ClassRoutineController@store')->name('admin.class_routine.store');
Route::post('class_routine/update/','ClassRoutineController@update')->name('admin.class_routine.update');
Route::delete('class_routine/delete/{id}','ClassRoutineController@destroy')->name('admin.class_routine.delete');
//for class_room

  Route::get('export_importdata', 'Admin\DataexportController@export_importdata')->name('admin.export_importdata');
  Route::post('import_civildata', 'Admin\DataexportController@import_civildata')->name('admin.import_civildata');
  Route::post('import_civildata_bangla', 'Admin\DataexportController@import_civildata_bangla')->name('admin.import_civildata_bangla');

  //new route for district  and thana
Route::post('select_district','Admin\DistrictController@select_district')->name('admin.select_district');
Route::post('select_thana','Admin\DistrictController@select_thana')->name('admin.select_thana');
Route::post('select_postoffice','Admin\DistrictController@select_postoffice')->name('admin.select_postoffice');
Route::post('select_postcode','Admin\DistrictController@select_postcode')->name('admin.select_postcode');

Route::post('select_district_bangla','Admin\DistrictController@select_district_bangla')->name('admin.select_district_bangla');
Route::post('select_thana_bangla','Admin\DistrictController@select_thana_bangla')->name('admin.select_thana_bangla');



Route::post('permanent_select_district','Admin\DistrictController@permanent_select_district')->name('admin.permanent_select_district');
Route::post('permanent_select_thana','Admin\DistrictController@permanent_select_thana')->name('admin.permanent_select_thana');
Route::post('permanent_select_postoffice','Admin\DistrictController@permanent_select_postoffice')->name('admin.permanent_select_postoffice');
Route::post('permanent_select_postcode','Admin\DistrictController@permanent_select_postcode')->name('admin.permanent_select_postcode');

Route::post('permanent_select_district_bangla','Admin\DistrictController@permanent_select_district_bangla')->name('admin.permanent_select_district_bangla');


Route::post('permanent_select_thana_bangla','Admin\DistrictController@permanent_select_thana_bangla')->name('admin.permanent_select_thana_bangla');

  //new route for district and thana

   //dasboard route
Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');



	//roles create route

  Route::get('roles', 'Admin\RolesController@index')->name('admin.roles');
    Route::get('roles/create','Admin\RolesController@create')->name('admin.roles.create');
    Route::post('roles/store', 'Admin\RolesController@store')->name('admin.roles.store');
    Route::get('roles/edit/{id}','Admin\RolesController@edit')->name('admin.roles.edit');
    Route::post('roles/update/','Admin\RolesController@update')->name('admin.roles.update');

    Route::delete('roles/delete/{id}','Admin\RolesController@destroy')->name('admin.roles.delete');



    //users create route

  Route::get('user', 'Admin\UsersController@index')->name('admin.users');
    Route::get('user/create','Admin\UsersController@create')->name('admin.users.create');
    Route::post('user/store', 'Admin\UsersController@store')->name('admin.users.store');
    Route::get('user/edit/{id}','Admin\UsersController@edit')->name('admin.users.edit');
    Route::post('user/update/','Admin\UsersController@update')->name('admin.users.update');

    Route::post('user/update_admin/','Admin\UsersController@update_admin')->name('admin.users.update_admin');

    Route::delete('user/delete/{id}','Admin\UsersController@destroy')->name('admin.users.delete');

    Route::get('/user/view/{id}','Admin\UsersController@view')->name('admin.users.view');






     //permission create route

  Route::get('permission', 'Admin\PermissionController@index')->name('admin.permission');
    Route::get('permission/create','Admin\PermissionController@create')->name('admin.permission.create');
    Route::post('permission/store', 'Admin\PermissionController@store')->name('admin.permission.store');
    Route::get('permission/edit/{id}','Admin\PermissionController@edit')->name('admin.permission.edit');
    Route::get('permission/view/{id}','Admin\PermissionController@view')->name('admin.permission.view');
    Route::post('permission/update/','Admin\PermissionController@update')->name('admin.permission.update');

    Route::delete('permission/delete/{id}','Admin\PermissionController@destroy')->name('admin.permission.delete');


    //profile route


    Route::get('profile', 'Admin\ProfileController@index')->name('admin.profile');
    Route::get('profile/edit/{id}', 'Admin\ProfileController@edit')->name('admin.profile.edit');
    Route::put('profile/update/{id}', 'Admin\ProfileController@update')->name('admin.profile.update');

    Route::post('password/update','Admin\ProfileController@updatePassword')->name('admin.password.update');


    Route::get('settings','Admin\ProfileController@setting')->name('admin.settings');
    Route::get('profile_view','Admin\ProfileController@profile_view')->name('admin.profile_view');





    // Logout Routes
    Route::post('/logout/submit', 'Admin\Auth\LoginController@logout')->name('admin.logout.submit');

    // Forget Password Routes
    Route::get('/password/reset', 'Admin\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset/submit', 'Admin\Auth\ForgetPasswordController@reset')->name('admin.password.update12');

});
