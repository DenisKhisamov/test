 <section class="main_page">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                <div data-form-alert="true"><div hidden="" data-form-alert-success="true"></div></div>
                <form action="" id="form_id" method="post">
					<?php 
					//debug($vars["list"]['select_value']);
					//exit;
					foreach ($vars["list"]['input'] as $row)
					{
						$req = '';
						if ($row['required'] == 1){$req = 'required=""';}
						if ($row['type_id'] == 4)
						{
							echo '
							<div class="form-group">
								<label>'.$row['label'].'</label>
								<select name="'.$row['name'].'">';
									foreach ($vars["list"]['select_value'] as $option)
									{
										if ($option['form_fields_id'] == $row['id'])
										{
											echo '<option value='.$option['id'].'>'.$option['text'].'</option>';
										}
										else
										{
											continue;
										}
										
									}
								echo '</select>
							</div>	
							';
						}
						else
						{
							echo '
								 <div class="form-group">
									<label>'.$row['label'].'</label>
									<input '.$req.' value="'.$row['value'].'" type="'.$row['type'].'" id="'.$row['name'].'" class="form-control" name="'.$row['name'].'" placeholder="'.$row['placeholder'].'">
								</div>
							';
						}
						
					} 
					?>
                    <div class="text-xs-right"><button type="submit" name="enter" class="btn btn-primary-outline btn-primary">Записаться</button></div>
				</form>
				<div id="error"></div>
				<div id="link">
					
				</div>
            </div>
        </div>
    </div>
</section>
