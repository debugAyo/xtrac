
<div class="w3-row-padding">
<div class="w3-threequarter w3-white w3-padding-large w3-border">
<h3 class="w3-text-red w3-hover-text-green"><i class="fa fa-user fa-fw w3-text-blue-grey" arial-hidden="true" style="font-size:36px;"></i>  Business Planning Form</h3>	
<form id="myForm" action="" method="post" onchange="this.form.submit()" enctype="multipart/form-data">
<input type="hidden" name="list" value="Business Plan Form" onchange="this.form.submit()">

<label for "user-id">User ID</label>
<input type="text" name="user_id" minlength="6" maxlength="6" Placeholder="User ID">
<label for "exec-sum">Executive Summary</label>
<textarea cols="4" rows="4" name="exec_sum" Placeholder="Executive Summary"></textarea>
<label for "biz-name">Business Name</label>
<input type="text" name="biz_name" Placeholder="Business Name">
<label for "biz-locat">Business Location</label>
<input type="text" name="biz_locat" Placeholder="Business Location">
<label for "fin-status">Mission statement</label>
<textarea cols="4" rows="4" name="biz_mis" Placeholder="Mission statement"></textarea>
<label for "description">Brief description of Business</label>
<textarea cols="4" rows="4" name="biz_desc" Placeholder="Brief description of Business"></textarea>
<label for "legal-descp">Legal structure (e.g., LLC, corporation)</label>
<textarea cols="4" rows="4" name="legal_str" Placeholder="Legal structure (e.g., LLC, corporation)"></textarea>
<label for "history">History (if existing) or startup overview</label>
<textarea cols="4" rows="4" name="history" Placeholder="History (if existing) or startup overview"></textarea>
<label for "biz-vision">Vision for the business</label>
<textarea cols="4" rows="4" name="biz_vision" Placeholder="Vision for the business"></textarea>
<label for "market-oppt">Summary of market opportunity</label>
<textarea cols="4" rows="4" name="markt_opp" Placeholder="Summary of market opportunity"></textarea>
<label for "financial-highlight">Financial highlights (if applicable)</label>
<textarea cols="4" rows="4" name="fin_highlt" Placeholder="Financial highlights (if applicable)"></textarea>

<h3>Market Analysis </h3>
<label for "industry-descrp">Industry description and outlook</label>
<textarea cols="4" rows="4" name="indust_descp" Placeholder="Industry description and outlook"></textarea>
<label for "target-markt">Target market segmentation</label>
<textarea cols="4" rows="4" name="target_mrkt" Placeholder="Target market segmentation"></textarea>	
<label for "market-trend">Market needs and trends</label>
<textarea cols="4" rows="4" name="markt_trend" Placeholder="Market needs and trends"></textarea>		
<label for "comp-analysis">Competitive analysis</label>
<textarea cols="4" rows="4" name="comp_analysis" Placeholder="Competitive analysis"></textarea>

<h3>Organization and Management</h3>
<label for "key-member">Key management team members</label>
<textarea cols="4" rows="4" name="man_mem" Placeholder="Key management team members"></textarea>
<label for "board-dir">Board of Directors/Advisors (if applicable)</label>
<textarea cols="4" rows="4" name="board_dir" Placeholder="Board of Directors/Advisors (if applicable)"></textarea>
<label for "pers-plan">Personnel plan (number of employees, roles)</label>
<textarea cols="4" rows="4" name="pers_plan" Placeholder="Personnel plan (number of employees, roles)"></textarea>

<h3>Product or Service Line</h3>
<label for "serve-descrip">Description of products/services</label>
<textarea cols="4" rows="4" name="prod_descp" Placeholder="Description of products/services"></textarea>
<label for "serve-descrip">Unique selling points</label>
<textarea cols="4" rows="4" name="sell_point" Placeholder="Unique selling points"></textarea>
<label for "serve-descrip">Development stage (if applicable)</label>
<textarea cols="4" rows="4" name="devop_stage" Placeholder="Development stage (if applicable)"></textarea>

<h3>Marketing and Sales Strategy</h3>

<label for "serve-descrip">Marketing plan</label>
<textarea cols="4" rows="4" name="mart_plan" Placeholder="Marketing plan"></textarea>
	
<label for "serve-descrip">Sales strategy</label>
<textarea cols="4" rows="4" name="sales_strat" Placeholder="Sales strategy"></textarea>
	
<label for "serve-descrip">Pricing strategy</label>
<textarea cols="4" rows="4" name="price_strat" Placeholder=Pricing strategy"></textarea>
	
<label for "serve-descrip">Distribution plan</label>
<textarea cols="4" rows="4" name="dist_plan" Placeholder="Distribution plan"></textarea>

<h3>Funding Request (if applicable)</h3>

<label for "serve-descrip">Funding requirements</label>
<textarea cols="4" rows="4" name="fund_req" Placeholder="Funding requirements"></textarea>

<label for "serve-descrip">Use of funds</label>
<textarea cols="4" rows="4" name="use_fund" Placeholder="Use of funds"></textarea>

<h3>Financial Projections</h3>

<label for "serve-descrip">Projected revenue and expenses</label>
<textarea cols="4" rows="4" name="proj_exp" Placeholder="Projected revenue and expenses"></textarea>
	
<label for "serve-descrip">Break-even analysis</label>
<textarea cols="4" rows="4" name="brk_analy" Placeholder="Break-even analysis"></textarea>
	
<label for "serve-descrip">Cash flow projections</label>
<textarea cols="4" rows="4" name="cashflow" Placeholder="Cash flow projections"></textarea>
	
<label for "serve-descrip">Balance sheet</label>
<textarea cols="4" rows="4" name="bal_sheet" Placeholder="Balance sheet"></textarea>

<label for "serve-descrip">Profit and loss statement</label>
<textarea cols="4" rows="4" name="prolos_stm" Placeholder="Profit and loss statement"></textarea>

<h3>Appendix: additional documents and materials</h3>
<label for "document">Resumes of key team members </label>
<input type="file" name="cv_docs" class="date">
<label for "legal-doc">Legal documents</label>
<input type="file" name="legal_docs" class="date">
<label for "market-doc">Market research data</label>
<input type="file" name="mrkt_docs" class="date">

<center><button type="submit" name="submit" id="create" onclick="wrong_pass_alert()" class="login-btn w3-green w3-hover-blue" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></center>
</form>
 </div>


<div class="w3-quarter">
</div>
</div>
