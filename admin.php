<?php 
session_start(); 
include('./header.html'); 
if(!isset($_SESSION['login']) && !isset($_SESSION['psswd'])){
        header('Location: index.html');
    }
    else{
?>
	<div class="container-fluid">
		<div class="row">
		</div>
	</div>
	<div class="container-fluid" style="padding-left:30%">
		<div class="row">
			<div class="col-md-2" >
				<img src="media/user.png" style="height: 4em;width: 4em;" data-toggle="modal" data-target="#admin">
			</div>
			<div id="article" class="col-md-2 ">
				<img src="media/caddi.png" data-toggle="modal" data-target="#truc" style="height: 4em;width: 4em;">
			</div>

	</div>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<img src="media/graph2.png">
				<svg height="347" version="1.1" width="584" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="49.515625" y="313" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.015625,313H559" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.515625" y="241" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.015625,241H559" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.515625" y="169" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.015625,169H559" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.515625" y="97.00000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.015625,97.00000000000003H559" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.515625" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.015625,25H559" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="467.23239250544276" y="325.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="246.8089645777429" y="325.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><path fill="#7cb57c" stroke="none" d="M62.015625,261.9952C75.89902983551465,256.7152,103.66583950654399,245.75689404303512,117.54924434205864,240.8752C131.43893980051644,235.9912940430351,159.21833071743205,229.61560628272252,173.10802617588985,222.93280000000001C186.85303730665538,216.31960628272253,214.34305956818642,189.66448883774453,228.08807069895195,187.6912C241.67581625613894,185.74048883774455,268.8513073705129,205.80161428898558,282.4390529276999,207.23680000000002C296.3224577632145,208.70321428898558,324.0892674342439,198.32102124575314,337.9726722697585,199.29760000000002C351.8623677282163,200.27462124575314,379.64175864513186,232.38668900523558,393.5314541035897,215.0512C407.2764652343552,197.8962890052356,434.7664874958863,69.70431494621195,448.5114986266518,61.33600000000001C462.2502191344742,52.97151494621196,489.727660150119,135.84980951947165,503.4663806579414,148.12C517.349785493456,160.51940951947165,545.1165951644854,157.04080000000002,559,160.01440000000002L559,313L62.015625,313Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#4da74d" d="M62.015625,261.9952C75.89902983551465,256.7152,103.66583950654399,245.75689404303512,117.54924434205864,240.8752C131.43893980051644,235.9912940430351,159.21833071743205,229.61560628272252,173.10802617588985,222.93280000000001C186.85303730665538,216.31960628272253,214.34305956818642,189.66448883774453,228.08807069895195,187.6912C241.67581625613894,185.74048883774455,268.8513073705129,205.80161428898558,282.4390529276999,207.23680000000002C296.3224577632145,208.70321428898558,324.0892674342439,198.32102124575314,337.9726722697585,199.29760000000002C351.8623677282163,200.27462124575314,379.64175864513186,232.38668900523558,393.5314541035897,215.0512C407.2764652343552,197.8962890052356,434.7664874958863,69.70431494621195,448.5114986266518,61.33600000000001C462.2502191344742,52.97151494621196,489.727660150119,135.84980951947165,503.4663806579414,148.12C517.349785493456,160.51940951947165,545.1165951644854,157.04080000000002,559,160.01440000000002" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="62.015625" cy="261.9952" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="117.54924434205864" cy="240.8752" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="173.10802617588985" cy="222.93280000000001" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="228.08807069895195" cy="187.6912" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="282.4390529276999" cy="207.23680000000002" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="337.9726722697585" cy="199.29760000000002" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="393.5314541035897" cy="215.0512" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="448.5114986266518" cy="61.33600000000001" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="503.4663806579414" cy="148.12" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="559" cy="160.01440000000002" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#a8b4bd" stroke="none" d="M62.015625,287.4064C75.89902983551465,281.632,103.66583950654399,269.3656543601359,117.54924434205864,264.3088C131.43893980051644,259.24965436013593,159.21833071743205,249.70720000000003,173.10802617588985,246.94240000000002C186.85303730665538,244.20640000000003,214.34305956818642,244.52992497123134,228.08807069895195,242.30560000000003C241.67581625613894,240.10672497123133,268.8513073705129,232.33483379894665,282.4390529276999,229.2496C296.3224577632145,226.09723379894663,324.0892674342439,217.2244296262741,337.9726722697585,217.35520000000002C351.8623677282163,217.4860296262741,379.64175864513186,243.65799371727746,393.5314541035897,230.296C407.2764652343552,217.07319371727746,434.7664874958863,118.85619409475854,448.5114986266518,111.01600000000002C462.2502191344742,103.17939409475855,489.727660150119,159.3581391027101,503.4663806579414,167.58880000000002C517.349785493456,175.9061391027101,545.1165951644854,174.8032,559,177.208L559,313L62.015625,313Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#7a92a3" d="M62.015625,287.4064C75.89902983551465,281.632,103.66583950654399,269.3656543601359,117.54924434205864,264.3088C131.43893980051644,259.24965436013593,159.21833071743205,249.70720000000003,173.10802617588985,246.94240000000002C186.85303730665538,244.20640000000003,214.34305956818642,244.52992497123134,228.08807069895195,242.30560000000003C241.67581625613894,240.10672497123133,268.8513073705129,232.33483379894665,282.4390529276999,229.2496C296.3224577632145,226.09723379894663,324.0892674342439,217.2244296262741,337.9726722697585,217.35520000000002C351.8623677282163,217.4860296262741,379.64175864513186,243.65799371727746,393.5314541035897,230.296C407.2764652343552,217.07319371727746,434.7664874958863,118.85619409475854,448.5114986266518,111.01600000000002C462.2502191344742,103.17939409475855,489.727660150119,159.3581391027101,503.4663806579414,167.58880000000002C517.349785493456,175.9061391027101,545.1165951644854,174.8032,559,177.208" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="62.015625" cy="287.4064" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="117.54924434205864" cy="264.3088" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="173.10802617588985" cy="246.94240000000002" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="228.08807069895195" cy="242.30560000000003" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="282.4390529276999" cy="229.2496" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="337.9726722697585" cy="217.35520000000002" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="393.5314541035897" cy="230.296" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="448.5114986266518" cy="111.01600000000002" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="503.4663806579414" cy="167.58880000000002" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="559" cy="177.208" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#2677b5" stroke="none" d="M62.015625,287.4064C75.89902983551465,287.1376,103.66583950654399,289.0257895356739,117.54924434205864,286.3312C131.43893980051644,283.6353895356739,159.21833071743205,267.03781361256546,173.10802617588985,265.8448C186.85303730665538,264.66421361256545,214.34305956818642,279.12750471806675,228.08807069895195,276.8368C241.67581625613894,274.57230471806673,268.8513073705129,249.8830226700252,282.4390529276999,247.62400000000002C296.3224577632145,245.31582267002523,324.0892674342439,256.1805408833522,337.9726722697585,258.568C351.8623677282163,260.9565408833522,379.64175864513186,278.0706764397906,393.5314541035897,266.728C407.2764652343552,255.50347643979057,434.7664874958863,175.34121144426643,448.5114986266518,168.2992C462.2502191344742,161.26041144426642,489.727660150119,202.47734256433617,503.4663806579414,210.40480000000002C517.349785493456,218.41574256433617,545.1165951644854,226.6408,559,232.0528L559,313L62.015625,313Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#0b62a4" d="M62.015625,287.4064C75.89902983551465,287.1376,103.66583950654399,289.0257895356739,117.54924434205864,286.3312C131.43893980051644,283.6353895356739,159.21833071743205,267.03781361256546,173.10802617588985,265.8448C186.85303730665538,264.66421361256545,214.34305956818642,279.12750471806675,228.08807069895195,276.8368C241.67581625613894,274.57230471806673,268.8513073705129,249.8830226700252,282.4390529276999,247.62400000000002C296.3224577632145,245.31582267002523,324.0892674342439,256.1805408833522,337.9726722697585,258.568C351.8623677282163,260.9565408833522,379.64175864513186,278.0706764397906,393.5314541035897,266.728C407.2764652343552,255.50347643979057,434.7664874958863,175.34121144426643,448.5114986266518,168.2992C462.2502191344742,161.26041144426642,489.727660150119,202.47734256433617,503.4663806579414,210.40480000000002C517.349785493456,218.41574256433617,545.1165951644854,226.6408,559,232.0528" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="62.015625" cy="287.4064" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="117.54924434205864" cy="286.3312" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="173.10802617588985" cy="265.8448" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="228.08807069895195" cy="276.8368" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="282.4390529276999" cy="247.62400000000002" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="337.9726722697585" cy="258.568" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="393.5314541035897" cy="266.728" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="448.5114986266518" cy="168.2992" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="503.4663806579414" cy="210.40480000000002" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="559" cy="232.0528" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg>
			</div>
		</div>
	</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>messages</h4>
				<div style="height: 20em;overflow: scroll;">
					
					<h6>Dupont Marcel</h6>
					<p> vendredi 15/11/2018 16h30</p>
					<p class="" style="width: 30em;border: 1px solid black;height: 10em;overflow: scroll;">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<button class="btn btn-primary">repondre</button>
					<button class="btn btn-danger">supprimer</button>
					<h6>Dupont Marcel</h6>
					<p> vendredi 15/11/2018 16h30</p>
					<p class="" style="width: 30em;border: 1px solid black;height: 10em;overflow: scroll;">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<button class="btn btn-primary">repondre</button>
					<button class="btn btn-danger">supprimer</button>
					<h6>Dupont Marcel</h6>
					<p> vendredi 15/11/2018 16h30</p>
					<p class="" style="width: 30em;border: 1px solid black;height: 10em;overflow: scroll;">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<button class="btn btn-primary">repondre</button>
					<button class="btn btn-danger">supprimer</button>
					<h6>Dupont Marcel</h6>
					<p> vendredi 15/11/2018 16h30</p>
					<p class="" style="width: 30em;border: 1px solid black;height: 10em;overflow: scroll;">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<button class="btn btn-primary">repondre</button>
					<button class="btn btn-danger">supprimer</button>		
					<h6>Dupont Marcel</h6>
					<p> vendredi 15/11/2018 16h30</p>
					<p class="" style="width: 30em;border: 1px solid black;height: 10em;overflow: scroll;">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<button class="btn btn-primary" data-toggle="modal" data-target="">repondre</button>
					<button class="btn btn-danger">supprimer</button>		
				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2>ajouter un admin</h2>
				<div class="form-group">
					<form class="form-group">
						<input type="text" name="username" placeholder="nom" class="form-control">
						<input type="text" name="password" placeholder="password" class="form-control"><br>
						<label>droit</label><br>
						<select class="form-control">
							<option>ALL</option>
							<option>WRITE</option>
							<option>WRITE UPDATE</option>
							<option>WRITE UPDATE DELETE</option>
						</select>
						<button  type="sumbit" class="btn btn-success form-contdol">ajouter</button>
					</form>
				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="truc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  		<form class="form-group">
					<div class="form-group" style="">
						<input class="form-control" type="text" name="nom" placeholder="nom de l'article">
						<input class="form-control" type="text" name="prix" placeholder="prix"><br>
						<select class="form-control">
							<option class="form-control">type</option>
							<option>chaussures</option>
							<option>veste</option>
							<option>pantalon</option>
							<option>short</option>
							<option>chemise</option>
						</select><br>
						<select class="form-control">
							<option>sexe</option>
							<option>homme</option>
							<option>femme</option>
							<option>unisexe</option>
						</select><br>
						<select class="form-control">
							<option>adult</option>
							<option>enfant</option>
						</select><br>
						<label>couleur</label><br>
						<input type="checkbox" name="couleur">rouge
						<input type="checkbox" name="couleur">bleu
						<input type="checkbox" name="couleur">blanc
						<input type="checkbox" name="couleur">noir
						<input type="checkbox" name="couleur">vert
						<button type="sumbit" class="btn btn-success form-contdol">ajouter</button>
						

					</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<?php
}
?>