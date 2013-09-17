
<!-- Modal -->
<div id="participer" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Inscription Réussit, Étape suivante ?</h3>
  </div>
  <div class="modal-body" style="max-height:550px" >
  <p> Un mail de validation vous a été envoyé
   <br/>En attendant vous pouvez compléter votre inscription ci-dessous</p>
    <form id="register2" style="line-height:40px;">
        <section>
          
          	
          	<table>
              	<tr>
                  	<td class="txtright"></td>
                  	<td> <?php if($account && isset($account['email']) )echo $account['email'] ?></td>
              	</tr>
              	<tr>
                  	<td class="txtright">Je m'appel</td>
                  	<td> <input id="registerName" name="registerName" value="<?php if($account && isset($account['name']) )echo $account['name'] ?>"/></td>
              	</tr>
              	<tr>
                  	<td class="txtright">Je suis  </td>
                  	<td>
                  	<?php 
                          $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
                            'data' => array("citoyen"=>"citoyen","association"=>"association","entreprise"=>"entreprise","collectivité"=>"collectivité"), 
                            'name' => 'typePA',
                          	'id' => 'typePA',
                            'value'=>($account && isset($account['type']) ) ? $account['type'] : "citoyen",
                            'pluginOptions' => array('width' => '150px')
                          ));
            		    ?></td>
        		</tr>   
        		<tr>
                  	<td class="txtright">j'habite en  </td>
                  	<td>
        		<?php 
                          $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
                            'data' => OpenData::$phCountries, 
                            'name' => 'countryPA',
                          	'id' => 'countryPA',
                            'value'=>($account && isset($account['country']) ) ? $account['country'] : "Réunion",
                            'pluginOptions' => array('width' => '150px')
                          ));
            		    ?></td>
            	</tr> 
        		<tr>
            		<td class="txtright">au code postal</td>  
            		<td><input id="registerCP" name="registerCP" class="span2" value="<?php if($account && isset($account['cp']) )echo $account['cp'] ?>"></td>
        		</tr>
        		
        		<tr> 
                    <td class="txtright">J'aimerais aider le projet</td>
                    <td> <input type="checkbox" id="registerHelpout" name="registerHelpout" <?php if($account && isset($account['activeOnProject']) )echo "checked" ?>></td>
                </tr>
                <tr <?php if($account && (!isset($account['activeOnProject']) || !$account['activeOnProject']) ){ ?>class="hidden" <?php }?> id="registerHelpoutWhat">
                    <td class="txtright">en tant que </td>
                    <td>
                        <?php 
                          $cursor = Yii::app()->mongodb->jobTypes->findOne( array(), array('list'));
                          $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
                            'asDropDownList' => false,
                            'name' => 'helpJob',
                          	'id' => 'helpJob',
                            'value'=>($account && isset($account['positions']) ) ? implode(",", $account['positions']) : "",
                            'pluginOptions' => array(
                                'tags' => $cursor['list'],
                                'placeholder' => "Qu'aimeriez vous faire ?",
                                'width' => '100%',
                                'tokenSeparators' => array(',', ' ')
                            )));
            		    ?>
        		    </td>
    		    </tr>
    		    
    		    <tr >
                    <td class="txtright">Centre d'interet </td>
                    <td>
                        <?php 
                          $cursor = Yii::app()->mongodb->tags->findOne( array(), array('list'));
                          $this->widget('yiiwheels.widgets.select2.WhSelect2', array(
                            'asDropDownList' => false,
                            'name' => 'tagsPA',
                          	'id' => 'tagsPA',
                            'value'=>($account && isset($account['tags']) ) ? implode(",", $account['tags']) : "",
                            'pluginOptions' => array(
                                'tags' => $cursor['list'],
                                'placeholder' => "Mots clefs vous décrivant",
                                'width' => '100%',
                                'tokenSeparators' => array(',', ' ')
                            )));
            		    ?>
        		    </td>
    		    </tr>
          </table>
             
        </section>
        
    </form>
    <p>Toute l'équipe du Pixel Humain vous remercie et vous souhaites la bienvenue.</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
    <button class="btn btn-primary" id="submitAccount" onclick="$('#register2').submit();">Enregistrer</button>
  </div>
</div>
<!-- Modal -->
<script type="text/javascript">
initT['AccountModalsInit'] = function(){
    $("#register2").submit( function(event){
    	event.preventDefault();
    	$("#participer").modal('hide');
    	toggleSpinner();
    	$.ajax({
    	  type: "POST",
    	  url: baseUrl+"/index.php/citoyens/register2",
    	  data: $("#register2").serialize(),
    	  success: function(data){
    			  $("#flashInfo .modal-body").html(data.msg);
    			  
    		  	  toggleSpinner();
    		  	  if(data.newAsso){
        		  	  alert("L'association "+data.newAsso+" a été créé pour vous, merci d'inviter le président pour confirmer.");
    		  		  $("#invitation").modal('show');
    		  	  } else
    		  		$("#flashInfo").modal('show');
    	  },
    	  dataType: "json"
    	});
    });

    showEvent("registerHelpout");
};

</script>