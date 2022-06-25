<?php

global $wpdb;
$tablename = $wpdb->prefix."application_form";

// Delete record
if(isset($_GET['delid'])){
  $delid = $_GET['delid'];
  $wpdb->query("DELETE FROM ".$tablename." WHERE id=".$delid);
}

if (isset($_GET['edit'])) {
  $upt_id = $_GET['edit'];
  $result = $wpdb->get_results("SELECT * FROM $tablename WHERE id='$upt_id'");
  foreach($result as $print) {
    // $name = $print->name;
    // $email = $print->email;
  ?>
  <table class='wp-list-table widefat striped'>    
      <form action='' method='post'>
        <span class="d-none"><input type='hidden' id='id' name='id' value='<?php echo  $print->id; ?>'></span>
        <tr>
          <th width='25%'>Promoter Name & Surname:</th>
          <th width='25%'>Nationality:</th>
          <th width='25%'>Address:</th>
          <th width='25%'>Tel:</th>
        </tr>
        <tr>
          <td width='25%'><input type='text' id='name' name='name' value='<?php echo  $print->name; ?>'></td>
          <td width='25%'><input type='text' id='nationality' name='nationality' value='<?php echo  $print->nationality; ?>'></td>
          <td width='25%'><input type='text' id='address' name='address' value='<?php echo  $print->address; ?>'></td>
          <td width='25%'><input type='text' id='tel' name='tel' value='<?php echo  $print->tel; ?>'></td>
        </tr>

        <tr>
          <th width='25%'>E-mail: </th>
          <th width='25%'>1st Proposal:</th>
          <th width='25%'>2st Proposal:</th>
          <th width='25%'>3st Proposal:</th>
        </tr>

        <tr>
          <td width='25%'><input type='text' id='email' name='email' value='<?php echo  $print->email; ?>'></td>
          <td width='25%'><input type='text' id='proposalOne' name='proposalOne' value='<?php echo  $print->proposalOne; ?>'></td>
          <td width='25%'><input type='text' id='proposalTwo' name='proposalTwo' value='<?php echo  $print->proposalTwo; ?>'></td>
          <td width='25%'><input type='text' id='proposalThree' name='proposalThree' value='<?php echo  $print->proposalThree; ?>'></td>
        </tr>

        <tr>
          <th width='25%'>Activities: </th>
          <th width='25%'>Name & surname of the manager:</th>
          <th width='25%'>Nationality </th>
          <th width='25%'>Capital of the company</th>
        </tr>

        <tr>
          <td width='25%'><input type='text' id='activities' name='activities' value='<?php echo  $print->activities; ?>'></td>
          <td width='25%'><input type='text' id='nameManager' name='nameManager' value='<?php echo  $print->nameManager; ?>'></td>
          <td width='25%'><input type='text' id='nationalityCompany' name='nationalityCompany' value='<?php echo  $print->nationalityCompany; ?>'></td>
          <td width='25%'><input type='text' id='capitalCompany' name='capitalCompany' value='<?php echo  $print->capitalCompany; ?>'></td>
        </tr>

        <tr>
          <th width='25%'>Currency </th>
          <th width='25%'>Name and Surname :</th>
          <th width='25%'>Nationality : </th>
          <th width='25%'>% of subscription :</th>
        </tr>


        <tr>
          <td width='25%'><input type='text' id='currency' name='currency' value='<?php echo  $print->currency; ?>'></td>
          <td width='25%'><input type='text' id='nameShareholders' name='nameShareholders' value='<?php echo  $print->nameShareholders; ?>'></td>
          <td width='25%'><input type='text' id='nationalityShareholders' name='nationalityShareholders' value='<?php echo  $print->nationalityShareholders; ?>'></td>
          <td width='25%'><input type='text' id='subscriptionShareholders' name='subscriptionShareholders' value='<?php echo  $print->subscriptionShareholders; ?>'></td>
        </tr>

        <tr>
          <th width='25%'>Land: </th>
          <th width='25%'>Premises:</th>
          <th width='25%'>Office: </th>
          <th width='25%'>Construction area (in Sq m):</th>
        </tr>

        <tr>
          <td width='25%'><input type='text' id='land' name='land' value='<?php echo  $print->land; ?>'></td>
          <td width='25%'><input type='text' id='premises' name='premises' value='<?php echo  $print->premises; ?>'></td>
          <td width='25%'><input type='text' id='office' name='office' value='<?php echo  $print->office; ?>'></td>
          <td width='25%'><input type='text' id='constructionArea' name='constructionArea' value='<?php echo  $print->constructionArea; ?>'></td>
        </tr>

        <tr>
          <th width='25%'>Permanent: </th>
          <th width='25%'>Temporary:</th>
          <th width='25%'>Mixed: </th>
          <th width='25%'>1st year:</th>
        </tr>

        <tr>
          <td width='25%'><input type='text' id='permanent' name='permanent' value='<?php echo  $print->permanent; ?>'></td>
          <td width='25%'><input type='text' id='temporary' name='temporary' value='<?php echo  $print->temporary; ?>'></td>
          <td width='25%'><input type='text' id='mixed' name='mixed' value='<?php echo  $print->mixed; ?>'></td>
          <td width='25%'><input type='text' id='firstYear' name='firstYear' value='<?php echo  $print->firstYear; ?>'></td>
        </tr>

        <tr>
          <th width='25%'>2nd year: </th>
          <th width='25%'>3nd year:</th>
          <th width='25%'>Estimated export value : </th>
          <th width='25%'>Local added value:</th>
        </tr>

        <tr>
          <td width='25%'><input type='text' id='secondYear' name='secondYear' value='<?php echo  $print->secondYear; ?>'></td>
          <td width='25%'><input type='text' id='thirdYear' name='thirdYear' value='<?php echo  $print->thirdYear; ?>'></td>
          <td width='25%'><input type='text' id='estimatedExport' name='estimatedExport' value='<?php echo  $print->estimatedExport; ?>'></td>
          <td width='25%'><input type='text' id='localAddedValue' name='localAddedValue' value='<?php echo  $print->localAddedValue; ?>'></td>
        </tr>

        <tr>
          <th width='25%'>Origin of imported goods: </th>
          <th width='25%'>Export destination:</th>
          <th width='25%'>Construction & Equipments : </th>
          <th width='25%'>Imported equipments :</th>
        </tr>

        <tr>
          <td width='25%'><input type='text' id='originImportedGoods' name='originImportedGoods' value='<?php echo  $print->originImportedGoods; ?>'></td>
          <td width='25%'><input type='text' id='exportDestination' name='exportDestination' value='<?php echo  $print->exportDestination; ?>'></td>
          <td width='25%'><input type='text' id='constructionEquipments' name='constructionEquipments' value='<?php echo  $print->constructionEquipments; ?>'></td>
          <td width='25%'><input type='text' id='importedEquipments' name='importedEquipments' value='<?php echo  $print->importedEquipments; ?>'></td>
        </tr>

        <tr>
          <th width='25%'>Local equipments : </th>
          <th width='25%'>Means of transport :</th>
          <th width='25%'>Other costs :</th>
          <th width='25%'>Working capital : </th>
        </tr>

        <tr>
          <td width='25%'><input type='text' id='localEquipments' name='localEquipments' value='<?php echo  $print->localEquipments; ?>'></td>
          <td width='25%'><input type='text' id='meansTransport' name='meansTransport' value='<?php echo  $print->meansTransport; ?>'></td>
          <td width='25%'><input type='text' id='otherCosts' name='otherCosts' value='<?php echo  $print->otherCosts; ?>'></td>
          <td width='25%'><input type='text' id='workingCapital' name='workingCapital' value='<?php echo  $print->workingCapital; ?>'></td>
        </tr>

        <tr>
          <th width='25%'>TOTAL INVESTMENT: </th>
          <th width='25%'>Capital :</th>
          <th width='25%'>Current account of partners : </th>
          <th width='25%'>Long term credit :</th>
        </tr>

        <tr>
          <td width='25%'><input type='text' id='totalInvestment' name='totalInvestment' value='<?php echo  $print->totalInvestment; ?>'></td>
          <td width='25%'><input type='text' id='capitalFinance' name='capitalFinance' value='<?php echo  $print->capitalFinance; ?>'></td>
          <td width='25%'><input type='text' id='currentAccountPartners' name='currentAccountPartners' value='<?php echo  $print->currentAccountPartners; ?>'></td>
          <td width='25%'><input type='text' id='longTermCredit' name='longTermCredit' value='<?php echo  $print->longTermCredit; ?>'></td>
        </tr>

        <tr>
          <th width='25%'>Middle term credit : </th>
          <th width='25%'>Short term credit :</th>
          <th width='25%'>TOTAL FINANCING: </th>
          <th width='25%'>Status </th>
        </tr>

        <tr>
          <td width='25%'><input type='text' id='middleTermCredit' name='middleTermCredit' value='<?php echo  $print->middleTermCredit ;?>'></td>
          <td width='25%'><input type='text' id='shortTermCredit' name='shortTermCredit' value='<?php echo  $print->shortTermCredit; ?>'></td>
          <td width='25%'><input type='text' id='totalFinance' name='totalFinance' value='<?php echo  $print->totalFinance; ?>'></td>
         
          <td width='25%'>
            <select name="status" id="status">
                <option value="Request sent"<?php if ($print->status == 'Request sent') echo ' selected="selected"'; ?>>Request sent</option>
                <option value="being processed"<?php if ($print->status == 'being processed') echo ' selected="selected"'; ?>>being processed</option>
                <option value="file processed"<?php if ($print->status == 'file processed') echo ' selected="selected"'; ?>>file processed</option>
            </select>

            </br></br>

            <button id='updateSubmit' name='updateSubmit' type='submit'>UPDATE</button> 
            <a href='admin.php?page=allentries'><button type='button'>CANCEL</button></a>
          </td>
        </tr>
      </form>
  </table>

  <?php
  }
}


if (isset($_GET['show'])) {
  $show_id = $_GET['show'];
  $result = $wpdb->get_results("SELECT * FROM $tablename WHERE id='$show_id'");
  foreach($result as $show) {
    ?>
    <table class='wp-list-table widefat striped'>    
        <form>
          <span class="d-none"><input type='hidden' id='id' name='id' value='<?php echo  $show->id; ?>'></span>
          <tr>
            <th width='25%'>Promoter Name & Surname:</th>
            <th width='25%'>Nationality:</th>
            <th width='25%'>Address:</th>
            <th width='25%'>Tel:</th>
          </tr>
          <tr>
            <td width='25%'><input type='text' readonly id='name' name='name' value='<?php echo  $show->name; ?>'></td>
            <td width='25%'><input type='text' readonly id='nationality' name='nationality' value='<?php echo  $show->nationality; ?>'></td>
            <td width='25%'><input type='text' readonly id='address' name='address' value='<?php echo  $show->address; ?>'></td>
            <td width='25%'><input type='text' readonly id='tel' name='tel' value='<?php echo  $show->tel; ?>'></td>
          </tr>

          <tr>
            <th width='25%'>E-mail: </th>
            <th width='25%'>1st Proposal:</th>
            <th width='25%'>2st Proposal:</th>
            <th width='25%'>3st Proposal:</th>
          </tr>

          <tr>
            <td width='25%'><input type='text' readonly id='email' name='email' value='<?php echo  $show->email; ?>'></td>
            <td width='25%'><input type='text' readonly id='proposalOne' name='proposalOne' value='<?php echo  $show->proposalOne; ?>'></td>
            <td width='25%'><input type='text' readonly id='proposalTwo' name='proposalTwo' value='<?php echo  $show->proposalTwo; ?>'></td>
            <td width='25%'><input type='text' readonly id='proposalThree' name='proposalThree' value='<?php echo  $show->proposalThree; ?>'></td>
          </tr>

          <tr>
            <th width='25%'>Activities: </th>
            <th width='25%'>Name & surname of the manager:</th>
            <th width='25%'>Nationality </th>
            <th width='25%'>Capital of the company</th>
          </tr>

          <tr>
            <td width='25%'><input type='text' readonly id='activities' name='activities' value='<?php echo  $show->activities; ?>'></td>
            <td width='25%'><input type='text' readonly id='nameManager' name='nameManager' value='<?php echo  $show->nameManager; ?>'></td>
            <td width='25%'><input type='text' readonly id='nationalityCompany' name='nationalityCompany' value='<?php echo  $show->nationalityCompany; ?>'></td>
            <td width='25%'><input type='text' readonly id='capitalCompany' name='capitalCompany' value='<?php echo  $show->capitalCompany; ?>'></td>
          </tr>

          <tr>
            <th width='25%'>Currency </th>
            <th width='25%'>Name and Surname :</th>
            <th width='25%'>Nationality : </th>
            <th width='25%'>% of subscription :</th>
          </tr>


          <tr>
            <td width='25%'><input type='text' readonly id='currency' name='currency' value='<?php echo  $show->currency; ?>'></td>
            <td width='25%'><input type='text' readonly id='nameShareholders' name='nameShareholders' value='<?php echo  $show->nameShareholders; ?>'></td>
            <td width='25%'><input type='text' readonly id='nationalityShareholders' name='nationalityShareholders' value='<?php echo  $show->nationalityShareholders; ?>'></td>
            <td width='25%'><input type='text' readonly id='subscriptionShareholders' name='subscriptionShareholders' value='<?php echo  $show->subscriptionShareholders; ?>'></td>
          </tr>

          <tr>
            <th width='25%'>Land: </th>
            <th width='25%'>Premises:</th>
            <th width='25%'>Office: </th>
            <th width='25%'>Construction area (in Sq m):</th>
          </tr>

          <tr>
            <td width='25%'><input type='text' readonly id='land' name='land' value='<?php echo  $show->land; ?>'></td>
            <td width='25%'><input type='text' readonly id='premises' name='premises' value='<?php echo  $show->premises; ?>'></td>
            <td width='25%'><input type='text' readonly id='office' name='office' value='<?php echo  $show->office; ?>'></td>
            <td width='25%'><input type='text' readonly id='constructionArea' name='constructionArea' value='<?php echo  $show->constructionArea; ?>'></td>
          </tr>

          <tr>
            <th width='25%'>Permanent: </th>
            <th width='25%'>Temporary:</th>
            <th width='25%'>Mixed: </th>
            <th width='25%'>1st year:</th>
          </tr>

          <tr>
            <td width='25%'><input type='text' readonly id='permanent' name='permanent' value='<?php echo  $show->permanent; ?>'></td>
            <td width='25%'><input type='text' readonly id='temporary' name='temporary' value='<?php echo  $show->temporary; ?>'></td>
            <td width='25%'><input type='text' readonly id='mixed' name='mixed' value='<?php echo  $show->mixed; ?>'></td>
            <td width='25%'><input type='text' readonly id='firstYear' name='firstYear' value='<?php echo  $show->firstYear; ?>'></td>
          </tr>

          <tr>
            <th width='25%'>2nd year: </th>
            <th width='25%'>3nd year:</th>
            <th width='25%'>Estimated export value : </th>
            <th width='25%'>Local added value:</th>
          </tr>

          <tr>
            <td width='25%'><input type='text' readonly id='secondYear' name='secondYear' value='<?php echo  $show->secondYear; ?>'></td>
            <td width='25%'><input type='text' readonly id='thirdYear' name='thirdYear' value='<?php echo  $show->thirdYear; ?>'></td>
            <td width='25%'><input type='text' readonly id='estimatedExport' name='estimatedExport' value='<?php echo  $show->estimatedExport; ?>'></td>
            <td width='25%'><input type='text' readonly id='localAddedValue' name='localAddedValue' value='<?php echo  $show->localAddedValue; ?>'></td>
          </tr>

          <tr>
            <th width='25%'>Origin of imported goods: </th>
            <th width='25%'>Export destination:</th>
            <th width='25%'>Construction & Equipments : </th>
            <th width='25%'>Imported equipments :</th>
          </tr>

          <tr>
            <td width='25%'><input type='text' readonly id='originImportedGoods' name='originImportedGoods' value='<?php echo  $show->originImportedGoods; ?>'></td>
            <td width='25%'><input type='text' readonly id='exportDestination' name='exportDestination' value='<?php echo  $show->exportDestination; ?>'></td>
            <td width='25%'><input type='text' readonly id='constructionEquipments' name='constructionEquipments' value='<?php echo  $show->constructionEquipments; ?>'></td>
            <td width='25%'><input type='text' readonly id='importedEquipments' name='importedEquipments' value='<?php echo  $show->importedEquipments; ?>'></td>
          </tr>

          <tr>
            <th width='25%'>Local equipments : </th>
            <th width='25%'>Means of transport :</th>
            <th width='25%'>Other costs :</th>
            <th width='25%'>Working capital : </th>
          </tr>

          <tr>
            <td width='25%'><input type='text' readonly id='localEquipments' name='localEquipments' value='<?php echo  $show->localEquipments; ?>'></td>
            <td width='25%'><input type='text' readonly id='meansTransport' name='meansTransport' value='<?php echo  $show->meansTransport; ?>'></td>
            <td width='25%'><input type='text' readonly id='otherCosts' name='otherCosts' value='<?php echo  $show->otherCosts; ?>'></td>
            <td width='25%'><input type='text' readonly id='workingCapital' name='workingCapital' value='<?php echo  $show->workingCapital; ?>'></td>
          </tr>

          <tr>
            <th width='25%'>TOTAL INVESTMENT: </th>
            <th width='25%'>Capital :</th>
            <th width='25%'>Current account of partners : </th>
            <th width='25%'>Long term credit :</th>
          </tr>

          <tr>
            <td width='25%'><input type='text' readonly id='totalInvestment' name='totalInvestment' value='<?php echo  $show->totalInvestment; ?>'></td>
            <td width='25%'><input type='text' readonly id='capitalFinance' name='capitalFinance' value='<?php echo  $show->capitalFinance; ?>'></td>
            <td width='25%'><input type='text' readonly id='currentAccountPartners' name='currentAccountPartners' value='<?php echo  $show->currentAccountPartners; ?>'></td>
            <td width='25%'><input type='text' readonly id='longTermCredit' name='longTermCredit' value='<?php echo  $show->longTermCredit; ?>'></td>
          </tr>

          <tr>
            <th width='25%'>Middle term credit : </th>
            <th width='25%'>Short term credit :</th>
            <th width='25%'>TOTAL FINANCING: </th>
            <th width='25%'>Status </th>
          </tr>

          <tr>
            <td width='25%'><input type='text' readonly id='middleTermCredit' name='middleTermCredit' value='<?php echo  $show->middleTermCredit ;?>'></td>
            <td width='25%'><input type='text' readonly id='shortTermCredit' name='shortTermCredit' value='<?php echo  $show->shortTermCredit; ?>'></td>
            <td width='25%'><input type='text' readonly id='totalFinance' name='totalFinance' value='<?php echo  $show->totalFinance; ?>'></td>
          
            <td width='25%'><input type='text' readonly id='status' name='status' value='<?php echo  $show->status; ?>'></td>
          </tr>
        </form>
    </table>

    <?php
  }
}


if (isset($_POST['updateSubmit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
		$nationality = $_POST['nationality'];
		$address = $_POST['address'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		$proposalOne = $_POST['proposalOne'];
		$proposalTwo = $_POST['proposalTwo'];
		$proposalThree = $_POST['proposalThree'];
		$activities = $_POST['activities'];
		$nameManager = $_POST['nameManager'];
		$nationalityCompany = $_POST['nationalityCompany'];
		$capitalCompany = $_POST['capitalCompany'];
		$currency = $_POST['currency'];
		$nameShareholders = $_POST['nameShareholders'];
		$nationalityShareholders = $_POST['nationalityShareholders'];
		$subscriptionShareholders = $_POST['subscriptionShareholders'];
		$land = $_POST['land'];
		$premises = $_POST['premises'];
		$office = $_POST['office'];
		$constructionArea = $_POST['constructionArea'];
		$permanent = $_POST['permanent'];
		$temporary = $_POST['temporary'];
		$mixed = $_POST['mixed'];
		$firstYear = $_POST['firstYear'];
		$secondYear = $_POST['secondYear'];

		$thirdYear = $_POST['thirdYear'];
		$estimatedExport = $_POST['estimatedExport'];
		$localAddedValue = $_POST['localAddedValue'];
		$originImportedGoods = $_POST['originImportedGoods'];

		$exportDestination = $_POST['exportDestination'];
		$constructionEquipments = $_POST['constructionEquipments'];
		$importedEquipments = $_POST['importedEquipments'];
		$localEquipments = $_POST['localEquipments'];
		$meansTransport = $_POST['meansTransport'];
		$otherCosts = $_POST['otherCosts'];
		$workingCapital = $_POST['workingCapital'];
		$totalInvestment = $_POST['totalInvestment'];

		$capitalFinance = $_POST['capitalFinance'];
		$currentAccountPartners = $_POST['currentAccountPartners'];
		$longTermCredit = $_POST['longTermCredit'];
		$middleTermCredit = $_POST['middleTermCredit'];
		$shortTermCredit = $_POST['shortTermCredit'];
		$totalFinance = $_POST['totalFinance'];
    $status = $_POST['status'];

  $wpdb->query("UPDATE $tablename SET name='$name',nationality='$nationality', email='$email', address='$address', tel='$tel', 
      proposalOne='$proposalOne', proposalTwo='$proposalTwo', proposalThree='$proposalThree', activities='$activities', nameManager='$nameManager',
			nationalityCompany='$nationalityCompany', capitalCompany='$capitalCompany', currency='$currency', nameShareholders='$nameShareholders', 
      nationalityShareholders='$nationalityShareholders', subscriptionShareholders='$subscriptionShareholders',
			land='$land', premises='$premises', office='$office', constructionArea='$constructionArea', permanent='$permanent', 
      temporary='$temporary', mixed='$landmixed', firstYear='$firstYear', secondYear='$secondYear', thirdYear='$thirdYear', estimatedExport='$estimatedExport',
			localAddedValue='$localAddedValue', originImportedGoods='$originImportedGoods', exportDestination='$exportDestination', 
      constructionEquipments='$laconstructionEquipmentsnd', importedEquipments='$importedEquipments', localEquipments='$localEquipments',
			meansTransport='$meansTransport', otherCosts='$otherCosts', workingCapital='$workingCapital', totalInvestment='$totalInvestment', 
      capitalFinance='$capitalFinance', currentAccountPartners='$currentAccountPartners', longTermCredit='$longTermCredit', 
			middleTermCredit='$middleTermCredit', shortTermCredit='$shortTermCredit', totalFinance='$totalFinance', status='$status' WHERE id='$id'");
  
  echo "<script>location.replace('admin.php?page=allentries');</script>";
}
?>
<h1>All Entries</h1>

<table class='wp-list-table widefat striped'>
  <thead>
    <tr>
      <th>S.no</th>
      <th>Sequance</th>
      <th>Promoter Name</th>
      <th>Name of company	</th>
      <th>Capital of the company</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <?php
  // Select records
  $entriesList = $wpdb->get_results("SELECT * FROM ".$tablename." order by id desc");

  if(count($entriesList) > 0){
    $count = 1;
    foreach($entriesList as $entry){
      $id = $entry->id;
      $name = $entry->name;
      $nationality = $entry->nationality;
      $email = $entry->email;

      echo "<tr>
      <td>".$count."</td>
      <td>".str_pad($entry->id, 5, '0', STR_PAD_LEFT) ."</td>
      <td>".$entry->name."</td>
      <td>".$entry->proposalOne."</td>
      <td>".$entry->capitalCompany."</td>
      <td>".$entry->status."</td>
      <td>
          <a href='?page=allentries&delid=".$id."'>Delete</a>  | 
          <a href='?page=allentries&show=".$id."'>Show</a>  |  
          <a href='?page=allentries&edit=".$id."'>edit</a> 
          </td>
      </tr>
      ";
      $count++;
   }
 }else{
   echo "<tr><td colspan='5'>No record found</td></tr>";
 }

?>
</table>
