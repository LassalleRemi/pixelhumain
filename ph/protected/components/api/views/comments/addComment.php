<div class="fss">
	fields : <input type="text" name="getmessagebyFilter" id="getmessagebyFilter" value="msg" />(comma seperated)<br/>
	<a href="javascript:getmessageby()">Test it</a><br/>
	<div id="getmessagebyResult" class="result fss"></div>
	<script>
		function getmessageby()
		{
			fields = $("#getmessagebyFilter").val(); 
			params = {"applications.<?php echo $this->module->id?>.usertype":"event","limit":10};
			if(fields) 
				params.fields = fields.split(",");
			testitpost("getmessagebyResult", baseUrl+'/<?php echo $this->module->id?>/api/getmessageby',params);
		}
	</script>
</div>