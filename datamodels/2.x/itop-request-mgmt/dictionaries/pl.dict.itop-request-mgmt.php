<?php
/*
 * @copyright   Copyright (C) 2010-2021 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
Dict::Add('PL PL', 'Polish', 'Polski', array(
	'Menu:RequestManagement' => 'Pomoc techniczna',
	'Menu:RequestManagement+' => 'Pomoc techniczna',
	'Menu:RequestManagementProvider' => 'Dostawca pomocy technicznej',
	'Menu:RequestManagementProvider+' => 'Dostawca pomocy technicznej',
	'Menu:UserRequest:Provider' => 'Otwarte zgłoszenia przekazane dostawcy',
	'Menu:UserRequest:Provider+' => 'Otwarte zgłoszenia przekazane dostawcy',
	'Menu:UserRequest:Overview' => 'Przegląd',
	'Menu:UserRequest:Overview+' => 'Przegląd',
	'Menu:NewUserRequest' => 'Nowe zgłoszenie użytkownika',
	'Menu:NewUserRequest+' => 'Utwórz nowe zgłoszenie użytkownika',
	'Menu:SearchUserRequests' => 'Szukaj zgłoszeń użytkowników',
	'Menu:SearchUserRequests+' => 'Szukaj zgłoszeń użytkowników',
	'Menu:UserRequest:Shortcuts' => 'Skróty',
	'Menu:UserRequest:Shortcuts+' => '',
	'Menu:UserRequest:MyRequests' => 'Zgłoszenia przypisane do mnie',
	'Menu:UserRequest:MyRequests+' => 'Zgłoszenia przypisane do mnie (jako Agent)',
	'Menu:UserRequest:MySupportRequests' => 'Moje telefony wsparcia',
	'Menu:UserRequest:MySupportRequests+' => 'Moje telefony wsparcia',
	'Menu:UserRequest:EscalatedRequests' => 'Gorące prośby',
	'Menu:UserRequest:EscalatedRequests+' => 'Gorące prośby',
	'Menu:UserRequest:OpenRequests' => 'Wszystkie otwarte zgłoszenia',
	'Menu:UserRequest:OpenRequests+' => 'Wszystkie otwarte zgłoszenia',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Zgłoszenia przypisane do mnie',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Zgłoszenia z ostatnich 14 dni (według typu)',
	'UI-RequestManagementOverview-Last-14-days' => 'Zgłoszenia z ostatnich 14 dni (według dni)',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Otwarte zgłoszenia według statusu',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Otwarte zgłoszenia według agenta',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Otwarte zgłoszenia według typu',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Otwarte zgłoszenia według organizacji',
	'Class:UserRequest:KnownErrorList' => 'Znane błędy',
	'Menu:UserRequest:MyWorkOrders' => 'Zlecenia pracy przydzielone do mnie',
	'Menu:UserRequest:MyWorkOrders+' => 'Wszystkie zlecenia pracy przydzielone do mnie',
	'Class:Problem:KnownProblemList' => 'Znane problemy',
	'Tickets:Related:OpenIncidents' => 'Otwarte incydenty',
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

Dict::Add('PL PL', 'Polish', 'Polski', array(
	'Class:UserRequest' => 'Zgłoszenie użytkownika',
	'Class:UserRequest+' => '',
	'Class:UserRequest/Attribute:status' => 'Status',
	'Class:UserRequest/Attribute:status+' => '',
	'Class:UserRequest/Attribute:status/Value:new' => 'Nowe',
	'Class:UserRequest/Attribute:status/Value:new+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'Pilny czas podjęcia',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:UserRequest/Attribute:status/Value:assigned' => 'Przypisane',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'Pilny czas rozwiązania',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => 'Oczekujący',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:UserRequest/Attribute:status/Value:approved' => 'Zatwierdzone',
	'Class:UserRequest/Attribute:status/Value:approved+' => '',
	'Class:UserRequest/Attribute:status/Value:rejected' => 'Odrzucone',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '',
	'Class:UserRequest/Attribute:status/Value:pending' => 'Trwające',
	'Class:UserRequest/Attribute:status/Value:pending+' => '',
	'Class:UserRequest/Attribute:status/Value:resolved' => 'Rozwiązane',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '',
	'Class:UserRequest/Attribute:status/Value:closed' => 'Zamknięte',
	'Class:UserRequest/Attribute:status/Value:closed+' => '',
	'Class:UserRequest/Attribute:request_type' => 'Typ zgłoszenia',
	'Class:UserRequest/Attribute:request_type+' => '',
	'Class:UserRequest/Attribute:request_type/Value:incident' => 'Incydent',
	'Class:UserRequest/Attribute:request_type/Value:incident+' => 'Incydent',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'Zgłoszenie serwisowe',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => 'Zgłoszenie serwisowe',
	'Class:UserRequest/Attribute:impact' => 'Wpływ',
	'Class:UserRequest/Attribute:impact+' => '',
	'Class:UserRequest/Attribute:impact/Value:1' => 'Wydział',
	'Class:UserRequest/Attribute:impact/Value:1+' => '',
	'Class:UserRequest/Attribute:impact/Value:2' => 'Usługa',
	'Class:UserRequest/Attribute:impact/Value:2+' => '',
	'Class:UserRequest/Attribute:impact/Value:3' => 'Osoba',
	'Class:UserRequest/Attribute:impact/Value:3+' => '',
	'Class:UserRequest/Attribute:priority' => 'Priorytet',
	'Class:UserRequest/Attribute:priority+' => '',
	'Class:UserRequest/Attribute:priority/Value:1' => 'krytyczny',
	'Class:UserRequest/Attribute:priority/Value:1+' => 'krytyczny',
	'Class:UserRequest/Attribute:priority/Value:2' => 'wysoki',
	'Class:UserRequest/Attribute:priority/Value:2+' => 'wysoki',
	'Class:UserRequest/Attribute:priority/Value:3' => 'średni',
	'Class:UserRequest/Attribute:priority/Value:3+' => 'średni',
	'Class:UserRequest/Attribute:priority/Value:4' => 'niski',
	'Class:UserRequest/Attribute:priority/Value:4+' => 'niski',
	'Class:UserRequest/Attribute:urgency' => 'Pilność',
	'Class:UserRequest/Attribute:urgency+' => '',
	'Class:UserRequest/Attribute:urgency/Value:1' => 'krytyczna',
	'Class:UserRequest/Attribute:urgency/Value:1+' => 'krytyczna',
	'Class:UserRequest/Attribute:urgency/Value:2' => 'wysoka',
	'Class:UserRequest/Attribute:urgency/Value:2+' => 'wysoka',
	'Class:UserRequest/Attribute:urgency/Value:3' => 'średnia',
	'Class:UserRequest/Attribute:urgency/Value:3+' => 'średnia',
	'Class:UserRequest/Attribute:urgency/Value:4' => 'niska',
	'Class:UserRequest/Attribute:urgency/Value:4+' => 'niska',
	// ^ Start Here customization des courrier
	
	// add attribute type person vente -->
	'Class:UserRequest/Attribute:type_person' => 'type person',
	'Class:UserRequest/Attribute:type_person+' => '',
	'Class:UserRequest/Attribute:type_personne/Value:physical_person' => 'Physical person',
	'Class:UserRequest/Attribute:type_personne/Value:physical_person+' => '',
	'Class:UserRequest/Attribute:type_personne/Value:moral_person' => 'Moral person',
	'Class:UserRequest/Attribute:type_personne/Value:moral_person+' => '',
   
	// add attribute numero first invoice vente -->
	'Class:UserRequest/Attribute:numero_start_invoice_vente' => 'Sales invoice starting number',
	'Class:UserRequest/Attribute:numero_start_invoice_vente+' => '',

	//add attribute numero last invoice vente -->
	'Class:UserRequest/Attribute:numero_end_invoice_vente' => 'Sales invoice finishing number',
	'Class:UserRequest/Attribute:numero_end_invoice_vente+' => '',
	
	// add attribute numero last month vente -->
	'Class:UserRequest/Attribute:numero_last_month_invoice_vente' => 'Sales invoice last month number',
	'Class:UserRequest/Attribute:numero_last_month_invoice_vente+' => '',
	
	//add attribute chiffre d'affaires vente -->
	'Class:UserRequest/Attribute:amount_turnover_vente' => 'Amount of the turnover',
	'Class:UserRequest/Attribute:amount_turnover_vente+' => '',
	
	// add attribute bordereau bancaire vente -->
	'Class:UserRequest/Attribute:bank_slip_vente' => 'Bank sales slip',
	'Class:UserRequest/Attribute:bank_slip_vente+' => '',
	'Class:UserRequest/Attribute:bank_slip_vente/Value:yes' =>'Yes',
	'Class:UserRequest/Attribute:bank_slip_vente/Value:yes+' => '',
	'Class:UserRequest/Attribute:bank_slip_vente/Value:no' => 'No',
	'Class:UserRequest/Attribute:bank_slip_vente/Value:no+' => '',
	
	// add attribute avis d'opérations vente -->
	'Class:UserRequest/Attribute:transaction_notice_vente' => 'Sale transaction notice',
	'Class:UserRequest/Attribute:transaction_notice_vente+' => '',
	'Class:UserRequest/Attribute:transaction_notice_vente/Value:yes' => 'Yes',
	'Class:UserRequest/Attribute:transaction_notice_vente/Value:yes+' => '',
	'Class:UserRequest/Attribute:transaction_notice_vente/Value:no' => 'No',
	'Class:UserRequest/Attribute:transaction_notice_vente/Value:no+' => '',
	
	// add attribute certificats de RS clients vente -->
	'Class:UserRequest/Attribute:sr_certificates_vente' => 'customer RS certificates',
	'Class:UserRequest/Attribute:sr_certificates_vente+' => '',
	'Class:UserRequest/Attribute:sr_certificates_vente/Value:yes' => 'Yes',
	'Class:UserRequest/Attribute:sr_certificates_vente/Value:yes+' => '',
	'Class:UserRequest/Attribute:sr_certificates_vente/Value:no' => 'No',
	'Class:UserRequest/Attribute:sr_certificates_vente/Value:no+' => '',

	// add attribute statement and documents facture banque -->
	'Class:UserRequest/Attribute:statements_and_documents_banque' => 'Bank statements and purchasing documents',
	'Class:UserRequest/Attribute:statements_and_documents_banque+' => '',
	'Class:UserRequest/Attribute:statements_and_documents_banque/Value:yes' => 'Yes',
	'Class:UserRequest/Attribute:statements_and_documents_banque/Value:yes+' => '',
	'Class:UserRequest/Attribute:statements_and_documents_banque/Value:no' => 'No',
	'Class:UserRequest/Attribute:statements_and_documents_banque/Value:no+' => '',

	// add attribute comment on reconciliation statement facture banque -->
	'Class:UserRequest/Attribute:comment_on_reconciliation_statement_banque' => 'comment on the reconciliation statement from the previous month',
	'Class:UserRequest/Attribute:comment_on_reconciliation_statement_banque+' => '',
	
	// add attribute exceptional order courrier (Visa) -->
	'Class:UserRequest/Attribute:exceptional_order_courrier' => 'exceptional order courrier (Visa)',
	'Class:UserRequest/Attribute:exceptional_order_courrier+' => '',
	'Class:UserRequest/Attribute:exceptional_order_courrier/Value:yes' => 'Yes',
	'Class:UserRequest/Attribute:exceptional_order_courrier/Value:yes+' => '',
	'Class:UserRequest/Attribute:exceptional_order_courrier/Value:no' => 'No',
	'Class:UserRequest/Attribute:exceptional_order_courrier/Value:no+' => '',

	// add attribute month courrier -->
	'Class:UserRequest/Attribute:month_courrier' => 'Month of courrier',
	'Class:UserRequest/Attribute:month_courrier+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:1' => 'January',
	'Class:UserRequest/Attribute:month_courrier/Value:1+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:2' => 'February',
	'Class:UserRequest/Attribute:month_courrier/Value:2+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:3' => 'March',
	'Class:UserRequest/Attribute:month_courrier/Value:3+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:4' => 'April',
	'Class:UserRequest/Attribute:month_courrier/Value:4+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:5' => 'May',
	'Class:UserRequest/Attribute:month_courrier/Value:5+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:6' => 'June',
	'Class:UserRequest/Attribute:month_courrier/Value:6+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:7' => 'July',
	'Class:UserRequest/Attribute:month_courrier/Value:7+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:8' => 'August',
	'Class:UserRequest/Attribute:month_courrier/Value:8+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:9' => 'September',
	'Class:UserRequest/Attribute:month_courrier/Value:9+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:10' => 'October',
	'Class:UserRequest/Attribute:month_courrier/Value:10+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:11' => 'november',
	'Class:UserRequest/Attribute:month_courrier/Value:11+' => '',
	'Class:UserRequest/Attribute:month_courrier/Value:12' => 'December',
	'Class:UserRequest/Attribute:month_courrier/Value:12+' => '',

	// add attribute to block client URL -->
	'Class:UserRequest/Attribute:block_client_ur' => 'Block client if :',
	'Class:UserRequest/Attribute:block_client_ur+' => '',
	'Class:UserRequest/Attribute:block_client_ur/Value:1' => 'He didn\'t make the payment',
	'Class:UserRequest/Attribute:block_client_ur/Value:1+' => '',
	'Class:UserRequest/Attribute:block_client_ur/Value:2' => 'He did pay his payments',
	'Class:UserRequest/Attribute:block_client_ur/Value:2+' => '',
	
	// ^ End Here customization des courrier -->
	'Class:UserRequest/Attribute:origin' => 'OPochodzenierigin',
	'Class:UserRequest/Attribute:origin+' => '',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'e-mail',
	'Class:UserRequest/Attribute:origin/Value:mail+' => 'e-mail',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:UserRequest/Attribute:origin/Value:phone' => 'telefon',
	'Class:UserRequest/Attribute:origin/Value:phone+' => 'telefon',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'portal',
	'Class:UserRequest/Attribute:origin/Value:portal+' => 'portal',
	'Class:UserRequest/Attribute:approver_id' => 'Zatwierdzający',
	'Class:UserRequest/Attribute:approver_id+' => '',
	'Class:UserRequest/Attribute:approver_email' => 'E-mail zatwierdzającego',
	'Class:UserRequest/Attribute:approver_email+' => '',
	'Class:UserRequest/Attribute:service_id' => 'Usługa',
	'Class:UserRequest/Attribute:service_id+' => '',
	'Class:UserRequest/Attribute:service_name' => 'Nazwa usługi',
	'Class:UserRequest/Attribute:service_name+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'Podkategoria usługi',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'Nazwa podkategorii usługi',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '',
	'Class:UserRequest/Attribute:escalation_flag' => 'Flaga - Ważny',
	'Class:UserRequest/Attribute:escalation_flag+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'Nie',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => 'Nie',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'Tak',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => 'Tak',
	'Class:UserRequest/Attribute:escalation_reason' => 'Powód - Ważny',
	'Class:UserRequest/Attribute:escalation_reason+' => '',
	'Class:UserRequest/Attribute:assignment_date' => 'Data przydziału',
	'Class:UserRequest/Attribute:assignment_date+' => '',
	'Class:UserRequest/Attribute:resolution_date' => 'Data rozwiązania',
	'Class:UserRequest/Attribute:resolution_date+' => '',
	'Class:UserRequest/Attribute:last_pending_date' => 'Ostatnia data trwania',
	'Class:UserRequest/Attribute:last_pending_date+' => '',
	'Class:UserRequest/Attribute:cumulatedpending' => 'cumulated pending',
	'Class:UserRequest/Attribute:cumulatedpending+' => '',
	'Class:UserRequest/Attribute:tto' => 'czas na podjęcie (TTO)',
	'Class:UserRequest/Attribute:tto+' => '',
	'Class:UserRequest/Attribute:ttr' => 'czas na rozwiązanie (TTR)',
	'Class:UserRequest/Attribute:ttr+' => '',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'Ostateczny termin podjęcia (TTO)',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'Gwarantowany czas podjęcia (SLA tto) zaliczony',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '',
	'Class:UserRequest/Attribute:sla_tto_over' => 'Gwarantowany czas podjęcia (SLA tto) skończył się',
	'Class:UserRequest/Attribute:sla_tto_over+' => '',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'Ostateczny termin rozwiązania TTR',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'Gwarantowany czas rozwiązania (SLA ttr) zaliczony',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'Gwarantowany czas rozwiązania (SLA ttr) skończył się',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '',
	'Class:UserRequest/Attribute:time_spent' => 'Opóźnienie rozwiązania',
	'Class:UserRequest/Attribute:time_spent+' => '',
	/*
	'Class:UserRequest/Attribute:resolution_code' => 'Kod rozwiązania',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => 'wsparcie',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => 'wsparcie',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'usterka naprawiona',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'usterka naprawiona',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'naprawa sprzętu',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => 'naprawa sprzętu',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'inne',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => 'inne',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'poprawka oprogramowania',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => 'poprawka oprogramowania',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'aktualizacja systemu',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => 'aktualizacja systemu',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => 'szkolenie',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => 'szkolenie',
	*/
	// ^ START HERE Customization CFAC resolution de demande
	'Class:UserRequest/Attribute:resolution_code' => 'resolution code',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:a valider' => 'To Validate',
	'Class:UserRequest/Attribute:resolution_code/Value:a valider+' => 'To Validate',
	'Class:UserRequest/Attribute:resolution_code/Value:en attente' => 'On Hold',
	'Class:UserRequest/Attribute:resolution_code/Value:en attente+' => 'On Hold',
	'Class:UserRequest/Attribute:resolution_code/Value:a refaire' => 'To Redo',
	'Class:UserRequest/Attribute:resolution_code/Value:a refaire+' => 'To Redo',
	'Class:UserRequest/Attribute:resolution_code/Value:a cloturer' => 'To Close',
	'Class:UserRequest/Attribute:resolution_code/Value:a cloturer+' => 'To Close',
	// ^ END HERE Customization CFAC resolution de demande
	'Class:UserRequest/Attribute:solution' => 'Rozwiązanie',
	'Class:UserRequest/Attribute:solution+' => '',
	'Class:UserRequest/Attribute:pending_reason' => 'Powód oczekiwania',
	'Class:UserRequest/Attribute:pending_reason+' => '',
	'Class:UserRequest/Attribute:parent_request_id' => 'Źródłowe zgłoszenie',
	'Class:UserRequest/Attribute:parent_request_id+' => '',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Powiązane zgłoszenie',
	'Class:UserRequest/Attribute:parent_request_ref+' => '',
	'Class:UserRequest/Attribute:parent_problem_id' => 'Źródłowy problem',
	'Class:UserRequest/Attribute:parent_problem_id+' => '',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Powiązany problem',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '',
	'Class:UserRequest/Attribute:parent_change_id' => 'Źródłowa zmiana',
	'Class:UserRequest/Attribute:parent_change_id+' => '',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Powiązana zmiana',
	'Class:UserRequest/Attribute:parent_change_ref+' => '',
	'Class:UserRequest/Attribute:related_request_list' => 'Zależne zgłoszenia',
	'Class:UserRequest/Attribute:related_request_list+' => 'All the requests that are linked to this parent request',
	'Class:UserRequest/Attribute:public_log' => 'Dziennik publiczny',
	'Class:UserRequest/Attribute:public_log+' => '',
	'Class:UserRequest/Attribute:user_satisfaction' => 'Zadowolenie użytkownika',
	'Class:UserRequest/Attribute:user_satisfaction+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => 'Bardzo zadowolony',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => 'Bardzo zadowolony',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => 'Dość zadowolony',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => 'Dość zadowolony',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => 'Raczej niezadowolony',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => 'Raczej niezadowolony',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => 'Bardzo niezadowolony',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => 'Bardzo niezadowolony',
	'Class:UserRequest/Attribute:user_comment' => 'Komentarz użytkownika',
	'Class:UserRequest/Attribute:user_comment+' => '',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:UserRequest/Stimulus:ev_assign' => 'Przydziel',
	'Class:UserRequest/Stimulus:ev_assign+' => '',
	'Class:UserRequest/Stimulus:ev_reassign' => 'Przydziel ponownie',
	'Class:UserRequest/Stimulus:ev_reassign+' => '',
	'Class:UserRequest/Stimulus:ev_approve' => 'Zatwierdź',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => 'Odrzuć',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequest/Stimulus:ev_pending' => 'Trwające',
	'Class:UserRequest/Stimulus:ev_pending+' => '',
	'Class:UserRequest/Stimulus:ev_timeout' => 'Po czasie',
	'Class:UserRequest/Stimulus:ev_timeout+' => '',
	'Class:UserRequest/Stimulus:ev_autoresolve' => 'Automatyczne rozwiązanie',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '',
	'Class:UserRequest/Stimulus:ev_autoclose' => 'Automatyczne zamknięcie',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '',
	'Class:UserRequest/Stimulus:ev_resolve' => 'Oznacz jako rozwiązane',
	'Class:UserRequest/Stimulus:ev_resolve+' => '',
	'Class:UserRequest/Stimulus:ev_close' => 'Zamknij to zgłoszenie',
	'Class:UserRequest/Stimulus:ev_close+' => '',
	'Class:UserRequest/Stimulus:ev_reopen' => 'Otwórz ponownie',
	'Class:UserRequest/Stimulus:ev_reopen+' => '',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Do zatwierdzenia',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'Nie można przypisać zgłoszenia nadrzędnego do samego siebie',
));


Dict::Add('PL PL', 'Polish', 'Polski', array(
	'Portal:TitleDetailsFor_Request' => 'Szczegóły zgłoszenia',
	'Portal:ButtonUpdate' => 'Aktualizuj',
	'Portal:ButtonClose' => 'Zamknij',
	'Portal:ButtonReopen' => 'Otwórz ponownie',
	'Portal:ShowServices' => 'Katalog usług',
	'Portal:SelectRequestType' => 'Wybierz typ zgłoszenia',
	'Portal:SelectServiceElementFrom_Service' => 'Wybierz element usługi dla %1$s',
	'Portal:ListServices' => 'Lista usług',
	'Portal:TitleDetailsFor_Service' => 'Szczegóły dotyczące usługi',
	'Portal:Button:CreateRequestFromService' => 'Utwórz zgłoszenie dotyczące tej usługi',
	'Portal:ListOpenRequests' => 'Lista otwartych zgłoszeń',
	'Portal:UserRequest:MoreInfo' => 'Więcej informacji',
	'Portal:Details-Service-Element' => 'Elementy usługi',
	'Portal:NoClosedTicket' => 'Niezamknięte zgłoszenie',
	'Portal:NoService' => '',
	'Portal:ListOpenProblems' => 'Ciągłe problemy',
	'Portal:ShowProblem' => 'Problemy',
	'Portal:ShowFaqs' => 'Pytania FAQ',
	'Portal:NoOpenProblem' => 'Żaden otwarty problem',
	'Portal:SelectLanguage' => 'Zmień język',
	'Portal:LanguageChangedTo_Lang' => 'Język został zmieniony na',
	'Portal:ChooseYourFavoriteLanguage' => 'Wybierz swój ulubiony język',

	'Class:UserRequest/Method:ResolveChildTickets' => 'Rozpatrz zgłoszenia podrzędne',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'Połącz rozwiązanie kaskadowo do żądań podrzędnych (ev_autoresolve) i dopasuj następujące cechy zgłoszenia: usługa, zespół, agent, informacje o rozwiązaniu',
));


Dict::Add('PL PL', 'Polish', 'Polski', array(
	'Organization:Overview:UserRequests' => 'User Requests from this organization',
	'Organization:Overview:MyUserRequests' => 'My User Requests for this organization',
	'Organization:Overview:Tickets' => 'Tickets for this organization',
));
