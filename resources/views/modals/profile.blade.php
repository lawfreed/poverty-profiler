<div class="ui fullscreen modal" id="profile-event-modal">
	<div class="ui actions headers">
		<div class="ui left floated header">
			<span class="marginal">Purok Name</span>
		</div>	
		<a class="cancel"><i class="close icon"></i></a>
	</div>
	<div class="ui content">
		<div class="ui equal width form">
			<form method="POST" action="scripts/insert_novel.php">
				<div class="ui fields">
					<div class="field">
						<div class="ui left corner labeled input">
							<input type="text" placeholder="Enter Household Name" required="true">
							<div class="ui left corner label">
								<i class="asterisk icon"></i>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="ui calendar" id="form-date-created">
							<div class="ui icon input">
								<i class="calendar icon"></i>
								<input type="text" placeholder="Date" required="true">
							</div>
						</div>
					</div>
				</div>
				<!-- Start Structure -->
				<div class="ui top attached segment">
					<div class="ui active tab" data-tab="page-one">
						<table class="ui structured celled table">
							@include('modals.tables.page-one')
						</table>
					</div>
					<div class="ui tab" data-tab="page-two">
						<table class="ui structured celled table">
							@include('modals.tables.page-two')
						</table>
					</div>
				</div>
				<div class="ui bottom attached master tabular menu" id="bottom-attached-tab-margin">
					<a class="item active" data-tab="page-one">
						Page 1
					</a>
					<a class="item" data-tab="page-two">
						Page 2
					</a>
				</div>
				<!-- End Structure -->
				<br>
				<div class="ui tiny buttons" id="profile-submit-button">					
					<button class="ui teal button" type="submit">
						<i class="save icon"></i>
						Save
					</button>
					<div class="or"></div>
					<button class="ui icon button" type="reset">
						<i class="refresh icon"></i>
						Reset
					</button>
				</div>
			</form>
		</div>
	</div>
</div>