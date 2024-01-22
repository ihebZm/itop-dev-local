<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license    http://opensource.org/licenses/AGPL-3.0
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

Dict::Add('PL PL', 'Polish', 'Polski', array(
	'Menu:IncidentManagement' => 'Zarządzanie incydentami',
	'Menu:IncidentManagement+' => 'Zarządzanie incydentami',
	'Menu:Incident:Overview' => 'Przegląd',
	'Menu:Incident:Overview+' => 'Przegląd',
	'Menu:NewIncident' => 'Nowy incydent',
	'Menu:NewIncident+' => 'Utwórz nowe zgłoszenie incydentu',
	'Menu:SearchIncidents' => 'Szukaj incydentów',
	'Menu:SearchIncidents+' => 'Szukaj zgłoszeń incydentów',
	'Menu:Incident:Shortcuts' => 'Skróty',
	'Menu:Incident:Shortcuts+' => '',
	'Menu:Incident:MyIncidents' => 'Incydenty przypisane do mnie',
	'Menu:Incident:MyIncidents+' => 'Incydenty przypisane do mnie (jako Agent)',
	'Menu:Incident:EscalatedIncidents' => 'Pilne incydenty',
	'Menu:Incident:EscalatedIncidents+' => 'Pilne incydenty',
	'Menu:Incident:OpenIncidents' => 'Wszystkie otwarte incydenty',
	'Menu:Incident:OpenIncidents+' => 'Wszystkie otwarte incydenty',
	'UI-IncidentManagementOverview-IncidentByPriority-last-14-days' => 'Incydenty z ostatnich 14 dni według priorytetu',
	'UI-IncidentManagementOverview-Last-14-days' => 'Liczba incydentów z ostatnich 14 dni',
	'UI-IncidentManagementOverview-OpenIncidentByStatus' => 'Otwarte incydenty według statusu',
	'UI-IncidentManagementOverview-OpenIncidentByAgent' => 'Otwarte incydenty według agenta',
	'UI-IncidentManagementOverview-OpenIncidentByCustomer' => 'Otwarte incydenty według klienta',
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

Dict::Add('PL PL', 'Polish', 'Polski', array(
	'Class:Incident' => 'Incydent',
	'Class:Incident+' => '',
	'Class:Incident/Attribute:status' => 'Status',
	'Class:Incident/Attribute:status+' => '',
	'Class:Incident/Attribute:status/Value:new' => 'Nowy',
	'Class:Incident/Attribute:status/Value:new+' => '',
	'Class:Incident/Attribute:status/Value:escalated_tto' => 'Pilny czas podjęcia',
	'Class:Incident/Attribute:status/Value:escalated_tto+' => '',
	'Class:Incident/Attribute:status/Value:assigned' => 'Przypisany',
	'Class:Incident/Attribute:status/Value:assigned+' => '',
	'Class:Incident/Attribute:status/Value:escalated_ttr' => 'Pilny czas rozwiązania',
	'Class:Incident/Attribute:status/Value:escalated_ttr+' => '',
	'Class:Incident/Attribute:status/Value:waiting_for_approval' => 'Oczekujący',
	'Class:Incident/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:Incident/Attribute:status/Value:pending' => 'Trwający',
	'Class:Incident/Attribute:status/Value:pending+' => '',
	'Class:Incident/Attribute:status/Value:resolved' => 'Rozwiązany',
	'Class:Incident/Attribute:status/Value:resolved+' => '',
	'Class:Incident/Attribute:status/Value:closed' => 'Zamknięty',
	'Class:Incident/Attribute:status/Value:closed+' => '',
	'Class:Incident/Attribute:impact' => 'Wpływ',
	'Class:Incident/Attribute:impact+' => '',
	'Class:Incident/Attribute:impact/Value:1' => 'Wydział',
	'Class:Incident/Attribute:impact/Value:1+' => '',
	'Class:Incident/Attribute:impact/Value:2' => 'Usługa',
	'Class:Incident/Attribute:impact/Value:2+' => '',
	'Class:Incident/Attribute:impact/Value:3' => 'Osoba',
	'Class:Incident/Attribute:impact/Value:3+' => '',
	'Class:Incident/Attribute:priority' => 'Priorytet',
	'Class:Incident/Attribute:priority+' => '',
	'Class:Incident/Attribute:priority/Value:1' => 'krytyczny',
	'Class:Incident/Attribute:priority/Value:1+' => 'krytyczny',
	'Class:Incident/Attribute:priority/Value:2' => 'wysoki',
	'Class:Incident/Attribute:priority/Value:2+' => 'wysoki',
	'Class:Incident/Attribute:priority/Value:3' => 'średni',
	'Class:Incident/Attribute:priority/Value:3+' => 'średni',
	'Class:Incident/Attribute:priority/Value:4' => 'niski',
	'Class:Incident/Attribute:priority/Value:4+' => 'niski',
	'Class:Incident/Attribute:urgency' => 'Pilność',
	'Class:Incident/Attribute:urgency+' => '',
	'Class:Incident/Attribute:urgency/Value:1' => 'krytyczna',
	'Class:Incident/Attribute:urgency/Value:1+' => 'krytyczna',
	'Class:Incident/Attribute:urgency/Value:2' => 'wysoka',
	'Class:Incident/Attribute:urgency/Value:2+' => 'wysoka',
	'Class:Incident/Attribute:urgency/Value:3' => 'średnia',
	'Class:Incident/Attribute:urgency/Value:3+' => 'średnia',
	'Class:Incident/Attribute:urgency/Value:4' => 'niska',
	'Class:Incident/Attribute:urgency/Value:4+' => 'niska',
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
	'Class:Incident/Attribute:origin' => 'Pochodzenie',
	'Class:Incident/Attribute:origin+' => '',
	'Class:Incident/Attribute:origin/Value:mail' => 'e-mail',
	'Class:Incident/Attribute:origin/Value:mail+' => 'e-mail',
	'Class:Incident/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:Incident/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:Incident/Attribute:origin/Value:phone' => 'telefon',
	'Class:Incident/Attribute:origin/Value:phone+' => 'telefon',
	'Class:Incident/Attribute:origin/Value:portal' => 'portal',
	'Class:Incident/Attribute:origin/Value:portal+' => 'portal',
	'Class:Incident/Attribute:service_id' => 'Usługa',
	'Class:Incident/Attribute:service_id+' => '',
	'Class:Incident/Attribute:service_name' => 'Nazwa usługi',
	'Class:Incident/Attribute:service_name+' => '',
	'Class:Incident/Attribute:servicesubcategory_id' => 'Podkategoria usługi',
	'Class:Incident/Attribute:servicesubcategory_id+' => '',
	'Class:Incident/Attribute:servicesubcategory_name' => 'Nazwa podkategorii usługi',
	'Class:Incident/Attribute:servicesubcategory_name+' => '',
	'Class:Incident/Attribute:escalation_flag' => 'Flaga - Ważny',
	'Class:Incident/Attribute:escalation_flag+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:no' => 'Nie',
	'Class:Incident/Attribute:escalation_flag/Value:no+' => 'Nie',
	'Class:Incident/Attribute:escalation_flag/Value:yes' => 'Tak',
	'Class:Incident/Attribute:escalation_flag/Value:yes+' => 'Tak',
	'Class:Incident/Attribute:escalation_reason' => 'Powód - Ważny',
	'Class:Incident/Attribute:escalation_reason+' => '',
	'Class:Incident/Attribute:assignment_date' => 'Data przydziału',
	'Class:Incident/Attribute:assignment_date+' => '',
	'Class:Incident/Attribute:resolution_date' => 'Data rozwiązania',
	'Class:Incident/Attribute:resolution_date+' => '',
	'Class:Incident/Attribute:last_pending_date' => 'Ostatnia data trwania',
	'Class:Incident/Attribute:last_pending_date+' => '',
	'Class:Incident/Attribute:cumulatedpending' => 'Skumulowany czas trwania',
	'Class:Incident/Attribute:cumulatedpending+' => '',
	'Class:Incident/Attribute:tto' => 'czas na podjęcie (TTO)',
	'Class:Incident/Attribute:tto+' => '',
	'Class:Incident/Attribute:ttr' => 'czas na rozwiązanie (TTR)',
	'Class:Incident/Attribute:ttr+' => '',
	'Class:Incident/Attribute:tto_escalation_deadline' => 'Ostateczny termin podjęcia (TTO)',
	'Class:Incident/Attribute:tto_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_tto_passed' => 'Gwarantowany czas podjęcia (SLA tto) zaliczony',
	'Class:Incident/Attribute:sla_tto_passed+' => '',
	'Class:Incident/Attribute:sla_tto_over' => 'Gwarantowany czas podjęcia (SLA tto) skończył się',
	'Class:Incident/Attribute:sla_tto_over+' => '',
	'Class:Incident/Attribute:ttr_escalation_deadline' => 'Ostateczny termin rozwiązania TTR',
	'Class:Incident/Attribute:ttr_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_ttr_passed' => 'Gwarantowany czas rozwiązania (SLA ttr) zaliczony',
	'Class:Incident/Attribute:sla_ttr_passed+' => '',
	'Class:Incident/Attribute:sla_ttr_over' => 'Gwarantowany czas rozwiązania (SLA ttr) skończył się',
	'Class:Incident/Attribute:sla_ttr_over+' => '',
	'Class:Incident/Attribute:time_spent' => 'Opóźnienie rozwiązania',
	'Class:Incident/Attribute:time_spent+' => '',
	/*
	'Class:Incident/Attribute:resolution_code' => 'Kod rozwiązania',
	'Class:Incident/Attribute:resolution_code+' => '',
	'Class:Incident/Attribute:resolution_code/Value:assistance' => 'wsparcie',
	'Class:Incident/Attribute:resolution_code/Value:assistance+' => 'wsparcie',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed' => 'usterka naprawiona',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed+' => 'usterka naprawiona',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair' => 'naprawa sprzętu',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair+' => 'naprawa sprzętu',
	'Class:Incident/Attribute:resolution_code/Value:other' => 'inne',
	'Class:Incident/Attribute:resolution_code/Value:other+' => 'inne',
	'Class:Incident/Attribute:resolution_code/Value:software patch' => 'poprawka oprogramowania',
	'Class:Incident/Attribute:resolution_code/Value:software patch+' => 'poprawka oprogramowania',
	'Class:Incident/Attribute:resolution_code/Value:system update' => 'aktualizacja systemu',
	'Class:Incident/Attribute:resolution_code/Value:system update+' => 'aktualizacja systemu',
	'Class:Incident/Attribute:resolution_code/Value:training' => 'szkolenie',
	'Class:Incident/Attribute:resolution_code/Value:training+' => 'szkolenie',
	*/
	// ^ START HERE Customization CFAC resolution de demande
	'Class:Incident/Attribute:resolution_code' => 'resolution code',
	'Class:Incident/Attribute:resolution_code+' => '',
	'Class:Incident/Attribute:resolution_code/Value:a valider' => 'To Validate',
	'Class:Incident/Attribute:resolution_code/Value:a valider+' => 'To Validate',
	'Class:Incident/Attribute:resolution_code/Value:en attente' => 'On Hold',
	'Class:Incident/Attribute:resolution_code/Value:en attente+' => 'On Hold',
	'Class:Incident/Attribute:resolution_code/Value:a refaire' => 'To Redo',
	'Class:Incident/Attribute:resolution_code/Value:a refaire+' => 'To Redo',
	'Class:Incident/Attribute:resolution_code/Value:a cloturer' => 'To Close',
	'Class:Incident/Attribute:resolution_code/Value:a cloturer+' => 'To Close',
	// ^ END HERE Customization CFAC resolution de demande
	'Class:Incident/Attribute:solution' => 'Rozwiązanie',
	'Class:Incident/Attribute:solution+' => '',
	'Class:Incident/Attribute:pending_reason' => 'Powód oczekiwania',
	'Class:Incident/Attribute:pending_reason+' => '',
	'Class:Incident/Attribute:parent_incident_id' => 'Źródłowy incydent',
	'Class:Incident/Attribute:parent_incident_id+' => '',
	'Class:Incident/Attribute:parent_incident_ref' => 'Powiązany źródłowy incydent',
	'Class:Incident/Attribute:parent_incident_ref+' => '',
	'Class:Incident/Attribute:parent_change_id' => 'Źródłowa zmiana',
	'Class:Incident/Attribute:parent_change_id+' => '',
	'Class:Incident/Attribute:parent_change_ref' => 'Powiązana źródłowa zmiana',
	'Class:Incident/Attribute:parent_change_ref+' => '',
	'Class:Incident/Attribute:parent_problem_id' => 'Źródłowy problem',
	'Class:Incident/Attribute:parent_problem_id+' => '',
	'Class:Incident/Attribute:parent_problem_ref' => 'Powiązany źródłowy problem',
	'Class:Incident/Attribute:parent_problem_ref+' => '',
	'Class:Incident/Attribute:related_request_list' => 'Zależne zgłoszenia',
	'Class:Incident/Attribute:related_request_list+' => '',
	'Class:Incident/Attribute:child_incidents_list' => 'Zależne incydenty',
	'Class:Incident/Attribute:child_incidents_list+' => 'Wszystkie podrzędne incydenty związane z tym incydentem',
	'Class:Incident/Attribute:public_log' => 'Dziennik publiczny',
	'Class:Incident/Attribute:public_log+' => '',
	'Class:Incident/Attribute:user_satisfaction' => 'Zadowolenie użytkownika',
	'Class:Incident/Attribute:user_satisfaction+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:1' => 'Bardzo zadowolony',
	'Class:Incident/Attribute:user_satisfaction/Value:1+' => 'Bardzo zadowolony',
	'Class:Incident/Attribute:user_satisfaction/Value:2' => 'Dość zadowolony',
	'Class:Incident/Attribute:user_satisfaction/Value:2+' => 'Dość zadowolony',
	'Class:Incident/Attribute:user_satisfaction/Value:3' => 'Raczej niezadowolony',
	'Class:Incident/Attribute:user_satisfaction/Value:3+' => 'Raczej niezadowolony',
	'Class:Incident/Attribute:user_satisfaction/Value:4' => 'Bardzo niezadowolony',
	'Class:Incident/Attribute:user_satisfaction/Value:4+' => 'Bardzo niezadowolony',
	'Class:Incident/Attribute:user_comment' => 'Komentarz użytkownika',
	'Class:Incident/Attribute:user_comment+' => '',
	'Class:Incident/Attribute:parent_incident_id_friendlyname' => 'parent_incident_id_friendlyname',
	'Class:Incident/Attribute:parent_incident_id_friendlyname+' => '',
	'Class:Incident/Stimulus:ev_assign' => 'Przydzielony',
	'Class:Incident/Stimulus:ev_assign+' => '',
	'Class:Incident/Stimulus:ev_reassign' => 'Przydzielony ponownie',
	'Class:Incident/Stimulus:ev_reassign+' => '',
	'Class:Incident/Stimulus:ev_pending' => 'Trwający',
	'Class:Incident/Stimulus:ev_pending+' => '',
	'Class:Incident/Stimulus:ev_timeout' => 'Po czasie',
	'Class:Incident/Stimulus:ev_timeout+' => '',
	'Class:Incident/Stimulus:ev_autoresolve' => 'Automatyczne rozwiązanie',
	'Class:Incident/Stimulus:ev_autoresolve+' => '',
	'Class:Incident/Stimulus:ev_autoclose' => 'Automatyczne zamknięcie',
	'Class:Incident/Stimulus:ev_autoclose+' => '',
	'Class:Incident/Stimulus:ev_resolve' => 'Oznacz jako rozwiązany',
	'Class:Incident/Stimulus:ev_resolve+' => '',
	'Class:Incident/Stimulus:ev_close' => 'Zamknij to zgłoszenie',
	'Class:Incident/Stimulus:ev_close+' => '',
	'Class:Incident/Stimulus:ev_reopen' => 'Otwórz ponownie',
	'Class:Incident/Stimulus:ev_reopen+' => '',
	'Class:Incident/Error:CannotAssignParentIncidentIdToSelf' => 'Nie można przypisać zdarzenia nadrzędnego do samego zdarzenia',

	'Class:Incident/Method:ResolveChildTickets' => 'Rozpatrz zgłoszenia podrzędne',
	'Class:Incident/Method:ResolveChildTickets+' => 'Połącz rozwiązanie kaskadowo ze zgłoszeniem podrzędnym (ev_autoresolve) i dopasuj następujące cechy: usługa, zespół, agent, informacje o rozwiązaniu',
	'Tickets:Related:OpenIncidents' => 'Otwarte incydenty',
));
