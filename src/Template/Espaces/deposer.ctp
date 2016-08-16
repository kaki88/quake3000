<?= $this->Form->create(null, ['url' => ['controller' => 'espaces', 'action' => 'enregistrer']]); ?>
<fieldset>
    <legend><?= __('Créer une annonce') ?></legend>
    <?php
     echo $this->Form->input('userid',['label' => 'Id']);
     echo $this->Form->input('type_ad_id', ['options' => $type_ads]);
    echo $this->Form->input('for_sale', array('label' => "A Vendre", 'type' => 'checkbox'));
    echo $this->Form->input('for_rent', array('label' => "A Louer", 'type' => 'checkbox'));
    echo $this->Form->input('price',['label' => 'Prix']);
    echo $this->Form->input('price_info',['label' => 'Complément']);
    echo $this->Form->input('surface',['label' => 'Surface']);
    echo $this->Form->input('is_divisible', array('label' => "Surface divisible", 'type' => 'checkbox'));
    echo $this->Form->input('town_id', ['options' => $city]);
    echo $this->Form->input('description', array('label' => "Description", 'type' => 'textarea','style'=>'width:100%;height:150px'));
    echo $this->Form->input('latitude',['label' => 'Latitude', 'id' => 'latitude', 'type' => '']);
    echo $this->Form->input('longitude',['label' => 'Longitude', 'id' => 'longitude', 'type' => '']);
    ?>
</fieldset>
<?= $this->Form->button(__('Valider')) ?>
<?= $this->Form->end() ?>





<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6Zs1p5MxC9bnpOoJHyKwR6lTta1Q6Qs8&signed_in=true&callback=initMap"></script>

<script type="text/javascript">

    function showResult(result) {
        document.getElementById('latitude').value = result.geometry.location.lat();
        document.getElementById('longitude').value = result.geometry.location.lng();
    }

    function getLatitudeLongitude(callback, address) {
        address = address ;
        geocoder = new google.maps.Geocoder();
        if (geocoder) {
            geocoder.geocode({
                'address': address
            }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    callback(results[0]);
                }
            });
        }
    }
    var button = document.getElementById('city');
    button.addEventListener("change", function () {
        var city = document.getElementById('city').value;
        var address = city;
        getLatitudeLongitude(showResult, address)
    });

</script>