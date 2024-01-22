<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */
Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Menu:IncidentManagement' => 'Getione incidente',
	'Menu:IncidentManagement+' => 'Gestione incidente',
	'Menu:Incident:Overview' => 'Overview',
	'Menu:Incident:Overview+' => 'Overview',
	'Menu:NewIncident' => 'Nuovo incidente',
	'Menu:NewIncident+' => 'Creare un nuovo ticket ',
	'Menu:SearchIncidents' => 'Ricerca per incidenti',
	'Menu:SearchIncidents+' => 'Ricerca per incidenti',
	'Menu:Incident:Shortcuts' => 'Scorciatoie',
	'Menu:Incident:Shortcuts+' => '~~',
	'Menu:Incident:MyIncidents' => 'Incidenti assegnati a me',
	'Menu:Incident:MyIncidents+' => 'Incidenti assegnati a me (come agente)',
	'Menu:Incident:EscalatedIncidents' => 'Evoluzione Incidente',
	'Menu:Incident:EscalatedIncidents+' => 'Evoluzione Incidente',
	'Menu:Incident:OpenIncidents' => 'Tutti gli incidenti aperti',
	'Menu:Incident:OpenIncidents+' => 'Tutti gli incidenti aperti',
	'UI-IncidentManagementOverview-IncidentByPriority-last-14-days' => 'Incidenti degli ultimi 14 giorni per priorità',
	'UI-IncidentManagementOverview-Last-14-days' => 'Incidenti degli ultimi 14 giorni numero ',
	'UI-IncidentManagementOverview-OpenIncidentByStatus' => 'Incidenti aperti per stato',
	'UI-IncidentManagementOverview-OpenIncidentByAgent' => 'Incidenti aperti per agente',
	'UI-IncidentManagementOverview-OpenIncidentByCustomer' => 'Incidenti aperti per cliente',
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
// Class: Incident
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Incident' => 'Incidente',
	'Class:Incident+' => '~~',
	'Class:Incident/Attribute:status' => 'Stato',
	'Class:Incident/Attribute:status+' => '~~',
	'Class:Incident/Attribute:status/Value:new' => 'Nuovo',
	'Class:Incident/Attribute:status/Value:new+' => '~~',
	'Class:Incident/Attribute:status/Value:escalated_tto' => 'Escalated TTO',
	'Class:Incident/Attribute:status/Value:escalated_tto+' => '~~',
	'Class:Incident/Attribute:status/Value:assigned' => 'Assgnato',
	'Class:Incident/Attribute:status/Value:assigned+' => '~~',
	'Class:Incident/Attribute:status/Value:escalated_ttr' => 'Escalated TTR',
	'Class:Incident/Attribute:status/Value:escalated_ttr+' => '~~',
	'Class:Incident/Attribute:status/Value:waiting_for_approval' => 'In attesa di approvazione',
	'Class:Incident/Attribute:status/Value:waiting_for_approval+' => '~~',
	'Class:Incident/Attribute:status/Value:pending' => 'In attesa',
	'Class:Incident/Attribute:status/Value:pending+' => '~~',
	'Class:Incident/Attribute:status/Value:resolved' => 'Risolto',
	'Class:Incident/Attribute:status/Value:resolved+' => '~~',
	'Class:Incident/Attribute:status/Value:closed' => 'Chiuso',
	'Class:Incident/Attribute:status/Value:closed+' => '~~',
	'Class:Incident/Attribute:impact' => 'Impatto',
	'Class:Incident/Attribute:impact+' => '~~',
	'Class:Incident/Attribute:impact/Value:1' => 'Un dipartimento',
	'Class:Incident/Attribute:impact/Value:1+' => '~~',
	'Class:Incident/Attribute:impact/Value:2' => 'Un servizio',
	'Class:Incident/Attribute:impact/Value:2+' => '~~',
	'Class:Incident/Attribute:impact/Value:3' => 'Una persona',
	'Class:Incident/Attribute:impact/Value:3+' => '~~',
	'Class:Incident/Attribute:priority' => 'Priorità',
	'Class:Incident/Attribute:priority+' => '~~',
	'Class:Incident/Attribute:priority/Value:1' => 'Critica',
	'Class:Incident/Attribute:priority/Value:1+' => 'Critica',
	'Class:Incident/Attribute:priority/Value:2' => 'Alta',
	'Class:Incident/Attribute:priority/Value:2+' => 'Alta',
	'Class:Incident/Attribute:priority/Value:3' => 'Media',
	'Class:Incident/Attribute:priority/Value:3+' => 'Media',
	'Class:Incident/Attribute:priority/Value:4' => 'Bassa',
	'Class:Incident/Attribute:priority/Value:4+' => 'Bassa',
	'Class:Incident/Attribute:urgency' => 'Urgenza',
	'Class:Incident/Attribute:urgency+' => '~~',
	'Class:Incident/Attribute:urgency/Value:1' => 'Critica',
	'Class:Incident/Attribute:urgency/Value:1+' => 'Critica',
	'Class:Incident/Attribute:urgency/Value:2' => 'Alta',
	'Class:Incident/Attribute:urgency/Value:2+' => 'Altra',
	'Class:Incident/Attribute:urgency/Value:3' => 'Media',
	'Class:Incident/Attribute:urgency/Value:3+' => 'Media',
	'Class:Incident/Attribute:urgency/Value:4' => 'Bassa',
	'Class:Incident/Attribute:urgency/Value:4+' => 'Bassa',
	// ^ Start Here customization des courrier
	// add attribute type person vente -->
	'Class:Incident/Attribute:type_person' => 'type person',
	'Class:Incident/Attribute:type_person+' => '',
	'Class:Incident/Attribute:type_personne/Value:physical_person' => 'Physical person',
	'Class:Incident/Attribute:type_personne/Value:physical_person+' => '',
	'Class:Incident/Attribute:type_personne/Value:moral_person' => 'Moral person',
	'Class:Incident/Attribute:type_personne/Value:moral_person+' => '',
   
	// add attribute numero first invoice vente -->
	'Class:Incident/Attribute:numero_start_invoice_vente' => 'Sales invoice starting number',
	'Class:Incident/Attribute:numero_start_invoice_vente+' => '',

	//add attribute numero last invoice vente -->
	'Class:Incident/Attribute:numero_end_invoice_vente' => 'Sales invoice finishing number',
	'Class:Incident/Attribute:numero_end_invoice_vente+' => '',
	
	// add attribute numero last month vente -->
	'Class:Incident/Attribute:numero_last_month_invoice_vente' => 'Sales invoice last month number',
	'Class:Incident/Attribute:numero_last_month_invoice_vente+' => '',
	
	//add attribute chiffre d'affaires vente -->
	'Class:Incident/Attribute:amount_turnover_vente' => 'Amount of the turnover',
	'Class:Incident/Attribute:amount_turnover_vente+' => '',
	
	// add attribute bordereau bancaire vente -->
	'Class:Incident/Attribute:bank_slip_vente' => 'Bank sales slip',
	'Class:Incident/Attribute:bank_slip_vente+' => '',
	'Class:Incident/Attribute:bank_slip_vente/Value:yes' =>'Yes',
	'Class:Incident/Attribute:bank_slip_vente/Value:yes+' => '',
	'Class:Incident/Attribute:bank_slip_vente/Value:no' => 'No',
	'Class:Incident/Attribute:bank_slip_vente/Value:no+' => '',
	
	// add attribute avis d'opérations vente -->
	'Class:Incident/Attribute:transaction_notice_vente' => 'Sale transaction notice',
	'Class:Incident/Attribute:transaction_notice_vente+' => '',
	'Class:Incident/Attribute:transaction_notice_vente/Value:yes' => 'Yes',
	'Class:Incident/Attribute:transaction_notice_vente/Value:yes+' => '',
	'Class:Incident/Attribute:transaction_notice_vente/Value:no' => 'No',
	'Class:Incident/Attribute:transaction_notice_vente/Value:no+' => '',
	
	// add attribute certificats de RS clients vente -->
	'Class:Incident/Attribute:sr_certificates_vente' => 'customer RS certificates',
	'Class:Incident/Attribute:sr_certificates_vente+' => '',
	'Class:Incident/Attribute:sr_certificates_vente/Value:yes' => 'Yes',
	'Class:Incident/Attribute:sr_certificates_vente/Value:yes+' => '',
	'Class:Incident/Attribute:sr_certificates_vente/Value:no' => 'No',
	'Class:Incident/Attribute:sr_certificates_vente/Value:no+' => '',

	// add attribute statement and documents facture banque -->
	'Class:Incident/Attribute:statements_and_documents_banque' => 'Bank statements and purchasing documents',
	'Class:Incident/Attribute:statements_and_documents_banque+' => '',
	'Class:Incident/Attribute:statements_and_documents_banque/Value:yes' => 'Yes',
	'Class:Incident/Attribute:statements_and_documents_banque/Value:yes+' => '',
	'Class:Incident/Attribute:statements_and_documents_banque/Value:no' => 'No',
	'Class:Incident/Attribute:statements_and_documents_banque/Value:no+' => '',

	// add attribute comment on reconciliation statement facture banque -->
	'Class:Incident/Attribute:comment_on_reconciliation_statement_banque' => 'comment on the reconciliation statement from the previous month',
	'Class:Incident/Attribute:comment_on_reconciliation_statement_banque+' => '',
	
	// add attribute exceptional order courrier (Visa) -->
	'Class:Incident/Attribute:exceptional_order_courrier' => 'exceptional order courrier (Visa)',
	'Class:Incident/Attribute:exceptional_order_courrier+' => '',
	'Class:Incident/Attribute:exceptional_order_courrier/Value:yes' => 'Yes',
	'Class:Incident/Attribute:exceptional_order_courrier/Value:yes+' => '',
	'Class:Incident/Attribute:exceptional_order_courrier/Value:no' => 'No',
	'Class:Incident/Attribute:exceptional_order_courrier/Value:no+' => '',

	// add attribute month courrier -->
	'Class:Incident/Attribute:month_courrier' => 'Month of courrier',
	'Class:Incident/Attribute:month_courrier+' => '',
	'Class:Incident/Attribute:month_courrier/Value:1' => 'January',
	'Class:Incident/Attribute:month_courrier/Value:1+' => '',
	'Class:Incident/Attribute:month_courrier/Value:2' => 'February',
	'Class:Incident/Attribute:month_courrier/Value:2+' => '',
	'Class:Incident/Attribute:month_courrier/Value:3' => 'March',
	'Class:Incident/Attribute:month_courrier/Value:3+' => '',
	'Class:Incident/Attribute:month_courrier/Value:4' => 'April',
	'Class:Incident/Attribute:month_courrier/Value:4+' => '',
	'Class:Incident/Attribute:month_courrier/Value:5' => 'May',
	'Class:Incident/Attribute:month_courrier/Value:5+' => '',
	'Class:Incident/Attribute:month_courrier/Value:6' => 'June',
	'Class:Incident/Attribute:month_courrier/Value:6+' => '',
	'Class:Incident/Attribute:month_courrier/Value:7' => 'July',
	'Class:Incident/Attribute:month_courrier/Value:7+' => '',
	'Class:Incident/Attribute:month_courrier/Value:8' => 'August',
	'Class:Incident/Attribute:month_courrier/Value:8+' => '',
	'Class:Incident/Attribute:month_courrier/Value:9' => 'September',
	'Class:Incident/Attribute:month_courrier/Value:9+' => '',
	'Class:Incident/Attribute:month_courrier/Value:10' => 'October',
	'Class:Incident/Attribute:month_courrier/Value:10+' => '',
	'Class:Incident/Attribute:month_courrier/Value:11' => 'november',
	'Class:Incident/Attribute:month_courrier/Value:11+' => '',
	'Class:Incident/Attribute:month_courrier/Value:12' => 'December',
	'Class:Incident/Attribute:month_courrier/Value:12+' => '',

	// add attribute to block client URL -->
	'Class:Incident/Attribute:block_client_ur' => 'Block client if :',
	'Class:Incident/Attribute:block_client_ur+' => '',
	'Class:Incident/Attribute:block_client_ur/Value:1' => 'He didn\'t make the payment',
	'Class:Incident/Attribute:block_client_ur/Value:1+' => '',
	'Class:Incident/Attribute:block_client_ur/Value:2' => 'He did pay his payments',
	'Class:Incident/Attribute:block_client_ur/Value:2+' => '',
	
	// ^ End Here customization des courrier -->
	'Class:Incident/Attribute:origin' => 'Origine',
	'Class:Incident/Attribute:origin+' => '~~',
	'Class:Incident/Attribute:origin/Value:mail' => 'Mail',
	'Class:Incident/Attribute:origin/Value:mail+' => 'Mail',
	'Class:Incident/Attribute:origin/Value:monitoring' => 'Monitoring',
	'Class:Incident/Attribute:origin/Value:monitoring+' => 'Monitoring',
	'Class:Incident/Attribute:origin/Value:phone' => 'Telefono',
	'Class:Incident/Attribute:origin/Value:phone+' => 'Telefono',
	'Class:Incident/Attribute:origin/Value:portal' => 'Portale',
	'Class:Incident/Attribute:origin/Value:portal+' => 'Portale',
	'Class:Incident/Attribute:service_id' => 'Servizio',
	'Class:Incident/Attribute:service_id+' => '~~',
	'Class:Incident/Attribute:service_name' => 'Nome del Serivizio',
	'Class:Incident/Attribute:service_name+' => '~~',
	'Class:Incident/Attribute:servicesubcategory_id' => 'Servizio sottocategoria',
	'Class:Incident/Attribute:servicesubcategory_id+' => 'Nome del Servizio sottocategoria',
	'Class:Incident/Attribute:servicesubcategory_name' => 'Nome del Servizio sottocategoria',
	'Class:Incident/Attribute:servicesubcategory_name+' => '~~',
	'Class:Incident/Attribute:escalation_flag' => 'Spunta importante',
	'Class:Incident/Attribute:escalation_flag+' => '~~',
	'Class:Incident/Attribute:escalation_flag/Value:no' => 'No',
	'Class:Incident/Attribute:escalation_flag/Value:no+' => 'No',
	'Class:Incident/Attribute:escalation_flag/Value:yes' => 'Si',
	'Class:Incident/Attribute:escalation_flag/Value:yes+' => 'Si',
	'Class:Incident/Attribute:escalation_reason' => 'Motivo importante',
	'Class:Incident/Attribute:escalation_reason+' => '~~',
	'Class:Incident/Attribute:assignment_date' => 'Data di assegnazione',
	'Class:Incident/Attribute:assignment_date+' => '~~',
	'Class:Incident/Attribute:resolution_date' => 'Data di risoluzione',
	'Class:Incident/Attribute:resolution_date+' => '~~',
	'Class:Incident/Attribute:last_pending_date' => 'Ultima data di messa in attesa',
	'Class:Incident/Attribute:last_pending_date+' => '~~',
	'Class:Incident/Attribute:cumulatedpending' => 'Attesa totale',
	'Class:Incident/Attribute:cumulatedpending+' => '~~',
	'Class:Incident/Attribute:tto' => 'tto',
	'Class:Incident/Attribute:tto+' => '~~',
	'Class:Incident/Attribute:ttr' => 'ttr',
	'Class:Incident/Attribute:ttr+' => '~~',
	'Class:Incident/Attribute:tto_escalation_deadline' => 'tto deadline',
	'Class:Incident/Attribute:tto_escalation_deadline+' => '~~',
	'Class:Incident/Attribute:sla_tto_passed' => 'SLA tto superato',
	'Class:Incident/Attribute:sla_tto_passed+' => '~~',
	'Class:Incident/Attribute:sla_tto_over' => 'SAL tto over',
	'Class:Incident/Attribute:sla_tto_over+' => '~~',
	'Class:Incident/Attribute:ttr_escalation_deadline' => 'ttr deadline',
	'Class:Incident/Attribute:ttr_escalation_deadline+' => '~~',
	'Class:Incident/Attribute:sla_ttr_passed' => 'SLA ttr superato',
	'Class:Incident/Attribute:sla_ttr_passed+' => '~~',
	'Class:Incident/Attribute:sla_ttr_over' => 'SLA tto over',
	'Class:Incident/Attribute:sla_ttr_over+' => '~~',
	'Class:Incident/Attribute:time_spent' => 'Tempo di risoluzione',
	'Class:Incident/Attribute:time_spent+' => '~~',
	/*
	'Class:Incident/Attribute:resolution_code' => 'Codice di risoluzione',
	'Class:Incident/Attribute:resolution_code+' => '~~',
	'Class:Incident/Attribute:resolution_code/Value:assistance' => 'Assistenza',
	'Class:Incident/Attribute:resolution_code/Value:assistance+' => 'Assistenza',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed' => 'Bug risolto',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed+' => 'Bug risolto',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair' => 'Riparato Hardware',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair+' => 'Riparato Hardware',
	'Class:Incident/Attribute:resolution_code/Value:other' => 'Altro',
	'Class:Incident/Attribute:resolution_code/Value:other+' => 'Altro',
	'Class:Incident/Attribute:resolution_code/Value:software patch' => 'Software patch',
	'Class:Incident/Attribute:resolution_code/Value:software patch+' => 'Software patch',
	'Class:Incident/Attribute:resolution_code/Value:system update' => 'Sistema aggiornato',
	'Class:Incident/Attribute:resolution_code/Value:system update+' => 'Sistema aggiornato',
	'Class:Incident/Attribute:resolution_code/Value:training' => 'Formazione',
	'Class:Incident/Attribute:resolution_code/Value:training+' => 'Formazione',
	*/
	// ^ START HERE Customization CFAC resolution de demande
	'Class:Incident/Attribute:resolution_code' => 'resolution code',
	'Class:Incident/Attribute:resolution_code+' => '~~',
	'Class:Incident/Attribute:resolution_code/Value:a valider' => 'To Validate',
	'Class:Incident/Attribute:resolution_code/Value:a valider+' => 'To Validate',
	'Class:Incident/Attribute:resolution_code/Value:en attente' => 'On Hold',
	'Class:Incident/Attribute:resolution_code/Value:en attente+' => 'On Hold',
	'Class:Incident/Attribute:resolution_code/Value:a refaire' => 'To Redo',
	'Class:Incident/Attribute:resolution_code/Value:a refaire+' => 'To Redo',
	'Class:Incident/Attribute:resolution_code/Value:a cloturer' => 'To Close',
	'Class:Incident/Attribute:resolution_code/Value:a cloturer+' => 'To Close',
	// ^ END HERE Customization CFAC resolution de demande
	'Class:Incident/Attribute:solution' => 'Soluzione',
	'Class:Incident/Attribute:solution+' => 'Ragione della messa in attesa',
	'Class:Incident/Attribute:pending_reason' => 'Ragione della messa in attesa',
	'Class:Incident/Attribute:pending_reason+' => 'Richiesta Padre',
	'Class:Incident/Attribute:parent_incident_id' => 'Incidente Padre',
	'Class:Incident/Attribute:parent_incident_id+' => 'Ref.',
	'Class:Incident/Attribute:parent_incident_ref' => 'Ref Indicente padre',
	'Class:Incident/Attribute:parent_incident_ref+' => 'Ref.',
	'Class:Incident/Attribute:parent_change_id' => 'Richiesta evoluzione padre',
	'Class:Incident/Attribute:parent_change_id+' => 'Richeista figlia',
	'Class:Incident/Attribute:parent_change_ref' => 'ref evoluzione',
	'Class:Incident/Attribute:parent_change_ref+' => 'Log Pubblico',
	'Class:Incident/Attribute:parent_problem_id' => 'Parent problem id~~',
	'Class:Incident/Attribute:parent_problem_id+' => '~~',
	'Class:Incident/Attribute:parent_problem_ref' => 'Parent problem ref~~',
	'Class:Incident/Attribute:parent_problem_ref+' => '~~',
	'Class:Incident/Attribute:related_request_list' => 'Richiesta figlio',
	'Class:Incident/Attribute:related_request_list+' => 'Veramente soddisfatto',
	'Class:Incident/Attribute:child_incidents_list' => 'Incidente figlio',
	'Class:Incident/Attribute:child_incidents_list+' => 'Tutte gli incidenti figlio legate a questo incidente',
	'Class:Incident/Attribute:public_log' => 'Log Pubblico',
	'Class:Incident/Attribute:public_log+' => 'Piuttosto insoddisfatto',
	'Class:Incident/Attribute:user_satisfaction' => 'Soddisfazione untente',
	'Class:Incident/Attribute:user_satisfaction+' => 'Veramente insoddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:1' => 'Veramente soddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:1+' => 'Veramente soddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:2' => 'Abbastanza soddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:2+' => 'Abbastanza soddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:3' => 'Piuttosto insoddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:3+' => 'Piuttosto insoddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:4' => 'Veramente insoddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:4+' => 'Veramente insoddisfatto',
	'Class:Incident/Attribute:user_comment' => 'Commento utente',
	'Class:Incident/Attribute:user_comment+' => 'Veramente insoddisfatto',
	'Class:Incident/Attribute:parent_incident_id_friendlyname' => 'parent_incident_id_friendlyname~~',
	'Class:Incident/Attribute:parent_incident_id_friendlyname+' => 'Segna come risolto',
	'Class:Incident/Stimulus:ev_assign' => 'Assegna',
	'Class:Incident/Stimulus:ev_assign+' => 'Ri-Apri',
	'Class:Incident/Stimulus:ev_reassign' => 'Ri-Assegna',
	'Class:Incident/Stimulus:ev_reassign+' => 'Non si può assegnare una richiesta padre a se stesso',
	'Class:Incident/Stimulus:ev_pending' => 'In Attesa',
	'Class:Incident/Stimulus:ev_pending+' => 'Risoluzione a cascata delle richieste figlie (ev_autoresolve), e allineare le seguenti caratteristiche: servizio, team, agente e risoluzione',
	'Class:Incident/Stimulus:ev_timeout' => 'Timeout',
	'Class:Incident/Stimulus:ev_timeout+' => 'Le mie richieste per questa organizzazione',
	'Class:Incident/Stimulus:ev_autoresolve' => 'Risoluzione automatica',
	'Class:Incident/Stimulus:ev_autoresolve+' => '~~',
	'Class:Incident/Stimulus:ev_autoclose' => 'Chiusura Automatica',
	'Class:Incident/Stimulus:ev_autoclose+' => '~~',
	'Class:Incident/Stimulus:ev_resolve' => 'Segna come risolto',
	'Class:Incident/Stimulus:ev_resolve+' => '~~',
	'Class:Incident/Stimulus:ev_close' => 'Chiudi la richiesta',
	'Class:Incident/Stimulus:ev_close+' => '~~',
	'Class:Incident/Stimulus:ev_reopen' => 'Ri-Apri',
	'Class:Incident/Stimulus:ev_reopen+' => '~~',
	'Class:Incident/Error:CannotAssignParentIncidentIdToSelf' => 'Non si può assegnare una richiesta padre a se stesso',

	'Class:Incident/Method:ResolveChildTickets' => 'ResolveChildTickets~~',
	'Class:Incident/Method:ResolveChildTickets+' => 'Risoluzione a cascata delle richieste figlie (ev_autoresolve), e allineare le seguenti caratteristiche: servizio, team, agente e risoluzione',
	'Tickets:Related:OpenIncidents' => 'Incidenti aperti',
));
