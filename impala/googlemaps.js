$(function() {
				
				/*
				INITIALISATION
				Variabilise l'objet */
				var infoIWS = new google.maps.InfoWindow();
								
				/*
				COORDONNEES GPS */
				var IWSpos = new google.maps.LatLng(48.847795,2.425779);
				var MetroGrandPlacePos = new google.maps.LatLng(50.691761,3.174899);
				
				
				/*
				CHEMIN DES ICONES */
							var pictoImpala = 'cursor.png';
				var pictoImpalaShadow = 'shadow.png';
		
				/*
				CONTENU DES INFOBULLES */
				var contentIWS = '<div class="infoBulleIWS"><h4>Impala Webstudio</h4>43 rue Charlie Chaplin<br/>59100 Roubaix - France</div>';
				
				
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
					
				google.maps.event.addListener(LaRedouteIcon, 'click', function() {
					infoIWS.setContent(contentLaRedoute);
					infoIWS.open(carte, this);
					carte.panTo(LaRedoutePos);});
					
				google.maps.event.addListener(EsaatIcon, 'click', function() {
					infoIWS.setContent(contentEsaat);
					infoIWS.open(carte, this);
					carte.panTo(EsaatPos);});
					
				google.maps.event.addListener(ParkingIcon, 'click', function() {
					infoIWS.setContent(contentParking);
					infoIWS.open(carte, this);
					carte.panTo(ParkingPos);});
	
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
