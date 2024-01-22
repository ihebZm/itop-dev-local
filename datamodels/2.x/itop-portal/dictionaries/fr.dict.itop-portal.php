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
Dict::Add('FR FR', 'French', 'Français', array(
	'portal:itop-portal' => 'Portail standard', // This is the portal name that will be displayed in portal dispatcher (eg. URL in menus)
	'Page:DefaultTitle' => '%1$s - Portail utilisateur',
	'Brick:Portal:UserProfile:Title' => 'Mon profil',
	'Brick:Portal:NewRequest:Title' => 'Nouvelle requête',
	'Brick:Portal:NewRequest:Title+' => '<p>Besoin d\'assistance&nbsp;?</p><p>Choisissez un service (assistance ou dépannage) et soumettez votre requête à nos équipes de support.</p>',
	'Brick:Portal:OngoingRequests:Title' => 'Requêtes en cours',
	'Brick:Portal:OngoingRequests:Title+' => '<p>Suivez vos requêtes en cours.</p><p>Consultez l\'avancement, ajoutez des commentaires ou des pièces jointes, validez la solution.</p>',
	'Brick:Portal:OngoingRequests:Tab:OnGoing' => 'Ouvertes',
	'Brick:Portal:OngoingRequests:Tab:Resolved' => 'Résolues',
	// ^ approval customization
	'Brick:Portal:OngoingRequests:Tab:Waiting_Approval' => 'Waiting Approval',
	// ^ approval customization
	// ^ customisation cfac courrier
	'Brick:Portal:NewCourrier:Title' => 'Courrier comptable',
	'Brick:Portal:NewCourrier:Title+' => '<p>Sledujte své Courrier comptable.</p><p>Zkontrolujte stav, přidejte komentář, přiložte dokumenty, potvrďte řešení.</p>',
	'Brick:Portal:OngoingCourrier:Title' => 'Otevřené požadavky',
	'Brick:Portal:OngoingCourrier:Title+' => '<p>Sledujte své otevřené Courrier.</p><p>Zkontrolujte stav, přidejte komentář, přiložte dokumenty, potvrďte řešení.</p>',
	'Brick:Portal:OngoingCourrier:Tab:OnGoing' => 'Courrier Non Comptabiliser',
	//* Disable customisation cfac courrier
	//  'Brick:Portal:OngoingCourrier:Tab:Resolved' => 'CourrierVyřešené',
	'Brick:Portal:OngoingCourrier:Tab:closed' => 'Courrier Comptabiliser',
	// ^ customisation cfac courrier
	'Brick:Portal:ClosedRequests:Title' => 'Requêtes fermées',
));
