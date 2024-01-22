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
 * Localized data
 *
 * @copyright   Copyright (C) 2010-2021 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Menu:IncidentManagement' => 'Gerenciamento Incidentes',
	'Menu:IncidentManagement+' => 'Gerenciamento Incidentes',
	'Menu:Incident:Overview' => 'Visão geral',
	'Menu:Incident:Overview+' => 'Visão geral',
	'Menu:NewIncident' => 'Novo incidente',
	'Menu:NewIncident+' => 'Criar uma novo incidente',
	'Menu:SearchIncidents' => 'Pesquisar por incidentes',
	'Menu:SearchIncidents+' => 'Pesquisar por solicitações incidentes',
	'Menu:Incident:Shortcuts' => 'Atalho',
	'Menu:Incident:Shortcuts+' => '',
	'Menu:Incident:MyIncidents' => 'Incidentes atribuídos para mim',
	'Menu:Incident:MyIncidents+' => 'Incidentes atribuídos para mim (como agente)',
	'Menu:Incident:EscalatedIncidents' => 'Incidentes escalados',
	'Menu:Incident:EscalatedIncidents+' => 'Incidentes escalados',
	'Menu:Incident:OpenIncidents' => 'Todos incidentes abertos',
	'Menu:Incident:OpenIncidents+' => 'Todos incidentes abertos',
	'UI-IncidentManagementOverview-IncidentByPriority-last-14-days' => 'Últimos 14 dias por incidente prioridade',
	'UI-IncidentManagementOverview-Last-14-days' => 'Últimos 14 dias por incidente prioridade',
	'UI-IncidentManagementOverview-OpenIncidentByStatus' => 'Incidentes abertos por estado',
	'UI-IncidentManagementOverview-OpenIncidentByAgent' => 'Incidentes abertos por agentes',
	'UI-IncidentManagementOverview-OpenIncidentByCustomer' => 'Incidentes abertos por cliente',
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

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:Incident' => 'Incidente',
	'Class:Incident+' => '',
	'Class:Incident/Attribute:status' => 'Estado',
	'Class:Incident/Attribute:status+' => '',
	'Class:Incident/Attribute:status/Value:new' => 'Novo',
	'Class:Incident/Attribute:status/Value:new+' => '',
	'Class:Incident/Attribute:status/Value:escalated_tto' => 'TTO escalado',
	'Class:Incident/Attribute:status/Value:escalated_tto+' => '',
	'Class:Incident/Attribute:status/Value:assigned' => 'Atribuído',
	'Class:Incident/Attribute:status/Value:assigned+' => '',
	'Class:Incident/Attribute:status/Value:escalated_ttr' => 'TTR escalado',
	'Class:Incident/Attribute:status/Value:escalated_ttr+' => '',
	'Class:Incident/Attribute:status/Value:waiting_for_approval' => 'Aguardando aprovação',
	'Class:Incident/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:Incident/Attribute:status/Value:pending' => 'Pendente',
	'Class:Incident/Attribute:status/Value:pending+' => '',
	'Class:Incident/Attribute:status/Value:resolved' => 'Resolvido',
	'Class:Incident/Attribute:status/Value:resolved+' => '',
	'Class:Incident/Attribute:status/Value:closed' => 'Fechado',
	'Class:Incident/Attribute:status/Value:closed+' => '',
	'Class:Incident/Attribute:impact' => 'Impacto',
	'Class:Incident/Attribute:impact+' => '',
	'Class:Incident/Attribute:impact/Value:1' => 'Um departamento',
	'Class:Incident/Attribute:impact/Value:1+' => '',
	'Class:Incident/Attribute:impact/Value:2' => 'Um serviço',
	'Class:Incident/Attribute:impact/Value:2+' => '',
	'Class:Incident/Attribute:impact/Value:3' => 'Uma pessoa',
	'Class:Incident/Attribute:impact/Value:3+' => '',
	'Class:Incident/Attribute:priority' => 'Prioridade',
	'Class:Incident/Attribute:priority+' => '',
	'Class:Incident/Attribute:priority/Value:1' => 'Crítica',
	'Class:Incident/Attribute:priority/Value:1+' => 'Crítica',
	'Class:Incident/Attribute:priority/Value:2' => 'Alta',
	'Class:Incident/Attribute:priority/Value:2+' => 'Alta',
	'Class:Incident/Attribute:priority/Value:3' => 'Média',
	'Class:Incident/Attribute:priority/Value:3+' => 'Média',
	'Class:Incident/Attribute:priority/Value:4' => 'Baixa',
	'Class:Incident/Attribute:priority/Value:4+' => 'Baixa',
	'Class:Incident/Attribute:urgency' => 'Urgência',
	'Class:Incident/Attribute:urgency+' => '',
	'Class:Incident/Attribute:urgency/Value:1' => 'Crítica',
	'Class:Incident/Attribute:urgency/Value:1+' => 'Crítica',
	'Class:Incident/Attribute:urgency/Value:2' => 'Alta',
	'Class:Incident/Attribute:urgency/Value:2+' => 'Alta',
	'Class:Incident/Attribute:urgency/Value:3' => 'Média',
	'Class:Incident/Attribute:urgency/Value:3+' => 'Média',
	'Class:Incident/Attribute:urgency/Value:4' => 'Baixa',
	'Class:Incident/Attribute:urgency/Value:4+' => 'Baixa',
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
	'Class:Incident/Attribute:origin' => 'Origem',
	'Class:Incident/Attribute:origin+' => '',
	'Class:Incident/Attribute:origin/Value:mail' => 'Email',
	'Class:Incident/Attribute:origin/Value:mail+' => 'Email',
	'Class:Incident/Attribute:origin/Value:monitoring' => 'Monitoramento',
	'Class:Incident/Attribute:origin/Value:monitoring+' => 'Monitoramento',
	'Class:Incident/Attribute:origin/Value:phone' => 'Telefone',
	'Class:Incident/Attribute:origin/Value:phone+' => 'Telefone',
	'Class:Incident/Attribute:origin/Value:portal' => 'Portal',
	'Class:Incident/Attribute:origin/Value:portal+' => 'Portal',
	'Class:Incident/Attribute:service_id' => 'Serviço',
	'Class:Incident/Attribute:service_id+' => '',
	'Class:Incident/Attribute:service_name' => 'Nome serviço',
	'Class:Incident/Attribute:service_name+' => '',
	'Class:Incident/Attribute:servicesubcategory_id' => 'Sub-categoria serviço',
	'Class:Incident/Attribute:servicesubcategory_id+' => '',
	'Class:Incident/Attribute:servicesubcategory_name' => 'Nome Sub-categoria serviço',
	'Class:Incident/Attribute:servicesubcategory_name+' => '',
	'Class:Incident/Attribute:escalation_flag' => 'Alerta vermelho',
	'Class:Incident/Attribute:escalation_flag+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:no' => 'Não',
	'Class:Incident/Attribute:escalation_flag/Value:no+' => 'Não',
	'Class:Incident/Attribute:escalation_flag/Value:yes' => 'Sim',
	'Class:Incident/Attribute:escalation_flag/Value:yes+' => 'Sim',
	'Class:Incident/Attribute:escalation_reason' => 'Razão alerta',
	'Class:Incident/Attribute:escalation_reason+' => '',
	'Class:Incident/Attribute:assignment_date' => 'Data atribuição',
	'Class:Incident/Attribute:assignment_date+' => '',
	'Class:Incident/Attribute:resolution_date' => 'Data resolução',
	'Class:Incident/Attribute:resolution_date+' => '',
	'Class:Incident/Attribute:last_pending_date' => 'Última data pendente',
	'Class:Incident/Attribute:last_pending_date+' => '',
	'Class:Incident/Attribute:cumulatedpending' => 'Pendências acumuladas',
	'Class:Incident/Attribute:cumulatedpending+' => '',
	'Class:Incident/Attribute:tto' => 'TTO',
	'Class:Incident/Attribute:tto+' => 'Tempo de atribuição',
	'Class:Incident/Attribute:ttr' => 'TTR',
	'Class:Incident/Attribute:ttr+' => 'Tempo de resolução',
	'Class:Incident/Attribute:tto_escalation_deadline' => 'Prazo determinado TTO',
	'Class:Incident/Attribute:tto_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_tto_passed' => 'SLA TTO passou',
	'Class:Incident/Attribute:sla_tto_passed+' => '',
	'Class:Incident/Attribute:sla_tto_over' => 'SLA TTO acima',
	'Class:Incident/Attribute:sla_tto_over+' => '',
	'Class:Incident/Attribute:ttr_escalation_deadline' => 'Prazo determinado TTR',
	'Class:Incident/Attribute:ttr_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_ttr_passed' => 'SLA TTR passou',
	'Class:Incident/Attribute:sla_ttr_passed+' => '',
	'Class:Incident/Attribute:sla_ttr_over' => 'SLA TTR acima',
	'Class:Incident/Attribute:sla_ttr_over+' => '',
	'Class:Incident/Attribute:time_spent' => 'Atraso resolução',
	'Class:Incident/Attribute:time_spent+' => '',
	/*
	'Class:Incident/Attribute:resolution_code' => 'Código resolução',
	'Class:Incident/Attribute:resolution_code+' => '',
	'Class:Incident/Attribute:resolution_code/Value:assistance' => 'Assistência',
	'Class:Incident/Attribute:resolution_code/Value:assistance+' => 'Assistência',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed' => 'Bug corrigido',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed+' => 'Bug corrigido',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair' => 'Hardware reparado',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair+' => 'Hardware reparado',
	'Class:Incident/Attribute:resolution_code/Value:other' => 'Outro',
	'Class:Incident/Attribute:resolution_code/Value:other+' => 'Outro',
	'Class:Incident/Attribute:resolution_code/Value:software patch' => 'Software patch',
	'Class:Incident/Attribute:resolution_code/Value:software patch+' => 'Software patch',
	'Class:Incident/Attribute:resolution_code/Value:system update' => 'Atualização sistema',
	'Class:Incident/Attribute:resolution_code/Value:system update+' => 'Atualização sistema',
	'Class:Incident/Attribute:resolution_code/Value:training' => 'Treinamento',
	'Class:Incident/Attribute:resolution_code/Value:training+' => 'Treinamento',
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
	'Class:Incident/Attribute:solution' => 'Solução',
	'Class:Incident/Attribute:solution+' => '',
	'Class:Incident/Attribute:pending_reason' => 'Razão pendência',
	'Class:Incident/Attribute:pending_reason+' => '',
	'Class:Incident/Attribute:parent_incident_id' => 'Incidente principal',
	'Class:Incident/Attribute:parent_incident_id+' => '',
	'Class:Incident/Attribute:parent_incident_ref' => 'Ref Incidente principal',
	'Class:Incident/Attribute:parent_incident_ref+' => '',
	'Class:Incident/Attribute:parent_change_id' => 'Mudança principal',
	'Class:Incident/Attribute:parent_change_id+' => '',
	'Class:Incident/Attribute:parent_change_ref' => 'Ref mudança principal',
	'Class:Incident/Attribute:parent_change_ref+' => '',
	'Class:Incident/Attribute:parent_problem_id' => 'Problema principal',
	'Class:Incident/Attribute:parent_problem_id+' => '',
	'Class:Incident/Attribute:parent_problem_ref' => 'Ref problema principal',
	'Class:Incident/Attribute:parent_problem_ref+' => '',
	'Class:Incident/Attribute:related_request_list' => 'Child requests~~',
	'Class:Incident/Attribute:related_request_list+' => '~~',
	'Class:Incident/Attribute:child_incidents_list' => 'Sub-Incidentes',
	'Class:Incident/Attribute:child_incidents_list+' => 'Todos os sub-incidentes vinculados a esse incidente',
	'Class:Incident/Attribute:public_log' => 'Log público',
	'Class:Incident/Attribute:public_log+' => '',
	'Class:Incident/Attribute:user_satisfaction' => 'Satisfação do usuário',
	'Class:Incident/Attribute:user_satisfaction+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:1' => 'Muito satisfeito',
	'Class:Incident/Attribute:user_satisfaction/Value:1+' => 'Muito satisfeito',
	'Class:Incident/Attribute:user_satisfaction/Value:2' => 'Bastante satisfeito',
	'Class:Incident/Attribute:user_satisfaction/Value:2+' => 'Bastante satisfeito',
	'Class:Incident/Attribute:user_satisfaction/Value:3' => 'Bastante insatisfeito',
	'Class:Incident/Attribute:user_satisfaction/Value:3+' => 'Bastante insatisfeito',
	'Class:Incident/Attribute:user_satisfaction/Value:4' => 'Muito insatisfeito',
	'Class:Incident/Attribute:user_satisfaction/Value:4+' => 'Muito insatisfeito',
	'Class:Incident/Attribute:user_comment' => 'Comentário usuário',
	'Class:Incident/Attribute:user_comment+' => '',
	'Class:Incident/Attribute:parent_incident_id_friendlyname' => 'parent_incident_id_friendlyname',
	'Class:Incident/Attribute:parent_incident_id_friendlyname+' => '',
	'Class:Incident/Stimulus:ev_assign' => 'Atribuir',
	'Class:Incident/Stimulus:ev_assign+' => '',
	'Class:Incident/Stimulus:ev_reassign' => 'Re-atribuir',
	'Class:Incident/Stimulus:ev_reassign+' => '',
	'Class:Incident/Stimulus:ev_pending' => 'Pendente',
	'Class:Incident/Stimulus:ev_pending+' => '',
	'Class:Incident/Stimulus:ev_timeout' => 'Timeout',
	'Class:Incident/Stimulus:ev_timeout+' => '',
	'Class:Incident/Stimulus:ev_autoresolve' => 'Resolvido automaticamente',
	'Class:Incident/Stimulus:ev_autoresolve+' => '',
	'Class:Incident/Stimulus:ev_autoclose' => 'Fechado automaticamente',
	'Class:Incident/Stimulus:ev_autoclose+' => '',
	'Class:Incident/Stimulus:ev_resolve' => 'Marcar como resolvido',
	'Class:Incident/Stimulus:ev_resolve+' => '',
	'Class:Incident/Stimulus:ev_close' => 'Fechar esta solicitação',
	'Class:Incident/Stimulus:ev_close+' => '',
	'Class:Incident/Stimulus:ev_reopen' => 'Re-abrir',
	'Class:Incident/Stimulus:ev_reopen+' => '',
	'Class:Incident/Error:CannotAssignParentIncidentIdToSelf' => 'Não é possível atribuir o incidente principal ao próprio incidente',

	'Class:Incident/Method:ResolveChildTickets' => 'ResolveChildTickets',
	'Class:Incident/Method:ResolveChildTickets+' => 'Conecte a resolução ao ticket filho (ev_autoresolve) e alinhe as seguintes características: service, team, agent, resolution info',
	'Tickets:Related:OpenIncidents' => 'Incidentes abertos',
));
