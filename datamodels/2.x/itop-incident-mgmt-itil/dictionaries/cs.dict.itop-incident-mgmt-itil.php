<?php
// Copyright (C) 2010-2021 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>
/**
 * Localized data.
 *
 * @author      Lukáš Dvořák <lukas.dvorak@itopportal.cz>
 * @author      Daniel Rokos <daniel.rokos@itopportal.cz>
 * @copyright   Copyright (C) 2010-2021 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Menu:IncidentManagement' => 'Správa incidentů',
	'Menu:IncidentManagement+' => 'Správa incidentů',
	'Menu:Incident:Overview' => 'Přehled',
	'Menu:Incident:Overview+' => 'Přehled',
	'Menu:NewIncident' => 'Nový incident',
	'Menu:NewIncident+' => 'Vytvořit nový tiket incidentu',
	'Menu:SearchIncidents' => 'Hledat incidenty',
	'Menu:SearchIncidents+' => 'Hledat tikety incidentů',
	'Menu:Incident:Shortcuts' => 'Odkazy',
	'Menu:Incident:Shortcuts+' => '',
	'Menu:Incident:MyIncidents' => 'Incidenty přidělené mně',
	'Menu:Incident:MyIncidents+' => 'Incidenty přidělené mně (jako řešiteli)',
	'Menu:Incident:EscalatedIncidents' => 'Eskalované incidenty',
	'Menu:Incident:EscalatedIncidents+' => 'Eskalované incidenty',
	'Menu:Incident:OpenIncidents' => 'Všechny otevřené incidenty',
	'Menu:Incident:OpenIncidents+' => 'Všechny otevřené incidenty',
	'UI-IncidentManagementOverview-IncidentByPriority-last-14-days' => 'Incidenty posledních 14 dní podle priority',
	'UI-IncidentManagementOverview-Last-14-days' => 'Počet incidentů za posledních 14 dní',
	'UI-IncidentManagementOverview-OpenIncidentByStatus' => 'Otevřené incidenty podle stavu',
	'UI-IncidentManagementOverview-OpenIncidentByAgent' => 'Otevřené incidenty podle řešitele',
	'UI-IncidentManagementOverview-OpenIncidentByCustomer' => 'Otevřené incidenty podle zákazníka',
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

Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:Incident' => 'Incident',
	'Class:Incident+' => '',
	'Class:Incident/Attribute:status' => 'Stav',
	'Class:Incident/Attribute:status+' => '',
	'Class:Incident/Attribute:status/Value:new' => 'Nový',
	'Class:Incident/Attribute:status/Value:new+' => '',
	'Class:Incident/Attribute:status/Value:escalated_tto' => 'Eskalovaný TTO',
	'Class:Incident/Attribute:status/Value:escalated_tto+' => '',
	'Class:Incident/Attribute:status/Value:assigned' => 'Přidělený',
	'Class:Incident/Attribute:status/Value:assigned+' => '',
	'Class:Incident/Attribute:status/Value:escalated_ttr' => 'Eskalovaný TTR',
	'Class:Incident/Attribute:status/Value:escalated_ttr+' => '',
	'Class:Incident/Attribute:status/Value:waiting_for_approval' => 'Čeká na schválení',
	'Class:Incident/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:Incident/Attribute:status/Value:pending' => 'Pozastaven',
	'Class:Incident/Attribute:status/Value:pending+' => '',
	'Class:Incident/Attribute:status/Value:resolved' => 'Vyřešený',
	'Class:Incident/Attribute:status/Value:resolved+' => '',
	'Class:Incident/Attribute:status/Value:closed' => 'Uzavřený',
	'Class:Incident/Attribute:status/Value:closed+' => '',
	'Class:Incident/Attribute:impact' => 'Dopad',
	'Class:Incident/Attribute:impact+' => '',
	'Class:Incident/Attribute:impact/Value:1' => 'Oddělení',
	'Class:Incident/Attribute:impact/Value:1+' => '',
	'Class:Incident/Attribute:impact/Value:2' => 'Služba',
	'Class:Incident/Attribute:impact/Value:2+' => '',
	'Class:Incident/Attribute:impact/Value:3' => 'Osoba',
	'Class:Incident/Attribute:impact/Value:3+' => '',
	'Class:Incident/Attribute:priority' => 'Priorita',
	'Class:Incident/Attribute:priority+' => '',
	'Class:Incident/Attribute:priority/Value:1' => 'kritická',
	'Class:Incident/Attribute:priority/Value:1+' => '',
	'Class:Incident/Attribute:priority/Value:2' => 'vysoká',
	'Class:Incident/Attribute:priority/Value:2+' => '',
	'Class:Incident/Attribute:priority/Value:3' => 'střední',
	'Class:Incident/Attribute:priority/Value:3+' => '',
	'Class:Incident/Attribute:priority/Value:4' => 'nízká',
	'Class:Incident/Attribute:priority/Value:4+' => '',
	'Class:Incident/Attribute:urgency' => 'Naléhavost',
	'Class:Incident/Attribute:urgency+' => '',
	'Class:Incident/Attribute:urgency/Value:1' => 'kritická',
	'Class:Incident/Attribute:urgency/Value:1+' => '',
	'Class:Incident/Attribute:urgency/Value:2' => 'vysoká',
	'Class:Incident/Attribute:urgency/Value:2+' => '',
	'Class:Incident/Attribute:urgency/Value:3' => 'střední',
	'Class:Incident/Attribute:urgency/Value:3+' => '',
	'Class:Incident/Attribute:urgency/Value:4' => 'nízká',
	'Class:Incident/Attribute:urgency/Value:4+' => '',
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
	'Class:Incident/Attribute:origin' => 'Původ',
	'Class:Incident/Attribute:origin+' => '',
	'Class:Incident/Attribute:origin/Value:mail' => 'email',
	'Class:Incident/Attribute:origin/Value:mail+' => '',
	'Class:Incident/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:Incident/Attribute:origin/Value:monitoring+' => '',
	'Class:Incident/Attribute:origin/Value:phone' => 'telefon',
	'Class:Incident/Attribute:origin/Value:phone+' => '',
	'Class:Incident/Attribute:origin/Value:portal' => 'portál',
	'Class:Incident/Attribute:origin/Value:portal+' => '',
	'Class:Incident/Attribute:service_id' => 'Služba',
	'Class:Incident/Attribute:service_id+' => '',
	'Class:Incident/Attribute:service_name' => 'Název služby',
	'Class:Incident/Attribute:service_name+' => '',
	'Class:Incident/Attribute:servicesubcategory_id' => 'Podkategorie služeb',
	'Class:Incident/Attribute:servicesubcategory_id+' => '',
	'Class:Incident/Attribute:servicesubcategory_name' => 'Název podkategorie služeb',
	'Class:Incident/Attribute:servicesubcategory_name+' => '',
	'Class:Incident/Attribute:escalation_flag' => 'Eskalovat',
	'Class:Incident/Attribute:escalation_flag+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:no' => 'Ne',
	'Class:Incident/Attribute:escalation_flag/Value:no+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:yes' => 'Ano',
	'Class:Incident/Attribute:escalation_flag/Value:yes+' => '',
	'Class:Incident/Attribute:escalation_reason' => 'Důvod eskalace',
	'Class:Incident/Attribute:escalation_reason+' => '',
	'Class:Incident/Attribute:assignment_date' => 'Datum přidělení',
	'Class:Incident/Attribute:assignment_date+' => '',
	'Class:Incident/Attribute:resolution_date' => 'Datum vyřešení',
	'Class:Incident/Attribute:resolution_date+' => '',
	'Class:Incident/Attribute:last_pending_date' => 'Datum posledního pozastavení',
	'Class:Incident/Attribute:last_pending_date+' => '',
	'Class:Incident/Attribute:cumulatedpending' => 'Kumulovaná doba pozastavení',
	'Class:Incident/Attribute:cumulatedpending+' => '',
	'Class:Incident/Attribute:tto' => 'tto',
	'Class:Incident/Attribute:tto+' => '',
	'Class:Incident/Attribute:ttr' => 'ttr',
	'Class:Incident/Attribute:ttr+' => '',
	'Class:Incident/Attribute:tto_escalation_deadline' => 'Požadovaný čas přidělení',
	'Class:Incident/Attribute:tto_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_tto_passed' => 'TTO vypršel',
	'Class:Incident/Attribute:sla_tto_passed+' => '',
	'Class:Incident/Attribute:sla_tto_over' => 'TTO zmeškán o',
	'Class:Incident/Attribute:sla_tto_over+' => '',
	'Class:Incident/Attribute:ttr_escalation_deadline' => 'Požadovaný čas vyřešení',
	'Class:Incident/Attribute:ttr_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_ttr_passed' => 'TTR vypršel',
	'Class:Incident/Attribute:sla_ttr_passed+' => '',
	'Class:Incident/Attribute:sla_ttr_over' => 'TTR zmeškán o',
	'Class:Incident/Attribute:sla_ttr_over+' => '',
	'Class:Incident/Attribute:time_spent' => 'Doba řešení',
	'Class:Incident/Attribute:time_spent+' => '',
	/*
	'Class:Incident/Attribute:resolution_code' => 'Kód řešení',
	'Class:Incident/Attribute:resolution_code+' => '',
	'Class:Incident/Attribute:resolution_code/Value:assistance' => 'asistence',
	'Class:Incident/Attribute:resolution_code/Value:assistance+' => '',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed' => 'oprava SW (bugfix)',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed+' => '',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair' => 'oprava HW',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair+' => '',
	'Class:Incident/Attribute:resolution_code/Value:other' => 'jiné',
	'Class:Incident/Attribute:resolution_code/Value:other+' => '',
	'Class:Incident/Attribute:resolution_code/Value:software patch' => 'oprava SW (patch)',
	'Class:Incident/Attribute:resolution_code/Value:software patch+' => '',
	'Class:Incident/Attribute:resolution_code/Value:system update' => 'aktualizace systému',
	'Class:Incident/Attribute:resolution_code/Value:system update+' => '',
	'Class:Incident/Attribute:resolution_code/Value:training' => 'školení',
	'Class:Incident/Attribute:resolution_code/Value:training+' => '',
	*/
	// ^ START HERE Customization CFAC resolution de demande
	'Class:Incident/Attribute:resolution_code' => 'resolution code',
	'Class:Incident/Attribute:resolution_code+' => '',
	'Class:Incident/Attribute:resolution_code/Value:a valider' => 'A Valider',
	'Class:Incident/Attribute:resolution_code/Value:a valider+' => '',
	'Class:Incident/Attribute:resolution_code/Value:en attente' => 'En Attente',
	'Class:Incident/Attribute:resolution_code/Value:en attente+' => '',
	'Class:Incident/Attribute:resolution_code/Value:a refaire' => 'A Refaire',
	'Class:Incident/Attribute:resolution_code/Value:a refaire+' => '',
	'Class:Incident/Attribute:resolution_code/Value:a cloturer' => 'A Cloturer',
	'Class:Incident/Attribute:resolution_code/Value:a cloturer+' => '',
	// ^ END HERE Customization CFAC resolution de demande
	'Class:Incident/Attribute:solution' => 'Řešení',
	'Class:Incident/Attribute:solution+' => '',
	'Class:Incident/Attribute:pending_reason' => 'Důvod pozastavení',
	'Class:Incident/Attribute:pending_reason+' => '',
	'Class:Incident/Attribute:parent_incident_id' => 'Nadřazený incident',
	'Class:Incident/Attribute:parent_incident_id+' => '',
	'Class:Incident/Attribute:parent_incident_ref' => 'Odkaz na nadřazený incident',
	'Class:Incident/Attribute:parent_incident_ref+' => '',
	'Class:Incident/Attribute:parent_change_id' => 'Nadřazená změna',
	'Class:Incident/Attribute:parent_change_id+' => '',
	'Class:Incident/Attribute:parent_change_ref' => 'Odkaz na nadřazenou změnu',
	'Class:Incident/Attribute:parent_change_ref+' => '',
	'Class:Incident/Attribute:parent_problem_id' => 'Nadřazený problém',
	'Class:Incident/Attribute:parent_problem_id+' => '',
	'Class:Incident/Attribute:parent_problem_ref' => 'Odkaz na nadřazený problém',
	'Class:Incident/Attribute:parent_problem_ref+' => '',
	'Class:Incident/Attribute:related_request_list' => 'Seznam souvisejících požadavků',
	'Class:Incident/Attribute:related_request_list+' => '',
	'Class:Incident/Attribute:child_incidents_list' => 'Podřízené incidenty',
	'Class:Incident/Attribute:child_incidents_list+' => 'všechny podřízené incidenty spojené s tímto incidentem',
	'Class:Incident/Attribute:public_log' => 'Veřejný záznam',
	'Class:Incident/Attribute:public_log+' => '',
	'Class:Incident/Attribute:user_satisfaction' => 'Spokojenost uživatele',
	'Class:Incident/Attribute:user_satisfaction+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:1' => 'Velmi spokojen',
	'Class:Incident/Attribute:user_satisfaction/Value:1+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:2' => 'Docela spokojen',
	'Class:Incident/Attribute:user_satisfaction/Value:2+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:3' => 'Spíše nespokojen',
	'Class:Incident/Attribute:user_satisfaction/Value:3+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:4' => 'Velmi nespokojen',
	'Class:Incident/Attribute:user_satisfaction/Value:4+' => '',
	'Class:Incident/Attribute:user_comment' => 'Komentář uživatele',
	'Class:Incident/Attribute:user_comment+' => '',
	'Class:Incident/Attribute:parent_incident_id_friendlyname' => 'Popisný název nadřízeného incidentu',
	'Class:Incident/Attribute:parent_incident_id_friendlyname+' => '',
	'Class:Incident/Stimulus:ev_assign' => 'Přidělit',
	'Class:Incident/Stimulus:ev_assign+' => '',
	'Class:Incident/Stimulus:ev_reassign' => 'Přidělit znovu',
	'Class:Incident/Stimulus:ev_reassign+' => '',
	'Class:Incident/Stimulus:ev_pending' => 'Pozastavit',
	'Class:Incident/Stimulus:ev_pending+' => '',
	'Class:Incident/Stimulus:ev_timeout' => 'Prodleva',
	'Class:Incident/Stimulus:ev_timeout+' => '',
	'Class:Incident/Stimulus:ev_autoresolve' => 'Automatické vyřešení',
	'Class:Incident/Stimulus:ev_autoresolve+' => '',
	'Class:Incident/Stimulus:ev_autoclose' => 'Automatické uzavření',
	'Class:Incident/Stimulus:ev_autoclose+' => '',
	'Class:Incident/Stimulus:ev_resolve' => 'Označit jako vyřešené',
	'Class:Incident/Stimulus:ev_resolve+' => '',
	'Class:Incident/Stimulus:ev_close' => 'Uzavřít požadavek',
	'Class:Incident/Stimulus:ev_close+' => '',
	'Class:Incident/Stimulus:ev_reopen' => 'Znovu otevřít',
	'Class:Incident/Stimulus:ev_reopen+' => '',
	'Class:Incident/Error:CannotAssignParentIncidentIdToSelf' => 'Incident nemůže být nadřazený sám sobě',

	'Class:Incident/Method:ResolveChildTickets' => 'Vyřešit podřízené tikety',
	'Class:Incident/Method:ResolveChildTickets+' => 'Cascade the resolution to child ticket (ev_autoresolve), and align the following characteristics: service, team, agent, resolution info~~',
	'Tickets:Related:OpenIncidents' => 'Otevřené incidenty',
));
