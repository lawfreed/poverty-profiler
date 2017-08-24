<div class="ui mini modal" id="login-event-modal">
	<div class="ui actions headers">
		<div class="ui left floated header">
			<span class="marginal">Log-in</span>
		</div>	
		<a class="cancel"><i class="close icon"></i></a>
	</div>
	<div class="ui content">
		<div class="ui equal width form">
			<form method="GET" action="scripts/insert_novel.php">
				<div class="field">
					<div class="ui left icon input">
						<i class="user icon"></i><input id="username" type="text" name="username" placeholder="Username" required="true">
					</div>
				</div>
				<div class="field">
					<div class="ui left icon input">
						<i class="lock icon"></i><input id="password" name="password" placeholder="Password" type="password" />
					</div>
				</div>				
					<button class="ui fluid teal button" type="submit">
						<i class="circle thin icon"></i>
						Log-in
					</button>
			</form>
		</div>
	</div>
</div>