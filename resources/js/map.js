// **  MAP ** //
var map

export function initializeMap(locations) {
  createBaseMapLayer()
  loadLocationIcons(locations)
  loadLocationPopups()
}

function createBaseMapLayer() {
  map = new ol.Map({
    target: 'map',
    layers: [
      new ol.layer.Tile({
        source: new ol.source.OSM(),
      }),
    ],
    view: new ol.View({
      center: [0, 0],
      zoom: 2,
    }),
  })
}

function loadLocationIcons(locations) {
  var features = []

  var iconStyle = new ol.style.Style({
    image: new ol.style.Icon({
      scale: 0.4,
      src: '/storage/images/local-groups/AR_black_logo_100px.png',
    }),
  })

  // Loop over locations array, add new map point based on coordinates
  locations.forEach((location) => {
    var feature = new ol.Feature({
      geometry: new ol.geom.Point(
        ol.proj.fromLonLat([location.lng, location.lat]),
      ),
      name: location.name,
      website: location.website_url,
      facebook: location.facebook_url,
      instagram: location.instagram_url,
      twitter: location.twitter_url,
    })

    feature.setStyle(iconStyle)
    features.push(feature)
  })

  // Create new map layer with coordinate points
  var layer = new ol.layer.Vector({
    source: new ol.source.Vector({
      features: features,
    }),
  })

  // Add map layer to view
  map.addLayer(layer)
}

//** LOCATION POPUPS **//
// Modified code from the following source: https://openlayers.org/en/latest/examples/icon.html
function loadLocationPopups() {
  var element = document.getElementById('popup')

  // Overlay for popup
  var popup = new ol.Overlay({
    element: element,
    positioning: 'bottom-center',
    stopEvent: false,
    offset: [0, -20],
  })
  map.addOverlay(popup)

  var constructPopoverContent = function(feature) {
    var content = `<div><strong>${feature.get('name')}</strong><div>`

    if (feature.get('website')) {
      content += `<a href="${feature.get(
        'website',
      )}" target="_blank"><span class="social-icons mr-2"><i class="fas fa-link"></i></span></a>`
    }

    if (feature.get('facebook')) {
      content += `<a href="${feature.get(
        'facebook',
      )}" target="_blank"><span class="social-icons mr-2"><i class="fab fa-facebook"></i></span></a>`
    }

    if (feature.get('instagram')) {
      content += `<a href="${feature.get(
        'instagram',
      )}" target="_blank"><span class="social-icons mr-2"><i class="fab fa-instagram"></i></span></a></li>`
    }

    if (feature.get('twitter')) {
      content += `<a href="${feature.get(
        'twitter',
      )}" target="_blank"><span class="social-icons mr-2"><i class="fab fa-twitter"></i></span></a></li>`
    }

    content += `</div>`

    return content
  }

  // display popup on click
  map.on('click', function(evt) {
    var feature = map.forEachFeatureAtPixel(evt.pixel, function(feature) {
      return feature
    })

    // if click is on existing point on map
    if (feature) {
      $(element).popover('dispose')
      var coordinates = feature.getGeometry().getCoordinates()
      popup.setPosition(coordinates)
      $(element).popover({
        placement: 'top',
        html: true,
        content: constructPopoverContent(feature),
      })
      $(element).popover('show')
    } else {
      $(element).popover('dispose')
    }
  })
}

window.initializeMap = initializeMap
