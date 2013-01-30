$(function() {
				
				/*
				INITIALISATION
				Variabilise l'objet */
				var infoIWS = new google.maps.InfoWindow();
								
				/*
				COORDONNEES GPS */
				var IWSpos = new google.maps.LatLng(48.847795,2.425779);
				var MetroGrandPlacePos = new google.maps.LatLng(48.847571,2.43361);
				var MetroGarePos = new google.maps.LatLng(48.845377,2.429003);
				var TramwayPos = new google.maps.LatLng(48.846351,2.41848);
				var LaRedoutePos = new google.maps.LatLng(50.69688,3.168888);
				var EsaatPos = new google.maps.LatLng(50.695758,3.167131);
				var ParkingPos = new google.maps.LatLng(50.696755,3.170838);
				
				/*
				CHEMIN DES ICONES */
				var pictoImpala = 'images/cursor.png';
				var pictoImpalaShadow = 'images/shadow.png';
				var pictorer = 'images/rera.png';
				var pictoMetro = 'images/picto_metro.png';
				var pictoTramway = 'images/picto_metro.png';	
				var pictoLaRedoute = 'images/picto_laredoute.png';	
				var pictoEsaat = 'images/picto_esaat.png';	
				var pictoParking = 'images/picto_parking.png';
				
				/*
				CONTENU DES INFOBULLES */
				var contentIWS = '<div class="infoBulleIWS"><h4>Netcell</h4>14, rue Massue<br/>94 300 Vincennes</div>';
				var contentMetroGrandPlace = '<h4>RER A</h4>Vincennes</div>';
				var contentMetroGare = '<div class="infoBulleIWS"><h4>Metro 1</h4>Bérault</div>';
				var contentTramway = '<div class="infoBulleIWS"><h4>Metro 1</h4>saint mandé</div>';

				
				/* OPTIONS PAR DEFAUT */
				var options = {
					// centre initial de la carte (coordonnées GPS)
					center: IWSpos,
					// niveau du zoom par défaut
					zoom: 15,					
					//Mode de rendu par défaut
					/*
					ROADMAP : mode de rendu vectoriel (routes)
					SATELLITE : mode de rendu satellite Google Earth 
					HYBRID :  mélange de rendu (satellite et routes)
					TERRAIN : mode relief */
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					// affichage du sélecteur du mode de rendu
					mapTypeControl: true,
					mapTypeControlOptions: {
						//Style du sélecteur de mode de rendu
						/*
						DEFAULT : style de rendu automatique en fonction des dimensions de la carte
						DROPDOWN_MENU : menu déroulant
						HORIZONTAL_BAR : menu horizontal
						*/
					  style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
					},					
					// affichage du panneau de navigation (zoom, déplacement...)
					navigationControl: true,
					navigationControlOptions: {
						/*
						DEFAULT : mode automatique en fonction des dimensions de la carte
						SMALL : mode réduit
						ZOOM_PAN : mode complet (zoom et déplacement)
						ANDROID : mode adapté aux mobiles Android
						*/						
					  style: google.maps.NavigationControlStyle.SMALL
					}
				};			
				
				/*
				CREATION DE LA CARTE */
				var carte = new google.maps.Map(document.getElementById("carteGoogleMaps"), options);
				
				/*
				AJOUT DE MARKERS */
				var iconIWS = new google.maps.Marker({
					position: IWSpos,
					map: carte,
					icon : pictoImpala,
					shadow : pictoImpalaShadow});									
				var metroIconGrandPlace = new google.maps.Marker({
					position: MetroGrandPlacePos,
					map: carte,
					icon : pictorer});				
				var metroIconGare = new google.maps.Marker({
					position: MetroGarePos,
					map: carte,
					icon : pictoMetro});
				var tramwayIcon = new google.maps.Marker({
					position: TramwayPos,
					map: carte,
					icon : pictoTramway});	
		
							
				/*
				EVENEMENT SUR MARKERS */
				google.maps.event.addListener(iconIWS, 'click', function() {
					infoIWS.setContent(contentIWS);
					infoIWS.open(carte, this);
					carte.panTo(IWSpos);});	
					
				google.maps.event.addListener(metroIconGrandPlace, 'click', function() {
					infoIWS.setContent(contentMetroGrandPlace);
					infoIWS.open(carte, this);
					carte.panTo(MetroGrandPlacePos);});
					
				google.maps.event.addListener(metroIconGare, 'click', function() {
					infoIWS.setContent(contentMetroGare);
					infoIWS.open(carte, this);
					carte.panTo(MetroGarePos);});
					
				google.maps.event.addListener(tramwayIcon, 'click', function() {
					infoIWS.setContent(contentTramway);
					infoIWS.open(carte, this);
					carte.panTo(TramwayPos);});
					
			
				google.maps.event.addListener(carte, 'click', function() {
				  carte.panTo(IWSpos);infoIWS.setContent(contentIWS);infoIWS.open(carte, iconIWS);
				});		
				
				/*
				EVENEMENTS SUR LIENS HTML*/
				$('#lienIWS').click(function(){
					carte.panTo(IWSpos);
					infoIWS.setContent(contentIWS);
					infoIWS.open(carte, iconIWS);
				});
				$('#lienMetroGrandPlace').click(function(){
					carte.panTo(MetroGrandPlacePos);
					infoIWS.setContent(contentMetroGrandPlace);
					infoIWS.open(carte, metroIconGrandPlace);
				});
				$('#lienMetroGare').click(function(){
					carte.panTo(MetroGarePos);
					infoIWS.setContent(contentMetroGare);
					infoIWS.open(carte, metroIconGare);
				});
				$('#lienTramway').click(function(){
					carte.panTo(TramwayPos);
					infoIWS.setContent(contentTramway);
					infoIWS.open(carte, tramwayIcon);
				});
				$('#lienParking').click(function(){
					carte.panTo(ParkingPos);
					infoIWS.setContent(contentParking);
					infoIWS.open(carte, ParkingIcon);
				});
	});
