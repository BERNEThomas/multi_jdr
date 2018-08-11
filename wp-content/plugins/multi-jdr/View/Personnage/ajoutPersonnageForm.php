
<form id="mjdr_slider_regForm" method="POST" action="#mjdr_slider_regForm" class="box-multi_jdr">

	<h2 class="box-multi_jdr-titre">Créer un personnage</h2>

	<div class="mjdr_slider_tab">
		<input type="text" class="mjdr-input" name="personnage_nom" placeholder="Nom" maxlength="100">
		<div class="mjdr_caracs_div">
			<div class="boton" id="caracs-button">
				<div class=botontext>
					<input type="button" value="Générer les caractéristiques" class="genererCaracs">
				</div>
				<div class=botontext>
					<input type="button" value="Générer les caractéristiques" class="genererCaracs">
				</div>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
			</div>
			<ul class="mjdr_liste_horizontale">
				<li>Force</li>
				<li>Dextérité</li>
				<li>Constitution</li>
				<li>Intelligence</li>
				<li>Sagesse</li>
				<li>Charisme</li>
				<li>Chance</li>
			</ul>
			<ul class="mjdr_liste_horizontale" id="sortable"></ul>
		</div>
		
		<script type="text/javascript">
			var compteur = 0;
			jQuery('.genererCaracs').on('click', function() {
				compteur++;
				jQuery('#sortable').html('');
				if (compteur == 3)
					jQuery('#caracs-button').hide();
				for (var i = 1; i < 8; i++) {
					jQuery('#sortable').append(
						'<li class="ui-state-default mjdr_td_carac" id="carac' + i + '">' +
						(
							Math.floor((Math.random() * 6) + 1) +
							Math.floor((Math.random() * 6) + 1) +
							Math.floor((Math.random() * 6) + 1)
						)
						+ '</li>'
					);
				}
			});
			jQuery(function() {
				jQuery( "#sortable" ).sortable({
					revert: true
				});
				jQuery("#sortable, .ui-state-default").disableSelection();
			});
		</script>
	</div>

	<div class="mjdr_slider_tab">
		<table>
			<tr>
				<td>
					<label for="personnage_nom">Nom</label>
					<input class="mjdr_input" name="personnage_nom">
				</td>
				<td>
					<label for="Nom">Prénom</label>
					<input class="mjdr_input" name="personnage_prenom">
				</td>
			</tr>
		</table>
	</div>

	<div class="mjdr_slider_tab">
		<table>
			<tr>
				<td>
					<label for="personnage_nom">Nom</label>
					<input class="mjdr_input" name="personnage_nom">
				</td>
				<td>
					<label for="Nom">Prénom</label>
					<input class="mjdr_input" name="personnage_prenom"s>
				</td>
			</tr>
		</table>
	</div>

	<div class="mjdr_slider_tab">
		<table>
			<tr>
				<td>
					<label for="personnage_nom">Nom</label>
					<input class="mjdr_input" name="personnage_nom">
				</td>
				<td>
					<label for="Nom">Prénom</label>
					<input class="mjdr_input" name="personnage_prenom"s>
				</td>
			</tr>
		</table>
	</div>

	<div style="overflow:none;">
		<div style="float:right;" class="flex-row">
			<div class="boton" id="mjdr_slider_prevDiv">
				<div class=botontext>
					<button type="button" onclick="nextPrev(-1)">Précédent</button>
				</div>
				<div class=botontext>
					<button type="button" onclick="nextPrev(-1)">Précédent</button>
				</div>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
			</div>
			<div class="boton" id="mjdr_slider_nextDiv">
				<div class=botontext>
					<button type="button" class="mjdr_slider_nextBtn" onclick="nextPrev(1)">Suivant</button>
				</div>
				<div class=botontext>
					<button type="button" class="mjdr_slider_nextBtn" onclick="nextPrev(1)">Suivant</button>
				</div>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
				<span class="twist" width="25%"></span>
			</div>
			
			
		</div>
	</div>

	<!-- Circles which indicates the steps of the form: -->
	<div style="text-align:center;margin-top:70px;">
		<span class="mjdr_slider_step"></span>
		<span class="mjdr_slider_step"></span>
		<span class="mjdr_slider_step"></span>
		<span class="mjdr_slider_step"></span>
	</div>

</form>
<script type="text/javascript">
	var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the current tab

	function showTab(n) {
		// This function will display the specified tab of the form ...
		var x = document.getElementsByClassName("mjdr_slider_tab");
		x[n].style.display = "block";
		// ... and fix the Previous/Next buttons:
		if (n == 0) {
			document.getElementById("mjdr_slider_prevDiv").style.display = "none";
		} else {
			document.getElementById("mjdr_slider_prevDiv").style.display = "inline";
		}
		if (n == (x.length - 1)) {
			$(".mjdr_slider_nextBtn").innerHTML = "Envoyer";
		} else {
			$(".mjdr_slider_nextBtn").innerHTML = "Suivant";
		}
		// ... and run a function that displays the correct step indicator:
		fixStepIndicator(n)
	}

	function nextPrev(n) {
		// This function will figure out which tab to display
		var x = document.getElementsByClassName("mjdr_slider_tab");
		// Exit the function if any field in the current tab is invalid:
		if (n == 1 && !validateForm()) return false;
		// Hide the current tab:
		x[currentTab].style.display = "none";
		// Increase or decrease the current tab by 1:
		currentTab = currentTab + n;
		// if you have reached the end of the form... :
		if (currentTab >= x.length) {
		//...the form gets submitted:
			document.getElementById("mjdr_slider_regForm").submit();
			return false;
		}
		// Otherwise, display the correct tab:
		showTab(currentTab);
	}

	function validateForm() {
		// This function deals with validation of the form fields
		var x, y, i, valid = true;
		x = document.getElementsByClassName("mjdr_slider_tab");
		y = x[currentTab].getElementsByTagName("input");
		// A loop that checks every input field in the current tab:
		for (i = 0; i < y.length; i++) {
			// If a field is empty...
			if (y[i].value == "") {
				// add an "invalid" class to the field:
				y[i].className += " mjdr_slider_invalid";
				// and set the current valid status to false:
				valid = false;
			}
		}
		// If the valid status is true, mark the step as finished and valid:
		if (valid) {
			document.getElementsByClassName("mjdr_slider_step")[currentTab].className += " mjdr_slider_finish";
		}
		return valid; // return the valid status
	}

	function fixStepIndicator(n) {
		var i, x = document.getElementsByClassName("mjdr_slider_step");
		for (i = 0; i < x.length; i++) {
			x[i].className = x[i].className.replace(" mjdr_slider_active", "");
		}
		x[n].className += " mjdr_slider_active";
	}
</script>