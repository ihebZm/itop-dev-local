<?php
/*
 * @copyright   Copyright (C) 2010-2021 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Menu:RequestManagement' => 'Helpdesk',
	'Menu:RequestManagement+' => 'Helpdesk',
	'Menu:RequestManagementProvider' => 'Helpdesk Provaider',
	'Menu:RequestManagementProvider+' => 'Helpdesk Provaider',
	'Menu:UserRequest:Provider' => 'Richeiste aperte trasferite al Provaider',
	'Menu:UserRequest:Provider+' => 'Richeiste aperte trasferite al Provaider',
	'Menu:UserRequest:Overview' => 'Overview',
	'Menu:UserRequest:Overview+' => 'Overview',
	'Menu:NewUserRequest' => 'Nuova richista utente',
	'Menu:NewUserRequest+' => 'Creare un nuova richiesta utente',
	'Menu:SearchUserRequests' => 'Ricerca per richiesta utente',
	'Menu:SearchUserRequests+' => 'Ricerca per ticket',
	'Menu:UserRequest:Shortcuts' => 'Scorciatoia',
	'Menu:UserRequest:Shortcuts+' => '~~',
	'Menu:UserRequest:MyRequests' => 'Richieste assegnate a me',
	'Menu:UserRequest:MyRequests+' => 'Richieste assegnate a me (come Agente)',
	'Menu:UserRequest:MySupportRequests' => 'll mio supporto chiama',
	'Menu:UserRequest:MySupportRequests+' => 'll mio supporto chiama',
	'Menu:UserRequest:EscalatedRequests' => 'Richiesta importante',
	'Menu:UserRequest:EscalatedRequests+' => 'Richiesta importante',
	'Menu:UserRequest:OpenRequests' => 'Tutte le richieste aperte',
	'Menu:UserRequest:OpenRequests+' => 'Tutte le richieste aperte',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Richiesta assegnata a me',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Richieste degli ultimi 14 giorni (per tipo)',
	'UI-RequestManagementOverview-Last-14-days' => 'Richieste degli ultimi 14 giorni (per tipo)',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Richeiste aperte per stato',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Richeiste aperte per agente',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Richeiste aperte per tipo',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Richeiste aperte per organizzazione',
	'Class:UserRequest:KnownErrorList' => 'Errori conosciuti',
	'Menu:UserRequest:MyWorkOrders' => 'Work Order assegnati a me',
	'Menu:UserRequest:MyWorkOrders+' => 'Tutti i work order assegnati a me',
	'Class:Problem:KnownProblemList' => 'Problemi conosciuti',
	'Tickets:Related:OpenIncidents' => 'Incidenti aperti',
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

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:UserRequest' => 'Richeista utente',
	'Class:UserRequest+' => '~~',
	'Class:UserRequest/Attribute:status' => 'Stato',
	'Class:UserRequest/Attribute:status+' => '~~',
	'Class:UserRequest/Attribute:status/Value:new' => 'Nuovo',
	'Class:UserRequest/Attribute:status/Value:new+' => '~~',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'Superato TTO',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '~~',
	'Class:UserRequest/Attribute:status/Value:assigned' => 'Assegnato',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '~~',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'Superato TTR',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '~~',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => 'In attesa di approvazione',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '~~',
	'Class:UserRequest/Attribute:status/Value:approved' => 'Approvato',
	'Class:UserRequest/Attribute:status/Value:approved+' => '~~',
	'Class:UserRequest/Attribute:status/Value:rejected' => 'Rifiutato',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '~~',
	'Class:UserRequest/Attribute:status/Value:pending' => 'In attesa',
	'Class:UserRequest/Attribute:status/Value:pending+' => '~~',
	'Class:UserRequest/Attribute:status/Value:resolved' => 'Risolto',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '~~',
	'Class:UserRequest/Attribute:status/Value:closed' => 'Chiuso',
	'Class:UserRequest/Attribute:status/Value:closed+' => '~~',
	'Class:UserRequest/Attribute:request_type' => 'Richista tipo',
	'Class:UserRequest/Attribute:request_type+' => '~~',
	'Class:UserRequest/Attribute:request_type/Value:incident' => 'Incidente',
	'Class:UserRequest/Attribute:request_type/Value:incident+' => 'Incidente',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'Richiesta di servizio',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => 'Richiesta di servizio',
	'Class:UserRequest/Attribute:impact' => 'Impatto',
	'Class:UserRequest/Attribute:impact+' => '~~',
	'Class:UserRequest/Attribute:impact/Value:1' => 'Un dipartimento',
	'Class:UserRequest/Attribute:impact/Value:1+' => '~~',
	'Class:UserRequest/Attribute:impact/Value:2' => 'Un servizio',
	'Class:UserRequest/Attribute:impact/Value:2+' => '~~',
	'Class:UserRequest/Attribute:impact/Value:3' => 'Una persona',
	'Class:UserRequest/Attribute:impact/Value:3+' => '~~',
	'Class:UserRequest/Attribute:priority' => 'Priorità',
	'Class:UserRequest/Attribute:priority+' => '~~',
	'Class:UserRequest/Attribute:priority/Value:1' => 'Critica',
	'Class:UserRequest/Attribute:priority/Value:1+' => 'Critica',
	'Class:UserRequest/Attribute:priority/Value:2' => 'Alta',
	'Class:UserRequest/Attribute:priority/Value:2+' => 'Alta',
	'Class:UserRequest/Attribute:priority/Value:3' => 'Media',
	'Class:UserRequest/Attribute:priority/Value:3+' => 'Media',
	'Class:UserRequest/Attribute:priority/Value:4' => 'Bassa',
	'Class:UserRequest/Attribute:priority/Value:4+' => 'Bassa',
	'Class:UserRequest/Attribute:urgency' => 'Urgenza',
	'Class:UserRequest/Attribute:urgency+' => '~~',
	'Class:UserRequest/Attribute:urgency/Value:1' => 'Critica',
	'Class:UserRequest/Attribute:urgency/Value:1+' => 'Critica',
	'Class:UserRequest/Attribute:urgency/Value:2' => 'Alta',
	'Class:UserRequest/Attribute:urgency/Value:2+' => 'Alta',
	'Class:UserRequest/Attribute:urgency/Value:3' => 'Media',
	'Class:UserRequest/Attribute:urgency/Value:3+' => 'Media',
	'Class:UserRequest/Attribute:urgency/Value:4' => 'Bassa',
	'Class:UserRequest/Attribute:urgency/Value:4+' => 'Bassa',
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
	'Class:UserRequest/Attribute:origin' => 'Origine',
	'Class:UserRequest/Attribute:origin+' => '~~',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'Mail',
	'Class:UserRequest/Attribute:origin/Value:mail+' => 'Mail',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'Monitoring',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => 'Monitoring',
	'Class:UserRequest/Attribute:origin/Value:phone' => 'Telefono',
	'Class:UserRequest/Attribute:origin/Value:phone+' => 'Telefono',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'Portale',
	'Class:UserRequest/Attribute:origin/Value:portal+' => 'Portale',
	'Class:UserRequest/Attribute:approver_id' => 'Validatore',
	'Class:UserRequest/Attribute:approver_id+' => '~~',
	'Class:UserRequest/Attribute:approver_email' => 'Mail di approvazione',
	'Class:UserRequest/Attribute:approver_email+' => '~~',
	'Class:UserRequest/Attribute:service_id' => 'Servizio',
	'Class:UserRequest/Attribute:service_id+' => '~~',
	'Class:UserRequest/Attribute:service_name' => 'Nome Servizio',
	'Class:UserRequest/Attribute:service_name+' => '~~',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'Servizio Sottocategoria',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '~~',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'Servizio Sottocategoria Nome',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '~~',
	'Class:UserRequest/Attribute:escalation_flag' => 'Spunta importante',
	'Class:UserRequest/Attribute:escalation_flag+' => '~~',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'No',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => 'No ',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'Si',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => 'Si',
	'Class:UserRequest/Attribute:escalation_reason' => 'Motivazione Importante',
	'Class:UserRequest/Attribute:escalation_reason+' => '~~',
	'Class:UserRequest/Attribute:assignment_date' => 'Data di Assegnazione',
	'Class:UserRequest/Attribute:assignment_date+' => '~~',
	'Class:UserRequest/Attribute:resolution_date' => 'Data di Risoluzione',
	'Class:UserRequest/Attribute:resolution_date+' => '~~',
	'Class:UserRequest/Attribute:last_pending_date' => 'Ultima data di messa in attesa',
	'Class:UserRequest/Attribute:last_pending_date+' => '~~',
	'Class:UserRequest/Attribute:cumulatedpending' => 'Messa in attesa cumulativa',
	'Class:UserRequest/Attribute:cumulatedpending+' => '~~',
	'Class:UserRequest/Attribute:tto' => 'TTO',
	'Class:UserRequest/Attribute:tto+' => '~~',
	'Class:UserRequest/Attribute:ttr' => 'TTR',
	'Class:UserRequest/Attribute:ttr+' => '~~',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'TTO Deadline',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '~~',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'SLA tto Oltrepassato',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '~~',
	'Class:UserRequest/Attribute:sla_tto_over' => 'SLA tto Oltre',
	'Class:UserRequest/Attribute:sla_tto_over+' => '~~',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'TTR Deadline',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '~~',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'SLA ttr Oltrepassato',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '~~',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'SLA ttr Oltre ',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '~~',
	'Class:UserRequest/Attribute:time_spent' => 'Tempo di Risoluzione',
	'Class:UserRequest/Attribute:time_spent+' => '~~',
	/*
	'Class:UserRequest/Attribute:resolution_code' => 'Codice di Risoluzione',
	'Class:UserRequest/Attribute:resolution_code+' => '~~',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => 'Assistenza',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => 'Assistenza',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'Bug risolto',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'Bug Risolto',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'Riparato Hardware',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => 'Riparato Hardware',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'Altro',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => 'Altro',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'Software Patch',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => 'Software Patch',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'Sistema aggironato',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => 'Sistema aggironato',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => 'Formazione',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => 'Formazione',
	*/
	// ^ START HERE Customization CFAC resolution de demande
	'Class:UserRequest/Attribute:resolution_code' => 'resolution code',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:a valider' => 'A Valider',
	'Class:UserRequest/Attribute:resolution_code/Value:a valider+' => 'A Valider',
	'Class:UserRequest/Attribute:resolution_code/Value:en attente' => 'En Attente',
	'Class:UserRequest/Attribute:resolution_code/Value:en attente+' => 'En Attente',
	'Class:UserRequest/Attribute:resolution_code/Value:a refaire' => 'A Refaire',
	'Class:UserRequest/Attribute:resolution_code/Value:a refaire+' => 'A Refaire',
	'Class:UserRequest/Attribute:resolution_code/Value:a cloturer' => 'A Cloturer',
	'Class:UserRequest/Attribute:resolution_code/Value:a cloturer+' => 'A Cloturer',
	// ^ END HERE Customization CFAC resolution de demande
	'Class:UserRequest/Attribute:solution' => 'Soluzione',
	'Class:UserRequest/Attribute:solution+' => '~~',
	'Class:UserRequest/Attribute:pending_reason' => 'Motivo della messa in attesa',
	'Class:UserRequest/Attribute:pending_reason+' => '~~',
	'Class:UserRequest/Attribute:parent_request_id' => 'Richiesta padre',
	'Class:UserRequest/Attribute:parent_request_id+' => '~~',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Rif. Richiesta Utente',
	'Class:UserRequest/Attribute:parent_request_ref+' => '~~',
	'Class:UserRequest/Attribute:parent_problem_id' => 'Problema Padre',
	'Class:UserRequest/Attribute:parent_problem_id+' => '~~',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Rif. Problema',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '~~',
	'Class:UserRequest/Attribute:parent_change_id' => 'Cambio padre',
	'Class:UserRequest/Attribute:parent_change_id+' => '~~',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Rif. Cambio',
	'Class:UserRequest/Attribute:parent_change_ref+' => '~~',
	'Class:UserRequest/Attribute:related_request_list' => 'Richista figlio',
	'Class:UserRequest/Attribute:related_request_list+' => 'Tutte le richieste collegate a questa richiesta padre',
	'Class:UserRequest/Attribute:public_log' => 'Log Pubblico',
	'Class:UserRequest/Attribute:public_log+' => '~~',
	'Class:UserRequest/Attribute:user_satisfaction' => 'Soddisfazione Utente',
	'Class:UserRequest/Attribute:user_satisfaction+' => '~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => 'Veramente Soddisfatto',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => 'Veramente Soddisfatto',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => 'Abbastanza Soddisfatto',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => 'Abbastanza Soddisfatto',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => 'piuttosto insoddisfatto',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => 'piuttosto insoddisfatto',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => 'Veramente insoddisfatto',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => 'Veramente insoddisfatto',
	'Class:UserRequest/Attribute:user_comment' => 'Commento utente',
	'Class:UserRequest/Attribute:user_comment+' => '~~',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'Richiesta_padre_id_nome',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '~~',
	'Class:UserRequest/Stimulus:ev_assign' => 'Assegna ',
	'Class:UserRequest/Stimulus:ev_assign+' => '~~',
	'Class:UserRequest/Stimulus:ev_reassign' => 'Ri-Assegna',
	'Class:UserRequest/Stimulus:ev_reassign+' => '~~',
	'Class:UserRequest/Stimulus:ev_approve' => 'Approva ',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => 'Rifiuta ',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
	'Class:UserRequest/Stimulus:ev_pending' => 'Metti in Attesa',
	'Class:UserRequest/Stimulus:ev_pending+' => '~~',
	'Class:UserRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:UserRequest/Stimulus:ev_timeout+' => '~~',
	'Class:UserRequest/Stimulus:ev_autoresolve' => 'Risolto automaticamente',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '~~',
	'Class:UserRequest/Stimulus:ev_autoclose' => 'Chiuso Automaticamente',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '~~',
	'Class:UserRequest/Stimulus:ev_resolve' => 'Segna come Risolto',
	'Class:UserRequest/Stimulus:ev_resolve+' => '~~',
	'Class:UserRequest/Stimulus:ev_close' => 'Chiudi questa richiesta',
	'Class:UserRequest/Stimulus:ev_close+' => '~~',
	'Class:UserRequest/Stimulus:ev_reopen' => 'Ri-Aprire',
	'Class:UserRequest/Stimulus:ev_reopen+' => '~~',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'In attesa di essere approvata',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '~~',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'Non si può assegnare una richiesta padre a se stesso',
));


Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Portal:TitleDetailsFor_Request' => 'Dettagi della richiesta',
	'Portal:ButtonUpdate' => 'Aggiornameno',
	'Portal:ButtonClose' => 'Chiuso',
	'Portal:ButtonReopen' => 'Riaperto',
	'Portal:ShowServices' => 'Catalogo di servizio',
	'Portal:SelectRequestType' => 'Selezionare il tipo di richiesta',
	'Portal:SelectServiceElementFrom_Service' => 'Selezionare gli elementi del servizio per %1s',
	'Portal:ListServices' => 'Lista dei servizi',
	'Portal:TitleDetailsFor_Service' => 'Dettagli dei servizi',
	'Portal:Button:CreateRequestFromService' => 'Create una Richiesta per questo servizio',
	'Portal:ListOpenRequests' => 'Lista delle richieste aperte',
	'Portal:UserRequest:MoreInfo' => 'Piu informazioni',
	'Portal:Details-Service-Element' => 'Elementi del servizio',
	'Portal:NoClosedTicket' => 'Richieste non chiuse',
	'Portal:NoService' => '~~',
	'Portal:ListOpenProblems' => 'Problema in corso',
	'Portal:ShowProblem' => 'Problemi ',
	'Portal:ShowFaqs' => 'FAQs',
	'Portal:NoOpenProblem' => 'Nessun Problema aperto',
	'Portal:SelectLanguage' => 'Cambiare lingua',
	'Portal:LanguageChangedTo_Lang' => 'Lingua cambiata in',
	'Portal:ChooseYourFavoriteLanguage' => 'Selezionate la vostra lingua preferita',

	'Class:UserRequest/Method:ResolveChildTickets' => 'Risolve ticket figli',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'Inoltra la risolzuione ai ticket collegati ev_autosolve), e allinea le caratteriche della richiesta: Servizio, team , agente e informazioni della risoluzione',
));


Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Organization:Overview:UserRequests' => 'Richieste utente per questa organizzazione',
	'Organization:Overview:MyUserRequests' => 'Le Mie richieste utente per questa organizzazione',
	'Organization:Overview:Tickets' => 'Ticket per questa organizzazione',
));
