<?php
/*
 * @copyright   Copyright (C) 2010-2021 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
/*
 *  * @author      Lukáš Dvořák <lukas.dvorak@itopportal.cz>
 * @author      Daniel Rokos <daniel.rokos@itopportal.cz>
 */
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Menu:RequestManagement' => 'Helpdesk',
	'Menu:RequestManagement+' => 'Helpdesk',
	'Menu:RequestManagementProvider' => 'Poskytovatel helpdesku',
	'Menu:RequestManagementProvider+' => 'Poskytovatel helpdesku',
	'Menu:UserRequest:Provider' => 'Otevřené požadavky předané poskytovateli',
	'Menu:UserRequest:Provider+' => 'Otevřené požadavky předané poskytovateli',
	'Menu:UserRequest:Overview' => 'Přehled',
	'Menu:UserRequest:Overview+' => 'Přehled',
	'Menu:NewUserRequest' => 'Nový uživatelský požadavek',
	'Menu:NewUserRequest+' => 'Vytvořit nový uživatelský požadavek',
	'Menu:SearchUserRequests' => 'Hledat uživatelské požadavky',
	'Menu:SearchUserRequests+' => 'Hledat uživatelské požadavky',
	'Menu:UserRequest:Shortcuts' => 'Odkazy',
	'Menu:UserRequest:Shortcuts+' => '',
	'Menu:UserRequest:MyRequests' => 'Požadavky přidělené mně',
	'Menu:UserRequest:MyRequests+' => 'Požadavky přidělené mně (jako řešiteli)',
	'Menu:UserRequest:MySupportRequests' => 'Mnou zadané požadavky',
	'Menu:UserRequest:MySupportRequests+' => 'Mnou zadané požadavky',
	'Menu:UserRequest:EscalatedRequests' => 'Eskalované požadavky',
	'Menu:UserRequest:EscalatedRequests+' => 'Eskalované požadavky',
	'Menu:UserRequest:OpenRequests' => 'Všechny otevřené požadavky',
	'Menu:UserRequest:OpenRequests+' => 'Všechny otevřené požadavky',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Požadavky přidělené mně',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Požadavky za posledních 14 dní podle typu',
	'UI-RequestManagementOverview-Last-14-days' => 'Počet požadavků za posledních 14 dní',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Otevřené požadavky podle stavu',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Otevřené požadavky podle řešitele',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Otevřené požadavky podle typu',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Otevřené požadavky podle zákazníka',
	'Class:UserRequest:KnownErrorList' => 'Známé chyby',
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

Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:UserRequest' => 'Uživatelský požadavek',
	'Class:UserRequest+' => '',
	'Class:UserRequest/Attribute:status' => 'Stav',
	'Class:UserRequest/Attribute:status+' => '',
	'Class:UserRequest/Attribute:status/Value:new' => 'Nový',
	'Class:UserRequest/Attribute:status/Value:new+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'Eskalovaný TTO',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:UserRequest/Attribute:status/Value:assigned' => 'Přidělený',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'Eskalovaný TTR',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => 'Čeká na schválení',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:UserRequest/Attribute:status/Value:approved' => 'Schválený',
	'Class:UserRequest/Attribute:status/Value:approved+' => '',
	'Class:UserRequest/Attribute:status/Value:rejected' => 'Zamítnutý',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '',
	'Class:UserRequest/Attribute:status/Value:pending' => 'Pozastavený',
	'Class:UserRequest/Attribute:status/Value:pending+' => '',
	'Class:UserRequest/Attribute:status/Value:resolved' => 'Vyřešený',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '',
	'Class:UserRequest/Attribute:status/Value:closed' => 'Uzavřený',
	'Class:UserRequest/Attribute:status/Value:closed+' => '',
	'Class:UserRequest/Attribute:request_type' => 'Typ požadavku',
	'Class:UserRequest/Attribute:request_type+' => '',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'Požadavek na službu',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => '',
	'Class:UserRequest/Attribute:impact' => 'Dopad',
	'Class:UserRequest/Attribute:impact+' => '',
	'Class:UserRequest/Attribute:impact/Value:1' => 'Oddělení',
	'Class:UserRequest/Attribute:impact/Value:1+' => '',
	'Class:UserRequest/Attribute:impact/Value:2' => 'Služba',
	'Class:UserRequest/Attribute:impact/Value:2+' => '',
	'Class:UserRequest/Attribute:impact/Value:3' => 'Osoba',
	'Class:UserRequest/Attribute:impact/Value:3+' => '',
	'Class:UserRequest/Attribute:priority' => 'Priorita',
	'Class:UserRequest/Attribute:priority+' => '',
	'Class:UserRequest/Attribute:priority/Value:1' => 'kritická',
	'Class:UserRequest/Attribute:priority/Value:1+' => '',
	'Class:UserRequest/Attribute:priority/Value:2' => 'vysoká',
	'Class:UserRequest/Attribute:priority/Value:2+' => '',
	'Class:UserRequest/Attribute:priority/Value:3' => 'střední',
	'Class:UserRequest/Attribute:priority/Value:3+' => '',
	'Class:UserRequest/Attribute:priority/Value:4' => 'nízká',
	'Class:UserRequest/Attribute:priority/Value:4+' => '',
	'Class:UserRequest/Attribute:urgency' => 'Naléhavost',
	'Class:UserRequest/Attribute:urgency+' => '',
	'Class:UserRequest/Attribute:urgency/Value:1' => 'kritická',
	'Class:UserRequest/Attribute:urgency/Value:1+' => '',
	'Class:UserRequest/Attribute:urgency/Value:2' => 'vysoká',
	'Class:UserRequest/Attribute:urgency/Value:2+' => '',
	'Class:UserRequest/Attribute:urgency/Value:3' => 'střední',
	'Class:UserRequest/Attribute:urgency/Value:3+' => '',
	'Class:UserRequest/Attribute:urgency/Value:4' => 'nízká',
	'Class:UserRequest/Attribute:urgency/Value:4+' => '',
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
	'Class:UserRequest/Attribute:origin' => 'Původ',
	'Class:UserRequest/Attribute:origin+' => '',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'email',
	'Class:UserRequest/Attribute:origin/Value:mail+' => '',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => '',
	'Class:UserRequest/Attribute:origin/Value:phone' => 'telefon',
	'Class:UserRequest/Attribute:origin/Value:phone+' => '',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'portál',
	'Class:UserRequest/Attribute:origin/Value:portal+' => '',
	'Class:UserRequest/Attribute:approver_id' => 'Schvalovatel',
	'Class:UserRequest/Attribute:approver_id+' => '',
	'Class:UserRequest/Attribute:approver_email' => 'Email schvalovatele',
	'Class:UserRequest/Attribute:approver_email+' => '',
	'Class:UserRequest/Attribute:service_id' => 'Služba',
	'Class:UserRequest/Attribute:service_id+' => '',
	'Class:UserRequest/Attribute:service_name' => 'Název služby',
	'Class:UserRequest/Attribute:service_name+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'Podkategorie služeb',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'Název podkategorie služeb',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '',
	'Class:UserRequest/Attribute:escalation_flag' => 'Eskalovat',
	'Class:UserRequest/Attribute:escalation_flag+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'Ne',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'Ano',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => '',
	'Class:UserRequest/Attribute:escalation_reason' => 'Důvod eskalace',
	'Class:UserRequest/Attribute:escalation_reason+' => '',
	'Class:UserRequest/Attribute:assignment_date' => 'Datum přidělení',
	'Class:UserRequest/Attribute:assignment_date+' => '',
	'Class:UserRequest/Attribute:resolution_date' => 'Datum vyřešení',
	'Class:UserRequest/Attribute:resolution_date+' => '',
	'Class:UserRequest/Attribute:last_pending_date' => 'Datum posledního pozastavení',
	'Class:UserRequest/Attribute:last_pending_date+' => '',
	'Class:UserRequest/Attribute:cumulatedpending' => 'Kumulovaná doba pozastavení',
	'Class:UserRequest/Attribute:cumulatedpending+' => '',
	'Class:UserRequest/Attribute:tto' => 'TTO',
	'Class:UserRequest/Attribute:tto+' => '',
	'Class:UserRequest/Attribute:ttr' => 'TTR',
	'Class:UserRequest/Attribute:ttr+' => '',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'Požadovaný čas přidělení',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'TTO vypršel',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '',
	'Class:UserRequest/Attribute:sla_tto_over' => 'TTO zmeškán o',
	'Class:UserRequest/Attribute:sla_tto_over+' => '',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'Požadovaný čas vyřešení',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'TTR vypršel',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'TTR zmeškán o',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '',
	'Class:UserRequest/Attribute:time_spent' => 'Doba řešení',
	'Class:UserRequest/Attribute:time_spent+' => '',
	/*
	'Class:UserRequest/Attribute:resolution_code' => 'Kód řešení',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => 'asistence',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'oprava SW (bugfix)',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'oprava HW',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'jiné',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'oprava SW (patch)',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'aktualizace systému',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => 'školení',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => '',
	*/
	// ^ START HERE Customization CFAC resolution de demande
	'Class:UserRequest/Attribute:resolution_code' => 'resolution code',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:a valider' => 'To Validate',
	'Class:UserRequest/Attribute:resolution_code/Value:a valider+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:en attente' => 'On Hold',
	'Class:UserRequest/Attribute:resolution_code/Value:en attente+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:a refaire' => 'To Redo',
	'Class:UserRequest/Attribute:resolution_code/Value:a refaire+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:a cloturer' => 'To Close',
	'Class:UserRequest/Attribute:resolution_code/Value:a cloturer+' => '',
	// ^ END HERE Customization CFAC resolution de demande
	'Class:UserRequest/Attribute:solution' => 'Řešení',
	'Class:UserRequest/Attribute:solution+' => '',
	'Class:UserRequest/Attribute:pending_reason' => 'Důvod pozastavení',
	'Class:UserRequest/Attribute:pending_reason+' => '',
	'Class:UserRequest/Attribute:parent_request_id' => 'Nadřazený požadavek',
	'Class:UserRequest/Attribute:parent_request_id+' => '',
	'Class:UserRequest/Attribute:parent_incident_id' => 'Nadřazený incident',
	'Class:UserRequest/Attribute:parent_incident_id+' => '',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Odkaz na nadřazený požadavek',
	'Class:UserRequest/Attribute:parent_request_ref+' => '',
	'Class:UserRequest/Attribute:parent_problem_id' => 'Nadřazený problém',
	'Class:UserRequest/Attribute:parent_problem_id+' => '',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Odkaz na nadřazený problém',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '',
	'Class:UserRequest/Attribute:parent_change_id' => 'Nadřazená změna',
	'Class:UserRequest/Attribute:parent_change_id+' => '',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Odkaz na nadřazenou změnu',
	'Class:UserRequest/Attribute:parent_change_ref+' => '',
	'Class:UserRequest/Attribute:parent_incident_ref' => 'Parent incident ref~~',
	'Class:UserRequest/Attribute:parent_incident_ref+' => '~~',
	'Class:UserRequest/Attribute:related_request_list' => 'Podřízené požadavky',
	'Class:UserRequest/Attribute:related_request_list+' => 'Všechny požadavky spojené s tímto nadřízeným požadavkem',
	'Class:UserRequest/Attribute:public_log' => 'Veřejný záznam',
	'Class:UserRequest/Attribute:public_log+' => '',
	'Class:UserRequest/Attribute:user_satisfaction' => 'Spokojenost uživatele',
	'Class:UserRequest/Attribute:user_satisfaction+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => 'Velmi spokojen',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => 'Docela spokojen',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => 'Spíše nespokojen',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => 'Velmi nespokojen',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => '',
	'Class:UserRequest/Attribute:user_comment' => 'Komentář uživatele',
	'Class:UserRequest/Attribute:user_comment+' => '',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:UserRequest/Stimulus:ev_assign' => 'Přidělit',
	'Class:UserRequest/Stimulus:ev_assign+' => '',
	'Class:UserRequest/Stimulus:ev_reassign' => 'Znovu přidělit',
	'Class:UserRequest/Stimulus:ev_reassign+' => '',
	'Class:UserRequest/Stimulus:ev_approve' => 'Schválit',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => 'Zamítnout',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequest/Stimulus:ev_pending' => 'Pozastavit',
	'Class:UserRequest/Stimulus:ev_pending+' => '',
	'Class:UserRequest/Stimulus:ev_timeout' => 'Prodleva',
	'Class:UserRequest/Stimulus:ev_timeout+' => '',
	'Class:UserRequest/Stimulus:ev_autoresolve' => 'Automatické vyřešení',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '',
	'Class:UserRequest/Stimulus:ev_autoclose' => 'Automatické uzavření',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '',
	'Class:UserRequest/Stimulus:ev_resolve' => 'Označit jako vyřešené',
	'Class:UserRequest/Stimulus:ev_resolve+' => '',
	'Class:UserRequest/Stimulus:ev_close' => 'Uzavřít požadavek',
	'Class:UserRequest/Stimulus:ev_close+' => '',
	'Class:UserRequest/Stimulus:ev_reopen' => 'Znovu otevřít',
	'Class:UserRequest/Stimulus:ev_reopen+' => '',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Čeká na schválení',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'Požadavek nemůže být nadřazený sám sobě',

	'Class:UserRequest/Method:ResolveChildTickets' => 'Vyřešit podřízené tikety',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info~~',
));


Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Organization:Overview:UserRequests' => 'User Requests from this organization~~',
	'Organization:Overview:MyUserRequests' => 'My User Requests for this organization~~',
	'Organization:Overview:Tickets' => 'Tickets for this organization~~',
));
