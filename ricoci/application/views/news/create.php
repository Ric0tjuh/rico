<h2>Create a news item</h2>

<?php echo validation_errors(); ?>

<?php  ### WAAROM WERKT DIT NIET OP DE NORMALE MANIER MET news/create maar wel met mn eigen '../../../../create'
echo form_open('news/create')  ## dit zorgt ervoor dat ie een deel vand e url leeghalat waardoor t nu wel werkt
 ?>

	<label for="title">Title</label> 
	<input type="input" name="title" /><br />

	<label for="text">Text</label>
	<textarea name="text"></textarea><br />
	
	<input type="submit" name="submit" value="Create news item" /> 

</form>