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
 * @author      Benjamin Planque <benjamin.planque@combodo.com>
 * @copyright   Copyright (C) 2010-2021 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
//////////////////////////////////////////////////////////////////////
// Note: The classes have been grouped by categories: bizmodel
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
// Classes in 'bizmodel'
//////////////////////////////////////////////////////////////////////
//
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'portal:itop-portal' => 'Standard portal~~', // This is the portal name that will be displayed in portal dispatcher (eg. URL in menus)
	'Page:DefaultTitle' => ITOP_APPLICATION_SHORT.' - Portal do Usuário',
	'Brick:Portal:UserProfile:Title' => 'Meu Perfil',
	'Brick:Portal:NewRequest:Title' => 'Nova Solicitação',
	'Brick:Portal:NewRequest:Title+' => '<p>Precisa de ajuda?</p><p>Escolha no Catálogo de Serviços e envie sua solicitação para nossas equipes de suporte.</p>',
	'Brick:Portal:OngoingRequests:Title' => 'Em andamento',
	'Brick:Portal:OngoingRequests:Title+' => '<p>Acompanhar suas solicitações em andamento, adicionar comentários, anexar documentos e confirmar a solução.</p>',
	'Brick:Portal:OngoingRequests:Tab:OnGoing' => 'Abrir',
	'Brick:Portal:OngoingRequests:Tab:Resolved' => 'Resolvido',
	// ^ approval customization
	'Brick:Portal:OngoingRequests:Tab:Waiting_Approval' => 'Waiting Approval',
	// ^ approval customization
	// ^ customisation cfac courrier
	'Brick:Portal:NewCourrier:Title' => 'accounting mail',
	'Brick:Portal:NewCourrier:Title+' => '<p>Sledujte své accounting mail.</p><p>Zkontrolujte stav, přidejte komentář, přiložte dokumenty, potvrďte řešení.</p>',
	'Brick:Portal:OngoingCourrier:Title' => 'Otevřené požadavky',
	'Brick:Portal:OngoingCourrier:Title+' => '<p>Sledujte své otevřené Courrier.</p><p>Zkontrolujte stav, přidejte komentář, přiložte dokumenty, potvrďte řešení.</p>',
	'Brick:Portal:OngoingCourrier:Tab:OnGoing' => 'Courrier Not Counted',
	//* Disable customisation cfac courrier
	//  'Brick:Portal:OngoingCourrier:Tab:Resolved' => 'CourrierVyřešené',
	'Brick:Portal:OngoingCourrier:Tab:closed' => 'Courrier Counted',
	// ^ customisation cfac courrier
	'Brick:Portal:ClosedRequests:Title' => 'Fechar solicitações',
));
