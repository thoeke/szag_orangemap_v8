
/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2018 Thorsten Hoeke, PierraaGroup GmbH
 *
 *  All rights reserved
 *
 ***************************************************************/


// initialize the map on the "map" div with a given center and zoom
var orangemap = L.map('orangemap', {
    center: [30.575330,7.102411],
    zoom: 2,
    zoomsliderControl: true
});

//var orangemap = new L.map('orangemap').setView([30.575330,7.102411], 2);

L.tileLayer('https://api.mapbox.com/styles/v1/salzgitterag/ciqawdkbb000te0nhydmf3w2o/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1Ijoic2FsemdpdHRlcmFnIiwiYSI6ImNpZW5jeTR1czAwNHp0Nm0wZTg3NWh1NmEifQ.4q4fmFH1DaqGlMBgxnTfwg', {
        maxZoom: 18,
        attribution: '&copy; <a href="https://www.mapbox.com/map-feedback/">Mapbox</a> &copy;  <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        id: 'mapbox.streets'
}).addTo(orangemap);

var markers = L.markerClusterGroup({
    spiderfyOnMaxZoom: false,
    showCoverageOnHover: false
});

var szagmarker = L.icon({
    iconUrl: 'marker-icon.png',
    iconSize: [20, 32],
    iconAnchor: [10, 32],
    popupAnchor: [0, -35],
});

// Add cluster to map

$( document ).ready(function() {
	updateOM();
});


function updateOM() {
    updateMarkers();
}

function updateMarkers() {
    
    nations = filter_multiselect('snations');
    cities = filter_multiselect('scities');
    businessunits = filter_multiselect('sbusinessunits');
    companies = filter_multiselect('scompanies');
    
    var requestParameter = {
      tx_szagorangemap_szagorangemap : {
        controller: 'Markers',
        action: 'list',
        language: 0,
        snations: nations,
        scities: cities,
        sbusinessunits: businessunits,
        scompanies: companies
      }
    };

   ajaxlink = $('#sz-map_ajaxlink').text();
  // alert(ajaxlink);
   ajaxlink = '/home/json';
    
    var arrnations = new Array; 
    var arrcities = new Array; 
    var arrbusinessunits = new Array; 
    var arrcompanies = new Array; 
     
    $.ajax({
        type:       "POST",
        url:        ajaxlink,
        data:       requestParameter,
        dataType:    "json",

        success:    function(html){
                    markers.clearLayers();
                    $.each(html.content, function(index, value) {
                        
                   //     console.log(index);
                        
                        marker = new L.Marker([value.latitude, value.longitude]);
                        popup = '<b>' + value.title + '</b><br />' + value.adress + '<br />' + value.zipcode + ' ' + value.citytitle + '<br /><a href="http://' + value.website + '" target="_blank">' + value.website;
                        marker.bindPopup(popup);
                        markers.addLayer(marker);
                        
                        arrnations.push(value.nationtitle + '__' + value.nation);   
                        arrcities.push(value.citytitle + '__' + value.city);   
                        arrbusinessunits.push(value.businessunittitle + '__' + value.businessunit);   
                        arrcompanies.push(value.companytitle + '__' + value.company);   
                        
                    });
                    
                    orangemap.addLayer(markers);
                    orangemap.fitBounds(markers.getBounds());
                    
                    var snations = $('#snations').val();
                    $('#snations').empty();
                    $('#snations').append( optionOutput(arrnations, snations) );
                    $("#snations").trigger("chosen:updated");
                    
                    var scities = $('#scities').val();
                    $('#scities').empty();
                    $('#scities').append( optionOutput(arrcities, scities) );
                    $("#scities").trigger("chosen:updated");
                    
                    var sbusinessunits = $('#sbusinessunits').val();
                    $('#sbusinessunits').empty();
                    $('#sbusinessunits').append( optionOutput(arrbusinessunits, sbusinessunits) );
                    $("#sbusinessunits").trigger("chosen:updated");
                    
                    var scompanies = $('#scompanies').val();
                    $('#scompanies').empty();
                    $('#scompanies').append( optionOutput(arrcompanies, scompanies) );
                    $("#scompanies").trigger("chosen:updated");    
                    
        }
    });
}


function onlyUnique(value, index, self) { 
    return self.indexOf(value) === index;
}

function optionOutput(arr, post) {
    
    arr = arr.filter(onlyUnique); // Duplikate entfernen
    arr.sort();                   // Array sortieren
    var output = '';
    var select = '-1';
    
    for (var i = 0, len = arr.length; i < len; i++) {
        
        var val = arr[i].split('__');
        if (post != null) {
       //     console.log(post);
            var select = post.indexOf(val[1]);
        //    console.log(select);
        } 
        
        if (select != '-1') {
            output += '<option selected="selected" value="' + val[1] + '">'+val[0]+'</option>';
        }
        else {
            output += '<option value="' + val[1] + '">'+val[0]+'</option>';
        }
    }
    
    return output;
    
}

function filter_multiselect(filter) {

    var object = {};
    var arr = $('#' + filter).val();
    console.log(arr);
    if (arr && arr.length) {

        for (var i = 0; i < arr.length; ++i) {
          object[i] = arr[i];
          
        }

        return object;
        
    }
        
}



