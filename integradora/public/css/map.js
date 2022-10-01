function iniciarMap(){
    var direc = {lat:-34.5956145 , long: -58.4431949};
    var map = new google.maps.Map(document.getElementById('map'),{
        zoom: 10,
        center: direc

    });
    var marker = new google.maps.Marker({
        position: direc,
        map: map
    });
}