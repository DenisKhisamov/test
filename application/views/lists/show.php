<section class="main_page">
    <div class="container">
        <div class="row">
                <table class="info">
				<thead>
					<tr>
						<td>ФИО</td>
						<td>Email</td>
						<td>Дата рождения</td>
						<td>Пол</td>
						<td>Тип документа</td>
						<td>Номер документа</td>
						<td>Права доступа</td>
					</tr>
				</thead>
				<tbody>
				<tr>
					<?php
						foreach ($vars["list"] as $row)
						{
							$dates = date('d.m.Y',$row['date']);
							$pol = 'Жен';
							if ($row['pol'] == 1)
							{
								$pol = 'Муж';
							}
							
							echo '
							<td>'.$row['fio'].'</td>
							<td>'.$row['email'].'</td>
							<td>'.$dates.'</td>
							<td>'.$pol.'</td>
							<td>'.$row['doc_types'].'</td>
							<td>'.$row['doc_numb'].'</td>
							<td>'.$row['access_right'].'</td>
							';
						}
						
					
					?>
				</tr>
				</tbody>
				</table>
            
        </div>
    </div>
</section>

