<?php
get_header();

if ( is_user_logged_in() ) {

?>

<style>
    .add-textbox{
        padding-right: -15px;
        padding-right: -15px;
    }
</style>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://use.fontawesome.com/1cdb0cfd25.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var max_fields = 3;
    var wrapper = $(".add-textbox");
    var add_button = $(".btn-add-field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            // $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
            $(wrapper).append('<div class="delete-textbox"><div class="col-md-4"><div class="form-group"><label class="text-dark" for="NameShareholders">Name and Surname : </label><input type="text" class="form-control" placeholder="Name and Surname"></div></div><div class="col-md-4"><div class="form-group"><label class="text-dark" for="exampleInputEmail1">Nationality :</label><input type="text" class="form-control" placeholder="Nationality"></div></div><div class="col-md-4"><div class="form-group"><label class="text-dark" for="exampleInputEmail1">% of subscription  :</label><div class="input-group mb-3"><input type="text" class="form-control w-75" placeholder="subscription"><button class="btn btn-danger delete w-25" type="submit">-</button></div></div></div></div>');
        } else {
          //  alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent().parent().parent().parent().remove();
        x--;
    })


    // function on_change value caputal
    $( "#capitalCompany" ).blur(function() {
        $("#capitalFinance").val($(this).val());
    });

    

    // function on_change calcule Total Finance
    $( ".form-group" ).on('input','.cal_finance',function() {
        var totalSunFin = 0; 
        $( ".form-group .cal_finance").each(function() {
            var inputValue = $(this).val(); 
            if ($.isNumeric(inputValue)){
                totalSunFin += parseFloat(inputValue);
            }
        });
        $("#totalFinance").val(totalSunFin);
    });

    // function on_change calcule Total Investment
    $( ".form-group" ).on('input','.cal_investment',function() {
        var totalSunInv = 0; 
        $( ".form-group .cal_investment").each(function() {
            var inputValue = $(this).val(); 
            if ($.isNumeric(inputValue)){
                totalSunInv += parseFloat(inputValue);
            }
        });
        $("#totalInvestment").val(totalSunInv);
    });

    // function on_comparison calcule Total Investment with calcule Total Finance


    $(".form-group" ).on('input',function() {
        
        var totalFinance = $("#totalFinance").val();
        var totalInvestment = $("#totalInvestment").val();
        if(totalInvestment == totalFinance){
            //Check to see if there is any text entered
            // If there is no text within the input ten disable the button
            $('#inputSubmit').prop('disabled', false);
        }
        else {
            //If there is Number in the input, then enable the button
            $('#inputSubmit').prop('disabled', true);
        }
    });

});  
</script>



<form id="contact-form" method="post" action="<?php the_permalink(); ?>" class="closeForm">
    <?php if(isset($emailSent) && $emailSent == true) { ?>
        <div class="thanks">
            <p>Thanks, your email was sent successfully.</p>
        </div>
    <?php }  ?>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
            <label class="text-dark" for="name">Promoter Name & Surname:</label>
                <input type="text" name="name" id="name" value="" class="form-control" placeholder="Your name" required="required">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
            <label class="text-dark" for="nationality">Nationality:</label>
                <select name="nationality" id="nationality" value="" class="form-control" placeholder="Your Nationality" required="required">
                    <option value="">-- select one --</option>
                    <option value="afghan">Afghan</option>
                    <option value="albanian">Albanian</option>
                    <option value="algerian">Algerian</option>
                    <option value="american">American</option>
                    <option value="andorran">Andorran</option>
                    <option value="angolan">Angolan</option>
                    <option value="antiguans">Antiguans</option>
                    <option value="argentinean">Argentinean</option>
                    <option value="armenian">Armenian</option>
                    <option value="australian">Australian</option>
                    <option value="austrian">Austrian</option>
                    <option value="azerbaijani">Azerbaijani</option>
                    <option value="bahamian">Bahamian</option>
                    <option value="bahraini">Bahraini</option>
                    <option value="bangladeshi">Bangladeshi</option>
                    <option value="barbadian">Barbadian</option>
                    <option value="barbudans">Barbudans</option>
                    <option value="batswana">Batswana</option>
                    <option value="belarusian">Belarusian</option>
                    <option value="belgian">Belgian</option>
                    <option value="belizean">Belizean</option>
                    <option value="beninese">Beninese</option>
                    <option value="bhutanese">Bhutanese</option>
                    <option value="bolivian">Bolivian</option>
                    <option value="bosnian">Bosnian</option>
                    <option value="brazilian">Brazilian</option>
                    <option value="british">British</option>
                    <option value="bruneian">Bruneian</option>
                    <option value="bulgarian">Bulgarian</option>
                    <option value="burkinabe">Burkinabe</option>
                    <option value="burmese">Burmese</option>
                    <option value="burundian">Burundian</option>
                    <option value="cambodian">Cambodian</option>
                    <option value="cameroonian">Cameroonian</option>
                    <option value="canadian">Canadian</option>
                    <option value="cape verdean">Cape Verdean</option>
                    <option value="central african">Central African</option>
                    <option value="chadian">Chadian</option>
                    <option value="chilean">Chilean</option>
                    <option value="chinese">Chinese</option>
                    <option value="colombian">Colombian</option>
                    <option value="comoran">Comoran</option>
                    <option value="congolese">Congolese</option>
                    <option value="costa rican">Costa Rican</option>
                    <option value="croatian">Croatian</option>
                    <option value="cuban">Cuban</option>
                    <option value="cypriot">Cypriot</option>
                    <option value="czech">Czech</option>
                    <option value="danish">Danish</option>
                    <option value="djibouti">Djibouti</option>
                    <option value="dominican">Dominican</option>
                    <option value="dutch">Dutch</option>
                    <option value="east timorese">East Timorese</option>
                    <option value="ecuadorean">Ecuadorean</option>
                    <option value="egyptian">Egyptian</option>
                    <option value="emirian">Emirian</option>
                    <option value="equatorial guinean">Equatorial Guinean</option>
                    <option value="eritrean">Eritrean</option>
                    <option value="estonian">Estonian</option>
                    <option value="ethiopian">Ethiopian</option>
                    <option value="fijian">Fijian</option>
                    <option value="filipino">Filipino</option>
                    <option value="finnish">Finnish</option>
                    <option value="french">French</option>
                    <option value="gabonese">Gabonese</option>
                    <option value="gambian">Gambian</option>
                    <option value="georgian">Georgian</option>
                    <option value="german">German</option>
                    <option value="ghanaian">Ghanaian</option>
                    <option value="greek">Greek</option>
                    <option value="grenadian">Grenadian</option>
                    <option value="guatemalan">Guatemalan</option>
                    <option value="guinea-bissauan">Guinea-Bissauan</option>
                    <option value="guinean">Guinean</option>
                    <option value="guyanese">Guyanese</option>
                    <option value="haitian">Haitian</option>
                    <option value="herzegovinian">Herzegovinian</option>
                    <option value="honduran">Honduran</option>
                    <option value="hungarian">Hungarian</option>
                    <option value="icelander">Icelander</option>
                    <option value="indian">Indian</option>
                    <option value="indonesian">Indonesian</option>
                    <option value="iranian">Iranian</option>
                    <option value="iraqi">Iraqi</option>
                    <option value="irish">Irish</option>
                    <option value="israeli">Israeli</option>
                    <option value="italian">Italian</option>
                    <option value="ivorian">Ivorian</option>
                    <option value="jamaican">Jamaican</option>
                    <option value="japanese">Japanese</option>
                    <option value="jordanian">Jordanian</option>
                    <option value="kazakhstani">Kazakhstani</option>
                    <option value="kenyan">Kenyan</option>
                    <option value="kittian and nevisian">Kittian and Nevisian</option>
                    <option value="kuwaiti">Kuwaiti</option>
                    <option value="kyrgyz">Kyrgyz</option>
                    <option value="laotian">Laotian</option>
                    <option value="latvian">Latvian</option>
                    <option value="lebanese">Lebanese</option>
                    <option value="liberian">Liberian</option>
                    <option value="libyan">Libyan</option>
                    <option value="liechtensteiner">Liechtensteiner</option>
                    <option value="lithuanian">Lithuanian</option>
                    <option value="luxembourger">Luxembourger</option>
                    <option value="macedonian">Macedonian</option>
                    <option value="malagasy">Malagasy</option>
                    <option value="malawian">Malawian</option>
                    <option value="malaysian">Malaysian</option>
                    <option value="maldivan">Maldivan</option>
                    <option value="malian">Malian</option>
                    <option value="maltese">Maltese</option>
                    <option value="marshallese">Marshallese</option>
                    <option value="mauritanian">Mauritanian</option>
                    <option value="mauritian">Mauritian</option>
                    <option value="mexican">Mexican</option>
                    <option value="micronesian">Micronesian</option>
                    <option value="moldovan">Moldovan</option>
                    <option value="monacan">Monacan</option>
                    <option value="mongolian">Mongolian</option>
                    <option value="moroccan">Moroccan</option>
                    <option value="mosotho">Mosotho</option>
                    <option value="motswana">Motswana</option>
                    <option value="mozambican">Mozambican</option>
                    <option value="namibian">Namibian</option>
                    <option value="nauruan">Nauruan</option>
                    <option value="nepalese">Nepalese</option>
                    <option value="new zealander">New Zealander</option>
                    <option value="ni-vanuatu">Ni-Vanuatu</option>
                    <option value="nicaraguan">Nicaraguan</option>
                    <option value="nigerien">Nigerien</option>
                    <option value="north korean">North Korean</option>
                    <option value="northern irish">Northern Irish</option>
                    <option value="norwegian">Norwegian</option>
                    <option value="omani">Omani</option>
                    <option value="pakistani">Pakistani</option>
                    <option value="palauan">Palauan</option>
                    <option value="panamanian">Panamanian</option>
                    <option value="papua new guinean">Papua New Guinean</option>
                    <option value="paraguayan">Paraguayan</option>
                    <option value="peruvian">Peruvian</option>
                    <option value="polish">Polish</option>
                    <option value="portuguese">Portuguese</option>
                    <option value="qatari">Qatari</option>
                    <option value="romanian">Romanian</option>
                    <option value="russian">Russian</option>
                    <option value="rwandan">Rwandan</option>
                    <option value="saint lucian">Saint Lucian</option>
                    <option value="salvadoran">Salvadoran</option>
                    <option value="samoan">Samoan</option>
                    <option value="san marinese">San Marinese</option>
                    <option value="sao tomean">Sao Tomean</option>
                    <option value="saudi">Saudi</option>
                    <option value="scottish">Scottish</option>
                    <option value="senegalese">Senegalese</option>
                    <option value="serbian">Serbian</option>
                    <option value="seychellois">Seychellois</option>
                    <option value="sierra leonean">Sierra Leonean</option>
                    <option value="singaporean">Singaporean</option>
                    <option value="slovakian">Slovakian</option>
                    <option value="slovenian">Slovenian</option>
                    <option value="solomon islander">Solomon Islander</option>
                    <option value="somali">Somali</option>
                    <option value="south african">South African</option>
                    <option value="south korean">South Korean</option>
                    <option value="spanish">Spanish</option>
                    <option value="sri lankan">Sri Lankan</option>
                    <option value="sudanese">Sudanese</option>
                    <option value="surinamer">Surinamer</option>
                    <option value="swazi">Swazi</option>
                    <option value="swedish">Swedish</option>
                    <option value="swiss">Swiss</option>
                    <option value="syrian">Syrian</option>
                    <option value="taiwanese">Taiwanese</option>
                    <option value="tajik">Tajik</option>
                    <option value="tanzanian">Tanzanian</option>
                    <option value="thai">Thai</option>
                    <option value="togolese">Togolese</option>
                    <option value="tongan">Tongan</option>
                    <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                    <option value="tunisian">Tunisian</option>
                    <option value="turkish">Turkish</option>
                    <option value="tuvaluan">Tuvaluan</option>
                    <option value="ugandan">Ugandan</option>
                    <option value="ukrainian">Ukrainian</option>
                    <option value="uruguayan">Uruguayan</option>
                    <option value="uzbekistani">Uzbekistani</option>
                    <option value="venezuelan">Venezuelan</option>
                    <option value="vietnamese">Vietnamese</option>
                    <option value="welsh">Welsh</option>
                    <option value="yemenite">Yemenite</option>
                    <option value="zambian">Zambian</option>
                    <option value="zimbabwean">Zimbabwean</option>
                    </select>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
            <label class="text-dark" for="address">Address: </label>
                <input type="text" name="address" id="address" value="" class="form-control" placeholder="Your Address" required="required">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            <label class="text-dark" for="tel">Tel:</label>
                <input type="number" name="tel" id="tel" value="" class="form-control" placeholder="Your Tel..." required="required">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            <label class="text-dark" for="email">E-mail:</label>
                <input type="email" name="email" id="email" value="" class="form-control" placeholder="Your email" required="required">
            </div>
        </div>

        <hr>
        <h3 class="text-left font-weight-bold">Name of company to be created: </h2>

        <div class="col-md-4">
            <div class="form-group">
            <label class="text-dark" for="proposalOne">1st Proposal: </label>
                <input type="text" name="proposalOne" id="proposalOne" value="" class="form-control" placeholder="Your 1st Proposal" required="required">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
            <label class="text-dark" for="proposalTwo">2st Proposal:</label>
                <input type="text" name="proposalTwo" id="proposalTwo" value="" class="form-control" placeholder="Your 2st Proposal" required="required">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
            <label class="text-dark" for="proposalThree">3st Proposal:</label>
                <input type="text" name="proposalThree" id="proposalThree" value="" class="form-control" placeholder="Your 3st Proposal" required="required">
            </div>
        </div>


        <div class="col-12">
            <div class="form-group">
            <label class="text-dark" for="activities">Activities:</label>
                <input type="text" name="activities" id="activities" value="" class="form-control" placeholder="Your Activities" required="required">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
            <label class="text-dark" for="nameManager">Name & surname of the manager:</label>
                <input type="text" name="nameManager" id="nameManager" value="" class="form-control" placeholder="Your Name & surname of the manager" required="required">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
            <label class="text-dark" for="nationalityCompany">Nationality:</label>
            <select name="nationalityCompany" id="nationalityCompany" value="" class="form-control" placeholder="Your Nationality" required="required">
                <option value="">-- select one --</option>
                <option value="afghan">Afghan</option>
                <option value="albanian">Albanian</option>
                <option value="algerian">Algerian</option>
                <option value="american">American</option>
                <option value="andorran">Andorran</option>
                <option value="angolan">Angolan</option>
                <option value="antiguans">Antiguans</option>
                <option value="argentinean">Argentinean</option>
                <option value="armenian">Armenian</option>
                <option value="australian">Australian</option>
                <option value="austrian">Austrian</option>
                <option value="azerbaijani">Azerbaijani</option>
                <option value="bahamian">Bahamian</option>
                <option value="bahraini">Bahraini</option>
                <option value="bangladeshi">Bangladeshi</option>
                <option value="barbadian">Barbadian</option>
                <option value="barbudans">Barbudans</option>
                <option value="batswana">Batswana</option>
                <option value="belarusian">Belarusian</option>
                <option value="belgian">Belgian</option>
                <option value="belizean">Belizean</option>
                <option value="beninese">Beninese</option>
                <option value="bhutanese">Bhutanese</option>
                <option value="bolivian">Bolivian</option>
                <option value="bosnian">Bosnian</option>
                <option value="brazilian">Brazilian</option>
                <option value="british">British</option>
                <option value="bruneian">Bruneian</option>
                <option value="bulgarian">Bulgarian</option>
                <option value="burkinabe">Burkinabe</option>
                <option value="burmese">Burmese</option>
                <option value="burundian">Burundian</option>
                <option value="cambodian">Cambodian</option>
                <option value="cameroonian">Cameroonian</option>
                <option value="canadian">Canadian</option>
                <option value="cape verdean">Cape Verdean</option>
                <option value="central african">Central African</option>
                <option value="chadian">Chadian</option>
                <option value="chilean">Chilean</option>
                <option value="chinese">Chinese</option>
                <option value="colombian">Colombian</option>
                <option value="comoran">Comoran</option>
                <option value="congolese">Congolese</option>
                <option value="costa rican">Costa Rican</option>
                <option value="croatian">Croatian</option>
                <option value="cuban">Cuban</option>
                <option value="cypriot">Cypriot</option>
                <option value="czech">Czech</option>
                <option value="danish">Danish</option>
                <option value="djibouti">Djibouti</option>
                <option value="dominican">Dominican</option>
                <option value="dutch">Dutch</option>
                <option value="east timorese">East Timorese</option>
                <option value="ecuadorean">Ecuadorean</option>
                <option value="egyptian">Egyptian</option>
                <option value="emirian">Emirian</option>
                <option value="equatorial guinean">Equatorial Guinean</option>
                <option value="eritrean">Eritrean</option>
                <option value="estonian">Estonian</option>
                <option value="ethiopian">Ethiopian</option>
                <option value="fijian">Fijian</option>
                <option value="filipino">Filipino</option>
                <option value="finnish">Finnish</option>
                <option value="french">French</option>
                <option value="gabonese">Gabonese</option>
                <option value="gambian">Gambian</option>
                <option value="georgian">Georgian</option>
                <option value="german">German</option>
                <option value="ghanaian">Ghanaian</option>
                <option value="greek">Greek</option>
                <option value="grenadian">Grenadian</option>
                <option value="guatemalan">Guatemalan</option>
                <option value="guinea-bissauan">Guinea-Bissauan</option>
                <option value="guinean">Guinean</option>
                <option value="guyanese">Guyanese</option>
                <option value="haitian">Haitian</option>
                <option value="herzegovinian">Herzegovinian</option>
                <option value="honduran">Honduran</option>
                <option value="hungarian">Hungarian</option>
                <option value="icelander">Icelander</option>
                <option value="indian">Indian</option>
                <option value="indonesian">Indonesian</option>
                <option value="iranian">Iranian</option>
                <option value="iraqi">Iraqi</option>
                <option value="irish">Irish</option>
                <option value="israeli">Israeli</option>
                <option value="italian">Italian</option>
                <option value="ivorian">Ivorian</option>
                <option value="jamaican">Jamaican</option>
                <option value="japanese">Japanese</option>
                <option value="jordanian">Jordanian</option>
                <option value="kazakhstani">Kazakhstani</option>
                <option value="kenyan">Kenyan</option>
                <option value="kittian and nevisian">Kittian and Nevisian</option>
                <option value="kuwaiti">Kuwaiti</option>
                <option value="kyrgyz">Kyrgyz</option>
                <option value="laotian">Laotian</option>
                <option value="latvian">Latvian</option>
                <option value="lebanese">Lebanese</option>
                <option value="liberian">Liberian</option>
                <option value="libyan">Libyan</option>
                <option value="liechtensteiner">Liechtensteiner</option>
                <option value="lithuanian">Lithuanian</option>
                <option value="luxembourger">Luxembourger</option>
                <option value="macedonian">Macedonian</option>
                <option value="malagasy">Malagasy</option>
                <option value="malawian">Malawian</option>
                <option value="malaysian">Malaysian</option>
                <option value="maldivan">Maldivan</option>
                <option value="malian">Malian</option>
                <option value="maltese">Maltese</option>
                <option value="marshallese">Marshallese</option>
                <option value="mauritanian">Mauritanian</option>
                <option value="mauritian">Mauritian</option>
                <option value="mexican">Mexican</option>
                <option value="micronesian">Micronesian</option>
                <option value="moldovan">Moldovan</option>
                <option value="monacan">Monacan</option>
                <option value="mongolian">Mongolian</option>
                <option value="moroccan">Moroccan</option>
                <option value="mosotho">Mosotho</option>
                <option value="motswana">Motswana</option>
                <option value="mozambican">Mozambican</option>
                <option value="namibian">Namibian</option>
                <option value="nauruan">Nauruan</option>
                <option value="nepalese">Nepalese</option>
                <option value="new zealander">New Zealander</option>
                <option value="ni-vanuatu">Ni-Vanuatu</option>
                <option value="nicaraguan">Nicaraguan</option>
                <option value="nigerien">Nigerien</option>
                <option value="north korean">North Korean</option>
                <option value="northern irish">Northern Irish</option>
                <option value="norwegian">Norwegian</option>
                <option value="omani">Omani</option>
                <option value="pakistani">Pakistani</option>
                <option value="palauan">Palauan</option>
                <option value="panamanian">Panamanian</option>
                <option value="papua new guinean">Papua New Guinean</option>
                <option value="paraguayan">Paraguayan</option>
                <option value="peruvian">Peruvian</option>
                <option value="polish">Polish</option>
                <option value="portuguese">Portuguese</option>
                <option value="qatari">Qatari</option>
                <option value="romanian">Romanian</option>
                <option value="russian">Russian</option>
                <option value="rwandan">Rwandan</option>
                <option value="saint lucian">Saint Lucian</option>
                <option value="salvadoran">Salvadoran</option>
                <option value="samoan">Samoan</option>
                <option value="san marinese">San Marinese</option>
                <option value="sao tomean">Sao Tomean</option>
                <option value="saudi">Saudi</option>
                <option value="scottish">Scottish</option>
                <option value="senegalese">Senegalese</option>
                <option value="serbian">Serbian</option>
                <option value="seychellois">Seychellois</option>
                <option value="sierra leonean">Sierra Leonean</option>
                <option value="singaporean">Singaporean</option>
                <option value="slovakian">Slovakian</option>
                <option value="slovenian">Slovenian</option>
                <option value="solomon islander">Solomon Islander</option>
                <option value="somali">Somali</option>
                <option value="south african">South African</option>
                <option value="south korean">South Korean</option>
                <option value="spanish">Spanish</option>
                <option value="sri lankan">Sri Lankan</option>
                <option value="sudanese">Sudanese</option>
                <option value="surinamer">Surinamer</option>
                <option value="swazi">Swazi</option>
                <option value="swedish">Swedish</option>
                <option value="swiss">Swiss</option>
                <option value="syrian">Syrian</option>
                <option value="taiwanese">Taiwanese</option>
                <option value="tajik">Tajik</option>
                <option value="tanzanian">Tanzanian</option>
                <option value="thai">Thai</option>
                <option value="togolese">Togolese</option>
                <option value="tongan">Tongan</option>
                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                <option value="tunisian">Tunisian</option>
                <option value="turkish">Turkish</option>
                <option value="tuvaluan">Tuvaluan</option>
                <option value="ugandan">Ugandan</option>
                <option value="ukrainian">Ukrainian</option>
                <option value="uruguayan">Uruguayan</option>
                <option value="uzbekistani">Uzbekistani</option>
                <option value="venezuelan">Venezuelan</option>
                <option value="vietnamese">Vietnamese</option>
                <option value="welsh">Welsh</option>
                <option value="yemenite">Yemenite</option>
                <option value="zambian">Zambian</option>
                <option value="zimbabwean">Zimbabwean</option>
            </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            <label class="text-dark" for="capitalCompany">Capital of the company to be created (EURO / US $ / TND):</label>
                <input type="number" name="capitalCompany" id="capitalCompany" value="" class="form-control" placeholder="Your Capital of the company" required="required">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            <label class="text-dark" for="currency">Currency:</label>
                <select name="currency" id="currency" value="" class="form-control" placeholder="Your Currency" required="required">
                    <option value="">-- select Currency --</option>
                    <option value="EURO">EURO</option>
                    <option value="US $">US $</option>
                    <option value="TND">TND</option>
                </select>
            </div>
        </div>

        <hr>
        <h2 class="text-center font-weight-bold text-decoration-underline">Main shareholders (precise resident / non-resident) </h2>
        <div class="add-textbox">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-dark" for="nameShareholders">Name and Surname : </label>
                    <input type="text" name="nameShareholders" class="form-control" placeholder="Name and Surname">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-dark" for="nationalityShareholders">Nationality :</label>
                    <select name="nationalityShareholders" id="nationalityShareholders" value="" class="form-control" placeholder="Your Nationality" required="required">
                        <option value="">-- select one --</option>
                        <option value="afghan">Afghan</option>
                        <option value="albanian">Albanian</option>
                        <option value="algerian">Algerian</option>
                        <option value="american">American</option>
                        <option value="andorran">Andorran</option>
                        <option value="angolan">Angolan</option>
                        <option value="antiguans">Antiguans</option>
                        <option value="argentinean">Argentinean</option>
                        <option value="armenian">Armenian</option>
                        <option value="australian">Australian</option>
                        <option value="austrian">Austrian</option>
                        <option value="azerbaijani">Azerbaijani</option>
                        <option value="bahamian">Bahamian</option>
                        <option value="bahraini">Bahraini</option>
                        <option value="bangladeshi">Bangladeshi</option>
                        <option value="barbadian">Barbadian</option>
                        <option value="barbudans">Barbudans</option>
                        <option value="batswana">Batswana</option>
                        <option value="belarusian">Belarusian</option>
                        <option value="belgian">Belgian</option>
                        <option value="belizean">Belizean</option>
                        <option value="beninese">Beninese</option>
                        <option value="bhutanese">Bhutanese</option>
                        <option value="bolivian">Bolivian</option>
                        <option value="bosnian">Bosnian</option>
                        <option value="brazilian">Brazilian</option>
                        <option value="british">British</option>
                        <option value="bruneian">Bruneian</option>
                        <option value="bulgarian">Bulgarian</option>
                        <option value="burkinabe">Burkinabe</option>
                        <option value="burmese">Burmese</option>
                        <option value="burundian">Burundian</option>
                        <option value="cambodian">Cambodian</option>
                        <option value="cameroonian">Cameroonian</option>
                        <option value="canadian">Canadian</option>
                        <option value="cape verdean">Cape Verdean</option>
                        <option value="central african">Central African</option>
                        <option value="chadian">Chadian</option>
                        <option value="chilean">Chilean</option>
                        <option value="chinese">Chinese</option>
                        <option value="colombian">Colombian</option>
                        <option value="comoran">Comoran</option>
                        <option value="congolese">Congolese</option>
                        <option value="costa rican">Costa Rican</option>
                        <option value="croatian">Croatian</option>
                        <option value="cuban">Cuban</option>
                        <option value="cypriot">Cypriot</option>
                        <option value="czech">Czech</option>
                        <option value="danish">Danish</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="dominican">Dominican</option>
                        <option value="dutch">Dutch</option>
                        <option value="east timorese">East Timorese</option>
                        <option value="ecuadorean">Ecuadorean</option>
                        <option value="egyptian">Egyptian</option>
                        <option value="emirian">Emirian</option>
                        <option value="equatorial guinean">Equatorial Guinean</option>
                        <option value="eritrean">Eritrean</option>
                        <option value="estonian">Estonian</option>
                        <option value="ethiopian">Ethiopian</option>
                        <option value="fijian">Fijian</option>
                        <option value="filipino">Filipino</option>
                        <option value="finnish">Finnish</option>
                        <option value="french">French</option>
                        <option value="gabonese">Gabonese</option>
                        <option value="gambian">Gambian</option>
                        <option value="georgian">Georgian</option>
                        <option value="german">German</option>
                        <option value="ghanaian">Ghanaian</option>
                        <option value="greek">Greek</option>
                        <option value="grenadian">Grenadian</option>
                        <option value="guatemalan">Guatemalan</option>
                        <option value="guinea-bissauan">Guinea-Bissauan</option>
                        <option value="guinean">Guinean</option>
                        <option value="guyanese">Guyanese</option>
                        <option value="haitian">Haitian</option>
                        <option value="herzegovinian">Herzegovinian</option>
                        <option value="honduran">Honduran</option>
                        <option value="hungarian">Hungarian</option>
                        <option value="icelander">Icelander</option>
                        <option value="indian">Indian</option>
                        <option value="indonesian">Indonesian</option>
                        <option value="iranian">Iranian</option>
                        <option value="iraqi">Iraqi</option>
                        <option value="irish">Irish</option>
                        <option value="israeli">Israeli</option>
                        <option value="italian">Italian</option>
                        <option value="ivorian">Ivorian</option>
                        <option value="jamaican">Jamaican</option>
                        <option value="japanese">Japanese</option>
                        <option value="jordanian">Jordanian</option>
                        <option value="kazakhstani">Kazakhstani</option>
                        <option value="kenyan">Kenyan</option>
                        <option value="kittian and nevisian">Kittian and Nevisian</option>
                        <option value="kuwaiti">Kuwaiti</option>
                        <option value="kyrgyz">Kyrgyz</option>
                        <option value="laotian">Laotian</option>
                        <option value="latvian">Latvian</option>
                        <option value="lebanese">Lebanese</option>
                        <option value="liberian">Liberian</option>
                        <option value="libyan">Libyan</option>
                        <option value="liechtensteiner">Liechtensteiner</option>
                        <option value="lithuanian">Lithuanian</option>
                        <option value="luxembourger">Luxembourger</option>
                        <option value="macedonian">Macedonian</option>
                        <option value="malagasy">Malagasy</option>
                        <option value="malawian">Malawian</option>
                        <option value="malaysian">Malaysian</option>
                        <option value="maldivan">Maldivan</option>
                        <option value="malian">Malian</option>
                        <option value="maltese">Maltese</option>
                        <option value="marshallese">Marshallese</option>
                        <option value="mauritanian">Mauritanian</option>
                        <option value="mauritian">Mauritian</option>
                        <option value="mexican">Mexican</option>
                        <option value="micronesian">Micronesian</option>
                        <option value="moldovan">Moldovan</option>
                        <option value="monacan">Monacan</option>
                        <option value="mongolian">Mongolian</option>
                        <option value="moroccan">Moroccan</option>
                        <option value="mosotho">Mosotho</option>
                        <option value="motswana">Motswana</option>
                        <option value="mozambican">Mozambican</option>
                        <option value="namibian">Namibian</option>
                        <option value="nauruan">Nauruan</option>
                        <option value="nepalese">Nepalese</option>
                        <option value="new zealander">New Zealander</option>
                        <option value="ni-vanuatu">Ni-Vanuatu</option>
                        <option value="nicaraguan">Nicaraguan</option>
                        <option value="nigerien">Nigerien</option>
                        <option value="north korean">North Korean</option>
                        <option value="northern irish">Northern Irish</option>
                        <option value="norwegian">Norwegian</option>
                        <option value="omani">Omani</option>
                        <option value="pakistani">Pakistani</option>
                        <option value="palauan">Palauan</option>
                        <option value="panamanian">Panamanian</option>
                        <option value="papua new guinean">Papua New Guinean</option>
                        <option value="paraguayan">Paraguayan</option>
                        <option value="peruvian">Peruvian</option>
                        <option value="polish">Polish</option>
                        <option value="portuguese">Portuguese</option>
                        <option value="qatari">Qatari</option>
                        <option value="romanian">Romanian</option>
                        <option value="russian">Russian</option>
                        <option value="rwandan">Rwandan</option>
                        <option value="saint lucian">Saint Lucian</option>
                        <option value="salvadoran">Salvadoran</option>
                        <option value="samoan">Samoan</option>
                        <option value="san marinese">San Marinese</option>
                        <option value="sao tomean">Sao Tomean</option>
                        <option value="saudi">Saudi</option>
                        <option value="scottish">Scottish</option>
                        <option value="senegalese">Senegalese</option>
                        <option value="serbian">Serbian</option>
                        <option value="seychellois">Seychellois</option>
                        <option value="sierra leonean">Sierra Leonean</option>
                        <option value="singaporean">Singaporean</option>
                        <option value="slovakian">Slovakian</option>
                        <option value="slovenian">Slovenian</option>
                        <option value="solomon islander">Solomon Islander</option>
                        <option value="somali">Somali</option>
                        <option value="south african">South African</option>
                        <option value="south korean">South Korean</option>
                        <option value="spanish">Spanish</option>
                        <option value="sri lankan">Sri Lankan</option>
                        <option value="sudanese">Sudanese</option>
                        <option value="surinamer">Surinamer</option>
                        <option value="swazi">Swazi</option>
                        <option value="swedish">Swedish</option>
                        <option value="swiss">Swiss</option>
                        <option value="syrian">Syrian</option>
                        <option value="taiwanese">Taiwanese</option>
                        <option value="tajik">Tajik</option>
                        <option value="tanzanian">Tanzanian</option>
                        <option value="thai">Thai</option>
                        <option value="togolese">Togolese</option>
                        <option value="tongan">Tongan</option>
                        <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                        <option value="tunisian">Tunisian</option>
                        <option value="turkish">Turkish</option>
                        <option value="tuvaluan">Tuvaluan</option>
                        <option value="ugandan">Ugandan</option>
                        <option value="ukrainian">Ukrainian</option>
                        <option value="uruguayan">Uruguayan</option>
                        <option value="uzbekistani">Uzbekistani</option>
                        <option value="venezuelan">Venezuelan</option>
                        <option value="vietnamese">Vietnamese</option>
                        <option value="welsh">Welsh</option>
                        <option value="yemenite">Yemenite</option>
                        <option value="zambian">Zambian</option>
                        <option value="zimbabwean">Zimbabwean</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-dark" for="subscriptionShareholders">% of subscription  :</label>
                    <div class="input-group">
                        <input type="number"name="subscriptionShareholders" id="subscriptionShareholders" class="form-control w-75" placeholder="subscription">
                        <button class="btn btn-success btn-add-field w-25" type="button">+</button>
                    </div>
                </div>
            </div>
            
        </div>


        <hr>
        <h3 class="text-left font-weight-bold">Requirements (in Sq m): </h3>

        <div class="col-md-4">
            <div class="form-group">
            <label class="text-dark" for="land">Land: </label>
                <input type="text" name="land" id="land" value="" class="form-control" placeholder="Land">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
            <label class="text-dark" for="premises">Premises:</label>
                <input type="text" name="premises" id="premises" value="" class="form-control" placeholder="Premises">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
            <label class="text-dark" for="office">Office:</label>
                <input type="text" name="office" id="office" value="" class="form-control" placeholder="Office">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
            <label class="text-dark" for="constructionArea">Construction area (in Sq m):</label>
                <input type="text" name="constructionArea" id="constructionArea" value="" class="form-control" placeholder="Construction area">
            </div>
        </div>

        <hr>
        <h3 class="text-left font-weight-bold">Construction nature:  </h3>

        <div class="col-md-4">
            <div class="form-group">
            <label class="text-dark" for="permanent">Permanent:</label>
                <input type="text" name="permanent" id="permanent" value="" class="form-control" placeholder="Permanent">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
            <label class="text-dark" for="temporary">Temporary:</label>
                <input type="text" name="temporary" id="temporary" value="" class="form-control" placeholder="Your 2st Proposal">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
            <label class="text-dark" for="mixed">Mixed:</label>
                <input type="text" name="mixed" id="mixed" value="" class="form-control" placeholder="Mixed">
            </div>
        </div>

        <hr>
        <h3 class="text-left font-weight-bold">Number of national jobs to be created: </h3>

        <div class="col-md-4">
            <div class="form-group">
            <label class="text-dark" for="firstYear">1st year:</label>
                <input type="number" name="firstYear" id="firstYear" value="" class="form-control" placeholder="1st year" required="required">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
            <label class="text-dark" for="secondYear">2nd year:</label>
                <input type="number" name="secondYear" id="secondYear" value="" class="form-control" placeholder="2st year" required="required">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
            <label class="text-dark" for="thirdYear">3nd year:</label>
                <input type="number" name="thirdYear" id="thirdYear" value="" class="form-control" placeholder=" 3st year" required="required">
            </div>
        </div>


        <div class="col-12">
            <div class="form-group">
            <label class="text-dark" for="estimatedExport">Estimated export value (in EURO / US$ / TND) :</label>
                <input type="text" name="estimatedExport" id="estimatedExport" value="" class="form-control" placeholder=" Estimated export value (in EURO / US$ / TND) ">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
            <label class="text-dark" for="localAddedValue">Local added value (Tunisian goods and services)::</label>
                <input type="text" name="localAddedValue" id="localAddedValue" value="" class="form-control" placeholder=" Local added value (Tunisian goods and services):">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
            <label class="text-dark" for="originImportedGoods">Origin of imported goods (raw materials or merchandises):</label>
                <input type="text" name="originImportedGoods" id="originImportedGoods" value="" class="form-control" placeholder=" Origin of imported goods (raw materials or merchandises)">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
            <label class="text-dark" for="exportDestination">Export destination (manufactured goods or merchandises):</label>
                <input type="text" name="exportDestination" id="exportDestination" value="" class="form-control" placeholder=" Export destination (manufactured goods or merchandises)">
            </div>
        </div>


        <hr>
        <h2 class="text-center font-weight-bold text-decoration-underline">Investment & financing program (EURO / US $ / TND)</h2>

        <hr>

        <div class="col-md-6">
            <h3 class="text-left font-weight-bold">INVESTMENT</h3>

        
            <div class="form-group">
                <label class="text-dark" for="constructionEquipments">Construction & Equipments :</label>
                <input type="number" name="constructionEquipments" id="constructionEquipments" value="" class="form-control cal_investment" placeholder="Construction & Equipments" required="required">
            </div>

            <div class="form-group">
                <label class="text-dark" for="importedEquipments">Imported equipments :</label>
                <input type="number" name="importedEquipments" id="importedEquipments" value="" class="form-control cal_investment" placeholder="Imported equipments" required="required">
            </div>

            <div class="form-group">
                <label class="text-dark" for="localEquipments">Local equipments :</label>
                <input type="number" name="localEquipments" id="localEquipments" value="" class="form-control cal_investment" placeholder="Local equipments" required="required">
            </div>

            <div class="form-group">
                <label class="text-dark" for="meansTransport">Means of transport :</label>
                <input type="number" name="meansTransport" id="meansTransport" value="" class="form-control cal_investment" placeholder="Means of transport" required="required">
            </div>

            <div class="form-group">
                <label class="text-dark" for="otherCosts">Other costs  :</label>
                <input type="number" name="otherCosts" id="otherCosts" value="" class="form-control cal_investment" placeholder="Other costs " required="required">
            </div>

            <div class="form-group">
                <label class="text-dark" for="workingCapital">Working capital :</label>
                <input type="number" name="workingCapital" id="workingCapital" value="" class="form-control cal_investment" placeholder="Working capital" required="required">
            </div>

            <div class="form-group">
                <label class="text-dark" for="totalInvestment">TOTAL:</label>
                <input type="number" name="totalInvestment" id="totalInvestment" value="" class="form-control total" readonly placeholder="TOTAL INVESTMENT" required="required">
            </div>
        </div>



        <div class="col-md-6">
            <h3 class="text-left font-weight-bold">FINANCING</h3>

        
            <div class="form-group">
                <label class="text-dark" for="capitalFinance">Capital :</label>
                <input type="text" name="capitalFinance" id="capitalFinance" readonly class="form-control cal_finance" placeholder="Capital" required="required">
            </div>

            <div class="form-group">
                <label class="text-dark" for="currentAccountPartners">Current account of partners :</label>
                <input type="number" name="currentAccountPartners" id="currentAccountPartners" value="" class="form-control cal_finance" placeholder="Current account of partners" required="required">
            </div>

            <div class="form-group">
                <label class="text-dark" for="longTermCredit">Long term credit :</label>
                <input type="number" name="longTermCredit" id="longTermCredit" value="" readonly class="form-control cal_finance" placeholder="Long term credit" required="required">
            </div>

            <div class="form-group">
                <label class="text-dark" for="middleTermCredit">Middle term credit :</label>
                <input type="number" name="middleTermCredit" id="middleTermCredit" value="" readonly class="form-control cal_finance" placeholder="Middle term credit" required="required">
            </div>

            <div class="form-group">
                <label class="text-dark" for="shortTermCredit">Short term credit :</label>
                <input type="number" name="shortTermCredit" id="shortTermCredit" value="" readonly class="form-control cal_finance" placeholder="Short term credit" required="required">
            </div>

            <div class="form-group" style="margin-top:102px">
                <label class="text-dark" for="totalFinance">TOTAL:</label>
                <input type="number" name="totalFinance" id="totalFinance" class="form-control total" readonly placeholder="TOTAL FINANCING" required="required">
            </div>
        </div>

        <div class="col-md-12 text-left">
            <p><span class="text-danger">* </span>Total investment and total financing must be equal</p>
        </div>

        <br>
        <br>
        <div class="col-md-12 text-right">
            <button type="submit" id="inputSubmit" value="submit" name="submitBtn" disable class="btn btn-template">Send Form</button>
        </div>
    </div>
</form>


<?php
       // }  

} else {
    // get_template_part('login');
    //wp_redirect( get_page_link(10) );
    //exit;
    cshlg_link_to_login(); 
}

    // //Register variables
    
    // $adddate = $_POST['adddate']
    // $addcontact = $_POST['addcontact']
    // $addfrom = $_POST['addfrom']
    // $addto = $_POST['addto']
    // $addincome = $_POST['addincome']
    // $addpayment = $_POST['adddate']
    // $addsubbie = $_POST['addsubbie']
    // $addclient = $POST['addlient']

    // //connect with Database

    // $host_name = 'xxx.hosting-data.io';
    //     $database = 'xxx';
    //     $user_name = 'xxx';
    //     $password = 'xxx';
    //     $connect = mysql_connect($host_name, $user_name, $password, $database);

    // //Send to database

    // if (mysql_errno()) {
    //     die('<p>Failed to connect to MySQL: '.mysql_error().'</p>');
    // }     else {
    //           $wpdb = $connect->prepare("insert into add_job(adddate, addcontact, addfrom, addto, addincome, addpayment adddriver addcompany)
    //                   values(?, ?, ?, ?, ?, ?, ?, ?,)");
    //           $wpdb->bind_param("ssssiiss",  $adddate, $addcontact, $addfrom, $addto, $addincome, $addpayment, $addsubbie, $addcoclient) ;
    //           $wpdb->execute();
    //           echo "Job Submited"
    //           $wpdb->close();
    //           $connection->close();
    //       }

get_footer();


