<?php

/**
 * Copyright (C) 2013-2021 Combodo SARL
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
 */

namespace Combodo\iTop\Renderer\Bootstrap\FieldRenderer;

use AbstractAttachmentsRenderer;
use AttachmentPlugIn;
use AttributeDateTime;
use Combodo\iTop\Form\Field\Field;
use Combodo\iTop\Renderer\RenderingOutput;
use DBObjectSearch;
use DBObjectSet;
use Dict;
use InlineImage;
use MetaModel;
use utils;

/**
 * This is the class used to render attachments in the user portal.
 *
 * In the iTop console this is handled in the itop-attachments module. Most of the code here is a duplicate of this module.
 *
 * @see \AbstractAttachmentsRenderer and its implementations for the iTop console
 *
 * @author Guillaume Lajarige <guillaume.lajarige@combodo.com>
 */
class BsFileUploadFieldRenderer extends BsFieldRenderer
{
	/** @var DBObjectSet */
	private $oAttachmentsSet;
	private $oAttachmentsSetVente;
	private $oAttachmentsSetAchat;
	private $oAttachmentsSetBanque;
	private $oAttachmentsSetOther;
	private $oAttachmentsSetUnKnown;

	public function __construct(Field $oField)
	{
		$CourrierValidator = false;
		parent::__construct($oField);

		$oSearch = DBObjectSearch::FromOQL('SELECT Attachment WHERE item_class = :class AND item_id = :item_id');
		// Note : AllowAllData set to true here instead of checking scope's flag because we are displaying a value that has been set and validated
		$oSearch->AllowAllData();
		$sObjectClass = get_class($this->oField->GetObject());
		$this->oAttachmentsSet = new DBObjectSet($oSearch, array(), array('class' => $sObjectClass, 'item_id' => $this->oField->GetObject()->GetKey()));
		
		// & get service type A for courrier show or not
		if($this->oField->GetObject()->Get('servicesubcategory_name') == 'Asssitance Comptable et Fiscale Mensuelle Type A'){
			$CourrierValidator = true;
		}

		if($CourrierValidator){
			// & 1 Section of Attachement for vente the section to copy Start From HERE
			$oSearch = DBObjectSearch::FromOQL('SELECT Attachment WHERE item_class = :class AND item_id = :item_id AND type_attachment = \'attachment_vente\'');
			// Note : AllowAllData set to true here instead of checking scope's flag because we are displaying a value that has been set and validated
			$oSearch->AllowAllData();
			$sObjectClass = get_class($this->oField->GetObject());
			$this->oAttachmentsSetVente = new DBObjectSet($oSearch, array(), array('class' => $sObjectClass, 'item_id' => $this->oField->GetObject()->GetKey()));
			// & 1 Section of Attachement for vente the section to copy END From HERE

			// & 2 Section of Attachement for achat the section to copy Start From HERE
			$oSearch2 = DBObjectSearch::FromOQL('SELECT Attachment WHERE item_class = :class AND item_id = :item_id AND type_attachment = \'attachment_achat\'');
			// Note : AllowAllData set to true here instead of checking scope's flag because we are displaying a value that has been set and validated
			$oSearch2->AllowAllData();
			$sObjectClass = get_class($this->oField->GetObject());
			$this->oAttachmentsSetAchat = new DBObjectSet($oSearch2, array(), array('class' => $sObjectClass, 'item_id' => $this->oField->GetObject()->GetKey()));
			// & 2 Section of Attachement for achat the section to copy END From HERE

			// & 3 Section of Attachement for banque the section to copy Start From HERE
			$oSearch3 = DBObjectSearch::FromOQL('SELECT Attachment WHERE item_class = :class AND item_id = :item_id AND type_attachment = \'attachment_banque\'');
			// Note : AllowAllData set to true here instead of checking scope's flag because we are displaying a value that has been set and validated
			$oSearch3->AllowAllData();
			$sObjectClass = get_class($this->oField->GetObject());
			$this->oAttachmentsSetBanque = new DBObjectSet($oSearch3, array(), array('class' => $sObjectClass, 'item_id' => $this->oField->GetObject()->GetKey()));
			// & 3 Section of Attachement for banque the section to copy END From HERE

			// & 4 Section of Attachement for other the section to copy Start From HERE
			$oSearch4 = DBObjectSearch::FromOQL('SELECT Attachment WHERE item_class = :class AND item_id = :item_id AND type_attachment = \'attachment_other\'');
			// Note : AllowAllData set to true here instead of checking scope's flag because we are displaying a value that has been set and validated
			$oSearch4->AllowAllData();
			$sObjectClass = get_class($this->oField->GetObject());
			$this->oAttachmentsSetOther = new DBObjectSet($oSearch4, array(), array('class' => $sObjectClass, 'item_id' => $this->oField->GetObject()->GetKey()));
			// & 4 Section of Attachement for other the section to copy END From HERE

			// & 5 Section of Attachement for unknown the section to copy Start From HERE
			$oSearch5 = DBObjectSearch::FromOQL('SELECT Attachment WHERE item_class = :class AND item_id = :item_id AND type_attachment = \'attachment_unknown\'');
			// Note : AllowAllData set to true here instead of checking scope's flag because we are displaying a value that has been set and validated
			$oSearch5->AllowAllData();
			$sObjectClass = get_class($this->oField->GetObject());
			$this->oAttachmentsSetUnKnown = new DBObjectSet($oSearch5, array(), array('class' => $sObjectClass, 'item_id' => $this->oField->GetObject()->GetKey()));
			// & 5 Section of Attachement for other the section to copy END From HERE
		}
	}

	/**
	 * @inheritDoc
	 * @throws \CoreException
	 */
	public function Render()
	{
		$oOutput = parent::Render();

		$sObjectClass = get_class($this->oField->GetObject());
		$bIsDeleteAllowed = ($this->oField->GetAllowDelete() && !$this->oField->GetReadOnly());
		$sTempId = utils::GetUploadTempId($this->oField->GetTransactionId());
		$sUploadDropZoneLabel = Dict::S('Portal:Attachments:DropZone:Message');

		// & this the validator that the request is a courrier
		$CourrierValidator = false;
		
		if($this->oField->GetObject()->Get('servicesubcategory_name') == 'Asssitance Comptable et Fiscale Mensuelle Type A'){
			
			$CourrierValidator = true;

		}

		if($this->oField->GetObject()->Get('block_client_ur') == '1') {

			$blockClientValidatorPayment = true;

		} else {

			$blockClientValidatorPayment = false;

		}
		
		if(!$CourrierValidator && !$blockClientValidatorPayment){
		// Starting field container
		$oOutput->AddHtml('<div class="form-group">');

		$sCollapseTogglerIconVisibleClass = 'glyphicon-menu-down';
		$sCollapseTogglerIconHiddenClass = 'glyphicon-menu-down collapsed';
		$sCollapseTogglerClass = 'form_linkedset_toggler';
		$sCollapseTogglerId = $sCollapseTogglerClass . '_' . $this->oField->GetGlobalId();
		$sFieldWrapperId = 'form_upload_wrapper_' . $this->oField->GetGlobalId();
		$sFieldDescriptionForHTMLTag = ($this->oField->HasDescription()) ? 'data-tooltip-content="'.utils::HtmlEntities($this->oField->GetDescription()).'"' : '';

		// If collapsed
		$sCollapseTogglerClass .= ' collapsed';
		$sCollapseTogglerExpanded = 'false';
		$sCollapseTogglerIconClass = $sCollapseTogglerIconHiddenClass;
		$sCollapseJSInitState = 'false';

		// Label
		$oOutput->AddHtml('<div class="form_field_label">');
		if ($this->oField->GetLabel() !== '')
		{
			$iAttachmentsCount = $this->oAttachmentsSet->Count();
			$oOutput
				->AddHtml('<label for="'.$this->oField->GetGlobalId().'" class="control-label" '.$sFieldDescriptionForHTMLTag.'>')
				->AddHtml('<a id="' . $sCollapseTogglerId . '" class="' . $sCollapseTogglerClass . '" data-toggle="collapse" href="#' . $sFieldWrapperId . '" aria-expanded="' . $sCollapseTogglerExpanded . '" aria-controls="' . $sFieldWrapperId . '">')
				->AddHtml($this->oField->GetLabel(),true)
				->AddHtml(' (<span class="attachments-count">'.$iAttachmentsCount.'</span>)')
				->AddHtml('<span class="glyphicon ' . $sCollapseTogglerIconClass . '">')
				->AddHtml('</a>')
				->AddHtml('</label>');
		}
		$oOutput->AddHtml('</div>');

		// Value
		$oOutput->AddHtml('<div class="form_field_control form_upload_wrapper collapse" id="'.$sFieldWrapperId.'">');
		// - Field feedback
		$oOutput->AddHtml('<div class="help-block"></div>');
		// Starting files container
		$oOutput->AddHtml('<div class="fileupload_field_content">');
		// Files list
		$oOutput->AddHtml('<div class="attachments_container row">');
		$this->PrepareExistingFiles($oOutput, $bIsDeleteAllowed);
		$oOutput->Addhtml('</div>');

		$sAttachmentTableId = $this->GetAttachmentsTableId();
		$sNoAttachmentLabel = json_encode(Dict::S('Attachments:NoAttachment'));
		$sDeleteColumnDef = $bIsDeleteAllowed ? '{ targets: [4], orderable: false},' : '';
		$oOutput->AddJs(
			<<<JS
// Collapse handlers
// - Collapsing by default to optimize form space
// It would be better to be able to construct the widget as collapsed, but in this case, datatables thinks the container is very small and therefore renders the table as if it was in microbox.
$('#{$sFieldWrapperId}').collapse({toggle: {$sCollapseJSInitState}});
// - Change toggle icon class
$('#{$sFieldWrapperId}')
	.on('shown.bs.collapse', function(){
		// Creating the table if null (first expand). If we create it on start, it will be displayed as if it was in a micro screen due to the div being "display: none;"
		if(oTable_{$this->oField->GetGlobalId()} === undefined)
		{
			buildTable_{$this->oField->GetGlobalId()}();
 		}
	})
	.on('show.bs.collapse', function(){
		$('#{$sCollapseTogglerId} > span.glyphicon').removeClass('{$sCollapseTogglerIconHiddenClass}').addClass('{$sCollapseTogglerIconVisibleClass}');
	})
	.on('hide.bs.collapse', function(){
		$('#{$sCollapseTogglerId} > span.glyphicon').removeClass('{$sCollapseTogglerIconVisibleClass}').addClass('{$sCollapseTogglerIconHiddenClass}');
	});

var oTable_{$this->oField->GetGlobalId()};


// Build datatable
var buildTable_{$this->oField->GetGlobalId()} = function()
{
	oTable_{$this->oField->GetGlobalId()} = $("table#$sAttachmentTableId").DataTable( {
		"dom": "tp",
	    "order": [[3, "asc"]],
	    "columnDefs": [
	        $sDeleteColumnDef
	        { targets: '_all', orderable: true },
	    ],
	    "language": {
			"infoEmpty": $sNoAttachmentLabel,
			"zeroRecords": $sNoAttachmentLabel
		}
	} );
}
JS
		);

		// Removing upload input if in read only
		// TODO : Add max upload size when itop attachment has been refactored
		if (!$this->oField->GetReadOnly())
		{
			//$oOutput->AddHtml('<div class="upload_container">'.Dict::S('Attachments:AddAttachment').'<input type="file" id="'.$this->oField->GetGlobalId().'" name="'.$this->oField->GetId().'" /><span class="loader glyphicon glyphicon-refresh"></span>'.InlineImage::GetMaxUpload().'</div>');
			$oOutput->AddHtml('<div class="upload_container"><p style="background-color:DodgerBlue;color: white; font-size: 28px;font-family: "Arial Black", "Arial Bold", Gadget, sans-serif; font-style: normal; font-variant: normal; font-weight: 400; line-height: 20px;">'.Dict::S('Attachments:AddAttachment').'</p><br><input type="file" id="'.$this->oField->GetGlobalId().'" name="'.$this->oField->GetId().'" /><span class="loader glyphicon glyphicon-refresh"></span>'.InlineImage::GetMaxUpload().'</div>');
		}
		// Ending files container
		$oOutput->AddHtml('</div>');
		$oOutput->AddHtml('</div>');

		// Ending field container
		$oOutput->AddHtml('</div>');

		// JS for file upload
		$iMaxUploadInBytes = AttachmentPlugIn::GetMaxUploadSize();
		$sMaxUploadLabel = AttachmentPlugIn::GetMaxUpload();
		$sFileTooBigLabel = Dict::Format('Attachments:Error:FileTooLarge', $sMaxUploadLabel);
		$sFileTooBigLabelForJS = addslashes($sFileTooBigLabel);
		// Note : This is based on itop-attachement/main.itop-attachments.php
		$sAttachmentTableRowTemplate = json_encode(self::GetAttachmentTableRow(
			'{{iAttId}}',
			'{{sLineStyle}}',
			'{{sDocDownloadUrl}}',
		     true,
			'{{sAttachmentThumbUrl}}',
			'{{sFileName}}',
			'{{sAttachmentMeta}}',
			'{{sFileSize}}',
			'{{iFileSizeRaw}}',
			'{{sAttachmentDate}}',
			'{{iAttachmentDateRaw}}',
			$bIsDeleteAllowed
		));
		$sAttachmentTableId = $this->GetAttachmentsTableId();
		$oOutput->AddJs(
			<<<JS
			var attachmentRowTemplate = $sAttachmentTableRowTemplate;
			function RemoveAttachment(sAttId)
			{
				$('#attachment_' + sAttId).attr('name', 'removed_attachments[]');
				$('#display_attachment_' + sAttId).hide();
				DecreaseAttachementsCount();
			}
			function IncreaseAttachementsCount()
			{
				UpdateAttachmentsCount(1);
			}
			function DecreaseAttachementsCount()
			{
				UpdateAttachmentsCount(-1);
			}
			function UpdateAttachmentsCount(iIncrement)
			{
				var countContainer = $("a#$sCollapseTogglerId>span.attachments-count"),
				iCountCurrentValue = parseInt(countContainer.text());
				countContainer.text(iCountCurrentValue+iIncrement);
			}

			$('#{$this->oField->GetGlobalId()}').fileupload({
				url: '{$this->oField->GetUploadEndpoint()}',
				formData: { operation: 'add', temp_id: '{$sTempId}', object_class: '{$sObjectClass}', 'field_name': '{$this->oField->GetId()}' },
				dataType: 'json',
				pasteZone: null, // Don't accept files via Chrome's copy/paste
				done: function (e, data) {
					if((data.result.error !== undefined) && window.console)
					{
						console.log(data.result.error);
					}
					else
					{
						var \$oAttachmentTBody = $(this).closest('.fileupload_field_content').find('.attachments_container table#$sAttachmentTableId>tbody'),
							iAttId = data.result.att_id,
							sDownloadLink = '{$this->oField->GetDownloadEndpoint()}'.replace(/-sAttachmentId-/, iAttId),
							sAttachmentMeta = '<input id="attachment_'+iAttId+'" type="hidden" name="attachments[]" value="'+iAttId+'"/>';

						// hide "no attachment" line if present
						\$oAttachmentFirstRow = \$oAttachmentTBody.find("tr:first-child");
						\$oAttachmentFirstRow.find("td[colspan]").closest("tr").hide();
						
						// update attachments count
						IncreaseAttachementsCount();
						 
						var replaces = [
							{search: "{{iAttId}}", replace:iAttId },
							{search: "{{lineStyle}}", replace:'' },
							{search: "{{sDocDownloadUrl}}", replace:sDownloadLink },
							{search: "{{sAttachmentThumbUrl}}", replace:data.result.icon },
							{search: "{{sFileName}}", replace: data.result.msg },
							{search: "{{sAttachmentMeta}}", replace:sAttachmentMeta },
							{search: "{{sFileSize}}", replace:data.result.file_size },
							{search: "{{sAttachmentDate}}", replace:data.result.creation_date },
						];
						var sAttachmentRow = attachmentRowTemplate   ;
						$.each(replaces, function(indexInArray, value ) {
							var re = new RegExp(value.search, 'gi');
							sAttachmentRow = sAttachmentRow.replace(re, value.replace);
						});
						
						var oElem = $(sAttachmentRow);
						if(!data.result.preview){
							oElem.find('[data-tooltip-html-enabled="true"]').removeAttr('data-tooltip-content');
							oElem.find('[data-tooltip-html-enabled="true"]').removeAttr('data-tooltip-html-enabled');
						}
						\$oAttachmentTBody.append(oElem);
						// Remove button handler
						$('#display_attachment_'+data.result.att_id+' :button').on('click', function(oEvent){
							oEvent.preventDefault();
							RemoveAttachment(data.result.att_id);
						});
					}
				},
			    send: function(e, data){
			        // Don't send attachment if size is greater than PHP post_max_size, otherwise it will break the request and all its parameters (\$_REQUEST, \$_POST, ...)
			        // Note: We loop on the files as the data structures is an array but in this case, we only upload 1 file at a time.
			        var iTotalSizeInBytes = 0;
			        for(var i = 0; i < data.files.length; i++)
			        {
			            iTotalSizeInBytes += data.files[i].size;
			        }
			        
			        if(iTotalSizeInBytes > $iMaxUploadInBytes)
			        {
			            alert('$sFileTooBigLabelForJS');
				        return false;
				    }
			    },
				start: function() {
					// Scrolling to dropzone so the user can see that attachments are uploaded
					$(this)[0].scrollIntoView();
					// Showing loader
					$(this).closest('.upload_container').find('.loader').css('visibility', 'visible');
				},
				stop: function() {
					// Hiding the loader
					$(this).closest('.upload_container').find('.loader').css('visibility', 'hidden');
					// Adding this field to the touched fields of the field set so the cancel event is called if necessary
					$(this).closest(".field_set").trigger("field_change", {
						id: '{$this->oField->GetGlobalId()}',
						name: '{$this->oField->GetId()}'
					});
				}
			});

			// Remove button handler
			$('.attachments_container table#$sAttachmentTableId>tbody>tr>td :button').on('click', function(oEvent){
				oEvent.preventDefault();
				RemoveAttachment($(this).closest('.attachment').find(':input[name="attachments[]"]').val());
			});

			// Handles a drag / drop overlay
			if($('#drag_overlay').length === 0)
			{
				$('body').append( $('<div id="drag_overlay" class="global_overlay"><div class="overlay_content"><div class="content_uploader"><div class="icon glyphicon glyphicon-cloud-upload"></div><div class="message">{$sUploadDropZoneLabel}</div></div></div></div>') );
			}

			// Handles highlighting of the drop zone
			// Note : This is inspired by itop-attachments/main.attachments.php
			$(document).on('dragover', function(oEvent){
				var bFiles = false;
				if (oEvent.dataTransfer && oEvent.dataTransfer.types)
				{
					for (var i = 0; i < oEvent.dataTransfer.types.length; i++)
					{
						if (oEvent.dataTransfer.types[i] == "application/x-moz-nativeimage")
						{
							bFiles = false; // mozilla contains "Files" in the types list when dragging images inside the page, but it also contains "application/x-moz-nativeimage" before
							break;
						}

						if (oEvent.dataTransfer.types[i] == "Files")
						{
							bFiles = true;
							break;
						}
					}
				}

				if (!bFiles) return; // Not dragging files

				var oDropZone = $('#drag_overlay');
				var oTimeout = window.dropZoneTimeout;
				// This is to detect when there is no drag over because there is no "drag out" event
				if (!oTimeout) {
					oDropZone.removeClass('drag_out').addClass('drag_in');
				} else {
					clearTimeout(oTimeout);
				}
				window.dropZoneTimeout = setTimeout(function () {
					window.dropZoneTimeout = null;
					oDropZone.removeClass('drag_in').addClass('drag_out');
				}, 200);
			});
JS
		);

		return $oOutput;

		} else {
			// ^ this validation for payment on invoice service to open acces to workflow
			if (!$blockClientValidatorPayment) {
			$oOutput->AddJs(
			<<<JS
				var buttonVente = document.getElementById('type_doc_id_portal_user_vente');
				var buttonAchat = document.getElementById('type_doc_id_portal_user_achat');
				var buttonBanque = document.getElementById('type_doc_id_portal_user_banque');
				var buttonOther = document.getElementById('type_doc_id_portal_user_other');
				var buttonUnknown = document.getElementById('type_doc_id_portal_user_unknown');
				var dragValueAttach = 5;
				
				document.getElementById("vente-form").style.display="none";
				document.getElementById("achat-form").style.display="none";
				document.getElementById("banque-form").style.display="none";
				document.getElementById("other-form").style.display="none";
				document.getElementById("unknown-form").style.display="block";
			//& customization courrier cfac vente 
				buttonVente.addEventListener('click', () => {
					dragValueAttach = 1;
					document.getElementById("vente-form").style.display="block";
					document.getElementById("achat-form").style.display="none";
					document.getElementById("banque-form").style.display="none";
					document.getElementById("other-form").style.display="none";
					document.getElementById("unknown-form").style.display="none";
					toggleBrightnessVente();
					UploadCourrierBySelection = function () {
						UploadCourrierBySelectionVente(dragValueAttach);
					};
					UploadCourrierBySelection();
				});
			//& customization courrier cfac Achat 
				buttonAchat.addEventListener('click', () => {
					dragValueAttach = 2;
					document.getElementById("vente-form").style.display="none";
					document.getElementById("achat-form").style.display="block";
					document.getElementById("banque-form").style.display="none";
					document.getElementById("other-form").style.display="none";
					document.getElementById("unknown-form").style.display="none";
					toggleBrightnessAchat();
					UploadCourrierBySelection = function () {
						UploadCourrierBySelectionAchat(dragValueAttach);
					};
					UploadCourrierBySelection();
				});
			//& customization courrier cfac Banque 
				buttonBanque.addEventListener('click', () => {
					dragValueAttach = 3;
					document.getElementById("vente-form").style.display="none";
					document.getElementById("achat-form").style.display="none";
					document.getElementById("banque-form").style.display="block";
					document.getElementById("other-form").style.display="none";
					document.getElementById("unknown-form").style.display="none";
					toggleBrightnessBanque();
					UploadCourrierBySelection = function () {
						UploadCourrierBySelectionBanque(dragValueAttach);
					};
					UploadCourrierBySelection();
				});
			//& customization courrier cfac Other 
				buttonOther.addEventListener('click', () => {
					dragValueAttach = 4;
					document.getElementById("vente-form").style.display="none";
					document.getElementById("achat-form").style.display="none";
					document.getElementById("banque-form").style.display="none";
					document.getElementById("other-form").style.display="block";
					document.getElementById("unknown-form").style.display="none";
					toggleBrightnessOther();
					UploadCourrierBySelection = function () {
						UploadCourrierBySelectionOther(dragValueAttach);
					};
					UploadCourrierBySelection();
				});
			//& customization courrier cfac Unknown 
				buttonUnknown.addEventListener('click', () => {
					dragValueAttach = 5;
					document.getElementById("vente-form").style.display="none";
					document.getElementById("achat-form").style.display="none";
					document.getElementById("banque-form").style.display="none";
					document.getElementById("other-form").style.display="none";
					document.getElementById("unknown-form").style.display="block";
					toggleBrightnessUnknown();
					UploadCourrierBySelection = function () {
						UploadCourrierBySelectionUnknown(dragValueAttach);
					};
					UploadCourrierBySelection();
				});
				// ^ brightness buttons
				var isVenteBright = true;
				var isAchatBright = true;
				var isBanqueBright = true;
				var isOtherBright = true;
				var isUnknownBright = true;
				function toggleBrightnessVente() {
					if (isVenteBright) {
						buttonVente.style.backgroundColor = '#e4ffd6'; // light color
						buttonVente.style.fontSize = '16px';
						buttonVente.style.fontWeight = '1100';
						buttonVente.style.width = '110px';
						buttonVente.style.height = '31px';
						buttonVente.style.border = '3px solid #fccb06';
						if(isAchatBright == false){
							toggleBrightnessAchat();
						}
						if(isBanqueBright == false){
							toggleBrightnessBanque();
						}
						if(isOtherBright == false){
							toggleBrightnessOther();
						}
						if(isUnknownBright == false){
							toggleBrightnessUnknown();
						}
						isVenteBright = false;
					} else {
						buttonVente.style.backgroundColor = '#ccffb3'; // Initial color
						buttonVente.style.fontSize = '12px';
						buttonVente.style.fontWeight = 'bold';
						buttonVente.style.width = '85px';
						buttonVente.style.height = '28px';
						buttonVente.style.border = '0px';
						isVenteBright = true;
					}
				}
				function toggleBrightnessAchat() {
					if (isAchatBright) {
						buttonAchat.style.backgroundColor = '#d8e6ff'; // light color
						buttonAchat.style.fontSize = '16px';
						buttonAchat.style.fontWeight = '1100';
						buttonAchat.style.width = '110px';
						buttonAchat.style.height = '31px';
						buttonAchat.style.border = '3px solid #fccb06';
						if (isVenteBright == false) {
							toggleBrightnessVente();
						}
						if (isBanqueBright == false) {
							toggleBrightnessBanque();
						}
						if (isOtherBright == false) {
							toggleBrightnessOther();
						}
						if (isUnknownBright == false) {
							toggleBrightnessUnknown();
						}
						isAchatBright = false;
					} else {
						buttonAchat.style.backgroundColor = '#c4daff'; // Initial color
						buttonAchat.style.fontSize = '12px';
						buttonAchat.style.fontWeight = 'bold';
						buttonAchat.style.width = '85px';
						buttonAchat.style.height = '28px';
						buttonAchat.style.border = '0px';
						isAchatBright = true;
					}
				}
				function toggleBrightnessBanque() {
					if (isBanqueBright) {
						buttonBanque.style.backgroundColor = '#fbf0d0'; // light color
						buttonBanque.style.fontSize = '16px';
						buttonBanque.style.fontWeight = '1100';
						buttonBanque.style.width = '110px';
						buttonBanque.style.height = '31px';
						buttonBanque.style.border = '3px solid #fccb06';
						if(isVenteBright == false){
							toggleBrightnessVente();
						}
						if(isAchatBright == false){
							toggleBrightnessAchat();
						}
						if(isOtherBright == false){
							toggleBrightnessOther();
						}
						if(isUnknownBright == false){
							toggleBrightnessUnknown();
						}
						isBanqueBright = false;
					} else {
						buttonBanque.style.backgroundColor = '#faecc2'; // Initial color
						buttonBanque.style.fontSize = '12px';
						buttonBanque.style.fontWeight = 'bold';
						buttonBanque.style.width = '85px';
						buttonBanque.style.height = '28px';
						buttonBanque.style.border = '0px';
						isBanqueBright = true;
					}
				}
				function toggleBrightnessOther() {
					if (isOtherBright) {
						buttonOther.style.backgroundColor = '#ffd4d4'; // light color
						buttonOther.style.fontSize = '16px';
						buttonOther.style.fontWeight = '1100';
						buttonOther.style.width = '110px';
						buttonOther.style.height = '31px';
						buttonOther.style.border = '3px solid #fccb06';
						if(isVenteBright == false){
							toggleBrightnessVente();
						}
						if(isAchatBright == false){
							toggleBrightnessAchat();
						}
						if(isBanqueBright == false){
							toggleBrightnessBanque();
						}
						if(isUnknownBright == false){
							toggleBrightnessUnknown();
						}
						isOtherBright = false;
					} else {
						buttonOther.style.backgroundColor = '#ecd0d7'; // Initial color
						buttonOther.style.fontSize = '12px';
						buttonOther.style.fontWeight = 'bold';
						buttonOther.style.width = '85px';
						buttonOther.style.height = '28px';
						buttonOther.style.border = '0px';
						isOtherBright = true;
					}
				}
				function toggleBrightnessUnknown() {
					if (isUnknownBright) {
						buttonUnknown.style.backgroundColor = '#ffffff'; // light color
						buttonUnknown.style.fontSize = '15px';
						buttonUnknown.style.fontWeight = '1100';
						buttonUnknown.style.width = '110px';
						buttonUnknown.style.height = '31px';
						buttonUnknown.style.border = '3px solid #fccb06';
						if(isVenteBright == false){
							toggleBrightnessVente();
						}
						if(isAchatBright == false){
							toggleBrightnessAchat();
						}
						if(isBanqueBright == false){
							toggleBrightnessBanque();
						}
						if(isOtherBright == false){
							toggleBrightnessOther();
						}
						isUnknownBright = false;
					} else {
						buttonUnknown.style.backgroundColor = '#fffafa'; // Initial color
						buttonUnknown.style.fontSize = '12px';
						buttonUnknown.style.fontWeight = 'bold';
						buttonUnknown.style.width = '85px';
						buttonUnknown.style.height = '28px';
						buttonUnknown.style.border = '0px';
						isUnknownBright = true;
					}
				}
		JS
		);
		// & 1 Section of Attachement the Vente section Start From HERE
		// ! To DO this title for the Courrier set up preparation
		
		$aLabelCourrierTitle = Dict::S('Portal:FieldLabel:CourrierTitle');
		$sTypeLabelAttachV = Dict::S('Portal:Button:TypeVente');
		$sTypeLabelAttachA = Dict::S('Portal:Button:TypeAchat');
		$sTypeLabelAttachB = Dict::S('Portal:Button:TypeBanque');
		$sTypeLabelAttachO = Dict::S('Portal:Button:TypeOther');
		$sTypeLabelAttachU = Dict::S('Portal:Button:TypeUndefined');

		$sTypeAttachSelectedV = '<span id="type_doc_id_portal_user_vente" class="list-group-item list-group-item-action list-group-item-success" style="font-size: 12px; font-weight: bold; width: 90px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%; cursor:pointer;" type="button">'.$sTypeLabelAttachV.'</span>';	
		$sTypeAttachSelectedA = '<span id="type_doc_id_portal_user_achat" class="list-group-item list-group-item-action list-group-item-info" style="font-size: 12px; font-weight: bold; width: 90px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%; cursor:pointer;" type="button">'.$sTypeLabelAttachA.'</span>';
		$sTypeAttachSelectedB = '<span id="type_doc_id_portal_user_banque" class="list-group-item list-group-item-action list-group-item-warning" style="font-size: 12px; font-weight: bold; width: 90px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%; cursor:pointer;" type="button">'.$sTypeLabelAttachB.'</span>';
		$sTypeAttachSelectedO = '<span id="type_doc_id_portal_user_other" class="list-group-item list-group-item-action list-group-item-danger" style="font-size: 12px; font-weight: bold; width: 90px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%; cursor:pointer;" type="button">'.$sTypeLabelAttachO.'</span>';
		$sTypeAttachSelectedU = '<span id="type_doc_id_portal_user_unknown" class="list-group-item list-group-item-action list-group-item-dark" style="font-size: 12px; font-weight: bold; width: 90px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%; cursor:pointer;" type="button">'.$sTypeLabelAttachU.'</span>';
		
		$oOutput->AddHtml('<div><h3><mark>'.$aLabelCourrierTitle.'</mark>: '.$sTypeAttachSelectedV.' '.$sTypeAttachSelectedA.' '.$sTypeAttachSelectedB.' '.$sTypeAttachSelectedO.' '.$sTypeAttachSelectedU.'</h3></div></br>');
		$oOutput->AddHtml('<div id="vente-form" class="form-group">');

		$sCollapseTogglerIconVisibleClassVente = 'glyphicon-menu-down';
		$sCollapseTogglerIconHiddenClassVente = 'glyphicon-menu-down collapsed';
		$sCollapseTogglerClassVente = 'form_linkedset_toggler';
		$sCollapseTogglerIdVente = $sCollapseTogglerClassVente . '_' . $this->oField->GetGlobalId();
		$sFieldWrapperIdVente = 'form_upload_wrapper_vente_' . $this->oField->GetGlobalId();
		$sFieldDescriptionForHTMLTagVente = ($this->oField->HasDescription()) ? 'data-tooltip-content="'.utils::HtmlEntities($this->oField->GetDescription()).'"' : '';
		
		// If collapsed
		$sCollapseTogglerClassVente .= ' collapsed';
		$sCollapseTogglerExpandedVente = 'false';
		$sCollapseTogglerIconClassVente = $sCollapseTogglerIconHiddenClassVente;
		$sCollapseJSInitStateVente = 'false';
		$aLabelVente = Dict::S('Portal:FieldLabel:TypeAttachmentVente');
		// Label
		$oOutput->AddHtml('<div class="form_field_label">');
		if ($this->oField->GetLabel() !== '')
		{
			$iAttachmentsCountVente = $this->oAttachmentsSetVente->Count();
			$oOutput
				->AddHtml('<label for="'.$this->oField->GetGlobalId().'" class="control-label" '.$sFieldDescriptionForHTMLTagVente.'>')
				->AddHtml('<a id="' . $sCollapseTogglerIdVente . '" class="' . $sCollapseTogglerClassVente . '" data-toggle="collapse" href="#' . $sFieldWrapperIdVente . '" aria-expanded="' . $sCollapseTogglerExpandedVente . '" aria-controls="' . $sFieldWrapperIdVente . '">')
				//->AddHtml($this->oField->GetLabel(),true)
				->AddHtml(' <span class="attachments-typeDoc">'.$aLabelVente.'</span>')
				->AddHtml(' (<span class="attachments-count-vente">'.$iAttachmentsCountVente.'</span>)')
				->AddHtml('<span class="glyphicon ' . $sCollapseTogglerIconClassVente . '">')
				->AddHtml('</a>')
				->AddHtml('</label>');
		}
		$oOutput->AddHtml('</div>');

		// Value
		$oOutput->AddHtml('<div class="form_field_control form_upload_wrapper collapse" id="'.$sFieldWrapperIdVente.'">');
		// - Field feedback
		$oOutput->AddHtml('<div class="help-block"></div>');
		// Starting files container
		$oOutput->AddHtml('<div class="fileupload_field_content">');
		// Files list
		$oOutput->AddHtml('<div class="attachments_container row" id="attachments_container_vente">');
		$this->PrepareExistingFilesVente($oOutput, $bIsDeleteAllowed);
		$oOutput->Addhtml('</div>');

		$sAttachmentTableVenteId = $this->GetAttachmentsTableVenteId();
		$sNoAttachmentLabelVente = json_encode(Dict::S('Attachments:NoAttachment'));
		$sDeleteColumnDefVente = $bIsDeleteAllowed ? '{ targets: [4], orderable: false},' : '';
		$oOutput->AddJs(
			<<<JS
// Collapse handlers
// - Collapsing by default to optimize form space
// It would be better to be able to construct the widget as collapsed, but in this case, datatables thinks the container is very small and therefore renders the table as if it was in microbox.
$('#{$sFieldWrapperIdVente}').collapse({toggle: {$sCollapseJSInitStateVente}});
// - Change toggle icon class
$('#{$sFieldWrapperIdVente}')
	.on('shown.bs.collapse', function(){
		// Creating the table if null (first expand). If we create it on start, it will be displayed as if it was in a micro screen due to the div being "display: none;"
		if(oTable_{$this->oField->GetGlobalId()}_vente === undefined)
		{
			buildTable_{$this->oField->GetGlobalId()}_vente();
 		}
	})
	.on('show.bs.collapse', function(){
		$('#{$sCollapseTogglerIdVente} > span.glyphicon').removeClass('{$sCollapseTogglerIconHiddenClassVente}').addClass('{$sCollapseTogglerIconVisibleClassVente}');
	})
	.on('hide.bs.collapse', function(){
		$('#{$sCollapseTogglerIdVente} > span.glyphicon').removeClass('{$sCollapseTogglerIconVisibleClassVente}').addClass('{$sCollapseTogglerIconHiddenClassVente}');
	});

var oTable_{$this->oField->GetGlobalId()}_vente;


// Build datatable
var buildTable_{$this->oField->GetGlobalId()}_vente = function()
{
	oTable_{$this->oField->GetGlobalId()}_vente = $("table#$sAttachmentTableVenteId").DataTable( {
		"dom": "tp",
	    "order": [[3, "asc"]],
	    "columnDefs": [
	        $sDeleteColumnDefVente
	        { targets: '_all', orderable: true },
	    ],
	    "language": {
			"infoEmpty": $sNoAttachmentLabelVente,
			"zeroRecords": $sNoAttachmentLabelVente
		}
	} );
}
JS
		);

		// Removing upload input if in read only
		// TODO : Add max upload size when itop attachment has been refactored
		if (!$this->oField->GetReadOnly())
		{
			//$oOutput->AddHtml('<div class="upload_container">'.Dict::S('Attachments:AddAttachment').'<input type="file" id="'.$this->oField->GetGlobalId().'" name="'.$this->oField->GetId().'" /><span class="loader glyphicon glyphicon-refresh"></span>'.InlineImage::GetMaxUpload().'</div>');
			$oOutput->AddHtml('<div class="upload_container"><input type="file" id="'.$this->oField->GetGlobalId().'_vente" name="'.$this->oField->GetId().'" /><span class="loader glyphicon glyphicon-refresh"></span>'.InlineImage::GetMaxUpload().'</div>');
		}
		// Ending files container
		$oOutput->AddHtml('</div>');
		$oOutput->AddHtml('</div>');

		// Ending field container
		$oOutput->AddHtml('</div>');

		// JS for file upload
		$iMaxUploadInBytes = AttachmentPlugIn::GetMaxUploadSize();
		$sMaxUploadLabel = AttachmentPlugIn::GetMaxUpload();
		$sFileTooBigLabel = Dict::Format('Attachments:Error:FileTooLarge', $sMaxUploadLabel);
		$sFileTooBigLabelForJS = addslashes($sFileTooBigLabel);
		// Note : This is based on itop-attachement/main.itop-attachments.php
		$sAttachmentTableRowTemplateVente = json_encode(self::GetAttachmentCourrierTableRow(
			'{{iAttId}}',
			'{{sLineStyle}}',
			'{{sDocDownloadUrl}}',
		     true,
			'{{sAttachmentThumbUrl}}',
			'{{sFileName}}',
			'{{sAttachmentMeta}}',
			'{{sFileSize}}',
			'{{iFileSizeRaw}}',
			'{{sAttachmentDate}}',
			'attachment_vente',
			'{{sAttachmentStatusComp}}',
			'{{iAttachmentDateRaw}}',
			$bIsDeleteAllowed
		));
		$sAttachmentTableVenteId = $this->GetAttachmentsTableVenteId();
		$oOutput->AddJs(
			<<<JS
			//^ evente on the button to add it by type attachment Vente
			function UploadCourrierBySelectionVente(myValue)
			{	
				if(myValue == 1){
					console.log("test vente working");
					var attachmentRowTemplateVente = $sAttachmentTableRowTemplateVente;
					function RemoveAttachment(sAttId)
					{
						$('#attachment_' + sAttId).attr('name', 'removed_attachments[]');
						$('#display_attachment_' + sAttId).hide();
						DecreaseAttachementsCountVente();
					}
					function IncreaseAttachementsCountVente()
					{
						UpdateAttachmentsCountVente(1);
					}
					function DecreaseAttachementsCountVente()
					{
						UpdateAttachmentsCountVente(-1);
					}
					function UpdateAttachmentsCountVente(iIncrement)
					{
						var countContainerVente = $("a#$sCollapseTogglerIdVente>span.attachments-count-vente"),
						iCountCurrentValueVente = parseInt(countContainerVente.text());
						countContainerVente.text(iCountCurrentValueVente+iIncrement);
					}

					$('#{$this->oField->GetGlobalId()}_vente').fileupload({
						url: '{$this->oField->GetUploadEndpoint()}',
						formData: { operation: 'add', temp_id: '{$sTempId}', object_class: '{$sObjectClass}', 'field_name': '{$this->oField->GetId()}', 'type_attachment': 'attachment_vente' },
						dataType: 'json',
						pasteZone: null, // Don't accept files via Chrome's copy/paste
						done: function (e, data) {
							if((data.result.error !== undefined) && window.console)
							{
								console.log(data.result.error);
							}
							else
							{
								var \$oAttachmentTBodyVente = $(this).closest('.fileupload_field_content').find('div#attachments_container_vente table#$sAttachmentTableVenteId>tbody'),
									iAttId = data.result.att_id,
									sDownloadLinkVente = '{$this->oField->GetDownloadEndpoint()}'.replace(/-sAttachmentId-/, iAttId),
									sAttachmentMeta = '<input id="attachment_'+iAttId+'" type="hidden" name="attachments[]" value="'+iAttId+'"/>';

								// hide "no attachment" line if present
								\$oAttachmentFirstRow = \$oAttachmentTBodyVente.find("tr:first-child");
								\$oAttachmentFirstRow.find("td[colspan]").closest("tr").hide();
								
								// update attachments count
								IncreaseAttachementsCountVente();
								// ! change the replace button for the upload of a new file in vente
								var replacesVente = [
									{search: "{{iAttId}}", replaceVente:iAttId },
									{search: "{{lineStyle}}", replaceVente:'' },
									{search: "{{sDocDownloadUrl}}", replaceVente:sDownloadLinkVente },
									{search: "{{sAttachmentThumbUrl}}", replaceVente:data.result.icon },
									{search: "{{sFileName}}", replaceVente: data.result.msg },
									{search: "{{sAttachmentMeta}}", replaceVente:sAttachmentMeta },
									{search: "{{sFileSize}}", replaceVente:data.result.file_size },
									{search: "{{sAttachmentTypeAttachment}}", replaceVente:data.result.type_attachment },
									{search: "{{sAttachmentStatusComp}}", replaceVente:data.result.status_comp },
									{search: "{{sAttachmentDate}}", replaceVente:data.result.creation_date },
								];
								var sAttachmentRowVente = attachmentRowTemplateVente   ;
								$.each(replacesVente, function(indexInArray, value ) {
									var re = new RegExp(value.search, 'gi');
									sAttachmentRowVente = sAttachmentRowVente.replace(re, value.replaceVente);
								});
								
								var oElem = $(sAttachmentRowVente);
								if(!data.result.preview){
									oElem.find('[data-tooltip-html-enabled="true"]').removeAttr('data-tooltip-content');
									oElem.find('[data-tooltip-html-enabled="true"]').removeAttr('data-tooltip-html-enabled');
								}
								\$oAttachmentTBodyVente.append(oElem);
								// Remove button handler
								$('#display_attachment_'+data.result.att_id+' :button').on('click', function(oEvent){
									oEvent.preventDefault();
									RemoveAttachment(data.result.att_id);
								});
							}
						},
						send: function(e, data){
							// Don't send attachment if size is greater than PHP post_max_size, otherwise it will break the request and all its parameters (\$_REQUEST, \$_POST, ...)
							// Note: We loop on the files as the data structures is an array but in this case, we only upload 1 file at a time.
							var iTotalSizeInBytes = 0;
							for(var i = 0; i < data.files.length; i++)
							{
								iTotalSizeInBytes += data.files[i].size;
							}
							
							if(iTotalSizeInBytes > $iMaxUploadInBytes)
							{
								alert('$sFileTooBigLabelForJS');
								return false;
							}
						},
						start: function() {
							// Scrolling to dropzone so the user can see that attachments are uploaded
							$(this)[0].scrollIntoView();
							// Showing loader
							$(this).closest('.upload_container').find('.loader').css('visibility', 'visible');
						},
						stop: function() {
							// Hiding the loader
							$(this).closest('.upload_container').find('.loader').css('visibility', 'hidden');
							// Adding this field to the touched fields of the field set so the cancel event is called if necessary
							$(this).closest(".field_set").trigger("field_change", {
								id: '{$this->oField->GetGlobalId()}_vente',
								name: '{$this->oField->GetId()}'
							});
						}
					});

					// Remove button handler
					$('div#attachments_container_vente table#$sAttachmentTableVenteId>tbody>tr>td :button').on('click', function(oEvent){
						oEvent.preventDefault();
						RemoveAttachment($(this).closest('.attachment').find(':input[name="attachments[]"]').val());
					});

					// Handles a drag / drop overlay
					if($('#drag_overlay').length === 0)
					{
						$('body').append( $('<div id="drag_overlay" class="global_overlay"><div class="overlay_content"><div class="content_uploader"><div class="icon glyphicon glyphicon-cloud-upload"></div><div class="message">{$sUploadDropZoneLabel}</div></div></div></div>') );
					}

					// Handles highlighting of the drop zone
					// Note : This is inspired by itop-attachments/main.attachments.php
					$(document).on('dragover', function(oEvent){
						var bFiles = false;
						if (oEvent.dataTransfer && oEvent.dataTransfer.types)
						{
							for (var i = 0; i < oEvent.dataTransfer.types.length; i++)
							{
								if (oEvent.dataTransfer.types[i] == "application/x-moz-nativeimage")
								{
									bFiles = false; // mozilla contains "Files" in the types list when dragging images inside the page, but it also contains "application/x-moz-nativeimage" before
									break;
								}

								if (oEvent.dataTransfer.types[i] == "Files")
								{
									bFiles = true;
									break;
								}
							}
						}

						if (!bFiles) return; // Not dragging files

						var oDropZone = $('#drag_overlay');
						var oTimeout = window.dropZoneTimeout;
						// This is to detect when there is no drag over because there is no "drag out" event
						if (!oTimeout) {
							oDropZone.removeClass('drag_out').addClass('drag_in');
						} else {
							clearTimeout(oTimeout);
						}
						window.dropZoneTimeout = setTimeout(function () {
							window.dropZoneTimeout = null;
							oDropZone.removeClass('drag_in').addClass('drag_out');
						}, 200);
					});
				}
			}
JS
		);
		// & 1 Section of Attachement the Vente section to copy END From HERE

		// & 2 Section of Attachement the Achat section to copy Start From HERE
		$oOutput->AddHtml('<div id="achat-form" class="form-group">');

		$sCollapseTogglerIconVisibleClassAchat = 'glyphicon-menu-down';
		$sCollapseTogglerIconHiddenClassAchat = 'glyphicon-menu-down collapsed';
		$sCollapseTogglerClassAchat = 'form_linkedset_toggler';
		$sCollapseTogglerIdAchat = $sCollapseTogglerClassAchat . '_' . $this->oField->GetGlobalId();
		$sFieldWrapperIdAchat = 'form_upload_wrapper_achat_' . $this->oField->GetGlobalId();
		$sFieldDescriptionForHTMLTagAchat = ($this->oField->HasDescription()) ? 'data-tooltip-content="'.utils::HtmlEntities($this->oField->GetDescription()).'"' : '';

		// If collapsed
		$sCollapseTogglerClassAchat .= ' collapsed';
		$sCollapseTogglerExpandedAchat = 'false';
		$sCollapseTogglerIconClassAchat = $sCollapseTogglerIconHiddenClassAchat;
		$sCollapseJSInitStateAchat = 'false';

		// Label
		$oOutput->AddHtml('<div class="form_field_label">');
		if ($this->oField->GetLabel() !== '')
		{
			$iAttachmentsCountAchatDoc = $this->oAttachmentsSetAchat->Count();
			$oOutput
				->AddHtml('<label for="'.$this->oField->GetGlobalId().'" class="control-label" '.$sFieldDescriptionForHTMLTagAchat.'>')
				->AddHtml('<a id="' . $sCollapseTogglerIdAchat . '" class="' . $sCollapseTogglerClassAchat . '" data-toggle="collapse" href="#' . $sFieldWrapperIdAchat . '" aria-expanded="' . $sCollapseTogglerExpandedAchat . '" aria-controls="' . $sFieldWrapperIdAchat . '">')
				->AddHtml(Dict::S('Portal:FieldLabel:TypeAttachmentAchat'),true)
				->AddHtml(' (<span class="attachments-count-achat">'.$iAttachmentsCountAchatDoc.'</span>)')
				->AddHtml('<span class="glyphicon ' . $sCollapseTogglerIconClassAchat . '">')
				->AddHtml('</a>')
				->AddHtml('</label>');
		}
		$oOutput->AddHtml('</div>');
		// ! TO DO this is where to change for attachement customization
		// Value
		$oOutput->AddHtml('<div class="form_field_control form_upload_wrapper collapse" id="'.$sFieldWrapperIdAchat.'">');
		// - Field feedback
		$oOutput->AddHtml('<div class="help-block"></div>');
		// Starting files container
		$oOutput->AddHtml('<div class="fileupload_field_content">');
		// Files list
		$oOutput->AddHtml('<div class="attachments_container row" id="attachments_container_achat">');
		$this->PrepareExistingFilesAchat($oOutput, $bIsDeleteAllowed);
		$oOutput->Addhtml('</div>');

		$sAttachmentTableAchatId = $this->GetAttachmentsTableAchatId();
		$sNoAttachmentLabelAchat = json_encode(Dict::S('Attachments:NoAttachment'));
		$sDeleteColumnDefAchat = $bIsDeleteAllowed ? '{ targets: [4], orderable: false},' : '';
		$oOutput->AddJs(
			<<<JS
					// Collapse handlers
					// - Collapsing by default to optimize form space
					// It would be better to be able to construct the widget as collapsed, but in this case, datatables thinks the container is very small and therefore renders the table as if it was in microbox.
					$('#{$sFieldWrapperIdAchat}').collapse({toggle: {$sCollapseJSInitStateAchat}});
					// - Change toggle icon class
					$('#{$sFieldWrapperIdAchat}')
						.on('shown.bs.collapse', function(){
							// Creating the table if null (first expand). If we create it on start, it will be displayed as if it was in a micro screen due to the div being "display: none;"
							if(oTable_{$this->oField->GetGlobalId()}_achat === undefined)
							{
								buildTable_{$this->oField->GetGlobalId()}_achat();
							}
						})
						.on('show.bs.collapse', function(){
							$('#{$sCollapseTogglerIdAchat} > span.glyphicon').removeClass('{$sCollapseTogglerIconHiddenClassAchat}').addClass('{$sCollapseTogglerIconVisibleClassAchat}');
						})
						.on('hide.bs.collapse', function(){
							$('#{$sCollapseTogglerIdAchat} > span.glyphicon').removeClass('{$sCollapseTogglerIconVisibleClassAchat}').addClass('{$sCollapseTogglerIconHiddenClassAchat}');
						});

					var oTable_{$this->oField->GetGlobalId()}_achat;


					// Build datatable
					var buildTable_{$this->oField->GetGlobalId()}_achat = function()
					{
						oTable_{$this->oField->GetGlobalId()}_achat = $("table#$sAttachmentTableAchatId").DataTable( {
							"dom": "tp",
							"order": [[3, "asc"]],
							"columnDefs": [
								$sDeleteColumnDefAchat
								{ targets: '_all', orderable: true },
							],
							"language": {
								"infoEmpty": $sNoAttachmentLabelAchat,
								"zeroRecords": $sNoAttachmentLabelAchat
							}
						} );
					}
JS
		);

		// Removing upload input if in read only
		// TODO : Add max upload size when itop attachment has been refactored
		if (!$this->oField->GetReadOnly())
		{
			//$oOutput->AddHtml('<div class="upload_container">'.Dict::S('Attachments:AddAttachment').'<input type="file" id="'.$this->oField->GetGlobalId().'" name="'.$this->oField->GetId().'" /><span class="loader glyphicon glyphicon-refresh"></span>'.InlineImage::GetMaxUpload().'</div>');
			$oOutput->AddHtml('<div class="upload_container"><input type="file" id="'.$this->oField->GetGlobalId().'_achat" name="'.$this->oField->GetId().'" /><span class="loader glyphicon glyphicon-refresh"></span>'.InlineImage::GetMaxUpload().'</div>');
		}
		// Ending files container
		$oOutput->AddHtml('</div>');
		$oOutput->AddHtml('</div>');

		// Ending field container
		$oOutput->AddHtml('</div>');

		// JS for file upload
		$iMaxUploadInBytes = AttachmentPlugIn::GetMaxUploadSize();
		$sMaxUploadLabel = AttachmentPlugIn::GetMaxUpload();
		$sFileTooBigLabel = Dict::Format('Attachments:Error:FileTooLarge', $sMaxUploadLabel);
		$sFileTooBigLabelForJS = addslashes($sFileTooBigLabel);
		// Note : This is based on itop-attachement/main.itop-attachments.php
		$sAttachmentTableRowTemplateAchat = json_encode(self::GetAttachmentCourrierTableRow(
			'{{iAttId}}',
			'{{sLineStyle}}',
			'{{sDocDownloadUrl}}',
		     true,
			'{{sAttachmentThumbUrl}}',
			'{{sFileName}}',
			'{{sAttachmentMeta}}',
			'{{sFileSize}}',
			'{{iFileSizeRaw}}',
			'{{sAttachmentDate}}',
			'attachment_achat',
			'{{sAttachmentStatusComp}}',
			'{{iAttachmentDateRaw}}',
			$bIsDeleteAllowed
		));
		$sAttachmentTableAchatId = $this->GetAttachmentsTableAchatId();
		$oOutput->AddJs(
			<<<JS
			function UploadCourrierBySelectionAchat(myValue)
			{	
				if(myValue == 2){
					console.log("test achat working");
					var attachmentRowTemplateAchat = $sAttachmentTableRowTemplateAchat;
					function RemoveAttachment(sAttId)
					{
						$('#attachment_' + sAttId).attr('name', 'removed_attachments[]');
						$('#display_attachment_' + sAttId).hide();
						DecreaseAttachementsCountAchat();
					}
					function IncreaseAttachementsCountAchat()
					{
						UpdateAttachmentsCountAchat(1);
					}
					function DecreaseAttachementsCountAchat()
					{
						UpdateAttachmentsCountAchat(-1);
					}
					function UpdateAttachmentsCountAchat(iIncrement)
					{
						var countContainerAchat = $("a#$sCollapseTogglerIdAchat>span.attachments-count-achat"),
						iCountCurrentValueAchat = parseInt(countContainerAchat.text());
						countContainerAchat.text(iCountCurrentValueAchat+iIncrement);
					}

					$('#{$this->oField->GetGlobalId()}_achat').fileupload({
						url: '{$this->oField->GetUploadEndpoint()}',
						formData: { operation: 'add', temp_id: '{$sTempId}', object_class: '{$sObjectClass}', 'field_name': '{$this->oField->GetId()}', 'type_attachment': 'attachment_achat' },
						dataType: 'json',
						pasteZone: null, // Don't accept files via Chrome's copy/paste
						done: function (e, data) {
							if((data.result.error !== undefined) && window.console)
							{
								console.log(data.result.error);
							}
							else
							{	
								var \$oAttachmentTBodyAchat = $(this).closest('.fileupload_field_content').find('div#attachments_container_achat table#$sAttachmentTableAchatId>tbody'),
									iAttId = data.result.att_id,
									sDownloadLinkAchat = '{$this->oField->GetDownloadEndpoint()}'.replace(/-sAttachmentId-/, iAttId),
									sAttachmentMeta = '<input id="attachment_'+iAttId+'" type="hidden" name="attachments[]" value="'+iAttId+'"/>';

								// hide "no attachment" line if present
								\$oAttachmentFirstRow = \$oAttachmentTBodyAchat.find("tr:first-child");
								\$oAttachmentFirstRow.find("td[colspan]").closest("tr").hide();
								
								// update attachments count
								IncreaseAttachementsCountAchat();
								
								// ! change the replace button for the upload of a new file in achat
								var replacesAchat = [
									{search: "{{iAttId}}", replaceAchat:iAttId },
									{search: "{{lineStyle}}", replaceAchat:'' },
									{search: "{{sDocDownloadUrl}}", replaceAchat:sDownloadLinkAchat },
									{search: "{{sAttachmentThumbUrl}}", replaceAchat:data.result.icon },
									{search: "{{sFileName}}", replaceAchat: data.result.msg },
									{search: "{{sAttachmentMeta}}", replaceAchat:sAttachmentMeta },
									{search: "{{sFileSize}}", replaceAchat:data.result.file_size },
									{search: "{{sAttachmentTypeAttachment}}", replaceAchat:data.result.type_attachment },
									{search: "{{sAttachmentStatusComp}}", replaceAchat:data.result.status_comp },
									{search: "{{sAttachmentDate}}", replaceAchat:data.result.creation_date },
								];
								var sAttachmentRowAchat = attachmentRowTemplateAchat   ;
								$.each(replacesAchat, function(indexInArray, value ) {
									var re = new RegExp(value.search, 'gi');
									sAttachmentRowAchat = sAttachmentRowAchat.replace(re, value.replaceAchat);
								});
								
								var oElem = $(sAttachmentRowAchat);
								if(!data.result.preview){
									oElem.find('[data-tooltip-html-enabled="true"]').removeAttr('data-tooltip-content');
									oElem.find('[data-tooltip-html-enabled="true"]').removeAttr('data-tooltip-html-enabled');
								}
								\$oAttachmentTBodyAchat.append(oElem);
								// Remove button handler
								$('#display_attachment_'+data.result.att_id+' :button').on('click', function(oEvent){
									oEvent.preventDefault();
									RemoveAttachment(data.result.att_id);
								});
							}
						},
						send: function(e, data){
							// Don't send attachment if size is greater than PHP post_max_size, otherwise it will break the request and all its parameters (\$_REQUEST, \$_POST, ...)
							// Note: We loop on the files as the data structures is an array but in this case, we only upload 1 file at a time.
							var iTotalSizeInBytes = 0;
							for(var i = 0; i < data.files.length; i++)
							{
								iTotalSizeInBytes += data.files[i].size;
							}
							
							if(iTotalSizeInBytes > $iMaxUploadInBytes)
							{
								alert('$sFileTooBigLabelForJS');
								return false;
							}
						},
						start: function() {
							// Scrolling to dropzone so the user can see that attachments are uploaded
							$(this)[0].scrollIntoView();
							// Showing loader
							$(this).closest('.upload_container').find('.loader').css('visibility', 'visible');
						},
						stop: function() {
							// Hiding the loader
							$(this).closest('.upload_container').find('.loader').css('visibility', 'hidden');
							// Adding this field to the touched fields of the field set so the cancel event is called if necessary
							$(this).closest(".field_set").trigger("field_change", {
								id: '{$this->oField->GetGlobalId()}_achat',
								name: '{$this->oField->GetId()}'
							});
						}
					});

					// Remove button handler
					$('div#attachments_container_achat table#$sAttachmentTableAchatId>tbody>tr>td :button').on('click', function(oEvent){
						oEvent.preventDefault();
						RemoveAttachment($(this).closest('.attachment').find(':input[name="attachments[]"]').val());
					});

					// Handles a drag / drop overlay
					if($('#drag_overlay').length === 0)
					{
						$('body').append( $('<div id="drag_overlay" class="global_overlay"><div class="overlay_content"><div class="content_uploader"><div class="icon glyphicon glyphicon-cloud-upload"></div><div class="message">{$sUploadDropZoneLabel}</div></div></div></div>') );
					}

					// Handles highlighting of the drop zone
					// Note : This is inspired by itop-attachments/main.attachments.php
					$(document).on('dragover', function(oEvent){
						var bFiles = false;
						if (oEvent.dataTransfer && oEvent.dataTransfer.types)
						{
							for (var i = 0; i < oEvent.dataTransfer.types.length; i++)
							{
								if (oEvent.dataTransfer.types[i] == "application/x-moz-nativeimage")
								{
									bFiles = false; // mozilla contains "Files" in the types list when dragging images inside the page, but it also contains "application/x-moz-nativeimage" before
									break;
								}

								if (oEvent.dataTransfer.types[i] == "Files")
								{
									bFiles = true;
									break;
								}
							}
						}

						if (!bFiles) return; // Not dragging files

						var oDropZone = $('#drag_overlay');
						var oTimeout = window.dropZoneTimeout;
						// This is to detect when there is no drag over because there is no "drag out" event
						if (!oTimeout) {
							oDropZone.removeClass('drag_out').addClass('drag_in');
						} else {
							clearTimeout(oTimeout);
						}
						window.dropZoneTimeout = setTimeout(function () {
							window.dropZoneTimeout = null;
							oDropZone.removeClass('drag_in').addClass('drag_out');
						}, 200);
					});
				}
			}
JS
		);
		// & 2 Section of Attachement the Achat section to copy END From HERE

		// & 3 Section of Attachement the Banque section to copy Start From HERE
		$oOutput->AddHtml('<div id="banque-form" class="form-group">');

		$sCollapseTogglerIconVisibleClassBanque = 'glyphicon-menu-down';
		$sCollapseTogglerIconHiddenClassBanque = 'glyphicon-menu-down collapsed';
		$sCollapseTogglerClassBanque = 'form_linkedset_toggler';
		$sCollapseTogglerIdBanque = $sCollapseTogglerClassBanque . '_' . $this->oField->GetGlobalId();
		$sFieldWrapperIdBanque = 'form_upload_wrapper_banque_' . $this->oField->GetGlobalId();
		$sFieldDescriptionForHTMLTagBanque = ($this->oField->HasDescription()) ? 'data-tooltip-content="'.utils::HtmlEntities($this->oField->GetDescription()).'"' : '';

		// If collapsed
		$sCollapseTogglerClassBanque .= ' collapsed';
		$sCollapseTogglerExpandedBanque = 'false';
		$sCollapseTogglerIconClassBanque = $sCollapseTogglerIconHiddenClassBanque;
		$sCollapseJSInitStateBanque = 'false';
		$aLabelBanque = Dict::S('Portal:FieldLabel:TypeAttachmentBanque');
		// Label
		$oOutput->AddHtml('<div class="form_field_label">');
		if ($this->oField->GetLabel() !== '')
		{
			$iAttachmentsCountBanqueDoc = $this->oAttachmentsSetBanque->Count();
			$oOutput
				->AddHtml('<label for="'.$this->oField->GetGlobalId().'" class="control-label" '.$sFieldDescriptionForHTMLTagBanque.'>')
				->AddHtml('<a id="' . $sCollapseTogglerIdBanque . '" class="' . $sCollapseTogglerClassBanque . '" data-toggle="collapse" href="#' . $sFieldWrapperIdBanque . '" aria-expanded="' . $sCollapseTogglerExpandedBanque . '" aria-controls="' . $sFieldWrapperIdBanque . '">')
				//->AddHtml($this->oField->GetLabel(),true)
				->AddHtml(' <span class="attachments-typeDoc">'.$aLabelBanque.'</span>')
				->AddHtml(' (<span class="attachments-count-banque">'.$iAttachmentsCountBanqueDoc.'</span>)')
				->AddHtml('<span class="glyphicon ' . $sCollapseTogglerIconClassBanque . '">')
				->AddHtml('</a>')
				->AddHtml('</label>');
		}
		$oOutput->AddHtml('</div>');
		// ! TO DO this is where to change for attachement customization
		// Value
		$oOutput->AddHtml('<div class="form_field_control form_upload_wrapper collapse" id="'.$sFieldWrapperIdBanque.'">');
		// - Field feedback
		$oOutput->AddHtml('<div class="help-block"></div>');
		// Starting files container
		$oOutput->AddHtml('<div class="fileupload_field_content">');
		// Files list
		$oOutput->AddHtml('<div class="attachments_container row" id="attachments_container_banque">');
		$this->PrepareExistingFilesBanque($oOutput, $bIsDeleteAllowed);
		$oOutput->Addhtml('</div>');

		$sAttachmentTableBanqueId = $this->GetAttachmentsTableBanqueId();
		$sNoAttachmentLabelBanque = json_encode(Dict::S('Attachments:NoAttachment'));
		$sDeleteColumnDefBanque = $bIsDeleteAllowed ? '{ targets: [4], orderable: false},' : '';
		$oOutput->AddJs(
			<<<JS
					// Collapse handlers
					// - Collapsing by default to optimize form space
					// It would be better to be able to construct the widget as collapsed, but in this case, datatables thinks the container is very small and therefore renders the table as if it was in microbox.
					$('#{$sFieldWrapperIdBanque}').collapse({toggle: {$sCollapseJSInitStateBanque}});
					// - Change toggle icon class
					$('#{$sFieldWrapperIdBanque}')
						.on('shown.bs.collapse', function(){
							// Creating the table if null (first expand). If we create it on start, it will be displayed as if it was in a micro screen due to the div being "display: none;"
							if(oTable_{$this->oField->GetGlobalId()}_banque === undefined)
							{
								buildTable_{$this->oField->GetGlobalId()}_banque();
							}
						})
						.on('show.bs.collapse', function(){
							$('#{$sCollapseTogglerIdBanque} > span.glyphicon').removeClass('{$sCollapseTogglerIconHiddenClassBanque}').addClass('{$sCollapseTogglerIconVisibleClassBanque}');
						})
						.on('hide.bs.collapse', function(){
							$('#{$sCollapseTogglerIdBanque} > span.glyphicon').removeClass('{$sCollapseTogglerIconVisibleClassBanque}').addClass('{$sCollapseTogglerIconHiddenClassBanque}');
						});

					var oTable_{$this->oField->GetGlobalId()}_banque;

					// Build datatable
					var buildTable_{$this->oField->GetGlobalId()}_banque = function()
					{
						oTable_{$this->oField->GetGlobalId()}_banque = $("table#$sAttachmentTableBanqueId").DataTable( {
							"dom": "tp",
							"order": [[3, "asc"]],
							"columnDefs": [
								$sDeleteColumnDefBanque
								{ targets: '_all', orderable: true },
							],
							"language": {
								"infoEmpty": $sNoAttachmentLabelBanque,
								"zeroRecords": $sNoAttachmentLabelBanque
							}
						} );
					}
JS
		);

		// Removing upload input if in read only
		// TODO : Add max upload size when itop attachment has been refactored
		if (!$this->oField->GetReadOnly())
		{
			//$oOutput->AddHtml('<div class="upload_container">'.Dict::S('Attachments:AddAttachment').'<input type="file" id="'.$this->oField->GetGlobalId().'" name="'.$this->oField->GetId().'" /><span class="loader glyphicon glyphicon-refresh"></span>'.InlineImage::GetMaxUpload().'</div>');
			$oOutput->AddHtml('<div class="upload_container"><input type="file" id="'.$this->oField->GetGlobalId().'_banque" name="'.$this->oField->GetId().'" /><span class="loader glyphicon glyphicon-refresh"></span>'.InlineImage::GetMaxUpload().'</div>');
		}
		// Ending files container
		$oOutput->AddHtml('</div>');
		$oOutput->AddHtml('</div>');

		// Ending field container
		$oOutput->AddHtml('</div>');

		// JS for file upload
		$iMaxUploadInBytes = AttachmentPlugIn::GetMaxUploadSize();
		$sMaxUploadLabel = AttachmentPlugIn::GetMaxUpload();
		$sFileTooBigLabel = Dict::Format('Attachments:Error:FileTooLarge', $sMaxUploadLabel);
		$sFileTooBigLabelForJS = addslashes($sFileTooBigLabel);
		// Note : This is based on itop-attachement/main.itop-attachments.php
		$sAttachmentTableRowTemplateBanque = json_encode(self::GetAttachmentCourrierTableRow(
			'{{iAttId}}',
			'{{sLineStyle}}',
			'{{sDocDownloadUrl}}',
		     true,
			'{{sAttachmentThumbUrl}}',
			'{{sFileName}}',
			'{{sAttachmentMeta}}',
			'{{sFileSize}}',
			'{{iFileSizeRaw}}',
			'{{sAttachmentDate}}',
			'attachment_banque',
			'{{sAttachmentStatusComp}}',
			'{{iAttachmentDateRaw}}',
			$bIsDeleteAllowed
		));
		$sAttachmentTableBanqueId = $this->GetAttachmentsTableBanqueId();
		$oOutput->AddJs(
			<<<JS
			//^ evente on the button to add it by type attachment Banque
			function UploadCourrierBySelectionBanque(myValue)
			{	
				if(myValue==3){
					console.log("test banque working");
					var attachmentRowTemplateBanque = $sAttachmentTableRowTemplateBanque;
					function RemoveAttachment(sAttId)
					{
						$('#attachment_' + sAttId).attr('name', 'removed_attachments[]');
						$('#display_attachment_' + sAttId).hide();
						DecreaseAttachementsCountBanque();
					}
					function IncreaseAttachementsCountBanque()
					{
						UpdateAttachmentsCountBanque(1);
					}
					function DecreaseAttachementsCountBanque()
					{
						UpdateAttachmentsCountBanque(-1);
					}
					function UpdateAttachmentsCountBanque(iIncrement)
					{
						var countContainerBanque = $("a#$sCollapseTogglerIdBanque>span.attachments-count-banque"),
						iCountCurrentValueBanque = parseInt(countContainerBanque.text());
						countContainerBanque.text(iCountCurrentValueBanque+iIncrement);
					}

					$('#{$this->oField->GetGlobalId()}_banque').fileupload({
						url: '{$this->oField->GetUploadEndpoint()}',
						formData: { operation: 'add', temp_id: '{$sTempId}', object_class: '{$sObjectClass}', 'field_name': '{$this->oField->GetId()}', 'type_attachment': 'attachment_banque' },
						dataType: 'json',
						pasteZone: null, // Don't accept files via Chrome's copy/paste
						done: function (e, data) {
							if((data.result.error !== undefined) && window.console)
							{
								console.log(data.result.error);
							}
							else
							{
								var \$oAttachmentTBodyBanque = $(this).closest('.fileupload_field_content').find('div#attachments_container_banque table#$sAttachmentTableBanqueId>tbody'),
									iAttId = data.result.att_id,
									sDownloadLinkBanque = '{$this->oField->GetDownloadEndpoint()}'.replace(/-sAttachmentId-/, iAttId),
									sAttachmentMeta = '<input id="attachment_'+iAttId+'" type="hidden" name="attachments[]" value="'+iAttId+'"/>';

								// hide "no attachment" line if present
								\$oAttachmentFirstRow = \$oAttachmentTBodyBanque.find("tr:first-child");
								\$oAttachmentFirstRow.find("td[colspan]").closest("tr").hide();
								
								// update attachments count
								IncreaseAttachementsCountBanque();
								
								var replacesBanque = [
									{search: "{{iAttId}}", replaceBanque:iAttId },
									{search: "{{lineStyle}}", replaceBanque:'' },
									{search: "{{sDocDownloadUrl}}", replaceBanque:sDownloadLinkBanque },
									{search: "{{sAttachmentThumbUrl}}", replaceBanque:data.result.icon },
									{search: "{{sFileName}}", replaceBanque: data.result.msg },
									{search: "{{sAttachmentMeta}}", replaceBanque:sAttachmentMeta },
									{search: "{{sFileSize}}", replaceBanque:data.result.file_size },
									{search: "{{sAttachmentTypeAttachment}}", replaceBanque:data.result.type_attachment },
									{search: "{{sAttachmentStatusComp}}", replaceBanque:data.result.status_comp },
									{search: "{{sAttachmentDate}}", replaceBanque:data.result.creation_date },
								];
								var sAttachmentRowBanque = attachmentRowTemplateBanque   ;
								$.each(replacesBanque, function(indexInArray, value ) {
									var re = new RegExp(value.search, 'gi');
									sAttachmentRowBanque = sAttachmentRowBanque.replace(re, value.replaceBanque);
								});
								
								var oElem = $(sAttachmentRowBanque);
								if(!data.result.preview){
									oElem.find('[data-tooltip-html-enabled="true"]').removeAttr('data-tooltip-content');
									oElem.find('[data-tooltip-html-enabled="true"]').removeAttr('data-tooltip-html-enabled');
								}
								\$oAttachmentTBodyBanque.append(oElem);
								// Remove button handler
								$('#display_attachment_'+data.result.att_id+' :button').on('click', function(oEvent){
									oEvent.preventDefault();
									RemoveAttachment(data.result.att_id);
								});
							}
						},
						send: function(e, data){
							// Don't send attachment if size is greater than PHP post_max_size, otherwise it will break the request and all its parameters (\$_REQUEST, \$_POST, ...)
							// Note: We loop on the files as the data structures is an array but in this case, we only upload 1 file at a time.
							var iTotalSizeInBytes = 0;
							for(var i = 0; i < data.files.length; i++)
							{
								iTotalSizeInBytes += data.files[i].size;
							}
							
							if(iTotalSizeInBytes > $iMaxUploadInBytes)
							{
								alert('$sFileTooBigLabelForJS');
								return false;
							}
						},
						start: function() {
							// Scrolling to dropzone so the user can see that attachments are uploaded
							$(this)[0].scrollIntoView();
							// Showing loader
							$(this).closest('.upload_container').find('.loader').css('visibility', 'visible');
						},
						stop: function() {
							// Hiding the loader
							$(this).closest('.upload_container').find('.loader').css('visibility', 'hidden');
							// Adding this field to the touched fields of the field set so the cancel event is called if necessary
							$(this).closest(".field_set").trigger("field_change", {
								id: '{$this->oField->GetGlobalId()}_banque',
								name: '{$this->oField->GetId()}'
							});
						}
					});

					// Remove button handler
					$('div#attachments_container_banque table#$sAttachmentTableBanqueId>tbody>tr>td :button').on('click', function(oEvent){
						oEvent.preventDefault();
						RemoveAttachment($(this).closest('.attachment').find(':input[name="attachments[]"]').val());
					});

					// Handles a drag / drop overlay
					if($('#drag_overlay').length === 0)
					{
						$('body').append( $('<div id="drag_overlay" class="global_overlay"><div class="overlay_content"><div class="content_uploader"><div class="icon glyphicon glyphicon-cloud-upload"></div><div class="message">{$sUploadDropZoneLabel}</div></div></div></div>') );
					}

					// Handles highlighting of the drop zone
					// Note : This is inspired by itop-attachments/main.attachments.php
					$(document).on('dragover', function(oEvent){
						var bFiles = false;
						if (oEvent.dataTransfer && oEvent.dataTransfer.types)
						{
							for (var i = 0; i < oEvent.dataTransfer.types.length; i++)
							{
								if (oEvent.dataTransfer.types[i] == "application/x-moz-nativeimage")
								{
									bFiles = false; // mozilla contains "Files" in the types list when dragging images inside the page, but it also contains "application/x-moz-nativeimage" before
									break;
								}

								if (oEvent.dataTransfer.types[i] == "Files")
								{
									bFiles = true;
									break;
								}
							}
						}

						if (!bFiles) return; // Not dragging files

						var oDropZone = $('#drag_overlay');
						var oTimeout = window.dropZoneTimeout;
						// This is to detect when there is no drag over because there is no "drag out" event
						if (!oTimeout) {
							oDropZone.removeClass('drag_out').addClass('drag_in');
						} else {
							clearTimeout(oTimeout);
						}
						window.dropZoneTimeout = setTimeout(function () {
							window.dropZoneTimeout = null;
							oDropZone.removeClass('drag_in').addClass('drag_out');
						}, 200);
					});
				}
			}
JS
		);
		// & 3 Section of Attachement the Banque section to copy END From HERE

		// & 4 Section of Attachement the Other section to copy Start From HERE

		$oOutput->AddHtml('<div id="other-form" class="form-group">');

		$sCollapseTogglerIconVisibleClassOther = 'glyphicon-menu-down';
		$sCollapseTogglerIconHiddenClassOther = 'glyphicon-menu-down collapsed';
		$sCollapseTogglerClassOther = 'form_linkedset_toggler';
		$sCollapseTogglerIdOther = $sCollapseTogglerClassOther . '_' . $this->oField->GetGlobalId();
		$sFieldWrapperIdOther = 'form_upload_wrapper_other_' . $this->oField->GetGlobalId();
		$sFieldDescriptionForHTMLTagOther = ($this->oField->HasDescription()) ? 'data-tooltip-content="'.utils::HtmlEntities($this->oField->GetDescription()).'"' : '';

		// If collapsed
		$sCollapseTogglerClassOther .= ' collapsed';
		$sCollapseTogglerExpandedOther = 'false';
		$sCollapseTogglerIconClassOther = $sCollapseTogglerIconHiddenClassOther;
		$sCollapseJSInitStateOther = 'false';
		$aLabelOther = Dict::S('Portal:FieldLabel:TypeAttachmentOther');
		// Label
		$oOutput->AddHtml('<div class="form_field_label">');
		if ($this->oField->GetLabel() !== '')
		{
			$iAttachmentsCountOtherDoc = $this->oAttachmentsSetOther->Count();
			$oOutput
				->AddHtml('<label for="'.$this->oField->GetGlobalId().'" class="control-label" '.$sFieldDescriptionForHTMLTagOther.'>')
				->AddHtml('<a id="' . $sCollapseTogglerIdOther . '" class="' . $sCollapseTogglerClassOther . '" data-toggle="collapse" href="#' . $sFieldWrapperIdOther . '" aria-expanded="' . $sCollapseTogglerExpandedOther . '" aria-controls="' . $sFieldWrapperIdOther . '">')
				//->AddHtml($this->oField->GetLabel(),true)
				->AddHtml(' <span class="attachments-typeDoc">'.$aLabelOther.'</span>')
				->AddHtml(' (<span class="attachments-count-other">'.$iAttachmentsCountOtherDoc.'</span>)')
				->AddHtml('<span class="glyphicon ' . $sCollapseTogglerIconClassOther . '">')
				->AddHtml('</a>')
				->AddHtml('</label>');
		}
		$oOutput->AddHtml('</div>');
		// ! TO DO this is where to change for attachement customization
		// Value
		$oOutput->AddHtml('<div class="form_field_control form_upload_wrapper collapse" id="'.$sFieldWrapperIdOther.'">');
		// - Field feedback
		$oOutput->AddHtml('<div class="help-block"></div>');
		// Starting files container
		$oOutput->AddHtml('<div class="fileupload_field_content">');
		// Files list
		$oOutput->AddHtml('<div class="attachments_container row" id="attachments_container_other">');
		$this->PrepareExistingFilesOther($oOutput, $bIsDeleteAllowed);
		$oOutput->Addhtml('</div>');

		$sAttachmentTableOtherId = $this->GetAttachmentsTableOtherId();
		$sNoAttachmentLabelOther = json_encode(Dict::S('Attachments:NoAttachment'));
		$sDeleteColumnDefOther = $bIsDeleteAllowed ? '{ targets: [4], orderable: false},' : '';
		$oOutput->AddJs(
			<<<JS
					// Collapse handlers
					// - Collapsing by default to optimize form space
					// It would be better to be able to construct the widget as collapsed, but in this case, datatables thinks the container is very small and therefore renders the table as if it was in microbox.
					$('#{$sFieldWrapperIdOther}').collapse({toggle: {$sCollapseJSInitStateOther}});
					// - Change toggle icon class
					$('#{$sFieldWrapperIdOther}')
						.on('shown.bs.collapse', function(){
							// Creating the table if null (first expand). If we create it on start, it will be displayed as if it was in a micro screen due to the div being "display: none;"
							if(oTable_{$this->oField->GetGlobalId()}_other === undefined)
							{
								buildTable_{$this->oField->GetGlobalId()}_other();
							}
						})
						.on('show.bs.collapse', function(){
							$('#{$sCollapseTogglerIdOther} > span.glyphicon').removeClass('{$sCollapseTogglerIconHiddenClassOther}').addClass('{$sCollapseTogglerIconVisibleClassOther}');
						})
						.on('hide.bs.collapse', function(){
							$('#{$sCollapseTogglerIdOther} > span.glyphicon').removeClass('{$sCollapseTogglerIconVisibleClassOther}').addClass('{$sCollapseTogglerIconHiddenClassOther}');
						});

					var oTable_{$this->oField->GetGlobalId()}_other;


					// Build datatable
					var buildTable_{$this->oField->GetGlobalId()}_other = function()
					{
						oTable_{$this->oField->GetGlobalId()}_other = $("table#$sAttachmentTableOtherId").DataTable( {
							"dom": "tp",
							"order": [[3, "asc"]],
							"columnDefs": [
								$sDeleteColumnDefOther
								{ targets: '_all', orderable: true },
							],
							"language": {
								"infoEmpty": $sNoAttachmentLabelOther,
								"zeroRecords": $sNoAttachmentLabelOther
							}
						} );
					}
JS
		);

		// Removing upload input if in read only
		// TODO : Add max upload size when itop attachment has been refactored
		if (!$this->oField->GetReadOnly())
		{
			//$oOutput->AddHtml('<div class="upload_container">'.Dict::S('Attachments:AddAttachment').'<input type="file" id="'.$this->oField->GetGlobalId().'" name="'.$this->oField->GetId().'" /><span class="loader glyphicon glyphicon-refresh"></span>'.InlineImage::GetMaxUpload().'</div>');
			$oOutput->AddHtml('<div class="upload_container"><input type="file" id="'.$this->oField->GetGlobalId().'_other" name="'.$this->oField->GetId().'" /><span class="loader glyphicon glyphicon-refresh"></span>'.InlineImage::GetMaxUpload().'</div>');
		}
		// Ending files container
		$oOutput->AddHtml('</div>');
		$oOutput->AddHtml('</div>');

		// Ending field container
		$oOutput->AddHtml('</div>');

		// JS for file upload
		$iMaxUploadInBytes = AttachmentPlugIn::GetMaxUploadSize();
		$sMaxUploadLabel = AttachmentPlugIn::GetMaxUpload();
		$sFileTooBigLabel = Dict::Format('Attachments:Error:FileTooLarge', $sMaxUploadLabel);
		$sFileTooBigLabelForJS = addslashes($sFileTooBigLabel);
		// Note : This is based on itop-attachement/main.itop-attachments.php
		$sAttachmentTableRowTemplateOther = json_encode(self::GetAttachmentCourrierTableRow(
			'{{iAttId}}',
			'{{sLineStyle}}',
			'{{sDocDownloadUrl}}',
		     true,
			'{{sAttachmentThumbUrl}}',
			'{{sFileName}}',
			'{{sAttachmentMeta}}',
			'{{sFileSize}}',
			'{{iFileSizeRaw}}',
			'{{sAttachmentDate}}',
			'attachment_other',
			'{{sAttachmentStatusComp}}',
			'{{iAttachmentDateRaw}}',
			$bIsDeleteAllowed
		));
		$sAttachmentTableOtherId = $this->GetAttachmentsTableOtherId();
		$oOutput->AddJs(
			<<<JS
			//^ evente on the button to add it by type attachment Other
			function UploadCourrierBySelectionOther(myValue)
			{
				if(myValue==4){
					console.log("test other working");
					var attachmentRowTemplateOther = $sAttachmentTableRowTemplateOther;
					function RemoveAttachment(sAttId)
					{
						$('#attachment_' + sAttId).attr('name', 'removed_attachments[]');
						$('#display_attachment_' + sAttId).hide();
						DecreaseAttachementsCountOther();
					}
					function IncreaseAttachementsCountOther()
					{
						UpdateAttachmentsCountOther(1);
					}
					function DecreaseAttachementsCountOther()
					{
						UpdateAttachmentsCountOther(-1);
					}
					function UpdateAttachmentsCountOther(iIncrement)
					{
						var countContainerOther = $("a#$sCollapseTogglerIdOther>span.attachments-count-other"),
						iCountCurrentValueOther = parseInt(countContainerOther.text());
						countContainerOther.text(iCountCurrentValueOther+iIncrement);
					}

					$('#{$this->oField->GetGlobalId()}_other').fileupload({
						url: '{$this->oField->GetUploadEndpoint()}',
						formData: { operation: 'add', temp_id: '{$sTempId}', object_class: '{$sObjectClass}', 'field_name': '{$this->oField->GetId()}', 'type_attachment': 'attachment_other' },
						dataType: 'json',
						pasteZone: null, // Don't accept files via Chrome's copy/paste
						done: function (e, data) {
							if((data.result.error !== undefined) && window.console)
							{
								console.log(data.result.error);
							}
							else
							{
								var \$oAttachmentTBodyOther = $(this).closest('.fileupload_field_content').find('div#attachments_container_other table#$sAttachmentTableOtherId>tbody'),
									iAttId = data.result.att_id,
									sDownloadLinkOther = '{$this->oField->GetDownloadEndpoint()}'.replace(/-sAttachmentId-/, iAttId),
									sAttachmentMeta = '<input id="attachment_'+iAttId+'" type="hidden" name="attachments[]" value="'+iAttId+'"/>';

								// hide "no attachment" line if present
								\$oAttachmentFirstRow = \$oAttachmentTBodyOther.find("tr:first-child");
								\$oAttachmentFirstRow.find("td[colspan]").closest("tr").hide();
								
								// update attachments count
								IncreaseAttachementsCountOther();
								
								var replacesOther = [
									{search: "{{iAttId}}", replaceOther:iAttId },
									{search: "{{lineStyle}}", replaceOther:'' },
									{search: "{{sDocDownloadUrl}}", replaceOther:sDownloadLinkOther },
									{search: "{{sAttachmentThumbUrl}}", replaceOther:data.result.icon },
									{search: "{{sFileName}}", replaceOther: data.result.msg },
									{search: "{{sAttachmentMeta}}", replaceOther:sAttachmentMeta },
									{search: "{{sFileSize}}", replaceOther:data.result.file_size },
									{search: "{{sAttachmentTypeAttachment}}", replaceOther:data.result.type_attachment },
									{search: "{{sAttachmentStatusComp}}", replaceOther:data.result.status_comp },
									{search: "{{sAttachmentDate}}", replaceOther:data.result.creation_date },
								];
								var sAttachmentRowOther = attachmentRowTemplateOther   ;
								$.each(replacesOther, function(indexInArray, value ) {
									var re = new RegExp(value.search, 'gi');
									sAttachmentRowOther = sAttachmentRowOther.replace(re, value.replaceOther);
								});
								
								var oElem = $(sAttachmentRowOther);
								if(!data.result.preview){
									oElem.find('[data-tooltip-html-enabled="true"]').removeAttr('data-tooltip-content');
									oElem.find('[data-tooltip-html-enabled="true"]').removeAttr('data-tooltip-html-enabled');
								}
								\$oAttachmentTBodyOther.append(oElem);
								// Remove button handler
								$('#display_attachment_'+data.result.att_id+' :button').on('click', function(oEvent){
									oEvent.preventDefault();
									RemoveAttachment(data.result.att_id);
								});
							}
						},
						send: function(e, data){
							// Don't send attachment if size is greater than PHP post_max_size, otherwise it will break the request and all its parameters (\$_REQUEST, \$_POST, ...)
							// Note: We loop on the files as the data structures is an array but in this case, we only upload 1 file at a time.
							var iTotalSizeInBytes = 0;
							for(var i = 0; i < data.files.length; i++)
							{
								iTotalSizeInBytes += data.files[i].size;
							}
							
							if(iTotalSizeInBytes > $iMaxUploadInBytes)
							{
								alert('$sFileTooBigLabelForJS');
								return false;
							}
						},
						start: function() {
							// Scrolling to dropzone so the user can see that attachments are uploaded
							$(this)[0].scrollIntoView();
							// Showing loader
							$(this).closest('.upload_container').find('.loader').css('visibility', 'visible');
						},
						stop: function() {
							// Hiding the loader
							$(this).closest('.upload_container').find('.loader').css('visibility', 'hidden');
							// Adding this field to the touched fields of the field set so the cancel event is called if necessary
							$(this).closest(".field_set").trigger("field_change", {
								id: '{$this->oField->GetGlobalId()}_other',
								name: '{$this->oField->GetId()}'
							});
						}
					});

					// Remove button handler
					$('div#attachments_container_other table#$sAttachmentTableOtherId>tbody>tr>td :button').on('click', function(oEvent){
						oEvent.preventDefault();
						RemoveAttachment($(this).closest('.attachment').find(':input[name="attachments[]"]').val());
					});

					// Handles a drag / drop overlay
					if($('#drag_overlay').length === 0)
					{
						$('body').append( $('<div id="drag_overlay" class="global_overlay"><div class="overlay_content"><div class="content_uploader"><div class="icon glyphicon glyphicon-cloud-upload"></div><div class="message">{$sUploadDropZoneLabel}</div></div></div></div>') );
					}

					// Handles highlighting of the drop zone
					// Note : This is inspired by itop-attachments/main.attachments.php
					$(document).on('dragover', function(oEvent){
						var bFiles = false;
						if (oEvent.dataTransfer && oEvent.dataTransfer.types)
						{
							for (var i = 0; i < oEvent.dataTransfer.types.length; i++)
							{
								if (oEvent.dataTransfer.types[i] == "application/x-moz-nativeimage")
								{
									bFiles = false; // mozilla contains "Files" in the types list when dragging images inside the page, but it also contains "application/x-moz-nativeimage" before
									break;
								}

								if (oEvent.dataTransfer.types[i] == "Files")
								{
									bFiles = true;
									break;
								}
							}
						}

						if (!bFiles) return; // Not dragging files

						var oDropZone = $('#drag_overlay');
						var oTimeout = window.dropZoneTimeout;
						// This is to detect when there is no drag over because there is no "drag out" event
						if (!oTimeout) {
							oDropZone.removeClass('drag_out').addClass('drag_in');
						} else {
							clearTimeout(oTimeout);
						}
						window.dropZoneTimeout = setTimeout(function () {
							window.dropZoneTimeout = null;
							oDropZone.removeClass('drag_in').addClass('drag_out');
						}, 200);
					});
				}
			}
JS
		);
		// & 4 Section of Attachement the Other section to copy END From HERE

		// & 5 Section of Attachement the Unknown section to copy Start From HERE
		$oOutput->AddHtml('<div id="unknown-form" class="form-group">');

		$sCollapseTogglerIconVisibleClassUnknown = 'glyphicon-menu-down';
		$sCollapseTogglerIconHiddenClassUnknown = 'glyphicon-menu-down collapsed';
		$sCollapseTogglerClassUnknown = 'form_linkedset_toggler';
		$sCollapseTogglerIdUnknown = $sCollapseTogglerClassUnknown . '_' . $this->oField->GetGlobalId();
		$sFieldWrapperIdUnknown = 'form_upload_wrapper_unknown_' . $this->oField->GetGlobalId();
		$sFieldDescriptionForHTMLTagUnknown = ($this->oField->HasDescription()) ? 'data-tooltip-content="'.utils::HtmlEntities($this->oField->GetDescription()).'"' : '';

		// If collapsed
		$sCollapseTogglerClassUnknown .= ' collapsed';
		$sCollapseTogglerExpandedUnknown = 'false';
		$sCollapseTogglerIconClassUnknown = $sCollapseTogglerIconHiddenClassUnknown;
		$sCollapseJSInitStateUnknown = 'false';
		$aLabelUnknown = Dict::S('Portal:FieldLabel:TypeAttachmentUnknown');
		// Label
		$oOutput->AddHtml('<div class="form_field_label">');
		if ($this->oField->GetLabel() !== '')
		{
			$iAttachmentsCountUnknownDoc = $this->oAttachmentsSetUnKnown->Count();
			$oOutput
				->AddHtml('<label for="'.$this->oField->GetGlobalId().'" class="control-label" '.$sFieldDescriptionForHTMLTagUnknown.'>')
				->AddHtml('<a id="' . $sCollapseTogglerIdUnknown . '" class="' . $sCollapseTogglerClassUnknown . '" data-toggle="collapse" href="#' . $sFieldWrapperIdUnknown . '" aria-expanded="' . $sCollapseTogglerExpandedUnknown . '" aria-controls="' . $sFieldWrapperIdUnknown . '">')
				//->AddHtml($this->oField->GetLabel(),true)
				->AddHtml(' <span class="attachments-typeDoc">'.$aLabelUnknown.'</span>')
				->AddHtml(' (<span class="attachments-count-unknown">'.$iAttachmentsCountUnknownDoc.'</span>)')
				->AddHtml('<span class="glyphicon ' . $sCollapseTogglerIconClassUnknown . '">')
				->AddHtml('</a>')
				->AddHtml('</label>');
		}
		$oOutput->AddHtml('</div>');
		// ! TO DO this is where to change for attachement customization
		// Value
		$oOutput->AddHtml('<div class="form_field_control form_upload_wrapper collapse" id="'.$sFieldWrapperIdUnknown.'">');
		// - Field feedback
		$oOutput->AddHtml('<div class="help-block"></div>');
		// Starting files container
		$oOutput->AddHtml('<div class="fileupload_field_content">');
		// Files list
		$oOutput->AddHtml('<div class="attachments_container row" id="attachments_container_unknown">');
		$this->PrepareExistingFilesUnknown($oOutput, $bIsDeleteAllowed);
		$oOutput->Addhtml('</div>');

		$sAttachmentTableUnknownId = $this->GetAttachmentsTableUnknownId();
		$sNoAttachmentLabelUnknown = json_encode(Dict::S('Attachments:NoAttachment'));
		$sDeleteColumnDefUnknown = $bIsDeleteAllowed ? '{ targets: [4], orderable: false},' : '';
		$oOutput->AddJs(
			<<<JS
					// Collapse handlers
					// - Collapsing by default to optimize form space
					// It would be better to be able to construct the widget as collapsed, but in this case, datatables thinks the container is very small and therefore renders the table as if it was in microbox.
					$('#{$sFieldWrapperIdUnknown}').collapse({toggle: {$sCollapseJSInitStateUnknown}});
					// - Change toggle icon class
					$('#{$sFieldWrapperIdUnknown}')
						.on('shown.bs.collapse', function(){
							// Creating the table if null (first expand). If we create it on start, it will be displayed as if it was in a micro screen due to the div being "display: none;"
							if(oTable_{$this->oField->GetGlobalId()}_unknown === undefined)
							{
								buildTable_{$this->oField->GetGlobalId()}_unknown();
							}
						})
						.on('show.bs.collapse', function(){
							$('#{$sCollapseTogglerIdUnknown} > span.glyphicon').removeClass('{$sCollapseTogglerIconHiddenClassUnknown}').addClass('{$sCollapseTogglerIconVisibleClassUnknown}');
						})
						.on('hide.bs.collapse', function(){
							$('#{$sCollapseTogglerIdUnknown} > span.glyphicon').removeClass('{$sCollapseTogglerIconVisibleClassUnknown}').addClass('{$sCollapseTogglerIconHiddenClassUnknown}');
						});

					var oTable_{$this->oField->GetGlobalId()}_unknown;


					// Build datatable
					var buildTable_{$this->oField->GetGlobalId()}_unknown = function()
					{
						oTable_{$this->oField->GetGlobalId()}_unknown = $("table#$sAttachmentTableUnknownId").DataTable( {
							"dom": "tp",
							"order": [[3, "asc"]],
							"columnDefs": [
								$sDeleteColumnDefUnknown
								{ targets: '_all', orderable: true },
							],
							"language": {
								"infoEmpty": $sNoAttachmentLabelUnknown,
								"zeroRecords": $sNoAttachmentLabelUnknown
							}
						} );
					}
JS
		);

		// Removing upload input if in read only
		// TODO : Add max upload size when itop attachment has been refactored
		if (!$this->oField->GetReadOnly())
		{
			//$oOutput->AddHtml('<div class="upload_container">'.Dict::S('Attachments:AddAttachment').'<input type="file" id="'.$this->oField->GetGlobalId().'" name="'.$this->oField->GetId().'" /><span class="loader glyphicon glyphicon-refresh"></span>'.InlineImage::GetMaxUpload().'</div>');
			$oOutput->AddHtml('<div class="upload_container"><input type="file" id="'.$this->oField->GetGlobalId().'_unknown" name="'.$this->oField->GetId().'" /><span class="loader glyphicon glyphicon-refresh"></span>'.InlineImage::GetMaxUpload().'</div>');
		}
		// Ending files container
		$oOutput->AddHtml('</div>');
		$oOutput->AddHtml('</div>');

		// Ending field container
		$oOutput->AddHtml('</div>');

		// JS for file upload
		$iMaxUploadInBytes = AttachmentPlugIn::GetMaxUploadSize();
		$sMaxUploadLabel = AttachmentPlugIn::GetMaxUpload();
		$sFileTooBigLabel = Dict::Format('Attachments:Error:FileTooLarge', $sMaxUploadLabel);
		$sFileTooBigLabelForJS = addslashes($sFileTooBigLabel);
		// Note : This is based on itop-attachement/main.itop-attachments.php
		$sAttachmentTableRowTemplateUnknown = json_encode(self::GetAttachmentCourrierTableRow(
			'{{iAttId}}',
			'{{sLineStyle}}',
			'{{sDocDownloadUrl}}',
		     true,
			'{{sAttachmentThumbUrl}}',
			'{{sFileName}}',
			'{{sAttachmentMeta}}',
			'{{sFileSize}}',
			'{{iFileSizeRaw}}',
			'{{sAttachmentDate}}',
			'attachment_unknown',
			'{{sAttachmentStatusComp}}',
			'{{iAttachmentDateRaw}}',
			$bIsDeleteAllowed
		));
		$sAttachmentTableUnknownId = $this->GetAttachmentsTableUnknownId();
		$oOutput->AddJs(
			<<<JS
			//^ evente on the button to add it by type attachment Unknown
			function UploadCourrierBySelectionUnknown(myValue)
			{
				if(myValue==5){
					console.log("test unknown working");
					var attachmentRowTemplateUnknown = $sAttachmentTableRowTemplateUnknown;
					function RemoveAttachment(sAttId)
					{
						$('#attachment_' + sAttId).attr('name', 'removed_attachments[]');
						$('#display_attachment_' + sAttId).hide();
						DecreaseAttachementsCountUnknown();
					}
					function IncreaseAttachementsCountUnknown()
					{
						UpdateAttachmentsCountUnknown(1);
					}
					function DecreaseAttachementsCountUnknown()
					{
						UpdateAttachmentsCountUnknown(-1);
					}
					function UpdateAttachmentsCountUnknown(iIncrement)
					{
						var countContainerUnknown = $("a#$sCollapseTogglerIdUnknown>span.attachments-count-unknown"),
						iCountCurrentValueUnknown = parseInt(countContainerUnknown.text());
						countContainerUnknown.text(iCountCurrentValueUnknown+iIncrement);
					}

					$('#{$this->oField->GetGlobalId()}_unknown').fileupload({
						url: '{$this->oField->GetUploadEndpoint()}',
						formData: { operation: 'add', temp_id: '{$sTempId}', object_class: '{$sObjectClass}', 'field_name': '{$this->oField->GetId()}', 'type_attachment': 'attachment_unknown' },
						dataType: 'json',
						pasteZone: null, // Don't accept files via Chrome's copy/paste
						done: function (e, data) {
							if((data.result.error !== undefined) && window.console)
							{
								console.log(data.result.error);
							}
							else
							{
								var \$oAttachmentTBodyUnknown = $(this).closest('.fileupload_field_content').find('div#attachments_container_unknown table#$sAttachmentTableUnknownId>tbody'),
									iAttId = data.result.att_id,
									sDownloadLinkUnknown = '{$this->oField->GetDownloadEndpoint()}'.replace(/-sAttachmentId-/, iAttId),
									sAttachmentMeta = '<input id="attachment_'+iAttId+'" type="hidden" name="attachments[]" value="'+iAttId+'"/>';

								// hide "no attachment" line if present
								\$oAttachmentFirstRow = \$oAttachmentTBodyUnknown.find("tr:first-child");
								\$oAttachmentFirstRow.find("td[colspan]").closest("tr").hide();
								
								// update attachments count
								IncreaseAttachementsCountUnknown();
								
								var replacesUnknown = [
									{search: "{{iAttId}}", replaceUnknown:iAttId },
									{search: "{{lineStyle}}", replaceUnknown:'' },
									{search: "{{sDocDownloadUrl}}", replaceUnknown:sDownloadLinkUnknown },
									{search: "{{sAttachmentThumbUrl}}", replaceUnknown:data.result.icon },
									{search: "{{sFileName}}", replaceUnknown: data.result.msg },
									{search: "{{sAttachmentMeta}}", replaceUnknown:sAttachmentMeta },
									{search: "{{sFileSize}}", replaceUnknown:data.result.file_size },
									{search: "{{sAttachmentTypeAttachment}}", replaceUnknown:data.result.type_attachment },
									{search: "{{sAttachmentStatusComp}}", replaceUnknown:data.result.status_comp },
									{search: "{{sAttachmentDate}}", replaceUnknown:data.result.creation_date },
								];
								var sAttachmentRowUnknown = attachmentRowTemplateUnknown   ;
								$.each(replacesUnknown, function(indexInArray, value ) {
									var re = new RegExp(value.search, 'gi');
									sAttachmentRowUnknown = sAttachmentRowUnknown.replace(re, value.replaceUnknown);
								});
								
								var oElem = $(sAttachmentRowUnknown);
								if(!data.result.preview){
									oElem.find('[data-tooltip-html-enabled="true"]').removeAttr('data-tooltip-content');
									oElem.find('[data-tooltip-html-enabled="true"]').removeAttr('data-tooltip-html-enabled');
								}
								\$oAttachmentTBodyUnknown.append(oElem);
								// Remove button handler
								$('#display_attachment_'+data.result.att_id+' :button').on('click', function(oEvent){
									oEvent.preventDefault();
									RemoveAttachment(data.result.att_id);
								});
							}
						},
						send: function(e, data){
							// Don't send attachment if size is greater than PHP post_max_size, otherwise it will break the request and all its parameters (\$_REQUEST, \$_POST, ...)
							// Note: We loop on the files as the data structures is an array but in this case, we only upload 1 file at a time.
							var iTotalSizeInBytes = 0;
							for(var i = 0; i < data.files.length; i++)
							{
								iTotalSizeInBytes += data.files[i].size;
							}
							
							if(iTotalSizeInBytes > $iMaxUploadInBytes)
							{
								alert('$sFileTooBigLabelForJS');
								return false;
							}
						},
						start: function() {
							// Scrolling to dropzone so the user can see that attachments are uploaded
							$(this)[0].scrollIntoView();
							// Showing loader
							$(this).closest('.upload_container').find('.loader').css('visibility', 'visible');
						},
						stop: function() {
							// Hiding the loader
							$(this).closest('.upload_container').find('.loader').css('visibility', 'hidden');
							// Adding this field to the touched fields of the field set so the cancel event is called if necessary
							$(this).closest(".field_set").trigger("field_change", {
								id: '{$this->oField->GetGlobalId()}_unknown',
								name: '{$this->oField->GetId()}'
							});
						}
					});

					// Remove button handler
					$('div#attachments_container_unknown table#$sAttachmentTableUnknownId>tbody>tr>td :button').on('click', function(oEvent){
						oEvent.preventDefault();
						RemoveAttachment($(this).closest('.attachment').find(':input[name="attachments[]"]').val());
					});

					// Handles a drag / drop overlay
					if($('#drag_overlay').length === 0)
					{
						$('body').append( $('<div id="drag_overlay" class="global_overlay"><div class="overlay_content"><div class="content_uploader"><div class="icon glyphicon glyphicon-cloud-upload"></div><div class="message">{$sUploadDropZoneLabel}</div></div></div></div>') );
					}

					// Handles highlighting of the drop zone
					// Note : This is inspired by itop-attachments/main.attachments.php
					$(document).on('dragover', function(oEvent){
						var bFiles = false;
						if (oEvent.dataTransfer && oEvent.dataTransfer.types)
						{
							for (var i = 0; i < oEvent.dataTransfer.types.length; i++)
							{
								if (oEvent.dataTransfer.types[i] == "application/x-moz-nativeimage")
								{
									bFiles = false; // mozilla contains "Files" in the types list when dragging images inside the page, but it also contains "application/x-moz-nativeimage" before
									break;
								}

								if (oEvent.dataTransfer.types[i] == "Files")
								{
									bFiles = true;
									break;
								}
							}
						}

						if (!bFiles) return; // Not dragging files

						var oDropZone = $('#drag_overlay');
						var oTimeout = window.dropZoneTimeout;
						// This is to detect when there is no drag over because there is no "drag out" event
						if (!oTimeout) {
							oDropZone.removeClass('drag_out').addClass('drag_in');
						} else {
							clearTimeout(oTimeout);
						}
						window.dropZoneTimeout = setTimeout(function () {
							window.dropZoneTimeout = null;
							oDropZone.removeClass('drag_in').addClass('drag_out');
						}, 200);
					});
				}
			}
			function UploadCourrierBySelection(){

			}
JS
		);
		// & 5 Section of Attachement the Unknown section to copy END From HERE

		return $oOutput;
	} else {
		
		$aLabelMessage1 = Dict::S('Portal:FieldLabel:1MessageBlock');
		$aLabelMessage2 = Dict::S('Portal:FieldLabel:2MessageBlock');
		$aLabelMessage3 = Dict::S('Portal:FieldLabel:3MessageBlock');
		$aLabelMessage4 = Dict::S('Portal:FieldLabel:4MessageBlock');
		$aLabelMessage5 = Dict::S('Portal:FieldLabel:5MessageBlock');
		$aLabelMessage6 = Dict::S('Portal:FieldLabel:6MessageBlock');
		$aLabelMessage7 = Dict::S('Portal:FieldLabel:7MessageBlock');
		$aLabelMessage8 = Dict::S('Portal:FieldLabel:8MessageBlock');
		//$idDemandeur = $this->oField->GetObject()->Get('caller_id');
		$nameDemandeur = $this->oField->GetObject()->Get('caller_name');
		//$nameOrgDemandeur = $this->oField->GetObject()->Get('org_name');
		var_dump($nameDemandeur);
		$oOutput->AddHtml('<div class="form-group">');
		$oOutput->AddHtml('<p style="font-size: 18px; padding: 8px 13px; margin: 1px 1px;">Cher(e) <Strong role="alert">'.$nameDemandeur.',</Strong></br></br>'); 
		$oOutput->AddHtml($aLabelMessage1.'</br>');
		$oOutput->AddHtml($aLabelMessage2.'</br>');
		$oOutput->AddHtml($aLabelMessage3.'</br></br>');
		$oOutput->AddHtml($aLabelMessage4.'</br>');
		$oOutput->AddHtml($aLabelMessage5.'</br></br>');
		$oOutput->AddHtml($aLabelMessage6.'</br></br>');
		$oOutput->AddHtml($aLabelMessage7.'</br></br>');
		$oOutput->AddHtml($aLabelMessage8.'</p>');
		$oOutput->AddHtml('</div>');
		return $oOutput;
	}
	}
	}

	/**
	 *
	 * @param \Combodo\iTop\Renderer\RenderingOutput $oOutput
	 * @param boolean $bIsDeleteAllowed
	 *
	 * @throws \Exception
	 * @throws \CoreException
	 */
	protected function PrepareExistingFiles(RenderingOutput $oOutput, $bIsDeleteAllowed)
	{
		$sAttachmentTableId = $this->GetAttachmentsTableId();
		$sDeleteBtn = Dict::S('Portal:Button:Delete');
		// If in read only and no attachments, we display a short message
		if ($this->oField->GetReadOnly() && ($this->oAttachmentsSet->Count() === 0))
		{
			$oOutput->AddHtml(Dict::S('Attachments:NoAttachment'));
		}
		else
		{
			$sTableHead = self::GetAttachmentTableHeader($bIsDeleteAllowed);
			$oOutput->Addhtml(<<<HTML
<table id="$sAttachmentTableId" class="attachments-list table table-striped table-bordered responsive" cellspacing="0" width="100%">
	$sTableHead
<tbody>
HTML
			);

			/** @var \Attachment $oAttachment */
			while ($oAttachment = $this->oAttachmentsSet->Fetch())
			{
				$iAttId = $oAttachment->GetKey();

				$sLineStyle = '';

				$sAttachmentMeta = '<input id="attachment_'.$iAttId.'" type="hidden" name="attachments[]" value="'.$iAttId.'">';

				/** @var \ormDocument $oDoc */
				$oDoc = $oAttachment->Get('contents');
				$sFileName = htmlentities($oDoc->GetFileName(), ENT_QUOTES, 'UTF-8');

				$sDocDownloadUrl = str_replace('-sAttachmentId-', $iAttId, $this->oField->GetDownloadEndpoint());

				$sAttachmentThumbUrl = utils::GetAbsoluteUrlAppRoot().AttachmentPlugIn::GetFileIcon($sFileName);
				$bHasPreview = false;
				if ($oDoc->IsPreviewAvailable())
				{
					$bHasPreview = true;
					$iMaxSizeForPreview = MetaModel::GetModuleSetting('itop-attachments', 'icon_preview_max_size', AbstractAttachmentsRenderer::DEFAULT_MAX_SIZE_FOR_PREVIEW);
					if ($oDoc->GetSize() <= $iMaxSizeForPreview)
					{
						$sAttachmentThumbUrl = $sDocDownloadUrl;
					}
				}

				$iFileSizeRaw = $oDoc->GetSize();
				$sFileSize = $oDoc->GetFormattedSize();

				$bIsTempAttachment = ($oAttachment->Get('item_id') === 0);
				$sAttachmentDate = '';
				$iAttachmentDateRaw = '';
				if (!$bIsTempAttachment)
				{
					$sAttachmentDate = $oAttachment->Get('creation_date');
					$iAttachmentDateRaw = AttributeDateTime::GetAsUnixSeconds($sAttachmentDate);
				}

				// ^ customization cfac for disable attachement
				$bIsStatusComp = ($oAttachment->Get('status_comp') == 0);
				$sAttachmentStatusComp = '';
				if (!$bIsStatusComp)
				{
					$sAttachmentStatusComp = $oAttachment->Get('status_comp');
				}

				$bIsTypeAttachment = ($oAttachment->Get('type_attachment') == null);
				$sAttachmentTypeAttachment = '';
				if (!$bIsTypeAttachment)
				{
					$sAttachmentTypeAttachment = $oAttachment->Get('type_attachment');
				}
				// ^ customization cfac for disable attachement
				
				$oOutput->Addhtml(self::GetAttachmentTableRow(
					$iAttId,
					$sLineStyle,
					$sDocDownloadUrl,
					$bHasPreview,
					$sAttachmentThumbUrl,
					$sFileName,
					$sAttachmentMeta,
					$sFileSize,
					$iFileSizeRaw,
					$sAttachmentDate,
					$iAttachmentDateRaw,
					$bIsDeleteAllowed
				));
			}

			$oOutput->Addhtml(<<<HTML
	</tbody>
</table>

HTML
			);
		}
	}

//& this function show the items of of the tables 1 Vente of attachment 
	/**
	 *
	 * @param \Combodo\iTop\Renderer\RenderingOutput $oOutput
	 * @param boolean $bIsDeleteAllowed
	 *
	 * @throws \Exception
	 * @throws \CoreException
	 */
	protected function PrepareExistingFilesVente(RenderingOutput $oOutput, $bIsDeleteAllowed)
	{
		$sAttachmentTableVenteId = $this->GetAttachmentsTableVenteId();
		$sDeleteBtn = Dict::S('Portal:Button:Delete');
		// If in read only and no attachments, we display a short message
		if ($this->oField->GetReadOnly() && ($this->oAttachmentsSetVente->Count() === 0))
		{ 
			$oOutput->AddHtml(Dict::S('Attachments:NoAttachment'));
		}
		else
		{
			$sTableHead = self::GetAttachmentCourrierTableHeader($bIsDeleteAllowed);
			$oOutput->Addhtml(<<<HTML
<table id="$sAttachmentTableVenteId" class="attachments-list table table-striped table-bordered responsive" cellspacing="0" width="100%">
	$sTableHead
<tbody>
HTML
			);

			/** @var \Attachment $oAttachment */
			while ($oAttachment = $this->oAttachmentsSetVente->Fetch())
			{
				$iAttIdVente = $oAttachment->GetKey();

				$sLineStyle = '';

				$sAttachmentMeta = '<input id="attachment_'.$iAttIdVente.'" type="hidden" name="attachments[]" value="'.$iAttIdVente.'">';

				/** @var \ormDocument $oDoc */
				$oDoc = $oAttachment->Get('contents');
				$sFileName = htmlentities($oDoc->GetFileName(), ENT_QUOTES, 'UTF-8');

				$sDocDownloadUrl = str_replace('-sAttachmentId-', $iAttIdVente, $this->oField->GetDownloadEndpoint());

				$sAttachmentThumbUrl = utils::GetAbsoluteUrlAppRoot().AttachmentPlugIn::GetFileIcon($sFileName);
				$bHasPreview = false;
				if ($oDoc->IsPreviewAvailable())
				{
					$bHasPreview = true;
					$iMaxSizeForPreview = MetaModel::GetModuleSetting('itop-attachments', 'icon_preview_max_size', AbstractAttachmentsRenderer::DEFAULT_MAX_SIZE_FOR_PREVIEW);
					if ($oDoc->GetSize() <= $iMaxSizeForPreview)
					{
						$sAttachmentThumbUrl = $sDocDownloadUrl;
					}
				}

				$iFileSizeRaw = $oDoc->GetSize();
				$sFileSize = $oDoc->GetFormattedSize();

				$bIsTempAttachment = ($oAttachment->Get('item_id') === 0);
				$sAttachmentDate = '';
				$iAttachmentDateRaw = '';
				if (!$bIsTempAttachment)
				{
					$sAttachmentDate = $oAttachment->Get('creation_date');
					$iAttachmentDateRaw = AttributeDateTime::GetAsUnixSeconds($sAttachmentDate);
				}

				// ^ customization cfac for disable attachement
				$bIsStatusComp = ($oAttachment->Get('status_comp') == 0);
				$sAttachmentStatusComp = '';
				if (!$bIsStatusComp)
				{
					$sAttachmentStatusComp = $oAttachment->Get('status_comp');
				}

				$bIsTypeAttachment = ($oAttachment->Get('type_attachment') == null);
				$sAttachmentTypeAttachment = '';
				if (!$bIsTypeAttachment)
				{
					$sAttachmentTypeAttachment = $oAttachment->Get('type_attachment');
				}
				// ^ customization cfac for disable attachement
				
				$oOutput->Addhtml(self::GetAttachmentCourrierTableRow(
					$iAttIdVente,
					$sLineStyle,
					$sDocDownloadUrl,
					$bHasPreview,
					$sAttachmentThumbUrl,
					$sFileName,
					$sAttachmentMeta,
					$sFileSize,
					$iFileSizeRaw,
					$sAttachmentDate,
					$sAttachmentTypeAttachment,
					$sAttachmentStatusComp,
					$iAttachmentDateRaw,
					$bIsDeleteAllowed
				));
			}

			$oOutput->Addhtml(<<<HTML
	</tbody>
</table>

HTML
			);
		}
	}

//& this function show the items of of the tables 2 Achat of attachment 
	/**
	 *
	 * @param \Combodo\iTop\Renderer\RenderingOutput $oOutput
	 * @param boolean $bIsDeleteAllowed
	 *
	 * @throws \Exception
	 * @throws \CoreException
	 */
	protected function PrepareExistingFilesAchat(RenderingOutput $oOutput, $bIsDeleteAllowed)
	{
		$sAttachmentTableAchatId = $this->GetAttachmentsTableAchatId();
		$sDeleteBtn = Dict::S('Portal:Button:Delete');

		// If in read only and no attachments, we display a short message
		if ($this->oField->GetReadOnly() && ($this->oAttachmentsSetAchat->Count() === 0))
		{
			$oOutput->AddHtml(Dict::S('Attachments:NoAttachment'));
		}
		else
		{
			$sTableHead = self::GetAttachmentCourrierTableHeader($bIsDeleteAllowed);
			$oOutput->Addhtml(<<<HTML
<table id="$sAttachmentTableAchatId" class="attachments-list table table-striped table-bordered responsive" cellspacing="0" width="100%">
	$sTableHead
<tbody>
HTML
			);

			/** @var \Attachment $oAttachment */
			while ($oAttachment = $this->oAttachmentsSetAchat->Fetch())
			{
				$iAttIdAchat = $oAttachment->GetKey();

				$sLineStyle = '';

				$sAttachmentMeta = '<input id="attachment_'.$iAttIdAchat.'" type="hidden" name="attachments[]" value="'.$iAttIdAchat.'">';

				/** @var \ormDocument $oDoc */
				$oDoc = $oAttachment->Get('contents');
				$sFileName = htmlentities($oDoc->GetFileName(), ENT_QUOTES, 'UTF-8');

				$sDocDownloadUrl = str_replace('-sAttachmentId-', $iAttIdAchat, $this->oField->GetDownloadEndpoint());

				$sAttachmentThumbUrl = utils::GetAbsoluteUrlAppRoot().AttachmentPlugIn::GetFileIcon($sFileName);
				$bHasPreview = false;
				if ($oDoc->IsPreviewAvailable())
				{
					$bHasPreview = true;
					$iMaxSizeForPreview = MetaModel::GetModuleSetting('itop-attachments', 'icon_preview_max_size', AbstractAttachmentsRenderer::DEFAULT_MAX_SIZE_FOR_PREVIEW);
					if ($oDoc->GetSize() <= $iMaxSizeForPreview)
					{
						$sAttachmentThumbUrl = $sDocDownloadUrl;
					}
				}

				$iFileSizeRaw = $oDoc->GetSize();
				$sFileSize = $oDoc->GetFormattedSize();

				$bIsTempAttachment = ($oAttachment->Get('item_id') === 0);
				$sAttachmentDate = '';
				$iAttachmentDateRaw = '';
				if (!$bIsTempAttachment)
				{
					$sAttachmentDate = $oAttachment->Get('creation_date');
					$iAttachmentDateRaw = AttributeDateTime::GetAsUnixSeconds($sAttachmentDate);
				}

				// ^ customization cfac for disable attachement
				$bIsStatusComp = ($oAttachment->Get('status_comp') == 0);
				$sAttachmentStatusComp = '';
				if (!$bIsStatusComp)
				{
					$sAttachmentStatusComp = $oAttachment->Get('status_comp');
				}

				$bIsTypeAttachment = ($oAttachment->Get('type_attachment') == null);
				$sAttachmentTypeAttachment = '';
				if (!$bIsTypeAttachment)
				{
					$sAttachmentTypeAttachment = $oAttachment->Get('type_attachment');
				}
				// ^ customization cfac for disable attachement
				
				$oOutput->Addhtml(self::GetAttachmentCourrierTableRow(
					$iAttIdAchat,
					$sLineStyle,
					$sDocDownloadUrl,
					$bHasPreview,
					$sAttachmentThumbUrl,
					$sFileName,
					$sAttachmentMeta,
					$sFileSize,
					$iFileSizeRaw,
					$sAttachmentDate,
					$sAttachmentTypeAttachment,
					$sAttachmentStatusComp,
					$iAttachmentDateRaw,
					$bIsDeleteAllowed
				));
			}

			$oOutput->Addhtml(<<<HTML
	</tbody>
</table>

HTML
			);
		}
	}

//& this function show the items of of the tables 3 of attachment banque
	/**
	 *
	 * @param \Combodo\iTop\Renderer\RenderingOutput $oOutput
	 * @param boolean $bIsDeleteAllowed
	 *
	 * @throws \Exception
	 * @throws \CoreException
	 */
	protected function PrepareExistingFilesBanque(RenderingOutput $oOutput, $bIsDeleteAllowed)
	{
		$sAttachmentTableBanqueId = $this->GetAttachmentsTableBanqueId();
		$sDeleteBtn = Dict::S('Portal:Button:Delete');

		// If in read only and no attachments, we display a short message
		if ($this->oField->GetReadOnly() && ($this->oAttachmentsSetBanque->Count() === 0))
		{
			$oOutput->AddHtml(Dict::S('Attachments:NoAttachment'));
		}
		else
		{
			$sTableHead = self::GetAttachmentCourrierTableHeader($bIsDeleteAllowed);
			$oOutput->Addhtml(<<<HTML
<table id="$sAttachmentTableBanqueId" class="attachments-list table table-striped table-bordered responsive" cellspacing="0" width="100%">
	$sTableHead
<tbody>
HTML
			);

			/** @var \Attachment $oAttachment */
			while ($oAttachment = $this->oAttachmentsSetBanque->Fetch())
			{
				$iAttIdBanque = $oAttachment->GetKey();

				$sLineStyle = '';

				$sAttachmentMeta = '<input id="attachment_'.$iAttIdBanque.'" type="hidden" name="attachments[]" value="'.$iAttIdBanque.'">';

				/** @var \ormDocument $oDoc */
				$oDoc = $oAttachment->Get('contents');
				$sFileName = htmlentities($oDoc->GetFileName(), ENT_QUOTES, 'UTF-8');

				$sDocDownloadUrl = str_replace('-sAttachmentId-', $iAttIdBanque, $this->oField->GetDownloadEndpoint());

				$sAttachmentThumbUrl = utils::GetAbsoluteUrlAppRoot().AttachmentPlugIn::GetFileIcon($sFileName);
				$bHasPreview = false;
				if ($oDoc->IsPreviewAvailable())
				{
					$bHasPreview = true;
					$iMaxSizeForPreview = MetaModel::GetModuleSetting('itop-attachments', 'icon_preview_max_size', AbstractAttachmentsRenderer::DEFAULT_MAX_SIZE_FOR_PREVIEW);
					if ($oDoc->GetSize() <= $iMaxSizeForPreview)
					{
						$sAttachmentThumbUrl = $sDocDownloadUrl;
					}
				}

				$iFileSizeRaw = $oDoc->GetSize();
				$sFileSize = $oDoc->GetFormattedSize();

				$bIsTempAttachment = ($oAttachment->Get('item_id') === 0);
				$sAttachmentDate = '';
				$iAttachmentDateRaw = '';
				if (!$bIsTempAttachment)
				{
					$sAttachmentDate = $oAttachment->Get('creation_date');
					$iAttachmentDateRaw = AttributeDateTime::GetAsUnixSeconds($sAttachmentDate);
				}

				// ^ customization cfac for disable attachement
				$bIsStatusComp = ($oAttachment->Get('status_comp') == 0);
				$sAttachmentStatusComp = '';
				if (!$bIsStatusComp)
				{
					$sAttachmentStatusComp = $oAttachment->Get('status_comp');
				}

				$bIsTypeAttachment = ($oAttachment->Get('type_attachment') == null);
				$sAttachmentTypeAttachment = '';
				if (!$bIsTypeAttachment)
				{
					$sAttachmentTypeAttachment = $oAttachment->Get('type_attachment');
				}
				// ^ customization cfac for disable attachement
				
				$oOutput->Addhtml(self::GetAttachmentCourrierTableRow(
					$iAttIdBanque,
					$sLineStyle,
					$sDocDownloadUrl,
					$bHasPreview,
					$sAttachmentThumbUrl,
					$sFileName,
					$sAttachmentMeta,
					$sFileSize,
					$iFileSizeRaw,
					$sAttachmentDate,
					$sAttachmentTypeAttachment,
					$sAttachmentStatusComp,
					$iAttachmentDateRaw,
					$bIsDeleteAllowed
				));
			}

			$oOutput->Addhtml(<<<HTML
	</tbody>
</table>

HTML
			);
		}
	}

	//& this function show the items of of the tables 4 of attachment other
	/**
	 *
	 * @param \Combodo\iTop\Renderer\RenderingOutput $oOutput
	 * @param boolean $bIsDeleteAllowed
	 *
	 * @throws \Exception
	 * @throws \CoreException
	 */
	protected function PrepareExistingFilesOther(RenderingOutput $oOutput, $bIsDeleteAllowed)
	{
		$sAttachmentTableOtherId = $this->GetAttachmentsTableOtherId();
		$sDeleteBtn = Dict::S('Portal:Button:Delete');

		// If in read only and no attachments, we display a short message
		if ($this->oField->GetReadOnly() && ($this->oAttachmentsSetOther->Count() === 0))
		{
			$oOutput->AddHtml(Dict::S('Attachments:NoAttachment'));
		}
		else
		{
			$sTableHead = self::GetAttachmentCourrierTableHeader($bIsDeleteAllowed);
			$oOutput->Addhtml(<<<HTML
<table id="$sAttachmentTableOtherId" class="attachments-list table table-striped table-bordered responsive" cellspacing="0" width="100%">
	$sTableHead
<tbody>
HTML
			);

			/** @var \Attachment $oAttachment */
			while ($oAttachment = $this->oAttachmentsSetOther->Fetch())
			{
				$iAttIdOther = $oAttachment->GetKey();

				$sLineStyle = '';

				$sAttachmentMeta = '<input id="attachment_'.$iAttIdOther.'" type="hidden" name="attachments[]" value="'.$iAttIdOther.'">';

				/** @var \ormDocument $oDoc */
				$oDoc = $oAttachment->Get('contents');
				$sFileName = htmlentities($oDoc->GetFileName(), ENT_QUOTES, 'UTF-8');

				$sDocDownloadUrl = str_replace('-sAttachmentId-', $iAttIdOther, $this->oField->GetDownloadEndpoint());

				$sAttachmentThumbUrl = utils::GetAbsoluteUrlAppRoot().AttachmentPlugIn::GetFileIcon($sFileName);
				$bHasPreview = false;
				if ($oDoc->IsPreviewAvailable())
				{
					$bHasPreview = true;
					$iMaxSizeForPreview = MetaModel::GetModuleSetting('itop-attachments', 'icon_preview_max_size', AbstractAttachmentsRenderer::DEFAULT_MAX_SIZE_FOR_PREVIEW);
					if ($oDoc->GetSize() <= $iMaxSizeForPreview)
					{
						$sAttachmentThumbUrl = $sDocDownloadUrl;
					}
				}

				$iFileSizeRaw = $oDoc->GetSize();
				$sFileSize = $oDoc->GetFormattedSize();

				$bIsTempAttachment = ($oAttachment->Get('item_id') === 0);
				$sAttachmentDate = '';
				$iAttachmentDateRaw = '';
				if (!$bIsTempAttachment)
				{
					$sAttachmentDate = $oAttachment->Get('creation_date');
					$iAttachmentDateRaw = AttributeDateTime::GetAsUnixSeconds($sAttachmentDate);
				}

				// ^ customization cfac for disable attachement
				$bIsStatusComp = ($oAttachment->Get('status_comp') == 0);
				$sAttachmentStatusComp = '';
				if (!$bIsStatusComp)
				{
					$sAttachmentStatusComp = $oAttachment->Get('status_comp');
				}

				$bIsTypeAttachment = ($oAttachment->Get('type_attachment') == null);
				$sAttachmentTypeAttachment = '';
				if (!$bIsTypeAttachment)
				{
					$sAttachmentTypeAttachment = $oAttachment->Get('type_attachment');
				}
				// ^ customization cfac for disable attachement
				
				$oOutput->Addhtml(self::GetAttachmentCourrierTableRow(
					$iAttIdOther,
					$sLineStyle,
					$sDocDownloadUrl,
					$bHasPreview,
					$sAttachmentThumbUrl,
					$sFileName,
					$sAttachmentMeta,
					$sFileSize,
					$iFileSizeRaw,
					$sAttachmentDate,
					$sAttachmentTypeAttachment,
					$sAttachmentStatusComp,
					$iAttachmentDateRaw,
					$bIsDeleteAllowed
				));
			}

			$oOutput->Addhtml(<<<HTML
	</tbody>
</table>

HTML
			);
		}
	}


	//& this function show the items of of the tables 5 of attachment Unknown
	/**
	 *
	 * @param \Combodo\iTop\Renderer\RenderingOutput $oOutput
	 * @param boolean $bIsDeleteAllowed
	 *
	 * @throws \Exception
	 * @throws \CoreException
	 */
	protected function PrepareExistingFilesUnKnown(RenderingOutput $oOutput, $bIsDeleteAllowed)
	{
		$sAttachmentTableUnknownId = $this->GetAttachmentsTableUnknownId();
		$sDeleteBtn = Dict::S('Portal:Button:Delete');

		// If in read only and no attachments, we display a short message
		if ($this->oField->GetReadOnly() && ($this->oAttachmentsSetUnKnown->Count() === 0))
		{
			$oOutput->AddHtml(Dict::S('Attachments:NoAttachment'));
		}
		else
		{
			$sTableHead = self::GetAttachmentCourrierTableHeader($bIsDeleteAllowed);
			$oOutput->Addhtml(<<<HTML
<table id="$sAttachmentTableUnknownId" class="attachments-list table table-striped table-bordered responsive" cellspacing="0" width="100%">
	$sTableHead
<tbody>
HTML
			);

			/** @var \Attachment $oAttachment */
			while ($oAttachment = $this->oAttachmentsSetUnKnown->Fetch())
			{
				$iAttIdUnKnown = $oAttachment->GetKey();

				$sLineStyle = '';

				$sAttachmentMeta = '<input id="attachment_'.$iAttIdUnKnown.'" type="hidden" name="attachments[]" value="'.$iAttIdUnKnown.'">';

				/** @var \ormDocument $oDoc */
				$oDoc = $oAttachment->Get('contents');
				$sFileName = htmlentities($oDoc->GetFileName(), ENT_QUOTES, 'UTF-8');

				$sDocDownloadUrl = str_replace('-sAttachmentId-', $iAttIdUnKnown, $this->oField->GetDownloadEndpoint());

				$sAttachmentThumbUrl = utils::GetAbsoluteUrlAppRoot().AttachmentPlugIn::GetFileIcon($sFileName);
				$bHasPreview = false;
				if ($oDoc->IsPreviewAvailable())
				{
					$bHasPreview = true;
					$iMaxSizeForPreview = MetaModel::GetModuleSetting('itop-attachments', 'icon_preview_max_size', AbstractAttachmentsRenderer::DEFAULT_MAX_SIZE_FOR_PREVIEW);
					if ($oDoc->GetSize() <= $iMaxSizeForPreview)
					{
						$sAttachmentThumbUrl = $sDocDownloadUrl;
					}
				}

				$iFileSizeRaw = $oDoc->GetSize();
				$sFileSize = $oDoc->GetFormattedSize();

				$bIsTempAttachment = ($oAttachment->Get('item_id') === 0);
				$sAttachmentDate = '';
				$iAttachmentDateRaw = '';
				if (!$bIsTempAttachment)
				{
					$sAttachmentDate = $oAttachment->Get('creation_date');
					$iAttachmentDateRaw = AttributeDateTime::GetAsUnixSeconds($sAttachmentDate);
				}

				// ^ customization cfac for disable attachement
				$bIsStatusComp = ($oAttachment->Get('status_comp') == 0);
				$sAttachmentStatusComp = '';
				if (!$bIsStatusComp)
				{
					$sAttachmentStatusComp = $oAttachment->Get('status_comp');
				}

				$bIsTypeAttachment = ($oAttachment->Get('type_attachment') == null);
				$sAttachmentTypeAttachment = '';
				if (!$bIsTypeAttachment)
				{
					$sAttachmentTypeAttachment = $oAttachment->Get('type_attachment');
				}
				// ^ customization cfac for disable attachement
				
				$oOutput->Addhtml(self::GetAttachmentCourrierTableRow(
					$iAttIdUnKnown,
					$sLineStyle,
					$sDocDownloadUrl,
					$bHasPreview,
					$sAttachmentThumbUrl,
					$sFileName,
					$sAttachmentMeta,
					$sFileSize,
					$iFileSizeRaw,
					$sAttachmentDate,
					$sAttachmentTypeAttachment,
					$sAttachmentStatusComp,
					$iAttachmentDateRaw,
					$bIsDeleteAllowed
				));
			}

			$oOutput->Addhtml(<<<HTML
	</tbody>
</table>

HTML
			);
		}
	}

	/**
	 * @param bool $bIsDeleteAllowed
	 *
	 * @return string
	 * @since 2.7.0
	 */
	protected static function GetAttachmentTableHeader($bIsDeleteAllowed)
	{
		$sTitleThumbnail = Dict::S('Attachments:File:Thumbnail');
		$sTitleFileName = Dict::S('Attachments:File:Name');
		$sTitleFileSize = Dict::S('Attachments:File:Size');
		$sTitleFileDate = Dict::S('Attachments:File:Date');

		// Optional column
		$sDeleteHeaderAsHtml = ($bIsDeleteAllowed) ? '<th role="delete" data-priority="1"></th>' : '';

		return <<<HTML
	<thead>
		<th role="icon">$sTitleThumbnail</th>
		<th role="filename" data-priority="1">$sTitleFileName</th>
		<th role="formatted-size">$sTitleFileSize</th>
		<th role="upload-date">$sTitleFileDate</th>
		$sDeleteHeaderAsHtml
	</thead>
HTML;
	}

	/**
	 * @param bool $bIsDeleteAllowed
	 *
	 * @return string
	 * @since 2.7.0
	 */
	protected static function GetAttachmentCourrierTableHeader($bIsDeleteAllowed)
	{
		$sTitleThumbnail = Dict::S('Attachments:File:Thumbnail');
		$sTitleFileName = Dict::S('Attachments:File:Name');
		$sTitleFileSize = Dict::S('Attachments:File:Size');
		$sTitleFileDate = Dict::S('Attachments:File:Date');
		//^ customization cfac for disable attachement
		$sFileTypeAttachment = Dict::S('Attachments:File:type_attachment');
		$sTitleFileStatusComp = Dict::S('Attachments:File:status');
		//^ end customization cfac

		// Optional column
		//^ customization cfac for disable attachement
		$sDeleteHeaderAsHtml = ($bIsDeleteAllowed) ? '<th role="delete" data-priority="1" style="width:15%"></th>' : '';
		//^ end customization cfac

		return <<<HTML
	<thead>
		<th role="icon" style="width:11%">$sTitleThumbnail</th>
		<th role="filename" data-priority="1" style="width:12%">$sTitleFileName</th>
		<th role="formatted-size" style="width:11%">$sTitleFileSize</th>
		<th role="upload-date" style="width:17%">$sTitleFileDate</th>
		<th role="type-file" style="width:15%">$sFileTypeAttachment</th>
		<th role="status-file" style="width:21%">$sTitleFileStatusComp</th>
		<!-- ^ customization cfac for disable attachement -->
			$sDeleteHeaderAsHtml
		<!--^ end customization cfac -->
	</thead>
HTML;
	}

	/**
	 * @param int $iAttId
	 * @param string $sLineStyle
	 * @param string $sDocDownloadUrl
	 * @param bool $bHasPreview replace string $sIconClass since 3.0.1
	 * @param string $sAttachmentThumbUrl
	 * @param string $sFileName
	 * @param string $sAttachmentMeta
	 * @param string $sFileSize
	 * @param integer $iFileSizeRaw
	 * @param string $sAttachmentDate
	 * @param integer $iAttachmentDateRaw
	 * @param boolean $bIsDeleteAllowed
	 *
	 * @return string
	 * @since 2.7.0
	 */
	protected static function GetAttachmentTableRow(
		$iAttId, $sLineStyle, $sDocDownloadUrl, $bHasPreview, $sAttachmentThumbUrl, $sFileName, $sAttachmentMeta, $sFileSize,
		$iFileSizeRaw, $sAttachmentDate, $iAttachmentDateRaw, $bIsDeleteAllowed
	) {
		$sDeleteCell = '';
		if ($bIsDeleteAllowed)
		{
			$sDeleteBtnLabel = Dict::S('Portal:Button:Delete');
			//$sDeleteCell = '<td role="delete"><input id="btn_remove_'.$iAttId.'" type="button" class="btn btn-xs btn-primary" value="'.$sDeleteBtnLabel.'"></td>';
			// * this acces ben limited so client can t delete attachment at all in the portal
			$sDeleteCell = '<td role="delete"><input id="btn_remove_'.$iAttId.'" type="button" class="btn btn-xs btn-primary" value="'.$sDeleteBtnLabel.'" disabled></td>';
		}
		$sHtml =  "<tr id=\"display_attachment_{$iAttId}\" class=\"attachment\" $sLineStyle>";

		if($bHasPreview) {
			$sHtml .= "<td role=\"icon\"><a href=\"$sDocDownloadUrl\" target=\"_blank\" data-tooltip-content=\"<img class='attachment-tooltip' src='{$sDocDownloadUrl}'>\" data-tooltip-html-enabled=true><img src=\"$sAttachmentThumbUrl\" ></a></td>";
		} else {
			$sHtml .= "<td role=\"icon\"><a href=\"$sDocDownloadUrl\" target=\"_blank\"><img src=\"$sAttachmentThumbUrl\" ></a></td>";
		}

		$sHtml .=  <<<HTML
	 <td role="filename"><a href="$sDocDownloadUrl" target="_blank">$sFileName</a>$sAttachmentMeta</td>
	  <td role="formatted-size" data-order="$iFileSizeRaw">$sFileSize</td>
	  <td role="upload-date" data-order="$iAttachmentDateRaw">$sAttachmentDate</td>
	  $sDeleteCell
	</tr>
HTML;
		return $sHtml;
	}



	/**
	 * @param int $iAttId
	 * @param string $sLineStyle
	 * @param string $sDocDownloadUrl
	 * @param bool $bHasPreview replace string $sIconClass since 3.0.1
	 * @param string $sAttachmentThumbUrl
	 * @param string $sFileName
	 * @param string $sAttachmentMeta
	 * @param string $sFileSize
	 * @param integer $iFileSizeRaw
	 * @param string $sAttachmentDate
	 * @param integer $iAttachmentDateRaw
	 * @param string $sAttachmentTypeAttachment
	 * @param boolean $sAttachmentStatusComp
	 * @param boolean $bIsDeleteAllowed
	 *
	 * @return string
	 * @since 2.7.0
	 */
	protected static function GetAttachmentCourrierTableRow(
		$iAttId, $sLineStyle, $sDocDownloadUrl, $bHasPreview, $sAttachmentThumbUrl, $sFileName, $sAttachmentMeta, $sFileSize,
		$iFileSizeRaw, $sAttachmentDate, $sAttachmentTypeAttachment, $sAttachmentStatusComp, $iAttachmentDateRaw, $bIsDeleteAllowed
	) {
		$sDeleteCell = '';
		if ($bIsDeleteAllowed && $sAttachmentStatusComp !=1)
		{
			$sDeleteBtnLabel = Dict::S('Portal:Button:Delete');
			$sDeleteCell = '<td role="delete"><input id="btn_remove_'.$iAttId.'" type="button" class="btn btn-xs btn-primary" value="'.$sDeleteBtnLabel.'"></td>';
		} else {
			$sDeleteBtnLabel = Dict::S('Portal:Button:Delete');
			$sDeleteCell = '<td role="delete"><input id="btn_remove_'.$iAttId.'" type="button" class="btn btn-xs btn-primary" value="'.$sDeleteBtnLabel.'" disabled></td>';
		}

		$sHtml =  "<tr id=\"display_attachment_{$iAttId}\" class=\"attachment\" $sLineStyle>";

		if($bHasPreview) {
			$sHtml .= "<td role=\"icon\"><a href=\"$sDocDownloadUrl\" target=\"_blank\" data-tooltip-content=\"<img class='attachment-tooltip' src='{$sDocDownloadUrl}'>\" data-tooltip-html-enabled=true><img src=\"$sAttachmentThumbUrl\" ></a></td>";
		} else {
			$sHtml .= "<td role=\"icon\"><a href=\"$sDocDownloadUrl\" target=\"_blank\"><img src=\"$sAttachmentThumbUrl\" ></a></td>";
		}
		// ^ customization cfac for disable attachement
		if ($sAttachmentStatusComp == 1)
		{
			$sStatusBtnLabelValid = Dict::S('Portal:Button:ValidStatut');
			$sStatusCompCell = '<td role="status-comp" style="text-align: center; vertical-align: middle;"><p id="status_id_portal_user" style="font-size: 11px; font-weight: bold; background-color: #357a38; width: 120px; height: 28px; border: none; color: white; padding: 8px 13px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; cursor: pointer; border-radius: 25% 10%;" class="btn btn-xs btn-primary" disabled>'.$sStatusBtnLabelValid.'</p></td>';
		} else {
			$sStatusBtnLabelNonValid = Dict::S('Portal:Button:NonValidStatut');
			$sStatusCompCell = '<td role="status-comp" style="text-align: center; vertical-align: middle;"><p id="status_id_portal_user" style="font-size: 11px; font-weight: bold; background-color: #660000; width: 120px; height: 28px; border: none; color: white; padding: 8px 13px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; cursor: pointer; border-radius: 25% 10%;" class="btn btn-xs btn-primary" disabled>'.$sStatusBtnLabelNonValid.'</p></td>';
		}
		//! function to show the type by enum value TO DO
		
			if($sAttachmentTypeAttachment == "attachment_achat") {

				$sTypeLabelAttach = Dict::S('Portal:Button:TypeAchat');
				$sTypeAttachCell = '<td role="type-document" style="text-align: center; vertical-align: middle;"><li id="type_doc_id_portal_user_achat" class="list-group-item list-group-item-action list-group-item-info" style="font-size: 12px; font-weight: bold; width: 85px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%;">'.$sTypeLabelAttach.'</li></td>';

			} else if($sAttachmentTypeAttachment == "attachment_vente") {

				$sTypeLabelAttach = Dict::S('Portal:Button:TypeVente');
				$sTypeAttachCell = '<td role="type-document" style="text-align: center; vertical-align: middle;"><li id="type_doc_id_portal_user_vente" class="list-group-item list-group-item-action list-group-item-success" style="font-size: 12px; font-weight: bold; font-weight: bold; width: 85px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%;">'.$sTypeLabelAttach.'</li></td>';	
			
			} else if($sAttachmentTypeAttachment == "attachment_banque") {

				$sTypeLabelAttach = Dict::S('Portal:Button:TypeBanque');
				$sTypeAttachCell = '<td role="type-document" style="text-align: center; vertical-align: middle;"><li id="type_doc_id_portal_user_banque" class="list-group-item list-group-item-action list-group-item-warning" style="font-size: 12px; font-weight: bold; width: 85px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%;">'.$sTypeLabelAttach.'</li></td>';

			} else if ($sAttachmentTypeAttachment == "attachment_other") {

				$sTypeLabelAttach = Dict::S('Portal:Button:TypeOther');
				$sTypeAttachCell = '<td role="type-document" style="text-align: center; vertical-align: middle;"><li id="type_doc_id_portal_user_other" class="list-group-item list-group-item-action list-group-item-danger" style="font-size: 12px; font-weight: bold; width: 85px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%;">'.$sTypeLabelAttach.'</li></td>';

			} else if ($sAttachmentTypeAttachment == "attachment_unknown") {
				
				$sTypeUndefinedLabelAttachNot = Dict::S('Portal:Button:TypeUndefined');
				$sTypeAttachCell = '<td role="type-document" style="text-align: center; vertical-align: middle;"><li id="type_doc_id_portal_user_unknown" class="list-group-item list-group-item-action list-group-item-dark" style="font-size: 12px; font-weight: bold; width: 85px; height: 28px; padding: 5px 5px; text-align: center; text-decoration: none; display: inline-block; margin: 1px 1px; border-radius: 25% 10%;">'.$sTypeUndefinedLabelAttachNot.'</li></td>';

			}

		//var_dump($sAttachmentTypeAttachment);
		// ^ customization cfac for disable attachement

		$sHtml .=  <<<HTML
	 <td role="filename"><a href="$sDocDownloadUrl" target="_blank">$sFileName</a>$sAttachmentMeta</td>
	  <td role="formatted-size" data-order="$iFileSizeRaw">$sFileSize</td>
	  <td role="upload-date" data-order="$iAttachmentDateRaw">$sAttachmentDate</td>
	  <!-- // ^ customization cfac for disable attachement -->
	  $sTypeAttachCell
	  $sStatusCompCell
	  <!-- // ^ customization cfac for disable attachement -->
	  $sDeleteCell
	</tr>
HTML;
		return $sHtml;
	}


	/**
	 * @return string
	 */
	protected function GetAttachmentsTableId()
	{
		$sFormFieldId = $this->oField->GetGlobalId();
		$sAttachmentTableId = 'attachments-'.$sFormFieldId;

		return $sAttachmentTableId;
	}
	// & put a random id for attachement table of vente	
	/**
	 * @return string
	 */
	protected function GetAttachmentsTableVenteId()
	{
		$sFormFieldVenteId = $this->oField->GetGlobalId();
		$sAttachmentTableVenteId = 'attachments'.$sFormFieldVenteId.'-vente';
		return $sAttachmentTableVenteId;
	}
	// & put a random id for attachement table of Achat	
	/**
	 * @return string
	 */
	protected function GetAttachmentsTableAchatId()
	{
		$sFormFieldAchatId = $this->oField->GetGlobalId();
		$sAttachmentTableAchatId = 'attachments'.$sFormFieldAchatId.'-achat';
		return $sAttachmentTableAchatId;
	}
	// & put a random id for attachement table of Banque	
	/**
	 * @return string
	 */
	protected function GetAttachmentsTableBanqueId()
	{
		$sFormFieldBanqueId = $this->oField->GetGlobalId();
		$sAttachmentTableBanqueId = 'attachments'.$sFormFieldBanqueId.'-banque';
		return $sAttachmentTableBanqueId;
	}
	// & put a random id for attachement table of Other	
	/**
	 * @return string
	 */
	protected function GetAttachmentsTableOtherId()
	{
		$sFormFieldOtherId = $this->oField->GetGlobalId();
		$sAttachmentTableOtherId = 'attachments'.$sFormFieldOtherId.'-other';
		return $sAttachmentTableOtherId;
	}
	// & put a random id for attachement table of Unknown	
	/**
	 * @return string
	 */
	protected function GetAttachmentsTableUnknownId()
	{
		$sFormFieldUnknownId = $this->oField->GetGlobalId();
		$sAttachmentTableUnknownId = 'attachments'.$sFormFieldUnknownId.'-unknown';
		return $sAttachmentTableUnknownId;
	}
}
