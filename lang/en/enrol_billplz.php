<?php
/**
 * Strings for component 'enrol_billplz', language 'en'.
 *
 * @package    enrol_billplz
 * @copyright  2018 Wan @ Billplz
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['assignrole'] = 'Assign role';
$string['api_key'] = 'API Secret Key';
$string['api_key_desc'] = 'The API Key of your Billplz account. You can get it on your Billplz Account Settings';
$string['x_signature'] = 'X Signature Key';
$string['x_signature_desc'] = 'The X Signature key of your Billplz account. You can get it on your Billplz Account Settings';
$string['collection_id'] = 'Collection ID';
$string['collection_id_desc'] = 'The Collection ID of your Billplz account. You can get it on your Billing section on your Billplz account';
$string['cost'] = 'Enrol cost';
$string['costerror'] = 'The enrolment cost is not numeric';
$string['currency'] = 'Currency';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during Billplz enrolments';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['errdisabled'] = 'The Billplz enrolment plugin is disabled and does not handle payment notifications.';
$string['erripninvalid'] = 'Instant payment notification has not been verified by Billplz.';
$string['errbillplzconnect'] = 'Could not connect to {$a->url} to verify the instant payment notification: {$a->result}';
$string['expiredaction'] = 'Enrolment expiry action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['messageprovider:billplz_enrolment'] = 'Billplz enrolment messages';
$string['nocost'] = 'There is no cost associated with enrolling in this course!';
$string['billplz:config'] = 'Configure Billplz enrol instances';
$string['billplz:manage'] = 'Manage enrolled users';
$string['billplz:unenrol'] = 'Unenrol users from course';
$string['billplz:unenrolself'] = 'Unenrol self from the course';
$string['billplzaccepted'] = 'Billplz payments accepted';
$string['pluginname'] = 'Billplz';
$string['pluginname_desc'] = 'The Billplz module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['privacy:metadata:enrol_billplz:enrol_billplz'] = 'Information about the Billplz transactions for Billplz enrolments.';
$string['privacy:metadata:enrol_billplz:enrol_billplz:api_key'] = 'Merchant API Secret Key.';
$string['privacy:metadata:enrol_billplz:enrol_billplz:courseid'] = 'The ID of the course that is sold.';
$string['privacy:metadata:enrol_billplz:enrol_billplz:instanceid'] = 'The ID of the enrolment instance in the course.';
$string['privacy:metadata:enrol_billplz:enrol_billplz:item_name'] = 'The full name of the course that its enrolment has been sold.';
$string['privacy:metadata:enrol_billplz:enrol_billplz:memo'] = 'A note that was entered by the buyer in billplz website payments note field.';
$string['privacy:metadata:enrol_billplz:enrol_billplz:option_selection1_x'] = 'Full name of the buyer.';
$string['privacy:metadata:enrol_billplz:enrol_billplz:parent_txn_id'] = 'In the case of a refund, reversal, or canceled reversal, this would be the transaction ID of the original transaction.';
$string['privacy:metadata:enrol_billplz:enrol_billplz:payment_status'] = 'The status of the payment.';
$string['privacy:metadata:enrol_billplz:enrol_billplz:payment_type'] = 'Holds whether the payment was funded with an eCheck (echeck), or was funded with billplz balance, credit card, or instant transfer (instant).';
$string['privacy:metadata:enrol_billplz:enrol_billplz:pending_reason'] = 'The reason why payment status is pending (if that is).';
$string['privacy:metadata:enrol_billplz:enrol_billplz:reason_code'] = 'The reason why payment status is Reversed, Refunded, Canceled_Reversal, or Denied (if the status is one of them).';
$string['privacy:metadata:enrol_billplz:enrol_billplz:receiver_email'] = 'Primary email address of the payment recipient (that is, the merchant).';
$string['privacy:metadata:enrol_billplz:enrol_billplz:receiver_id'] = 'Unique billplz account ID of the payment recipient (i.e., the merchant).';
$string['privacy:metadata:enrol_billplz:enrol_billplz:tax'] = 'Amount of tax charged on payment.';
$string['privacy:metadata:enrol_billplz:enrol_billplz:timeupdated'] = 'The time of Moodle being notified by billplz about the payment.';
$string['privacy:metadata:enrol_billplz:enrol_billplz:txn_id'] = 'The merchant\'s original transaction identification number for the payment from the buyer, against which the case was registered.';
$string['privacy:metadata:enrol_billplz:enrol_billplz:userid'] = 'The ID of the user who bought the course enrolment.';
$string['privacy:metadata:enrol_billplz:billplz_com'] = 'The billplz enrolment plugin transmits user data from Moodle to the billplz website.';
$string['privacy:metadata:enrol_billplz:billplz_com:address'] = 'Address of the user who is buying the course.';
$string['privacy:metadata:enrol_billplz:billplz_com:city'] = 'City of the user who is buying the course.';
$string['privacy:metadata:enrol_billplz:billplz_com:country'] = 'Country of the user who is buying the course.';
$string['privacy:metadata:enrol_billplz:billplz_com:custom'] = 'A hyphen-separated string that contains ID of the user (the buyer), ID of the course, ID of the enrolment instance.';
$string['privacy:metadata:enrol_billplz:billplz_com:email'] = 'Email address of the user who is buying the course.';
$string['privacy:metadata:enrol_billplz:billplz_com:first_name'] = 'First name of the user who is buying the course.';
$string['privacy:metadata:enrol_billplz:billplz_com:last_name'] = 'Last name of the user who is buying the course.';
$string['privacy:metadata:enrol_billplz:billplz_com:os0'] = 'Full name of the buyer.';
$string['processexpirationstask'] = 'billplz enrolment send expiry notifications task';
$string['sendpaymentbutton'] = 'Send payment via Billplz';
$string['status'] = 'Allow billplz enrolments';
$string['status_desc'] = 'Allow users to use billplz to enrol into a course by default.';
$string['transactions'] = 'billplz transactions';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';