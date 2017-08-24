<div class="ui mini modal" id="register-event-modal">
	<div class="ui actions headers">
		<div class="ui left floated header">
			<span class="marginal">Register</span>
		</div>	
		<a class="cancel"><i class="close icon"></i></a>
	</div>
	<div class="ui content">
		<div class="ui equal width form">
			<form method="POST" action="scripts/insert_novel.php">
				<div class="field">
					<div class="ui left icon input">
						<i class="user icon"></i><input id="username" type="text" name="username" placeholder="Username" required="true">
					</div>
				</div>
				<div class="field">
					<div class="ui left icon input">
						<i class="mail icon"></i><input id="email" type="text" name="email" placeholder="Email" required="true">
					</div>
				</div>
				<div class="field">
					<div class="ui left icon input">
						<i class="lock icon"></i><input id="password" type="password" name="password" placeholder="Password" required="true">
					</div>
				</div>
				<div class="field">
					<div class="ui left icon input">
					<i class="lock icon"></i><input id="confirm-password" type="password" name="confirm-password" placeholder="Confirm Password" required="true">
					</div>
				</div>
				<div class="ui tiny fluid buttons">					
					<button class="ui labeled icon teal button" type="submit">
						<i class="circle notched icon"></i>
						Submit
					</button>
					<div class="or"></div>
					<button class="ui right labeled icon button" type="reset">
						<i class="refresh icon"></i>Reset
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
