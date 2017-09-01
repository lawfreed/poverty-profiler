<thead>
	<tr>
		<th colspan="4">I Demography</th>
		<th></th>
		<th colspan="4">III Social Adequacy</th>
	</tr>
	<tr class="header-bottom-border">
		<td class="five wide column"><em>Population</em> in Age Bracket</td>
		<td class="one wide column">Male</td>
		<td class="one wide column">Female</td>
		<td class="one wide column">Total</td>
		<td></td>
		<td colspan="2"><em>Health, (Source of Data-CHO/BHW)</em></td>
	</tr>
</thead>
<tbody>
	<tr>
		<td><span class="padding-twenty-five">Below 1</span></td>
		<td><input class="value-1" type="number" name="age-bracket-male-col-1"></td>
		<td><input class="value-1" type="number" name="age-bracket-female-col-1"></td>
		<td><span class="ui transparent disabled input"><input id="age-bracket-col-1-total"></span></td>
		<td></td>
		<td><span class="padding-twenty-five"><strong>No. of Maternal Deaths</strong></span></td>
		<td><input type="number" name="no-maternal-deaths"></td>
	</tr>
	<tr>
		<td><span class="padding-twenty-five">1—2</span></td>
		<td><input class="value-2" type="number" name="age-bracket-male-col-2"></td>
		<td><input class="value-2" type="number" name="age-bracket-female-col-2"></td>
		<td><span class="ui transparent disabled input"><input id="age-bracket-col-2-total"></span></td>
		<td></td>
		<td colspan="4"><span class="padding-twenty-five"><strong>No. of Teenage Pregnancy</strong></span></td>
	</tr>
	<tr>
		<td><span class="padding-twenty-five">3—5</span></td>
		<td><input class="value-3" type="number" name="age-bracket-male-col-3"></td>
		<td><input class="value-3" type="number" name="age-bracket-female-col-3"></td>
		<td><span class="ui transparent disabled input"><input id="age-bracket-col-3-total"></span></td>
		<td></td>
		<td><span class="padding-seventy">Below 15</span></td>
		<td><input class="no-teenage-pregnancy" type="number" name="no-teenage-pregnancy-below-15"></td>
	</tr>
	<tr>
		<td><span class="padding-twenty-five">6—11</span></td>
		<td><input class="value-4" type="number" name="age-bracket-male-col-4"></td>
		<td><input class="value-4" type="number" name="age-bracket-female-col-4"></td>
		<td><span class="ui transparent disabled input"><input id="age-bracket-col-4-total"></span></td>
		<td></td>
		<td><span class="padding-seventy">15—19</span></td>
		<td><input class="no-teenage-pregnancy" type="number" name="no-teenage-pregnancy-15-19"></td>
	</tr>
	<tr>
		<td><span class="padding-twenty-five">12—15</span></td>
		<td><input class="value-5" type="number" name="age-bracket-male-col-5"></td>
		<td><input class="value-5" type="number" name="age-bracket-female-col-5"></td>
		<td><span class="ui transparent disabled input"><input id="age-bracket-col-5-total"></span></td>
		<td></td>
		<td><span class="padding-seventy"><strong>Total</span></strong></td>
		<td><span class="ui transparent disabled input"><input id="no-teenage-pregnancy-total"></span></td>
	</tr>
	<tr>
		<td><span class="padding-twenty-five">16—17</span></td>
		<td><input class="value-6" type="number" name="age-bracket-male-col-6"></td>
		<td><input class="value-6" type="number" name="age-bracket-female-col-6"></td>
		<td><span class="ui transparent disabled input"><input id="age-bracket-col-6-total"></span></td>
		<td></td>
		<td colspan="4"><span class="padding-twenty-five"><strong>No. of Infant Deaths</strong></span></td>
	</tr>
	<tr>
		<td><span class="padding-twenty-five">18—35</span></td>
		<td><input class="value-7" type="number" name="age-bracket-male-col-7"></td>
		<td><input class="value-7" type="number" name="age-bracket-female-col-7"></td>
		<td><span class="ui transparent disabled input"><input id="age-bracket-col-7-total"></span></td>
		<td></td>
		<td><span class="padding-seventy">Male</span></td>
		<td><input class="no-infant-deaths" type="number" name="no-infant-deaths-male"></td>
	</tr>
	<tr>
		<td><span class="padding-twenty-five">36—64</span></td>
		<td><input class="value-8" type="number" name="age-bracket-male-col-8"></td>
		<td><input class="value-8" type="number" name="age-bracket-female-col-8"></td>
		<td><span class="ui transparent disabled input"><input id="age-bracket-col-8-total"></span></td>
		<td></td>
		<td><span class="padding-seventy">Female</span></td>
		<td><input class="no-infant-deaths" type="number" name="no-infant-deaths-female"></td>
	</tr>
	<tr>
		<td><span class="padding-twenty-five">65 & above</span></td>
		<td><input class="value-9" type="number" name="age-bracket-male-col-9"></td>
		<td><input class="value-9" type="number" name="age-bracket-female-col-9"></td>
		<td><span class="ui transparent disabled input"><input id="age-bracket-col-9-total"></span></td>
		<td></td>
		<td><span class="padding-seventy"><strong>Total</strong></span></td>
		<td><span class="ui transparent disabled input"><input id="no-infant-deaths-total"></span></td>
	</tr>
	<tr>
		<td><span class="padding-twenty-five"><strong>Total</strong></span></td>
		<!-- Fetch from DB::get() -->
		<td>Display Male Total</td>
		<td>Display Female Total</td>
		<td>Display Total MFT</td>
		<td></td>
		<td colspan="4"><span class="padding-twenty-five"><strong>No. of Under 5 Deaths</strong></span></td>
	</tr>
	<tr>
		<td><span class="padding-fifteen">No. of Senior Citizens (<em>60 yrs. old & above</em>)</span></td>
		<!-- Fetch from DB::get() -->
		<td>Display No. of Senior Citizens M</td>
		<td>Display No. of Senior Citizens F</td>
		<td>Display No. of Senior Citizens T</td>
		<td></td>
		<td><span class="padding-seventy">Male</span></td>
		<td><input class="no-under-deaths" type="number" name="no-under-deaths-male"></td>
	</tr>
	<tr>
		<td><span class="padding-fifteen">No. of Persons with Disabilities</span></td>
		<td><input class="persons-with-disabilities" type="number" name="persons-with-disabilities-male"></td>
		<td><input class="persons-with-disabilities" type="number" name="persons-with-disabilities-female"></td>
		<td><span class="ui transparent disabled input"><input id="persons-with-disabilities-total"></span></td>
		<td></td>
		<td><span class="padding-seventy">Female</span></td>
		<td><input class="no-under-deaths" type="number" name="no-under-deaths-female"></td>
	</tr>
	<tr>
		<td colspan="4"></td>
		<td></td>
		<td><span class="padding-seventy"><strong>Total</strong></span></td>
		<td><span class="ui transparent disabled input"><input id="no-under-deaths-total"></span></td>
	</tr>
</tbody>
<thead>
	<tr>
		<th colspan="4" id="economic-efficiency-header">II Economic Efficiency</th>
		<td id="economic-efficiency-header"></td>
		<td colspan="4" id="fully-immunized-children-box"><span class="padding-twenty-five"><strong>No. of Fully Immunized Children</strong></span></td>
	</tr>
</thead>
<tbody>
	<tr>
		<td colspan="4"><span class="padding-fifteen"><strong>Employment of HH Members</strong> (<em>18 yrs. old & above</em>)</span></td>
		<td></td>
		<td><span class="padding-seventy">Male</span></td>
		<td><input class="no-fully-immunized-children" type="number" name="no-fully-immunized-children-male"></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">Public</span></td>
		<td><input type="number" name="employment-member-public"></td>
		<td></td>
		<td><span class="padding-seventy">Female</span></td>
		<td><input class="no-fully-immunized-children" type="number" name="no-fully-immunized-children-female"></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">Private</span></td>
		<td><input type="number" name="employment-member-private"></td>
		<td></td>
		<td><span class="padding-seventy"><strong>Total</strong></span></td>
		<td><span class="ui transparent disabled input"><input id="no-fully-immunized-children-total"></span></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">Self-Employed</span></td>
		<td><input type="number" name="employment-member-self-employed"></td>
		<td></td>
		<td colspan="4"><span class="padding-twenty-five"><strong>No. of Malnourished Children aged 0-5 y.o.</strong></span></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">Student</span></td>
		<td><input type="number" name="employment-member-student"></td>
		<td></td>
		<td><span class="padding-seventy">Male</span></td>
		<td><input class="no-malnourished-children" type="number" name="no-malnourished-children-male"></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">Unemployed</span></td>
		<td><input type="number" name="employment-member-unemployed"></td>
		<td></td>
		<td><span class="padding-seventy">Female</span></td>
		<td><input class="no-malnourished-children" type="number" name="no-malnourished-children-female"></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">Pensioner</span></td>
		<td><input type="number" name="employment-member-pensioner"></td>
		<td></td>
		<td><span class="padding-seventy"><strong>Total</strong></span></td>
		<td><span class="ui transparent disabled input"><input id="no-malnourished-children-total"></span></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five"><strong>Total Population</strong> (<em>18 y.o. & over</em>)</span></td>
		<td>Display Total</td>
		<td></td>
		<td colspan="4"></td>
	</tr>
	<tr>
		<td colspan="4"></td>
		<td></td>
		<td rowspan="2" colspan="4">
			<span class="padding-twenty-five">
				<strong>
					No. of Children aged 0-5 y.o. Who have NOT yet received any vaccine
				</strong>
			</span>
		</td>
	</tr>
	<tr>
		<td colspan="4"><span class="padding-fifteen"><strong>Household Income per Month</strong></span></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">Below 6,000 <em>(Food Threshold)</em></span></td>
		<td><input type="number" name="hh-income-below-6k"></td>
		<td></td>
		<td><span class="padding-seventy">Male</span></td>
		<td><input class="no-children-no-vaccine" type="number" name="no-children-no-vaccine-male"></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">Below 8,000 <em>(Poverty Threshold)</em></span></td>
		<td><input type="number" name="hh-income-below-8k"></td>
		<td></td>
		<td><span class="padding-seventy">Female</span></td>
		<td><input class="no-children-no-vaccine" type="number" name="no-children-no-vaccine-female"></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">8,001—15,000</span></td>
		<td><input type="number" name="hh-income-8k-15k"></td>
		<td></td>
		<td><span class="padding-seventy"><strong>Total</strong></span></td>
		<td><span class="ui transparent disabled input"><input id="no-children-no-vaccine-total"></span></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">15,001—20,000</span></td>
		<td><input type="number" name="hh-income-15k-20k"></td>
		<td></td>
		<td colspan="4"></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">20,001 and over</span></td>
		<td><input type="number" name="hh-income-over-20k"></td>
		<td></td>
		<td colspan="4"><span class="padding-twenty-five"><strong>HH Sanitation Practices</strong></span></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five"><strong>Total No. of HH's</strong></span></td>
		<td>Display Total</td>
		<td></td>
		<td><span class="padding-fourty-five"></span>No. of HH's w/ water sealed / flushed toilets</td>
		<td><input type="number" name="sanitation-practices-flushed-toilets"></td>
	</tr>
	<tr>
		<td colspan="4"><span class="padding-fifteen"><strong>Sources of Income of the HH's</strong></span></td>
		<td></td>
		<td><span class="padding-fourty-five">No. of HH's w/ antipolo with / out cover</span></td>
		<td><input type="number" name="sanitation-practices-antipolo"></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">Agriculture <em>(Farming)</em></span></td>
		<td><input type="number" name="sources-income-agriculture"></td>
		<td></td>
		<td><span class="padding-fourty-five">No. of HH's w/ no toilet</span></td>
		<td><input type="number" name="sanitation-practices-no-toilet"></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">Commerce & Trade <em>(wholesale, retail)</em></span></td>
		<td><input type="number" name="sources-income-commerce-trade"></td>
		<td></td>
		<td><span class="padding-fourty-five"><strong>Total No. of HH's</strong></span></td>
		<td>Display Total</td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">Manufacturing / Processing</span></td>
		<td><input type="number" name="sources-income-commerce-trade"></td>
		<td></td>
		<td colspan="4"></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">Services <em>(wage earners)</em></span></td>
		<td><input type="number" name="sources-income-services"></td>
		<td></td>
		<td colspan="4"><span class="padding-twenty-five"><strong>HH Access to Potable Water</strong></span></td>
	</tr>
	<tr>
		<td colspan="3"><span class="padding-twenty-five">Pension</span></td>
		<td><input type="number" name="sources-income-pernsion"></td>
		<td></td>
		<td><span class="padding-fourty-five">Level I <em>(deep well, spring, jetmatic)</em></span></td>
		<td><input type="number" name="potable-water-level-one"></td>
	</tr>
</tr>
<tr>
	<td colspan="3"><span class="padding-twenty-five"><strong>Total. No. of HH's</strong></span></td>
	<td>Display Total</td>
	<td></td>
	<td><span class="padding-fourty-five">Level II <em>(developed spring w/ reservoir)</em></span></td>
	<td><input type="number" name="potable-water-level-two"></td>
</tr>
<tr>
	<td colspan="4"><span class="padding-fifteen"><strong>Household Food Security</strong></span></td>
	<td></td>
	<td><span class="padding-fourty-five">Level III <em>(with house connection)</em></span></td>
	<td><input type="number" name="potable-water-level-three"></td>
</tr>
<tr>
	<td colspan="4"><span class="padding-twenty-five"><strong>Availability of food 3x/day for the next 3 days</strong></span></td>
	<td></td>
	<td><span class="padding-fourty-five">Bawasa / DCWD</span></td>
	<td><input type="number" name="potable-water-bawasa-dcwd"></td>
</tr>
<!-- Start Radio Checkbox -->
<tr>
	<td colspan="4">
		<div class="grouped fields padding-fourty-five">
			<div class="field">
				<div class="ui radio checkbox">
					<input type="radio" name="food-security-radio" value="yes">
					<label>YES</label>
				</div>
			</div>
			<div class="field">
				<div class="ui radio checkbox">
					<input type="radio" name="food-security-radio" value="no">
					<label>NO</label>
				</div>
			</div>
		</div>	
	</td>
	<td></td>
	<td><span class="padding-fourty-five">DCWD Peddling</span></td>
	<td><input type="number" name="potable-water-dcwd-peddling"></td>
</tr><!-- ~./End Radio Checkbox -->
<tr>
	<td colspan="3"><span class="padding-twenty-five"><strong>Total No. of HH's</strong></span></td>
	<td>Display Total</td>
	<td></td>
	<td><span class="padding-fourty-five"></span><strong>Total No. of HH's</strong></td>
	<td>Display Total</td>
</tr>
</tbody>