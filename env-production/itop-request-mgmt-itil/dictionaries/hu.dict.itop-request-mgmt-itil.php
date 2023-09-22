<?php
/*
 * @copyright   Copyright (C) 2010-2021 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
Dict::Add('HU HU', 'Hungarian', 'Magyar', array(
	'Menu:RequestManagement' => 'Helpdesk~~',
	'Menu:RequestManagement+' => 'Helpdesk~~',
	'Menu:RequestManagementProvider' => 'Helpdesk provider~~',
	'Menu:RequestManagementProvider+' => 'Helpdesk provider~~',
	'Menu:UserRequest:Provider' => 'Open request transfered to provider~~',
	'Menu:UserRequest:Provider+' => 'Open request transfered to provider~~',
	'Menu:UserRequest:Overview' => 'Overview~~',
	'Menu:UserRequest:Overview+' => 'Overview~~',
	'Menu:NewUserRequest' => 'New user request~~',
	'Menu:NewUserRequest+' => 'Create a new user request ticket~~',
	'Menu:SearchUserRequests' => 'Search for user requests~~',
	'Menu:SearchUserRequests+' => 'Search for user request tickets~~',
	'Menu:UserRequest:Shortcuts' => 'Shortcuts~~',
	'Menu:UserRequest:Shortcuts+' => '~~',
	'Menu:UserRequest:MyRequests' => 'Requests assigned to me~~',
	'Menu:UserRequest:MyRequests+' => 'Requests assigned to me (as Agent)~~',
	'Menu:UserRequest:MySupportRequests' => 'My support calls~~',
	'Menu:UserRequest:MySupportRequests+' => 'My support calls~~',
	'Menu:UserRequest:EscalatedRequests' => 'Hot Requests~~',
	'Menu:UserRequest:EscalatedRequests+' => 'Hot Requests~~',
	'Menu:UserRequest:OpenRequests' => 'All open requests~~',
	'Menu:UserRequest:OpenRequests+' => 'All open requests~~',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Requests assigned to me~~',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Last 14 days request per type~~',
	'UI-RequestManagementOverview-Last-14-days' => 'Last 14 days number of requests~~',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Open requests by status~~',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Open requests by agent~~',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Open requests by type~~',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Open requests by customer~~',
	'Class:UserRequest:KnownErrorList' => 'Known Errors~~',
));

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: UserRequest
//

Dict::Add('HU HU', 'Hungarian', 'Magyar', array(
	'Class:UserRequest' => 'User Request~~',
	'Class:UserRequest+' => '~~',
	'Class:UserRequest/Attribute:status' => 'Status~~',
	'Class:UserRequest/Attribute:status+' => '~~',
	'Class:UserRequest/Attribute:status/Value:new' => 'New~~',
	'Class:UserRequest/Attribute:status/Value:new+' => '~~',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'Escalated TTO~~',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '~~',
	'Class:UserRequest/Attribute:status/Value:assigned' => 'Assigned~~',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '~~',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'Escalated TTR~~',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '~~',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => 'Waiting for approval~~',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '~~',
	'Class:UserRequest/Attribute:status/Value:approved' => 'Approved~~',
	'Class:UserRequest/Attribute:status/Value:approved+' => '~~',
	'Class:UserRequest/Attribute:status/Value:rejected' => 'Rejected~~',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '~~',
	'Class:UserRequest/Attribute:status/Value:pending' => 'Pending~~',
	'Class:UserRequest/Attribute:status/Value:pending+' => '~~',
	'Class:UserRequest/Attribute:status/Value:resolved' => 'Resolved~~',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '~~',
	'Class:UserRequest/Attribute:status/Value:closed' => 'Closed~~',
	'Class:UserRequest/Attribute:status/Value:closed+' => '~~',
	'Class:UserRequest/Attribute:request_type' => 'Request Type~~',
	'Class:UserRequest/Attribute:request_type+' => '~~',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'Service request~~',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => 'Service request~~',
	'Class:UserRequest/Attribute:impact' => 'Impact~~',
	'Class:UserRequest/Attribute:impact+' => '~~',
	'Class:UserRequest/Attribute:impact/Value:1' => 'A department~~',
	'Class:UserRequest/Attribute:impact/Value:1+' => '~~',
	'Class:UserRequest/Attribute:impact/Value:2' => 'A service~~',
	'Class:UserRequest/Attribute:impact/Value:2+' => '~~',
	'Class:UserRequest/Attribute:impact/Value:3' => 'A person~~',
	'Class:UserRequest/Attribute:impact/Value:3+' => '~~',
	'Class:UserRequest/Attribute:priority' => 'Priority~~',
	'Class:UserRequest/Attribute:priority+' => '~~',
	'Class:UserRequest/Attribute:priority/Value:1' => 'critical~~',
	'Class:UserRequest/Attribute:priority/Value:1+' => 'critical~~',
	'Class:UserRequest/Attribute:priority/Value:2' => 'high~~',
	'Class:UserRequest/Attribute:priority/Value:2+' => 'high~~',
	'Class:UserRequest/Attribute:priority/Value:3' => 'medium~~',
	'Class:UserRequest/Attribute:priority/Value:3+' => 'medium~~',
	'Class:UserRequest/Attribute:priority/Value:4' => 'low~~',
	'Class:UserRequest/Attribute:priority/Value:4+' => 'low~~',
	'Class:UserRequest/Attribute:urgency' => 'Urgency~~',
	'Class:UserRequest/Attribute:urgency+' => '~~',
	'Class:UserRequest/Attribute:urgency/Value:1' => 'critical~~',
	'Class:UserRequest/Attribute:urgency/Value:1+' => 'critical~~',
	'Class:UserRequest/Attribute:urgency/Value:2' => 'high~~',
	'Class:UserRequest/Attribute:urgency/Value:2+' => 'high~~',
	'Class:UserRequest/Attribute:urgency/Value:3' => 'medium~~',
	'Class:UserRequest/Attribute:urgency/Value:3+' => 'medium~~',
	'Class:UserRequest/Attribute:urgency/Value:4' => 'low~~',
	'Class:UserRequest/Attribute:urgency/Value:4+' => 'low~~',
	// ^ Start Here customization des courrier
	
	// add attribute type person vente -->
	'Class:UserRequest/Attribute:type_person' => 'type person~~',
	'Class:UserRequest/Attribute:type_person+' => '~~',
	'Class:UserRequest/Attribute:type_personne/Value:physical_person' => 'Physical person~~',
	'Class:UserRequest/Attribute:type_personne/Value:physical_person+' => '~~',
	'Class:UserRequest/Attribute:type_personne/Value:moral_person' => 'Moral person~~',
	'Class:UserRequest/Attribute:type_personne/Value:moral_person+' => '~~',
   
	// add attribute numero first invoice vente -->
	'Class:UserRequest/Attribute:numero_start_invoice_vente' => 'Sales invoice starting number~~',
	'Class:UserRequest/Attribute:numero_start_invoice_vente+' => '~~',

	//add attribute numero last invoice vente -->
	'Class:UserRequest/Attribute:numero_end_invoice_vente' => 'Sales invoice finishing number~~',
	'Class:UserRequest/Attribute:numero_end_invoice_vente+' => '~~',
	
	// add attribute numero last month vente -->
	'Class:UserRequest/Attribute:numero_last_month_invoice_vente' => 'Sales invoice last month number~~',
	'Class:UserRequest/Attribute:numero_last_month_invoice_vente+' => '~~',
	
	//add attribute chiffre d'affaires vente -->
	'Class:UserRequest/Attribute:amount_turnover_vente' => 'Amount of the turnover~~',
	'Class:UserRequest/Attribute:amount_turnover_vente+' => '~~',
	
	// add attribute bordereau bancaire vente -->
	'Class:UserRequest/Attribute:bank_slip_vente' => 'Bank sales slip~~',
	'Class:UserRequest/Attribute:bank_slip_vente+' => '~~',
	'Class:UserRequest/Attribute:bank_slip_vente/Value:yes' =>'Yes~~',
	'Class:UserRequest/Attribute:bank_slip_vente/Value:yes+' => '~~',
	'Class:UserRequest/Attribute:bank_slip_vente/Value:no' => 'No~~',
	'Class:UserRequest/Attribute:bank_slip_vente/Value:no+' => '~~',
	
	// add attribute avis d'opérations vente -->
	'Class:UserRequest/Attribute:transaction_notice_vente' => 'Sale transaction notice~~',
	'Class:UserRequest/Attribute:transaction_notice_vente+' => '~~',
	'Class:UserRequest/Attribute:transaction_notice_vente/Value:yes' => 'Yes~~',
	'Class:UserRequest/Attribute:transaction_notice_vente/Value:yes+' => '~~',
	'Class:UserRequest/Attribute:transaction_notice_vente/Value:no' => 'No~~',
	'Class:UserRequest/Attribute:transaction_notice_vente/Value:no+' => '~~',
	
	// add attribute certificats de RS clients vente -->
	'Class:UserRequest/Attribute:sr_certificates_vente' => 'customer RS certificates~~',
	'Class:UserRequest/Attribute:sr_certificates_vente+' => '~~',
	'Class:UserRequest/Attribute:sr_certificates_vente/Value:yes' => 'Yes~~',
	'Class:UserRequest/Attribute:sr_certificates_vente/Value:yes+' => '~~',
	'Class:UserRequest/Attribute:sr_certificates_vente/Value:no' => 'No~~',
	'Class:UserRequest/Attribute:sr_certificates_vente/Value:no+' => '~~',
	
	// add attribute facture achat -->
	'Class:UserRequest/Attribute:invoice_achat' => 'Purchase without any mention of payment~~',
	'Class:UserRequest/Attribute:invoice_achat+' => '~~',
	'Class:UserRequest/Attribute:invoice_achat/Value:with_stamp' => 'With stamp~~',
	'Class:UserRequest/Attribute:invoice_achat/Value:with_stamp+' => '~~',
	'Class:UserRequest/Attribute:invoice_achat/Value:payment_choice' => 'Payment choice~~',
	'Class:UserRequest/Attribute:invoice_achat/Value:payment_choice+' => '~~',

	// add attribute statement and documents facture banque -->
	'Class:UserRequest/Attribute:statements_and_documents_banque' => 'Bank statements and purchasing documents~~',
	'Class:UserRequest/Attribute:statements_and_documents_banque+' => '~~',
	'Class:UserRequest/Attribute:statements_and_documents_banque/Value:yes' => 'Yes~~',
	'Class:UserRequest/Attribute:statements_and_documents_banque/Value:yes+' => '~~',
	'Class:UserRequest/Attribute:statements_and_documents_banque/Value:no' => 'No~~',
	'Class:UserRequest/Attribute:statements_and_documents_banque/Value:no+' => '~~',

	// add attribute comment on reconciliation statement facture banque -->
	'Class:UserRequest/Attribute:comment_on_reconciliation_statement_banque' => 'comment on the reconciliation statement from the previous month~~',
	'Class:UserRequest/Attribute:comment_on_reconciliation_statement_banque+' => '~~',
	
	// add attribute exceptional order courrier (Visa) -->
	'Class:UserRequest/Attribute:exceptional_order_courrier' => 'exceptional order courrier (Visa)~~',
	'Class:UserRequest/Attribute:exceptional_order_courrier+' => '~~',
	'Class:UserRequest/Attribute:exceptional_order_courrier/Value:yes' => 'Yes~~',
	'Class:UserRequest/Attribute:exceptional_order_courrier/Value:yes+' => '~~',
	'Class:UserRequest/Attribute:exceptional_order_courrier/Value:no' => 'No~~',
	'Class:UserRequest/Attribute:exceptional_order_courrier/Value:no+' => '~~',

	// add attribute month courrier -->
	'Class:UserRequest/Attribute:month_courrier' => 'Month of courrier~~',
	'Class:UserRequest/Attribute:month_courrier+' => '~~',
	'Class:UserRequest/Attribute:month_courrier/Value:1' => 'January~~',
	'Class:UserRequest/Attribute:month_courrier/Value:1+' => '~~',
	'Class:UserRequest/Attribute:month_courrier/Value:2' => 'February~~',
	'Class:UserRequest/Attribute:month_courrier/Value:2+' => '~~',
	'Class:UserRequest/Attribute:month_courrier/Value:3' => 'March~~',
	'Class:UserRequest/Attribute:month_courrier/Value:3+' => '~~',
	'Class:UserRequest/Attribute:month_courrier/Value:4' => 'April~~',
	'Class:UserRequest/Attribute:month_courrier/Value:4+' => '~~',
	'Class:UserRequest/Attribute:month_courrier/Value:5' => 'May~~',
	'Class:UserRequest/Attribute:month_courrier/Value:5+' => '~~',
	'Class:UserRequest/Attribute:month_courrier/Value:6' => 'June~~',
	'Class:UserRequest/Attribute:month_courrier/Value:6+' => '~~',
	'Class:UserRequest/Attribute:month_courrier/Value:7' => 'July~~',
	'Class:UserRequest/Attribute:month_courrier/Value:7+' => '~~',
	'Class:UserRequest/Attribute:month_courrier/Value:8' => 'August~~',
	'Class:UserRequest/Attribute:month_courrier/Value:8+' => '~~',
	'Class:UserRequest/Attribute:month_courrier/Value:9' => 'September~~',
	'Class:UserRequest/Attribute:month_courrier/Value:9+' => '~~',
	'Class:UserRequest/Attribute:month_courrier/Value:10' => 'October~~',
	'Class:UserRequest/Attribute:month_courrier/Value:10+' => '~~',
	'Class:UserRequest/Attribute:month_courrier/Value:11' => 'November~~',
	'Class:UserRequest/Attribute:month_courrier/Value:11+' => '~~',
	'Class:UserRequest/Attribute:month_courrier/Value:12' => 'December~~',
	'Class:UserRequest/Attribute:month_courrier/Value:12+' => '~~',

	// add attribute to block client URL -->
	'Class:UserRequest/Attribute:block_client_ur' => 'Block client if :~~',
	'Class:UserRequest/Attribute:block_client_ur+' => '~~',
	'Class:UserRequest/Attribute:block_client_ur/Value:1' => 'He didn\'t make the payment~~',
	'Class:UserRequest/Attribute:block_client_ur/Value:1+' => '~~',
	'Class:UserRequest/Attribute:block_client_ur/Value:2' => 'He did pay his payments~~',
	'Class:UserRequest/Attribute:block_client_ur/Value:2+' => '~~',
	
	// ^ End Here customization des courrier -->
	'Class:UserRequest/Attribute:origin' => 'Origin~~',
	'Class:UserRequest/Attribute:origin+' => '~~',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'email~~',
	'Class:UserRequest/Attribute:origin/Value:mail+' => 'email~~',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'monitoring~~',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => 'monitoring~~',
	'Class:UserRequest/Attribute:origin/Value:phone' => 'phone~~',
	'Class:UserRequest/Attribute:origin/Value:phone+' => 'phone~~',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'portal~~',
	'Class:UserRequest/Attribute:origin/Value:portal+' => 'portal~~',
	'Class:UserRequest/Attribute:approver_id' => 'Approver~~',
	'Class:UserRequest/Attribute:approver_id+' => '~~',
	'Class:UserRequest/Attribute:approver_email' => 'Approver Email~~',
	'Class:UserRequest/Attribute:approver_email+' => '~~',
	'Class:UserRequest/Attribute:service_id' => 'Service~~',
	'Class:UserRequest/Attribute:service_id+' => '~~',
	'Class:UserRequest/Attribute:service_name' => 'Service name~~',
	'Class:UserRequest/Attribute:service_name+' => '~~',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'Service subcategory~~',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '~~',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'Service subcategory name~~',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '~~',
	'Class:UserRequest/Attribute:escalation_flag' => 'Hot Flag~~',
	'Class:UserRequest/Attribute:escalation_flag+' => '~~',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'No~~',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => 'No~~',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'Yes~~',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => 'Yes~~',
	'Class:UserRequest/Attribute:escalation_reason' => 'Hot reason~~',
	'Class:UserRequest/Attribute:escalation_reason+' => '~~',
	'Class:UserRequest/Attribute:assignment_date' => 'Assignment date~~',
	'Class:UserRequest/Attribute:assignment_date+' => '~~',
	'Class:UserRequest/Attribute:resolution_date' => 'Resolution date~~',
	'Class:UserRequest/Attribute:resolution_date+' => '~~',
	'Class:UserRequest/Attribute:last_pending_date' => 'Last pending date~~',
	'Class:UserRequest/Attribute:last_pending_date+' => '~~',
	'Class:UserRequest/Attribute:cumulatedpending' => 'cumulatedpending~~',
	'Class:UserRequest/Attribute:cumulatedpending+' => '~~',
	'Class:UserRequest/Attribute:tto' => 'TTO~~',
	'Class:UserRequest/Attribute:tto+' => '~~',
	'Class:UserRequest/Attribute:ttr' => 'TTR~~',
	'Class:UserRequest/Attribute:ttr+' => '~~',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'TTO Deadline~~',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '~~',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'SLA tto passed~~',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '~~',
	'Class:UserRequest/Attribute:sla_tto_over' => 'SLA tto over~~',
	'Class:UserRequest/Attribute:sla_tto_over+' => '~~',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'TTR Deadline~~',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '~~',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'SLA ttr passed~~',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '~~',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'SLA ttr over~~',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '~~',
	'Class:UserRequest/Attribute:time_spent' => 'Resolution delay~~',
	'Class:UserRequest/Attribute:time_spent+' => '~~',
	'Class:UserRequest/Attribute:resolution_code' => 'Resolution code~~',
	'Class:UserRequest/Attribute:resolution_code+' => '~~',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => 'assistance~~',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => 'assistance~~',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'bug fixed~~',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug fixed~~',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'hardware repair~~',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware repair~~',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'other~~',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => 'other~~',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'software patch~~',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => 'software patch~~',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'system update~~',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => 'system update~~',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => 'training~~',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => 'training~~',
	'Class:UserRequest/Attribute:solution' => 'Solution~~',
	'Class:UserRequest/Attribute:solution+' => '~~',
	'Class:UserRequest/Attribute:pending_reason' => 'Pending reason~~',
	'Class:UserRequest/Attribute:pending_reason+' => '~~',
	'Class:UserRequest/Attribute:parent_request_id' => 'Parent request~~',
	'Class:UserRequest/Attribute:parent_request_id+' => '~~',
	'Class:UserRequest/Attribute:parent_incident_id' => 'Parent incident~~',
	'Class:UserRequest/Attribute:parent_incident_id+' => '~~',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Ref request~~',
	'Class:UserRequest/Attribute:parent_request_ref+' => '~~',
	'Class:UserRequest/Attribute:parent_problem_id' => 'Parent problem~~',
	'Class:UserRequest/Attribute:parent_problem_id+' => '~~',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Ref problem~~',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '~~',
	'Class:UserRequest/Attribute:parent_change_id' => 'Parent change~~',
	'Class:UserRequest/Attribute:parent_change_id+' => '~~',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Ref change~~',
	'Class:UserRequest/Attribute:parent_change_ref+' => '~~',
	'Class:UserRequest/Attribute:parent_incident_ref' => 'Parent incident ref~~',
	'Class:UserRequest/Attribute:parent_incident_ref+' => '~~',
	'Class:UserRequest/Attribute:related_request_list' => 'Child Requests~~',
	'Class:UserRequest/Attribute:related_request_list+' => 'All the requests that are linked to this parent request~~',
	'Class:UserRequest/Attribute:public_log' => 'Public log~~',
	'Class:UserRequest/Attribute:public_log+' => '~~',
	'Class:UserRequest/Attribute:user_satisfaction' => 'User satisfaction~~',
	'Class:UserRequest/Attribute:user_satisfaction+' => '~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => 'Very satisfied~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => 'Very satisfied~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => 'Fairly statisfied~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => 'Fairly statisfied~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => 'Rather Dissatified~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => 'Rather Dissatified~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => 'Very Dissatisfied~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => 'Very Dissatisfied~~',
	'Class:UserRequest/Attribute:user_comment' => 'User comment~~',
	'Class:UserRequest/Attribute:user_comment+' => '~~',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname~~',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '~~',
	'Class:UserRequest/Stimulus:ev_assign' => 'Assign~~',
	'Class:UserRequest/Stimulus:ev_assign+' => '~~',
	'Class:UserRequest/Stimulus:ev_reassign' => 'Re-assign~~',
	'Class:UserRequest/Stimulus:ev_reassign+' => '~~',
	'Class:UserRequest/Stimulus:ev_approve' => 'Approve~~',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => 'Reject~~',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
	'Class:UserRequest/Stimulus:ev_pending' => 'Pending~~',
	'Class:UserRequest/Stimulus:ev_pending+' => '~~',
	'Class:UserRequest/Stimulus:ev_timeout' => 'Timeout~~',
	'Class:UserRequest/Stimulus:ev_timeout+' => '~~',
	'Class:UserRequest/Stimulus:ev_autoresolve' => 'Automatic resolve~~',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '~~',
	'Class:UserRequest/Stimulus:ev_autoclose' => 'Automatic close~~',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '~~',
	'Class:UserRequest/Stimulus:ev_resolve' => 'Mark as resolved~~',
	'Class:UserRequest/Stimulus:ev_resolve+' => '~~',
	'Class:UserRequest/Stimulus:ev_close' => 'Close this request~~',
	'Class:UserRequest/Stimulus:ev_close+' => '~~',
	'Class:UserRequest/Stimulus:ev_reopen' => 'Re-open~~',
	'Class:UserRequest/Stimulus:ev_reopen+' => '~~',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Wait for approval~~',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '~~',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'Cannot assign the Parent request to the request itself~~',

	'Class:UserRequest/Method:ResolveChildTickets' => 'ResolveChildTickets~~',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info~~',
));


Dict::Add('HU HU', 'Hungarian', 'Magyar', array(
	'Organization:Overview:UserRequests' => 'User Requests from this organization~~',
	'Organization:Overview:MyUserRequests' => 'My User Requests for this organization~~',
	'Organization:Overview:Tickets' => 'Tickets for this organization~~',
));
